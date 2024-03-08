-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 04:00 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `2024_databases_spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kelas`
--

CREATE TABLE IF NOT EXISTS `data_kelas` (
  `id_kelas` varchar(50) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `kompetensi_keahlian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kelas`
--

INSERT INTO `data_kelas` (`id_kelas`, `nama_kelas`, `kompetensi_keahlian`) VALUES
('KEL2402001', '1', 'Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `data_pembayaran`
--

CREATE TABLE IF NOT EXISTS `data_pembayaran` (
  `id_pembayaran` varchar(50) NOT NULL,
  `id_petugas` varchar(50) NOT NULL,
  `id_siswa` varchar(50) NOT NULL,
  `tgl_bayar` varchar(50) NOT NULL,
  `bulan_bayar` varchar(50) NOT NULL,
  `tahun_bayar` varchar(50) NOT NULL,
  `id_spp` varchar(50) NOT NULL,
  `jumlah_bayar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pembayaran`
--

INSERT INTO `data_pembayaran` (`id_pembayaran`, `id_petugas`, `id_siswa`, `tgl_bayar`, `bulan_bayar`, `tahun_bayar`, `id_spp`, `jumlah_bayar`) VALUES
('PEM2402001', 'PET001', 'SIS2402001', '29', '02', '2024', 'SPP2402001', '200000');

-- --------------------------------------------------------

--
-- Table structure for table `data_petugas`
--

CREATE TABLE IF NOT EXISTS `data_petugas` (
  `id_petugas` varchar(50) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_petugas`
--

INSERT INTO `data_petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `level`) VALUES
('PET001', 'ryan', 'ryan', '10c7ccc7a4f0aff03c915c485565b9da', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `id_siswa` varchar(50) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_kelas` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `id_spp` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `no_telp`, `id_spp`, `username`, `password`) VALUES
('SIS2402001', '123', '1234', 'Maulida', 'KEL2402001', 'Jambi', '082309298397', 'SPP2402001', 'maulida', 'abebfbe48405c2059a5d24c8288647ef');

-- --------------------------------------------------------

--
-- Table structure for table `data_spp`
--

CREATE TABLE IF NOT EXISTS `data_spp` (
  `id_spp` varchar(50) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `nominal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_spp`
--

INSERT INTO `data_spp` (`id_spp`, `tahun`, `nominal`) VALUES
('SPP2402001', '2024', '200000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
