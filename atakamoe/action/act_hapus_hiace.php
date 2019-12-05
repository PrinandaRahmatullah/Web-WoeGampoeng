<?php
  require_once "../../action/koneksi.php";

    $kode = $_GET["kode"];

    $delete = $conn->query("delete from hargahiace where kode=$kode");


    if ($delete) {
        echo "<script>alert('Data Berhasil Dihapus!')</script>";
    }
    else{
        echo "<script>alert('Data GAGAL Dihapus!')</script>";
    }
?>

<script>
    location.replace("../kelolaHarga.php");
</script>