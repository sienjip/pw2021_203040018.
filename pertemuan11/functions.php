<?php
// Nama   : Nazhif Hafidz Fauzan
// NRP    : 203040018
// Shift  : Kamis pukul 13:00 -15:00 WIB
?>
<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_203040018');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);
  $rows = [];
  //Jika datanya 1
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama_merk = htmlspecialchars($data['nama_merk']);
  $nama_jenis = htmlspecialchars($data['nama_jenis']);
  $transmisi = htmlspecialchars($data['transmisi']);
  $tahun_produksi = htmlspecialchars($data['tahun_produksi']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO `mobil`(`id`, `nama_merk`, `nama_jenis`, `transmisi`, `tahun_produksi`, `gambar`) VALUES (null, '$nama_merk', '$nama_jenis', '$transmisi', '$tahun_produksi', '$gambar')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM mobil WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = ($data['id']);
  $nama_merk = htmlspecialchars($data['nama_merk']);
  $nama_jenis = htmlspecialchars($data['nama_jenis']);
  $transmisi = htmlspecialchars($data['transmisi']);
  $tahun_produksi = htmlspecialchars($data['tahun_produksi']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE `mobil` SET `nama_merk`='$nama_merk',`nama_jenis`='$nama_jenis',`transmisi`='$transmisi',`tahun_produksi`='$tahun_produksi',`gambar`='$gambar' WHERE id = '$id'";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();
  $query = "SELECT * FROM mobil WHERE nama_merk LIKE '%$keyword%' OR nama_jenis LIKE '%$keyword%' OR transmisi LIKE '%$keyword%' OR tahun_produksi LIKE '%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
