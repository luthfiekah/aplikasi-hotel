-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Mar 2022 pada 17.04
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotelku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(50) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `gambar`, `keterangan`) VALUES
(424242, 'eeeeeeee', 'kamar4.jpg', 'ttttttt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) NOT NULL,
  `nama_hotel` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nama_hotel`, `alamat`, `telepon`, `email`, `website`) VALUES
(1, 'GSGS', 'savav', '2444', 'dbdbdb', 'SDS2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `id_kamar_tipe` int(11) DEFAULT NULL,
  `nomor_kamar` int(11) DEFAULT NULL,
  `max_dewasa` int(11) DEFAULT NULL,
  `max_anak` int(11) DEFAULT NULL,
  `status_kamar` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `id_kamar_tipe`, `nomor_kamar`, `max_dewasa`, `max_anak`, `status_kamar`) VALUES
(1, 1, 101, 1, 2, '1'),
(2, 1, 102, 1, 2, '1'),
(3, 1, 103, 1, 2, '1'),
(4, 2, 104, 2, 4, '1'),
(5, 2, 105, 2, 4, '1'),
(6, 3, 106, 2, 1, '1'),
(7, 4, 107, 2, 2, '1'),
(8, 3, 108, 2, 1, '1'),
(9, 3, 109, 2, 1, '1'),
(10, 4, 110, 2, 2, '1'),
(11, 1, 201, 1, 2, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar_tipe`
--

CREATE TABLE `kamar_tipe` (
  `id_kamar_tipe` int(11) NOT NULL,
  `nama_kamar_tipe` varchar(50) DEFAULT NULL,
  `fasilitas` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `harga` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kamar_tipe`
--

INSERT INTO `kamar_tipe` (`id_kamar_tipe`, `nama_kamar_tipe`, `fasilitas`, `gambar`, `harga`) VALUES
(1, 'Single Room', NULL, NULL, 125000),
(2, 'Twin Room', NULL, NULL, 155000),
(3, 'Double Room', NULL, NULL, 235000),
(4, 'Family Room', 'Kamar ukuran 36m2. \r\nAir Conditionare. \r\nBath Tube. \r\nTV.', NULL, 350000),
(6, 'Deluxe', 'Kamar ukuran 36m2. Air Conditionare. Bath Tube. TV.', NULL, 575000),
(9, 'Twin Room', 'Y', 'kamar3.jpg', 55);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `id_tamu` int(11) DEFAULT NULL,
  `kode_booking` varchar(50) DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `time_in` time DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `time_out` time DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `pajak` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `id_tamu`, `kode_booking`, `check_in`, `time_in`, `check_out`, `time_out`, `biaya`, `pajak`) VALUES
(4, NULL, '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', NULL, NULL),
(5, NULL, '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', NULL, NULL),
(6, NULL, NULL, '2022-03-15', '13:27:00', '2022-03-30', '16:27:00', 231242, NULL),
(7, NULL, NULL, '2022-03-15', '13:27:00', '2022-03-30', '16:27:00', 231242, NULL),
(8, NULL, NULL, '2022-03-15', '13:27:00', '2022-03-30', '16:27:00', 231242, NULL),
(9, NULL, NULL, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, NULL),
(10, NULL, NULL, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, NULL),
(11, NULL, NULL, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, NULL),
(12, NULL, NULL, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, NULL),
(13, NULL, NULL, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, NULL),
(14, NULL, NULL, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, NULL),
(15, NULL, NULL, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, NULL),
(16, NULL, NULL, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, NULL),
(17, NULL, NULL, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, NULL),
(18, NULL, NULL, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, NULL),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, NULL, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, NULL),
(23, NULL, NULL, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, NULL),
(24, NULL, NULL, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, NULL),
(25, NULL, NULL, '2022-03-15', '17:21:00', '2022-03-26', '17:25:00', 43241, NULL),
(26, NULL, NULL, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, NULL),
(27, NULL, NULL, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, NULL),
(28, NULL, NULL, '2022-03-15', '21:17:00', '2022-03-22', '21:17:00', 1111, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(11) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama_depan` varchar(50) DEFAULT NULL,
  `nama_belakang` varchar(50) DEFAULT NULL,
  `tipe_identitas` enum('ktp','sim','passport') DEFAULT NULL,
  `nomor_identitas` varchar(20) DEFAULT NULL,
  `kewarganegaraan` enum('wni','wna') DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nik`, `nama_depan`, `nama_belakang`, `tipe_identitas`, `nomor_identitas`, `kewarganegaraan`, `alamat`, `no_hp`, `email`) VALUES
(6, '1', 'WFNFNW', 'ANKNS', '', '2141', 'wna', 'GDD', '8866544', 'V'),
(7, '', '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', '', ''),
(10, '99', 'eg', 'ANKNS', '', '2141', 'wni', 'PPP', '235353', 'dbdbdb'),
(11, '', '', '', '', '', '', '', '', ''),
(12, '3', 'WFNFNW', 'ANKNS', 'ktp', '2141', 'wna', 'GDD', '8866544', 'dbdbdb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `level` enum('1','2') DEFAULT NULL,
  `akses_terakhir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`, `akses_terakhir`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', '1', '2022-01-29'),
(2, 'cs1', '21232f297a57a5a743894a0e4a801fc3', 'Customer Service 1', '2', '2022-01-29'),
(3, 'luthfi', 'd5cd72b7bcbf56bc503904f1ac7d9bc2', 'Administrator', '1', '2022-03-01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`) USING BTREE;

--
-- Indeks untuk tabel `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`) USING BTREE;

--
-- Indeks untuk tabel `kamar_tipe`
--
ALTER TABLE `kamar_tipe`
  ADD PRIMARY KEY (`id_kamar_tipe`) USING BTREE;

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`) USING BTREE;

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`) USING BTREE;

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=424243;

--
-- AUTO_INCREMENT untuk tabel `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kamar_tipe`
--
ALTER TABLE `kamar_tipe`
  MODIFY `id_kamar_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
