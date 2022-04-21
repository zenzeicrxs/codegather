<?php 
// koneksi database
include '../config/config.php';
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$nama	= $_POST['nama'];
$level = $_POST['level'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
// menginput data ke database
mysqli_query($koneksi,"insert into admin values('','$username','$password','$nama','$level','$jabatan','$alamat','$email')");
 
// mengalihkan halaman kembali ke index.php
header("location:../login.php");
 
?>