<?php
include'koneksi.php';
$query=("UPDATE petugas
	SET 
	nama='$_POST[nama]',
	jk='$_POST[jk]',
	jabatan='$_POST[jabatan]',
	jam_kerja='$_POST[jam_kerja]',
	telpon='$_POST[telpon]',
	alamat='$_POST[alamat]',
	WHERE id_petugas='$_POST[id_petugas]'");
$lihat=mysqli_query($koneksi,$query) or die('Error,query failed.'.mysqli_error());
echo "<script>alert('Data Berhasil Diupdate.')</script>";
echo "<meta http-equiv='refresh' content='1; url=?petugas'>";
?>