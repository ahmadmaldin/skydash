<div class="row">
    <div class="col-md-12">
        <br>
        <?php
        if (isset($_GET['id'])) {
            $id   = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM alat WHERE id='$id'") or die('Query Error : ' . mysqli_error($db));
            while ($data  = mysqli_fetch_assoc($query)) {
                $id                         = $data['id'];
                $nama_alat                 = $data['nama_alat']; 
                $tipe                       = $data['tipe'];
                $no_seri                    = $data['no_seri'];
                $kelas                      = $data['kelas'];
                $kapasitas                  = $data['kapasitas'];
                $ketelusuran                = $data['ketelusuran'];
                $jumlah                     = $data['jumlah'];
                $status                     =$data[ 'status'];
                $status                     =$data[ 'status'];
               

            }
        }
        ?>

        <ul class="list-group">
            <li class="list-group-item active"><b>
                    <center>DETAIL DATA ALAT</center>
                </b></li>
            <li class="list-group-item">id : <b><?php echo $id; ?></b></li>
            <li class="list-group-item">nama_alat : <b><?php echo $nama_alat; ?></b></li>
            <li class="list-group-item">tipe : <b><?php echo $tipe; ?></b></li>
            <li class="list-group-item">no_seri : <b><?php echo $no_seri; ?></b></li>
            <li class="list-group-item">kapasitas : <b><?php echo $kapasitas; ?></b></li>
            <li class="list-group-item">ketelusuran : <b><?php echo $ketelusuran; ?></b></li>
            <li class="list-group-item">jumlah : <b><?php echo $jumlah; ?></b></li>
            <li class="list-group-item">status : <b><?php echo $status; ?></b></li>
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