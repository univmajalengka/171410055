<h3 align="center">Tambah Peminjaman</h3>
<form class="form-horizontal" method="post" action="?halaman=peminjaman_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Peminjaman : </label>
		<div class="col-sm-4">
			<input type="text" name="id_peminjaman" class="form-control" placeholder="Masukan id_peminjaman" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tanggal Pinjam : </label>
		<div class="col-sm-4">
			<input type="date" name="tanggal_pinjam" class="form-control" placeholder="Masukan tanggal" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tanggal Kembali: </label>
		<div class="col-sm-4">
			<input type="date" name="tanggal_kembali" class="form-control" placeholder="Masukan tanggal" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Petugas: </label>
		<div class="col-sm-4">
			<input type="text" name="id_petugas" class="form-control" placeholder="Masukan Id" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Anggota: </label>
		<div class="col-sm-4">
			<input type="text" name="id_anggota" class="form-control" placeholder="Masukan id anggota" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Buku </label>
		<div class="col-sm-4">
			<input type="text" name="id_buku" class="form-control" placeholder="Masukan id" required>
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
