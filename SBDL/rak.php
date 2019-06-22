<?php
include("koneksi.php");
?>
<h3 align="center">Data Rak</h3>
<a href="?halaman=rak_tambah" class="btn btn-primary btn-sm">Tambah Data Rak</a><br /><br />
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<tr>
			<th>Id Rak</th>
			<th>Nama Rak</th>
			<th>judul</th>
			<th>penulis</th>
			<th>penerbit</th>
			<th>tahun_terbit</th>
			<th>Aksi</th>
		</tr>
<?php
	$no=1;
	$query=("SELECT * FROM view_rak");
	$lihat = mysqli_query($koneksi, $query) or die ('Error, query failed. ' .mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
		<tr>
			<td><?php echo"$r[id_rak]";?></td>
			<td><?php echo"$r[nama_rak]";?></td>
			<td><?php echo"$r[judul]";?></td>
			<td><?php echo"$r[penulis]";?></td>
			<td><?php echo"$r[penerbit]";?></td>
			<td><?php echo"$r[tahun_terbit]";?></td>
			<td align="center">
				<a href="?halaman=rak_edit&id=<?php echo"$r[id_rak]";?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				<a href="?halaman=rak_delete&id=<?php echo"$r[id_rak]";?>" title="Hapus Data" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
		</tr>
<?php
$no++;
	} ?>
</table>
</div>