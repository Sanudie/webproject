-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 02:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petadoption_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(10) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(6) NOT NULL,
  `Amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `Name`, `Email`, `Address`, `City`, `State`, `Amount`) VALUES
(6, 'Chaisha gallage', 'gallagechaisha@gmail', '101/2', 'Sri Jayawa', 'sl', 1200),
(7, 'tharini', 'tharindi@gmail.com', '101/2', 'colombo', 'Sl', 3400),
(8, 'Chaisha gallage', 'gallagechaisha@gmail.com', '101/2', 'Sri Jayawardenapura kotte', 'SL', 567);

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `pet_id` int(11) NOT NULL,
  `pet_name` varchar(255) NOT NULL,
  `pet_age` int(11) DEFAULT NULL,
  `pet_details` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `pet_gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`pet_id`, `pet_name`, `pet_age`, `pet_details`, `image`, `pet_gender`) VALUES
(2, 'bundi', 2, 'adores belly rubs!\r\nhouse-trained.\r\n', '18.jpg', 'female'),
(31, 'Jumbo', 7, 'knows tricks like shaking paws!\r\n', 'ss2.png', 'male'),
(32, 'lulu', 8, 'is a cuddle expert!\r\n\r\n', 'IMG-20240223-WA0051.jpg', 'female'),
(33, 'Deyla', 8, 'loves hiking!\r\nObedience trained \r\n', 'ss2.jpg', 'female'),
(34, 'Chotu', 5, 'super social!\r\nFully Vaccinated', 'IMG-20240223-WA0047.jpg', 'male'),
(35, 'Sudu', 7, 'loves playing fetches\r\nVaccinated and healthy.\r\n', '2.jpg', 'male'),
(36, 'bela', 3, 'still plays tug-of-war!\r\nFully vaccinated\r\n', '8.jpg', 'male'),
(37, 'Kiko', 5, 'Sadie sings for dinner!\r\nSpayed \r\n', '10.jpg', 'male'),
(40, 'Haley', 8, 'Loves soft toys!\r\nIn good health', '12.jpg', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(10) NOT NULL,
  `adopter_name` varchar(200) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `havepets` varchar(10) NOT NULL,
  `adopter_email` varchar(200) NOT NULL,
  `takingcare` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `adopter_name`, `address`, `havepets`, `adopter_email`, `takingcare`) VALUES
(1, 'Thevindu Thisal Weeraratne', '33, temple road, Nugegoda', 'n', 'ttw@gmail.com', 'Your dog will be showered with love and affection daily. '),
(2, 'uma piyumini', 'anderson flats', 'y', 'piyumini@gmail.com', 'i love dogs'),
(39, 'Chaisha gallage', '101/2', 'n', 'gallagechaisha@gmail.com', ''),
(40, 'ajefhakf', 'sjkdfhsl', 'y', 'skejfnla@gmail.com', 'gfds'),
(41, 'ajefhakf', 'sjkdfhsl', 'y', 'skejfnla@gmail.com', 'gfds'),
(42, 'ajefhakf', 'sjkdfhsl', 'y', 'skejfnla@gmail.com', 'gfds'),
(43, 'ajefhakf', 'sjkdfhsl', 'y', 'skejfnla@gmail.com', 'gfds'),
(44, 'ajefhakf', 'sjkdfhsl', 'y', 'skejfnla@gmail.com', 'gfdsa'),
(45, 'ajefhakf', 'sjkdfhsl', 'y', 'skejfnla@gmail.com', 'gfds'),
(46, 'ajefhakf', 'sjkdfhsl', 'y', 'skejfnla@gmail.com', 'gfds'),
(47, 'ajefhakf', 'sjkdfhsl', 'y', 'skejfnla@gmail.com', 'uyfd'),
(48, 'SANUDI PIYUMHARA YAPA', '227/10A Gemunu Mawatha', 'y', 'sanudiyapa1226@gmail.com', 'thg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Fname`, `Lname`, `Address`, `Email`, `Username`, `Password`) VALUES
(3, 'sanudi', 'yapa', 'jerurjdrjiek', 'efu@ughj', 'dtfgvhb', 'sdrfcgvhb'),
(4, 'sanudi', 'yapa', 'jerurjdrjiek', 'efu@ughj', 'hty', 'tfwerthbv'),
(5, 'amantha', 'tharusha', '59/23 N, school ln, rukmale', 'pmatsrikantha@gmail.com', 'amanthatharu', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
