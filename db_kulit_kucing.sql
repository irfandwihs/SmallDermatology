-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 04:00 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `rule_temporary`
--

CREATE TABLE `rule_temporary` (
  `id_pilihan` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pilihan` varchar(5) NOT NULL,
  `jawaban` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` text NOT NULL,
  `nama_gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id_gejala`, `nama_gejala`) VALUES
('G001', 'G001 Rambut rontok'),
('G002', 'G002 Gatal-gatal dan sering menggaruk badan'),
('G003', 'G003 Gatal-gatal dan sering menggaruk telinga'),
('G004', 'G004 Kulit kemerahan sebagian'),
('G005', 'G005 Kulit kemerahan sekujur tubuh'),
('G006', 'G006 Kulit berkerak berwarna putih tidak merata'),
('G007', 'G007 Kulit berkerak berbentuk lingkaran merah'),
('G008', 'G008 Kulit bernanah'),
('G009', 'G009 Ditemukan kutu berbentuk pipih/cerutu pada kulit'),
('G010', 'G010 Ditemukan kutu pada telinga bagian luar'),
('G011', 'G011 Ditemukan kutu pada telinga bagian dalam'),
('G012', 'G012 Ditemukan kutu badan'),
('G013', 'G013 Ditemukan kutu pada lapisan kulit bagian dalam'),
('G014', 'G014 Ditemukan adanya benjolan yang membesar'),
('G015', 'G015 Sering mengeluarkan kotoran telinga'),
('G016', 'G016 Terdapat benjolan merah di bagian mulut atau badan'),
('G017', 'G017 Rambut kusam'),
('G018', 'G018 Terjadi pembentukan ketombe yang cepat'),
('G019', 'G019 Sehat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakitgejala`
--

CREATE TABLE `tb_penyakitgejala` (
  `id` int(11) NOT NULL,
  `kesimpulan_penyakit` varchar(50) NOT NULL,
  `hasil_gejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penyakitgejala`
--

INSERT INTO `tb_penyakitgejala` (`id`, `kesimpulan_penyakit`, `hasil_gejala`) VALUES
(1, 'Infeksi Bakteri', 'G001 Rambut rontok'),
(2, 'Infeksi Bakteri', 'G002 Gatal-gatal dan sering menggaruk badan'),
(3, 'Infeksi Bakteri', 'G008 Kulit bernanah'),
(4, 'Infeksi Jamur (Malassezia)', 'G001 Rambut rontok'),
(5, 'Infeksi Jamur (Malassezia)', 'G002 Gatal-gatal dan sering menggaruk badan'),
(6, 'Infeksi Jamur (Malassezia)', 'G006 Kulit berkerak berwarna putih tidak merata'),
(7, 'Infeksi Jamur (Ringworm)', 'G001 Rambut rontok'),
(8, 'Infeksi Jamur (Ringworm)', 'G002 Gatal-gatal dan sering menggaruk badan'),
(9, 'Infeksi Jamur (Ringworm)', 'G004 Kulit kemerahan sebagian'),
(10, 'Infeksi Jamur (Ringworm)', 'G005 Kulit kemerahan sekujur tubuh'),
(11, 'Infeksi Jamur (Ringworm)', 'G007 Kulit berkerak berbentuk lingkaran merah'),
(12, 'Infeksi Kutu (Scabies)', 'G001 Rambut rontok'),
(13, 'Infeksi Kutu (Scabies)', 'G003 Gatal-gatal dan sering menggaruk telinga'),
(14, 'Infeksi Kutu (Scabies)', 'G010 Ditemukan kutu pada telinga bagian luar'),
(15, 'Infeksi Kutu (Demodex)', 'G001 Rambut rontok'),
(16, 'Infeksi Kutu (Demodex)', 'G002 Gatal-gatal dan sering menggaruk badan'),
(17, 'Infeksi Kutu (Demodex)', 'G004 Kulit kemerahan sebagian'),
(18, 'Infeksi Kutu (Demodex)', 'G005 Kulit kemerahan sekujur tubuh'),
(19, 'Infeksi Kutu (Demodex)', 'G009 Ditemukan kutu berbentuk pipih /cerutu pada kulit'),
(20, 'Infeksi Kutu (Demodex)', 'G013 Ditemukan kutu pada telinga bagian dalam'),
(21, 'Infeksi Kutu (Otodectes)', 'G003 Gatal-gatal dan sering menggaruk telinga'),
(22, 'Infeksi Kutu (Otodectes)', 'G011 Ditemukan kutu pada telinga bagian dalam'),
(23, 'Infeksi Kutu (Otodectes)', 'G015 Sering mengeluarkan kotoran telinga'),
(24, 'Infeksi Kutu (Ctenocephalides)', 'G001 Rambut rontok'),
(25, 'Infeksi Kutu (Ctenocephalides)', 'G002 Gatal-gatal dan sering menggaruk badan'),
(26, 'Infeksi Kutu (Ctenocephalides)', 'G004 Kulit kemerahan sebagian'),
(27, 'Infeksi Kutu (Ctenocephalides)', 'G012 Ditemukan kutu badan'),
(28, 'Alergi', 'G001 Rambut rontok'),
(29, 'Alergi', 'G002 Gatal-gatal dan sering menggaruk badan'),
(30, 'Alergi', 'G005 Kulit kemerahan sekujur tubuh'),
(31, 'Alergi', 'G016 Terdapat benjolan merah di bagian mulut atau badan'),
(32, 'Kekurangan Vitamin', 'G001 Rambut rontok'),
(33, 'Kekurangan Vitamin', 'G017 Rambut kusam'),
(34, 'Kekurangan Vitamin', 'G018 Terjadi pembentukan ketombe yang cepat'),
(35, 'Tumor', 'G001 Rambut rontok'),
(36, 'Tumor', 'G004 Kulit kemerahan sebagian'),
(37, 'Tumor', 'G014 Ditemukan adanya benjolan yang membesar'),
(38, 'Penyakit tidak ditemukan', 'Tidak tertarik masuk teknik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_proses`
--

CREATE TABLE `tb_proses` (
  `kode_penyakit` varchar(50) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `penanganan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_proses`
--

INSERT INTO `tb_proses` (`kode_penyakit`, `nama_penyakit`, `deskripsi`, `penanganan`) VALUES
('P001', 'Infeksi Bakteri', 'Merupakan penyakit kulit yang sering disebabkan oleh bakteri Staphylococcus Sp. Infeksi disebabkan karena adanya luka terbuka yang tidak segera untuk diobati. Luka terbuka ini akan ditempeli oleh bakteri. Ketika bakteri sudah berkembang biak, akan terjadi reaksi pembentukan nanah. Ketika nanah sudah terlalu banyak, kulit dan jaringan dibawahnya bisa berlubang (erosi kulit).', 'Jika menemukan luka terbuka, segera bersihkan dengan antiseptik (Co : alkohol 70%) yang dioleskan ke kapas, kemudian oleskan ke arah luka kucing. Berikan salep antiseptik / salep antibiotik pada luka tersebut. Cuci tangan ketika sudah selesai membersihkan kulit kucing yang terluka. Bawa ke dokter hewan terdekat untuk konsultasi dan pemberian antibiotik minum dan pemasangan perban jika diperlukan.'),
('P002', 'Infeksi Jamur (Malassezia)', 'Merupakan penyakit kulit pada kucing yang disebabkan oleh jamur Malassezia pachydermatis. Penyakit ini spesifik ditandai oleh adanya kerak berwarna putih berwarna putih tidak merata yang ada di sekujur tubuh.\r\nFaktor lingkungan yang lembab dan kotor sering menyebabkan jamur tumbuh terlalu banyak di kulit kucing. Kucing akan merasa gatal-gatal dan terkadang akan menimbulkan gejala klinis lain.\r\nPenyakit ini mudah menular ke kucing lain yang sehat.\r\n', 'Pengobatan dapat dilakukan dengan pemberian salep anti jamur khusus untuk hewan. Setelah diberi salep, rambut pada kucing yang terdapat kerak berwarna putih disisir menggunakan sisir serit. Mandi menggunakan sampo anti jamur juga diperlukan. Pastikan kucing dikeringkan secara maksimal setelah dimandikan. Tempatkan kucing pada lingkungan yang tidak lembab dan kotor.\r\nBawa ke dokter hewan terdekat untuk konsultasi pengobatan penyakit jamur dan pemberian obat minum apabila penyakit sudah parah.'),
('P003', 'Infeksi Jamur (Ringworm)', 'Merupakan penyakit kulit pada kucing yang disebabkan oleh jamur Microsporum Sp. atau Trichophyton Sp. Penyakit ini spesifik ditandai dengan kulit berkerak berbentuk lingkaran merah di bagian tertentu dan dapat meluas sekujur tubuh. Oleh karena itu penyakit ini disebut dengan "ringworm"\r\nFaktor lingkungan yang lembab dan kotor sering menyebabkan jamur tumbuh terlalu banyak di kulit kucing. Kucing akan merasa gatal-gatal dan terkadang akan menimbulkan gejala klinis lain.\r\nPenyakit ini bisa menular ke manusia dan mudah menular ke kucing lain yang sehat.\r\n', 'Pengobatan dapat dilakukan dengan pemberian salep anti jamur khusus untuk hewan. Pemberian salep dengan cara memutar sesuai pola lingkaran bentukan "ringworm". Mandi menggunakan sampo antijamur juga diperlukan. Pastikan kucing dikeringkan secara maksimal setelah dimandikan. Tempatkan kucing pada lingkungan yang tidak lembab dan kotor.\r\nBawa ke dokter hewan terdekat untuk konsultasi pengobatan penyakit jamur dan pemberian obat minum apabila penyakit sudah parah.\r\n'),
('P004', 'Infeksi Kutu (Scabies)', 'Merupakan penyakit kulit yang disebabkan oleh kutu Sarcoptes scabiei.\r\nPenyakit ini ditandai oleh adanya keropeng berbentuk "lorong" pada telinga bagian luar. Biasanya akan ditemukan kutu scabies pada bagian  keropeng "lorong" daun telinga luar. Apabila sudah parah, keropeng akan meluas ke sekitar wajah kucing.\r\nGejala lain yang ditemukan seperti Rambut rontok, gatal-gatal, dan sering menggaruk telinga. Ketika kutu sudah terlalu banyak, kucing bisa mengalami anemia sehingga akan tampak lemas dan tidak mau makan.\r\nPenyakit ini mampu menular dengan cepat ke kucing lain yang sehat.\r\nPenyakit ini juga bisa menular ke  manusia.\r\n\r\n', 'Pengobatan dapat menggunakan obat anti kutu sesuai anjuran dokter hewan. Bagian keropeng biasanya diberi salep anti luka.'),
('P005', 'Infeksi Kutu (Demodex)', 'Merupakan penyakit kulit yang disebabkan oleh kutu Demodex Sp.\r\nPenyakit ini ditandai dengan gatal-gatal disertai kemerahan "bintik-bintik" hampir di sekujur tubuh seperti bagian wajah, telinga, dagu, bahkan bagian tubuh.\r\nDokter hewan perlu melakukan "skin scraping" untuk menemukan kutu pada kerokan kulit bagian dalam\r\nKetika kutu sudah terlalu banyak, kucing bisa mengalami anemia sehingga akan tampak lemas dan tidak mau makan.\r\nPenyakit ini mampu menular dengan cepat ke kucing lain yang sehat.\r\nPenyakit ini juga bisa menular ke  manusia.', 'Pengobatan dapat menggunakan obat anti kutu sesuai anjuran dokter hewan. Bagian bintik-bintik biasanya diberi salep anti luka. Pengobatan menggunakan larutan sulfur yang dioles juga bisa digunakan sebagai pertolongan pertama.'),
('P006', 'Infeksi Kutu (Otodectes)', 'Merupakan penyakit pada bagian telinga dalam yang disebabkan oleh kutu Otodectes Sp.\r\nGejala spesifik adalah ketika kucing sering sekali menggaruk-garuk telinga, serta muncul banyak kotoran telinga.\r\nDokter hewan perlu untuk melihat telinga bagian dalam untuk menemukan kutu tersebut.\r\nKetika kutu sudah terlalu banyak, kucing bisa mengalami anemia sehingga akan tampak lemas dan tidak mau makan.\r\nPenyakit ini mampu menular dengan cepat ke kucing lain yang sehat.\r\n', 'Pengobatan dapat menggunakan obat anti kutu sesuai anjuran dokter hewan.\r\nBagian telinga harus rutin dibersihkan menggunakan pembersih telinga khusus hewan dan kotoran telinga diambil dengan cotton bud.\r\n'),
('P007', 'Infeksi Kutu (Ctenocephalides)', 'Merupakan penyakit kulit yang disebabkan oleh kutu Ctenocephalides Sp.\r\nPenyakit ini ditandai dengan rambut yang sering rontok, gatal-gatal, sering menggaruk badan hingga kemerahan di bagian badan.\r\nPenyakit ini spesifik ketika kita dapat menemukan kutu ketika sedang menyibak rambut kucing.\r\nPenyakit ini mampu menular dengan cepat ke kucing lain yang sehat.\r\n', 'Pengobatan dapat menggunakan obat anti kutu sesuai anjuran dokter hewan.\r\nMandi anti kutu.\r\n'),
('P008', 'Alergi', 'Merupakan penyakit metabolik pada kucing ketika tidak cocok dengan makanan yang diberikan.\r\nSering kita jumpai kucing diberikan dengan ikan asin, ayam, atau bahkan nasi.\r\nMakanan seperti itulah yang membuat bulu kucing mudah rontok dan kemerahan di sekujur tubuh.\r\n', 'Konsultasi dengan dokter hewan untuk memberi pakan khusus kucing yang sesuai dengan kucing anda.'),
('P009', 'Kekurangan Vitamin', 'Apabila rambut kucing mudah rontok dan berwarna kusam, namun tidak ditemukan nanah, jamur, atau bakteri pada kulit dapat dipastikan kucing tersebut kekurangan vitamin esensial untuk kulit.', 'Konsultasi dengan dokter hewan untuk memberi multivitamin khusus kucing yang sesuai dengan kucing anda.'),
('P010', 'Tumor', 'Merupakan kelainan genetik pada kucing yang ditandai adanya "benjolan" yang terus membesar pada bagian kulit. Kasus ini jarang terjadi, dan tidak dapat disembuhkan.', 'Konsultasi dengan dokter hewan untuk tindakan operasi atau non operasi.'),
('P011', 'Tidak ditemukan adanya penyakit/Sistem kami belum bisa mendeteksi penyakit tersebut\r\n', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rule_temporary`
--
ALTER TABLE `rule_temporary`
  ADD PRIMARY KEY (`id_pilihan`),
  ADD UNIQUE KEY `pilihan` (`pilihan`,`jawaban`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id_gejala`(5));

--
-- Indexes for table `tb_penyakitgejala`
--
ALTER TABLE `tb_penyakitgejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_proses`
--
ALTER TABLE `tb_proses`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rule_temporary`
--
ALTER TABLE `rule_temporary`
  MODIFY `id_pilihan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
