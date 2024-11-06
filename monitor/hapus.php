<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_GET['ids'])) {
    $ids = $_GET['ids'];

    // perintah query untuk menghapus data pada tabel
    $query = mysqli_query($db, "DELETE FROM monitor WHERE ids='$ids'");

    // cek hasil query
    if ($query) {
        // jika berhasil tampilkan pesan berhasil delete data
        header('location:?page=ruang-tampil');
    } else {
        // jika gagal tampilkan pesan kesalahan
        header('location:?page=ruang-tampil');
    }
}
