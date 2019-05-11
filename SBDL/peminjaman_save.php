<?php
include'koneksi.php';
$query=("INSERT INTO peminjaman (id_pinjam,tanggal_pinjam,tanggal_kembali,kode_petugas,kode_anggota,kode_buku)
			VALUES
			('$_POST[id_pinjam]',
			'$_POST[tanggal_pinjam]',
			'$_POST[tanggal_kembali]',
			'$_POST[id_petugas]',
			'$_POST[id_anggota]',
			'$_POST[id_buku]')");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data petugas Berhasil Disimpan.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=peminjaman'>";
?>