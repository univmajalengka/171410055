<?php
include'koneksi.php';
$query=("UPDATE buku
	SET 
	judul='$_POST[judul]',
	penulis='$_POST[penulis]',
	penerbit='$_POST[penerbit]',
	tahun_terbit='$_POST[tahun_terbit]',
	alamat='$_POST[alamat]',
	WHERE id_anggota='$_POST[id_anggota]'");
$lihat=mysqli_query($koneksi,$query) or die('Error,query failed.'.mysqli_error());
echo "<script>alert('Data Berhasil Diupdate.')</script>";
echo "<meta http-equiv='refresh' content='1; url=?buku'>";
?>