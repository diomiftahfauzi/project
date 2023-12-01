<style>
	table, th, td {
		border: 1px solid;
		border: 1px solid #ddd;
   	    padding: 8px;
	}
	table th, td {
		border: 1 px solid;
		font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
	}
	table {
		width: 100%;
		text-align: center;
		background-color: #ddd;
		padding-top: 12px;
   	 	padding-bottom: 12px;
  		text-align: left;
  		background-color: #2a2c39;
  		color: whitesmoke;
	}
    h3{
		text-align: center;
		background-color: #FFF;
  		color: whitesmoke;
    }

</style>
<!DOCTYPE html>
<html lang="en">
<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
    <div class="carousel-item active">
        <div class="carousel-container">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <div class="logo">
        <h1><a>Sewa</a></h1>

 
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
 

<h3>sewa</h3>
<form action="" method="post">
    <table>
        <tr>
            <td widht="130">id</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td> nama </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td> alamat </td>
            <td><input type="text" name="alamat"></td>
        </tr> 
        <tr>
            <td> No hp </td>
            <td><input type="text" name="no_hp"></td>
        </tr>
        <tr>
        
            <td></td>
            <td><input type="submit" value="simpan" name="proses"></td>
        </tr>
    </table>
</form>


<?php
include "koneksi.php";
if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into penyewa set
    id = '$_POST[id]',
    nama = '$_POST[nama]',
    alamat = '$_POST[alamat]',
    no_hp = '$_POST[no_hp]'");            
    
    echo "data telah di simpan";

}


?>


  <section id="hero">
<a href="sewaan.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">lihat</a>     <a href="tampilanawal.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">kembali</a>         <a href="register.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">halaman login</a>


<svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>
      