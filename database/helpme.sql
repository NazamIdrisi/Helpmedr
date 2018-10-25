-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 08:36 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpme`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `UserID` int(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `dr_id` int(222) NOT NULL,
  `dr_name` varchar(222) NOT NULL,
  `dr_mobile` varchar(221) NOT NULL,
  `dr_specialities` varchar(222) NOT NULL,
  `dr_email` varchar(222) NOT NULL,
  `dr_add` varchar(222) NOT NULL,
  `img` varchar(222) NOT NULL,
  `dr_languages` varchar(222) NOT NULL,
  `dr_expertise` varchar(222) NOT NULL,
  `dr_about` varchar(222) NOT NULL,
  `dr_education` varchar(255) NOT NULL,
  `dr_achievements` varchar(255) NOT NULL,
  `dr_practice` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`dr_id`, `dr_name`, `dr_mobile`, `dr_specialities`, `dr_email`, `dr_add`, `img`, `dr_languages`, `dr_expertise`, `dr_about`, `dr_education`, `dr_achievements`, `dr_practice`, `pass`) VALUES
(1, 'raj', '1234567890', 'heart', 'aaa@gmail.com', 'djjs', 'iphone-8-plus-red-product.jpg', 'english', '1998-03-08', '6', 'ssaa', 'svas', '123', 'svsav'),
(2, 'mphit', '123456789', 'brain', 'm@gmail.com', 'lucknow', 'oppo-f9-pro-cph1823-original-imaf8aygs539hu2q.jpeg', 'English', '14', 'about', '', 'md.bd', '123', 'scdvnav'),
(4, 'name', 'mobile', 'Specialities', 'email@gmail.com', 'address', 'iPhone-7-wallpaper-splash-2.jpg', 'language', '4', 'about', '2008-09-29', 'Achievements', 'practice', 'passwprd'),
(5, 'mohit', '123456789', 'bons', 'mohit@gmail.com', 'lucknow india', 's-mens-ss18-rn-fs-checked-tshirt-navy-maniac-original-imaf2r9whsgg7bxg.jpeg', 'english', '8', 'aboutt', '2008-03-25', 'MD', 'asavfna akdfna aknvfak akvna anvak aknvawkv krnakvn kankavn kankvak kahiahrv akhaksvh ', '123');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `Product_Id` int(255) NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Aditional_Details` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`Product_Id`, `Product_Name`, `Description`, `Aditional_Details`, `Image`, `user_name`, `user_password`) VALUES
(1, 'main', 'askn a', 'asaasn ', 'p.jpg', 'a', '123'),
(2, 'afgnm', 'sdfghj', 'adfgh', 'xiaomi-pocophone-f1-na-original-imaf8afgrdbqtsta.jpeg', 'b', '123'),
(4, 'asksn', 'ksnas', 'ksanas', 'm-tbljok-gyhangvnfuld2-tripr-original-imaezrefxvhzwshs.jpeg', 'a', '123');

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE `health` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`id`, `name`, `mobile`, `email`, `msg`) VALUES
(1, 'asif', '123456', 'a@gmail.com', 'skvndkfnak'),
(2, 'Enter Name', 'Enter Mobile', 'n', 'Enter Message'),
(3, 'Enter Name', 'Enter Mobile', 'a@gmail.com', 'Enter Message'),
(4, 'Enter Name', 'Enter Mobile', 'as@gmail.com', 'Enter Message');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `muser_name` varchar(255) NOT NULL,
  `m_quantity` varchar(255) NOT NULL,
  `m_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `m_name`, `muser_name`, `m_quantity`, `m_desc`) VALUES
(1, 'relief', 'aa', '4', 'lassvav'),
(2, 'asif', '123456789', 'a@gmail.com', 'knavakvh akvhaviawh avhawkv');

-- --------------------------------------------------------

--
-- Table structure for table `pathology`
--

CREATE TABLE `pathology` (
  `Pathology_Id` int(255) NOT NULL,
  `Pathology_Name` varchar(255) NOT NULL,
  `Pathology_Address` varchar(255) NOT NULL,
  `Pathology_Mobile` varchar(255) NOT NULL,
  `Pathology_Email` varchar(255) NOT NULL,
  `Pathology_Description` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `User_Name` varchar(255) NOT NULL,
  `User_Password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pathology`
--

INSERT INTO `pathology` (`Pathology_Id`, `Pathology_Name`, `Pathology_Address`, `Pathology_Mobile`, `Pathology_Email`, `Pathology_Description`, `Image`, `User_Name`, `User_Password`, `type`) VALUES
(3, 'aaa', 'askdvja kavadb avkjaeb', '123456789', 'aa@gmail.com', 'askvnadkan', 'eos-200d-eos-200d-canon-original-imaezhnkrgvstcpt.jpeg', 'a', '123', 'health'),
(4, 'd kn savaksmnav', 'avnasknad', '6461316431', 'a@gmail.com', 'sfakvna', 'canon-eos-1300d-dslr-original-imaeh33eyhy9gcgm.jpeg', 'a', '123', 'child'),
(5, 'health', 'saknvav', '658431212', 'a@gmail.com', 'afskndkan', 'l-mens-ss18-rn-fs-checked-tshirt-white-maniac-original-imaf32dgcmdwvurz.jpeg', 'a', '123', 'Health');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Doctor_id` int(255) NOT NULL,
  `Doctor_name` varchar(255) NOT NULL,
  `Specialities` varchar(255) NOT NULL,
  `Languages` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Expertise` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `Education` varchar(255) NOT NULL,
  `Doctor_password` varchar(255) NOT NULL,
  `Achievements` varchar(255) NOT NULL,
  `Practice Information` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `dr_email` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `Password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin@gmail.com', 'admin'),
(3, 'b@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`dr_id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`Product_Id`);

--
-- Indexes for table `health`
--
ALTER TABLE `health`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pathology`
--
ALTER TABLE `pathology`
  ADD PRIMARY KEY (`Pathology_Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Doctor_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `UserID` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `dr_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `Product_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `health`
--
ALTER TABLE `health`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pathology`
--
ALTER TABLE `pathology`
  MODIFY `Pathology_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Doctor_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
