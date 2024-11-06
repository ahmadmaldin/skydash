
<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	
	
	$id_ruang           = $_POST['id_ruang'];
	$tanggal            = $_POST['tanggal']; 
	$waktu              = $_POST['waktu'];
	$suhu               = $_POST['suhu'];
	$kelembaban         = $_POST['kelembaban'];
	
	// perintah query untuk menyimpan data ke tabel is_siswa
	$query = mysqli_query($db, "INSERT INTO monitor (id_ruang, tanggal, waktu, suhu, kelembaban  ) VALUES('$id_ruang', '$tanggal','$waktu', '$suhu', '$kelembaban')");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: ?page=monitor-tampil&idr&alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: ?page=monitor-tampil&idr&alert=1');
	}
}
