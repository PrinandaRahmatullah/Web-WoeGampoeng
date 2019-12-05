<?php
    require_once "koneksi.php";
    // if(isset('#save')){
        
    // }
    session_start();
    $email = $_SESSION["email"];
    $semail = md5($email);
    $nama = $_POST["nama"];
    $nik = $_POST["nik"];
    $no_hp = $_POST["no_hp"];
    $no_hp_d = $_POST["no_hp_darurat"];
    $tempat = $_POST["tempat"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $kota = $_POST["kota"];
    $kecamatan = $_POST["kecamatan"];
    $desa = $_POST["desa"];
    $alamat = $_POST["alamat"];
    $password = $_SESSION["password"];
    $pass = md5($password);
    $password2 = $_POST["password2"];
    $pass2 = md5($password2);
    $password3 = $_POST["password3"];
    $pass3 = md5($password3);
    
    
    if($password2 && $password3){
        $ubah = $conn->query("update pengguna set nama='$nama', nik='$nik', tempat_lahir='$tempat', tanggal_lahir='$tgl_lahir', kota='$kota', kecamatan='$kecamatan', desa='$desa', alamat='$alamat', no_hp='$no_hp', no_hp_darurat='$no_hp_d', password='$pass3' where email='$semail'");
    }else{
        $ubah = $conn->query("update pengguna set nama='$nama',nik='$nik', tempat_lahir='$tempat', tanggal_lahir='$tgl_lahir', kota='$kota', kecamatan='$kecamatan', desa='$desa', alamat='$alamat', no_hp='$no_hp', no_hp_darurat='$no_hp_d', password='$pass' where email='$semail'");
    }

    if ($ubah) {
        session_start();
        $_SESSION["nama"]=$nama;
        $_SESSION["nik"]=$nik;
        if($password2 && $password3){
            $_SESSION["password"]=$password2;
        }
        else{
            $_SESSION["password"]=$password;
        }
        echo "<script>alert('SUccess')</script>";
        header("Location: ../acset.php");
    }
    else{
        echo "<script>alert('Data GAGAL Diubah!')</script>";
        header("Location: ../changeprofile.php");
    }

?>
