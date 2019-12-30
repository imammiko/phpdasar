<?php 
if (isset($_POST["submit"])) {
	var_dump($_POST);	# code...
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>tambah data mahasiwsa</title>
</head>
<body>
<h1>tambah data mahasiswa</h1>
<form action="" method="post">
	<ul>
		<li>
			<label for="nrp">nrp: </label>
			<input type="text" name="nrp" id="nrp">
		</li>
		<li>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" id="nama">
		</li>
		<li>
			<label for="email">Email:  </label>
			<input type="text" name="email" id="email">
		</li>
		<li>
			<label for="gambar">Gambar: </label>
			<input type="text" name="gambar" id="gambar">
		</li>
		<li><button type="submint" name="submit">tambah data</button></li>
	</ul>

	

</form>
</body>
</html>