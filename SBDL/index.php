<!DOCTYPE html>
<html>
<head>
	<title>My web</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"></a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="?halaman=default">Home</a></li>
					<li><a href="?halaman=petugas">Petugas</a></li>
					<li><a href="?halaman=anggota">Anggota</a></li>
					<li><a href="?halaman=buku">Buku</a></li>
					<li><a href="?halaman=peminjaman">Peminjaman</a></li>
					<li><a href="?halaman=pengembalian">Pengembalian</a></li>
					<li><a href="?halaman=rak">rak</a></li>
				</ul>
			</div>
		</nav>
		<div class="container">

			<div>
				<div class="jumbotron">
					<?php
					include("halaman.php");
					?>
				</div>
				</div>
			</div>
		</div>
	</body>
	</html>