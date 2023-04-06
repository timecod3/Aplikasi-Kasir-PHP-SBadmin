<?php
session_start();
include('sitoko/koneksi.php');

$username = addslashes(trim($_POST['username']));
$password = addslashes($_POST['password']);

$login = mysqli_query($connection, "SELECT * FROM `login` WHERE  username='$username' AND password='$password'");
//menghitung jumlah data yg ditemukan
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_array($login);

    if ($data['level'] == "admin") {

        //buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";

        header("location: sitoko/index.php");
    }
} else {
    header("location: index.php?pesan=gagal");
}
