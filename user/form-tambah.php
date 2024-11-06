<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">
        <i class="glyphicon glyphicon-edit"></i> Input Data User
      </h4>

      <form class="form-sample form-horizontal" method="POST" action="?page=proses-simpan">
        <p class="card-description">User Information</p>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Username</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="username" autocomplete="off" required>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Password</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" name="password" autocomplete="off" required>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Level</label>
              <div class="col-sm-9">
                <select class="form-control" name="level" required>
                  <option value=""></option>
                  <option value="Admin">Admin</option>
                  <option value="Pegawai">Pegawai</option>
                  <option value="User">User</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Nis</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="nis" required>
              </div>
            </div>
          </div>
        </div>

        <hr />

        <div class="form-group row">
          <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
            <a href="index.php" class="btn btn-default btn-reset">Batal</a>
          </div>
        </div>
      </form>
    </div> <!-- /.card-body -->
  </div> <!-- /.card -->
</div> <!-- /.col-12 -->
