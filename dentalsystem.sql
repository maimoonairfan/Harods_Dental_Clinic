-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2021 at 06:08 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dentalsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointments`
--

DROP TABLE IF EXISTS `tbl_appointments`;
CREATE TABLE IF NOT EXISTS `tbl_appointments` (
  `appointment_id` int NOT NULL AUTO_INCREMENT,
  `pat_id` int NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`appointment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_appointments`
--

INSERT INTO `tbl_appointments` (`appointment_id`, `pat_id`, `appointment_date`, `appointment_time`, `category`) VALUES
(6, 2, '2021-12-24', '1:30 to 5:00', 'Surgery'),
(7, 2, '2021-12-23', '8:00 to 10:00', 'Orthodontics'),
(8, 2, '2021-12-30', '10:30 to 12:30', 'Orthodontics'),
(9, 2, '2021-12-25', '1:30 to 5:00', 'General Dentistory'),
(10, 2, '2021-12-09', '1:30 to 5:00', 'Cosmetic Dentistory'),
(11, 2, '2021-12-09', '1:30 to 5:00', 'Cosmetic Dentistory'),
(12, 2, '2021-12-23', '8:00 to 10:00', 'Orthodontics'),
(13, 2, '2021-12-22', '10:30 to 12:30', 'Implants');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_medicine`
--

DROP TABLE IF EXISTS `tbl_medicine`;
CREATE TABLE IF NOT EXISTS `tbl_medicine` (
  `med_id` int NOT NULL AUTO_INCREMENT,
  `med_name` varchar(255) NOT NULL,
  `med_type` varchar(255) NOT NULL,
  `med_cost` varchar(255) NOT NULL,
  `med_treatment_assessment` varchar(255) NOT NULL,
  PRIMARY KEY (`med_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_medicine`
--

INSERT INTO `tbl_medicine` (`med_id`, `med_name`, `med_type`, `med_cost`, `med_treatment_assessment`) VALUES
(3, 'aspirin ', 'tablet', '15 rs.', 'toothache'),
(2, 'Ibuprofen ', 'tablet', '5 rs.', 'toothache'),
(4, 'Amoxil', 'capsule', '20 rs.', 'allergies to penicillin'),
(5, 'floride', 'toothpaste', '100 rs.', 'tooth decay'),
(6, 'nystatin', 'tablet', '20 rs.', 'teeth infection');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient_user`
--

DROP TABLE IF EXISTS `tbl_patient_user`;
CREATE TABLE IF NOT EXISTS `tbl_patient_user` (
  `pat_id` int NOT NULL AUTO_INCREMENT,
  `pat_name` varchar(255) NOT NULL,
  `pat_email` varchar(255) NOT NULL,
  `pat_contactno` varchar(255) NOT NULL,
  `pat_city` varchar(255) NOT NULL,
  `pat_gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`pat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_patient_user`
--

INSERT INTO `tbl_patient_user` (`pat_id`, `pat_name`, `pat_email`, `pat_contactno`, `pat_city`, `pat_gender`, `password`) VALUES
(1, 'maimoona', 'm@gmail.com', '874635464541', 'karachi', 'female', '202cb962ac59075b964b07152d234b70'),
(2, 'mam', 'ma@gmail.com', '84556848454', 'karachi', 'male', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

DROP TABLE IF EXISTS `tbl_room`;
CREATE TABLE IF NOT EXISTS `tbl_room` (
  `room_id` int NOT NULL AUTO_INCREMENT,
  `room_no` varchar(255) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`room_id`, `room_no`, `room_name`) VALUES
(5, 'room3', 'dr. steve thomas\r\n'),
(3, 'room1', 'dr. williamson'),
(4, 'room2', 'dr. kristina');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
