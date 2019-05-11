<?php
include("koneksi.php");
?>
<h3 align="center">Data Petugas</h3>
<a href="?halaman=petugas_tambah" class="btn btn-primary btn-sm">Tambah Data Petugas</a><br /><br />
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<tr>
			<th>Id Petugas</th>
			<th>Nama</th>
			<th>Jk</th>
			<th>Jabatan</th>
			<th>Jam_Tugas</th>
			<th>Telpon</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
<?php
	$no=1;
	$query=("SELECT * FROM petugas");
	$lihat = mysqli_query($koneksi, $query) or die ('Error, query failed. ' .mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
		<tr>
			<td><?php echo"$r[id_petugas]";?></td>
			<td><?php echo"$r[nama]";?></td>
			<td><?php echo"$r[jk]";?></td>
			<td><?php echo"$r[jabatan]";?></td>
			<td><?php echo"$r[jam_tugas]";?></td>
			<td><?php echo"$r[telpon]";?></td>
			<td><?php echo"$r[alamat]";?></td>
			<td align="center">
				<a href="?halaman=petugas_edit&id=<?php echo"$r[id_petugas]";?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				<a href="?halaman=petugas_delete&id=<?php echo"$r[id_petugas]";?>" title="Hapus Data" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
		</tr>
<?php
$no++;
	} ?>
</table>
</div>