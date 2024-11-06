<?php
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="id">

<body>

<div class="main-panel">        
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Input Data Monitor</h4>
                        <form class="forms-sample" action="?page=monitor-simpan" method="post">
                            <div class="form-group">
                                <label for="idRuang">Id Ruang</label>
                                <input type="text" class="form-control" id="idRuang" name="id_ruang" autocomplete="off" value="<?php echo $id; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" autocomplete="off" required>
                            </div>

                            <div class="form-group">
                                <label for="waktu">Waktu</label>
                                <input type="time" class="form-control" id="waktu" name="waktu" autocomplete="off" required>
                            </div>

                            <div class="form-group">
                                <label for="suhu">Suhu</label>
                                <input type="text" class="form-control" id="suhu" name="suhu" autocomplete="off" required>
                            </div>

                            <div class="form-group">
                                <label for="kelembaban">Kelembaban</label>
                                <input type="text" class="form-control" id="kelembaban" name="kelembaban" autocomplete="off" required>
                            </div>

                            <hr />
                            <div class="form-group">
                                <div>
                                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary mr-2">
                                    <a href="?page=ruang-tampil" class="btn btn-light">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div> <!-- /.card-body -->
                </div> <!-- /.card -->
            </div> <!-- /.col -->
        </div> <!-- /.row -->
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
