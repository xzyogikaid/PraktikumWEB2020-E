<?php 
$koneksi = mysqli_connect("localhost","root","","PBW2020-Pertemuan 8-E");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>