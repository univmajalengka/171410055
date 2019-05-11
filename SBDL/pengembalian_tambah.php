<h3 align="center">Tambah Pengembalian</h3>
<form class="form-horizontal" method="post" action="?halaman=pengembalian_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Pengembalian : </label>
		<div class="col-sm-4">
			<input type="text" name="id_pengembalian" class="form-control" placeholder="" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tanggal Kembali : </label>
		<div class="col-sm-4">
			<input type="date" name="tanggal_kembali" class="form-control" placeholder="Masukan tanggal" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jatuh Tempo: </label>
		<div class="col-sm-4">
			<input type="text" name="jatuh_tempo" class="form-control" placeholder="" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Denda Per Hari: </label>
		<div class="col-sm-4">
			<input type="text" name="denda_per_hari" class="form-control" placeholder="" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jumlah Hari: </label>
		<div class="col-sm-4">
			<input type="text" name="jumlah_hari" class="form-control" placeholder="Masukan jumlah_hari" required>
		</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Total Denda: </label>
		<div class="col-sm-4">
			<input type="text" name="total_denda" class="form-control" placeholder="" required>
		</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Petugas: </label>
		<div class="col-sm-4">
			<input type="text" name="id_petugas" class="form-control" placeholder="" required>
		</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Anggota: </label>
		<div class="col-sm-4">
			<input type="text" name="id_anggota" class="form-control" placeholder="" required>
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
		<a href="?halaman=pengembalian" class="btn btn-sm btn-danger">Batal</a>
	</div>
</div>
</form>
