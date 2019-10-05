-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 Okt 2019 pada 03.17
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gigidanmulut`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(11) NOT NULL,
  `kd_gejala` varchar(15) NOT NULL,
  `nama_gejala` varchar(256) NOT NULL,
  `keterangan` text NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsultasi`
--

CREATE TABLE `tb_konsultasi` (
  `id` int(11) NOT NULL,
  `id_pasien` int(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsultasi_gejala`
--

CREATE TABLE `tb_konsultasi_gejala` (
  `id_konsultasi` int(11) NOT NULL,
  `kd_gejala` varchar(15) NOT NULL,
  `tingkat` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsultasi_penyakit`
--

CREATE TABLE `tb_konsultasi_penyakit` (
  `id_konsultasi` int(11) NOT NULL,
  `kd_diagnosa` varchar(20) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(20) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id` int(11) NOT NULL,
  `kd_diagnosa` varchar(20) NOT NULL,
  `nama_diagnosa` varchar(256) NOT NULL,
  `keterangan` text NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_relasi`
--

CREATE TABLE `tb_relasi` (
  `id` int(15) NOT NULL,
  `kd_diagnosa` varchar(20) NOT NULL,
  `kd_gejala` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_riwayat_pasien`
--

CREATE TABLE `tb_riwayat_pasien` (
  `id` int(20) NOT NULL,
  `id_pasien` int(20) NOT NULL,
  `gejala` text NOT NULL,
  `penyakit` text NOT NULL,
  `CF` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_gejala` (`kd_gejala`);

--
-- Indexes for table `tb_konsultasi`
--
ALTER TABLE `tb_konsultasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `tb_konsultasi_gejala`
--
ALTER TABLE `tb_konsultasi_gejala`
  ADD KEY `id_konsultasi` (`id_konsultasi`),
  ADD KEY `kd_gejala` (`kd_gejala`),
  ADD KEY `id_konsultasi_2` (`id_konsultasi`),
  ADD KEY `kd_gejala_2` (`kd_gejala`);

--
-- Indexes for table `tb_konsultasi_penyakit`
--
ALTER TABLE `tb_konsultasi_penyakit`
  ADD KEY `id_konsultasi` (`id_konsultasi`),
  ADD KEY `kd_diagnosa` (`kd_diagnosa`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_diagnosa` (`kd_diagnosa`);

--
-- Indexes for table `tb_relasi`
--
ALTER TABLE `tb_relasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kd_diagnosa` (`kd_diagnosa`),
  ADD KEY `kd_gejala` (`kd_gejala`);

--
-- Indexes for table `tb_riwayat_pasien`
--
ALTER TABLE `tb_riwayat_pasien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_konsultasi`
--
ALTER TABLE `tb_konsultasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;
--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;
--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_relasi`
--
ALTER TABLE `tb_relasi`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `tb_riwayat_pasien`
--
ALTER TABLE `tb_riwayat_pasien`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_konsultasi_gejala`
--
ALTER TABLE `tb_konsultasi_gejala`
  ADD CONSTRAINT `fk_konsultasi_gejala_kon` FOREIGN KEY (`kd_gejala`) REFERENCES `tb_gejala` (`kd_gejala`),
  ADD CONSTRAINT `fk_konsultasi_konsultasi_kon` FOREIGN KEY (`id_konsultasi`) REFERENCES `tb_konsultasi` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_konsultasi_penyakit`
--
ALTER TABLE `tb_konsultasi_penyakit`
  ADD CONSTRAINT `fk_konsultasi_diagnosa` FOREIGN KEY (`kd_diagnosa`) REFERENCES `tb_penyakit` (`kd_diagnosa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_konsultasi_konsultasi_penyakit` FOREIGN KEY (`id_konsultasi`) REFERENCES `tb_konsultasi` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD CONSTRAINT `tb_penyakit_ibfk_1` FOREIGN KEY (`kd_diagnosa`) REFERENCES `tb_konsultasi_penyakit` (`kd_diagnosa`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_relasi`
--
ALTER TABLE `tb_relasi`
  ADD CONSTRAINT `fk_diagnosa_relasi` FOREIGN KEY (`kd_diagnosa`) REFERENCES `tb_penyakit` (`kd_diagnosa`),
  ADD CONSTRAINT `fk_gejala_relasi` FOREIGN KEY (`kd_gejala`) REFERENCES `tb_gejala` (`kd_gejala`),
  ADD CONSTRAINT `fk_konsultasi_gejala` FOREIGN KEY (`kd_gejala`) REFERENCES `tb_gejala` (`kd_gejala`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
