-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 22, 2022 at 03:08 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fypmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

DROP TABLE IF EXISTS `lecturers`;
CREATE TABLE IF NOT EXISTS `lecturers` (
  `lect_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `lect_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lect_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lect_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lect_dept` int(11) NOT NULL,
  `lect_coordinator` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`lect_id`),
  UNIQUE KEY `lecturers_lect_email_unique` (`lect_email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`lect_id`, `lect_name`, `lect_email`, `lect_password`, `lect_dept`, `lect_coordinator`) VALUES
(1, 'Mohd Rosyam Bin Abdul Jabbar, Ts. Dr.', 'rosyam@fypmp.com', 'rosyam1234', 1, 0),
(2, 'Jefri Bin Abdul Majid, Ts. Dr.', 'jefri@fypmp.com', 'jefri1234', 1, 0),
(3, 'Norliana Binti Kamaruzzaman, Ts. Dr.', 'liana@fypmp.com', 'liana1234', 1, 1),
(4, 'Ts. Muhammad Sufyian Bin Mohd Azmi', 'sufyian@uniten.edu.my', 'sufyian1234', 1, 1),
(5, 'Yunus Bin Yusoff, Assoc. Prof. Ts. Dr', 'yunus@uniten.edu.my', 'yunus1234', 1, 0),
(6, 'Moamin A Mahmoud, Dr.', 'moamin@uniten.edu.my', 'moamin1234', 1, 0),
(7, 'Faridah Hani Bte Mohamed Salleh, Ts. Dr.', 'faridah@uniten.edu.my', 'faridah1234', 1, 0),
(8, 'Lim Kok Cheng, Ts.', 'lim@uniten.edu.my', 'lim1234', 1, 0),
(9, 'Mohd Hazli Bin Mohamed Zabil, Ts. Dr.', 'hazli@uniten.edu.my', 'hazli1234', 1, 0),
(10, 'Zailani Bte. Ibrahim, Ts.', 'zailani@uniten.edu.my', 'zai1234', 1, 0),
(11, 'Raja Feninferina Raja Azman', 'fenin@uniten.edu.my', 'fenin1234', 1, 0),
(12, 'Azhana Ahmad, Ts. Dr', 'azhana@uniten.edu.my', 'azhana1234', 1, 0),
(13, 'Naziffa Raha Binti Md Nasir', 'naziffa@uniten.edu.my', 'naziffa1234', 1, 0),
(14, 'Azlan Yusof', 'azlan@uniten.edu.my', 'azlan1234', 1, 0),
(15, 'Ramona bt Ramli, Ts', 'ramona@uniten.edu.my', 'ramona1234', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `project_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_title` varchar(100) NOT NULL,
  `project_desc` varchar(191) DEFAULT NULL,
  `project_type` int(2) NOT NULL,
  `project_start` varchar(11) DEFAULT NULL,
  `project_end` varchar(11) DEFAULT NULL,
  `project_duration` int(2) NOT NULL,
  `project_progress` int(2) DEFAULT '0',
  `project_status` int(2) DEFAULT '0',
  `student_id` varchar(11) NOT NULL,
  `sv_id` int(11) UNSIGNED NOT NULL,
  `ex1_id` int(11) UNSIGNED NOT NULL,
  `ex2_id` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`project_id`),
  KEY `sv_id` (`sv_id`),
  KEY `ex1_id` (`ex1_id`),
  KEY `ex2_id` (`ex2_id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_title`, `project_desc`, `project_type`, `project_start`, `project_end`, `project_duration`, `project_progress`, `project_status`, `student_id`, `sv_id`, `ex1_id`, `ex2_id`) VALUES
(4, 'Algorithmic algorithm for search for bugs in apps', 'Auto search bugs in apps\r\n', 1, '2022-12-16', '2022-12-23', 4, 1, 1, 'SW0107514', 1, 2, 3),
(6, 'Python line sequencing using historical data', 'Get coded lines just by prompting', 1, '2022-09-05', '2022-12-23', 5, 3, 1, 'SW0107514', 9, 2, 3),
(7, 'Car4U', 'Car Recommender using MCDM', 2, NULL, NULL, 8, 0, 4, 'SW0107514', 3, 1, 2),
(9, 'Asset Inventory and Management System', NULL, 1, NULL, NULL, 4, 0, 0, 'SW0107187', 12, 1, 2),
(11, 'Deep learning techniques for LED and LCD digits detection', NULL, 2, NULL, NULL, 4, 0, 0, 'SW0107316', 13, 14, 15),
(12, 'Electronic Monitoring Device Inventory System', 'Monitor system', 1, '2022-11-05', '2022-12-23', 4, 3, 4, 'SW0107316', 4, 1, 2),
(13, 'Home Tutoring Matching System', NULL, 1, NULL, NULL, 4, 0, 0, 'SW0107468', 6, 4, 11),
(14, 'Blockchain Ticketing System with Authentication Capability', NULL, 1, NULL, NULL, 4, 0, 0, 'SW0107474', 8, 4, 15),
(15, 'WhatCar4u: A web application for car buyer', NULL, 1, NULL, NULL, 4, 0, 0, 'SW01081561', 3, 9, 14),
(16, 'Cat Identifier System', NULL, 1, NULL, NULL, 4, 0, 0, 'SW01081559', 5, 3, 4),
(17, 'UITM House Rental System', NULL, 1, NULL, NULL, 4, 0, 0, 'SW0107661', 7, 8, 9),
(18, 'Affiliate Agent-Product Website', NULL, 1, NULL, NULL, 4, 0, 0, 'SW0107491', 11, 5, 1),
(19, 'Hobbist\'s Shop and Event Finder application', 'Find your favorite event and hobby shop', 2, '2022-10-05', '2022-12-23', 4, 3, 4, 'SW01081559', 4, 9, 2),
(21, 'Stock Market Price Prediction System', 'Stock prediction', 1, '2022-09-05', '2022-12-23', 4, 3, 0, 'SW01081562', 4, 8, 9);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `student_id` varchar(11) NOT NULL,
  `student_name` varchar(80) NOT NULL,
  `student_email` varchar(320) NOT NULL,
  `student_password` varchar(20) NOT NULL,
  `student_address` varchar(50) NOT NULL,
  `student_cgpa` float NOT NULL,
  `student_year` int(2) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `student_email`, `student_password`, `student_address`, `student_cgpa`, `student_year`) VALUES
('SW0107165', 'Ali Abdullah Hasan Omar', 'SW0107165@student.uniten.edu.my', 'ali1234', 'Yemen, Syria', 3.43, 3),
('SW0107187', 'Akmal Arif Bin Arifin', 'SW0107187@student.uniten.edu.my', 'akmal1234', 'Kajang, Selangor', 3.73, 3),
('SW0107188', 'Ahamd Faisal Syamil Bin Ahmad Sabri', 'SW0107188@student.uniten.edu.my', 'Faisal1234', 'Rompin, Perak', 3.67, 3),
('SW0107281', 'Lim Swee Keong', 'SW0107281@student.uniten.edu.my', 'lim1234', 'Ampang, Selangor', 3.93, 3),
('SW0107290', 'Muhammad Faizal', 'sw0107290@student.uniten.edu.my', '1234sw0107290', 'Kajang, Selangor', 3.93, 3),
('SW0107316', 'Zafar Muhammad Aqif bin Muhammad Farid', 'SW0107316@student.uniten.edu.my', 'Aqif1234', 'Damansara, Petaling Jaya', 3.96, 3),
('SW0107317', 'Nurul Athilah Binti Adam', 'SW0107317@student.uniten.edu.my', 'Athilah1234', 'Subang, Selangor', 3.43, 3),
('SW0107468', 'Anis Alisha Binti Mohd Shafiq In', 'SW0107468@student.uniten.edu.my', 'Alisha1234', 'Salak Tinggi, Sepang', 3.56, 3),
('SW0107474', 'Hoo Jun Xian', 'SW0107474@student.uniten.edu.my', 'hoo1234', 'Ipoh, Perak.', 3.88, 3),
('SW0107478', 'Muadz bin Zainuddin', 'SW0107478@student.uniten.edu.my', 'Muadz1234', 'Sepang, Selangor', 3.42, 3),
('SW0107487', 'Nik Nurul Izzah binti Ishak', 'SW0107487@student.uniten.edu.my', 'nik1234', 'Semenyih, Selangor', 3.66, 3),
('SW0107491', 'Nurina Annisa binti Jaazta', 'SW0107491@student.uniten.edu.my', 'nurina1234', 'Gombak, Selangor', 3.65, 3),
('SW0107514', 'Muhammad Daniel Bin Mohd Hamdan', 'SW0107514@student.uniten.edu.my', '1234SW0107514', 'Besut, Terengganu', 3.98, 3),
('SW0107661', 'Syahmi Najhan Bin Saiful Azlan', 'SW0107661@student.uniten.edu.my', 'syahmi1234', 'Damansara, Petaling Jaya', 3.79, 3),
('SW01081559', 'Nurul Ain Maisarah Binti Azillah', 'SW01081559@student.uniten.edu.my', 'Maisarah1234', 'Kota Kinabalu, Sabah', 3.78, 3),
('SW01081561', 'Desikaruban A/l S Ganesan', 'SW01081561@student.uniten.edu.my', 'desikaruban1234', 'Ampang, Selangor', 3.56, 3),
('SW01081562', 'Fatin Izzati binti Harun', 'SW01081562@student.uniten.edu.my', 'izzati1234', 'Besut, Terengganu', 3.73, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `examiner1` FOREIGN KEY (`ex1_id`) REFERENCES `lecturers` (`lect_id`),
  ADD CONSTRAINT `examiner2` FOREIGN KEY (`ex2_id`) REFERENCES `lecturers` (`lect_id`),
  ADD CONSTRAINT `student` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`),
  ADD CONSTRAINT `supervisor` FOREIGN KEY (`sv_id`) REFERENCES `lecturers` (`lect_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
