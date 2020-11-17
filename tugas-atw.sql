-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2020 at 06:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas-atw`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Tas lengan', '1. Sling bag\r\n2. Backpack\r\n3. Shoulder bag\r\n4. Clutch\r\n5. Tote Bag\r\n6. Waist bag\r\n', NULL, NULL, '2020-11-14 09:18:59'),
(2, 'Flat Shoes', '1. Ballet flats.\r\n2. Work flats.\r\n3. Lace flats. \r\n4. Sneakers.\r\n5. Oxford/Brogues Shoes.\r\n6. Loafer.\r\n7. Espadrilles.', NULL, NULL, '2020-11-14 09:21:52'),
(3, 'Sepatu', '1. Sneakers\r\n2. Block Heels\r\n3. Ballerina\r\n4. Boots\r\n5. Sepatu Hak Tinggi (High Heels\r\n6. Platform.\r\n7. Wedges.\r\n8. Espadrilles.', NULL, NULL, '2020-11-14 02:34:57'),
(4, 'Gamis', 'Bahan Katun.\r\nKain Katun Jepang.\r\nKatun Paris.\r\nBahan Linen.\r\nKain Rayon. \r\nKain Polyester. \r\nBahan Wolfis. \r\nKain Cotton Combed.', NULL, NULL, '2020-11-14 02:37:49'),
(5, 'Jam Tangan', '1. Jam Tangan Michael Kors.\r\n2. Jam Tangan Fossil.\r\n3. Jam Tangan Casio.\r\n4. Jam Tangan Daniel Wellington.\r\n5. Jam Tangan Guess.\r\n6. Jam Tangan Gucci.\r\n7. Jam Tangan Marc Jacobs.\r\n8. Jam Tangan Swatch', NULL, NULL, '2020-11-14 04:36:31'),
(6, 'Perhiasan', '1. Gelang\r\n2. Kalung\r\n3. Bros\r\n4. Cincin\r\n5. Mutiara', NULL, NULL, '2020-11-14 02:41:48'),
(20, 'Kosmetik', '1. Bedak\r\n2. Lipstik\r\n3. Maskara\r\n4. Eyeshadow\r\n5. BlushOn\r\n6. Celak\r\n7. Pelembab Bibir', NULL, '2020-11-12 22:30:07', '2020-11-14 04:38:48'),
(23, 'Parfum', '1. Parfum Original Joe\r\n2. Parfum Original Calvin\r\n3. Parfum Original\r\n4. Parfum Vanila\r\n5. Parfum Eau faiche', NULL, '2020-11-14 01:45:44', '2020-11-14 04:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `berat`, `deskripsi`, `stok`, `created_at`, `updated_at`) VALUES
(1, 'Pakaian Muslimah', 150000, 400, 'Nama: New Maya Syar\'i Kids\r\n\r\nMaterial : Supernova\r\n\r\nUkuran Tanggung 12 s/d 14 Tahun\r\n\r\nLD. 95-100\r\nPB. 130-135\r\n\r\nSIZE : fit to L', 20, '2020-11-10 04:24:39', '2020-11-11 02:57:15'),
(2, 'Jilbab bergo', 23000, 150, 'Khimar Bergo Maryam\r\n(Warna di Model Maroon, Navy, Mocca)\r\nHijab instan yang simple, nyaman dipakai. Dan pastinya pas di hati dan pas di kantong\r\n\r\nDetail Produk :\r\nA. Bahan : Diamond Italiano/Strech (Bertekstur halus cantik yang sangat nyaman dan adem saat di gunakan di daerah panas sekalipun. Bahan tebal  namun tetap ringan , jatuh dan mudah di bentuk.)\r\nB. KELEBIHAN BAHAN DIAMOND\r\n- Tekstur Jeruk dan Pendar Terlihat Eksklusif\r\n- Kainnya Lentur & Ringan\r\n- tidak panas\r\n- lembut khas kain creepe\r\n- tidak menerawang\r\n- tidak gampang kusut & Tidak Kaku\r\n- Kain Bersifat Jatuh, Lembut dan Indah', 30, '2020-11-10 20:47:33', '2020-11-11 00:36:29'),
(7, 'Sepatu Flatshoes', 69000, 400, 'Size : 37 - 40\r\nBahan : Dixie PREMIUM, Sol Karet Non Slip\r\nWarna : Abu, Hitam, Krem, Merah, Salem, Cokelat Muda (Tan)\r\n\r\nModel simple dan trendy\r\nKualitas bagus harga terjangkau\r\nNyaman dipakai dan perawatan mudah', 40, '2020-11-11 00:39:50', '2020-11-11 00:39:50'),
(8, 'SEPATU POXING (BEIER)', 50000, 500, 'BAHAN SINTETIS\r\nUKURAN NORMAL 36-40\r\nWARNA: \r\n\r\nPUTIH HITAM\r\nPUTIH PINK\r\nPUTIH FULL', 10, '2020-11-11 02:30:30', '2020-11-11 02:30:30'),
(12, 'flatshoes', 50000, 200, 'size  chart:\r\n                      37 panjang kaki 23.cm \r\n                      38 panjang kaki 23.5 cm \r\n                      39 panjang kaki 24cm \r\n                      40 panjang kaki 24.5cm', 30, '2020-11-11 02:58:08', '2020-11-11 02:58:08');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `harga_awal` int(11) DEFAULT NULL,
  `harga_promo` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id`, `nama`, `jumlah`, `harga_awal`, `harga_promo`, `deskripsi`, `created_at`, `updated_at`) VALUES
(3, 'Gratis Ongkir', '10', 49000, 30000, 'gratis ongkir berlaku mulai dari tanggal 17 sampai tanggal 21 November.\r\nyuk buruan belanja :)', '2020-11-16 22:55:01', '2020-11-17 07:51:40'),
(4, 'Diskon 10%', '10', 40000, 25000, 'ada yang baru nih hari ini sampai besok lusa kami memberikan diskon 10% untuk penbelian setiap produk', '2020-11-17 04:19:04', '2020-11-17 07:51:56'),
(5, 'Diskon 70%', '1', 99000, 69000, 'ada diskon 70% ni untuk satu jenis produk saja nih yuk buruan di pesan', '2020-11-17 06:49:24', '2020-11-17 07:52:20'),
(6, 'Gratis Ongkir wilayah ketapang', '10', 49000, 49000, 'nah ada gtatis ongkir nihbut kalian untuk sekitaran daerah ketapang insyaallah amanah', '2020-11-17 07:53:34', '2020-11-17 07:53:34'),
(7, 'Beli Dua Gratis Satu', '6', 56000, 56000, 'nih ada 6 produk yang kami berikan diskon yakni dengan membel dua buah produk maka kami akan memberikan satu produk secara gratis. Yuk buruan Pesan', '2020-11-17 07:55:19', '2020-11-17 07:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `nama`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'lenis', 'leni2@gmail.com', 'leni', '$2y$10$jpr5mAwA7T5k8h81i1aeh.Oio.PjgU43YnkqFc2M2fc4Sy0YgD/XK', NULL, '2020-11-16 23:12:51', '2020-11-16 23:12:51'),
(7, 'naimah', 'naimahdaulay270@gmail.com', 'nai', '$2y$10$nA9Eh9wPlplQSSOIRTB9Iu5Xa5390qzdA4NX/oJusXkHeceXIYaY6', NULL, '2020-11-16 23:38:43', '2020-11-16 23:38:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
