-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 06:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `S_no` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `Roll_no` int(11) NOT NULL,
  `Registration_no` varchar(50) NOT NULL,
  `Discipline` varchar(50) NOT NULL,
  `Session` varchar(20) NOT NULL,
  `Blood` varchar(10) NOT NULL,
  `Dob` date NOT NULL,
  `Cnic` varchar(20) NOT NULL,
  `Personal_c_no` bigint(20) NOT NULL,
  `Emergency_c_no` bigint(20) NOT NULL,
  `Permanent_address` varchar(100) NOT NULL,
  `Present_Address` varchar(100) NOT NULL,
  `Domicile_District` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `Addmission_quota` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Religion` varchar(20) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `Metric_major` varchar(20) NOT NULL,
  `Ssc_ob_marks` int(11) NOT NULL,
  `Ssc_total_marks` int(11) NOT NULL,
  `Ssc_percentage` int(11) NOT NULL,
  `Ssc_board` varchar(50) NOT NULL,
  `Hssc_major` varchar(50) NOT NULL,
  `Hssc_ob_marks` int(11) NOT NULL,
  `Hssc_total_marks` int(11) NOT NULL,
  `Hssc_precentage` int(11) NOT NULL,
  `Hssc_board` varchar(50) NOT NULL,
  `Picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`S_no`, `full_name`, `f_name`, `Roll_no`, `Registration_no`, `Discipline`, `Session`, `Blood`, `Dob`, `Cnic`, `Personal_c_no`, `Emergency_c_no`, `Permanent_address`, `Present_Address`, `Domicile_District`, `Province`, `Addmission_quota`, `Gender`, `Religion`, `Nationality`, `Metric_major`, `Ssc_ob_marks`, `Ssc_total_marks`, `Ssc_percentage`, `Ssc_board`, `Hssc_major`, `Hssc_ob_marks`, `Hssc_total_marks`, `Hssc_precentage`, `Hssc_board`, `Picture`) VALUES
(1, 'Muhammad Haseeb', 'sherzaman', 0, '1234234', '', '', '', '0000-00-00', '', 0, 0, '            ', '            ', '', '', '', '', '', '', '', 0, 0, 0, '', '0', 0, 0, 0, '0', '89d631c2-3f3a-4be0-856d-fd88b9ae2a12.jpg'),
(7, 'Muhammad Haseeb kan', '', 216111, '1234234', 'Select Discipline', 'Select session', 'Select Blo', '0000-00-00', '', 0, 0, 'Shahdara Watkay Mingora Swat', '', 'Select District', 'Select province', 'Select quota', 'Select gender', 'Select religion', 'Select Nationality', '', 0, 0, 0, '', '0', 0, 0, 0, '0', ''),
(8, 'izhar ali', '', 216111, '1234234', 'Select Discipline', 'Select session', 'Select Blo', '0000-00-00', '', 0, 0, '', '', 'Select District', 'Select province', 'Select quota', 'Select gender', 'Select religion', 'Select Nationality', '', 0, 0, 0, '', '0', 0, 0, 0, '0', ''),
(9, 'shahab ghafoor', '', 44, '216144', 'Select Discipline', 'Select session', 'Select Blo', '0000-00-00', '', 0, 0, '', '', 'Select District', 'Select province', 'Select quota', 'Select gender', 'Select religion', 'Select Nationality', 'BISE swat', 0, 0, 0, '', '0', 0, 0, 0, '0', ''),
(10, 'Muhammad ', '', 216111, '1234234', 'BS', '2022_2026', 'A-', '2023-09-17', '1560703562151', 345242, 23452345, 'Shahdara Watkay Mingora Swat', 'Shahdara Watkay Mingora Swat', 'Swat', 'Khyber pukhton khwa', 'Fata', 'Male', 'Islam', 'Pakistan', 'BISE swat', 953, 1100, 82, '', '0', 0, 0, 0, '0', ''),
(11, 'ali', '', 12, '11111', 'Select Discipline', 'Select session', 'Select Blo', '0000-00-00', '', 0, 0, '', '', 'Select District', 'Select province', 'Select quota', 'Select gender', 'Select religion', 'Select Nationality', 'Science', 0, 0, 0, 'BISE swat', '0', 0, 0, 0, '0', ''),
(12, 'salman', 'sultan', 216111, '216123', 'Select Discipline', 'Select session', 'Select Blo', '0000-00-00', '', 0, 0, '', '', 'Select District', 'Select province', 'Select quota', 'Select gender', 'Select religion', 'Select Nationality', 'Science', 0, 0, 0, 'BISE swat', '0', 0, 0, 0, '0', ''),
(13, 'Muhammad Haseeb', '', 216111, '216123', 'Select Discipline', 'Select session', 'Select Blo', '0000-00-00', '', 0, 0, 'Shahdara Watkay Mingora Swat', '', 'Select District', 'Select province', 'Select quota', 'Select gender', 'Select religion', 'Select Nationality', 'Select major', 0, 0, 0, 'Select Board', '0', 0, 0, 0, '0', ''),
(14, 'Muhammad Haseeb', '', 216111, '216123', 'Select Discipline', 'Select session', 'Select Blo', '0000-00-00', '', 0, 0, 'Shahdara Watkay Mingora Swat', '', 'Select District', 'Select province', 'Select quota', 'Select gender', 'Select religion', 'Select Nationality', 'Select major', 0, 0, 0, 'Select Board', 'Medical', 0, 0, 0, '0', ''),
(15, 'atif', '', 234, '216123', 'Select Discipline', 'Select session', 'Select Blo', '0000-00-00', '', 0, 0, '', '', 'Select District', 'Select province', 'Select quota', 'Select gender', 'Select religion', 'Select Nationality', 'Select major', 0, 0, 0, 'Select Board', 'Select major', 908, 0, 0, '0', ''),
(16, 'atif', '', 23, '216123', 'Select Discipline', 'Select session', 'Select Blo', '0000-00-00', '', 0, 0, '', '', 'Select District', 'Select province', 'Select quota', 'Select gender', 'Select religion', 'Select Nationality', 'Select major', 0, 0, 0, 'Select Board', 'Select major', 0, 0, 0, '0', ''),
(17, 'Muhammad Haseeb', '', 44, '1234234', 'Select Discipline', 'Select session', 'Select Blo', '0000-00-00', '', 0, 0, 'Shahdara Watkay Mingora Swat', '', 'Select District', 'Select province', 'Select quota', 'Select gender', 'Select religion', 'Select Nationality', 'Select major', 0, 0, 0, 'Select Board', 'Select major', 0, 0, 0, '0', ''),
(18, 'Muhammad Haseeb', '', 216111, '216123', 'Select Discipline', 'Select session', 'Select Blo', '0000-00-00', '', 0, 0, 'Shahdara Watkay Mingora Swat', '', 'Select District', 'Select province', 'Select quota', 'Select gender', 'Select religion', 'Select Nationality', 'Select major', 0, 0, 0, 'Select Board', 'Select major', 0, 1100, 0, '0', ''),
(19, 'Muhammad Haseeb', '', 216111, '1234234', 'Select Discipline', 'Select session', 'Select Blo', '0000-00-00', '', 0, 0, 'Shahdara Watkay Mingora Swat', '', 'Select District', 'Select province', 'Select quota', 'Select gender', 'Select religion', 'Select Nationality', 'Select major', 0, 0, 0, 'Select Board', 'Select major', 0, 0, 0, '0', ''),
(20, 'Muhammad Haseeb', '', 216111, '216123', 'Select Discipline', 'Select session', 'Select Blo', '0000-00-00', '', 0, 0, 'Shahdara Watkay Mingora Swat', '', 'Select District', 'Select province', 'Select quota', 'Select gender', 'Select religion', 'Select Nationality', 'Select major', 0, 0, 0, 'Select Board', 'Select major', 0, 0, 80, '0', ''),
(21, 'Muhammad Haseeb', '', 216111, '1234234', 'Select Discipline', 'Select session', 'Select Blo', '0000-00-00', '', 0, 0, 'Shahdara Watkay Mingora Swat', '', 'Select District', 'Select province', 'Select quota', 'Select gender', 'Select religion', 'Select Nationality', 'Select major', 0, 0, 0, 'Select Board', 'Select major', 0, 0, 0, 'BISE swat', ''),
(22, 'Muhammad Haseeb', '', 216111, '216123', 'Select Discipline', 'Select session', 'Select Blo', '0000-00-00', '', 0, 0, ' Shahdara Watkay Mingora Swat', ' ', 'Select District', 'Select province', 'Select quota', 'Select gender', 'Select religion', 'Select Nationality', 'Select major', 0, 0, 0, 'Select Board', 'Select major', 0, 0, 0, 'Select Board', ''),
(23, ' Haseeb Khan MHK', 'Sher zaman', 216109, 'UOS216109', 'BS', '2021-2025', 'A+', '2002-10-12', '1560703562601', 3493717259, 3455575761, '  Shahdara Watkay Mingora Swat', '  Shahdara Watkay Mingora Swat', 'Swat', 'Khyber pukhton khwa', 'Fata', 'Male', 'Islam', 'Pakistan', 'Science', 953, 1100, 82, 'BISE swat', 'Computer Science', 908, 1100, 80, 'BISE swat', ''),
(24, 'Muhammad Haseeb', '', 216111, '216123', 'MPhil', 'Select Session', 'Select Blo', '0000-00-00', '', 0, 0, 'Shahdara Watkay Mingora Swat', ' ', 'Select Domicile District', 'Select Province', 'Select Addmission Quota', 'Select Gender', 'Select Religion', 'Select Nationality', 'Select major', 0, 0, 0, 'Select Board', 'Select Major', 0, 0, 0, 'select Board', ''),
(25, 'Muhammad Haseeb', '', 23, '216123', 'Ph.D', 'Select Session', 'Select Blo', '0000-00-00', '', 0, 0, 'Shahdara Watkay Mingora Swat', ' ', 'Select Domicile District', 'Select Province', 'Select Addmission Quota', 'Select Gender', 'Select Religion', 'Select Nationality', 'Select major', 0, 0, 0, 'Select Board', 'Select Major', 0, 0, 0, 'select Board', ''),
(26, 'Muhammad Haseeb', '', 216111, '216123', 'Select Discipline', 'Select Session', 'Select Blo', '0000-00-00', '', 0, 0, 'Shahdara Watkay Mingora Swat', ' ', 'Select Domicile District', 'Select Province', 'Select Addmission Quota', 'Female', 'Select Religion', 'Select Nationality', 'Select major', 0, 0, 0, 'Select Board', 'Select Major', 0, 0, 0, 'select Board', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`S_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
