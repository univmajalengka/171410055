<?php
include"koneksi.php";
$query=("SELECT * FROM rak WHERE id_rak='$_GET[id]'");
$galeri=mysqli_query($koneksi,$query) or die('Error,query failed. ' .mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Rak</h3>
<form class="form-horizontal" method="post" action="?halaman=rak_up" enctype="multipart/form-data">
	<input type="hidden" name="id_rak" value="<?php echo"$m[id_rak]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nama  Rak:</label>
		<div class="col-sm-4">
			<input type="text" name="nama_rak" class="form-control" placeholder="Masukan Nama" value="<?php echo"$m[nama_rak]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Buku :</label>
		<div class="col-sm-4">
			<input type="text" name="id_buku" class="form-control" placeholder="Masukan Id Buku" value="<?php echo"$m[id_buku]";?>" required>
		</div>
	</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
			<input type="submit" name="tambah_rak" class="btn btn-sm btn-primary" value="simpan">
			<a href="?halaman=rak" class="btn btn-sm btn-danger">Batal</a>
			</div>
			</div>
			</form> 
