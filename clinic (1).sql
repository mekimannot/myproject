-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 04:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `ID` int(11) NOT NULL,
  `Dname` varchar(100) NOT NULL,
  `Dsname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`ID`, `Dname`, `Dsname`) VALUES
(2, 'Electrical Engineering', 'Electrical Engineering'),
(4, 'Computer Science', 'CS'),
(5, 'Natural Science', 'Natural Science'),
(6, 'Food Engineering', 'Food Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `ID` int(11) NOT NULL,
  `Fnane` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `role` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`ID`, `Fnane`, `Lname`, `role`) VALUES
(99, 'hh', 'hh', 6),
(99, 'hh', 'hh', 6);

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `ID` int(11) NOT NULL,
  `Dname` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `measure` varchar(50) NOT NULL,
  `Pdate` varchar(100) NOT NULL,
  `Edate` varchar(100) NOT NULL,
  `price` decimal(11,0) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`ID`, `Dname`, `total`, `measure`, `Pdate`, `Edate`, `price`, `status`) VALUES
(4, 'drug1', 37, 'packate', '2022-08-07', '2022-08-17', '9', 1),
(5, 'drug4', 45, 'packate', '2022-08-09', '2022-08-18', '31', 1),
(6, 'drug1', 31, 'packate', '2022-08-07', '2022-08-25', '60', 2),
(8, 'drug4', 2, 'Bottle', '2022-08-07', '2022-08-13', '20', 2),
(9, 'drug2', 1, 'packate', '2022-08-08', '2022-08-17', '30', 1),
(10, 'drug10', 30, '', '2022-08-23', '2022-09-09', '300', 1),
(11, 'drug8', 20, '', '2022-08-03', '2022-09-10', '100', 1),
(12, 'drug7', 26, '', '2022-08-01', '2024-08-25', '260', 1),
(14, 'drug1', 50, '', '2022-09-04', '2022-10-08', '500', 2),
(15, 'drug1', 9, '', '2022-08-28', '2022-10-08', '90', 2),
(16, 'drug1', 9, '', '2022-08-28', '2022-10-08', '27', 2),
(17, 'drug8', 30, '', '2022-09-04', '2022-10-07', '600', 2),
(18, '', 20, '', '2022-11-14', '2022-11-21', '200', 1),
(19, 'drug2', 30, '', '2022-11-14', '2022-11-29', '300', 2),
(20, 'drug2', 10, '', '2022-10-30', '2022-12-10', '200', 2),
(21, 'drug2', 30, '', '2022-11-15', '2022-12-10', '300', 2);

-- --------------------------------------------------------

--
-- Table structure for table `drug_name`
--

CREATE TABLE `drug_name` (
  `ID` int(11) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `dsname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drug_name`
--

INSERT INTO `drug_name` (`ID`, `dname`, `dsname`) VALUES
(1, 'drug1', 'drug1'),
(2, 'drug2', 'drug2'),
(3, 'drug3', 'drug3'),
(4, 'drug4', 'drug3'),
(5, 'drug5', 'drug5'),
(6, 'drug6', 'drug6'),
(7, 'drug7', 'drug7'),
(8, 'drug8', 'drug8'),
(9, 'drug9', 'drug9'),
(10, 'drug10', 'drug10');

-- --------------------------------------------------------

--
-- Table structure for table `drug_requist`
--

CREATE TABLE `drug_requist` (
  `ID` int(11) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `prescriper_name` varchar(100) NOT NULL,
  `total_number` varchar(100) NOT NULL,
  `single_price` varchar(100) NOT NULL,
  `product_date` varchar(100) NOT NULL,
  `expired_date` varchar(100) NOT NULL,
  `did` int(100) NOT NULL,
  `status` int(11) NOT NULL,
  `approvale` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drug_requist`
--

INSERT INTO `drug_requist` (`ID`, `dname`, `prescriper_name`, `total_number`, `single_price`, `product_date`, `expired_date`, `did`, `status`, `approvale`) VALUES
(1, 'drug2', 'tofik', '30', '10', '2022-11-15', '2022-12-10', 0, 1, 'yes'),
(2, 'drug4', 'tofik', '', '', '', '', 0, 1, 'no'),
(3, 'drug8', 'tofik', '', '', '', '', 0, 1, 'no'),
(4, 'drug10', 'tofik', '', '', '', '', 0, 1, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `ID` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `app` varchar(100) DEFAULT NULL,
  `cons` varchar(100) DEFAULT NULL,
  `oip` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `leucocyte` varchar(100) DEFAULT NULL,
  `nitrite` varchar(50) DEFAULT NULL,
  `urobilinogen` varchar(50) DEFAULT NULL,
  `protein` varchar(50) DEFAULT NULL,
  `ph` varchar(50) DEFAULT NULL,
  `blood` varchar(50) DEFAULT NULL,
  `spec` varchar(50) DEFAULT NULL,
  `ketones` varchar(50) DEFAULT NULL,
  `bilirubin` varchar(50) DEFAULT NULL,
  `glucose` varchar(50) DEFAULT NULL,
  `rbc` varchar(50) DEFAULT NULL,
  `wbc` varchar(50) DEFAULT NULL,
  `hg` varchar(50) DEFAULT NULL,
  `hct` varchar(50) DEFAULT NULL,
  `wbcm` varchar(50) DEFAULT NULL,
  `netrophils` varchar(50) DEFAULT NULL,
  `basophils` varchar(50) DEFAULT NULL,
  `eosinophils` varchar(50) DEFAULT NULL,
  `monocytes` varchar(50) DEFAULT NULL,
  `lymphocytes` varchar(50) DEFAULT NULL,
  `esr` varchar(50) DEFAULT NULL,
  `bloodfilm` varchar(50) DEFAULT NULL,
  `imun` varchar(50) DEFAULT NULL,
  `bloodgroup` varchar(50) DEFAULT NULL,
  `o` varchar(50) DEFAULT NULL,
  `h` varchar(50) DEFAULT NULL,
  `ox` varchar(50) DEFAULT NULL,
  `rpr` varchar(50) DEFAULT NULL,
  `rhe` varchar(50) DEFAULT NULL,
  `hcg` varchar(50) DEFAULT NULL,
  `fbc` varchar(50) DEFAULT NULL,
  `bact` varchar(50) DEFAULT NULL,
  `gram` varchar(50) DEFAULT NULL,
  `a` varchar(50) DEFAULT NULL,
  `other` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`ID`, `patient_id`, `app`, `cons`, `oip`, `color`, `leucocyte`, `nitrite`, `urobilinogen`, `protein`, `ph`, `blood`, `spec`, `ketones`, `bilirubin`, `glucose`, `rbc`, `wbc`, `hg`, `hct`, `wbcm`, `netrophils`, `basophils`, `eosinophils`, `monocytes`, `lymphocytes`, `esr`, `bloodfilm`, `imun`, `bloodgroup`, `o`, `h`, `ox`, `rpr`, `rhe`, `hcg`, `fbc`, `bact`, `gram`, `a`, `other`) VALUES
(3, 41, 'ok', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '3', '', '', '', '', 'no', 'no', 'no', 'ok', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(4, 42, 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', '', '3', '', '', '', '', '', '', '', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok'),
(5, 43, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(6, 44, 'no', 'ok', 'no', 'no', 'ok', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '2%', '1', '', '', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `measurement`
--

CREATE TABLE `measurement` (
  `ID` int(11) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `munit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `measurement`
--

INSERT INTO `measurement` (`ID`, `mname`, `munit`) VALUES
(1, 'packate', 'KG'),
(2, 'Bottle', 'Litre');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `User_id` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `doctor` varchar(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `drug` varchar(100) DEFAULT NULL,
  `amount` varchar(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Lab_description` varchar(1000) DEFAULT NULL,
  `registration_date` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`ID`, `Fname`, `Lname`, `User_id`, `Department`, `doctor`, `Address`, `phone`, `drug`, `amount`, `price`, `status`, `Description`, `Lab_description`, `registration_date`, `age`, `gender`) VALUES
(38, 's1', 'sl1', 'ugr/11/14', 'Computer Science', '8', 'address', '0984758374', 'drug7', '2', '20', 4, 'he is so bad injured', NULL, '25-08-22', 19, 'Male'),
(39, 's2', 'sl2', 'ugr/12/14', 'Electrical Engineering', '8', 'address', '0947584758', 'drug1,drug7', '2,2', '20.512820512821', 4, 'take care her\r\n', NULL, '25-08-22', 20, 'Male'),
(41, 's3', 'sl3', 'ugr/13/14', 'Food Engineering', '8', 'address', '0934050483', NULL, '', '', 2, 'jjj', NULL, '08-09-22', 19, 'Male'),
(42, 's2', 'sl2', 'ugr/12/14', 'Electrical Engineering', '8', 'address', '0947584758', NULL, '', '', 3, '', NULL, '09-09-22', 90, 'Male'),
(43, 's4', 'sl4', 'ugr/14/14', 'Natural Science', '8', 'address', '0943783477', NULL, '', '', 3, '', NULL, '12-09-22', 18, 'Male'),
(44, 's2', 'sl2', 'ugr/12/14', 'Electrical Engineering', '8', 'address', '0947584758', NULL, '', '', 1, '', NULL, '15-11-22', 18, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `ID` int(11) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `town` varchar(100) NOT NULL,
  `woreda` varchar(100) NOT NULL,
  `kebele` varchar(100) NOT NULL,
  `house` varchar(100) NOT NULL,
  `diag` varchar(100) NOT NULL,
  `n1` varchar(100) NOT NULL,
  `n2` varchar(100) NOT NULL,
  `n3` varchar(100) NOT NULL,
  `n4` varchar(100) NOT NULL,
  `n5` varchar(100) NOT NULL,
  `n6` varchar(100) NOT NULL,
  `n7` varchar(100) NOT NULL,
  `n8` varchar(100) NOT NULL,
  `n9` varchar(100) NOT NULL,
  `n10` varchar(100) NOT NULL,
  `n11` varchar(100) NOT NULL,
  `n12` varchar(100) NOT NULL,
  `n13` varchar(100) NOT NULL,
  `n14` varchar(100) NOT NULL,
  `n15` varchar(100) NOT NULL,
  `n16` varchar(100) NOT NULL,
  `n17` varchar(100) NOT NULL,
  `n18` varchar(100) NOT NULL,
  `n19` varchar(100) NOT NULL,
  `n20` varchar(100) NOT NULL,
  `n30` varchar(100) NOT NULL,
  `n31` varchar(100) NOT NULL,
  `n32` varchar(100) NOT NULL,
  `n33` varchar(100) NOT NULL,
  `n34` varchar(100) NOT NULL,
  `n35` varchar(100) NOT NULL,
  `n36` varchar(100) NOT NULL,
  `n37` varchar(100) NOT NULL,
  `n38` varchar(100) NOT NULL,
  `n39` varchar(100) NOT NULL,
  `n40` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`ID`, `student_id`, `weight`, `region`, `town`, `woreda`, `kebele`, `house`, `diag`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`, `n9`, `n10`, `n11`, `n12`, `n13`, `n14`, `n15`, `n16`, `n17`, `n18`, `n19`, `n20`, `n30`, `n31`, `n32`, `n33`, `n34`, `n35`, `n36`, `n37`, `n38`, `n39`, `n40`) VALUES
(1, '42', '', '', '', '', '', '', '', 'nnn', '', '', '', '', '', '', '', 'mmm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '42', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '41', '10', 'snnpr', '', '', '', '', '', '', '', '', '', '', '', 'meki', 'ermena', '', '', '', '', '', '', '', '', '', '', '', '50', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `User_id` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Backup` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`ID`, `Fname`, `Lname`, `role`, `User_id`, `Password`, `email`, `Backup`, `phone`, `Gender`, `Address`) VALUES
(1, 'Meki', 'Ermena', 'admin', 'admin', 'meki', 'meki@gmail.com', 'meki', '0903894900', '', 'Sankura'),
(3, 'tofik', 'Sultan', 'pharmacy', 'p1', '123', 'tofik@gmail.com', 'tofik', '0938478383', '', 'hawassa'),
(6, 'Rehima', 'Kedir', 'register', 'r1', '123', 'rehima@gmail.com', 'rehima', '0938585837', 'Male', 'sankura'),
(8, 'Shemisa', 'Kedir', 'doctor', 'd1', '123', 'shemisa@gmail.com', 'shem', '0938484958', 'Male', 'werabe'),
(10, 'Bekuma', 'Negessa', 'labratory', 'l1', '123', 'bekuma@gmail.com', '', '0984758393', '', 'ambo'),
(11, 'Kemal', 'Kedir', 'doctor', 'd2', '123', 'kemal@gmail.com', '', '0984758584', 'Male', 'addis ababa'),
(12, 'wanofi', 'jeaml', 'store', 's1', '123', 'wanfi@fmai.com', '', '', 'male', '');

-- --------------------------------------------------------

--
-- Table structure for table `stu`
--

CREATE TABLE `stu` (
  `ID` int(11) NOT NULL,
  `total` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `c1` varchar(100) NOT NULL,
  `c2` varchar(100) NOT NULL,
  `c3` varchar(100) NOT NULL,
  `c4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu`
--

INSERT INTO `stu` (`ID`, `total`, `department`, `c1`, `c2`, `c3`, `c4`) VALUES
(1, '85', '', 'med', 'phar', 'eng', 'natural'),
(2, '82', '', 'med', 'phar', 'natural', 'eng'),
(3, '83.6', '', 'eng', 'phar', 'med', 'natural'),
(4, '81.5', '', 'phar', 'med', 'eng', 'natural'),
(5, '90', '', 'phar', 'eng', 'med', 'natural'),
(6, '84.5', '', 'med', 'phar', 'eng', 'natural'),
(7, '80', '', 'natural', 'med', 'eng', 'phar'),
(8, 'med', '', '78', 'phar', 'eng', 'natural'),
(9, '87', '', 'phar', 'med', 'natural', 'eng'),
(10, '81.6', '', 'phar', 'natural', 'eng', 'med');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_id` varchar(30) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_id`, `Fname`, `Lname`, `Department`, `Address`, `Phone`, `price`, `email`, `status`, `Gender`, `age`) VALUES
('ugr/11/14', 's1', 'sl1', 'Computer Science', 'werabe', '0984758374', 0, '', '', 'Male', 19),
('ugr/12/14', 's2', 'sl2', 'Electrical Engineering', 'sankura', '0947584758', 0, '', '', 'male', 0),
('ugr/13/14', 's3', 'sl3', 'Food Engineering', 'addis', '0934050483', 0, '', '', 'female', 0),
('ugr/14/14', 's4', 'sl4', 'Natural Science', 'addis', '0943783477', 0, '', '', 'male', 0),
('ugr/15/14', 's5', 'sl5', 'Computer Science', 'werabe', '0948583785', 0, '', '3', 'male', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD KEY `role` (`role`);

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `drug_name`
--
ALTER TABLE `drug_name`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `drug_requist`
--
ALTER TABLE `drug_requist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `measurement`
--
ALTER TABLE `measurement`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `stu`
--
ALTER TABLE `stu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `drug_name`
--
ALTER TABLE `drug_name`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `drug_requist`
--
ALTER TABLE `drug_requist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `measurement`
--
ALTER TABLE `measurement`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stu`
--
ALTER TABLE `stu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`role`) REFERENCES `staff` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
