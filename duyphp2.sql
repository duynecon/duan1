-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3333
-- Thời gian đã tạo: Th2 21, 2024 lúc 11:36 AM
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
-- Cơ sở dữ liệu: `asm_php2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `taikhoan_id` int(6) NOT NULL,
  `sanpham_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` int(6) NOT NULL,
  `donhang_id` int(9) NOT NULL,
  `sanpham_id` int(6) NOT NULL,
  `soluong` int(3) NOT NULL,
  `dongia` int(6) NOT NULL,
  `thanhtien` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `home` tinyint(1) NOT NULL DEFAULT 0,
  `stt` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `home`, `stt`) VALUES
(1, 'Quần nam', 1, 1),
(2, 'Áo nam', 0, 0),
(3, 'Áo khoác', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(9) NOT NULL,
  `iddh` varchar(50) NOT NULL,
  `name_nd` varchar(50) NOT NULL,
  `email_nd` varchar(50) NOT NULL,
  `phone_nd` varchar(20) NOT NULL,
  `address_nd` varchar(100) NOT NULL,
  `total` int(9) NOT NULL,
  `ship` int(6) NOT NULL DEFAULT 0,
  `voucher` int(6) NOT NULL DEFAULT 0,
  `total_payment` int(9) NOT NULL,
  `payment_method` tinyint(1) NOT NULL,
  `taikhoan_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `price` int(6) NOT NULL,
  `bestseller` tinyint(1) DEFAULT 0,
  `mota` text DEFAULT NULL,
  `danhmuc_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `img`, `price`, `bestseller`, `mota`, `danhmuc_id`) VALUES
(1, 'Áo Khoác Bomber Varsity Nam ', '1.webp', 275000, 0, 'Chưa cập nhật', 3),
(3, 'Áo Khoác Bomber Nam', '2.webp', 250000, 0, 'Chưa cập nhật', 3),
(4, 'Quần Short Nam', '4.webp', 170000, 0, 'Chư cập nhật', 1),
(5, 'Quần short cạp chun', '5.webp', 120000, 0, 'Chưa cập nhật', 1),
(6, 'Quần Short Nam Thể Thao', '6.webp', 150000, 0, 'Chưa cập nhật', 1),
(7, 'Quần Âu Dáng Suông Nam', '7.webp', 200000, 1, 'Chưa cập nhật', 1),
(8, 'Quần Âu Nam', '8.webp', 200000, 0, 'Chưa cập nhật', 1),
(9, 'Quần Tây Ống Rộng Nam', '9.webp', 115000, 0, 'Chưa cập nhật', 1),
(10, 'Quần Tây Âu Nam', '10.webp', 130000, 1, 'Chưa cập nhật', 1),
(11, 'Áo Sơ Mi Caro Nam Kẻ Nâu', '11.webp', 200000, 0, 'Chưa cập nhật', 2),
(12, 'Áo Sơ Mi Nam Cổ Vest', '12.webp', 100000, 0, 'Chưa cập nhật', 2),
(13, 'Áo Hoodie Nam Dài Tay', '13.webp', 100000, 1, 'Chưa cập nhật', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `role` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `username`, `password`, `name`, `address`, `email`, `phone`, `role`) VALUES
(1, 'thanhhoa', '123', 'Lại Thanh Hòa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(2, '76thanhhoa', '123', 'Thanh Hòa Lại', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(3, '76thanhhoa', '123', 'Thanh Hòa Lại', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(5, 'thanhhoa11', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(13, 'hotb', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(14, 'laithanhhoa12', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(15, 'laithanhhoa12', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(16, 'laithanhhoa12', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(17, 'laithanhhoa12', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(18, 'laithanhhoa12', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(19, 'laithanhhoa12', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(20, 'laithanhhoa12', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(21, 'laithanhhoa12', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(22, 'laithanhhoa12', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(23, 'thanhhoa', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(24, 'thanhhoa', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(25, 'thanhhoa', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(26, 'thanhhoa', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(27, 'thanhhoa', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(28, 'thanhhoa', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(29, 'thanhhoa', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(30, 'thanhhoa', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(31, 'thanhhoa', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(32, 'thanhhoa', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(33, 'thanhhoa', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(34, 'thanhhoa', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(35, 'thanhhoa', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(36, 'svqnck137789@dcctb.com', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(37, 'svqnck137789@dcctb.com', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(38, 'svqnck137789@dcctb.com', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0),
(39, 'svqnck137789@dcctb.com', '123', 'Lai Thanh Hoa', 'HoChiMinh CiTy', 'laithanhhoa16092004@gmail.com', '0354951127', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_binhluan_taikhoan` (`taikhoan_id`),
  ADD KEY `fk_binhluan_sanpham` (`sanpham_id`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_chitietdh_donhang` (`donhang_id`),
  ADD KEY `fk_chitietdh_sanpham` (`sanpham_id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_donhang_taikhoan` (`taikhoan_id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sanpham_danhmuc` (`danhmuc_id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_binhluan_sanpham` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `fk_binhluan_taikhoan` FOREIGN KEY (`taikhoan_id`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `fk_chitietdh_donhang` FOREIGN KEY (`donhang_id`) REFERENCES `donhang` (`id`),
  ADD CONSTRAINT `fk_chitietdh_sanpham` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_donhang_taikhoan` FOREIGN KEY (`taikhoan_id`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`danhmuc_id`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
