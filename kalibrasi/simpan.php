
<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	$id_alat            = $_POST['id_alat']; 
	$id_pegawai         = $_POST['id_pegawai'];
	$tanggal_kalibrasi  = $_POST['tanggal_kalibrasi'];
	$durasi             = $_POST['durasi'];
	// perintah query untuk menyimpan data ke tabel is_siswa
	$query = mysqli_query($db, "INSERT INTO kalibrasi (id_alat, id_pegawai, tanggal_kalibrasi, durasi  ) VALUES('$id_alat','$id_pegawai', '$tanggal_kalibrasi', '$durasi')");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: ?page=kalibrasi-tampil&alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: ?page=kalibrasi-tampil&alert=1');
	}
}
