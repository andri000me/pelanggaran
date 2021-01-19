-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 03:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pelanggaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pelanggaran`
--

CREATE TABLE `tb_detail_pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `id_jenis_pelanggaran` int(11) NOT NULL,
  `jml_point_pelanggaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_pelanggaran`
--

INSERT INTO `tb_detail_pelanggaran` (`id_pelanggaran`, `id_jenis_pelanggaran`, `jml_point_pelanggaran`) VALUES
(1, 1, 80),
(1, 3, 90),
(2, 5, 80);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_pelanggaran`
--

CREATE TABLE `tb_jenis_pelanggaran` (
  `id_jenis_pelanggaran` int(11) NOT NULL,
  `jenis_pelanggaran` varchar(200) NOT NULL,
  `bobot_nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenis_pelanggaran`
--

INSERT INTO `tb_jenis_pelanggaran` (`id_jenis_pelanggaran`, `jenis_pelanggaran`, `bobot_nilai`) VALUES
(1, 'Bermain bola di koridor dan di dalam kelas', 10),
(3, 'Tidak membawa buku sesuai jadwal', 10),
(4, 'Menghidupkan handphone waktu KBM', 20),
(5, 'Membuat kegaduhan di kelas atau di sekolah', 10),
(6, 'Membuat surat izin palsu', 20),
(7, 'Meloncat jendela dan pagar sekolah', 30),
(8, 'Merusak sarana dan prasarana sekolah ', 40),
(9, 'Bertindak tidak sopan/ melecehkan kepala sekolah, guru dan teman sekolah', 50),
(10, 'Mengancam / mengintimidasi teman sekelas/sekolah', 75),
(11, 'Mengancam / mengintimidasi kepala sekolah, guru dan staff sekolah', 100),
(12, 'Membawa / merokok saat masih menggunakan seragam sekolah.', 100),
(13, 'Menyalahgunakan media social yang merugikan pihak lain yang berhubungan dengan sekolah.', 100),
(14, 'Berjudi dalam bentuk apapun di sekolah.', 150),
(15, 'Membawa senjata tajam, senjata api dsb. Di sekolah.', 150),
(16, 'Terlibat perkelahian/tawuran di sekolah, di luar sekolah maupun antar sekolah.', 150),
(17, 'Membawa, menggunakan atau mengedarkan miras dan narkoba.', 250),
(18, 'Mencuri di sekolah dan di luar sekolah.', 200),
(19, 'Memalsukan stempel sekolah, edaran sekolah atau tanda tangan kepala sekolah, guru dan staf sekolah.', 250),
(20, 'Terlibat tindakan criminal / mencemarkan nama baik sekolah.', 250),
(21, 'Terbukti hamil atau menghamili', 250),
(22, 'Tidak mengikuti pelajaran tanpa izin.', 10),
(23, 'Meninggalkan kelas tanpa izin.', 10),
(24, 'Di kantin saat jam pelajaran.', 10),
(25, 'Tidak mengikuti dan melaksanakan piket. ', 10),
(26, 'Tidur di kelas saat jam pelajaran.', 10),
(27, 'Tidak membawa buku yang berkaitan dengan pelajaran.', 10),
(28, 'Pulang sebelum waktunya tanpa izin dari sekolah.', 20),
(29, 'Tidak masuk sekolah tanpa keterangan. ', 20),
(30, 'Tidak mengikuti upacara.', 20),
(31, 'Tidak mengikuti kegiatan sekolah.', 20),
(32, 'Tidak mengukuti kegiatan ekstrakurikuler.', 20),
(33, 'Tidak berseragam sesuai dengan ketentuan.', 10),
(34, 'Tidak memasukan baju.', 10),
(35, 'Melipat lengan baju, baju tidak dikancingkan.', 10),
(36, 'Seragam yang dicoret-coret.', 10),
(37, 'Tidak memakai kaos kaki.', 10),
(38, 'Memakai kaos kaki tidak sesuai ketentuan.', 10),
(39, 'Tidak memakai ikat pinggang.', 10),
(40, 'Seragam atribut tidak lengkap.', 10),
(41, 'Tidak memakai sepatu hitam (selain olah raga).', 10),
(42, 'Mengenakan celana ketat (celana pensil).', 10),
(43, 'Bertindik ', 10),
(44, 'Mewarnai rambut selain hitam.', 10),
(45, 'Mewarnai kuku.', 10),
(46, 'Memakai alat make up (kecuali bedak)', 10),
(47, 'Memakai jaket/sweater di dalam kelas tanpa izin guru kelas.', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggaran`
--

CREATE TABLE `tb_pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `total_p_pelanggaran` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `sanksi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelanggaran`
--

INSERT INTO `tb_pelanggaran` (`id_pelanggaran`, `nisn`, `total_p_pelanggaran`, `keterangan`, `sanksi`) VALUES
(1, '8887', 170, 'pelanggaran berat', 'skorsing'),
(2, '8887', 80, 'pelanggaran sedang', 'panggilan orang tua ke-2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nisn` varchar(20) NOT NULL,
  `nama_siswa` varchar(200) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_ayah` varchar(200) NOT NULL,
  `nama_ibu` varchar(200) NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nisn`, `nama_siswa`, `kelas`, `jk`, `alamat`, `tempat_lahir`, `tgl_lahir`, `nama_ayah`, `nama_ibu`, `no_telp`, `status`) VALUES
('1920001', 'Aditia Herlin', 'VII', '-Jenis Kelamin-', '-', '-', '2020-12-03', '-', '-', '-', 'aktif'),
('1920002', 'Andriyansyah', 'VII', '-Jenis Kelamin-', '-', '-', '2021-01-03', '-', '-', '-', 'aktif'),
('1920003', 'Ayu Lestari', 'VII', '-Jenis Kelamin-', '-', '-', '2021-01-06', '-', '-', '-', 'aktif'),
('1920004', 'Bahrul Ulum', 'VII', '-Jenis Kelamin-', '-', '-', '2021-01-04', '-', '-', '-', 'aktif'),
('1920005', 'Deffita Lestari', 'VII', '-Jenis Kelamin-', '-', '-', '2021-01-09', '-', '-', '-', 'aktif'),
('1920006', 'Devita', 'VII', '-Jenis Kelamin-', '-', '-', '2021-01-07', '-', '-', '-', 'aktif'),
('1920007', 'DwiNur Afriyansi', 'VII', '-Jenis Kelamin-', '-', '-', '2021-01-07', '-', '-', '-', 'aktif'),
('1920008', 'Esy Listiawatiy', 'VII', '-Jenis Kelamin-', '-', '-', '2021-01-08', '-', '-', '-', 'aktif'),
('1920009', 'Fahril ', 'VII', '-Jenis Kelamin-', '-', '-', '2021-01-01', '-', '-', '-', 'aktif'),
('1920010', 'Fikri Maulana', 'VII', '-Jenis Kelamin-', '-', '-', '2021-01-08', '-', '-', '-', 'aktif'),
('1920011', 'Handi Pratama', 'VII', '-Jenis Kelamin-', '-', '-', '2021-01-01', '-', '-', '-', 'aktif'),
('1920012', 'Indra Aktaviani', 'VII', '-Jenis Kelamin-', '-', '-', '2021-01-01', '-', '-', '-', 'aktif'),
('1920013', 'Iqbal Vilayani', 'VII', '-Jenis Kelamin-', '-', '-', '2021-01-01', '-', '-', '-', 'aktif'),
('1920014', 'Leni Febriyani', 'VII', 'perempuan', '-', '-', '2021-01-08', '-', '-', '-', 'aktif'),
('1920015', 'Lucky Alamsyah', 'VII', 'laki-laki', '-', '-', '2021-01-01', '-', '-', '0', 'aktif'),
('1920016', 'Masriyah', 'VII', 'perempuan', '-', '-', '2021-01-01', '-', '-', '0', 'aktif'),
('1920017', 'Mila Nasaroti', 'VII', 'perempuan', '-', '-', '2021-01-01', '-', '-', '0', 'aktif'),
('1920018', 'Misdian Ningsih', 'VII', 'perempuan', '-', '-', '2021-01-01', '-', '-', '0', 'aktif'),
('1920019', 'Misiabah Takdir A', 'VII', 'laki-laki', '-', '-', '2021-01-15', '-', '-', '0', 'aktif'),
('1920020', 'Muhamad Zaenulloh', 'VII', 'laki-laki', '-', '-', '2021-01-05', '-', '-', '0', 'aktif'),
('1920021', 'Munadi', 'VII', 'laki-laki', '-', '-', '2021-01-01', '-', '-', '0', 'aktif'),
('1920022', 'Mutawakil', 'VII', 'laki-laki', '-', '-', '2021-01-01', '-', '-', '0', 'aktif'),
('1920023', 'Nanang Sunandar', 'VII', 'laki-laki', '-', '-', '2021-01-07', '-', '-', '0', 'aktif'),
('1920024', 'Nila Noviyani', 'VII', 'perempuan', '-', '-', '2021-01-06', '-', '-', '0', 'aktif'),
('1920025', 'Nurholis Maryadi', 'VII', 'laki-laki', '-', '-', '2021-01-02', '-', '-', '0', 'aktif'),
('1920026', 'Nurul Aulia', 'VII', 'perempuan', '-', '-', '2021-01-07', '-', '-', '0', 'aktif'),
('1920027', 'Randi Aristiawan', 'VII', 'laki-laki', '-', '-', '2021-01-08', '-', '-', '0', 'aktif'),
('1920028', 'Rizki Ramadani', 'VII', 'laki-laki', '-', '-', '2021-01-08', '-', '-', '0', 'aktif'),
('1920029', 'Rohmatulloh', 'VII', 'laki-laki', '-', '-', '2021-01-01', '-', '-', '0', 'aktif'),
('1920030', 'Rohmi Maruani U', 'VII', 'perempuan', '-', '-', '2021-01-01', '-', '-', '0', 'aktif'),
('1920031', 'Roudatul Janah', 'VII', 'perempuan', '-', '-', '2021-01-01', '-', '-', '0', 'aktif'),
('1920032', 'Samiáh', 'VII', 'perempuan', '-', '-', '2021-01-01', '-', '-', '0', 'aktif'),
('1920033', 'Satrio Kusuma', 'VII', 'laki-laki', '-', '-', '2021-01-01', '-', '-', '0', 'aktif'),
('1920034', 'Siskah', 'VII', 'perempuan', '-', '-', '2021-01-01', '-', '-', '0', 'aktif'),
('1920035', 'Siti Serunih', 'VII', 'perempuan', '-', '-', '2021-01-01', '-', '-', '0', 'aktif'),
('1920036', 'Sri Milkiatun', 'VII', 'perempuan', '-', '-', '2021-01-01', '-', '-', '0', 'aktif'),
('1920037', 'Suharna', 'VII', 'perempuan', '-', '-', '2021-01-06', '-', '-', '0', 'aktif'),
('1920038', 'Sulhi', 'VII', 'laki-laki', '-', '-', '2021-01-01', '-', '-', '0', 'aktif'),
('1920039', 'Susiyani', 'VII', 'perempuan', '-', '-', '2021-01-01', '-', '-', '0', 'aktif'),
('1920040', 'Vani', 'VII', 'laki-laki', '-', '-', '2021-01-02', '-', '-', '0', 'aktif'),
('1920041', 'Wawan Nasihin', 'VII', 'laki-laki', '-', '-', '2021-01-01', '-', '-', '0', 'aktif'),
('1920042', 'Yusnita Auliya A', 'VII', 'perempuan', '-', '-', '2021-01-01', '--', '-', '0', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'diki', 'dikisaputra', 'diki saputra', 'admin'),
(7, 'wali', 'wali', 'wali murid', 'walimurid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jenis_pelanggaran`
--
ALTER TABLE `tb_jenis_pelanggaran`
  ADD PRIMARY KEY (`id_jenis_pelanggaran`);

--
-- Indexes for table `tb_pelanggaran`
--
ALTER TABLE `tb_pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jenis_pelanggaran`
--
ALTER TABLE `tb_jenis_pelanggaran`
  MODIFY `id_jenis_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tb_pelanggaran`
--
ALTER TABLE `tb_pelanggaran`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
