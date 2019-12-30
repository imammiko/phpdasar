<?php 


if( !isset($_GET["nama"])
	||!isset($_GET["nrp"])
	||!isset($_GET["email"])
	||!isset($_GET["jurusan"])
	||!isset($_GET["nrp"])
	
	){
	//reidrect
	header("Location:latihan1.php");
	exit;

}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Detail mahasiswa</title>
</head>
<body>
<ul>
	<li><img src="img/<?php echo $_GET["gambar"]; ?>"></li>
	<li><?php echo $_GET["nama"]; ?></li>
	<li><?php echo $_GET["nrp"]; ?></li>
	<li><?php echo $_GET["email"]; ?></li>
	<li><?php echo $_GET["jurusan"]; ?></li>

</ul>
<a href="latihan1.php">kembali</a>
</body>
</html>