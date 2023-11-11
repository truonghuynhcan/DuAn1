-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 11, 2023 lúc 03:58 PM
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
-- Cấu trúc bảng cho bảng `admin`
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

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`Id`, `HoVaTen`, `Avatar`, `DiaChi`, `Gmail`, `SDT`, `TaiKhoan`, `MatKhau`, `PhanQuyen`, `NgayTao`) VALUES
(1, 'Trương Huỳnh Can', 'truonghuynhcan.png', 'Phường 13, Gò Vấp, TP HCM', 'truonghuynhcan@gmail.com', '0971735117', 'truonghuynhcan', '12345678', 'Quản trị viên', '2023-11-10'),
(2, 'Trần Quốc Đạt ', 'tranquocdat.png', 'Cầu sài gòn, TP HCM', 'tranquocdat@gmail.com', '0837583951', 'tranquocdat', '87654321', 'Lập Trình Viên', '2023-11-09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
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
  `TongDon` double(9,2) NOT NULL,
  `TrangThai` varchar(50) NOT NULL,
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
  `TrangThai` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`Id`, `TenSach`, `NguoiDich`, `NamXuatBan`, `NhaXuatBan`, `SoLuongConHang`, `DonGia`, `GiamGia`, `LuotXem`, `NgayNhap`, `LuotBinhLuan`, `LuotMua`, `DanhGia`, `TrangThai`) VALUES
(53, 'Sách - Hướng Dẫn Ôn Thi Hiệu Quả Môn Triết Học Mác - Lênin (Dùng Cho Sinh Viên Đại Học Không Chuyên Lí Luận Chính Trị)', 'không', 2021, 'NXB Đại Học Sư Phạm', 20, 122400.00, 15, 951, '2023-11-06', 13, 18, 4.00, b'1'),
(54, 'Sách - Sách Trắng - Công Nghệ Thông Tin Và Truyền Thông Việt Nam 2021', 'không', 2021, 'NXB Thông tin và Truyền thông', 30, 97200.00, 17, 747, '2023-11-06', 20, 62, 5.00, b'1'),
(55, 'Sách - Giáo Trình Ngôn Ngữ C++', 'không', 2017, 'NXB Khoa học và Kỹ Thuật', 50, 120000.00, 27, 388, '2023-11-06', 10, 40, 3.00, b'1'),
(56, 'Sách Mật mã và An toàn thông tin - Lý thuyết và Ứng dụng', 'không', 2018, 'nxbthongtinvatruyenthong', 150, 100100.00, 11, 835, '2023-11-06', 50, 60, 1.00, b'1'),
(57, 'Sách - IoT (Internet Vạn Vật) - Kiến Trúc IoT, IoT Công Nghiệp Và Công Nghiệp 4.0, IoT Tổ Ong', 'không', 2023, 'NXB Thông tin và Truyền thông', 250, 120000.00, 20, 521, '2023-11-06', 140, 150, 1.00, b'1'),
(58, 'Sách - Các Hình Thức Tấn Công Mạng - Cyberspace', 'không', 2022, 'NXB Khoa học và Kỹ thuật', 400, 80500.00, 10, 448, '2023-11-06', 200, 210, 4.00, b'1'),
(59, 'Sách - Sách A-Z kiến thức + nghề lập trình cho người mới bắt đầu', 'không', 2023, 'Nhà xuất bản Thanh Niên', 600, 90600.00, 18, 1370, '2023-11-06', 1, 10, 3.00, b'1'),
(60, 'Sách - Giáo Trình Kỹ Thuật Lập Trình C Căn Bản Và Nâng Cao + Giáo Trình C++ Và Lập Trình Hướng Đối Tượng', 'không', 2023, 'Bách Khoa Hà Nội', 1000, 301000.00, 23, 234, '2023-11-06', 6, 50, 5.00, b'1'),
(61, 'Sách - 12 Xu Hướng Công Nghệ Trong Thời Đại 4.0 - TTR Bookstore', 'không', 2019, '1980 Books', 98, 152000.00, 28, 1329, '2023-11-06', 20, 18, 3.00, b'1'),
(62, 'Sách - Công Nghiệp Tương Lai - The Industries Of The Future', 'không', 2018, 'NXB TRE', 15, 127500.00, 28, 1059, '2023-11-06', 40, 62, 4.00, b'1'),
(63, 'Sách Khoa Học Khám Phá Dữ Liệu Lớn NXB Trẻ', 'không', 2020, 'NXB TRE', 15, 112000.00, 9, 656, '2023-11-06', 30, 40, 3.00, b'1'),
(64, 'Sách - Deep Learning Cuộc Cách Mạng Học Sâu', 'không', 2020, 'NXB CONG THUONG', 89, 97500.00, 20, 1064, '2023-11-06', 50, 60, 1.00, b'1'),
(65, 'Sách - An toàn thông tin - Nghệ thuật ẩn mình', 'không', 2019, 'NXB CONG THUONG', 1000, 544000.00, 19, 659, '2023-11-06', 60, 150, 3.00, b'1'),
(66, 'abooks - Gián Điệp Mạng - Cuộc Rượt Đuổi Ngoạn Mục Trong Mê Lộ Máy Tính', 'không', 2019, 'NXB CONG THUONG', 100, 172500.00, 8, 1098, '2023-11-06', 65, 210, 2.00, b'1'),
(67, 'Sách - An toàn thông tin - Hacker lược sử [AlphaBooks]', 'không', 2019, 'NXB CONG THUONG', 990, 455000.00, 18, 350, '2023-11-06', 55, 990, 1.00, b'1'),
(68, 'Sách - Life 3.0-Loài người trong kỷ nguyên trí tuệ nhân tạo', 'không', 2018, 'NXB THE GIOI', 2222, 124000.00, 13, 1432, '2023-11-06', 33, 50, 2.00, b'1'),
(69, 'Sách Cải tổ doanh nghiệp trong thời đại số', 'không', 2019, 'NXB TONG HOP', 123, 150000.00, 18, 1070, '2023-11-06', 100, 500, 2.00, b'1'),
(70, 'Sách - Ký Sự BrSE - Những Nẻo Đường Nghề BrSE (Triệu Anh Tuấn + Nguyễn Văn Trọng)', 'không', 2020, 'NXB THE GIOI', 8950, 555555.00, 15, 378, '2023-11-06', 150, 170, 2.00, b'1'),
(71, 'Sách - Thành phố thông minh - Nền tảng, nguyên lý và ứng dụng', 'không', 2019, 'NXB CHINH TRI QUOC GIA VA SU THAT', 1000, 98000.00, 6, 454, '2023-11-06', 320, 330, 2.00, b'1'),
(72, 'Khoa học Khám Phá: Trí Tuệ Giả Tạo (Tái Bản)', 'không', 2019, 'NXB TRẺ', 400, 98000.00, 10, 81, '2023-11-06', 200, 300, 3.00, b'1'),
(73, 'Sách Code Dạo Kí Sự - Lập Trình Viên Đâu Phải Chỉ Biết Code', 'không', 2018, 'NSB Dân Trí', 150, 1159000.00, 18, 1373, '2023-11-06', 130, 230, 2.00, b'1'),
(74, 'Sách AI - Trí Tuệ Nhân Tạo', 'không', 2017, 'NSB Kim Đồng', 300, 1160000.00, 27, 1105, '2023-11-06', 300, 333, 5.00, b'1'),
(75, 'Sách Clean Code - Mã Sạch Và Con Đường Trở Thành Lập Trình Viên Giỏi', 'không', 2019, 'NSB Dân Trí', 420, 385000.00, 29, 910, '2023-11-06', 540, 600, 5.00, b'1'),
(76, 'Sách Data Science for Business', 'không', 2013, 'NSB Dân trí', 100, 155000.00, 17, 138, '2023-11-06', 490, 500, 4.00, b'1'),
(77, 'Thiết kế mạng Intranet', 'không', 2019, 'NXB BÁCH KHOA HÀ NỘI', 455500, 190000.00, 11, 371, '2023-11-06', 340, 450, 4.00, b'1'),
(78, 'Sách - Giáo Trình Triết Học ( Bìa mềm )', 'không', 2021, 'NXB Đại Học Sư Phạm', 1000, 650000.00, 16, 1109, '2023-11-06', 200, 250, 1.00, b'1'),
(79, 'Sách - Giáo Trình Lập Trình PYTHON', 'không', 2020, 'NXB Đại Học Sư Phạm', 55000, 450000.00, 6, 1097, '2023-11-06', 300, 400, 5.00, b'1'),
(80, 'Lập trình hướng đối tượng JAVA core dành cho người mới bắt đầu học lập trình', 'không', 2019, 'NXB Lao Động', 400, 500000.00, 9, 693, '2023-11-08', 240, 300, 1.00, b'1'),
(81, 'Giáo Trình Lập Trình Android', 'không', 2018, 'NXB Xây Dựng', 400, 500000.00, 18, 771, '2023-11-08', 140, 160, 4.00, b'1'),
(82, 'Giáo Trình Kỹ Thuật Lập Trình C Căn Bản Và Nâng Cao', 'không', 2019, 'Huy Hoàng Bookstore', 500, 500000.00, 24, 430, '2023-11-08', 170, 180, 4.00, b'1'),
(83, 'Tớ Học Lập Trình - Làm Quen Với PYTHON', 'không', 2016, 'Nhà Xuất Bản Thế Giới', 6600, 32314.00, 18, 960, '2023-11-08', 240, 290, 5.00, b'1'),
(84, 'Trọn bộ 4 quyển tiểu thuyết Hannibal – Thomas Harris', 'không', 2019, 'nhà xuất bản nhả nam', 5000, 56534.00, 23, 893, '2023-11-08', 350, 400, 1.00, b'1'),
(85, 'Móng Vuốt Quạ Đen', 'không', 2019, 'Nhà xUẤT BẢN KIM DONG', 500000, 400000.00, 29, 161, '2023-11-08', 450, 600, 1.00, b'1'),
(86, 'Chuyên Gia Pháp Y', 'không', 2019, 'NXB Hội Nhà Văn', 5000, 400000.00, 21, 835, '2023-11-08', 212, 300, 4.00, b'1'),
(87, 'Scarpetta - Bác Sĩ Pháp Y', 'không', 2019, 'Nhà Xuất Bản Văn Học', 4314, 23340.00, 14, 993, '2023-11-08', 332, 400, 2.00, b'1'),
(88, 'Pháp Y Tần Minh (Trọn Bộ 3 Cuốn)', 'không', 2018, 'Nhà Xuất Bản Văn Học', 5657, 23004.00, 6, 134, '2023-11-08', 312, 500, 1.00, b'1'),
(89, 'Sách - Another (Trọn Bộ 2 Tập)', 'không', 2015, 'Nhà Xuất Bản Hồng Đức', 98765, 43500.00, 10, 31, '2023-11-08', 133, 200, 2.00, b'1'),
(90, 'Sách - Tokyo Hoàng Đạo Án', 'không', 2019, 'Nhà Xuất Bản Hồng Đức', 654, 3400.00, 25, 721, '2023-11-08', 434, 500, 3.00, b'1'),
(91, 'Sách - Hồ Tuyệt Mệnh', 'không', 2015, 'Nhà Xuất Bản Hồng Đức', 2434, 4350.00, 10, 877, '2023-11-08', 342, 600, 4.00, b'1'),
(92, 'Cầu Thang Gào Thét', 'không', 2019, 'Nhà Xuất Bản Hồng Đức', 5421, 3430.00, 13, 697, '2023-11-08', 455, 800, 3.00, b'1'),
(93, 'Malorie – Hành Trình Chạy Trốn Tử Thần', 'không', 2018, 'NXB Hà Nội', 1231, 24540.00, 20, 1095, '2023-11-08', 532, 700, 2.00, b'1'),
(94, 'Sách - Ring - Vòng Tròn Ác Nghiệt', 'không', 2019, 'NXB VĂN HỌC ', 1443, 34290.00, 13, 294, '2023-11-08', 234, 450, 4.00, b'1'),
(95, 'Nhà giả kim ', 'không', 2019, 'NXB Hội Nhà Văn', 4322, 23443.00, 27, 934, '2023-11-08', 131, 190, 2.00, b'1'),
(96, '2.Đắc nhân tâm ', 'không', 2020, 'NXB Tổng Hợp TPHCM', 4555, 4324.00, 14, 660, '2023-11-08', 434, 650, 3.00, b'1'),
(97, 'Mặc kệ thiên hạ, sống như người Nhật ', 'không', 2018, 'NXB Hà Nội', 6431, 10000.00, 15, 1159, '2023-11-08', 876, 10000, 5.00, b'1'),
(98, 'Đời ngắn đừng ngủ dài ', 'không', 2019, 'NXB Trẻ', 44654, 2312.00, 12, 901, '2023-11-08', 554, 600, 4.00, b'1'),
(99, 'Cây cam ngọt của tôi ', 'không', 2018, 'NXB Hội Nhà Văn', 33645, 46442.00, 25, 449, '2023-11-08', 456, 800, 1.00, b'1'),
(100, 'Thất tịch không mưa ', 'không', 2020, 'NXB Phụ nữ', 42452, 3421.00, 10, 1256, '2023-11-08', 758, 900, 3.00, b'1'),
(101, 'Black Clover ', 'không', 2019, 'NXB Kim Đồng', 5231, 3141.00, 28, 854, '2023-11-08', 900, 1500, 3.00, b'1'),
(102, '999 Lá Thư Gửi Cho Chính Mình ', 'không', 2019, 'NXB Thanh Niên', 1000, 99000.00, 20, 911, '2023-11-08', 500, 600, 3.00, b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach_tacgia`
--

CREATE TABLE `sach_tacgia` (
  `Id` int(5) NOT NULL,
  `Id_Sach` int(5) NOT NULL,
  `Id_TacGia` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach_tacgia`
--

INSERT INTO `sach_tacgia` (`Id`, `Id_Sach`, `Id_TacGia`) VALUES
(1, 53, 1),
(2, 54, 2),
(3, 55, 3),
(4, 56, 4),
(5, 57, 5),
(6, 58, 6),
(7, 59, 7),
(8, 60, 8),
(9, 61, 9),
(10, 62, 10),
(11, 63, 11),
(12, 64, 12),
(13, 65, 13),
(14, 66, 14),
(15, 67, 15),
(16, 68, 16),
(17, 69, 17),
(18, 70, 18),
(19, 71, 18),
(20, 72, 19),
(21, 73, 20),
(22, 74, 21),
(23, 75, 22),
(24, 76, 23),
(25, 77, 20),
(26, 78, 18),
(27, 79, 18),
(28, 80, 24),
(29, 81, 25),
(30, 82, 18),
(31, 83, 18),
(32, 84, 26),
(33, 85, 27),
(34, 86, 28),
(35, 87, 29),
(36, 88, 30),
(37, 89, 31),
(38, 90, 32),
(39, 91, 33),
(40, 92, 34),
(41, 93, 35),
(42, 94, 36),
(43, 95, 37),
(44, 96, 38),
(45, 97, 39),
(46, 98, 40),
(47, 99, 41),
(48, 100, 42),
(49, 101, 43),
(50, 102, 44),
(51, 53, 45),
(52, 55, 46),
(53, 58, 47),
(54, 59, 48),
(55, 60, 49),
(56, 64, 50),
(57, 76, 51),
(58, 53, 52),
(59, 58, 53);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach_theloai`
--

CREATE TABLE `sach_theloai` (
  `Id` int(5) NOT NULL,
  `Id_Sach` int(5) NOT NULL,
  `Id_TheLoai` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach_theloai`
--

INSERT INTO `sach_theloai` (`Id`, `Id_Sach`, `Id_TheLoai`) VALUES
(201, 53, 1),
(202, 54, 2),
(203, 55, 2),
(204, 56, 2),
(205, 57, 2),
(206, 58, 2),
(207, 59, 2),
(208, 60, 2),
(209, 61, 2),
(210, 62, 2),
(211, 63, 2),
(212, 64, 2),
(213, 65, 2),
(214, 66, 2),
(215, 67, 2),
(216, 68, 2),
(217, 69, 2),
(218, 70, 2),
(219, 71, 2),
(220, 72, 2),
(221, 73, 2),
(222, 74, 2),
(223, 75, 2),
(224, 76, 2),
(225, 77, 2),
(226, 78, 2),
(227, 79, 2),
(228, 80, 2),
(229, 81, 2),
(230, 82, 2),
(231, 83, 2),
(232, 84, 3),
(233, 85, 3),
(234, 86, 3),
(235, 87, 3),
(236, 88, 3),
(237, 89, 4),
(238, 90, 4),
(239, 91, 4),
(240, 92, 4),
(241, 93, 4),
(242, 94, 4),
(243, 95, 4),
(244, 96, 8),
(245, 97, 8),
(246, 98, 8),
(247, 99, 9),
(248, 100, 5),
(249, 101, 6),
(250, 102, 7),
(251, 84, 4),
(252, 85, 4),
(253, 86, 4),
(254, 87, 4),
(255, 88, 4),
(256, 96, 7),
(257, 98, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

CREATE TABLE `tacgia` (
  `Id` int(5) NOT NULL,
  `HoVaTen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tacgia`
--

INSERT INTO `tacgia` (`Id`, `HoVaTen`) VALUES
(1, 'phạm văn đức (chủ biên) '),
(2, 'bộ thông tin và truyền thông'),
(3, 'ts. vũ việt vũ '),
(4, 'hồ văn canh'),
(5, 'ts. nguyễn phạm anh dũng'),
(6, 'ths. nguyễn văn kha'),
(7, 'đào xuân hiệp'),
(8, 'lê trường thông'),
(9, 'kevin kelly'),
(10, 'alecc ross'),
(11, 'vitok mayer'),
(12, 'terrence '),
(13, 'kevin mitnick'),
(14, 'clifford stoll'),
(15, 'steven levy'),
(16, 'max tegmark'),
(17, 'david l. rogers'),
(18, 'nhiều tác giả'),
(19, 'nicholas carr'),
(20, 'phạm huy hoàng'),
(21, 'lasse rouhiainen'),
(22, 'robert cecil martin'),
(23, 'foster provost'),
(24, 'nguyễn văn thành'),
(25, 'lê hoàng sơn'),
(26, 'nhã nam'),
(27, 'leigh bardugo'),
(28, 'vương văn kiệt'),
(29, 'patricia cornwell'),
(30, 'pháp y tần minh '),
(31, 'yukito ayatsuji'),
(32, 'sojisima da'),
(33, 'quỷ cổ nữ'),
(34, 'jonathan stroud'),
(35, 'josh malerman'),
(36, 'suzuki koji'),
(37, 'paulo coelho'),
(38, 'dale carnegie'),
(39, 'mari tamagawa '),
(40, 'robin sharma'),
(41, 'josé mauro de vasconcelos'),
(42, 'lâu vũ tình '),
(43, 'yūki tabata'),
(44, 'miêu công tử'),
(45, 'nguyễn văn tài'),
(46, 'ths. phùng thị thu hiên'),
(47, 'ts. lê quyết thắng'),
(48, ' huyền lê trường phát'),
(49, 'gs. phạm văn ất'),
(50, 'j. sejnowski'),
(51, 'tom fawcett'),
(52, 'nguyễn anh tuấn'),
(53, 'ts. trương minh nhật quang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `Id` int(5) NOT NULL,
  `TenTheLoai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`Id`, `TenTheLoai`) VALUES
(1, 'lịch sử tư tưởng'),
(2, 'công nghệ thông tin'),
(3, 'trinh thám'),
(4, 'kinh dị'),
(5, 'ngôn tình'),
(6, 'manga'),
(7, 'truyện ngắn'),
(8, 'tâm lý'),
(9, 'tiểu thuyết'),
(10, 'kỹ năng sống');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

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
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT cho bảng `sach_tacgia`
--
ALTER TABLE `sach_tacgia`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `sach_theloai`
--
ALTER TABLE `sach_theloai`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
