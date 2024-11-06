<?php
// memanggil file koneksi.php untuk melakukan koneksi database
require_once 'config/database.php';

// membuat variabel untuk menampung data dari form
    $idk = $_POST['id'];
	$id_alat = $_POST['id alat']; 
	$id_pegawai     = $_POST['id pegawai'];
	$tanggal_kalibrasi     = $_POST['tangal kalibrasi'];
	$durasi    = $_POST['durasi'];
	
   

    // jalankan query UPDATE berdasarkan id yang alatnya kita edit
    $query  = "UPDATE kalibrasi SET id_alat = '$id_alat', id_pegawai = '$id_pegawai', tanggal_kalibrasi = '$tanggal_kalibrasi', durasi = '$durasi'";
    $query .= "WHERE id = '$idk'";
    $result = mysqli_query($db, $query);
    // periska query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($db) .
            " - " . mysqli_error($db));
    } else {
        echo "<script>window.location='?page=kalibrasi-tampil&alert=3';</script>";
    }

