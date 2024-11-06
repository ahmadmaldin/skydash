
<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	$id = $_POST['id'];
	$nama_alat = $_POST['nama_alat']; 
	$kategori     = $_POST['kategori'];
	$tipe     = $_POST['tipe'];
	$no_seri    = $_POST['no_seri'];
	$kelas     = $_POST['kelas'];
	$kapasitas  = $_POST['kapasitas'];
	$ketelusuran= $_POST['ketelusuran'];
	$jumlah      = $_POST['jumlah'];
	$status     =$_POST[ 'status'];
	// perintah query untuk menyimpan data ke tabel is_siswa
	$query = mysqli_query($db, "INSERT INTO alat (nama_alat, kategori, tipe, no_seri, kelas, kapasitas, ketelusuran, jumlah, status ) VALUES('$nama_alat', '$kategori', '$tipe', '$no_seri', '$kelas', '$kapasitas', '$ketelusuran', '$jumlah', '$status')");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: ?page=alat-tampil&alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: ?page=alat-tampil&alert=1');
	}
}
