<?php 
    include "../koneksi.php";

    $no = $_GET['id'];

    $query = "DELETE FROM `keranjang` WHERE id = '$no'";
    if($connection->query($query)) {
        header("location: kasir.php");
    } else {
        echo "DATA GAGAL DIHAPUS!";
    }
?>