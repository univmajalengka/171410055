<?php
include'koneksi.php';
$query=("UPDATE anggota
	SET 
	nama='$_POST[nama]',
	jk='$_POST[jk]',
	jurusan='$_POST[jurusan]',
	angkatan='$_POST[angkatan]'
	alamat='$_POST[alamat]',
	WHERE id_anggota='$_POST[id_anggota]'");
$lihat=mysqli_query($koneksi,$query) or die('Error,query failed.'.mysqli_error());
echo "<script>alert('Data Berhasil Diupdate.')</script>";
echo "<meta http-equiv='refresh' content='1; url=?anggota'>";
?>