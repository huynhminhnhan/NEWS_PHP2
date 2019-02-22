-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 23, 2019 at 12:40 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `idTinTuc` int(10) UNSIGNED NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaitin`
--

CREATE TABLE `loaitin` (
  `id` int(10) UNSIGNED NOT NULL,
  `Ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenKhongDau` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaitin`
--

INSERT INTO `loaitin` (`id`, `Ten`, `TenKhongDau`) VALUES
(1, 'Giáo dục', 'giao-duc'),
(2, 'Khoa học ', 'khoa-hoc'),
(3, 'Thời sự', 'thoi-su'),
(4, 'Show biz', 'show-biz');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `Ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `Ten`, `Hinh`, `link`) VALUES
(1, 'Phan Thị Mơ thử sức với sân khấu kịch', 'phan-thi-mo-1-3984-1490342174_490x294.jpg', 'phan-thi-mo-thu-suc-voi-san-khau-kich'),
(2, 'Phạm Hương khoe giọng trong MV đầu tay', 'pham-huong-khoe-giong-trong-mv-dau-tay-1491286120_490x294.jpg', 'pham-huong-khoe-giong-trong-mv-dau-tay'),
(3, 'Ngọc Trinh khác lạ với màu tóc mới', 'ngoc-trinh-khoe-hinh-anh-khac-la-voi-toc-moi-nhuom-1491274712_490x294.jpg', 'ngoc-trinh-khac-la-voi-mau-toc-moi');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(10) NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TieuDeKhongDau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TomTat` text COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` longtext COLLATE utf8_unicode_ci,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiBat` tinyint(1) DEFAULT '0',
  `SoLuotXem` int(11) NOT NULL DEFAULT '0',
  `date_created` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `idLoaiTin` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Ngọc Hương', 'huongnguyen08.cv@gmail.com', '$2y$10$CEdbdsSMU9Nv.6yjdRMEtOhR0kdIiOBWtNR2Bup9upjueOPbcsM9m'),
(2, 'Hương Hương', 'huongnguyen08@gmail.com', '$2y$10$VSYdTPHgu6iQ0NBouPmQTe2nxENOouLMEcjQiG54cFNlUbEInurxC'),
(3, 'User_3', 'user_3@mymail.com', '$2y$10$DES3NL8tozlU99dvO9o4lOfYyYcaM9n86gJcJV5.fz2G8b6qLa6Gq'),
(4, 'User_4', 'user_4@mymail.com', '$2y$10$xqfx9motmrCAEuEjCyQroOo/eFqum1hPhgwnz5LSLkhdyGHvf6l8O'),
(5, 'User_5', 'user_5@mymail.com', '$2y$10$rTviORV94uWv/KcNK7s0UeGwlQ2DSN5UGSOAzMkZ6sGgfr9nE2fSq'),
(6, 'User_6', 'user_6@mymail.com', '$2y$10$AwcqOIqwnPM9ZkYE1e6x.OkQAjY5V7H.WP73VVod/2mGNp1Y0zWUy'),
(7, 'User_7', 'user_7@mymail.com', '$2y$10$nSJhdDCm7zfF5uZpkhEuQufsLAqc1OZZnTME4AcTIx/2PsnnbrpZ6'),
(8, 'User_8', 'user_8@mymail.com', '$2y$10$s1ik567.aaB/ZbykP5zBR.20Ps5Qd6EPkhHFGdSQwERYmX1G/CnEK'),
(9, 'User_9', 'user_9@mymail.com', '$2y$10$/GQdzMM1G0CsrEF7RnQy4eHCkO2SqTNbE6QyRXCBtOuvyqIaFoMnm'),
(10, 'User_10', 'user_10@mymail.com', '$2y$10$gV.fAHxmpvB57JXKIEuUYumcZZhbCqtM8MpXDZOfDFBTl6X0WAHiK'),
(11, 'h', 'huongnguyenak96@gmail.comhh', 'c4ca4238a0b923820dcc509a6f75849b'),
(12, 'Hương Hương', 'huongnguyenak96@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(14, 'H', 'huongnguyenak96@gmail.comhhHHHHHHHHHHHHHHHHHHHHH', 'c4ca4238a0b923820dcc509a6f75849b'),
(15, 'hhh', 'huongnguyenak96@gmail.comhhh', 'c4ca4238a0b923820dcc509a6f75849b'),
(16, '', '', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_iduser_foreign` (`idUser`);

--
-- Indexes for table `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tintuc_idloaitin_foreign` (`idLoaiTin`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `comment` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_idloaitin_foreign` FOREIGN KEY (`idLoaiTin`) REFERENCES `loaitin` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
