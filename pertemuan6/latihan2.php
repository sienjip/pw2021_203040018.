<?php
/*
Nazhif Hafidz Fauzan
203040018
https://github.com/sienjip/pw2021_203040018
Pertemuan 6 - 10 Maret 2021
Mempelajari mengenai Array Associative
*/
?>
<?php
// $mahasiswa = [
// 	["Nazhif Hafidz Fauzan", "203040018", "Teknik Informatika", "sienjip01@gmail.com"],
// 	["Gian Permana", "1819291001", "Teknik Pangan", "MaouLucis@gmail.com"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>	
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NRP : <?= $mhs["nrp"]; ?></li>
			<li>Email : <?= $mhs["jurusan"]; ?></li>
			<li>Jurusan  : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>




</body>
</html> 