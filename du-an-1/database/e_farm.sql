-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 04, 2021 at 12:15 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CateID` int(10) NOT NULL,
  `NameCate` varchar(50) NOT NULL,
  `StatusCate` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CateID`, `NameCate`, `StatusCate`) VALUES
(48, 'Thịt', 1),
(50, 'Rau Củ', 1),
(51, 'Gạo', 1),
(58, '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `CommentID` int(15) NOT NULL,
  `DetailComment` text NOT NULL,
  `ProID` int(10) NOT NULL,
  `UserID` int(10) NOT NULL,
  `DateComment` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`CommentID`, `DetailComment`, `ProID`, `UserID`, `DateComment`) VALUES
(15, 'There is a mask requirement inside D.C. restaurants,\" Doocy said, \"yet President Biden and the first lady were not wearing masks while walking around a D.C. restaurant on Saturday. Why?\"\r\n\r\nPsaki responded by incorrectly claiming the controversy centered around a photo, not a video, and she said the Bidens were walking out of the restaurant, not through it.', 91, 18, '2021-10-18 21:54:27'),
(16, '', 1, 15, '2021-10-19 07:29:46'),
(17, '1', 1, 15, '2021-10-19 08:42:53'),
(21, 'Cửa hàng chất lượng nhất vũ trụ!', 1, 18, '2021-10-23 10:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProID` int(10) NOT NULL,
  `NamePro` varchar(50) NOT NULL,
  `CateID` int(10) NOT NULL,
  `ImagePro` varchar(50) NOT NULL,
  `PricePro` double(10,2) NOT NULL COMMENT '$',
  `DiscPro` double(10,2) DEFAULT '0.00' COMMENT '1-100%',
  `SalePrice` double(10,2) DEFAULT NULL COMMENT 'giá bán',
  `DatePro` timestamp NULL DEFAULT NULL COMMENT 'Ngày nhập hàng',
  `DetailPro` text NOT NULL,
  `StatusPro` int(1) NOT NULL,
  `ViewPro` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProID`, `NamePro`, `CateID`, `ImagePro`, `PricePro`, `DiscPro`, `SalePrice`, `DatePro`, `DetailPro`, `StatusPro`, `ViewPro`) VALUES
(1, 'Sườn bò', 48, 'h_product05.jpg', 100.00, 55.00, NULL, '2021-10-18 20:59:16', 'Thịt bò tươi xử lý trực tiếp tại nông trại, cưỡng thế nào được.', 1, 136),
(90, 'Cam Mỹ', 50, 'h_product02.jpg', 40.00, 0.00, NULL, '2021-10-17 17:00:00', 'Cam Valencia là một loại cam có vị ngọt. Giống cam này do một người Mỹ tên là William Wolfskill lai giống vào giữa thế kỷ 19 tại trang trại Santa Ana, miền nam California, Hoa Kỳ.', 1, 87),
(91, 'Gạo tẻ', 51, 'h_product03.jpg', 130.00, 7.00, NULL, '2021-10-16 17:00:00', 'Gạo nếp hay gạo sáp là loại gạo hạt ngắn phổ biến ở châu Á, đặc biệt dính khi nấu.', 1, 11),
(146, 'check list related', 48, 'sd_bottom01.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 0),
(147, 'check list related', 48, 'sd_bottom01.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 2),
(148, 'check list related', 48, 'sd_bottom01.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 0),
(149, 'check list related', 48, 'sd_bottom01.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 0),
(150, 'check list related', 48, 'sd_bottom01.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 0),
(151, 'check list related', 48, 'sd_bottom01.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 0),
(152, 'check list related', 48, 'sd_bottom01.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 0),
(153, 'check list related', 48, 'sd_bottom01.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 0),
(154, 'check list related', 50, 'h_product08.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 0),
(155, 'check list related', 50, 'h_product08.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 0),
(156, 'check list related', 50, 'h_product08.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 0),
(157, 'check list related', 50, 'h_product08.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 0),
(158, 'check list related', 50, 'h_product08.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 0),
(159, 'check list related', 50, 'h_product08.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 0),
(160, 'check list related', 50, 'h_product08.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 0),
(161, 'check list related', 51, 'h_product04.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 0),
(162, 'check list related', 51, 'h_product04.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 0),
(163, 'check list related', 51, 'h_product04.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 0),
(164, 'check list related', 51, 'h_product04.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 0),
(165, 'check list related', 51, 'h_product04.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 0),
(166, 'check list related', 51, 'h_product04.jpg', 123.00, 11.00, NULL, '2021-10-17 17:00:00', 'Súp lơ là một loại rau ăn hoa thuộc họ cải. Có hai loại phổ biến là súp lơ trắng (bông cải trắng) và súp lơ xanh (bông cải xanh).\r\nNhiều nghiên cứu cho thấy súp lơ có chứa hàm lượng chất phytochemical cao cùng các vitamin thiết yếu, carotenoid, chất xơ, đường hòa tan, khoáng chất và các hợp chất phenolic, súp lơ và các loại rau họ cải là nguồn cung cấp chất chống oxy hóa tự nhiên tuyệt vời.', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(10) NOT NULL,
  `FullNameUser` varchar(50) NOT NULL,
  `EmailUser` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `StatusUser` int(1) NOT NULL DEFAULT '1' COMMENT '1=activated',
  `ImageUser` varchar(255) NOT NULL DEFAULT 'default_avt.jpg',
  `AboutUser` text,
  `PermissionUser` int(1) NOT NULL DEFAULT '1' COMMENT '1=customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FullNameUser`, `EmailUser`, `Password`, `StatusUser`, `ImageUser`, `AboutUser`, `PermissionUser`) VALUES
(15, 'Nguyễn Duy Quang', 'abc@domain.com', '123456', 1, 'default_avt.jpg', 'Duy Quang tên thật Phạm Duy Quang là một ca sĩ kiêm sáng tác nhạc người Việt Nam. Ông được coi là một trong những ca sĩ nổi bật của tân nhạc Việt Nam thuộc thế hệ thứ hai, với chất giọng ngọt ngào, tình cảm. Wikipedia', 1),
(18, 'quyen luc toi cao', 'admin@admin.com', 'admin', 1, 'default_avt.jpg', 'Nice1', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CateID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `fk_proID_cmt` (`ProID`),
  ADD KEY `fk_userID_cmt` (`UserID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProID`),
  ADD KEY `fk_category_CateID` (`CateID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CateID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `CommentID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_proID_cmt` FOREIGN KEY (`ProID`) REFERENCES `products` (`ProID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_userID_cmt` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_category_CateID` FOREIGN KEY (`CateID`) REFERENCES `category` (`CateID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
