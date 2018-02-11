-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Jun 2017 pada 06.35
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hepatitis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gabungan`
--

CREATE TABLE IF NOT EXISTS `tb_gabungan` (
  `id_gabungan` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenispenyakit` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `nilai_mb` double NOT NULL,
  `nilai_md` double NOT NULL,
  `nilai_cf` double NOT NULL,
  PRIMARY KEY (`id_gabungan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data untuk tabel `tb_gabungan`
--

INSERT INTO `tb_gabungan` (`id_gabungan`, `id_jenispenyakit`, `id_gejala`, `nilai_mb`, `nilai_md`, `nilai_cf`) VALUES
(1, 1, 1, 1, 0.15, 0.85),
(2, 1, 2, 0.8, 0.1, 0.7),
(3, 1, 3, 0.8, 0.1, 0.7),
(4, 1, 4, 0.9, 0.13, 0.77),
(5, 1, 5, 0.8, 0.12, 0.68),
(6, 1, 6, 0.6, 0.06, 0.54),
(7, 1, 7, 1, 0.15, 0.85),
(8, 1, 8, 0.4, 0.05, 0.35),
(9, 1, 9, 1, 0.15, 0.85),
(10, 1, 10, 1, 0.15, 0.85),
(11, 1, 11, 1, 0.15, 0.85),
(12, 1, 12, 1, 0.15, 0.85),
(13, 1, 13, 0.4, 0.05, 0.35),
(14, 1, 14, 0.4, 0.05, 0.35),
(15, 1, 15, 0.4, 0.05, 0.35),
(16, 1, 16, 0.4, 0.05, 0.35),
(17, 1, 17, 0.2, 0.01, 0.19),
(18, 1, 18, 0.4, 0.05, 0.35),
(19, 1, 19, 0.2, 0.01, 0.19),
(20, 1, 20, 0.2, 0.01, 0.19),
(21, 2, 1, 0.2, 0.01, 0.19),
(22, 2, 2, 0.2, 0.01, 0.19),
(23, 2, 3, 0.2, 0.01, 0.19),
(24, 2, 4, 0.2, 0.01, 0.19),
(25, 2, 5, 0.2, 0.01, 0.19),
(26, 2, 6, 0.2, 0.01, 0.19),
(27, 2, 7, 0.2, 0.01, 0.19),
(28, 2, 8, 0.2, 0.01, 0.19),
(29, 2, 9, 0.2, 0.01, 0.19),
(30, 2, 10, 0.2, 0.01, 0.19),
(31, 2, 11, 0.2, 0.01, 0.19),
(32, 2, 12, 0.2, 0.01, 0.19),
(33, 2, 13, 0.2, 0.01, 0.19),
(34, 2, 14, 0.2, 0.01, 0.19),
(35, 2, 15, 0.2, 0.01, 0.19),
(36, 2, 16, 0.2, 0.01, 0.19),
(37, 2, 17, 0.2, 0.01, 0.19),
(38, 2, 18, 1, 0.15, 0.85),
(39, 2, 19, 1, 0.15, 0.85),
(40, 2, 20, 1, 0.15, 0.85),
(42, 2, 28, 0.8, 0.15, 0.65),
(43, 1, 21, 0.6, 0.11, 0.49);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala`
--

CREATE TABLE IF NOT EXISTS `tb_gejala` (
  `id_gejala` int(11) NOT NULL AUTO_INCREMENT,
  `gejala` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_gejala`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `tb_gejala`
--

INSERT INTO `tb_gejala` (`id_gejala`, `gejala`) VALUES
(1, 'Merasa mual dan ingin muntah'),
(2, 'Nafsu makan berkurang'),
(3, 'Merasakan sakit perut, terutama sebelah sebelah kanan atas'),
(4, 'Merasa sering lemah '),
(5, 'Mengalami demam'),
(6, 'Mengalami sakit kepala'),
(7, 'Berat badan menurun'),
(8, 'Mengalami diare dan feses berwarna gelap'),
(9, 'Air seni berwarna gelap'),
(10, 'Kulit berwarna kuning'),
(11, 'Mata berwarna kuning\r\n'),
(12, 'Merasakan nyeri otot dan sendi\r\n'),
(13, 'Merasa sulit berkonsentrasi atau sulit mengingat sesuatu\r\n'),
(14, 'Merasakan suasana hati yang berubah-ubah\r\n'),
(15, 'Merasakan depresi\r\n'),
(16, 'Merasakan gatal pada kulit\r\n'),
(17, 'Sebelumnya memakan makanan yang mentah (tidak dimasak)\r\n'),
(18, 'Sebelumnya melakukan transfusi darah (donor darah)\r\n'),
(19, 'Sebelumnya melakukan hubungan seksual, khususnya dengan seseorang yang pernah mengalami Hepatitis\r\n'),
(20, 'Sebelumnya pernah mengidap penyakit Hepatitis B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenispenyakit`
--

CREATE TABLE IF NOT EXISTS `tb_jenispenyakit` (
  `id_jenispenyakit` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_penyakit` varchar(100) NOT NULL,
  `solusi` text NOT NULL,
  `tindakan` text NOT NULL,
  `pencegahan` text NOT NULL,
  PRIMARY KEY (`id_jenispenyakit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tb_jenispenyakit`
--

INSERT INTO `tb_jenispenyakit` (`id_jenispenyakit`, `jenis_penyakit`, `solusi`, `tindakan`, `pencegahan`) VALUES
(1, 'Hepatitis A', '- Banyak beristirahat- Pembatasan aktivitas (tidak boleh olahraga dan mengangkat beban yang berlebihan)- Hindari makanan berlemak (tergantung gejala yang diderita pasien seperti mual dan muntah)- Tidak mengkonsumsi minuman keras dan alkohol- Tidak bergantian menggunakan peralatan makan yang sama- Menggunakan kamar mandi tersendiri akan lebih baik- Segera periksakan diri lebih lanjut dengan dokter', '- Banyak beristirahat- Pembatasan aktivitas (tidak boleh olahraga dan mengangkat beban yang berlebihan)- Hindari makanan berlemak (tergantung gejala yang diderita pasien seperti mual dan muntah)- Tidak mengkonsumsi minuman keras dan alkohol- Tidak bergantian menggunakan peralatan makan yang sama- Menggunakan kamar mandi tersendiri akan lebih baik- Segera periksakan diri lebih lanjut dengan dokter', '- Banyak beristirahat- Pembatasan aktivitas (tidak boleh olahraga dan mengangkat beban yang berlebihan)- Hindari makanan berlemak (tergantung gejala yang diderita pasien seperti mual dan muntah)- Tidak mengkonsumsi minuman keras dan alkohol- Tidak bergantian menggunakan peralatan makan yang sama- Menggunakan kamar mandi tersendiri akan lebih baik- Segera periksakan diri lebih lanjut dengan dokter'),
(2, 'Hepatitis non A', '- Pembatasan aktivitas (tidak boleh olahraga dan mengangkat beban yang berlebihan)\r\n- Tidak bergantian menggunakan peralatan makan yang sama\r\n- Segera periksakan diri lebih lanjut dengan dokter', '- Dokter akan melakukan tes darah\r\n- Dokter memberikan terapi imodulator untuk hati\r\n- Dokter memberikan obat - obatan simtomatis\r\n- Dokter menganjurkan untuk diet tinggi kalori, diet tinggi protein dan diet rendah lemak\r\n- Untuk gejala dengan tingkat yang parah, akan dianjurkan untuk menjalani perawatan di Rumah Sakit', '- Melakukan pemeriksaan HBsAg sebelum transfusi darah dan tidak menggunakan darah yang HBsAg positif\r\n- Melakukan sterilisasi virusidal untuk semua alat yang akan dipakai (pemakaian alat sekali pakai), contohnya alat suntik, alat operasi, dan alat kedokteran gigi\r\n- Imunisasi pasif dengan menyuntikkan anti-HBs maupun imunisasi aktif (HB Imunoglobulin)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`) VALUES
(1, 'pakar', '67890');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
