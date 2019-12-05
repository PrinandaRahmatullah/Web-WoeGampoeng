<?php
require_once "koneksi.php";

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $email_md5 = md5($email);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $pass_md5 = md5($password);

    $query = $conn->query ("SELECT * FROM pengguna WHERE email='$email_md5' and password='$pass_md5'");


    if($query->num_rows > 0){
        session_start();
        $_SESSION["email"]=$email;
        $hasil = $query->fetch_assoc();
        $_SESSION["nama"]=$hasil['nama'];
        $_SESSION["password"]=$password;
        header("Location: ../index.php");
    }
    else{
        echo "<script>alert('Email atau Password Salah!');location.replace('../login.php');</script>";
    }

?>