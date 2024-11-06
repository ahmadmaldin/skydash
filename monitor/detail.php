<div class="row">
    <div class="col-md-12">
        <br>
        <?php
        if (isset($_GET['id'])) {
            $id   = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM monitor WHERE id='$id'") or die('Query Error : ' . mysqli_error($db));
            while ($data  = mysqli_fetch_assoc($query)) {
               
                $ids                = $data['id'];
                $id_ruang           = $data['id'];
                $tanggal            = $data['tanggal']; 
                $waktu              = $data['waktu'];
                $suhu               = $data['suhu'];
                $kelembaban         = $data['kelembaban'];
                
                

            }
        }
        ?>

        <ul class="list-group">
            <li class="list-group-item active"><b>DETAIL DATA MONITOR</b></li>
            <li class="list-group-item">Id : <b><?php echo $ids; ?></b></li>
            <li class="list-group-item">Tanggal : <b><?php echo $tanggal; ?></b></li>
            <li class="list-group-item">Waktu : <b><?php echo $waktu; ?></b></li>
            <li class="list-group-item">Suhu  : <b><?php echo $suhu; ?></b></li>
            <li class="list-group-item">Kelembaban : <b><?php echo $kelembaban; ?></b></li>
        </ul>

        <div class="form-group">
            <a href="?page=monitor-tampil" class="btn btn-default btn-reset">Kembali</a>
        </div>
    </div>
    </form>
</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->




















