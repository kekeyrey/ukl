-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2024 pada 06.03
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_pendonasi`
--

CREATE TABLE `user_pendonasi` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user_pendonasi`
--

INSERT INTO `user_pendonasi` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'keyreyje', 'lalajuna6@gmail.com', '23', 'user'),
(2, 'levina', 'levina@gmail.com', '45', 'admin\r\n'),
(3, 'levina', 'levina@gmail.com', '45', ''),
(4, 'mauvisyos', 'maviyo@gmail.com', '45', 'user'),
(5, 'keyreyje', 'lalajuna6@gmail.com', 'fikril', ''),
(6, 'cc.cia', 'lalajuna6@gmail.com', '123', ''),
(7, 'hah', 'hah@G.k', '9', ''),
(8, 'keyreyje', 'lalajuna6@gmail.com', '123', ''),
(1212315, 'fikril', 'fikrilkhm@gmail.com    ', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user_pendonasi`
--
ALTER TABLE `user_pendonasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user_pendonasi`
--
ALTER TABLE `user_pendonasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1212316;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
