<h3 align="center">Tambah Rak</h3>
<form class="form-horizontal" method="post" action="?halaman=rak_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Rak: </label>
		<div class="col-sm-4">
			<input type="text" name="id_rak" class="form-control" placeholder="Masukan id_rak" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nama Rak : </label>
		<div class="col-sm-4">
			<input type="text" name="nama_rak" class="form-control" placeholder="Masukan nama" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Buku : </label>
		<div class="col-sm-4">
			<input type="text" name="id_buku" class="form-control" placeholder="Masukan id buku" required>
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
