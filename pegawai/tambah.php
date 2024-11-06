<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Input Data Pegawai</h4>
                <p class="card-description">
                    Silakan masukkan informasi pegawai di bawah ini.
                </p>
                <form class="form-sample" action="?page=pegawai-simpan" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">NIP</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nis" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jabatan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="jabatan" required>
                                        <option value="">Pilih Jabatan</option>
                                        <option value="Kepala UPTD">Kepala UPTD</option>
                                        <option value="Kasubag">Kasubag</option>
                                        <option value="Penera">Penera</option>
                                        <option value="Pengawas">Pengawas</option>
                                        <option value="Karyawan">Karyawan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Telp</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="telp" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Foto</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="foto" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" name="" value="Simpan" class="btn btn-primary">
                            <a href="?page=pegawai-tampil" class="btn btn-default btn-reset">Batal</a>
                        </div>
                    </div>
                </form>
            </div> <!-- /.panel-body -->
        </div> <!-- /.panel -->
    </div> <!-- /.col -->
</div> <!-- /.row -->
