<?php
include"koneksi.php";
$query=("SELECT * FROM pengembalian WHERE id_kembali='$_GET[id]'");
$galeri=mysqli_query($koneksi,$query) or die('Error,query failed. ' .mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Pengembalian</h3>
<form class="form-horizontal" method="post" action="?halaman=pengembalian_up" enctype="multipart/form-data">
	<input type="hidden" name="id_kembali" value="<?php echo"$m[id_kembali]";?>"/>
	</div>
	<div class="form-group">
	<label class="col-sm-3 control-label">Tanggal Kembali :</label>
		<div class="col-sm-4">
			<input type="date" name="tanggal_kembali" class="form-control" placeholder="Masukan tanggal kembali" value="<?php echo"$m[tanggal_kembali]";?>" required>
		</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jatuh Tempo:</label>
		<div class="col-sm-4">
			<input type="text" name="jatuh_tempo" class="form-control" placeholder="" value="<?php echo"$m[jatuh_tempo]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Denda  Per Hari:</label>
		<div class="col-sm-4">
			<input type="text" name="denda_per_hari" class="form-control" placeholder="" value="<?php echo"$m[denda_per_hari]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">jumlah_hari:</label>
		<div class="col-sm-4">
			<input type="time" name="jumlah_hari" class="form-control" placeholder="" value="<?php echo"$m[jumlah_hari]";?>" required>
		</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Total Denda:</label>
		<div class="col-sm-4">
			<input type="time" name="total_denda" class="form-control" placeholder="" value="<?php echo"$m[total_denda]";?>" required>
		</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Petugas:</label>
		<div class="col-sm-4">
			<input type="time" name="id_petugas" class="form-control" placeholder="" value="<?php echo"$m[id_petugas]";?>" required>
		</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Anggota:</label>
		<div class="col-sm-4">
			<input type="time" name="id_anggota" class="form-control" placeholder="" value="<?php echo"$m[id_anggota]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label"> Id Buku:</label>
		<div class="col-sm-4">
			<input type="text" name="id_buku" class="form-control" placeholder="" value="<?php echo"$m[id_buku]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
			<input type="submit" name="tambah_pengembalian" class="btn btn-sm btn-primary" value="simpan">
			<a href="?halaman=pengembalian" class="btn btn-sm btn-danger">Batal</a>
			</div>
			</div>
			</form> 
