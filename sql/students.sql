-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 01:41 PM
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
-- Database: `sinformations`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `name` varchar(100) NOT NULL,
  `birth` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `pemail` varchar(100) NOT NULL,
  `aemail` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `cpass` varchar(100) NOT NULL,
  `sid` varchar(10) NOT NULL,
  `session` varchar(20) NOT NULL,
  `department` varchar(200) NOT NULL,
  `faculty` varchar(200) NOT NULL,
  `university` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `birth`, `mobile`, `pemail`, `aemail`, `pass`, `cpass`, `sid`, `session`, `department`, `faculty`, `university`) VALUES
('Masum Billa', '2023-12-13', '01916553164', 'nayansplanet@gmail.com', '190101.cse@student.just.edu.bd', 'Na-553164', 'Na-553164', '190101', '2019-20', 'CSE', 'E and T', 'JUST'),
('Joy Mondal', '2023-12-07', '01797428597', 'joymondal4563@gmail.com', '190102.cse@student.just.edu.bd', 'Jo-428597', 'Jo-428597', '190102', '2019-20', 'CSE', 'F and T', 'JUST'),
('Masrafi Bin Seraj Sakib', '2023-12-01', '01762580324', 'masrafi@gmail.com', '190116.cse@student.just.edu.bd', 'Ma-580324', 'Ma-580324', '190116', '2019-20', 'CSE', 'F and T', 'JUST'),
('Pervej Chowkider', '2023-11-30', '01982525570', 'pervejbd2029@gmail.com', '190126.cse@student.just.edu.bd', 'CMp-82525570', 'CMp-82525570', '190126', '2019-20', 'CSE', 'F and T', 'JUST'),
('Ajmain Muhtady Joarder', '2023-12-01', '09876543211', 'ajmain@gmail.com', '190127.cse@student.just.edu.bd', 'Aj-1234567890', 'Aj-1234567890', '190127', '2019-20', 'CSE', 'fd', 'JUST'),
('Nayan Malakar', '2023-11-30', '01982525571', 'nayanmalakar@gmail.com', '190128.cse@student.just.edu.bd', 'Na-82525570', 'Na-82525570', '190128', '2019-20', 'CSE', 'E and T', 'JUST'),
('Mehedi Hasan Sagor', '2023-11-30', '01797566358', 'mehedisagor2001@gmail.com', '190154.cse@student.just.edu.bd', 'Sa-566358', 'Sa-566358', '190154', '2019-20', 'CSE', 'F and T', 'JUST'),
('Shatodal Poddar', '2023-11-29', '09876543211', 'shatodal@gmail.com', '190101.che@student.just.edu.bd', 'Sh-987654321', 'Sh-987654321', '345678', '2345', 'Chemical', 'E and T', 'JUST');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
