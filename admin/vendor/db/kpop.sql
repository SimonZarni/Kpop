-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2024 at 12:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `image`, `password`, `confirm_password`) VALUES
(2, 'Than Soe Aung', 'david@gmail.com', NULL, NULL, '$2y$10$CXkdddvzd3g94EgUofQaM.s4gP2ORjkcoSO0ha6cc7llrHxA2nUSS', '$2y$10$Aknrqhj9kcvifSJ08BRhn.TNK8CqndSmvxXGAaQ9LAiebUMio6DB.'),
(3, 'Than Soe Aung', 'thansoeaung@gmail.com', NULL, NULL, '$2y$10$8ypfizlloETn5iG2AHUsSODtUO5ZTosULONd8b5iZoNEGUSwIzRYS', '$2y$10$cs8l5UyREHwFLEFfy7LAaue.E7VyQuY44bUKnw9BFY.sS0lcdJ7pu'),
(7, 'David', 'thansoeaung5989@gmail.com', NULL, NULL, '$2y$10$k6TNhzmL/IDt4A8MozklXObfaM7fG3hCL0IZy7QmODGOwYm5YOCBq', '$2y$10$HO.uJuHkQ/X9xeXuL46yKu2wVyPF9CPTEzZKtgXL9Dm6TlzHZBdL2'),
(9, 'test', 'thansoeaung1213@gmail.com', NULL, NULL, '$2y$10$rUCkbGweORmabKflPViEnegPB9DCL.pgO0/P2r2rwCFyzwIl2fl3W', '$2y$10$wZmN8iN.5SVzDaZmqoUK1.nF/BjnoblUn6PEotLw2Vrd121MyNWYi'),
(15, 'test', 'maymyopwint825@gmail.com', NULL, NULL, '$2y$10$VI5.vmsCaGTCzb8zO6xE1O7PagaXnLLO0VZnwtoulvBw0Hc.c6Nje', '$2y$10$I75Rwa0G808GZ4R.RaMHCuA0arApiH.NHb.K70nnOvd3TdvSX0Jiy'),
(17, 'khucho', 'khucho101@gmail.com', NULL, NULL, '$2y$10$tC1Hjahk.TRm5G2vjLqcQ.yC1.gu4btgpavv/sj6LvQEXDWrm8b2W', '$2y$10$6/ROyNrxYRD9MJcEQWArmu9PLTYJz9J/k7LH8aI.5e.E.TVr8Hlhy'),
(18, 'Simon', 'simonallen364@gmail.com', NULL, NULL, '$2y$10$1Jf9rv5FpWA8BFydJ2WnrO81zgE6lsDDdFzV4Fv3XxYquKE61/AjC', '$2y$10$iRt3DWIRjUDEYC78yFV7meSjzK.EeEPXuB4CzIYHPqikpx.vHl91G'),
(20, 'Zarni', 'simonzarni03@gmail.com', NULL, NULL, '$2y$10$IhoIPHbC3EDBCdE0kff6fe4lYdA/.bg9.4bYzLZeipCIhV2s20ofu', '$2y$10$tKqgViT.fE/QnEMcLlXyT.VG1JIzFVllsVd5uZ2osd6h.kJ7ohnCK');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `viber` varchar(255) NOT NULL,
  `telegram_user_name` varchar(255) NOT NULL,
  `township_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `name`, `email`, `phone`, `facebook`, `viber`, `telegram_user_name`, `township_id`) VALUES
(1, 'Than Soe Aung', 'thansoeaung1213@gmail.com', '09779698434', 'https://www.facebook.com/vampier.vampier.9887', '09779698434', 'kroos_025', 2),
(2, 'Hlaing Min Htun', 'phillip@gmail.com', '09788929105', 'https://www.facebook.com/vampier.vampier.9887', '09788929105', 'itzmephillip', 4),
(3, 'Swan Htet Zarni', 'simonzarni@gmail.com', '09962019616', 'https://www.facebook.com/simon.allen.1840070', '09962019616', 'SimonZarni', 5),
(4, 'May Myo Pwint', 'maymyopwint825@gmail.com', '09951168541', 'https://www.facebook.com/melanie.joy.94', '09951168541', 'melanie_1212112', 13);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`) VALUES
(1, 'accessory', '1693064633accessory.jpg'),
(2, 'album', '1693065074album_cover.jpg'),
(3, 'lightstick', '1693065664lightstick1.jpg'),
(4, 'magazine', '1693064689magazine.jpg'),
(5, 'photobook', '1693064700photobook1.jpg'),
(6, 'seasongreeting', '1693064717seasongreeting.jpg'),
(7, 'vinyl', '1693065253vinyl2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(1, 'Mandalay'),
(2, 'Yangon'),
(3, 'Magway');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `date`) VALUES
(1, 'Gino', 'gino@gmail.com', '097888929105', 'Omnis ex nam laudantium odit illum harum, excepturi accusamus at corrupti, velit blanditiis unde perspiciatis, vitae minus culpa? Beatae at aut consequuntur porro adipisci aliquam eaque iste ducimus expedita accusantium?', '2023-08-08 07:06:13'),
(2, 'Phillip', 'phillip@gmail.com', '09738363736', 'Omnis ex nam laudantium odit illum harum, excepturi accusamus at corrupti, velit blanditiis unde perspiciatis, vitae minus culpa? Beatae at aut consequuntur porro adipisci aliquam eaque iste ducimus expedita accusantium?', '2023-08-08 07:06:13'),
(3, 'dave', 'hlaingminhtun28@gmail.com', '09378364837', 'hi luv u', '2023-08-17 07:24:43'),
(4, 'Suri', 'suri@gmail.com', '09989898983', 'lkdfasofjao ', '2023-09-06 08:44:39'),
(5, 'Suri', 'suri@gmail.com', '09989898983', 'lkdfasofjao ', '2023-09-06 08:48:11'),
(6, 'Suri', 'suri@gmail.com', '09989898983', 'lkdfasofjao ', '2023-09-06 08:49:05'),
(7, 'Suri', 'suri@gmail.com', '09989898983', 'lkdfasofjao ', '2023-09-06 08:52:13'),
(8, 'Suri', 'suri@gmail.com', '09989898983', 'lkdfasofjao ', '2023-09-06 08:52:49'),
(9, 'Suri', 'suri@gmail.com', '09989898983', 'lkdfasofjao ', '2023-09-06 08:53:10'),
(10, 'Suri', 'suri@gmail.com', '09989898983', 'lkdfasofjao ', '2023-09-06 08:53:29'),
(11, 'Suri', 'suri@gmail.com', '09989898983', 'lkdfasofjao ', '2023-09-06 08:55:15'),
(12, 'Suri', 'suri@gmail.com', '09989898983', 'lkdfasofjao ', '2023-09-06 08:55:50'),
(13, 'Suri', 'suri@gmail.com', '09989898983', 'lkdfasofjao ', '2023-09-06 08:56:51'),
(14, 'Suri', 'suri@gmail.com', '09989898983', 'lkdfasofjao ', '2023-09-06 08:57:07'),
(15, 'Suri', 'suri@gmail.com', '09989898983', 'Hey please reply me', '2023-09-06 14:55:23'),
(16, 'Lisa Album', 'david@gmail.com', '09989898983', 'Hey please reply me', '2023-09-06 14:56:16'),
(17, 'Simon', 'simonallen364@gmail.com', '0955555', 'Hello', '2023-11-15 03:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `township_id` int(11) NOT NULL,
  `fee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `township_id`, `fee`) VALUES
(3, 2, '1000'),
(4, 3, '2000'),
(5, 5, '1500'),
(6, 6, '2000'),
(7, 7, '2500'),
(8, 8, '2500'),
(9, 9, '2500'),
(10, 10, '3500'),
(21, 10, '3000'),
(23, 12, '3000'),
(24, 11, '3500'),
(25, 12, '3500');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `order_code` int(11) NOT NULL,
  `voucher_code` varchar(255) NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `quantity`, `total_price`, `order_code`, `voucher_code`, `order_date`) VALUES
(71, 1, 2, 2, 42000, 54441, '112233', '2023-09-09'),
(72, 1, 11, 3, 420000, 54441, '112233', '2023-09-09'),
(86, 7, 1, 1, 25000, 47739, 'qqq111', '2023-09-09'),
(88, 9, 1, 1, 25000, 12036, '123456', '2023-11-25'),
(89, 9, 3, 1, 28500, 12036, '123456', '2023-11-25'),
(91, 9, 1, 2, 50000, 22891, '555555', '2023-12-19'),
(92, 9, 2, 1, 21000, 51515, '123333', '2024-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_code` int(11) NOT NULL,
  `township_id` int(11) NOT NULL,
  `voucher_code` varchar(255) NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `user_id`, `order_code`, `township_id`, `voucher_code`, `order_date`, `status`) VALUES
(42, 1, 54441, 3, '112233', '2023-09-09', 'accept'),
(53, 7, 25845, 9, 'bbbbbb', '2023-09-09', 'accept'),
(54, 7, 35024, 9, 'hhhhhh', '2023-09-09', 'accept'),
(55, 7, 47739, 7, 'qqq111', '2023-09-09', 'accept'),
(56, 9, 12036, 13, '123456', '2023-11-25', 'accept'),
(57, 9, 22891, 2, '555555', '2023-12-19', 'accept'),
(58, 9, 51515, 3, '123333', '2024-03-11', 'accept');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `avaliable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `created_date`, `name`, `description`, `version`, `cat_id`, `team_id`, `image`, `price`, `avaliable`) VALUES
(1, '2023-07-14', 'Blackpink Bookmark', 'Jisoo Bookmark Set', '', 1, 1, '1692860953bpBookmark.png', 25000, 0),
(2, '2023-07-14', 'BTS Butter Mask', 'OT7 Mask Set', '', 1, 3, '1692860968mask.png', 21000, 0),
(3, '2023-07-14', 'Newjeans Phonecase', 'Tokki Phone Case Iphone', '', 1, 4, '1692860977njPhoneCase.png', 28500, 0),
(4, '2023-07-14', 'TXT Ring', 'Heart Ring Limited Edition', '', 1, 5, '1692860993txtring.png', 30000, 0),
(5, '2023-07-14', 'Seventeen Powerbank', 'Powerbank for Carats', '', 1, 6, '1692861004svtPowerbank.jpg', 18000, 0),
(6, '2023-07-14', 'ATEEZ Official Lightstick', '', 'Version A', 3, 23, '1694267480ateez-official-light-stick.jpg', 100000, 0),
(7, '2023-07-14', 'WJSN Official Lightstick', '', 'Version One', 3, 28, '1694267504wjsn-official-light-stick-ver2.jpg', 99000, 0),
(8, '2023-07-14', 'THEBOYZ Official Lightstick', '', 'Red Version', 3, 26, '1694267578the-boyz-official-light-stick.jpg', 120000, 0),
(9, '2023-07-14', 'TWICE Official Lightstick', '', 'Rainbow Version', 3, 14, '1694267607txt-official-light-stick.jpg', 120000, 0),
(10, '2023-07-14', 'RED VELVET Official Lightstick', '', 'Version Three', 3, 25, '1694267632red-velvet-official-light-stick.jpg', 125000, 0),
(11, '2023-07-14', 'EXO The 7th Album ', 'Pc + Photobook + CD + Polaroid + Lyrics Poster + Main Poster', 'Random Version', 2, 2, '1692861019exo.jpg', 140000, 0),
(12, '2023-07-14', ' UNLOCK MY WORLD fromis9 1st Album', 'Pc + Photobook + CD + Polaroid + Lyrics Poster + Main Poster', 'Digipack Version', 2, 12, '1694267429fromis9.jpg', 139000, 0),
(13, '2023-07-14', 'Newjeans 1st EP NEWJEANS', 'Pc + Photobook + CD + Polaroid + Lyrics Poster + Main Poster', 'Random Version', 2, 4, '1692861031newjeans-1st-ep-album.jpg', 110000, 0),
(14, '2023-07-14', 'SHINee HARD ï¿½ The 8th Album', 'Pc + Photobook + CD + Polaroid + Lyrics Poster + Main Poster', 'Criminal Version', 2, 13, '1692861106shinee.jpg', 100000, 0),
(15, '2023-07-14', 'YOUNHA Studio Live Album ï¿½MINDSETï¿½ ', 'Pc + Photobook + CD + Polaroid + Lyrics Poster + Main Poster', 'Limited Edition', 2, 10, '1692861118yunha.jpg', 150000, 0),
(16, '2023-07-14', 'GLASS Aespa April Issue', '', '', 4, 29, '1694267653aespa.jpg', 32000, 0),
(17, '2023-07-14', 'KNIGHT Kep1er August Issue', '', '', 4, 30, '1694267670kep1er.jpg', 32500, 0),
(18, '2023-07-14', 'ELLE Rose October Issue', '', '', 4, 1, '1694267687rose.jpg', 35000, 0),
(19, '2023-07-14', 'MAPS Minnie July Issue', '', '', 4, 31, '1694267720minnie.png', 38000, 0),
(20, '2023-07-14', 'GQ Sehun May Issue ', '', '', 4, 2, '1694267736sehun.jpg', 30000, 0),
(26, '2023-07-14', 'TWICE I am Sana Photobook', 'Stickers + PC + Poster', 'Purple Version', 5, 14, '1694267761i-am-sana.jpg', 120000, 0),
(27, '2023-07-14', 'SF9 HWIYOUNG Photobook', 'Stickers + PC + Poster', 'Elegance Version', 5, 32, '1694267780hwiyoung.jpg', 132000, 0),
(28, '2023-07-14', ' Blackpink LALISA Photobook', 'Stickers + PC + Poster', 'L Version', 5, 1, '1694267796lisa.jpg', 135000, 0),
(29, '2023-07-14', 'NCT JAEHYUN Photobook', 'Stickers + PC + Poster', 'Version A', 5, 24, '1694267825JAEHYUN ver.jpg', 128000, 0),
(30, '2023-07-14', ' DREAMCATCHER Photobook ', 'Stickers + PC + Poster', 'Nightmare Version', 5, 7, '1694267840dreamcatcher.jpg', 145000, 0),
(31, '2023-07-14', ' ITZY 2023 Season Greetings', 'Stickers + PC ', '', 6, 8, '1694267863itzy.jpg', 50000, 0),
(32, '2023-07-14', 'LESSERAFIM 2023 Season Greetings', 'Stickers + PC ', '', 6, 35, '1694267880less.jpg', 49000, 0),
(33, '2023-07-14', 'SNSD 2020 Season Greetings', 'Stickers + PC ', '', 6, 38, '1694267891snsd.jpg', 45000, 0),
(34, '2023-07-14', 'Purple Kiss Season Greetings ', 'Stickers + PC ', '', 6, 36, '1694267904purple.jpg', 52000, 0),
(35, '2023-07-14', ' Blackpink ROSE R Vinyl', 'Lyrics Book + PC', 'Lavender Edition', 7, 1, '1694267971rose.jpg', 150000, 0),
(36, '2023-07-14', 'Red Velvet WENDY LIKE WATER Vinyl', 'Lyrics Book + PC', 'Water Edition', 7, 25, '1694267959wendy.jpg', 145000, 0),
(37, '2023-07-14', 'B.I WATERFALL Vinyl', 'Lyrics Book + PC', 'Stone Edition', 7, 41, '1694267983bi.jpg', 130000, 0),
(38, '2023-07-14', 'AKMU NEXT EPISODE Vinyl', 'Lyrics Book + PC', 'Ruby Edition', 7, 40, '1694268002akmu.jpg', 125000, 0),
(39, '2023-07-14', ' EXO DFTF Vinyl ', 'Lyrics Book + PC', 'Sehun Edition', 7, 2, '1694268014exo.jpg', 150000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `username`, `rating`, `review`, `status`) VALUES
(20, 'gino', 4, 'lksdhflhdofjoirjrgo', 'accept'),
(21, 'cho', 4, 'lhsflo lhoo hldkh lsh', 'accept'),
(22, 'dee', 3, 'adfsssdddf', 'accept'),
(23, 'dee', 3, 'aaaaaaaa', 'reject'),
(24, 'Simon', 5, 'Hello', 'accept');

-- --------------------------------------------------------

--
-- Table structure for table `stock_details`
--

CREATE TABLE `stock_details` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `buy_priceEach` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stock_details`
--

INSERT INTO `stock_details` (`id`, `product_id`, `qty`, `buy_priceEach`, `date`) VALUES
(18, 1, '10', '20000', '2023-08-01'),
(19, 11, '10', '99000', '2023-08-01'),
(20, 12, '10', '90000', '2023-08-01'),
(21, 1, '20', '20000', '2023-08-10'),
(22, 11, '20', '99000', '2023-08-10'),
(23, 12, '20', '90000', '2023-08-10'),
(24, 1, '50', '20000', '2023-08-20'),
(25, 11, '10', '99000', '2023-08-20'),
(26, 2, '10', '18000', '2023-08-01'),
(27, 1, '30', '20000', '2023-09-06'),
(28, 11, '100', '99000', '2023-08-21'),
(29, 12, '20', '90000', '2023-08-21'),
(30, 1, '10', '20000', '2023-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `image`) VALUES
(1, 'BLACKPINK', '1693124480bp1.jpg'),
(2, 'EXO', '1694268170exo1.jpg'),
(3, 'BTS', '1694268279bts1.jpg'),
(4, 'NEWJEANS', '1694268345newsjean.jpg'),
(5, 'TXT', '1694268644txt.jpg'),
(6, 'SEVENTEEN', '1694268564seventeen.jpg'),
(7, 'DREAMCATCHER', '1694268795dc.jpg'),
(8, 'ITZY', '1694269260itzy.jpg'),
(10, 'YOUNHA', '1694269402younha.jpg'),
(11, 'IVE', '1694269580ive.jpg'),
(12, 'FROMIS9', '1694269683f9.jpg'),
(13, 'SHINEE', '1694269923shinee.jpg'),
(14, 'TWICE', '1694269944twice.jpg'),
(15, 'IU', '1694269968iu.jpg'),
(16, 'LOVELYZ', '1694270014lovelyz.jpg'),
(17, 'BTOB', '1694270227btob2.jpg'),
(18, 'IZ*ONE', '1694270369izone1.jpg'),
(19, 'STRAYKIDS', '1694270404straykids.jpg'),
(20, 'TAEYEON', '1694270640taeyeon.jpg'),
(22, 'MAMAMOO', '1694270472mamamoo.jpg'),
(23, 'ATEEZ', '1694270727ateez.jpg'),
(24, 'NCT', '1694270930nct1.jpg'),
(25, 'RED VELVET', '1694271047rb.jpg'),
(26, 'THEBOYZ', '1694271075theboyz.jpg'),
(27, 'TREASURE', '1694271103treasure.jpg'),
(28, 'WJSN', '1694271213wjsn.jpg'),
(29, 'AESPA', '1694271233aespa.jpg'),
(30, 'KEP1ER', '1694271375kep1er.jpg'),
(31, '(G)-IDLE', '1694271399gidle.jpg'),
(32, 'SF9', '1694271474sf9.jpg'),
(33, 'NMIXX', '1694271504nmixx.jpg'),
(34, 'WONHO', '1694271584wonho.jpg'),
(35, 'LESSERAFIM', '1694271729less.jpg'),
(36, 'PURPLE KISS', '1694271749purplekiss.jpg'),
(37, 'WOODZ', '1694271825woodz.jpg'),
(38, 'SNSD', '1694271843snsd.jpg'),
(39, 'STAYC', '1694271867stayc.jpg'),
(40, 'AKMU', '1694271884akmu.jpg'),
(41, 'B.I', '1694272054bi.jpg'),
(42, 'YESUNG', '1694272155yesung1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team_product`
--

CREATE TABLE `team_product` (
  `id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `township`
--

CREATE TABLE `township` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `township`
--

INSERT INTO `township` (`id`, `name`, `city_id`) VALUES
(2, 'Chan Mya Thar Zi', 1),
(3, 'Chan Aye Thar Zan', 1),
(4, 'PyiGyiTaKon', 1),
(5, 'AungMyaeTharZan', 1),
(6, 'Kamaryut', 2),
(7, 'Sangyoung', 2),
(8, 'Mayangonn', 2),
(9, 'Alone', 2),
(10, 'Hlegu', 2),
(11, 'Hline', 2),
(12, 'Tarmwe', 2),
(13, 'Mahar Aung Myay', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `confirm_password`) VALUES
(1, 'Aung', 'thansoeaung101010@gmail.com', '$2y$10$sPjHSSHbu.Md3QP9wfZOPuOyjhnDWUNK.yJgwLUJXn7twPcrwfiEK', '$2y$10$VCi61CzDQMpP7QbBZMR8b.CnFfOFXYM3L9/NbxmMY66M5mfo/uTum'),
(4, 'test', 'thansoeaung1213@gmail.com', '$2y$10$Qsl9LHzqEmgjOo8CeKJKm..9N7xieF0nZyezEW3LgXXf2MQ4zhCPi', '$2y$10$ViknjCtPKhuCJe.vu6mIgu3VOAHZpPJ2XS2v/0XaMUqrPz6IwB/aC'),
(7, 'khucho', 'khucho101@gmail.com', '$2y$10$wWo.5YrCg.dqIvSGz5xXy.MxRdQkZTtYGhkDDkOQsjOvHd0uwTJJe', '$2y$10$M39VFMD1WskpMXwR3q.TOOZYCATvFKncGQ3v9tt/MAY8/Ct9BN8yW'),
(9, 'Simon', 'simonallen364@gmail.com', '$2y$10$exm8kYT73/p2dPFMcqwLh.f5szk/mpPdQuyJjwOLUzSEIqaiqL.6y', '$2y$10$y.s4nG9EiYLB0Bb/8UPXm.5a75BTpJDO2c0a3GP3/j3PqQ/GGs2NC'),
(11, 'Helilin', 'helilin15@gmail.com', '$2y$10$Az8DPcEjkuuAzLskMyXEr.O3ZlaYyidXT0gyN4kCYR9l2KnJRMO2e', '$2y$10$/RLCvcj2iAAPt9UVCtu50eDnC8w6frl.XmEZubIcybQ.AlCYWT/W6'),
(12, 'Zarni', 'simonzarni03@gmail.com', '$2y$10$QOL.QPREI94oM97Ye1l4CObEbAo3/80DGcDRsiM.cfOgKHEuQmXYS', '$2y$10$TRAR.fC.T.l3s1KSOm1Ys.yQgPORA9Dt/qehQvLgND/MJwX0R5OZy');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `township_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voucher_code`
--

CREATE TABLE `voucher_code` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `used_by_user` int(11) DEFAULT NULL,
  `agent_id` int(11) NOT NULL DEFAULT 0,
  `created_at` date DEFAULT current_timestamp(),
  `used_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voucher_code`
--

INSERT INTO `voucher_code` (`id`, `code`, `used_by_user`, `agent_id`, `created_at`, `used_at`) VALUES
(28, '001122', 1, 1, '2023-09-09', '2023-09-09'),
(30, '112233', 1, 1, '2023-09-09', '2023-09-09'),
(40, 'aaaaaa', 7, 4, '2023-09-09', '2023-09-09'),
(41, 'bbbbbb', 7, 4, '2023-09-09', '2023-09-09'),
(42, 'hhhhhh', 7, 3, '2023-09-09', '2023-09-09'),
(43, 'qqq111', 7, 2, '2023-09-09', '2023-09-09'),
(44, '123456', 9, 3, '2023-11-25', '2023-11-25'),
(45, '555555', 9, 3, '2023-12-19', '2023-12-19'),
(46, '123333', 9, 3, '2024-03-11', '2024-03-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `township_id` (`township_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivery_ibfk_1` (`township_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `township_id` (`township_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_details`
--
ALTER TABLE `stock_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_product`
--
ALTER TABLE `team_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `township`
--
ALTER TABLE `township`
  ADD PRIMARY KEY (`id`),
  ADD KEY `township_ibfk_1` (`city_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher_code`
--
ALTER TABLE `voucher_code`
  ADD PRIMARY KEY (`id`),
  ADD KEY `use_by_user` (`used_by_user`),
  ADD KEY `agent_id` (`agent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `stock_details`
--
ALTER TABLE `stock_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `team_product`
--
ALTER TABLE `team_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `township`
--
ALTER TABLE `township`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voucher_code`
--
ALTER TABLE `voucher_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `agent_ibfk_1` FOREIGN KEY (`township_id`) REFERENCES `township` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`township_id`) REFERENCES `township` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`township_id`) REFERENCES `township` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`);

--
-- Constraints for table `stock_details`
--
ALTER TABLE `stock_details`
  ADD CONSTRAINT `stock_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `team_product`
--
ALTER TABLE `team_product`
  ADD CONSTRAINT `team_product_ibfk_2` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`),
  ADD CONSTRAINT `team_product_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `township`
--
ALTER TABLE `township`
  ADD CONSTRAINT `township_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);

--
-- Constraints for table `voucher_code`
--
ALTER TABLE `voucher_code`
  ADD CONSTRAINT `voucher_code_ibfk_1` FOREIGN KEY (`used_by_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `voucher_code_ibfk_2` FOREIGN KEY (`agent_id`) REFERENCES `agent` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
