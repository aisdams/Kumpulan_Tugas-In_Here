<?php
// koneksi ke database
$link = mysqli_connect("localhost","root","","pengiriman");

function query($query) {
	global $link;
	$result = mysqli_query($link, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}




function tambah($data) {
	global $link;
	$NamaPengirim = htmlspecialchars($data["NamaPengirim"]);
	$NamaPenerima = htmlspecialchars($data["NamaPenerima"]);
	$JarakPengiriman = htmlspecialchars($data["JarakPengiriman"]);
	$AlamatPenerima = htmlspecialchars($data["AlamatPenerima"]);
	$JenisBarang = htmlspecialchars($data["JenisBarang"]);
	$BeratBarang = htmlspecialchars($data["BeratBarang"]);
	$HargaAll = htmlspecialchars($data["HargaAll"]);
	$Diskon = htmlspecialchars($data["Diskon"]);

	//query insert data
	$query = "INSERT INTO barang
			VALUES
			('', '$NamaPengirim', '$NamaPenerima', '$JarakPengiriman', '$AlamatPenerima', '$JenisBarang', '$BeratBarang', '$HargaAll', '$Diskon')
		";
	mysqli_query($link, $query);
	return mysqli_affected_rows($link);
}