<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Detail Data Alat</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tbody>
                            <?php
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $query = mysqli_query($db, "SELECT * FROM alat WHERE id='$id'") or die('Query Error : ' . mysqli_error($db));
                                while ($data = mysqli_fetch_assoc($query)) {
                                    $id = $data['id'];
                                    $nama_alat = $data['nama_alat'];
                                    $tipe = $data['tipe'];
                                    $kategori = $data['kategori'];
                                    $no_seri = $data['no_seri'];
                                    $kelas = $data['kelas'];
                                    $kapasitas = $data['kapasitas'];
                                    $ketelusuran = $data['ketelusuran'];
                                    $jumlah = $data['jumlah'];
                                    $status = $data['status'];
                                }
                            }
                            ?>
                            <tr>
                                <td><b>Id:</td>
                                <td><?php echo $id; ?></b></td>
                            </tr>
                            <tr>
                                <td><b>Nama Alat:</td>
                                <td><?php echo $nama_alat; ?></b></td>
                            </tr>
                            <tr>
                                <td><b>Kategori:</td>
                                <td><?php echo $kategori; ?></b></td>
                            </tr>
                            <tr>
                                <td><b>Tipe:</td>
                                <td><?php echo $tipe; ?></b></td>
                            </tr>
                            <tr>
                                <td><b>No. Seri:</td>
                                <td><?php echo $no_seri; ?></b></td>
                            </tr>
                            <tr>
                                <td><b>Kelas:</td>
                                <td><?php echo $kelas; ?></b></td>
                            </tr>
                            <tr>
                                <td><b>Kapasitas:</td>
                                <td><?php echo $kapasitas; ?></b></td>
                            </tr>
                            <tr>
                                <td><b>Ketelusuran:</td>
                                <td><?php echo $ketelusuran; ?></b></td>
                            </tr>
                            <tr>
                                <td><b>Jumlah:</td>
                                <td><?php echo $jumlah; ?></b></td>
                            </tr>
                            <tr>
                                <td><b>Status:</td>
                                <td><?php echo $status; ?></b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    <a href="?page=alat-tampil" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Kalibrasi</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Id Alat</th>
                                <th>Id Pegawai</th>
                                <th>Tanggal Kalibrasi</th>
                                <th>Durasi</th>
                                <th class='center'>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            /* Pagination */
                            $batas = 100;
                            $jumlah_record = mysqli_query($db, "SELECT * FROM kalibrasi WHERE id_alat='$id'") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
                            $jumlah = mysqli_num_rows($jumlah_record);
                            $halaman = ceil($jumlah / $batas);
                            $page = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
                            $mulai = ($page - 1) * $batas;

                            $query = mysqli_query($db, "SELECT * FROM kalibrasi WHERE id_alat='$id' ORDER BY idk LIMIT $mulai, $batas") or die('Ada kesalahan pada query kalibrasi: ' . mysqli_error($db));

                            $no = 1;
                            while ($data = mysqli_fetch_assoc($query)) {
                                echo "<tr>
                                    <td>{$no}</td>
                                    <td>{$data['id_alat']}</td>
                                    <td>{$data['id_pegawai']}</td>
                                    <td>{$data['tanggal_kalibrasi']}</td>
                                    <td>{$data['durasi']}</td>
                                    <td class='center'>
                                        <a data-toggle='tooltip' data-placement='top' title='Detail' style='margin-right:5px' class='btn btn-secondary btn-sm' href='?page=kalibrasi-detail&id={$data['idk']}'> <i class='mdi mdi-eye'></i> </a>
                                        <a data-toggle='tooltip' data-placement='top' title='Print' style='margin-right:5px' class='btn btn-warning btn-sm' href='?page=kalibrasi-print-detail&id={$data['idk']}' target='_blank'> <i class='mdi mdi-printer'></i> </a>
                                        <a data-toggle='tooltip' data-placement='top' title='Hapus' class='btn btn-danger btn-sm' href='?page=kalibrasi-hapus&id={$data['idk']}' onclick=\"return confirm('Anda yakin ingin menghapus {$data['id_alat']}?');\"> <i class='mdi mdi-popcorn'></i></a>
                                    </td>
                                </tr>";
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
