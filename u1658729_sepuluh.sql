-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 08 Jul 2024 pada 10.00
-- Versi server: 10.11.6-MariaDB-cll-lve
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1658729_sepuluh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(13, '2023-07-20-081917', 'App\\Database\\Migrations\\TbProduk', 'default', 'App', 1690513521, 1),
(14, '2023-07-20-084755', 'App\\Database\\Migrations\\TbSlider', 'default', 'App', 1690513521, 1),
(15, '2023-07-20-085024', 'App\\Database\\Migrations\\TbProfil', 'default', 'App', 1690513521, 1),
(16, '2023-07-28-035902', 'App\\Database\\Migrations\\TbAktivitas', 'default', 'App', 1690517128, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_aktivitas`
--

CREATE TABLE `tb_aktivitas` (
  `id_aktivitas` int(5) UNSIGNED NOT NULL,
  `nama_aktivitas_in` varchar(200) NOT NULL,
  `nama_aktivitas_en` varchar(200) NOT NULL,
  `foto_aktivitas` varchar(100) NOT NULL,
  `deskripsi_aktivitas_in` text DEFAULT NULL,
  `deskripsi_aktivitas_en` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data untuk tabel `tb_aktivitas`
--

INSERT INTO `tb_aktivitas` (`id_aktivitas`, `nama_aktivitas_in`, `nama_aktivitas_en`, `foto_aktivitas`, `deskripsi_aktivitas_in`, `deskripsi_aktivitas_en`) VALUES
(2, 'Ekspor Cengkeh', 'Clove Export', 'img_sq_3.jpg', 'Perusahaan kami aktif dalam kegiatan ekspor cengkeh, memastikan kualitas yang unggul, dan mengelola logistik secara efisien guna memenuhi permintaan pasar internasional dengan tepat waktu.', 'Our company is active in clove export activities, ensures superior quality, and manages logistics efficiently to meet international market demands in a timely manner.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(5) UNSIGNED NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `foto_artikel` varchar(255) NOT NULL,
  `deskripsi_artikel` longtext NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul_artikel`, `foto_artikel`, `deskripsi_artikel`, `created_at`) VALUES
(1, 'contohhhhhhhhhhhhhhhhhhhh', 'img_sq_4.jpg', '<p>Situjuah, sebuah desa yang teduh di tengah perbukitan Sumatera Barat, memancarkan keindahan alamnya dan kearifan lokal yang kental. Terletak di Kabupaten Lima Puluh Kota, desa ini menawarkan pesona alam yang memikat dan warisan budaya yang menjadi bagian integral dari kehidupan masyarakat Minangkabau. Keindahan Alam Situjuah Desa ini dikelilingi oleh perbukitan yang hijau, sawah-sawah terasering yang indah, dan sungai-sungai yang mengalir dengan tenang.</p>', '2024-06-06 04:29:36'),
(2, 'contoh 22343274t2785925y2923', 'img_sq_8.jpg', '<p>Situjuah, sebuah desa yang teduh di tengah perbukitan Sumatera Barat, memancarkan keindahan alamnya dan kearifan lokal yang kental. Terletak di Kabupaten Lima Puluh Kota, desa ini menawarkan pesona alam yang memikat dan warisan budaya yang menjadi bagian integral dari kehidupan masyarakat Minangkabau. Keindahan Alam Situjuah Desa ini dikelilingi oleh perbukitan yang hijau, sawah-sawah terasering yang indah, dan sungai-sungai yang mengalir dengan tenang.</p>', '2024-06-06 04:29:36'),
(3, 'contoh 3234738643785692814', 'img_sq_8.jpg', '<p>Situjuah, sebuah desa yang teduh di tengah perbukitan Sumatera Barat, memancarkan keindahan alamnya dan kearifan lokal yang kental. Terletak di Kabupaten Lima Puluh Kota, desa ini menawarkan pesona alam yang memikat dan warisan budaya yang menjadi bagian integral dari kehidupan masyarakat Minangkabau. Keindahan Alam Situjuah Desa ini dikelilingi oleh perbukitan yang hijau, sawah-sawah terasering yang indah, dan sungai-sungai yang mengalir dengan tenang.</p>', '2024-06-06 04:29:36'),
(4, 'contoh 42734698538759252', 'img_sq_8.jpg', '<p>Situjuah, sebuah desa yang teduh di tengah perbukitan Sumatera Barat, memancarkan keindahan alamnya dan kearifan lokal yang kental. Terletak di Kabupaten Lima Puluh Kota, desa ini menawarkan pesona alam yang memikat dan warisan budaya yang menjadi bagian integral dari kehidupan masyarakat Minangkabau. Keindahan Alam Situjuah Desa ini dikelilingi oleh perbukitan yang hijau, sawah-sawah terasering yang indah, dan sungai-sungai yang mengalir dengan tenang.</p>', '2024-06-06 04:29:36'),
(5, 'contoh 53275629836598', 'img_sq_8.jpg', '<p>Situjuah, sebuah desa yang teduh di tengah perbukitan Sumatera Barat, memancarkan keindahan alamnya dan kearifan lokal yang kental. Terletak di Kabupaten Lima Puluh Kota, desa ini menawarkan pesona alam yang memikat dan warisan budaya yang menjadi bagian integral dari kehidupan masyarakat Minangkabau. Keindahan Alam Situjuah Desa ini dikelilingi oleh perbukitan yang hijau, sawah-sawah terasering yang indah, dan sungai-sungai yang mengalir dengan tenang.</p>', '2024-06-06 04:29:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(5) UNSIGNED NOT NULL,
  `nama_produk_in` varchar(200) NOT NULL,
  `nama_produk_en` varchar(200) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk_in` text DEFAULT NULL,
  `deskripsi_produk_en` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk_in`, `nama_produk_en`, `foto_produk`, `deskripsi_produk_in`, `deskripsi_produk_en`) VALUES
(2, 'Cengkih', 'Cloves', 'img_sq_3.jpg', 'Cengkih atau cengkeh adalah kuncup bunga kering beraroma dari keluarga pohon Myrtaceae. Cengkih adalah tanaman asli Indonesia, banyak digunakan sebagai bumbu masakan pedas di negara-negara Eropa, dan sebagai bahan utama rokok kretek khas Indonesia.', 'Cloves or cloves are the fragrant dried flower buds of the Myrtaceae tree family. Cloves are native to Indonesia, widely used as a spice for spicy dishes in European countries, and as the main ingredient for Indonesian clove cigarettes.'),
(3, 'Pala', 'Nutmeg', 'img_sq_8.jpg', 'Pala merupakan tumbuhan berupa pohon yang berasal dari kepulauan Banda, Maluku. Akibat nilainya yang tinggi sebagai rempah-rempah, buah dan biji pala telah menjadi komoditas perdagangan yang penting sejak masa Romawi.', 'Nutmeg is a plant in the form of a tree originating from the Banda Islands, Maluku. Due to its high value as a spice, nutmeg fruit and seeds have been important trade commodities since Roman times.'),
(4, 'Jintan putih', 'Cumin', 'img_sq_4.jpg', 'Jintan Putih merupakan tumbuhan berbunga dari famili Apiaceae yang berasal dari daerah Laut Tengah bagian timur sampai India bagian timur.', 'Cumin is a flowering plant from the Apiaceae family originating from the eastern Mediterranean region to eastern India.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(5) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `logo_perusahaan` varchar(100) NOT NULL,
  `deskripsi_perusahaan_in` text DEFAULT NULL,
  `deskripsi_perusahaan_en` text DEFAULT NULL,
  `deskripsi_kontak_in` text DEFAULT NULL,
  `deskripsi_kontak_en` text DEFAULT NULL,
  `link_maps` text DEFAULT NULL,
  `link_whatsapp` text DEFAULT NULL,
  `favicon_website` varchar(100) NOT NULL,
  `title_website` varchar(100) NOT NULL,
  `foto_utama` varchar(100) NOT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `teks_footer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `username`, `password`, `nama_perusahaan`, `logo_perusahaan`, `deskripsi_perusahaan_in`, `deskripsi_perusahaan_en`, `deskripsi_kontak_in`, `deskripsi_kontak_en`, `link_maps`, `link_whatsapp`, `favicon_website`, `title_website`, `foto_utama`, `alamat`, `no_hp`, `email`, `teks_footer`) VALUES
(1, 'user', 'user', ' JATRAM CANDY ', 'Logo_PT-NAKAM-Foods-Indonesia_16122023081311.png', '<p>sebuah perusahaan terpercaya yang mengkhususkan diri dalam perdagangan rempah-rempah premium Indonesia. Dengan penekanan kuat pada kualitas dan beragam rasa yang istimewa, kami adalah tujuan utama bagi importir yang mencari sumber rempah-rempah Indonesia berkualitas tinggi untuk usaha perdagangan besar. Di Rempah-Rempah Indonesia (PT NAKAM Foods Indonesia), kami bangga akan pilihan rempah-rempah Indonesia kami yang luas, termasuk kayu manis, cengkeh, pala, kapulaga, dan banyak lagi. Harta karun aromatik ini bersumber langsung dari petani dan petani lokal tepercaya yang telah membudidayakan rempah-rempah ini selama beberapa generasi. Komitmen kami terhadap keaslian dan kesinambungan memastikan bahwa produk kami memiliki kualitas terbaik, menghadirkan esensi sejati masakan Indonesia. Kami memahami permintaan unik dari perdagangan besar, dan tim kami yang berdedikasi berpengalaman dalam memenuhi kebutuhan importir.</p>', '<p>a trusted company specializing in the trading of premium Indonesian spices. With a strong emphasis on quality and a vast array of exquisite flavors, we are the go-to destination for importers seeking to source high-quality Indonesian spices for big trading ventures. At Indonesia Spices (PT NAKAM Foods Indonesia), we pride ourselves on our extensive selection of Indonesian spices, including cinnamon, cloves, nutmeg, cardamom, and more. These aromatic treasures are sourced directly from trusted local farmers and growers who have been cultivating these spices for generations. Our commitment to authenticity and sustainability ensures that our products are of the highest quality, delivering the true essence of Indonesian cuisine. We understand the unique demands of big trading, and our dedicated team is well-versed in catering to the needs of importers.</p>', '<p>Provinsi Sumatra Barat</p>', '<p>West Sumatera Province</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4046040.312635006!2d108.0530452!3d-7.9771059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629c21940f685%3A0xce6adb8a6aba4f5!2sNakam%20Foods%20Indonesia!5e0!3m2!1sid!2sid!4v1691128148640!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://wa.me/+6282131222332', 'Favicon_PT-NAKAM-Foods-Indonesia_22082023083620.png', ' JATRAM CANDY - UMKM Binaan Kadin Kota Malang', 'PT-NAKAM-Foods-Indonesia_22082023082132.jpg', '<p>West Sumatera Province</p>', '+62 821 3122 2332', 'nakamfoodsindonesia@gmail.com', 'All Rights Reserved. Designed with love by Me');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id_slider` int(5) UNSIGNED NOT NULL,
  `file_foto_slider` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data untuk tabel `tb_slider`
--

INSERT INTO `tb_slider` (`id_slider`, `file_foto_slider`) VALUES
(6, '-JATRAM-CANDY-_18122023153147.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_aktivitas`
--
ALTER TABLE `tb_aktivitas`
  ADD PRIMARY KEY (`id_aktivitas`);

--
-- Indeks untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_aktivitas`
--
ALTER TABLE `tb_aktivitas`
  MODIFY `id_aktivitas` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id_slider` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
