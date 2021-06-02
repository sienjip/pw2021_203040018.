<?php
// Nama   : Nazhif Hafidz Fauzan
// NRP    : 203040018
// Shift  : Kamis pukul 13:00 -15:00 WIB
?>
<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$mobil = query("SELECT * FROM mobil");

//Ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $mobil = cari($_POST['keyword']);
}
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
  <a href="logout.php">Logout</a>
  <h3>Daftar Mobil</h3>
  <a href="tambah.php">Tambah Data Mobil</a>
  <br><br>
  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="Masukan keyword pencarian" autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari</button>
  </form>
  <br>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Nama Jenis</th>
      <th>Gambar</th>
      <th>Aksi</th>
    </tr>

    <?php if (empty($mobil)) : ?>
      <tr>
        <td colspan="4">
          <p style="color:red; font-style:italic;">Data Mobil Tidak Ditemukan</p>
        </td>
      </tr>
    <?php endif; ?>

    <?php $i = 1;
    foreach ($mobil as $mbl) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $mbl["nama_jenis"]; ?></td>
        <td><img src="img/<?= $mbl["gambar"]; ?>" width="60"></td>
        <td>
          <a href="detail.php?id=<?= $mbl["id"]; ?>">Lihat Detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>