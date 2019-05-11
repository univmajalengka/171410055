<h3 align="center">Tambah Buku</h3>
<form class="form-horizontal" method="post" action="?halaman=buku_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Buku : </label>
		<div class="col-sm-4">
			<input type="text" name="id_buku" class="form-control" placeholder="Masukan id_buku" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Judul: </label>
		<div class="col-sm-4">
			<input type="text" name="judul" class="form-control" placeholder="Masukan judul" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">penulis : </label>
		<div class="col-sm-4">
			<input type="text" name="penulis" class="form-control" placeholder="Masukan penulis" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Penerbit : </label>
		<div class="col-sm-4">
			<input type="text" name="penerbit" class="form-control" placeholder="Masukan penerbit" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tahun Terbit: </label>
		<div class="col-sm-4">
			<input type="text" name="tahun_terbit" class="form-control" placeholder="Masukan tahun_terbit" required>
		</div>
	</div>
<div class="form-group">
	<label class="col-sm-3 control-label">&nbsp;</label>
	<div class="col-sm-6">
		<input type="submit" name="tambah_buku" class="btn btn-sm btn-primary" value="simpan">
		<a href="?halaman=buku" class="btn btn-sm btn-danger">Batal</a>
	</div>
</div>
</form>
