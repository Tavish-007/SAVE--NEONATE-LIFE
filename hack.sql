-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 09:50 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hack`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('anji', 'tavish', 'anjeswarlumiriyala123@gmail.co', '7093617374', 'Weekars colony', 'anji'),
('tavish007', 'tavish tavish', 'tavish.v007@gmail.com', '7093617374', 'Tpg', 'tavish007');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `status`) VALUES
('tavish.v007@gmail.com', '$2y$10$gbssOLro1jq3THj.prV0t.jyBqS84M68P0tZxJ6IGyQRDY/LB6DYC', 1),
('anjeswarlumiriyala123@gmail.com', '$2y$10$gfs18O1GsiR9jGrh3aESKuYK3nRkZniIxc3y5wLzDFVK1.XZRCBB2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('aminnikhil073', 'Nikhil Amin', 'aminnikhil073@gmail.com', '9632587412', 'Karnataka', 'nikhil'),
('Krishna', 'krishna', 'ktpdharani@gmail.com', '9441538459', 'nsp', 'dhana'),
('nidha', 'tavish', 'tavish.v007@gmail.com', '7093617374', 'Weekars colony', '1234'),
('satessh', 'tavish', 'peddintisateesh135@gmail.com', '8465837227', 'gngsvsrsm', '1234'),
('tavish007', 'tavish', 'tavish.v007@gmail.com', '7093617374', 'Weekars colony', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `pdetails`
--

CREATE TABLE `pdetails` (
  `userid` varchar(10) NOT NULL,
  `firstname` text NOT NULL,
  `hospital_name` varchar(25) NOT NULL,
  `h_location` varchar(25) NOT NULL,
  `Doctor_name` text NOT NULL,
  `hos_con` int(12) NOT NULL,
  `Files` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdetails`
--

INSERT INTO `pdetails` (`userid`, `firstname`, `hospital_name`, `h_location`, `Doctor_name`, `hos_con`, `Files`) VALUES
('anji', ' Tavish', 'health', 'tpg', 'dsdsd', 2147483647, 0x736967312e6a706567),
('anji', ' nidhi', 'care', 'tpg', 'tavish', 2147483647, 0x736967312e6a706567);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
