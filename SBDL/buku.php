<?php
include("koneksi.php");
?>
<h3 align="center">Data Buku</h3>
<a href="?halaman=buku_tambah" class="btn btn-primary btn-sm">Tambah Data Buku</a><br /><br />
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<tr>
			<th>Id Buku</th>
			<th>Judul</th>
			<th>Penulis</th>
			<th>Penerbit</th>
			<th>Tahun_terbit</th>
			<th>Aksi</th>
		</tr>
<?php
	$no=1;
	$query=("SELECT * FROM buku");
	$lihat = mysqli_query($koneksi, $query) or die ('Error, query failed. ' .mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
		<tr>
			<td><?php echo"$r[id_buku]";?></td>
			<td><?php echo"$r[judul]";?></td>
			<td><?php echo"$r[penulis]";?></td>
			<td><?php echo"$r[penerbit]";?></td>
			<td><?php echo"$r[tahun_terbit]";?></td>
			<td align="center">
				<a href="?halaman=buku_edit&id=<?php echo"$r[id_buku]";?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				<a href="?halaman=buku_delete&id=<?php echo"$r[id_buku]";?>" title="Hapus Data" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
		</tr>
<?php
$no++;
	} ?>
</table>
</div>