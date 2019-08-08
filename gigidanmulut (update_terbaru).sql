-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 08:18 AM
-- Server version: 10.1.25-MariaDB
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
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'puskesmasmaos', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(11) NOT NULL,
  `kd_gejala` varchar(15) NOT NULL,
  `nama_gejala` varchar(256) NOT NULL,
  `keterangan` text NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `kd_gejala`, `nama_gejala`, `keterangan`, `bobot`) VALUES
(1, 'G1', 'Gusi Turun', 'Ditandai dengan adanya penurunan gusi pada bagian rongga gigi pasie.', 0.8),
(2, 'G2', 'Gigi Goyang ', 'Ditandai dengan keadaan gigi yang terasa goyang pada saat pasien mengunyah makanan atau pada saat pasien menyentuh gigi tersebut.', 0.4),
(3, 'G3', 'Gusi Berwarna Kemerahan', 'Ditandai dengan adanya gusi yang berwarna kemerah-merahan pada gigi si pasien.', 0.4),
(4, 'G4', 'Terdapat Karang Gigi', 'Ditandai dengan terdapatnya karang gigi pada gigi tersebut', 0.8),
(5, 'G5', 'Gigi Berlubang', 'Ditandai dengan adanya gigi berlubang yang dialami oleh si pasien.', 0.5),
(6, 'G6', 'Gigi ngilu saat minum-minuman dingin', 'Ditandai dengan adanya rasa ngilu oleh pasien pada saat pasien mengkonsumsi minuman-minuman dingin.', 0.8),
(7, 'G7', 'Gigi Berwarna Hitam', 'Ditandai dengan terdaptnya gigi yang berwarna hitam yang dialami oleh si pasien.', 0.4),
(8, 'G8', 'Sakit Gigi', 'Ditandai dengan adanya keluhan sakit pada gigi yang dialami oleh si pasien.', 0.7),
(9, 'G9', 'Gusi Bengkak', 'Ditandai dengan adanya pembengkakan gusi pada bagian rongga gigi si pasien.', 0.4),
(10, 'G10', 'Gusi Keluar Nanah', 'Ditandai dengan adanya nanah yang keluar dari gusi pada bagian gigi tertentu yang dialami oleh pasien.', 1),
(11, 'G11', 'Bau mulut', 'loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet ', 0.4),
(12, 'G12', 'Gigi susu goyang', 'loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet ', 0.8),
(13, 'G13', 'Gigi permanen tumbuh', 'loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet ', 0.6),
(14, 'G14', 'Gigi berjejal', 'loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet ', 0.3),
(15, 'G15', 'Gigi sakit', 'loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet ', 0.5),
(16, 'G16', 'Bau Mulut', 'asdasdasd', 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsultasi`
--

CREATE TABLE `tb_konsultasi` (
  `id` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konsultasi`
--

INSERT INTO `tb_konsultasi` (`id`, `id_pasien`, `tanggal`) VALUES
(6, 46, '2019-08-08'),
(7, 47, '2019-08-08'),
(8, 47, '2019-08-08'),
(9, 47, '2019-08-08'),
(10, 48, '2019-08-08'),
(11, 48, '2019-08-08'),
(12, 48, '2019-08-08'),
(13, 48, '2019-08-08'),
(14, 48, '2019-08-08'),
(15, 48, '2019-08-08'),
(16, 48, '2019-08-08'),
(17, 48, '2019-08-08'),
(18, 48, '2019-08-08'),
(19, 48, '2019-08-08'),
(20, 49, '2019-08-08'),
(21, 49, '2019-08-08'),
(22, 49, '2019-08-08'),
(23, 49, '2019-08-08'),
(24, 52, '2019-08-08'),
(25, 52, '2019-08-08'),
(26, 52, '2019-08-08'),
(27, 52, '2019-08-08'),
(28, 52, '2019-08-08'),
(29, 52, '2019-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsultasi_gejala`
--

CREATE TABLE `tb_konsultasi_gejala` (
  `id_konsultasi` int(11) NOT NULL,
  `kd_gejala` varchar(15) NOT NULL,
  `tingkat` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konsultasi_gejala`
--

INSERT INTO `tb_konsultasi_gejala` (`id_konsultasi`, `kd_gejala`, `tingkat`) VALUES
(4, 'G1', 0.3),
(4, 'G5', 0.5),
(4, 'G6', 0.6),
(5, 'G1', 0.3),
(5, 'G5', 0.5),
(5, 'G6', 0.6),
(6, 'G1', 0.3),
(6, 'G5', 0.5),
(6, 'G6', 0.6),
(7, 'G5', 0.3),
(7, 'G6', 0.7),
(8, 'G5', 0.3),
(8, 'G6', 0.7),
(9, 'G5', 0.3),
(9, 'G6', 0.7),
(10, 'G1', 0.6),
(10, 'G2', 0.4),
(10, 'G3', 0.4),
(10, 'G4', 0.8),
(11, 'G1', 0.6),
(11, 'G2', 0.4),
(11, 'G3', 0.4),
(11, 'G4', 0.8),
(12, 'G1', 0.6),
(12, 'G2', 0.4),
(12, 'G3', 0.4),
(12, 'G4', 0.8),
(13, 'G1', 0.6),
(13, 'G2', 0.4),
(13, 'G3', 0.4),
(13, 'G4', 0.8),
(14, 'G1', 0.6),
(14, 'G2', 0.4),
(14, 'G3', 0.2),
(14, 'G4', 0.6),
(15, 'G1', 0.6),
(15, 'G2', 0.4),
(15, 'G3', 0.2),
(15, 'G4', 0.6),
(16, 'G1', 0.6),
(16, 'G2', 0.4),
(16, 'G3', 0.2),
(16, 'G4', 0.6),
(17, 'G1', 0.6),
(17, 'G2', 0.4),
(17, 'G3', 0.2),
(17, 'G4', 0.6),
(18, 'G1', 1),
(18, 'G2', 0.6),
(18, 'G3', 0.8),
(18, 'G4', 0.2),
(18, 'G16', 0.4),
(19, 'G1', 1),
(19, 'G2', 0.6),
(19, 'G3', 0.8),
(19, 'G4', 0.2),
(19, 'G16', 0.4),
(20, 'G1', 0.2),
(21, 'G1', 0.2),
(22, 'G1', 0.2),
(23, 'G1', 0.2),
(25, 'G1', 1),
(25, 'G8', 0.8),
(26, 'G1', 0.4),
(26, 'G8', 0.2),
(27, 'G7', 0.4),
(27, 'G8', 0.2),
(28, 'G7', 0.4),
(28, 'G8', 0.2),
(29, 'G7', 0.4),
(29, 'G8', 0.2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsultasi_penyakit`
--

CREATE TABLE `tb_konsultasi_penyakit` (
  `id_konsultasi` int(11) NOT NULL,
  `kd_diagnosa` varchar(20) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konsultasi_penyakit`
--

INSERT INTO `tb_konsultasi_penyakit` (`id_konsultasi`, `kd_diagnosa`, `nilai`) VALUES
(4, 'P4', 0.25),
(4, 'P2', 0.61),
(4, 'P3', 0.25),
(4, 'P1', 0.24),
(5, 'P4', 0.25),
(5, 'P2', 0.61),
(5, 'P3', 0.25),
(5, 'P1', 0.24),
(6, 'P4', 0.25),
(6, 'P2', 0.61),
(6, 'P3', 0.25),
(6, 'P1', 0.24),
(7, 'P4', 0.15),
(7, 'P2', 0.626),
(7, 'P3', 0.15),
(8, 'P4', 0.15),
(8, 'P2', 0.626),
(8, 'P3', 0.15),
(9, 'P4', 0.15),
(9, 'P2', 0.626),
(9, 'P3', 0.15),
(10, 'P4', 0.16),
(10, 'P6', 0.64),
(10, 'P1', 0.867912),
(17, 'P4', 0.08),
(17, 'P6', 0.48),
(17, 'P1', 0.791035),
(18, 'P4', 0.32),
(18, 'P6', 0.16),
(18, 'P1', 0.913178),
(19, 'P4', 0.32),
(19, 'P6', 0.16),
(19, 'P1', 0.913178),
(20, 'P1', 0.16),
(21, 'P1', 0.16),
(22, 'P1', 0.16),
(23, 'P1', 0.16),
(24, 'P4', 0),
(24, 'P2', 0),
(24, 'P5', 0),
(24, 'P3', 0),
(24, 'P6', 0),
(24, 'P1', 0),
(25, 'P3', 0.56),
(25, 'P1', 0.8),
(26, 'P3', 0.14),
(26, 'P1', 0.32),
(27, 'P2', 0.16),
(27, 'P3', 0.2776),
(28, 'P2', 0.16),
(28, 'P3', 0.2776),
(29, 'P2', 0.16),
(29, 'P3', 0.2776);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(20) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nama_pasien`, `umur`, `no_hp`, `jenis_kelamin`, `alamat`) VALUES
(2, 'Khaerul Imam', '21 th', '09845491', 'l', 'njcksa '),
(8, 'Irfan Gustrio', '17 tahun', '087482918743', 'p', 'Cilacap'),
(9, 'Zaenur', '21', '0821313', 'l', 'kalisari'),
(14, 'Zaenur', '21', '0821313', 'l', 'asdasd'),
(15, 'Zaenur', '21', '0821313', 'l', 'asddas'),
(16, 'Zaenur', '21', '0821313', 'l', 'asddas'),
(17, 'Zaenur', '21', '0821313', 'l', 'aasdasd'),
(18, 'Zaenur', '21', '0821313', 'l', 'kjhkjh'),
(19, 'Zaenur', '21', '0821313', 'l', 'dasda'),
(20, 'Zaenur', '21', '0821313', 'l', 'dasda'),
(21, 'Zaenur', '21', '0821313', 'l', 'asdad'),
(22, 'Zaenur', '21', '0821313', 'l', 'adasdsa'),
(23, 'Zaenur', '21', '0821313', 'l', 'asdad'),
(24, 'Zaenur', '21', '0821313', 'l', 'asdads'),
(25, 'Zaenur', '21', '0821313', 'l', 'sada'),
(26, 'Zaenur', '21', '0821313', 'l', 'dfgdg'),
(27, 'Zaenur', '21', '0821313', 'l', 'dasdasdas'),
(28, 'Zaenur', '21', '0821313', 'l', 'adasdada'),
(29, 'Zaenur', '21', '0821313', 'l', 'jkkkkkljjljljl'),
(30, 'Zaenur', '21', '0821313', 'l', 'dasdasd'),
(31, 'Zaenur', '21', '0821313', 'l', 'asdad'),
(32, 'Zaenur', '21', '0821313', 'l', 'asdad'),
(33, 'Zaenur', '21', '0821313', 'l', 'aasdasda'),
(34, 'Zaenur', '21', '0821313', 'l', 'asdadadasdasdasdasdasdasd'),
(35, 'Zaenur', '21', '0821313', 'l', 'asdasdadsd'),
(36, 'Zaenur', '21', '0821313', 'l', 'asdasdasdas'),
(37, 'Zaenur', '21', '0821313', 'l', 'ghhjgjgj'),
(38, 'Zaenur', '21', '0821313', 'l', 'asjdhakjdhakd'),
(39, 'Zaenur', '21', '0821313', 'l', 'loren ipsum dolor sit amet'),
(40, 'Zaenur', '21', '0821313', 'l', 'loren ipsum dolor sit amet'),
(41, 'Zaenur', '21', '0821313', 'l', 'loren ipsum dolor sit amet loren ipsum dolor sit amet '),
(42, 'Zaenur', '21', '0821313', 'l', 'loren ipsum dolor sit amet '),
(43, 'Zaenur', '21', '0821313', 'l', 'loreandjkdks'),
(44, 'Zaenur', '21', '0821313', 'l', 'loren ipsum dolor sit amet loren ipsum dolor sit amet '),
(45, 'Zaenur', '21', '0821313', 'l', 'loren ipsum doolor sit amet '),
(46, 'Zaenur', '21', '0821313', 'l', 'aksjdjadasdasd'),
(47, 'Zaenur', '21', '0821313', 'l', 'loren psum dolor st amet'),
(48, 'Zaenur', '21', '0821313', 'l', 'loren sdohujhn'),
(49, 'Zaenur', '21', '0821313', 'l', 'loreasn'),
(50, 'Zaenur', '', '', 'l', ''),
(51, '', '', '', 'l', ''),
(52, 'Zaenur', '21', '081578988248', 'l', 'Kalisari Cilongok ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id` int(11) NOT NULL,
  `kd_diagnosa` varchar(20) NOT NULL,
  `nama_diagnosa` varchar(256) NOT NULL,
  `keterangan` text NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id`, `kd_diagnosa`, `nama_diagnosa`, `keterangan`, `solusi`) VALUES
(1, 'P1', 'Periodontitis', 'Periodontitis adalah penyakit multifaktorial yang menyebabkan infeksi dan peradangan jaringan pendukung gigi, biasanya menyebabkan hilangnya tulang dan ligamen periodontal dan bisanya merupakan penyebab kehilangan gigi pada orang dewasa dan edentulousness. Periodontitis merupakan suatu infeksi campuran dari mikroorganisme seperti Porphyromonas gingivalis, Prevotella intermedia, Bacteroides forsythus, Actinobacillus actinomytemcomitans, dan mikroorganisme Gram-positif, misalnya Peptostreptococcus micros dan Streptococcus intermedius ', 'Solusi untuk penyakit Periodontitis adalah Pemberian obat antibiotik, dilakukan scaling, splinting, dan pencabutan gigi.'),
(2, 'P2', 'Karies Gigi', 'Karies gigi adalah suatu penyakit jaringan keras gigi yang bersifat kronik progresif dan disebabkan oleh aktifitas jasad renik dalam karbohidrat yang dapat dirugikan, ditandai dengan deminerilisasi jaringan keras dan diikuti kerusakan zat organiknya ', 'Solusi pengobatan untuk pasien yang terkena karies gigi adalah dilakukannya penambalan gigi dan perawatan pada saluran akar.'),
(3, 'P3', 'Pulpitis', 'Pulpitis seringkali merupakan akibat atau perkembangan dari pulpitis reversibel. Kerusakan pulpa yang parah akibat pengambilan dentin yang luas selama prosedur operatif atau terganggunya aliran darah pulpa akibat trauma atau penggerakan gigi dalam perawatan ortodonsia dapat pula menyebabkan pulpitis ireversibel. Pulpitis ireversibel tidak akan bisa pulih walau penyebabnya dihilangkan. Cepat atau lambat pulpa akan menjadi nekrosis. ', 'Solusi pengobatan untuk pasien yang terkena penyakit Pulpitis ini adalah pemberian obat antibiotik, pemberian obat antinyeri, perawatan pada saluran akar, dilakukan penambalan gigi, dan solusi terakhir adalah pencabutan gigi.'),
(4, 'P4', 'Abses', 'Abses adalah akumulasi pus yang terlokalisasi dalam sebuah rongga yang disebabkan oleh kerusakan jaringan akibat infeksi atau benda asing. Keadaan ini merupakan reaksi pertahanan jaringan untuk mencegah penyebaran infeksi ke bagian tubuh yang lain', 'Solusi pengobatan untuk pasien yang terkena penyakit abses adalah pemberian obat antinyeri, pemberian obat antibiotik, dilakukan insisi dan dreinase, dan pencabutan gigi.'),
(5, 'P5', 'Persistensi', 'Persistemsi gigi sulung adalah suatu keadaan dimana gigi \r\nsulung belum tanggal walaupun waktu tanggalnya sudah tiba. Keadaan ini sering dijumpai pada anak usia 6-12 tahun. Persistensi gigi sulung tidak mempunyai penyebab tunggal tetapi merupakan gangguan yang disebabkan multifactor. Akar gigi sulung secara normal akan diresorbsi sempurna sehingga gigi sulung menjadi goyang dan akhirnya tanggal beberapa saat sebelum gigi permanen pengganti erupsi, akan tetapi sering dijumpai adanya kasus gigi persistensi disebabkan oleh berbagai faktor penyebab. ', 'Solusi untuk pengobatan pada pasien yang terkena penyakit persistensi adalah dilakukan pencabutan gigi.'),
(6, 'P6', 'Kalkulus Gigi', 'Kalkulus merupakan kumpulan plak yang mengalami kalsifikasi dan melekat erat pada permukaan gigi serta objek solid lainnya di dalam mulut, sehingga gigi menjadi kasar dan terasa tebal. Faktor penyebab terjadinya kalkulus yaitu disebabkan oleh adanya pengendapan sisa makanan dengan air ludah serta kuman-kuman maka terjadilah proses pengapuran yang lama kelamaan menjadi keras. Komponen pembentukkan kalkulus antara lain terdiri dari bahan-bahan mineral seperti kalsium dan fosfor dimana kandungan tersebut juga terkandung pada air sumur gali.', 'Solusi pengobatan yang dilkukan untuk pasien yang terkena kalkulus gigi adalah dengan melakukan pembersihan karang gigi atau scaling dengan menggunakan ultrasonic scaller.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_relasi`
--

CREATE TABLE `tb_relasi` (
  `id` int(15) NOT NULL,
  `kd_diagnosa` varchar(20) NOT NULL,
  `kd_gejala` varchar(20) NOT NULL,
  `mb` double NOT NULL,
  `md` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_relasi`
--

INSERT INTO `tb_relasi` (`id`, `kd_diagnosa`, `kd_gejala`, `mb`, `md`) VALUES
(14, 'P4', 'G9', 0, 0),
(15, 'P4', 'G3', 0, 0),
(16, 'P4', 'G10', 0, 0),
(17, 'P4', 'G5', 0, 0),
(18, 'P4', 'G15', 0, 0),
(21, 'P2', 'G5', 0, 0),
(22, 'P2', 'G6', 0, 0),
(23, 'P2', 'G7', 0, 0),
(26, 'P5', 'G12', 0, 0),
(27, 'P5', 'G13', 0, 0),
(28, 'P5', 'G14', 0, 0),
(29, 'P5', 'G15', 0, 0),
(30, 'P3', 'G8', 0, 0),
(31, 'P3', 'G5', 0, 0),
(32, 'P3', 'G7', 0, 0),
(55, 'P1', 'G1', 0, 0),
(56, 'P1', 'G2', 0, 0),
(57, 'P1', 'G3', 0, 0),
(58, 'P1', 'G4', 0, 0),
(59, 'P6', 'G16', 0, 0),
(60, 'P6', 'G4', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_riwayat_pasien`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_relasi`
--
ALTER TABLE `tb_relasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_riwayat_pasien`
--
ALTER TABLE `tb_riwayat_pasien`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_konsultasi`
--
ALTER TABLE `tb_konsultasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_relasi`
--
ALTER TABLE `tb_relasi`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `tb_riwayat_pasien`
--
ALTER TABLE `tb_riwayat_pasien`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
