<?php
if (isset($_GET['id'])) {
    $idk   = $_GET['id'];
    $query = mysqli_query($db, "SELECT * FROM kalibrasi WHERE idk='$id'") or die('Query Error : ' . mysqli_error($db));
    while ($data  = mysqli_fetch_assoc($query)) {
       
        $idk                = $data['id'];
        $id_alat            = $data['id alat']; 
        $id_pegawai         = $data['id pegawai'];
        $tanggal_kalibrasi  = $data['tanggal kalibrasi'];
        $durasi             = $data['durasi'];
        
        


    }
}
?>

<div class="row">
    <div class="col-md-12">
        <br>
        <form class="form-horizontal" method="POST" action="?page=alat-update" enctype="multipart/form-data">

            <div class="form-group">
                <label class="col-sm-2 control-label">Id</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="id" value="<?php echo $idk; ?>" readonly>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Id Alat</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="Id Alat" value="<?php echo $id_alat; ?>" Required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Id Pegawai</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="Id Pegawai" autocomplete="off" value="<?php echo $id_pegawai; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal Kalibrasi</label>
                <div class="col-sm-2">
                    <input class="form-control" name="Tanggal Kalibrasi" autocomplete="off" value="<?php echo $tanggal_kalibrasi; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Durasi</label>
                <div class="col-sm-2">
                    <input class="form-control" name="Durasi" autocomplete="off" value="<?php echo $durasi; ?>" required>
                </div>
            </div>

             <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-info btn-submit" name="update" value="Update">
                </div>
            </div>
        </form>
        <a href="?page=Kalibrasi-tampil" class="btn btn-default btn-reset">Kembali</a>

        <hr>
    </div>
</div>


</div> <!-- /.col -->
</div> <!-- /.row -->