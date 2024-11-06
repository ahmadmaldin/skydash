<?php
// Panggil koneksi database
require_once "config/database.php";
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Simpati</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
if (isset($_POST['simpan'])) {
    $id            = $_POST['nis'];
    $username      = mysqli_real_escape_string($db, trim($_POST['username']));
    $password      = mysqli_real_escape_string($db, trim($_POST['password']));
    $level         = $_POST['level'];
    $nis           = $_POST['nis'];

    // perintah query untuk menyimpan data ke tabel user
    $query = mysqli_query($db, "INSERT INTO user (id, username, password, level, nis) VALUES('$id','$username', '$password', '$level', '$nis')");

    // cek hasil query
    if ($query) {
        // jika berhasil tampilkan pesan berhasil insert data
        header('location:login.php?pesan=3');
    } else {
        // jika gagal tampilkan pesan kesalahan
        header('location:daftar.php?pesan=2');
    }
}
