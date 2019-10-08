-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Okt 2019 pada 09.16
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

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'puskesmasmaos', '0192023a7bbd73250516f069df18b500');

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

--
-- Dumping data untuk tabel `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `kd_gejala`, `nama_gejala`, `keterangan`, `bobot`) VALUES
(1, 'G1', 'Gusi Turun', 'Ditandai dengan adanya penurunan gusi pada bagian rongga gigi pasie.', 0.8),
(2, 'G2', 'Gigi Goyang ', 'Ditandai dengan keadaan gigi yang terasa goyang pada saat pasien mengunyah makanan atau pada saat pasien menyentuh gigi tersebut.', 0.4),
(3, 'G3', 'Terdapat karang gigi', 'Ditandai dengan terdapatnya karang gigi pada gigi tersebut', 0.8),
(4, 'G4', 'Gigi berlubang', 'loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet ', 0.7),
(5, 'G5', 'Gigi ngilu saat minum-minuman dingin', 'Ditandai dengan adanya rasa ngilu oleh pasien pada saat pasien mengkonsumsi minuman-minuman dingin.', 0.8),
(6, 'G6', 'Gigi berwarna hitam', 'Ditandai dengan terdaptnya gigi yang berwarna hitam yang dialami oleh si pasien.', 0.6),
(7, 'G7', 'Sakit Gigi', 'Ditandai dengan adanya keluhan sakit pada gigi yang dialami oleh si pasien.\r\n', 0.7),
(8, 'G8', 'Gusi Bengkak', 'Ditandai dengan adanya pembengkakan gusi pada bagian rongga gigi si pasien.\r\n', 0.8),
(9, 'G9', 'Gusi keluar nanah', 'Ditandai dengan adanya nanah yang keluar dari gusi pada bagian gigi tertentu yang dialami oleh pasien.\r\n', 1),
(10, 'G10', 'Gigi susu goyang', 'loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet', 0.8),
(11, 'G11', 'Gigi permanen tumbuh', 'loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet ', 0.6),
(12, 'G12', 'Gigi berjejal', 'loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet loren ipsum dolor sit amet ', 0.5),
(13, 'G13', 'Bau Mulut', 'lloasdasd', 0.72);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsultasi`
--

CREATE TABLE `tb_konsultasi` (
  `id` int(11) NOT NULL,
  `rekam_medis` varchar(20) NOT NULL,
  `id_pasien` int(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_konsultasi`
--

INSERT INTO `tb_konsultasi` (`id`, `rekam_medis`, `id_pasien`, `tanggal`) VALUES
(1, '123458', 1, '2019-10-08'),
(8, '123459', 1, '2019-10-08'),
(9, '123460', 2, '2019-10-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsultasi_gejala`
--

CREATE TABLE `tb_konsultasi_gejala` (
  `id_konsultasi` int(11) NOT NULL,
  `kd_gejala` varchar(15) NOT NULL,
  `tingkat` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_konsultasi_gejala`
--

INSERT INTO `tb_konsultasi_gejala` (`id_konsultasi`, `kd_gejala`, `tingkat`) VALUES
(1, 'G3', 0.6),
(1, 'G4', 0.6),
(1, 'G6', 0.6),
(1, 'G7', 0.4),
(8, 'G3', 0.6),
(8, 'G2', 0.8),
(8, 'G1', 0.4),
(9, 'G1', 0.4),
(9, 'G10', 0.6),
(9, 'G12', 0.8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsultasi_penyakit`
--

CREATE TABLE `tb_konsultasi_penyakit` (
  `id_konsultasi` int(11) NOT NULL,
  `kd_diagnosa` varchar(20) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_konsultasi_penyakit`
--

INSERT INTO `tb_konsultasi_penyakit` (`id_konsultasi`, `kd_diagnosa`, `nilai`) VALUES
(1, 'P2', 0.48),
(1, 'P3', 0.6288),
(1, 'P6', 0.732736),
(8, 'P2', 0.48),
(8, 'P4', 0.759552),
(9, 'P5', 0.688);

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
  `alamat` varchar(200) NOT NULL,
  `nama_kk` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nama_pasien`, `umur`, `no_hp`, `jenis_kelamin`, `alamat`, `nama_kk`, `tgl_lahir`) VALUES
(1, 'Zaenur', '21', '081578988248', 'l', 'Jl. Letjen Pol Sumarto Watumas Purwanegara Purwokerto, Banyumas', 'Zaenur', '2019-10-08'),
(2, 'Zaenur', '21', '081578988248', 'l', 'Jl. Letjen Pol Sumarto Watumas Purwanegara Purwokerto, Banyumas', 'Zaenur', '2000-05-15');

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

--
-- Dumping data untuk tabel `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id`, `kd_diagnosa`, `nama_diagnosa`, `keterangan`, `solusi`) VALUES
(1, 'P1', 'Abses', 'Abses adalah akumulasi pus yang terlokalisasi dalam sebuah rongga yang disebabkan oleh kerusakan jaringan akibat infeksi atau benda asing. Keadaan ini merupakan reaksi pertahanan jaringan untuk mencegah penyebaran infeksi ke bagian tubuh yang lain\r\n', 'Solusi pengobatan untuk pasien yang terkena penyakit abses adalah pemberian obat antinyeri, pemberian obat antibiotik, dilakukan insisi dan dreinase, dan pencabutan gigi.\r\n'),
(2, 'P2', 'Kalkulus Gigi', '\r\nKalkulus merupakan kumpulan plak yang mengalami kalsifikasi dan melekat erat pada permukaan gigi serta objek solid lainnya di dalam mulut, sehingga gigi menjadi kasar dan terasa tebal. Faktor penyebab terjadinya kalkulus yaitu disebabkan oleh adanya pengendapan sisa makanan dengan air ludah serta kuman-kuman maka terjadilah proses pengapuran yang lama kelamaan menjadi keras. Komponen pembentukkan kalkulus antara lain terdiri dari bahan-bahan mineral seperti kalsium dan fosfor dimana kandungan tersebut juga terkandung pada air sumur gali.\r\n', 'Solusi pengobatan yang dilkukan untuk pasien yang terkena kalkulus gigi adalah dengan melakukan pembersihan karang gigi atau scaling dengan menggunakan ultrasonic scaller.\r\n'),
(3, 'P3', 'Karies Gigi', 'Karies gigi adalah suatu penyakit jaringan keras gigi yang bersifat kronik progresif dan disebabkan oleh aktifitas jasad renik dalam karbohidrat yang dapat dirugikan, ditandai dengan deminerilisasi jaringan keras dan diikuti kerusakan zat organiknya ', 'Solusi pengobatan untuk pasien yang terkena karies gigi adalah dilakukannya penambalan gigi dan perawatan pada saluran akar.\r\n'),
(4, 'P4', 'Periodontitis', 'Periodontitis adalah penyakit multifaktorial yang menyebabkan infeksi dan peradangan jaringan pendukung gigi, biasanya menyebabkan hilangnya tulang dan ligamen periodontal dan bisanya merupakan penyebab kehilangan gigi pada orang dewasa dan edentulousness. Periodontitis merupakan suatu infeksi campuran dari mikroorganisme seperti Porphyromonas gingivalis, Prevotella intermedia, Bacteroides forsythus, Actinobacillus actinomytemcomitans, dan mikroorganisme Gram-positif, misalnya Peptostreptococcus micros dan Streptococcus intermedius ', 'Solusi untuk penyakit Periodontitis adalah Pemberian obat antibiotik, dilakukan scaling, splinting, dan pencabutan gigi.\r\n'),
(5, 'P5', 'Persistensi', 'Persistemsi gigi sulung adalah suatu keadaan dimana gigi \r\nsulung belum tanggal walaupun waktu tanggalnya sudah tiba. Keadaan ini sering dijumpai pada anak usia 6-12 tahun. Persistensi gigi sulung tidak mempunyai penyebab tunggal tetapi merupakan gangguan yang disebabkan multifactor. Akar gigi sulung secara normal akan diresorbsi sempurna sehingga gigi sulung menjadi goyang dan akhirnya tanggal beberapa saat sebelum gigi permanen pengganti erupsi, akan tetapi sering dijumpai adanya kasus gigi persistensi disebabkan oleh berbagai faktor penyebab. ', 'Solusi untuk pengobatan pada pasien yang terkena penyakit persistensi adalah dilakukan pencabutan gigi.'),
(6, 'P6', 'Pulpitis', 'Pulpitis seringkali merupakan akibat atau perkembangan dari pulpitis reversibel. Kerusakan pulpa yang parah akibat pengambilan dentin yang luas selama prosedur operatif atau terganggunya aliran darah pulpa akibat trauma atau penggerakan gigi dalam perawatan ortodonsia dapat pula menyebabkan pulpitis ireversibel. Pulpitis ireversibel tidak akan bisa pulih walau penyebabnya dihilangkan. Cepat atau lambat pulpa akan menjadi nekrosis. ', 'Solusi pengobatan untuk pasien yang terkena penyakit Pulpitis ini adalah pemberian obat antibiotik, pemberian obat antinyeri, perawatan pada saluran akar, dilakukan penambalan gigi, dan solusi terakhir adalah pencabutan gigi.\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_relasi`
--

CREATE TABLE `tb_relasi` (
  `id` int(15) NOT NULL,
  `kd_diagnosa` varchar(20) NOT NULL,
  `kd_gejala` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_relasi`
--

INSERT INTO `tb_relasi` (`id`, `kd_diagnosa`, `kd_gejala`) VALUES
(14, 'P4', 'G3'),
(15, 'P4', 'G2'),
(16, 'P4', 'G1'),
(21, 'P2', 'G3'),
(26, 'P5', 'G12'),
(30, 'P3', 'G4'),
(31, 'P3', 'G6'),
(32, 'P3', 'G5'),
(55, 'P1', 'G4'),
(56, 'P1', 'G6'),
(57, 'P1', 'G7'),
(61, 'P6', 'G4'),
(64, 'P5', 'G11'),
(65, 'P5', 'G10'),
(66, 'P1', 'G8'),
(67, 'P1', 'G9'),
(68, 'P6', 'G6'),
(69, 'P6', 'G7');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
