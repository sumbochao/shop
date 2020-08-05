-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 17, 2019 lúc 10:26 AM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` char(15) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `level` tinyint(4) DEFAULT '1',
  `avatar` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `email`, `password`, `phone`, `status`, `level`, `avatar`, `created_at`, `updated_at`) VALUES
(7, 'Minh', 'hai phong ', 'minh@gmail.com', 'Xuyt1902', '0123456789', 1, 1, NULL, NULL, NULL),
(8, 'Duy', 'Nam dinh', 'luongngocduy190298@gmail.com', 'Xuyt1902', '0349794999', 1, 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `slug` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `images` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `banner` int(11) DEFAULT NULL,
  `home` tinyint(4) DEFAULT '0',
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `images`, `banner`, `home`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Bitis Hunter Nữ', 'bitis-hunter-n', NULL, NULL, 1, 1, '2017-11-23 08:54:06', '2019-02-25 10:19:07'),
(11, 'Adidas Ultra Boost', 'adidas-ultra-boost', NULL, NULL, 1, 1, '2017-11-23 08:54:16', '2018-11-20 09:01:03'),
(12, 'Converse', 'converse', NULL, NULL, 1, 1, '2017-11-25 11:45:13', '2018-11-22 03:42:07'),
(14, 'Bitis Hunter nam', 'bitis-hunter-nam', NULL, NULL, 1, 1, '2018-11-22 03:35:19', '2018-11-22 03:35:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` tinyint(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `transaction_id`, `product_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(41, 33, 18, 5, 735000, '2018-11-21 07:20:34', '2018-11-21 07:20:34'),
(42, 33, 8, 1, 630500, '2018-11-21 07:20:34', '2018-11-21 07:20:34'),
(43, 34, 20, 2, 735000, '2018-11-21 08:07:04', '2018-11-21 08:07:04'),
(44, 35, 8, 3, 630500, '2018-11-22 05:32:46', '2018-11-22 05:32:46'),
(45, 35, 23, 1, 392000, '2018-11-22 05:32:46', '2018-11-22 05:32:46'),
(46, 36, 8, 2, 630500, '2019-03-06 01:35:21', '2019-03-06 01:35:21'),
(47, 37, 8, 1, 630500, '2019-05-22 02:14:52', '2019-05-22 02:14:52'),
(48, 38, 8, 5, 630500, '2019-06-18 08:22:31', '2019-06-18 08:22:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `slug` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sale` tinyint(4) DEFAULT '0',
  `thunbar` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `content` text CHARACTER SET utf8,
  `number` int(11) DEFAULT '0',
  `head` int(11) DEFAULT '0',
  `view` int(11) DEFAULT '0',
  `hot` tinyint(4) DEFAULT '0',
  `pay` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `price`, `sale`, `thunbar`, `category_id`, `content`, `number`, `head`, `view`, `hot`, `pay`, `created_at`, `updated_at`) VALUES
(8, 'Adidas Ultra Boost 4.0 Candy Cabe', 'adidas-ultra-boost-40-candy-cabe', 650000, 3, 'Adidas Ultra Boost 4.0 Candy Cabe.jpg', 11, 'mua nhanh khoi phi hang dep nha', 93, 0, 0, 0, 10, NULL, '2019-06-18 08:24:06'),
(12, 'Ultra Boost 4.0 Noble Red', 'ultra-boost-4.0-noble-red', 800000, 9, 'Ultra Boost 4.0 Noble Red.jpg', 11, 'Dung 1 lan nho ca doi', 5, 0, 0, 0, 1, NULL, '2019-06-18 06:46:01'),
(13, 'Ultra Boost 3.0 all white', 'ultra-boost-3.0-all-white', 500000, 3, 'Ultra Boost 3.0 all white.jpg', 11, '<p>tuyệt vời đến từng giây phút sử dụng</p>', 10, 0, 0, 0, 1, NULL, '2018-11-21 01:01:23'),
(15, 'Ultra Boost 3.0 nam nu', 'ultra-boost-3.0-nam-nu', 650000, 3, 'Ultra Boost 3.0 nam nu.png', 11, '<p>Tiền nào của đấy</p>', 172, 0, 0, 0, 1, NULL, '2018-11-21 01:01:32'),
(17, 'Ultra Boost 3.0 Drack Mocha', 'ultra-boost-3.0-drack-mocha', 1000000, 3, 'Ultra Boost 3.0 Drack Mocha.jpg', 11, 'Hàng cực chất , giá cực sốc', 152, 0, 0, 0, 13, NULL, '2018-11-21 01:01:40'),
(18, 'Bitis Hunter all night', 'bitis-hunter-all-night', 750000, 2, 'Bitis Hunter all night.jpg', 10, 'hang co hai mau xanh va do,co co tu 41 den 45', 5, 0, 0, 0, 2, NULL, '2019-06-18 08:18:38'),
(19, 'Bitis Hunter Nu X2 Red Dawn', 'bitis-hunter-nu-x2-red-dawn', 800000, 2, 'Bitis Hunter Nu X2 Red Dawn.jpg', 10, 'hàng đẹp', 10, 0, 0, 0, 2, NULL, '2019-02-25 10:12:01'),
(20, 'Bitis Hunter Originals nu', 'bitis-hunter-originals-nu', 750000, 2, 'Bitis Hunter Originals nu.jpg', 10, 'Mua ngay không phải nghĩ', 10, 0, 0, 0, 2, NULL, '2018-11-21 01:02:11'),
(21, 'Hunter Originals', 'hunter-originals', 500000, 2, 'Hunter Originals.jpg', 10, 'Mua ngay không phải nghĩ', 10, 0, 0, 0, 3, NULL, '2018-11-21 01:02:21'),
(22, 'Alan Walker Sneaker', 'Alan Walker Sneaker', 400000, 2, 'Alan Walker Sneaker.jpg', 12, 'Giày thể thao cực hot', 15, 0, 0, 0, 4, NULL, '2018-11-21 01:02:36'),
(23, 'Deadpool High Top Sneaker', 'deadpool-high-top-sneaker', 400000, 2, 'Deadpool High Top Sneaker.jpg', 12, 'Giày thể thao cực hot', 14, 0, 0, 0, 6, NULL, '2019-06-18 08:24:06'),
(24, 'Sneaker MBS026', 'sneaker-mbs026', 500000, 2, '40.jpg', 12, '<p>hang đẹp mới về', 20, 0, 0, 0, 7, NULL, '2019-02-25 10:12:21'),
(25, 'Sneaker Nu', 'sneaker-nu', 400000, 2, '2.jpg', 12, 'cá tính lắm nhé', 20, 0, 0, 0, 10, NULL, '2019-02-25 10:12:35'),
(26, 'Bitis Hunter Nam', 'bitis-hunter-nam', 899000, 0, '5.jpg', 14, '<p>bảo hành trọn đòi</p>', 99, 0, 0, 0, 0, NULL, '2019-02-25 10:12:50'),
(27, 'Bitis Hunter Dawn', 'bitis-hunter-dawn', 799000, 0, 'cua-hang-bitis-nguyen-dinh-chieu-202348.jpg', 14, '<p>mua nhanh kẻo hết</p>', 120, 0, 0, 0, 0, NULL, '2019-02-25 10:13:04'),
(28, 'Bitis Hunter Limited', 'bitis-hunter-limited', 829000, 0, 'giay-the-thao-nu-bitis-hunter-dark-tribal-dsw057333.jpeg', 14, 'cảm ơn bạn đã mua chịn tôi', 89, 0, 0, 0, 0, NULL, '2019-02-25 10:13:21'),
(29, 'Bitis Hunter Pepsi', 'bitis-hunter-pepsi', 859000, 0, 'web_shoes201806134163_20180623_7650.png', 14, 'đẹp lắm a nha !', 78, 0, 0, 0, 0, NULL, '2019-06-17 02:49:03'),
(30, 'BÃ¹i Thu Trang', 'bui-thu-trang', 666000, 0, '800px-Toyota_Headquarter_Toyota_City.jpg', 10, '<p>Ä‘&aacute;</p>', 122, 0, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `note` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`id`, `amount`, `users_id`, `status`, `note`, `created_at`, `updated_at`) VALUES
(33, 4736050, 54, 1, 'Giao truoc 10h sang cho minh ', '2018-11-21 07:20:34', '2018-11-21 08:04:03'),
(35, 2511850, 54, 1, 'ok', '2018-11-22 05:32:46', '2019-06-18 08:24:06'),
(36, 1387100, 57, 0, '', '2019-03-06 01:35:21', '2019-03-06 01:35:21'),
(37, 693550, 58, 0, 'amdadisjasdj', '2019-05-22 02:14:52', '2019-05-22 02:14:52'),
(38, 3467750, 57, 0, 'thanh toÃ¡mh', '2019-06-18 08:22:31', '2019-06-18 08:22:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `phone` char(15) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `avatar` tinyint(100) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `token` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `password`, `avatar`, `status`, `token`, `created_at`, `updated_at`) VALUES
(52, 'duy vf', 'duyvf@gmail.com', '0123457782', 'hai phong ', 'Xuyt1902', NULL, 1, NULL, NULL, NULL),
(54, 'minhmanhtiep', 'minhmanhtiep@gmail.com', '01235647457', 'Nam Dinh', 'Xuyt1902', NULL, 1, NULL, NULL, NULL),
(55, 'fdashfgsh', 'abc@gmail.com', '24', '124', 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, NULL, NULL, NULL),
(56, 'adada', 'abcd@gmail.com', '31212', '132', '123456', NULL, 1, NULL, NULL, NULL),
(57, 'ad', 'luongngocduy190298@gmail.com', '132', 'hn', '123456', NULL, 1, NULL, NULL, NULL),
(58, 'da da da', 'duyvff@gmail.com', '1234567890', 'hn', '123456', NULL, 1, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
