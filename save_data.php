<?php
// Pengaturan koneksi ke database
$servername = "localhost";
$username = "root"; // Sesuaikan dengan username database Anda
$password = ""; // Sesuaikan dengan password database Anda
$dbname = "simpati"; // Nama database yang Anda buat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memeriksa apakah data dikirim melalui metode GET
if (isset($_GET['temperature']) && isset($_GET['humidity'])) {
    $id_ruang = "9";
    $temperature = $_GET['temperature'];
    $humidity = $_GET['humidity'];

    // Menyimpan data ke database
    $sql = "INSERT INTO suhu (id_ruang, temperature, humidity) VALUES ('$id_ruang','$temperature', '$humidity')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Data tidak lengkap";
}

// Menutup koneksi
$conn->close();
