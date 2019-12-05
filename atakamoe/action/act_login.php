<?php
require_once "../../action/koneksi.php";

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $email_md5 = md5($email);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $pass_md5 = md5($password);

    $query = $conn->query ("SELECT * FROM admin WHERE email='$email_md5' and password='$pass_md5'");
    

    if($query->num_rows > 0){
        session_start();
        $_SESSION["adminEmail"]=$email;
        header("Location: ../kelola.php");

    }
    else{
        echo "<script>alert('NIK atau Password Salah!');location.replace('../index.php');</script>";
    }

?>