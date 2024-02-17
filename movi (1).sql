-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 06:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movi`
--

-- --------------------------------------------------------

--
-- Table structure for table `angiogram`
--

CREATE TABLE `angiogram` (
  `id` int(11) NOT NULL,
  `Patientname` varchar(255) DEFAULT NULL,
  `PatientDOB` date DEFAULT NULL,
  `SubjectivePain` varchar(255) DEFAULT NULL,
  `SubjectiveDistance` varchar(255) DEFAULT NULL,
  `ObjectivePedal` varchar(255) DEFAULT NULL,
  `ObjectivePedalLeft` varchar(255) DEFAULT NULL,
  `ObjectivePedalRight` varchar(255) DEFAULT NULL,
  `ObjectAmputation` varchar(255) DEFAULT NULL,
  `ObjectAmputationLeftLevel` varchar(255) DEFAULT NULL,
  `ObjectAmputationRightLevels` varchar(255) DEFAULT NULL,
  `ObjectDependentrubor` varchar(255) DEFAULT NULL,
  `ObjectChronicsores` varchar(255) DEFAULT NULL,
  `ObjectWalkingImpairmentQuestionnairecompleted` varchar(255) DEFAULT NULL,
  `ObjectRutherfordScore` varchar(255) DEFAULT NULL,
  `ObjectAmbulatorystatus` varchar(255) DEFAULT NULL,
  `ObjectFailedconservative` varchar(255) DEFAULT NULL,
  `Objectdualanti_plateletstatin` varchar(255) DEFAULT NULL,
  `Objectdualwksmos` varchar(255) DEFAULT NULL,
  `Objectpletal` varchar(255) DEFAULT NULL,
  `Objectpletalwksmos` varchar(255) DEFAULT NULL,
  `ObjectStructurednon_structuredexercisewalkingprogram` varchar(255) DEFAULT NULL,
  `ObjectStructurednon_structuredexercisewalkingprogramwksmos` varchar(255) DEFAULT NULL,
  `ObjectSmokingcessationprogram` varchar(255) DEFAULT NULL,
  `ObjectSmokingcessationprogramwksmos` varchar(255) DEFAULT NULL,
  `RUTHERFORDSCORE` varchar(255) DEFAULT NULL,
  `TestingABI_TBI` varchar(255) DEFAULT NULL,
  `TestingLowerextremity` varchar(255) DEFAULT NULL,
  `TestingCTA` varchar(255) DEFAULT NULL,
  `medication` varchar(255) DEFAULT NULL,
  `labwork` varchar(255) DEFAULT NULL,
  `labworkInstruct` varchar(255) DEFAULT NULL,
  `Physician` varchar(255) DEFAULT NULL,
  `MA` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `angiogram`
--

INSERT INTO `angiogram` (`id`, `Patientname`, `PatientDOB`, `SubjectivePain`, `SubjectiveDistance`, `ObjectivePedal`, `ObjectivePedalLeft`, `ObjectivePedalRight`, `ObjectAmputation`, `ObjectAmputationLeftLevel`, `ObjectAmputationRightLevels`, `ObjectDependentrubor`, `ObjectChronicsores`, `ObjectWalkingImpairmentQuestionnairecompleted`, `ObjectRutherfordScore`, `ObjectAmbulatorystatus`, `ObjectFailedconservative`, `Objectdualanti_plateletstatin`, `Objectdualwksmos`, `Objectpletal`, `Objectpletalwksmos`, `ObjectStructurednon_structuredexercisewalkingprogram`, `ObjectStructurednon_structuredexercisewalkingprogramwksmos`, `ObjectSmokingcessationprogram`, `ObjectSmokingcessationprogramwksmos`, `RUTHERFORDSCORE`, `TestingABI_TBI`, `TestingLowerextremity`, `TestingCTA`, `medication`, `labwork`, `labworkInstruct`, `Physician`, `MA`) VALUES
(1, 'nanduy', '0003-02-05', '121', '2', '12', '12654', '86453', '654', '653454', '6541534', '1563', '121', '5', '5412', '23', '1', '3251', '56', '34165', '341', '65', '34165', '341', '5', '', '31', '1321', '5', '486', '541', '5641', '152121321', '321231'),
(2, 'nanduy', '0003-02-05', '121', '2', '12', '12654', '86453', '654', '653454', '6541534', '1563', '121', '5', '5412', '23', '1', '3251', '56', '34165', '341', '65', '34165', '341', '5', '2 Moderate Claudication', '31', '1321', '5', '486', '541', '5641', '152121321', '321231'),
(3, 'nanduy', '0003-02-05', '121', '2', '12', '12654', '86453', '654', '653454', '6541534', '1563', '121', '5', '5412', '23', '1', '3251', '56', '34165', '341', '65', '34165', '341', '5', '2 Moderate Claudication', '31', '1321', '5', '486', '541', '5641', '152121321', '4564'),
(4, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '121', '1212', '', '1123', '123151'),
(5, 'nandu', '0000-00-00', 'dsf', 'FEET', 'fsdg', 'dsfsd', 'fdsf', 'fdsf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '121', '1212', '', '1123', '123151'),
(6, 'nandu', '0000-00-00', 'dsf', 'FEET', 'fsdg', 'dsfsd', 'fdsf', 'fdsf', 'fdsf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '121', '1212', '', '1123', '123151'),
(7, 'nandu', '0000-00-00', 'dsf', 'FEET', 'fsdg', 'dsfsd', 'fdsf', 'fdsf', 'fdsf', 'fsdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '121', '1212', '', '1123', '123151'),
(8, 'nandu', '0000-00-00', 'dsf', 'FEET', 'fsdg', 'dsfsd', 'fdsf', 'fdsf', 'fdsf', 'fsdf', 'fdsf', 'fsdfsd', 'fdsf', '', 'fds', 'fds', '', '', '', '', '', '', '', '', '', '', '', '', '121', '1212', '', '1123', '123151'),
(9, 'nandu', '0000-00-00', '41564', 'BLOCKS', '14', '145241', '415', '24152', '1', '51', 'cdsf', '5', '15', '4 Rest Pain', 'fdssf', '1', '54', '54', '54', '5', '415', '4', '54', '545', NULL, '41', '541', '5', '15', '415', '4', '5', '54');

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `id` int(6) UNSIGNED NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `physician` varchar(50) NOT NULL,
  `procedure_date` varchar(15) NOT NULL,
  `procedure_name` varchar(50) NOT NULL,
  `allergies` varchar(255) DEFAULT NULL,
  `labs_names` varchar(255) DEFAULT NULL,
  `insurance` varchar(50) DEFAULT NULL,
  `primary_insurance` varchar(50) DEFAULT NULL,
  `primary_policy_number` varchar(20) DEFAULT NULL,
  `secondary_insurance` varchar(50) DEFAULT NULL,
  `secondary_policy_number` varchar(20) DEFAULT NULL,
  `authorization` varchar(50) DEFAULT NULL,
  `requested_date` date NOT NULL,
  `patients_language` varchar(30) DEFAULT NULL,
  `patients_transportation` varchar(30) DEFAULT NULL,
  `signature` varchar(100) DEFAULT NULL,
  `submitted_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `contact_number` varchar(15) DEFAULT NULL,
  `fax_number` varchar(15) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`id`, `patient_name`, `dob`, `physician`, `procedure_date`, `procedure_name`, `allergies`, `labs_names`, `insurance`, `primary_insurance`, `primary_policy_number`, `secondary_insurance`, `secondary_policy_number`, `authorization`, `requested_date`, `patients_language`, `patients_transportation`, `signature`, `submitted_date`, `contact_number`, `fax_number`, `patient_id`) VALUES
(31, 'NANDU', '0000-00-00', 'NA', '02-15-2024', 'sklwhdkj', 'jfkdbsfkjb', 'BADHgMN', 'beqwgd', 'DSGFD', '5646', 'EFDWTGJIOF', '541541', 'dkwqgfk', '0000-00-00', '5345swqr5fe', 'no', '', '2024-02-15 02:17:55', '1245312345', '71934156317', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `history_and_physical`
--

CREATE TABLE `history_and_physical` (
  `id` int(11) NOT NULL,
  `Patientname` varchar(255) DEFAULT NULL,
  `PatientDOB` date DEFAULT NULL,
  `Physician` varchar(255) DEFAULT NULL,
  `ProcedureDate` date DEFAULT NULL,
  `PROCEDURE` varchar(255) DEFAULT NULL,
  `Procedureothers` varchar(255) DEFAULT NULL,
  `INDICATION` varchar(255) DEFAULT NULL,
  `IndicationOthers` varchar(255) DEFAULT NULL,
  `HistoryofPresentIllness` varchar(50) DEFAULT NULL,
  `PastMedicalSurgicalHistory` varchar(50) DEFAULT NULL,
  `PreviousPeripheralVascularIntervention` varchar(255) DEFAULT NULL,
  `PreviousAngiogram` varchar(255) DEFAULT NULL,
  `RiskFactors` varchar(50) DEFAULT NULL,
  `Medications` varchar(50) DEFAULT NULL,
  `Medicationsothers` varchar(255) DEFAULT NULL,
  `LabsK` varchar(15) DEFAULT NULL,
  `BUN` varchar(15) DEFAULT NULL,
  `Glucose` varchar(15) DEFAULT NULL,
  `Creatnine` varchar(15) DEFAULT NULL,
  `MucomystGiven` varchar(15) DEFAULT NULL,
  `Impression` varchar(15) DEFAULT NULL,
  `Plan` varchar(15) DEFAULT NULL,
  `BPRight` varchar(50) DEFAULT NULL,
  `BPLeft` varchar(50) DEFAULT NULL,
  `P` varchar(11) DEFAULT NULL,
  `RB` varchar(11) DEFAULT NULL,
  `HFENT` varchar(11) DEFAULT NULL,
  `Lungs` varchar(50) DEFAULT NULL,
  `Abd` varchar(50) DEFAULT NULL,
  `Skin` varchar(50) DEFAULT NULL,
  `Heart` varchar(50) DEFAULT NULL,
  `Ext` varchar(50) DEFAULT NULL,
  `JVD` varchar(50) DEFAULT NULL,
  `CarotidBruit` varchar(50) DEFAULT NULL,
  `RenalBrui` varchar(50) DEFAULT NULL,
  `RadialBrachialRight` varchar(50) DEFAULT NULL,
  `RadialBrachialLeft` varchar(50) DEFAULT NULL,
  `FemoralRight` varchar(50) DEFAULT NULL,
  `FemoralLeft` varchar(50) DEFAULT NULL,
  `PoplitealRight` varchar(50) DEFAULT NULL,
  `PoplitealLeft` varchar(50) DEFAULT NULL,
  `PedalRightDP` varchar(50) DEFAULT NULL,
  `PedalLeftDP` varchar(50) DEFAULT NULL,
  `PedalRightPT` varchar(50) DEFAULT NULL,
  `PedalLeftPT` varchar(50) DEFAULT NULL,
  `ABIRight` varchar(15) DEFAULT NULL,
  `ABILeft` varchar(15) DEFAULT NULL,
  `RutherfordClass` varchar(50) DEFAULT NULL,
  `VendorRequest` varchar(255) DEFAULT NULL,
  `SpecialInstruction` varchar(50) DEFAULT NULL,
  `PhysicianSignature` varchar(255) DEFAULT NULL,
  `submiteddate` date DEFAULT NULL,
  `submitedtime` time DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history_and_physical`
--

INSERT INTO `history_and_physical` (`id`, `Patientname`, `PatientDOB`, `Physician`, `ProcedureDate`, `PROCEDURE`, `Procedureothers`, `INDICATION`, `IndicationOthers`, `HistoryofPresentIllness`, `PastMedicalSurgicalHistory`, `PreviousPeripheralVascularIntervention`, `PreviousAngiogram`, `RiskFactors`, `Medications`, `Medicationsothers`, `LabsK`, `BUN`, `Glucose`, `Creatnine`, `MucomystGiven`, `Impression`, `Plan`, `BPRight`, `BPLeft`, `P`, `RB`, `HFENT`, `Lungs`, `Abd`, `Skin`, `Heart`, `Ext`, `JVD`, `CarotidBruit`, `RenalBrui`, `RadialBrachialRight`, `RadialBrachialLeft`, `FemoralRight`, `FemoralLeft`, `PoplitealRight`, `PoplitealLeft`, `PedalRightDP`, `PedalLeftDP`, `PedalRightPT`, `PedalLeftPT`, `ABIRight`, `ABILeft`, `RutherfordClass`, `VendorRequest`, `SpecialInstruction`, `PhysicianSignature`, `submiteddate`, `submitedtime`, `patient_id`) VALUES
(1, 'NANDU', '0000-00-00', '121', '0003-12-12', 'Carotid Angio', '231', 'Critical renal stenosis (greater than 90%)', '321', '2', '', '2', '21', 'Current smoking', 'Beta Blocker', '3', '0', '21', '31', '31', '0', '1', '321', '3', '23', '13', '12', '1', '21', '2', '21', '1', '12', 'Yes', 'Yes', 'No', '21', '2', '1', '2', '2', '1', '21', '2', '2', '1', '2', '12', '5 (minor tissue loss)', '2', '12', '', '2024-02-04', '12:13:00', NULL),
(2, 'NANDU', '0000-00-00', '121', '0003-12-12', 'Carotid Angio', '231', 'Critical renal stenosis (greater than 90%)', '321', '2', '', '2', '21', 'Current smoking', 'Beta Blocker', '3', '0', '21', '31', '31', '0', '1', '321', '3', '23', '13', '12', '1', '21', '2', '21', '1', '12', 'Yes', 'Yes', 'No', '21', '2', '1', '2', '2', '1', '21', '2', '2', '1', '2', '12', '5 (minor tissue loss)', '2', '12', '', '2024-02-04', '12:13:00', NULL),
(3, '121', '2024-12-16', '12', '2024-12-12', 'Cardiac Catheterization', '123', 'Afib', '11', '121', 'Prev CABG', '121', '12', 'Current smoking', 'Coumadin', '12', '0', '12', '12', '12', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'No', 'Yes', 'No', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '5 (minor tissue loss)', '1', '1', '', '2024-02-04', '00:31:00', NULL),
(4, 'dsahk', '0000-00-00', 'hyfduihy', '0045-02-04', 'Carotid Angio', 'fjh', 'AV Block', 'fdl;js', 'hfdskj', 'Unstable angina', 'fdsjb', 'dshkj', 'Inactivity', 'Coumadin', 'ds/jkl', 'fdsklhj', 'uigfd', 'gufg', 'guh', 'hyuv', 'hjv', 'vj', 'vj', 'vvhj', 'vhj', 'vh', 'gvj', 'h', 'vj', 'gjk', 'gh', 'gjk', 'Yes', 'Yes', 'No', 'hdskjlhfkjal', 'jklhb', 'kjlh', 'jh', 'kjh', 'jkh', 'jkh', 'kj', 'h', 'jkh', 'hl', 'kjh', '2 (moderate claudication)', 'bjkhb', 'kjhjk', '', '2024-02-04', '16:21:00', NULL),
(5, '', '0000-00-00', '121', '0000-00-00', 'others', '', 'others', '', '', '', '', 'fkdjshgfkghs', '', 'others', '', '0.', '21321', '1', '21', '2', '12', '12', '3', '23', '121', '212', '12', '1', '21', '21', '212', '12', 'Yes', 'No', 'No', '023', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-02-15', '00:00:00', NULL),
(6, '', '0000-00-00', '121', '0000-00-00', 'others', '', 'others', 'fdsfsd', 'drfg', '', 'fdsfdsfg', '', 'others', 'others', '', '0.', '21321', '1', '21', '2', '12', '12', '3', '23', '121', '212', '12', '1', '21', '21', '212', '12', 'Yes', 'No', 'No', '', '01.', '210', '31', '21', '212', '1', '21', '21', '23', '12', '1', '2 (moderate claudication)', '2', '231', '', '2024-02-15', '17:26:00', NULL),
(7, 'NANDU', '0000-00-00', '121', '0000-00-00', 'others', 'safds', 'others', 'fdsfsd', 'drfg', 'others', 'fdsfdsfg', '', 'others', 'others', 'safdcsd', '0.', '21321', '1', '21', '2', '12', '12', '3', '23', '121', '212', '12', '1', '21', '21', '212', '12', 'Yes', 'No', 'No', '', '01.', '210', '31', '21', '212', '1', '21', '21', '23', '12', '1', '2 (moderate claudication)', '2', '231', '', '2024-02-15', '17:26:00', NULL),
(8, '', '0000-00-00', '', '0000-00-00', '', '', 'Select', '', '', 'Select', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Select', '', '', '', '2024-02-15', '00:00:00', NULL),
(9, '', '0000-00-00', '', '0000-00-00', '', '', 'Select', '', '', 'Select', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Select', '', '', '', '2024-02-15', '00:00:00', NULL),
(10, '', '0000-00-00', '', '0000-00-00', '', '', 'Select', '', '', 'Select', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Select', '', '', '', '2024-02-15', '00:00:00', NULL),
(11, 'dsgfd', '0000-00-00', 'dfgfd', '0000-00-00', 'Carotid Angio', '', 'AV Block', '', 'dsfgds', 'AICD', 'sdf', 'dsfgfd', 'DM', 'ACE', '', 'dsds', 'sdf', 'sfdf', 'fsdf', 'fsdf', 'fdsf', 'fsdf', 'fsdf', 'fsdf', 'fdsf', 'fdsf', 'ffsdf', 'fdsf', 'dfsf', 'dsf', 'df', 'dsfds', 'No', 'Yes', 'No', 'dfsf', 'sdf', 'fsdf', 'sd', 'fsdf', 'fsdfd', 'fdsf', 'fdsf', 'fsdf', 'fsdf', 'fdsf', 'fsdf', '2 (moderate claudication)', 'fdsfs', 'fsdf', '', '2024-02-15', '04:06:00', NULL),
(12, 'NANDU', '0000-00-00', 'NA', '0000-00-00', 'Loop Recorder Implant/Explant', '', 'Coronary Artery Disease', '', 'dsgf', 'AFib', 'fdsgf', 'fdsfg', 'Obesity', 'Coumadin', '', '265', '21351', '31321', '2123', '12123', '1212', '1212', '1212', '121', '21', '2', '12', '1', '21', '21', '2', '12', 'No', 'Yes', 'No', '5364', '1231', '12', '12', '12', '12', '12', '12', '12', '12', '12', '12', '1 (mild claudication)', '12', '12', '', '2024-02-16', '00:01:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `venogram`
--

CREATE TABLE `venogram` (
  `id` int(11) NOT NULL,
  `Patientname` varchar(255) DEFAULT NULL,
  `PatientDOB` date DEFAULT NULL,
  `SubjectiveLifestyle` varchar(255) DEFAULT NULL,
  `SubjectiveSymptoms` varchar(255) DEFAULT NULL,
  `SubjectiveErectiledysfunction` varchar(255) DEFAULT NULL,
  `ObjectiveStemmersign` varchar(255) DEFAULT NULL,
  `ObjectiveBuffalohump` varchar(255) DEFAULT NULL,
  `ObjectiveEdemachronicintermittent` varchar(255) DEFAULT NULL,
  `ObjectiveEdemapittingnon_pitting` varchar(255) DEFAULT NULL,
  `ObjectiveEdemaLEFT` varchar(255) DEFAULT NULL,
  `ObjectiveVaricoseveinssmalllarge` varchar(255) DEFAULT NULL,
  `ObjectiveLimitedmobility` varchar(255) DEFAULT NULL,
  `ObjectivePreviousSSVGSV` varchar(255) DEFAULT NULL,
  `ObjectiveDVt` varchar(255) DEFAULT NULL,
  `Objectivenew` varchar(255) DEFAULT NULL,
  `Objectiverecurrent` varchar(255) DEFAULT NULL,
  `ObjectiveCOPD` varchar(255) DEFAULT NULL,
  `ObjectiveOSA` varchar(255) DEFAULT NULL,
  `ObjectivePulmonaryembolism` varchar(255) DEFAULT NULL,
  `ObjectiveBMI` varchar(255) DEFAULT NULL,
  `Objectiveunder` varchar(255) DEFAULT NULL,
  `Objectivenorm` varchar(255) DEFAULT NULL,
  `Objectiveover` varchar(255) DEFAULT NULL,
  `Objectiveobese` varchar(255) DEFAULT NULL,
  `Objectiveextreme` varchar(255) DEFAULT NULL,
  `ObjectiveOld` varchar(255) DEFAULT NULL,
  `ObjectiveChronic` varchar(255) DEFAULT NULL,
  `ObjectiveHormone` varchar(255) DEFAULT NULL,
  `ObjectiveThrombocytopenia` varchar(255) DEFAULT NULL,
  `ObjectiveThrombocytopeniaTYPE` varchar(255) DEFAULT NULL,
  `ObjectiveCanpatient` varchar(255) DEFAULT NULL,
  `ObjectiveFailed` varchar(255) DEFAULT NULL,
  `ObjectiveLegelevation` varchar(255) DEFAULT NULL,
  `ObjectiveWEEKSMONTHS` varchar(255) DEFAULT NULL,
  `ObjectiveDiuretics` varchar(255) DEFAULT NULL,
  `ObjectiveDiureticsWEEKSMONTHS` varchar(255) DEFAULT NULL,
  `ObjectiveCompression` varchar(255) DEFAULT NULL,
  `ObjectiveCompressionWEEKSMONTHS` varchar(255) DEFAULT NULL,
  `CEAPSCORE` varchar(255) DEFAULT NULL,
  `TestingLower` varchar(255) DEFAULT NULL,
  `medication` varchar(255) DEFAULT NULL,
  `labwork` varchar(255) DEFAULT NULL,
  `labworkInstruct` varchar(255) DEFAULT NULL,
  `Physician` varchar(255) DEFAULT NULL,
  `MA` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venogram`
--

INSERT INTO `venogram` (`id`, `Patientname`, `PatientDOB`, `SubjectiveLifestyle`, `SubjectiveSymptoms`, `SubjectiveErectiledysfunction`, `ObjectiveStemmersign`, `ObjectiveBuffalohump`, `ObjectiveEdemachronicintermittent`, `ObjectiveEdemapittingnon_pitting`, `ObjectiveEdemaLEFT`, `ObjectiveVaricoseveinssmalllarge`, `ObjectiveLimitedmobility`, `ObjectivePreviousSSVGSV`, `ObjectiveDVt`, `Objectivenew`, `Objectiverecurrent`, `ObjectiveCOPD`, `ObjectiveOSA`, `ObjectivePulmonaryembolism`, `ObjectiveBMI`, `Objectiveunder`, `Objectivenorm`, `Objectiveover`, `Objectiveobese`, `Objectiveextreme`, `ObjectiveOld`, `ObjectiveChronic`, `ObjectiveHormone`, `ObjectiveThrombocytopenia`, `ObjectiveThrombocytopeniaTYPE`, `ObjectiveCanpatient`, `ObjectiveFailed`, `ObjectiveLegelevation`, `ObjectiveWEEKSMONTHS`, `ObjectiveDiuretics`, `ObjectiveDiureticsWEEKSMONTHS`, `ObjectiveCompression`, `ObjectiveCompressionWEEKSMONTHS`, `CEAPSCORE`, `TestingLower`, `medication`, `labwork`, `labworkInstruct`, `Physician`, `MA`) VALUES
(1, 'jdshkfj', '0121-06-16', '15631', '1531', '1312', '2132', '123', '1231', '316+', '15634-', '564', '315', '316+', '56', '54+', '56', '545', '12545', '51545', '545', '454', '121', '1212', '121', '121', '12', '1212', '485454', '54', '54', '45', '45', '45', '545', '454', '5', '45454', '45', 'C2 Large varicose veins', '48645', '45645', '45643', '1653', '15135', '1321');

-- --------------------------------------------------------

--
-- Table structure for table `walking`
--

CREATE TABLE `walking` (
  `id` int(11) NOT NULL,
  `Patientname` varchar(255) DEFAULT NULL,
  `PatientDOB` date DEFAULT NULL,
  `Baseline` varchar(255) DEFAULT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL,
  `4` varchar(255) DEFAULT NULL,
  `5` varchar(255) DEFAULT NULL,
  `6` varchar(255) DEFAULT NULL,
  `7` varchar(255) DEFAULT NULL,
  `8` varchar(255) DEFAULT NULL,
  `9` varchar(255) DEFAULT NULL,
  `10` varchar(255) DEFAULT NULL,
  `11` varchar(255) DEFAULT NULL,
  `12` varchar(255) DEFAULT NULL,
  `13` varchar(255) DEFAULT NULL,
  `14` varchar(255) DEFAULT NULL,
  `15` varchar(255) DEFAULT NULL,
  `PatientSignature` varchar(255) DEFAULT NULL,
  `submiteddate` date DEFAULT NULL,
  `PhysicianSignature` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `walking`
--

INSERT INTO `walking` (`id`, `Patientname`, `PatientDOB`, `Baseline`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `PatientSignature`, `submiteddate`, `PhysicianSignature`) VALUES
(1, 'nandu', '5454-12-12', '6 months', '2', '2', '3', '3', '3', '3', '0', '0', '1', '2', '2', '2', '3', '3', '4', '', '0000-00-00', ''),
(2, 'nandu', '5454-12-12', '6 months', '2', '2', '3', '3', '3', '3', '0', '0', '1', '2', '2', '2', '3', '3', '4', '', '2024-02-04', ''),
(3, 'nandu', '5454-12-12', '36 months', '2', '3', '1', '2', '2', '1', '4', '3', '4', '0', '0', '0', '1', '2', '2', '', '2024-02-04', ''),
(4, '', '0000-00-00', '1 month', '3', '2', '1', '0', '4', '3', '2', '1', '0', '4', '3', '2', '1', '0', '4', '', '2024-02-16', ''),
(5, '', '0000-00-00', '1 month', '3', '2', '1', '0', '4', '3', '2', '1', '0', '4', '3', '2', '1', '0', '4', '', '2024-02-16', ''),
(6, 'nandu', '0000-00-00', '1 month', '3', '2', '1', '0', '4', '3', '2', '1', '0', '4', '3', '2', '1', '0', '4', '', '2024-02-16', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angiogram`
--
ALTER TABLE `angiogram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_patient_id` (`patient_id`);

--
-- Indexes for table `history_and_physical`
--
ALTER TABLE `history_and_physical`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_patient_id` (`patient_id`);

--
-- Indexes for table `venogram`
--
ALTER TABLE `venogram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `walking`
--
ALTER TABLE `walking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angiogram`
--
ALTER TABLE `angiogram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `form1`
--
ALTER TABLE `form1`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `history_and_physical`
--
ALTER TABLE `history_and_physical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `venogram`
--
ALTER TABLE `venogram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `walking`
--
ALTER TABLE `walking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
