<?php
include'koneksi.php';
$query=("UPDATE rak
	SET 
	nama_rak='$_POST[nama_rak]',
	id_buku='$_POST[id_buku]',
	WHERE id_rak='$_POST[id_rak]'");
$lihat=mysqli_query($koneksi,$query) or die('Error,query failed.'.mysqli_error());
echo "<script>alert('Data Berhasil Diupdate.')</script>";
echo "<meta http-equiv='refresh' content='1; url=?anggota'>";
?>