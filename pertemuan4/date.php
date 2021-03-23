<?php 
function salam($waktu = "Datang", $nama = "Admin") {
	return "Selamat $waktu, $nama!";
}

	/* 
    Nama : Nazhif Hafidz Fauzan
    NRP : 203040018
    Kelas : Teknik Informatika A 
    Pertemuan ke 4
*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
	<h1><?= salam("Pagi", "Enjip"); ?></h1>
</body>
</html>