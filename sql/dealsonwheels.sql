-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2018 at 10:34 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dealsonwheels`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `BRAND` varchar(30) NOT NULL,
  `MODEL` varchar(30) NOT NULL,
  `CLASS` varchar(30) NOT NULL,
  `AVAILABILITY` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`BRAND`, `MODEL`, `CLASS`, `AVAILABILITY`) VALUES
('TESLA', 'S', 'Convertible', 10),
('TESLA', 'X75', 'Coupe', 10),
('JEEP', 'Wrangler4x4', 'SUV', 10),
('INFINITY', 'Qx80', 'SUV', 10),
('BMW', 'M760', 'SEDAN', 10),
('BMW', 'i8', 'COUPE', 10),
('ASTON', 'DB11', 'COUPE', 10),
('ASTON', 'Lagonda', 'Sedan', 10);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(30) NOT NULL,
  `F_NAME` varchar(20) NOT NULL,
  `L_NAME` varchar(20) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `F_NAME`, `L_NAME`, `EMAIL`, `PASSWORD`) VALUES
(1, 'Amit', 'Sharma', 'amit@123.com', '12345678'),
(2, 'Amit', 'Sharma', 'amit2@123.com', '1234'),
(3, 'Amit', 'Sharma', 'amit111@234.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `NAME` varchar(30) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `BRAND` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`NAME`, `PHONE`, `EMAIL`, `BRAND`) VALUES
('Amit', '', '123', ''),
('Amit', '', '1234', ''),
('Amit', '123', '3', ''),
('Amit', '9231893', 'amir@123.com', 'bmw'),
('erigneri1', 'finif', 'infiwenf', 'astonmartin'),
('sdfin', 'sffiwnif', 'sfinswfi', 'astonmartin'),
('Disnf', 'sdfinw', 'SFINwfin', 'jeep');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `NAME` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `BRAND` varchar(30) NOT NULL,
  `MODEL` varchar(30) NOT NULL,
  `YEAR` varchar(10) NOT NULL,
  `MILEAGE` varchar(10) NOT NULL,
  `EXCON` varchar(30) NOT NULL,
  `INCON` varchar(30) NOT NULL,
  `AHISTORY` varchar(30) NOT NULL,
  `MODIFIED` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
