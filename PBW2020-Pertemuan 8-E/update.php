<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"update mahasiswa set nim='$nim', nama='$nama', alamat='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke halaman_admin.php
header("location:halaman_admin.php");
 
?>