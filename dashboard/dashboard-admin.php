<?php
include "isi-dashboard-admin.php";
?>

<h4><?php echo $ucapan . ", " . $usernames ?></h4>
<hr>

<div class="row">

    <!-- Card untuk Jumlah User -->
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body text-center">
                <h1 class="text-primary"><b><?php echo $jum_user; ?></b></h1>
                <p class="font-weight-bold">JUMLAH USER</p>
            </div>
        </div>
    </div>

    <!-- Card untuk Jumlah Pegawai -->
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body text-center">
                <h1 class="text-primary"><b><?php echo $jum_pegawai; ?></b></h1>
                <p class="font-weight-bold">JUMLAH PEGAWAI</p>
            </div>
        </div>
    </div>

    <?php
    // Logika validasi level user
    if ($data['level'] == "User") {
        $_SESSION['id'] = $id;
        $_SESSION['level'] = "User";
        header("location:index.php");
    } else {
        // Tidak ada sesi atau tidak memenuhi syarat
    }
    ?>
</div>


