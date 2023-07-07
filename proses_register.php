<?php
session_start();
include 'config/koneksi.php';

$user = [
    'nama' => $_POST['nama'],
    'username' => $_POST['username'],
    'password' => $_POST['password'],
    'password2' => $_POST['password2'], 
    'email' => $_POST['email'],
    'user_type' => $_POST['user_type']
];

//cek konfirmasi password
if($user['password'] != $user['password2']){
    $_SESSION['error'] = 'Password yang anda masukkan tidak sama!';
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['user_type'] = $_POST['user_type'];
    header("Location: user.php");
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

//Jika sdh ada, maka kembali ke halaman user
if($row != null){
    $_SESSION['error'] = 'username: '.$user['username'].' yang anda masukkan sudah tersedia!';
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['password2'] = $_POST['password2'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['user_type'] = $_POST['user_type'];
    header("Location: user.php");
    return;
}else{
    //hash
    // $password = password_hash($user['password'],PASSWORD_DEFAULT);


    $query = "INSERT INTO users (nama, username, password, email, user_type) values  (?,?,?,?,?)";
    $stmt = $conn->stmt_init();
    $stmt->prepare($query);
    $stmt->bind_param('sssss', $user['nama'], $user['username'], $password, $user['email'], $user['user_type']);
    $stmt->execute();
    $result = $stmt->get_result();
   
    $_SESSION['message']  = 'Berhasil registrasi. Silakan login!';
    header("Location: user.php");
}
 
?>
