<?php
include"koneksi.php";
$query=("SELECT * FROM petugas WHERE id_petugas='$_GET[id]'");
$galeri=mysqli_query($koneksi,$query) or die('Error,query failed. ' .mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Petugas</h3>
<form class="form-horizontal" method="post" action="?halaman=petugas_up" enctype="multipart/form-data">
	<input type="hidden" name="id_petugas" value="<?php echo"$m[id_petugas]";?>"/>
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
		<label class="col-sm-3 control-label">Jabatan :</label>
		<div class="col-sm-4">
			<input type="text" name="jabatan" class="form-control" placeholder="Masukan Jabatan" value="<?php echo"$m[jabatan]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jam Kerja:</label>
		<div class="col-sm-4">
			<input type="time" name="jam_kerja" class="form-control" placeholder="Masukan jam_kerja" value="<?php echo"$m[jam_kerja]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Telpon:</label>
		<div class="col-sm-4">
			<input type="text" name="telpon" class="form-control" placeholder="Masukan Telpon" value="<?php echo"$m[telpon]";?>" required>
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
			<input type="submit" name="edit_petugas" class="btn btn-sm btn-primary" value="simpan">
			<a href="?halaman=petugas" class="btn btn-sm btn-danger">Batal</a>
			</div>
			</div>
			</form> 
