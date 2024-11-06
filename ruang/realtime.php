<br>
<center>
    <?php

    $id = $_GET['id'];
    $jumlah_record = mysqli_query($db, "SELECT * FROM suhu where id_ruang = $id") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
    $jumlah  = mysqli_num_rows($jumlah_record);

    if ($jumlah != 0) {
        include "realtime-detail.php";
    } else {
        echo "<h3>Mohon maaf,<br>Ruangan ini belum terpasang sensor</h3> ";
        echo "<a href='?page=ruang-tampil' class='btn btn-primary btn-sm'>Kembali</a>";
    }
    ?>


</center>
<br>