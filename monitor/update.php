<?php
// memanggil file koneksi.php untuk melakukan koneksi database
require_once 'config/database.php';

// membuat variabel untuk menampung data dari form
$ids                = $_POST['id'];
$tanggal            = $_POST['tanggal']; 
$waktu              = $_POST['waktu'];
$suhu               = $_POST['suhu'];
$kelembaban         = $_POST['kelembaban'];
	
   

    // jalankan query UPDATE berdasarkan id yang alatnya kita edit
    $query  = "UPDATE monitor SET id = '$ids', tanggal = '$tanggal', waktu = '$waktu', suhu = '$suhu', kelembaban = '$kelembaban'";
    $query .= "WHERE id = '$ids'";
    $result = mysqli_query($db, $query);
    // periska query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($db) .
            " - " . mysqli_error($db));
    } else {
        echo "<script>window.location='?page=monitor-tampil&alert=3';</script>";
    }

