<?php
// Nama   : Nazhif Hafidz Fauzan
// NRP    : 203040018
// Shift  : Kamis pukul 13:00 -15:00 WIB
?>
<?php
require 'functions.php';

//Ambil id dari URL
$id = $_GET['id'];

//Query Mobil dari id
$mbl = query("SELECT * FROM mobil WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mobil</title>
</head>

<body>
  <h3>Detail Mobil</h3>
  <ul>
    <li><?= $mbl['nama_merk']; ?></li>
    <li><?= $mbl['nama_jenis']; ?></li>
    <li><?= $mbl['transmisi']; ?></li>
    <li><?= $mbl['tahun_produksi']; ?></li>
    <li><img src="img/<?= $mbl["gambar"]; ?>" width="100"></li>
    <li><a href="ubah.php?id=<?= $mbl['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $mbl['id']; ?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a></li>
    <li><a href="index.php">Kembali Ke Daftar Mobil</a></li>
  </ul>
</body>

</html>