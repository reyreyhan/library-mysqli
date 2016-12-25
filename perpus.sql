-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2016 at 11:33 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `NO` int(10) NOT NULL,
  `NAMA` varchar(30) DEFAULT NULL,
  `KELAS` char(6) NOT NULL,
  `JURUSAN` varchar(30) DEFAULT NULL,
  `TGL` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`NO`, `NAMA`, `KELAS`, `JURUSAN`, `TGL`) VALUES
(163, 'JIAN IDRUS M', 'IX', 'Teknik Komputer & Jaringan', '2016-10-25'),
(164, 'ALVIN CAHYA P', 'IX', 'Teknik Komputer & Jaringan', '2016-10-25'),
(171, 'ACHMAD JAUHAR KHUSNI', 'IX', 'Teknik Komputer & Jaringan', '2016-10-27'),
(177, 'DWI WAHYUNINGSIH', 'XIV', 'Teknik Komputer & Jaringan', '2016-11-12'),
(179, 'HAFID TRILAKSONO', 'XIV', 'Teknik Komputer & Jaringan', '2016-11-12'),
(188, 'IVAN ARIES RIZALDY', 'X', 'Teknik Komputer & Jaringan-1', '2016-12-02'),
(189, 'IVAN ARIES RIZALDY', 'XIV', 'Teknik Komputer & Jaringan-2', '2016-12-02'),
(196, 'afwan', 'XIV', 'Teknik Komputer & Jaringan', '2016-12-20'),
(199, 'Ivan Aries Rizaldy', 'Alumni', 'Teknik Komputer & Jaringan', '2016-12-20'),
(202, 'serah dah', 'X', 'Teknik Komputer & Jaringan', '2016-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_USER` int(11) NOT NULL,
  `NAMA` varchar(40) NOT NULL,
  `USERNAME` varchar(15) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_USER`, `NAMA`, `USERNAME`, `PASSWORD`) VALUES
(1, 'Ivan Aries R', 'admin', '9b11e157aca39db2cc7a76f26a5ffad4'),
(2, 'Admin Perpus', 'adminpp', '328b37116fe640bb10af6cf14f26f5ff');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `NO` int(5) NOT NULL,
  `NIS` bigint(10) NOT NULL,
  `NAMA` varchar(35) NOT NULL,
  `JK` char(1) NOT NULL,
  `KELAS` char(5) NOT NULL,
  `JURUSAN` varchar(35) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  `HP` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`NO`, `NIS`, `NAMA`, `JK`, `KELAS`, `JURUSAN`, `ALAMAT`, `HP`) VALUES
(1, 1000000000, 'RATNA DWI SAFITRI', 'P', 'XII', 'KKB', 'GLEMORE BANYUWANGI', '81234567891'),
(2, 1000000001, 'MUHAMMAD FADIL', 'L', 'XII', 'KKB', 'JENGGAWAH-JEMBER', '81234567892'),
(3, 1000000002, 'TAUFIQ HIDAYATULLAH', 'L', 'XII', 'TKJ', 'GUMUKMAS-JEMBER', '81234567893'),
(4, 1000000003, 'SHOLEH MAULANA H.', 'L', 'XII', 'TKJ', 'TANGGUL-JEMBER', '81234567894'),
(5, 1000000004, 'FATIMATUS SHAMIKHA', 'P', 'XII', 'MO', 'TANGGUL-JEMBER', '81234567895'),
(6, 1000000005, 'SITI ZULUL SAFITRI', 'P', 'XII', 'MO', 'TANGGUL-JEMBER', '81234567896'),
(7, 1000000006, 'MUHAMMAD ADAM MAULIDI', 'L', 'XII', 'TPTU', 'SILO JEMBER', '81234567897'),
(8, 1000000007, 'HAMINUDIN', 'L', 'XII', 'TPTU', 'JENGGAWAH-JEMBER', '81234567898'),
(9, 1000000008, 'HAFIDHATUN NAFIROH', 'P', 'XII', 'TIPK', 'KENCONG JEMBER', '81234567899'),
(10, 1000000009, 'ZIYYAN ATIQOTUL MAULA', 'P', 'XII', 'TKJ', 'BANGSAL SARI JEMBER', '81234567900'),
(11, 1000000010, 'MUHAMMAD BAIHAQI', 'L', 'XII', 'GRBK', 'RAMBIPUJI JEMBER', '81234567901'),
(12, 1000000011, 'LINDA AZIZAH', 'P', 'XII', 'GRBK', 'SUKORAMBI JEMBER', '81234567902'),
(13, 1000000012, 'RIZAL FATHONI ABDILLAH', 'L', 'XI', 'TIPK', 'PUGER JEMBER', '81234567903'),
(14, 1000000013, 'MALTUFAH', 'P', 'XI', 'MO', 'WULUHAN JEMBER', '81234567904'),
(15, 1000000014, 'SITI NURUL FITRIANI KHOIRUNISA''', 'P', 'XI', 'TKJ', 'MUMBUL SARI JEMBER', '81234567905'),
(16, 1000000015, 'MAULANA HABIBI', 'L', 'XI', 'IK', 'MUMBUL SARI JEMBER', '81234567906'),
(17, 1000000016, 'IKA ZAINANI', 'P', 'XI', 'MO', 'PATRANG JEMBER', '81234567907'),
(18, 1000000017, 'RUFAIDAH KONITA', 'P', 'XI', 'GRBK', 'TANGGUL JEMBER', '81234567908'),
(19, 1000000018, 'MOHAMMAD ARIL MASHUDI', 'L', 'XI', 'TPK', 'SONGGON BANYUWANGI', '81234567909'),
(20, 1000000019, 'ISMAIL MALIK MAULANA', 'L', 'XI', 'TPK', 'SUKOWONO JEMBER', '81234567910'),
(21, 1000000020, 'RISA YAS''A NURUHUM', 'P', 'XI', 'IK', 'GLEMORE BANYUWANGI', '81234567911'),
(22, 1000000021, 'AIFINA RIZKI HASANAH', 'P', 'X', 'IK', 'PATRANG JEMBER', '81234567912'),
(23, 1000000022, 'RATNA DWI SAFITRI', 'P', 'X', 'TKJ', 'SUMBERASIH-PROBOLINGGO', '81234567913'),
(27, 6545480071, 'Ivan Aries Rizaldy', 'L', 'XIV', 'Teknik Komputer & Jaringan-2', 'Jiken, Tulangan, Sidoarjo', '089503352015');

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `NO` int(5) NOT NULL,
  `JUDUL` varchar(60) NOT NULL,
  `SINOPSIS` text NOT NULL,
  `PENGARANG` varchar(40) NOT NULL,
  `PENERBIT` varchar(40) NOT NULL,
  `TAHUN` int(4) NOT NULL,
  `KATEGORI` char(12) NOT NULL,
  `CODE` varchar(10) NOT NULL,
  `STATUS` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`NO`, `JUDUL`, `SINOPSIS`, `PENGARANG`, `PENERBIT`, `TAHUN`, `KATEGORI`, `CODE`, `STATUS`) VALUES
(7, '12 Wanita Pejuang Bersama Rasulullah', 'Buku ini mencoba mengungkapkan bukti-bukti tekstual dari Alquran dan hadis Nabi saw., tentang keluhuran, keistimewaan, dan perjuangan para wanita yang berjuang bersama Rasulullah saw. Banyak relung-relung yang terlewat dari bidikan pemahaman kita coba dijelaskan oleh Abdul Aziz Asy-Syinnawi sehingga semakin melengkapi pengetahuan kita akan para wanita yang berjuang bersama Rasulullah saw. ', 'Abdul aziz asy-Syilnawi', 'Amzah', 2010, 'Agama', 'AG.007', ''),
(8, 'Hak-hak Asasi Manusia Dalam Islam', 'Lorem ipsum sit dolor amet', 'Mawlana Abul A''la Mawdudi', 'Bumi Aksara', 2008, 'Agama', 'AG.008', ''),
(9, '40 Pesan Dari Rasulullah', 'Buku ini merupakan penjelasan dari penulis kitab hadits Arbain. Buku tersebut merupakan karya Imam Nawawi yang pada awalnya hanya 26 hadits yang didiktekan oleh Ibnu Salah dalam majelisnya.\r\n\r\nBuku ini dikemas secara singkat dan padat tetapi tetap tidak mengurangi makna dan tetap enak untuk di baca. Dan juga penjabaran buku ini di sarikan dari Imam Nawawi, Ibnu Daqiq Al-Id, dan Syaikh Muhammad bin Utsaimin.', 'Tasirun Sulaiman', 'Erlangga', 2009, 'Agama', 'AG.009', 'Terpinjam'),
(11, 'Aqidah Islam Dalam Konteks Ilmiah Populer', 'Lorem ipsum sit dolor amet', 'Kusnadi', 'Amzah', 2010, 'Agama', 'AG.011', ''),
(13, 'Perlindungan Aset Politik Dalam Perspektif Hukum Islam', 'Lorem ipsum sit dolor amet', 'Husain Syahatan', 'Amzah', 2010, 'Agama', 'AG.013', ''),
(14, 'Puasa Dan I''tikaf Dalam Islam', 'Lorem ipsum sit dolor amet', 'Hasan Muhammad ayub', 'Amzah', 2010, 'Agama', 'AG.014', ''),
(15, 'Petunjuk Merawat Jenazah Dan Shalat Jenazah', 'Lorem ipsum sit dolor amet', ' Abdul Karim', 'Amzah', 2010, 'Agama', 'AG.015', ''),
(16, 'Suap Dan Korupsi Dalam Prspektif Syariah', 'Lorem ipsum sit dolor amet', 'Husain Syahatan', 'Amzah', 2010, 'Agama', 'AG.016', ''),
(17, 'Seri Pahlawan Nasional :  Mohammad Hatta', 'Lorem ipsum sit dolor amet', 'Saleh', 'Citra Pranaya', 2009, 'Biografi', 'BG.001', ''),
(18, 'Biografi Presiden Soekarno', 'Lorem ipsum sit dolor amet', 'Andrei Aksana', 'Gramedia Pustaka Utama', 2009, 'Ensiklopedi', 'BG.002', ''),
(19, 'Dari Pemberontak menjadi Pahlawan Nasional : M.Natsir', 'Lorem ipsum sit dolor amet', 'Waluyo', 'Ombak', 2009, 'Biografi', 'BG.003', ''),
(20, 'Candi-candi Di Nusantara', 'Lorem ipsum sit dolor amet', 'Lea Lina', 'Pt. Perca Group', 2010, 'Biografi', 'BG.004', ''),
(21, 'Mengenal Aneka Museum Nusantara', 'Lorem ipsum sit dolor amet', 'Aep Saepulloh', 'Pt. Perca Group', 2010, 'Biografi', 'BG.005', ''),
(22, 'Sejarah 3 IPS Kelas 12 SMA', 'Lorem ipsum sit dolor amet', 'Habib Mustopo, DKK', 'Yudhistira', 2010, 'Biografi', 'BG.006', ''),
(23, 'Membedah Tokoh sejarah: Hidup atau Mati', 'Lorem ipsum sit dolor amet', 'Asvi Warman Adam', 'Ombak', 2009, 'Biografi', 'BG.007', ''),
(24, 'Tragedi Sukarno : dari kudeta sampai kematiannya', 'Lorem ipsum sit dolor amet', 'Reny Nuryanti', 'Ombak', 2008, 'Biografi', 'BG.008', ''),
(25, 'Obama: in his own words: ucapan dan pikiran barrack obama', 'Lorem ipsum sit dolor amet', 'Lisa Rogak', 'Gramedia Pustaka Utama', 2009, 'Biografi', 'BG.009', ''),
(26, 'Apakah Mereka Mata-mata: orang-orang jepang di Indonesia ', 'Orang Jepang diperkirakan sudah melakukan interaksi dengan daerah Selatan (termasuk Indonesia) sejak lama. Namun hubungan tersebut terputus sejak Jepang melakukan politik isolasi tahun 1633. Sejak itu, Pemerintah Jepang melarang pelayaran kapal-kapal dagang ke luar negeri. Dan sebaliknya orang-orang yang sudah terlanjur berada di luar negeri dilarang untuk kembali.', 'Meta Sekar Puji Astuti', 'Ombak', 2008, 'Biografi', 'BG.010', 'Terpinjam'),
(29, 'Michael Jackson: The King Of Pop', 'Lorem ipsum sit dolor amet', 'Gozzie Pranaja', 'Ombak', 2009, 'Biografi', 'BG.013', ''),
(30, 'Muhammad Yamin & Cita-cita Persatuan Bangsa', 'Lorem ipsum sit dolor amet', 'Restu Qunanan', 'Ombak', 2005, 'Biografi', 'BG.014', ''),
(31, 'Orang-orang Besar Bengkulu', 'Lorem ipsum sit dolor amet', 'agus Setianto', 'Ombak', 2006, 'Biografi', 'BG.015', ''),
(32, 'Cerdas Olimpiade Matematika', 'Lorem ipsum sit dolor amet', 'Janu Ismadi', 'Pt. Perca Group', 2010, 'Matematika', 'MM.001', ''),
(33, 'Asiknya Mengali Dan Membagi', 'Lorem ipsum sit dolor amet', 'Janu Ismadi', 'Pt. Perca Group', 2009, 'Matematika', 'MM.002', ''),
(34, 'Asiknya Menjumlah Dan Mengurang', 'Lorem ipsum sit dolor amet', 'Janu Ismadi', 'Pt. Perca Group', 2010, 'Matematika', 'MM.003', ''),
(35, 'Asiknya Mengukur Waktu Dan Kecepatan', 'Lorem ipsum sit dolor amet', 'Janu Ismadi', 'Pt. Perca Group', 2009, 'Matematika', 'MM.004', ''),
(36, 'Kumpulan Rumus Matematika SMA', 'Lorem ipsum sit dolor amet', 'Sri Lestari, St', 'Kawan Pustaka', 2009, 'Matematika', 'MM.005', ''),
(37, 'Number Sense - Belajar Matematika', 'Lorem ipsum sit dolor amet', 'Andri Saleh', 'Trans Media', 2009, 'Matematika', 'MM.006', ''),
(38, 'Cepat Menyelesaikan Soal Matematika SMA', 'Lorem ipsum sit dolor amet', 'Supardi', 'Kawan Pustaka', 2009, 'Matematika', 'MM.007', ''),
(39, 'Jurus Jagoan Matematika', 'Lorem ipsum sit dolor amet', 'Janu Ismadi', 'Pt. Perca Group', 2010, 'Matematika', 'MM.008', ''),
(40, 'Matematika Dalam Perhitungan Kalender ', 'Lorem ipsum sit dolor amet', 'Janu Ismadi', 'Pt. Perca Group', 2009, 'Matematika', 'MM.009', ''),
(41, 'Kamus bayi dan balita', 'Lorem ipsum sit dolor amet', 'Jane Chumbley', 'Erlangga', 2009, 'Kamus', 'KM.001', ''),
(42, 'Kamus Swedia - Indonesia ', 'Lorem ipsum sit dolor amet', 'Andre Moller ', 'Gramedia Pustaka Utama', 2005, 'Kamus', 'KM.002', ''),
(43, 'Kamus  pintar fotografi', 'Lorem ipsum sit dolor amet', 'Atok Sigarto', 'Erlangga', 2009, 'Kamus', 'KM.003', ''),
(44, 'Kamus Inggris-Indonesia', 'Lorem ipsum sit dolor amet', 'Hasan Shadilly', 'Gramedia Pustaka Utama', 1988, 'Kamus', 'KM.004', ''),
(45, 'Pablo belajar bahasa Inggris', 'Lorem ipsum sit dolor amet', 'Sue Finnie', 'Erlangga', 2008, 'Kamus', 'KM.005', ''),
(46, 'Kamus Batak-Indonesia', 'Lorem ipsum sit dolor amet', 'JP. Sarumpeat', 'Erlangga', 1994, 'Kamus', 'KM.006', ''),
(47, 'Kamus  kimia', 'Lorem ipsum sit dolor amet', 'Mulyono H', 'Buku Aksara', 2008, 'Kamus', 'KM.007', ''),
(48, 'Kamus Jerman-Indonesia', 'Lorem ipsum sit dolor amet', 'Actives Br Yayasan', 'Erlangga', 1987, 'Kamus', 'KM.008', ''),
(49, 'Kamus   sosiologi kependudukan', 'Lorem ipsum sit dolor amet', 'G. Kartasaputra ', 'Buku Aksara', 2007, 'Kamus', 'KM.009', ''),
(50, 'Kamus Yunior Bergambar Oxford - HC', 'Lorem ipsum sit dolor amet', 'Rosemary S', 'Erlangga ', 2009, 'Kamus', 'KM.010', ''),
(52, 'Kamus Indonesia-Perancis', 'Lorem ipsum sit dolor amet', 'Pierre Labrousse', 'Gramedia Pustaka Utama', 2010, 'Kamus', 'KM.012', ''),
(53, 'Puzzle 3 bahasa Indonesia Inggris Mandarin', 'Lorem ipsum sit dolor amet', 'Tim EFK', 'Erlangga', 2010, 'Kamus', 'KM.013', ''),
(54, 'Gembira Bermain Dengan Biologi', 'Lorem ipsum sit dolor amet', 'Jenice Pratt Van Cleave', 'Pustaka Utama Grafiti', 2010, 'Biologi', 'BL.001', ''),
(55, 'Ekologi Laut Indonesia', 'Lorem ipsum sit dolor amet', 'Koes Irianto', 'Sarana Ilmu Pustaka', 2010, 'Biologi', 'BL.002', ''),
(56, 'Biologi SMA, Jil. 1B KTSP', 'Lorem ipsum sit dolor amet', 'Istamar Syamsuri', 'Erlangga', 2007, 'Biologi', 'BL.003', ''),
(57, 'Biologi SMA, Jil. 2A KTSP', 'Lorem ipsum sit dolor amet', 'Istamar Syamsuri', 'Erlangga', 2007, 'Biologi', 'BL.004', ''),
(58, 'Biologi SMA, Jil. 2B KTSP', 'Lorem ipsum sit dolor amet', 'Istamar Syamsuri', 'Erlangga', 2007, 'Biologi', 'BL.005', ''),
(59, 'Healthy Express Super Sehat Dalam 2 Minggu ', 'Lorem ipsum sit dolor amet', 'Edwin Lau ', 'Gramedia Pustaka Utama ', 2009, 'Umum', 'UM.001', ''),
(60, 'Hukum Perseroan Terbatas ', 'Lorem ipsum sit dolor amet', 'M.Yahya Harahap ', 'Sinar Grafika ', 2009, 'Umum', 'UM.002', ''),
(61, 'Indonesia Civil Code Burgerlijk Wetboek Voor Indonesia ', 'Lorem ipsum sit dolor amet', 'Rany Mangunsong, SH', 'Gramedia Pustaka Utama ', 2008, 'Umum', 'UM.003', ''),
(62, 'Contoh - Contoh Perjanjian Yang Banyak Dipergunakan Dalam ', 'Lorem ipsum sit dolor amet', 'R. Suroso, SH', 'Sinar Grafika ', 2009, 'Ensiklopedi', 'UM.004', ''),
(63, 'Face Art : Ilusi 1000 Wajah ', 'Lorem ipsum sit dolor amet', 'Yoyok Budiman ', 'Gramedia Pustaka Utama ', 2010, 'Umum', 'UM.005', ''),
(64, 'Memberantas Korupsi Bersama KPK', 'Lorem ipsum sit dolor amet', 'Emansyah Djaja ', 'Gramedia Pustaka Utama ', 2009, 'Umum', 'UM.006', ''),
(65, 'Pokok - Pokok Pengetahuan Hukum Dagang Indonesia ', 'Lorem ipsum sit dolor amet', 'C.S.I Kansil ', 'Sinar Grafika ', 2008, 'Umum', 'UM.007', ''),
(66, 'Hukum Kekayaan Hak Intelektual ', 'Lorem ipsum sit dolor amet', 'Ermansyah Djaja ', 'Sinar Grafika ', 2009, 'Umum', 'UM.008', ''),
(68, 'Hukum Kepailitan ', 'Lorem ipsum sit dolor amet', 'Sutan Ramy S', 'Pustaka Utama Grafiti ', 2010, 'Umum', 'UM.010', ''),
(71, 'Keajaiban Doa', 'Lorem ipsum sit dolor amet', 'Ivan', 'PJBS', 2005, 'Agama', 'AG.017', ''),
(74, 'Budidaya Ikan Cupang', 'Lorem ipsum sit dolor amet', 'Ivan', 'PJBS', 2015, 'Umum', 'UM.014', ''),
(78, 'Matematika SMK', 'Lorem ipsum sit dolor amet', 'Reyhan', 'PJBS', 2016, 'Matematika', 'MM.010', ''),
(100, 'Aplikasi Pendataan Perpustakaan Berbasis Web', 'Lorem ipsum sit dolor amet', 'Ivan Aries Rizaldy', 'SMK NEGERI 3 Buduran', 2016, 'Teknologi', 'APLTEKIS16', ''),
(101, 'Aplikasi Sistem Informasi Perpustakaan Berbasis WEB', 'Lorem ipsum sit dolor amet', 'Ivan Aries Rizaldy', 'PT PJB Services', 2016, 'Teknologi', 'APLTEKIP16', '');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `NO` int(4) NOT NULL,
  `JUDUL` varchar(60) NOT NULL,
  `KATEGORI` char(12) NOT NULL,
  `CODE` varchar(10) NOT NULL,
  `NIS` bigint(10) NOT NULL,
  `TGL` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `NO` int(4) NOT NULL,
  `NIS` bigint(10) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `JUDUL` varchar(60) NOT NULL,
  `KATEGORI` char(12) NOT NULL,
  `CODE` varchar(10) NOT NULL,
  `TGLB` date NOT NULL,
  `DENDA` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`NO`, `NIS`, `NAMA`, `JUDUL`, `KATEGORI`, `CODE`, `TGLB`, `DENDA`) VALUES
(31, 1000000017, 'RUFAIDAH KONITA', 'Hak-hak Asasi Manusia Dalam Islam', 'Agama', 'AG.008', '2016-12-05', 0),
(32, 6545480071, 'Ivan Aries Rizaldy', 'Apakah Mereka Mata-mata: orang-orang jepang di Indonsia ', 'Biografi', 'BG.010', '2016-12-05', 0),
(33, 6545480071, 'Ivan Aries Rizaldy', 'Hak-hak Asasi Manusia Dalam Islam', 'Agama', 'AG.008', '2016-12-05', 0),
(34, 6545480071, 'Ivan Aries Rizaldy', 'Contoh - Contoh Perjanjian Yang Banyak Dipergunakan Dalam ', 'Ensiklopedi', 'UM.004', '2016-12-06', 0),
(35, 1000000017, 'RUFAIDAH KONITA', '40 Pesan Dari Rasulullah', 'Agama', 'AG.009', '2016-12-07', 0),
(36, 6545480071, 'Ivan Aries Rizaldy', 'Aqidah Islam Dalam Konteks Ilmiah Populer', 'Agama', 'AG.011', '2016-12-07', 0),
(37, 6545480071, 'Ivan Aries Rizaldy', 'Cepat Menyelesaikan Soal Matematika SMA', 'Matematika', 'MM.007', '2016-12-07', 0),
(38, 6545480071, 'Ivan Aries Rizaldy', 'Asiknya Menjumlah Dan Mengurang', 'Matematika', 'MM.003', '2016-12-07', 2500),
(39, 6545480071, 'Ivan Aries Rizaldy', 'Asiknya Mengukur Waktu Dan Kecepatan', 'Matematika', 'MM.004', '2016-12-07', 2000),
(40, 1000000017, 'RUFAIDAH KONITA', '12 Wanita Pejuang Bersama Rasulullah', 'Agama', 'AG.007', '2016-12-08', 0),
(41, 6545480071, 'Ivan Aries Rizaldy', 'Aplikasi Pendataan Perpustakaan Berbasis Web', 'Teknologi', 'APLTEKIS16', '2016-12-08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `NO` int(4) NOT NULL,
  `JUDUL` varchar(60) NOT NULL,
  `KATEGORI` char(12) NOT NULL,
  `CODE` varchar(10) NOT NULL,
  `NIS` bigint(10) NOT NULL,
  `TGL` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`NO`, `JUDUL`, `KATEGORI`, `CODE`, `NIS`, `TGL`) VALUES
(4, '40 Pesan Dari Rasulullah', 'Agama', 'AG.009', 1000000022, '2016-12-07'),
(6, 'Apakah Mereka Mata-mata: orang-orang jepang di Indonsia ', 'Biografi', 'BG.010', 6545480071, '2016-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `NO` int(5) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `KOM` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`NO`, `NAMA`, `EMAIL`, `KOM`) VALUES
(21, 'Ivan Aries Rizaldy', 'ivanariesrizaldy@gmail.com', 'Webnya lumayan bagus, tapi perlu ditingkatkan lagi untuk pelayanannya. terima kasih'),
(43, 'Ivan Aries Rizaldy', 'ivanariesrizaldy@gmail.com', 'testing komentar ke admin perpustakaan.'),
(46, 'Ivan Aries Rizaldy', 'ivanariesrizaldy@gmail.com', 'alert improvement'),
(49, 'Ivan Aries Rizaldy', 'wowwo@acs.com', 'mungkin beberapa fitur harus diperbaiki.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_USER`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`NO`),
  ADD UNIQUE KEY `NIS` (`NIS`);

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`NO`),
  ADD UNIQUE KEY `CODE` (`CODE`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`NO`),
  ADD UNIQUE KEY `CODE` (`CODE`,`NIS`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`NO`),
  ADD UNIQUE KEY `CODE` (`CODE`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `NO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `NO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `NO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `NO` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `NO` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `NO` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `NO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
