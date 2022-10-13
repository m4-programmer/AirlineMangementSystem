-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 12:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airlines_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `uname` varchar(256) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pword` varchar(255) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `uname`, `email`, `pword`, `phone`, `image`) VALUES
(1, 'Theclus', 'admin1', 'admin@admin.com', '827ccb0eea8a706c4c34a16891f84e7b', '+23493386513', 'images/faces/face21.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `airlines`
--

CREATE TABLE `airlines` (
  `Id` int(11) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Location` varchar(256) NOT NULL,
  `Description` text DEFAULT NULL,
  `Motto` varchar(256) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`Id`, `Name`, `Location`, `Description`, `Motto`, `created_at`, `updated_at`) VALUES
(6, 'Peace Mass', 'Abj', 'Peace', 'Peace', '2022-07-30 15:04:17', NULL),
(8, 'Zena Parrish', 'Ratione ratione nece', 'boxaj', 'Odit delectus atque', '2022-07-30 15:08:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `Id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Flight_price_id` int(11) NOT NULL,
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`Id`, `User_id`, `Flight_price_id`, `Status`) VALUES
(1, 18, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `flight_price`
--

CREATE TABLE `flight_price` (
  `Id` int(11) NOT NULL,
  `Flight_schedule_id` int(11) NOT NULL,
  `Classes` varchar(256) NOT NULL,
  `Price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `flight_schedule`
--

CREATE TABLE `flight_schedule` (
  `Id` int(11) NOT NULL,
  `Airline_id` int(11) NOT NULL,
  `Departure` varchar(15) NOT NULL,
  `Arrival` varchar(15) NOT NULL,
  `Flight_destination` varchar(60) NOT NULL,
  `Duration` varchar(6) DEFAULT NULL,
  `Seats` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight_schedule`
--

INSERT INTO `flight_schedule` (`Id`, `Airline_id`, `Departure`, `Arrival`, `Flight_destination`, `Duration`, `Seats`) VALUES
(1, 8, '1652148300', '1653627900', 'Abuja', '30', 100),
(2, 6, '1652313960', '1653447960', 'Kano', '30', 23),
(3, 8, '1652143800', '1653367740', 'Kaduna', '30', 120),
(4, 8, '1654185420', '1654185420', 'Kaduna', '30', 45),
(5, 6, '0', '1659805080', 'Abuja', '30', 100);

-- --------------------------------------------------------

--
-- Table structure for table `traveler_details`
--

CREATE TABLE `traveler_details` (
  `Id` int(11) NOT NULL,
  `User_id` varchar(9) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Middlename` varchar(30) NOT NULL,
  `Dateofbirth` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `Phonenumber` varchar(20) NOT NULL,
  `User_img` varchar(60) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `State` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Country` varchar(10) NOT NULL,
  `Next_of_kin_name` varchar(30) NOT NULL,
  `Next_of_kin_state` varchar(30) NOT NULL,
  `Next_of_kin_no` varchar(15) NOT NULL,
  `Next_of_kin_email` varchar(60) NOT NULL,
  `Next_of_kin_city` varchar(30) NOT NULL,
  `Next_of_kin_country` varchar(10) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `traveler_details`
--

INSERT INTO `traveler_details` (`Id`, `User_id`, `Surname`, `Firstname`, `Middlename`, `Dateofbirth`, `Gender`, `Email`, `password`, `Phonenumber`, `User_img`, `Address`, `State`, `City`, `Country`, `Next_of_kin_name`, `Next_of_kin_state`, `Next_of_kin_no`, `Next_of_kin_email`, `Next_of_kin_city`, `Next_of_kin_country`, `Created_at`) VALUES
(18, '2022ME', 'Adol', 'emma', 'Motunde', '2022-05-30', 'male', 'boy@boy.com', '12345', '00945984594', 'uploads/face6.jpg', 'st augustines parish', 'enugu', 'ichida', 'Nigeria', 'chidi', 'enugu', '08108081833', 'sylva@djay.com', 'umudike', 'Nigeria', '2022-05-14 18:04:38'),
(19, '2022MI', 'adolphus', 'miracle', 'O', '2022-07-29', 'male', 'edoka@a.com', '12345', '098987676542', 'uploads/_20190917_173506.JPG', 'Nsukka', 'Enugu', 'Nsukka', 'Nigeria', 'adolphus miracle', 'Enugu', '09897277288266', 'edoka@a.com', 'Nsukka', 'Nigeria', '2022-07-29 10:42:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airlines`
--
ALTER TABLE `airlines`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `flight_price`
--
ALTER TABLE `flight_price`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `flight_schedule`
--
ALTER TABLE `flight_schedule`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Airline_id` (`Airline_id`);

--
-- Indexes for table `traveler_details`
--
ALTER TABLE `traveler_details`
  ADD PRIMARY KEY (`Id`) USING BTREE,
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `airlines`
--
ALTER TABLE `airlines`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `flight_price`
--
ALTER TABLE `flight_price`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flight_schedule`
--
ALTER TABLE `flight_schedule`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `traveler_details`
--
ALTER TABLE `traveler_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `traveler_details` (`Id`);

--
-- Constraints for table `flight_schedule`
--
ALTER TABLE `flight_schedule`
  ADD CONSTRAINT `flight_schedule_ibfk_1` FOREIGN KEY (`Airline_id`) REFERENCES `airlines` (`Id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
