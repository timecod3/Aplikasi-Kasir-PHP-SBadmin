<?php
    include '../koneksi.php';

    $id_barang = $_POST['id_barang'];
    $kategori = $_POST['kategori'];
    $nama_barang = $_POST['nama_barang'];
    $merk= $_POST['merk'];
    $stok = $_POST['stok'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $satuan = $_POST['satuan'];
    $tanggal = $_POST['tanggal'];

    $query = "INSERT INTO `data_barang`(`id`, `id_barang`, `kategori`, `nama_barang`, `merk`, `stok`, `harga_beli`, `harga_jual`, `satuan`, `tgl_input`) VALUES ('','$id_barang','$kategori','$nama_barang','$merk','$stok','$harga_beli','$harga_jual','$satuan','$tanggal')";

    if($connection->query($query)){
        header("location: data_barang.php");
    }else{
        echo "Data gagal Disimpan";
    }



?>