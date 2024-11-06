<div class="row">
    <div class="col-md-12">
        <br>
        <?php
        if (isset($_GET['id'])) {
            $ids   = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM monitor WHERE id='$ids'") or die('Query Error : ' . mysqli_error($db));
            while ($data  = mysqli_fetch_assoc($query)) {
               
              
                $ids                = $data['id'];
                $tanggal            = $data['tanggal']; 
                $waktu              = $data['waktu'];
                $suhu               = $data['suhu'];
                $kelembaban         = $data['kelembaban'];
                
                

            }
        }
        ?>

        <ul class="list-group">
            <li class="list-group-item active"><b>
                    <center>DETAIL DATA MONITOR</center>
                </b></li>
                <li class="list-group-item active"><b>DETAIL DATA MONITOR</b></li>
            <li class="list-group-item">Id : <b><?php echo $ids; ?></b></li>
            <li class="list-group-item">Tanggal : <b><?php echo $tanggal; ?></b></li>
            <li class="list-group-item">Waktu : <b><?php echo $waktu; ?></b></li>
            <li class="list-group-item">Suhu  : <b><?php echo $suhu; ?></b></li>
            <li class="list-group-item">Kelembaban : <b><?php echo $kelembaban; ?></b></li>
            </li>
        </ul>
    </div>
    </form>
</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->

<script>
    window.print();
</script>