<?php
/*
Nazhif Hafidz Fauzan
203040018
https://github.com/sienjip/pw2021_203040018
Pertemuan 5 - 4 Maret 2021
Mempelajari mengenai Array
*/
?>
<?php 
$mahasiswa = [
	["Nazhif Hafidz Fauzan", "203040018", "Teknik Informatika", "sienjip01@gmail.com"],
 	["Gian Permana", "1819291001", "Teknik Pangan", "MaouLucis@gmail.com"]
];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
	<li>Nama : <?= $mhs[0]; ?></li>
	<li>NRP : <?= $mhs[1]; ?></li>
	<li>Jurusan : <?= $mhs[2]; ?></li>
	<li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>





</body>
</html>