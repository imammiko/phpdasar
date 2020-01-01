<?php 
$conn=mysqli_connect(
"localhost",
"root",
"",
"phpdasar"
);
function query($query){
	global $conn;
	$result=mysqli_query($conn,$query);
	$rows=[];
	while($row=mysqli_fetch_assoc($result)){
		$rows[]=$row;
	}
	return $rows;
}
function tambah($data){
	global $conn;
	$nrp=htmlspecialchars($data["nrp"]);
	$nama=htmlspecialchars($data["nama"]);
	$email=htmlspecialchars($data["email"]);
	$jurusan=htmlspecialchars($data["jurusan"]);
	$gambar=htmlspecialchars($data["gambar"]);

	$query="INSERT INTO mahasiswa 
			VALUES
			(0,'$nrp','$nama','$email','$jurusan','$gambar')
			";
	if (!mysqli_query($conn,$query)) {
		echo("Error description: " . mysqli_error($con));
	  }
	return mysqli_affected_rows($conn);

}
function hapus($id){
	global $conn;
	if (!mysqli_query($conn,"DELETE FROM mahasiswa WHERE id=$id")) {
		echo("Error description: " . mysqli_error($con));
		echo "
		<script>
		alert('data gagal dihapus');
		document.location.href='index.php';
		
		</script>";
	
	}else{
		echo "
		<script>
		document.location.href='index.php';
		alert('data berhasil dihapus');
		
		
		</script>";


	}
}

 ?>