<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($db, "SELECT * FROM ruang WHERE id_ruang='$id'") or die('Query Error : ' . mysqli_error($db));
    while ($data = mysqli_fetch_assoc($query)) {
        $id = $data['id_ruang'];
        $nama_ruang = $data['nama_ruang']; 
        $luas = $data['luas'];
        $status = $data['status'];
    }
}
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
                        <h4 class="card-title">Edit Data Ruang</h4>
                        <form class="forms-sample" method="POST" action="?page=ruang-update" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label for="id">ID Ruang</label>
                                <input type="text" class="form-control" id="id" name="id" value="<?php echo $id; ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label for="nama_ruang">Nama Ruang</label>
                                <input type="text" class="form-control" id="nama_ruang" name="nama_ruang" value="<?php echo $nama_ruang; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="luas">Luas</label>
                                <input class="form-control" id="luas" name="luas" autocomplete="off" value="<?php echo $luas; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="<?php echo $status; ?>"><?php echo $status; ?></option>
                                    <option value="terpakai">Terpakai</option>
                                    <option value="tidak terpakai">Tidak Terpakai</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <div>
                                    <input type="submit" class="btn btn-primary" name="update" value="Update">
                                    <a href="?page=ruang-tampil" class="btn btn-light">Kembali</a>
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
