<div class="row">
  <div class="col-md-7 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">
          <i class="glyphicon glyphicon-edit"></i> Detail Data Pegawai
        </h4>
        
        <?php
        if (isset($_GET['id'])) {
            $nis = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM pegawai WHERE nis='$nis'") or die('Query Error : ' . mysqli_error($db));
            while ($data  = mysqli_fetch_assoc($query)) {
                $nis = $data['nis'];
                $nama = $data['nama'];
                $jabatan = $data['jabatan'];
                $telp = $data['telp'];
                $email = $data['email'];
                $foto = $data['foto'];
            }
        }
        ?>

        <div class="table-responsive">
          <table class="table table-striped table-borderless">
            <tbody>
              <tr>
                <td><b>NIS</td>
                <td class="font-weight"><?php echo $nis; ?></td>
              </tr>
              <tr>
                <td><b>Nama</td>
                <td class="font-weight"><?php echo $nama; ?></td>
              </tr>
              <tr>
                <td><b>Jabatan</td>
                <td class="font-weight"><?php echo $jabatan; ?></td>
              </tr>
              <tr>
                <td><b>No. Telp</td>
                <td class="font-weight"><?php echo $telp; ?></td>
              </tr>
              <tr>
                <td><b>Email</td>
                <td class="font-weight"><?php echo $email; ?></td>
              </tr>
              <tr>
                <td><b>Foto</td>
                <td class="text-center">
                  <?php echo "<img src='pegawai/gambar/$foto' width='auto' height='200' class='img-rounded' alt='Cinque Terre'>"; ?>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="form-group mt-3">
        <a href="?page=pegawai-tampil" class="btn btn-primary">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>
