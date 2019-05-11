<?php
include"koneksi.php";
$query=("SELECT * FROM anggota WHERE id_anggota='$_GET[id]'");
$galeri=mysqli_query($koneksi,$query) or die('Error,query failed. ' .mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Anggota</h3>
<form class="form-horizontal" method="post" action="?halaman=anggota_up" enctype="multipart/form-data">
	<input type="hidden" name="id_anggota" value="<?php echo"$m[id_anggota]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nama :</label>
		<div class="col-sm-4">
			<input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="<?php echo"$m[nama]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jk :</label>
		<div class="col-sm-4">
			<input type="text" name="jk" class="form-control" placeholder="Masukan JK" value="<?php echo"$m[jk]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jurusan :</label>
		<div class="col-sm-4">
			<input type="text" name="jurusan" class="form-control" placeholder="Masukan Jurusan" value="<?php echo"$m[jurusan]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Angkatan:</label>
		<div class="col-sm-4">
			<input type="text" name="angkatan" class="form-control" placeholder="Masukan jam_kerja" value="<?php echo"$m[angkatan]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Alamat :</label>
		<div class="col-sm-4">
			<input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" value="<?php echo"$m[alamat]";?>" required>
		</div>
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
