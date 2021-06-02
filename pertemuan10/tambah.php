<?php
// Nama   : Nazhif Hafidz Fauzan
// NRP    : 203040018
// Shift  : Kamis pukul 13:00 -15:00 WIB
?>
<?php
require 'functions.php';

// Cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href ='latihan3.php';
          </script>";
  } else {
    echo "Data Gagal Ditambahkan";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mobil</title>
</head>

<body>
  <h3>Form Tambah Data Mobil</h3>
  <form method="post" action="">
    <ul>
      <li>
        <label>
          Nama Merk :
          <input type="text" name="nama_merk" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Nama Jenis :
          <input type="text" name="nama_jenis" required>
        </label>
      </li>
      <li>
        <label>
          Transmisi :
          <input type="text" name="transmisi" required>
        </label>
      </li>
      <li>
        <label>
          Tahun Produksi :
          <input type="text" name="tahun_produksi" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data !</button>
      </li>
    </ul>
  </form>
</body>

</html>