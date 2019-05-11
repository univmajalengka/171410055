<?php
include'koneksi.php';
$query=("UPDATE peminjaman
	SET 
	tanggal_pinjam='$_POST[tanggal_pinjam]',
	tanggal_kembali='$_POST[tanggal_kembali]',
	petugas='$_POST[id_petugas]',
	id_anggota='$_POST[id_anggota]',
	id_buku='$_POST[id_buku]',
	WHERE id_pinjam='$_POST[id_pinjam]'");
$lihat=mysqli_query($koneksi,$query) or die('Error,query failed.'.mysqli_error());
echo "<script>alert('Data Berhasil Diupdate.')</script>";
echo "<meta http-equiv='refresh' content='1; url=?peminjaman'>";
?>