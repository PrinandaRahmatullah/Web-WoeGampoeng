<?php
require_once "../../action/koneksi.php";
    $tujuan = $_POST["tujuan"];
    $dari = $_POST["dari"];
    $harga = $_POST["harga"];
    $ubah = $conn->query("update hargatravello set dari='$dari', harga=$harga where tujuan='$tujuan'");

    if ($ubah) {
        session_start();    
        echo "<script>alert('Data SUKSES Diubah!')</script>";
    }
    else{
        echo "<script>alert('Data GAGAL Diubah!')</script>";
    }
?>

<script>
    location.replace("../kelolaHarga.php");
</script>