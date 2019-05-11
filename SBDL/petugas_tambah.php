<h3 align="center">Tambah Petugas</h3>
<form class="form-horizontal" method="post" action="?halaman=petugas_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Petugas : </label>
		<div class="col-sm-4">
			<input type="text" name="id_petugas" class="form-control" placeholder="Masukan id_petugas" required>
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
		<label class="col-sm-3 control-label">Jabatan : </label>
		<div class="col-sm-4">
			<input type="text" name="jabatan" class="form-control" placeholder="Masukan jabatan" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jam Tugas: </label>
		<div class="col-sm-4">
			<input type="time" name="jam_tugas" class="form-control" placeholder="Masukan jam_tugas" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Telpon: </label>
		<div class="col-sm-4">
			<input type="text" name="telpon" class="form-control" placeholder="Masukan telpon" required>
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
		<input type="submit" name="tambah_petugas" class="btn btn-sm btn-primary" value="simpan">
		<a href="?halaman=petugas" class="btn btn-sm btn-danger">Batal</a>
	</div>
</div>
</form>
