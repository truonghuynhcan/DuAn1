-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 06:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galaxybook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(5) NOT NULL,
  `HoVaTen` varchar(100) NOT NULL,
  `Avatar` varchar(255) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `Gmail` varchar(255) NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `TaiKhoan` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `PhanQuyen` varchar(100) NOT NULL,
  `NgayTao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `Id` int(5) NOT NULL,
  `Id_NguoiDung` int(5) NOT NULL,
  `Id_Sach` int(5) NOT NULL,
  `NoiDung` text NOT NULL,
  `NgayBinhLuan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `Id` int(5) NOT NULL,
  `TenAnh` varchar(255) NOT NULL,
  `DuongDan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `Id` int(5) NOT NULL,
  `Id_NguoiDung` int(5) NOT NULL,
  `TongDon` double(9,2) NOT NULL,
  `TrangThai` varchar(50) NOT NULL,
  `NgayMua` date DEFAULT NULL,
  `TenNguoiNhan` varchar(100) NOT NULL,
  `SDTNguoiNhan` varchar(10) NOT NULL,
  `DiaChiNguoiNhan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadonchitiet`
--

CREATE TABLE `hoadonchitiet` (
  `Id` int(5) NOT NULL,
  `Id_HoaDon` int(5) NOT NULL,
  `Id_Sach` int(5) NOT NULL,
  `SoLuong` int(5) NOT NULL,
  `Gia` double(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `Id` int(5) NOT NULL,
  `HoVaTen` varchar(100) NOT NULL,
  `Avatar` varchar(255) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `Gmail` varchar(255) NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `TaiKhoan` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `NgayTao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `Id` int(5) NOT NULL,
  `TenSach` varchar(255) NOT NULL,
  `Id_HinhAnh` int(5) NOT NULL,
  `Id_TheLoai` int(5) NOT NULL,
  `Id_TacGia` int(5) NOT NULL,
  `NguoiDich` varchar(100) NOT NULL,
  `NamXuatBan` varchar(4) NOT NULL,
  `NhaXuatBan` varchar(100) NOT NULL,
  `SoLuongConHang` int(5) NOT NULL,
  `DonGia` double(9,2) NOT NULL,
  `GiamGia` int(2) DEFAULT 0,
  `LuotXem` int(5) DEFAULT 0,
  `NgayNhap` date DEFAULT NULL,
  `LuotBinhLuan` int(5) DEFAULT 0,
  `LuotMua` int(5) DEFAULT 0,
  `DanhGia` double(3,2) DEFAULT 0.00,
  `TrangThai` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

CREATE TABLE `tacgia` (
  `Id` int(5) NOT NULL,
  `HoVaTen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `Id` int(5) NOT NULL,
  `TenTheLoai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_binhluan(Id_NguoiDung)_nguoidung` (`Id_NguoiDung`),
  ADD KEY `FK_binhluan(Id_Sach)_sach` (`Id_Sach`);

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_hoadon(Id_NguoiDung)_nguoidung` (`Id_NguoiDung`);

--
-- Indexes for table `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_hoadonchitiet(Id_HoaDon)_nguoidung` (`Id_HoaDon`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_sach(Id_HinhAnh)_hinhanh` (`Id_HinhAnh`),
  ADD KEY `FK_sach(Id_TacGia)_tacgia` (`Id_TacGia`),
  ADD KEY `FK_sach(Id_TheLoai)_theloai` (`Id_TheLoai`);

--
-- Indexes for table `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`Id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `FK_binhluan(Id_NguoiDung)_nguoidung` FOREIGN KEY (`Id_NguoiDung`) REFERENCES `nguoidung` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_binhluan(Id_Sach)_sach` FOREIGN KEY (`Id_Sach`) REFERENCES `sach` (`Id`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `FK_hoadon(Id_NguoiDung)_nguoidung` FOREIGN KEY (`Id_NguoiDung`) REFERENCES `nguoidung` (`Id`) ON UPDATE CASCADE;

--
-- Constraints for table `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD CONSTRAINT `FK_hoadonchitiet(Id_HoaDon)_nguoidung` FOREIGN KEY (`Id_HoaDon`) REFERENCES `hoadon` (`Id`);

--
-- Constraints for table `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `FK_sach(Id_HinhAnh)_hinhanh` FOREIGN KEY (`Id_HinhAnh`) REFERENCES `hinhanh` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_sach(Id_TacGia)_tacgia` FOREIGN KEY (`Id_TacGia`) REFERENCES `tacgia` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_sach(Id_TheLoai)_theloai` FOREIGN KEY (`Id_TheLoai`) REFERENCES `theloai` (`Id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
