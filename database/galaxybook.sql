-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2023 lúc 11:43 AM
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

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`Id`, `Id_Sach`, `TenAnh`, `DuongDan`) VALUES
(4, 54, 'Sách - Sách Trắng - Công Nghệ Thông Tin Và Truyền Thông Việt Nam 2021', 'vn-50009109-439a7dda1c050473da2dfa41338a27f5 (5).png'),
(5, 54, 'Sách - Sách Trắng - Công Nghệ Thông Tin Và Truyền Thông Việt Nam 2021', 'luu-ban-nhap-tu-dong-6-8.png'),
(6, 54, 'Sách - Sách Trắng - Công Nghệ Thông Tin Và Truyền Thông Việt Nam 2021', 'luu-ban-nhap-tu-dong-3-8.png'),
(7, 55, 'Sách - Giáo Trình Ngôn Ngữ C++', 'vn-50009109-439a7dda1c050473da2dfa41338a27f5 (1).png'),
(8, 55, 'Sách - Giáo Trình Ngôn Ngữ C++', 'tải xuống.jpg'),
(9, 55, 'Sách - Giáo Trình Ngôn Ngữ C++', 'giaotrinh.jpg'),
(10, 56, 'Sách Mật mã và An toàn thông tin - Lý thuyết và Ứng dụng', 'vn-50009109-935d79d857d4e5078963c9b8528c5a0a.png'),
(11, 56, 'Sách Mật mã và An toàn thông tin - Lý thuyết và Ứng dụng', 'images.jpg'),
(12, 56, 'Sách Mật mã và An toàn thông tin - Lý thuyết và Ứng dụng', 'sachbaomat.jpg'),
(13, 57, 'Sách - IoT (Internet Vạn Vật) - Kiến Trúc IoT, IoT Công Nghiệp Và Công Nghiệp 4.0, IoT Tổ Ong', 'vn-50009109-439a7dda1c050473da2dfa41338a27f5 (2).png'),
(14, 57, 'Sách - IoT (Internet Vạn Vật) - Kiến Trúc IoT, IoT Công Nghiệp Và Công Nghiệp 4.0, IoT Tổ Ong', 'sachiot.jpg'),
(15, 57, 'Sách - IoT (Internet Vạn Vật) - Kiến Trúc IoT, IoT Công Nghiệp Và Công Nghiệp 4.0, IoT Tổ Ong', 'kientruc.jpg'),
(16, 58, 'Sách - Các Hình Thức Tấn Công Mạng - Cyberspace', 'vn-50009109-439a7dda1c050473da2dfa41338a27f5 (3).png'),
(17, 58, 'Sách - Các Hình Thức Tấn Công Mạng - Cyberspace', 'vn-11134201-23030-vyqdbhh77kovc7.jpg'),
(18, 58, 'Sách - Các Hình Thức Tấn Công Mạng - Cyberspace', 'sachcachinhthuctancongmang.jpg'),
(19, 59, 'Sách - Sách A-Z kiến thức + nghề lập trình cho người mới bắt đầu', 'vn-50009109-dff02863661ad890d11f815932898514.png'),
(20, 59, 'Sách - Sách A-Z kiến thức + nghề lập trình cho người mới bắt đầu', 'nghelaptrinh.jpg'),
(21, 59, 'Sách - Sách A-Z kiến thức + nghề lập trình cho người mới bắt đầu', 'nguoimoilaptrinh.jpg'),
(22, 60, 'Sách - Giáo Trình Kỹ Thuật Lập Trình C Căn Bản Và Nâng Cao + Giáo Trình C++ Và Lập Trình Hướng Đối Tượng', 'vn-50009109-439a7dda1c050473da2dfa41338a27f5 (4).png'),
(23, 60, 'Sách - Giáo Trình Kỹ Thuật Lập Trình C Căn Bản Và Nâng Cao + Giáo Trình C++ Và Lập Trình Hướng Đối Tượng', 'vn-11134207-7r98o-lncp84tii2d6a0.jpg'),
(24, 60, 'Sách - Giáo Trình Kỹ Thuật Lập Trình C Căn Bản Và Nâng Cao + Giáo Trình C++ Và Lập Trình Hướng Đối Tượng', 'vn-11134207-7qukw-lkc4arfj8sywe7.jpg'),
(25, 61, 'Sách - 12 Xu Hướng Công Nghệ Trong Thời Đại 4.0 - TTR Bookstore', 'b51db002695e671eb5365b6ab874d6ac.jpg'),
(26, 61, 'Sách - 12 Xu Hướng Công Nghệ Trong Thời Đại 4.0 - TTR Bookstore', '8936066694339.jpg'),
(27, 61, 'Sách - 12 Xu Hướng Công Nghệ Trong Thời Đại 4.0 - TTR Bookstore', 'ttph---nft---khi-ngh_-thu_t-tr_-th_nh-t_i-s_n-s_.jpg'),
(28, 62, 'Sách - Công Nghiệp Tương Lai - The Industries Of The Future', 'image_195509_1_12548.jpg'),
(29, 62, 'Sách - Công Nghiệp Tương Lai - The Industries Of The Future', '2020_06_11_15_06_36_11-390x510.jpg'),
(30, 62, 'Sách - Công Nghiệp Tương Lai - The Industries Of The Future', '8935278606338.jpg'),
(31, 63, 'Sách Khoa Học Khám Phá Dữ Liệu Lớn NXB Trẻ', '0b58896999acd6fe2f414254881461c0.jpg'),
(32, 63, 'Sách Khoa Học Khám Phá Dữ Liệu Lớn NXB Trẻ', 'z3393853054263_650cd3e5c3f7b85c8db973d82e98857b.jpg'),
(33, 63, 'Sách Khoa Học Khám Phá Dữ Liệu Lớn NXB Trẻ', 'du-lieu-lon.png'),
(34, 64, 'Sách - Deep Learning Cuộc Cách Mạng Học Sâu', '19807f0a6b8a6217de2b6f0fa8943bdf.jpg'),
(35, 64, 'Sách - Deep Learning Cuộc Cách Mạng Học Sâu', 'cuộc cách mạng sâu.png'),
(36, 64, 'Sách - Deep Learning Cuộc Cách Mạng Học Sâu', 'cd509305cc9e08e48206edf2cf71b2dc.jpg_720x720q80.jpg'),
(37, 65, 'Sách - An toàn thông tin - Nghệ thuật ẩn mình', '20190322_1wld2EXO9xjHeMEeBtC3RohT.jpg'),
(38, 65, 'Sách - An toàn thông tin - Nghệ thuật ẩn mình', 'Series-book-Hacker-cua-Kevin.jpg'),
(39, 65, 'Sách - An toàn thông tin - Nghệ thuật ẩn mình', 'an-minh-bia-sau.jpg'),
(40, 66, 'abooks - Gián Điệp Mạng - Cuộc Rượt Đuổi Ngoạn Mục Trong Mê Lộ Máy Tính', '61ffcdde8de820342e6d71d714943cd7.jpg'),
(41, 66, 'abooks - Gián Điệp Mạng - Cuộc Rượt Đuổi Ngoạn Mục Trong Mê Lộ Máy Tính', '20190322_KBkHUbPqbrClvEpp9obt4mY1.jpg'),
(42, 66, 'abooks - Gián Điệp Mạng - Cuộc Rượt Đuổi Ngoạn Mục Trong Mê Lộ Máy Tính', '27cc71944fffb6b3a600b4285e328554.jpg'),
(43, 67, 'Sách - An toàn thông tin - Hacker lược sử [AlphaBooks]', '20230314_eT4GLkb628wp.jpg'),
(44, 67, 'Sách - An toàn thông tin - Hacker lược sử [AlphaBooks]', '050edf936cb54d6ed1b0dad11d5ceafc.jpg'),
(45, 67, 'Sách - An toàn thông tin - Hacker lược sử [AlphaBooks]', '20200302_5PLehmst8AfYOhfmb2TxMfDg.jpg'),
(46, 68, 'Sách - Life 3.0-Loài người trong kỷ nguyên trí tuệ nhân tạo', '8d5d0b05b6f380592970acf1f541b092.jpg'),
(47, 68, 'Sách - Life 3.0-Loài người trong kỷ nguyên trí tuệ nhân tạo', '1cb8fc82d437688c18e5ed9d84bb8f44.jpg'),
(48, 68, 'Sách - Life 3.0-Loài người trong kỷ nguyên trí tuệ nhân tạo', '2020_05_06_15_16_50_11-390x510.jpg'),
(49, 69, 'Sách Cải tổ doanh nghiệp trong thời đại số', 'cde9caed5fd07d159be9220b5850336e.jpg'),
(50, 69, 'Sách Cải tổ doanh nghiệp trong thời đại số', '4fb4b05b69c6b02d2a9dc47ea7bcd449.jpg'),
(51, 69, 'Sách Cải tổ doanh nghiệp trong thời đại số', '86c6db1a3ef3013070f7b3567e933d68.jpg'),
(52, 70, 'Sách - Ký Sự BrSE - Những Nẻo Đường Nghề BrSE (Triệu Anh Tuấn + Nguyễn Văn Trọng)', 'b23106ab026fb3b807d2e370775ef063.jpg'),
(53, 70, 'Sách - Ký Sự BrSE - Những Nẻo Đường Nghề BrSE (Triệu Anh Tuấn + Nguyễn Văn Trọng)', '080e99104fda1bf3994f3203d8ba0be8.jpg'),
(54, 70, 'Sách - Ký Sự BrSE - Những Nẻo Đường Nghề BrSE (Triệu Anh Tuấn + Nguyễn Văn Trọng)', '004778341e8c9afeec5812ce317c12b5.jpg'),
(55, 71, 'Sách - Thành phố thông minh - Nền tảng, nguyên lý và ứng dụng', 'vn-50009109-439a7dda1c050473da2dfa41338a27f5.png'),
(56, 71, 'Sách - Thành phố thông minh - Nền tảng, nguyên lý và ứng dụng', '5154860543cd067d445577d14db2117d'),
(57, 71, 'Sách - Thành phố thông minh - Nền tảng, nguyên lý và ứng dụng', '6406d5a286ed7d42d5ae8da52e780757_tn.jpg'),
(58, 72, 'Khoa học Khám Phá: Trí Tuệ Giả Tạo (Tái Bản)', '20f694c8d55f8b69ea57fa8486a8fb88.jpg'),
(59, 72, 'Khoa học Khám Phá: Trí Tuệ Giả Tạo (Tái Bản)', 'b0bfb2dce88583fb075df7d5a669f835.jpg'),
(60, 72, 'Khoa học Khám Phá: Trí Tuệ Giả Tạo (Tái Bản)', '2b49759d75b65b236a1defcb11c60620.jpg'),
(61, 73, 'Sách Code Dạo Kí Sự - Lập Trình Viên Đâu Phải Chỉ Biết Code', 'code-dao-ki-su-pdf.jpg'),
(62, 73, 'Sách Code Dạo Kí Sự - Lập Trình Viên Đâu Phải Chỉ Biết Code', '93ea22beb6c13537e39a26a71c390642.jpg'),
(63, 73, 'Sách Code Dạo Kí Sự - Lập Trình Viên Đâu Phải Chỉ Biết Code', '0344355a9d04ff5903cde202039e9f85.jpg'),
(64, 74, 'Sách AI - Trí Tuệ Nhân Tạo', '98f0b23303b56ec8d046c48252f46a78.jpg'),
(65, 74, 'Sách AI - Trí Tuệ Nhân Tạo', 'ai_-tri-tue-nhan-tao_tb-2023.jpg'),
(66, 74, 'Sách AI - Trí Tuệ Nhân Tạo', 'tri-tue-nhan-tao-thong-minh--giai-thuat-0-882.jpg'),
(67, 75, 'Sách Clean Code - Mã Sạch Và Con Đường Trở Thành Lập Trình Viên Giỏi', '6d08a857e9e80b470eab7a5136039369.jpg'),
(68, 75, 'Sách Clean Code - Mã Sạch Và Con Đường Trở Thành Lập Trình Viên Giỏi', '6a170fed3758606d259862d7929fd8bd.jpg'),
(69, 75, 'Sách Clean Code - Mã Sạch Và Con Đường Trở Thành Lập Trình Viên Giỏi', '82509f20f5787f272e47ece1c16d39d6.jpg'),
(70, 76, 'Sách Data Science for Business', 'b6bb1e5cf32c088c0077539db3bcc4a9.jpg'),
(71, 76, 'Sách Data Science for Business', 'sach-ve-data-analysis-6.jpg'),
(72, 76, 'Sách Data Science for Business', 's-l1200.jpg'),
(73, 77, 'Thiết kế mạng Intranet', 'image-20220608082014135.jpg'),
(74, 77, 'Thiết kế mạng Intranet', '3a14e7151ccde8072c4691ab1ff6ed40.jpg'),
(75, 77, 'Thiết kế mạng Intranet', 'a786168c8d349ab9ae833d71e13e997f.jpg'),
(76, 78, 'Sách - Giáo Trình Triết Học ( Bìa mềm )', 'vn-50009109-439a7dda1c050473da2dfa41338a27f5 (7).png'),
(77, 78, 'Sách - Giáo Trình Triết Học ( Bìa mềm )', 'sanpham1.jpg'),
(78, 78, 'Sách - Giáo Trình Triết Học ( Bìa mềm )', '7TMkmXk9EgVp.jpg'),
(79, 79, 'Sách - Giáo Trình Lập Trình PYTHON', 'vn-50009109-439a7dda1c050473da2dfa41338a27f5 (8).png'),
(80, 79, 'Sách - Giáo Trình Lập Trình PYTHON', 'b962e19641b05c06324b416c6aa5d38b.jpg'),
(81, 79, 'Sách - Giáo Trình Lập Trình PYTHON', 'b808f0bca744308a05ac3b9e4575151e.jpg'),
(82, 80, 'Lập trình hướng đối tượng JAVA core dành cho người mới bắt đầu học lập trình', 'ad299b78f8a5289406ab1936faf066f4.jpg'),
(83, 80, 'Lập trình hướng đối tượng JAVA core dành cho người mới bắt đầu học lập trình', '1324567.jpg'),
(84, 80, 'Lập trình hướng đối tượng JAVA core dành cho người mới bắt đầu học lập trình', 'fdjgfk.jpg'),
(85, 81, 'Giáo Trình Lập Trình Android', '4e3f9ae4ee6d6843b4abf31fdc4bdc6e.jpg'),
(86, 81, 'Giáo Trình Lập Trình Android', 'sfghjj.jpg'),
(87, 81, 'Giáo Trình Lập Trình Android', 'lap-trinh-android.jpg'),
(88, 82, 'Giáo Trình Kỹ Thuật Lập Trình C Căn Bản Và Nâng Cao', 'bia_ky_thuat_lap_trinh_c_14-03_fix__1_-b1_950fc2f571cd481abf07d57bf4a12b33_master.jpg'),
(89, 82, 'Giáo Trình Kỹ Thuật Lập Trình C Căn Bản Và Nâng Cao', 'giao-trinh-ky-thuat-lap-trinh-c-co-so-va-nang-cao_master.jpg'),
(90, 82, 'Giáo Trình Kỹ Thuật Lập Trình C Căn Bản Và Nâng Cao', 'ky-thuat-lap-trinh-c-can-ban-va-nang-cao_1.jpg'),
(91, 83, 'Tớ Học Lập Trình - Làm Quen Với PYTHON', '9439676e1b939af6ea351814cb2264fc.jpg'),
(92, 83, 'Tớ Học Lập Trình - Làm Quen Với PYTHON', '75a00d3297dc56d0e450451504f9c041.jpg'),
(93, 83, 'Tớ Học Lập Trình - Làm Quen Với PYTHON', '2c0363240c709a2e2c1da5d3d6266202.jpg'),
(94, 84, 'Trọn bộ 4 quyển tiểu thuyết Hannibal – Thomas Harris', '58f77a32822071b224a4c4d1cf0f894f.jpg'),
(95, 84, 'Trọn bộ 4 quyển tiểu thuyết Hannibal – Thomas Harris', '6240134b1824b0ae72b23db1d404da0e.jpg'),
(96, 84, 'Trọn bộ 4 quyển tiểu thuyết Hannibal – Thomas Harris', 'tron-bo-4-quyen-tieu-thuyet-hannibal-giasachonline.com.jpg'),
(97, 85, 'Móng Vuốt Quạ Đen', '4_130_253c8692fa8341619c8b445a0824bbff.jpg'),
(98, 85, 'Móng Vuốt Quạ Đen', 'limited-boxset-mong-vuot-qua-den-tap-3--tap-4.jpg'),
(99, 85, 'Móng Vuốt Quạ Đen', '532e4b13e8a8311013264f61f862932f.jpg_720x720q80.jpg'),
(100, 86, 'Chuyên Gia Pháp Y', '4d1656afbfd05df93dd2a73149ca99e1.jpg'),
(101, 86, 'Chuyên Gia Pháp Y', '35564.jpg'),
(102, 86, 'Chuyên Gia Pháp Y', 'd17962171d35d9b5b238f1d7d68404d8.jpg'),
(103, 87, 'Scarpetta - Bác Sĩ Pháp Y', 'ba-si-phap-y-1_1.jpg'),
(104, 87, 'Scarpetta - Bác Sĩ Pháp Y', 'scarpetta-bc3a1c-sc4a9-phc3a1p-y.jpg'),
(105, 87, 'Scarpetta - Bác Sĩ Pháp Y', 'tumblr_7f34e5286affd97ad1a949a3c48360ad_01cc7702_540.jpg'),
(106, 88, 'Pháp Y Tần Minh (Trọn Bộ 3 Cuốn)', 'phap-y-tan-minh-.u5505.d20170731.t231046.153850.jpg'),
(107, 88, 'Pháp Y Tần Minh (Trọn Bộ 3 Cuốn)', 'phap-y-tan-minh-1.u5505.d20170731.t231046.357616.jpg'),
(108, 88, 'Pháp Y Tần Minh (Trọn Bộ 3 Cuốn)', '1161f486271d9dec6074b86923f8c2a0.jpg'),
(109, 89, 'Sách - Another (Trọn Bộ 2 Tập)', '1b121462b63d8c8bc53ae99c06fb802e.jpg'),
(110, 89, 'Sách - Another (Trọn Bộ 2 Tập)', 'another-tron-bo-2-tap.jpg'),
(111, 89, 'Sách - Another (Trọn Bộ 2 Tập)', 'a0a902b592315bbbdaedf3465aec4268.jpg'),
(112, 90, 'Sách - Tokyo Hoàng Đạo Án', '787a7fb32b7d1f5af7afd3028b79b525.jpg'),
(113, 90, 'Sách - Tokyo Hoàng Đạo Án', 'tokyo-hoc3a0ng-c491e1baa1o-c3a1n.jpg'),
(114, 90, 'Sách - Tokyo Hoàng Đạo Án', '1-1.jpg'),
(115, 91, 'Sách - Hồ Tuyệt Mệnh', 'ho-tuyet-menh_a57409fd3bb44ab2b24217ad57ef42db_master.jpg'),
(116, 91, 'Sách - Hồ Tuyệt Mệnh', 'review-ho-tuyet-menh-bia.jpg'),
(117, 91, 'Sách - Hồ Tuyệt Mệnh', 'review-ho-tuyet-menh-bai.jpg'),
(118, 92, 'Cầu Thang Gào Thét', 'f515cd2ac8ff094d9d540c7b8241fac1.jpg'),
(119, 92, 'Cầu Thang Gào Thét', 'a848fcc43ac2cdb89fac889df70a6d0a.jpg'),
(120, 92, 'Cầu Thang Gào Thét', 'f56bc8d49fb7f48e87f6b9f6de45354b.jpg'),
(121, 93, 'Malorie – Hành Trình Chạy Trốn Tử Thần', '7b9e4d147a6320944e88da362b315829.jpg'),
(122, 93, 'Malorie – Hành Trình Chạy Trốn Tử Thần', 'e5bc36e8f88e5fa4bcd69844ce9daef7.jpg'),
(123, 93, 'Malorie – Hành Trình Chạy Trốn Tử Thần', '2021_06_21_09_45_11_6-390x510.jpg'),
(124, 94, 'Sách - Ring - Vòng Tròn Ác Nghiệt', 'images_27_.jpg'),
(125, 94, 'Sách - Ring - Vòng Tròn Ác Nghiệt', '059b9bd4271e5bd8c5d15f4f76fed538.jpg'),
(126, 94, 'Sách - Ring - Vòng Tròn Ác Nghiệt', '980edd5d1f637b29e1b2f2932a80706b.jpg'),
(127, 95, 'Nhà giả kim ', 'img117-u3059-d20170616-t100547-729023.jpg'),
(128, 95, 'Nhà giả kim ', 'P91250Mnha.jpg'),
(129, 95, 'Nhà giả kim ', 'Nha-gia-kim-Paulo-Coelho-1020x600.jpg'),
(130, 96, '2.Đắc nhân tâm ', 'd340edda2b0eacb7ddc47537cddb5e08.jpg'),
(131, 96, '2.Đắc nhân tâm ', 'dac nhan tam.jpg'),
(132, 96, '2.Đắc nhân tâm ', 'Đắc_nhân_tâm.jpg'),
(133, 97, 'Mặc kệ thiên hạ, sống như người Nhật ', 'mac_ke_thien_ha___song_nhu_nguoi_nha.jpg'),
(134, 97, 'Mặc kệ thiên hạ, sống như người Nhật ', 'f5c2b4ae7e8c97d01c03a49f88443d40.jpg'),
(135, 97, 'Mặc kệ thiên hạ, sống như người Nhật ', 'mac-ke-thien-ha-song-nhu-nguoi-nhat-tai-ban-2022.jpg'),
(136, 98, 'Đời ngắn đừng ngủ dài ', '19de0644beef19b9b885d0942f7d6f25.jpg'),
(137, 98, 'Đời ngắn đừng ngủ dài ', 'Doi-ngan-dung-ngu-dai.jpg'),
(138, 98, 'Đời ngắn đừng ngủ dài ', 'doi-ngan-dung-ngu-dai-2_600x400.jpg'),
(148, 102, '999 Lá Thư Gửi Cho Chính Mình ', '0dcc6e04aca0a78cda09a2d8b156dccb.jpg'),
(149, 102, '999 Lá Thư Gửi Cho Chính Mình ', 'dabf4f944c5da6f3ba4e581dc5799ccf.jpg'),
(150, 102, '999 Lá Thư Gửi Cho Chính Mình ', '6a31e0a4e3fa4337ad789961f9bcf6dc.jpg');

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

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`Id`, `Id_NguoiDung`, `TongDon`, `TrangThai`, `NgayMua`, `TenNguoiNhan`, `SDTNguoiNhan`, `DiaChiNguoiNhan`) VALUES
(3, 10, 0.00, 'Chờ xác nhận', NULL, 'can', '0129', 'hcm'),
(4, 10, 0.00, 'Chờ xác nhận', '2023-12-06', 'can', '0129', 'hcm');

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

--
-- Đang đổ dữ liệu cho bảng `hoadonchitiet`
--

INSERT INTO `hoadonchitiet` (`Id`, `Id_HoaDon`, `Id_Sach`, `SoLuong`, `Gia`) VALUES
(1, 3, 96, 1, 4324.00);

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

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`Id`, `HoVaTen`, `Avatar`, `DiaChi`, `Email`, `SDT`, `TaiKhoan`, `MatKhau`, `NgayTao`, `VaiTro`) VALUES
(5, 'can', 'avatar1.jpg', 'Gò Vấp, TP HCM', 'truonghuynhcan@gmail.com', '0971735117', 'huynhcan', '25f9e794323b453885f5181f1b624d0b', '2023-11-13', 1),
(8, 'chi an', 'avatar1.jpg', '600/5 quang trung gò vấp', 'vangchian1010@gmail.com', '0832447737', 'chian', '60208451b29da10a0294f0ddbdb91511', '2023-11-15', 0),
(9, 'Trương Huỳnh', 'avatar1.jpg', 'gò vấp', 'canthps36499@fpt.edu.vn', '0971735117', 'canthps36499', '25f9e794323b453885f5181f1b624d0b', '2023-11-28', 0),
(10, 'nhóm 5', 'avatar1.jpg', 'quận 12', 'galaxybook@gmail.com', '0971735117', 'galaxybook', 'f9bf0052a297facb36e7eb4a7c453a0f', '2023-12-01', 0);

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

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`Id`, `TenSach`, `NguoiDich`, `NamXuatBan`, `NhaXuatBan`, `SoLuongConHang`, `DonGia`, `GiamGia`, `LuotXem`, `NgayNhap`, `LuotBinhLuan`, `LuotMua`, `DanhGia`, `TrangThai`, `MoTa`, `MoTaChiTiet`) VALUES
(54, 'Sách - Sách Trắng - Công Nghệ Thông Tin Và Truyền Thông Việt Nam 2021', 'không', 2021, 'NXB Thông tin và Truyền thông', 30, 97200.00, 17, 747, '2023-11-06', 20, 62, 5.00, 1, 'Sách Trắng 2021 cung cấp thông tin', 'Sách Trắng 2021 cung cấp thông tin, số liệu năm 2020 về tất cả các lĩnh vực do Bộ thông tin và Truyền thông quản lý là: Bưu chính; Viễn Thông; Ứng dụng công nghệ thông tin; An toàn thông tin mạng; Công nghiệp công nghệ thông tin - điện tử, viễn thông; Báo chí, truyền thông. So với các năm trước đây, Sách Trắng 2021 đã bổ sung thêm nhiều số liệu mới liên quan đến việc phát triển Chính phủ số, kinh tế số và xã hội số.'),
(55, 'Sách - Giáo Trình Ngôn Ngữ C++', 'không', 2017, 'NXB Khoa học và Kỹ Thuật', 50, 120000.00, 27, 388, '2023-11-06', 10, 40, 3.00, 1, 'Được thiết kế dành cho người mới bắt đầu học C++ hoặc những người muốn nâng cao kiến thức về ngôn ngữ này', 'Giáo trình Ngôn ngữ lập trình C++ được biên soạn nhằm mục đích phục vụ cho sinh viên các ngành kỹ thuật đồng thời là cuốn giáo trình tham khảo cho các giảng viên trong lĩnh vực Công nghệ thông tin. Mục đích của giáo trình này cung cấp đầy đủ các kiến thức về lập chương trình trên máy tính bằng ngôn ngữ C++, sau khi tìm hiểu xon giáo trình này độc giả có thể học tiếp các môn học về lập trình chuyên sâu trong các lĩnh vực chuyên ngành như Vi xử lý - Vi điều khiển, Lập trình Java, ASP, Lập trình phần mềm các thiết bị di động'),
(56, 'Sách Mật mã và An toàn thông tin - Lý thuyết và Ứng dụng', 'không', 2018, 'nxbthongtinvatruyenthong', 150, 100100.00, 11, 835, '2023-11-06', 50, 60, 1.00, 1, 'Sách \"Mật mã và An toàn thông tin - Lý thuyết và Ứng dụng\" là một tài liệu chuyên sâu về lĩnh vực mật mã và an toàn thông tin', 'Cung cấp các kiến thức về mật mã và an toàn thông tin bao gồm: vấn đề an toàn - an ninh thông tin, một số kiến thức bổ trợ, một số hệ mật mã cổ điển và hệ mật mã hiện đại, lược đồ chữ ký chống chối bỏ, giấu tin trong đa phương tiện và vấn đề phát hiện ảnh chứa thông tin ẩn'),
(57, 'Sách - IoT (Internet Vạn Vật) - Kiến Trúc IoT, IoT Công Nghiệp Và Công Nghiệp 4.0, IoT Tổ Ong', 'không', 2023, 'NXB Thông tin và Truyền thông', 250, 120000.00, 20, 521, '2023-11-06', 140, 150, 1.00, 1, 'Sách này cung cấp một cái nhìn tổng quan về kiến trúc, ứng dụng và tiềm năng của IoT trong các lĩnh vực công nghiệp và công nghiệp 4.0.', 'Làn sóng IoT tương lai sẽ đưa cuộc sống của chúng ta tương tác với máy móc, biến đổi mọi đối tượng thành các thiết bị thông minh với các bộ cảm biến. Trong tương lai, IoT sẽ trở thành thế giới gồm hàng tỷ các đối tượng được trang bị trí tuệ, các phương tiện truyền thông, có khả năng cảm biến, truyền thông với nhau, chia sẻ thông tin và phần nào có thể hoạt động độc lập với các sự kiện của thế giới thực.'),
(58, 'Sách - Các Hình Thức Tấn Công Mạng - Cyberspace', 'không', 2022, 'NXB Khoa học và Kỹ thuật', 400, 80500.00, 10, 448, '2023-11-06', 200, 210, 4.00, 1, 'Sách này cung cấp một cái nhìn tổng quan về các loại tấn công điện tử và các mối đe dọa đối với hệ thống và dữ liệu trên mạng.', 'Cuốn sách chia sẻ kiến thức giúp cộng đồng tăng cường ý thức bảo mật trên không gian mạng, hiểu rõ hơn các loại mã độc, các hình thức tấn công mạng và chu kỳ tấn công mạng của tội phạm mạng. Bên cạnh đó, cuốn sách còn hướng dẫn các chuyên viên bảo mật, hướng dẫn sinh viên, học sinh tạo lập môi trường thử nghiệm tấn công mạng và phân tích dữ liệu tấn công mạng; giúp họ hiểu sâu hơn về các hình thức tấn công mạng và đam mê nghiên cứu sâu về an ninh mạng.'),
(59, 'Sách - Sách A-Z kiến thức + nghề lập trình cho người mới bắt đầu', 'không', 2023, 'Nhà xuất bản Thanh Niên', 600, 90600.00, 18, 1370, '2023-11-06', 1, 10, 3.00, 1, 'là một tài liệu giúp người đọc mới bắt đầu học lập trình hiểu về các khái niệm cơ bản và những kỹ năng cần thiết trong lĩnh vực này.', 'Cung cấp A-Z kiến thức và nghề lập trình, đầy đủ, chi tiết. Từ đó giúp người mới bắt đầu biết mình sẽ phải học gì, làm gì tiếp theo, ko bị hoang mang trong 1 núi thông tin khổng lồ trên mạng.Giúp người mới bắt đầu đi đúng hướng, học đúng chỗ, tránh mất thời gian.Giúp định hướng rõ ràng trong nghề lập trình: Học xong sẽ theo lĩnh vực nào trong nghề lập trình, làm việc ở đâu, mức lương bao nhiêu, cần phải chuẩn bị những gì.Ngoài ra được trang trị những kiến thức mới nhất về các công nghệ đang là xu hướng như mới nhất, cách ứng dụng khác vào công việc lập trình.Được lắng nghe chia sẻ thực từ người trong nghề đi làm trên 6 năm kinh nghiệm'),
(60, 'Sách - Giáo Trình Kỹ Thuật Lập Trình C Căn Bản Và Nâng Cao + Giáo Trình C++ Và Lập Trình Hướng Đối Tượng', 'không', 2023, 'Bách Khoa Hà Nội', 1000, 301000.00, 23, 234, '2023-11-06', 6, 50, 5.00, 1, 'là hai tài liệu giảng dạy về lập trình sử dụng ngôn ngữ C và C++.', 'Sách \"Giáo Trình C++ Và Lập Trình Hướng Đối Tượng\" tập trung vào ngôn ngữ lập trình C++ và phong cách lập trình hướng đối tượng. Nó giới thiệu về các khái niệm cơ bản của lập trình hướng đối tượng, chẳng hạn như lớp, đối tượng, kế thừa và đa hình. Sách đi kèm với các ví dụ thực tế và bài tập để thực hành viết mã trong ngôn ngữ C++. Ngoài ra, sách cũng bao gồm các chủ đề nâng cao như quản lý bộ nhớ, ngoại lệ và đa luồng.'),
(61, 'Sách - 12 Xu Hướng Công Nghệ Trong Thời Đại 4.0 - TTR Bookstore', 'không', 2019, '1980 Books', 98, 152000.00, 28, 1329, '2023-11-06', 20, 18, 3.00, 1, 'Cuốn sách này cung cấp cái nhìn tổng quan về những xu hướng công nghệ đang thay đổi cách chúng ta sống và làm việc.', 'Sách cung cấp một cái nhìn sâu sắc vào mỗi xu hướng công nghệ thông qua giải thích về nguyên lý hoạt động, ứng dụng thực tiễn và tiềm năng tương lai của chúng. Nó giúp độc giả hiểu được lợi ích và thách thức của mỗi xu hướng và đưa ra gợi ý về cách áp dụng chúng trong các lĩnh vực khác nhau của đời sống và công việc.'),
(62, 'Sách - Công Nghiệp Tương Lai - The Industries Of The Future', 'không', 2018, 'NXB TRE', 15, 127500.00, 28, 1059, '2023-11-06', 40, 62, 4.00, 1, 'đây là một cuốn sách quan trọng mà thiết nghĩ không ai nên bỏ qua', 'Được viết bởi một chuyên gia lão luyện trong xây dựng chính sách công nghiệp của Hoa Kỳ, cuốn sách khởi đầu bằng việc nêu lên với những mũi nhọn của công nghiệp tương lai (robot, máy người, dữ liệu lớn, nông nghiệp chuẩn xác, kinh tế chia sẻ, bitcoin…),'),
(63, 'Sách Khoa Học Khám Phá Dữ Liệu Lớn NXB Trẻ', 'không', 2020, 'NXB TRE', 15, 112000.00, 9, 656, '2023-11-06', 30, 40, 3.00, 1, 'Màu sơn nào có thể cho bạn biết một chiếc xe đã qua sử dụng vẫn còn trong tình trạng tốt? Làm thế nào các công chức ở thành phố New York có thể xác định các hố ga nguy hiểm nhất trước khi chúng phát nổ? Và làm thế nào những c', 'Chìa khóa để trả lời những câu hỏi này, và nhiều câu hỏi khác, là dữ liệu lớn. \"Dữ liệu lớn\" đề cập đến khả năng đang phát triển của chúng ta để nắm giữ các bộ sưu tập lớn thông tin, phân tích, và rút ra những kết luận đôi khi sâu sắc đáng ngạc nhiên. Lĩnh vực khoa học đang nổi lên này có thể chuyển vô số hiện tượng – từ giá vé máy bay đến các văn bản của hàng triệu cuốn sách – thành dạng có thể tìm kiếm được, và sử dụng sức mạnh tính toán ngày càng tăng của chúng ta để khám phá những điều chúng ta chưa bao giờ có thể nhìn thấy trước. Trong một cuộc cách mạng ngang tầm với Internet hoặc thậm chí in ấn, dữ liệu lớn sẽ thay đổi cách chúng ta nghĩ về kinh doanh, y tế, chính trị, giáo dục, và sự đổi mới trong những năm tới. Nó cũng đặt ra những mối đe dọa mới, từ sự kết thúc không thể tránh khỏi của sự riêng tư cho đến khả năng bị trừng phạt vì những thứ chúng ta thậm chí còn chưa làm, dựa trên khả năng của dữ liệu lớn có thể dự đoán được hành vi tương lai của chúng ta.'),
(64, 'Sách - Deep Learning Cuộc Cách Mạng Học Sâu', 'không', 2020, 'NXB CONG THUONG', 89, 97500.00, 20, 1064, '2023-11-06', 50, 60, 1.00, 1, 'Cuộc cách mạng học sâu đã mang đến cho chúng ta những chiếc xe tự hành, cải thiện dịch vụ Google Translate, những cuộc trò chuyện trôi chảy với trợ lý ảo Siri và Alexa,', 'Cuộc cách mạng học sâu đã mang đến cho chúng ta những chiếc xe tự hành, cải thiện dịch vụ Google Translate, những cuộc trò chuyện trôi chảy với trợ lý ảo Siri và Alexa, cùng lợi nhuận khổng lồ từ việc giao dịch tự động trên Sở giao dịch chứng khoán New York. Mạng học sâu có thể chơi poker tốt hơn cả người chơi poker chuyên nghiệp và đánh bại nhà vô địch cờ vây thế giới. Trong cuốn sách này, Terry Sejnowski giải thích làm thế nào học sâu đã đi từ một lĩnh vực học thuật phức tạp trở thành một công nghệ đột phá trong nền kinh tế thông tin. Cuộc sống trên Trái đất tràn ngập những điều bí ẩn, nhưng có lẽ bí ẩn lớn nhất là bản chất của trí thông minh. Bản chất trí thông minh có nhiều dạng, từ thông minh của vi khuẩn cho tới trí thông minh phức tạp của con người, mỗi trí thông minh đều thích nghi một cách phù hợp trong tự nhiên. Trí tuệ nhân tạo cũng sẽ có nhiều dạng, thể hiện từng đặc điểm riêng của nó. Khi trí thông minh máy móc (machine intelligence) đã dựa vào mạng nơ-ron, nó có thể đưa ra một khuôn khổ khái niệm mới cho trí thông minh sinh học.'),
(65, 'Sách - An toàn thông tin - Nghệ thuật ẩn mình', 'không', 2019, 'NXB CONG THUONG', 1000, 544000.00, 19, 659, '2023-11-06', 60, 150, 3.00, 1, 'Trong cuốn sách này, Kevin Mitnick, hacker nổi tiếng nhất thế giới, sẽ hướng dẫn các biện pháp dễ thực hiện (và ít tốn kém) giúp bạn – trên cương vị một cá nhân bình thường và một người tiêu dùng – có thể giấu các thông tin n', '“[Nghệ thuật ẩn mình] là lời cảnh tỉnh, nhắc nhở chúng ta rằng các dữ liệu thô – từ email, ô tô, mạng wifi ở nhà – khiến chúng ta dễ dàng trở thành nạn nhân như thế nào.” - New York Times Book Review'),
(66, 'abooks - Gián Điệp Mạng - Cuộc Rượt Đuổi Ngoạn Mục Trong Mê Lộ Máy Tính', 'không', 2019, 'NXB CONG THUONG', 100, 172500.00, 8, 1098, '2023-11-06', 65, 210, 2.00, 1, 'Cuốn sách “Gián Điệp Mạng - Cuộc Rượt Đuổi Ngoạn Mục Trong Mê Lộ Máy Tính” của tác giả Clifford Stoll là câu chuyện người thực việc thực của chính tác giả - kể về cuộc săn đuổi hacker bất đắc dĩ của một nhà khoa học chuyển ta', 'Bối cảnh cuộc truy lùng diễn ra trước khi mạng Internet được phổ biến, chủ yếu vẫn là các mạng cục bộ và có kết nối với bên ngoài qua mạng điện thoại công cộng. Cuốn sách cũng cho ta thấy một cái nhìn về mạng Internet thủa ban đầu, các kết nối giữa các máy tính trong mạng, và giữa các mạng với nhau, các hệ điều hành Unix, các thiết bị terminal (thiết bị đầu cuối), các ứng dụng thư điện tử còn thô sơ, các hệ soạn thảo, đều là dạng “màn hình đen”, được sử dụng trước khi có những hệ điều hành có giao diện sử dụng đồ họa. Đây là một cuốn sách đáng đọc về lịch sử của Internet.'),
(67, 'Sách - An toàn thông tin - Hacker lược sử [AlphaBooks]', 'không', 2019, 'NXB CONG THUONG', 990, 455000.00, 18, 350, '2023-11-06', 55, 990, 1.00, 1, 'Cuốn sách nói về những nhân vật, cỗ máy, sự kiện định hình cho văn hóa và đạo đức hacker từ những hacker đời đầu ở đại học MIT.', 'Cuốn sách của Steven Levy ghi lại những chiến công của các tin tặc thời kỳ đầu trong cuộc cách mạng máy tính - những kẻ mê máy tính thông minh và lập dị từ cuối những năm 1950 đến đầu thập niên 1980, dám mạo hiểm, bẻ cong quy tắc và đẩy thế giới vào một hướng đi hoàn toàn mới.'),
(68, 'Sách - Life 3.0-Loài người trong kỷ nguyên trí tuệ nhân tạo', 'không', 2018, 'NXB THE GIOI', 2222, 124000.00, 13, 1432, '2023-11-06', 33, 50, 2.00, 1, 'Nội dung chính của Life 3.0 bàn về Trí tuệ nhân tạo (Artificial Intelligence – AI) và những ảnh hưởng của nó tới đời sống con người. AI là lĩnh vực đang ngày càng phát triển và tiềm năng, đích đến, hay kết quả cuối cùng của q', 'Những ảnh hưởng của công nghệ trong tương lai đối với nhiều mặt trong cuộc sống con người: việc làm, giao thông vận tải, truyền thông, pháp luật, chiến tranh, tội phạm, khả năng khai thác năng lượng, AI hay con người làm chủ…Một số khía cạnh khoa học hiện còn gây tranh cãi khi bàn về đặc điểm của trí tuệ nhân tạo (AI có mục tiêu hay ý thức không?), việc sử dụng tài nguyên vũ trụ, cái kết của vũ trụ. Qua những phân tích, tác giả cũng nhấn mạnh: AI là một trong những lĩnh vực quan trọng nhất của thời đại, cần được quan tâm và đầu tư nghiên cứu cũng như sự đồng lòng của giới khoa học, để những kết quả của AI là có ích cho nhân loại. Đi kèm đó là câu chuyện về những gì mà chính tác giả và những người ủng hộ đã và đang làm để góp phần xây dựng cộng đồng nghiên cứu “AI có ích” đó. Độc giả sẽ được đi từ những phân tích dễ hình dung về các viễn cảnh khả thi trong tương lai đến những kiến thức sâu hơn về trí tuệ nhân tạo; từ đó có cái nhìn của riêng mình về tương lai nhân loại và những gì bản thân có thể làm để góp phần đảm bảo đó là một tương lai tốt đẹp. Đây cũng là cuốn sách nhận được sự ủng hộ và lời ngợi khen của không ít độc giả nổi tiếng như Stephen Hawking, Elon Musk hay Barack Obama… hay các tạp chí danh tiếng như Science, The Telegraph, New York Times, Wall Street Journal…'),
(69, 'Sách Cải tổ doanh nghiệp trong thời đại số', 'không', 2019, 'NXB TONG HOP', 123, 150000.00, 18, 1070, '2023-11-06', 100, 500, 2.00, 1, 'Mọi người đều nói về những biến đổi trong thời đại số, nhưng đây mới là cơ hội để bạn thực sự triển khai hiệu quả quá trình này. Rogers cung cấp một lộ trình mà mọi cấp điều hành cần tham khảo. Nếu bạn không tham gia vào quá ', 'Cải Tổ Doanh Nghiệp Trong Thời Đại Số là cuốn sách đầu tiên chỉ ra cách tiếp cận để chuyển đổi một doanh nghiệp thành lập từ trước thời kỳ phát triển của Internet, giúp họ tiếp tục thành công trong thời đại số.'),
(70, 'Sách - Ký Sự BrSE - Những Nẻo Đường Nghề BrSE (Triệu Anh Tuấn + Nguyễn Văn Trọng)', 'không', 2020, 'NXB THE GIOI', 8950, 555555.00, 15, 378, '2023-11-06', 150, 170, 2.00, 1, 'Đây là một quyển sách hết sức đặc biệt vì nó rất khác so với những gì các bạn đã đọc trước đây. Có thể xem nó như là một câu chuyện kể về bước đường trở thành kỹ sư cầu nối – BrSE và những lời dặn dò từ người đi trước. Lúc đọ', 'Một công việc đặc thù đòi hỏi phức hợp kỹ năng nhưng cũng mang lại rất nhiều trải nghiệm đáng giá và cũng rất xương máu, mang lại giá trị rất lớn cho ngành công nghiệp phần mềm nước nhà hơn 20 năm qua. Bằng giọng văn có chút hài hước, rất mong cuốn sách sẽ mang lại những góc nhìn mới lạ, thú vị với kiến thức thực tiễn cho công việc mà nhiều người mơ ước BrSE - Kỹ sư cầu nối.'),
(71, 'Sách - Thành phố thông minh - Nền tảng, nguyên lý và ứng dụng', 'không', 2019, 'NXB CHINH TRI QUOC GIA VA SU THAT', 1000, 98000.00, 6, 454, '2023-11-06', 320, 330, 2.00, 1, 'Thế giới đang đẩy mạnh phát triển và ứng dụng các thành tựu của Cách mạng công nghiệp lần thứ tư mà nền tảng là Internet kết nối vạn vật (Internet of Things - IoT), dữ liệu lớn (Big Data), robot và trí tuệ nhân tạo (Artificia', 'Trong bối cảnh của Cách mạng công nghiệp lần thứ tư, xây dựng và phát triển thành phố thông minh (Smart City) đang là vấn đề được ưu tiên cho nghiên cứu và phát triển trên phạm vi toàn cầu. Thành phố thông minh là kết quả tất yếu, đồng thời là công cụ, phương tiện để đạt tới các mục tiêu tốt đẹp của các đô thị và cư dân của mình: là thành phố có giá trị, thành phố đáng sống, thân thiện, có khả năng phục hồi sau các thảm họa, khủng hoảng và phát triển bền vững. Kế hoạch xây dựng thành phố thông minh trên khắp thế giới đang chuyển từ bản vẽ thành hiện thực. Chúng mở ra những cơ hội phát triển mới trong một số lĩnh vực, như tăng trưởng kinh tế, kết cấu hạ tầng, giao thông vận tải, môi trường, chăm sóc sức khỏe, năng lượng... Xu hướng này không chỉ tạo ra những cơ hội đáng kể mà còn đặt ra nhiều thách thức. Giải quyết các thách thức trong việc tạo dựng, thiết lập, gia tăng sự hiểu biết về thiết kế, điều chỉnh và quản lý các thành phố thông minh một cách trí tuệ và hiệu quả là vấn đề cần thiết.'),
(72, 'Khoa học Khám Phá: Trí Tuệ Giả Tạo (Tái Bản)', 'không', 2019, 'NXB TRẺ', 400, 98000.00, 10, 81, '2023-11-06', 200, 300, 3.00, 1, 'Ngày nay Internet, được sự trợ giúp của công nghệ máy tính và đường truyền băng rộng, đã trở thành phần thiết yếu trong đời sống của con người. Gần như bất cứ hoạt động nào liên quan đến thông tin hay kiến thức, thậm chí quan', 'Mặt tiện lợi đã thật sự rõ ràng, và cũng có thể vì thế mà chẳng mấy ai sẵn sàng nhìn vào mặt tối của Internet – nó đã khiến chúng ta phụ thuộc vào nó, biến đổi cách chúng ta tư duy, thậm chí làm thui chột trí tuệ của con người.'),
(73, 'Sách Code Dạo Kí Sự - Lập Trình Viên Đâu Phải Chỉ Biết Code', 'không', 2018, 'NSB Dân Trí', 150, 1159000.00, 18, 1373, '2023-11-06', 130, 230, 2.00, 1, 'Thuở còn là sinh viên, mình cũng từng có những thắc mắc, trăn trở về kĩ thuật, về con đường nghề nghiệp, nhưng không có ai giải đáp', 'Đa phần sách cho dân IT hiện nay quá tập trung vào kĩ thuật và công nghệ (kĩ năng cứng), quên mất những kĩ năng mềm mà lập trình viên nên có. Những quyển sách trên cũng khá hàn lâm và khô cứng, khó tiếp thu.'),
(74, 'Sách AI - Trí Tuệ Nhân Tạo', 'không', 2017, 'NSB Kim Đồng', 300, 1160000.00, 27, 1105, '2023-11-06', 300, 333, 5.00, 1, 'Chính xác thì AI - trí tuệ nhân tạo là gì?', '“Được học hỏi những cách thức mới để triển khai AI và các loại công nghệ khác trong cuộc sống hay công việc là một điều tuyệt vời, nhưng đồng thời chúng ta cũng phải tập trung vào việc trở thành một con người tốt hơn, mạnh mẽ hơn và khoẻ khoắn hơn. Không nên cực đoan, hoàn toàn né tránh AI, hoặc phụ thuộc vào nó quá nhiều.” Lasse Rouhiainen'),
(75, 'Sách Clean Code - Mã Sạch Và Con Đường Trở Thành Lập Trình Viên Giỏi', 'không', 2019, 'NSB Dân Trí', 420, 385000.00, 29, 910, '2023-11-06', 540, 600, 5.00, 1, 'Clean Code Mã sạch và con đường trở thành lập trình viên giỏi', 'Hiện nay, lập trình viên là một trong những nghề nghiệp được nhiều người lựa chọn theo đuổi và gắn bó. Đây là công việc đòi hỏi sự tỉ mỉ, nhiều công sức nhưng mang lại giá trị cao và một tương lai công việc hứa hẹn. Là một trong số những chuyên gia giàu kinh nghiệm, điêu luyện và lành nghề trong ngành, tác giả đã đúc rút từ kinh nghiệm của mình, viết về những tình huống trong thực tế, đôi khi có thể trái ngược với lý thuyết để xây dựng nên cuốn cẩm nang này, nhằm hỗ trợ những người đang muốn trở thành một lập trình viên chuyên nghiệp. Cuốn sách được nhiều lập trình viên đánh giá là quyển sách giá trị nhất mà họ từng đọc trong sự nghiệp của mình. Cuốn sách hướng dẫn cách để viết những đoạn mã có thể hoạt động tốt, cũng như truyền tải được ý định của người vi...'),
(76, 'Sách Data Science for Business', 'không', 2013, 'NSB Dân trí', 100, 155000.00, 17, 138, '2023-11-06', 490, 500, 4.00, 1, 'Dữ liệu lớn là chủ đề công nghệ đang rất nóng hiện nay.', 'những hiểu biết cụ thể và khả thi về khách hàng, sản phẩm và hoạt động để điều chỉnh lại quy trình tạo giá trị của bạn, tối ưu hóa các sáng kiến ​​kinh doanh then chốt và khám phá các cơ hội kiếm tiền mới. Dữ liệu lớn là về kiếm tiền, và đó cũng là những gì cuốn sách này tập trung thảo luận. Cuốn sách “Ứng dụng Big Data trong kinh doanh” tiếp cận các cơ hội kinh doanh dựa trên dữ liệu lớn từ quan điểm thực tiễn. Thay vì đưa ra nhiều lý thuyết, sách trình bày hàng loạt kỹ thuật, phương pháp, bảng công việc và nhiều ví dụ thực tế mà tác giả đã có được sau nhiều năm làm việc với một số tổ chức hàng đầu thế giới.'),
(77, 'Thiết kế mạng Intranet', 'không', 2019, 'NXB BÁCH KHOA HÀ NỘI', 455500, 190000.00, 11, 371, '2023-11-06', 340, 450, 4.00, 1, 'Cuốn sách này được biên soạn làm tài liệu học tập và tham khảo cho sinh viên các chuyên ngành về Mạng máy tính và Truyền thông', 'Cuốn sách này được biên soạn làm tài liệu học tập và tham khảo cho sinh viên các chuyên ngành về Mạng máy tính và Truyền thông. Nội dung cuốn sách đề cập đến các vấn đề lý thuyết cơ bản của mạng máy tính và các công nghệ mạng tiến tiến hiện nay như IPv6, Mobility,... Với mục tiêu là giáo trình môn học, sau mỗi chương lý thuyết, các bài thực hành được trình bày ở mức độ đủ chi tiết để sinh viên có thể tự triển khai thực hiện. Xen kẽ trong các bài thực hành, các vấn đề lý thuyết cũng được phân tích và đối chiếu, giúp sinh viên hiểu rõ hơn các khái niệm trừu tượng và phức tạp.'),
(78, 'Sách - Giáo Trình Triết Học ( Bìa mềm )', 'không', 2021, 'NXB Đại Học Sư Phạm', 1000, 650000.00, 16, 1109, '2023-11-06', 200, 250, 1.00, 1, 'Giáo trình Triết học được biên soạn theo hướng cập nhật kiến thức mới, phát huy tính tích cực, chủ động, liên hệ với thực tiễn của người học các chuyên ngành khoa học xã hội và nhân văn', 'Giáo trình này còn là tài liệu cần thiết cho giảng viên các đại học, học viện, trường đại học, cao đẳng chuyên ngành Lý luận chính trị và các độc giả quan tâm.'),
(79, 'Sách - Giáo Trình Lập Trình PYTHON', 'không', 2020, 'NXB Đại Học Sư Phạm', 55000, 450000.00, 6, 1097, '2023-11-06', 300, 400, 5.00, 1, 'Sử dụng Python như một phương pháp tối ưu các ngôn ngữ cũ. Có những điểm khác biệt ở ngôn ngữ lập trình này như sự đơn giản trong lối code', 'Sử dụng Python như một phương pháp tối ưu các ngôn ngữ cũ. Có những điểm khác biệt ở ngôn ngữ lập trình này như sự đơn giản trong lối code. Sự đa di năng thể hiện ở việc Python có thể sử dụng linh hoạt ở đa nền tảng. Đánh giá từ các chuyên gia trong giới lập trình “không một ngôn ngữ nào có thể toàn năng và đầy đủ như Python”'),
(80, 'Lập trình hướng đối tượng JAVA core dành cho người mới bắt đầu học lập trình', 'không', 2019, 'NXB Lao Động', 400, 500000.00, 9, 693, '2023-11-08', 240, 300, 1.00, 1, 'Một lập trình viên Java-Android, tác giả cuốn sách “Lập trình hướng đối tượng Java Core”', 'JAVA là ngôn ngữ lập trình rất phổ biến nhất hiện nay, học Lập trình hướng đối tượng JAVA bạn sẽ có rất nhiều hướng đi, từ lập trình Mobile app, Java web, Desktop App, Game, và tất cả đều sử dụng nền tảng của JAVA CORE.'),
(81, 'Giáo Trình Lập Trình Android', 'không', 2018, 'NXB Xây Dựng', 400, 500000.00, 18, 771, '2023-11-08', 140, 160, 4.00, 1, 'Ngày nay các thiết bị số cầm tay như điện thoại di động, điện thoại thông minh, máy tính bảng có rất nhiều trên thị trường', 'Ngày nay các thiết bị số cầm tay như điện thoại di động, điện thoại thông minh, máy tính bảng có rất nhiều trên thị trường. Với giá thành ngày càng rẻ và các lợi ích đem lại, các thiết bị đó ngày càng được sử dụng nhiều và phổ biến. Một nền tảng được sử dụng trong các thiết bị đó là hệ điều hành thông minh Android của Google'),
(82, 'Giáo Trình Kỹ Thuật Lập Trình C Căn Bản Và Nâng Cao', 'không', 2019, 'Huy Hoàng Bookstore', 500, 500000.00, 24, 430, '2023-11-08', 170, 180, 4.00, 1, 'Giáo trình kỹ thuật lập trình C căn bản và nâng cao được hình thành qua nhiều năm giảng dạy của các tác giả', ' Ngôn ngữ lập trình C là một môn học cơ sở trong chương trình đào tạo kỹ sư, cử nhân tin học của nhiều trường đại học. Ở đây sinh viên được trang bị những kiến thức cơ bản nhất về lập trình, các kỹ thuật  tổ chức dữ liệu và lập trình căn bản với ngôn ngữ C.'),
(83, 'Tớ Học Lập Trình - Làm Quen Với PYTHON', 'không', 2016, 'Nhà Xuất Bản Thế Giới', 6600, 32314.00, 18, 960, '2023-11-08', 240, 290, 5.00, 1, 'Python là ngôn ngữ lập trình đã không còn xa lạ đối với lập trình viên', 'Python là ngôn ngữ lập trình đã không còn xa lạ đối với lập trình viên. Python có tính ứng dụng cao trong đời sống. Do đó mức lương của developer ngành này vô cùng tốt. Đó là lý do mà nhu cầu học Python ngày càng nhiều'),
(84, 'Trọn bộ 4 quyển tiểu thuyết Hannibal – Thomas Harris', 'không', 2019, 'nhà xuất bản nhả nam', 5000, 56534.00, 23, 893, '2023-11-08', 350, 400, 1.00, 1, 'Bộ 4 tiểu thuyết của Thomas Harris gồm Sự im lặng của bầy cừu – Hannibal', 'Bộ 4 tiểu thuyết của Thomas Harris gồm Sự im lặng của bầy cừu – Hannibal, Rồng Đỏ và Hannibal trỗi dậy với cách xây dựng nhân vật và tâm lý rất hoàn hảo. Bộ 4 tác phẩm này được xây dựng quanh nhân vật bác sĩ biến thái ăn thịt người Hannibal Lecter. Rồng đỏ là khi hắn bị nhốt trong tù, Sự im lặng của bầy cừu mô tả quá trình vượt ngục và thoát ra, Hannibal là thời điểm hắn bị truy đuổi.'),
(85, 'Móng Vuốt Quạ Đen', 'không', 2019, 'Nhà xUẤT BẢN KIM DONG', 500000, 400000.00, 29, 161, '2023-11-08', 450, 600, 1.00, 1, 'Ketterdam là trung tâm giao thương quốc tế, nơi mọi thứ đều có thể đoạt lấy nếu được trả một cái giá tương xứng - và không ai hiểu rõ điều đó hơn thiên tài tội phạm Kaz Brekker', 'Ketterdam là trung tâm giao thương quốc tế, nơi mọi thứ đều có thể đoạt lấy nếu được trả một cái giá tương xứng - và không ai hiểu rõ điều đó hơn thiên tài tội phạm Kaz Brekker. Kaz được đề nghị thực hiện một phi vụ hiểm hóc với mức tiền công sẽ giúp anh giàu sang hơn bất cứ giấc mơ điên rồ nào của mình. Nhưng anh không thể hoàn thành được nó một mình.\n\"Một tù nhân với cơn khát trả thù\nMột tay thiện xạ không thể cưỡng lại cám dỗ của trò đỏ đen\nMột người trốn chạy quá khứ trong nhung lụa\nMột gián điệp mang biệt danh Bóng Ma\nMột Độc Tâm Y dùng sức mạnh để sinh tồn trong khu ổ chuột\nMột tên trộm tài năng với những cuộc đào thoát không tưởng.\"'),
(86, 'Chuyên Gia Pháp Y', 'không', 2019, 'NXB Hội Nhà Văn', 5000, 400000.00, 21, 835, '2023-11-08', 212, 300, 4.00, 1, 'Chuyên Gia Pháp Y “Cuốn sách này đã khắc họa thành công thế nào gọi là côn trùng có thể nói thay lời người đã chết! Đúng như lời tác giả đã viết', 'Chuyên Gia Pháp Y “Cuốn sách này đã khắc họa thành công thế nào gọi là côn trùng có thể nói thay lời người đã chết! Đúng như lời tác giả đã viết: Xác chết tại hiện trường phát hiện ra vụ án tuy không thốt được ra lời, nhưng những con côn trùng sinh sôi trên đó không nghi ngờ gì là những nhân chứng vô hình đã đưa ra những lời làm chứng vô thanh, giúp cho người chết được nhắm mắt, yên lòng!” “Trong 11 vụ án mà tác giả miêu tả trong cuốn sách, hiện trường vụ phạm tội nào cũng khiến người ta thấy khủng khiếp, kết cục của vụ án nào cũng khiến người ta phải suy nghĩ mãi và không thể nào quên!”'),
(87, 'Scarpetta - Bác Sĩ Pháp Y', 'không', 2019, 'Nhà Xuất Bản Văn Học', 4314, 23340.00, 14, 993, '2023-11-08', 332, 400, 2.00, 1, 'Patricia Cornwell nổi tiếng về loạt tiểu thuyết về bác sĩ pháp y Scarpetta, cuốn này là cuốn thứ 16 trong bộ 51 cuốn của bà.', 'Patricia Cornwell nổi tiếng về loạt tiểu thuyết về bác sĩ pháp y Scarpetta, cuốn này là cuốn thứ 16 trong bộ 51 cuốn của bà. Mọi sự được đúc kết gọn gàng bằng một câu của một nhân vật trong truyện “Một trường hợp kinh điển về một người sa sút tâm lý” nhưng không vì thế mà quyển này nhàm chán, vì tác giả chỉ viết câu đó sau hơn 400 trang khác'),
(88, 'Pháp Y Tần Minh (Trọn Bộ 3 Cuốn)', 'không', 2018, 'Nhà Xuất Bản Văn Học', 5657, 23004.00, 6, 134, '2023-11-08', 312, 500, 1.00, 1, '\"Muốn cho người khác không biết, trừ phi mình đừng làm.\"', '\"Muốn cho người khác không biết, trừ phi mình đừng làm.\"\nLời tuyên chiến của bác sĩ pháp y với kẻ phạm tội\nTội phạm cho rằng cái chết của nạn nhân sẽ che giấu được tội lỗi của chúng, nhưng nhờ có họ, những người giải mã tử thi, tội ác không bao giờ có thể tàng hình.\nNhững vụ án mạng rùng rợn nhất, những vụ điều tra phá án ly kỳ nhất được bật mí qua trải nghiệm có thực của một bác sĩ pháp y'),
(89, 'Sách - Another (Trọn Bộ 2 Tập)', 'không', 2015, 'Nhà Xuất Bản Hồng Đức', 98765, 43500.00, 10, 31, '2023-11-08', 133, 200, 2.00, 1, 'Another là câu chuyện 3 trong 1: ma, kinh dị, học đường.', 'Another là câu chuyện 3 trong 1: ma, kinh dị, học đường.\nHai mươi sáu năm về trước có một học sinh hoàn thiện hoàn mĩ. Rất đẹp, rất giỏi, rất hòa đồng, ai cũng yêu quý, những lời tán tụng người ấy được truyền mãi qua các thế hệ học sinh của trường. Nhưng tên đầy đủ là gì, chết đi thế nào, thậm chí giới tính ra sao lại không một ai hay biết. Người ta chỉ rỉ tai nhau, bỗng nhiên giữa năm bạn ấy chết, trường lớp không sao thoát được nỗi buồn nhớ thương, họ bèn cư xử như thể học sinh này còn tồn tại. Bàn ghế để nguyên, bạn cùng lớp vẫn giả vờ nói chuyện với người đã khuất.\nVề cơ bản, đây là cách ứng xử đẹp có phần đáng ngợi khen. Nhưng sau chót, lại kéo ra một hệ lụy gai người.\nVào lễ tốt nghiệp, cả lớp chụp chung một tấm ảnh kỷ niệm. Đến khi xem ảnh đã tráng rửa, họ nhận ra một chuyện. Trong tấm ảnh tập thể, đứng ở một góc là một người lẽ ra không thể nào xuất hiện. Mỉm cười như bao người khác, nhưng gương mặt cứng đanh, trơ trơ, tái nhợt…'),
(90, 'Sách - Tokyo Hoàng Đạo Án', 'không', 2019, 'Nhà Xuất Bản Hồng Đức', 654, 3400.00, 25, 721, '2023-11-08', 434, 500, 3.00, 1, 'Tokyo hoàng đạo án là tiểu thuyết trinh thám kinh dị đầu tay của ông, đã được vinh danh ở giải Edogawa Rampo vào năm 1981.', 'Tokyo hoàng đạo án là tiểu thuyết trinh thám kinh dị đầu tay của ông, đã được vinh danh ở giải Edogawa Rampo vào năm 1981.\nHơn 30 năm qua, Tokyo hoàng đạo án vẫn nằm trong danh sách các tác phẩm văn học bán chạy nhất của Nhật Bản, đã được dịch ra nhiều thứ tiếng như Anh, Pháp, Nga, Trung, Thái Lan, Tagalog…'),
(91, 'Sách - Hồ Tuyệt Mệnh', 'không', 2015, 'Nhà Xuất Bản Hồng Đức', 2434, 4350.00, 10, 877, '2023-11-08', 342, 600, 4.00, 1, 'Hồ Tuyệt Mệnh là phần 1 trong series Hồ Sơ Tội Ác gồm 7 phần', 'Hồ Tuyệt Mệnh là phần 1 trong series Hồ Sơ Tội Ác gồm 7 phần, tập trung khai thác yếu tố ác quỷ tâm linh. Đây là một trong những tác phẩm mới của Quỷ Cổ Nữ, tác giả của Kỳ Án Ánh Trăng, Đau Thương Đến Chết... những tác phẩm đã thổi một luồng gió mới vào thể loại văn học kinh dị Trung Quốc'),
(92, 'Cầu Thang Gào Thét', 'không', 2019, 'Nhà Xuất Bản Hồng Đức', 5421, 3430.00, 13, 697, '2023-11-08', 455, 800, 3.00, 1, 'Suốt hơn năm mươi năm Luân đôn đã gồng mình trước một điều đáng sợ: các vụ ma ám và hiện hồn liên tục xảy ra khắp mọi ngóc ngách.', 'Lockwood và Đồng sự, một hãng thám tử quy mô nhỏ nhất, cơ ngơi xập xệ nhất, song hoạt động cực kỳ độc lập và kiên quyết không chịu sự kiểm soát nào từ các bậc tiền bối, Lucy Carlyle tuổi trẻ tài cao hợp sức cùng Anthony Lockwood trưởng nhóm cuốn hút. Một vụ ma ám mới dẫn dụ cả hai đến với một câu chuyện xưa đáng sợ; Lucy, Anthony, cùng đồng sự George béo ưa mỉa mai, chỉ còn lại cơ hội cuối cùng để chuộc lỗi, điều sẽ dẫn họ đến với Dinh thự Combe Carey. Và rồi, liệu họ có sống sót qua trải nghiệm Cầu thang gào thét và Căn phòng Đỏ'),
(93, 'Malorie – Hành Trình Chạy Trốn Tử Thần', 'không', 2018, 'NXB Hà Nội', 1231, 24540.00, 20, 1095, '2023-11-08', 532, 700, 2.00, 1, 'Cái chết đến từ một cuộn băng. Hai đôi nam nữ vị thành niên lần lượt chết bởi cơn đau bót nghẹt tim một tuần sau khi xem phải một cuộn băng lạ trong một nhà nghỉ ngoại ô Tokyo, bên trên một cái giếng cũ', 'Cái chết đến từ một cuộn băng. Hai đôi nam nữ vị thành niên lần lượt chết bởi cơn đau bót nghẹt tim một tuần sau khi xem phải một cuộn băng lạ trong một nhà nghỉ ngoại ô Tokyo, bên trên một cái giếng cũ…Mê mẩn khám phá ra bí ẩn đằng sau những cái chết kinh hoàng đó, Asakawa, một phóng viên đang háo hức vì danh vọng lao vào cuộc truy tìm dấu vết. Đến mức gã tự mình xem cuộn băng, và đối mặt với lời đe doạ hãi hùng kẻ nào đó đã đặt trong những hình ảnh cuộn băng ghi lại. Bảy ngày còn lại, vòng quay của Ring bắt đầu, sự khiếp hải của kẻ đã thấy ngọn núi lửa phun trào, những cái mặt ma quái, và cuối cùng, cái giếng cũ tiêu điều giữa khu rừng vắng… bắt đầu ngấm vào trong tim. Sự thật là đâu? Đâu là lời nguyền, đâu là lời giải'),
(94, 'Sách - Ring - Vòng Tròn Ác Nghiệt', 'không', 2019, 'NXB VĂN HỌC ', 1443, 34290.00, 13, 294, '2023-11-08', 234, 450, 4.00, 1, 'Cái chết đến từ một cuộn băng. Hai đôi nam nữ vị thành niên lần lượt chết bởi cơn đau bóp nghẹt trái tim một tuần sau khi xem phải cuộn băng lạ trong một nhà nghỉ ngoại ô Tokyo, bên trên một cái giếng cũ...', 'Mê mẩn khám phá ra bí ẩn đằng sau những cái chết kinh hoàng đó, Asakawa, một phóng viên đang háo hức vì danh vọng lao vào cuộc truy tìm dấu vết. Đến mức gã tự mình xem phải cuộn băng, và đối mặt với lời đe dọa hãi hùng kẻ nào đó đã đặt trong những hình ảnh cuộn băng ghi lại. Bảy ngày còn lại, vòng quay của Ring bắt đầu, sự khiếp hãi của kẻ đã thấy ngọn núi lửa phun trào, những cái mặt ma quái, và cuối cùng, cái giếng cũ tiêu điều giữa khu rừng vắng... bắt đầu ngấm vào trong tim. Sự thật là đâu? Đâu là lời nguyền, đâu là lời giải'),
(95, 'Nhà giả kim ', 'không', 2019, 'NXB Hội Nhà Văn', 4322, 23443.00, 27, 934, '2023-11-08', 131, 190, 2.00, 1, 'Tiểu thuyết Nhà giả kim của Paulo Coelho như một câu chuyện cổ tích giản dị, nhân ái, giàu chất thơ, thấm đẫm những minh triết huyền bí của phương Đông', 'Tiểu thuyết Nhà giả kim của Paulo Coelho như một câu chuyện cổ tích giản dị, nhân ái, giàu chất thơ, thấm đẫm những minh triết huyền bí của phương Đông. Trong lần xuất bản đầu tiên tại Brazil vào năm 1988, sách chỉ bán được 900 bản. Nhưng, với số phận đặc biệt của cuốn sách dành cho toàn nhân loại, vượt ra ngoài biên giới quốc gia, Nhà giả kim đã làm rung động hàng triệu tâm hồn, trở thành một trong những cuốn sách bán chạy nhất mọi thời đại, và có thể làm thay đổi cuộc đời người đọc.'),
(96, '2.Đắc nhân tâm ', 'không', 2020, 'NXB Tổng Hợp TPHCM', 4555, 4324.00, 14, 660, '2023-11-08', 434, 650, 3.00, 1, 'Đắc nhân tâm – How to win friends and Influence People  của Dale Carnegie là quyển sách nổi tiếng nhất, bán chạy nhất và có tầm ảnh hưởng nhất của mọi thời đại. Tác phẩm đã được chuyển ngữ sang hầu hết các thứ tiếng trên thế ', 'Đây là quyển sách duy nhất về thể loại self-help liên tục đứng đầu danh mục sách bán chạy nhất (best-selling Books) do báo The New York Times bình chọn suốt 10 năm liền. Riêng bản tiếng Anh của sách đã bán được hơn 15 triệu bản trên thế giới. Tác phẩm có sức lan toả vô cùng rộng lớn – dù bạn đi đến bất cứ nơi đâu, bất kỳ quốc gia nào cũng đều có thể nhìn thấy. Tác phẩm được đánh giá là quyển sách đầu tiên và hay nhất, có ảnh hưởng làm thay đổi cuộc đời của hàng triệu người trên thế giới.'),
(97, 'Mặc kệ thiên hạ, sống như người Nhật ', 'không', 2018, 'NXB Hà Nội', 6431, 10000.00, 15, 1159, '2023-11-08', 876, 10000, 5.00, 1, 'Cuốn sách gối đầu giường cho những người hay lo lắng, sợ hãi và luôn thấy mình kém may mắn Dành cho những ai muốn được sống là chính mình, cuộc đời của mình, tuổi trẻ của mình.', 'Đã đến lúc bạn nên dừng tìm kiếm sự an ủi ở người khác, hoặc chờ đợi sự giúp đỡ từ một ai đó. Bởi an ủi hay giúp đỡ về mặt cảm xúc đôi khi giống như con dao hai lưỡi. Nó có thể giúp bạn chống đỡ lo âu hay muộn phiền nhất thời, nhưng lại đẩy bạn chìm sâu hơn vào những cảm xúc tiêu cực đó. Giống như một đứa trẻ khi vấp ngã, bạn mong đợi một sự xoa dịu từ người lớn, mà quên mất rằng sự “hỗ trợ” ấy chỉ càng khiến bạn mãi chẳng thể nào “biết đi”.'),
(98, 'Đời ngắn đừng ngủ dài ', 'không', 2019, 'NXB Trẻ', 44654, 2312.00, 12, 901, '2023-11-08', 554, 600, 4.00, 1, 'nếu bạn vẫn còn “ngủ dài” và lười biếng, không suy nghĩ, bận tâm đến cuộc đời mình, “Đời Ngắn Ngủi Đừng Ngủ Dài” sẽ giúp bạn thức tỉnh.', 'Thời gian là vô giá nhưng những điều chúng ta làm được trong một khoảng thời gian sẽ có giá trị nhất định của nó. Nếu bạn dành nhiều thời gian cho những việc có ích và phát triển bản thân từng ngày thì bạn sẽ trở thành một con người khác biệ'),
(102, '999 Lá Thư Gửi Cho Chính Mình ', 'không', 2019, 'NXB Thanh Niên', 1000, 99000.00, 20, 911, '2023-11-08', 500, 600, 3.00, 1, 'Cầm trên tay cuốn sách “999 lá thư gửi cho chính mình” – bạn sẽ hiểu rằng: tuổi trẻ của chúng ta dù có mong manh đến đâu thì cũng sẽ thành công vượt qua mọi khó khăn một cách mạnh mẽ ngoài sức tưởng tượng.', '“999 lá thư gửi cho chính mình” – Mong bạn trở thành phiên bản hoàn hảo nhất. Cái gọi là vẻ đẹp nội tâm luôn luôn tốt hơn vẻ bề ngoài hào nhoáng, hy vọng bạn sẽ mãi luôn kiên cường, dũng cảm đứng ở nơi ánh sáng chiếu rọi, sống tốt một cuộc sống mà mình hằng mong ước.');

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
(50, 102, 44),
(52, 55, 46),
(53, 58, 47),
(54, 59, 48),
(55, 60, 49),
(56, 64, 50),
(57, 76, 51),
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
(2, 'Công nghệ thông tin'),
(3, 'Trinh thám'),
(4, 'Kinh dị'),
(7, 'Truyện ngắn'),
(8, 'Tâm lý');

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
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
