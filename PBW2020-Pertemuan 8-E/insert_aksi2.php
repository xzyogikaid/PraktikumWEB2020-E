<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$nim','$nama','$alamat')");
 
// mengalihkan halaman kembali ke halaman_pegawai.php
header("location:halaman_pegawai.php");
 
?>