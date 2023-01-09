-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2023 pada 02.57
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipdak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tahun_akademik`
--

CREATE TABLE `tbl_tahun_akademik` (
  `id_tahun_akademik` int(20) UNSIGNED NOT NULL,
  `tahun_akademik` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tahun_akademik`
--

INSERT INTO `tbl_tahun_akademik` (`id_tahun_akademik`, `tahun_akademik`, `created_at`) VALUES
(1, '2022 - 2023', '2022-12-10 13:09:59'),
(2, '2023 - 2024', '2022-12-10 13:23:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ukm`
--

CREATE TABLE `tbl_ukm` (
  `id_ukm` int(20) NOT NULL,
  `nama_ukm` varchar(50) NOT NULL,
  `tahun_akademik` varchar(50) NOT NULL,
  `pembina_ukm` varchar(100) NOT NULL,
  `ketua_ukm` varchar(100) NOT NULL,
  `sekretaris_ukm` varchar(100) NOT NULL,
  `bendahara_ukm` varchar(100) NOT NULL,
  `koodirnator_pengembangan_sdm` varchar(100) NOT NULL,
  `sekretaris_pengembangan_sdm` varchar(100) NOT NULL,
  `anggota_pengembangan_sdm` mediumtext NOT NULL,
  `koordinator_kominfo` varchar(100) NOT NULL,
  `sekretaris_kominfo` varchar(100) NOT NULL,
  `anggota_kominfo` mediumtext NOT NULL,
  `koordinato_riset_dan_teknologi` varchar(100) NOT NULL,
  `sekretaris_riset_dan_teknologi` varchar(100) NOT NULL,
  `anggota_riset_dan_teknologi` mediumtext NOT NULL,
  `koordinator_sospolma` varchar(100) NOT NULL,
  `sekretaris_sospolma` varchar(100) NOT NULL,
  `anggota_sospolma` mediumtext NOT NULL,
  `koordinator_sora` varchar(100) NOT NULL,
  `sekretaris_sora` varchar(100) NOT NULL,
  `anggota_sora` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ukm`
--

INSERT INTO `tbl_ukm` (`id_ukm`, `nama_ukm`, `tahun_akademik`, `pembina_ukm`, `ketua_ukm`, `sekretaris_ukm`, `bendahara_ukm`, `koodirnator_pengembangan_sdm`, `sekretaris_pengembangan_sdm`, `anggota_pengembangan_sdm`, `koordinator_kominfo`, `sekretaris_kominfo`, `anggota_kominfo`, `koordinato_riset_dan_teknologi`, `sekretaris_riset_dan_teknologi`, `anggota_riset_dan_teknologi`, `koordinator_sospolma`, `sekretaris_sospolma`, `anggota_sospolma`, `koordinator_sora`, `sekretaris_sora`, `anggota_sora`) VALUES
(1, 'Basket', '1', 'Abdurahman', 'Asep', 'Siti', 'Rahma', 'asasa', 'Budi', 'Angga', 'Septian', 'dara', 'Agung', 'sd', 'Lukman', 'Lutfi', 'tomi', 'agung', 'Andes', 'aldi', 'fajar', 'Alfin'),
(2, 'Futsal', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'Pawon', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'Commit', '1', 'Abdurahman', 'Asep', 'Siti', 'Rahma', 'asasa', 'Budi', 'Angga', 'Septian', 'dara', 'Agung', 'sd', 'Lukman', 'Lutfi', 'tomi', 'agung', 'Andes', 'aldi', 'fajar', 'Alfin'),
(5, 'Testing', '2', 'Abdurahman', 'Asep', 'Siti', 'Rahma', 'asasa', 'Budi', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `level` int(1) NOT NULL COMMENT '1:warek3, 2:warek2, 3:BASK, 4:UKM'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `level`) VALUES
(1, 'warek 3', 'c2f6d4e881b30978ea0d814c85c762a1ce05b594', 'Rezky', 1),
(2, 'warek 2', 'faae4cbf3cbe63ccdf97104a6e8e41972c44f2db', 'Bayu', 2),
(3, 'bask', '6261736B', 'Deni', 3),
(4, 'ukm_basket', '6c9bc145d681e7324e072115ac20f5cec0d37d33', 'Udin', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_tahun_akademik`
--
ALTER TABLE `tbl_tahun_akademik`
  ADD PRIMARY KEY (`id_tahun_akademik`);

--
-- Indeks untuk tabel `tbl_ukm`
--
ALTER TABLE `tbl_ukm`
  ADD PRIMARY KEY (`id_ukm`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_tahun_akademik`
--
ALTER TABLE `tbl_tahun_akademik`
  MODIFY `id_tahun_akademik` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_ukm`
--
ALTER TABLE `tbl_ukm`
  MODIFY `id_ukm` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
