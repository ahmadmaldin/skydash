<?php
if (isset($_GET['id'])) {
    $ids   = $_GET['id'];
    $query = mysqli_query($db, "SELECT * FROM monitor WHERE idk='$ids'") or die('Query Error : ' . mysqli_error($db));
    while ($data  = mysqli_fetch_assoc($query)) {

        $ids                = $data['id'];
        $tanggal            = $data['tanggal']; 
        $waktu              = $data['waktu'];
        $suhu               = $data['suhu'];
        $kelembaban         = $data['kelembaban'];
    
    }
}
?>

<div class="row">
    <div class="col-md-12">
        <br>
        <form class="form-horizontal" method="POST" action="?page=monitor-update" enctype="multipart/form-data">

            <div class="form-group">
                <label class="col-sm-2 control-label">Id</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="id" value="<?php echo $ids; ?>" readonly>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="tanggal" value="<?php echo $tanggal; ?>" Required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Waktu</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="waktu" autocomplete="off" value="<?php echo $waktu; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Suhu</label>
                <div class="col-sm-2">
                    <input class="form-control" name="suhu" autocomplete="off" value="<?php echo $suhu; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Kelembaban</label>
                <div class="col-sm-2">
                    <input class="form-control" name="kelembaban" autocomplete="off" value="<?php echo $kelembaban; ?>" required>
                </div>
            </div>

             <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-info btn-submit" name="update" value="Update">
                </div>
            </div>
        </form>
        <a href="?page=monitor-tampil" class="btn btn-default btn-reset">Kembali</a>

        <hr>
    </div>
</div>


</div> <!-- /.col -->
</div> <!-- /.row -->