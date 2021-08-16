<?php
	

	$BesarDiskon = null;
	$HargaSetelahDiskon = null;

	if (isset($_POST["submit"])) {

		$BesarDiskon = $_POST["harga"] * $_POST["Diskon"] / 100;
		$HargaSetelahDiskon = $_POST["harga"] - $BesarDiskon;

	} else {
		$BesarDiskon = null;
		$HargaSetelahDiskon = null;
	}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Hitung Diskon</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
	<h1>Kalkulator Diskon</h1>
	<form action="" method="post">
		<table>
			<tr>
				<td>Harga jarak 1 km 10.000 Atau 1 kg 5.000:</td>
				<td>Rp <input name="harga"/></td>
			</tr>
			<tr>
				<td>Diskon kiriman > 50.000 =10% Atau barang > 100.000 =5% :</td>
				<td><input name="Diskon"/> %</td>
			</tr>

			<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="submit">
			</td>
			</tr>

			<tr>
				<td>Besar Diskon :</td>
				<td>Rp <?php echo $BesarDiskon; ?></td>
			</tr>

			<tr>
				<td>Harga Setelah Diskon :</td>
				<td>Rp <?php echo $HargaSetelahDiskon; ?></td>
			</tr>
		</table>
	</form>
</body>
</html>