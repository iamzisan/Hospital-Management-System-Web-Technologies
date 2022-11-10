-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 01:04 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `activeappointment`
--

CREATE TABLE `activeappointment` (
  `sl` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `drname` varchar(100) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activeappointment`
--

INSERT INTO `activeappointment` (`sl`, `username`, `drname`, `datetime`, `status`) VALUES
(2, 'noor230', 'Shuvo Khan', '2021-04-24 11:19:34', 'Active'),
(3, 'noor232', 'Maria khan', '2021-04-25 12:45:11', 'Inactive'),
(5, 'noor232', 'Maria khan', '2021-04-26 12:45:11', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `dob` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`id`, `name`, `email`, `username`, `password`, `confirmpassword`, `gender`, `dob`, `type`) VALUES
(57, 'Mufrad Mustavi', 'mufrad012@gmail.com', 'test', '111111', '111111', 'Male', '1990-06-10', 'admin'),
(63, 'Tanvir Siam', 'siam32@gmail.com', 'siam45', '1593571@', '1593571@', 'Male', '2021-08-06', 'admin'),
(64, 'Shibli Sabit', 'Shibli012@gmail.com', 'Shibli012', '1593571@', '1593571@', 'Male', '2021-08-09', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `serial` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `doctorId` int(10) DEFAULT NULL,
  `applyDate` date DEFAULT NULL,
  `acceptDate` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`serial`, `id`, `doctorId`, `applyDate`, `acceptDate`, `time`, `status`) VALUES
(3, 4, 1, '2021-08-14', NULL, NULL, 'not approved'),
(4, 5, 1, '2021-08-15', NULL, NULL, 'not approved'),
(10, 4, 13, '2021-08-17', NULL, NULL, 'not approved');

-- --------------------------------------------------------

--
-- Table structure for table `appointmentlist`
--

CREATE TABLE `appointmentlist` (
  `sl` int(11) NOT NULL,
  `patientname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `datetime` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL,
  `Emargency` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointmentlist`
--

INSERT INTO `appointmentlist` (`sl`, `patientname`, `phone`, `datetime`, `status`, `Emargency`, `username`) VALUES
(2, 'Afardin', '0938654567', '2021-08-13', 'medicined', 'yes', 'farhan'),
(3, 'Asakib', '098765432', '2021-04-25', 'none', 'no', 'farhan'),
(5, 'noyon', '0188765432', '2021-08-13', 'approved', 'yes', 'farhan'),
(10, 'Sovon', '01775503498', '2021-08-13', 'none', 'yes', 'sakib334'),
(11, 'e', '4', '2021-08-13', 'none', 'yes', 'noor232');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_reg`
--

CREATE TABLE `doctor_reg` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mobnum` int(11) NOT NULL,
  `nidnum` int(11) NOT NULL,
  `license` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `dob` varchar(50) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_reg`
--

INSERT INTO `doctor_reg` (`id`, `name`, `email`, `username`, `mobnum`, `nidnum`, `license`, `password`, `confirmpassword`, `gender`, `dob`, `type`) VALUES
(2, 'farhan', 'khayeruzzaman012@gmail.com', 'farhan', 1745508787, 1593574682, 121212, '123456', '123456', 'Male', '2021-08-08', 'doctor'),
(3, 'Tanvir Siam', 'siam32@gmail.com', 'siam45', 1745508797, 1548635, 0, '1472583@', '1472583@', 'Male', '2021-08-09', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_req`
--

CREATE TABLE `doctor_req` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mobnum` int(11) NOT NULL,
  `nidnum` int(11) NOT NULL,
  `license` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `dob` varchar(50) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_req`
--

INSERT INTO `doctor_req` (`id`, `name`, `email`, `username`, `mobnum`, `nidnum`, `license`, `password`, `confirmpassword`, `gender`, `dob`, `type`) VALUES
(1, 'Tanvir Siam', 'Siam012@gmail.com', 'Siam012', 1745508787, 159357152, 153697523, '7894561@', '7894561@', 'Male', '1998-06-06', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `drapp`
--

CREATE TABLE `drapp` (
  `sl` int(11) NOT NULL,
  `drname` varchar(100) NOT NULL,
  `spec` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `roomno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drapp`
--

INSERT INTO `drapp` (`sl`, `drname`, `spec`, `time`, `roomno`) VALUES
(1, 'Dr afsana', 'heart', '6.00pm', '334546'),
(2, 'Dr Juran', 'Bone', '4.00pm', '334555'),
(3, 'Dr Shuvo', 'Bone', '4.00pm', '334556'),
(4, 'Dr Labib', 'Eye', '4.00pm', '334566');

-- --------------------------------------------------------

--
-- Table structure for table `drinfo`
--

CREATE TABLE `drinfo` (
  `sl` int(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `specialty` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `roomno` varchar(50) NOT NULL,
  `appointment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drinfo`
--

INSERT INTO `drinfo` (`sl`, `username`, `fullname`, `phone`, `nid`, `password`, `specialty`, `address`, `roomno`, `appointment`) VALUES
(12, 'ayshik', 'Ayshik Khan', '01775503498', '123456788543256', 'A1234', 'Heart', 'Northern Ireland,Ballycarry', 'Special-112', 'Active'),
(13, 'shuvo', 'Shuvo Khan', '01775503498', '123456788543256', 'A1234', 'Heart', 'Northern Ireland,Ballycarry', 'Special-112', 'Active'),
(14, 'Nadia', 'Nadia Khan', '01775503498', '123456788543256', 'A1234', 'Heart', 'Northern Ireland,Ballycarry', 'Special-112', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `input`
--

CREATE TABLE `input` (
  `id` int(10) NOT NULL,
  `date` date DEFAULT NULL,
  `bodytem` varchar(10) DEFAULT NULL,
  `pulserate` varchar(10) DEFAULT NULL,
  `uprate` varchar(10) DEFAULT NULL,
  `lowrate` varchar(10) DEFAULT NULL,
  `bloodsugar` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `input`
--

INSERT INTO `input` (`id`, `date`, `bodytem`, `pulserate`, `uprate`, `lowrate`, `bloodsugar`) VALUES
(4, '2021-08-14', '100', '80', '120', '90', '10'),
(5, '2021-08-16', '98', '88', '120', '80', '13');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(4, 'Tamim', '11111', 'patient'),
(5, 'nayim', '22222', 'patient'),
(6, 'test', '111111', 'admin'),
(7, 'siam45', '1234567@', 'pharmacy'),
(8, 'farhan', '123456', 'doctor'),
(10, 'siam45', '1593571@', 'admin'),
(11, 'Shibli012', '1593571@', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `sl` varchar(10) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `medicine` varchar(1000) NOT NULL,
  `tests` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `pstatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`sl`, `dname`, `pname`, `phone`, `medicine`, `tests`, `date`, `pstatus`) VALUES
('2', 'noor232', 'Afardin', '0938654567', 'Napa extra(d/n-1),periton(n-1),histasin(m/d/n-1)', 'Blood,Ige,Nicotine', '2021-08-13 00:25:05', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `medinfo`
--

CREATE TABLE `medinfo` (
  `sl` int(11) NOT NULL,
  `medname` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `power` varchar(100) NOT NULL,
  `unitprice` varchar(100) NOT NULL,
  `stock` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medinfo`
--

INSERT INTO `medinfo` (`sl`, `medname`, `company`, `power`, `unitprice`, `stock`) VALUES
(5, 'Napa', 'Aci', '20', '10', '100'),
(6, 'Napa extra', 'Aci', '20', '10', '100'),
(7, 'Napa --', 'Aci', '10', '5', '100'),
(8, 'Napa ++', 'Aci', '10', '5', '100'),
(9, 'Napa#', 'Aci', '10', '5', '100'),
(10, 'Napa extream', 'Aci', '100', '30', '50'),
(11, 'Napa suprime', 'navana', '200', '70', '80'),
(14, 'Torento', 'Aci', '100', '30', '50');

-- --------------------------------------------------------

--
-- Table structure for table `medinfo_2`
--

CREATE TABLE `medinfo_2` (
  `sl` int(11) NOT NULL,
  `patientid` varchar(100) NOT NULL,
  `roomno` varchar(100) NOT NULL,
  `medecine` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `under` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medinfo_2`
--

INSERT INTO `medinfo_2` (`sl`, `patientid`, `roomno`, `medecine`, `time`, `quantity`, `under`) VALUES
(1, 'noor232', 'xxxxx', 'napa extra', 'Day & night', '2', 'Dr Sabrina'),
(2, 'noor232', 'xxxxx', 'Histasin', 'Day', '1', 'Dr Sabrina'),
(3, 'noor232', 'xxxxx', 'periton', 'Mid', '1', 'Dr Sabrina'),
(4, 'noor232', 'xxxxx', 'civite', 'Day', '2', 'Dr Sabrina'),
(5, 'afsana334', 'xxxxx', 'periton', 'civite', '2', 'Dr Sabrina');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `sl` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `Problem` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `roomno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`sl`, `username`, `fullname`, `phone`, `age`, `password`, `gender`, `Problem`, `address`, `roomno`) VALUES
(11, 'noor232', 'noor nayan sekh', '01775503498', '25', 'noor12', 'Male', 'Covid', 'Dhaka', 'xxxxx');

-- --------------------------------------------------------

--
-- Table structure for table `patientprofile`
--

CREATE TABLE `patientprofile` (
  `Id` int(15) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Nid` bigint(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Dob` date DEFAULT NULL,
  `Type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientprofile`
--

INSERT INTO `patientprofile` (`Id`, `Username`, `Nid`, `Email`, `Password`, `Gender`, `Dob`, `Type`) VALUES
(4, 'Tamim', 1111111111, 'tamim@gmail.com', '11111', 'Male', '2017-07-01', 'patient'),
(5, 'nayim', 2222222222, 'almuzahidniem@gmail.com', '22222', 'Male', '1999-04-23', 'patient');

-- --------------------------------------------------------

--
-- Table structure for table `patientreq`
--

CREATE TABLE `patientreq` (
  `sl` int(11) NOT NULL,
  `patientid` varchar(100) NOT NULL,
  `need` varchar(100) NOT NULL,
  `roomno` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientreq`
--

INSERT INTO `patientreq` (`sl`, `patientid`, `need`, `roomno`, `date`) VALUES
(1, 'afsana112', 'food', '1223', '2021-04-17 18:00:00'),
(2, 'noor45', 'oxigen', '3444', '2021-04-18 14:06:44'),
(3, 'noor232', 'i need oxizen.', 'xxxxx', '2021-04-18 23:37:43');

-- --------------------------------------------------------

--
-- Table structure for table `patienttest`
--

CREATE TABLE `patienttest` (
  `sl` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `test` varchar(500) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `recomend` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patienttest`
--

INSERT INTO `patienttest` (`sl`, `username`, `test`, `cost`, `recomend`) VALUES
(1, 'noor232', 'blood', '300', 'Dr Alif'),
(2, 'noor232', 'urine', '400', 'Dr Alif'),
(3, 'noor232', 'pressure', '100', 'Dr sabrina'),
(4, 'noor232', 'ECG', '350', 'Dr sabrina'),
(5, 'noor232', 'IGE', '1000', 'Dr Mostofa');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_registration`
--

CREATE TABLE `pharmacy_registration` (
  `sl` int(50) NOT NULL,
  `name` text CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `phone` varchar(50) NOT NULL,
  `gender` text CHARACTER SET utf8mb4 NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `confirmpassword` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `dob` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `licenceno` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `storeno` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `nidno` int(50) NOT NULL,
  `type` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy_registration`
--

INSERT INTO `pharmacy_registration` (`sl`, `name`, `email`, `phone`, `gender`, `address`, `username`, `password`, `confirmpassword`, `dob`, `licenceno`, `storeno`, `nidno`, `type`) VALUES
(1, 'ASIF AL JUBAYER', 'asif@012@gmail.com', '1978117007', 'Male', 'meherpur', 'asif0123', 'asif0123', 'asif0123', '2001-05-06', '0876543', '9876543', 98765476, 'pharmacy'),
(2, 'Md Khayeruzzaman', 'khayeruzzaman012@gmail.com', '1745508787', 'Male', 'Dhaka', 'khayer012', '1234567@', '1234567@', '2021-08-10', '1593574', '15289635', 159352, 'pharmacy'),
(29, 'Tanvir Siam', 'siam32@gmail.com', '01745508787', 'Male', 'Dhaka', 'siam45', '1593571@', '1593571@', '2021-08-11', '1593574', '15289635', 2147483647, 'pharmacy'),
(30, 'Shibli Sabit', 'Shibli012@gmail.com', '', 'Male', '', 'Shibli012', '1593571@', '1593571@', '2021-08-18', '', '', 0, 'pharmacy'),
(31, 'Tanvir Siam', 'siam32@gmail.com', '1745508787', 'Male', 'Dhaka', 'siam45', '1234567@', '1234567@', '2021-08-11', '1593574', '15289635', 0, 'pharmacy');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_request`
--

CREATE TABLE `pharmacy_request` (
  `sl` int(50) NOT NULL,
  `name` text CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `phone` varchar(50) NOT NULL,
  `gender` text CHARACTER SET utf8mb4 NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `confirmpassword` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `dob` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `licenceno` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `storeno` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `nidno` int(50) NOT NULL,
  `type` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy_request`
--

INSERT INTO `pharmacy_request` (`sl`, `name`, `email`, `phone`, `gender`, `address`, `username`, `password`, `confirmpassword`, `dob`, `licenceno`, `storeno`, `nidno`, `type`) VALUES
(18, 'Shakib', 'shakibadnan.sa@gmail.com', '1745508787', 'Male', 'Dhaka', 'Shakib012', '1472583@', '1472583@', '2021-08-12', '1593574', '15289635', 2147483647, ''),
(26, 'Tanvir Siam', 'siam32@gmail.com', '1745508787', 'Male', 'Dhaka', 'Shibli012', '1593571@', '1593571@', '2021-08-04', '1593574', '15289635', 2147483647, ''),
(27, 'Tanvir Siam', 'siam32@gmail.com', '1745508787', 'Male', 'Dhaka', 'Shibli012', '1593571@', '1593571@', '2021-08-04', '1593574', '15289635', 2147483647, 'pharmacy'),
(28, 'Tanvir Siam', 'siam32@gmail.com', '01745508787', 'Male', 'Dhaka', 'Khayer012', '1593571@', '1593571@', '2021-08-18', '1593574', '15289635', 2147483647, 'pharmacy');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `serial` int(10) NOT NULL,
  `patientId` int(10) NOT NULL,
  `did` int(10) NOT NULL,
  `date` date NOT NULL,
  `medicineName` varchar(30) NOT NULL,
  `takingTime` varchar(30) NOT NULL,
  `timePeriod` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`serial`, `patientId`, `did`, `date`, `medicineName`, `takingTime`, `timePeriod`) VALUES
(1, 5, 1, '2021-08-15', 'Napa Extra 500mg', '1-0-1', '30 days');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activeappointment`
--
ALTER TABLE `activeappointment`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `appointmentlist`
--
ALTER TABLE `appointmentlist`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `doctor_reg`
--
ALTER TABLE `doctor_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_req`
--
ALTER TABLE `doctor_req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drapp`
--
ALTER TABLE `drapp`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `drinfo`
--
ALTER TABLE `drinfo`
  ADD PRIMARY KEY (`sl`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `input`
--
ALTER TABLE `input`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `medinfo`
--
ALTER TABLE `medinfo`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `medinfo_2`
--
ALTER TABLE `medinfo_2`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`sl`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `patientprofile`
--
ALTER TABLE `patientprofile`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `patientreq`
--
ALTER TABLE `patientreq`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `patienttest`
--
ALTER TABLE `patienttest`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `pharmacy_registration`
--
ALTER TABLE `pharmacy_registration`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `pharmacy_request`
--
ALTER TABLE `pharmacy_request`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activeappointment`
--
ALTER TABLE `activeappointment`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_reg`
--
ALTER TABLE `admin_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `serial` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `appointmentlist`
--
ALTER TABLE `appointmentlist`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doctor_reg`
--
ALTER TABLE `doctor_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor_req`
--
ALTER TABLE `doctor_req`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `drapp`
--
ALTER TABLE `drapp`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `drinfo`
--
ALTER TABLE `drinfo`
  MODIFY `sl` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `medinfo`
--
ALTER TABLE `medinfo`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `medinfo_2`
--
ALTER TABLE `medinfo_2`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `sl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patientprofile`
--
ALTER TABLE `patientprofile`
  MODIFY `Id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patientreq`
--
ALTER TABLE `patientreq`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patienttest`
--
ALTER TABLE `patienttest`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pharmacy_registration`
--
ALTER TABLE `pharmacy_registration`
  MODIFY `sl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pharmacy_request`
--
ALTER TABLE `pharmacy_request`
  MODIFY `sl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `serial` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
