-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 05:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`, `email`, `phone`) VALUES
('surya', 'surya2148', 'surya2148@gmail.com', '6369890125'),
('mahesh', 'mahes33', 'mahesh2133@gmail.com', '8960754639'),
('sakthi', 'sakthi44', 'sakthi2144@gmail.com', '7658493832'),
('essam', 'essam19', 'essam2119@gmail.com', '8970678223'),
('dass', 'dass31', 'bala2131@gmail.com', '8976543267'),
('ashwin', 'ashwin35', 'ashwin@gmail.com', '9876468373');

-- --------------------------------------------------------

--
-- Table structure for table `adventure`
--

CREATE TABLE `adventure` (
  `placename` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `about` varchar(50) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adventure`
--

INSERT INTO `adventure` (`placename`, `location`, `duration`, `amount`, `image`, `about`, `country`) VALUES
('Himalayas', 'Himalayas', '5days', 5000, 'eve.jpg', '', 'India'),
('Ladakh', 'Ladakh,Jammu&Kashmir', '5 days', 5000, 'kodai.jpg', '', 'India'),
('Nepal', 'Nepal', '5 days', 5000, 'ooty.jpg', '', 'India'),
('Dubai Safari Park', 'Dubai', '5days', 10000, 'dubai desert safari.jpg', 'https://en.wikipedia.org/wiki/Dubai_Safari_Park', 'Non-India'),
('Krabi', 'Thailand', '5days', 10000, 'pexels-erik-karits-3732494.jpg', 'https://en.wikipedia.org/wiki/Krabi', 'Non-India'),
('Giza', 'Giza,Egypt', '5 days', 10000, 'giza egypt.jpg', 'https://en.wikipedia.org/wiki/Giza', 'Non-India'),
('Karjat', 'Karjat,Egypt', '5 days', 10000, 'karjat.jpg', 'https://en.wikipedia.org/wiki/Karjat', 'Non-India'),
('Zhangjiajie Forest', 'Zhangjiajie National', '5 days', 10000, 'Zhangjiajie-national-forest-china.jpg', 'https://en.wikipedia.org/wiki/Zhangjiajie_National', 'Non-India'),
('Iguazu Falls', 'Iguazu_Falls,Austral', '5 days', 10000, 'Iguazu Falls,Argentina.jpg', 'https://en.wikipedia.org/wiki/Iguazu_Falls', 'Non-India'),
('Canadian Rockies', 'Canadian_Rockies,Can', '5 days', 10000, 'Canadian Rockies,Canada.jpg', 'https://en.wikipedia.org/wiki/Canadian_Rockies', 'Non-India'),
('Ciudad Perdida', 'Ciudad_Perdida,Colom', '5 days', 10000, 'Ciudad Perdida,Colombia.jpg', 'https://en.wikipedia.org/wiki/Ciudad_Perdida', 'Non-India'),
('Machu Picchu', 'Machu_Picchu,peru', '5 days', 10000, 'Machu Picchu,Peru.jpg', 'https://en.wikipedia.org/wiki/Machu_Picchu', 'Non-India'),
('Petra', 'Petra,Jordon', '5 days', 10000, 'Petra,Jordon.jpg', 'https://en.wikipedia.org/wiki/Petra', 'Non-India'),
('Dolomites', 'Dolomites,Italy', '5 days', 10000, 'Dolomites,Italy.jpg', 'https://en.wikipedia.org/wiki/Dolomites', 'Non-India'),
('Mount Fuji', 'Mount_Fuji,Japan', '5 days', 10000, 'Mount Fuji,Japan.jpg', 'https://en.wikipedia.org/wiki/Mount_Fuji', 'Non-India'),
('Serengeti', 'Serengeti,Tanzania', '5 days', 10000, 'Serengeti,Tanzania.jpg', 'https://en.wikipedia.org/wiki/Serengeti', 'Non-India'),
('Mount Roraima', 'Mount_Roraima,SouthA', '5 days', 10000, 'Mount Roraima,South America.jpg', 'https://en.wikipedia.org/wiki/Mount_Roraima', 'Non-India'),
('Pantanal', 'Pantanal,SouthAmeric', '5 days', 10000, 'Pantanal,South America.jpg', 'https://en.wikipedia.org/wiki/Pantanal', 'Non-India'),
('Elephant_Falls', 'Elephant_Falls,Megha', '5 days', 10000, 'Elephant falls Meghalaya,India.jpg', 'https://en.wikipedia.org/wiki/Elephant_Falls', 'India'),
('Cango_Caves', 'Cango_Caves,South Af', '5 days', 10000, 'Cango Caves,South Africa.jpg', 'https://en.wikipedia.org/wiki/Cango_Caves', 'Non-India');

-- --------------------------------------------------------

--
-- Table structure for table `beach`
--

CREATE TABLE `beach` (
  `placename` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `about` varchar(50) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beach`
--

INSERT INTO `beach` (`placename`, `location`, `duration`, `amount`, `image`, `about`, `country`) VALUES
('Marina', 'Marina,Chennai', '1 day', 1000, 'Marina.jpg', 'https://en.wikipedia.org/wiki/Marina_Beach', 'India'),
('varkala', 'Varkala,Kerala', '2 day', 2000, 'Varkala_beach.jpg', 'https://en.wikipedia.org/wiki/Varkala_Beach', 'India'),
('White Heaven ', 'WhiteHeaven,Australi', '5 days', 10000, 'white.jpg', 'https://en.m.wikipedia.org/wiki/Whitehaven_Beach', 'Non-India'),
('Bora Bora', 'Bora Bora,South Paci', '5 days', 10000, 'bora.jpg', 'https://en.m.wikipedia.org/wiki/Bora_Bora', 'Non-India'),
('Siesta', 'Siesta,Florida(US)', '5 days', 10000, 'Siesta.jpg', 'https://en.m.wikipedia.org/wiki/Siesta_Beach', 'Non-India'),
('Goa', 'Goa', '2 days', 2000, 'Goa.jpg', 'https://en.m.wikipedia.org/wiki/Tourism_in_Goa', 'India'),
('Marari Beach', 'Marari Beach,Kerala', '2 days', 2000, 'Marari.jpeg', 'https://en.m.wikipedia.org/wiki/Marari_Beach', 'India'),
('Kovalam', 'Kovalam,Kerala', '2 days', 2000, 'Kovala.jpg', 'https://en.wikipedia.org/wiki/Kovalam', 'India'),
('Vivonne Bay', 'VivonneBay,SouthAust', '5 days', 10000, 'VIVONNE BAY BEACH.jpg', 'https://en.wikipedia.org/wiki/Vivonne_Bay_(South_A', 'Non-India'),
('Wineglass_Bay', 'Wineglass_Bay,Austra', '5 days', 10000, 'wineglass  bay.jpg', 'https://en.m.wikipedia.org/wiki/File:Beach_at_Wine', 'Non-India');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookingid` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `members` int(20) NOT NULL,
  `days` int(20) NOT NULL,
  `hotel` varchar(20) NOT NULL,
  `frloc` varchar(40) NOT NULL,
  `toloc` varchar(40) NOT NULL,
  `pamo` int(50) NOT NULL,
  `total` int(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookingid`, `name`, `email`, `phone`, `members`, `days`, `hotel`, `frloc`, `toloc`, `pamo`, `total`, `date`, `time`) VALUES
('55656312', 'shiva', 'surya48@gmail.com', '9876543258', 4, 4, '2star', 'Tirunelveli', 'Varkala,Kerala', 4000, 23200, '11.02.2024', '10.02.51am'),
('1887104162', 'surya', 'surya48@gmail.com', '9876543258', 3, 4, '5star', 'Tirunelveli', 'Tajmahal,DelhiIndia', 12000, 145000, '11.02.2024', '01.02.06pm'),
('819328857', 'surya', 'surya218@gmail.com', '9876543251', 5, 3, '3star', 'Tirunelveli', 'Leaning Tower,France ', 30000, 115000, '11.02.2024', '03.02.28pm'),
('478121317', 'essam', 'essam2119@gmail.com', '8970678223', 2, 3, '4star', 'Tirunelveli', 'Nepal', 30000, 107000, '11.02.2024', '03.02.57pm'),
('822073994', 'Bala', 'dass31@gmail.com', '6789652421', 4, 4, '3star', 'Thoothukudi', 'Andaman Port Blair', 40000, 184000, '11.02.2024', '03.02.13pm'),
('832378150', 'sakthi', 'sakthi2144@gmail.com', '8735722745', 4, 4, '5star', 'Tirunelveli', 'Marina,Chennai', 4000, 74000, '11.02.2024', '03.02.00pm'),
('752787918', 'sulaimon', 'sulaimon43@gmail.com', '9876527391', 3, 5, '5star', 'Tirunelveli', 'Amritsar,Pu ', 25000, 105400, '11.02.2024', '03.02.02pm'),
('163414650', 'sulaimon', 'sulaimon2143@gmail.com', '9876527391', 4, 4, '5star', 'Tirunelveli', 'Mecca,Saudi Arabia ', 50000, 233000, '11.02.2024', '03.02.47pm'),
('1534914368', 'surya', '21acs48@sadakath.ac.in', '8938932495', 4, 2, '5star', 'Tirunelveli', 'Amritsar,Punjab ', 10000, 60000, '11.02.2024', '03.02.21pm'),
('1656134056', 'surya', '21acs48@sadakath.ac.in', '8938938779', 4, 3, '5star', 'Tirunelveli', 'Australia ', 30000, 149000, '28.02.2024', '02.02.05pm'),
('1903988839', 'essam', 'essam2119@gmail.com', '9876543517', 5, 5, '4star', 'Tirunelveli', 'Marina,ChennaiIndia', 5000, 65000, '28.02.2024', '02.02.43pm'),
('912902129', 'essam', 'essam2119@gmail.com', '9876543517', 8, 6, '5star', 'Tirunelveli', 'Ayothi ', 30000, 166500, '28.02.2024', '02.02.30pm'),
('1363048097', 'ravi', 'ravi21@gmail.com', '7462883847', 5, 5, '5star', 'Tirunelveli', 'Courtallam,Tirunelveli', 2000, 52000, '28.02.2024', '03.02.47pm'),
('294979111', 'sakthi', 'sakthi2144@gmail.com', '7585448595', 8, 4, '5star', 'Tirunelveli', 'Kodaikanal', 2000, 46000, '05.03.2024', '07.03.35am'),
('1513498358', 'ravi', 'ravi21@gmail.com', '7503494334', 5, 3, '5star', 'Tirunelveli', 'Machu_Picchu,peru', 30000, 185000, '05.03.2024', '05.03.26pm'),
('1741275325', 'surya', 'surya48@gmail.com', '6369890125', 4, 4, '5star', 'Tirunelveli', 'Machu_Picchu,peru', 40000, 204000, '12.03.2024', '11.03.35am'),
('1010203504', 'surya', 'surya48@gmail.com', '6369890125', 4, 4, '5star', 'Tirunelveli', 'Tokyo,Japan ', 200000, 344000, '14.03.2024', '05.03.53pm'),
('984422842', 'surya', 'surya48@gmail.com', '6369890125', 2, 3, '5star', 'Tirunelveli', 'Banff,Alberta-Canada ', 150000, 247000, '15.03.2024', '07.03.30am'),
('1681397020', 'surya', 'surya48@gmail.com', '6369890125', 4, 3, '5star', 'Tirupur', 'Delhi ', 30000, 149000, '15.03.2024', '02.03.54pm'),
('2127427565', 'surya', 'surya48@gmail.com', '6369890125', 5, 3, '5star', 'Thoothukudi', 'Himalayas  ', 300000, 453500, '15.03.2024', '02.03.13pm'),
('25634908', 'surya', 'surya48@gmail.com', '6369890125', 2, 3, 'NO HOTEL', 'Tirunelveli', 'kanyakumari ', 3000, 9000, '15.03.2024', '03.03.39pm'),
('1827032014', 'surya', 'surya48@gmail.com', '6369890125', 4, 3, '2star', 'Madurai', 'Madagascar,East Africa  ', 150000, 269000, '15.03.2024', '03.03.26pm'),
('1142518038', 'surya', 'surya48@gmail.com', '6369890125', 1, 2, 'NO HOTEL', 'Tirunelveli', 'Marina,Chennai 1000 ', 2000, 6000, '15.03.2024', '03.03.35pm'),
('1194133141', 'surya', 'surya48@gmail.com', '6369890125', 10, 2, 'NO HOTEL', 'Tirunelveli', 'Varkala,Kerala 2000 ', 4000, 17000, '15.03.2024', '03.03.36pm'),
('536383816', 'surya', 'surya48@gmail.com', '6369890125', 4, 3, '2star', 'Coimbatore', 'Dubai Frame ', 30000, 89000, '19.03.2024', '04.03.00am'),
('347433889', 'Essam', 'essam2119@gmail.com', '8970678223', 5, 4, '5star', 'Thoothukudi', 'Switzerland ', 40000, 215000, '24.03.2024', '05.03.52pm'),
('265478584', 'surya', 'surya48@gmail.com', '6369890125', 4, 4, '5star', 'Tirunelveli', 'Madagascar,East Africa  ', 40000, 243000, '28.03.2024', '08.03.46am'),
('235106142', 'surya', 'surya48@gmail.com', '6369890125', 4, 3, '5star', 'Tirunelveli', 'Bangkok ', 30000, 165000, '28.03.2024', '08.03.19am'),
('1152238120', 'surya', 'surya48@gmail.com', '6369890125', 6, 3, '5star', 'Tirunelveli', 'New York City ', 30000, 195000, '29.03.2024', '06.03.36am'),
('1971030033', 'surya', 'surya48@gmail.com', '6369890125', 8, 5, '5star', 'Tirunelveli', 'Machu_Picchu,peru  ', 50000, 303000, '05.04.2024', '06.04.24am'),
('815824438', 'surya', 'surya48@gmail.com', '6369890125', 5, 2, '2star', 'Coimbatore', 'Hogenakkal_Falls ', 1000, 33000, '16.04.2024', '04.04.33pm'),
('1596296953', 'kumar', 'kumar@gmail.com', '985758474', 9, 4, '5star', 'Tirunelveli', 'Zhangjiajie National  ', 40000, 284000, '25.04.2024', '04.04.03pm');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `transactionid` varchar(30) NOT NULL,
  `bookingid` varchar(30) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `members` int(20) DEFAULT NULL,
  `days` int(20) DEFAULT NULL,
  `hotel` varchar(20) DEFAULT NULL,
  `frloc` varchar(40) DEFAULT NULL,
  `toloc` varchar(40) DEFAULT NULL,
  `pamo` int(50) DEFAULT NULL,
  `total` int(50) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`transactionid`, `bookingid`, `name`, `email`, `phone`, `members`, `days`, `hotel`, `frloc`, `toloc`, `pamo`, `total`, `date`, `time`) VALUES
('1149733822', '860589221', 'surya', 'shiva21@gmail.com', '6369890125', 6, 5, '5star', 'TIRUNELVELI', 'GOA', 10000, 58000, '0000-00-00', '0000-00-00'),
('1543184787', '678892298', 'essam', 'essam19@gmail.com', '9876543254', 7, 5, '5star', 'Tirunelveli', 'Delhi', 50000, 147000, '08.02.2024', '05.02.00pm'),
('2101215202', '1103503147', 'essam', '', '', 7, 4, '4star', 'Tirunelveli', 'Tajmahal,Delhi', 50000, 121500, '09.02.2024', '02.02.10pm'),
('283764526', '1088445648', 'surya', 'surya48@gmail.com', '6369890125', 4, 3, '2star', 'Tirunelveli', 'Thiruchendur,Thoothu', 1000, 8500, '10.02.2024', '11.02.14am'),
('36819266', '612681830', 'shiva', 'shiva48@gmail.com', '6369890125', 9, 4, '5star', 'Tirupur', 'kanyakumari1000', 1000, 43000, '10.02.2024', '11.02.49am'),
('649139532', '2125716816', 'Essam', 'essam2119@gmail.com', '8765432138', 6, 3, '5star', 'Tirunelveli', 'Thiruchendur,Thoothu', 1000, 31500, '10.02.2024', '11.02.38am'),
('1018885354', '1093323811', 'surya', 'surya2148@gmail.com', '6369890125', 5, 3, '5star', 'Tirunelveli', 'Tajmahal,D', 30000, 108500, '10.02.2024', '03.02.30pm'),
('1748370752', '1738990960', 'surya', 'surya2148@gmail.com', '6369890125', 5, 3, '5star', 'Tirunelveli', 'Leaning Tower,Fr', 30000, 159500, '11.02.2024', '08.02.23am'),
('1712871194', '728906693', 'mahesh', 'mahesh2133@gmail.com', '7896543256', 6, 4, '5star', 'Tirunelveli', 'Himal', 40000, 195500, '11.02.2024', '08.02.24am'),
('2114937279', '421859656', 'mahesh', 'mahesh2133@gmail.com', '7896543256', 1, 3, 'NO HOTEL', 'Thoothukudi', 'Tanjavur', 1000, 2500, '11.02.2024', '08.02.54am'),
('1467781300', '1539992844', 'Bala', 'bala2131@gmail.com', '8976543267', 1, 4, '5star', 'Tirunelveli', 'And', 40000, 191000, '11.02.2024', '08.02.48am'),
('49070253', '1133998635', 'surya', 'surya48@gmail.com', '9876543258', 4, 2, 'NO HOTEL', 'Tirunelveli', 'Marina,Che', 2000, 7200, '11.02.2024', '09.02.29am'),
('1246404742', '218456435', 'shiva', 'surya48@gmail.com', '9876543258', 4, 4, '5star', 'Tirunelveli', '', 4000, 74000, '11.02.2024', '09.02.33am'),
('970729937', '55656312', 'shiva', 'surya48@gmail.com', '9876543258', 4, 4, '2star', 'Tirunelveli', 'Varkala,Kerala', 4000, 23200, '11.02.2024', '10.02.51am'),
('289652120', '1433068738', 'santha', 'santha56@gmail.com', '9865255422', 4, 3, 'NO HOTEL', 'Tirunelveli', 'Tirupathi,Andhrapradesh', 3000, 8200, '11.02.2024', '10.02.04am'),
('1197831290', '1887104162', 'surya', 'surya48@gmail.com', '9876543258', 3, 4, '5star', 'Tirunelveli', 'Tajmahal,DelhiIndia', 12000, 145000, '11.02.2024', '01.02.06pm'),
('2125997474', '2108788333', 'surya', 'surya218@gmail.com', '9876543251', 5, 4, '5star', 'Tirunelveli', '', 12000, 167000, '11.02.2024', '02.02.43pm'),
('1418993570', '819328857', 'surya', 'surya218@gmail.com', '9876543251', 5, 3, '3star', 'Tirunelveli', 'Leaning Tower,France ', 30000, 115000, '11.02.2024', '03.02.28pm'),
('772756148', '478121317', 'essam', 'essam2119@gmail.com', '8970678223', 2, 3, '4star', 'Tirunelveli', 'Nepal', 30000, 107000, '11.02.2024', '03.02.57pm'),
('872842561', '801174428', 'mahesh', 'mahesh2133@gmail.com', '6789053162', 4, 3, 'NO HOTEL', 'Tirupur', 'Thiruchendur,Thoothukudi', 1000, 5600, '11.02.2024', '03.02.33pm'),
('1966197935', '822073994', 'Bala', 'dass31@gmail.com', '6789652421', 4, 4, '3star', 'Thoothukudi', 'Andaman Port Blair', 40000, 184000, '11.02.2024', '03.02.13pm'),
('368782231', '832378150', 'sakthi', 'sakthi2144@gmail.com', '8735722745', 4, 4, '5star', 'Tirunelveli', 'Marina,Chennai', 4000, 74000, '11.02.2024', '03.02.00pm'),
('1863124092', '1457573447', 'shiva', '', '', 1, 4, '5star', 'Tirunelveli', 'Mecca,Saudi Arabia ', 50000, 141000, '11.02.2024', '03.02.15pm'),
('723642424', '752787918', 'sulaimon', 'sulaimon43@gmail.com', '9876527391', 3, 5, '5star', 'Tirunelveli', 'Amritsar,Pu ', 25000, 105400, '11.02.2024', '03.02.02pm'),
('1675321634', '163414650', 'sulaimon', 'sulaimon2143@gmail.com', '9876527391', 4, 4, '5star', 'Tirunelveli', 'Mecca,Saudi Arabia ', 50000, 233000, '11.02.2024', '03.02.47pm'),
('458067660', '1534914368', 'surya', '21acs48@sadakath.ac.in', '8938932495', 4, 2, '5star', 'Tirunelveli', 'Amritsar,Punjab ', 10000, 60000, '11.02.2024', '03.02.21pm'),
('940719578', '1656134056', 'surya', '21acs48@sadakath.ac.in', '8938938779', 4, 3, '5star', 'Tirunelveli', 'Australia ', 30000, 149000, '28.02.2024', '02.02.05pm'),
('1389862574', '1903988839', 'essam', 'essam2119@gmail.com', '9876543517', 5, 5, '4star', 'Tirunelveli', 'Marina,ChennaiIndia', 5000, 65000, '28.02.2024', '02.02.43pm'),
('1698574629', '146555544', 'essam', 'essam2119@gmail.com', '9876543517', 5, 5, '5star', 'Tirunelveli', 'Varkala,Kerala ', 10000, 100000, '28.02.2024', '02.02.55pm'),
('1453737710', '912902129', 'essam', 'essam2119@gmail.com', '9876543517', 8, 6, '5star', 'Tirunelveli', 'Ayothi ', 30000, 166500, '28.02.2024', '02.02.30pm'),
('13323541', '1363048097', 'ravi', 'ravi21@gmail.com', '7462883847', 5, 5, '5star', 'Tirunelveli', 'Courtallam,Tirunelveli', 2000, 52000, '28.02.2024', '03.02.47pm'),
('949830403', '1278141529', 'sakthi', 'sakthi2144@gmail.com', '7585448595', 6, 4, '5star', 'Tirunelveli', 'Kodaikanal', 2000, 43000, '05.03.2024', '07.03.44am'),
('1476441610', '294979111', 'sakthi', 'sakthi2144@gmail.com', '7585448595', 8, 4, '5star', 'Tirunelveli', 'Kodaikanal', 2000, 46000, '05.03.2024', '07.03.35am'),
('343818179', '1170847725', 'surya', 'surya48@gmail.com', '9876543258', 7, 3, '5star', 'Tirunelveli', 'Tajmahal,D ', 9000, 160000, '05.03.2024', '07.03.14am'),
('1258910141', '1513498358', 'ravi', 'ravi21@gmail.com', '7503494334', 5, 3, '5star', 'Tirunelveli', 'Machu_Picchu,peru', 30000, 185000, '05.03.2024', '05.03.26pm'),
('710159884', '1936923792', '', 'surya48@gmail.com', '6369890125', 6, 2, '5star', 'Tirunelveli', 'Machu_Picchu,peru', 20000, 166000, '11.03.2024', '03.03.44pm'),
('1564290915', '1581611341', '', 'surya48@gmail.com', '6369890125', 8, 4, '5star', 'Tirunelveli', 'Dubai', 40000, 267000, '12.03.2024', '10.03.15am'),
('1902914775', '1741275325', 'surya', 'surya48@gmail.com', '6369890125', 4, 4, '5star', 'Tirunelveli', 'Machu_Picchu,peru', 40000, 204000, '12.03.2024', '11.03.35am'),
('758239', '1328378973', 'surya', 'surya48@gmail.com', '6369890125', 7, 3, '2star', 'Tirunelveli', '50000', 150000, 241500, '14.03.2024', '05.03.22pm'),
('100593012', '1010203504', 'surya', 'surya48@gmail.com', '6369890125', 4, 4, '5star', 'Tirunelveli', 'Tokyo,Japan ', 200000, 344000, '14.03.2024', '05.03.53pm'),
('1124968870', '1075764328', 'surya', 'surya48@gmail.com', '6369890125', 2, 4, '5star', 'Tirunelveli', 'Dolomites,Italy 50000Non-India', 200000, 332000, '15.03.2024', '07.03.38am'),
('1016425925', '984422842', 'surya', 'surya48@gmail.com', '6369890125', 2, 3, '5star', 'Tirunelveli', 'Banff,Alberta-Canada ', 150000, 247000, '15.03.2024', '07.03.30am'),
('2061098318', '1681397020', 'surya', 'surya48@gmail.com', '6369890125', 4, 3, '5star', 'Tirupur', 'Delhi ', 30000, 149000, '15.03.2024', '02.03.54pm'),
('769210306', '2127427565', 'surya', 'surya48@gmail.com', '6369890125', 5, 3, '5star', 'Thoothukudi', 'Himalayas  ', 300000, 453500, '15.03.2024', '02.03.13pm'),
('717775221', '25634908', 'surya', 'surya48@gmail.com', '6369890125', 2, 3, 'NO HOTEL', 'Tirunelveli', 'kanyakumari ', 3000, 9000, '15.03.2024', '03.03.39pm'),
('276792310', '1827032014', 'surya', 'surya48@gmail.com', '6369890125', 4, 3, '2star', 'Madurai', 'Madagascar,East Africa  ', 150000, 269000, '15.03.2024', '03.03.26pm'),
('540506859', '1142518038', 'surya', 'surya48@gmail.com', '6369890125', 1, 2, 'NO HOTEL', 'Tirunelveli', 'Marina,Chennai 1000 ', 2000, 6000, '15.03.2024', '03.03.35pm'),
('347682592', '1194133141', 'surya', 'surya48@gmail.com', '6369890125', 10, 2, 'NO HOTEL', 'Tirunelveli', 'Varkala,Kerala 2000 ', 4000, 17000, '15.03.2024', '03.03.36pm'),
('1531833484', '1351833471', 'surya', 'surya48@gmail.com', '6369890125', 5, 3, '2star', 'Thoothukudi', 'WhiteHeaven,Australi  ', 150000, 414000, '15.03.2024', '04.03.18pm'),
('1798483002', '650124423', 'surya', 'surya48@gmail.com', '6369890125', 4, 4, 'NO HOTEL', 'Madurai', 'Lourdes,France  ', 200000, 324000, '15.03.2024', '04.03.37pm'),
('645727358', '536383816', 'surya', 'surya48@gmail.com', '6369890125', 4, 3, '2star', 'Coimbatore', 'Dubai Frame ', 30000, 89000, '19.03.2024', '04.03.00am'),
('1780680225', '347433889', 'Essam', 'essam2119@gmail.com', '8970678223', 5, 4, '5star', 'Thoothukudi', 'Switzerland ', 40000, 215000, '24.03.2024', '05.03.52pm'),
('299401510', '265478584', 'surya', 'surya48@gmail.com', '6369890125', 4, 4, '5star', 'Tirunelveli', 'Madagascar,East Africa  ', 40000, 243000, '28.03.2024', '08.03.46am'),
('248422142', '235106142', 'surya', 'surya48@gmail.com', '6369890125', 4, 3, '5star', 'Tirunelveli', 'Bangkok ', 30000, 165000, '28.03.2024', '08.03.19am'),
('1508066102', '1152238120', 'surya', 'surya48@gmail.com', '6369890125', 6, 3, '5star', 'Tirunelveli', 'New York City ', 30000, 195000, '29.03.2024', '06.03.36am'),
('1527152861', '1530460330', 'surya', 'surya48@gmail.com', '6369890125', 2, 7, '5star', 'Tirunelveli', 'Varkala,Kerala  ', 14000, 125000, '31.03.2024', '04.03.05pm'),
('745693063', '744386437', 'surya', 'surya48@gmail.com', '6369890125', 5, 3, '5star', 'Tirunelveli', 'Ooty ', 1500, 46500, '01.04.2024', '06.04.58am'),
('336361583', '1971030033', 'surya', 'surya48@gmail.com', '6369890125', 8, 5, '5star', 'Tirunelveli', 'Machu_Picchu,peru  ', 50000, 303000, '05.04.2024', '06.04.24am'),
('1545245670', '815824438', 'surya', 'surya48@gmail.com', '6369890125', 5, 2, '2star', 'Coimbatore', 'Hogenakkal_Falls ', 1000, 33000, '16.04.2024', '04.04.33pm'),
('469673813', '1983314411', 'surya', 'surya48@gmail.com', '6369890125', 4, 3, '5star', 'Tirunelveli', 'Switzerland ', 30000, 165000, '24.04.2024', '03.04.02pm'),
('222013717', '1709049805', 'surya', 'surya48@gmail.com', '6369890126', 2, 2, '5star', 'Tirunelveli', 'Ooty ', 1000, 27000, '24.04.2024', '03.04.59pm'),
('1423448226', '2135901720', 'kumar', 'kumar@gmail.com', '985758474', 5, 3, '5star', 'Tirunelveli', 'Dubai Frame ', 30000, 180000, '25.04.2024', '03.04.27pm'),
('527822081', '1596296953', 'kumar', 'kumar@gmail.com', '985758474', 9, 4, '5star', 'Tirunelveli', 'Zhangjiajie National  ', 40000, 284000, '25.04.2024', '04.04.03pm');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `District` varchar(20) NOT NULL,
  `States` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`District`, `States`) VALUES
('Tirunelveli', 'Tamilnadu'),
('Chennai', 'Tamilnadu'),
('Thoothukudi', 'Tamilnadu'),
('Madurai', 'Tamilnadu'),
('Coimbatore', 'Tamilnadu'),
('Tirupur', 'Tamilnadu'),
('Tirichi', 'Tamilnadu'),
('kanchipuram', 'Tamilnadu');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `uname` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `enquiry` varchar(100) DEFAULT NULL,
  `replay` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`uname`, `email`, `phone`, `enquiry`, `replay`) VALUES
('ms', 'surya@gmail.com', '858558393', NULL, NULL),
('surya', 'surya48@gmail.com', '6369890125', 'Tell me about the travel details..', NULL),
('kumar', 'kumar@gmail.com', '9857584368', 'Tell about the travel amount details....', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `feedback` varchar(100) DEFAULT NULL,
  `enquiry` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `phone`, `feedback`, `enquiry`) VALUES
('ms', 'sur', '994999333', NULL, NULL),
('surya', 'surya48@gmail.com', '6369890125', ' super...💖💖💘', NULL),
('surya', 'surya48@gmail.com', '6369890125', NULL, 'Hi....Tell about the package details'),
('Essam', 'essam2119@gmail.com', '8970678223', ' We are really love it..💟💝💔💔❣', 'show the booking details'),
('surya', 'surya48@gmail.com', '6369890125', NULL, 'send your package details'),
('surya', 'surya48@gmail.com', '6369890125', NULL, 'Could you please provide me with detailed information the various tourist packages offered?'),
('surya', 'surya48@gmail.com', '6369890125', NULL, 'Tell me about the travel details..'),
('kumar', 'kumar@gmail.com', '9857584368', ' Wonderful tour packages...we are really love it..💜💜', 'Tell about the travel amount details....');

-- --------------------------------------------------------

--
-- Table structure for table `island`
--

CREATE TABLE `island` (
  `placename` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `about` varchar(50) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `island`
--

INSERT INTO `island` (`placename`, `location`, `duration`, `amount`, `image`, `about`, `country`) VALUES
('Maldives', 'Maldives in South Asia', '5 days', 10000, 'Maldives.jpg', 'https://en.wikipedia.org/wiki/Maldives', 'Non-India'),
('Mauritius', 'Mauritius in East Africa', '5 days', 10000, 'Mauritius.jpg', 'https://en.wikipedia.org/wiki/Mauritius', 'Non-India'),
('Andaman Nicobar ', 'Andaman Port Blair', '5 days', 10000, 'Andaman.jpg', 'https://en.wikipedia.org/wiki/Andaman_and_Nicobar_', 'Non-India'),
('Havelock', 'Andaman', '5 day', 10000, 'Havelock.jpg', 'https://en.wikipedia.org/wiki/Havelock_island', 'Non-India'),
('Lakshadweep', 'Lakshadweep,India', '5 days', 5000, 'lakshadweep.jpg', 'https://en.wikipedia.org/wiki/Lakshadweep', 'India'),
('Madagascar', 'Madagascar,East Africa', '5 days', 10000, 'madagascar.jpg', 'https://en.wikipedia.org/wiki/Madagascar', 'Non-India'),
('Srilanka', 'srilanka', '5 days', 10000, 'sri lanka.jpg', 'https://en.wikipedia.org/wiki/Sri_Lanka', 'Non-India'),
('Phi_Phi_Islands', 'Phi_Phi_Islands', '5 days', 10000, 'phi phi island.jpg', 'https://en.wikipedia.org/wiki/Phi_Phi_Islands', 'Non-India'),
('Palm Islands', 'Palm Islands,Dubai', '5 days', 12000, 'palm island duabi.jpg', 'https://en.wikipedia.org/wiki/Palm_Islands', 'India'),
('Reunion Island', 'Reunion,France', '5 days', 10000, 'reunion.jpg', 'https://en.wikipedia.org/wiki/R%C3%A9union', 'Non-India');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `placename` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `amount` int(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `about` varchar(60) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`placename`, `location`, `duration`, `amount`, `image`, `about`, `country`) VALUES
('Tanjay periya kovil', 'Tanjavur', '1day', 500, 'tanjay.jpg', '', 'India'),
('Thiruchendur', 'Thiruchendur,Thoothukudi', '1day', 500, 'thiru.jpg', '', 'India'),
('Kanyakumari', 'kanyakumari', '1day', 500, 'kanya.jpg', '', 'India'),
('Alappuzha', 'kerala', '2 days', 500, 'kerala.jpg', 'https://traveltriangle.com/blog/best-places-to-visit-in-kera', 'India'),
('Courtallam', 'Courtallam,Tirunelveli', '1day', 500, 'courtallam.jpg', 'https://en.wikipedia.org/wiki/Courtallam', 'India'),
('Kodaikanal', 'Kodaikanal', '1day', 500, 'kodaikanal.jpg', 'https://en.wikipedia.org/wiki/Kodaikanal', 'India'),
('Ooty', 'Ooty', '2 days', 500, 'ooty.jpg', 'https://en.wikipedia.org/wiki/Ooty', 'India'),
('Manjolai', 'Manjolai', '1day', 500, 'Manjolai.jpg', 'https://en.wikipedia.org/wiki/Manjolai_labourers_massacre', 'India'),
('Mamallapuram', 'Mamallapuram,chennai', '1day', 500, 'Mahabalipuram.jpg', 'https://en.wikipedia.org/wiki/Mamallapuram', 'India'),
('Hogenakkal', 'Hogenakkal_Falls', '1day', 500, 'Hogenakkal.jpg', 'https://en.wikipedia.org/wiki/Hogenakkal_Falls', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `poppack`
--

CREATE TABLE `poppack` (
  `placename` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `country` varchar(30) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `about` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poppack`
--

INSERT INTO `poppack` (`placename`, `location`, `country`, `duration`, `amount`, `image`, `about`) VALUES
('Tajmahal', 'Delhi', 'India', '2 days', 5000, 'tajmahal.jpg', 'https://en.wikipedia.org/wiki/tajmahal'),
('Eiffel Tower', 'Eiffel Tower,Paris', 'Non-India', '5 days', 10000, 'eiffel.jpg', 'hhttps://en.wikipedia.org/wiki/Eiffel_Towerl'),
('Leaning Tower', 'Leaning Tower,France', 'Non-India', '5 days', 10000, 'italy.jpg', 'https://en.wikipedia.org/wiki/Leaning_Tower_of_Pis'),
('Great wall of China', 'China', 'Non-India', '5 days', 10000, 'wall.jpg', 'https://en.wikipedia.org/wiki/Great_Wall_of_China'),
('Australia', 'Australia', 'Non-India', '5 days', 10000, 'aus.jpg', 'https://en.wikipedia.org/wiki/Maldives'),
('Burj Khalifa', 'Burj Khalifa,Dubai', 'Non-India', '5 days', 10000, 'pexels-popoy-dev-12462486.jpg', 'https://en.wikipedia.org/wiki/Burj_Khalifa'),
('Dubai Frame', 'Dubai Frame', 'Non-India', '5 days', 10000, 'pexels-denys-gromov-4612431.jpg', 'https://en.wikipedia.org/wiki/Dubai_Frame'),
('Future Museam', 'Future Museam,Dubai', 'Non-India', '5 days', 10000, 'dubai museum.jpg', 'https://en.wikipedia.org/wiki/Museum_of_the_Future'),
('Bangkok', 'Bangkok', 'Non-India', '5 days', 10000, 'Bangkok.jpg', 'https://en.wikipedia.org/wiki/Bangkok'),
('Agra Fort', 'Agra', 'India', '5 days', 10000, 'red fort delhi.jpg', 'https://en.wikipedia.org/wiki/Agra_Fort'),
('Rome', 'Rome', 'Non-India', '5 days', 10000, 'Rome.jpg', 'https://en.wikipedia.org/wiki/Rome'),
('Paris', 'Paris', 'Non-India', '5 days', 10000, 'Paris capital of france.jpg', 'https://en.wikipedia.org/wiki/Paris'),
('Barcelona', 'spain', 'Non-India', '5 days', 10000, 'Barcelona spain.jpg', 'https://en.wikipedia.org/wiki/Barcelona'),
('Grand Canyon', 'Grand_Canyon,USA', 'Non-India', '5 days', 10000, 'grand canyon,usa.jpg', 'https://en.wikipedia.org/wiki/Grand_Canyon'),
('Switzerland', 'Switzerland', 'Non-India', '5 days', 10000, 'Switzerland europe.jpg', 'https://en.wikipedia.org/wiki/Switzerland'),
('Banff,Alberta', 'Banff,Alberta-Canada', 'Non-India', '5 days', 10000, 'Banff ,alberta, canada.jpg', 'https://en.wikipedia.org/wiki/Banff,_Alberta'),
('Tokyo', 'Tokyo,Japan', 'Non-India', '5 days', 10000, 'Tokyo, Japan.jpg', 'https://en.wikipedia.org/wiki/Tokyo'),
('New York City', 'New York City', 'Non-India', '5 days', 10000, 'New York City,USA.jpg', 'https://en.wikipedia.org/wiki/New_York_City'),
('Statue of Liberty', 'Statue_of_Liberty,US', 'Non-India', '5 days', 10000, 'Statue of Liberty, New York,USA.jpg', 'https://en.wikipedia.org/wiki/Statue_of_Liberty'),
('Great Barrier Reef', 'Great Reef,Australia', 'India', '5 days', 10000, 'Great Barrier Reef,Australia.jpg', 'https://en.wikipedia.org/wiki/Great_Barrier_Reef');

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE `religion` (
  `placename` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `amount` int(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `about` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`placename`, `location`, `country`, `duration`, `amount`, `image`, `about`) VALUES
('Jeruselam', 'Jeruselam,Israel', 'Non-India', '5 days', 10000, 'jerusalem.jpg', 'https://en.wikipedia.org/wiki/Jerusalem'),
('Mecca', 'Mecca,Saudi Arabia', 'Non-India', '5 days', 10000, 'mecca.jpg', 'https://en.wikipedia.org/wiki/Mecca'),
('Golden Temple', 'Amritsar,Punjab', 'India', '5 days', 1000, 'The_Golden_Temple_of_Amrithsar_7.jpg', 'https://en.wikipedia.org/wiki/Golden_Temple'),
('velankanni', 'Velankanni,Nagapattinam', 'India', '1 day', 1000, 'velankanni.jpg', 'https://en.wikipedia.org/wiki/Velankanni'),
('Kashi Vishwanath', 'Kashi Vishwanath,Varanasi', 'India', '5 days', 1000, 'kashi.jpg', 'https://en.m.wikipedia.org/wiki/Kashi_Vishwanath_T'),
('Lourdes', 'Lourdes,France', 'Non-India', '5 days', 10000, 'photo-1641070496002-8077aefba51c.jpeg', 'https://en.m.wikipedia.org/wiki/Sanctuary_of_Our_L'),
('Tirupati', 'Tirupati,Andhrapradesh', 'India', '2 days', 1000, 'tirupati.jpeg', 'https://en.m.wikipedia.org/wiki/Venkateswara_Templ'),
('Malaysia ', 'Malaysia', 'Non-India', '5 days', 10000, '736910a2-0eb1-4612-81d8-d66010787ed0.jpeg', 'https://en.m.wikipedia.org/wiki/Batu_Caves'),
('Karbala', 'Karbala,Iraq', 'Non-India', '5 days', 10000, 'karbala.jpg', 'https://en.m.wikipedia.org/wiki/Karbala'),
('Ayothi', 'Ayothi', 'India', '5 days', 1000, 'images (2).jpeg', 'https://en.m.wikipedia.org/wiki/Ram_Mandir');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uname` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `enquiry` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uname`, `password`, `email`, `phone`, `enquiry`) VALUES
('surya', 'surya2148', 'surya48@gmail.com', '6369890126', ' '),
('Essam', 'essam1921', 'essam2119@gmail.com', '8970678223', 'see the booking pages on the website'),
('mahesh', 'mahesh33', 'mahesh2133@gmail.com', '9876578752', NULL),
('sakthi', 'sakthi44', 'sakthi2144@gmail.com', '7890524687', NULL),
('balaesakki', 'bala31', 'bala2131@gmail.com', '9087975840', NULL),
('sulaimon', 'sulai43', 'sulaimon2143@gmail.c', '8760931238', NULL),
('shiva', 'shiva50', 'shiva48@gmail.com', '9095760628', NULL),
('ravi', 'ravi45', 'ravi21@gmail.com', '6369890124', NULL),
('ravims', 'ravi78', 'ravi23@gmail.com', '6369890124', NULL),
('jailani', 'jailani36', 'jailani36@gmail.com', '756389384949', NULL),
('suryam', 'surya583', 'surya004@gmail.com', '9876543258', NULL),
('suryams', 'suryams49', 'surya005@gmail.com', '987654329', NULL),
('msurya48', 'surya874', 'msurya48@gmail.com', '9876543258', NULL),
('sunil', 'surya5788=4', 'sunil47@gmail.com', '8575488444', NULL),
('ashwin', 'ashwin2135', 'ashwin35@gmail.com', '8757887838', NULL),
('kumar', 'kumar3425', 'kumar@gmail.com', '9857584368', ' '),
('sudalai', 'sudalai45', 'sudalai46@gmail.com', '8575857475', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
