-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 01:13 AM
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
  `kd_gejala` varchar(15) NOT NULL,
  `nama_gejala` varchar(256) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`kd_gejala`, `nama_gejala`, `keterangan`) VALUES
('G1', 'Gusi bengkak merah dan berdarah', 'gusi menjadi bengkak dan berwarna merah disertai dengan berdarah '),
('G2', 'Nyeri Gusi', 'Mengalami rasa nyeri di area gusi'),
('G3', 'Demam', 'Anggota badan merasakan demam  dalam jangka waktu yang relatif panjang'),
('G4', 'Nyeri yang tajam, berdenyut atau konstan, atau rasa sakit muncul saat Anda menekan gigi', 'Gejala ini yang dirasakan adalah pada saat kita menekan gigi maka gigi akaan terasa sakit sehingga merasa nyeri '),
('G5', 'Bengkak di sekitar gigi', 'gajala ini ditandai dengan adanya pembengkakan gusi di sekiar gigi yang merasa sakit'),
('G6', 'Cairan yang terasa busuk dari gigi yang terinfeksi.', 'Ini ditandai dengan adanya cairan yang terasa busuk dari gigi gigi yang terkena infeksi dari sisa sisa makanan'),
('G7', 'Gigi ngilu ', 'Gigi terasa ngilu atau gigi sensitif umumnya disebabkan karena terkikisnya lapisan pelindung gigi yang disebut email atau karena terpaparnya akar gigi. Gigi Anda menjadi sensitif ketika gusi terbuka, sehingga dentin, lapisan di bawahnya, terpapar berbagai '),
('G8', 'Gigi Goyang ', 'Radang gusi bisa berlanjut pada penyakit gigi seperti gigi goyang. Selain bisa menyebabkan gusi berdarah, plak pada gigi yang bercamput dengan sisa makanan (jika tidak dibersihkan atau tidak gosok gigi) akan menyebabkan pengendapan dan mengeras menjadi karang gigi.\r\n\r\nKarang gigi yang berisikan bakteri ini dapat mengakibatkan kerusakan dan menimbulkan penyakit pada gusi yang dapat berujung pada goyangnya gigi.');

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
  `alamat` varchar(200) NOT NULL,
  `gejala` varchar(200) NOT NULL,
  `penyakit` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nama_pasien`, `umur`, `no_hp`, `jenis_kelamin`, `alamat`, `gejala`, `penyakit`) VALUES
(1, 'Khaerul Imam', '21 tahun', '-', '', 'adsd', '', ''),
(2, 'Khaerul Imam', '21 th', '09845491', 'l', 'njcksa ', '', ''),
(3, 'njkj', '7', '878', 'l', 'jhgj', '', ''),
(4, 'Khaerul Imam jhjikj', '21 tahun', '76', 'l', 'jhj', '', ''),
(5, 'Khaerul Imam jhjikj', '21 tahun', '76', 'l', 'jhj', '', ''),
(6, 'irfan', '31th', '9302', 'p', 'ndkcde c', '', ''),
(7, '', '', '', 'l', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE IF NOT EXISTS `tb_penyakit` (
  `kd_diagnosa` varchar(20) NOT NULL,
  `nama_diagnosa` varchar(256) NOT NULL,
  `keterangan` text NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`kd_diagnosa`, `nama_diagnosa`, `keterangan`, `solusi`) VALUES
('P2', 'Glositis', 'Kondisi yang dinamakan glositis ini bisa dikatakan sebagai penyakit radang pada lidah di mana ini adalah sebuah keadaan di dalam mulut yang bisa ditunjukkan dengan adanya pembengkakan di lidah. Jika pada kasus yang lebih parah, glositis mampu memicu penyumbatan pernapasan saat lidah membengkak sangat parah.', 'Menggosok gigi dengan rajin, 2 atau 3 kali sehari untuk menjaga kesehatan gigi, gusi dan lidah.\r\nMenggunakan obat yang mengandung anti jamur dan berperan sebagai antibiotik.\r\nMenjauhkan diri dari iritan, seperti minuman alkohol maupun makanan panas dan pedas.'),
('P3', 'Gigi Hipersensitif', 'Hipersensitivitas bisa saja muncul pada bagian gigi Anda dan biasanya hal ini akan ditandai dengan ngilu pada gigi. Kondisi yang bisa disebut juga dengan istilah hipersensitivitas dentin ini juga bisa dialami oleh para orang tua secara alamiah dikarenakan memang resesi gingiva atau penurunan gusi. Tentu kondisi gusi yang demikian juga terdukung oleh adanya faktor pertambahan usia.', 'Menghindari makanan maupun minuman yang sifatnya erosif, seperti jus buah rasa asam, asam itu sendiri serta minuman keras.\r\nHindari menggosok gigi menggunakan pasta gigi bersifat abrasif.\r\nHindari menggosok gigi langsung tepat sehabis mengonsumsi makanan/minuman asam demi efek merusak dari abrasi dan asam bisa diturunkan.'),
('P4', 'Abses Gusi', 'Kondisi satu ini adalah salah satu penyakit gigi dan mulut di mana gusi dapat bernanah. Nanah yang keluar di bagian gusi tampak cairan kental yang warnanya kuning, putih agak kuning atau bisa juga kuning agak coklat. Nanah dapat muncul apabila terjadi inflamasi pada gusi ketika bagian gusi terinfeksi.', 'Senantiasa menjaga kesehatan dan kebersihan mulut.\r\nMenggosok gigi rutin berikut juga memakai dental floss alias benang gigi untuk flossing.\r\nMembersihkan lidah.\r\nMenerapkan pola makan seimbang penuh nutrisi untuk kesehatan mulut, gigi, dan gusi.\r\nHindari konsumsi makanan/minuman dengan kadar gula tinggi.\r\nTidak merokok.'),
('P5', 'Sariawan/Stomatitis', 'Keadaan satu ini sudah jelas pasti hampir semua orang pernah mengalaminya, apalagi ketika bibir bagian dalam tergigit ketika sedang makan yang akhirnya menjadi sariawan. Jamur Candida albicans merupakan penyebab dari sariawan ini dan meski tak menular, tentu kondisi ini memberikan ketidaknyamanan bagi penderitanya. Sariawan juga dikatakan sebagai bentuk kelainan yang terjadi di selaput lendir mulut yang tampak seperti luka dengan rupa bercak yang warnanya agak putih kekuningan dan bertekstur cekung.', 'Menjaga kesehatan dan kebersihan mulut seperti rajin berkumur dan menggosok gigi.\r\nMembersihkan gigi palsu dengan rajin supaya tak terjangkit kuman.\r\nBerhenti dari kebiasaan merokok.\r\nSecara rutin memeriksakan kondisi gigi dan mulut ke dokter gigi.'),
('P6', 'Karies Gigi', 'Nama lain dari penyakit ini adalah dental caries dan penyakit ini merupakan jenis infeksi yang bisa memicu kerusakan struktur gigi. Adanya karies gigi akan mampu memicu gigi berlubang. Penyakit satu ini jika dibiarkan atau tidak mendapatkan penanganan benar bisa menyebabkan rasa nyeri, terjadinya infeksi, gigi tanggal, kasus bahaya lainnya dan bahkan membawa kematian.', 'Menjaga kebersihan mulut dengan menggosok gigi 2-3 kali sehari baik setelah makan maupun sebelum tidur dan sehabis bangun tidur.\r\nMengonsumsi fluor atau menggunakan pasta gigi ber-fluoride.\r\nTerapi antibakteri.\r\nMengurangi makanan berkarbohidrat dan berkadar gula tinggi.'),
('P7', 'Gigi geraham bungsu patah', 'Meski berada di paling belakang, bukan berarti gigi geraham bungsu dapat luput dari masalah gigi patah. Gigi patah biasanya terjadi pada gigi yang memang sudah mengalami kerusakan, misalnya saja keropos.\r\n\r\nJika gigi geraham Anda patah, jangan panik. Anda bisa segera pergi ke dokter gigi, disarankan untuk menyimpan patahan gigi geraham di dalam susu. Pada kondisi tertentu, dokter memiliki kemungkinan untuk dapat menempelkannya kembali. Tapi hal ini tentu tergantung pada tingkat kerusakan yang terjadi\r\n\r\n', 'Jangan terlalu sering menyikat gigi, Menggosok gigi 2-3 kali sehari sebagai cara merawat gigi adalah jumlah yang ideal. Akan tetapi menggosok gigi lebih dari 3 kali sehari dapat merusak email gigi dan membahayakan kondisi gusi.');

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
  ADD PRIMARY KEY (`kd_gejala`),
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
  ADD PRIMARY KEY (`kd_diagnosa`);

--
-- Indexes for table `tb_relasi`
--
ALTER TABLE `tb_relasi`
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
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_relasi`
--
ALTER TABLE `tb_relasi`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
