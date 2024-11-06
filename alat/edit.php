<?php
if (isset($_GET['id'])) {
    $id   = $_GET['id'];
    $query = mysqli_query($db, "SELECT * FROM alat WHERE id='$id'") or die('Query Error : ' . mysqli_error($db));
    while ($data  = mysqli_fetch_assoc($query)) {
        $id                         = $data['id'];
        $nama_alat                  = $data['nama_alat']; 
        $tipe                       = $data['tipe'];
        $no_seri                    = $data['no_seri'];
        $kelas                      = $data['kelas'];
        $kapasitas                  = $data['kapasitas'];
        $ketelusuran                = $data['ketelusuran'];
        $jumlah                     = $data['jumlah'];
        $status                     = $data['status'];
    }
}
?>

<!-- Menghapus pembatas utama agar form memenuhi layar -->
<div class="content-wrapper p-0">
    <div class="row">
        <div class="col-12"> <!-- Menggunakan col-12 agar form lebar penuh -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Alat</h4>
                    <p class="card-description">Silakan perbarui informasi alat di bawah ini.</p>
                    <form class="forms-sample" method="POST" action="?page=alat-update" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Alat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="nama_alat" value="<?php echo $nama_alat; ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional form fields -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kategori</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="kategori" required>
                                            <option value="">Pilih Kategori</option>
                                            <option value="massa">massa</option>
                                            <option value="volume">volume</option>
                                            <option value="dimensi">dimensi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tipe</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="tipe" value="<?php echo $tipe; ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No Seri</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="no_seri" value="<?php echo $no_seri; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kelas</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="kelas" value="<?php echo $kelas; ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kapasitas</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="kapasitas" value="<?php echo $kapasitas; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Ketelusuran</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="ketelusuran" value="<?php echo $ketelusuran; ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jumlah</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="jumlah" value="<?php echo $jumlah; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="status" required>
                                            <option value="">Pilih Status</option>
                                            <option value="berlaku">berlaku</option>
                                            <option value="tidak berlaku">tidak berlaku</option>
                                            <option value="rusak">rusak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2" name="update">Update</button>
                        <a href="?page=alat-tampil" class="btn btn-light">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
