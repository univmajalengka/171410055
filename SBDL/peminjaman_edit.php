<?php
include"koneksi.php";
$query=("SELECT * FROM peminjaman WHERE id_peminjaman='$_GET[id]'");
$galeri=mysqli_query($koneksi,$query) or die('Error,query failed. ' .mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Peminjaman</h3>
<form class="form-horizontal" method="post" action="?halaman=peminjaman_up" enctype="multipart/form-data">
	<input type="hidden" name="id_pinjam" value="<?php echo"$m[id_petugas]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tanggal Pinjam:</label>
		<div class="col-sm-4">
			<input type="text" name="tanggal_pinjam" class="form-control" placeholder="Masukan  tanggal pinjam" value="<?php echo"$m[tanggal_pinjam]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tanggal Kembali :</label>
		<div class="col-sm-4">
			<input type="text" name="tanggal_kembali" class="form-control" placeholder="Masukan tanggal kembali" value="<?php echo"$m[tsnggsl_kembali]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Kode Petugas :</label>
		<div class="col-sm-4">
			<input type="text" name="kode_petugas" class="form-control" placeholder="Masukan Kode Petugas" value="<?php echo"$m[kode_petugas]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Kode_Anggota:</label>
		<div class="col-sm-4">
			<input type="time" name="kode_anggota" class="form-control" placeholder="Masukan kode_anggota" value="<?php echo"$m[kode_anggota]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Kode_Buku:</label>
		<div class="col-sm-4">
			<input type="text" name="kode_buku" class="form-control" placeholder="Masukan kode_buku" value="<?php echo"$m[kode_buku]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
			<input type="submit" name="tambah_peminjaman" class="btn btn-sm btn-primary" value="simpan">
			<a href="?halaman=peminjaman" class="btn btn-sm btn-danger">Batal</a>
			</div>
			</div>
			</form> 
