<?php
$halaman=(isset($_GET['halaman'])) ?$_GET['halaman']:"default";
switch($halaman){
	case'petugas':include"petugas.php";break;
	case'petugas_edit':include"petugas_edit.php";break;
	case'petugas_hapus':include"petugas_hapus.php";break;
	case'petugas_tambah':include"petugas_tambah.php";break;
	case'petugas_ad':include"petugas_save.php";break;
	case'petugas_up':include"petugas_update.php";break;
	case'petugas_delete':include"petugas_delete.php";break;
	case'default':include"home.php";break;

	case'anggota':include"anggota.php";break;
	case'anggota_edit':include"anggota_edit.php";break;
	case'anggota_hapus':include"anggota_hapus.php";break;
	case'anggota_tambah':include"anggota_tambah.php";break;
	case'anggota_ad':include"anggota_save.php";break;
	case'anggota_up':include"anggota_update.php";break;
	case'anggota_delete':include"anggota_delete.php";break;
	case'default':include"home.php";break;

	case'buku':include"buku.php";break;
	case'buku_edit':include"buku_edit.php";break;
	case'buku_hapus':include"buku_hapus.php";break;
	case'buku_tambah':include"buku_tambah.php";break;
	case'buku_ad':include"buku_save.php";break;
	case'buku_up':include"buku_update.php";break;
	case'buku_delete':include"buku_delete.php";break;
	case'default':include"home.php";break;
	
	case'peminjaman':include"peminjaman.php";break;
	case'peminjaman_edit':include"peminjaman_edit.php";break;
	case'peminjaman_hapus':include"peminjaman_hapus.php";break;
	case'peminjaman_tambah':include"peminjaman_tambah.php";break;
	case'peminjaman_ad':include"peminjaman_save.php";break;
	case'peminjaman_up':include"peminjaman_update.php";break;
	case'peminjaman_delete':include"peminjaman_delete.php";break;
	case'default':include"home.php";break;

	case'pengembalian':include"pengembalian.php";break;
	case'pengembalian_edit':include"pengembalian_edit.php";break;
	case'pengembalian_hapus':include"pengembalian_hapus.php";break;
	case'pengembalian_tambah':include"pengembalian_tambah.php";break;
	case'pengembalian_ad':include"pengembalian_save.php";break;
	case'pengembalian_up':include"pengembalian_update.php";break;
	case'pengembalian_delete':include"pengembalian_delete.php";break;
	case'default':include"home.php";break;

	case'rak':include"rak.php";break;
	case'rak_edit':include"rak_edit.php";break;
	case'rak_hapus':include"rak_hapus.php";break;
	case'rak_tambah':include"rak_tambah.php";break;
	case'rak_ad':include"rak_save.php";break;
	case'rak_up':include"rak_update.php";break;
	case'rak_delete':include"rak_delete.php";break;
	case'default':include"home.php";break;
}
?>