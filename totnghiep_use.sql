-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 09, 2021 lúc 12:53 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `totnghiep`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bill_total` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_Time` datetime DEFAULT current_timestamp(),
  `user_phone` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `user_id`, `user_name`, `user_email`, `bill_total`, `create_Time`, `user_phone`, `address`, `status`) VALUES
(1, 4, 'Hùng Văn Đỗ', 'admin@gmail.com', '26,000', '2021-04-09 17:21:15', '0396645808', 'Xã Quyết Thắng- Thành Phố Thái Nguyên- tỉnh Thái Nguyên', 0),
(2, 4, 'Hùng Văn Đỗ', 'admin@gmail.com', '26,000', '2021-04-09 17:23:41', '0396645808', 'Xã Quyết Thắng- Thành Phố Thái Nguyên- tỉnh Thái Nguyên', 0),
(3, 4, 'Hùng Văn Đỗ', 'admin@gmail.com', '26,000', '2021-04-09 17:24:43', '0396645808', 'Xã Quyết Thắng- Thành Phố Thái Nguyên- tỉnh Thái Nguyên', -1),
(4, 4, 'Hùng Văn Đỗ', 'admin@gmail.com', '26,000', '2021-04-09 17:25:25', '0396645808', 'Xã Quyết Thắng- Thành Phố Thái Nguyên- tỉnh Thái Nguyên', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(11) NOT NULL,
  `id_bill` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `size_id`, `product_id`, `product_name`, `price`, `quantity`, `create_time`, `update_time`) VALUES
(1, 4, NULL, 8, 'product0111', '20000', 1, '2021-04-09 10:25:25', '2021-04-09 10:25:25'),
(2, 4, NULL, 9, 'product02', '3000', 2, '2021-04-09 10:25:25', '2021-04-09 10:25:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `Create_time` timestamp NULL DEFAULT current_timestamp(),
  `Update_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id`, `name`, `status`, `Create_time`, `Update_time`) VALUES
(1, 'HUNGVIP1', 1, '2021-04-09 08:19:36', '2021-04-09 08:19:36'),
(2, 'HUNGVIP2', 1, '2021-04-09 08:19:48', '2021-04-09 08:19:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `status`) VALUES
(1, 'category1', 1),
(2, 'category2', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog_detail`
--

CREATE TABLE `catalog_detail` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog_detail`
--

INSERT INTO `catalog_detail` (`id`, `parent_id`, `name`, `status`) VALUES
(1, 1, 'Fake1', 1),
(2, 2, 'Fake2', 1),
(3, 1, 'FA', 1),
(4, 1, 'Fake1_1', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(250) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `mess` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `status` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `user_name`, `email`, `product_id`, `mess`, `create_time`, `status`) VALUES
(1, 4, 'Hùng Văn Đỗ', 'admin@gmail.com', 8, 'hehehe', '2021-04-09 10:42:11', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mess` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Create_time` timestamp NULL DEFAULT current_timestamp(),
  `Update_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `email`, `name`, `mess`, `Create_time`, `Update_time`) VALUES
(1, 'admin@gmail.com', 'Hùng Văn Đỗ', 'test contect', '2021-04-09 10:37:29', NULL),
(2, 'admin@gmail.com', 'Hùng Văn Đỗ', 'híhsi', '2021-04-09 10:49:37', NULL),
(3, 'dohung28599@gmail.com', 'Hùng Văn Đỗ', 'aniyo', '2021-04-09 10:49:47', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_image`
--

CREATE TABLE `list_image` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `list_image`
--

INSERT INTO `list_image` (`id`, `id_sp`, `image`) VALUES
(2, 8, 'Screenshot (43).png'),
(3, 9, 'Screenshot (15).png'),
(4, 9, 'Screenshot (15).png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `catalog_detail_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `descriptions` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `price1` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `km` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `Create_time` timestamp NULL DEFAULT current_timestamp(),
  `Update_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `catalog_detail_id`, `brand_id`, `name`, `descriptions`, `price`, `price1`, `km`, `image`, `status`, `Create_time`, `Update_time`) VALUES
(8, 1, 1, 'product0111', '<p>hehehe</p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/userfiles/images/product/Screenshot%20(7).png\" style=\"height:169px; width:300px\" /></p>', '300000', '20000', 1, 'Screenshot (10).png', 1, '2021-04-09 09:27:07', '2021-04-09 09:30:19'),
(9, 1, 1, 'product02', '<p><img alt=\"\" src=\"/ckfinder/userfiles/images/product/Screenshot%20(7).png\" style=\"height:112px; width:200px\" />&nbsp;hehehe2</p>', '400000', '3000', 1, 'Screenshot (14).png', 1, '2021-04-09 10:13:25', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_detail`
--

INSERT INTO `product_detail` (`id`, `product_id`, `size_id`, `quantity`) VALUES
(5, 8, NULL, 29999),
(6, 9, NULL, 399998);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_size`
--

CREATE TABLE `product_size` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `Create_time` timestamp NULL DEFAULT current_timestamp(),
  `Update_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_size`
--

INSERT INTO `product_size` (`id`, `name`, `Create_time`, `Update_time`) VALUES
(1, 'S', '2021-04-09 09:35:21', '2021-04-09 09:35:21'),
(2, 'M', '2021-04-09 09:35:29', '2021-04-09 09:35:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `user_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(1) DEFAULT 1,
  `Create_time` timestamp NULL DEFAULT current_timestamp(),
  `Update_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `id_user`, `user_name`, `title`, `description`, `image`, `status`, `Create_time`, `Update_time`) VALUES
(2, 4, 'Hùng Văn Đỗ', 'test news', '<p>heheeh</p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/userfiles/images/Screenshot%20(6).png\" style=\"height:169px; width:300px\" /></p>', 'Screenshot (10).png', 1, NULL, '2021-04-09 10:34:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `isadmin` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `password`, `isadmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Hùng Văn Đỗ', 'admin@gmail.com', '0396645808', 'Xã Quyết Thắng- Thành Phố Thái Nguyên- tỉnh Thái Nguyên', '$2y$10$X162MhBNX2IIFhprmVrFuO0Wg5HKSv1zDU41vsIgfmbOdGYszDsZO', 0, 'w9LU81e96u5ysMDRnlShdKaV4xyoFYc5IkFRH6JbGnT077k1yWoKjzxVC2MG', NULL, NULL),
(5, 'Hùng Văn Đỗ', 'dohung2805@gmail.com', '0396645809', 'Thái Nguyên', '$2y$10$g/8GvcWlQ3jiuDw/jf9/rOZrGV/FgM1PRtJTpC9IVdMyfrrncOkca', 1, 'YCVcqa4saL38YZYR8s73mxpM1cPToSwqpBhr8gOU', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `User_id` (`user_id`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_bill` (`id_bill`),
  ADD KEY `Size_id` (`size_id`,`product_id`),
  ADD KEY `Product_id` (`product_id`);

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `catalog_detail`
--
ALTER TABLE `catalog_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `Parent_id` (`parent_id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User_id` (`user_id`,`product_id`),
  ADD KEY `Product_id` (`product_id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `list_image`
--
ALTER TABLE `list_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`id_sp`),
  ADD KEY `Id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`catalog_detail_id`,`brand_id`),
  ADD KEY `Brand_id` (`brand_id`),
  ADD KEY `Catalog_detail_id` (`catalog_detail_id`);

--
-- Chỉ mục cho bảng `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`product_id`,`size_id`),
  ADD KEY `Product_id` (`product_id`),
  ADD KEY `Size_id` (`size_id`);

--
-- Chỉ mục cho bảng `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id` (`id`,`id_user`),
  ADD KEY `Id_user` (`id_user`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `catalog_detail`
--
ALTER TABLE `catalog_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `list_image`
--
ALTER TABLE `list_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_detail_ibfk_3` FOREIGN KEY (`size_id`) REFERENCES `product_size` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `catalog_detail`
--
ALTER TABLE `catalog_detail`
  ADD CONSTRAINT `catalog_detail_ibfk_1` FOREIGN KEY (`Parent_id`) REFERENCES `catalog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`Product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `list_image`
--
ALTER TABLE `list_image`
  ADD CONSTRAINT `list_image_ibfk_1` FOREIGN KEY (`Id_sp`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Brand_id`) REFERENCES `brand` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`Catalog_detail_id`) REFERENCES `catalog_detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `product_detail_ibfk_1` FOREIGN KEY (`Product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_detail_ibfk_2` FOREIGN KEY (`Size_id`) REFERENCES `product_size` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`Id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
