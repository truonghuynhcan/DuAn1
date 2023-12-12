-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2023 lúc 08:29 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `galaxybook`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `Id` int(5) NOT NULL,
  `Id_NguoiDung` int(5) NOT NULL,
  `Id_Sach` int(5) NOT NULL,
  `NoiDung` text NOT NULL,
  `NgayBinhLuan` date NOT NULL,
  `TrangThai` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `Id` int(5) NOT NULL,
  `Id_Sach` int(5) NOT NULL,
  `TenAnh` varchar(255) NOT NULL,
  `DuongDan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `Id` int(5) NOT NULL,
  `Id_NguoiDung` int(5) NOT NULL,
  `TongDon` double(9,2) DEFAULT NULL,
  `TrangThai` varchar(50) DEFAULT NULL,
  `NgayMua` date DEFAULT NULL,
  `TenNguoiNhan` varchar(100) NOT NULL,
  `SDTNguoiNhan` varchar(10) NOT NULL,
  `DiaChiNguoiNhan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonchitiet`
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
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `Id` int(5) NOT NULL,
  `HoVaTen` varchar(100) NOT NULL,
  `Avatar` varchar(255) DEFAULT 'avatar1.jpg',
  `DiaChi` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `TaiKhoan` varchar(255) NOT NULL,
  `MatKhau` varchar(32) NOT NULL COMMENT 'dùng hàm md5 mã hóa',
  `NgayTao` date NOT NULL,
  `VaiTro` int(1) DEFAULT 0 COMMENT '0 site, 1 admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `Id` int(5) NOT NULL,
  `TenSach` varchar(255) NOT NULL,
  `NguoiDich` varchar(100) NOT NULL,
  `NamXuatBan` int(4) NOT NULL,
  `NhaXuatBan` varchar(100) NOT NULL,
  `SoLuongConHang` int(5) NOT NULL,
  `DonGia` double(9,2) NOT NULL,
  `GiamGia` int(2) DEFAULT 0,
  `LuotXem` int(5) DEFAULT 0,
  `NgayNhap` date DEFAULT NULL,
  `LuotBinhLuan` int(5) DEFAULT 0,
  `LuotMua` int(5) DEFAULT 0,
  `DanhGia` double(3,2) DEFAULT 0.00,
  `TrangThai` int(1) DEFAULT 1,
  `MoTa` varchar(225) NOT NULL,
  `MoTaChiTiet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach_tacgia`
--

CREATE TABLE `sach_tacgia` (
  `Id` int(5) NOT NULL,
  `Id_Sach` int(5) NOT NULL,
  `Id_TacGia` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach_theloai`
--

CREATE TABLE `sach_theloai` (
  `Id` int(5) NOT NULL,
  `Id_Sach` int(5) NOT NULL,
  `Id_TheLoai` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

CREATE TABLE `tacgia` (
  `Id` int(5) NOT NULL,
  `HoVaTen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `Id` int(5) NOT NULL,
  `TenTheLoai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_binhluan(Id_Sach)_sach` (`Id_Sach`),
  ADD KEY `FK_binhluan(Id_NguoiDung)_NguoiDung` (`Id_NguoiDung`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_HinhAnh(Id_Sach)_Sach` (`Id_Sach`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_hoadon(Id_NguoiDung)_nguoidung` (`Id_NguoiDung`);

--
-- Chỉ mục cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_hoadonchitiet(Id_HoaDon)_nguoidung` (`Id_HoaDon`),
  ADD KEY `FK_hoadonchitiet(Id_Sach)_sach` (`Id_Sach`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `sach_tacgia`
--
ALTER TABLE `sach_tacgia`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_S&TL(Id_Sach)_Sach` (`Id_Sach`),
  ADD KEY `FK_S&TL(Id_TheLoai)_TheLoai` (`Id_TacGia`);

--
-- Chỉ mục cho bảng `sach_theloai`
--
ALTER TABLE `sach_theloai`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_S&TL(Id_Sach)_Sach` (`Id_Sach`),
  ADD KEY `FK_S&TL(Id_TheLoai)_TheLoai` (`Id_TheLoai`);

--
-- Chỉ mục cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sach_tacgia`
--
ALTER TABLE `sach_tacgia`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sach_theloai`
--
ALTER TABLE `sach_theloai`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `FK_binhluan(Id_NguoiDung)_NguoiDung` FOREIGN KEY (`Id_NguoiDung`) REFERENCES `nguoidung` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_binhluan(Id_Sach)_sach` FOREIGN KEY (`Id_Sach`) REFERENCES `sach` (`Id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `FK_HinhAnh(Id_Sach)_Sach` FOREIGN KEY (`Id_Sach`) REFERENCES `sach` (`Id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `FK_hoadon(Id_NguoiDung)_nguoidung` FOREIGN KEY (`Id_NguoiDung`) REFERENCES `nguoidung` (`Id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD CONSTRAINT `FK_hoadonchitiet(Id_HoaDon)_nguoidung` FOREIGN KEY (`Id_HoaDon`) REFERENCES `hoadon` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_hoadonchitiet(Id_Sach)_sach` FOREIGN KEY (`Id_Sach`) REFERENCES `sach` (`Id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sach_tacgia`
--
ALTER TABLE `sach_tacgia`
  ADD CONSTRAINT `FK_sach_tacgia(Id_Sach)_Sach` FOREIGN KEY (`Id_Sach`) REFERENCES `sach` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_sach_tacgia(Id_TacGia)_TacGia` FOREIGN KEY (`Id_TacGia`) REFERENCES `tacgia` (`Id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sach_theloai`
--
ALTER TABLE `sach_theloai`
  ADD CONSTRAINT `FK_S&TL(Id_Sach)_Sach` FOREIGN KEY (`Id_Sach`) REFERENCES `sach` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_S&TL(Id_TheLoai)_TheLoai` FOREIGN KEY (`Id_TheLoai`) REFERENCES `theloai` (`Id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
