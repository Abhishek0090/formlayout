-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 02:56 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `birla1`
--

CREATE TABLE `birla1` (
  `id` int(20) NOT NULL,
  `patient_id` int(11) NOT NULL,
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
  `injury_occur` varchar(111) DEFAULT NULL,
  `rta` varchar(121) NOT NULL,
  `date_injury` varchar(10) NOT NULL,
  `fir` int(121) NOT NULL,
  `police` varchar(122) NOT NULL,
  `alcohol` varchar(121) NOT NULL,
  `test` varchar(121) NOT NULL,
  `maternity` varchar(121) NOT NULL,
  `dod` varchar(10) NOT NULL,
  `doa` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `emergency` varchar(121) NOT NULL,
  `stay_hospital` varchar(121) NOT NULL,
  `room_type` varchar(121) NOT NULL,
  `rent` varchar(121) NOT NULL,
  `cost_investigation` varchar(121) NOT NULL,
  `icu_charges` varchar(121) NOT NULL,
  `ot_charges` varchar(121) NOT NULL,
  `fees_charges` varchar(121) NOT NULL,
  `medicines_expense` varchar(121) NOT NULL,
  `inclusive` varchar(121) NOT NULL,
  `cost_hospital` varchar(121) NOT NULL,
  `diabetes` varchar(121) NOT NULL,
  `diabetes_date` varchar(100) NOT NULL,
  `heart_disease` varchar(121) NOT NULL,
  `heart_disease_date` varchar(100) NOT NULL,
  `hypertension` varchar(121) NOT NULL,
  `hypertension_date` varchar(100) NOT NULL,
  `hyperlipidemias` varchar(121) NOT NULL,
  `hyperlipidemias_date` varchar(100) NOT NULL,
  `osteoarthritis` varchar(121) NOT NULL,
  `osteoarthritis_date` varchar(100) NOT NULL,
  `ashtma_copd_bronchitis` varchar(121) NOT NULL,
  `ashtma_copd_bronchitis_date` varchar(100) NOT NULL,
  `cancer` varchar(121) NOT NULL,
  `cancer_date` varchar(100) NOT NULL,
  `alcohol_drug` varchar(121) NOT NULL,
  `alcohol_drug_date` varchar(100) NOT NULL,
  `hiv_std` varchar(121) NOT NULL,
  `hiv_std_date` varchar(100) NOT NULL,
  `aliment` varchar(121) NOT NULL,
  `treating_doctor` varchar(121) NOT NULL,
  `qualification` varchar(121) NOT NULL,
  `state_code` varchar(121) NOT NULL,
  `hospital_seal` varchar(121) NOT NULL,
  `patient_signature` varchar(121) NOT NULL,
  `patient_insured_name` varchar(121) NOT NULL,
  `patient_insured_sign` varchar(121) NOT NULL,
  `contact_declaration` varchar(121) NOT NULL,
  `hospital_seal_final` varchar(121) NOT NULL,
  `doctor_signature` varchar(121) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `birla1`
--

INSERT INTO `birla1` (`id`, `patient_id`, `name_company`, `toll_number`, `toll_fax`, `employeeid`, `name_patient`, `gender`, `age`, `dob`, `contact_patient`, `contact_relative`, `insured_number`, `policy_number`, `mediclaim`, `company_name`, `physician`, `name_physician`, `contact_physician`, `name_doctor`, `contact_doctor`, `nature_illness`, `relevant`, `duration`, `date_consultation`, `past_history`, `diagnosis`, `icd_code`, `line_treatment`, `invest_medical`, `route_drug`, `name_surgery`, `icd_pcs`, `other_treatment`, `injury_occur`, `rta`, `date_injury`, `fir`, `police`, `alcohol`, `test`, `maternity`, `dod`, `doa`, `time`, `emergency`, `stay_hospital`, `room_type`, `rent`, `cost_investigation`, `icu_charges`, `ot_charges`, `fees_charges`, `medicines_expense`, `inclusive`, `cost_hospital`, `diabetes`, `diabetes_date`, `heart_disease`, `heart_disease_date`, `hypertension`, `hypertension_date`, `hyperlipidemias`, `hyperlipidemias_date`, `osteoarthritis`, `osteoarthritis_date`, `ashtma_copd_bronchitis`, `ashtma_copd_bronchitis_date`, `cancer`, `cancer_date`, `alcohol_drug`, `alcohol_drug_date`, `hiv_std`, `hiv_std_date`, `aliment`, `treating_doctor`, `qualification`, `state_code`, `hospital_seal`, `patient_signature`, `patient_insured_name`, `patient_insured_sign`, `contact_declaration`, `hospital_seal_final`, `doctor_signature`, `updated`) VALUES
(1, 1, 'abhui', '435678', '132454', '12', 'Lmao', 'Female', '21', '11/10/2022', '987654567', '9876543221', '5436', '3423', 'Yes', 'Lmao xd', 'Yes', 'Physician', '9956623377', 'Dr . Thug Life', '9784552323', 'Flu', 'good', '12', '12/01/2022', 'None', 'Nothing', '1234567876', 'Nothing', 'None', 'Where', 'common', '1213265124', 'nothing', 'Idk', 'Yes', '03/10/2022', 12232, 'No', 'Yes', 'Yes', 'G', '13/10/2022', '05/10/2022', '11:25 PM', 'Planned', '12', 'A/C', '', '', '', '', '', '', '', '', 'Yes', '10/2022', 'Yes', '10/2022', 'Yes', '02/2022', 'Yes', '10/2022', 'Yes', '11/2022', 'Yes', '03/2022', 'Yes', '12/2022', 'Yes', '06/2022', 'Yes', '03/2022', 'Nothing', 'yourdoctor', 'MBBS', '421306', 'Abhishek', 'Patient', 'Nissan', 'Nisssaan', '9895631545', 'Tata Hospital', 'Hecker', '2022-10-13 11:17:43'),
(2, 1, 'abhui', '435678', '132454', '12', 'Lmao', 'Female', '21', '11/10/2022', '987654567', '9876543221', '5436', '3423', 'Yes', 'Lmao xd', 'Yes', 'Physician', '9956623377', 'Dr . Thug Life', '9784552323', 'Flu', 'good', '12', '12/01/2022', 'None', 'Nothing', '1234567876', 'Nothing', 'None', 'Where', 'common', '1213265124', 'nothing', 'Idk', 'Yes', '03/10/2022', 12232, 'No', 'Yes', 'Yes', 'G', '13/10/2022', '05/10/2022', '11:25 PM', 'Planned', '12', 'A/C', '', '', '', '', '', '', '', '', 'Yes', '10/2022', 'Yes', '10/2022', 'Yes', '02/2022', 'Yes', '10/2022', 'Yes', '11/2022', 'Yes', '03/2022', 'Yes', '12/2022', 'Yes', '06/2022', 'Yes', '03/2022', 'Nothing', 'yourdoctor', 'MBBS', '421306', 'Abhishek', 'Patient', 'Nissan', 'Nisssaan', '9895631545', 'Tata Hospital', 'Hecker', '2022-10-13 11:17:43'),
(3, 2, 'as', 'abh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', '0', 'Yes', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '', '2022-10-13 11:17:43'),
(4, 0, NULL, NULL, NULL, NULL, NULL, 'Male', NULL, '12/10/2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', '13/10/2022', 0, '', '', '', '', '', '', '', 'Emergency', '', '', '', '', '', '', '', '', '', '', '', '10', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '', '2022-10-13 11:17:43');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(121) NOT NULL,
  `category_name` varchar(121) NOT NULL,
  `category_type` varchar(121) NOT NULL,
  `category_status` varchar(121) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_type`, `category_status`) VALUES
(1, 'aditya_birla1', '1', 'active'),
(2, 'aditya_birla2', '1', 'active'),
(3, 'aditya_birla3', '1', 'active'),
(4, 'aditya_birla4', '1', 'active'),
(5, 'aditya_birla5', '1', 'active'),
(6, 'aditya_birla6', '1', 'active'),
(7, 'aditya_birla7', '1', 'active'),
(8, 'aditya_birla8', '1', 'active'),
(9, 'aditya_birla9', '1', 'active'),
(10, 'aditya_birla10', '1', 'active'),
(11, 'aditya_birla11', '1', 'active'),
(12, 'aditya_birla12', '1', 'active'),
(13, 'aditya_birla13', '1', 'active'),
(14, 'aditya_birla14', '1', 'active'),
(15, 'aditya_birla15', '1', 'active'),
(16, 'aditya_birla16', '1', 'active'),
(17, 'aditya_birla17', '1', 'active'),
(18, 'aditya_birla18', '1', 'active'),
(19, 'aditya_birla19', '1', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apollo`
--
ALTER TABLE `apollo`
  ADD PRIMARY KEY (`apolloid`);

--
-- Indexes for table `birla1`
--
ALTER TABLE `birla1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apollo`
--
ALTER TABLE `apollo`
  MODIFY `apolloid` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `birla1`
--
ALTER TABLE `birla1`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(121) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
