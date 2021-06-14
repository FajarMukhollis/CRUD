-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 14 Jun 2021 pada 13.02
-- Versi server: 5.7.24
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `No_id` int(11) NOT NULL,
  `NPM` bigint(20) NOT NULL,
  `Nama_Lengkap` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`No_id`, `NPM`, `Nama_Lengkap`, `Email`, `username`, `password`) VALUES
(1, 4519210033, 'YOGI MASAJI', 'yogimasaji@gmail.com', 'yogimas', '5621be1f2352574f7a48ba5596a7c69d'),
(2, 4519210034, 'FAJAR MUKHOLLIS', 'fmukhollis@gmail.com', 'fajar', '7bedc9fd30769590c992b8f7f23738f7'),
(3, 4519210072, 'JOHANN HENRY', 'johenry@gmail.com', 'johan', '2d87b36b4f489a92b5032d29b5b5611b'),
(4, 4519210081, 'AGUS MAULANA', 'gusmaulana@gmail.com', 'agus', '01c3c766ce47082b1b130daedd347ffd');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`No_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `No_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
