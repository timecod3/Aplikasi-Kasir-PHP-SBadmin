<?php
    include '../koneksi.php';

    $id_barang = $row['id_barang'];
    $nama_barang = $row['nama_barang'];
    $harga_jual = $row['harga_jual'];

    $query = "INSERT INTO `keranjang`(`id`, `nama_barang`, `jumlah`, `total`) VALUES ('','','','')";

    if($connection->query($query)){
        header("location: kasir.php");
    }else{
        echo "Data gagal Disimpan";
    }



?>