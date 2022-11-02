-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2022 pada 05.38
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tk-islam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `username`, `password_`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'admin', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '081244206674', 'sone.hamid@gmail.com', 'Jl. Romang Tangaya Dalam IV blok 5, Kec. Manggala, Kota Makassar, Provinsi Sulawesi Selatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon`
--

CREATE TABLE `calon` (
  `id` int(11) NOT NULL,
  `nama_tk` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ttl` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `anak_ke` varchar(2) NOT NULL,
  `sdr` varchar(2) NOT NULL,
  `wn` varchar(3) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `ttl_ayah` date NOT NULL,
  `agama_ayah` varchar(20) NOT NULL,
  `wn_ayah` varchar(3) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pendidikan_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `ttl_ibu` date NOT NULL,
  `agama_ibu` varchar(20) NOT NULL,
  `wn_ibu` varchar(3) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `pendidikan_ibu` varchar(20) NOT NULL,
  `islulus` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `calon`
--

INSERT INTO `calon` (`id`, `nama_tk`, `nama`, `ttl`, `email`, `jenis_kelamin`, `agama`, `anak_ke`, `sdr`, `wn`, `foto`, `nama_ayah`, `ttl_ayah`, `agama_ayah`, `wn_ayah`, `pekerjaan_ayah`, `pendidikan_ayah`, `nama_ibu`, `ttl_ibu`, `agama_ibu`, `wn_ibu`, `pekerjaan_ibu`, `pendidikan_ibu`, `islulus`) VALUES
(2, 'TK Assalam', 'Abdul Hamid', '2022-10-12', 'sone.hamid@gmail.com', 'laki-laki', 'katolik', '4', '7', 'WNI', 'C:xampp	mpphpC234.tmp', 'Mahmud', '2022-10-25', 'katolik', 'WNA', 'Guru', 'S1', 'Badliana', '2022-10-11', 'katolik', 'WNA', 'ibu rumah tangga', 'Sma', 0),
(4, 'TK Assalam', 'Abdul Hamid', '2022-09-28', 'sone.hamid@gmail.com', 'laki-laki', 'islam', '4', '10', 'WNA', 'C:xampp	mpphp9E16.tmp', 'Mahmud', '2022-10-17', 'katolik', 'WNA', 'Guru', 'S1', 'Badliana', '2022-09-28', 'hindu', 'WNA', 'ibu rumah tangga', 'Sma', 0),
(5, 'TK Assalam', 'Abdul Hamid', '2022-10-12', 'sone.hamid@gmail.com', 'perempuan', 'budha', '4', '7', 'WNA', 'C:xampp	mpphp4244.tmp', 'Mahmud.s', '0000-00-00', 'hindu', 'WNI', 'Guru', 'S1', 'Mardiana', '2022-10-12', 'kristen', 'WNA', 'ibu rumah tangga', 'Sma', 0),
(6, 'TK Athira', 'Abdul Hamid', '2022-10-11', 'sone.hamid@gmail.com', 'perempuan', 'islam', '4', '7', 'WNI', 'C:xampp	mpphp4801.tmp', 'Mahmud.s', '2022-10-11', 'katolik', 'WNI', 'Guru', 'S1', 'Badliana', '2022-10-18', 'hindu', 'WNI', 'ibu rumah tangga', 'Sma', 0),
(7, 'TK Darussalam', 'Abdul Hamid', '2022-10-12', 'sone.hamid@gmail.com', 'laki-laki', 'katolik', '4', '7', 'WNI', 'C:xampp	mpphp65E5.tmp', 'Mahmud.s', '2022-10-19', 'hindu', 'WNA', 'Guru', 'S1', 'Mardiana', '2022-10-25', 'islam', 'WNI', 'ibu rumah tangga', 'Sma', 0),
(8, 'qwe', 'qwe', '2022-11-09', 'sone@gmail.com', 'Laki-Laki', 'ss', '3', '2', 'Per', '#785 Missing Filename File.jpg', 'ss', '2022-11-30', 'ws', 'Per', 'ww', 'ss', 'ss', '2022-11-28', 'aa', 'Lak', 'ss', 'dd', 1),
(9, 'qwe', 'qwe', '2022-11-09', 'sone@gmail.com', 'Laki-Laki', 'ss', '3', '2', 'Per', '#785 Missing Filename File.jpg', 'ss', '2022-11-30', 'ws', 'Per', 'ww', 'ss', 'ss', '2022-11-28', 'aa', 'Lak', 'ss', 'dd', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `nama_tk` text NOT NULL,
  `nama_lengkap` text NOT NULL,
  `jk` varchar(100) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tk`
--

CREATE TABLE `tk` (
  `id` int(11) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `npsn` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `akreditasi` varchar(2) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tk`
--
ALTER TABLE `tk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `calon`
--
ALTER TABLE `calon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tk`
--
ALTER TABLE `tk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
