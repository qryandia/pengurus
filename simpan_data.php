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
$query="INSERT INTO tb_pengurus VALUES ('$id', '$nama', '$alamat', '$gender', '$gaji')";
$simpan=mysqli_query($conn,$query);
 
?>
<a href="tampil_data.php"> Kembali Untuk lihat Data</a>