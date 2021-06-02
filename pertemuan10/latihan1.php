<?php
// Nama   : Nazhif Hafidz Fauzan
// NRP    : 203040018
// Shift  : Kamis pukul 13:00 -15:00 WIB
?>
<?php
//Koneksi ke DB & Pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'pw_203040018');

//Query Isi Tabel Mobil
$result = mysqli_query($conn, "SELECT * FROM mobil");

//Ubah Data ke Dalam Bentuk Array
// $row = mysqli_fetch_row($result); // Array Numerik
// $row = mysqli_fetch_assoc($result); // Array Associative
// $row = mysqli_fetch_array($result); // Keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows = $row;
}

//Tampung ke Variabel Mobil
$mobil = $rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mobil</title>
</head>

<body>
  <h3>Daftar Mobil</h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Nama Merk</th>
      <th>Nama Jenis</th>
      <th>Transmisi</th>
      <th>Tahun Produksi</th>
      <th>Gambar</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($mobil as $mbl) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $mbl['nama_merk']; ?></td>
        <td><?= $mbl['nama_jenis']; ?></td>
        <td><?= $mbl['transmisi']; ?></td>
        <td><?= $mbl['tahun_produksi']; ?></td>
        <td><img src="img/<?= $mbl['gambar']; ?>" width="60"></td>
        <td>
          <a href="">Ubah</a> | <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>