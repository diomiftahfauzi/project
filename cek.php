<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM login WHERE username = '$username' and password = '$password'";
$login = mysqli_query($koneksi,$query);
$cek = mysqli_num_rows($login);

if ($cek>0){
    $data = mysqli_fetch_assoc($login);
    header("location:Penyewaan.php");
}
else {
    echo " Data Tidak Ada ";
}


?>