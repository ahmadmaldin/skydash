<div class="row">
    <div class="col-md-12">
        <br>
        <?php
        if (isset($_GET['id'])) {
            $id  = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM ruang WHERE id='$id'") or die('Query Error : ' . mysqli_error($db));
            while ($data  = mysqli_fetch_assoc($query)) {
               
                $id             = $data['id'];
                $nama_ruang           = $data['nama_ruang'];
                $luas                 = $data['luas'];
                $status               = $data['status'];

            }
        }
        ?>

        <ul class="list-group">
            <li class="list-group-item active"><b>DETAIL DATA RUANG</b></li>
            <li class="list-group-item">Id : <b><?php echo $id; ?></b></li>
            <li class="list-group-item">Nama ruang : <b><?php echo $nama_ruang; ?></b></li>
            <li class="list-group-item">Jumlah : <b><?php echo $luas; ?></b></li>
            <li class="list-group-item">Status : <b><?php echo $status; ?></b></li
        <div class="form-group">
            <a href="?page=ruang-tampil" class="btn btn-default btn-reset">Kembali</a>
        </div>
    </div>
    </form>
</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->


<div class="row">
    <div class="col-md-12">
        <br>
        <?php
        if (isset($_GET['ids'])) {
            $ids   = $_GET['ids'];
            $query = mysqli_query($db, "SELECT * FROM monitor WHERE ids='$ids'") or die('Query Error : ' . mysqli_error($db));
            while ($data  = mysqli_fetch_assoc($query)) {
               
                $ids             = $data['id'];
                $tanggal     = $data['tanggal'];
                $waktu         = $data['waktu'];
                $suhu         = $data['suhu'];
                $kelembaban         = $data['kelembaban'];


            }
        }
        ?>

        <ul class="list-group">
            <li class="list-group-item active"><b>SUHU DAN KELEMBABAN TERKINI </b></li>
            <li class="list-group-item">ids : <b><?php echo $ids; ?></b></li>
            <li class="list-group-item">tanggal : <b><?php echo $tanggal; ?></b></li>
            <li class="list-group-item">waktu : <b><?php echo $waktu; ?></b></li>
            <li class="list-group-item">suhu : <b><?php echo $suhu; ?></b></li
            <li class="list-group-item">kelembaban : <b><?php echo $kelembaban; ?></b></li

        <div class="form-group">
            <a href="?page=monitor-tampil" class="btn btn-default btn-reset">Kembali</a>
        </div>
    </div>
    </form>
</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->











    