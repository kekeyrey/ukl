-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2024 pada 12.03
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
-- Struktur dari tabel `donasi`
--

CREATE TABLE `donasi` (
  `iddonasi` int(100) NOT NULL,
  `tujuan_donasi` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `donasi`
--

INSERT INTO `donasi` (`iddonasi`, `tujuan_donasi`, `deskripsi`, `foto`) VALUES
(1, 'Untuk Panti', 'Tujuan donasi ke panti asuhan adalah untuk mendukung kesejahteraan anak-anak yang tinggal di sana dengan memenuhi kebutuhan dasar mereka seperti makanan, pakaian, dan perawatan kesehatan. Donasi juga bertujuan untuk menyediakan pendidikan yang layak dan program pengembangan diri, membantu anak-anak tumbuh menjadi individu yang mandiri dan percaya diri. Selain itu, donasi dapat meningkatkan fasilitas panti, menciptakan lingkungan yang aman dan nyaman bagi anak-anak, serta memberikan mereka kesemp', 'panti.jpg'),
(2, 'Untuk Fakir', 'Tujuan donasi untuk fakir miskin adalah untuk membantu mereka memenuhi kebutuhan dasar seperti makanan, pakaian, dan tempat tinggal, serta meningkatkan kualitas hidup mereka. Donasi ini juga bertujuan untuk memberdayakan fakir miskin melalui akses ke pendidikan, pelatihan keterampilan, dan kesempatan kerja, sehingga mereka dapat menjadi lebih mandiri dan berdaya. Selain itu, donasi berfungsi untuk mengurangi kesenjangan sosial dan mendukung terciptanya masyarakat yang lebih adil dan sejahtera.', 'fakir 2.jpg'),
(3, 'Untuk Masjid', 'Tujuan donasi untuk masjid adalah untuk mendukung pemeliharaan dan perawatan fasilitas masjid agar tetap layak dan nyaman bagi para jamaah. Donasi juga bertujuan untuk membiayai program-program keagamaan dan pendidikan, seperti pengajian, kelas tafsir Al-Qur\'an, dan kegiatan sosial lainnya yang memperkuat iman dan ukhuwah Islamiyah. Selain itu, donasi membantu dalam pembangunan atau renovasi masjid, penyediaan sarana ibadah yang lebih baik, serta mendukung kegiatan amal dan bakti sosial yang dil', 'masjid.jpg'),
(4, 'Untuk Lembaga Pendidikan', 'Tujuan donasi untuk lembaga pendidikan adalah untuk meningkatkan kualitas pendidikan dan memberikan akses yang lebih luas kepada siswa dari berbagai latar belakang. Donasi ini dapat digunakan untuk memperbaiki fasilitas sekolah, menyediakan buku dan peralatan belajar, serta mengembangkan kurikulum yang inovatif. Selain itu, donasi juga dapat mendukung program beasiswa bagi siswa kurang mampu, pelatihan bagi guru, dan kegiatan ekstrakurikuler yang memperkaya pengalaman belajar. Dengan demikian, d', 'pendidikan.jpg'),
(5, 'Untuk Rumah Sakit', 'Tujuan donasi untuk rumah sakit adalah untuk meningkatkan kualitas pelayanan kesehatan bagi pasien. Donasi ini dapat digunakan untuk pembelian peralatan medis yang canggih, perbaikan fasilitas, dan penyediaan obat-obatan yang dibutuhkan. Selain itu, donasi membantu dalam mendanai penelitian medis, pelatihan tenaga kesehatan, serta program pelayanan kesehatan gratis atau subsidi bagi masyarakat kurang mampu. Dengan dukungan donasi, rumah sakit dapat memberikan perawatan yang lebih baik, cepat, da', 'rs.jpg'),
(6, 'Untuk Bencana Alam', 'Tujuan donasi untuk bencana alam adalah untuk memberikan bantuan darurat kepada korban yang terdampak, seperti makanan, air bersih, pakaian, dan tempat tinggal sementara. Donasi juga digunakan untuk mendukung upaya penyelamatan dan evakuasi, serta penyediaan layanan medis dan psikologis bagi para korban. Selain itu, donasi membantu dalam proses rehabilitasi dan rekonstruksi, termasuk perbaikan infrastruktur dan pemulihan mata pencaharian masyarakat yang terkena dampak. Dengan demikian, donasi be', 'bencanaalam.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` int(100) NOT NULL,
  `iduser` int(100) NOT NULL,
  `iddonasi` int(100) NOT NULL,
  `notelepon` int(100) NOT NULL,
  `jumlah_donasi` int(100) NOT NULL,
  `no_rekening` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `iduser`, `iddonasi`, `notelepon`, `jumlah_donasi`, `no_rekening`) VALUES
(7, 12, 1, 2147483647, 30, 8987878),
(8, 12, 1, 2147483647, 30, 33030300),
(9, 13, 1, 2147483647, 300, 8987878),
(10, 14, 1, 89999, 200000, 300000),
(12, 15, 1, 2147483647, 500000, 82323827),
(13, 17, 1, 63377890, 400000, 56367272),
(14, 18, 1, 89999, 600000, 453378),
(15, 13, 3, 89999, 200000, 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `username`, `email`, `password`, `role`) VALUES
(12, 'kayla', 'lalajuna6@gmail.com', '3007', 'user'),
(13, 'fikril', 'fikrilkhm@gmail.com', '1905', 'user'),
(14, 'cia', 'cia@gmail.com', '123', 'user'),
(15, 'yosi', 'yosi@gmail.com', '23', 'user'),
(16, 'kaylarrj', 'lalajuna6@gmail.com', 'fikril', 'admin'),
(17, 'mella', 'mella@gmail.com', '111', 'user'),
(18, 'nala', 'nala@gmail.com', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`iddonasi`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`),
  ADD KEY `fk_user` (`iduser`),
  ADD KEY `fk_donasi` (`iddonasi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `donasi`
--
ALTER TABLE `donasi`
  MODIFY `iddonasi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtransaksi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_donasi` FOREIGN KEY (`iddonasi`) REFERENCES `donasi` (`iddonasi`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
