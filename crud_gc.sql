-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8111
-- Waktu pembuatan: 27 Mar 2023 pada 16.17
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_gc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `perpus`
--

CREATE TABLE `perpus` (
  `id` int(11) NOT NULL,
  `materi` varchar(255) NOT NULL,
  `pages` varchar(10) NOT NULL,
  `size` varchar(25) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `perpus`
--

INSERT INTO `perpus` (`id`, `materi`, `pages`, `size`, `link`) VALUES
(5, 'SKU Penegak Point 1', '4', '4,5 MB', 'https://drive.google.com/file/d/1eqV6AEMdeXpw9Znw-06WSyOBHuERza8V/view?usp=sharing'),
(6, 'peserta aniv', '4', '21 KB', 'https://drive.google.com/drive/folders/1LT92Tilvt02vsAoQcE0ihTjNv5LZ_jWF?usp=sharing'),
(7, 'SKU Penegak Point 5', '2', '2,5 MB', 'https://drive.google.com/drive/u/0/folders/1wcpqOdHCzFHjt1sFPHT-dbN7MD7hfw9i');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) DEFAULT NULL,
  `tempat` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `person` int(11) DEFAULT NULL,
  `gambar_produk` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `warna` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama_kegiatan`, `tempat`, `tanggal`, `person`, `gambar_produk`, `status`, `warna`) VALUES
(18, 'odaa', 'SMKN 1 Lumajang', '2023-03-23', 400, 'odaa.jpg', 'sukses', 'status delivered'),
(19, 'gladiator', 'SMKN 1 Lumajang', '2023-03-24', 400, '20230305_154248.jpg', 'comingsoon', 'status pending');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `perpus`
--
ALTER TABLE `perpus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `perpus`
--
ALTER TABLE `perpus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
