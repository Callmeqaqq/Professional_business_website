-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2021 at 01:01 AM
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
-- Database: `metah`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `Logo` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Facebook` varchar(255) NOT NULL,
  `Instagram` varchar(255) NOT NULL,
  `Zalo` varchar(255) NOT NULL,
  `AboutID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `BlogID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Blog_des` varchar(255) NOT NULL,
  `Content` varchar(255) NOT NULL,
  `CreateAt` date NOT NULL,
  `View` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `Blog_CategoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `Blog_CategoryID` int(11) NOT NULL,
  `BlogName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartId` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryId` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `CategoryImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `CommentId` int(11) NOT NULL,
  `Content` varchar(255) NOT NULL,
  `CreateAt` date NOT NULL,
  `ProductId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `historyorder`
--

CREATE TABLE `historyorder` (
  `HistoryOrderId` int(11) NOT NULL,
  `CreateAt` date NOT NULL,
  `StatusId` int(11) NOT NULL,
  `OrderId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `Quantity` int(11) NOT NULL,
  `Toltal` float NOT NULL,
  `OrderDetailId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `OrderId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderId` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `CreateAt` date NOT NULL,
  `Toltal` float NOT NULL,
  `Note` varchar(255) NOT NULL,
  `ShipFee` float NOT NULL,
  `ToPay` float NOT NULL,
  `ShipDate` date NOT NULL,
  `PaymentId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `StatusId` int(11) NOT NULL,
  `ShipOptionId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentId` int(11) NOT NULL,
  `PaymentName` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `permision`
--

CREATE TABLE `permision` (
  `PermisionID` int(11) NOT NULL,
  `PermisionName` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductId` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `Discount` float NOT NULL,
  `Slug` varchar(255) NOT NULL,
  `Active` int(11) NOT NULL,
  `Descreption` varchar(255) NOT NULL,
  `CreateAt` date NOT NULL,
  `Views` int(11) NOT NULL,
  `SupplierId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `CategoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shipoption`
--

CREATE TABLE `shipoption` (
  `ShipOptionId` int(11) NOT NULL,
  `ShippingName` varchar(255) NOT NULL,
  `PricePerKg` float NOT NULL,
  `PricePerKm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `SliderId` int(11) NOT NULL,
  `Images` varchar(255) NOT NULL,
  `URL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `StatusId` int(11) NOT NULL,
  `StatusName` int(11) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `SupplierId` int(11) NOT NULL,
  `SupplierName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `TokenID` int(11) NOT NULL,
  `TokenContent` varchar(255) NOT NULL,
  `Activate` int(11) NOT NULL,
  `Date` date NOT NULL,
  `TokenName` varchar(255) NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` int(11) NOT NULL,
  `Active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_permision_relationship`
--

CREATE TABLE `user_permision_relationship` (
  `User_PermisionID` int(11) NOT NULL,
  `Licenced` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `PermisionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `variant`
--

CREATE TABLE `variant` (
  `VariantId` int(11) NOT NULL,
  `VariantName` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Weight` float NOT NULL,
  `Active` int(11) NOT NULL,
  `Color` varchar(255) NOT NULL,
  `ProductId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `_`
--

CREATE TABLE `_` (
  `PermisionDetailID` int(11) NOT NULL,
  `ActionCode` int(11) NOT NULL,
  `CheckAction` int(11) NOT NULL,
  `PermisionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`AboutID`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`BlogID`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `Blog_CategoryID` (`Blog_CategoryID`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`Blog_CategoryID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `ProductId` (`ProductId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD KEY `ProductId` (`ProductId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `historyorder`
--
ALTER TABLE `historyorder`
  ADD PRIMARY KEY (`HistoryOrderId`),
  ADD KEY `StatusId` (`StatusId`),
  ADD KEY `OrderId` (`OrderId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`OrderDetailId`),
  ADD KEY `ProductId` (`ProductId`),
  ADD KEY `OrderId` (`OrderId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderId`),
  ADD KEY `PaymentId` (`PaymentId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `StatusId` (`StatusId`),
  ADD KEY `ShipOptionId` (`ShipOptionId`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentId`);

--
-- Indexes for table `permision`
--
ALTER TABLE `permision`
  ADD PRIMARY KEY (`PermisionID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductId`),
  ADD KEY `SupplierId` (`SupplierId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `CategoryId` (`CategoryId`);

--
-- Indexes for table `shipoption`
--
ALTER TABLE `shipoption`
  ADD PRIMARY KEY (`ShipOptionId`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`SliderId`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`StatusId`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`SupplierId`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`TokenID`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `user_permision_relationship`
--
ALTER TABLE `user_permision_relationship`
  ADD PRIMARY KEY (`User_PermisionID`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `PermisionID` (`PermisionID`);

--
-- Indexes for table `variant`
--
ALTER TABLE `variant`
  ADD PRIMARY KEY (`VariantId`),
  ADD KEY `ProductId` (`ProductId`);

--
-- Indexes for table `_`
--
ALTER TABLE `_`
  ADD PRIMARY KEY (`PermisionDetailID`),
  ADD KEY `PermisionID` (`PermisionID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`),
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`Blog_CategoryID`) REFERENCES `blog_category` (`Blog_CategoryID`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`ProductId`) REFERENCES `variant` (`VariantId`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `product` (`ProductId`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`);

--
-- Constraints for table `historyorder`
--
ALTER TABLE `historyorder`
  ADD CONSTRAINT `historyorder_ibfk_1` FOREIGN KEY (`StatusId`) REFERENCES `status` (`StatusId`),
  ADD CONSTRAINT `historyorder_ibfk_2` FOREIGN KEY (`OrderId`) REFERENCES `orders` (`OrderId`),
  ADD CONSTRAINT `historyorder_ibfk_3` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`);

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `variant` (`VariantId`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`OrderId`) REFERENCES `orders` (`OrderId`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`PaymentId`) REFERENCES `payment` (`PaymentId`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`StatusId`) REFERENCES `status` (`StatusId`),
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`ShipOptionId`) REFERENCES `shipoption` (`ShipOptionId`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`SupplierId`) REFERENCES `supplier` (`SupplierId`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`CategoryId`) REFERENCES `category` (`CategoryId`);

--
-- Constraints for table `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `token_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`);

--
-- Constraints for table `user_permision_relationship`
--
ALTER TABLE `user_permision_relationship`
  ADD CONSTRAINT `user_permision_relationship_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`),
  ADD CONSTRAINT `user_permision_relationship_ibfk_2` FOREIGN KEY (`PermisionID`) REFERENCES `permision` (`PermisionID`);

--
-- Constraints for table `variant`
--
ALTER TABLE `variant`
  ADD CONSTRAINT `variant_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `product` (`ProductId`);

--
-- Constraints for table `_`
--
ALTER TABLE `_`
  ADD CONSTRAINT `__ibfk_1` FOREIGN KEY (`PermisionID`) REFERENCES `permision` (`PermisionID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
