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
<?php foreach($mahasiswa as $mhs) :?>
<ul>
    <li><img src="img/<?php $mhs["gambar"]; ?>"> </li>

</ul>
<?php endforeach; ?>
</body>
</html>