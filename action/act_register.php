<?php
include "koneksi.php";

    $nadep = $_POST["nama"];
    $nik = $_POST["nik"];
    $email = $_POST["email"];
    $email_md5 = md5($email);
    $password =$_POST["password"];
    $pass_md5 = md5($password);

    // echo "NIM : $varNim, Nama : $varNama, Jurusan : $varJurusan";
    $insert = $conn->query("insert into pengguna (email, nama, nik, password) values ('$email_md5', '$nadep', '$nik', '$pass_md5')");

    if ($insert) {
        echo "<script>alert('Data Berhasil Diinput!')</script>";
    }
    else{
        echo "<script>alert('Data GAGAL Diinput!')</script>";
    }
?>

<script>
    location.replace("../login.php");
</script>