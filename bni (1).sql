-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 03:41 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bni`
--

-- --------------------------------------------------------

--
-- Table structure for table `bsn_parameter`
--

CREATE TABLE `bsn_parameter` (
  `bsn_id` int(11) NOT NULL,
  `bsn_name` varchar(30) DEFAULT NULL,
  `bsn_value` varchar(30) DEFAULT NULL,
  `bsn_status` int(11) DEFAULT NULL,
  `bsn_crtdby` int(11) DEFAULT NULL,
  `bsn_crtdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tyfcb`
--

CREATE TABLE `tyfcb` (
  `tyfcb_id` int(11) NOT NULL,
  `tyfcb_date` date DEFAULT NULL,
  `tyfcb_amt` varchar(20) DEFAULT NULL,
  `tyfcb_remark` varchar(50) DEFAULT NULL,
  `usr_id` int(11) DEFAULT NULL,
  `tyfstatus` int(11) DEFAULT NULL,
  `tyfcrtd_by` int(11) DEFAULT NULL,
  `tyfcrtd_on` datetime DEFAULT NULL,
  `tyfupdt_by` int(11) DEFAULT NULL,
  `tyfupdt_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usr_id` int(11) NOT NULL,
  `usr_name` varchar(50) DEFAULT NULL,
  `usr_companyName` varchar(50) DEFAULT NULL,
  `usr_category` varchar(50) DEFAULT NULL,
  `usr_tagline` varchar(50) DEFAULT NULL,
  `usr_mobile` varchar(30) DEFAULT NULL,
  `usr_email` varchar(50) DEFAULT NULL,
  `usr_website` varchar(50) DEFAULT NULL,
  `usr_address` varchar(50) DEFAULT NULL,
  `usr_logo` varchar(20) DEFAULT NULL,
  `usr_profilePic` varchar(20) DEFAULT NULL,
  `usr_password` varchar(100) DEFAULT NULL,
  `usr_status` int(11) DEFAULT NULL,
  `usr_crtd_by` int(11) DEFAULT NULL,
  `usr_crtd_on` datetime DEFAULT NULL,
  `usr_updt_by` int(11) DEFAULT NULL,
  `usr_updt_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usr_id`, `usr_name`, `usr_companyName`, `usr_category`, `usr_tagline`, `usr_mobile`, `usr_email`, `usr_website`, `usr_address`, `usr_logo`, `usr_profilePic`, `usr_password`, `usr_status`, `usr_crtd_by`, `usr_crtd_on`, `usr_updt_by`, `usr_updt_on`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$HSY5v1u/rjhDGLsr5ZBfC.NaKoK6l2D5pwzv0.RUruuq1i4XXl/cO', 1, 0, NULL, NULL, '2018-04-11 12:22:07'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$SPfsHRALKlfR/aTPFUSQj.Os6Uzbr8acbNzNiEWq5SEhsUbXEEzBK', 1, 0, NULL, NULL, '2018-04-11 12:23:30'),
(3, 'sdsad', 'sas', 'sdsad', 'bvcvb', '1234567890', 'ass@sd.com', NULL, NULL, NULL, NULL, '$2y$10$hBQ1Lm0hIB3OTXARZehW6OrSwkJzDxH49WsErh9hhHKjrWlkSzDiO', 1, 0, NULL, NULL, '2018-04-11 12:25:55'),
(4, 'sdsad', 'sas', 'sdsad', 'bvcvb', '1234567890', 'ass@sd.com', NULL, NULL, NULL, NULL, '$2y$10$i5XXkCekNtJ9XyLifonWgeqbAjP73R94r34.PZm7QtOi3piMJlCrq', 1, 0, NULL, NULL, '2018-04-11 12:25:56'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$1IG2xBZKwg61cHknnRA1xuFC4NyBT7tJ2.YSaO6MfmG4BIATcJShG', 1, 12, NULL, NULL, '2018-04-11 12:35:14'),
(6, 'sdsad', 'dfdf', 'sdsad', 'dfdf', '1234567890', 'ass@sd.com', NULL, NULL, NULL, NULL, '$2y$10$djEVBZAnkrimJs3kYNeKleh83xxdyO2eIh7LpDtHHUV4aJq.zTpFa', 1, 12, NULL, NULL, '2018-04-11 12:37:39'),
(7, 'sdsad', 'dfdf', 'sdsad', 'dfdf', '1234567890', 'ass@sd.com', NULL, NULL, NULL, NULL, '$2y$10$sXdJyxUV3ct5s7HAd0xp5uoXB5777Ut0/DKlRhv.rP8HTmFH/1PC2', 1, 12, NULL, NULL, '2018-04-11 12:37:40'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$fLQaCb8f0h.43Uqqyohu6uTAwhPIkTMMVdM.n9rdpLv.KpodTkH3W', 1, 12, NULL, NULL, '2018-04-11 12:41:45'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$ecmOJ4dg.u1Pvu6FN1I2bOtzC1g1tg0.QgcPy5iQe3mnRt3B7PN7y', 1, 12, NULL, NULL, '2018-04-11 12:46:23'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$D9mFrp4nU9O4qvmYQuZq9.fFDnDqmdlzEezAUzuMyd4Wwn.Q7cp.e', 1, 12, NULL, NULL, '2018-04-11 12:49:35'),
(11, 'sdsad', 'dfdf', 'sdsad', 'bvcvb', '1234567890', 'ass@sd.com', NULL, NULL, NULL, NULL, '$2y$10$ro.OJfDXfwK5XPYbeqd7HuZksjZlOpcnSN6qH2KFXq7I7VlZ1KjkO', 1, 12, NULL, NULL, '2018-04-11 12:57:10'),
(12, 'sdsad', 'sas', 'sdsad', 'bvcvb', '1234567890', 'ass@sd.com', NULL, NULL, NULL, NULL, '$2y$10$wODu85lmA/q9q7r8OwWP9ONkvV6zT6500gF4hN.lUXsBI3DdtSiXq', 1, 12, NULL, NULL, '2018-04-11 13:06:36'),
(13, 'sdsad', 'sas', 'sdsad', 'bvcvb', '1234567890', 'ass@sd.com', NULL, NULL, NULL, NULL, '$2y$10$1DiwomNO9icSvECbCBkPau6vtpbG3FMUvsYk3m2Zs5VOPsQItKklq', 1, 12, NULL, NULL, '2018-04-11 13:10:29'),
(14, 'sdsad', 'dfdf', 'sdsad', 'bvcvb', '1234567890', 'ass@sd.com', NULL, NULL, 'Jellyfish.jpg', 'Koala3.jpg', '$2y$10$fg.rwC2UCQH3SBAzqvzwQu8digSX/Iy8Vb1xlUuO1coc441wR4nAy', 1, 12, NULL, NULL, '2018-04-11 13:14:51'),
(15, 'sdsad', 'ghghj', 'sdsad', 'vcxvcv', '1234567890', 'ass@sd.com', NULL, NULL, 'Desert.jpg', 'Lighthouse2.jpg', '$2y$10$ET5gb6V.X284kWs19SCRxO9HWVcusvcmtXcsbjHpr3yd.dV3julvC', 1, 12, NULL, NULL, '2018-04-11 13:39:16'),
(16, 'sdsad', 'ghghj', 'sdsad', 'vcxvcv', '1234567890', 'ass@sd.com', NULL, NULL, 'Desert1.jpg', 'Lighthouse3.jpg', '$2y$10$nawlIB2ezlZvJL8bA3pP4u.4oPfw5QxeZO2Vpc1dmufjISAMTbxFu', 1, 12, NULL, NULL, '2018-04-11 13:39:29'),
(17, 'sdsad', 'ghghj', 'sdsad', 'vcxvcv', '1234567890', 'ass@sd.com', NULL, NULL, 'Desert2.jpg', 'Lighthouse4.jpg', '$2y$10$zvkHN3b2DH6gouaFHKwahe0EhWddPIwUr8ibP4Jco7SKXN8/e7NAW', 1, 12, NULL, NULL, '2018-04-11 13:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `user_email`
--

CREATE TABLE `user_email` (
  `usr_eml_id` int(11) NOT NULL,
  `usr_id` int(11) DEFAULT NULL,
  `usr_eml` varchar(20) DEFAULT NULL,
  `usr_emlstatus` int(11) DEFAULT NULL,
  `usr_emlcrtd_by` int(11) DEFAULT NULL,
  `usr_emlcrtd_on` datetime DEFAULT NULL,
  `usr_emlupdt_by` int(11) DEFAULT NULL,
  `usr_emlupdt_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_email`
--

INSERT INTO `user_email` (`usr_eml_id`, `usr_id`, `usr_eml`, `usr_emlstatus`, `usr_emlcrtd_by`, `usr_emlcrtd_on`, `usr_emlupdt_by`, `usr_emlupdt_on`) VALUES
(1, 12, 'test@test.com', NULL, NULL, NULL, NULL, '2018-04-11 13:06:36'),
(2, 13, 'test@test.com', NULL, NULL, NULL, NULL, '2018-04-11 13:10:29'),
(3, 13, 'test@gbk.com', NULL, NULL, NULL, NULL, '2018-04-11 13:10:29'),
(4, 15, 'test@test', NULL, NULL, NULL, NULL, '2018-04-11 13:39:16'),
(5, 16, 'test@test.com', NULL, NULL, NULL, NULL, '2018-04-11 13:39:29'),
(6, 17, 'test@test.com', NULL, NULL, NULL, NULL, '2018-04-11 13:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `user_mobile`
--

CREATE TABLE `user_mobile` (
  `usr_mbl_id` int(11) NOT NULL,
  `usr_id` int(11) DEFAULT NULL,
  `usr_mbl` varchar(20) DEFAULT NULL,
  `usr_mblstatus` int(11) DEFAULT NULL,
  `usr_mblcrtd_by` int(11) DEFAULT NULL,
  `usr_mblcrtd_on` datetime DEFAULT NULL,
  `usr_mblupdt_by` int(11) DEFAULT NULL,
  `usr_mblupdt_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_mobile`
--

INSERT INTO `user_mobile` (`usr_mbl_id`, `usr_id`, `usr_mbl`, `usr_mblstatus`, `usr_mblcrtd_by`, `usr_mblcrtd_on`, `usr_mblupdt_by`, `usr_mblupdt_on`) VALUES
(1, 12, '121212121212', NULL, NULL, NULL, NULL, '2018-04-11 13:06:36'),
(2, 13, '121212121212', NULL, NULL, NULL, NULL, '2018-04-11 13:10:29'),
(3, 13, '21121212121212121', NULL, NULL, NULL, NULL, '2018-04-11 13:10:29'),
(4, 15, '121212121212', NULL, NULL, NULL, NULL, '2018-04-11 13:39:16'),
(5, 16, '121212121212', NULL, NULL, NULL, NULL, '2018-04-11 13:39:29'),
(6, 17, '121212121212', NULL, NULL, NULL, NULL, '2018-04-11 13:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_transactions`
--

CREATE TABLE `user_transactions` (
  `usr_trans_id` int(11) NOT NULL,
  `usr_trans_type` int(11) DEFAULT NULL,
  `usr_trans_cmpname` varchar(20) DEFAULT NULL,
  `usr_trans_dept` varchar(20) DEFAULT NULL,
  `usr_trans_psrname` varchar(20) DEFAULT NULL,
  `usr_trans_remark` varchar(20) DEFAULT NULL,
  `usr_trans_title` varchar(20) DEFAULT NULL,
  `usr_trans_date` date DEFAULT NULL,
  `usr_trans_status` int(11) DEFAULT NULL,
  `usr_transcrtd_by` int(11) DEFAULT NULL,
  `usr_transcrtd_on` datetime DEFAULT NULL,
  `usr_transupdt_by` int(11) DEFAULT NULL,
  `usr_transupdt_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bsn_parameter`
--
ALTER TABLE `bsn_parameter`
  ADD PRIMARY KEY (`bsn_id`);

--
-- Indexes for table `tyfcb`
--
ALTER TABLE `tyfcb`
  ADD PRIMARY KEY (`tyfcb_id`),
  ADD KEY `usr_id` (`usr_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usr_id`);

--
-- Indexes for table `user_email`
--
ALTER TABLE `user_email`
  ADD PRIMARY KEY (`usr_eml_id`),
  ADD KEY `usr_id` (`usr_id`);

--
-- Indexes for table `user_mobile`
--
ALTER TABLE `user_mobile`
  ADD PRIMARY KEY (`usr_mbl_id`),
  ADD KEY `usr_id` (`usr_id`);

--
-- Indexes for table `user_transactions`
--
ALTER TABLE `user_transactions`
  ADD PRIMARY KEY (`usr_trans_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tyfcb`
--
ALTER TABLE `tyfcb`
  MODIFY `tyfcb_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_email`
--
ALTER TABLE `user_email`
  MODIFY `usr_eml_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_mobile`
--
ALTER TABLE `user_mobile`
  MODIFY `usr_mbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_transactions`
--
ALTER TABLE `user_transactions`
  MODIFY `usr_trans_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tyfcb`
--
ALTER TABLE `tyfcb`
  ADD CONSTRAINT `tyfcb_ibfk_1` FOREIGN KEY (`usr_id`) REFERENCES `users` (`usr_id`);

--
-- Constraints for table `user_email`
--
ALTER TABLE `user_email`
  ADD CONSTRAINT `user_email_ibfk_1` FOREIGN KEY (`usr_id`) REFERENCES `users` (`usr_id`);

--
-- Constraints for table `user_mobile`
--
ALTER TABLE `user_mobile`
  ADD CONSTRAINT `user_mobile_ibfk_1` FOREIGN KEY (`usr_id`) REFERENCES `users` (`usr_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
