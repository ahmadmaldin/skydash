<?php
$idr   = $_GET['idr'];

if (isset($_POST['cari'])) {
    $cari = $_POST['cari'];
} else {
    $cari = "";
}
?>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title mb-0">Data Monitor</p>

                <?php
                if (empty($_GET['alert'])) {
                    echo "";
                } elseif ($_GET['alert'] == 1) {
                    echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    <strong><i class='glyphicon glyphicon-alert'></i> Gagal!</strong> Terjadi kesalahan.
                    </div>";
                } elseif ($_GET['alert'] == 2) {
                    echo "<div class='alert alert-success alert-dismissible' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data monitor berhasil disimpan.
                    </div>";
                } elseif ($_GET['alert'] == 3) {
                    echo "<div class='alert alert-success alert-dismissible' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data monitor berhasil diubah.
                    </div>";
                } elseif ($_GET['alert'] == 4) {
                    echo "<div class='alert alert-success alert-dismissible' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data monitor berhasil dihapus.
                    </div>";
                } elseif ($_GET['alert'] == 5) {
                    echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    <strong><i class='glyphicon glyphicon-ok-circle'></i> Hampura mang euy!</strong> Kedahna tipe file na jpg, jpeg, png atanapi pdf.
                    </div>";
                }
                ?>

                <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Ids</th>
                                <th>Id Ruang</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Suhu</th>
                                <th>Kelembaban</th>
                                <th class="center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $batas = 10;
                            $jumlah_record = mysqli_query($db, "SELECT * FROM monitor WHERE id_ruang='$idr'") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
                            $jumlah = mysqli_num_rows($jumlah_record);
                            $halaman = ceil($jumlah / $batas);
                            $page = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
                            $mulai = ($page - 1) * $batas;
                            $no = $mulai + 1;
                            $query = mysqli_query($db, "SELECT * FROM monitor WHERE id_ruang='$idr' ORDER BY id_ruang LIMIT $mulai, $batas") or die('Ada kesalahan pada query monitor: ' . mysqli_error($db));

                            while ($data = mysqli_fetch_assoc($query)) {
                                echo "<tr>
                                    <td>$no</td>
                                    <td>$data[ids]</td>
                                    <td>$data[id_ruang]</td>
                                    <td>$data[tanggal]</td>
                                    <td>$data[waktu]</td>
                                    <td>$data[suhu]</td>
                                    <td>$data[kelembaban]</td>
                                    <td class='center'>
                                        <a data-toggle='tooltip' data-placement='top' title='Hapus' class='btn btn-danger btn-sm' href='?page=monitor-hapus&ids=$data[ids]' onclick=\"return confirm('Anda yakin ingin menghapus $data[ids]?');\"> 
                                            <i class='mdi mdi-delete'></i>
                                        </a>
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
                            <li class="page-item">
                                <a class="page-link" href="?page=monitor-tampil&hal=<?php echo $page - 1; ?>">&laquo;</a>
                            </li>
                        <?php }
                        for ($x = 1; $x <= $halaman; $x++) { ?>
                            <li class="page-item <?php echo ($x == $page) ? 'active' : ''; ?>">
                                <a class="page-link" href="?page=monitor-tampil&hal=<?php echo $x; ?>"><?php echo $x; ?></a>
                            </li>
                        <?php }
                        if ($page < $halaman) { ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=monitor-tampil&hal=<?php echo $page + 1; ?>">&raquo;</a>
                            </li>
                        <?php } ?>
                    </ul>
                    <a href="?page=ruang-tampil" class="btn btn-primary">Kembali</a>

                </nav>
            </div>
        </div>
    </div>
</div>
