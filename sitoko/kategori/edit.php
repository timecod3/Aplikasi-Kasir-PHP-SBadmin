<?php
    include '../koneksi.php';

    $id = $_POST['id'];
    $kategori = $_POST['kategori'];
    $tanggal = $_POST['tanggal'];

    $query = "UPDATE `kategori` SET `judul`='$kategori',`tgl_input`='$tanggal' WHERE id = '$id'";
    
    $row = mysqli_query($connection, $query);
    if($row){
        header("location: kategori.php");
    }else{
        echo "Data gagal Diupdate";
    }



?>