
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sewaan</title>
   <!-- Template Main CSS File -->
 <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
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

</style>
</head>
<body>
<table>
<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
 
 <a href="penyewaan.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Kembali halaman utama</a>  <a href="penyewa.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Kembali</a>  
  



	<tr>
        <th>no</th>
		<th>id</th>
		<th>nama</th>
		<th>alamat</th>
		<th>no hp</th>
		<th>hapus data</th>
		<th>edit data</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no = 1;
	$data = mysqli_query($koneksi, "select * from penyewa");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<tr>

		<td> <?php echo $no++; ?></td>
			<td><?php echo $d['id']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['alamat']; ?></td>
			<td><?php echo $d['no_hp']; ?></td>
			<td><a href="hapus.php?id=<?php echo $d["id"]; ?>" onclick="return confirm('Aapakah kamu ingin menghapus data ini?')"><i class="btn btn-primary"></i> HAPUS</a></td>
			<td><a href="edit.php?id=<?php echo $d["id"]; ?>" onclick="return confirm('Aapakah kamu ingin mengedit data ini?')"><i class="btn btn-primary"></i> EDIT </a></td>
		</tr>
        <link href="assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <section id="hero" class="d-flex flex-column justify-content-end align-items-center">

		
        
        
        
	<?php
	}
	?>

</table>
</body>
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
</html> 

  




