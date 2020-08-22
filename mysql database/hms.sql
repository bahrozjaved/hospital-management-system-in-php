-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2020 at 01:37 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(111) NOT NULL,
  `username` varchar(111) CHARACTER SET latin1 COLLATE latin1_swedish_nopad_ci NOT NULL,
  `password` varchar(111) CHARACTER SET latin1 COLLATE latin1_swedish_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'admin1', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'admin2', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `doctor` varchar(60) NOT NULL,
  `date` varchar(60) NOT NULL,
  `time` varchar(60) NOT NULL,
  `reason` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `day` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `username`, `email`, `doctor`, `date`, `time`, `reason`, `contact`, `day`) VALUES
(3, 'admin', 'bahrozjaved6@gmail.com', 'Bahroz', '08/27/2020', '08:00-8:30', 'Heart problem', '03012720112', 'Tuesday');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `inv-no` int(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `paydue` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `paid` int(100) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `username`, `inv-no`, `date`, `paydue`, `total`, `paid`, `status`) VALUES
(1, 'admin', 1, '08/19/2020', 500, 1000, 500, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`firstname`, `lastname`, `email`, `subject`, `comment`) VALUES
('Bahroz', 'Javed', 'bahrozjaved6@gmail.com', 'ADMIN', 'ADMIN'),
('Bahroz', 'Javed', 'bahrozjaved6@gmail.com', 'ADMIN', 'ADMIN'),
('Bahroz', 'Javed', 'bahrozjaved6@gmail.com', 'ADMIN', 'heelllooooooo');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `depart_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `depart_name`) VALUES
(1, 'doctor'),
(2, 'nurse'),
(3, 'reception'),
(4, 'laboratory'),
(5, 'account');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `medicine` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `username`, `date`, `contact`, `age`, `gender`, `medicine`) VALUES
(1, 'bahroz', '12/9/1997', '03012720112', '22', 'male', 'paracetamol'),
(2, 'admin', '08/19/2020', '03012720112', '22', 'male', 'paracetamol');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(111) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `type` varchar(50) CHARACTER SET latin1 NOT NULL,
  `department` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`, `mobile`, `type`, `department`) VALUES
(1, 'BahrozJaved', 'bahrozjaved@yahoo.com', '698d51a19d8a121ce581499d7b701668', '03012720112', 'user', 0),
(3, 'Bahroz', 'bahrozjaved2@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '03012720112', 'doctor', 1),
(4, 'javed', 'javed@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '03000000000', 'doctor', 1),
(5, 'amna', 'amna@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '03012720112', 'nurse', 2),
(6, 'CSC-18F-134', 'bahrozjved6@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '03012720112', 'nurse', 2),
(7, 'hello', 'hello@hello.com', '21232f297a57a5a743894a0e4a801fc3', '03012720112', 'nurse', 2),
(9, 'ali', 'ali@gmai.com', '21232f297a57a5a743894a0e4a801fc3', '03012720112', 'pharmacy', 0),
(12, 'min', 'min@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '03012720112', 'pharmacy', 0),
(13, 'bahrozjave', 'add@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '03012720112', 'reception', 3),
(14, 'ahmed', 'ahmed@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '03012720112', 'account', 5),
(17, 'hellomin', 'hellom@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '03012720112', 'laboratory', 4),
(18, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '03012720112', 'user', 0),
(19, 'admin1', 'bahrozjaved6@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '03012720112', 'nurse', 2);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `inv-no` int(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `paydue` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `paid` int(100) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `username`, `inv-no`, `date`, `paydue`, `total`, `paid`, `status`) VALUES
(2, 'amir', 1, '22/6/2019', 500, 1000, 500, 'not-paid'),
(3, 'ahmed', 2, '22/6/2019', 500, 1000, 500, 'not-paid');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `day` varchar(20) NOT NULL,
  `room` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL,
  `start` varchar(30) NOT NULL,
  `end` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `username`, `type`, `day`, `room`, `date`, `start`, `end`) VALUES
(3, 'Bahroz', 'doctor', 'Monday', 'a2', '08/25/2020', '12:30am', '1:00am'),
(4, 'ahmed', 'reception', 'wed', 'a01', '22/2/1996', '2;00pm', '3;00pm'),
(5, 'rana', 'nurse', 'wed', 'a01', '22/2/1996', '2;00pm', '3;00pm'),
(6, 'nasir', 'laboratory', 'wed', 'a2', '22/2/1996', '2:00pm', '2:00am'),
(7, 'nasirullah', 'account', 'wed', 'a2', '22/2/1996', '2:00 am', '2:00pm'),
(8, 'yasin', 'doctor', 'monday', 'a03', '26/4/2000', '3:00am', '3:00pm'),
(9, 'hamza', 'doctor', 'monday', 'a03', '26/4/2000', '3:00am', '3:00pm'),
(10, 'haris', 'doctor', 'monday', 'a03', '26/4/2000', '3:00am', '3:00pm'),
(11, 'bahroz', 'doctor', 'tuesday', 'a01', '08/26/2020', '12:30pm', '12:30am'),
(12, 'bahroz', 'doctor', 'wednesday', 'a01', '08/27/2020', '12:30pm', '12:30am'),
(13, 'bahroz', 'doctor', 'thursday', 'a01', '08/28/2020', '12:30pm', '12:30am'),
(14, 'bahroz', 'doctor', 'friday', 'a01', '08/29/2020', '12:30pm', '12:30am'),
(15, 'bahroz', 'doctor', 'Saturday', 'a01', '08/30/2020', '12:30pm', '12:30am'),
(16, 'bahroz', 'doctor', 'Sunday', 'a01', '08/31/2020', 'no time', 'no time');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
