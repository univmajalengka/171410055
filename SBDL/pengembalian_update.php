<?php
include'koneksi.php';
$query=("UPDATE pengembalian
	SET 
	tanggal_kembali='$_POST[tanggal_kembali]',
	jatuh_tempo='$_POST[tanggal_kembali]',
	dends_per_hari='$_POST[tanggal_kembali]',
	total_denda='$_POST[tanggal_kembali]',
	id_petugas='$_POST[id_petugas]',
	id_anggota='$_POST[id_anggota]',
	id_buku='$_POST[id_buku]',
	WHERE id_kembali='$_POST[id_kembali]'");
$lihat=mysqli_query($koneksi,$query) or die('Error,query failed.'.mysqli_error());
echo "<script>alert('Data Berhasil Diupdate.')</script>";
echo "<meta http-equiv='refresh' content='1; url=?pengembalian'>";
?>