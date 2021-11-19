<?php
//koneksi
include('config/koneksi.php');
 
//ambil data dari form
$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$gender=$_POST['gender'];
$gaji=$_POST['gaji'];
 
//memasukan data ke database
$query="UPDATE tb_pengurus SET nama = '$nama', alamat = '$alamat', gender = '$gender', gaji = '$gaji' WHERE id = '$id' ";
$ubah=mysqli_query($conn,$query);
 
?>
<a href="tampil_data.php"> Kembali Untuk lihat Data</a>