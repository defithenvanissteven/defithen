<?php
$username   = $_POST['username'];
$pass       = $_POST['password'];

include 'koneksi.php';

$user = mysqli_query($connect,"select * from user where username='$username' and password='$pass'");
$chek = mysqli_num_rows($user);
if($chek>0)
{

    header("location:index2.php");
}else
{
    echo "<center>Username dan Password anda salah<br>";
    echo "Silahkan <a href=index.php> Login</a> kembali</center>";
}
?>