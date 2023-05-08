<?php 
 
include 'config/koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 

$user = mysqli_query($conn, "SELECT * FROM users where username='$username' and password='$password'");

$cek = mysqli_num_rows($user);
 
if($cek > 0) {
	session_start();
	$row = mysqli_fetch_array($user);
    $_SESSION['password'] = $row['password'];
	$_SESSION['login_time'] = time();
    header("location: index.php");
} else {
	header("location:login.php?pesan=Password dan Username Salah!");
}
?>