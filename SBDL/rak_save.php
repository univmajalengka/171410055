<?php
include'koneksi.php';
$query=("INSERT INTO rak (id_rak,nama_rak,id_buku)
			VALUES
			('$_POST[id_rak]',
			'$_POST[nama_buku]',
			'$_POST[id_buku]')");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data petugas Berhasil Disimpan.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=rak'>";
?>