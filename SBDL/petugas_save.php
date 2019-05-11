<?php
include'koneksi.php';
$query=("INSERT INTO petugas (id_petugas,nama,jk,jabatan,jam_tugas,telpon,alamat)
			VALUES
			('$_POST[id_petugas]',
			'$_POST[nama]',
			'$_POST[jk]',
			'$_POST[jabatan]',
			'$_POST[jam_tugas]',
			'$_POST[telpon]',
			'$_POST[alamat]')");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data petugas Berhasil Disimpan.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=pentugas'>";
?>