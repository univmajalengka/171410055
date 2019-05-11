<?php
include("koneksi.php");
?>
<h3 align="center">Data Peminjaman</h3>
<a href="?halaman=peminjaman_tambah" class="btn btn-primary btn-sm">Tambah Data Peminjaman</a><br /><br />
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<tr>
			<th>Id Pinjam</th>
			<th>Tanggal Pinjam</th>
			<th>Tanggal kembali</th>
			<th>Id Petugas</th>
			<th>Id Anggota</th>
			<th>Id Buku</th>
			<th>Aksi</th>
		</tr>
<?php
	$no=1;
	$query=("SELECT * FROM peminjaman");
	$lihat = mysqli_query($koneksi, $query) or die ('Error, query failed. ' .mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
		<tr>
			<td><?php echo"$r[id_pinjam]";?></td>
			<td><?php echo"$r[tanggal_pinjam]";?></td>
			<td><?php echo"$r[tanggal_kembali]";?></td>
			<td><?php echo"$r[id_petugas]";?></td>
			<td><?php echo"$r[id_anggota]";?></td>
			<td><?php echo"$r[id_buku]";?></td>
			<td align="center">
				<a href="?halaman=peminjaman_edit&id=<?php echo"$r[id_pinjam]";?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				<a href="?halaman=peminjaman_delete&id=<?php echo"$r[id_pinjam]";?>" title="Hapus Data" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
		</tr>
<?php
$no++;
	} ?>
</table>
</div>