<?php
include("koneksi.php");
?>
<h3 align="center">Data Pengembalian</h3>
<a href="?halaman=pengembalian_tambah" class="btn btn-primary btn-sm">Tambah Data Pengembalian</a><br /><br />
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<tr>
			<th>Id Kembali</th>
			<th>Nama Petugas</th>
			<th>Id anggota</th>
			<th>Judul</th>
			<th>Tanggal Kembali</th>
			<th>Jatuh Tempo</th>
			<th>Denda</th>
			<th>Jumlah Hari</th>
			<th>Total Denda</th>
			<th>Aksi</th>
		</tr>
<?php
	$no=1;
	$query=("SELECT  * from  view_pengembalian");
	$lihat = mysqli_query($koneksi, $query) or die ('Error, query failed. ' .mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
		<tr>
			<td><?php echo"$r[id_kembali]";?></td>
			<td><?php echo"$r[nama_petugas]";?></td>
			<td><?php echo"$r[nama_anggota]";?></td>
			<td><?php echo"$r[judul]";?></td>
			<td><?php echo"$r[tanggal_kembali]";?></td>
			<td><?php echo"$r[jatuh_tempo]";?></td>
			<td><?php echo"$r[denda_per_hari]";?></td>
			<td><?php echo"$r[jumlah_hari]";?></td>
			<td><?php echo"$r[total_denda]";?></td>
			<td align="center">
				<a href="?halaman=pengembalian_edit&id=<?php echo"$r[id_kembali]";?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				<a href="?halaman=pengembalian_delete&id=<?php echo"$r[id_kembali]";?>" title="Hapus Data" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
		</tr>
<?php
$no++;
	} ?>
</table>
</div>