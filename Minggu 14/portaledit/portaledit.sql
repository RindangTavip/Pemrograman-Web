-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2020 pada 19.25
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portaledit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_customer` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `foto` text NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_customer`
--

INSERT INTO `tb_customer` (`id_customer`, `nama_lengkap`, `username`, `password`, `email`, `alamat`, `nohp`, `foto`, `role_id`) VALUES
(6, 'Christopher Posey', 'chris23', 'chris23', 'chris23@gmail.com', 'Jl. Kelapa Muda', '0812347685', 'profile6.png', 2),
(7, 'Gellia Amelia', 'gelly', 'gelly', 'gelly@gmail.com', 'Jl. Buah Baru', '0812346785', 'profile7.jpg', 2),
(8, 'Joel Aditya', 'joelele', 'joelele', 'joelele@gmail.com', 'Jl. Coba Coba', '08176854323', 'profile5.png', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_editor`
--

CREATE TABLE `tb_editor` (
  `id_editor` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `gambar_cover` text NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_editor`
--

INSERT INTO `tb_editor` (`id_editor`, `nama_lengkap`, `username`, `password`, `email`, `alamat`, `nohp`, `gambar_cover`, `role_id`) VALUES
(11, 'Edward Cullins', 'edwardo01', 'edwardo01', 'edwardo01@gmail.com', 'Jl. Semangka', '0897654321', 'profile1.jpg', 1),
(12, 'Serena Rota', 'serenasz', 'serenasz', 'serenszsz@ymail.com', 'Jl. Megabatu', '08765423134', 'profile4.jpg', 1),
(13, 'Joko Santoso', 'jocool45', 'jocool45', 'jokogaul45@gmail.com', 'Jl. Merak Baru', '0897654322', 'profile2.jpg', 1),
(14, 'Dina Elly', 'dinadina', 'dinadina', 'dinnn@gmail.com', 'Jl. Apaadanya', '08265743123', 'profile3.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `kd_invoice` int(11) NOT NULL,
  `desc_project` varchar(255) NOT NULL,
  `tgl_order` datetime NOT NULL,
  `batas_order` datetime NOT NULL,
  `gambar_bahan` text NOT NULL,
  `video_bahan` text NOT NULL,
  `pembayaran` varchar(20) NOT NULL,
  `kd_job` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`kd_invoice`, `desc_project`, `tgl_order`, `batas_order`, `gambar_bahan`, `video_bahan`, `pembayaran`, `kd_job`, `id_customer`) VALUES
(39, 'Tolong gambarkan kucing saya agar lebih bewarna', '2020-07-07 23:51:36', '2020-07-12 00:00:00', 'kucing1.jpg', '', 'PayPal', 18, 6),
(40, 'Tolong edit agar jadi hitam putih', '2020-07-07 23:56:50', '2020-07-19 00:00:00', 'kuda1.jpg', '', 'GoPay', 20, 6),
(41, 'Saya ingin nuansa retro', '2020-07-08 00:00:52', '2020-07-12 00:00:00', 'woman1.jpg', '', 'OVO', 22, 7),
(42, 'Tolong edit video ini', '2020-07-08 00:05:04', '2020-07-15 00:00:00', '', 'video.mp4', 'Transfer Bank', 21, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_job`
--

CREATE TABLE `tb_job` (
  `kd_job` int(11) NOT NULL,
  `desc_job` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `gambar_sample` text NOT NULL,
  `gambar_sample2` text NOT NULL,
  `video_sample` text NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `tarif` int(11) NOT NULL,
  `id_editor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_job`
--

INSERT INTO `tb_job` (`kd_job`, `desc_job`, `gambar`, `gambar_sample`, `gambar_sample2`, `video_sample`, `kategori`, `tarif`, `id_editor`) VALUES
(17, 'Saya bisa menggunakan photoshop', 'PS21.jpg', 'PS1.jpg', 'PS31.jpg', '', 'Gambar', 125000, 11),
(18, 'Jasa membuat desain grafis Adobe Illustrator', 'AI1.jpg', 'AI21.jpg', 'AI31.png', '', 'Gambar', 210000, 11),
(19, 'Butuh editor video? saya bisa!', 'test1.jpg', 'premiere31.jpg', 'premiere41.jpg', '', 'Video', 170000, 12),
(20, 'Bisa edit-edit photoshop cc', 'PS51.jpg', 'PS61.jpg', 'PS41.jpg', '', 'Gambar', 80000, 12),
(21, 'Saya bisa edit video anda', 'premiere1.jpg', 'premiere51.jpg', 'premiere61.png', '', 'Video', 155000, 13),
(22, 'Saya mahir menggunakan photoshop', 'PS71.jpg', 'PS81.jpg', 'PS101.jpg', '', 'Gambar', 90000, 14),
(23, 'Saya bisa menggunakan corel', 'corel31.jpg', 'corel21.jpg', 'corel1.jpg', '', 'Gambar', 90000, 13),
(24, 'Edit video sony vegas', 'vegas1.jpg', 'vegas21.jpg', 'vegas31.jpg', '', 'Video', 190000, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_order`
--

CREATE TABLE `tb_order` (
  `kd_order` int(11) NOT NULL,
  `gambar_project` text NOT NULL,
  `video_project` text NOT NULL,
  `kd_invoice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_order`
--

INSERT INTO `tb_order` (`kd_order`, `gambar_project`, `video_project`, `kd_invoice`) VALUES
(10, 'kucing21.jpg', '', 39),
(11, 'kuda21.jpg', '', 40),
(12, 'woman21.jpg', '', 41),
(13, '', 'video.mp4', 42);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `tb_editor`
--
ALTER TABLE `tb_editor`
  ADD PRIMARY KEY (`id_editor`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`kd_invoice`),
  ADD KEY `kd_job` (`kd_job`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indeks untuk tabel `tb_job`
--
ALTER TABLE `tb_job`
  ADD PRIMARY KEY (`kd_job`),
  ADD KEY `id_editor` (`id_editor`);

--
-- Indeks untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`kd_order`),
  ADD KEY `kd_invoice` (`kd_invoice`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_editor`
--
ALTER TABLE `tb_editor`
  MODIFY `id_editor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `kd_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `tb_job`
--
ALTER TABLE `tb_job`
  MODIFY `kd_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `kd_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD CONSTRAINT `tb_invoice_ibfk_1` FOREIGN KEY (`kd_job`) REFERENCES `tb_job` (`kd_job`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_invoice_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `tb_customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_job`
--
ALTER TABLE `tb_job`
  ADD CONSTRAINT `tb_job_ibfk_1` FOREIGN KEY (`id_editor`) REFERENCES `tb_editor` (`id_editor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_ibfk_1` FOREIGN KEY (`kd_invoice`) REFERENCES `tb_invoice` (`kd_invoice`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
