-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2024 at 02:51 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kamandaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `penyewaan` (
  `booking_id` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `idMobil` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pakai_supir` varchar(10) NOT NULL,
  `mulai_sewa` date NOT NULL,
  `selesai_sewa` date NOT NULL,
  `total_hari` int NOT NULL,
  `payment_id` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `supir` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `no_sim` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `penyewa` (
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `no_sim` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `pembayaran` (
  `payment_id` varchar(32) NOT NULL,
  `booking_id` varchar(30) NOT NULL,
  `bukti_img` text NOT NULL,
  `wajib_bayar` varchar(50) NOT NULL,
  `status_payment` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `mobil` (
  `idMobil` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `merk` varchar(21) COLLATE utf8mb4_general_ci NOT NULL,
  `pabrikan` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `tahun` int DEFAULT NULL,
  `hargaOne` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `hargaTwo` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nomor_plat` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nomor_rangka` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nomor_mesin` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kapasitas_mesin` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `tipe_bbm` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(32) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `admin` (
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `admin` (`email`, `password`, `name`) VALUES
('superadmin@kamandaka.com', 'kamandaka123', 'Super Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `penyewaan`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `idMobil` (`idMobil`),
  ADD KEY `email_fk` (`email`),
  ADD KEY `payment_id_fk` (`payment_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `supir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `rental`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`idMobil`)


--
-- Indexes for table `users`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `email_fk` FOREIGN KEY (`email`) REFERENCES `members` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_mobil_fk` FOREIGN KEY (`idMobil`) REFERENCES `rental` (`idMobil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_id_fk` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`payment_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
