-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2022 at 01:57 AM
-- Server version: 5.7.33
-- PHP Version: 8.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` char(36) NOT NULL,
  `id_penulis` char(36) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `detail` text,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `id_penulis`, `judul`, `detail`, `foto`, `created_at`, `updated_at`) VALUES
('13', '12', 'Wae Rebo - Manggarai, Nusa Tenggara Timur', 'Rumah unik berbentuk kerucut di Wae Rebo bernama Mbaru Niang, Toppers. Rumah ini adalah salah satu bagian dari kentalnya budaya di pulau Flores. Selain pemandangannya yang memikat, kamu juga akan dibuat terpesona dengan keramahan penduduknya.', 'app/blog/1662378682-ImziB.jpg', '2022-09-05 11:51:22', '2022-09-05 04:51:22'),
('14', '12', 'Api Biru Kawah Ijen - Banyuwangi, Jawa Timur', 'Kawah Ijen merupakan satu-satunya lokasi di dunia di mana gunung aktif memiliki fenomena api biru atau blue fire. Fenomena ini terjadi karena tekanan gas yang berinteraksi dengan belerang.\r\n\r\nToppers dapat mengunjungi Kawah Ijen di atas Gunung Ijen yang berada di perbatasan antara Kabupaten Banyuwangi dan Kabupaten Bondowoso.', 'app/blog/1662388865-GabrE.jpg', '2022-09-05 14:41:06', '2022-09-05 07:41:06'),
('97326d30-978a-445d-9e1f-bda7940d2fb9', '97326646-4506-4250-aac5-f1d2c6668262', 'Raja Ampat - Papua Barat', 'Raja Ampat merupakan sebuah kepulauan dengan 4 pulau utama yaitu Pulau Waigeo, Pulau Batanta, Pulau Salawati, dan Pulau Misool. Perairan Raja Ampat termasuk di 10 perairan terbaik di seluruh dunia, lho.\r\n\r\nKepulauan Raja Ampat memiliki banyak pulau kecil dan berbagai spesies terumbu karang. Bahkan menurut The Nature Conservancy and Conservation International sekitar 75% spesies karang di dunia hidup di sini. Total ada 1.318 jenis ikan, 699 jenis moluska dan 537 terumbu karang yang mendiami Raja Ampat.', 'app/blog/1662428360-iKvrz.jpg', '2022-09-06 01:39:20', '2022-09-05 18:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `komentars`
--

CREATE TABLE `komentars` (
  `id` char(36) NOT NULL,
  `id_blog` char(36) NOT NULL,
  `level` int(2) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentars`
--

INSERT INTO `komentars` (`id`, `id_blog`, `level`, `nama`, `email`, `pesan`, `created_at`, `updated_at`) VALUES
('97326fab-8b56-4455-8634-dbb4df34d027', '97326d30-978a-445d-9e1f-bda7940d2fb9', 1, 'muhammad', 'muhammad@gmail.com', 'mandik senek nyaman kali yee min, segar gian rase aik nan', '2022-09-05 18:46:16', '2022-09-05 18:46:16'),
('97327036-914a-49f3-8442-8850cb3e4aa1', '97326d30-978a-445d-9e1f-bda7940d2fb9', 2, 'muhammad', 'muhammad@gmail.com', 'terima kasih...', '2022-09-05 18:47:47', '2022-09-05 18:47:47'),
('97327287-31fb-48dc-98a4-d9799a20b4e6', '14', 1, 'dimas', 'dimas@gmail.com', 'kalau ngecamp bisa tidak min?', '2022-09-05 18:54:16', '2022-09-05 18:54:16'),
('973272d0-522e-4e67-af79-90c1261ee9d9', '14', 2, 'dimas', 'dimas@gmail.com', 'terima kasih kak, tetapi sangat tidak dianjurkan karena dapat membahayakan diri sendiri', '2022-09-05 18:55:04', '2022-09-05 18:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nomor_hp` varchar(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id`, `nama`, `username`, `email`, `nomor_hp`, `password`, `created_at`, `updated_at`) VALUES
('12', 'apekate1', 'ape', 'apemah@gmail.com', '09894812428', '$2y$10$X5bntAgdSbw79QP4bx1KXOTlfO/BLx4kmPhCRW8hZhK/VwK7r3GS.', '2022-08-29 12:52:02', '2022-08-29 05:52:02'),
('97326646-4506-4250-aac5-f1d2c6668262', 'dimas', 'dimasssss', 'dimas@gmail.com', '4718347214', '$2y$10$r659uRYRTKZPNiWe3laEJuEmwd/iadr1NG.OY6RpSKwnrM4yE2hHK', '2022-09-05 18:20:00', '2022-09-05 18:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'inul', 'apemah', 'ape@gmail.com', '$2y$10$H6t.0dVudoYZSLu6vG8Es.iqLS4xQhBOpy/PPIqqGvpIoyUSF2sai', NULL, '2022-08-29 11:27:57', '2022-08-29 04:27:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentars`
--
ALTER TABLE `komentars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
