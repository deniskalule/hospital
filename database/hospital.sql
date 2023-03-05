-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 09:37 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL,
  `modification_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `password`, `id`, `name`, `role`, `modification_date`) VALUES
('admin', 'odongo80@gmail.com', 'admin', 1, 'odongo arthur', 'admin', '2023-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `billsID` int(10) NOT NULL,
  `LabCharges` int(15) NOT NULL,
  `PatientType` varchar(10) NOT NULL,
  `No_Of_Days` varchar(10) NOT NULL,
  `OperationCharges` int(15) NOT NULL,
  `RoomCharges` int(15) NOT NULL,
  `TotalCharges` int(15) NOT NULL,
  `Advance` varchar(10) NOT NULL,
  `patientID` int(10) NOT NULL,
  `laboratoryID` int(10) NOT NULL,
  `pharmacyID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctorID` int(10) NOT NULL,
  `FullNames` varchar(20) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Gender` enum('M','F','O') NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Department` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doc_id` varchar(20) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `other_names` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `role` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creation_date` date NOT NULL,
  `modification_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doc_id`, `surname`, `other_names`, `email`, `contact`, `gender`, `address`, `role`, `department`, `password`, `creation_date`, `modification_date`) VALUES
('DOC001', 'Ejunu', 'Patrick', 'ejunupatrick@gmail.com', '0776482987', 'male', 'address', 'Dentist', 'Dental', '', '0000-00-00', '2023-03-04'),
('DOC002', 'Nannono', 'Penina', 'peninanono@gmail.com', '0756529218', 'female', 'address', 'clinical officer', 'medicine', '', '2027-02-23', '2023-03-04'),
('DOC003', 'Nakavuma', 'Anitah', 'anitahnakavuma@gmail.com', '0759899487', 'female', 'address', 'Lab technologist', 'Laboratory', '', '2027-02-23', '2023-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `equipmentsID` int(10) NOT NULL,
  `Name_Of_Equipment` varchar(20) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `Date_Of_Purchase` date NOT NULL,
  `Date_Taken` date NOT NULL,
  `Number _Of_Equipments` varchar(10) NOT NULL,
  `Amount_Of_Equipments` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `impatient`
--

CREATE TABLE `impatient` (
  `impatientID` int(11) NOT NULL,
  `Date_Of_Admission` date NOT NULL,
  `Date_Of_Discharge` date NOT NULL,
  `patientID` int(10) NOT NULL,
  `laboratoryID` int(10) NOT NULL,
  `roomID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

CREATE TABLE `laboratory` (
  `laboratoryID` int(10) NOT NULL,
  `LabName` varchar(20) NOT NULL,
  `Category` varchar(10) NOT NULL,
  `Amount` int(100) NOT NULL,
  `Date` date NOT NULL,
  `patientID` int(10) NOT NULL,
  `doctorID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `outpatient`
--

CREATE TABLE `outpatient` (
  `outpatientID` int(10) NOT NULL,
  `Date_Of_Admission` date NOT NULL,
  `Date_Of_Discharge` date NOT NULL,
  `doctorID` int(10) NOT NULL,
  `patientID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `patientID` varchar(11) NOT NULL,
  `FullNames` varchar(20) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Disease` varchar(20) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `patientID`, `FullNames`, `Date_Of_Birth`, `Gender`, `Address`, `Disease`, `Contact`, `Creation_date`) VALUES
(6, 'P001', 'Kabanda Ronald', '2023-02-28', 'Male', 'kireka', 'fever', '0705098700', '2023-03-04'),
(7, 'P002', 'Namulindwa Olivia', '2022-11-03', 'female', 'Kyanamukaaka', 'weakness', '0756529218', '2023-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `pharmacyID` int(11) NOT NULL,
  `MedicineName` varchar(20) NOT NULL,
  `Date_Of_Entry` date NOT NULL,
  `Amount_Available` varchar(10) NOT NULL,
  `LabReport` varchar(10) NOT NULL,
  `AmountPaid` int(10) NOT NULL,
  `Price_Of_Medicine` int(10) NOT NULL,
  `patientID` int(10) NOT NULL,
  `laboratoryID` int(10) NOT NULL,
  `doctorID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomID` int(10) NOT NULL,
  `RoomNumber` int(100) NOT NULL,
  `RoomType` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `patientID` int(10) NOT NULL,
  `staffID` int(10) NOT NULL,
  `doctorID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `salaryID` int(11) NOT NULL,
  `AmountPaid` int(11) NOT NULL,
  `Department` int(11) NOT NULL,
  `Date_Of_Payment` int(11) NOT NULL,
  `staffID` int(10) NOT NULL,
  `doctorID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffID` varchar(10) NOT NULL,
  `FullNames` varchar(20) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `creation_date` date NOT NULL,
  `password` int(11) NOT NULL,
  `modification_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffID`, `FullNames`, `Date_Of_Birth`, `Address`, `Gender`, `Contact`, `Department`, `creation_date`, `password`, `modification_date`) VALUES
('STAFF001', 'Nakakande Maria', '2022-06-27', 'Mukono', 'Male', '756529218', 'Receptionist', '0000-00-00', 123456, '0000-00-00'),
('STAFF002', 'Jjunju Ivan', '2023-02-28', 'kireka', 'Male', '705098700', 'Welfare', '0000-00-00', 123456, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`billsID`),
  ADD KEY `laboratoryID` (`laboratoryID`),
  ADD KEY `pharmacyID` (`pharmacyID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctorID`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `impatient`
--
ALTER TABLE `impatient`
  ADD PRIMARY KEY (`impatientID`),
  ADD KEY `patientID` (`patientID`),
  ADD KEY `laboratoryID` (`laboratoryID`),
  ADD KEY `roomID` (`roomID`);

--
-- Indexes for table `laboratory`
--
ALTER TABLE `laboratory`
  ADD PRIMARY KEY (`laboratoryID`),
  ADD KEY `patientID` (`patientID`),
  ADD KEY `doctorID` (`doctorID`);

--
-- Indexes for table `outpatient`
--
ALTER TABLE `outpatient`
  ADD PRIMARY KEY (`outpatientID`),
  ADD KEY `doctorID` (`doctorID`),
  ADD KEY `patientID` (`patientID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`pharmacyID`),
  ADD KEY `patientID` (`patientID`),
  ADD KEY `laboratoryID` (`laboratoryID`),
  ADD KEY `doctorID` (`doctorID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomID`),
  ADD KEY `patientID` (`patientID`),
  ADD KEY `staffID` (`staffID`),
  ADD KEY `doctorID` (`doctorID`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salaryID`),
  ADD KEY `staffID` (`staffID`),
  ADD KEY `doctorID` (`doctorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
