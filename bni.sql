-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 04:08 PM
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
  `bsn_value` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tyfcb`
--

CREATE TABLE `tyfcb` (
  `tyfcb_id` int(11) NOT NULL,
  `tyfcb_date` datetime DEFAULT NULL,
  `tyfcb_amt` varchar(20) DEFAULT NULL,
  `tyfcb_remark` varchar(50) DEFAULT NULL,
  `usr_id` int(11) DEFAULT NULL,
  `usr_status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usr_id` int(11) NOT NULL,
  `usr_name` varchar(50) DEFAULT NULL,
  `usr_company_name` varchar(50) DEFAULT NULL,
  `usr_category` varchar(50) DEFAULT NULL,
  `usr_tagline` varchar(50) DEFAULT NULL,
  `usr_mobile` varchar(30) DEFAULT NULL,
  `usr_email` varchar(50) DEFAULT NULL,
  `usr_website` varchar(50) DEFAULT NULL,
  `usr_address` varchar(50) DEFAULT NULL,
  `usr_logo` varchar(20) DEFAULT NULL,
  `usr_profile_pic` varchar(20) DEFAULT NULL,
  `usr_password` varchar(100) DEFAULT NULL,
  `usr_status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_email`
--

CREATE TABLE `user_email` (
  `eml_id` int(11) NOT NULL,
  `eml_user` varchar(50) DEFAULT NULL,
  `usr_id` int(11) DEFAULT NULL,
  `usr_status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_mobile`
--

CREATE TABLE `user_mobile` (
  `mbl_id` int(11) NOT NULL,
  `mbl_user` varchar(30) DEFAULT NULL,
  `usr_id` int(11) DEFAULT NULL,
  `usr_status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `usr_trans_date` datetime DEFAULT NULL
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
  ADD PRIMARY KEY (`eml_id`),
  ADD KEY `usr_id` (`usr_id`);

--
-- Indexes for table `user_mobile`
--
ALTER TABLE `user_mobile`
  ADD PRIMARY KEY (`mbl_id`),
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
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_email`
--
ALTER TABLE `user_email`
  MODIFY `eml_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_mobile`
--
ALTER TABLE `user_mobile`
  MODIFY `mbl_id` int(11) NOT NULL AUTO_INCREMENT;

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
