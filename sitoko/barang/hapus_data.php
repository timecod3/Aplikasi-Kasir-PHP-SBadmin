<?php 
    include "../koneksi.php";

    $no = $_GET['id'];

    $query = "DELETE FROM `data_barang` WHERE id = '$no'";
    if($connection->query($query)) {
        header("location: data_barang.php");
    } else {
        echo "DATA GAGAL DIHAPUS!";
    }
?>