
<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	
	$id_ruang 			= $_POST['id_ruang'];
	$nama_ruang 	= $_POST['nama_ruang']; 
	$luas     		=$_POST[ 'luas'];
	$status     	=$_POST[ 'status'];
	// perintah query untuk menyimpan data ke tabel is_siswa
	$query = mysqli_query($db, "INSERT INTO ruang (nama_ruang, luas, status ) VALUES('$nama_ruang','$luas', '$status')");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: ?page=ruang-tampil&alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: ?page=ruang-tampil&alert=1');
	}
}
