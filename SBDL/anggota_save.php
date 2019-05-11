<?php
include'koneksi.php';
$query=("INSERT INTO anggota (id_anggota,nama,jk,jurusan,angkatan,alamat)
			VALUES
			('$_POST[id_anggota]',
			'$_POST[nama]',
			'$_POST[jk]',
			'$_POST[jurusan]',
			'$_POST[angkatan]',
			'$_POST[alamat]')");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data petugas Berhasil Disimpan.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=anggota'>";
?>