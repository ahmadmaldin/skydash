<?php
$id = $_GET['id'];
?>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="page-header">
                    <h4>
                        <i class="glyphicon glyphicon-edit"></i>
                        Input Data Kalibrasi
                    </h4>
                </div> <!-- /.page-header -->

                <form class="form-horizontal" action="?page=kalibrasi-simpan" method="post">
                    <div class="form-group">
                        <label class="control-label">Id Alat</label>
                        <input type="text" class="form-control" name="id_alat" autocomplete="off" value="<?php echo $id; ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Id Pegawai</label>
                        <input type="text" class="form-control" name="id_pegawai" autocomplete="off" value="<?php echo $_SESSION['id']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Tanggal Kalibrasi</label>
                        <input type="date" class="form-control" name="tanggal_kalibrasi" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Durasi</label>
                        <input type="text" class="form-control" name="durasi" autocomplete="off" required>
                    </div>

                    <hr />
                    <div class="form-group">
                        <div>
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                            <a href="?page=kalibrasi-tampil" class="btn btn-default btn-reset">Batal</a>
                        </div>
                    </div>
                </form>
            </div> <!-- /.card-body -->
        </div> <!-- /.card -->
    </div> <!-- /.col -->
</div> <!-- /.row -->
