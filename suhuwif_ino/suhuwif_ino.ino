#include <WiFi.h>
#include <HTTPClient.h>
#include <DHT.h>

// Pengaturan WiFi
const char* ssid = "SMKS AL MAMUN";    // Ganti dengan nama WiFi Anda
const char* password = "4lmamun@SMD";  // Ganti dengan password WiFi Anda

// Pengaturan DHT
#define DHTPIN 26         // Pin data DHT11 terhubung ke GPIO 4
#define DHTTYPE DHT11    // Tipe sensor DHT11
DHT dht(DHTPIN, DHTTYPE);

void setup() {
  Serial.begin(115200);
  dht.begin();

  // Menghubungkan ke WiFi
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("\nTersambung ke WiFi");
}

void loop() {
  // Membaca suhu dan kelembaban
  float suhu = dht.readTemperature();
  float kelembaban = dht.readHumidity();

  if (isnan(suhu) || isnan(kelembaban)) {
    Serial.println("Gagal membaca dari sensor DHT!");
    return;
  }

  // Menampilkan data ke Serial Monitor
  Serial.print("Suhu: ");
  Serial.print(suhu);
  Serial.print(" C, Kelembaban: ");
  Serial.print(kelembaban);
  Serial.println(" %");

  // Kirim data ke server jika terhubung ke WiFi
  if (WiFi.status() == WL_CONNECTED) {
    HTTPClient http;

    // URL server PHP
    String serverURL = "http://192.168.1.67:8080/esp32/save_data.php?temperature=" + String(suhu) + "&humidity=" + String(kelembaban);

    http.begin(serverURL);
    int httpResponseCode = http.GET();  // Mengirimkan data

    if (httpResponseCode > 0) {
      String response = http.getString();  // Respons dari server
      Serial.println(httpResponseCode);
      Serial.println(response);
    } else {
      Serial.print("Error pada pengiriman data: ");
      Serial.println(httpResponseCode);
    }

    http.end(); // Mengakhiri koneksi
  }

  delay(10000); // Kirim data setiap 10 detik
}
