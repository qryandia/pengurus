<?php
//buat session
if(!isset($_SESSION)) {
    session_start();
}
 
//koneksi
require_once('config/koneksi.php');
 
//ambil data dari form
$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=md5(mysqli_real_escape_string($conn,$_POST['password']));
 
// mencari data username dan password di database
$query="SELECT * FROM admin WHERE username='$username' AND password='$password'";
$data=mysqli_query($conn,$query);

// var_dump($data);
 
// // cek berapa jumlah data yang ada
$login=mysqli_num_rows($data);
// var_dump($login);
 
if($login > 0) { //apakah data ditemukan
    //memasukan data username kedalam session
    $_SESSION['username']=$username;
    header("location: tampil_data.php");
} else {
    // jika gagal login kembali ke tampilan login
    header("location: login.php");
}
 
?>