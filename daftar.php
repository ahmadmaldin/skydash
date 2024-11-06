<!DOCTYPE html>
<html lang="en">

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

<body>
<?php
    require_once "config/database.php";

    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "2") {
            echo "<div class='pesan'>Pendaftaran Akun Gagal</div>";
        } else if ($_GET['pesan'] == "logindulu") {
            echo "<div class='pesan'>Silahkan Login dulu !</div>";
        }
    }
    ?>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo.svg" alt="logo">
              </div>
              <h4>Daftar?</h4>
              <form class="pt-3">
                <div class="form-group">
                <P><input type="text" name="username" class="form_login" placeholder="Masukan Username" required="required"></P>
                </div>
                <div class="form-group">
                <p><input type="password" name="password" class="form_login" placeholder="Masukkan Password" required="required"></p>

                <p><input type="hidden" name="level" class="form_login" placeholder="" value="User" required="required"></P>

                </div>
                <div class="form-group">
                <p><input type="number" name="nis" class="form_login" placeholder="Masukan Nomor Induk Siswa" required="required"></p>
                </div>
                <div class="mt-3">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="index.php">Daftar</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                <p>Sudah memiliki akun?<a href="login.php">Login</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
