<?php
include 'config/database.php';
date_default_timezone_set('Asia/Jakarta');
$ruangan = "Ruang Sekretariat";
$jam = date('H:i:s');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($db, "SELECT suhu.*, ruang.nama_ruang FROM suhu JOIN ruang ON ruang.id_ruang = suhu.id_ruang WHERE suhu.id_ruang='$id'") or die('Query Error : ' . mysqli_error($db));
    while ($data = mysqli_fetch_assoc($query)) {
        $temperature = $data['temperature'];
        $humidity = $data['humidity'];
        $timestamp = $data['timestamp'];
        $id_ruang = $data['id_ruang'];
        $nama_ruang = $data['nama_ruang'];
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="refresh" content="10" />
</head>

<body>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <br>
                            <h2><?php echo $nama_ruang; ?></h2>
                            <h6> <i class="mdi mdi-calendar"></i> <?= $timestamp ?> </h6>

                            <hr>
                            <h1><?= $temperature ?> °C</h1>
                            <h4 class="card-title">Kelembaban <?= $humidity ?>%</h4>

                            <p><a href="?page=ruang-tampil" class="btn btn-primary btn-sm">Kembali</a>
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>