-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 07, 2021 lúc 10:02 AM
-- Phiên bản máy phục vụ: 10.1.25-MariaDB
-- Phiên bản PHP: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `User_id` int(11) DEFAULT NULL,
  `User_name` varchar(50) DEFAULT NULL,
  `User_email` varchar(50) DEFAULT NULL,
  `Bill_total` varchar(11) DEFAULT NULL,
  `Create_Time` datetime DEFAULT CURRENT_TIMESTAMP,
  `User_Phone` char(10) DEFAULT NULL,
  `Address` varchar(250) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(11) NOT NULL,
  `id_bill` int(11) DEFAULT NULL,
  `Size_id` int(11) DEFAULT NULL,
  `Product_id` int(11) DEFAULT NULL,
  `Product_name` varchar(250) DEFAULT NULL,
  `Price` varchar(11) DEFAULT NULL,
  `Quanity` int(11) DEFAULT NULL,
  `Create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Update_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `Create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Update_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog_detail`
--

CREATE TABLE `catalog_detail` (
  `id` int(11) NOT NULL,
  `Parent_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `User_id` int(11) DEFAULT NULL,
  `User_name` varchar(250) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Product_id` int(11) DEFAULT NULL,
  `mess` varchar(250) DEFAULT NULL,
  `Create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mess` text,
  `Create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Update_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_image`
--

CREATE TABLE `list_image` (
  `id` int(11) NOT NULL,
  `Id_sp` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `Catalog_detail_id` int(11) DEFAULT NULL,
  `Brand_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `Descriptions` text,
  `price` varchar(11) DEFAULT NULL,
  `price1` varchar(11) DEFAULT NULL,
  `km` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `Create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Update_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(11) NOT NULL,
  `Product_id` int(11) DEFAULT NULL,
  `Size_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_size`
--

CREATE TABLE `product_size` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `Create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Update_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `Id` int(11) NOT NULL,
  `Id_user` int(11) DEFAULT NULL,
  `User_name` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `Descriptions` text,
  `image` varchar(100) DEFAULT NULL,
  `statut` int(1) DEFAULT NULL,
  `Create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Update_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `isadmin` bit(1) DEFAULT NULL,
  `Remember_token` varchar(50) DEFAULT NULL,
  `Create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Update_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `User_id` (`User_id`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_bill` (`id_bill`),
  ADD KEY `Size_id` (`Size_id`,`Product_id`),
  ADD KEY `Product_id` (`Product_id`);

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
  ADD KEY `Parent_id` (`Parent_id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User_id` (`User_id`,`Product_id`),
  ADD KEY `Product_id` (`Product_id`);

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
  ADD KEY `id` (`id`,`Id_sp`),
  ADD KEY `Id_sp` (`Id_sp`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`Catalog_detail_id`,`Brand_id`),
  ADD KEY `Brand_id` (`Brand_id`),
  ADD KEY `Catalog_detail_id` (`Catalog_detail_id`);

--
-- Chỉ mục cho bảng `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`Product_id`,`Size_id`),
  ADD KEY `Product_id` (`Product_id`),
  ADD KEY `Size_id` (`Size_id`);

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
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`,`Id_user`),
  ADD KEY `Id_user` (`Id_user`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `catalog_detail`
--
ALTER TABLE `catalog_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `list_image`
--
ALTER TABLE `list_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_detail_ibfk_2` FOREIGN KEY (`Product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_detail_ibfk_3` FOREIGN KEY (`Size_id`) REFERENCES `product_size` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`Id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
