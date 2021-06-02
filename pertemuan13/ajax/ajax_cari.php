<?php
// Nama   : Nazhif Hafidz Fauzan
// NRP    : 203040018
// Shift  : Kamis pukul 13:00 -15:00 WIB
?>
<?php
require '../functions.php';
$mobil = cari($_GET['keyword']);
?>
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