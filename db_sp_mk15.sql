-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2023 pada 09.32
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sp_mk15`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id_loaisp` int(10) NOT NULL,
  `ten_loaisp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `loaisanpham`
--

INSERT INTO `loaisanpham` (`id_loaisp`, `ten_loaisp`) VALUES
(1, 'Ventela'),
(2, 'Patrobas'),
(3, 'Vans');

-- --------------------------------------------------------

--
-- Struktur dari tabel `quanlynguoidung`
--

CREATE TABLE `quanlynguoidung` (
  `id_nd` int(10) NOT NULL,
  `ten_nd` varchar(255) DEFAULT NULL,
  `matkhau_nd` varchar(255) DEFAULT NULL,
  `quyen_nd` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `quanlynguoidung`
--

INSERT INTO `quanlynguoidung` (`id_nd`, `ten_nd`, `matkhau_nd`, `quyen_nd`) VALUES
(1, 'admin', 'admin', 1),
(2, 'nguoidung1', '1', 2),
(3, 'tu', '1', 2),
(4, 'rizki', 'rizki', 2),
(5, 'aslam', 'aslam', 2),
(6, 'fahri', 'fahri', 2),
(7, 'enno', 'enno', 2),
(8, 'nanda', 'nanda', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(10) NOT NULL,
  `ten_sp` varchar(255) DEFAULT NULL,
  `hinhanh_sp` varchar(255) DEFAULT NULL,
  `gia_sp` int(20) DEFAULT NULL,
  `ngaynhap_sp` date DEFAULT NULL,
  `id_loaisp` int(10) DEFAULT NULL,
  `mota_sp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `hinhanh_sp`, `gia_sp`, `ngaynhap_sp`, `id_loaisp`, `mota_sp`) VALUES
(1, 'Ventela Back To 70S HIGH Black Natural ', 'anh/Back To 70S HIGH Black-Natural 11.jpg', 239900, '2023-08-21', 1, ''),
(2, 'Ventela Basic low black natural', 'anh/Basic low black natural.jpg', 239900, '2023-08-21', 1, ''),
(3, 'Ventela Republic Low Grey ', 'anh/Republic Low Grey 11.jpg', 249900, '2023-08-21', 1, ''),
(4, 'Ventela Back To 70S HIGH Cream', 'anh/Back To 70S HIGH Cream 11.jpg', 239900, '2023-08-21', 1, ''),
(5, 'Ventela New Public Low White', 'anh/New Public Low White 11.jpg', 299800, '2023-08-21', 1, ''),
(6, 'Ventela Distro White', 'anh/Distro White1.jpg', 294800, '2023-08-21', 1, ''),
(7, 'Patrobas Equip low Navy', 'anh/Equip low upt navy.jpeg', 299900, '2023-08-21', 2, ''),
(8, 'Patrobas New Ivan Low Triple White', 'anh/_220405175142_(ind) SPCPAT46 PATROBAS NEW IVAN LOW - TRIPLE WHITE (1).jpg', 269900, '2023-08-21', 2, ''),
(9, 'Patrobas Cloud Black Gum', 'anh/Cloud-Black-Gum-3-1024x1024.png', 319900, '2023-08-21', 2, ''),
(10, 'Patrobas Equip low white gum', 'anh/Equip low white gum.jpg', 299900, '2023-08-21', 2, ''),
(11, 'Patrobas Slip On Off White', 'anh/slip on off white1.jpg', 247990, '2023-08-21', 2, ''),
(12, 'Patrobas Slip On Black/White', 'anh/slip on blk white1.png', 247990, '2023-08-21', 2, ''),
(13, 'Patrobas Equip high all black', 'anh/Equip high all black.jpeg', 270990, '2023-08-21', 2, NULL),
(14, 'Vans authentic black', 'anh/Vans authentic black.png', 825000, '2023-08-21', 3, ''),
(15, 'Vans Authentic White', 'anh/Vans authentic white.png', 825000, '2023-08-21', 3, ''),
(16, 'Vans Old Skool Primary Black/White', 'anh/Vans old skool primary blk wht.png', 675000, '2023-08-21', 3, ''),
(17, 'Vans Style 36 Marshmallow', 'anh/vans style 36 marsh.png', 750000, '2023-08-21', 3, ''),
(18, 'Vans Sk8-low Black/True white', 'anh/Vans sk8low1.jpg', 749000, '2023-08-21', 3, ''),
(19, 'Vans Classic Slip-On Sidewall Checkerboard', 'anh/Classic Slip-On Sidewall Checkerboard1.png', 499900, '2023-08-21', 3, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id_loaisp`);

--
-- Indeks untuk tabel `quanlynguoidung`
--
ALTER TABLE `quanlynguoidung`
  ADD PRIMARY KEY (`id_nd`);

--
-- Indeks untuk tabel `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id_loaisp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `quanlynguoidung`
--
ALTER TABLE `quanlynguoidung`
  MODIFY `id_nd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
