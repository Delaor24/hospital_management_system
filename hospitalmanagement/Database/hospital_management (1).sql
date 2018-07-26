-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 05:24 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_doctor`
--

CREATE TABLE `add_doctor` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(20) NOT NULL,
  `doctor_address` varchar(20) NOT NULL,
  `doctor_email` varchar(20) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `specialist` varchar(50) NOT NULL,
  `day` varchar(255) NOT NULL,
  `startingTime` varchar(255) NOT NULL,
  `endTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_doctor`
--

INSERT INTO `add_doctor` (`doctor_id`, `doctor_name`, `doctor_address`, `doctor_email`, `contact_no`, `specialist`, `day`, `startingTime`, `endTime`) VALUES
(2, 'Dr. Probir  kumar', 'pabna', 'probir@gmail.com', '01788132353', 'matalist', 'SAT,MON', '10:00 AM', '4:00PM'),
(5, 'Dr. shuvo Rahman', 'Dhaka', 'shuvo44@gmail.com', '018776646', 'gynolozist', 'SAT,SUN', '12:30 PM', '8:00 PM'),
(6, 'Dr. Rimon', 'pabna, Dhaka', 'deloar801@gmail.com', '01790672620', 'sarjary', 'MON,TUS', '9:00 AM', '6:00 PM'),
(8, 'Dr rubel rohman', 'Dhaka, mirpur', 'rubel@gmail.com', '01766554433', 'sarjary', 'TUS, WEN', '8:00 AM ', '4:00 PM'),
(13, 'Dr. Probir kumar', 'Dhaka, mirpur', 'deloar801@gmail.com', '0192920727', 'sarjary', 'FRI, MON', '10:00 AM', '6:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `add_patients`
--

CREATE TABLE `add_patients` (
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_name` varchar(20) NOT NULL,
  `patient_address` varchar(255) NOT NULL,
  `patient_contact_no` varchar(20) NOT NULL,
  `patient_disease` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_patients`
--

INSERT INTO `add_patients` (`patient_id`, `doctor_id`, `patient_name`, `patient_address`, `patient_contact_no`, `patient_disease`) VALUES
(2, 2, 'Ruma akter', 'Dhaka', '0192920727', 'fever'),
(3, 5, 'Ebadul islam', 'pabna, Dhaka', '01748322234', 'cold fever'),
(4, 6, 'Trisha', 'Dhaka, mirpur', '0192920727', 'fever'),
(5, 5, 'Rejaul korim', 'Dhaka, Dhanmondhi 32', '017554433', 'cold fever'),
(7, 8, 'Md. shjifat', 'Dhaka, mirpur', '017889945', 'fever and cold fever'),
(8, 13, 'Md. Roman hossain', 'Dhaka, sukrabad', '01788332211', 'fever');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `username`, `password`) VALUES
(1, 'Deloar', '1234'),
(2, 'Juhith', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `patient_discharge`
--

CREATE TABLE `patient_discharge` (
  `discharge_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `details` varchar(255) NOT NULL,
  `doctor_payment` int(11) NOT NULL,
  `medicine` int(11) NOT NULL,
  `others` int(11) NOT NULL,
  `total_bill` int(11) NOT NULL,
  `total_paid` int(11) NOT NULL,
  `due` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_discharge`
--

INSERT INTO `patient_discharge` (`discharge_id`, `patient_id`, `details`, `doctor_payment`, `medicine`, `others`, `total_bill`, `total_paid`, `due`) VALUES
(1, 2, 'cold fever', 500, 200, 100, 800, 600, 200),
(2, 3, 'tayfoyed', 500, 200, 200, 900, 900, 0),
(3, 4, 'fever', 1000, 1400, 500, 2900, 2500, 400),
(4, 5, 'cold fever', 500, 1000, 300, 1800, 1800, 0),
(5, 9, 'colder fever', 500, 400, 200, 1100, 1000, 100),
(6, 7, 'cold fever', 1000, 1000, 1200, 3200, 2500, 700);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_doctor`
--
ALTER TABLE `add_doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `add_patients`
--
ALTER TABLE `add_patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `patient_discharge`
--
ALTER TABLE `patient_discharge`
  ADD PRIMARY KEY (`discharge_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_doctor`
--
ALTER TABLE `add_doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `add_patients`
--
ALTER TABLE `add_patients`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient_discharge`
--
ALTER TABLE `patient_discharge`
  MODIFY `discharge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
