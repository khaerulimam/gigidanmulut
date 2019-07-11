-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 08:55 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'puskesmasmaos', 'dc02ad15d984debb2011cd7a9dffd5bd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE IF NOT EXISTS `tb_gejala` (
  `id` int(11) NOT NULL,
  `kd_gejala` varchar(15) NOT NULL,
  `nama_gejala` varchar(256) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `kd_gejala`, `nama_gejala`, `keterangan`) VALUES
(1, 'G1', 'Gusi Turun', 'Ditandai dengan adanya penurunan gusi pada bagian rongga gigi pasie.'),
(2, 'G2', 'Gigi Goyang ', 'Ditandai dengan keadaan gigi yang terasa goyang pada saat pasien mengunyah makanan atau pada saat pasien menyentuh gigi tersebut.'),
(3, 'G3', 'Gusi Berwarna Kemerahan', 'Ditandai dengan adanya gusi yang berwarna kemerah-merahan pada gigi si pasien.'),
(4, 'G4', 'Terdapat Karang Gigi', 'Ditandai dengan terdapatnya karang gigi pada gigi tersebut'),
(5, 'G5', 'Gigi Berlubang', 'Ditandai dengan adanya gigi berlubang yang dialami oleh si pasien.'),
(6, 'G6', 'Gigi ngilu saat minum-minuman dingin', 'Ditandai dengan adanya rasa ngilu oleh pasien pada saat pasien mengkonsumsi minuman-minuman dingin.'),
(7, 'G7', 'Gigi Berwarna Hitam', 'Ditandai dengan terdaptnya gigi yang berwarna hitam yang dialami oleh si pasien.'),
(8, 'G8', 'Sakit Gigi', 'Ditandai dengan adanya keluhan sakit pada gigi yang dialami oleh si pasien.'),
(9, 'G9', 'Gusi Bengkak', 'Ditandai dengan adanya pembengkakan gusi pada bagian rongga gigi si pasien.'),
(10, 'G10', 'Gusi Keluar Nanah', 'Ditandai dengan adanya nanah yang keluar dari gusi pada bagian gigi tertentu yang dialami oleh pasien.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE IF NOT EXISTS `tb_pasien` (
  `id_pasien` int(20) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nama_pasien`, `umur`, `no_hp`, `jenis_kelamin`, `alamat`) VALUES
(2, 'Khaerul Imam', '21 th', '09845491', 'l', 'njcksa '),
(8, 'Irfan Gustrio', '17 tahun', '087482918743', 'p', 'Cilacap');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE IF NOT EXISTS `tb_penyakit` (
  `id` int(11) NOT NULL,
  `kd_diagnosa` varchar(20) NOT NULL,
  `nama_diagnosa` varchar(256) NOT NULL,
  `keterangan` text NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `tb_relasi` (
  `id` int(15) NOT NULL,
  `kd_diagnosa` varchar(20) NOT NULL,
  `kd_gejala` varchar(20) NOT NULL,
  `mb` double NOT NULL,
  `md` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_relasi`
--

INSERT INTO `tb_relasi` (`id`, `kd_diagnosa`, `kd_gejala`, `mb`, `md`) VALUES
(1, 'P1', 'G3', 0.02, 0.02),
(4, 'P2', 'G2', 0.23, 0.65),
(7, 'P1', 'G7', 0.4, 0.5),
(10, 'P1', 'G5', 0.27, 0.02),
(12, 'P1', 'G1', 0.29, 0.68),
(13, 'P6', 'G6', 0.29, 0.03);

-- --------------------------------------------------------

--
-- Table structure for table `tb_riwayat_pasien`
--

CREATE TABLE IF NOT EXISTS `tb_riwayat_pasien` (
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
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_relasi`
--
ALTER TABLE `tb_relasi`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_riwayat_pasien`
--
ALTER TABLE `tb_riwayat_pasien`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
