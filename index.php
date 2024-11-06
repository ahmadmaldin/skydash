<?php
require_once "config/database.php"; // Memanggil file koneksi dengan database
?>


<head>
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href="images/favicon.png" />  
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">

  <style>
    @media print {
      .print {
        display: none;
      }
    }
  </style>
</head>
<body>
<?php
  session_start();

  // jika tidak ada level yang ditemukan pada sesi login, maka akan diarahkan ke halaman login.php dengan tambahan pesan gagal.
  // fitur ini digunakan agar yang belum login tidak dapat masuk ke dalam aplikasi.
  if ($_SESSION['level'] == "") {
    header("location:login.php?pesan=gagal");
  }
  ?>

  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/logo.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>


        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">


      <nav class="sidebar sidebar-offcanvas" id="sidebar">

    <?php
    if ($_SESSION['level'] == "Admin") {
      include 'menu/menu-admin.php'; // Jika level pengguna yang login @Admin, maka akan memanggil file menu-admin.php yang terdapat pada folder menu.

    } else if ($_SESSION['level'] == "Pegawai") {
      include 'menu/menu-pegawai.php'; // Jika level pengguna yang login @Pegawai, maka akan memanggil file menu-admin.php yang terdapat pada folder menu.
    }
    ?>

      </nav>

      <div class="main-panel">
        <div class="content-wrapper">
        <?php
    if ($_SESSION['level'] == "Admin") {
      include 'routes/admin-routes.php'; // jika level pengguna yang login @Admin, maka akan dipanggil file admin-routes.php yang berada pada folder routes.

    } else if ($_SESSION['level'] == "Pegawai") {
      include 'routes/pegawai-routes.php'; // jika level pengguna yang login @Pegawai, maka akan dipanggil file pegawai-routes.php yang berada pada folder routes.

    } else if ($_SESSION['level'] == "") {
      include 'routes/other.php'; // jika level pengguna yang login bukan siapa-siapa, maka akan dipanggil file other.php
    }
    ?>
        </div>
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Created by <a href="https://www.justintanlol.com/" target="_blank">N2IQ</a></span> 
          </div>
        </footer> 
      </div>
    </div>   
  </div>

  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
</body>

</html>

