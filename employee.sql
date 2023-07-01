-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 07:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `EMPID` int(5) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `AGE` int(4) NOT NULL,
  `DOB` date NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `BLOOD_GRP` varchar(4) NOT NULL,
  `PHONE` varchar(12) NOT NULL,
  `DESIGNATION` varchar(50) NOT NULL,
  `SALARY` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`EMPID`, `NAME`, `AGE`, `DOB`, `GENDER`, `BLOOD_GRP`, `PHONE`, `DESIGNATION`, `SALARY`) VALUES
(1, 'UZUMAKI NARUTO', 18, '2005-02-22', 'MALE', 'O+', '9055935158', 'HOKAGE', 8000000),
(2, 'KUROSAKI ICHIGO', 22, '2001-03-12', 'MALE', 'B+', '9251916565', 'SUBSTITUTE SHINIGAMI', 7000000),
(3, 'MONKEY D LUFFY', 18, '2005-12-25', 'MALE', 'A+', '9254656562', 'CAPTAIN', 8000000),
(4, 'HYUGA HINATA', 18, '2005-10-22', 'FEMALE', 'B-', '8514555614', 'WIFUU', 400000),
(5, 'NAMIKAZE MINATO', 25, '1998-04-25', 'MALE', 'O+', '9512467876', 'HOKAGE', 50000000),
(6, 'RORONOA ZORO', 23, '2000-06-01', 'MALE', 'A+', '8955659298', 'SWORDSMAN', 500000),
(7, 'VINSMOKE SANJI', 21, '2002-05-29', 'MALE', 'O-', '9854715862', 'COOK', 500000),
(8, 'JIRAYA', 50, '1973-03-08', 'MALE', 'B-', '6585421545', 'LEGENDARY SANIN', 800000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`EMPID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
