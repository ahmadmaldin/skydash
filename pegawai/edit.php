<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Data Pegawai</h4>
                <p class="card-description">Formulir untuk memperbarui data pegawai</p>

                <?php
                if (isset($_GET['id'])) {
                    $nis   = $_GET['id'];
                    $query = mysqli_query($db, "SELECT * FROM pegawai WHERE nis='$nis'") or die('Query Error : ' . mysqli_error($db));
                    while ($data  = mysqli_fetch_assoc($query)) {
                        $nis      = $data['nis'];
                        $nama     = $data['nama'];
                        $jabatan  = $data['jabatan'];
                        $telp     = $data['telp'];
                        $email    = $data['email'];
                        $foto     = $data['foto'];
                    }
                }
                ?>

                <form class="forms-sample" method="POST" action="?page=pegawai-update" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">NIS</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nis" value="<?php echo $nis; ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jabatan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="jabatan" required>
                                <option value="<?php echo $jabatan; ?>"><?php echo $jabatan; ?></option>
                                <option value="Kepala UPTD">Kepala UPTD</option>
                                <option value="Kasubag">Kasubag</option>
                                <option value="Penera">Penera</option>
                                <option value="Pengawas">Pengawas</option>
                                <option value="Karyawan">Karyawan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">No Telp</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="telp" value="<?php echo $telp; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Foto</label>
                        <div class="col-sm-9">
                            <div class="text-center mb-3">
                                <?php echo "<img src='pegawai/gambar/$foto' width='auto' height='200' class='img-rounded' alt='$foto'>"; ?>
                            </div>
                            <input type="file" class="form-control" name="foto">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2" name="update">Update</button>
                    <a href="?page=pegawai-tampil" class="btn btn-light">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
