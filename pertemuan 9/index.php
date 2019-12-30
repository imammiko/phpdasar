<?php 
$conn=mysqli_connect(
"localhost",
"root",
"",
"phpdasar"
);

$result=mysqli_query(
$conn, "SELECT * FROM mahasiswa");
// while($mhs=mysqli_fetch_assoc($result)){
// var_dump($mhs["nama"]);
// }
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>halaman admin</title>
</head>
<body>
	<h1>daftar mahasiwa</h1>
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
		<?php while ($row=mysqli_fetch_assoc($result)):
		  ?>
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
	<?php endwhile; ?>

	</table>


</body>
</html>