<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
<h1>Demo koneksi database</h1>
<?php 
$koneksi = mysqli_connect("localhost","root","","mahasiswa");

//check connection
if(mysqli_connect_errno()){
	echo "Koneksi database gagal : ".mysqli_connect_errno();
}else{
	echo "sukses";
}

 ?>
</body>
</html>