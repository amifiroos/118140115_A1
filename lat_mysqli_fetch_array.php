<?php 
$koneksi=mysqli_connect("localhost","root","") or die ("Koneksi gagal");
mysqli_select_db($koneksi, "mahasiswa");
$hasil = mysqli_query($koneksi, "select * from informatika");
while ($row=mysqli_fetch_array($hasil)){
	print_r($row);
}

 ?>