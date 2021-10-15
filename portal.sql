-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2021 at 08:51 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `description`, `created_at`) VALUES
(1, 'Sejarah', 'Sejarah disini', '2021-10-14 09:33:28'),
(2, 'Visi Misi', '                                Visi Misi di sini', '2021-10-14 09:33:38'),
(3, 'Kebijakan Privasi', 'Privasi di sini', '2021-10-14 10:40:45');

-- --------------------------------------------------------

--
-- Table structure for table `akademik`
--

CREATE TABLE `akademik` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akademik`
--

INSERT INTO `akademik` (`id`, `title`, `description`, `created_at`) VALUES
(1, 'Biaya Pendidikan', 'Biaya', '2021-10-14 11:04:07'),
(2, 'Jadwal Pendaftaran', 'Jadwal', '2021-10-14 11:04:16'),
(3, 'Animo dan Daya Tampung', '                                Animo', '2021-10-14 11:08:40');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'Rifqi Muhammad', 'muhammad45rifki@gmail.com', 'domain tidak bisa akses', 'toloooong');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `foto`) VALUES
(1, 'Sample Foto', 'http://localhost/portal/assets/backend/upload/gallery/sample2.jpg'),
(2, 'Sample foto 2', 'http://localhost/portal/assets/backend/upload/gallery/bird-thumbnail.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id_link` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `foto_link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id_link`, `url`, `foto_link`, `created_at`) VALUES
(3, 'https://www.facebook.com/', 'http://localhost/portal/assets/backend/upload/link/cara-menghapus-akun-facebook.jpeg', '2021-10-12 12:11:40'),
(6, 'https://www.tokopedia.com/', 'http://localhost/portal/assets/backend/upload/link/tokopedia.jpg', '2021-10-12 12:00:03');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `title`, `description`, `foto`, `created_at`) VALUES
(1, 'Peresmian Kereta Cepat', '<p>                                Jakarta (BeritaMu.co.id) – Presiden Joko Widodo (Jokowi) mengaku tidak menyangka Terminal Wae Kelambu Pelabuhan Labuhan Bajo yang merupakan terminal khusus logistik pertama di Nusa Tenggara Timur (NTT) menjadi berukuran sangat besar.\r\n</p><p>\r\nSaat meresmikan Terminal Multiguna Wae Kelambu Pelabuhan Labuan Bajo, NTT, Kamis, Presiden Jokowi mengira pelabuhan tersebut akan berukuran setara dengan Pelabuhan Labuan Bajo yang telah didirikan terlebih dahulu.\r\n\r\n“Saya tidak membayangkan bahwa pelabuhan yang baru ini sangat besar sekali. Pikiran saya itu sama seperti yang lama, hanya digeser ke sini,” kata Presiden Jokowi.\r\n</p><p>\r\nPresiden Jokowi berharap pelabuhan tersebut bisa digunakan untuk jangka waktu yang lama, hingga 15-20 tahun mendatang, guna mengangkut logistik dari dan menuju NTT, khususnya Kabupaten Manggarai Barat. </p><p>Ia mengapresiasi pelabuhan tersebut juga dibangun dalam tempo yang cepat.\r\n\r\n“Di bulan Agustus 2020. Pada 2020 dimulai (pembangunan) kemudian hari ini bisa kita selesaikan,” ujar Presiden Jokowi.\r\n\r\nTerminal Multiguna Wae Kelambu, Pelabuhan Labuan Bajo merupakan terminal khusus logistik pertama yang ada di NTT.                                                                </p>', 'http://localhost/portal/assets/backend/upload/news/image.PNG', '2021-10-15 08:10:18'),
(2, 'Sample Berita', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>                                ', 'http://localhost/portal/assets/backend/upload/news/sample.jpg', '2021-10-15 08:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `id_slide` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id_slide`, `judul`, `foto`, `created_at`) VALUES
(5, 'Sekolah Pertama Saya Saya', 'http://localhost/portal/assets/backend/upload/slider/img1.jpeg', '2021-10-11 18:08:09'),
(6, 'Sekolah Kedua Saya', 'http://localhost/portal/assets/backend/upload/slider/img2.jpeg', '2021-10-10 05:39:45'),
(10, 'Sekolah Ketiga Saya', 'http://localhost/portal/assets/backend/upload/slider/img3.JPG', '2021-10-11 08:31:26'),
(11, 'Sekolah Keempat Saya', 'http://localhost/portal/assets/backend/upload/slider/img2.jpeg', '2021-10-11 11:51:36'),
(12, 'Sekolah Kelima Saya', 'http://localhost/portal/assets/backend/upload/slider/img1.jpeg', '2021-10-11 11:52:06');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akademik`
--
ALTER TABLE `akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id_link`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `akademik`
--
ALTER TABLE `akademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id_link` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
