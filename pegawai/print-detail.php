<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    <center>DETAIL DATA PEGAWAI</center>
                </h4>
                <p class="card-description">
                    Informasi lengkap tentang pegawai
                </p>

                <?php
                if (isset($_GET['id'])) {
                    $nis   = $_GET['id'];
                    $query = mysqli_query($db, "SELECT * FROM pegawai WHERE nis='$nis'") or die('Query Error : ' . mysqli_error($db));
                    while ($data  = mysqli_fetch_assoc($query)) {
                        $nis     = $data['nis'];
                        $nama    = $data['nama'];
                        $jabatan = $data['jabatan'];
                        $telp    = $data['telp'];
                        $email   = $data['email'];
                        $foto    = $data['foto'];
                    }
                }
                ?>

                <ul class="list-group">
                    <li class="list-group-item">NIS : <b><?php echo $nis; ?></b></li>
                    <li class="list-group-item">Nama : <b><?php echo $nama; ?></b></li>
                    <li class="list-group-item">Jabatan : <b><?php echo $jabatan; ?></b></li>
                    <li class="list-group-item">No. Telp : <b><?php echo $telp; ?></b></li>
                    <li class="list-group-item">Email : <b><?php echo $email; ?></b></li>
                    <li class="list-group-item text-center">
                        <?php echo "<img src='pegawai/gambar/$foto' width='auto' height='200' class='img-rounded' alt='Cinque Terre'>"; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="form-group mt-3">
                    <a href="?page=pegawai-tampil" class="btn btn-primary print">Kembali</a>
                </div>
<script>
    window.print();
</script>
