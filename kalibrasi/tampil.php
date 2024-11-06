<?php
if (isset($_POST['cari'])) {
    $cari = $_POST['cari'];
} else {
    $cari = "";
}
?>

<link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">

<div class="container-fluid print">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-4">Data Kalibrasi</p>
                    <a class="btn btn-primary" href="?page=kalibrasi-tambah">
                        <i class="mdi mdi-plus"></i> Tambah
                    </a>

                    <div class="form-inline float-right">
                        <form method="POST" action="?page=kalibrasi-tampil">
                            <div class="input-group">
                                <input type="text" class="form-control" name="cari" placeholder="Cari ..." autocomplete="off" value="<?php echo $cari; ?>">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Alert Messages -->
                    <?php
                    if (!empty($_GET['alert'])) {
                        $alertType = $_GET['alert'] == 1 ? 'danger' : 'success';
                        $alertMsg = '';

                        switch ($_GET['alert']) {
                            case 1:
                                $alertMsg = 'Gagal! Terjadi kesalahan.';
                                break;
                            case 2:
                                $alertMsg = 'Sukses! Data kalibrasi berhasil disimpan.';
                                break;
                            case 3:
                                $alertMsg = 'Sukses! Data kalibrasi berhasil diubah.';
                                break;
                            case 4:
                                $alertMsg = 'Sukses! Data kalibrasi berhasil dihapus.';
                                break;
                            case 5:
                                $alertMsg = 'Kedahna tipe file na jpg, jpeg, png atanapi pdf.';
                                $alertType = 'danger';
                                break;
                        }
                        echo "<div class='alert alert-{$alertType} alert-dismissible fade show' role='alert'>
                                <strong>{$alertMsg}</strong>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>";
                    }
                    ?>

                    <!-- Data Kalibrasi Table -->
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Id Alat</th>
                                    <th>Id Pegawai</th>
                                    <th>Tanggal Kalibrasi</th>
                                    <th>Durasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $batas = 10;
                                $jumlah_record = mysqli_query($db, "SELECT * FROM kalibrasi WHERE idk LIKE '%$cari%' OR id_alat LIKE '%$cari%'") or die('Query Error');
                                $jumlah  = mysqli_num_rows($jumlah_record);
                                $halaman = ceil($jumlah / $batas);
                                $page    = isset($_GET['hal']) ? (int)$_GET['hal'] : 1;
                                $mulai   = ($page - 1) * $batas;
                                $no      = $mulai + 1;

                                $query = mysqli_query($db, "SELECT * FROM kalibrasi WHERE idk LIKE '%$cari%' OR id_alat LIKE '%$cari%' ORDER BY idk LIMIT $mulai, $batas") or die('Query Error');
                                
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo "<tr>
                                        <td>{$no}</td>
                                        <td>{$data['id_alat']}</td>
                                        <td>{$data['id_pegawai']}</td>
                                        <td>{$data['tanggal_kalibrasi']}</td>
                                        <td>{$data['durasi']}</td>
                                        <td class='text-center'>
                                            <a data-toggle='tooltip' title='Detail' class='btn btn-secondary btn-sm' href='?page=kalibrasi-detail&id={$data['idk']}'><i class='mdi mdi-eye'></i></a>
                                            
                                            <a data-toggle='tooltip' title='Print' class='btn btn-warning btn-sm' href='?page=kalibrasi-print-detail&id={$data['idk']}' target='_blank'><i class='mdi mdi-printer'></i></a>
                                            
                                            <a data-toggle='tooltip' title='Hapus' class='btn btn-danger btn-sm' href='?page=kalibrasi-hapus&id={$data['idk']}' onclick=\"return confirm('Anda yakin ingin menghapus {$data['id_alat']}?');\"><i class='mdi mdi-delete'></i></a>
                                        </td>
                                    </tr>";
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <nav>
                        <ul class="pagination justify-content-end">
                            <?php if ($page > 1) { ?>
                                <li class="page-item"><a class="page-link" href="?page=kalibrasi-tampil&hal=<?php echo $page - 1; ?>">&laquo;</a></li>
                            <?php }
                            for ($x = 1; $x <= $halaman; $x++) { ?>
                                <li class="page-item <?php echo ($x == $page) ? 'active' : ''; ?>"><a class="page-link" href="?page=kalibrasi-tampil&hal=<?php echo $x; ?>"><?php echo $x; ?></a></li>
                            <?php }
                            if ($page < $halaman) { ?>
                                <li class="page-item"><a class="page-link" href="?page=kalibrasi-tampil&hal=<?php echo $page + 1; ?>">&raquo;</a></li>
                            <?php } ?>
                        </ul>
                        <a href="?page=alat-tampil" class="btn btn-primary">Kembali</a>

                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
