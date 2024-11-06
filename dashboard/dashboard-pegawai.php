<?php
include "isi-dashboard-pegawai.php";
?>

<h4><?php echo $ucapan . ", " . $usernames ?></h4>
<hr>

<div class="row">
    <!-- Kotak Jumlah Alat -->
    <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body text-center">
                <h1 class="text-primary display-3"><b><?php echo $jum_alat; ?></b></h1>
                <p class="font-weight-bold">JUMLAH ALAT</p>
            </div>
        </div>
    </div>

    <!-- Kotak Jumlah Ruang -->
    <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body text-center">
                <h1 class="text-primary display-3"><b><?php echo $jum_ruang; ?></b></h1>
                <p class="font-weight-bold">JUMLAH RUANG</p>
            </div>
        </div>
    </div>

    <!-- Kotak Jumlah Data Kalibrasi -->
    <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body text-center">
                <h1 class="text-primary display-3"><b><?php echo $jum_kalibrasi; ?></b></h1>
                <p class="font-weight-bold">JUMLAH DATA KALIBRASI</p>
            </div>
        </div>
    </div>
</div>


