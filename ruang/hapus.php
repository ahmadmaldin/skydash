<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_GET['id'])) {

    $id_ruang = $_GET['id'];

    // perintah query untuk menghapus data pada tabel
    $query = mysqli_query($db, "DELETE FROM ruang WHERE id_ruang='$id_ruang'");

    // cek hasil query
    if ($query) {
        // jika berhasil tampilkan pesan berhasil delete data
        header('location:?page=ruang-tampil&alert=4');
    } else {
        // jika gagal tampilkan pesan kesalahan
        header('location:?page=ruang-tampil&alert=1');
    }
}
