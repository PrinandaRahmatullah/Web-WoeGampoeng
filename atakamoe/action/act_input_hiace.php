<?php
include "../../action/koneksi.php";
    $dari = $_POST["dari"];
    $tujuan = $_POST["tujuan"];
    $harga = $_POST["harga"];

    // echo "NIM : $varNim, Nama : $varNama, Jurusan : $varJurusan";
    $insert = $conn->query("insert into hargahiace (dari, tujuan, harga) values ('$dari', '$tujuan', '$harga')");

    if ($insert) {
        echo "<script>alert('Data SUCCESS Diinput!')</script>";
    }
    else{
        echo "<script>alert('Data GAGAL Diinput!')</script>";
    }
?>

<script>
    location.replace("../kelolaHarga.php");
</script>