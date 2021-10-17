-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2021 pada 19.23
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
-- Struktur dari tabel `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `description`, `created_at`) VALUES
(1, 'Sejarah', '                                                                                                <div><div>SEJARAH STIP JAKARTA</div><div><br></div><div>Tahun 1953:</div><div><br></div><div>Sekolah Tinggi Ilmu Pelayaran adalah Pendidikan pelayaran yang berada dibawah naungan Badan Diklat Perhubungan Republik Indonesia. Berdiri sejak tahun 1953 Akademi Ilmu Pelayaran yang menyelenggarakan Program Diploma III (setara dengan BSc) dengan 2 jurusan antara lain: Nautika dan Teknika (sertifikat kompetensi Klas III), lama pendidikan 3-4 tahun.</div><div><br></div><div>Tahun 1957 :</div><div><br></div><div>Pada tanggal 27 februari 1957 AIP diresmikan oleh Presiden Pertama RI Ir. Soekarno. Saat itu juga menjadi Akademi Pelayaran Pertama di Indonesia. Lokasi kampus berada di Jl. Gunung Sahari, Mangga Dua Ancol, Jakarta Utara.</div><div><br></div><div>Tahun 1962 :</div><div><br></div><div>Pada tahun 1962 AIP menyelenggarakan kerjasama dengan Akademi Pelayaran Amerika yaitu Kings Point untuk kelas khusus. Sejak didirikan, AIP telah memilki reputasi yang baik sebagai Pusat pendidikan Pelayaran sehingga pada tahun 1974 sampai dengan 1984 AIP berhasil menyelenggarakan pertukaran pelajar dengan Tanzania, Malaysia dan Bangladesh.</div><div><br></div><div>Tahun 1964 :</div><div><br></div><div>Pada tahun 1964 Akademi Ilmu Pelayaran Niaga dan Akademi Telekomunikasi dilebur menjadi Akademi Ilmu Pelayaran. sehingga AIP mendapat lisensi untuk melaksanakan 4 program studi: Nautika, Teknika, Ketatalaksanaan dan Kepelabuhanan (KTK) dan Elektronika &amp; Telekomunikasi.</div><div><br></div><div>Tahun 1983:</div><div><br></div><div>Pada tahun 1983 Akademi Ilmu Pelayaran berubah nama menjadi Pendidikan dan Latihan Ahli Pelayaran (PLAP) dan diberikan lisensi untuk melaksanakan program Strata A, Strata B dan Strata C dengan 4 jurusan: Nautika, Teknika, Telekomunikasi Pelayaran dan Ketatalaksanaan dan Kepelabuhanan (KTK).</div><div><br></div><div>Pada Strata A merupakan program 3 tahun yang setara dengan BSc dengan sertifikat kepelautan kelas 3, Strata B merupakan program 1 tahun untuk pelaut yang memiliki pengalaman berlayar 2 tahun setelah mengikuti pendidikan Starta A dan memiliki sertifikat kepelautan kelas 2 dan Strata C merupakan program pendidikan dengan sertifikat kepelautan kelas 1. tahun 1995 PLAP mendapatkan lisensi untuk menyelenggarakan Program DiplomaIV dengan 3 Jurusan: Nautika, teknika dan Ketatalaksanaan dan kepelabuhanan (KTK) yang setara dengan Sarjana program kepelautan.</div><div><br></div><div>Tahun 1997 :</div><div><br></div><div>Pada tahun 1997 berdasarkan peraturan pelaksanaan Diklat Pembentukan yaitu Surat Persetujuan Menteri Pendidikan Nasional No. 1932/D/T/1997 tanggal 7 Agustus 1997 tentang Persetujuan Pembukaan Program Diploma IV Pelayaran di Lingkungan Departemen Perhubungan.</div><div><br></div><div>Tahun 1998 :</div><div><br></div><div>Pada tahun 1998 PLAP diberi lisensi oleh Direktoran Jenderal Perhubungan Laut (DJPL) untuk menyelenggarakan Basic Safety Training, Survival Craft &amp; Rescue Boats, Fast Rescue Boat, Advance Fire Fighting, Medical First Aid, Medical Care, Ship Security Officer, Security Awarness Training, Seafarer with Designated Security Duties, Crowd Management, Crisis Management and Human Behavior, Basic Oil and Chemical Tanker, Basic Liquified Gas Tanker, Advance Oil Tanker, Advance Chemical Tanker, Advance Liquified Gas Tanker, Radar Simulator, Arpa Simulator, Electronic Chart and Display Training, Bridge Resources Management, Engine Resources Management, Global Maritim Distress and Safety System, International Maritim Dangerous Goods Code, High Voltage (Management), High Voltage (Operational), Leadership, Maritim Englisj &amp; Marlin Test, Cargo Survey, Cooking, Welding, Pemanduan, ISM Awarness, Ahli Nautika Tingkat III, Ahli Nautika Tingkat II, Ahli Nautika Tingkat I, Ahli Teknika Tingkat III, Ahli Teknika Tingkat II, Ahli Teknika Tingkat I, Updating Nautika Kelas III Operasional, Updating Nautika Kelas III Manajemen, Updating Kelas III COC (Dipl. IV/ANT III), Updating Nautika Kelas II, Updating Nautika Kelas II, Updating Nautika Kelas II,Updating Teknika Kelas III Operasional, Updating Teknika Kelas III Manajemen, Updating Kelas III COC ( Dipl. IV/ ATT-III), Updating Teknika Kelas II, dan Updating Teknika Kelas I. Dan hingga saat ini diklat ketrampilan terus bertambah sesuai denga STCW 1978 Amandemen 2000, dan berdasarkan peraturan terkait pelaksanaan Diklat Pembentukan pada Surat Direktur Jenderal Pendidikan Tinggi No. 3104/D/T/98 tanggal 16 Oktober 1998 tentang Penghargaan Akademik dan Kepegawaian Lulusan Program Diploma IV Pelayaran.</div><div><br></div><div>Tahun 2000 :</div><div><br></div><div>Pada bulan maret 2000 Pendidikan dan Latihan Ahli Pelayaran (PLAP) berubah status menjadi Sekolah Tinggi Ilmu Pelayaran (STIP) dengan struktur organisasi baru yang berlaku sejak tahun ajaran 1995/1996, dengan jangka waktu pendidikan adalah delapan semester (4 Tahun) dalam tiga jurusan yaitu Nautika, Teknika, dan Ketatalaksanaan Angkutan Laut dan Kepelabuhanan.</div><div><br></div><div>Pada tanggal 10 Maret 2000 melalui Kepetusan Presiden Republik Indoensia No.42 Tahun 2000 PLAP berubah status menjadi Sekolah Tinggi Ilmu Pelayaran (STIP) dengan struktur organisasi dan tata kerja yang ditetapkan dalam Surat Keputusan Menteri Perhubungan Nomor KM. 63 Tahun 2000 dan pada 16 April 2002 STIP pindah ke kampus baru yang berlokasi Alamat di Jalan Marunda Makmur, Cilincing, Jakarta Utara, Jakarta 14150, Indonesia</div><div><br></div><div>Tahun 2002 :</div><div><br></div><div>Pada bulan april 2002 STIP menempati Kampus baru di Marunda Jakarta Utara.</div><div><br></div><div><span style=\"font-size: 1rem;\">Tahun&nbsp;</span>2003 :</div><div><br></div><div>Pada Oktober 2003 STIP mengimplementasikan standar Sistem Manajemen Mutu ISO 9001:2000 dengan edisi 4 (empat) dimana pada edisi sebelumnya menerapkan ISO 9002 : 1994.</div><div>Dan pada 16 Maret 2004 STIP memperoleh pengakuan dari Badan Sertifikasi Lloyds Register Quality Assurance (LRQA).</div><div><br></div><div><span style=\"font-size: 1rem;\">Tahun&nbsp;</span>2009 :</div><div><br></div><div>Pada tanggal 30 September 2009 STIP ditetapkan sebagai instansi Pemerintah yang menerapkan Pola Pengelolaan Keuangan Badan Layanan Umum (PK-BLU) serta dilakukan perubahan sesuai dengan Peraturan Menteri Perhubungan&nbsp; Nomor : KM 68 Tahun 2009 tentang Organisasi dan Tata Kerja Sekolah Tinggi Ilmu Pelayaran.</div><div><br></div><div><span style=\"font-size: 1rem;\">Tahun&nbsp;</span>2010 :</div><div><br></div><div>Dengan adanya perubahan standar Sistem Manajemen Mutu dari ISO 9001 : 2000 menjadi ISO 9001 : 2008, maka STIP mulai bulan Februari 2010 mengimplementasikan standar Sistem Manajemen Mutu ISO 9001 : 2008 dengan Edisi 5 (lima). SSelain menerapkan ISO 9001 : 2008, STIP juga menerapkan Quality Standart System (QSS) dan mendapatkan pengesahan dari Direktorat Jenderal Perhubungan Laut.</div><div><br></div><div><span style=\"font-size: 1rem;\">Tahun&nbsp;</span>2015 :</div><div><br></div><div>Pada tahun 2015 sesuai peraturan terkait pelaksanaan Diklat Pembentukan yaitu Surat Keputusan Badan Akreditasi Nasional Perguruan Tinggi No.181/SK/BAN-PT/Akred/Dpl-IV/VI/2014, No.261/SK/BAN-PT/Akred/Dpl-IV/VII/2014, No.092/SK/BAN-PT/Ak-SURV/Dpl-IV/III/2015 tentang status peringkat dan hasil akreditasi program diploma di Perguruan Tinggi, dan Surat Keputusan Badan Akreditasi Nasional Perguruan Tinggi No. 628/SK/BAN-PT/Akred/PT/VI/2015 tentang Nilai dan Peringkat Akreditasi Institusi Perguruan Tinggi.</div><div><br></div><div><span style=\"font-size: 1rem;\">Tahun&nbsp;</span>2018 :</div><div><br></div><div>Dengan adanya perubahan standar Ssistem Manajemen Mutu, pada tahun 2018 STIP Jakarta melakukan migrasi dari ISO 9001 : 2008 menjadi ISO 9001 : 2015.</div><div><br></div><div>Lokasi STIP di Jalan Marunda Makmur, Cilincing, Jakarta-Utara,14150</div><div><br></div><div>Pada tahun ini pula, STIP Jakarta melakukan migrasi dari ISO 9001:2008 menjadi ISO 9001:2015</div><div><br></div><div><span style=\"font-size: 1rem;\">Tahun&nbsp;</span>2020 :</div><div><br></div><div>STIP mulai menerapkan ISO 37001: 2016 berdasarkan Sertifikat Nomor 003/MHI-SMAP yang telah diraih pada tanggal 9 Oktober 2020 tentang Sistem Manajemen Anti Penyuapan (Anti Bribery Management System). Sejalan dengan keberhasilan STIP meraih predikat Wilayah Bebas Korupsi (WBK) pada tanggal 21 Desember 2020 dimana STIP secara berkesinambungan terus berupaya untuk lebih proaktif dalam melakukan pencegahan dan pemberantasan korupsi. Selain itu, menumbuhkan komitmen serta budaya jujur, transparan, terbuka dan patuh.</div><div><br></div><div>Sejarah Kepemimpinan STIP dari masa ke masa adalah sebagai berikut :</div><div><br></div><div><img src=\"data:image/jpeg;base64,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\" style=\"width: 122px;\" data-filename=\"1-122x150.jpg\">&nbsp; &nbsp;&nbsp;&nbsp;<img src=\"data:image/jpeg;base64,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\" style=\"width: 122px;\" data-filename=\"2-122x150.jpg\"><br></div><div><span style=\"color: rgb(97, 97, 97); font-family: &quot;Sofia Pro&quot;; font-size: 14px;\">&nbsp; &nbsp; &nbsp;1.&nbsp; Kalangie</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style=\"color: rgb(97, 97, 97); font-family: &quot;Sofia Pro&quot;; font-size: 14px;\">2. Capt. M. Wibowo</span></div><div><span style=\"color: rgb(97, 97, 97); font-family: &quot;Sofia Pro&quot;; font-size: 14px; text-align: center;\">&nbsp; &nbsp; &nbsp; &nbsp;1954-1959</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"color: rgb(97, 97, 97); font-family: &quot;Sofia Pro&quot;; font-size: 14px; text-align: center;\">1959-1962</span><span style=\"color: rgb(97, 97, 97); font-family: &quot;Sofia Pro&quot;; font-size: 14px;\"><br></span><br></div><br></div>                                ', '2021-10-14 09:33:28'),
(2, 'Visi Misi', '<div><span style=\"font-size: 1rem;\">Dalam melaksanakan tugas pokok dan fungsinya, STIP telah menetapkan Visi , Misi dan Tujuan&nbsp; sebagai berikut:</span><br></div><div><br></div><div>&nbsp;</div><div><br></div><div>VISI :</div><div><br></div><div>Menjadi institusi pendidikan pelayaran bertaraf internasional yang menghasilkan SDM pelayaran profesional.</div><div><br></div><div>&nbsp;</div><div><br></div><div>TUJUAN :</div><div><br></div><div>Menghasilkan lulusan di bidang pelayaran yang memiliki kompetensi bertaraf internasional.</div><div>Menghasilkan penelitian ilmiah dan pengabdian kepada masyarakat yang bermanfaat bagi perkembangan industri pelayaran.</div><div>Menghasilkan lulusan yang berkarakter industri, berintegritas, dan cinta tanah air.</div><div>Memiliki sarana dan prasarana serta fasilitas pendidikan yang modern dan selalu mengikuti perkembangan industri pelayaran.</div><div>Tercapainya sistem tata kelola administrasi pendidikan dan tata kelola keuangan yang transparan dan akuntabel.</div><div>&nbsp;</div><div><br></div><div>KEBIJAKAN MUTU :</div><div><br></div><div>Meningkatkan mutu pendidikan untuk menghasilkan lulusan yang memiliki ilmu pengetahuan, keahlian serta keterampilan berstandar internasional dan memenuhi persyaratan yang berlaku;</div><div>Meningkatkan jumlah dan mutu penelitian rumpun ilmu pelayaran untuk pengembangan ilmu pengetahuan yang bermanfaat bagi industri pelayaran dan meningkatkan kegiatan pengabdian kepada masyarakat;</div><div>Meningkatkan pembinaan sikap kepemimpinan mental dan moral yang baik serta kesamaptaan fisik yang prima serta peduli terhadap keselamatan, keamanan, efisiensi sesuai perkembangan ilmu pengetahuan, teknologi dan seni serta memenuhi tuntutan kebutuhan;</div><div>Meningkatkan sarana dan prasarana pendidikan serta fasilitas pembentukan sikap secara efektif, efisien sesuai perkembangan ilmu pengetahuan, teknologi dan seni serta memenuhi tuntutan kebutuhan;</div><div>Meningkatkan sistem manajemen mutu untuk menerapkan tata kelola organisasi yang transparan dan akuntabel serta melakukan pengembangan berkesinambungan.</div><div>&nbsp;</div><div><br></div><div>KEBIJAKAN ANTI PENYUAPAN :</div><div><br></div><div>STIP berkomitmen untuk menetapkan, memelihara dan meninjau kebijakan anti penyuapan yang :</div><div><br></div><div>Melarang penyuapan&nbsp;</div><div>Mensyaratkan kepatuhan dengan peraturan perundang-undangan anti penyuapan yang berlaku pada STIP</div><div>Sesuai dengan tujuan STIP</div><div>Menyediakan kerangka kerja untuk menetapkan, meninjau dan mencapai sasaran anti penyuapan</div><div>Termasuk komitmen untuk memenuhi persyaratan system manajemen anti penyuapan</div><div>Mendorong peningkatan kepedulian dengan itikad baik, atau atas dasar keyakinan yang wajar, tanpa takut tindakan balasan</div><div>Termasuk berkomitmen untuk peningkatan berkelanjutan dari system manajemen anti penyuapan&nbsp;</div><div>Menjelaskan wewenang dan kemandirian dari fungsi kepatuhan anti penyuapan</div><div>Menjelaskan konsekuensi jika tidak sesuai dengan kebijakan anti penyuapan</div><div>&nbsp;</div><div><br></div><div>TUJUAN :</div><div><br></div><div>Menghasilkan lulusan di bidang pelayaran yang memiliki kompetensi bertaraf internasional.</div><div>Menghasilkan penelitian ilmiah dan pengabdian kepada masyarakat yang bermanfaat bagi perkembangan industri pelayaran.</div><div>Menghasilkan lulusan yang berkarakter industri, berintegritas, dan cinta tanah air.</div><div>Memiliki sarana dan prasarana serta fasilitas pendidikan yang modern dan selalu mengikuti perkembangan industri pelayaran.</div><div>Tercapainya sistem tata kelola administrasi pendidikan dan tata kelola keuangan yang transparan dan akuntabel.</div><div>&nbsp;</div><div><br></div><div><br></div><div>MISI :</div><div><br></div><div>Meningkatkan penyelengaraan pendidikan untuk penguasaan kompetensi ilmu pelayaran yang bertaraf internasional berbasis metodologi modern dan teknologi informasi;</div><div>Meningkatkan pelaksanaan penelitian ilmiah dan pengabdian kepada masyarakat guna pengembangan industri pelayaran;</div><div>Meningkatkan pembentukan sikap, kepemimpinan, mental dan moral serta kesamaptaan peserta didik untuk memenuhi SDM industri pelayaran yang berkualitas;</div><div>Membangun dan memelihara sarana dan prasarana serta fasilitas pendidikan sesuai dengan perkembangan ilmu pengetahuan dan teknologi dan seni;</div><div>Peningkatan tata kelola administrasi pendidikan yang transparan dan akuntabel berbasis pada sistem manajemen terpadu.</div><div>&nbsp;</div><div><br></div><div>KEBIJAKAN MUTU :</div><div><br></div><div>Meningkatkan mutu pendidikan untuk menghasilkan lulusan yang memiliki ilmu pengetahuan, keahlian serta keterampilan berstandar internasional dan memenuhi persyaratan yang berlaku;</div><div>Meningkatkan jumlah dan mutu penelitian rumpun ilmu pelayaran untuk pengembangan ilmu pengetahuan yang bermanfaat bagi industri pelayaran dan meningkatkan kegiatan pengabdian kepada masyarakat;</div><div>Meningkatkan pembinaan sikap kepemimpinan mental dan moral yang baik serta kesamaptaan fisik yang prima serta peduli terhadap keselamatan, keamanan, efisiensi sesuai perkembangan ilmu pengetahuan, teknologi dan seni serta memenuhi tuntutan kebutuhan;</div><div>Meningkatkan sarana dan prasarana pendidikan serta fasilitas pembentukan sikap secara efektif, efisien sesuai perkembangan ilmu pengetahuan, teknologi dan seni serta memenuhi tuntutan kebutuhan;</div><div>Meningkatkan sistem manajemen mutu untuk menerapkan tata kelola organisasi yang transparan dan akuntabel serta melakukan pengembangan berkesinambungan.</div><div>&nbsp;</div><div><br></div><div>KEBIJAKAN ANTI PENYUAPAN :</div><div><br></div><div>STIP berkomitmen untuk menetapkan, memelihara dan meninjau kebijakan anti penyuapan yang :</div><div><br></div><div>Melarang penyuapan&nbsp;</div><div>Mensyaratkan kepatuhan dengan peraturan perundang-undangan anti penyuapan yang berlaku pada STIP</div><div>Sesuai dengan tujuan STIP</div><div>Menyediakan kerangka kerja untuk menetapkan, meninjau dan mencapai sasaran anti penyuapan</div><div>Termasuk komitmen untuk memenuhi persyaratan system manajemen anti penyuapan</div><div>Mendorong peningkatan kepedulian dengan itikad baik, atau atas dasar keyakinan yang wajar, tanpa takut tindakan balasan</div><div>Termasuk berkomitmen untuk peningkatan berkelanjutan dari system manajemen anti penyuapan&nbsp;</div><div>Menjelaskan wewenang dan kemandirian dari fungsi kepatuhan anti penyuapan</div><div>Menjelaskan konsekuensi jika tidak sesuai dengan kebijakan anti penyuapan</div><div>&nbsp;</div><div><br></div><div>TUJUAN :</div><div><br></div><div>Menghasilkan lulusan di bidang pelayaran yang memiliki kompetensi bertaraf internasional.</div><div>Menghasilkan penelitian ilmiah dan pengabdian kepada masyarakat yang bermanfaat bagi perkembangan industri pelayaran.</div><div>Menghasilkan lulusan yang berkarakter industri, berintegritas, dan cinta tanah air.</div><div>Memiliki sarana dan prasarana serta fasilitas pendidikan yang modern dan selalu mengikuti perkembangan industri pelayaran.</div><div>Tercapainya sistem tata kelola administrasi pendidikan dan tata kelola keuangan yang transparan dan akuntabel.</div>                                                                ', '2021-10-14 09:33:38'),
(3, 'Kebijakan Privasi', '', '2021-10-14 10:40:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akademik`
--

CREATE TABLE `akademik` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akademik`
--

INSERT INTO `akademik` (`id`, `title`, `description`, `created_at`) VALUES
(1, 'Biaya Pendidikan', '', '2021-10-14 11:04:07'),
(2, 'Jadwal Pendaftaran', '', '2021-10-14 11:04:16'),
(3, 'Animo dan Daya Tampung', '', '2021-10-14 11:08:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(0, 'dwdbwj', 'jdnw@gmail.com', 'jfkjnc', 'wdbwjcb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `foto`) VALUES
(1, 'Halaman 1', 'http://localhost/portal/assets/backend/upload/gallery/img1.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `link`
--

CREATE TABLE `link` (
  `id_link` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `foto_link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `link`
--

INSERT INTO `link` (`id_link`, `url`, `foto_link`, `created_at`) VALUES
(3, 'https://www.facebook.com/', 'http://localhost/portal/assets/backend/upload/link/cara-menghapus-akun-facebook.jpeg', '2021-10-12 12:11:40'),
(6, 'https://www.tokopedia.com/', 'http://localhost/portal/assets/backend/upload/link/tokopedia.jpg', '2021-10-12 12:00:03'),
(7, 'https://shopee.co.id/', 'http://localhost/portal/assets/backend/upload/link/d010b985fc1475e559b6db819889703c.png', '2021-10-15 23:37:36'),
(8, 'https://news.detik.com/', 'http://localhost/portal/assets/backend/upload/link/detik-news-og-5eb2143bd541df6ce6491742.jpg', '2021-10-16 01:01:10'),
(10, 'https://twitter.com/', 'http://localhost/portal/assets/backend/upload/link/Twitter-2.jpg', '2021-10-16 01:27:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `modify` varchar(50) NOT NULL,
  `hit` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id_news`, `title`, `description`, `foto`, `modify`, `hit`, `created_at`) VALUES
(1, 'Pangeran Wiliam Senang', '                                                                                                <p>KOMPAS.com - Jika kamu suka tekstur nugget yang padat dan lembut, sebaiknya perhatikan penggunaan bahan untuk membuat nugget dan cara mengolahnya. Salah memilih bahan untuk membuat nugget bisa menghasilkan tekstur nugget kopong dan tidak padat. Selain itu, efek lainnya adalah nugget ambyar saat digoreng. Untuk membuat tekstur nugget sempurna, coba simak enam cara membuat nugget padat dan lembut yang dibagikan oleh Heru Sudrajat, Sous Chef Teraskita Hotel Jakarta kepada Kompas.com, Kamis (14/10/2021) berikut ini.</p><p>KOMPAS.com - Jika kamu suka tekstur nugget yang padat dan lembut, sebaiknya perhatikan penggunaan bahan untuk membuat nugget dan cara mengolahnya. Salah memilih bahan untuk membuat nugget bisa menghasilkan tekstur nugget kopong dan tidak padat. Selain itu, efek lainnya adalah nugget ambyar saat digoreng. Untuk membuat tekstur nugget sempurna, coba simak enam cara membuat nugget padat dan lembut yang dibagikan oleh Heru Sudrajat, Sous Chef Teraskita Hotel Jakarta kepada Kompas.com, Kamis (14/10/2021) berikut ini.<br></p>                                                                                                ', 'http://localhost/portal/assets/backend/upload/news/3208238580.jpg', 'Muhammad Rifki', 10, '2021-10-16 00:00:00'),
(2, 'Akhir pekan, sejumlah provinsi laporkan nol kematian akibat COVID-19', '                                                                                                <p>KOMPAS.com - Jika kamu suka tekstur nugget yang padat dan lembut, sebaiknya perhatikan penggunaan bahan untuk membuat nugget dan cara mengolahnya. Salah memilih bahan untuk membuat nugget bisa menghasilkan tekstur nugget kopong dan tidak padat. Selain itu, efek lainnya adalah nugget ambyar saat digoreng. Untuk membuat tekstur nugget sempurna, coba simak enam cara membuat nugget padat dan lembut yang dibagikan oleh Heru Sudrajat, Sous Chef Teraskita Hotel Jakarta kepada Kompas.com, Kamis (14/10/2021) berikut ini.</p><p>    KOMPAS.com - Jika kamu suka tekstur nugget yang padat dan lembut, sebaiknya perhatikan penggunaan bahan untuk membuat nugget dan cara mengolahnya. Salah memilih bahan untuk membuat nugget bisa menghasilkan tekstur nugget kopong dan tidak padat. Selain itu, efek lainnya adalah nugget ambyar saat digoreng. Untuk membuat tekstur nugget sempurna, coba simak enam cara membuat nugget padat dan lembut yang dibagikan oleh Heru Sudrajat, Sous Chef Teraskita Hotel Jakarta kepada Kompas.com, Kamis (14/10/2021) berikut ini.</p><p>    KOMPAS.com - Jika kamu suka tekstur nugget yang padat dan lembut, sebaiknya perhatikan penggunaan bahan untuk membuat nugget dan cara mengolahnya. Salah memilih bahan untuk membuat nugget bisa menghasilkan tekstur nugget kopong dan tidak padat. Selain itu, efek lainnya adalah nugget ambyar saat digoreng. Untuk membuat tekstur nugget sempurna, coba simak enam cara membuat nugget padat dan lembut yang dibagikan oleh Heru Sudrajat, Sous Chef Teraskita Hotel Jakarta kepada Kompas.com, Kamis (14/10/2021) berikut ini.<br></p><p>                                </p>                                                                                                ', 'http://localhost/portal/assets/backend/upload/news/5e35823d9019b.jpg', 'Rizsky Darmawan', 10, '2021-10-16 15:05:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slideshow`
--

CREATE TABLE `slideshow` (
  `id_slide` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `slideshow`
--

INSERT INTO `slideshow` (`id_slide`, `judul`, `foto`, `created_at`) VALUES
(5, 'Sekolah Pertama Saya Saya', 'http://localhost/portal/assets/backend/upload/slider/img1.jpeg', '2021-10-11 18:08:09'),
(6, 'Sekolah Kedua Saya', 'http://localhost/portal/assets/backend/upload/slider/img2.jpeg', '2021-10-10 05:39:45'),
(10, 'Sekolah Ketiga Saya', 'http://localhost/portal/assets/backend/upload/slider/img3.JPG', '2021-10-11 08:31:26'),
(11, 'Sekolah Keempat Saya', 'http://localhost/portal/assets/backend/upload/slider/img2.jpeg', '2021-10-11 11:51:36'),
(12, 'Sekolah Kelima Saya', 'http://localhost/portal/assets/backend/upload/slider/img1.jpeg', '2021-10-11 11:52:06');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_panjang` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_panjang`, `password`, `status`) VALUES
(1, 'admin', 'Rizsky Darmawan', 'admin', 'admin'),
(2, 'user', 'Muhammad Rifki', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id_link`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indeks untuk tabel `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indeks untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `link`
--
ALTER TABLE `link`
  MODIFY `id_link` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
