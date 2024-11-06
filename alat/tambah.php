<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Input Data Alat</h4>
                <form class="form-sample" action="?page=alat-simpan" method="post">
                    <p class="card-description">
                        Informasi Alat
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Id</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="id" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Alat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_alat" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kategori</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="kategori" required>
                                        <option value=""></option>
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
                                    <input type="text" class="form-control" name="tipe" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No. Seri</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="no_seri" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kelas</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="kelas" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kapasitas</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="kapasitas" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Ketelusuran</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="ketelusuran" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jumlah</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="jumlah" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="status" required>
                                        <option value=""></option>
                                        <option value="Berlaku">Berlaku</option>
                                        <option value="Tidak Berlaku">Tidak Berlaku</option>
                                        <option value="Rusak">Rusak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Periode Kalibrasi</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="periode_kalibrasis" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12 text-right">
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                            <a href="?page=alat-tampil" class="btn btn-light">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
