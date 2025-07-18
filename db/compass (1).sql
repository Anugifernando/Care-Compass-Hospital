-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 24, 2025 at 07:00 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compass`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

DROP TABLE IF EXISTS `appoinment`;
CREATE TABLE IF NOT EXISTS `appoinment` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `DrId` int NOT NULL,
  `PatientId` int NOT NULL,
  `DateTime` datetime NOT NULL,
  `Note` varchar(999) NOT NULL,
  `Decision` int NOT NULL,
  `Created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`Id`, `DrId`, `PatientId`, `DateTime`, `Note`, `Decision`, `Created`) VALUES
(3, 4, 2, '2025-02-28 20:13:00', 'I have a history of high blood pressure and take medication for it.', 1, '2025-02-18 13:13:11'),
(2, 3, 2, '2025-02-21 13:10:00', 'I am allergic to penicillin and some other antibiotics.', 0, '2025-02-18 13:10:12'),
(5, 4, 1, '2025-02-26 15:45:00', 'I have been experiencing severe headaches for the past two weeks, especially in the mornings.', 1, '2025-02-24 22:41:12'),
(6, 2, 3, '2025-02-27 22:30:00', 'I have been feeling fatigued and dizzy frequently over the last few days.', 1, '2025-02-24 23:05:39'),
(7, 3, 4, '2025-02-28 16:30:00', 'I recently had surgery and need a follow-up check-up.', 1, '2025-02-24 23:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `desciption` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `decision` int NOT NULL DEFAULT '1',
  `contact` longtext NOT NULL,
  `is_deleted` int NOT NULL DEFAULT '0',
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'doc',
  `specialty` varchar(256) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`Id`, `full_name`, `desciption`, `decision`, `contact`, `is_deleted`, `img`, `specialty`) VALUES
(1, 'Dr.Nimal Perera', '15+ years of experience in diagnosing and treating chronic illnesses.', 0, 'internalmedicine@carecompass.com | +94 71 123 4567', 0, 'Dr.Nimal Perera.jpg', 'Diabetes, hypertension, and asthma management.'),
(2, 'Dr.Ruwan Fernando', '18+ years specializing in heart conditions.', 1, 'drfernando@carecompass.com | +94 72 123 4567', 0, 'Dr.Ruwan Fernando.jpg', 'Interventional cardiology, heart failure treatment.'),
(3, 'Dr.Suranga Jayawardana', '16+ years in treating neurological conditions.', 1, 'drsuranga@carecompass.com | +94 76 123 4567', 0, 'Dr.Suranga Jayawardana.jpg', 'Epilepsy, migraines, and stroke recovery.'),
(4, 'Dr.Sunil Wijerathne', '20+ years of experience in advanced gastrointestinal procedures.', 1, 'drsunil@carecompass.com | +94 77 123 4567', 0, 'Dr.Sunil Wijerathne.jpg', 'Endoscopic procedures, management of liver disorders'),
(5, 'Dr.Harini Ekanayake', '9+ years in musculoskeletal care.', 0, 'drharini@carecompass.com | +94 75 987 6543 ', 0, 'Dr.Harini Ekanayake.jpg', 'Sports injuries, spinal disorders.'),
(6, 'Dr.Anusha Vijesinghe', ' 8+ years in general pediatrics.', 0, 'dranusha@carecompass.com | +94 73 987 6543', 0, 'Dr.Anusha Vijesinghe.jpg', 'Neonatal care and pediatric nutrition.');

-- --------------------------------------------------------

--
-- Table structure for table `labtests`
--

DROP TABLE IF EXISTS `labtests`;
CREATE TABLE IF NOT EXISTS `labtests` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `note` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `patient` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `file` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `labtests`
--

INSERT INTO `labtests` (`Id`, `note`, `patient`, `file`) VALUES
(9, 'Fasting Blood Sugar', '2', '67bad7836c2b7.pdf'),
(10, 'Lab Report', '1', '67bcaa85344bc.pdf'),
(11, 'Lab Report', '4', '67bcb118a8011.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `medicalreports`
--

DROP TABLE IF EXISTS `medicalreports`;
CREATE TABLE IF NOT EXISTS `medicalreports` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `note` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `patient` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `file` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicalreports`
--

INSERT INTO `medicalreports` (`Id`, `note`, `patient`, `file`) VALUES
(10, 'Medical Record', '1', '67bca6daa5602.pdf'),
(11, 'Medical Record', '2', '67bcab50d44d8.pdf'),
(12, 'Medical Record', '3', '67bcaceb9e5c4.pdf'),
(13, 'Medical Record', '4', '67bcafc47b4ed.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `img` varchar(259) DEFAULT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `img`, `description`, `category`) VALUES
(1, 'General Medicine', 'General Medicine.jpg', 'Comprehensive medical care for all age groups.', 'Hospital Services'),
(2, 'Pediatrics', 'Pediatrics.jpg', 'Specialized care for infants, children, and adolescents.', 'Hospital Services'),
(3, 'Cardiology', 'Cardiology.jpg', 'Heart care services including ECG and stress tests.', 'Hospital Services'),
(4, 'Orthopedics', 'Orthopedics.jpg', 'Treatment for bone and joint-related conditions.', 'Hospital Services'),
(5, 'Neurology', 'Neurology.jpg', 'Specialized care for brain and nerve disorders.', 'Hospital Services'),
(6, 'Clinical Chemistry Lab', 'Clinical Chemistry Lab.jpg', 'Analyzes blood for glucose, cholesterol, and other biomarkers.', 'Laboratory Services'),
(7, 'Hematology Lab', 'Hematology Lab.jpg', 'Studies blood to diagnose conditions like anemia.', 'Laboratory Services'),
(8, 'Microbiology Lab', 'Microbiology Lab.jpg', 'Identifies infections caused by bacteria, viruses, and fungi.', 'Laboratory Services'),
(9, 'Pathology Lab', 'Pathology Lab.jpg', 'Examines tissues and cells to diagnose diseases like cancer.', 'Laboratory Services'),
(10, 'Immunology Lab', 'Immunology Lab.jpg', 'Tests for immune system disorders and allergies.', 'Laboratory Services'),
(11, '24/7 Emergency Services', 'Emergency Services.jpg', 'Immediate care for critical illnesses and injuries.', 'Emergency Information'),
(12, 'Trauma Care', 'Trauma Care.jpg', 'Specialized care for accident and injury victims.', 'Emergency Information'),
(13, 'Poison Control', 'Poison Control.jpg', 'Emergency treatment and consultation for poison exposure.', 'Emergency Information'),
(14, 'Stroke Care', 'Stroke Care.jpg', 'Immediate intervention for stroke patients to minimize damage.', 'Emergency Information'),
(15, 'Heart Attack Response', 'Heart Attack Response.jpg', 'Emergency care for cardiac arrest and heart attacks.', 'Emergency Information');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(259) NOT NULL,
  `password` varchar(259) NOT NULL,
  `is_deleted` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Id`, `username`, `password`, `is_deleted`) VALUES
(1, '0', '2000', 0),
(2, '0', '2000', 0),
(3, 'anugi', '123456', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `decision` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`Id`, `full_name`, `telephone`, `headline`, `note`, `decision`) VALUES
(17, 'Janaki Rodrigo', '+94 75 567 8901', 'Highly Professional and Reliable', 'From the friendly receptionists to the experienced doctors, Care Compass Hospitals delivers a five-star experience. I especially appreciated the availability of specialized services like cardiology and pediatrics under one roof. Their online patient portal is user-friendly and makes accessing lab reports so easy. I trust this hospital with my family’s health and well-being.', 1),
(16, 'Tharindu Wickramasinghe', '+94 79 456 7890', 'Outstanding Ophthalmology Department', 'I visited the Ophthalmology department for a cataract surgery, and the results were life-changing. The procedure was smooth, and Dr. Ruwan provided excellent post-operative care. The hospital’s state-of-the-art equipment and attention to detail set them apart. Thank you for restoring my vision!', 0),
(15, 'Sanduni Jayasinghe', '+94 76 345 6789', 'Compassionate Mental Health Support', 'The Psychiatry and Psychology team at Care Compass Hospitals is simply amazing. Dr. Anura and Dr. Sanduni helped me overcome my anxiety with personalized therapy sessions. The counseling sessions are affordable and conducted in a safe, comfortable environment. If you’re looking for mental health support, this is the place to go.', 1),
(14, 'Ruwan Perera', '+94 78 234 5678', 'Best Emergency Services!', 'Care Compass Hospitals saved my life! The emergency team was incredibly responsive, and the ambulance arrived within minutes. Their ICU facilities and the team of specialists were top-notch. I’m forever grateful for their excellent care and highly recommend this hospital network for emergency services.', 1),
(13, 'Priyanka Silva', '+94 77 123 4567', 'Exceptional Medical Care!', 'I recently visited Care Compass Hospitals for a routine health check-up, and the experience was outstanding. The doctors were thorough, the nursing staff was caring, and the facilities were spotless. The online appointment system made the entire process so convenient. I highly recommend their laboratory services for quick and accurate results.', 1),
(22, 'Ravi De Silva', '+94 76 012 5678', 'Comprehensive Healthcare Under One Roof', 'Care Compass Hospitals has become my family’s go-to healthcare provider. From routine health check-ups to specialized treatments, they offer everything you need under one roof. Their parking facilities and cafeteria are also excellent, making visits more convenient. The doctors and staff truly go above and beyond for their patients.', 1),
(18, 'Anjali Fernando', '+94 71 678 1234', 'A Hospital That Truly Cares', 'Care Compass Hospitals exceeded my expectations. The staff is incredibly compassionate, and the doctors take the time to explain every detail. I recently underwent a minor surgery, and the post-operative care was remarkable. Their pharmacy services are also efficient and well-stocked.', 1),
(19, 'Kasun Rathnayake', '+94 77 789 2345', 'Impressive Pediatric Services', 'My child needed treatment for a persistent fever, and the pediatric department at Care Compass Hospitals was outstanding. Dr. Nilanthi was patient, kind, and extremely knowledgeable. The entire process, from booking the appointment to getting lab tests done, was smooth and hassle-free.', 1),
(20, 'Dinesh Wijesinghe', '+94 78 890 3456', 'Reliable Cardiology Department', 'The cardiology team at Care Compass Hospitals is second to none. Dr. Chamath and his team provided exceptional care during my father’s heart surgery. Their advanced facilities and focus on patient safety gave us peace of mind throughout the treatment.', 1),
(21, 'Malini Jayawardena', '+94 72 901 4567', 'Excellent Laboratory Services', 'The lab services at Care Compass Hospitals are incredibly efficient. I booked a few tests online, and the results were delivered promptly through their patient portal. The staff explained everything clearly, and I felt confident about the accuracy of the results. Highly recommend their diagnostic services!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `telephone` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `is_deleted` int NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `full_name`, `email`, `telephone`, `password`, `is_deleted`) VALUES
(1, 'Madawa Perera', 'madawa@gmail.com', '072 2222 586', '123456', 0),
(2, 'Anugi Fernando', 'anugi@gmail.com', '072 32432423', '123456', 0),
(3, 'Imalka Sewwandi', 'imalkasewwandi@gmail.com', '+94 79 456 7896', '123456', 0),
(4, 'thevni Fernando', 'thevni@gmail.com', '+94 78 234 5678', '123456', 0),
(5, 'Amal Perera', 'amal@gmail.com', '072 7778 232', '12345678', 0),
(6, 'Suranga Fernando', 'suranga@gmail.com', '072 2222 777', '123456', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
