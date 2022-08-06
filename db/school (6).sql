-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 11:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `sch_accounts`
--

CREATE TABLE `sch_accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `admission_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `amount` double NOT NULL DEFAULT 0,
  `remark` varchar(45) NOT NULL DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sch_accounts`
--

INSERT INTO `sch_accounts` (`id`, `admission_id`, `amount`, `remark`, `created_at`, `updated_at`) VALUES
(1, 1, -3500, 'Bill', '2022-06-04 00:00:00', '2022-06-04 00:00:00'),
(2, 1, -100, 'Bill', '2022-06-04 00:00:00', '2022-06-04 00:00:00'),
(3, 1, 3000, 'payment', '2022-06-04 00:00:00', '2022-06-04 00:00:00'),
(4, 7, -3000, 'Bill', '2022-06-06 00:00:00', '2022-06-06 00:00:00'),
(5, 2, -3500, 'Bill', '2022-06-06 00:00:00', '2022-06-06 00:00:00'),
(6, 4, -3500, 'Bill', '2022-06-06 00:00:00', '2022-06-06 00:00:00'),
(7, 5, -3500, 'Bill', '2022-06-06 00:00:00', '2022-06-06 00:00:00'),
(8, 8, -3500, 'Bill', '2022-06-06 00:00:00', '2022-06-06 00:00:00'),
(9, 9, -3500, 'Bill', '2022-06-06 00:00:00', '2022-06-06 00:00:00'),
(10, 3, 5000, 'payment', '2022-06-07 00:00:00', '2022-06-07 00:00:00'),
(11, 7, 3000, 'payment', '2022-06-07 00:00:00', '2022-06-07 00:00:00'),
(12, 4, 100, 'payment', '2022-06-07 00:00:00', '2022-06-07 00:00:00'),
(13, 9, 500, 'payment', '2022-06-07 00:00:00', '2022-06-07 00:00:00'),
(14, 9, -3100, 'Bill', '2022-06-21 00:00:00', '2022-06-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sch_admidcards`
--

CREATE TABLE `sch_admidcards` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `academic_year` varchar(45) NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `roll` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sch_admidcards`
--

INSERT INTO `sch_admidcards` (`id`, `student_id`, `class_id`, `academic_year`, `department_id`, `roll`) VALUES
(1, 2, 3, '1970-01-01 00:00:00', 4, '05'),
(2, 5, 1, '1970-01-01 00:00:00', 2, '11'),
(3, 3, 4, '1970-01-01 00:00:00', 4, '85'),
(4, 3, 5, '1970-01-01', 3, '01');

-- --------------------------------------------------------

--
-- Table structure for table `sch_admissions`
--

CREATE TABLE `sch_admissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `section_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `roll` int(10) UNSIGNED DEFAULT NULL,
  `department_id` int(10) UNSIGNED DEFAULT NULL,
  `session_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_admissions`
--

INSERT INTO `sch_admissions` (`id`, `student_id`, `class_id`, `section_id`, `user_id`, `photo`, `created_at`, `updated_at`, `roll`, `department_id`, `session_id`) VALUES
(1, 1, 6, 4, 1, '1.jpg', '2022-05-16 00:00:00', '2022-05-16 12:58:59', 10, 4, 3),
(2, 2, 5, 5, 1, '2.jpg', '2022-05-17 00:00:00', '2022-05-17 10:41:53', 10, 3, 3),
(3, 3, 6, 4, 1, '3.jpg', NULL, NULL, 11, 4, 3),
(4, 4, 5, 4, 1, '4.jpg', NULL, NULL, 1, 4, 3),
(5, 5, 3, 4, 1, '5.jpg', '2022-05-28 00:00:00', '2022-05-28 12:32:34', 5, 4, 1),
(6, 6, 9, 4, 1, '6.jpg', '2022-06-05 00:00:00', '2022-06-05 10:28:22', 12, 4, 1),
(7, 7, 9, 4, 1, '7.png', '2022-06-05 00:00:00', '2022-06-05 10:29:19', 11, 4, 1),
(8, 8, 9, 4, 1, '8.jpg', '2022-06-05 00:00:00', '2022-06-05 10:29:45', 13, 4, 1),
(9, 9, 9, 4, 1, '9.jpg', '2022-06-13 00:00:00', '2022-06-13 09:01:41', 4, 4, 1),
(10, 10, 6, 4, 1, '10.jpg', '2022-06-13 00:00:00', '2022-06-13 09:02:10', 4, 4, 1),
(11, 11, 6, 4, 1, '11.jpg', '2022-06-13 00:00:00', '2022-06-13 09:02:57', 5, 4, 1),
(12, 12, 9, 4, 1, '12.jpg', '2022-06-13 00:00:00', '2022-06-13 09:03:52', 6, 4, 1),
(13, 13, 9, 4, 1, '13.jpg', '2022-06-13 00:00:00', '2022-06-13 09:04:21', 7, 4, 1),
(14, 14, 9, 4, 1, '14.jpg', '2022-06-13 00:00:00', '2022-06-13 09:31:59', 6, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sch_attendences`
--

CREATE TABLE `sch_attendences` (
  `id` int(10) UNSIGNED NOT NULL,
  `admission_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `class_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `subject_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `teacher_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `section_id` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sch_attendences`
--

INSERT INTO `sch_attendences` (`id`, `admission_id`, `class_id`, `subject_id`, `teacher_id`, `date`, `time`, `created_at`, `updated_at`, `section_id`) VALUES
(1, 1, 6, 5, 0, '2022-05-30', '09:39:24', '2022-05-30 00:00:00', '2022-05-30 00:00:00', 0),
(2, 2, 6, 5, 0, '2022-05-30', '09:39:24', '2022-05-30 00:00:00', '2022-05-30 00:00:00', 0),
(3, 1, 6, 1, 2, '2022-05-30', '09:41:25', '2022-05-30 00:00:00', '2022-05-30 00:00:00', 0),
(4, 1, 6, 1, 2, '2022-05-30', '09:41:47', '2022-05-30 00:00:00', '2022-05-30 00:00:00', 0),
(5, 2, 6, 1, 1, '2022-05-30', '10:04:00', '2022-05-30 00:00:00', '2022-05-30 00:00:00', 0),
(6, 1, 6, 1, 1, '2022-05-30', '10:44:38', '2022-05-30 00:00:00', '2022-05-30 00:00:00', 0),
(7, 3, 6, 1, 1, '2022-05-30', '10:44:38', '2022-05-30 00:00:00', '2022-05-30 00:00:00', 0),
(8, 3, 6, 1, 1, '2022-05-31', '09:00:50', '2022-05-31 00:00:00', '2022-05-31 00:00:00', 4),
(9, 1, 6, 8, 0, '2022-06-06', '09:13:16', '2022-06-06 00:00:00', '2022-06-06 00:00:00', 4),
(10, 3, 6, 8, 0, '2022-06-06', '09:13:16', '2022-06-06 00:00:00', '2022-06-06 00:00:00', 4),
(11, 1, 6, 1, 5, '2022-06-07', '08:46:43', '2022-06-07 00:00:00', '2022-06-07 00:00:00', 4),
(12, 3, 6, 1, 5, '2022-06-07', '08:46:43', '2022-06-07 00:00:00', '2022-06-07 00:00:00', 4),
(13, 4, 5, 1, 6, '2022-06-07', '08:46:59', '2022-06-07 00:00:00', '2022-06-07 00:00:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sch_bill_details`
--

CREATE TABLE `sch_bill_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `service_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `fee` double NOT NULL DEFAULT 0,
  `qty` double NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sch_bill_details`
--

INSERT INTO `sch_bill_details` (`id`, `account_id`, `service_id`, `fee`, `qty`, `created_at`, `updated_at`) VALUES
(1, 2, 5, 3000, 2, '2022-05-28 00:00:00', '2022-05-28 12:03:43'),
(2, 2, 7, 500, 1, '2022-05-28 00:00:00', '2022-05-28 12:03:43'),
(3, 3, 5, 3000, 1, '2022-05-28 00:00:00', '2022-05-28 12:04:41'),
(4, 4, 6, 2000, 1, '2022-05-28 00:00:00', '2022-05-28 12:06:10'),
(5, 4, 2, 500, 1, '2022-05-28 00:00:00', '2022-05-28 12:06:10'),
(6, 5, 5, 3000, 1, '2022-05-28 00:00:00', '2022-05-28 12:17:09'),
(7, 6, 7, 500, 10, '2022-05-28 00:00:00', '2022-05-28 12:18:29'),
(8, 1, 5, 3000, 1, '2022-06-04 00:00:00', '2022-06-04 13:01:32'),
(9, 1, 7, 500, 1, '2022-06-04 00:00:00', '2022-06-04 13:01:32'),
(10, 2, 4, 100, 1, '2022-06-04 00:00:00', '2022-06-04 13:02:48'),
(11, 4, 5, 3000, 1, '2022-06-06 00:00:00', '2022-06-06 12:08:30'),
(12, 5, 5, 3000, 1, '2022-06-06 00:00:00', '2022-06-06 12:09:12'),
(13, 5, 7, 500, 1, '2022-06-06 00:00:00', '2022-06-06 12:09:12'),
(14, 6, 5, 3000, 1, '2022-06-06 00:00:00', '2022-06-06 12:09:26'),
(15, 6, 7, 500, 1, '2022-06-06 00:00:00', '2022-06-06 12:09:26'),
(16, 7, 5, 3000, 1, '2022-06-06 00:00:00', '2022-06-06 12:09:38'),
(17, 7, 7, 500, 1, '2022-06-06 00:00:00', '2022-06-06 12:09:38'),
(18, 8, 5, 3000, 1, '2022-06-06 00:00:00', '2022-06-06 12:09:53'),
(19, 8, 7, 500, 1, '2022-06-06 00:00:00', '2022-06-06 12:09:54'),
(20, 9, 5, 3000, 1, '2022-06-06 00:00:00', '2022-06-06 12:10:09'),
(21, 9, 7, 500, 1, '2022-06-06 00:00:00', '2022-06-06 12:10:09'),
(22, 14, 5, 3000, 1, '2022-06-21 00:00:00', '2022-06-21 18:50:07'),
(23, 14, 4, 100, 1, '2022-06-21 00:00:00', '2022-06-21 18:50:07');

-- --------------------------------------------------------

--
-- Table structure for table `sch_clas`
--

CREATE TABLE `sch_clas` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_clas`
--

INSERT INTO `sch_clas` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'One', NULL, NULL),
(2, 'Two', NULL, NULL),
(3, 'Three', NULL, NULL),
(4, 'Four', NULL, NULL),
(5, 'Five', NULL, NULL),
(6, 'Six', NULL, NULL),
(7, 'Seven', NULL, NULL),
(8, 'Eight', NULL, NULL),
(9, 'Nine', NULL, NULL),
(10, 'Ten', NULL, NULL),
(11, 'Eleven', NULL, NULL),
(12, 'Tewelv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sch_departments`
--

CREATE TABLE `sch_departments` (
  `id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(45) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_departments`
--

INSERT INTO `sch_departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Science', NULL, NULL),
(2, 'Arts', NULL, NULL),
(3, 'Business Studies', NULL, NULL),
(4, 'General', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sch_exams`
--

CREATE TABLE `sch_exams` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `section_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `department_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `exam_date` date DEFAULT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `session_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `room_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `exam_type_id` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sch_exams`
--

INSERT INTO `sch_exams` (`id`, `class_id`, `section_id`, `department_id`, `exam_date`, `subject_id`, `session_id`, `created_at`, `updated_at`, `room_id`, `exam_type_id`) VALUES
(1, 9, 1, 4, NULL, 1, 1, '2022-05-31 00:00:00', '2022-05-31 00:00:00', 3, 6),
(2, 1, 1, 1, '2022-06-06', 1, 1, '2022-05-31 00:00:00', '2022-06-04 00:00:00', 1, 6),
(3, 6, 3, 4, '2022-06-07', 2, 1, '2022-05-31 00:00:00', '2022-05-31 00:00:00', 3, 6),
(4, 6, 3, 4, '2022-06-08', 3, 1, '2022-06-04 00:00:00', '2022-06-04 09:50:03', 3, 6),
(5, 6, 3, 4, '2022-06-09', 4, 1, '2022-06-04 00:00:00', '2022-06-04 09:50:26', 3, 6),
(6, 6, 3, 4, '2022-06-06', 1, 1, '2022-06-04 00:00:00', '2022-06-04 00:00:00', 3, 6),
(7, 6, 3, 4, '2022-06-11', 5, 1, '2022-06-04 00:00:00', '2022-06-04 00:00:00', 3, 6),
(8, 6, 4, 4, '2022-06-30', 9, 4, '2022-06-07 00:00:00', '2022-06-07 00:00:00', 5, 6),
(9, 1, 1, 4, '2022-06-07', 2, 1, '2022-06-09 00:00:00', '2022-06-09 00:00:00', 5, 6),
(10, 1, 1, 4, '2022-06-10', 3, 1, '2022-06-09 00:00:00', '2022-06-09 00:00:00', 5, 6),
(11, 9, 4, 4, '2022-06-07', 1, 1, '2022-06-11 00:00:00', '2022-06-11 00:00:00', 5, 6),
(12, 9, 4, 4, '2022-06-08', 2, 1, '2022-06-11 00:00:00', '2022-06-11 00:00:00', 2, 6),
(13, 9, 4, 4, '2022-06-23', 3, 1, '2022-06-22 00:00:00', '2022-06-22 00:00:00', 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `sch_exam_types`
--

CREATE TABLE `sch_exam_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sch_exam_types`
--

INSERT INTO `sch_exam_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Class Test', NULL, NULL),
(2, 'Monthly', NULL, NULL),
(3, 'First Semister', NULL, NULL),
(4, 'Second Semister', NULL, NULL),
(5, 'Half Yearly', NULL, NULL),
(6, 'Yearly/ Final', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sch_genders`
--

CREATE TABLE `sch_genders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sch_genders`
--

INSERT INTO `sch_genders` (`id`, `name`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `sch_payments`
--

CREATE TABLE `sch_payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `admission_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `remark` varchar(45) DEFAULT NULL,
  `amount` float NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sch_payments`
--

INSERT INTO `sch_payments` (`id`, `admission_id`, `remark`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, '52', 400, NULL, NULL),
(2, 1, NULL, 3600, '2022-05-17 00:00:00', '2022-05-17 00:00:00'),
(3, 4, '100', 4500, '2022-05-17 00:00:00', '2022-05-17 00:00:00'),
(4, 4, 'ok', 8000, '2022-05-21 00:00:00', '2022-05-21 00:00:00'),
(5, 3, 'paid', 6000, '2022-05-26 00:00:00', '2022-05-26 00:00:00'),
(6, 2, 'dsafd', 3000, '2022-05-26 00:00:00', '2022-05-26 00:00:00'),
(7, 2, 'dsafd', 0, '2022-05-26 00:00:00', '2022-05-26 00:00:00'),
(8, 6, 'dsaf', 3100, '2022-05-26 00:00:00', '2022-05-26 00:00:00'),
(9, 3, 'vnjh', 3000, '2022-05-26 00:00:00', '2022-05-26 00:00:00'),
(10, 6, 'gvhjug', 100, '2022-05-26 00:00:00', '2022-05-26 00:00:00'),
(11, 6, 'gvhjug', 100, '2022-05-26 00:00:00', '2022-05-26 00:00:00'),
(12, 4, 'paid', 2100, '2022-05-26 00:00:00', '2022-05-26 00:00:00'),
(13, 1, NULL, 3000, '2022-06-04 00:00:00', '2022-06-04 00:00:00'),
(14, 3, NULL, 5000, '2022-06-07 00:00:00', '2022-06-07 00:00:00'),
(15, 7, NULL, 3000, '2022-06-07 00:00:00', '2022-06-07 00:00:00'),
(16, 4, NULL, 100, '2022-06-07 00:00:00', '2022-06-07 00:00:00'),
(17, 9, NULL, 500, '2022-06-07 00:00:00', '2022-06-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sch_payment_details`
--

CREATE TABLE `sch_payment_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `payment_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `service_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `fee` double NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `qty` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sch_payment_details`
--

INSERT INTO `sch_payment_details` (`id`, `payment_id`, `service_id`, `fee`, `created_at`, `updated_at`, `qty`) VALUES
(1, 3, 6, 2000, '2022-05-17 00:00:00', '2022-05-17 10:21:20', 1),
(2, 3, 7, 500, '2022-05-17 00:00:00', '2022-05-17 10:21:20', 5),
(3, 4, 5, 3000, '2022-05-21 00:00:00', '2022-05-21 08:58:52', 1),
(4, 4, 7, 500, '2022-05-21 00:00:00', '2022-05-21 08:58:52', 10),
(5, 5, 5, 3000, '2022-05-26 00:00:00', '2022-05-26 10:26:45', 1),
(6, 5, 6, 2000, '2022-05-26 00:00:00', '2022-05-26 10:26:46', 1),
(7, 5, 7, 500, '2022-05-26 00:00:00', '2022-05-26 10:26:46', 2),
(8, 6, 5, 3000, '2022-05-26 00:00:00', '2022-05-26 10:27:24', 1),
(9, 8, 5, 3000, '2022-05-26 00:00:00', '2022-05-26 10:28:55', 1),
(10, 8, 4, 100, '2022-05-26 00:00:00', '2022-05-26 10:28:55', 1),
(11, 9, 5, 3000, '2022-05-26 00:00:00', '2022-05-26 10:47:16', 1),
(12, 10, 4, 100, '2022-05-26 00:00:00', '2022-05-26 10:47:42', 1),
(13, 11, 4, 100, '2022-05-26 00:00:00', '2022-05-26 10:47:49', 1),
(14, 12, 6, 2000, '2022-05-26 00:00:00', '2022-05-26 10:50:54', 1),
(15, 12, 4, 100, '2022-05-26 00:00:00', '2022-05-26 10:50:54', 1),
(16, 13, 5, 3000, '2022-06-04 00:00:00', '2022-06-04 13:03:11', 1),
(17, 14, 5, 3000, '2022-06-07 00:00:00', '2022-06-07 09:01:16', 1),
(18, 14, 6, 2000, '2022-06-07 00:00:00', '2022-06-07 09:01:17', 1),
(19, 15, 5, 3000, '2022-06-07 00:00:00', '2022-06-07 09:03:50', 1),
(20, 16, 4, 100, '2022-06-07 00:00:00', '2022-06-07 10:44:18', 1),
(21, 17, 7, 500, '2022-06-07 00:00:00', '2022-06-07 11:01:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sch_results`
--

CREATE TABLE `sch_results` (
  `id` int(10) UNSIGNED NOT NULL,
  `exam_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `admission_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `obt_marks` double NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sch_results`
--

INSERT INTO `sch_results` (`id`, `exam_id`, `admission_id`, `obt_marks`, `created_at`, `updated_at`) VALUES
(1, 11, 7, 0, '2022-06-11 00:00:00', '2022-06-12 00:00:00'),
(2, 11, 8, 0, '2022-06-11 00:00:00', '2022-06-11 00:00:00'),
(3, 12, 7, 0, '2022-06-11 00:00:00', '2022-06-11 00:00:00'),
(4, 12, 8, 0, '2022-06-11 00:00:00', '2022-06-11 00:00:00'),
(5, 13, 7, 0, '2022-06-22 00:00:00', '2022-06-22 00:00:00'),
(6, 13, 8, 0, '2022-06-22 00:00:00', '2022-06-22 00:00:00'),
(7, 13, 9, 0, '2022-06-22 00:00:00', '2022-06-22 00:00:00'),
(8, 13, 12, 0, '2022-06-22 00:00:00', '2022-06-22 00:00:00'),
(9, 13, 13, 0, '2022-06-22 00:00:00', '2022-06-22 00:00:00'),
(10, 13, 14, 0, '2022-06-22 00:00:00', '2022-06-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sch_roles`
--

CREATE TABLE `sch_roles` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_roles`
--

INSERT INTO `sch_roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Editor'),
(3, 'Member'),
(4, 'General '),
(5, 'Reader4'),
(6, 'Subscriber');

-- --------------------------------------------------------

--
-- Table structure for table `sch_rooms`
--

CREATE TABLE `sch_rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `student_count` varchar(45) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_rooms`
--

INSERT INTO `sch_rooms` (`id`, `name`, `student_count`, `created_at`, `updated_at`) VALUES
(1, 'room-1', '40', NULL, '2022-05-10 11:57:10'),
(2, 'room-2', '50', NULL, '2022-05-10 00:00:00'),
(3, 'room-301', '40', NULL, '2022-05-10 00:00:00'),
(5, 'Room-606', '20', '2022-05-10 09:32:17', '2022-05-10 09:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `sch_routins`
--

CREATE TABLE `sch_routins` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `day_id` int(10) UNSIGNED DEFAULT NULL,
  `start_time` double(11,2) NOT NULL,
  `end_time` double(11,2) NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_routins`
--

INSERT INTO `sch_routins` (`id`, `class_id`, `subject_id`, `section_id`, `teacher_id`, `room_id`, `day_id`, `start_time`, `end_time`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, 1, 3, 1, 10.00, 11.00, 3, NULL, NULL),
(2, 4, 3, 3, 1, 2, 1, 10.00, 11.00, 2, NULL, NULL),
(3, 4, 1, 2, 3, 3, 1, 11.00, 12.00, 2, NULL, NULL),
(4, 4, 4, 1, 5, 2, 1, 12.00, 13.00, 3, NULL, NULL),
(5, 6, 2, 3, 7, 2, 1, 10.00, 10.00, 4, NULL, NULL),
(6, 4, 2, 2, 3, 2, 1, 9.00, 10.00, 4, NULL, NULL),
(7, 1, 1, 2, 2, 3, 1, 11.00, 12.00, 3, NULL, NULL),
(8, 1, 3, 2, 3, 3, 1, 12.00, 13.00, 3, NULL, NULL),
(9, 4, 3, 3, 1, 3, 2, 10.00, 11.00, 2, NULL, NULL),
(10, 4, 1, 2, 3, 3, 2, 11.00, 12.00, 2, NULL, NULL),
(11, 4, 2, 2, 3, 3, 2, 12.00, 13.00, 4, NULL, NULL),
(12, 4, 4, 1, 5, 3, 2, 9.00, 10.00, 3, NULL, NULL),
(13, 2, 1, 1, 0, 5, 1, 9.00, 10.00, 4, '2022-05-16 00:00:00', '2022-05-16 10:22:27'),
(14, 2, 2, 1, 6, 5, 1, 10.00, 11.00, 4, '2022-05-16 00:00:00', '2022-05-16 10:24:10');

-- --------------------------------------------------------

--
-- Table structure for table `sch_sections`
--

CREATE TABLE `sch_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `creaded_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_sections`
--

INSERT INTO `sch_sections` (`id`, `name`, `creaded_at`, `updated_at`) VALUES
(1, 'A', NULL, NULL),
(2, 'B', NULL, NULL),
(3, 'C', NULL, NULL),
(4, 'D', NULL, NULL),
(5, 'E', NULL, NULL),
(6, 'F', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sch_services`
--

CREATE TABLE `sch_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL DEFAULT '',
  `amount` float NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sch_services`
--

INSERT INTO `sch_services` (`id`, `name`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'exam fee', 250, NULL, NULL),
(2, 'Mid Term Fee', 500, NULL, NULL),
(3, 'Final Exam', 600, NULL, NULL),
(4, 'Monthly Exam', 100, NULL, NULL),
(5, 'Admission Fee', 3000, NULL, NULL),
(6, 'Session Charge', 2000, NULL, NULL),
(7, 'Monthly Tution Fee', 500, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sch_sessions`
--

CREATE TABLE `sch_sessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sch_sessions`
--

INSERT INTO `sch_sessions` (`id`, `name`) VALUES
(1, '2022'),
(2, '2020-2021'),
(3, '2021-2022'),
(4, '2021');

-- --------------------------------------------------------

--
-- Table structure for table `sch_students`
--

CREATE TABLE `sch_students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `fathers_name` varchar(45) DEFAULT NULL,
  `mothers_name` varchar(45) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` tinyint(2) UNSIGNED DEFAULT 0,
  `photo` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `hobby` varchar(45) DEFAULT NULL,
  `district` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `admission_class` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_students`
--

INSERT INTO `sch_students` (`id`, `name`, `fathers_name`, `mothers_name`, `address`, `birth_date`, `gender`, `photo`, `created_at`, `updated_at`, `hobby`, `district`, `phone`, `email`, `admission_class`) VALUES
(1, 'Abu Bokor', 'Babul Howlader', 'Taslima Begum', 'MadinaBug, Kadamtoli, Dhaka-1236', '1995-12-02', 1, 'Abu Bokor.jpg', '2022-05-08 00:00:00', '2022-05-08 00:00:00', 'Listening to music', 'Patuakhali', '01515260169', 'abubokor.ujjal@gmail.com', '6'),
(2, 'Tania', 'ghjkhk', 'hgkhgk', 'modinabug, kadamtoli', '2022-01-31', 2, 'Tania.jpg', '2022-05-08 00:00:00', '2022-05-08 00:00:00', 'Sleepping', 'Patuakhali', '01515260169', 'abubokor.ujjal@gmail.com', '7'),
(3, 'Shahed Lablu', 'ghjkhk', 'hgkhgk', 'modinabug, kadamtoli', '2022-04-11', 1, 'Shahed Lablu.jpg', '2022-05-08 00:00:00', '2022-05-08 00:00:00', 'Eating', 'Dinajpur', '01515260169', 'abubokor.ujjal@gmail.com', '8'),
(4, 'Hosneara', 'Abu Hosen', 'Runa Begum', 'gdhfh', '1994-01-04', 2, 'Hosneara.jpg', '2022-05-17 00:00:00', '2022-05-17 00:00:00', 'dfsg', 'Munshigonj', '01965167531', 'hosneara@gmail.com', NULL),
(5, 'Mehedi', 'Mridha', 'Begum', 'keranigong', '1994-06-25', 1, 'Mehedi.jpg', '2022-05-25 00:00:00', '2022-05-25 00:00:00', 'Traveling', 'Dhaka', '5645646', 'mehedi@gmail.com', NULL),
(7, 'AR. Rahman', 'Md. abc', 'Mrs. Abc', 'Kjhafhafd', '2017-05-02', 1, 'AR. Rahman.jpg', '2022-06-05 00:00:00', '2022-06-05 00:00:00', 'Coocking', 'K', '01524587745', 'abdurrahman@gmail.com', NULL),
(8, 'Asia Rahman', 'Md. abc', 'Mrs. Abc', 'afdssadf', '2018-06-11', 2, 'Asia Rahman.jpg', '2022-06-05 00:00:00', '2022-06-05 00:00:00', 'dasf', 'asdf', '2544582154', 'habib@gmail.com', NULL),
(9, 'Ruma Akter', 'Md. abc', 'Mrs. Abc', 'sdfsdaf', '2009-12-28', 2, 'Ruma Akter.jpg', '2022-06-05 00:00:00', '2022-06-05 00:00:00', 'sadfsadf', 'sdafdsaf', '01965167531', 'habib@gmail.com', NULL),
(10, 'Ripon Ahmed', 'Md. abc', 'Mrs. Abc', 'SadarGhat', '1995-04-05', 1, 'Ripon Ahmed.jpg', '2022-06-13 00:00:00', '2022-06-13 00:00:00', 'Listening to music', 'Dhaka', '01965167531', 'rana@gmail.com', NULL),
(11, 'Sanjida', 'Md. abc', 'Mrs. Abc', 'safdkjdfahs', '1994-10-22', 2, 'Sanjida.jpg', '2022-06-13 00:00:00', '2022-06-13 00:00:00', 'bcvbxc', 'Dhaka', '01965167531', 'hosneara@gmail.com', NULL),
(12, 'Omor Faruk', 'Md. abc', 'Mrs. Abc', 'fadfasd', '2022-05-30', 1, 'Omor Faruk.jpg', '2022-06-13 00:00:00', '2022-06-13 00:00:00', 'dfa', 'adsf', '456463456456', 'abubokor.ujjal@gmail.com', NULL),
(13, 'Kulsum', 'Md. abc', 'Mrs. Abc', 'sadfsadf', '2015-06-10', 1, 'Kulsum.jpg', '2022-06-13 00:00:00', '2022-06-13 00:00:00', 'Sleepping', 'Dhaka', '456456', 'miss@gmail.com', NULL),
(14, 'Mahmuda Mitu', 'Md. abc', 'Mrs. Abc', 'sadfrtrg', '1994-06-14', 2, 'Mahmuda Mitu.jpg', '2022-06-13 00:00:00', '2022-06-13 00:00:00', 'Listening to music', 'dgdfs', '01965167531', 'habib@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sch_subjects`
--

CREATE TABLE `sch_subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL DEFAULT '',
  `sub_code` varchar(45) NOT NULL DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sch_subjects`
--

INSERT INTO `sch_subjects` (`id`, `name`, `sub_code`, `created_at`, `updated_at`) VALUES
(1, 'Bangla ', '01', NULL, NULL),
(2, 'Bangla 2nd Paper', '02', NULL, NULL),
(3, 'English', '03', NULL, NULL),
(4, 'English 2nd Paper', '04', NULL, NULL),
(5, 'General Mathematics', '05', NULL, NULL),
(6, 'Higher Mathematics', '06', NULL, NULL),
(7, 'General Science', '07', NULL, NULL),
(8, 'Physics', '09', NULL, NULL),
(9, 'BGS', '09', '2022-05-10 00:00:00', '2022-05-10 09:53:21'),
(10, 'General Mathematics', '05', '2022-05-10 00:00:00', '2022-05-10 00:00:00'),
(11, 'General Mathematics', '05456546', '2022-05-10 00:00:00', '2022-05-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sch_teachers`
--

CREATE TABLE `sch_teachers` (
  `id` int(10) NOT NULL DEFAULT 0,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `gender` tinyint(3) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `designation` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_teachers`
--

INSERT INTO `sch_teachers` (`id`, `name`, `email`, `gender`, `phone`, `address`, `date`, `photo`, `created_at`, `updated_at`, `designation`) VALUES
(1, 'hasan', 'hasan@gmail.com', 1, '01254', 'narayangonj', NULL, '1.png', NULL, '2022-05-09 00:00:00', 'Assistant Head Teacher'),
(2, 'Monira', 'monira@gmail.com', 1, '01257', 'narayangong', NULL, '2.jpg', NULL, '2022-04-25 19:19:05', NULL),
(3, 'niru', 'niru@gmail.com', 2, NULL, NULL, NULL, '3.jpg', NULL, '2022-04-25 19:19:19', NULL),
(4, 'tara', 'tara@gmail.com', 1, '857441', 'narayangong', NULL, '4.jpg', NULL, '2022-04-25 19:19:44', NULL),
(5, 'ramu', 'ramu@gmail.com', 1, '857441', 'narayangong', NULL, '5.jpg', NULL, '2022-04-25 19:23:08', NULL),
(6, 'tara', 'tara@gmail.com', 1, '01257', 'narayangong', NULL, '6.jpg', NULL, '2022-04-25 00:00:00', NULL),
(7, 'hasan', 'hasn@yahoo.com', 1, '45896', 'narayangong', NULL, '7.jpg', NULL, '2022-04-25 19:19:57', NULL),
(0, 'Abu Bokor5', 'abubokor.ujjal@gmail.com', 1, '01965167531', 'Madinabug, Kadamtoli, Dhaka-1236', '1993-02-01 00:00:00', '.jpg', '2022-05-09 00:00:00', '2022-05-09 00:00:00', 'Head Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `sch_transactions`
--

CREATE TABLE `sch_transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sch_transaction_type`
--

CREATE TABLE `sch_transaction_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sch_users`
--

CREATE TABLE `sch_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `role_id` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_users`
--

INSERT INTO `sch_users` (`id`, `username`, `password`, `role_id`, `email`, `photo`, `mobile`, `created_at`, `updated_at`) VALUES
(4, 'ath', '876', '1', '', '4.jpg', NULL, NULL, '2022-05-08 00:00:00'),
(5, 'Maria', '654', '1', '', '5.png', NULL, NULL, '2022-05-08 10:04:46'),
(7, 'Abu Bokor', '11111', '6', 'abubokor.ujjal@gmail.com', '7.jpg', NULL, NULL, '2022-06-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sch_weekdays`
--

CREATE TABLE `sch_weekdays` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sch_weekdays`
--

INSERT INTO `sch_weekdays` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Sunday', NULL, NULL),
(2, 'Monday', NULL, NULL),
(3, 'Tuesday', NULL, NULL),
(4, 'Wednesday', NULL, NULL),
(5, 'Thursday', NULL, NULL),
(6, 'Friday(Weekend)', NULL, NULL),
(7, 'Saturday(Weekend)', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sch_accounts`
--
ALTER TABLE `sch_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_admidcards`
--
ALTER TABLE `sch_admidcards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_admissions`
--
ALTER TABLE `sch_admissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_attendences`
--
ALTER TABLE `sch_attendences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_bill_details`
--
ALTER TABLE `sch_bill_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_clas`
--
ALTER TABLE `sch_clas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_departments`
--
ALTER TABLE `sch_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_exams`
--
ALTER TABLE `sch_exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_exam_types`
--
ALTER TABLE `sch_exam_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_genders`
--
ALTER TABLE `sch_genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_payments`
--
ALTER TABLE `sch_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_payment_details`
--
ALTER TABLE `sch_payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_results`
--
ALTER TABLE `sch_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_roles`
--
ALTER TABLE `sch_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_rooms`
--
ALTER TABLE `sch_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_routins`
--
ALTER TABLE `sch_routins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_sections`
--
ALTER TABLE `sch_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_services`
--
ALTER TABLE `sch_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_sessions`
--
ALTER TABLE `sch_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_students`
--
ALTER TABLE `sch_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_subjects`
--
ALTER TABLE `sch_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_transactions`
--
ALTER TABLE `sch_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_transaction_type`
--
ALTER TABLE `sch_transaction_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_users`
--
ALTER TABLE `sch_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_weekdays`
--
ALTER TABLE `sch_weekdays`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sch_accounts`
--
ALTER TABLE `sch_accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sch_admidcards`
--
ALTER TABLE `sch_admidcards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sch_admissions`
--
ALTER TABLE `sch_admissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sch_attendences`
--
ALTER TABLE `sch_attendences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sch_bill_details`
--
ALTER TABLE `sch_bill_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sch_clas`
--
ALTER TABLE `sch_clas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sch_exams`
--
ALTER TABLE `sch_exams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sch_exam_types`
--
ALTER TABLE `sch_exam_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sch_payments`
--
ALTER TABLE `sch_payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sch_payment_details`
--
ALTER TABLE `sch_payment_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sch_results`
--
ALTER TABLE `sch_results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sch_roles`
--
ALTER TABLE `sch_roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sch_rooms`
--
ALTER TABLE `sch_rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sch_routins`
--
ALTER TABLE `sch_routins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sch_sections`
--
ALTER TABLE `sch_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sch_services`
--
ALTER TABLE `sch_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sch_sessions`
--
ALTER TABLE `sch_sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sch_students`
--
ALTER TABLE `sch_students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sch_subjects`
--
ALTER TABLE `sch_subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sch_transactions`
--
ALTER TABLE `sch_transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sch_transaction_type`
--
ALTER TABLE `sch_transaction_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sch_users`
--
ALTER TABLE `sch_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sch_weekdays`
--
ALTER TABLE `sch_weekdays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
