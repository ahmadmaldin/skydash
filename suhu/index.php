<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="refresh" content="10" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>ESP32</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/bootstrap-weather.min.css" />
</head>

<body>

  <?php
  include 'config/database.php';

  date_default_timezone_set('Asia/Jakarta');
  $ruangan = "Ruang Sekretariat";
  $jam = date('H:i:s');

  $query = mysqli_query($db, "SELECT * FROM suhu ORDER BY id DESC LIMIT 1");
  while ($data = mysqli_fetch_array($query)) {
  ?>

    <!-- Start your project here-->
    <section class="vh-100" style="background-color: #058cad;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-8 col-lg-6 col-xl-6">
            <div class="card" style="color: #4B515D; border-radius: 15px;">
              <div class="card-header p-4">
                <h4 class="flex-grow-1 text-center">
                  Monitor Suhu Realtime </h4>
              </div>
              <div class="card-body p-4">
                <div class="d-flex flex-column text-center mt-0 mb-0">
                  <h2 class="flex-grow-1">
                    <?php echo $ruangan; ?></h2>
                  <p><i class="fas fa-calendar-check"></i> <i class="fas fa-clock"></i> <?= $data['timestamp'] ?></p>
                  <hr>
                  <h7><i class="fas fa-temperature-high"></i> Suhu ruangan</h7>
                  <h6 class="display-4 mb-0 font-weight-bold" style="color: #1C2331;">
                    <php echo $suhu; ?> <?= $data['temperature'] ?> °C
                  </h6>
                  <p><i class="fas fa-cloud"></i> Kelembaban : <b><?= $data['humidity'] ?>% </b> </p>
                </div>
              </div>
              <div class="card-footer p-2">
                <center>Demi Nidia &#128557;</center>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- End your project here-->

  <?php
  }
  ?>

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>