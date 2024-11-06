<?php
if (isset($_POST['cari'])) {
    $cari = $_POST['cari'];
} else {
    $cari = "";
}
?>

<link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <p class="card-title mb-4">Data User</p>

                <?php if ($_SESSION['level'] == "Admin") { ?>
                    <a class="btn btn-primary" href="?page=tambah"><i class="mdi mdi-plus"></i> Tambah</a>
                <?php } else if ($_SESSION['level'] == "Siswa") { ?>
                    <p class="text-danger">Gak boleh masukin data</p>
                <?php } ?>

                <div class="form-inline float-right">
                    <form method="POST" action="?page=user-tampil">
                        <div class="input-group">
                            <input type="text" class="form-control" name="cari" placeholder="Cari ..." autocomplete="off" value="<?php echo $cari; ?>">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

                <?php
                if (!empty($_GET['alert'])) {
                    $alerts = [
                        1 => ['type' => 'danger', 'message' => 'Gagal! Terjadi kesalahan.'],
                        2 => ['type' => 'success', 'message' => 'Sukses! Data user berhasil disimpan.'],
                        3 => ['type' => 'success', 'message' => 'Sukses! Data user berhasil diubah.'],
                        4 => ['type' => 'success', 'message' => 'Sukses! Data user berhasil dihapus.']
                    ];

                    $alertType = $alerts[$_GET['alert']]['type'];
                    $alertMessage = $alerts[$_GET['alert']]['message'];
                    echo "<div class='alert alert-{$alertType} alert-dismissible fade show' role='alert'>
                            <strong>{$alertMessage}</strong>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                          </div>";
                }
                ?>

                <div class="table-responsive mt-3">
                    <table class="table table-striped table-borderless">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Id</th>
                                <th>Username</th>
                                <th>Level</th>
                                <th>NIS</th>
                                <th class='center'>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $batas = 10;
                            $jumlah_record = mysqli_query($db, "SELECT * FROM user WHERE nis LIKE '%$cari%' OR username LIKE '%$cari%'");
                            $jumlah  = mysqli_num_rows($jumlah_record);
                            $halaman = ceil($jumlah / $batas);
                            $page    = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
                            $mulai   = ($page - 1) * $batas;
                            $no = $mulai + 1;

                            $query = mysqli_query($db, "SELECT * FROM user WHERE nis LIKE '%$cari%' OR username LIKE '%$cari%' ORDER BY id LIMIT $mulai, $batas");
                            while ($data = mysqli_fetch_assoc($query)) {
                                echo "<tr>
                                    <td>{$no}</td>
                                    <td>{$data['id']}</td>
                                    <td>{$data['username']}</td>
                                    <td>{$data['level']}</td>
                                    <td>{$data['nis']}</td>
                                    <td class='text-center'>
                                        <a class='btn btn-success btn-sm' href='?page=detail&id={$data['id']}' title='Detail'><i class='mdi mdi-eye'></i></a>
                                        <a class='btn btn-danger btn-sm' href='?page=proses-hapus&id={$data['id']}' title='Hapus' onclick='return confirm(\"Anda yakin ingin menghapus {$data['username']}?\");'><i class='mdi mdi-delete'></i></a>
                                    </td>
                                </tr>";
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <nav>
                    <ul class="pagination justify-content-end">
                        <?php if ($page > 1) { ?>
                            <li class="page-item"><a class="page-link" href="?page=user-tampil&hal=<?php echo $page - 1; ?>">&laquo;</a></li>
                        <?php } ?>
                        <?php for ($x = 1; $x <= $halaman; $x++) { ?>
                            <li class="page-item <?php echo ($x == $page) ? 'active' : ''; ?>"><a class="page-link" href="?page=user-tampil&hal=<?php echo $x; ?>"><?php echo $x; ?></a></li>
                        <?php } ?>
                        <?php if ($page < $halaman) { ?>
                            <li class="page-item"><a class="page-link" href="?page=user-tampil&hal=<?php echo $page + 1; ?>">&raquo;</a></li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
