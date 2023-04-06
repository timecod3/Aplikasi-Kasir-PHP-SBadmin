<?php
    include '../koneksi.php';

    $no = $_POST['id'];
    $id_barang = $_POST['id_barang'];
    $kategori = $_POST['kategori'];
    $nama_barang = $_POST['nama_barang'];
    $merk= $_POST['merk'];
    $stok = $_POST['stok'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $satuan = $_POST['satuan'];
    $tanggal = $_POST['tanggal'];

    $query = "UPDATE `data_barang` SET `id_barang`='$id_barang',`kategori`='$kategori',`nama_barang`='$nama_barang',`merk`='$merk',`stok`='$stok',`harga_beli`='$harga_beli',`harga_jual`='$harga_jual',`satuan`='$satuan', `tgl_input` = '$tanggal'WHERE id = '$no'";

    if($connection->query($query)){
        header("location: data_barang.php");
    }else{
        echo "Data gagal Diupdate";
    }



?>