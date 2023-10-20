-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 09 Agu 2023 pada 07.55
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbl_eku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `atraksi_wisata`
--

CREATE TABLE `atraksi_wisata` (
  `id` char(36) NOT NULL,
  `id_kategori` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `destinasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `deskripsi` text,
  `nama_pengelola` varchar(255) DEFAULT NULL,
  `no_pengelola` varchar(15) DEFAULT NULL,
  `hari_buka` varchar(255) DEFAULT NULL,
  `jam_buka` time DEFAULT NULL,
  `jam_tutup` time DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `sumber_foto` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `atraksi_wisata`
--

INSERT INTO `atraksi_wisata` (`id`, `id_kategori`, `nama`, `alamat`, `destinasi`, `deskripsi`, `nama_pengelola`, `no_pengelola`, `hari_buka`, `jam_buka`, `jam_tutup`, `foto`, `sumber_foto`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
('998e6f52-dcaa-4f51-bc3f-0b6f40618cdc', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Hutan Mangrove Satai Lestari', 'Desa Satai Lestari, Kecamatan Pulau Maya, Kayong Utara', '-', 'Hutan Mangrove Satai Lestari yang dikelola oleh LPHD Desa Satai Lestari yang menargetkan skala prioritas pada pelestarian dan pemanfaatan hutan mangrove.', '-', '-', 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689049583-MSepI.jpg', 'KalbarToday.com', '-1.1907225457836106', '109.69236133980502', '2023-07-12 07:47:03', '2023-07-12 00:47:03'),
('998e7462-8505-4b56-847c-97ba9643d512', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Pantai Pulau Nenas', 'Desa Dusun Kecil, Kayong Utara, Kalimantan Barat', '-', 'Pantai Pulau Nanas yang memiliki keindahan yang konon katanya banyak tumbuhan nanas tumbuh disini', '-', '-', 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689049678-eCtfB.jpg', 'kabupaten bangka barat', '-1.7027994050221205', '105.71136255025871', '2023-07-12 07:47:29', '2023-07-12 00:47:29'),
('998e7a72-ab01-4cbe-94ac-b64521563a3d', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Gunung Batu Ampar', 'Desa Dusun Besar, Kayong Utara, Kalimantan Barat', '-', 'Gunung Batu Ampar yang terletak di desa Dusun Besar memiliki pesona keindahan yang tiada tara.', '-', '-', 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689049736-T6lE2.jpg', 'kalamanthana', '-1.1045138349403', '109.45917808999528', '2023-07-12 07:47:54', '2023-07-12 00:47:54'),
('998e7e17-64c5-4751-9745-745b71425584', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Pantai Pasir Belanda', 'Pelapis, Kepulauan Karimata, Kabupaten Kayong Utara', '-', 'Pantai yang menjadi tempat wisata unggulan di pulau Pelapis.', 'Admin Pantai Pasir Belanda', '0853-4740-3699', 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689049762-7IKKm.jpg', 'Irwansyah', '-1.2204125767799543', '109.22729190370684', '2023-07-12 07:49:14', '2023-07-12 00:49:14'),
('998e8082-3144-4d57-8007-67c96581e084', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Pantai Pulau Datok', 'Sukadana, Kabupaten Kayong Utara, Kalimantan Barat', 'Banana Bot, Penyewaan motor dan sepeda listrik', 'Ciri khas Pantai Pulau Datok yang garis pantainya diapit oleh dua bukit dan satu pulau yang menjadi magnet untuk menjadi daya tarik bagi pengunjung.', '-', '-', 'Setiap Hari', '07:00:00', '21:00:00', 'app/Atraksi-Wisata/1689049783-AU7fg.jpg', 'disporaparkku.id', '-1.260772776372708', '-1.260772776372708', '2023-07-12 07:50:18', '2023-07-12 00:50:18'),
('998e898c-22c2-4681-a449-6b9602ed7c51', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Hutan Mangrove', 'Jl. Pelabuhan TPI, Sutera, Kec. Sukadana, Kabupaten Kayong Utara, Kalimantan Barat', 'Rute jalanan hutan yang berkayu di sepanjang hutan mangrove', 'Hutan mangrove Sukadana ini memiliki luas 17.780 Ha. Hutan ini menjadi habitat bagi berbagai jenis flora dan fauna.', '-', '-', 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689049811-a1w2z.jpg', 'kompasiana.com', '-1.2509459158530558', '109.94412667518054', '2023-07-11 04:30:11', '2023-07-10 21:30:11'),
('999223d5-0214-4987-84b8-b6cd55da53d9', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Pulau Juante', 'Desa Sutera, Kecamatan Sukadana, Kabupaten Kayong Utara, Kalimantan Barat', '-', 'Pulau Juante menyimpan banyak keindahan yang masih alami. Lokasi pulau ini hanya berjarak 50 menit perjalanan dari pusat kota Sukadana dengan menggunakan perahu mesin.', '-', '-', 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689049827-RXE0o.jpg', 'pontianak post', '-1.347425729737778', '109.89944192836231', '2023-07-12 07:50:54', '2023-07-12 00:50:54'),
('99922eb3-ef5b-4b4b-a8a5-87ef569d641c', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Pantai Pasir Mayang', 'Jl. Poros Sukadana-Ketapang Desa Pampang Harapan, Sukadana Kabupaten Kayong Utara, Kalimantan Barat', 'Kolam Renang Pasir Mayang', 'Pantai Pasir Mayang ini tergolong pantai yang unik karena bentuk pantainya seperti huruf U yang berada di Kabupaten Kayong Utara.', '-', '0858-2222-8887', 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689049842-3p8ZS.jpg', 'direktori pariwisata', '-1.115385174334983', '109.99210159733826', '2023-07-12 07:51:15', '2023-07-12 00:51:15'),
('999231bd-781c-457b-a36a-d18ba36e6e09', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Air Paoh', 'Pangkalan Buton, Kec. Sukadana, Kabupaten Kayong Utara, Kalimantan Barat', '-', 'Air yang masih jernih dan segar yang mengalir dari pegunungan dan sela batu membuat wisata Air Paoh ini sangat digemari masyarakat dan menjadi tempat yang tepat untuk melepaskan penat serta menyegarkan kembali tubuh kamu.', 'Pengelola Air Paoh', '0812-5818-3258', 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689049862-bkHc0.jpg', 'tribun pontianak', '-1.2282592941175308', '109.98392816880344', '2023-07-11 04:31:02', '2023-07-10 21:31:02'),
('99923604-c98f-4522-9818-ff327683329a', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Bukit Paoh', 'Jl. Sungai Gali Pangkalan Buton, Kec. Sukadana, Kabupaten Kayong Utara, Kalimantan Barat', 'Kolam renang', 'Villa Bukit Paoh sendiri adalah objek wisata alam dan buatan yang dibuka dan di diresmikan langsung oleh Bupati Kayong Utara, Drs. Citra Duani pada tanggal 27 Februari 2019.', 'Admin Bukit Paoh', '0896-2877-3713', 'Setiap Hari', '07:00:00', '21:00:00', 'app/Atraksi-Wisata/1689049909-XqtJK.jpg', 'pancurajipost', '-1.2276528243947002', '109.98383428874017', '2023-07-12 07:52:20', '2023-07-12 00:52:20'),
('99923c97-27e5-41f1-bd77-30fc07be9103', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Pantai Pasir Mak Senik', 'Gunung sembilan, Kab Kayong Utara, Kalimantan Barat', '-', 'Eksotisme Pantai Pasir Mak Senik yang berada di Sukadana menjadi tambahan destinasi wisata yang wajib dikunjungi jika kalian berkunjung ke Kabupaten Kayong Utara.', '-', '-', 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689049946-qSFmJ.jpg', 'tribun pontianak', '-1.2152857328783282', '109.92998344826617', '2023-07-12 07:54:10', '2023-07-12 00:54:10'),
('999e216f-23b0-4827-bd8a-348914b887f2', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Pantai Mutiara', 'gunun', '-', 'Tidak jauh dari keberadaan Pantai Pasir Mak Senik ada salah satu pantai cantik juga bernama Pantai Mutiara. Pantai ini tergolong pantai yang masih alami dan juga indah.', '-', '-', 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689050020-d5kjd.jpg', 'tribun pontianak', '-1.2145027048079313', '109.93007464602218', '2023-07-12 07:55:02', '2023-07-12 00:55:02'),
('999e3338-b576-4ac2-8a27-a50f790356ea', '998e81be-61e5-474f-9832-4ccb9df88c9d', 'Makam Ratu Soraya', 'Dusun Tambak Rawang, Desa Gunung Sembilan, Kabupaten Kayong Utara, Kalimantan Barat', NULL, 'Ratu Soraya merupakan istri Sultan Tengah dari kesultanan Brunei Darussalam yang ditemukan di daerah Kecamatan Kayong Utara. Makam yang bernisankan batu ini ditemukan oleh para pencari makam yang berasal dari Brunei Darussalam di sebuah bukit di desa Gunung Semilan.', '-', '-', 'Setiap Hari', '07:00:00', '16:00:00', 'app/Atraksi-Wisata/1689047432-9NvK8.jpg', 'Adiel ktp', '-1.2308646169030641', '109.9411293', '2023-07-10 20:50:32', '2023-07-10 20:50:32'),
('999e3a59-1022-4534-abaf-57f54fab6614', '998e81be-61e5-474f-9832-4ccb9df88c9d', 'Makam Putri Nirmala', 'Desa Gunung Sembilan, Kabupaten Kayong Utara,', '-', 'Makam Ratu Air Mala atau Putri Nirmala adalah seorang pahlawan wanita yang berjuang melawan penjajahan Belanda di masanya. Makam ini juga berada di Desa Gunung Sembilan berdekatan dengan makam Ratu Soraya.', '-', '-', 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689048626-z8O4g.jpg', 'YT Bang Sholihin', '-1.2266329065597503', '109.94479787287896', '2023-07-10 21:10:27', '2023-07-10 21:10:27'),
('999e4e78-745b-4901-8b64-ce2ac27b3396', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Bukit Mendale', 'Desa Gunung Sembilan, Kabupaten Kayong Utara, Kalimantan Barat', 'hiking, melihat burung enggang', 'Bukit Mendale ini memiliki ketinggian kurang lebih 320 mdpl dengan medan yang cukup sulit dan menguras tenaga. Di gunung ini kita juga dapat menemukan burung enggang yang merupakan burung khas yang berasal dari Kalimantan Barat, dan Bukit Mendale ini adalah salah satu habitat asli burung enggang.', '-', '-', 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689052002-wOq5T.jpg', 'disporakku.id', NULL, NULL, '2023-07-12 08:05:41', '2023-07-12 01:05:41'),
('999e9cc3-ec02-4915-bf5d-46fc2401c190', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Lubuk Baji', 'Desa Sedahan Jaya, Kecamatan Sukadana, Kabupaten Kayong Utara, Kalimantan Barat', 'Air terjun, Melihat oranutan dan satwa liar lainnya.', 'Objek wisata yang termasuk ke dalam wilayah Taman Nasional Gunung Palung yang merupakan objek wisata pegunungan yang sering sekali dikunjungi oleh klub pecinta alam. Meskipun jalur yang dilalui cukup landai namun keindahan yang disajikan sangat mencuri hati siapapun yang berkunjung.', '-', '-', 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689065341-8FmcQ.jpg', 'wisato.id', '-1.2294615296141398', '110.01901722139402', '2023-07-12 08:06:07', '2023-07-12 01:06:07'),
('999ea93a-9219-404f-9536-d5e7d8f794f1', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Batu Cap', 'Desa Sedahan Jaya, Kecamatan Sukadana, Kabupaten Kayong Utara, Kalimantan Barat', 'Situs Purbakala', 'Menurut kabar batu ini sudah ditetapkan sebagai situs purbakala. Batu yang ditemukan pada tahun 1874 ini sebagai bukti bahwa ada peradaban kuno yang ada di Kabupaten Kayong Utara yang sampai saat ini masih dilakukan penelitian.', '-', '-', 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689067230-ul6CL.jpg', 'tribun pontianak', '-1.2081262501722363', '110.00604796843017', '2023-07-11 02:20:30', '2023-07-11 02:20:30'),
('999eafe5-fe57-4d6f-9d03-70118b26c007', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Agrowisata Sedahan Jaya', 'Desa Sedahan Jaya, Kecamatan Sukadana, Kabupaten Kayong Utara, Kalimantan Barat', '-', 'Taman bermain berbasis alam dengan lingkungan yang masih sangat asri. Yang spesial dari taman ini saat musim durian pengunjung bisa mencicipi durian sepuasnya hanya dengan membayar tiket masuk.', '-', '-', 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689068349-0XlFz.jpg', 'brown project', '-1.1969167641447456', '110.00923852428737', '2023-07-12 08:07:09', '2023-07-12 01:07:09'),
('999f4c5a-c686-4759-8d72-a8206e287944', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Air Terjun Riam Berasap', 'Desa Riam Berasap, Kecamatan Sukadana, Kabupaten Kayong Utara, Kalimantan Barat', '-', 'Riam Berasap yang arti namanya Riam artinya adalah sumber air yang merupakan sumber untuk menghidupkan manusia dan mahluk lainnya. Berasap artinya asap setiap ada asap pasti ada tanda-tanda kehidupan makna dari asap itu kalau dijabarkan banyak sekali asap rokok bagi perokok dapat menyegarkan, asap kayu bakar dapat mengusir nyamuk, asap knalpot kendaraan bisa membuat orang sesak napas yah itu hanya sekadar celoteh saja.', 'Pengelola Riam Berasap', '0856-2553-355', 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689094596-njIgy.jpg', 'abu abdilah', '-1.2897763406912859', '110.21689015397783', '2023-07-12 08:08:17', '2023-07-12 01:08:17'),
('999f4ea8-d03a-45d6-91af-bbf12436f47f', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Gunung Semberuang', 'Desa Riam Berasap, Kecamatan Sukadana, Kabupaten Kayong Utara, Kalimantan Barat', '-', 'Tak kalah cantik dan menawan dibandingkan dengan gunung gunung lainnya di Kayong Utara, Gunung Semberuang ini merupakan salah satu unggulan juga di Kayong Utara.', '-', '-', 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689094985-iSRkD.jpg', 'echo46', '-1.3122454704175908', '110.17788713068146', '2023-07-12 08:15:34', '2023-07-12 01:15:34'),
('999f51ff-7678-4585-9e54-1634c8e3410d', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Bukit Begentar', 'Dusun Sungai Belit, Desa Sejahtera, Kec. Sukadana, Kabupaten Kayong Utara', '-', 'Menjadi salah satu destinasi wisata kekinian yang ada di Kabupaten Kayong Utara atau dikenal juga dengan nama Bukit Genta mulai eksis dan digemari karena salah satu postingan pengunung yang mengabadikan tempat ini.', '-', '-', 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689095545-peEhu.jpg', 'autorium.com', '-1.2695512847949861', '110.01155848465852', '2023-07-12 08:16:07', '2023-07-12 01:16:07'),
('99a01c00-8829-4b6a-8eb2-3e76188019a4', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Resort Cabang Panti', 'Desa Gunung Sembilan, Taman  Nasonal Gunung Palung', 'Stasiun riset Taman NAsional', 'Stasiun Riset Cabang Panti ini merupakan pusat konservasi ekosistem Borneo Stasiun Riset Cabang Panti yang berada di Desa Wisata Gunung Sembilan,Taman Nasional Gunung Palung. Disini diharapkan bisa bermanfaat bagi peneliti untuk meneliti tumbuhan obat dan jenis tumbuhan berkayu yang belum terungkap. Laboratorium alam Cabang Panti ini juga bermanfaat bagi Taman Nasional dan pemerintah daerah.', '-', NULL, 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689129434-a0VNg.jpg', 'PPID LHK', '-1.236434245545356', '109.95336942346488', '2023-07-12 08:18:10', '2023-07-12 01:18:10'),
('99a09a4b-5be8-4851-b0a5-63117c93c922', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Pantai Batu Teritip', 'Desa Harapan Mulia, Kecamatan Sukadana, Kabupaten Kayong Utara, Kalimantan Barat', '-', 'Pantai Batu Teritip ini masih tersimpan dibalik perbukitan dan akses jalan yang masih kurang memadai. Tapi pantai ini memiliki pasir putih yang sungguh luar biasa indahnya. Deburan ombak yang pelan serta air laut yang berwarna kebiruan menjadi salah satu daya tarik Pantai Batu Teritip.', '-', NULL, 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689150622-yjEej.jpg', 'direktori pariwisata', '-1.1885807131564239', '109.91993370931566', '2023-07-12 01:30:24', '2023-07-12 01:30:24'),
('99a0a78c-7495-41dc-b4f9-275971974083', '990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Goa Nek Takon', 'Jl. Sungging Dusun Senebing, Desa Harapan Mulia, Kecamatan Sukadana, Kabupaten Kayong Utara, Kalimantan Barat', '-', 'Goa yang berumur ribuan tahun di Sukadana ini menjadi salah satu tempat bersejarah yang ada di Kayong Utara.', 'Julkarnain', '-', 'Setiap Hari', '07:00:00', '18:00:00', 'app/Atraksi-Wisata/1689152847-guz3N.jpg', 'Youtube', NULL, NULL, '2023-07-12 02:07:28', '2023-07-12 02:07:28'),
('99a51519-e5e4-4277-b245-68eea4c0594a', '99a5138d-f1cc-43f9-9393-3c15a57f4286', 'Masjid Agung Oesman Al-Khair', 'Jl. Kota Karang Sutera, Kecamatan Sukadana, Kabupaten Kayong Utara, Kalimantan Barat', 'Tempat Ibadah', 'Masjid yang dibangun oleh Wakil Ketua MPR Bapak Oesman Sapta Odang yang di resmikan pada 2016 lalu.', '-', '-', 'Setiap Hari', '00:00:00', '00:00:00', 'app/Atraksi-Wisata/1689569939-hE2DX.jpg', 'Detik.com', '-1.237261545495797', '109.94755124232758', '2023-07-17 04:58:59', '2023-07-16 21:58:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` char(36) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `deskripsi`, `poto`, `created_at`, `updated_at`) VALUES
('99a0b352-bcf7-41c8-9d59-3981d5908a75', 'LINK AND MATCH HUT KKU KE-16 DAN LAUNCHING E-KKU', 'Dosen dan mahasiswa program studi Teknologi Informasi bersama Dinas Pemuda, Olahraga dan Pariwisata (Disporapar) Kabupaten Kayong Utara, MASATA Ketapang berpartisipasi dalam memeriahkan Pameran HUT Kabupaten Kayong Utara yang ke-16. Dalam kegiatan tersebut sekaligus dilakukan Launching Sistem Informasi Pariwisata Kabuaten Kayong Utara hasil kolaborasi dosen dan mahasiswa.', 'app/Berita/1689824530-Qda04.jpg', '2023-07-12 02:40:23', '2023-07-19 21:05:16'),
('99b05156-28ec-4410-b927-baa54a4e683a', 'TARIAN MASAL DARI INSTANSI PEMERINTAH KAYONG UTARA DALAM RANGKA HUT KKU KE-16', 'Masing-masing Instansi Pemerintahan menurunkan kontingen tari terbaiknya untuk memeriahkan HUT Kabupaten Kayong Utara di lomba tarian masal yang di adakan di halaman Sel Karimata di nilai langsung oleh juri dan Bapak Bupati Kayong Utara.', 'app/Berita/1689825576-x4Sqm.jpg', '2023-07-19 20:59:39', '2023-07-19 20:59:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bulan`
--

CREATE TABLE `bulan` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `bulan`
--

INSERT INTO `bulan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('99a522a0-7b14-41b2-b3b5-92c577a64d13', 'Juli', '2023-07-14 07:34:55', '2023-07-14 07:34:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa_wisata`
--

CREATE TABLE `desa_wisata` (
  `id` char(36) NOT NULL,
  `nama_desa_wisata` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `link_jadesta` varchar(255) DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `lat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lng` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `desa_wisata`
--

INSERT INTO `desa_wisata` (`id`, `nama_desa_wisata`, `deskripsi`, `link_jadesta`, `foto`, `foto1`, `foto2`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
('996e8a74-3b2a-46b5-a262-c5d70e344a3f', 'Desa Wisata Pelapis', 'keindahan alam bawah laut, atraksi mancing,', 'https://jadesta.kemenparekraf.go.id/desa/pelapis', 'app/Desa-Wisata/1687000482-Epxw3.jpg', 'app/Desa-Wisata/1687000482-1hZG5.jpg', 'app/Desa-Wisata/1687000482-RWEme.jpg', '-1.2755908110302627', '109.15586915614074', '2023-06-17 04:14:43', '2023-06-17 04:14:43'),
('998e6770-d363-4915-8b0f-4299e04ddcec', 'Desa Wisata Gunung Sembilan', 'Menikmati wisata alam pantai, bukit, mangrove, sawah, pemandian air bersih, pengamatan binatang-binatang liar.', 'https://kalbar.jadesta.com/desa/gunung_sembilan', 'app/Desa-Wisata/1689569583-UTmxZ.jpg', 'app/Desa-Wisata/1689569583-EFduK.jpg', 'app/Desa-Wisata/1689569583-E3GrQ.jpg', '-1.214566471501102', '109.93387917790946', '2023-07-17 04:53:03', '2023-07-16 21:53:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `id` char(36) NOT NULL,
  `nama` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` char(36) NOT NULL,
  `id_kategori_fasilitas` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `deskripsi` text,
  `nama_pengelola` varchar(255) DEFAULT NULL,
  `no_pengelola` varchar(15) DEFAULT NULL,
  `hari_buka` varchar(255) DEFAULT NULL,
  `jam_buka` time DEFAULT NULL,
  `jam_tutup` time DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `sumber_foto` varchar(255) DEFAULT NULL,
  `link` text,
  `rating` varchar(255) DEFAULT NULL,
  `fasilitas` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `id_kategori_fasilitas`, `nama`, `alamat`, `deskripsi`, `nama_pengelola`, `no_pengelola`, `hari_buka`, `jam_buka`, `jam_tutup`, `foto`, `foto1`, `foto2`, `sumber_foto`, `link`, `rating`, `fasilitas`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
('99a880dc-b5f9-4920-a09c-e5403fbd10f9', '99740e24-0146-4e3f-99c7-0b21a92a1b10', 'Mahkota Kayong', 'Jl. Irama Laut, Pangkalan Buton, Kec. Sukadana, Kabupaten Kayong Utara, Kalimantan Barat 78852', 'Mahkota Kayong Hotel adalah Hotel terapung berkelas bintang tiga yang berada diatas pinggiran lauatan dan pantai. Keunikan ini menjadikan hotel sangat populer khususnya di Kabupaten Kayong Utara.\r\nMahkota Kayong Hotel memiliki bangunan memanjang berbentuk melengkung sepanjang bibir pantai, yang dikelola oleh OSO Hotel & Resort di bawah naungan PT. CITRA MANDIRI MANAJEMEN \r\n\r\nMahkota Kayong Hotel menyajikan panorama yang sangat indah diantaranya pemandangan yang langsung berhadapan dengan lautan serta sunset disore hari.', 'Admin Mahkota Kayong', '(0534) 7722777', 'Setiap Hari', '00:00:00', '23:59:00', 'app/Fasilitas/1689567290-MQqKY.webp', 'app/Fasilitas/1689567032-Q4Brc.jpg', 'app/Fasilitas/1689567032-gVcEc.jpg', 'Mahkota Kayong', 'https://www.traveloka.com/id-id/hotel/detail?spec=18-07-2023.19-07-2023.1.1.HOTEL.3000020013330.Mahkota%20Kayong%20Hotel%20Sukadana.2&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU13LUNuufACdbU0usK5vg0dM0tKsNUio4Rxug1zOzHJilcvZa8YdqqIySdppe7dolTIewZlxfjiOGz6oXLTucMvN0%2BgQ3yZPvZcoHwUFNN%2BZpcr%2F%2FNa8o9ElfN8zOYhzzZeg0X586laFpeUViPi9rxBcYmczU3HzTUANmcdA%2FApQmhLDdV0WLeT%2FFKfQ0QL8LH02Dvlx%2F8PjYogEE5yzx6g6yOKyKeIDf7jO3GM45O1o1hmSkmz3HiZNSbS8gXb3CDW9nmlhkqLKa4lLkAkZpAHV963ys2NrltIW%2BbQKlqk4qm4S7Cgbz2lRpkxStTSbOvvnzag3zLIuKsio2qc%2FE%2BJE%2B%2Bwh5K1%2Bwq63%2B1AW5LQHeOjRTl6ytxGba%2F42pjcyyRmz51ZlYihIRID%2FQ4SJG%2BgPCXx%2FQJW8KnlZlfGmFEnEzHaEIke4gLKBu993M9y7827HBXiXvvsHN9BhHd%2FKWGiNmO0SRV1ogUSH81Kgs05BsmVHb%2FDz2eMMIR3KhBjDXyMn1qdaM1viWqCGwU1siX1ZIegdsZIo1sjlWnbsTcjefS6Pj3RtIU6lROCEB6QAgiS1WJabPNVEO7waQAXksTDyQHUY2wqyAfRzb44KOjG0poBVHSJ1fq5iJGt%2Fs2ROyG2r1yuKaZ4GSAmh5BaCjz8%3D%22%7D&loginPromo=1', '-', 'Fasilitas Mahkota Kayong Hotel Sukadana:\r\nArea Parkir\r\nBar, cafe, dan lounge\r\nRuangan fungsional\r\nLayanan kamar 24 jam\r\nRestoran\r\nLobi\r\nWifi', '-1.241394282937236', '109.9480868518712', '2023-07-17 04:14:50', '2023-07-16 21:14:50'),
('99a8869c-9c50-412d-b94d-e56d7d4f5df2', '99740e24-0146-4e3f-99c7-0b21a92a1b10', 'Kapuas Kayong', 'Jl. Batu Daya, Sutera, Kec. Sukadana, Kabupaten Kayong Utara, Kalimantan Barat 78852', 'Penginapan Kapuas Kayong adalah tempat peristirahatan di pusat kota Sukadana dengan harga yang relatif murah. Dengan fasilitas yang ditawarkan dan harga terjangkau, Penginapan Kapuas Kayong selalu menjadi pilihan para turis untuk beristirahat dan bersantai.', 'Admin Kapuas Kayong', '0852-0000-0797', 'Setiap Hari', '00:00:00', '23:59:00', 'app/Fasilitas/1689567555-tz7FM.jpg', 'app/Fasilitas/1689567555-L8oyc.jpg', 'app/Fasilitas/1689567555-aA78v.jpg', 'Triesno Wibowo', 'https://id.top10place.com/penginapan-kapuas-kayong-1145872819.html', '-', 'kamar lantai 1,2,3\r\nCafetaria\r\nParkir', '-1.2139216751760447', '109.95252128856656', '2023-07-17 04:19:15', '2023-07-16 21:19:15'),
('99a88dcf-35bc-4e1f-8f66-04d315df20e9', '99740e24-0146-4e3f-99c7-0b21a92a1b10', 'Villa Bukit Paoh', 'Jl. Sungai Gali, Pangkalan Buton, Kec. Sukadana, Kabupaten Kayong Utara, Kalimantan Barat 78852', 'Villa Bukit Paoh disebut juga rumah singgah bukit paoh adalah kawasan wisata perbukitan yang dipercantik dengan berbagai bangunan seperti deretan bangunan villa, taman bunga, jalanan tikus yang dibeton dan berundak undak serta lokasi favorit para pengunjung yaitu Kolam Renang.\r\nHal yang unik di Villa Bukit Paoh sebagai ciri khas perbukitan adalah deretan bebatuan yang ditumbuhi dengan rerumputan yang tertata rapi.\r\n\r\nVilla Bukit Paoh sendiri objek wisata alam dan buatan yang dibuka dan di diresmikan langsung oleh Bupati Kayong Utara, Drs. Citra Duani pada tanggal 27 Februari 2019.\r\n\r\nJadi, Untuk para wisatawan yang menginginkan tempat rekreasi bernuansa alam perbukitan yang suasananya mirip seperti villa di puncak Jawa Barat bisa mencoba menginap di villa/Rumah Singgah dan Restoran Bukit Paoh ini.', 'Admin Villa Bukit Paoh', '0895704347120', 'Setiap Hari', '00:00:00', '23:59:00', 'app/Fasilitas/1689567849-Mro56.jpg', 'app/Fasilitas/1689567849-UVo83.jpg', 'app/Fasilitas/1689567849-pvxMU.jpg', 'Bukit Paoh', 'https://villa-bukit-paoh.business.site/', '-', '1.Kolam Renang\r\n2.Villa/Penginapan\r\ndisediakan AC, Pemanas air, tempat tidur, serta toilet dan sarapan pagi\r\n3.Taman Villa Bukit Paoh\r\n4.Spot Foto\r\n5.Wedding dan Prewedding\r\n6.Live Musik\r\n7. kamar bilas,\r\n8. Kamar Ganti,\r\n9. Toilet serta\r\n10. Musholla', '-1.2276528240507296', '109.98372163283453', '2023-07-17 04:24:09', '2023-07-16 21:24:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalender_wisata`
--

CREATE TABLE `kalender_wisata` (
  `id` char(36) NOT NULL,
  `id_bulan` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tempat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sumber_foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kalender_wisata`
--

INSERT INTO `kalender_wisata` (`id`, `id_bulan`, `nama`, `deskripsi`, `tempat`, `tanggal`, `foto`, `sumber_foto`, `created_at`, `updated_at`) VALUES
('99a525f4-0821-405e-a28c-eedae76e7577', '99a522a0-7b14-41b2-b3b5-92c577a64d13', 'Pameran HUT Kayong Utara', 'Dalam rangka memeriahkan HUT Kayong Utara tahun ini pemerintah mengadakan agenda Pameran.', 'Kayong Utara', '2023-07-15', 'app/Kalender-Wisata/1689345853-ByKBO.jpg', 'infopublik', '2023-07-14 07:44:14', '2023-07-14 07:44:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('990557a3-f0c9-4fe9-9cad-fa68ef296cc7', 'Wisata Alam', '2023-04-25 21:10:42', '2023-04-25 21:10:42'),
('998e81be-61e5-474f-9832-4ccb9df88c9d', 'Wisata Budaya', '2023-07-12 02:57:54', '2023-07-11 19:57:54'),
('99a5138d-f1cc-43f9-9393-3c15a57f4286', 'Wisata Religi', '2023-07-14 06:52:47', '2023-07-14 06:52:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_fasilitas`
--

CREATE TABLE `kategori_fasilitas` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kategori_fasilitas`
--

INSERT INTO `kategori_fasilitas` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('99740e24-0146-4e3f-99c7-0b21a92a1b10', 'Hotel & Penginapan', '2023-06-19 22:02:04', '2023-06-19 22:02:04'),
('99aa354b-ccbd-4882-b65f-28eae18bb1d3', 'Cafe & Resto', '2023-07-16 20:06:16', '2023-07-16 20:06:16'),
('99aa3561-b9af-4377-aca5-f9a80fc0a606', 'Travel', '2023-07-16 20:06:30', '2023-07-16 20:06:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak_wisata`
--

CREATE TABLE `kontak_wisata` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `link_wa` varchar(255) NOT NULL,
  `link_fb` varchar(255) NOT NULL,
  `link_ig` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kontak_wisata`
--

INSERT INTO `kontak_wisata` (`id`, `nama`, `jabatan`, `link_wa`, `link_fb`, `link_ig`, `foto`, `created_at`, `updated_at`) VALUES
('98e510e2-cfaa-48ec-92f6-8f6e9960e2bd', 'EKA WAHYUDI', 'S.PD.,M.CS.', '+62 821-5591-3491', 'https://www.facebook.com/eka.wahyudi2', 'https://www.instagram.com/yudii_algebra/', 'app/Kontak/1683090123-lNww4.jpg', '2023-05-03 05:02:03', '2023-05-02 22:02:03'),
('99a529df-7fcd-4e61-beef-35ac399086d8', 'Setra Kusumardana', 'Ketua DPC Masata Ketapang', '+62 812-8090-253', 'https://www.facebook.com/jelajahketapang/', 'https://www.instagram.com/thesetra/', 'app/Kontak/1689567967-1wFYa.png', '2023-07-17 04:30:52', '2023-07-16 21:30:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `taman`
--

CREATE TABLE `taman` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `alamat` varchar(255) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `nama_pengelola` varchar(255) DEFAULT NULL,
  `no_pengelola` varchar(15) DEFAULT NULL,
  `hari_buka` varchar(20) DEFAULT NULL,
  `jam_buka` time DEFAULT NULL,
  `jam_tutup` time DEFAULT NULL,
  `sumber_foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `taman`
--

INSERT INTO `taman` (`id`, `nama`, `deskripsi`, `alamat`, `link`, `nama_pengelola`, `no_pengelola`, `hari_buka`, `jam_buka`, `jam_tutup`, `sumber_foto`, `foto`, `foto1`, `foto2`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
('996823ab-04b7-4f1a-af33-069b55de6fc2', 'Batu Barat', 'Taman Nasional Gunung Palung telah ditetapkan sebagai kawasan konservasi di daerah Kalimantan Barat dengan status sebagai Kawasan Suaka Alam yang ditunjuk berdasarkan Surat Keputusan Het Zelfbestuur Van Het Landschap Simpang Nomor: 4/13.ZB/1937 tanggal 4 Februari 1937 yang disahkan di Pontianak tanggal 29 April 1937 oleh De Resident Der Westerafdeling Van Borneo.', 'Desa Batu Barat, Kecamatan Simpang Hilir, Kabupaten Kayong Utara, Kalimantan Barat', 'https://tngunungpalung.com/info-pengunjung/objek-daya-tarik-wisata-alam/batu-barat/', 'Taman Nasional Gunung Palung', '-', 'Setiap Hari', '07:00:00', '18:00:00', 'Website TNGP', 'app/Taman-Nasional/1689568580-FKmPm.png', 'app/Taman-Nasional/1689568580-djrP5.png', 'app/Taman-Nasional/1689568580-JbUcF.jpg', '-1.1522660234420448', '110.1912188025416', '2023-07-17 04:53:38', '2023-07-16 21:53:38'),
('99a8f519-d519-4dcf-885e-ad83f61d3dec', 'Bukit Peramas', '-', 'Kecamatan Sukadana, Kabupaten Kayong Utara', 'https://tngunungpalung.com/info-pengunjung/objek-daya-tarik-wisata-alam/bukit-peramas/', 'Taman Nasional Gunung Palung', '-', NULL, NULL, NULL, 'Website TNGP', 'app/Taman-Nasional/1689568764-3PO26.png', 'app/Taman-Nasional/1689568764-8GLW2.png', 'app/Taman-Nasional/1689568764-7acAe.jpg', '-1.25299999850784', '109.9772191460244', '2023-07-17 04:53:58', '2023-07-16 21:53:58'),
('99aa57ca-4dfe-4528-ac06-bbe1efcf5029', 'Lubuk Baji', NULL, 'Desa Sedahan Jaya, Kecamatan Sukadana, Kabupaten Kayong Utara, Kalimantan Barat', 'https://tngunungpalung.com/info-pengunjung/objek-daya-tarik-wisata-alam/lubuk-baji/', 'Taman Nasional Gunung Palung', '-', 'Setiap Hari', '07:00:00', '18:00:00', 'Website TNGP', 'app/Taman-Nasional/1689568961-fsXLL.png', 'app/Taman-Nasional/1689568961-9aD2O.jpg', 'app/Taman-Nasional/1689568961-iMCTF.jpg', '-1.2130228316665814', '110.01257153041858', '2023-07-17 04:55:17', '2023-07-16 21:55:17'),
('99aa5a4c-025f-4e6a-9b05-5ffc4a1a662d', 'Riam Berasap', NULL, 'Hulu Sungai Siduk, Desa Riam Berasap Jaya, Kabupaten Kayong Utara', 'https://tngunungpalung.com/info-pengunjung/objek-daya-tarik-wisata-alam/riam-berasap/', 'Taman Nasional Gunung Palung', '-', 'Setiap Hari', '07:00:00', '18:00:00', 'Website TNGP', 'app/Taman-Nasional/1689569384-9PooM.jpg', 'app/Taman-Nasional/1689569384-VtE56.jpg', 'app/Taman-Nasional/1689569384-WeOPW.jpg', '-1.2879813404506595', '110.21722687535302', '2023-07-16 21:49:44', '2023-07-16 21:49:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confir_password` varchar(255) NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `confir_password`, `poto`, `created_at`, `updated_at`) VALUES
('98c928a3-78e3-4b13-8b3c-ad06e6042395', 'Admin Base', 'admin', '$2y$10$Z1bLMy7nvY9WMY2dBbNt/.i9BZAMliFdo8OgKVu.YJsAZ1QlKaiYG', 'admin', 'app/user/1679897376-fbAJq.jpg', '2023-03-27 10:11:41', '2023-03-27 03:11:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `atraksi_wisata`
--
ALTER TABLE `atraksi_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `desa_wisata`
--
ALTER TABLE `desa_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kalender_wisata`
--
ALTER TABLE `kalender_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_fasilitas`
--
ALTER TABLE `kategori_fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak_wisata`
--
ALTER TABLE `kontak_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `taman`
--
ALTER TABLE `taman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
