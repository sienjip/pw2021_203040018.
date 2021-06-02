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

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek dulu username
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    //cek password
    if (password_verify($password, $user['password'])) {
      //Set Session
      $_SESSION['login'] = true;
      header("Location: index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password Salah!'
  ];
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // jika username / password kosong
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
            alert('username/password tidak boleh kosong!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
            alert('username sudah terdaftar!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
            alert('konfirmasi password tidak sesuai');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika password < 5 digit
  if (strlen($password1) < 5) {
    echo "<script>
            alert('password terlalu pendek');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika username dan password sudah sesuai
  // enkripsi dulu passwordnya

  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  //insert ke tabel user
  $query = "INSERT INTO `user`(`id`, `username`, `password`) VALUES (null,'$username','$password_baru')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
