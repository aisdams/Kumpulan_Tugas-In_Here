<?php
require 'functions.php';
// cek apaakah tombol sumbit sudah ditekan
if( isset($_POST["submit"]) ) {
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
			alert('data berhasil ditambahkan');
			document.location.href = 'pengiriman.php'
			</script>
		";
	}else {
		echo "
			<script>
			alert('data gagal ditambahkan');
			document.location.href = 'pengiriman.php'
			</script>
		";
	}	

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
	<h1>Tambah Pengiriman Barang</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="NamaPengirim">Nama Pengirim : </label>
				<div align="left"><input type="text" name="NamaPengirim" id="NamaPengirim" required></div>
			</li>
			<li>
				<label for="NamaPenerima">Nama Penerima : </label>
				<div align="left"><input type="text" name="NamaPenerima" id="NamaPenerima"></div>
			</li>
			<li>
				<label for="JarakPengiriman">Jarak Pengiriman : </label>
				<div align="left"><input type="text" name="JarakPengiriman" id="JarakPengiriman"></center>
			</li>
			<li>
				<label for="AlamatPenerima">Alamat Penerima : </label>
				<div align="left"><input type="text" name="AlamatPenerima" id="AlamatPenerima"></div>
			</li>
			<li>
				<label for="JenisBarang">Jenis Barang : </label>
				<div align="left"><input type="text" name="JenisBarang" id="JenisBarang"></div>
			</li>
			<li>
				<label for="BeratBarang">Berat Barang : </label>
				<div align="left"><input type="text" name="BeratBarang" id="BeratBarang"></div>
			</li>
			<li>
				<label for="HargaAll">Harga All : </label>
				<div align="left"><input type="text" name="HargaAll" id="HargaAll"></div>
			</li>
			<li>
				<label for="Diskon">Diskon : </label>
				<div align="left"><input type="text" name="Diskon" id="Diskon">
				
		</ul>
			<center><button type="submit" name="submit">Tambah Data</button></center></p>
		
	</form>


</body>
</html>