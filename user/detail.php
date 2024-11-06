<div class="row">
    <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title mb-0">
                    <i class="glyphicon glyphicon-edit"></i> Detail Data User
                </p>
                <?php
                if (isset($_GET['id'])) {
                    $id = mysqli_real_escape_string($db, $_GET['id']);
                    $query = mysqli_query($db, "SELECT * FROM user WHERE id='$id'") or die('Query Error : ' . mysqli_error($db));
                    $data = mysqli_fetch_assoc($query);
                    if ($data) {
                        $username = $data['username'];
                        $password = $data['password'];
                        $level = $data['level'];
                        $nis = $data['nis'];
                    }
                }
                ?>
                <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                        <tbody>
                            <tr>
                                <td class="font-weight-bold">Id</td>
                                <td><?php echo $id; ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Username</td>
                                <td><?php echo $username; ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Password</td>
                                <td>
                                    <?php
                                    if ($_SESSION['level'] == "Admin") {
                                        echo '**********';
                                    } else if ($_SESSION['level'] == "User") {
                                        echo $password;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Level</td>
                                <td><?php echo $level; ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">NIS</td>
                                <td><?php echo $nis; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php
                $kembali = ($_SESSION['level'] == "Admin" || $_SESSION['level'] == "Pegawai") ? "user-tampil" : "index.php";
                ?>
                <div class="form-group mt-3">
                    <a href="?page=<?php echo $kembali ?>" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>

 