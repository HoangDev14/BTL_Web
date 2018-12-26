-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 03:15 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sb_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `khachsan`
--

CREATE TABLE `khachsan` (
  `MaKS` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenKS` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `SoSao` int(11) NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ThanhPho` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GiaPhong` int(11) NOT NULL,
  `MoTa` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Anh` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachsan`
--

INSERT INTO `khachsan` (`MaKS`, `TenKS`, `SoSao`, `DiaChi`, `ThanhPho`, `GiaPhong`, `MoTa`, `Anh`) VALUES
('1011', 'Khách sạn Polygon', 3, '120 Lý Tự Trọng, Quận 1, TP Hồ Chí Minh', 'Hồ Chí Minh', 850000, '', 'ks6.png'),
('111', 'Apricot Hotel', 4, '136 Hàng Trống, Hoàn Kiếm, Hà Nội', 'Hà Nội', 14000000, 'Trang trọng, cổ điển, tiện nghi  ', 'ks3.png'),
('123', 'The Lapis Hotel', 5, '21 Trần Hưng Đạo, Phan Chu Trinh, Hà Nội ', 'Hà Nội', 18810935, 'Tọa lạc tại trung tâm thành phố, Lapis là điểm nghỉ dưỡng lý tưởng với đầy đủ tiện nghi', 'ks2.png'),
('289', 'Sofitel Metropole ', 5, '15 Ngô Quyền, Hà Nội', 'Hà Nội', 1300000, 'Khách sạn hàng đầu Việt Nam', 'ks4.png'),
('555', 'Khách sạn Sen', 2, '82 Lê Lai, Quận 1, Thành phố Hồ Chí Minh', 'Hồ Chí Minh', 405000, '', 'ks5.png');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `TenDangNhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `Admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`TenDangNhap`, `HoTen`, `SDT`, `Email`, `GioiTinh`, `MatKhau`, `Admin`) VALUES
('admin', 'Quan Tri Vien', '0123456', 'admin@yahoo.com', 'Nam', 'admin', 1),
('hoang', 'Vu Huy Hoang', '09062686', 'hoang@gmail.com', 'Nam', 'hoang', 1),
('user', 'Nguoi Dung', '23896566', 'usser@gmail.com', 'Nu', 'user', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vebay`
--

CREATE TABLE `vebay` (
  `SoHieu` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `HangBay` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Anh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GiaTien` int(11) NOT NULL,
  `DiemKH` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `DiemDen` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `NgayBay` date NOT NULL,
  `CatCanh` time NOT NULL,
  `HaCanh` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `khachsan`
--
ALTER TABLE `khachsan`
  ADD PRIMARY KEY (`MaKS`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`TenDangNhap`);

--
-- Indexes for table `vebay`
--
ALTER TABLE `vebay`
  ADD PRIMARY KEY (`SoHieu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
