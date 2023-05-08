<?php

include 'config/koneksi.php';

function registrasi($data){
    global $conn;


    $username = stripslashes ($data['username']);
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    //cek konfirmasi password
    if( $password !== $password2 ) {
        echo "<script>
        alert('konfirmasi password tidak sesuai!');
        </script>";
        return false;
    }

    //enkrpisi pass
    $password = password_hash($password, PASSWORD_DEFAULT);

    //insert ek db
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}

?>