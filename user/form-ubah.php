<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              <i class="glyphicon glyphicon-edit"></i> Ubah Data Login
            </h4>
            <p class="card-description">Edit informasi login pengguna</p>
            
            <?php
            if (isset($_GET['id'])) {
              $id   = $_GET['id'];
              $query = mysqli_query($db, "SELECT * FROM user WHERE id='$id'") or die('Query Error : ' . mysqli_error($db));
              while ($data  = mysqli_fetch_assoc($query)) {
                $id        = $data['id'];
                $username  = $data['username'];
                $password  = $data['password'];
                $level     = $data['level'];
                $nis       = $data['nis'];
              }
            }
            ?>

            <form class="forms-sample" method="POST" action="?page=proses-ubah">
              <div class="form-group">
                <label for="inputId">Id</label>
                <input type="text" class="form-control" id="inputId" name="id" value="<?php echo $id; ?>" readonly>
              </div>

              <div class="form-group">
                <label for="inputUsername">Username</label>
                <input type="text" class="form-control" id="inputUsername" name="username" autocomplete="off" value="<?php echo $username; ?>" required>
              </div>

              <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="text" class="form-control" id="inputPassword" name="password" autocomplete="off" value="<?php echo $password; ?>" required>
              </div>

              <div class="form-group">
                <label for="inputLevel">Level</label>
                <select class="form-control" id="inputLevel" name="level" required>
                  <option value="<?php echo $level; ?>"><?php echo $level; ?></option>
                  <option value="Admin">Admin</option>
                  <option value="Pegawai">Pegawai</option>
                  <option value="User">User</option>
                </select>
              </div>

              <div class="form-group">
                <label for="inputNis">Nis</label>
                <input type="text" class="form-control" id="inputNis" name="nis" value="<?php echo $nis; ?>" required>
              </div>

              <button type="submit" class="btn btn-primary mr-2" name="simpan">Simpan</button>
              <a href="index.php" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
