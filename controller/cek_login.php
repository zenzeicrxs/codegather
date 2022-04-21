<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../config/config.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$dt = mysqli_fetch_assoc($data);
	if($dt['level']== "Admin"){
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "Admin";
    $_SESSION['status'] = "login";
    header("location:../admin/index.php");
}else{
    header("location:../login.php?pesan=gagal");
}
}else if($dt['level'] == "Instruktur"){
	 $_SESSION['username'] = $username;
    $_SESSION['level'] = "Instruktur";
    $_SESSION['status'] = "login";
    header("location:../Instruktur/home.php");
}else{
    header("location:../login.php?pesan=gagal");
}

?>