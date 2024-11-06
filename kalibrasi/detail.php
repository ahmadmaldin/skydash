<div class="row">
    <!-- Detail Data Kalibrasi Card -->
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Detail Data Kalibrasi</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tbody>
                            <?php
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $query = mysqli_query($db, "SELECT * FROM kalibrasi WHERE idk='$id'") or die('Query Error : ' . mysqli_error($db));
                                while ($data = mysqli_fetch_assoc($query)) {
                                    $idk = $data['idk'];
                                    $id_alat = $data['id_alat'];
                                    $id_pegawai = $data['id_pegawai'];
                                    $tanggal_kalibrasi = $data['tanggal_kalibrasi'];
                                    $durasi = $data['durasi'];
                                }
                            }
                            ?>
                            <tr>
                                <td><b>Id:</b></td>
                                <td><?php echo $idk; ?></td>
                            </tr>
                            <tr>
                                <td><b>Id Alat:</b></td>
                                <td><?php echo $id_alat; ?></td>
                            </tr>
                            <tr>
                                <td><b>Id Pegawai:</b></td>
                                <td><?php echo $id_pegawai; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Kalibrasi:</b></td>
                                <td><?php echo $tanggal_kalibrasi; ?></td>
                            </tr>
                            <tr>
                                <td><b>Durasi:</b></td>
                                <td><?php echo $durasi; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group mt-4">
                    <a href="?page=kalibrasi-tampil" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>


