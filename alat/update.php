<?php
// memanggil file koneksi.php untuk melakukan koneksi database
require_once 'config/database.php';

// membuat variabel untuk menampung data dari form
    $id = $_POST['id'];
	$nama_alat = $_POST['nama_alat']; 
	$kategori     = $_POST['kategori'];
	$tipe     = $_POST['tipe'];
	$no_seri    = $_POST['no_seri'];
	$kelas     = $_POST['kelas'];
	$kapasitas  = $_POST['kapasitas'];
	$ketelusuran= $_POST['ketelusuran'];
	$jumlah      = $_POST['jumlah'];
	$status     =$_POST[ 'status'];
   

    // jalankan query UPDATE berdasarkan id yang alatnya kita edit
    $query  = "UPDATE alat SET nama_alat = '$nama_alat', kategori = '$kategori', tipe = '$tipe', no_seri = '$no_seri', kapasitas = '$kapasitas',ketelusuran = '$ketelusuran',jumlah = '$jumlah',status = '$status'";
    $query .= "WHERE id = '$id'";
    $result = mysqli_query($db, $query);
    // periska query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($db) .
            " - " . mysqli_error($db));
    } else {
        echo "<script>window.location='?page=alat-tampil&alert=3';</script>";
    }

