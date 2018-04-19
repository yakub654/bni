-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2018 at 05:31 PM
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
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `ref_id` int(11) NOT NULL,
  `ref_usr_id` int(11) DEFAULT NULL,
  `ref_name` varchar(20) DEFAULT NULL,
  `ref_email` varchar(20) DEFAULT NULL,
  `ref_mobile` varchar(25) DEFAULT NULL,
  `ref_remark` varchar(20) DEFAULT NULL,
  `ref_date` date DEFAULT NULL,
  `ref_status` int(11) DEFAULT NULL,
  `ref_crtd_by` int(11) DEFAULT NULL,
  `ref_crtd_on` datetime DEFAULT NULL,
  `ref_updt_by` int(11) DEFAULT NULL,
  `ref_updt_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`ref_id`, `ref_usr_id`, `ref_name`, `ref_email`, `ref_mobile`, `ref_remark`, `ref_date`, `ref_status`, `ref_crtd_by`, `ref_crtd_on`, `ref_updt_by`, `ref_updt_on`) VALUES
(1, NULL, 'sds', 'ykhan707@gmail.edu', '8655890305', 'sdsdsd', '2018-04-26', 1, NULL, '2018-04-17 13:31:12', NULL, '2018-04-17 08:01:12'),
(2, NULL, 'sds', 'ykhan707@gmail.edu', '8655890305', 'sdsdsd', '2018-04-26', 1, 21, '2018-04-17 13:32:03', NULL, '2018-04-17 08:02:03'),
(3, NULL, 'fdfd', 'ykhan707@gmail.edu', '8655890305', 'dffds', '2018-04-04', 1, 21, '2018-04-17 13:32:41', NULL, '2018-04-17 08:02:41'),
(4, NULL, 'fdfdf', 'ykhan707@gmail.com', '8655890305', 'gfhgfh', '2018-04-19', 1, 21, '2018-04-17 13:49:47', NULL, '2018-04-17 08:19:47'),
(5, 34, 'Stanley', 'ykhan707@gmail.com', '8655890305', 'bfghfghfg', '2018-01-10', 0, 21, '2018-04-17 13:50:46', NULL, '2018-04-18 05:50:45'),
(6, 34, 'Stanley', 'ykhan707@gmail.com', '8655890305', 'bfghfghfg', '2018-01-10', 0, 21, '2018-04-17 14:18:22', NULL, '2018-04-18 05:50:45'),
(7, 7, 'test', 'ass@sd.com', '4544544544', 'fddfdfv', '2018-04-25', 1, 21, '2018-04-17 15:25:12', NULL, '2018-04-17 09:55:12'),
(8, 34, 'Stanley', 'ykhan707@gmail.com', '8655890305', 'bfghfghfg', '2018-01-10', 1, 21, '2018-04-17 16:20:48', NULL, '2018-04-18 05:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `tyfcb`
--

CREATE TABLE `tyfcb` (
  `tyfcb_id` int(11) NOT NULL,
  `tyfcb_date` date DEFAULT NULL,
  `tyfcb_amt` varchar(20) DEFAULT NULL,
  `tyfcb_remark` varchar(50) DEFAULT NULL,
  `tyfusr_id` int(11) DEFAULT NULL,
  `tyfstatus` int(11) DEFAULT NULL,
  `tyfcrtd_by` int(11) DEFAULT NULL,
  `tyfcrtd_on` datetime DEFAULT NULL,
  `tyfupdt_by` int(11) DEFAULT NULL,
  `tyfupdt_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tyfcb`
--

INSERT INTO `tyfcb` (`tyfcb_id`, `tyfcb_date`, `tyfcb_amt`, `tyfcb_remark`, `tyfusr_id`, `tyfstatus`, `tyfcrtd_by`, `tyfcrtd_on`, `tyfupdt_by`, `tyfupdt_on`) VALUES
(1, '2018-04-16', '789456', 'fddfdfv', 34, 0, 21, '0000-00-00 00:00:00', NULL, '2018-04-16 12:58:40'),
(2, '2018-04-16', '1454545458', 'fddfdfv', 32, 0, 21, '2018-04-14 17:42:04', NULL, '2018-04-16 12:49:20'),
(3, '2018-04-16', '458000155', 'fddfdfv', 3, 0, 34, '2018-04-14 18:07:49', NULL, '2018-04-16 12:48:10'),
(4, '2018-04-16', '789456', 'fddfdfv', 34, 0, 21, '2018-04-16 14:03:54', NULL, '2018-04-16 12:58:40'),
(5, '2018-04-16', '12456', 'test', 4, 0, 21, '2018-04-16 16:38:58', NULL, '2018-04-16 12:49:04'),
(6, '2018-04-16', '78457845', 'asasasas', 31, 0, 21, '2018-04-16 17:28:22', NULL, '2018-04-16 12:48:17'),
(7, '2017-08-06', '1221212', 'aaaaaaaaaaa', 34, 0, 21, '2018-04-16 18:04:31', NULL, '2018-04-16 12:49:08'),
(8, '2018-04-24', '1000', 'fddfdfv', 4, 1, 21, '2018-04-17 14:38:31', NULL, '2018-04-17 09:08:31'),
(9, '2018-04-25', '458000', 'asasasas', 34, 1, 21, '2018-04-17 15:23:24', NULL, '2018-04-17 09:53:24'),
(10, '2018-04-24', '45555', 'test', 7, 1, 21, '2018-04-17 15:24:18', NULL, '2018-04-17 09:54:18');

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
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$HSY5v1u/rjhDGLsr5ZBfC.NaKoK6l2D5pwzv0.RUruuq1i4XXl/cO', 0, 0, NULL, NULL, '2018-04-17 05:28:04'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$SPfsHRALKlfR/aTPFUSQj.Os6Uzbr8acbNzNiEWq5SEhsUbXEEzBK', 0, 0, NULL, NULL, '2018-04-17 05:28:06'),
(3, 'sdsad', 'sas', 'sdsad', 'bvcvb', '1234567890', 'ass@sd.com', NULL, NULL, NULL, NULL, '$2y$10$hBQ1Lm0hIB3OTXARZehW6OrSwkJzDxH49WsErh9hhHKjrWlkSzDiO', 1, 0, NULL, NULL, '2018-04-11 12:25:55'),
(4, 'sdsad', 'sas', 'sdsad', 'bvcvb', '1234567890', 'ass@sd.com', NULL, NULL, NULL, NULL, '$2y$10$i5XXkCekNtJ9XyLifonWgeqbAjP73R94r34.PZm7QtOi3piMJlCrq', 0, 0, NULL, NULL, '2018-04-17 12:20:13'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$1IG2xBZKwg61cHknnRA1xuFC4NyBT7tJ2.YSaO6MfmG4BIATcJShG', 0, 12, NULL, NULL, '2018-04-17 05:28:09'),
(6, 'sdsad', 'dfdf', 'sdsad', 'dfdf', '1234567890', 'ass@sd.com', NULL, NULL, NULL, NULL, '$2y$10$djEVBZAnkrimJs3kYNeKleh83xxdyO2eIh7LpDtHHUV4aJq.zTpFa', 1, 12, NULL, NULL, '2018-04-11 12:37:39'),
(7, 'sdsad', 'dfdf', 'sdsad', 'dfdf', '1234567890', 'ass@sd.com', NULL, NULL, NULL, NULL, '$2y$10$sXdJyxUV3ct5s7HAd0xp5uoXB5777Ut0/DKlRhv.rP8HTmFH/1PC2', 0, 12, NULL, NULL, '2018-04-17 12:20:16'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$fLQaCb8f0h.43Uqqyohu6uTAwhPIkTMMVdM.n9rdpLv.KpodTkH3W', 0, 12, NULL, NULL, '2018-04-17 05:28:11'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$ecmOJ4dg.u1Pvu6FN1I2bOtzC1g1tg0.QgcPy5iQe3mnRt3B7PN7y', 0, 12, NULL, NULL, '2018-04-17 05:28:13'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$D9mFrp4nU9O4qvmYQuZq9.fFDnDqmdlzEezAUzuMyd4Wwn.Q7cp.e', 0, 12, NULL, NULL, '2018-04-17 05:28:15'),
(11, 'sdsad', 'dfdf', 'sdsad', 'bvcvb', '1234567890', 'ass@sd.com', NULL, NULL, NULL, NULL, '$2y$10$ro.OJfDXfwK5XPYbeqd7HuZksjZlOpcnSN6qH2KFXq7I7VlZ1KjkO', 1, 12, NULL, NULL, '2018-04-11 12:57:10'),
(12, 'sdsad', 'sas', 'sdsad', 'bvcvb', '1234567890', 'ass@sd.com', NULL, NULL, NULL, NULL, '$2y$10$wODu85lmA/q9q7r8OwWP9ONkvV6zT6500gF4hN.lUXsBI3DdtSiXq', 1, 12, NULL, NULL, '2018-04-11 13:06:36'),
(13, 'sdsad', 'sas', 'sdsad', 'bvcvb', '1234567890', 'ass@sd.com', NULL, NULL, NULL, NULL, '$2y$10$1DiwomNO9icSvECbCBkPau6vtpbG3FMUvsYk3m2Zs5VOPsQItKklq', 1, 12, NULL, NULL, '2018-04-11 13:10:29'),
(14, 'sdsad', 'dfdf', 'sdsad', 'bvcvb', '1234567890', 'ass@sd.com', NULL, NULL, 'Jellyfish.jpg', 'Koala3.jpg', '$2y$10$fg.rwC2UCQH3SBAzqvzwQu8digSX/Iy8Vb1xlUuO1coc441wR4nAy', 1, 12, NULL, NULL, '2018-04-11 13:14:51'),
(15, 'sdsad', 'ghghj', 'sdsad', 'vcxvcv', '1234567890', 'ass@sd.com', NULL, NULL, 'Desert.jpg', 'Lighthouse2.jpg', '$2y$10$ET5gb6V.X284kWs19SCRxO9HWVcusvcmtXcsbjHpr3yd.dV3julvC', 1, 12, NULL, NULL, '2018-04-11 13:39:16'),
(16, 'sdsad', 'ghghj', 'sdsad', 'vcxvcv', '1234567890', 'ass@sd.com', NULL, NULL, 'Desert1.jpg', 'Lighthouse3.jpg', '$2y$10$nawlIB2ezlZvJL8bA3pP4u.4oPfw5QxeZO2Vpc1dmufjISAMTbxFu', 1, 12, NULL, NULL, '2018-04-11 13:39:29'),
(17, 'sdsad', 'ghghj', 'sdsad', 'vcxvcv', '1234567890', 'ass@sd.com', NULL, NULL, 'Desert2.jpg', 'Lighthouse4.jpg', '$2y$10$zvkHN3b2DH6gouaFHKwahe0EhWddPIwUr8ibP4Jco7SKXN8/e7NAW', 1, 12, NULL, NULL, '2018-04-11 13:40:20'),
(18, 'sdsad', 'cdf', 'sdsad', 'dfdf', '9869509707', 'test@test.com', '', '', NULL, NULL, '$2y$10$m9ki6bxZzz8rxLRvujToh.C74Pq9yLreqj/E/oo485SksR5XUi6ee', 1, 12, NULL, NULL, '2018-04-12 06:09:49'),
(19, 'sdsad', 'ghghj', 'sdsad', 'bvcvb', '1234567890', 'test1@test.com', '', '', '', '', '$2y$10$3R8EvAWwFSr2l/K3qr2wFuUrIWKaElqq7zaK7vb1S0ZvJkDedZCRa', 1, 12, NULL, NULL, '2018-04-12 06:16:35'),
(20, 'sdsad', 'ghghj', 'sdsad', 'bvcvb', '1234567890', 'test2@test2.com', '', '', '', '', '$2y$10$0KrZV8c/rGtCQazC2NBKMO/HAVr2jBORoIu7WLB9A8pNmNc7q0gRO', 1, 12, NULL, NULL, '2018-04-12 06:27:01'),
(21, 'yakub Khan', 'Nextasy Pvt Ltd', 'yakub Khan', 'fdgdfggdfgfdgfdg', '8655890305', 'ykhan707@gmail.com', 'http://yakub.khan', 'It is a long established', 'Penguins.jpg', 'Koala4.jpg', '$2y$10$hQvJCaXRbSlfHpPbrOGOG.ZiQK4ufdFSE2w1zgndUIBmkV/P3NXru', 1, 12, NULL, NULL, '2018-04-12 10:15:34'),
(22, 'yakub khan', 'nextasy Pvt Ltd', 'yakub khan', 'bvcvb', '8655890305', 'yak.khan@hotmail.com', '', 'asasasassasasasasasasassasasasasaasasas', '', '', '$2y$10$bHhSqHTtU7MWkfAKu/gEauQBiqtabpg5hVV3sYKopBGyVMY/nLbLi', 1, 12, NULL, NULL, '2018-04-19 14:54:42'),
(23, 'saqib', 'syracuse', 'saqib', 'fddfdf', '1234567890', 'saqib707@gmail.com', '', 'sdsdsdsds,\r\nsdsddsdsdsn,\r\nggfhgfghh,', '', '', '$2y$10$iYchpyj6N2l2ZEpUwtwIcu2DZfdyUd40M/F9QqAXt5kgrb.98rp5i', 1, 12, NULL, NULL, '2018-04-12 12:30:12'),
(24, 'test3', 'sas', 'test3', 'bvcvbd', '12345678901', 'ykhan707@gmail.in', '', 'saasdsdsad', '', '', '$2y$10$X1gH0gVqMmViHQuQ17cPrup2T.mzeND4oLLq/n8ws.nGHyf5oyPgW', 1, NULL, NULL, NULL, '2018-04-12 13:04:18'),
(25, 'test3', 'sas', 'test3', 'bvcvb', '1234567890', 'test4@test.com', '', '', '', '', '$2y$10$hKdll.6T16tr804fYyaRq.hm1uNA6a0r.LIdqIYaqeVHAHD6X35qi', 1, 0, NULL, NULL, '2018-04-12 13:07:14'),
(26, 'sdsad', 'sas', 'sdsad', 'asa', '1234567890', 'ykhan707@gmail.co', '', 'asassas', '', '', '$2y$10$VJqE2vfqdMYcSlbO1SzcCeNjsZY96mE.jVaXKxUgJXfVsVg8k9cW2', 1, 0, NULL, NULL, '2018-04-12 13:14:18'),
(27, 'sdsad', 'sdffd', 'sdsad', 'dsds', '1234567890', 'ykhan707@gmail.org', '', 'dsddsd', '', '', '$2y$10$htvoakH44EK7aJKjYWGXWOGtIc3JOP1J.YVIiL4LU6EzO9OyLHiPe', 1, 0, NULL, NULL, '2018-04-12 13:15:59'),
(28, 'sdsad', 'ghghj', 'sdsad', 'bvcvb', '1234567890', 'ykhan707@gmail.edu', '', 'asasasasss,\r\nasasasasas,\r\nasasasasas', '', '', '$2y$10$S3UNakbUC7Idw4kWGlMiAenUxYHcBpfW3STul6/8O21TH3cw8Ig3u', 1, 24, NULL, NULL, '2018-04-12 13:24:34'),
(29, 'sdsad', 'sas', 'sdsad', 's', '1234567890', 'ykhan707@gmail.comm', '', 'ddssd', '', '', '$2y$10$F83W3MMX1IdZYA7xXUz4jOHy7yE8B1NOwp0nSyBMZNaVKLqNxYxiu', 1, 21, '0000-00-00 00:00:00', NULL, '2018-04-12 13:41:55'),
(30, 'sxd', '12121', 'sxd', 's', '1234567890', 'ykhan707@gmail.ind', '', '', '1', '1', '$2y$10$QHgChEI2/93EVfzOCLDbDeSZD9m4SdVU5tOwCHEt/UKnWg0yZlwGC', 1, 1, NULL, NULL, '2018-04-12 13:54:38'),
(31, 'sxd', '12121', 'sxd', 's', '1234567890', 'ykhan707@gmail.ind', '', '', '1', '1', '$2y$10$bt6RaJE2IEZkgE.zdmAhD.Q9Y.iHBDR9fgiNWrZITy9.XM1etsQ06', 1, 1, NULL, NULL, '2018-04-12 13:54:43'),
(32, 'sxd', '12121', 'sxd', 's', '1234567890', 'ykhan707@gmail.ind', '', '', '', '', '$2y$10$p28ELug2qvAjkRw.x3F3We3jJnWoWHVTrFT//LnSxvv7kpNJvDPJi', 1, 21, '0000-00-00 00:00:00', NULL, '2018-04-12 13:56:06'),
(33, 'test', '12121', 'test', 'dfdf', '1234567890', 'test@test3.com', '', 'dgdgfdg', '', '', '$2y$10$EdGECB4K8ft6657PNrOtL.rxo0uvJ7eq7LA.j62foEWLc8q1P/Hra', 1, 21, '2018-12-04 19:30:27', NULL, '2018-04-12 14:00:27'),
(34, 'Halim Khatri', 'Nextasy', 'Halim Khatri', 'Made In India', '9869509707', 'halim.khatri@gmail.com', '', 'sdgfkddf\r\nfdgfgllfgnlfghjfgh,\r\nrfhsdfhgdjfgfgfdg', '', 'Penguins.jpg', '$2y$10$WlvwIRZgbegHF76cEPBZc.7lUJ5QW.OTyCN1fRwa/K6FHxi9zVivK', 1, 22, '0000-00-00 00:00:00', NULL, '2018-04-14 06:43:59');

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
-- Dumping data for table `user_transactions`
--

INSERT INTO `user_transactions` (`usr_trans_id`, `usr_trans_type`, `usr_trans_cmpname`, `usr_trans_dept`, `usr_trans_psrname`, `usr_trans_remark`, `usr_trans_title`, `usr_trans_date`, `usr_trans_status`, `usr_transcrtd_by`, `usr_transcrtd_on`, `usr_transupdt_by`, `usr_transupdt_on`) VALUES
(1, NULL, 'Company name', 'Department name', 'Name ', 'Remark', 'give done', '2018-04-24', 1, 21, '2018-04-18 10:23:33', 21, '2018-04-18 11:06:15'),
(2, NULL, 'Company name', 'Department name', 'Name ', 'Remark', 'give done', '2018-04-24', 1, 21, '2018-04-18 10:26:26', 21, '2018-04-18 11:06:15'),
(3, NULL, 'Company name', 'Department name', 'Name ', 'Remark', 'give done', '2018-04-24', 1, 21, '2018-04-18 10:28:16', 21, '2018-04-18 11:06:15'),
(4, 1, 'rtrtrt', 'trtrt', 'trtrt', 'trtrt', 'tr', '2018-04-03', 0, 21, '2018-04-18 10:35:19', 21, '2018-04-18 11:20:02'),
(5, 2, 'Company name', 'Department name', 'Name edited', 'Remark', 'give edited', '2018-04-26', 0, 21, '2018-04-18 11:39:08', 21, '2018-04-18 11:20:29'),
(6, 1, 'test', 'test', 'test', 'test', 'test', '2018-04-17', 0, 21, '2018-04-18 13:31:42', NULL, '2018-04-18 11:40:15'),
(7, 2, 'give', 'give', 'give', 'give', 'give', '2018-04-11', 0, 21, '2018-04-18 13:32:07', NULL, '2018-04-18 11:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `usr_forget_password`
--

CREATE TABLE `usr_forget_password` (
  `usr_fgp_id` int(11) NOT NULL,
  `usr_fgpref_id` int(11) DEFAULT NULL,
  `usr_fgpref_value` varchar(40) DEFAULT NULL,
  `usr_fgp_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr_forget_password`
--

INSERT INTO `usr_forget_password` (`usr_fgp_id`, `usr_fgpref_id`, `usr_fgpref_value`, `usr_fgp_time`) VALUES
(1, 22, 'CrcQVAIJLpoxult', '2018-04-19 07:27:22'),
(2, 22, 'h0NkJoBiUZunvsq', '2018-04-19 07:29:11'),
(3, 22, 'kYPzpRO5MiVf0Jr', '2018-04-19 08:00:12'),
(4, 22, 'X5ZytbMPGCzkqE4', '2018-04-19 08:01:36'),
(5, 22, 'rY1Z37GTdJQCFPE', '2018-04-19 08:03:20'),
(6, 22, '3jPpBmeYx9cgU8J', '2018-04-19 08:04:58'),
(7, 22, 'rbeBqL0XGfxtZVT', '2018-04-19 08:05:53'),
(8, 22, 'lFMTXZqzxIs5Sgn', '2018-04-19 08:06:29'),
(9, 22, '0pJX6PoOmlwsHvt', '2018-04-19 08:13:46'),
(10, 22, 'YjWvhsdqyP6uGLp', '2018-04-19 08:14:55'),
(11, 22, 'Mf57XDVc0TJkzBj', '2018-04-19 09:39:13'),
(12, 22, 'aLoIJqPABVbfxeC', '2018-04-19 09:53:51'),
(13, 22, '13srhYEWPA0pf9o', '2018-04-19 10:15:22'),
(14, 22, 'd46P3V5BgFpDsni', '2018-04-19 10:21:20'),
(15, 22, 'LqCWGknDcjtEgHP', '2018-04-19 11:13:22'),
(16, 22, 'NYMy8b92wJ54iZp', '2018-04-19 12:17:31'),
(17, 22, '4F7uRosCjXJafS2', '2018-04-19 12:29:46'),
(18, 22, 'prigH35coDwMNPl', '2018-04-19 12:36:58'),
(19, 22, 'h2p8zZ5mGfvYAF3', '2018-04-19 13:29:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bsn_parameter`
--
ALTER TABLE `bsn_parameter`
  ADD PRIMARY KEY (`bsn_id`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`ref_id`),
  ADD KEY `ref_usr_id` (`ref_usr_id`);

--
-- Indexes for table `tyfcb`
--
ALTER TABLE `tyfcb`
  ADD PRIMARY KEY (`tyfcb_id`),
  ADD KEY `usr_id` (`tyfusr_id`);

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
-- Indexes for table `usr_forget_password`
--
ALTER TABLE `usr_forget_password`
  ADD PRIMARY KEY (`usr_fgp_id`),
  ADD KEY `usr_fgpref_id` (`usr_fgpref_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `ref_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tyfcb`
--
ALTER TABLE `tyfcb`
  MODIFY `tyfcb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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
  MODIFY `usr_trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usr_forget_password`
--
ALTER TABLE `usr_forget_password`
  MODIFY `usr_fgp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reference`
--
ALTER TABLE `reference`
  ADD CONSTRAINT `reference_ibfk_1` FOREIGN KEY (`ref_usr_id`) REFERENCES `users` (`usr_id`);

--
-- Constraints for table `tyfcb`
--
ALTER TABLE `tyfcb`
  ADD CONSTRAINT `tyfcb_ibfk_1` FOREIGN KEY (`tyfusr_id`) REFERENCES `users` (`usr_id`);

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

--
-- Constraints for table `usr_forget_password`
--
ALTER TABLE `usr_forget_password`
  ADD CONSTRAINT `usr_forget_password_ibfk_1` FOREIGN KEY (`usr_fgpref_id`) REFERENCES `users` (`usr_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
