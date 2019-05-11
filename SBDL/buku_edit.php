<?php
include"koneksi.php";
$query=("SELECT * FROM buku WHERE id_buku='$_GET[id]'");
$galeri=mysqli_query($koneksi,$query) or die('Error,query failed. ' .mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Buku</h3>
<form class="form-horizontal" method="post" action="?halaman=buku_up" enctype="multipart/form-data">
	<input type="hidden" name="id_buku" value="<?php echo"$m[id_buku]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">Judul :</label>
		<div class="col-sm-4">
			<input type="text" name="judul" class="form-control" placeholder="Masukan Judul" value="<?php echo"$m[judul]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Penulis :</label>
		<div class="col-sm-4">
			<input type="text" name="penulis" class="form-control" placeholder="Masukan penulis" value="<?php echo"$m[penulis]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Penerbit :</label>
		<div class="col-sm-4">
			<input type="text" name="penerbit" class="form-control" placeholder="Masukan Jurusan" value="<?php echo"$m[penerbit]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tahun Terbit:</label>
		<div class="col-sm-4">
			<input type="text" name="tahun_terbit" class="form-control" placeholder="Masukan tahun_terbit" value="<?php echo"$m[tahun_terbit]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
			<input type="submit" name="tambah_anggota" class="btn btn-sm btn-primary" value="simpan">
			<a href="?halaman=anggota" class="btn btn-sm btn-danger">Batal</a>
			</div>
			</div>
			</form> 
