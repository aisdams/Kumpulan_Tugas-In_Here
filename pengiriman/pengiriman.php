<?php
require 'functions.php';
$Pengiriman = query("SELECT * FROM barang");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pengiriman Barang</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
	<h1>Pengiriman Barang</h1>
	<a href="tambah.php"><font style="color: #00000"size="5">Tambah Pengiriman Barang</a></font>
	<br></br>


	<table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th>No</th>
			<th>Aksi</th>
			<th>Nama-Pengirim</th>
			<th>Nama-Penerima</th>
			<th>Jarak-Pengiriman</th>
			<th>Alamat-Penerima</th>
			<th>Jenis-Barang</th>
			<th>Berat-Barang</th>
			<th>Harga-All</th>
			<th>Diskon</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach( $Pengiriman as $row ) : ?>
		
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="">Ubah</a> ꟾ
				<a href="Hitung.php">Hitung Diskon</a>
			</td>
			<td><?= $row["NamaPengirim"]; ?></td>
			<td><?= $row["NamaPenerima"]; ?></td>
			<td><?= $row["JarakPengiriman"]; ?></td>
			<td><?= $row["AlamatPenerima"]; ?></td>
			<td><?= $row["JenisBarang"]; ?></td>
			<td><?= $row["BeratBarang"]; ?></td>
			<td><?= $row["HargaAll"]; ?></td>
			<td><?= $row["Diskon"]; ?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</table>