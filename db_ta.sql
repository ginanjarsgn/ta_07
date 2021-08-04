-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Agu 2021 pada 08.45
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akomodasis`
--

CREATE TABLE `akomodasis` (
  `id_akomodasi` bigint(20) UNSIGNED NOT NULL,
  `nama_akomodasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `akomodasis`
--

INSERT INTO `akomodasis` (`id_akomodasi`, `nama_akomodasi`, `alamat`, `fasilitas`, `deskripsi`, `gambar`) VALUES
(21, 'Hotel Op. Herti', 'Jalan Pemandian No.2 Lumban Silintong- Tobasa-Sumatera Utara, Balige,', 'Wifi, dan Kamar Hotel', 'Terletak di Balige, 600 meter dari Pantai Lumban Bul Bul, Hotel Ompu Herti menawarkan akomodasi dengan restoran, tempat parkir pribadi gratis, taman, dan teras. Akomodasi ini menawarkan resepsionis 24 jam, layanan antar-jemput, layanan kamar, dan WiFi gratis di seluruh areanya. Hotel ini menawarkan sarapan prasmanan atau halal. Bandara terdekat adalah Bandara Internasional Silangit, 13 km dari Hotel Ompu Herti.', '1624986456.jpg'),
(22, 'Hotel Marsaringar', 'Jalan Gereja No. 32, Balige, Danau Toba, Sumatera Utara', 'Wifi, dan Kamar Hotel', 'Terletak di Jalan Raja Bonanionan, Pardede Onan, Balige, Kabupaten Toba Samosir, Sumatera Utara, Hotel Marsaringar Balige menyediakan pelayanan yang ramah dan fasilitas modern. Kami menjamin masa menginap yang menyenangkan bagi para tamu dengan layanan kami yang personal dan berbagai macam fasilitas modern yang tersedia di hotel kami.', '1624986504.jpg'),
(23, 'Lago Hotel', 'JL Sibolahotang SAS Balige Kec. Balige Kab. Toba Samosir', 'Wifi, dan Kamar Hotel', 'Menghadap ke pantai, Lago Hotel and Resto menawarkan akomodasi bintang 3 di Balige dan memiliki restoran, bar, dan taman. Properti ini memiliki area pantai pribadi, serta teras. Properti ini menyediakan resepsionis 24 jam, transportasi bandara, layanan kamar, dan WiFi gratis. Para tamu di hotel dapat menikmati sarapan halal.', '1624986568.jpg'),
(24, 'Labersa Hotel', 'Jl. Labersa Ujung Balige', 'Wifi, dan Kolam Renang', 'Labersa Grand Hotel & Convention Center terletak di Pekanbaru, serta berjarak 17 menit berkendara dari Boomara Waterpark dan 800 meter dari Labersa Golf Park. Hotel bintang 5 ini menyediakan penginapan yang nyaman dengan kolam renang dan resepsionis 24 jam. Kamu juga bisa menikmati parkir gratis dan akses WiFi gratis di kamar.  Kamarnya yang luas ditata apik dan menyuguhkan jendela berukuran besar yang memberikan cahaya matahari alami. Kamu juga bisa menikmati fasilitas minibar yang disediakan air mineral gratis, lemari es, dan TV layar datar di dalam kamar. Di kamar mandi dalamnya terdapat bathtub dan shower lengkap dengan rangkaian peralatan mandi gratis, jubah mandi, dan handuk.  Restoran Croquette menyajikan masakan Indonesia dan internasional sepanjang hari, sedangkan restoran Orient menyajikan masakan China untuk makan siang dan makan malam. Buffet BBQ juga dihidangkan di akhir minggu. Pondok Patin H.M Yunus yang berlokasi 5,9 km dari hotel juga bisa kamu coba.  Nikmati pijat relaksasi di spa hotel dan juga sauna untuk melepas penat setelah seharian beraktivitas. Lapangan tenis outdoor juga tersedia di hotel. Layanan laundry dengan biaya tambahan dan fasilitas penitipan bagasi gratis bisa kamu nikmati di hotel.  Labersa Grand Hotel & Convention Center berlokasi sejauh 15 menit berkendara dari Labersa Water Park Riau Fantasy, sedangkan PekanBaru Mall berjarak 13,3 km dari hotel. Bandara Internasional Sultan Syarif Kasim II yang merupakan bandara terdekat berjarak 7,9 km dari hotel.', '1624986670.jpg'),
(25, 'Hotel Nabasa', 'Jl. Nabasa Balige', 'Wifi, dan Kamar Hotel', 'Hotel Nabasa bagus.', '1622447725.jpg'),
(26, 'Hotel Dizon', 'Jl. Dizon Balige', 'Wifi, dan Kamar Hotel', 'Hotel Dizon bagus.', '1622447767.jpg'),
(27, 'Mutiara Hotel', 'Jl. Mutiara Balige', 'Wifi, Kolam Renang  dan Restoran', 'Mutiara Hotel bagus', '1622447805.jpg'),
(28, 'Serena Uli Hotel', 'Jl. Sere Nauli Ujung Balige', 'Wifi, dan Kamar Hotel', 'Serena Uli Hotel bagus.', '1622447844.png'),
(29, 'Tiara Bunga Hotel', 'Jl. Tiara Balige', 'Wifi, dan Kolam Renang', 'Tiara Bunga Hotel bagus.', '1622447873.jpg'),
(30, 'Hotel Sumatera', 'Jl. Sumatera Balige', 'Wifi, dan Kamar Hotel', 'Hotel Sumatra bagus.', '1622447928.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cinderamatas`
--

CREATE TABLE `cinderamatas` (
  `id_cinderamata` bigint(20) UNSIGNED NOT NULL,
  `nama_toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_cinderamata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cinderamatas`
--

INSERT INTO `cinderamatas` (`id_cinderamata`, `nama_toko`, `alamat`, `jenis_cinderamata`, `deskripsi`, `gambar`) VALUES
(27, 'Toko Batikta', 'Jl. Pematang Siantar No.2 Balige,Sumatera Utara', 'Ulos dan Batik', 'Batikta adalah toko cinderamata yang terletak di Jalan Pematang Siantar No.2 Balige,Sumatera Utara. Batikta memiliki konsep design  Batik yang diciptakan oleh kerjasama tim yang sudah ahli pada bidang karya seni desain batik. Menpar juga sudah meresmikan batikta sebagai bentuk apresiasi atas karya seni pemuda yang mencoba untuk membangun kampung halaman dibidang pariwisata. Menpar berharap bahwa Batikta dapat berkembang lebih kreatif di Balige atau Danau Toba dan menjadi sarana kemampuan pengrajin batak dalam menghasilkan karya seni.', '1624934962.jpg'),
(29, 'Toko Dewasti Ulos', 'Balige, Kabupaten Toba', 'Ulos', 'Toko Dewasti ulos beradda di Balige, Kabupaten Toba. Toko ini menyediakan berbagai jenis ulos batak. Ulos yang beragam menjadi daya  tarik toko ulos ini. Pariwisata Toba berharap bahwa toko ulos ini dapat lebih berkembang dan memberikan dampak perkembangan terhadapa pariwisata di Toba sekaligus meningkatkan minat wisatawan domestic atau mancanegara dalam mempelajari kebudayaan di daerah Balige', '1624935258.jpg'),
(30, 'Toko Hello Toba', 'Jalan Lintas Balige, Kabupaten Toba', 'Ulos dan Batik', 'Hello Toba berada pada jalan lintas Balige, Kabupaten Toba, provinsi Sumatera Utara. Helllo Toba menjadi sebuah tempat yang dijadikan sebagai perkumpulan para pegiat ekonomi kreatif yang berada pada daerah Danau Toba. Adanya Hello Toba ini sangat berpengaruh terhadap kemajuan ekonomi kreatif di daerah danau toba. Salah satu kreatifitas yang hadir pada Hello Toba yaitu Ulos yang dijadikan menjadi sebuah produk seperti Tas atau Baju.', '1624935298.jpg'),
(31, 'Toko Karolina Ulos', 'Jalan Lintas Balige', 'Ulos', 'Karolina Ulos terletak di jalan lintas Balige. Toko ini menyediakan beraneka ragam jenis ulos. Diharapkan toko cinderamata ini dapat menjadi salah satu pemberi peningkatan pada pariwisata Toba.', '1624935339.jpg'),
(32, 'Toko Maria Ulos', 'Jalan Lintas Balige', 'Ulos', 'Maria Ulos merupakan Toko yang menyediakan ulos yang dengan melakukan penenunan sendiri. Maria Ulos terletak di Jalan lintas Balige. Toko ini menyediakan berbagai jenis ulos yang beragam sehingga dapat menjadi peningkat daya tarik wisatawan dalam mempelajari dan memahami adat dan kebudayaan yang berkembang pada masyarakat di kabupaten Toba', '1624935393.jpg'),
(33, 'Toko Marluga Art', 'Jl. Tarutung Hinalang, Balige, Kabupaten Toba', 'Ulos dan Batik', 'Marluga Art terletak di Jl. Tarutung Hinalang, Balige, Kabupaten Toba. Marluga art merupakan perkumpulan para seniman Bapak yang bergerak dibidang seni kayu dengan ragam yang menggabungkan antara design yang modern dengan yang tradisional tanpa mengurangi esensi didalamnya.', '1624935433.jpg'),
(34, 'Toko Martha Ulos', 'Jalan Lintas Balige', 'Ulos', 'Martha Ulos terletak di jalan lintas Balige. Toko ini menyediakan beraneka ragam jenis ulos. Diharapkan toko cinderamata ini dapat menjadi salah satu pemberi peningkatan pada pariwisata Toba. Dinas Pariwisata berharap bahwa toko ini dapat berkembang lagi sehingga dapat menjadi salah satu daya tarik pariwisata di Toba bagian cinderamata nya.', '1624935469.jpg'),
(35, 'Toko Nanda Ulos', 'Jl. Pematang Siantar no.2 simpang sibulele Balige, Toba.', 'Ulos dan Batik', 'Nanda Ulos merupakan toko cinderamata di jl. Pematang Siantar no.2 simpang sibulele Balige, Toba. Toko cinderamata ini menyediakan karya berupa songket atau bahkan jas/kemeja dan dress. Nanda ulos menggunakan tenun tangan dengan pewarna alami yang dapat mengkreasikan motif ulos Batak Toba. Aneka Cinderamata tersedia di tempat ini berupa dasi, topi, stola dan sortali yang memiliki bahan dari ulos.', '1624935513.jpg'),
(36, 'Toko Op. Caca', 'Balige, Kabupaten Toba.', 'Ulos', 'Toko Op. caca ulos berdda di Balige, Kabupaten Toba. Toko ini menyediakan berbagai jenis ulos batak. Ulos yang beragam menjadi daya  tarik toko ulos ini. Pariwisata Toba berharap bahwa toko ulos ini dapat lebih berkembang dan memberikan dampak perkembangan terhadapa pariwisata di Toba sekaligus meningkatkan minat wisatawan domestic atau mancanegara dalam mempelajari kebudayaan di daerah Balige.', '1624935551.jpg'),
(37, 'Toko T.B. Silalahi Galery', 'Jl. Dr. TB. Silalahi No.88, Silalahi Pagar Batu, Balige, Kabupaten Toba Samosir, Sumatera Utara', 'Ulos dan Batik', 'TB. Silalahi Galery terletak di Jl. Dr. TB. Silalahi No.88, Silalahi Pagar Batu, Balige, Kabupaten Toba Samosir, Sumatera Utara 22312. TB Silalahi merupakan sebuah lembaga yang Non-profil yang memiliki tujuan pada bidang agama, sosial dan  kemanusiaan. TB. Silalahi merupakan museum yang berisikan inspirasi berupa karya seni yang dipamerkan. Terdapat cinderamata yang dapat ditemukan dari kunjungan ke TB. Silalahi', '1624935604.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum`
--

CREATE TABLE `forum` (
  `id_forum` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `jenis` varchar(222) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `forum`
--

INSERT INTO `forum` (`id_forum`, `judul`, `user_id`, `id`, `jenis`, `created_at`, `updated_at`) VALUES
(28, 'tempat wisata yang sangat bagus', 12, 70, 'wisata', '2021-05-28 02:30:38', '2021-05-28'),
(29, 'Tempat yang sangat nyaman', 12, 21, 'akomodasi', '2021-05-28 02:35:33', '2021-05-28'),
(30, 'hmm', 12, 35, 'kuliner', '2021-06-02 02:34:15', '2021-06-02'),
(31, 'haii', 11, 71, 'wisata', '2021-06-22 21:46:09', '2021-06-23'),
(32, 'Terimakasih atas informasinya', 11, 34, 'kuliner', '2021-06-28 01:27:07', '2021-06-28'),
(33, 'hahay', 12, 34, 'kuliner', '2021-06-28 08:26:26', '2021-06-28'),
(34, 'Simarjarunjung sangat bagus!', 11, 80, 'wisata', '2021-06-30 00:08:49', '2021-06-30'),
(35, 'Pantai ini sangat bagus', 12, 71, 'wisata', '2021-06-30 00:21:00', '2021-06-30'),
(36, 'Hotel ini sangat bagus, saya suka', 12, 22, 'akomodasi', '2021-07-01 01:46:35', '2021-07-01'),
(37, 'Ulos sangat bagus', 12, 31, 'cinderamata', '2021-07-01 01:52:54', '2021-07-01'),
(38, 'saya setuju dengan anda', 11, 70, 'wisata', '2021-07-01 11:43:56', '2021-07-01'),
(39, 'Sangat nyaman, Terimakasih banyak.', 10, 23, 'akomodasi', '2021-07-01 18:20:32', '2021-07-02'),
(40, 'saya suka arum jeram', 8, 75, 'wisata', '2021-07-01 20:52:14', '2021-07-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasis`
--

CREATE TABLE `informasis` (
  `id_pengumuman` bigint(20) UNSIGNED NOT NULL,
  `nama_pengumuman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `informasis`
--

INSERT INTO `informasis` (`id_pengumuman`, `nama_pengumuman`, `deskripsi`, `gambar`) VALUES
(1, 'Hari Libur Nasional', 'Selamat Liburan ya', '1616905762.jpg'),
(2, 'Pertandingan bola basket', 'Bola basket menjadi salah satu pilihan untuk berolahraga agar tubuh menjadi bugar', '1616905875.jpg'),
(4, 'Pertandingan Bola Volly', 'Bola Volly merupakan pertandingan yang beregu dan dapat menjadikan kekompakan pada setiap orang.', '1616225711.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `konten` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_forum` int(11) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `konten`, `user_id`, `id_forum`, `parent`, `created_at`, `updated_at`) VALUES
(18, 'hahaay', 7, 28, 0, '2021-05-28 02:31:42', '2021-05-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuliners`
--

CREATE TABLE `kuliners` (
  `id_kuliner` bigint(20) UNSIGNED NOT NULL,
  `nama_kuliner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_makanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kuliners`
--

INSERT INTO `kuliners` (`id_kuliner`, `nama_kuliner`, `alamat`, `jenis_makanan`, `deskripsi`, `gambar`) VALUES
(34, 'Cafe Hollywood', 'Jl.Tarutung Hinalang Balige, Balige, Sumatera Utara, Indonesia', 'Restaurant', 'Hollywood cafe menjadi tempat nongkrong di Toba yang tak boleh kalian lewatkan. Hollywood cafe mempunyai suasana asik yang membuat kita ketagihan untuk kembali kesana. Kita akan merasakan suasana yang nyaman dan friendly. Pengunjung juga bisa internetan pakai WiFi gratis. Harga juga masih normal dan standar. Menu yang paling banyak diburu adalah ayam kremes, saksang dan gado gado juga pecal.', '1624983933.jpg'),
(35, 'Bas Cafe', 'Balige, Sumatera Utara, Indonesia', 'Cafe', 'Banyak destinasi wisata yang populer dan menarik di Toba, Sumatera Utara. Selain memanjakan mata, Toba memiliki tempat-tempat hangout yang nyaman dan seru. Banyak cafe unik dan kekinian yang menyediakan spot foto yang instragramable sehingga membuat betah pengunjung salah satunya adalah Bass Cafe. Cafe ini memiliki spot-spot foto yang instagenik. Hal ini dikarenakan perkembangan kota Toba yang semakin pesat sehingga sektor wisata dan kuliner semakin berkembang.', '1624983973.jpg'),
(36, 'Daijo Cafe', 'Jl. Sm Raja, Aruan, Lagu Boti, Kabupaten Toba', 'Cafe', 'Cafe ini mengusung tema yang tak lepas dari warna hijau, ciri utama garden atau taman. Di depan, Anda dapat berfoto dengan background tanaman hias hijau yang cantik. Di dalam, ruangan dibuat sehangat mungkin dengan perabotan kayu. Hiasan tanaman di dinding bermacam ukuran menggantung di langit-langit, menambah suasana hangat. Ada banyak menu makanan dan minuman yang ditawarkan.', '1624984033.jpg'),
(37, 'FoodPedia', 'Foodpedia Balige. Jl. Dr. TB. Silalahi, Silalahi Pagar Batu, Balige, Kabupaten Toba Samosir', 'Restaurant', 'Cafe bertemakan industrial ini menyuguhkan keindahan yang keren dan modern. Nuansa hitam dan putih yang dipadukan dengan warna coklat dari furnitur kayu, memberikan suasana yang hangat dan elegan.', '1624984180.jpg'),
(38, 'Hutanta Cafe', 'Jl. Hutanta Balige', 'Cafe', 'Hutanta Cafe merupakan tempat yang sangat diminati oleh wisatawan untuk bersantai.', '1622446747.jpg'),
(39, 'Lagos Cafe', 'JL Sibolahotang SAS Balige Kec. Balige Kab. Toba Samosir Pantai Lumban Bulbul Balige', 'Cafe', 'Cafe ini menawarkan suasana modern minimalis, namun dipadukan dengan gaya tradisional. Cafe ini menyajikan makanan timur dan barat. Interior didekorasi dengan kursi dan meja kayu berwarna putih.  Ada banyak fasilitas yang disediakan, yaitu parkiran, meja, dan Wi-Fi. Cafe ini terletak di jalan Bul-bul. Biasanya cafe ini beroperasi setelah jam kerja, yaitu 16.00 WIB.', '1624985034.jpg'),
(40, 'Pizza Andaliman', 'Jl. Balige andaliman', 'Restaurant', 'Pizza Andaliman merupakan tempat yang baik', '1622446871.jpg'),
(41, 'Smile Cafe', 'Jl. Smile Cafe Balige', 'Cafe', 'Smile Cafe tempat yang indah', '1622446926.jpg'),
(42, 'Pizza Etnik Toba', 'Jl. Etnik Toba', 'Restaurant', 'Pizza Etnik Toba enak', '1622446957.jpg'),
(43, 'Windy Cafe', 'Jl. Ompu Raja Hutapea', 'Cafe', 'Cafe ini mengusung tema unik yaitu dapur. Tempat ngopi yang satu ini dijamin tidak kalah seru dengan tempat ngopi lainnya. Ada banyak hiasan unik di ruangan ini. Lemari kayu dihiasi dengan perabotan dapur yang tertata rapi.Kopi yang di hidangkan adalah berbagai macam kopi dari luar maupun dalam negeri dengan makanan khas Indonesia dan juga makanan barat. dan beroperasi mulai pukul 08.00-20.00 WIB, sedangkan di hari Minggu beroperasi pukul 08.00-19.00 WIB.', '1624983817.jpg'),
(44, 'Fly Over', 'Jl. Fly Over Balige', 'Rumah Makan', 'Fly Over Balige merupakan tempat yang bagus', '1622447026.jpg'),
(45, 'Greens Cafe', 'Jl. Gereja No. 32, Balige', 'Cafe', 'Tempat Nongkrongnya Anak Muda, Keluarga, dan sebagainya Makanan Sehat, Halal, Lezat dengan harga yang terjangkau.  Pengunjung juga bisa internetan pakai WiFi gratis. Harga juga masih normal dan standar. Menu yang paling banyak diburu adalah ikan nila tauco dan ayam goreng cabe ijo', '1624985146.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2021_03_01_144948_create_kuliners_table', 1),
(8, '2021_03_01_150056_create_wisatas_table', 1),
(10, '2021_03_05_044405_create_kuliners_table', 2),
(12, '2021_03_06_052301_create_cinderamatas_table', 3),
(13, '2021_03_06_060815_create_akomodasis_table', 4),
(14, '2021_03_06_063318_create_infos_table', 5),
(16, '2021_03_06_070104_create_informasis_table', 6),
(17, '2021_03_18_194447_create_ratings_table', 7),
(18, '2021_03_18_194741_create_posts_table', 7),
(19, '2021_03_24_123536_create_posts_table', 8),
(20, '2021_03_24_162639_create_posts_table', 9),
(22, '2021_03_26_065909_alter_post_table', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses` bigint(20) NOT NULL DEFAULT 0,
  `fasilitas` bigint(20) NOT NULL DEFAULT 0,
  `pelayanan` bigint(20) NOT NULL DEFAULT 0,
  `jumlah_vote` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `name`, `jenis`, `akses`, `fasilitas`, `pelayanan`, `jumlah_vote`, `created_at`, `updated_at`) VALUES
(66, 'Bukit Gibeon', 'wisata', 14, 11, 12, 3, '2021-05-28 01:27:37', '2021-08-03 21:07:31'),
(67, 'Cafe Hollywood', 'kuliner', 8, 10, 7, 2, '2021-05-28 02:32:48', '2021-08-03 21:09:28'),
(68, 'Toko Batikta', 'toko', 15, 13, 14, 3, '2021-05-28 02:33:19', '2021-08-03 21:12:29'),
(69, 'Hotel Op. Herti', 'akomodasi', 20, 18, 18, 4, '2021-05-28 02:34:00', '2021-08-03 21:31:28'),
(70, 'Pantai Lumban Bul-Bul', 'wisata', 12, 15, 14, 3, '2021-05-31 00:30:51', '2021-08-03 21:23:38'),
(71, 'Pasir Putih Parparean', 'wisata', 15, 11, 13, 3, '2021-05-31 00:31:32', '2021-08-03 21:24:01'),
(72, 'Taman Eden 100', 'wisata', 14, 13, 13, 3, '2021-05-31 00:32:00', '2021-08-03 21:24:17'),
(73, 'Air Terjun Situmurun', 'wisata', 20, 17, 19, 4, '2021-05-31 00:32:30', '2021-08-03 21:26:03'),
(75, 'Pantai Ragi Hotang Meat', 'wisata', 13, 14, 12, 3, '2021-05-31 00:33:33', '2021-08-03 21:26:22'),
(76, 'Geopark Kaldera Toba', 'wisata', 5, 5, 5, 1, '2021-05-31 00:33:59', '2021-08-03 20:47:58'),
(77, 'Tambunan Sunset Beach', 'wisata', 12, 14, 14, 3, '2021-05-31 00:34:42', '2021-08-03 21:26:40'),
(78, 'Bas Cafe', 'kuliner', 13, 14, 14, 3, '2021-05-31 00:35:51', '2021-08-03 21:27:00'),
(79, 'Daijo Cafe', 'kuliner', 15, 12, 10, 3, '2021-05-31 00:36:30', '2021-08-03 21:27:15'),
(80, 'FoodPedia', 'kuliner', 13, 14, 14, 3, '2021-05-31 00:38:09', '2021-08-03 21:27:31'),
(81, 'Hutanta Cafe', 'kuliner', 10, 14, 14, 3, '2021-05-31 00:39:07', '2021-08-03 21:10:24'),
(82, 'Lagos Cafe', 'kuliner', 11, 14, 11, 3, '2021-05-31 00:40:07', '2021-08-03 21:27:50'),
(83, 'Pizza Andaliman', 'kuliner', 12, 14, 12, 3, '2021-05-31 00:41:11', '2021-08-03 21:28:07'),
(84, 'Smile Cafe', 'kuliner', 13, 10, 13, 3, '2021-05-31 00:42:06', '2021-08-03 21:28:24'),
(85, 'Pizza Etnik Toba', 'kuliner', 15, 12, 14, 3, '2021-05-31 00:42:37', '2021-08-03 21:11:19'),
(86, 'Windy Cafe', 'kuliner', 12, 14, 12, 3, '2021-05-31 00:43:11', '2021-08-03 21:28:39'),
(87, 'Fly Over', 'kuliner', 12, 15, 14, 3, '2021-05-31 00:43:46', '2021-08-03 21:28:54'),
(88, 'Greens Cafe', 'kuliner', 14, 12, 11, 3, '2021-05-31 00:44:18', '2021-08-03 21:29:09'),
(90, 'Toko Dewasti Ulos', 'toko', 20, 14, 16, 4, '2021-05-31 00:46:34', '2021-08-03 21:29:30'),
(91, 'Toko Hello Toba', 'toko', 10, 8, 7, 2, '2021-05-31 00:47:07', '2021-08-03 21:29:47'),
(92, 'Toko Karolina Ulos', 'toko', 13, 12, 14, 3, '2021-05-31 00:47:41', '2021-08-03 21:30:01'),
(93, 'Toko Maria Ulos', 'toko', 12, 14, 12, 3, '2021-05-31 00:48:13', '2021-08-03 21:13:26'),
(94, 'Toko Marluga Art', 'toko', 14, 13, 13, 3, '2021-05-31 00:49:04', '2021-08-03 21:30:17'),
(95, 'Toko Martha Ulos', 'toko', 15, 12, 14, 3, '2021-05-31 00:49:51', '2021-08-03 21:30:31'),
(96, 'Toko Nanda Ulos', 'toko', 12, 14, 15, 3, '2021-05-31 00:50:57', '2021-08-03 21:30:44'),
(97, 'Toko Op. Caca', 'toko', 5, 5, 5, 1, '2021-05-31 00:51:46', '2021-08-03 20:59:37'),
(98, 'Toko T.B. Silalahi Galery', 'toko', 11, 14, 13, 3, '2021-05-31 00:52:51', '2021-08-03 21:30:58'),
(99, 'Hotel Marsaringar', 'akomodasi', 15, 13, 14, 3, '2021-05-31 00:54:00', '2021-08-03 21:31:15'),
(100, 'Lago Hotel', 'akomodasi', 14, 14, 14, 3, '2021-05-31 00:54:25', '2021-08-03 21:15:14'),
(101, 'Labersa Hotel', 'akomodasi', 12, 15, 10, 3, '2021-05-31 00:54:54', '2021-08-03 21:31:43'),
(102, 'Hotel Nabasa', 'akomodasi', 15, 12, 12, 3, '2021-05-31 00:55:25', '2021-08-03 21:18:06'),
(103, 'Hotel Dizon', 'akomodasi', 12, 14, 12, 3, '2021-05-31 00:56:07', '2021-08-03 21:31:57'),
(104, 'Mutiara Hotel', 'akomodasi', 15, 11, 14, 3, '2021-05-31 00:56:46', '2021-08-03 21:32:11'),
(105, 'Serena Uli Hotel', 'akomodasi', 9, 9, 9, 2, '2021-05-31 00:57:24', '2021-08-03 21:18:36'),
(106, 'Tiara Bunga Hotel', 'akomodasi', 15, 13, 11, 3, '2021-05-31 00:57:53', '2021-08-03 21:32:25'),
(107, 'Hotel Sumatera', 'akomodasi', 7, 9, 9, 2, '2021-05-31 00:58:48', '2021-08-03 21:32:39'),
(116, 'Arum Jeram Parhitean', 'wisata', 9, 10, 9, 2, '2021-08-03 21:43:06', '2021-08-03 21:45:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating` float NOT NULL,
  `rateable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rateable_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ratings`
--

INSERT INTO `ratings` (`id`, `created_at`, `updated_at`, `rating`, `rateable_type`, `rateable_id`, `user_id`) VALUES
(284, '2021-08-03 20:46:39', '2021-08-03 20:46:39', 4, 'App\\Models\\Post', 66, 12),
(285, '2021-08-03 20:47:02', '2021-08-03 20:47:02', 4.66667, 'App\\Models\\Post', 70, 12),
(286, '2021-08-03 20:47:19', '2021-08-03 20:47:19', 3.66667, 'App\\Models\\Post', 71, 12),
(287, '2021-08-03 20:47:32', '2021-08-03 20:47:32', 4.66667, 'App\\Models\\Post', 73, 12),
(289, '2021-08-03 20:47:58', '2021-08-03 20:47:58', 5, 'App\\Models\\Post', 76, 12),
(290, '2021-08-03 20:48:39', '2021-08-03 20:48:39', 4.33333, 'App\\Models\\Post', 67, 12),
(291, '2021-08-03 20:48:50', '2021-08-03 20:48:50', 5, 'App\\Models\\Post', 78, 12),
(292, '2021-08-03 20:49:04', '2021-08-03 20:49:04', 4.33333, 'App\\Models\\Post', 79, 12),
(293, '2021-08-03 20:49:24', '2021-08-03 20:49:24', 4, 'App\\Models\\Post', 81, 12),
(294, '2021-08-03 20:49:39', '2021-08-03 20:49:39', 5, 'App\\Models\\Post', 82, 12),
(295, '2021-08-03 20:49:53', '2021-08-03 20:49:53', 3.33333, 'App\\Models\\Post', 83, 12),
(296, '2021-08-03 20:50:07', '2021-08-03 20:50:07', 4.33333, 'App\\Models\\Post', 85, 12),
(297, '2021-08-03 20:50:27', '2021-08-03 20:50:27', 4, 'App\\Models\\Post', 86, 12),
(298, '2021-08-03 20:50:46', '2021-08-03 20:50:46', 4.33333, 'App\\Models\\Post', 87, 12),
(299, '2021-08-03 20:52:09', '2021-08-03 20:52:09', 3.66667, 'App\\Models\\Post', 66, 11),
(300, '2021-08-03 20:52:27', '2021-08-03 20:52:27', 4.66667, 'App\\Models\\Post', 70, 11),
(301, '2021-08-03 20:52:42', '2021-08-03 20:52:42', 5, 'App\\Models\\Post', 72, 11),
(302, '2021-08-03 20:52:56', '2021-08-03 20:52:56', 4.66667, 'App\\Models\\Post', 73, 11),
(303, '2021-08-03 20:53:15', '2021-08-03 20:53:15', 4, 'App\\Models\\Post', 75, 11),
(304, '2021-08-03 20:53:44', '2021-08-03 20:53:44', 4.33333, 'App\\Models\\Post', 77, 11),
(305, '2021-08-03 20:54:36', '2021-08-03 20:54:36', 4, 'App\\Models\\Post', 78, 11),
(306, '2021-08-03 20:55:15', '2021-08-03 20:55:15', 5, 'App\\Models\\Post', 80, 11),
(307, '2021-08-03 20:55:32', '2021-08-03 20:55:32', 4.33333, 'App\\Models\\Post', 81, 11),
(308, '2021-08-03 20:55:52', '2021-08-03 20:55:52', 3.33333, 'App\\Models\\Post', 82, 11),
(309, '2021-08-03 20:56:06', '2021-08-03 20:56:06', 4, 'App\\Models\\Post', 84, 11),
(310, '2021-08-03 20:56:42', '2021-08-03 20:56:42', 4.66667, 'App\\Models\\Post', 85, 11),
(311, '2021-08-03 20:57:05', '2021-08-03 20:57:05', 5, 'App\\Models\\Post', 86, 11),
(312, '2021-08-03 20:57:19', '2021-08-03 20:57:19', 3.66667, 'App\\Models\\Post', 88, 11),
(313, '2021-08-03 20:57:57', '2021-08-03 20:57:57', 4.66667, 'App\\Models\\Post', 68, 11),
(314, '2021-08-03 20:58:12', '2021-08-03 20:58:12', 3, 'App\\Models\\Post', 90, 11),
(315, '2021-08-03 20:58:25', '2021-08-03 20:58:25', 4.66667, 'App\\Models\\Post', 92, 11),
(316, '2021-08-03 20:58:39', '2021-08-03 20:58:39', 4, 'App\\Models\\Post', 93, 11),
(317, '2021-08-03 20:58:54', '2021-08-03 20:58:54', 4.33333, 'App\\Models\\Post', 94, 11),
(318, '2021-08-03 20:59:17', '2021-08-03 20:59:17', 4.33333, 'App\\Models\\Post', 96, 11),
(319, '2021-08-03 20:59:37', '2021-08-03 20:59:37', 5, 'App\\Models\\Post', 97, 11),
(320, '2021-08-03 20:59:50', '2021-08-03 20:59:50', 4, 'App\\Models\\Post', 69, 11),
(321, '2021-08-03 21:00:01', '2021-08-03 21:00:01', 5, 'App\\Models\\Post', 99, 11),
(322, '2021-08-03 21:00:15', '2021-08-03 21:00:15', 4.66667, 'App\\Models\\Post', 100, 11),
(323, '2021-08-03 21:00:31', '2021-08-03 21:00:31', 3.66667, 'App\\Models\\Post', 101, 11),
(324, '2021-08-03 21:00:47', '2021-08-03 21:00:47', 4.66667, 'App\\Models\\Post', 102, 11),
(325, '2021-08-03 21:00:59', '2021-08-03 21:00:59', 5, 'App\\Models\\Post', 103, 11),
(326, '2021-08-03 21:01:16', '2021-08-03 21:01:16', 5, 'App\\Models\\Post', 105, 11),
(327, '2021-08-03 21:01:29', '2021-08-03 21:01:29', 4.33333, 'App\\Models\\Post', 107, 11),
(328, '2021-08-03 21:02:16', '2021-08-03 21:02:16', 4.33333, 'App\\Models\\Post', 68, 12),
(329, '2021-08-03 21:02:41', '2021-08-03 21:02:41', 4.33333, 'App\\Models\\Post', 90, 12),
(330, '2021-08-03 21:02:56', '2021-08-03 21:02:56', 4, 'App\\Models\\Post', 91, 12),
(331, '2021-08-03 21:03:09', '2021-08-03 21:03:09', 5, 'App\\Models\\Post', 93, 12),
(332, '2021-08-03 21:03:27', '2021-08-03 21:03:27', 4.66667, 'App\\Models\\Post', 94, 12),
(333, '2021-08-03 21:03:43', '2021-08-03 21:03:43', 4.33333, 'App\\Models\\Post', 95, 12),
(334, '2021-08-03 21:03:57', '2021-08-03 21:03:57', 4.33333, 'App\\Models\\Post', 98, 12),
(335, '2021-08-03 21:04:38', '2021-08-03 21:04:38', 5, 'App\\Models\\Post', 69, 12),
(336, '2021-08-03 21:04:56', '2021-08-03 21:04:56', 4.66667, 'App\\Models\\Post', 99, 12),
(337, '2021-08-03 21:05:25', '2021-08-03 21:05:25', 5, 'App\\Models\\Post', 100, 12),
(338, '2021-08-03 21:05:45', '2021-08-03 21:05:45', 3.66667, 'App\\Models\\Post', 102, 12),
(339, '2021-08-03 21:06:00', '2021-08-03 21:06:00', 4, 'App\\Models\\Post', 103, 12),
(340, '2021-08-03 21:06:15', '2021-08-03 21:06:15', 4.33333, 'App\\Models\\Post', 104, 12),
(341, '2021-08-03 21:06:32', '2021-08-03 21:06:32', 4, 'App\\Models\\Post', 106, 12),
(342, '2021-08-03 21:07:31', '2021-08-03 21:07:31', 4.66667, 'App\\Models\\Post', 66, 10),
(343, '2021-08-03 21:08:02', '2021-08-03 21:08:02', 4.66667, 'App\\Models\\Post', 71, 10),
(344, '2021-08-03 21:08:15', '2021-08-03 21:08:15', 4, 'App\\Models\\Post', 72, 10),
(345, '2021-08-03 21:08:32', '2021-08-03 21:08:32', 4.66667, 'App\\Models\\Post', 73, 10),
(346, '2021-08-03 21:08:48', '2021-08-03 21:08:48', 4, 'App\\Models\\Post', 75, 10),
(347, '2021-08-03 21:09:04', '2021-08-03 21:09:04', 4.33333, 'App\\Models\\Post', 77, 10),
(348, '2021-08-03 21:09:28', '2021-08-03 21:09:28', 4, 'App\\Models\\Post', 67, 10),
(349, '2021-08-03 21:09:48', '2021-08-03 21:09:48', 4, 'App\\Models\\Post', 79, 10),
(350, '2021-08-03 21:10:05', '2021-08-03 21:10:05', 4, 'App\\Models\\Post', 80, 10),
(351, '2021-08-03 21:10:24', '2021-08-03 21:10:24', 4.33333, 'App\\Models\\Post', 81, 10),
(352, '2021-08-03 21:10:45', '2021-08-03 21:10:45', 4.33333, 'App\\Models\\Post', 83, 10),
(353, '2021-08-03 21:11:02', '2021-08-03 21:11:02', 4, 'App\\Models\\Post', 84, 10),
(354, '2021-08-03 21:11:19', '2021-08-03 21:11:19', 4.66667, 'App\\Models\\Post', 85, 10),
(355, '2021-08-03 21:11:33', '2021-08-03 21:11:33', 4.66667, 'App\\Models\\Post', 87, 10),
(356, '2021-08-03 21:11:51', '2021-08-03 21:11:51', 5, 'App\\Models\\Post', 88, 10),
(357, '2021-08-03 21:12:29', '2021-08-03 21:12:29', 5, 'App\\Models\\Post', 68, 10),
(358, '2021-08-03 21:12:49', '2021-08-03 21:12:49', 4.66667, 'App\\Models\\Post', 90, 10),
(359, '2021-08-03 21:13:09', '2021-08-03 21:13:09', 4.66667, 'App\\Models\\Post', 92, 10),
(360, '2021-08-03 21:13:26', '2021-08-03 21:13:26', 3.66667, 'App\\Models\\Post', 93, 10),
(361, '2021-08-03 21:13:43', '2021-08-03 21:13:43', 4.66667, 'App\\Models\\Post', 95, 10),
(362, '2021-08-03 21:14:00', '2021-08-03 21:14:00', 4.33333, 'App\\Models\\Post', 96, 10),
(363, '2021-08-03 21:14:20', '2021-08-03 21:14:20', 4, 'App\\Models\\Post', 98, 10),
(364, '2021-08-03 21:14:57', '2021-08-03 21:14:57', 4.66667, 'App\\Models\\Post', 69, 10),
(365, '2021-08-03 21:15:14', '2021-08-03 21:15:14', 4.33333, 'App\\Models\\Post', 100, 10),
(366, '2021-08-03 21:15:29', '2021-08-03 21:15:29', 4.33333, 'App\\Models\\Post', 101, 10),
(367, '2021-08-03 21:18:06', '2021-08-03 21:18:06', 4.66667, 'App\\Models\\Post', 102, 10),
(368, '2021-08-03 21:18:21', '2021-08-03 21:18:21', 4.33333, 'App\\Models\\Post', 104, 10),
(369, '2021-08-03 21:18:36', '2021-08-03 21:18:36', 4, 'App\\Models\\Post', 105, 10),
(370, '2021-08-03 21:18:54', '2021-08-03 21:18:54', 4.66667, 'App\\Models\\Post', 106, 10),
(371, '2021-08-03 21:23:37', '2021-08-03 21:23:37', 4.33333, 'App\\Models\\Post', 70, 16),
(372, '2021-08-03 21:24:01', '2021-08-03 21:24:01', 4.66667, 'App\\Models\\Post', 71, 16),
(373, '2021-08-03 21:24:17', '2021-08-03 21:24:17', 4.33333, 'App\\Models\\Post', 72, 16),
(374, '2021-08-03 21:26:03', '2021-08-03 21:26:03', 4.66667, 'App\\Models\\Post', 73, 16),
(375, '2021-08-03 21:26:22', '2021-08-03 21:26:22', 5, 'App\\Models\\Post', 75, 16),
(376, '2021-08-03 21:26:40', '2021-08-03 21:26:40', 4.66667, 'App\\Models\\Post', 77, 16),
(377, '2021-08-03 21:27:00', '2021-08-03 21:27:00', 4.66667, 'App\\Models\\Post', 78, 16),
(378, '2021-08-03 21:27:15', '2021-08-03 21:27:15', 4, 'App\\Models\\Post', 79, 16),
(379, '2021-08-03 21:27:31', '2021-08-03 21:27:31', 4.66667, 'App\\Models\\Post', 80, 16),
(380, '2021-08-03 21:27:50', '2021-08-03 21:27:50', 3.66667, 'App\\Models\\Post', 82, 16),
(381, '2021-08-03 21:28:07', '2021-08-03 21:28:07', 5, 'App\\Models\\Post', 83, 16),
(382, '2021-08-03 21:28:24', '2021-08-03 21:28:24', 4, 'App\\Models\\Post', 84, 16),
(383, '2021-08-03 21:28:38', '2021-08-03 21:28:38', 3.66667, 'App\\Models\\Post', 86, 16),
(384, '2021-08-03 21:28:54', '2021-08-03 21:28:54', 4.66667, 'App\\Models\\Post', 87, 16),
(385, '2021-08-03 21:29:09', '2021-08-03 21:29:09', 3.66667, 'App\\Models\\Post', 88, 16),
(386, '2021-08-03 21:29:30', '2021-08-03 21:29:30', 4.66667, 'App\\Models\\Post', 90, 16),
(387, '2021-08-03 21:29:46', '2021-08-03 21:29:46', 4.33333, 'App\\Models\\Post', 91, 16),
(388, '2021-08-03 21:30:01', '2021-08-03 21:30:01', 3.66667, 'App\\Models\\Post', 92, 16),
(389, '2021-08-03 21:30:17', '2021-08-03 21:30:17', 4.33333, 'App\\Models\\Post', 94, 16),
(390, '2021-08-03 21:30:31', '2021-08-03 21:30:31', 4.66667, 'App\\Models\\Post', 95, 16),
(391, '2021-08-03 21:30:44', '2021-08-03 21:30:44', 5, 'App\\Models\\Post', 96, 16),
(392, '2021-08-03 21:30:58', '2021-08-03 21:30:58', 4.33333, 'App\\Models\\Post', 98, 16),
(393, '2021-08-03 21:31:14', '2021-08-03 21:31:14', 4.33333, 'App\\Models\\Post', 99, 16),
(394, '2021-08-03 21:31:28', '2021-08-03 21:31:28', 5, 'App\\Models\\Post', 69, 16),
(395, '2021-08-03 21:31:43', '2021-08-03 21:31:43', 4.33333, 'App\\Models\\Post', 101, 16),
(396, '2021-08-03 21:31:56', '2021-08-03 21:31:56', 3.66667, 'App\\Models\\Post', 103, 16),
(397, '2021-08-03 21:32:11', '2021-08-03 21:32:11', 4.66667, 'App\\Models\\Post', 104, 16),
(398, '2021-08-03 21:32:25', '2021-08-03 21:32:25', 4.33333, 'App\\Models\\Post', 106, 16),
(399, '2021-08-03 21:32:39', '2021-08-03 21:32:39', 4, 'App\\Models\\Post', 107, 16),
(400, '2021-08-03 21:44:33', '2021-08-03 21:44:33', 4.33333, 'App\\Models\\Post', 116, 16),
(401, '2021-08-03 21:45:00', '2021-08-03 21:45:00', 5, 'App\\Models\\Post', 116, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`) VALUES
(4, 'user', 'lusiana', 'lusiana@gmail.com', NULL, '$2y$10$PjRiiX69V7ScGssqbj/kSuajp2/bJtvUoXB5kPSQWbhHsI8sa3OMm', NULL),
(5, 'admin', 'admin12', 'admin@gmail.com', NULL, '$2y$10$nBmWaAV3IAxdy9P0mSvYLOP2vRHN8svCFUiWa5jO/joKT3H2UTXh.', NULL),
(10, 'user', 'mikasitanggang', 'mikasitanggang@gmail.com', NULL, '$2y$10$4XPXe2v9KpTwdbShTvb6O.SvARqdnFt/0GjhewVnA7Am2OTRgBPqG', NULL),
(11, 'user', 'randika', 'randika@gmail.com', NULL, '$2y$10$1/ChHIaIj3/93x1zMsRAFO1ZKrFn49URcLTjOi5Ljlv0QW9bTD7dK', NULL),
(12, 'user', 'ginanjar', 'siagianginanjarr@gmail.com', NULL, '$2y$10$sNHVUFs4Ij/Yvu/YucaBHufLrQCnOJkltTAKooL9Z2NzxIjTybFoC', NULL),
(16, 'user', 'mikeyy', 'mikey@gmail.com', NULL, '$2y$10$heMCkT82HUa/P30/M/LX/eJtcGwdNMODG9j2hzuHcKZV7Bud/2E8e', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisatas`
--

CREATE TABLE `wisatas` (
  `id_wisata` bigint(20) UNSIGNED NOT NULL,
  `nama_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wisatas`
--

INSERT INTO `wisatas` (`id_wisata`, `nama_wisata`, `alamat`, `deskripsi`, `gambar`) VALUES
(70, 'Bukit Gibeon', 'Desa Parsaoran Sibisa, Kecamatan Ajibata Kabupaten Toba', 'Lokasi wisata Bukit Gibeon berada di Desa Parsaoran Sibisa, Kecamatan Ajibata Kabupaten Toba. Pusat Seminari Bukit Gibeon memiliki areal yang sangat luas dan indah. Pemandangan begitu indah dan luas, dengan berbagai fasilitas yang tersedia seperti, rumah doa, ruang penginapan, ruang belajar, aula, fasilitas api unggun, sekretariat, fasilitas ibadah padang, halaman parker, ruang terbuka, dapur dan kolam berenang.', '1622190457.jpg'),
(71, 'Pantai Lumban Bul-Bul', 'Desa Lumban Bul-Bul, Kecamatan Balige', 'Pantai bul-bul merupakan wisata favorit keluarga yang ingin menikmati panorama Danau Toba dengan pantai yang landau dan berpasir putih. Di pantai lumban bul bul para wisatawan dapat melakukan berbagai aktivitas, seperti mengendarai ATV di tepi pantai, menaiki kano, banana boat, kapal kayu, pesiar untuk mengitari danau, dan menikmati kuliner Batak Toba. Di tepi Pantai wisatawan dapat berenang karena pantainya yang landay tidak begitu dalam. Pada jarak 50 m dari tepi pantai, dibuat pembatas agar wisatawan tidak berenang terlalu jauh. Jika ingin menginap disini, ada banyak pilihan homestay yang tersedia.', '1622446251.jpg'),
(72, 'Pasir Putih Parparean', 'Desa Parparean I dan II, Kecamatan Porsea', 'Pantai landau dengan materi pasirnya yang halus membuat pantai ini sangat indah dan menarik untuk di kunjungi. Destinasi wisata ini memiliki alam yang sangat indah dan pemandangan yang memikat hati. Menggabungkan eksotika alam dan spot berfoto yang instagramable, lokasi wisata ini sangat ramai dikunjungi wisatawan terutama di akhir pekan dan di hari libur. Pantai yang sangat luas dengan pasir putih halus serta latar gapura bercorak gorga membuat wisatawan merasakan sensasi berwisata di Bali. Lokais wisata ini dibangun dan dilengkapi dengan fasilitas gajebo, Jogging Track, Landmark Gorga, taman bunga, photo spot, jet ski dan sepeda air.', '1622446292.jpg'),
(73, 'Taman Eden 100', 'Di Desa Sionggang Lumban Julu, Kabupaten Toba', 'Taman Eden 100 adalah wisata dengan nuansa alami yang ditanami lebih dari 100 jenis tanaman . Kawasan hutan terbuka dengan luas 40 Hektare ini terletak diatas ketinggian 1100-1750 mdpl. Memiliki pesona alam yang indah seperti air terjun, Goa Kelelawar, bukit Manja, Kebun Naggrek Toba, Andaliman, Ihan batak, Alam bebas dan juga bisa dimanfaatkan untuk Tracking, dan camping Ground dan air terjun yang sangat indah dan airnya yang sejuk berjarak 500 meter dari pintu pos.', '1622446320.jpg'),
(74, 'Air Terjun Situmurun', 'Desa Jonggi ni Huta dan Desa Hutanamora Lumban Julu', 'Air terjun Situmurun sangat istimewa karena airnya yang langsung jatuh ke Danau Toba. Pesonanya dapat dinikmati dari atas kapal maupun berenang di sekitar alira. Tingginya mencapai 70 meter. Tak heran bial pesonanya membuat pelancong rela menempuh perjalan jauh. Air Terjun yang oleh warga sempat disebut air terjun Binangalom ini berjarak kurang lebih 70 km dari kota balige. Berkunjung kesini traveler maupun wisatawan dapat sekalian menikmati landscape Danau Toba.', '1622446350.jpg'),
(76, 'Pantai Ragi Hotang Meat', 'Desa Adat Ragi Hotang Kecamatan Tampahan', 'Pantai Adat Ragi Hotang Meat memiliki alam dan budaya yang terbaik. Atraksi eksotis dapat kita nikmati selama berada di pantai wisata ini. Wisatawan bisa melihat dan mencoba proses pembuatan ulos. Sekitar 80% kaum wanita desa meat menekuni martonun ulos. Disini juga terdapat rumah adat dengan usia sekitar 126 tahun. Wilayah ini memiliki areal persawahan dengan teras teras persawahan yang sangat menawan, ditambah panorama Danau Toba yang sangat indah dan memakau, dan jika ingin menginap di desa ini, para wisatawan dapat menginap di homestay yang tersesia dengan arsitektur tradisional batak.', '1622446413.jpg'),
(77, 'Geopark Kaldera Toba', 'Desa Singgolom', 'Kaldera Toba terbentuk dari ledakan supervolcanik 74000 tahun yang lalu. Hasil letusannya mempengaruhi iklim dunia dan memusnahkan perdaban Asia Selatan. Kini dasar Kaldera tersebut diisi air sedalam 550 meter seluas 1130 km persegi dan menjadi danau terbesar di Indonesia. Kaldera Toba telah mendapatkan pengakuan dari UNESCO Global Geopark karena memiliki kaitan geologis warisan tradisi budaya dan keanekaragaman hayati yang tinggi, Kaldera Toba atau yang lebih dikenal dengan Danau Toba ditetapkan sebagai UGG pada siding ke 209 dewan eksekutif UNESCO di Paris pada 2 Juli 2020. Kaldera Toba berhasil masuk daftar UNESCO setelah dimulai dan diputuskan UGG Council pada Konferensi Internasional UNESCO Global Geopark ke-4 di Lombok pada tanggal 31 Agustus- 2 September 2021.', '1622446438.jpg'),
(78, 'Tambunan Sunset Beach', 'Desa Lumbangaol Tambunan, Kecamatan Balige', 'Lokasi ini berjarak sekitar 6 km dari Balige ibukota Kabupaten Toba. Pantai Landai ini memiliki pasir putih serta air nya yang jernih sepanjang pantai. Saat senja hari pengunjung pantai akan disuguhkan pemandangan yang sangat eksotis yaitu sunset atau matahari terbenam di pantai ini. Momen yang menjadi daya Tarik utama bagi pengunjung akan lebih asik di abadikan melalui kamera telepon dan alat elektronik lainnya. Keindahan ini dapat dinikmati sambil bersantai di pinggiran danau toba dengan fasilitas jogging track, gajebo serta tembok penahan dengan ornament arsitektur budaya Batak Toba yang menawan.', '1622446482.jpg'),
(85, 'Arum Jeram Parhitean', 'Sungai Asahan desa Meranti Utara, Kecamatan Pintu Pohan', 'Sungai asahan memiliki jeram yang ekstrim dan pemandangan alam yang eksotik. Sungai Asahan merupakan sungai dengan jeram terbaik ke 3 di Dunia setelah sungai Colorado di Amerika dan sungai Zambesi di Afrika. Lokasi ini merupakan spot wisata minat khusus untuk kegiatan arum jeram ekstrim dan fun rafting.', '1628052185.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akomodasis`
--
ALTER TABLE `akomodasis`
  ADD PRIMARY KEY (`id_akomodasi`);

--
-- Indeks untuk tabel `cinderamatas`
--
ALTER TABLE `cinderamatas`
  ADD PRIMARY KEY (`id_cinderamata`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_forum`);

--
-- Indeks untuk tabel `informasis`
--
ALTER TABLE `informasis`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `kuliners`
--
ALTER TABLE `kuliners`
  ADD PRIMARY KEY (`id_kuliner`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_rateable_type_rateable_id_index` (`rateable_type`,`rateable_id`),
  ADD KEY `ratings_rateable_id_index` (`rateable_id`),
  ADD KEY `ratings_rateable_type_index` (`rateable_type`),
  ADD KEY `ratings_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `wisatas`
--
ALTER TABLE `wisatas`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akomodasis`
--
ALTER TABLE `akomodasis`
  MODIFY `id_akomodasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `cinderamatas`
--
ALTER TABLE `cinderamatas`
  MODIFY `id_cinderamata` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `forum`
--
ALTER TABLE `forum`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `informasis`
--
ALTER TABLE `informasis`
  MODIFY `id_pengumuman` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `kuliners`
--
ALTER TABLE `kuliners`
  MODIFY `id_kuliner` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT untuk tabel `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `wisatas`
--
ALTER TABLE `wisatas`
  MODIFY `id_wisata` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
