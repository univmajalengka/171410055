<h3 align="center">Tambah Anggota</h3>
<form class="form-horizontal" method="post" action="?halaman=anggota_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Anggota : </label>
		<div class="col-sm-4">
			<input type="text" name="id_anggota" class="form-control" placeholder="Masukan id_anggota" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nama : </label>
		<div class="col-sm-4">
			<input type="text" name="nama" class="form-control" placeholder="Masukan nama" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jk : </label>
		<div class="col-sm-4">
			<input type="text" name="jk" class="form-control" placeholder="Masukan jk" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jurusan : </label>
		<div class="col-sm-4">
			<input type="text" name="jurusan" class="form-control" placeholder="Masukan jurusan" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Angkatan: </label>
		<div class="col-sm-4">
			<input type="text" name="angkatan" class="form-control" placeholder="Masukan angkatan" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Alamat: </label>
		<div class="col-sm-4">
			<input type="text" name="alamat" class="form-control" placeholder="Masukan alamat" required>
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
