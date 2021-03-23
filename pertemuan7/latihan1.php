<?php
/*
Nazhif Hafidz Fauzan
203040018
https://github.com/sienjip/pw2021_203040018
Pertemuan 7 - 18 Maret 2021
Mempelajari mengenai Get & Post
*/
?>
<?php
// $_GET
$mahasiswa = [
    [
    "nama" => "Nazhif Hafidz Fauzan", 
    "nrp" => "203040018",
    "email" => "sienjip01@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "nazhif.jpg"
    ],
    [
        "nama" => "Gian Permana", 
        "nrp" => "1819291001",
        "email" => "MaouLucis@gmail.com",
        "jurusan" => "Teknik Pangan",
        "gambar" => "gian.jpg"
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>