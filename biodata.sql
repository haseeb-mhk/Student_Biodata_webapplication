-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2023 at 08:46 AM
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
  `sess` varchar(20) NOT NULL,
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

INSERT INTO `student` (`S_no`, `full_name`, `f_name`, `Roll_no`, `Registration_no`, `Discipline`, `sess`, `Blood`, `Dob`, `Cnic`, `Personal_c_no`, `Emergency_c_no`, `Permanent_address`, `Present_Address`, `Domicile_District`, `Province`, `Addmission_quota`, `Gender`, `Religion`, `Nationality`, `Metric_major`, `Ssc_ob_marks`, `Ssc_total_marks`, `Ssc_percentage`, `Ssc_board`, `Hssc_major`, `Hssc_ob_marks`, `Hssc_total_marks`, `Hssc_precentage`, `Hssc_board`, `Picture`) VALUES
(91, 'Muhammad Haseeb', 'Sher zaman', 216109, 'UOS216109', 'BS-SE', '2021-2025', '', '0000-00-00', '', 0, 0, ' ', ' ', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, 0, 0, '', 'https://drive.google.com/open?id=1db7FRzw_ujbWlVMUHi5MOqnUkOjwcX2S'),
(92, 'Izhar Ali ', 'Amir sultan khan ', 216111, 'Uos216021011', 'BS-CS', '2022_2026', 'A+', '0000-00-00', '1560603617313', 3469454857, 3417066117, '  Koo deri malamjabba tehsil charbagh district SWAT ', '  Shadara watkay mingora swat ', 'Swat', 'Khyber Pukhtun khwa', '', 'Male', 'Islam', 'pakistan', 'Science', 967, 1100, 88, 'BISE Swat', 'Engineering', 894, 1100, 81, 'BISE Swat', '89d631c2-3f3a-4be0-856d-fd88b9ae2a12.jpg'),
(93, 'Zaheer khan', 'Gulzar khan', 216107, 'Uos5575857976', 'BS-CS', '2021-2025', 'B+', '0000-00-00', 'Ac33462710831', 3369304504, 3419621591, ' Hangu', ' Swat', 'Hangu', 'Khyber Pukhtun khwa', 'Fata', 'Male', 'Islam', 'pakistan', 'Science', 1100, 903, 84, 'Kohat', 'Computer Science', 1100, 930, 86, 'Kohat', ''),
(94, 'Azhar Mahmood ', 'M Farooq ', 216124, 'NA', 'BS-CS', '2021-2025', 'B+', '0000-00-00', '15602-5180710-7 ', 317, 345, ' Sirsinai kabal swat', ' Same as above', 'Swat', 'Khyber Pukhtun khwa', '', 'Male', 'Islam', 'pakistan', 'Science', 880, 1100, 76, 'BISE Swat', 'Engineering', 840, 1100, 70, 'BISE Swat', ''),
(95, 'Moosa khan', 'Faizullah khan ', 196180, 'Hgg23226', 'BS-SE', '2022_2026', 'A+', '0000-00-00', '1560704142755', 3490480408, 721328, ' Faizabd ', ' Faizabad', 'Swat', 'Khyber Pukhtun khwa', 'Fata', 'Male', 'Islam', 'pakistan', 'Science', 1000, 1100, 90, 'BISE Swat', 'Computer Science', 800, 1100, 80, 'BISE Swat', 'https://drive.google.com/open?id=15rS1Obpp7-XXCNmH0p6MlIbn5V9MytuP');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'taqweem', '$2y$10$tN9hEKw40RcxLolbzruGKeZ0RAH3Ud4SffcKX.TyL127LMqvvGg/.', '2023-08-27 11:49:25'),
(2, 'ismail', '$2y$10$ivER/xFf27j/D1XW/LVXquiiVczuuaoLS2U64rriWTnI52UveujWa', '2023-08-31 04:27:21'),
(3, 'moosa', '$2y$10$S0Tifj84aA4kJUPp4tDMruSrlpRaz2xoX0oUmIBwnaELREAwNDUFK', '2023-09-02 11:22:39'),
(4, 'khan', '$2y$10$2e12pZKd/ZPheM.57xh8zuoH0AcOiJNYijXJRkRzXJYSZScpaNJ4a', '2023-09-02 11:23:43'),
(5, 'fdfg', '$2y$10$lPkuMY9Cj4aiqV4kCyAe8eAaQrG0FYKUXXa2ckBn/FJw.iP1SWlUC', '2023-09-02 11:26:47'),
(6, 'haseeb', '$2y$10$QejssZUlNHOaGwwqxBwjMOJBPWlvDjqCLOsMlVuPoz6FVPog698su', '2023-09-17 10:14:06'),
(7, 'admin', '$2y$10$OGbdt/S.f3PCLRvU7Jd2T.49W8XRUxS3EHdcVtolRS6o4cqO7xpRK', '2023-09-24 12:52:05'),
(8, 'mhk', '$2y$10$.d13dS.1ZkO5Z4UzsBzKxuGig4jlfqeQ6UPLl5gZdzk/rTvRS2KA6', '2023-11-02 15:29:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`S_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
