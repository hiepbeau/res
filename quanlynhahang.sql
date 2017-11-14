-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2017 at 07:10 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlynhahang`
--

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `bill_id` varchar(100) NOT NULL,
  `res_id` varchar(10) NOT NULL,
  `cus_id` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `tables` int(100) NOT NULL,
  `note` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`bill_id`, `res_id`, `cus_id`, `date`, `tables`, `note`) VALUES
('B01', 'N01', 'C06', '2017-11-14', 1, ''),
('B02', 'F01', 'C08', '2017-11-15', 2, ''),
('B03', 'BL01', 'C01', '2017-11-30', 5, ''),
('B04', 'NH01', 'C02', '2017-11-27', 1, ''),
('B05', 'BL02', 'C10', '2017-11-20', 6, ''),
('B06', 'H02', 'C08', '2017-11-13', 2, ''),
('B07', 'N01', 'C03', '2017-11-09', 1, ''),
('B08', 'N02', 'C06', '2017-11-18', 1, ''),
('B09', 'N03', 'C07', '2017-11-25', 2, ''),
('B10', 'BL01', 'C03', '2017-12-13', 2, ''),
('B11', 'H01', 'C07', '2018-01-16', 1, ''),
('B12', 'F01', 'C05', '2017-11-07', 2, ''),
('B13', 'BL02', 'C07', '2017-11-03', 1, ''),
('B14', 'N02', 'C07', '2018-01-16', 6, ''),
('B15', 'H01', 'C07', '2018-02-07', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `cus_id` varchar(100) NOT NULL,
  `cus_name` varchar(1000) NOT NULL,
  `cus_phone` varchar(1000) NOT NULL,
  `cus_email` varchar(1000) NOT NULL,
  `cus_type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`cus_id`, `cus_name`, `cus_phone`, `cus_email`, `cus_type`) VALUES
('C01', 'Vu Tien Duong', '0123456555', 'tuannv@gmail.com', 2),
('C02', 'Dang Anh Tung', '0126955478', 'datung@yahoo.com.vn', 1),
('C03', 'Nguyen Trung Hung', '0123555999', 'nguyentrunghung@gmail.com', 1),
('C04', 'Pham Thi Minh ', '01234588774', 'mhpham@outlook.com', 2),
('C05', 'Hoang Quoc Thinh', '0666888444', 'thinhhq@gmail.com', 2),
('C06', 'Nguyen Minh Hanh', '0336664488', 'nmhanh@gmail.com', 1),
('C07', 'Lee Min Hu', '02233669988', 'leemh@gmail.com', 2),
('C08', 'Jason Satham', '0666999654', 'transporter1999@gmail.com', 1),
('C09', 'Paolo Dicapio', '02986486335', 'paolodidi@gmail.com', 1),
('C10', 'Cristiano Messy', '033669988', 'cr10@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `loaikhachhang`
--

CREATE TABLE `loaikhachhang` (
  `type_cus_id` int(10) NOT NULL,
  `type_cus_name` varchar(100) NOT NULL,
  `type_cus_note` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaikhachhang`
--

INSERT INTO `loaikhachhang` (`type_cus_id`, `type_cus_name`, `type_cus_note`) VALUES
(1, 'Khach moi', ''),
(2, 'Khach hang than thiet', '');

-- --------------------------------------------------------

--
-- Table structure for table `loainhahang`
--

CREATE TABLE `loainhahang` (
  `type_res_id` int(10) NOT NULL,
  `type_res_name` varchar(100) NOT NULL,
  `type_res_note` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loainhahang`
--

INSERT INTO `loainhahang` (`type_res_id`, `type_res_name`, `type_res_note`) VALUES
(1, 'Do Nuong', ''),
(2, 'Buffet & Lau', ''),
(3, 'Quan an Nhat', ''),
(4, 'Quan an Han', ''),
(5, 'Do an nhanh', '');

-- --------------------------------------------------------

--
-- Table structure for table `nhahang`
--

CREATE TABLE `nhahang` (
  `res_id` varchar(10) NOT NULL,
  `res_name` varchar(100) NOT NULL,
  `res_type` int(10) NOT NULL,
  `res_address` varchar(200) NOT NULL,
  `res_email` varchar(200) NOT NULL,
  `res_phone` varchar(20) NOT NULL,
  `res_table` int(200) NOT NULL,
  `res_note` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhahang`
--

INSERT INTO `nhahang` (`res_id`, `res_name`, `res_type`, `res_address`, `res_email`, `res_phone`, `res_table`, `res_note`) VALUES
('BL01', 'Buffet Sen xanh', 2, '66 Le Van Luong, Thanh Xuan, Ha Noi', 'www.bluelotu.vn', '0124469631', 67, ''),
('BL02', 'Sen Tay Ho', 2, '614 Lac Long Quan, Tay Ho, Ha Noi', 'www.sentayhobuffet.com.vn', '0964532678', 120, ''),
('F01', 'KFC BigC', 5, 'BigC Thang Long, Tran Duy Hung, Cau Giay, Ha Noi', 'www.kfc.vn', '0366947589', 25, ''),
('H01', 'Sariwon', 4, 'Lo 2 Nguyen Khanh Toan, Cau Giay, Ha Noi', 'www.sariwon.vn', '0566133315', 35, ''),
('H02', 'Gimbab House', 4, '30A Tho Nhuom, Hoan Kiem, Ha Noi', 'www.gimbabhouse.vn', '01235666999', 40, ''),
('N01', 'King BBQ', 1, '109 Dao Tan, Ba Dinh, Ha Noi', 'www.kingbbq.com.vn', '0123456789', 100, ''),
('N02', 'Gogi House', 1, '100 Nguy Nhu Kon Tum, Thanh Xuan, Ha Noi', 'www.gogihouse.com.vn', '0111222333', 60, ''),
('N03', 'Sumo BBQ', 1, '134 Hoang Quoc Viet, Cau Giay, Ha Noi', 'www.sumobbq.com.vn', '0964548996', 50, ''),
('NH01', 'Benkay', 3, '84 Tran Nhan Tong, Hai Ba Trung, Ha Noi', 'www.benkay.com.vn', '02356987845', 82, ''),
('NH02', 'Mirai', 3, '2D Quang Trung, Hoan Kiem, Ha Noi', 'www.mirai.vn', '0987456356', 43, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `res_id` (`res_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`cus_id`),
  ADD KEY `cus_type` (`cus_type`);

--
-- Indexes for table `loaikhachhang`
--
ALTER TABLE `loaikhachhang`
  ADD PRIMARY KEY (`type_cus_id`);

--
-- Indexes for table `loainhahang`
--
ALTER TABLE `loainhahang`
  ADD PRIMARY KEY (`type_res_id`);

--
-- Indexes for table `nhahang`
--
ALTER TABLE `nhahang`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `res_type` (`res_type`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`res_id`) REFERENCES `nhahang` (`res_id`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`cus_id`) REFERENCES `khachhang` (`cus_id`);

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`cus_type`) REFERENCES `loaikhachhang` (`type_cus_id`);

--
-- Constraints for table `nhahang`
--
ALTER TABLE `nhahang`
  ADD CONSTRAINT `nhahang_ibfk_1` FOREIGN KEY (`res_type`) REFERENCES `loainhahang` (`type_res_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
