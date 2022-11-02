-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 06:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tk-islam-di-kota-makssar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'admin', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '081244206674', 'sone.hamid@gmail.com', 'Jl. Romang Tangaya Dalam IV blok 5, Kec. Manggala, Kota Makassar, Provinsi Sulawesi Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `calon`
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
  `foto` blob NOT NULL,
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
  `pendidikan_ibu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`id`, `nama_tk`, `nama`, `ttl`, `email`, `jenis_kelamin`, `agama`, `anak_ke`, `sdr`, `wn`, `foto`, `nama_ayah`, `ttl_ayah`, `agama_ayah`, `wn_ayah`, `pekerjaan_ayah`, `pendidikan_ayah`, `nama_ibu`, `ttl_ibu`, `agama_ibu`, `wn_ibu`, `pekerjaan_ibu`, `pendidikan_ibu`) VALUES
(2, 'TK Assalam', 'Abdul Hamid', '2022-10-12', 'sone.hamid@gmail.com', 'laki-laki', 'katolik', '4', '7', 'WNI', 0x433a78616d7070096d70706870433233342e746d70, 'Mahmud', '2022-10-25', 'katolik', 'WNA', 'Guru', 'S1', 'Badliana', '2022-10-11', 'katolik', 'WNA', 'ibu rumah tangga', 'Sma'),
(4, 'TK Assalam', 'Abdul Hamid', '2022-09-28', 'sone.hamid@gmail.com', 'laki-laki', 'islam', '4', '10', 'WNA', 0x433a78616d7070096d70706870394531362e746d70, 'Mahmud', '2022-10-17', 'katolik', 'WNA', 'Guru', 'S1', 'Badliana', '2022-09-28', 'hindu', 'WNA', 'ibu rumah tangga', 'Sma'),
(5, 'TK Assalam', 'Abdul Hamid', '2022-10-12', 'sone.hamid@gmail.com', 'perempuan', 'budha', '4', '7', 'WNA', 0x433a78616d7070096d70706870343234342e746d70, 'Mahmud.s', '0000-00-00', 'hindu', 'WNI', 'Guru', 'S1', 'Mardiana', '2022-10-12', 'kristen', 'WNA', 'ibu rumah tangga', 'Sma'),
(6, 'TK Athira', 'Abdul Hamid', '2022-10-11', 'sone.hamid@gmail.com', 'perempuan', 'islam', '4', '7', 'WNI', 0x433a78616d7070096d70706870343830312e746d70, 'Mahmud.s', '2022-10-11', 'katolik', 'WNI', 'Guru', 'S1', 'Badliana', '2022-10-18', 'hindu', 'WNI', 'ibu rumah tangga', 'Sma'),
(7, 'TK Darussalam', 'Abdul Hamid', '2022-10-12', 'sone.hamid@gmail.com', 'laki-laki', 'katolik', '4', '7', 'WNI', 0x433a78616d7070096d70706870363545352e746d70, 'Mahmud.s', '2022-10-19', 'hindu', 'WNA', 'Guru', 'S1', 'Mardiana', '2022-10-25', 'islam', 'WNI', 'ibu rumah tangga', 'Sma');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `nama_tk` text NOT NULL,
  `nama_lengkap` text NOT NULL,
  `jk` varchar(100) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tk`
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
-- Dumping data for table `tk`
--

INSERT INTO `tk` (`id`, `gambar`, `npsn`, `nama`, `alamat`, `kode_pos`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `status`, `akreditasi`, `hp`, `email`, `website`) VALUES
(2, 'adhetz.jpg', '69829559', 'TK ADHETZ INTERNATIONAL SCHOOL', 'JL SALEMBA BLOK A 1', '', 'Gunung Sari', 'Kec. Rappocini', 'Kota Makssar', 'Sulawesi Selatan', 'SWASTA', '', '', '', ''),
(3, 'al-azhar.jpg', '69812122', 'TK ISLAM AL AZHAR 34', 'JL AROEPPALA, HERTASNING BARU', '90222', 'Kel Minasa Upa', 'Kec. Rappocini', 'Kota Makassar', 'Sulawesi Selatan', 'SWASTA', 'B', '0411864388', 'insanunggul@live.com', 'http://alazharmks.sch.id');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tk`
--
ALTER TABLE `tk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `calon`
--
ALTER TABLE `calon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tk`
--
ALTER TABLE `tk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
