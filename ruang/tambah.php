<div class="main-panel">        
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Input Data Ruang</h4>
                        <p class="card-description">
                            Silakan masukkan data ruangan dengan lengkap
                        </p>
                        <form class="forms-sample" action="?page=ruang-simpan" method="post">
                            <div class="form-group">
                                <label for="id_ruang">ID</label>
                                <input type="text" class="form-control" name="id_ruang" id="id_ruang" autocomplete="off" required>
                            </div>

                            <div class="form-group">
                                <label for="nama_ruang">Nama Ruang</label>
                                <input type="text" class="form-control" name="nama_ruang" id="nama_ruang" autocomplete="off" required>
                            </div>

                            <div class="form-group">
                                <label for="luas">Luas</label>
                                <input type="text" class="form-control" name="luas" id="luas" autocomplete="off" required>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" name="status" id="status" required>
                                    <option value="">Pilih Status</option>
                                    <option value="terpakai">Terpakai</option>
                                    <option value="Tidak terpakai">Tidak Terpakai</option>
                                </select>
                            </div>

                            <button type="submit" name="simpan" class="btn btn-primary mr-2">Simpan</button>
                            <a href="?page=ruang-tampil" class="btn btn-light">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
