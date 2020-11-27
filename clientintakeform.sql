-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 10:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clientform`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientintakeform`
--

CREATE TABLE `clientintakeform` (
  `FullName` varchar(30) NOT NULL,
  `CompanyName` varchar(30) NOT NULL,
  `website` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `postalCode` varchar(20) NOT NULL,
  `Id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientintakeform`
--

INSERT INTO `clientintakeform` (`FullName`, `CompanyName`, `website`, `address`, `state`, `country`, `city`, `postalCode`, `Id`) VALUES
('Simon Joe', 'Dressing', 'www.dresssave.com', '2, Reverside meeting', 'Ketu', 'Lagos', 'Epe', '123223', 1),
('gneruiu', 'uiwefher9', '98wefu9', '8quf8', 'qw089ud', 'w0qufd', '8wqudf', '8wqd8qwe0', 2),
('jsdbfi', 'qf', 'yuwefoy', 'ouqfy', 'ouwefyh', 'yuefou', 'oyqef', 'oufywe', 3),
('wfuywewe', 'company', 'website', 'address', 'state', 'country', 'city', 'postalcode', 4),
('fknwii', 'uienfi', 'uifnewei', 'iufni', 'iuefni', 'uifni', 'uinivninv', 'iiowe', 5),
('isreal', 'EZEKTEC', 'www.ezektec.com', '2,Welcome here', 'Adamawa', 'canada', 'study', '23566', 6),
('isreal', 'EZEKTEC', 'www.ezektec.com', '2,Welcome here', 'Adamawa', 'canada', 'study', '23566', 7),
('', '', '', '', '', '', '', '', 8),
('e', '', '', '', '', '', '', '', 9),
('e', '', '', '', '', '', '', '', 10),
('e', '', '', '', '', '', '', '', 11),
('ss', '', '', '', '', '', '', '', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientintakeform`
--
ALTER TABLE `clientintakeform`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientintakeform`
--
ALTER TABLE `clientintakeform`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
