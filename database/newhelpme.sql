-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2018 at 02:22 PM
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
-- Table structure for table `bookappointment`
--

CREATE TABLE `bookappointment` (
  `id` int(255) NOT NULL,
  `doc_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `patient_phone` varchar(255) NOT NULL,
  `gendr` varchar(255) NOT NULL,
  `patient_dob` varchar(255) NOT NULL,
  `patient_address` varchar(255) NOT NULL,
  `patient_date` varchar(255) NOT NULL,
  `patient_time` varchar(255) NOT NULL,
  `yy` varchar(255) NOT NULL,
  `patient_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookappointment`
--

INSERT INTO `bookappointment` (`id`, `doc_id`, `user_id`, `doc_name`, `patient_name`, `patient_email`, `patient_phone`, `gendr`, `patient_dob`, `patient_address`, `patient_date`, `patient_time`, `yy`, `patient_desc`) VALUES
(1, 0, 0, '', 'Patient name', 'n@gmail.com', '1234567890', 'Male', '1980-11-02', 'Address', '2018-11-11', '12:57', 'No', 'ih'),
(2, 0, 0, '', '', '', '', '', '', '', '', '', '', ''),
(3, 0, 0, '', 'kklbkb', 'k@gmail.com', '', 'Male', '1997-08-25', 'ml', '2015-01-30', '22:57', 'Yes', 'khbn'),
(4, 0, 0, '', 'kklbkb', 'k@gmail.com', '', 'Male', '1997-08-25', 'ml', '2015-01-30', '22:57', 'Yes', 'khbn'),
(5, 0, 0, '', '', '', '', '', '', '', '', '', '', ''),
(6, 0, 0, '', '', '', '', '', '', '', '', '', '', ''),
(7, 0, 0, '', 'jsdba', 'k@gmail.com', '145678965432', 'Male', '1993-09-28', 'sfbjdkbdlf', '2018-11-26', '20:52', 'Yes', 'lbbsjs;sae;;kbnrb'),
(8, 0, 0, '', 'pp', 'k@gmail.com', '65435424', 'Female', '1994-11-29', 'qeveb', '2018-10-30', '22:58', 'No', 'sdfkfbnadkbnad'),
(9, 0, 0, '', 'dlsdn', 'k@gnail.com', 'abfanb', 'Other', '2018-10-29', 'wq', '1995-11-30', '23:57', 'Yes', 'aabab'),
(10, 0, 0, '', '', '', '', '', '', '', '', '', '', ''),
(11, 0, 0, '', 'Patient name', 'k@gmail.com', 'knblb', 'Female', '1998-11-29', 'wdkvn', '2018-01-29', '22:59', 'Yes', 'dvkavna'),
(12, 0, 0, '', 'Patient name', 'k@gmail.com', 'knblb', 'Female', '1998-11-29', 'wdkvn', '2018-01-29', '22:59', 'Yes', 'dvkavna'),
(13, 0, 0, '', 'Patient name', 'k@gmail.com', 'knblb', 'Female', '1998-11-29', 'wdkvn', '2018-01-29', '22:59', 'Yes', 'dvkavna'),
(14, 1111, 0, 'doctor', 'dfb', 'k@gmail.com', 'fknka', 'Male', '1995-10-29', 'wdea', '2018-11-30', '12:58', 'Yes', 'svkasnb'),
(15, 0, 0, '', '', '', '', '', '', '', '', '', '', ''),
(16, 1111, 0, 'doctor', 'kvbs', 'k@gmail.com', 'fkanb', 'Male', '1993-10-29', 'qwvnb', '2018-10-30', '22:56', 'Yes', 'dfbda'),
(17, 1111, 0, 'doctor', 'kvbs', 'k@gmail.com', 'fkanb', 'Male', '1993-10-29', 'qwvnb', '2018-10-30', '22:56', 'Yes', 'dfbda'),
(18, 1111, 0, 'doctor', 'bs', 's@gmail.com', 'skbsn', 'Male', '1997-12-31', 'ee,b', '2018-11-30', '23:57', 'Yes', 'sbsn'),
(19, 1111, 0, 'doctor', 'Patient name', '', '', '', '', 'Address', '', '', '', 'Short Description'),
(20, 1111, 0, 'doctor', 'Patient name', '', '', '', '', 'Address', '', '', '', 'Short Description'),
(21, 0, 0, '', 'akan', 'kna@gmail.com', '5412', 'Male', '1997-10-29', 'qwcwv', '2018-11-28', '22:57', 'Yes', 'kbljjb'),
(22, 0, 0, '', 'akan', 'kna@gmail.com', '5412', 'Male', '1997-10-29', 'qwcwv', '2018-11-28', '22:57', 'Yes', 'kbljjb'),
(23, 0, 0, '', 'akan', 'kna@gmail.com', '5412', 'Male', '1997-10-29', 'qwcwv', '2018-11-28', '22:57', 'Yes', 'kbljjb'),
(24, 4, 0, '', 'akan', 'kna@gmail.com', '5412', 'Male', '1997-10-29', 'qwcwv', '2018-11-28', '22:57', 'Yes', 'kbljjb'),
(25, 4, 0, '', 'Patient name', '', '', '', '', 'Address', '', '', '', 'Short Description'),
(26, 4, 0, '', 'Patient name', '', '', 'Male', '', 'Address', '', '', 'Yes', 'Short Description'),
(27, 4, 0, 'name', 'Patient name', 'k@gmail.com', 'wjhbqw', 'Male', '1998-11-27', 'rthwrn', '2018-11-28', '23:58', 'Yes', 'fbeana'),
(28, 4, 0, 'name', 'Patient name', 'k@gmail.com', 'wjhbqw', 'Male', '1998-11-27', 'rthwrn', '2018-11-28', '23:58', 'Yes', 'fbeana'),
(29, 4, 0, 'name', 'sdnb', 'a@gmail.com', 'sadkn', 'Male', '1998-07-26', 'addvsb', '2018-11-27', '23:55', 'Yes', 'ffbkdabkadnb'),
(30, 4, 0, 'name', 'dffb', 'f@gmail.com', 'asda', 'Male', '1998-10-29', 'sdbs', '2018-11-28', '12:57', 'Yes', 'fdbafnfa'),
(31, 4, 1, 'name', 'kfnkb', 's@gmail.com', 'afkfn', 'Male', '1997-11-29', 'kfha', '2018-11-27', '23:57', 'Yes', 'afkvbaljb'),
(32, 4, 1, 'name', 'lkdzdbs', 'kasv@gmail.com', 'asknadb', 'Male', '1997-10-29', 'o;j;hlb', '2018-11-27', '23:56', 'Yes', 'khlkhkhbn');

-- --------------------------------------------------------

--
-- Table structure for table `bookpath`
--

CREATE TABLE `bookpath` (
  `id` int(255) NOT NULL,
  `path_id` int(255) NOT NULL,
  `u_id` int(255) NOT NULL,
  `path_name` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_email` varchar(255) NOT NULL,
  `p_phone` varchar(255) NOT NULL,
  `gendr` varchar(255) NOT NULL,
  `p_dob` varchar(255) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `p_date` varchar(255) NOT NULL,
  `p_time` varchar(255) NOT NULL,
  `p_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookpath`
--

INSERT INTO `bookpath` (`id`, `path_id`, `u_id`, `path_name`, `p_name`, `p_email`, `p_phone`, `gendr`, `p_dob`, `p_address`, `p_date`, `p_time`, `p_desc`) VALUES
(1, 3, 1, 'aaa', 'iidhsd', 'k@gmail.com', 'kanva', 'Male', '1998-10-29', 'sk sak n', '2018-11-27', '23:57', 'ssak nda mb'),
(2, 3, 1, 'aaa', 'iidhsd', 'k@gmail.com', 'kanva', 'Male', '1998-10-29', 'sk sak n', '2018-11-27', '23:57', 'ssak nda mb'),
(3, 3, 1, 'aaa', 'kafnakfneambf', 'sak@gmail.com', 'kasvnakn', 'Male', '1997-09-29', 'ksvnakdn', '2018-11-26', '23:56', 'sddvsabafdb'),
(4, 3, 1, 'aaa', 'dkjskb', 'lbm@gmail.com', 'dcknad ', 'Male', '1997-10-29', ';sk nas ', '2018-11-28', '23:56', 'akl nda ');

-- --------------------------------------------------------

--
-- Table structure for table `bookproduct`
--

CREATE TABLE `bookproduct` (
  `id` int(255) NOT NULL,
  `pro_id` int(255) NOT NULL,
  `u_id` int(255) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `p_email` varchar(255) NOT NULL,
  `p_phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `z_code` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `y_address` varchar(255) NOT NULL,
  `s_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookproduct`
--

INSERT INTO `bookproduct` (`id`, `pro_id`, `u_id`, `pro_name`, `f_name`, `l_name`, `p_email`, `p_phone`, `city`, `z_code`, `state`, `y_address`, `s_address`) VALUES
(1, 1, 1, 'main', 'kbffab', 'lna', 'la@gmail.com', 'asakna', 'alsna', 'alsn', 'slnf', 'as,fbsabnaf', 'lsans');

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
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `email`, `password`) VALUES
(1, 'Nazam', '', ''),
(2, 'asif', 'a@gmail.com', '123456');

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
-- Indexes for table `bookappointment`
--
ALTER TABLE `bookappointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookpath`
--
ALTER TABLE `bookpath`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookproduct`
--
ALTER TABLE `bookproduct`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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
-- AUTO_INCREMENT for table `bookappointment`
--
ALTER TABLE `bookappointment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `bookpath`
--
ALTER TABLE `bookpath`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bookproduct`
--
ALTER TABLE `bookproduct`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
