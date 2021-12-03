<?php
if(!isset($_SESSION)) {
    session_start();
}
 
//jika ada orang yang masuk tanpa login
if(empty($_SESSION['username'])) {
    header("location: login.php");
}
//memanggil file koneksi
include('config/koneksi.php');
 
//ambil data dari database
$query="SELECT * FROM admin";
 
$data=mysqli_query($conn,$query);
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Data Pengurus</title>
</head>
<body>
 
<h1>Data Pengurus</h1>


<p>
    <a href="logout.php">Logout</a>
</p>

<table border="1">
    <tr>
        <th>id_admin</th>
        <th>username</th>
        <th>password</th>
    </tr>
<?php
 while($row=mysqli_fetch_assoc($data)) {
?>
    <tr>
        <td><?php echo $row['id_admin']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td>
            <a href="edit_admin.php?id_admin=<?php echo $row['id_admin']; ?>">Edit</a> | 
            <a href="delete_admin.php?id_admin=<?php echo $row['id_admin']; ?>" onclick="return confirm('Yakin nih?')">Delete</a>
 
        </td>
    </tr>
<?php 
 }
?>
</table>
<hr>
 
<h1>Input Data</h1>
 
<form method="post" action="simpan_admin.php">
    <p>id_admin <input type="text" name="id_admin" required="required"> </p>
    <p>username <input type="text" name="username"> </p>
    <p>password <input type="password" name="password"></textarea> </p>
        <button type="submit">Simpan</button>
        <button type="reset">Batal</button>
    </p>
</form>
</body>
</html>