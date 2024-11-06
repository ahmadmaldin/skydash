<?php
if (isset($_GET['id'])) {
    $idk   = $_GET['id'];
    $query = mysqli_query($db, "SELECT * FROM kalibrasi WHERE idk='$idk'") or die('Query Error : ' . mysqli_error($db));
    while ($data  = mysqli_fetch_assoc($query)) {
        $idk                = $data['idk'];
        $id_alat            = $data['id_alat']; 
        $id_pegawai         = $data['id_pegawai'];
        $tanggal_kalibrasi  = $data['tanggal_kalibrasi'];
        $durasi             = $data['durasi'];
    }
}
?>

<div class="row">
    <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title mb-4">Detail Data Kalibrasi</p>
                <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                        <tbody>
                            <tr>
                                <td class="font-weight-bold">Id</td>
                                <td><?php echo $idk; ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Id Alat</td>
                                <td><?php echo $id_alat; ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Id Pegawai</td>
                                <td><?php echo $id_pegawai; ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Tanggal Kalibrasi</td>
                                <td><?php echo $tanggal_kalibrasi; ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Durasi</td>
                                <td><?php echo $durasi; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="?page=kalibrasi-tampil" class="btn btn-primary print">Kembali</a>

<script>
    window.print();
</script>
