<?php
// Imam Faraz Aditya
// 203040066
// github.com/imfaditya/pw2021_203040066
// Pertemuan 12 (03-04-2021)
// Materi pertemuan 12 adalah login dan registrasi
?>
<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// Jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// Ambil id dari URL
$id = $_GET['id'];

// Query mobil berdasarkan id
$mbl = query("SELECT * FROM mobil WHERE id = $id");

// Cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Diubah');
            document.location.href ='index.php';
          </script>";
  } else {
    echo "Data Gagal Diubah";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mobil</title>
</head>

<body>
  <h3>Form Ubah Data Mahasiswa</h3>
  <form method="post" action="">
    <input type="hidden" name="id" value="<?= $mbl['id'];; ?>">
    <ul>
      <li>
        <label>
          Nama Merk :
          <input type="text" name="nama_merk" autofocus required value="<?= $mbl['nama_merk']; ?>">
        </label>
      </li>
      <li>
        <label>
          Nama Jenis :
          <input type="text" name="nama_jenis" required value="<?= $mbl['nama_jenis']; ?>">
        </label>
      </li>
      <li>
        <label>
          Transmisi :
          <input type="text" name="transmisi" required value="<?= $mbl['transmisi']; ?>">
        </label>
      </li>
      <li>
        <label>
          Tahun Produksi :
          <input type="text" name="tahun_produksi" required value="<?= $mbl['tahun_produksi']; ?>">
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required value="<?= $mbl['gambar']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data !</button>
      </li>
    </ul>
  </form>
</body>

</html>