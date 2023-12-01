<?php
	include 'koneksi.php';

	$id = $_GET['id'];
	mysqli_query($koneksi, "delete from penyewa where id='$id'");
	header('Location: sewaan.php');
	
?>