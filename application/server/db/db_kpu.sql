-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2022 pada 09.33
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kpu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(1) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `email`, `image`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 's21', '202cb962ac59075b964b07152d234b70', 'isi_aja@gmail.com', 'default.jpg', 1, '2022-03-07 10:09:43', '2022-03-07 10:09:43', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anggota_parpol`
--

CREATE TABLE `tbl_anggota_parpol` (
  `id` int(2) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `img` varchar(40) NOT NULL,
  `jabatan_partai` varchar(40) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `gol_pemilihan_id` int(1) NOT NULL,
  `status_id` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dct`
--

CREATE TABLE `tbl_dct` (
  `id` int(3) NOT NULL,
  `tahun_id` int(4) NOT NULL,
  `anggota_id` int(2) NOT NULL,
  `parpol_id` int(2) NOT NULL,
  `gol_pemilihan_id` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gol_pemilihan`
--

CREATE TABLE `tbl_gol_pemilihan` (
  `id` int(1) NOT NULL,
  `golongan` varchar(40) NOT NULL,
  `kecamatan_id` int(1) NOT NULL,
  `kelurahan_id` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jmlh_suara`
--

CREATE TABLE `tbl_jmlh_suara` (
  `id` int(3) NOT NULL,
  `gol_pemilihan_id` int(1) NOT NULL,
  `suara_sah` int(11) NOT NULL,
  `suara_tidak_sah` int(11) NOT NULL,
  `anggora_id` int(2) NOT NULL,
  `kecamatan_id` int(1) NOT NULL,
  `status` enum('terpilih','tidak terpilih') NOT NULL,
  `tahun_id` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kapasitas`
--

CREATE TABLE `tbl_kapasitas` (
  `id` int(2) NOT NULL,
  `gol_pemilihan_id` int(1) NOT NULL,
  `tahun_id` int(1) NOT NULL,
  `kapasitas` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kecamatan`
--

CREATE TABLE `tbl_kecamatan` (
  `id` int(1) NOT NULL,
  `kecamatan` varchar(16) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kecamatan`
--

INSERT INTO `tbl_kecamatan` (`id`, `kecamatan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Tanah Sareal', '2022-06-14 05:58:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelurahan`
--

CREATE TABLE `tbl_kelurahan` (
  `id` int(2) NOT NULL,
  `kecamatan_id` int(1) NOT NULL,
  `kelurahan` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_logo`
--

CREATE TABLE `tbl_logo` (
  `id` int(3) NOT NULL,
  `tahun_id` int(3) DEFAULT NULL,
  `logo` varchar(40) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_parpol`
--

CREATE TABLE `tbl_parpol` (
  `id` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `nama_ketua` varchar(50) NOT NULL,
  `img_ketua` varchar(50) NOT NULL,
  `profil` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_parpol`
--

INSERT INTO `tbl_parpol` (`id`, `nama`, `logo`, `visi`, `misi`, `nama_ketua`, `img_ketua`, `profil`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'pp', 'default.jpg', 'test', 'test', 'Nurhadi Aldo', 'ketua-default.jpg', 'test', '2022-04-09 05:33:07', '2022-05-21 06:14:47', NULL),
(2, 'aaaa', '', 'aaaaa', 'ccccc', 'saaaaa', '', '', '2022-04-12 03:41:03', '2022-04-13 06:10:58', NULL),
(3, 'sw', '', 'sw', 'sw', 'sw', '', '', '2022-04-12 03:49:58', '2022-04-12 03:49:58', NULL),
(41, 'Kerajaan Matahari', '', 'Ura', 'Ura', 'Rangga', '', 'Ura', '2022-04-18 14:43:57', '2022-04-18 14:43:57', NULL),
(42, 'Test', '', 'test', 'test', 'test', '', 'test', '2022-04-18 14:45:05', '2022-04-18 14:45:05', NULL),
(43, '1', '', '1', '1', '1', '', '1', '2022-04-18 14:46:24', '2022-04-18 14:46:24', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tahun`
--

CREATE TABLE `tbl_tahun` (
  `id` int(2) NOT NULL,
  `tahun` int(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_anggota_parpol`
--
ALTER TABLE `tbl_anggota_parpol`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_dct`
--
ALTER TABLE `tbl_dct`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_gol_pemilihan`
--
ALTER TABLE `tbl_gol_pemilihan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_jmlh_suara`
--
ALTER TABLE `tbl_jmlh_suara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kapasitas`
--
ALTER TABLE `tbl_kapasitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kelurahan`
--
ALTER TABLE `tbl_kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_parpol`
--
ALTER TABLE `tbl_parpol`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_tahun`
--
ALTER TABLE `tbl_tahun`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_anggota_parpol`
--
ALTER TABLE `tbl_anggota_parpol`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_dct`
--
ALTER TABLE `tbl_dct`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_gol_pemilihan`
--
ALTER TABLE `tbl_gol_pemilihan`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_jmlh_suara`
--
ALTER TABLE `tbl_jmlh_suara`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_kapasitas`
--
ALTER TABLE `tbl_kapasitas`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelurahan`
--
ALTER TABLE `tbl_kelurahan`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_parpol`
--
ALTER TABLE `tbl_parpol`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `tbl_tahun`
--
ALTER TABLE `tbl_tahun`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
