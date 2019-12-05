<?php
include "../../../action/koneksi.php";

    $email = "prinanda50@gmail.com";
    $email_md5 = md5($email);
    $password = "Anywhere10";
    $pass_md5 = md5($password);

    // echo "NIM : $varNim, Nama : $varNama, Jurusan : $varJurusan";
    $insert = $conn->query("insert into admin (email, password) values ('$email_md5', '$pass_md5')");

    if ($insert) {   
        echo "<script>alert('Data Berhasil Diinput!')</script>";
    }
    else{
        echo "<script>alert('Data GAGAL Diinput!')</script>";
    }
?>

<script>
    location.replace("../../index.php");
</script>