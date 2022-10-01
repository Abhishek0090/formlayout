-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2022 at 03:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `birlaform`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `name_company` varchar(121) DEFAULT NULL,
  `toll_number` varchar(20) DEFAULT NULL,
  `toll_fax` varchar(20) DEFAULT NULL,
  `employeeid` varchar(111) DEFAULT NULL,
  `name_patient` varchar(111) DEFAULT NULL,
  `gender` varchar(111) DEFAULT NULL,
  `age` varchar(111) DEFAULT NULL,
  `dob` varchar(111) DEFAULT NULL,
  `contact_patient` varchar(111) DEFAULT NULL,
  `contact_relative` varchar(111) DEFAULT NULL,
  `insured_number` varchar(111) DEFAULT NULL,
  `policy_number` varchar(111) DEFAULT NULL,
  `mediclaim` varchar(111) DEFAULT NULL,
  `company_name` varchar(111) DEFAULT NULL,
  `physician` varchar(111) DEFAULT NULL,
  `name_physician` varchar(111) DEFAULT NULL,
  `contact_physician` varchar(111) DEFAULT NULL,
  `name_doctor` varchar(111) DEFAULT NULL,
  `contact_doctor` varchar(111) DEFAULT NULL,
  `nature_illness` varchar(111) DEFAULT NULL,
  `relevant` varchar(111) DEFAULT NULL,
  `duration` varchar(111) DEFAULT NULL,
  `date_consultation` varchar(111) DEFAULT NULL,
  `past_history` varchar(111) DEFAULT NULL,
  `diagnosis` varchar(111) DEFAULT NULL,
  `icd_code` varchar(111) DEFAULT NULL,
  `line_treatment` varchar(111) DEFAULT NULL,
  `invest_medical` varchar(111) DEFAULT NULL,
  `route_drug` varchar(111) DEFAULT NULL,
  `name_surgery` varchar(111) DEFAULT NULL,
  `icd_pcs` varchar(111) DEFAULT NULL,
  `other_treatment` varchar(111) DEFAULT NULL,
  `injury_occur` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name_company`, `toll_number`, `toll_fax`, `employeeid`, `name_patient`, `gender`, `age`, `dob`, `contact_patient`, `contact_relative`, `insured_number`, `policy_number`, `mediclaim`, `company_name`, `physician`, `name_physician`, `contact_physician`, `name_doctor`, `contact_doctor`, `nature_illness`, `relevant`, `duration`, `date_consultation`, `past_history`, `diagnosis`, `icd_code`, `line_treatment`, `invest_medical`, `route_drug`, `name_surgery`, `icd_pcs`, `other_treatment`, `injury_occur`) VALUES
(1, NULL, '123456', '7344234', '1', 'Apple', 'Male', '22', '12/1/2000', '9876543456', '9876545678', '5232', 'cop', 'Yes', 'com', 'Yes', 'psychic', '8765456789', 'Dr.Singh', '9876545678', 'nothing', 'nothing', '20', '20/09/2022', 'no', 'issue', '8283111111', '23e2', 'None', 'route', 'NAN', '2229938192', 'No Nothing', 'climate change'),
(2, NULL, '123456', '7344234', '1', 'Apple', 'Male', '22', '12/1/2000', '9876543456', '9876545678', '5232', 'cop', 'Yes', 'com', 'Yes', 'psychic', '8765456789', 'Dr.Singh', '9876545678', 'nothing', 'nothing', '20', '20/09/2022', 'no', 'issue', '8283111111', '23e2', 'None', 'route', 'NAN', '2229938192', 'No Nothing', 'climate change'),
(3, NULL, '2147483647', '654321', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, NULL, '0', '0', '', 'Apple', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, NULL, '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, NULL, '0', '0', '', '', '', '21', '972001', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, NULL, '123456', '3213', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, NULL, '2147483647', '4134124', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, NULL, '0', '0', '', 'Apple', '', '21', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, NULL, '123456', '654321', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, NULL, '2147483647', '654321', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, NULL, '2147483647', '4134124', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, NULL, '2147483647', '4134124', '2', 'rohini', '', '21', '982001', '9876543456', '9876545678', '5232', 'swatch bharat', '', 'poster', '', 'dr.mehta', '9876545678', 'hecker', '9876545678', 'cold', 'normal', '15', '20/09/2001', 'bruh', 'common', '7418242921', 'yess', 'None', 'NAN', 'NAN', '2229938192', 'cannot say', 'Eating Junk Food'),
(14, NULL, '0', '0', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, NULL, '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', 'dr.vohra', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, NULL, '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', 'dr.vohra', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, NULL, '2147483647', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, NULL, '2147483647', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, NULL, '0', '0', '', '', '', '21', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, NULL, '0', '0', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, NULL, '123456', '4134124', '4', 'friend', 'Male', '21', '21/09/2000', '98765445672', '7432121345', '5232', '23365', 'Yes', 'tata', 'Yes', 'dr.mehta', '9876545678', 'Dr.Singh', '9876545678', 'fever', 'good', '15', '20/09/2001', 'no', 'flu', '6512515455', 'nothing', 'not yet', 'route', 'Consultation', '8235223323', 'maybe', 'Eating Junk Food'),
(26, NULL, '2147483647', '7344234', '60', 'deadpatient', 'Male', '22', '12/1/2000', '98765445672', '87456223222', '5232', 'swatch bharat', 'Yes', 'poster', 'Yes', 'dr.vohra', '8765456789', 'Dr.Punjabi', '9897894555', 'cold & Fever', 'not yet found', '15', '30-2-2022', 'nothing', 'issue', '23145412252', 'empty', 'yes', 'Inhale route', 'Consultation', '2212151454', 'maybe', 'Eating Junk Food'),
(27, NULL, '0', '0', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, NULL, '2147483647', '0', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, NULL, '1234', '1222', '32', 'Pablo Escobar', 'Male', '21', '9-9-2000', '9876543456', '76543234567', '1232', 'Meth', 'Yes', 'New Life Insurance', 'Yes', 'Dr Aspirin', '8762345678', 'Dr Doctor', '98765432345', 'Cold', 'Very Fine', '15', '20/09/2022', 'bruh', 'common', '8283111111', 'nothing', 'not yet', 'NAN', 'no', '2212151454', 'maybe', 'climate change'),
(30, NULL, '2147483647', '0', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, NULL, '2147483647', '0', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, NULL, '2147483647', '0', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, NULL, '2147483647', '0', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, NULL, '2147483647', '0', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, NULL, '2147483647', '7344234', '', 'friend', 'Male', '25', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, NULL, '2147483647', '0', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, NULL, '2147483647', '0', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, NULL, '2147483647', '0', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, NULL, '2147483647', '0', '60', 'deadpatient', 'Male', '21', '12/1/2000', '98765445672', '76543234567', '423443', '1200033', 'Yes', 'private', 'Yes', 'dr.mehta', '8765456789', 'Dr.Punjabi', '9876543456', 'cold', 'not yet found', '15', '30-2-2022', 'none', 'covid', '6512515455', 'empty', 'yes', 'NAN', 'no', '2212151454', 'maybe', 'Eating Junk Food'),
(40, NULL, '2147483647', '7344234', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, NULL, '1223232', '0', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, NULL, '2147483647', '0', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, NULL, '22625', '7344234', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, NULL, '2147483647', '0', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, NULL, '2147483647', '0', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, NULL, '2147483647', '0', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, NULL, '2147483647', '0', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, NULL, '2147483647', '0', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, NULL, '123456', '0', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, NULL, '5676', '0', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, NULL, '2342348238', '7344234', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, NULL, '11111111111', '7344234', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, 'abhishek', '', '', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, 'ABHISHEK', '', '', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, '', '', '', '', 'friend', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, 'abhishek', '123456', '', '', 'Apple', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(57, 'abhishek', '', '', '', '', 'Male', '', '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, '', '', '', '', '', 'Male,Male', '', '', '', '', '', '', 'Yes,Yes', '', 'Yes,Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(59, 'abhishek', '2342348238', '', '', '', 'Male,Male', '', '', '', '', '', '', 'Yes,Yes', '', 'Yes,Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `apollo`
--

CREATE TABLE `apollo` (
  `apolloid` int(111) NOT NULL,
  `name_company_apollo` varchar(111) DEFAULT NULL,
  `toll_number_apollo` varchar(111) DEFAULT NULL,
  `toll_fax_apollo` varchar(111) DEFAULT NULL,
  `name_hospital_apollo` varchar(111) DEFAULT NULL,
  `address_apollo` varchar(111) DEFAULT NULL,
  `rohiniid_apollo` varchar(111) DEFAULT NULL,
  `emailid_apollo` varchar(111) DEFAULT NULL,
  `employeeid_apollo` varchar(111) DEFAULT NULL,
  `name_patient_apollo` varchar(111) DEFAULT NULL,
  `gender_apollo` varchar(111) DEFAULT NULL,
  `age_apollo` varchar(111) DEFAULT NULL,
  `dob_apollo` varchar(111) DEFAULT NULL,
  `contact_patient_apollo` varchar(111) DEFAULT NULL,
  `contact_relative_apollo` varchar(111) DEFAULT NULL,
  `insured_number_apollo` varchar(111) DEFAULT NULL,
  `policy_number_apollo` varchar(111) DEFAULT NULL,
  `mediclaim_apollo` varchar(111) DEFAULT NULL,
  `company_name_apollo` varchar(111) DEFAULT NULL,
  `give_details_apollo` varchar(111) DEFAULT NULL,
  `physician_apollo` varchar(111) DEFAULT NULL,
  `name_physician_apollo` varchar(111) DEFAULT NULL,
  `contact_physician_apollo` varchar(111) DEFAULT NULL,
  `address_patient_apollo` varchar(111) DEFAULT NULL,
  `occupation_patient_apollo` varchar(111) DEFAULT NULL,
  `name_doctor_apollo` varchar(111) DEFAULT NULL,
  `contact_doctor_apollo` varchar(111) DEFAULT NULL,
  `nature_illness_apollo` varchar(111) DEFAULT NULL,
  `relevant_apollo` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apollo`
--
ALTER TABLE `apollo`
  ADD PRIMARY KEY (`apolloid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `apollo`
--
ALTER TABLE `apollo`
  MODIFY `apolloid` int(111) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
