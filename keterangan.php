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




</body>
</html>

</style>


<table>
<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
 
 <a href="penyewaan.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Kembali</a>  

 <!-- Template Main CSS File -->
 <link href="assets/css/style.css" rel="stylesheet">

	<tr>
		<th>No</th>
		<th>id</th>
		<th>warna motor</th>
		<th>cc motor</th>
		<th>plat motor</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no = 1;
	$data = mysqli_query($koneksi, "select * from keterangan_motor");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<tr>

		<td> <?php echo $no++; ?></td>
			<td><?php echo $d['id_motor']; ?></td>
			<td><?php echo $d['warna motor']; ?></td>
			<td><?php echo $d['cc motor']; ?></td>
			<td><?php echo $d['plat motor']; ?></td>
		</tr>
	<?php
	}
	?>
</table>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Keteran</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  </div>
  </div>
</body>












