<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Cuaca</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f4f7;
        }

        /* Container Utama */
        .container {
            display: flex;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        /* Setiap Kotak (Suhu & Kelembaban) */
        .box {
            width: 150px;
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 1.5em;
            text-align: center;
            padding: 20px;
        }

        /* Warna Latar Belakang untuk Setiap Kotak */
        .suhu {
            background-color: #0056b3;
        }

        .kelembaban {
            background-color: #007bff;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="box suhu">
            <p>Suhu: 25°C</p>
        </div>
        <div class="box kelembaban">
            <p>Kelembaban: 60%</p>
        </div>
    </div>

</body>
</html>
