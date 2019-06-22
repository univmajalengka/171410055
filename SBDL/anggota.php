<?php
include("koneksi.php");
?>
<h3 align="center">Data Anggota</h3>
<a href="?halaman=anggota_tambah" class="btn btn-primary btn-sm">Tambah Data Anggota</a><br /><br />
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<tr>
			<th>Id Anggota</th>
			<th>Nama</th>
			<th>Jk</th>
			<th>Jurusan</th>
			<th>Angkatan</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
<?php
	$no=1;
	$query=("SELECT * FROM anggota");
	$lihat = mysqli_query($koneksi, $query) or die ('Error, query failed. ' .mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
		<tr>
			<td><?php echo"$r[id_anggota]";?></td>
			<td><?php echo"$r[nama_anggota]";?></td>
			<td><?php echo"$r[jk]";?></td>
			<td><?php echo"$r[jurusan]";?></td>
			<td><?php echo"$r[angkatan]";?></td>
			<td><?php echo"$r[Alamat]";?></td>
			<td align="center">
				<a href="?halaman=anggota_edit&id=<?php echo"$r[id_anggota]";?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				<a href="?halaman=anggota_delete&id=<?php echo"$r[id_anggota]";?>" title="Hapus Data" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
		</tr>
<?php
$no++;
	} ?>
</table>
</div>