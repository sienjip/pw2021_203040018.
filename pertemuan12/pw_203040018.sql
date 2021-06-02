-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2021 pada 16.09
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_203040018`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id` int(11) NOT NULL,
  `nama_merk` varchar(50) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL,
  `transmisi` varchar(50) NOT NULL,
  `tahun_produksi` varchar(10) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id`, `nama_merk`, `nama_jenis`, `transmisi`, `tahun_produksi`, `gambar`) VALUES
(1, 'Toyota', 'Avanza', 'Manual', '2021', 'avanza.jpg'),
(2, 'Toyota', 'Yaris', 'Matic', '2019', 'yaris.jpeg'),
(3, 'Daihatsu', 'Sirion', 'Matic', '2019', 'sirion.jpg'),
(4, 'Suzuki', 'Baleno', 'Manual', '2019', 'baleno.jpg'),
(5, 'Suzuki', 'Ertiga', 'Manual', '2017', 'ertiga.jpg'),
(6, 'Toyota', 'Fortuner', 'Matic', '2021', 'fortuner.jpg'),
(7, 'Mitsubishi', 'Outlander Sport', 'Manual', '2020', 'outlander.jpg'),
(8, 'Mitsubishi', 'Xpander', 'Matic', '2019', 'xpander.jpg'),
(9, 'Wuling', 'Cortez', 'Manual', '2019', 'cortez.jpg'),
(10, 'Nissan', 'Juke', 'Manual', '2015', 'juke.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(5, 'user', '$2y$10$sXAl0JxZpOyOfWgEDyBE2eLMVQiZn36q2is2X.9wDJlztKgZc1Ccm');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
