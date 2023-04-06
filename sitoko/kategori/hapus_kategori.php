<?php 
    include "../koneksi.php";

    $id = $_GET['id'];

    $query = "DELETE FROM `kategori` WHERE id = '$id'";
    if($connection->query($query)) {
        header("location: kategori.php");
    } else {
        echo "DATA GAGAL DIHAPUS!";
    }
?>