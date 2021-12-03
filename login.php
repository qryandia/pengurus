<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        html{
            background-image:linear-gradient(to bottom right, #AED9E0 ,#fff);
            width:100%;
            height:100%;
        }
        form table {
            position: relative;
            right:50px;
        }
        form input{
            width: 275px;
            height:20px;
            margin:2%;
        }
        button{
            position: relative;
            left:5em;
            width:70px;
            height:35px;
            background: transparent;
            border-radius:10px;
            color:#1B78CF;
        }
    </style>
</head>
<body>
<h1 align="center">Halaman Login</h1>
<form method="post" action="aksi_login.php">
     
    <table align="center">
        <tr>
            <th>Username</th>
            <td><input type="text" name="username"></td>
        </tr> 
        <tr>
            <th>Password</th>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Login</button>
                <button type="reset">Batal</button>
            </td>
        </tr>
    </table>
 
</form>
 
</body>
</html>