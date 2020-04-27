-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2020 at 04:30 AM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BjCXAnz6lX`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `totalMoney` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dateModified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `amount`, `totalMoney`, `user_id`, `dateModified`) VALUES
(29, 3, 2, 550000000, 47, '2020-04-20'),
(30, 6, 7300, 330000000, 47, '2020-04-20'),
(31, 7, 730, 53000000, 47, '2020-04-20'),
(39, 1, 5, 29990000, 48, '2020-04-20'),
(40, 3, 73, 5500000, 48, '2020-04-20'),
(46, 1, 5, 29990000, 44, '2020-04-20'),
(47, 6, 7, 13200000, 56, '2020-04-20'),
(48, 1, 5, 299900000, 45, '2020-04-20'),
(49, 7, 5, 26500000, 44, '2020-04-20'),
(50, 2, 2, 179950000, 44, '2020-04-20'),
(56, 6, 3, 6600000, 1, '2020-04-21'),
(57, 2, 2, 35990000, 1, '2020-04-23'),
(63, 1, 5, 39980000, 67, '2020-04-26'),
(64, 2, 2, 107970000, 67, '2020-04-26'),
(65, 6, 2, 6600000, 67, '2020-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(10) UNSIGNED NOT NULL,
  `orderID` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `totalMoney` int(10) UNSIGNED NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `orderID`, `product_id`, `amount`, `totalMoney`, `status`) VALUES
(1, 1, 7, 4, 15900000, '2020-04-20 10:10:19'),
(2, 1, 7, 4, 15900000, '2020-04-20 10:14:02'),
(3, 1, 2, 2, 71980000, '2020-04-20 10:14:02'),
(4, 17, 2, 2, 71980000, '2020-04-20 10:57:52'),
(5, 18, 1, 1, 29990000, '2020-04-20 14:21:02'),
(6, 19, 3, 1, 11000000, '2020-04-20 15:21:33'),
(7, 20, 1, 1, 29990000, '2020-04-20 15:28:23'),
(8, 21, 1, 23, 59980000, '2020-04-20 15:29:35'),
(9, 21, 2, 23, 71980000, '2020-04-20 15:29:35'),
(10, 21, 3, 2, 11000000, '2020-04-20 15:29:35'),
(11, 1, 1, 23, 29990000, '2020-04-20 15:35:40'),
(12, 1, 2, 1, 35990000, '2020-04-20 15:35:40'),
(13, 23, 2, 1, 35990000, '2020-04-21 01:48:29'),
(14, 24, 1, 2, 59980000, '2020-04-21 01:55:58'),
(15, 25, 2, 4, 71980000, '2020-04-26 11:14:55'),
(16, 25, 1, 48, 39980000, '2020-04-26 11:14:55'),
(17, 25, 3, 2, 11000000, '2020-04-26 11:14:56'),
(18, 25, 5, 3, 74700000, '2020-04-26 11:14:56'),
(19, 25, 4, 1, 23990000, '2020-04-26 11:14:56'),
(20, 26, 1, 1, 19990000, '2020-04-27 04:04:50');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `dateModified` date NOT NULL,
  `phoneNumber` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `dateModified`, `phoneNumber`, `address`) VALUES
(1, 12, '2020-04-20', 1234567, 'trung văn'),
(2, 12, '2020-04-20', 975109203, 'Trung Văn- Nam Từ Liêm'),
(3, 12, '2020-04-20', 975109203, 'Trung Văn- Nam Từ Liêm'),
(4, 12, '2020-04-20', 975109203, 'Trung Văn- Nam Từ Liêm'),
(5, 12, '2020-04-20', 975109203, 'Trung Văn- Nam Từ Liêm'),
(6, 12, '2020-04-20', 975109203, 'Trung Văn- Nam Từ Liêm'),
(7, 12, '2020-04-20', 975109203, 'Trung Văn- Nam Từ Liêm'),
(8, 12, '2020-04-20', 975109203, 'Trung Văn- Nam Từ Liêm'),
(9, 12, '2020-04-20', 975109203, 'Trung Văn- Nam Từ Liêm'),
(10, 12, '2020-04-20', 975109203, 'Trung Văn- Nam Từ Liêm'),
(11, 12, '2020-04-20', 975109203, 'Trung Văn- Nam Từ Liêm'),
(12, 12, '2020-04-20', 975109203, 'Trung Văn- Nam Từ Liêm'),
(13, 12, '2020-04-20', 975109203, 'Trung Văn- Nam Từ Liêm'),
(14, 12, '2020-04-20', 975109203, 'Trung Văn- Nam Từ Liêm'),
(15, 12, '2020-04-20', 975109203, 'Trung Văn- Nam Từ Liêm'),
(16, 12, '2020-04-20', 123456789, 'Trung Văn- Nam Từ Liêm'),
(17, 40, '2020-04-20', 986155, 'tuyiuiop'),
(18, 41, '2020-04-20', 956346258, 'ưert'),
(19, 56, '2020-04-20', 12344, 'something'),
(20, 48, '2020-04-20', 964875742, '1234'),
(21, 1, '2020-04-20', 12030203, 'adfadf'),
(22, 12, '2020-04-20', 975109203, 'Trung Văn- Nam Từ Liêm'),
(23, 57, '2020-04-21', 975109203, 'Trung Văn- Nam Từ Liêm'),
(24, 64, '2020-04-21', 975109203, 'Trung Văn- Nam Từ Liêm'),
(25, 67, '2020-04-26', 975109203, 'Trung Văn- Nam Từ Liêm'),
(26, 70, '2020-04-27', 365341179, '38 Dương Quảng Hàm');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `brief description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateModified` date NOT NULL,
  `category` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantityInStock` int(11) NOT NULL,
  `productCode` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `brief description`, `description`, `image`, `dateModified`, `category`, `quantityInStock`, `productCode`) VALUES
(1, 'Samsung Galaxy S20 Ultra', 19990000, 'thế hệ mới nhất', '-Màn hình:6.9inch Dynamic AMOLED,120Hz(1080p), HDR10+,Gorilla Glass 6\r\n-Chipset Exynos 990\r\n-Camera: bộ 4 camera zoom 100x-RAM:12 GB\r\n-Bộ nhớ:128 GB\r\n-Dung lượng pin:5000 mAh-Sim: 2 sim vật lý\r\n-Chống nước IP68', 'phone1.jpeg', '2020-04-23', 'Samsung', 21, 'A13'),
(2, 'Iphone 11 Promax 256GB', 35990000, 'Chính hãng VN/A, bảo hành 12 tháng 1 đổi 1', '-Màn hình: 5.8 inchs Amoled \r\n-Camera trước: 12 MP\r\n-Camera sau: Bộ 3 camera 12MP\r\n-RAM: 6GB\r\n-Bộ nhớ trong: 256 GB\r\n-CPU: Apple A13 Bionic \r\n-Dung lượng pin: 3190 mAh\r\n-Thẻ SIM: Nano-SIM, eSIM\r\n-Chống nước: IP68', 'phone2.jpg', '2020-04-23', 'Iphone', 15, ''),
(3, 'Oppo A31', 5500000, 'Chính hãng VN/A, bảo hành 12 tháng 1 đổi 1', '-Màn hình: IPS LCD, 6.5\", HD+\r\n-Camera sau: Chính 12 MP,\r\n Phụ 2 MP, 2 MP\r\n-Camera trước: 8 MP\r\n-CPU: MediaTek Helio P35 \r\n-RAM: 4 GB\r\n-Bộ nhớ trong: 128 GB\r\n-Thẻ SIM: 2 Nano SIM 4G\r\nDung lượng pin: 4230 mAh', 'phone3.jpg', '2020-04-23', 'Oppo', 25, 'O12'),
(4, ' Huawei P40 Pro', 23990000, 'Thỏa sức sáng tạo với 4 camera Leica chụp ảnh hàng đầu thế giới', 'Màn hình:	6.1 inch (P40), 6.58 inch (P40 Pro)\r\nChuẩn màn hình:	OLED; Full HD+ (P40), QuadHD+ (P40 Pro)\r\nCamera sau:	50MP + 16MP + 8MP (P40), 50MP + 40MP + 12MP + TOF 3D (P40 Pro)\r\nCamera trước:	32MP & Cảm biến đo chiều sâu\r\nCPU:	HUAWEI Kirin 990 8 nhân\r\nRAM:	8GB\r\nROM:	128GB (P40), 256GB UFS 3.0 (P40 Pro)\r\nKhe cắm SIM:	2 Sim (Nano SIM)\r\nDung lượng pin:	3800mAh (P40), 4200mAh (P40 Pro); Sạc siêu nhanh SuperCharge 22.5W (P40), 40W (P40 Pro)\r\nBảo mật:	Vân tay dưới màn hình, Mở khoá gương mặt AI\r\nHệ điều hành:	Android™ 10, EMUI 10.1', 'phone8.jpg', '2020-04-23', 'Huawei', 16, 'HW40'),
(5, 'Samsung Galaxy Note 10+', 24900000, 'Chiếc điện thoại cao cấp nhất, màn hình lớn nhất, mang trên mình sức mạnh đáng kinh ngạc của một chiếc máy tính và hệ thống 4 camera sau chuyên nghiệp', 'Màn hình :	6.8 inches, QHD+, 1440 x 3040 pixels\r\nCamera trước :	10MP\r\nCamera sau :	Chính 12 MP & Phụ 12 MP, 16 MP\r\nRAM :	12 GB\r\nBộ nhớ trong :	256 GB\r\nCPU :	Exynos 9825 (7 nm), 8, 2.7 Ghz + 2.4 GHz + 1.9 GHX\r\nGPU :	Mali-G76 MP12\r\nDung lượng pin :	4,300 mAh\r\nHệ điều hành :	Android 9.0 (Pie)\r\nThẻ SIM :	Nano SIM, 2 Sim\r\nXuất xứ :	Việt Nam\r\nNăm sản xuất :	2019', 'phone5.jpeg', '2020-04-23', 'Samsung', 10, 'SSG10'),
(6, 'Vsmart Joy 3', 3300000, 'Chính hãng VN/A, bảo hành 12 tháng 1 đổi 1', '-Màn hình: IPS LCD, 6.5\", HD+\r\n-Camera Trước: 8MP\r\n-Camera sau: 13 x 8 x 2 MP\r\n-CPU: Snapdragon 632 8 nhân\r\n-RAM/Bộ nhớ trong: Tùy chọn \r\n 2GB/32GB hoặc 4GB/64GB\r\n-SIM: 2 Nano SIM 4G\r\n-Tính năng: Sạc pin nhanh\r\n\r\n', 'phone6.jpg', '2020-04-23', 'Vsmart', 18, ''),
(7, 'Samsung Galaxy A30s', 5300000, 'Chính hãng VN/A, bảo hành 12 tháng 1 đổi 1', '-Màn hình: 6.5\" HD+, Mặt kính\r\n cong 2.5D, IPS LCD\r\n-Camera trước: 8.0 MP\r\n-Camera sau : Chính 13 MP \r\n Phụ 8 MP, 5 MP\r\n-CPU: Snapdragon 450 \r\n-Tùy chọn RAM / Bộ nhớ trong:\r\n 4GB/64GB và 3GB/32GB\r\n-Dung lượng pin : 4000 mAh\r\n-Thẻ SIM : 2 Sim, Nano SIM\r\n-Tính năng: Mở khóa bằng vân \r\ntay, mở khóa bằng khuôn mặt', 'phone9.jpg', '2020-04-23', 'Samsung', 24, ''),
(8, 'Oppo A9', 5990000, 'OPPO A9 2020 tập trung tối đa vào trải nghiệm người dùng với hiệu năng và thời lượng pin cực đỉnh. Chắc chắn bạn sẽ phải bất ngờ vì những gì OPPO A9 mang lại.\r\n\r\n', 'Màn hình :	6.5 inchs, HD +, 720 x 1600 Pixels\r\nCamera trước :	16.0 MP\r\nCamera sau :	48 MP, 8 MP + 2MP + 2MP ( 4 camera )\r\nRAM :	8 GB\r\nBộ nhớ trong :	128 GB\r\nCPU :	Qualcomm Snapdragon 665, 8, 8 nhân, tối đa 2.0GHz\r\nGPU :	Adreno 610\r\nDung lượng pin :	5000mAh\r\nHệ điều hành :	ColorOS 6.0.1, nền tảng Android 9.0\r\nThẻ SIM :	Nano SIM, 2 Sim\r\nXuất xứ :	Trung Quốc\r\nNăm sản xuất :	2019', 'phone4.jpg', '2020-04-23', 'Oppo', 12, 'OPA9'),
(57, 'Samsung Galaxy M21', 5490000, 'Đắm chìm trong màn hình tràn viền vô cực Infinity-U 6,4 inch rộng lớn, thỏa mãn niềm đam mê nhiếp ảnh với 3 camera sau ấn tượng', 'Màn hình :	6.4 inches, Full HD+, 2340 x 1080 Pixel Camera trước :	20.0 MP Camera sau :	Chính 48 MP & Phụ 8 MP, 5 MP RAM :	4 GB Bộ nhớ trong :	64 GB CPU :	Exynos 9611, 8, Lõi 8: 4x 2.3GHz, 4x 1.7GHz GPU :	Mali-G72 MP3 Dung lượng pin :	6000 mAh Hệ điều hành :	Android 10 Thẻ SIM :	Nano SIM, 2 Sim Xuất xứ :	Việt Nam Năm sản xuất :	2020', '637218699435664697_picturemessage_irup40ij.i4u.jpg', '2020-04-23', 'Samsung', 11, 'SSM21'),
(59, 'AAA', 1, 'AAA', 'AAA', '89785675_1068413253559071_5536138434235596800_o.jpg', '2020-04-26', 'AAA', 24, 'AAA'),
(60, 'AAA', 1, 'AAA', 'AAA', '89785675_1068413253559071_5536138434235596800_o.jpg', '2020-04-26', 'AAA', 24, 'AAA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateModified` date NOT NULL,
  `authorization` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `dateModified`, `authorization`) VALUES
(1, 'nga', 'ttntrinhnga@gmail.com', '123', '2020-04-06', ''),
(8, 'Thảo', 'ttntrinhthao@gmail.com', '12', '2020-04-06', ''),
(9, 'nga', 'ttntrinhoanh@gmail.com', '12345', '2020-04-08', ''),
(10, 'nga', 'ttntrinhN@gmail.com', '12', '2020-04-08', '1'),
(11, 'nga', 'ttntrinhO@gmail.com', '123', '2020-04-08', '1'),
(12, 'oanh', 'ttntrinhOanh0804@gmail.com', '123', '2020-04-08', '1'),
(13, 'nga', 'ttntrinhDAI@gmail.com', '123', '2020-04-08', '1'),
(14, 'nga', 'ttntrinhMN@gmail.com', '123', '2020-04-08', '1'),
(15, '', 'abc@gmail.com', '12345', '2020-04-13', '1'),
(16, '', 'cdf@gmail.com', '12345', '2020-04-13', '1'),
(17, '', 'hab@gmail.com', '123456', '2020-04-14', '1'),
(18, '', 'hbd@gmail.com', '12345', '2020-04-14', '1'),
(19, '', 'abcd@gmail.com', '12345', '2020-04-14', '1'),
(20, '', '123@gmail.com', '12345', '2020-04-14', '1'),
(21, '', 'ttntrinhnga@gmail.com12345', '1234', '2020-04-14', '1'),
(22, '', '123456@gmail.com', '12345', '2020-04-14', '1'),
(23, '', '09@gmail.com', '1234', '2020-04-14', '1'),
(24, '', '12@gmail.com', '123', '2020-04-14', '1'),
(25, '', '000@gmail.com', '0000', '2020-04-14', '1'),
(26, '', '099@gmail.com', '0000', '2020-04-14', '1'),
(27, '', 'ttnTTN@gmail.com', '111', '2020-04-14', '1'),
(28, '', 'ttnTTO@gmail.com', '111', '2020-04-14', '1'),
(29, '', 'TTN@gmail.com', '111', '2020-04-14', '1'),
(30, '', '1111@gmail.com', '1111', '2020-04-14', '1'),
(31, '', 'abcdef@gmail.com', '111', '2020-04-14', '1'),
(32, '', '', '', '2020-04-14', '1'),
(33, '', 'nga@gmail.com', '1234', '2020-04-14', '1'),
(34, '', 'Oanh0804@gmail.com', '12345', '2020-04-14', '1'),
(35, '', '123nga@gmail.com', '12345', '2020-04-14', '1'),
(36, '', 'ga1111@gmail.com', '11111111', '2020-04-14', '1'),
(37, '', 'ttntrinh1111@gmail.com', '11111111', '2020-04-14', '1'),
(38, 'nga', 'oanhtrinhthi@gmail.com', '11111111', '2020-04-17', '1'),
(39, 'nguyvotien', 'nguyvt@gmail.com', '123456', '2020-04-17', '1'),
(40, 'toilaideptrai', '190010khongco@gmail', '<6', '2020-04-20', '1'),
(41, 'Nga ngu người', 'aaaa@gmail.com', '111111', '2020-04-20', '1'),
(42, 'Vũ Thị Trang', 'vuthitrang2772000@gmail.com', '2772000a3', '2020-04-20', '1'),
(43, 'vanhung', 'hungganhh19@gmail.com', 'th06012000', '2020-04-20', '1'),
(44, 'Thảo Hoàng', 'hoangthithao11a3@gmail.com', 'thao11032000', '2020-04-20', '1'),
(45, 'Anhariana', 'sehunanh19112000@gmail.com', '19112000', '2020-04-20', '1'),
(46, 'Trần Nam', 'namtranpt00@gmail.com', '123456', '2020-04-20', '1'),
(47, 'hoangvu', 'hoangvu@gmail.com', '0987816718', '2020-04-20', '1'),
(48, 'besttv1123', 'tranmanhduc0964875742@gmail.com', 'thuyduyen_03', '2020-04-20', '1'),
(49, 'lecuong', 'lecuong@gmail.com', '1111111', '2020-04-20', '1'),
(50, 'ngoclyo', 'ngoclyo@gmail.com', '1111111', '2020-04-20', '1'),
(51, 'sophie', 'sophie@gmail.com', '1111111', '2020-04-20', '1'),
(52, 'lyo', 'lyo@gmail.com', '1111111', '2020-04-20', '1'),
(53, 'aaaa', '180@gmail.com', '11111111', '2020-04-20', '1'),
(54, '18020943', '18020943@gmail.com', '11111111', '2020-04-20', '1'),
(55, 'Nga Ngu Người Dở Hơi Tập Bơi', 'lan@gmail.com', '111111', '2020-04-20', '1'),
(56, 'occhos', 'someone@gmail.com', '12345678', '2020-04-20', '1'),
(57, 'nga', 'ngasophie@gmail.com', '1111111', '2020-04-21', '1'),
(58, 'nga', 'ttnsophie@gmail.com', '1111111', '2020-04-21', '1'),
(59, 'nga', '18020943vnu@gmail.com', '11111111', '2020-04-21', '1'),
(60, 'ngatrinhthi', 'ngatrinhthi@gmail.com', '11111111', '2020-04-21', '1'),
(61, 'ngatrinhthi', 'dddd@gmail.com', '11111111', '2020-04-21', '1'),
(62, 'nga', 'hhhh@gmail.com', '1111111', '2020-04-21', '1'),
(63, '18020943', '18020943nga@gmail.com', '1111111', '2020-04-21', '1'),
(64, '18020943', 'llllll@gmail.com', '1111111', '2020-04-21', '1'),
(65, 'Nga', 'abcddd@gmail.com', '1234567', '2020-04-21', '1'),
(66, 'nga', 'ngatrinh164@gmail.com', 'ngatrinh164', '2020-04-21', '1'),
(67, 'Nga', 'ttntrinhnga@gmail.com', 'ngatrinh', '2020-04-23', '0'),
(68, 'Hà', 'qqqq@ffff.com', '11111111', '2020-04-26', '1'),
(69, 'Nam crazy', 'namtranpt00@gmail.com', 'ttcadmin', '2020-04-26', '0'),
(70, 'fasfhjkaf', 'thaidhns23@gmail.com', 'thai2305', '2020-04-27', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `productID` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderID` FOREIGN KEY (`orderID`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productID` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `userID` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
