<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$id_motor = $_POST['id_motor'];
 
mysqli_query($koneksi,"update penyewa set id='$id', nama='$nama', alamat='$alamat', no_hp='$no_hp', id_motor='$id_motor'  where id='$id'");
 
header("location:sewaan.php");
 
?>