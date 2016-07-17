-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.49-0ubuntu0.14.04.1 - (Ubuntu)
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             9.3.0.5104
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for simapan
DROP DATABASE IF EXISTS `simapan`;
CREATE DATABASE IF NOT EXISTS `simapan` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `simapan`;

-- Dumping structure for table simapan.disposisi
DROP TABLE IF EXISTS `disposisi`;
CREATE TABLE IF NOT EXISTS `disposisi` (
  `id_disposisi` int(11) NOT NULL AUTO_INCREMENT,
  `id_surat_masuk` int(30) NOT NULL,
  `isi_instruksi` text NOT NULL,
  `tgl_instruksi` date NOT NULL,
  `batas_waktu` date NOT NULL,
  `waktu_lama_instruksi` int(5) NOT NULL,
  `paraf_kasi` varchar(100) NOT NULL,
  `paraf_kajari` varchar(100) NOT NULL,
  `tujuan_disposisi` varchar(50) NOT NULL,
  `tgl_disposisi` date NOT NULL,
  `catatan` varchar(300) NOT NULL,
  `lampiran_foto` varchar(300) NOT NULL,
  `lampiran_dokumen` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_disposisi`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table simapan.disposisi: ~2 rows (approximately)
/*!40000 ALTER TABLE `disposisi` DISABLE KEYS */;
REPLACE INTO `disposisi` (`id_disposisi`, `id_surat_masuk`, `isi_instruksi`, `tgl_instruksi`, `batas_waktu`, `waktu_lama_instruksi`, `paraf_kasi`, `paraf_kajari`, `tujuan_disposisi`, `tgl_disposisi`, `catatan`, `lampiran_foto`, `lampiran_dokumen`) VALUES
	(1, 2, '3', '2016-07-09', '2016-07-06', 3, '1', '1', '1', '2016-07-09', '', 'git.ppt', 'java_lect_21.pdf'),
	(4, 3, '3', '2016-07-09', '2016-07-09', 0, '1', '1', '5', '2016-07-09', '', 'git1.ppt', 'java_lect_211.pdf');
/*!40000 ALTER TABLE `disposisi` ENABLE KEYS */;

-- Dumping structure for table simapan.level
DROP TABLE IF EXISTS `level`;
CREATE TABLE IF NOT EXISTS `level` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(100) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table simapan.level: ~4 rows (approximately)
/*!40000 ALTER TABLE `level` DISABLE KEYS */;
REPLACE INTO `level` (`id_level`, `level`) VALUES
	(1, 'Super Admin'),
	(2, 'Bagian Administrasi'),
	(3, 'Seklur'),
	(4, 'Kasi');
/*!40000 ALTER TABLE `level` ENABLE KEYS */;

-- Dumping structure for table simapan.pelaksanaan_intruksi
DROP TABLE IF EXISTS `pelaksanaan_intruksi`;
CREATE TABLE IF NOT EXISTS `pelaksanaan_intruksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_intruksi` varchar(50) DEFAULT NULL,
  `intruksi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table simapan.pelaksanaan_intruksi: ~7 rows (approximately)
/*!40000 ALTER TABLE `pelaksanaan_intruksi` DISABLE KEYS */;
REPLACE INTO `pelaksanaan_intruksi` (`id`, `kode_intruksi`, `intruksi`) VALUES
	(1, '1', 'UDK'),
	(2, '1', 'Saya Hadir'),
	(3, '2', 'Hadiri'),
	(4, '2', 'Penuhi'),
	(5, '2', 'Edaran / Pemberitahuan'),
	(6, '2', 'Undangan'),
	(7, '2', 'Lain-lain');
/*!40000 ALTER TABLE `pelaksanaan_intruksi` ENABLE KEYS */;

-- Dumping structure for table simapan.pengguna
DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `id_level` int(10) NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table simapan.pengguna: ~5 rows (approximately)
/*!40000 ALTER TABLE `pengguna` DISABLE KEYS */;
REPLACE INTO `pengguna` (`id_pengguna`, `username`, `password`, `nama`, `nip`, `jabatan`, `id_level`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Riza Fauzi Rahman', '123456789123456', 'Administrator', 1),
	(2, 'ratih', 'a5bd72a3d2c4d1686415f93a46fc7a0a', 'Ratih Pujihati', '123456789', 'Adminsitrator', 1),
	(3, 'seklur', 'faca25fa364201d24b323a91a6f6b463', 'Seklur', '123456789123456', 'Seklur', 3),
	(4, 'kasipem', 'ec326e3752a6419e328ae0c2e910e1c0', 'Kasi Pem', '123456789', 'Kasi Pem', 4),
	(6, 'staf', '7b8a17c3f48d4453fde0fd74b4fa9212', 'Staf', '123456789123456', 'Staf', 2);
/*!40000 ALTER TABLE `pengguna` ENABLE KEYS */;

-- Dumping structure for table simapan.pengirim
DROP TABLE IF EXISTS `pengirim`;
CREATE TABLE IF NOT EXISTS `pengirim` (
  `id_pengirim` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `instansi` text,
  PRIMARY KEY (`id_pengirim`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

-- Dumping data for table simapan.pengirim: ~39 rows (approximately)
/*!40000 ALTER TABLE `pengirim` DISABLE KEYS */;
REPLACE INTO `pengirim` (`id_pengirim`, `instansi`) VALUES
	(1, 'WALIKOTA CIMAHI'),
	(2, 'WAKIL WALIKOTA CIMAHI'),
	(3, 'SEKRETARIS DAERAH KOTA CIMAHI'),
	(4, 'ASISTEN PEMERINTAHAN SETDA KOTA CIMAHI'),
	(5, 'ASISTEN PEREKONOMIAN DAN PEMBANGUNAN SETDA KOTA CIMAHI'),
	(6, 'ASISTEN ADMINISTRASI UMUM SETDA KOTA CIMAHI'),
	(7, 'DPRD KOTA CIMAHI'),
	(8, 'SEKRETARIAT DPRD KOTA CIMAHI'),
	(9, 'DINAS KESEHATAN'),
	(10, 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL'),
	(11, 'DINAS TENAGA KERJA, TRANSMIGRASI DAN SOSIAL'),
	(12, 'DINAS PERHUBUNGAN'),
	(13, 'DINAS PENDIDIKAN, PEMUDA DAN OLAH RAGA'),
	(14, 'DINAS KOPERASI, UMKM, PERINDUSTRIAN, PERDAGANGAN DAN PERTANIAN'),
	(15, 'DINAS PENDAPATAN'),
	(16, 'DINAS PEKERJAAN UMUM'),
	(17, 'DINAS KEBERSIHAN DAN PERTAMANAN'),
	(18, 'BAPPEDA'),
	(19, 'BKD'),
	(20, 'BPMPPKB'),
	(21, 'BPMPTSP'),
	(22, 'BPKAD'),
	(23, 'BPBD'),
	(24, 'INSPEKTORAT'),
	(25, 'KANTOR LINGKUNGAN HIDUP'),
	(26, 'KANTOR KESBANG'),
	(27, 'KAPPDE'),
	(28, 'SATPOL PP'),
	(29, 'BAGIAN PEMERINTAHAN SETDA KOTA CIMAHI'),
	(30, 'BAGIAN HUKUM SETDA KOTA CIMAHI'),
	(31, 'BAGIAN ORGANISASI SETDA KOTA CIMAHI'),
	(32, 'BAGIAN ADMINISTRASI PEREKONOMIAN SETDA KOTA CIMAHI'),
	(33, 'BAGIAN ADMINISTRASI PEMBANGUNAN SETDA KOTA CIMAHI'),
	(34, 'BAGIAN ADMINISTRASI KESRA SETDA KOTA CIMAHI'),
	(35, 'BAGIAN HUMAS SETDA KOTA CIMAHI'),
	(36, 'BAGIAN UMUM DAN PROTOKOL SETDA KOTA CIMAHI'),
	(37, 'RUMAH SAKIT UMUM DAERAH'),
	(38, 'SEKRETARIAT KORPRI'),
	(39, 'KECAMATAN CIMAHI SELATAN');
/*!40000 ALTER TABLE `pengirim` ENABLE KEYS */;

-- Dumping structure for table simapan.perkara
DROP TABLE IF EXISTS `perkara`;
CREATE TABLE IF NOT EXISTS `perkara` (
  `id_perkara` int(11) NOT NULL AUTO_INCREMENT,
  `no_agenda` varchar(10) NOT NULL,
  `tanggal_perkara` date NOT NULL,
  `nama_tersangka` varchar(50) NOT NULL,
  `perkara` varchar(100) NOT NULL,
  `id_jaksa` int(11) NOT NULL,
  PRIMARY KEY (`id_perkara`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Dumping data for table simapan.perkara: ~21 rows (approximately)
/*!40000 ALTER TABLE `perkara` DISABLE KEYS */;
REPLACE INTO `perkara` (`id_perkara`, `no_agenda`, `tanggal_perkara`, `nama_tersangka`, `perkara`, `id_jaksa`) VALUES
	(3, '0002', '2015-08-13', 'Dikdik', 'Khasanah Dunia Pencopetan', 1),
	(4, '0003', '2007-02-08', 'Dikdik', 'Khasanah Dunia Pencopetan', 0),
	(6, '001', '2015-08-15', 'Muslihat saja', 'Preman Pensiun 2', 2),
	(7, '002', '2015-08-14', 'Dikdik', 'Khasanah Dunia Pencopetan', 1),
	(8, '003', '2015-08-21', 'Dikdik', 'Khasanah Dunia Pencopetan', 1),
	(9, '004', '2015-08-11', 'Muslihat saja', 'Preman Pensiun 3', 1),
	(10, '005', '2015-08-10', 'Dikdik', 'Khasanah Dunia Pencopetan', 2),
	(11, '006', '2015-08-11', 'Dikdik', 'Khasanah Dunia Pencopetan', 1),
	(12, '007', '2015-08-13', 'Muslihat saja', 'Preman Pensiun 4', 1),
	(13, '008', '2015-08-22', 'Dikdik', 'Khasanah Dunia Pencopetan', 2),
	(14, '009', '2015-08-12', 'Dikdik', 'Khasanah Dunia Pencopetan', 1),
	(15, '010', '2015-08-14', 'Muslihat saja', 'Preman Pensiun 5', 1),
	(16, '011', '2015-08-12', 'Dikdik', 'Khasanah Dunia Pencopetan', 2),
	(17, '012', '2015-08-11', 'Dikdik', 'Khasanah Dunia Pencopetan', 1),
	(18, '013', '2015-08-20', 'Muslihat saja', 'Preman Pensiun 6', 2),
	(19, '014', '2015-08-18', 'Dikdik', 'Khasanah Dunia Pencopetan', 1),
	(20, '015', '2015-08-10', 'Dikdik', 'Khasanah Dunia Pencopetan', 1),
	(21, '016', '2015-08-20', 'Muslihat saja', 'Preman Pensiun 7', 2),
	(22, '017', '2015-08-13', 'Dikdik', 'Khasanah Dunia Pencopetan', 1),
	(23, '018', '2015-08-19', 'Dikdik', 'Khasanah Dunia Pencopetan', 2),
	(24, '019', '2015-08-12', 'Muslihat saja', 'Preman Pensiun 8', 1);
/*!40000 ALTER TABLE `perkara` ENABLE KEYS */;

-- Dumping structure for table simapan.ref_disposisi
DROP TABLE IF EXISTS `ref_disposisi`;
CREATE TABLE IF NOT EXISTS `ref_disposisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tujuan_disposisi` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table simapan.ref_disposisi: ~7 rows (approximately)
/*!40000 ALTER TABLE `ref_disposisi` DISABLE KEYS */;
REPLACE INTO `ref_disposisi` (`id`, `tujuan_disposisi`) VALUES
	(1, 'Sekretaris Kelurahan'),
	(2, 'Kasi Pemerintahan'),
	(3, 'Kasi Ekonomi dan Pembangunan'),
	(4, 'Kasi Pemberdayaan Masyarakat dan Kesra'),
	(5, 'Kasi Trantib'),
	(6, 'Staff'),
	(7, 'Lurah');
/*!40000 ALTER TABLE `ref_disposisi` ENABLE KEYS */;

-- Dumping structure for table simapan.ref_klasifikasi
DROP TABLE IF EXISTS `ref_klasifikasi`;
CREATE TABLE IF NOT EXISTS `ref_klasifikasi` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `uraian` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

-- Dumping data for table simapan.ref_klasifikasi: ~103 rows (approximately)
/*!40000 ALTER TABLE `ref_klasifikasi` DISABLE KEYS */;
REPLACE INTO `ref_klasifikasi` (`id`, `kode`, `nama`, `uraian`) VALUES
	(1, '000', 'Umum', 'Surat Umum'),
	(2, '001', 'Lambang', ''),
	(3, '002', 'Tanda Kehormatan/Penghargaan', ''),
	(4, '003', 'Hari Raya / Besar', ''),
	(5, '004', 'Ucapan', ''),
	(6, '005', 'Undangan', ''),
	(7, '006', 'Tanda Jabatan', ''),
	(8, '010', 'URUSAN DALAM', ''),
	(9, '020', 'PERALATAN', ''),
	(10, '030', 'KEKAYAAN DAERAH', ''),
	(11, '040', 'PERPUST./DOK./KEARS./SANDI', ''),
	(12, '050', 'PERENCANAAN', ''),
	(13, '060', 'ORGANISASI/KETATALAKSANAAN', ''),
	(14, '070', 'PENELITIAN', ''),
	(15, '080', 'KONFERENSI', ''),
	(16, '090', 'PERJALANAN DINAS', ''),
	(17, '100', 'PEMERINTAHAN', ''),
	(18, '110', 'PEMERINTAH PUSAT', ''),
	(19, '120', 'PEMERINTAH DAERAH Tk.I', ''),
	(20, '130', 'PEMERINTAH DAERAH TK.II', ''),
	(21, '140', 'DESA/KELURAHAN', ''),
	(22, '144', 'Lembaga-lembaga Tk.Kelurahan', ''),
	(23, '149', 'RT/RW', ''),
	(24, '150', 'MPR/DPR', ''),
	(25, '160', 'DPRD Tk.I', ''),
	(26, '170', 'DPRD Tk. II', ''),
	(27, '180', 'HUKUM', ''),
	(28, '190', 'HUBUNGAN LUAR NEGERI', ''),
	(29, '200', 'POLITIK', ''),
	(30, '210', 'KEPARTAIAN', ''),
	(31, '220', 'ORGANISASI KEMASYARAKATAN', ''),
	(32, '230', 'ORG.PROFESI DAN FUNGSIONAL', ''),
	(33, '240', 'ORGANISASI PEMUDA', ''),
	(34, '250', 'ORG.BURUH, TANI DAN NELAYAN', ''),
	(35, '260', 'ORGANISASI WANITA', ''),
	(36, '270', 'PEMILIHAN UMUM', ''),
	(37, '300', 'KEAMANAN/KETERTIBAN UMUM', ''),
	(38, '310', 'PERTAHANAN', ''),
	(39, '320', 'KEMILITERAN', ''),
	(40, '330', 'KEAMANAN', ''),
	(41, '340', 'PERTAHANAN SIPIL', ''),
	(42, '350', 'KEJAHATAN', ''),
	(43, '360', 'BENCANA', ''),
	(44, '370', 'KECELAKAAN', ''),
	(45, '400', 'KESEJAHTERAAN RAKYAT', ''),
	(46, '410', '-', ''),
	(47, '420', 'PENDIDIKAN', ''),
	(48, '430', 'KEBUDAYAAN', ''),
	(49, '440', 'KESEHATAN', ''),
	(50, '450', 'AGAMA', ''),
	(51, '460', 'SOSIAL', ''),
	(52, '470', 'KEPENDUDUKAN', ''),
	(53, '480', 'MEDIA MASA', ''),
	(54, '500', 'PEREKONOMIAN', ''),
	(55, '510', 'PERDAGANGAN', ''),
	(56, '520', 'PERTANIAN', ''),
	(57, '530', 'PERINDUSTRIAN', ''),
	(58, '540', 'PERTAMBANGAN KESAMUDRAAN', ''),
	(59, '550', 'PERHUBUNGAN', ''),
	(60, '560', 'TENAGA KERJA', ''),
	(61, '570', 'PERMODALAN', ''),
	(62, '580', 'PERBANKAN/MONETER', ''),
	(63, '590', 'AGRARIA', ''),
	(64, '600', 'PEKERJAAN UMUM', ''),
	(65, '610', 'PENGAIRAN', ''),
	(66, '620', 'JALAN', ''),
	(67, '630', 'JEMBATAN', ''),
	(68, '640', 'BANGUNAN', ''),
	(69, '650', 'TATA KOTA', ''),
	(70, '660', 'TATA LINGKUNGAN', ''),
	(71, '670', 'KETENAGAAN', ''),
	(72, '680', 'PERALATAN', ''),
	(73, '690', 'AIR MINUM', ''),
	(74, '700', 'PENGAWASAN', ''),
	(75, '710', 'BIDANG PEMERINTAHAN', ''),
	(76, '720', 'BIDANG POLITIK', ''),
	(77, '730', 'BIDANG KEAMANAN/KETERTIBAN', ''),
	(78, '740', 'BIDANG KESRA', ''),
	(79, '750', 'BIDANG PEREKONOMIAN', ''),
	(80, '760', 'BIDANG PEKERJAAN UMUM', ''),
	(81, '770', '-', ''),
	(82, '780', 'BIDANG KEPEGAWAIAN', ''),
	(83, '790', 'BIDANG KEUANGAN', ''),
	(84, '800', 'KEPEGAWAIAN', ''),
	(85, '810', 'PENGADAAN', ''),
	(86, '820', 'MUTASI', ''),
	(87, '830', 'KEDUDUKAN', ''),
	(88, '840', 'KESEJAHTERAAN PEGAWAI', ''),
	(89, '850', 'CUTI', ''),
	(90, '860', 'PENILAIAN', ''),
	(91, '870', 'TATA USAHA KEPEGAWAIAN', ''),
	(92, '880', 'PEMBERHENTIAN', ''),
	(93, '890', 'PENDIDIKAN PEGAWAI', ''),
	(94, '900', 'KEUANGAN', ''),
	(95, '910', 'ANGGARAN', ''),
	(96, '920', 'OTORISASI', ''),
	(97, '930', 'VERIFIKASI', ''),
	(98, '940', 'PEMBUKUAN', ''),
	(99, '950', 'PERBENDAHARAAN', ''),
	(100, '960', 'PEMBINAAN KEBENDAHARAAN', ''),
	(101, '970', 'PENDAPATAN', ''),
	(102, '980', '-', ''),
	(103, '990', 'BENDAHARAWAN', '');
/*!40000 ALTER TABLE `ref_klasifikasi` ENABLE KEYS */;

-- Dumping structure for table simapan.ref_sifat_surat
DROP TABLE IF EXISTS `ref_sifat_surat`;
CREATE TABLE IF NOT EXISTS `ref_sifat_surat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table simapan.ref_sifat_surat: ~3 rows (approximately)
/*!40000 ALTER TABLE `ref_sifat_surat` DISABLE KEYS */;
REPLACE INTO `ref_sifat_surat` (`id`, `deskripsi`) VALUES
	(1, 'Biasa'),
	(2, 'Penting'),
	(3, 'Rahasia'),
	(4, 'Segera'),
	(5, 'Sangat Segera'),
	(6, 'Lain-lain'),
	(9, 'Super Rahasia');
/*!40000 ALTER TABLE `ref_sifat_surat` ENABLE KEYS */;

-- Dumping structure for table simapan.surat_masuk
DROP TABLE IF EXISTS `surat_masuk`;
CREATE TABLE IF NOT EXISTS `surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT,
  `kode_surat_masuk` varchar(30) NOT NULL,
  `no_surat_masuk` varchar(15) NOT NULL,
  `asal_surat_masuk` varchar(100) NOT NULL,
  `tgl_surat_masuk` date NOT NULL,
  `status_surat_masuk` varchar(50) NOT NULL,
  `perihal_surat_masuk` text NOT NULL,
  `tgl_penyelesaian` date DEFAULT NULL,
  `no_agenda` varchar(30) NOT NULL,
  `lampiran` varchar(100) NOT NULL,
  `tgl_diterima` date NOT NULL,
  `pengolah` int(5) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `status_disposisi` int(11) NOT NULL,
  PRIMARY KEY (`id_surat_masuk`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table simapan.surat_masuk: ~2 rows (approximately)
/*!40000 ALTER TABLE `surat_masuk` DISABLE KEYS */;
REPLACE INTO `surat_masuk` (`id_surat_masuk`, `kode_surat_masuk`, `no_surat_masuk`, `asal_surat_masuk`, `tgl_surat_masuk`, `status_surat_masuk`, `perihal_surat_masuk`, `tgl_penyelesaian`, `no_agenda`, `lampiran`, `tgl_diterima`, `pengolah`, `keterangan`, `status_disposisi`) VALUES
	(2, '003', '12010', 'WALIKOTA CIMAHI', '2016-07-09', 'Biasa', 'Lebaran', '2016-07-09', '0001', 'House-GM1-04-800x6611.jpg', '2016-07-09', 0, '', 3),
	(3, '230', '123.3/34.2016', 'WAKIL WALIKOTA CIMAHI', '2016-07-11', 'Penting', 'undangan', '2016-07-11', '0002', 'House-GM1-04-800x6612.jpg', '2016-07-10', 0, '', 3);
/*!40000 ALTER TABLE `surat_masuk` ENABLE KEYS */;

-- Dumping structure for table simapan.tr_instansi
DROP TABLE IF EXISTS `tr_instansi`;
CREATE TABLE IF NOT EXISTS `tr_instansi` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kepsek` varchar(100) NOT NULL,
  `nip_kepsek` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table simapan.tr_instansi: ~1 rows (approximately)
/*!40000 ALTER TABLE `tr_instansi` DISABLE KEYS */;
REPLACE INTO `tr_instansi` (`id`, `nama`, `alamat`, `kepsek`, `nip_kepsek`, `logo`) VALUES
	(1, 'Kelurahan Leuwigajah', 'Jl. Sadarmanah No.11 Telp/Fax 022-6672995 Cimahi 40532', 'Rully', '199003262016011001', 'Copy_of_100_63181.JPG');
/*!40000 ALTER TABLE `tr_instansi` ENABLE KEYS */;

-- Dumping structure for table simapan.t_aplikasi
DROP TABLE IF EXISTS `t_aplikasi`;
CREATE TABLE IF NOT EXISTS `t_aplikasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `desc` varchar(150) DEFAULT NULL,
  `projectName` varchar(150) DEFAULT NULL,
  `developedBy` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table simapan.t_aplikasi: ~1 rows (approximately)
/*!40000 ALTER TABLE `t_aplikasi` DISABLE KEYS */;
REPLACE INTO `t_aplikasi` (`id`, `name`, `desc`, `projectName`, `developedBy`) VALUES
	(1, '.:: SI MAPAN ::.', '.:: SI MAPAN (Siapa Mengerjakan Apa, dimana, kapan) ::.', 'Proyek Perubahan Diklatpim IV - Agus Irwan Kustiawan', 'Developed by Riza Fauzi Rahman');
/*!40000 ALTER TABLE `t_aplikasi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
