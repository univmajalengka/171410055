<?php
include'koneksi.php';
$query=("INSERT INTO buku (id_buku,judul,penulis,penerbit,tahun_terbit)
			VALUES
			('$_POST[id_buku]',
			'$_POST[judul]',
			'$_POST[penulis]',
			'$_POST[penerbit]',
			'$_POST[tahun_terbit]')");
			$lihat=mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data petugas Berhasil Disimpan.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=buku'>";
?>