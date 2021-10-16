-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2021 pada 17.59
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.24

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
-- Struktur dari tabel `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `email`, `description`, `foto`) VALUES
(1, 'Rizsky Darmawan', 'darmawanrizsky@gmail.com', 'Saya sangat senang bersekolah di STIP, recomend sekali bagi yang bercita cita sebagai pelaut, untuk sekolah disini.                                                                                                                                                                                                                                                                                                                                                                        ', 'http://localhost/portal/assets/backend/upload/testimoni/jasjad.JPG'),
(2, 'Ade Baru Tamam', 'adebadru@gmail.com', 'Alhamdulillah, saya senang dengan fasilitas yan ada di kampus STIP ini semua nya lengkap, rekomended untuk belajar disini yang punya cita cita sebagai pelaut                                    ', 'http://localhost/portal/assets/backend/upload/testimoni/DSC04043.JPG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
