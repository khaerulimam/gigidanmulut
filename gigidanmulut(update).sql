-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 06:01 AM
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
(1, 'puskesmasmaos', '21232f297a57a5a743894a0e4a801fc3');

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
(15, 'G15', 'Gigi sakit', 'loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet ', 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsultasi`
--

CREATE TABLE `tb_konsultasi` (
  `id` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `kd_gejala` varchar(15) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(22, 'Zaenur', '21', '0821313', 'l', 'adasdsa');

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
(34, 'P6', 'G4', 0, 0),
(35, 'P6', 'G11', 0, 0),
(51, 'P1', 'G1', 0, 0),
(52, 'P1', 'G2', 0, 0),
(53, 'P1', 'G3', 0, 0),
(54, 'P1', 'G4', 0, 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_konsultasi`
--
ALTER TABLE `tb_konsultasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_relasi`
--
ALTER TABLE `tb_relasi`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `tb_riwayat_pasien`
--
ALTER TABLE `tb_riwayat_pasien`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
