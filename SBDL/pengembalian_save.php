<?php
include'koneksi.php';
$query=("INSERT INTO pengembalian (id_kembali,tanggal_kembali,jatuh_tempo,denda_per_hari,jumlah_hari,total_denda,id_petugas,id_anggota,id_buku)
			VALUES
			('$_POST[id_kembali]',
			'$_POST[tanggal_kembali]',
			'$_POST[jatuh_tempo]',
			'$_POST[denda_per_hari]',
			'$_POST[jumlah_hari]',
			'$_POST[total_denda]',
			'$_POST[id_petugas]',
			'$_POST[id_anggota]',
			'$_POST[id_buku]')");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data  Berhasil Disimpan.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=pengembalian'>";
?>