<?php
// memanggil file koneksi.php untuk melakukan koneksi database
require_once 'config/database.php';

// membuat variabel untuk menampung data dari form
    $id = $_POST['id'];
	$nama_ruang = $_POST['nama_ruang']; 
	$luas      = $_POST['luas'];
	$status     =$_POST[ 'status'];

    // jalankan query UPDATE berdasarkan id yang ruangnya kita edit
    $query  = "UPDATE ruang SET nama_ruang = '$nama_ruang',luas = '$luas',status = '$status'";
    $query .= "WHERE id_ruang = '$id'";
    $result = mysqli_query($db, $query);
    // periska query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($db) .
            " - " . mysqli_error($db));
    } else {
        echo "<script>window.location='?page=ruang-tampil&alert=3';</script>";
    }

