<?php
include"koneksi.php";
$query=("DELETE FROM rak
		WHERE id_rak='$_GET[id]'");
$lihat=mysqli_query($koneksi,$query)or die('Error,query failed. '.mysqli_error());
echo "<script>alert('Data Berhasil Dihapus.');</script>";
echo "<meta http-equive='refresh' content='1; url=?halaman=rak'>";
?>