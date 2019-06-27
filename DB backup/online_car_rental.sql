-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2017 at 08:05 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_Id` int(11) NOT NULL,
  `A_Name` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Contact_No` varchar(12) NOT NULL,
  `E_mail` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_Id`, `A_Name`, `Password`, `Contact_No`, `E_mail`) VALUES
(1, 'Kunal', '12345678', '9309982818', 'kolikunalcsk@gmail.com'),
(3, 'Shyam', '12345678', '0772245666', 'pandavshyam@mitaoe.ac.in')
(3, 'Pratik', '12345678', '0772245666', 'pdpatil@mitaoe.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `C_Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Date` datetime NOT NULL,
  `S_Address` varchar(50) NOT NULL,
  `D_Address` varchar(50) NOT NULL,
  `Email_Id` varchar(50) NOT NULL,
  `No_Of_Pieces` int(11) NOT NULL,
  `Contact_No` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `C_Id` int(11) NOT NULL,
  `Model_Name` varchar(200) NOT NULL,
  `Brand` varchar(20) NOT NULL,
  `Color` varchar(10) NOT NULL,
  `No_Of_Pas` int(11) NOT NULL,
  `price` double NOT NULL,
  `FuelType` varchar(10) NOT NULL,
  `image` varchar(200) NOT NULL,
  `booked` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`C_Id`, `Model_Name`, `Brand`, `Color`, `No_Of_Pas`, `price`, `FuelType`, `image`, `booked`) VALUES
(0, 'Toyota TRJ 150 Prado (T)', 'Toyota', 'Meroon 	', 10, 12000, 'Diesel', 'images/truck.jpeg', 1),
(7, 'Suzuki Alto - 2005 Auto', 'VOLVO', 'green', 4, 2750, 'Petrol', 'images/harvester.jpg', 1),
(9, 'Suzuki Alto - Auto', 'VOLVO', 'yellow', 4, 2500, 'Petrol', 'images/jcb.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `C_Id` varchar(5) DEFAULT NULL,
  `Model_Name` varchar(20) DEFAULT NULL,
  `Price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `E_Id` int(11) NOT NULL,
  `User_Name` varchar(20) NOT NULL,
  `Email_Id` varchar(50) NOT NULL,
  `Contact_No` varchar(12) NOT NULL,
  `Date_From` datetime NOT NULL,
  `To_Date` datetime NOT NULL,
  `Query` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `F_ID` int(11) NOT NULL,
  `F_Name` varchar(20) NOT NULL,
  `Email_Id` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Postal_code` varchar(6) NOT NULL,
  `Phone_No` varchar(12) NOT NULL,
  `Service` varchar(20) NOT NULL,
  `Opinion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Net Amount` double NOT NULL,
  `Card No` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Phone No` int(11) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Pay Type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Date`, `Time`, `Net Amount`, `Card No`, `Name`, `Address`, `Country`, `Phone No`, `Email`, `Pay Type`) VALUES
('2016-09-21', '12:00:17', 14500, 44, 'kk', 'kk', 'kk', 44, 'kk@g.ck', 'Visa'),
('2016-09-21', '12:03:51', 14500, 55, '55', 'hhh', 'hhh', 66, 'kk@g.ck', 'Master Card'),
('2016-09-21', '12:35:45', 14500, 5555, 'kk', 'kk', 'kk', 555, 'kk@g.c', '--Select--'),
('2016-09-21', '12:32:18', 14500, 8520, 'kk', 'kk', 'k', 8555, 'kk@g.c', 'Master Card'),
('2016-09-21', '12:27:13', 14500, 8568, 'kk', 'kk', 'kk', 526, 'kk@g.c', 'Master Card'),
('2016-09-21', '12:15:31', 14500, 8888, 'kk', 'kk', 'k', 55, 'kk@g.ck', 'Master Card'),
('2016-09-21', '12:37:13', 14500, 75285, 'kk', 'kk', 'kk', 555, 'kk@g.c', 'Master Card'),
('2016-09-21', '12:39:04', 14500, 87521, 'kk', 'kk', 'kk', 4555, 'kk@g.c', 'Master Card'),
('2016-09-21', '12:31:21', 14500, 785212, 'kk', 'kk', 'kk', 55222, 'kk@g.c', 'Master Card'),
('2016-09-21', '12:34:29', 14500, 8687757, 'kk', 'kk', 'kk', 56655, 'kk@g.c', 'Paypal'),
('2016-09-21', '01:11:42', 14500, 12345678, 'san', 'hjk', 'sl', 890, 'hashanthi95rathnaw@gmail.com', 'Visa'),
('2016-09-21', '12:29:37', 14500, 85269874, 'kk', 'kk', 'kk', 655, 'kk@g.c', 'Visa'),
('2016-09-21', '11:06:37', 14500, 2147483647, 'kk', 'kk', 'kk', 555, 'kk@g.c', 'Master Card');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `U_Id` int(11) NOT NULL,
  `Full_Name` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `BirthDate` date NOT NULL,
  `Contact_No` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`U_Id`, `Full_Name`, `Password`, `Address`, `BirthDate`, `Contact_No`, `Email`, `Gender`) VALUES
(9, 'Akash', '16988', 'Kegalle', '1994-05-22', '0772472635', 'akash.jayaweera@gmail.com', NULL),
(17, 'Pavithra', '1234', 'Galle', '1995-03-11', '0775676002', 'Pavi@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_Id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`C_Id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`E_Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD UNIQUE KEY `aa` (`Card No`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`U_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `C_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `U_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
