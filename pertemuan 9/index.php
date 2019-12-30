<?php 
require 'functions.php';
$mahasiswa=query("SELECT * FROM mahasiswa");


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>halaman admin</title>
</head>
<body>
	<h1>daftar mahasiwa</h1>
	<a href="tambah.php"> tambah data mahasiswa</a>
	<br><br>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>no.</th>
			<th>aksi</th>
			<th>gambar</th>
			<th>nrp</th>
			<th>nama</th>
			<th>Email</th>
			<th>jurusan</th>

		</tr>
		<?php $i=1; ?>
		<?php foreach ($mahasiswa as $row): ?>
		<tr>
			<td><?php  echo $i?></td>
			<td>
				<a href="">Ubah</a>|
				<a href="">hapus</a>
			</td>
			<td><img src="img/<?php echo $row["gambar"] ?>" width="50"></td> 
			<td> <?php echo $row["nrp"]; ?></td>
			<td> <?php echo $row["nama"]; ?></td>
			<td> <?php echo $row["email"]; ?></td>
			<td> <?php echo $row["jurusan"]; ?></td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>

	</table>


</body>
</html>