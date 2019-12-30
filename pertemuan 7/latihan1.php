<?php 

$mahasiswa=[
[
"nrp" => "04304343434",
"nama" => "sandhika galih",
"email"=>"sandhikagalih@gmail.com",
"jurusan"=>"teknik Industri",
"gambar"=>"1.jpeg"
],
[
"nama"=>"dody ferdiansyah",
"nrp"=>" 0330234234",
"email"=>"dodygenit@gmail.com",
"jurusan"=>"teknik mesin",
"gambar"=>"2.jpeg"
]
];
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>get</title>
</head>
<body>
<ul>
<h1>Daftar mahasiswa</h1>
<?php foreach($mahasiswa as $mhs) :?>
	<li>
		<a href="latihan2.php?
		nama=<?php echo $mhs["nama"]; ?>
		&nrp=<?php echo $mhs["nrp"]; ?>
		&email=<?php echo $mhs["email"]; ?>
		&jurusan=<?php echo $mhs["jurusan"]; ?>
		&gambar=<?php echo $mhs["gambar"]; ?>"
		><?=$mhs["nama"]; ?>
			</a>
		</li> 
    
<?php endforeach; ?>
</ul>

</body>
</html>