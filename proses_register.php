<?php
session_start();
include 'config/koneksi.php';

$user = [
    'nama' => $_POST['nama'],
    'username' => $_POST['username'],
    'password' => $_POST['password'],
    'password2' => $_POST['password2'], 
];

//cek konfirmasi password
if($user['password'] != $user['password2']){
    $_SESSION['error'] = 'Password yang anda masukkan tidak sama!';
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['username'] = $_POST['username'];
    header("Location: registrasi.php");
    return;
}

//cek ketersediaan uname
$query = "SELECT * FROM users where username = ? limit 1";
$stmt = $conn->stmt_init();
$stmt->prepare($query);
$stmt->bind_param('s', $user['username']);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array(MYSQLI_ASSOC);

//Jika sdh ada, maka kembali ke halaman registrasi
if($row != null){
    $_SESSION['error'] = 'username: '.$user['username'].' yang anda masukkan sudah tersedia!';
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['password2'] = $_POST['password2'];
    header("Location: registrasi.php");
    return;
}else{
    //hash
    $password = password_hash($user['password'],PASSWORD_DEFAULT);

    $query = "INSERT INTO users (nama, username, password) values  (?,?,?)";
    $stmt = $conn->stmt_init();
    $stmt->prepare($query);
    $stmt->bind_param('sss', $user['nama'], $user['username'], $password);
    $stmt->execute();
    $result = $stmt->get_result();
    var_dump($result);
    $_SESSION['message']  = 'Berhasil registrasi. Silakan login!';
    header("Location: registrasi.php");
}
 
?>