<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Simpati</title>
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo.svg" alt="logo">
              </div>
              <p class="tulisan_login"> <B>Login simpati</B></p>
              
              <form form action="cek_login.php" method="post"class="pt-3">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg"  name="id"id="exampleInputEmail1" placeholder="Id">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3"> 
                    <center><input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="MASUK">

                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">

                <div class="text-center mt-4 font-weight-light">
                  belum memiliki akun? <a href="daftar.php" class="text-primary">Daftar</a>
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
