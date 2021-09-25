-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2021 at 12:55 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makemynotice`
--

-- --------------------------------------------------------

--
-- Table structure for table `abuse_power`
--

CREATE TABLE `abuse_power` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` varchar(500) NOT NULL,
  `adhar_back` varchar(500) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `address_company` text NOT NULL,
  `employment_letter` varchar(500) NOT NULL,
  `person_excersing` varchar(500) NOT NULL,
  `complaint` text NOT NULL,
  `relief` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Abuse Of Power',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'abuse_power'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abuse_power`
--

INSERT INTO `abuse_power` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `adhar_front`, `adhar_back`, `company_name`, `address_company`, `employment_letter`, `person_excersing`, `complaint`, `relief`, `table_head`, `added_date`, `table_name`) VALUES
(1, '609f643d010b0', 'ddasdasdsa', 'gupta', 'dsdads', 'adsds@gmail.com', '7896544400', '411021', 'tstst', 'dgdgd', '0858522001621055524.png', '0890898001621055524.jpg', 'ddssd', 'dasdas', '0004288001621058621.jpeg', 'saasdads', 'dsadsa', 'dsaasad', 'Abuse Of Power', '2021-05-15 06:03:41', 'abuse_power'),
(2, '609e4d0887561', 'dfdgdgg', 'addasasd', '10/12/1990', 'adsdad@gmail.com', '8105495600', '411021', 'ssd', 'sdsd', '0170615001621058674.jpeg', '0170676001621058674.jpeg', 'asdsad', 'dsadsasa', '0306488001621058686.jpeg', 'adds', 'asddas', 'asdsd', 'Abuse Of Power', '2021-05-15 06:04:46', 'abuse_power');

-- --------------------------------------------------------

--
-- Table structure for table `accidental_claim`
--

CREATE TABLE `accidental_claim` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` text NOT NULL,
  `adhar_back` text NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `address_defendant` varchar(300) NOT NULL,
  `accident_type` varchar(300) NOT NULL,
  `reference_accident` varchar(500) NOT NULL,
  `date_accident` varchar(500) NOT NULL,
  `attachment` varchar(500) NOT NULL,
  `complaint` text NOT NULL,
  `relief` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Accidental Claim',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'accidental_claim'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `added_date`) VALUES
(1, 'prabal1.gupta@gmail.com', '123456', '2019-05-08 09:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE `administration` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` varchar(500) NOT NULL,
  `adhar_back` varchar(500) NOT NULL,
  `department_name` varchar(500) NOT NULL,
  `address_department` text NOT NULL,
  `complaint` text NOT NULL,
  `relief` text NOT NULL,
  `communication` text NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_head` varchar(100) NOT NULL DEFAULT 'Administration'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `adhar_front`, `adhar_back`, `department_name`, `address_department`, `complaint`, `relief`, `communication`, `added_date`, `table_head`) VALUES
(1, '6006eddb5c51e', 'assad', 'sdadasd', '01/19/2021', 'saads@gmail.com', '5002001230', '411021', 'sdjdsd', 'hvsahvsdadsa', '0297074001611064906.jpg', '0297216001611064906.pdf', 'dsdsadsa', 'dasdasdsds', 'asdasdasdsd', 'asdasdasdas', '0866216001611066840.pdf', '2021-01-19 14:34:03', 'Administration'),
(2, '600709cbeb123', 'sasdasds', 'dassdads', '01/19/2021', 'asdd@gmail.com', '4560032123', '411021', 'sdaads', 'afda', '0182102001611073925.jpg', '0201697001611073925.png', 'asddsdas', 'asdasdad', 'asdas', 'adsdsdds', '0324773001611073993.jpg', '2021-01-19 16:33:15', 'Administration'),
(3, '60a0fef586b8d', 'sdad', 'asddasasd', '16-05-2021', 'asddsa@gmail.com', '8105495600', '411021', 'ddsajash', 'ndsdsd', '0922362001621163691.jpeg', '0922433001621163691.jpeg', 'dsadsadsa', 'dsdsa', 'dsas', 'dass', '0551833001621163765.jpeg', '2021-05-16 11:16:05', 'Administration'),
(4, '60a0ffb163a12', 'sdad', 'asddasasd', '16-05-2021', 'asddsa@gmail.com', '8105495600', '411021', 'ddsajash', 'ndsdsd', '0922362001621163691.jpeg', '0922433001621163691.jpeg', 'dassdsa', 'asdd', 'adsasd', 'adsd', '0408091001621163953.jpeg', '2021-05-16 11:19:13', 'Administration');

-- --------------------------------------------------------

--
-- Table structure for table `advocate`
--

CREATE TABLE `advocate` (
  `id` int(11) NOT NULL,
  `advocate_user_id` varchar(300) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `registration_no` varchar(500) NOT NULL,
  `certificate` varchar(500) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advocate`
--

INSERT INTO `advocate` (`id`, `advocate_user_id`, `first_name`, `email`, `phone`, `password`, `gender`, `registration_no`, `certificate`, `added_on`) VALUES
(1, '5fecb828c7d33', 'Prabal', 'prabal1.gupta@gmail.com', '8105495600', '123456', 'male', '', '', '2020-12-30 17:26:00'),
(2, '5ff1ad3c45ade', 'saskhi jain', 'sakshi@gmail.com', '9827060929', '123456', 'female', '', '', '2021-01-03 11:40:44'),
(3, '5ff5641acb269', 'Mandar', 'mandsar@gmail.com', '8105495607', 'xx6zv2yf96f', 'male', '', '', '2021-01-06 07:17:46'),
(4, '5ff6f98641d5f', 'Prabal', 'kssnd@gmail.com', '7414712330', 'q5nowycg0a', 'male', 'asasasas', '0269564001610021254.png', '2021-01-07 12:07:34'),
(5, '600e76c2da1d0', 'saaa', 'ssaaa@gmail.com', '7896544123', 'mfyea43hjwk', 'male', '123456', '0893315001611560642.jpg', '2021-01-25 07:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `advocate_pulled_notice`
--

CREATE TABLE `advocate_pulled_notice` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `advocate_id` varchar(500) NOT NULL,
  `notice_id` varchar(100) NOT NULL,
  `table_name` varchar(500) NOT NULL,
  `pulled` varchar(10) NOT NULL DEFAULT '0',
  `pulled_by` varchar(100) NOT NULL,
  `pulled_date` varchar(200) NOT NULL,
  `pulled_time` varchar(200) NOT NULL,
  `approved_by_user` varchar(10) NOT NULL,
  `approved_time` varchar(100) NOT NULL,
  `download_by_user` varchar(10) NOT NULL,
  `download_count` varchar(100) NOT NULL,
  `download_time` varchar(100) NOT NULL,
  `reply_notice` varchar(200) NOT NULL,
  `reply_notice_date` varchar(500) NOT NULL,
  `reply_notice_time` varchar(500) NOT NULL,
  `final_notice` varchar(200) NOT NULL,
  `final_notice_time` varchar(500) NOT NULL,
  `recieved_note` varchar(200) NOT NULL,
  `recieved_note_time` varchar(500) NOT NULL,
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advocate_pulled_notice`
--

INSERT INTO `advocate_pulled_notice` (`id`, `user_id`, `advocate_id`, `notice_id`, `table_name`, `pulled`, `pulled_by`, `pulled_date`, `pulled_time`, `approved_by_user`, `approved_time`, `download_by_user`, `download_count`, `download_time`, `reply_notice`, `reply_notice_date`, `reply_notice_time`, `final_notice`, `final_notice_time`, `recieved_note`, `recieved_note_time`, `query`) VALUES
(1, '6031fbdb5b2d4', '5ff1ad3c45ade', '1', 'pf_claim', '1', '5ff1ad3c45ade', '01-03-2021', '12:21:15 PM', '1', '28-02-2021 02:50:38 PM', '', '', '', '0963765001614503675.pdf', '28-02-2021', '02:44:36 PM', '0549507001614504581.pdf', '28-02-2021 02:59:41 pm', '', '', 'dgffgfdgdfgf'),
(2, '6031fbdb5b2d4', '5fecb828c7d33', '1', 'misconduct_notice', '1', '5fecb828c7d33', '31-03-2021', '08:27:08 PM', '1', '01-03-2021 12:45:49 PM', '', '', '', '0679739001614582939.pdf', '01-03-2021', '12:45:39 PM', '0572149001614583116.png', '01-03-2021 12:48:36 pm', '0458075001614583135.pdf', '01-03-2021 12:48:55 pm', ''),
(3, '6031fbdb5b2d4', '', '1', 'termination_notice', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '6031fbdb5b2d4', '', '4', 'sarfaesi_notice', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '604649cc2d7cc', '', '4', 'title_deed', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '6031fbdb5b2d4', '', '5', 'title_deed', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '604651f4635be', '', '3', 'encroachment', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '6031fbdb5b2d4', '', '4', 'encroachment', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '60466a1a49d9d', '', '4', 'lessor_dispute', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '6031fbdb5b2d4', '', '5', 'lessor_dispute', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '6046f442cf77b', '', '2', 'termination_rental', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '6031fbdb5b2d4', '', '3', 'termination_rental', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '6031fbdb5b2d4', '', '2', 'arbitration_rental', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '6046f7f314e5d', '', '3', 'arbitration_rental', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, '6046f975be36e', '', '3', 'delay_in_construction', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, '6046fcc3a0429', '', '4', 'delay_in_construction', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, '604704ae12027', '', '5', 'delay_in_construction', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, '60470934cbd6e', '', '6', 'delay_in_construction', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, '60472ee2b6d2c', '', '2', 'divorce_application', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, '60472f7aa33a2', '', '4', 'divorce_application', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, '6047364e8ecc6', '', '5', 'divorce_application', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, '6031fbdb5b2d4', '', '6', 'divorce_application', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, '6049f52a4e26b', '', '1', 'product_service', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, '6031fbdb5b2d4', '', '2', 'product_service', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, '604a060f79b31', '', '2', 'life_insurance_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, '604a0769a2d21', '', '3', 'life_insurance_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, '604b00a352ae2', '', '1', 'product_service', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, '604b03b4a9765', '', '2', 'health_insurance', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, '60648d39cacfd', '', '7', 'divorce_application', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, '609cc8ed908ca', '', '1', 'esi_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, '609cc964b1406', '', '2', 'esi_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, '609cf02a10301', '', '3', 'esi_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, '609cf33ec24ad', '', '4', 'esi_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, '609cf3f3282f4', '', '5', 'esi_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, '609cf4b3287ae', '', '6', 'esi_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, '609cfdecce525', '', '2', 'pf_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, '609cff0aaf62b', '', '3', 'pf_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, '609cffe11813e', '', '4', 'pf_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, '609d0f39dfdec', '', '1', 'salary_dues', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, '609d1aa019e9d', '', '1', 'harrashment', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, '609d1b2e2a92a', '', '2', 'harrashment', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, '609d208673140', '', '3', 'harrashment', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, '609d562b0f2e5', '', '5', 'pf_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, '609d56814784d', '', '6', 'pf_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, '609e1fd3b773f', '', '7', 'pf_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, '609d56814784d', '', '8', 'pf_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, '609e4d0887561', '', '7', 'esi_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, '609e500519b77', '', '2', 'salary_dues', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, '609e553c03993', '', '4', 'harrashment', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, '609e57a4536b9', '', '5', 'harrashment', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, '609e6b03a5f03', '', '1', 'voilation_aggrement', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, '609e74f39bac6', '', '1', 'gratuity_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, '609e7522eefcc', '', '2', 'gratuity_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, '609e4d0887561', '', '3', 'gratuity_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, '609e82b19db38', '', '1', 'abuse_power', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(57, '609f643d010b0', '', '1', 'abuse_power', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, '609e4d0887561', '', '2', 'abuse_power', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(59, '609f6e799256f', '', '1', 'non_payment_salary', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, '609e4d0887561', '', '2', 'non_payment_salary', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(61, '609fac320bca3', '', '2', 'misconduct_notice', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(62, '609e4d0887561', '', '3', 'misconduct_notice', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(63, '609fad42a6a8d', '', '4', 'misconduct_notice', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(64, '609fc89810d25', '', '1', 'suspension_notice', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(65, '609fce74e09b6', '', '2', 'termination_notice', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(66, '609e4d0887561', '', '1', 'retrenchment_notice', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(67, '609fd53d9251b', '', '2', 'retrenchment_notice', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(68, '60a0a8b8e9da3', '', '1', 'pf_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(69, '60a0aa8b2d414', '', '3', 'non_payment_salary', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(70, '60a0bb1f46d53', '', '2', 'sarfaesi_notice', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(71, '60a0bb1f46d53', '', '5', 'sarfaesi_notice', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(72, '60a0ba9e76c5d', '', '6', 'sarfaesi_notice', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(73, '60a0c5b84ab90', '', '6', 'title_deed', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(74, '60a0ba9e76c5d', '', '7', 'title_deed', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(75, '60a0ba9e76c5d', '', '5', 'encroachment', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(76, '60a0c8f155565', '', '6', 'encroachment', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(77, '60a0cbdc4b5d0', '', '7', 'encroachment', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(78, '60a0cd415b74e', '', '3', 'non_payment_salary', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(79, '60a0ffb163a12', '', '4', 'administration', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, '60a1060ce4b51', '', '6', 'lessor_dispute', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(81, '60a10d20e9f2e', '', '4', 'termination_rental', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(82, '60a23fe35144e', '', '7', 'delay_in_construction', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(83, '60a24eb991464', '', '8', 'divorce_application', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(84, '60a27744f2d97', '', '1', 'product_service', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(85, '60a27d8e425b2', '', '4', 'life_insurance_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(86, '60a27eb4b2e34', '', '1', 'life_insurance_claim', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `agreement_draft`
--

CREATE TABLE `agreement_draft` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` varchar(500) NOT NULL,
  `adhar_back` varchar(500) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `address_company` text NOT NULL,
  `purpose_anement` varchar(500) NOT NULL,
  `term_agreement` varchar(500) NOT NULL,
  `lock_period` varchar(500) NOT NULL,
  `jurisdiction` varchar(500) NOT NULL,
  `rent` varchar(500) NOT NULL,
  `deposit` varchar(500) NOT NULL,
  `adhar_copy` varchar(500) NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Agreement Draft',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'agreement_draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agreement_draft`
--

INSERT INTO `agreement_draft` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `adhar_front`, `adhar_back`, `company_name`, `address_company`, `purpose_anement`, `term_agreement`, `lock_period`, `jurisdiction`, `rent`, `deposit`, `adhar_copy`, `table_head`, `added_date`, `table_name`) VALUES
(1, '600a7f13b2fe8', 'ddsds', 'dasd', '01/22/2021', 'saadsd@gmail.com', '1230001230', '411021', 'dffsdfs', 'dfdfdfdfds', '0121008001611290735.jpg', '0121113001611290735.pdf', 'adssada', 'dasdd', 'xXzas', 'xZXzxz', 'dasdass', 'asddas', 'addasd', 'sdsdasd', '0067661001611300624.jpg', 'Agreement Draft', '2021-01-22 07:30:27', 'agreement_draft'),
(2, '60a25fcc53de0', 'sddsd', 'ssdsd', '17-05-2021', 'sdd@gmail.com', '8656612300', '411021', 'sddf', 'fsdsd', '0861393001621254079.jpeg', '0861511001621254079.jpeg', 'aadsads', 'dads', 'dasdasasd', 'dasdsadsa', 'ddsadsa', 'dsdsa', 'dsad', 'asddas', '0343534001621254092.jpeg', 'Agreement Draft', '2021-05-17 12:21:32', 'agreement_draft');

-- --------------------------------------------------------

--
-- Table structure for table `arbitration_rental`
--

CREATE TABLE `arbitration_rental` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `first_party` varchar(200) NOT NULL,
  `adhar_front` varchar(500) NOT NULL,
  `adhar_back` varchar(500) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `address_defendant` text NOT NULL,
  `attachment_agreement` varchar(500) NOT NULL,
  `previous_notice` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `position` varchar(500) NOT NULL,
  `compaint` text NOT NULL,
  `relief` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Arbitration Rental',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'arbitration_rental'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arbitration_rental`
--

INSERT INTO `arbitration_rental` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `first_party`, `adhar_front`, `adhar_back`, `company_name`, `address_defendant`, `attachment_agreement`, `previous_notice`, `name`, `position`, `compaint`, `relief`, `table_head`, `added_date`, `table_name`) VALUES
(1, '60091c8686248', 'asddsd', 'sdsadd', '01/21/2021', 'adssd@gmail.com', '1230012300', '411021', 'djsdsdb', 'jbfssd', 'fdssadssad', '0797266001611207839.jpg', '0805703001611207839.jpg', 'dsdsds', 'dsadd', '0100247001611209850.jpg', '0100545001611209850.jpg', 'asds', 'asdsad', 'dsadasd', 'sadasdasd', 'Arbitration Rental', '2021-01-21 06:17:42', 'arbitration_rental'),
(2, '6031fbdb5b2d4', 'gdggd', 'gfdsffsd', '03/09/2021', 'fdf@gmail.com', '1320002001', '411021', 'ddsd', 'sasdsa', '', '0722961001615262941.png', '0723010001615262941.pdf', 'asdsad', 'dd', '0725693001615263598.pdf', '0725785001615263598.pdf', 'dsddads', 'afdsad', 'saddsd', 'adsdad', 'Arbitration Rental', '2021-03-09 04:20:02', 'arbitration_rental'),
(3, '6046f7f314e5d', 'grgr', 'tretrette', '03/09/2021', 'fads@gmail.com', '4564561230', '411021', 'ssdsd', 'sdnjdsd', 'erwrrr', '0552342001615263709.png', '0552418001615263709.png', 'asdsad', 'dsaasd', '0540714001615263726.pdf', '0540776001615263726.pdf', 'dsdas', 'sadds', 'asdd', 'saddassd', 'Arbitration Rental', '2021-03-09 04:22:11', 'arbitration_rental');

-- --------------------------------------------------------

--
-- Table structure for table `chqbouncenotice`
--

CREATE TABLE `chqbouncenotice` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `chqName` varchar(20) NOT NULL,
  `chqAge` varchar(20) NOT NULL,
  `chqFatherName` varchar(50) NOT NULL,
  `chqAddress` varchar(50) NOT NULL,
  `chqDatePresentation` varchar(50) NOT NULL,
  `chqNumber` varchar(50) NOT NULL,
  `chqBankName` varchar(50) NOT NULL,
  `chqDateBouncing` varchar(50) NOT NULL,
  `chqPurposeTransaction` varchar(50) NOT NULL,
  `chqEmailSender` varchar(50) NOT NULL,
  `chqContactNumberSender` varchar(45) NOT NULL,
  `chqEmailRecipient` varchar(50) NOT NULL,
  `chqContactNumberRecipient` varchar(50) NOT NULL,
  `chqArbitration` varchar(20) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cheque_invoice_doc` varchar(200) NOT NULL,
  `cheque_picture` varchar(200) NOT NULL,
  `cheque_return_slip` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `consumernotice`
--

CREATE TABLE `consumernotice` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `consumer_name` varchar(20) NOT NULL,
  `consumer_lname` varchar(200) NOT NULL,
  `consumer_email` varchar(500) NOT NULL,
  `consumer_phone` varchar(200) NOT NULL,
  `consumer_pincode` varchar(200) NOT NULL,
  `consumer_state` varchar(200) NOT NULL,
  `consumer_address` varchar(200) NOT NULL,
  `aadhar_front` varchar(500) NOT NULL,
  `aadhar_back` varchar(500) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `consumer_defendant`
--

CREATE TABLE `consumer_defendant` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `consumer_last_id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `address_defendant` varchar(500) NOT NULL,
  `commodity` varchar(200) NOT NULL,
  `warranty_attachment` varchar(200) NOT NULL,
  `bill_attachment` varchar(200) NOT NULL,
  `date_purchase` varchar(200) NOT NULL,
  `box_picture` varchar(200) NOT NULL,
  `complaint` text NOT NULL,
  `relief` text NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delay_in_construction`
--

CREATE TABLE `delay_in_construction` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `details_complainant` text NOT NULL,
  `adhar_front` varchar(500) NOT NULL,
  `adhar_back` varchar(500) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `address_defendant` text NOT NULL,
  `details_project` text NOT NULL,
  `attachment_agreement` varchar(500) NOT NULL,
  `complaint` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Delay In Construction',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'delay_in_construction'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delay_in_construction`
--

INSERT INTO `delay_in_construction` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `details_complainant`, `adhar_front`, `adhar_back`, `company_name`, `address_defendant`, `details_project`, `attachment_agreement`, `complaint`, `table_head`, `added_date`, `table_name`) VALUES
(1, '60093fe1082c9', 'addasdsa', 'dsadasdsd', '01/21/2021', 'adsads@gmail.com', '1002001230', '411021', 'sdjsdh', 'sadfsadas', 'dsadasd', '0382877001611216186.jpg', '0391241001611216186.jpg', 'asdsdsa', 'sd', 'sdasdassd', '0721302001611218909.jpg', 'adssdsads', 'Delay In Construction', '2021-01-21 08:48:33', 'delay_in_construction'),
(2, '600942467e706', 'aaSS', 'ASass', '01/21/2021', 'SD@GMAIL.COM', '8000221000', '41121', 'asdsad', 'sdfdsf', 'fdfdfsf', '0797835001611219515.jpg', '0798013001611219515.jpg', 'sfdfdsfdffdsd', 'sfdsfsdfsdf', 'fdsfsdf', '0498918001611219524.pdf', 'sdffdfdsfsdf', 'Delay In Construction', '2021-01-21 08:58:46', 'delay_in_construction'),
(3, '6046f975be36e', 'asddas', 'as', '03/09/2021', 'asds@gmail.com', '12365478990', '411021', 'sdd', 'dff', 'dfdfd', '0832917001615264097.pdf', '0832992001615264097.pdf', 'adsdsadsa', 'dasddsd', 'sadasds', '0013149001615264114.pdf', 'asddasdasd', 'Delay In Construction', '2021-03-09 04:28:37', 'delay_in_construction'),
(4, '6046fcc3a0429', 'dadd', 'asdddas', '03/09/2021', 'saadsd@gmail.com', '1599517890', '411021', 'sdsdsd', 'dssdsd', 'dadsadsadsad', '0985071001615264197.pdf', '0985156001615264197.pdf', 'sdsds', 'dsd', 'sdd', '0747953001615264960.pdf', 'sddsdsd', 'Delay In Construction', '2021-03-09 04:42:43', 'delay_in_construction'),
(5, '604704ae12027', 'dadd', 'asdddas', '03/09/2021', 'saadsd@gmail.com', '1599517890', '411021', 'sdsdsd', 'dssdsd', 'dadsadsadsad', '0985071001615264197.pdf', '0985156001615264197.pdf', 'asdsd', 'sada', 'asds', '0686422001615266986.pdf', 'SDssadds', 'Delay In Construction', '2021-03-09 05:16:30', 'delay_in_construction'),
(6, '60470934cbd6e', 'dadd', 'asdddas', '03/09/2021', 'saadsd@gmail.com', '1599517890', '411021', 'sdsdsd', 'dssdsd', 'dadsadsadsad', '0985071001615264197.pdf', '0985156001615264197.pdf', 'sdsdsd', 'sdsd', 'sss', '0636879001615268145.png', 'sdsd', 'Delay In Construction', '2021-03-09 05:35:48', 'delay_in_construction'),
(7, '60a23fe35144e', 'dsddsds', 'dsdssad', '17-05-2021', 'sadsad@gmail.com', '400010001230', '411021', 'fdsfsd', 'dsfdsf', '', '0373994001621245793.jpeg', '0394543001621245793.jpeg', 'dsadsa', 'dsds', 'dadas', '0332930001621245923.jpeg', 'assdasd', 'Delay In Construction', '2021-05-17 10:05:23', 'delay_in_construction');

-- --------------------------------------------------------

--
-- Table structure for table `divorce_application`
--

CREATE TABLE `divorce_application` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` varchar(500) NOT NULL,
  `adhar_back` varchar(500) NOT NULL,
  `name_spouse` varchar(500) NOT NULL,
  `address_spouse` text NOT NULL,
  `reason_divorce` text NOT NULL,
  `relief` text NOT NULL,
  `marriage` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Divorce Application',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'divorce_application'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divorce_application`
--

INSERT INTO `divorce_application` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `adhar_front`, `adhar_back`, `name_spouse`, `address_spouse`, `reason_divorce`, `relief`, `marriage`, `table_head`, `added_date`, `table_name`) VALUES
(1, '6009735666594', 'dddasd', 'asdasdasdasda', '01/21/2021', 'asdds@gmail.com', '12300360000', '411021', 'sdkjbsadhv', 'bhibhsaddd', '0797060001611231984.png', '0797134001611231984.png', 'daSAS', 'ASASS', 'asdsa', 'asdsdsad', '0419226001611232086.jpg', 'Divorce Application', '2021-01-21 12:28:06', 'divorce_application'),
(2, '60472ee2b6d2c', 'sdsd', 'sd', '03/09/2021', 'sdds@gmail.com', '1555996390', '41110', 'sds', 'jsdbdbj j', '0410014001615277775.pdf', '0410124001615277775.png', 'dsdsdasdass', 'dsadasd', 'asdsddsa', 'asdd', '0748852001615277794.pdf', 'Divorce Application', '2021-03-09 08:16:34', 'divorce_application'),
(3, '60472f53ea88a', 'dsdas', 'dssd', '03/09/2021', 'adas@gmail.com', '1599663300', '412111', 'jdshbd', 'bdbdasa', '0418180001615277881.pdf', '0418702001615277881.pdf', 'asdasd', 'sadasdasd', 'asdsadsd', 'ssdasdaasd', '0960659001615277907.png', 'Divorce Application', '2021-03-09 08:18:27', 'divorce_application'),
(4, '60472f7aa33a2', 'dsdas', 'dssd', '03/09/2021', 'adas@gmail.com', '1599663300', '412111', 'jdshbd', 'bdbdasa', '0418180001615277881.pdf', '0418702001615277881.pdf', 'sdsadsdsa', 'dasdas', 'asdasd', 'asdasd', '0668591001615277946.pdf', 'Divorce Application', '2021-03-09 08:19:06', 'divorce_application'),
(5, '6047364e8ecc6', 'asssd', 'sds', '03/09/2021', 'sadads@gmail.com', '1236547890', '411021', 'ssdsd', 'ddff', '0691827001615279678.pdf', '0691884001615279678.png', 'asdasd', 'sdd', 'asdad', 'ad', '0584911001615279694.pdf', 'Divorce Application', '2021-03-09 08:48:14', 'divorce_application'),
(6, '6031fbdb5b2d4', 'asddd', 'ddasdasdasd', '03/09/2021', 'asdd@gmail.com', '1456300123', '411021', 'sdds', 'ddfssd', '0192998001615279991.pdf', '0193225001615279991.pdf', 'asdd', 'adasdas', 'addsdasddasadd', 'asdsdads', '0806194001615280016.pdf', 'Divorce Application', '2021-03-09 08:53:36', 'divorce_application'),
(7, '60648d39cacfd', 'sasdsadas', 'dsadadad', '03/31/2021', 'asadasd@gmail.com', '1236547890', '411021', 'dsdsd', 'sdsd', '0050413001617202468.png', '0070106001617202468.pdf', 'xcczczc', 'zxcxzcxzczxczx', 'asdsdadadasd', 'asdsadadsdddas', '0830731001617202489.pdf', 'Divorce Application', '2021-03-31 14:54:49', 'divorce_application'),
(8, '60a24eb991464', 'ddasdsda', 'dadsasd', '17-05-2021', 'ss@gmail.com', '8100000123', '411021', 'dssd', 'dd', '0017169001621249699.jpeg', '0034436001621249699.jpeg', 'asdsdasad', 'sadsad', 'adssda', 'saddas', '0595051001621249721.jpeg', 'Divorce Application', '2021-05-17 11:08:41', 'divorce_application');

-- --------------------------------------------------------

--
-- Table structure for table `encroachment`
--

CREATE TABLE `encroachment` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` varchar(500) NOT NULL,
  `adhar_back` varchar(500) NOT NULL,
  `defendant_name` varchar(500) NOT NULL,
  `address_defendant` text NOT NULL,
  `propert_encroached` varchar(500) NOT NULL,
  `title_deed` varchar(500) NOT NULL,
  `relief` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Encroachment Notice',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'encroachment'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `encroachment`
--

INSERT INTO `encroachment` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `adhar_front`, `adhar_back`, `defendant_name`, `address_defendant`, `propert_encroached`, `title_deed`, `relief`, `table_head`, `added_date`, `table_name`) VALUES
(1, '6006acf0e22b6', 'addas', 'dasdasdsd', '01/19/2021', 'asds@gmail.com', '1230002500', '411021', 'dkdsdh', 'jbsbdsdsd', '0484106001611049483.png', '0484178001611049483.jpg', 'dsadsadas', 'dsaasd', 'asddds', '0926398001611050224.png', 'adasdadsd', 'Encroachment Notice', '2021-01-19 09:57:04', 'encroachment'),
(2, '6006bfddc2161', 'addsadsa', 'dassasd', '01/19/2021', 'asdsa@gmail.com', '70014001230', '44115', 'daddsa', 'asdfksd', '0914845001611051380.png', '0914937001611051380.jpg', 'dsads', 'adsad', 'asdasdsad', '0279679001611055028.pdf', 'sddadadsads', 'Encroachment Notice', '2021-01-19 11:17:49', 'encroachment'),
(3, '604651f4635be', 'sdsadas', 'dsdda', '03/08/2021', 'dsfs@gmail.com', '2003001470', '411021', 'sdsd', 'fssd', '0587702001615221222.png', '0587762001615221222.pdf', 'dsadsad', 'sadasdasdsd', 'sadsadasdasd', '0425450001615221231.png', 'dsadd', 'Encroachment Notice', '2021-03-08 16:33:56', 'encroachment'),
(4, '6031fbdb5b2d4', 'sdasdsa', 'dsdsadasd', '03/08/2021', 'asdsad@gmail.com', '4561237890', '411021', 'dsdsdnn', 'nsnsdsnd', '0025489001615221313.png', '0025541001615221313.pdf', 'sdd', 'sdasa', 'sasa', '0634457001615221321.pdf', 'sdsd', 'Encroachment Notice', '2021-03-08 16:35:26', 'encroachment'),
(5, '60a0ba9e76c5d', 'adsdsasad', 'asdasdsad', '05/16/2021', 'asdasd@gmail.com', '8105495600', '4411', '5555', '555', '0132266001621149657.jpeg', '0132360001621149657.jpeg', 'assdsd', 'asddsads', 'dsassad', '0423705001621149667.jpeg', 'dsa', 'Encroachment Notice', '2021-05-16 07:21:07', 'encroachment'),
(6, '60a0c8f155565', 'adsadsasddsa', 'assadads', '16-05-2021', 'dssad@gmail.com', '1236547890', '411021', 'sasssa', 'dsads', '0074842001621149929.jpeg', '0074914001621149929.jpeg', 'asdsaddas', 'dsadsadsa', 'sdsda', '0349546001621149937.jpeg', 'sdadsa', 'Encroachment Notice', '2021-05-16 07:25:37', 'encroachment'),
(7, '60a0cbdc4b5d0', 'saddsa', 'sddsaad', '16-05-2021', 'sasad@gmail.com', '7890001230', '411021', 'sdd', 'sasa', '0766410001621150675.jpeg', '0766479001621150675.jpeg', 'asasdsda', 'dsaadsasd', 'sadsad', '0308692001621150684.jpeg', 'ads', 'Encroachment Notice', '2021-05-16 07:38:04', 'encroachment');

-- --------------------------------------------------------

--
-- Table structure for table `esi_claim`
--

CREATE TABLE `esi_claim` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` text NOT NULL,
  `adhar_back` text NOT NULL,
  `local_esi_office` varchar(200) NOT NULL,
  `address_office` text NOT NULL,
  `esi_complaint` varchar(300) NOT NULL,
  `communication_attachment` varchar(500) NOT NULL,
  `complaint` text NOT NULL,
  `relief` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'ESI Claim Notice',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'esi_claim'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `esi_claim`
--

INSERT INTO `esi_claim` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `adhar_front`, `adhar_back`, `local_esi_office`, `address_office`, `esi_complaint`, `communication_attachment`, `complaint`, `relief`, `table_head`, `added_date`, `table_name`) VALUES
(1, '609cc8ed908ca', 'sdd', 'sdsdsd', 'dsdsdsdsdsdsdsds', 'sdsdsd@gmail.com', 'dsdsdsd', '411021', 'sdsd', 'ssdsdsd', '0516754001620887174.jpeg', '0539248001620887174.jpeg', 'dass', 'daasdsadasdasddsda', 'sdadsadsads', '0592079001620887789.jpeg', 'asddssd', 'dasdds', 'ESI Claim Notice', '2021-05-13 06:36:30', 'esi_claim'),
(2, '609cc964b1406', 'sdd', 'sdsdsd', 'dsdsdsdsdsdsdsds', 'sdsdsd@gmail.com', 'dsdsdsd', '411021', 'sdsd', 'ssdsdsd', '0516754001620887174.jpeg', '0539248001620887174.jpeg', 'dass', 'daasdsadasdasddsda', 'sdadsadsads', '0726026001620887908.jpeg', 'asddssd', 'dasdds', 'ESI Claim Notice', '2021-05-13 06:38:28', 'esi_claim'),
(3, '609cf02a10301', 'ssdsdd', 'sdsds', 'dsddsdsd', 'sdsdsds@gmail.com', 'dsdsssd', '1002', '222', '555', '0966953001620897824.jpg', '0990513001620897824.jpg', 'dsdsdsd', 'sdsds', 'dsdsd', '0066312001620897834.jpg', 'assad', 'adsads', 'ESI Claim Notice', '2021-05-13 09:23:54', 'esi_claim'),
(4, '609cf33ec24ad', 'sddsadas', 'dadsdasads', 'ddasads', 'dsadadsads', 'saddasads', 'adsddas', 'sddsasd', 'addas', '0345792001620898612.jpg', '0346046001620898612.jpg', 'dassadas', 'dasdasadsads', 'adsdsaads', '0795828001620898622.jpg', 'adadsdsa', 'asdasdd', 'ESI Claim Notice', '2021-05-13 09:37:02', 'esi_claim'),
(5, '609cf3f3282f4', 'asdddasd', 'dsdasds', 'dasdsd', 'adsasdds', 'dsdsdads', '411021', 'sadsanjad', 'kndna', '0526117001620898791.jpg', '0526196001620898791.jpg', 'dasadsdddsd', 'dadass', 'dsaads', '0164616001620898803.png', 'adddsdasddas', 'dasdssdasd', 'ESI Claim Notice', '2021-05-13 09:40:03', 'esi_claim'),
(6, '609cf4b3287ae', 'asdddasd', 'dsdasds', 'dasdsd', 'adsasdds', 'dsdsdads', '411021', 'sadsanjad', 'kndna', '0297724001620898982.jpg', '0297798001620898982.jpg', 'saddsadsdds', 'asdasdadsads', 'dasdsas', '0165813001620898995.jpeg', 'addas', 'dasd', 'ESI Claim Notice', '2021-05-13 09:43:15', 'esi_claim'),
(7, '609e4d0887561', 'ddsfdds', 'fdgfgf', 'fsdfddfdf', 'reshma@gmail.com', '4563211230', '411021', 'state', 'asdsdsd', '0789299001620987031.', '0789339001620987031.', 'asdsadd', 'ddas', 'asdasd', '0554345001620987144.png', 'assad', 'dsadsa', 'ESI Claim Notice', '2021-05-14 10:12:24', 'esi_claim');

-- --------------------------------------------------------

--
-- Table structure for table `gratuity_claim`
--

CREATE TABLE `gratuity_claim` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `first_party` varchar(200) NOT NULL,
  `adhar_front` varchar(500) NOT NULL,
  `adhar_back` varchar(500) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `address_company` text NOT NULL,
  `gratuity_calculation` varchar(500) NOT NULL,
  `employment_letter` varchar(500) NOT NULL,
  `relieving_letter` varchar(500) NOT NULL,
  `communication_attachment` varchar(500) NOT NULL,
  `complaint` text NOT NULL,
  `relief` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Gratuity Claim',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'gratuity_claim'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gratuity_claim`
--

INSERT INTO `gratuity_claim` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `first_party`, `adhar_front`, `adhar_back`, `company_name`, `address_company`, `gratuity_calculation`, `employment_letter`, `relieving_letter`, `communication_attachment`, `complaint`, `relief`, `table_head`, `added_date`, `table_name`) VALUES
(1, '609e74f39bac6', 'sdsdadsds', 'asdadsasd', '10//', 'xss@gmail.com', '1230001230', '411021', 'sdsdd', 'ssds', '', '0645448001620997326.jpeg', '0645525001620997326.jpeg', 'dsd', 'dasdas', 'asddsa', '0637646001620997363.jpeg', '0637716001620997363.jpeg', '0637741001620997363.jpeg', 'asdads', 'asddas', 'Gratuity Claim', '2021-05-14 13:02:44', 'gratuity_claim'),
(2, '609e7522eefcc', 'sdsdadsds', 'asdadsasd', '10//', 'xss@gmail.com', '1230001230', '411021', 'sdsdd', 'ssds', '', '0645448001620997326.jpeg', '0645525001620997326.jpeg', 'dsasdasdas', 'dasdas', 'asdsdaasd', '0978901001620997410.jpeg', '0978994001620997410.jpeg', '0979025001620997410.jpeg', 'adsasd', 'adsads', 'Gratuity Claim', '2021-05-14 13:03:31', 'gratuity_claim'),
(3, '609e4d0887561', 'dsfsdfdsd', 'dsffdfsd', 'dsfdsfs', 'dsdssda@gmail.com', '3223212300', '411021', 'sasdd', 'asdsa', '', '0415750001620997473.jpeg', '0415856001620997473.jpeg', 'adssdasdas', 'adssdad', 'rfdsdsff', '0220704001620997527.jpeg', '0220809001620997527.jpeg', '0220844001620997527.jpeg', 'sfdsfdsdf', 'sdsfdsfd', 'Gratuity Claim', '2021-05-14 13:05:27', 'gratuity_claim');

-- --------------------------------------------------------

--
-- Table structure for table `harrashment`
--

CREATE TABLE `harrashment` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` text NOT NULL,
  `adhar_back` text NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `address_company` text NOT NULL,
  `defendant_name` varchar(300) NOT NULL,
  `defendant_designation` varchar(500) NOT NULL,
  `complaint_harrashment` text NOT NULL,
  `complaint` text NOT NULL,
  `relief` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Sexual Harassment',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'harrashment'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harrashment`
--

INSERT INTO `harrashment` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `adhar_front`, `adhar_back`, `company_name`, `address_company`, `defendant_name`, `defendant_designation`, `complaint_harrashment`, `complaint`, `relief`, `table_head`, `added_date`, `table_name`) VALUES
(1, '609d1aa019e9d', 'prabal', 'ssdsdds', 'dassd', 'ssadasd@gmail.com', 'dadasd', '411021', 'sddfasd', 'dsfsdsd', '0115344001620908501.jpeg', '0115404001620908501.jpeg', 'kjjkhjh', 'jgghhj', 'hhbh', 'ghghg', '0106154001620908704.jpeg', 'ljnhkhk', 'khhkjjk', 'Sexual Harassment', '2021-05-13 12:25:04', 'harrashment'),
(2, '609d1b2e2a92a', 'wffsdfsd', 'fsdfdsfs', 'sdsd', 'fdsfd@gmail.com', 'dsfsf', '411021', 'sasasdh', 'dskdffdsf', '0298302001620908822.jpeg', '0298369001620908822.jpeg', 'sssdf', 'sdfdfsdfsdf', 'fdsfsd', 'dsfdsf', '0174393001620908846.jpeg', 'fsf', 'fs', 'Sexual Harassment', '2021-05-13 12:27:26', 'harrashment'),
(3, '609d208673140', 'asdasdsad', 'saadsd', 'sadsad', '', '8105495600', '', '', '', '0087619001620910199.jpeg', '0087969001620910199.jpeg', 'adsasdsd', 'dasdasdasd', 'dasdasdas', 'dasdsdsadsa', '0471367001620910214.jpeg', 'adsddsasd', 'adasdasd', 'Sexual Harassment', '2021-05-13 12:50:14', 'harrashment'),
(4, '609e553c03993', 'saddsadsa', 'gupta', '10/12/1990', 'reshmssa@gmail.com', '7894569870', '411021', 'sdasd', 'dsfddsf', '0471561001620989017.jpg', '0497718001620989017.jpg', 'dadasads', 'dsadas', 'dasdsasd', 'adsads', '0014749001620989244.png', 'ads', 'dadsads', 'Sexual Harassment', '2021-05-14 10:47:24', 'harrashment'),
(5, '609e57a4536b9', 'adasdads', 'gupta', '10/12/1990', 'reshma@gmail.com', '8105495600', '411021', 'state', 'dfdfsds', '0509895001620989846.png', '0509979001620989846.png', 'sdffsdfdfsdf', 'fdsfdssfdsdf', 'sdfsfdsdf', 'fsfdfdssdf', '0341699001620989860.png', 'dsfsfd', 'fsdfsd', 'Sexual Harassment', '2021-05-14 10:57:40', 'harrashment');

-- --------------------------------------------------------

--
-- Table structure for table `health_insurance`
--

CREATE TABLE `health_insurance` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` varchar(500) NOT NULL,
  `adhar_back` varchar(500) NOT NULL,
  `insurer_name` varchar(500) NOT NULL,
  `address_company` text NOT NULL,
  `insurance_copy` varchar(500) NOT NULL,
  `disputed_bill` varchar(500) NOT NULL,
  `communication` varchar(500) NOT NULL,
  `complaint` text NOT NULL,
  `relief` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Health Insurance',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'health_insurance'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health_insurance`
--

INSERT INTO `health_insurance` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `adhar_front`, `adhar_back`, `insurer_name`, `address_company`, `insurance_copy`, `disputed_bill`, `communication`, `complaint`, `relief`, `table_head`, `added_date`, `table_name`) VALUES
(1, '604b00a352ae2', 'assdd', 'dsadasdasd', '03/12/2021', 'sad@gmail.com', '1230045620', '4110221', 'assadd', 'jabasds', '0084003001615527941.pdf', '0247871001615527941.pdf', 'asdds', 'dadsdad', '0338665001615528099.pdf', '0338744001615528099.pdf', '0338777001615528099.pdf', 'adddasdas', 'dasddsdasdasd', 'Health Insurance', '2021-03-12 05:48:19', 'health_insurance'),
(2, '604b03b4a9765', 'saddsdsa', 'dsadsadsa', '03/12/2021', 'asadas@gmail.com', '1230012300', '411021', 'sdsdh', 'hbdbd', '0583059001615528863.pdf', '0597959001615528863.pdf', 'sadsadas', 'dasdasd', '0694129001615528884.pdf', '0694243001615528884.pdf', '0694267001615528884.pdf', 'zfsfsdfsd', 'dffsdfdsf', 'Health Insurance', '2021-03-12 06:01:25', 'health_insurance');

-- --------------------------------------------------------

--
-- Table structure for table `labour_notice`
--

CREATE TABLE `labour_notice` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `labourName` varchar(100) NOT NULL,
  `labourFatherName` varchar(100) NOT NULL,
  `labourAddress` varchar(200) NOT NULL,
  `labourAge` varchar(20) NOT NULL,
  `labourDob` varchar(100) NOT NULL,
  `labourJoiningDate` varchar(200) NOT NULL,
  `labourEmployerName` varchar(100) NOT NULL,
  `labourRelievingDate` varchar(100) NOT NULL,
  `labourEmployerAddress` varchar(500) NOT NULL,
  `labourCompanyAddress` varchar(200) NOT NULL,
  `labourDesignation` varchar(100) NOT NULL,
  `labourJobDesc` varchar(100) NOT NULL,
  `labourTerminatedNotice` varchar(200) NOT NULL,
  `labourCompanyIdCard` varchar(200) NOT NULL,
  `labourSalaryPaid` varchar(200) NOT NULL,
  `labourReasonTermination` varchar(200) NOT NULL,
  `labourPendingDues` varchar(200) NOT NULL,
  `labourNoticePeriod` varchar(200) NOT NULL,
  `labourBriefDesc` varchar(200) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_head` varchar(500) NOT NULL DEFAULT 'Labour Notice',
  `oppointment_letter` varchar(200) NOT NULL,
  `table_name` varchar(500) NOT NULL DEFAULT 'labour_notice'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lessor_dispute`
--

CREATE TABLE `lessor_dispute` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `complainant_basic` text NOT NULL,
  `details_complainant_basic` text NOT NULL,
  `adhar_front` text NOT NULL,
  `adhar_back` text NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `address_defendant` varchar(500) NOT NULL,
  `complaint` text NOT NULL,
  `relief` text NOT NULL,
  `aggreement_attachment` varchar(500) NOT NULL,
  `previous_attachment` varchar(500) NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Lessor Dispute',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'lessor_dispute'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lessor_dispute`
--

INSERT INTO `lessor_dispute` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `complainant_basic`, `details_complainant_basic`, `adhar_front`, `adhar_back`, `company_name`, `address_defendant`, `complaint`, `relief`, `aggreement_attachment`, `previous_attachment`, `table_head`, `added_date`, `table_name`) VALUES
(1, '6007114be7b29', 'dsasad', 'dsadsdsd', '01/19/2021', 'asd@gmail.com', '1230001230', '411021', 'saddsads', 'dsffdfdasdsd', 'adsdsadas', 'ddsadasd', '0942254001611075009.jpg', '0961781001611075009.jpg', 'sadsd', 'dasdas', 'asdsadasda', 'dfsdsdsadsad', '0617539001611075912.', '0617562001611075912.pdf', 'Lessor Dispute', '2021-01-19 17:05:16', 'lessor_dispute'),
(2, '6007b54730b84', 'asddd', 'asdsad', '01/20/2021', 'sdadas@gmail.com', '5002001230', '411021', 'sdjbdsgd', 'hbshbdsdsd', 'sdsdasdas', 'dasdasdasdas', '0206911001611117847.png', '0215489001611117847.pdf', 'asdadasd', 'dsadas', 'adddasd', 'dsadadadsd', '0852968001611117892.pdf', '0853021001611117892.png', 'Lessor Dispute', '2021-01-20 04:44:55', 'lessor_dispute'),
(3, '60465f90510fa', 'sadasdas', 'ddsadasasd', '03/08/2021', 'dsffsd@gmail.com', '1230001470', '410100', 'sdsd', 'sfssdd', 'sdffsdf', 'sdfdsfds', '0752685001615224666.pdf', '0752775001615224666.pdf', 'xcssxzczx', 'xcxc', 'dsfdsfds', 'sddf', '0615721001615224712.pdf', '0615787001615224712.pdf', 'Lessor Dispute', '2021-03-08 17:32:00', 'lessor_dispute'),
(4, '60466a1a49d9d', 'dffdg', 'vfdf', '03/08/2021', 'ssdfd@gmail.com', '1230001590', '411011', 'sdadk', 'dsfdfk', 'fdfdsq', 'adsfsdsfd', '0337637001615227378.pdf', '0337728001615227378.pdf', 'dffsdfsd', 'fdsfsd', 'dsfdsfsdf', 'dfdsf', '0212538001615227414.png', '0212643001615227414.png', 'Lessor Dispute', '2021-03-08 18:16:58', 'lessor_dispute'),
(5, '6031fbdb5b2d4', 'sasasad', 'dsadsasad', '', 'ssdad@gmail.com', '1002000147', '411021', 'sdsdh', 'jsdgsdgsd', 'ddasdas', 'dasdasd', '0656553001615227793.png', '0656617001615227793.png', 'dfd', 'fddffsf', 'asdds', 'asdsd', '0482469001615227827.pdf', '0482599001615227827.png', 'Lessor Dispute', '2021-03-08 18:23:49', 'lessor_dispute'),
(6, '60a1060ce4b51', 'sads', 'sadd', '16-05-2021', 'dsas@gmail.com', '7008009000', '411021', 'dsds', 'dsfdsad', '', '', '0463164001621165084.jpeg', '0512172001621165084.jpeg', 'dsasad', 'dsdsaasd', 'asdds', 'asdssad', '0936801001621165580.jpeg', '0936949001621165580.jpeg', 'Lessor Dispute', '2021-05-16 11:46:21', 'lessor_dispute');

-- --------------------------------------------------------

--
-- Table structure for table `life_insurance_claim`
--

CREATE TABLE `life_insurance_claim` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` varchar(500) NOT NULL,
  `adhar_back` varchar(500) NOT NULL,
  `insurer_name` varchar(500) NOT NULL,
  `address_company` text NOT NULL,
  `insurance_copy` varchar(500) NOT NULL,
  `proof_payment` varchar(500) NOT NULL,
  `document` varchar(500) NOT NULL,
  `communication` varchar(500) NOT NULL,
  `issue` text NOT NULL,
  `relief` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Life Insurance Claim',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'life_insurance_claim'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `life_insurance_claim`
--

INSERT INTO `life_insurance_claim` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `adhar_front`, `adhar_back`, `insurer_name`, `address_company`, `insurance_copy`, `proof_payment`, `document`, `communication`, `issue`, `relief`, `table_head`, `added_date`, `table_name`) VALUES
(1, '60a27eb4b2e34', 'dsdsdas', 'asddas', '17-05-2021', 'sads@gmail.com', '23212130', '41102', 'sdsd', 'ads', '0312644001621261740.jpeg', '0339072001621261740.jpeg', 'sssad', '', '0732732001621262004.jpeg', '0732848001621262004.jpeg', '0733287001621262004.jpeg', '0733252001621262004.jpeg', '', '', 'Life Insurance Claim', '2021-05-17 14:33:24', 'life_insurance_claim');

-- --------------------------------------------------------

--
-- Table structure for table `misconduct_notice`
--

CREATE TABLE `misconduct_notice` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` text NOT NULL,
  `adhar_back` text NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `employee_name` varchar(200) NOT NULL,
  `address_employee` text NOT NULL,
  `type_misconduct` varchar(500) NOT NULL,
  `details_misconduct` text NOT NULL,
  `employment_letter` text NOT NULL,
  `reprimand_advice` text NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_head` varchar(500) NOT NULL DEFAULT 'MisConduct Notice',
  `table_name` varchar(500) NOT NULL DEFAULT 'misconduct_notice'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `misconduct_notice`
--

INSERT INTO `misconduct_notice` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `adhar_front`, `adhar_back`, `company_name`, `employee_name`, `address_employee`, `type_misconduct`, `details_misconduct`, `employment_letter`, `reprimand_advice`, `added_date`, `table_head`, `table_name`) VALUES
(1, '6031fbdb5b2d4', 'asdd', 'dsadsadasd', '03/01/2021', 'sadads@gmail.com', '1230015900', '411021', 'sdsdsd', 'husdsds', '0200091001614578220.pdf', '0237154001614578220.pdf', 'asddads', 'asdsasad', 'dsdsa', 'asdasd', 'asdsadd', '0318238001614579636.pdf', 'asdasdasdasd', '2021-03-01 06:20:41', 'MisConduct Notice', 'misconduct_notice'),
(2, '609fac320bca3', 'sdadsadsa', 'dsdsas', 'dsasd', 'dassad', 'dsasda', 'dsad', 'ssd', 'sad', '0063626001621076981.jpeg', '0063710001621076981.jpeg', '', '', '', '', '', '0048299001621077042.', '', '2021-05-15 11:10:42', 'MisConduct Notice', 'misconduct_notice'),
(3, '609e4d0887561', 'asdadssd', 'asdas', 'asdadsdas', 'asdasddsa', 'dsadsad', '411021', 'addsaasd', 'dsaasddsa', '0295174001621077086.jpeg', '0295239001621077086.jpeg', 'asddsad', 'sdadsasdadsdsa', 'sdasda', 'ddasdsa', 'asddsa', '0939554001621077097.jpeg', 'asdsa', '2021-05-15 11:11:37', 'MisConduct Notice', 'misconduct_notice'),
(4, '609fad42a6a8d', 'saasassa', 'ASASassasas', 'asas', 'sss', 'SASA', '41021', 'sasa', 'asddas', '0710498001621077303.pdf', '0710598001621077303.jpeg', 'asdsadds', 'saddsa', 'dsads', 'ds', 'ddssad', '0682644001621077314.jpeg', 'dasd', '2021-05-15 11:15:14', 'MisConduct Notice', 'misconduct_notice');

-- --------------------------------------------------------

--
-- Table structure for table `motor_vehicle_claim`
--

CREATE TABLE `motor_vehicle_claim` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` varchar(500) NOT NULL,
  `adhar_back` varchar(500) NOT NULL,
  `insurer_name` varchar(500) NOT NULL,
  `address_company` text NOT NULL,
  `insurance_copy` varchar(500) NOT NULL,
  `proof_payment` varchar(500) NOT NULL,
  `communication` varchar(500) NOT NULL,
  `issue` text NOT NULL,
  `relief` text NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_head` varchar(500) NOT NULL DEFAULT 'Motor Vehicle Claim'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motor_vehicle_claim`
--

INSERT INTO `motor_vehicle_claim` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `adhar_front`, `adhar_back`, `insurer_name`, `address_company`, `insurance_copy`, `proof_payment`, `communication`, `issue`, `relief`, `added_date`, `table_head`) VALUES
(1, '60a27744f2d97', 'sasasd', 'dsaasdasd', '17-05-2021', 'sd@gmail.com', '8155500000', '411021', 'ddssd', 'dssd', '0435438001621259498.jpeg', '0449700001621259498.jpeg', 'asddssd', 'sda', '0994722001621260100.jpeg', '0994863001621260100.jpeg', '0994917001621260100.jpeg', 'dasdas', 'adsad', '2021-05-17 14:01:41', 'Motor Vehicle Claim');

-- --------------------------------------------------------

--
-- Table structure for table `non_payment_salary`
--

CREATE TABLE `non_payment_salary` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` varchar(500) NOT NULL,
  `adhar_back` varchar(500) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `address_company` text NOT NULL,
  `employment_letter` varchar(500) NOT NULL,
  `bank_statement` varchar(500) NOT NULL,
  `communication` varchar(500) NOT NULL,
  `relief` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Non Payment Of Salary',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'non_payment_salary'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `non_payment_salary`
--

INSERT INTO `non_payment_salary` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `adhar_front`, `adhar_back`, `company_name`, `address_company`, `employment_letter`, `bank_statement`, `communication`, `relief`, `table_head`, `added_date`, `table_name`) VALUES
(1, '609f6e799256f', 'adssdads', 'guota', '10/12/19900', 'sdads@gmail.com', '7000800789', '411021', 'sad', 'ads', '0274537001621059757.jpeg', '0274720001621059757.jpeg', 'asdassad', 'sasdasdads', '0598743001621061241.jpeg', '0599249001621061241.jpeg', '0599085001621061241.jpeg', 'dsadsa', 'Non Payment Of Salary', '2021-05-15 06:47:21', 'non_payment_salary'),
(2, '609e4d0887561', 'fdssfdf', 'ffdsdfsdfsdf', 'dsdfssdffds', 'fdsfds@gmail.com', 'fdfsfs', '411021', 'asdads', 'sdfsfdsdf', '0875713001621061293.jpeg', '0876010001621061293.jpeg', 'asdads', 'sdadsad', '0266219001621061463.jpeg', '0266359001621061463.jpeg', '0266317001621061463.jpeg', 'adsdas', 'Non Payment Of Salary', '2021-05-15 06:51:03', 'non_payment_salary'),
(3, '60a0aa8b2d414', 'dsadsa', 'sadsdasad', '05/04/2021', 'dssadsad', '', 'sdsadsa', 'asddsda', 'dsas', '0535449001621142116.jpeg', '0535523001621142116.jpeg', '', '', '0185172001621142155.jpeg', '0185329001621142155.jpeg', '0185291001621142155.jpeg', 'dfsdfsd', 'Non Payment Of Salary', '2021-05-16 05:15:55', 'non_payment_salary');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `notice_name` varchar(200) NOT NULL,
  `attribute_name` varchar(200) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice_attachments`
--

CREATE TABLE `notice_attachments` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `notice_name` varchar(200) NOT NULL,
  `registration_copy` varchar(100) NOT NULL,
  `fir_copy` varchar(100) NOT NULL,
  `emission_copy` varchar(200) NOT NULL,
  `medical_report` varchar(200) NOT NULL,
  `insurance_copy` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pf_claim`
--

CREATE TABLE `pf_claim` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` text NOT NULL,
  `adhar_back` text NOT NULL,
  `pf_office` varchar(200) NOT NULL,
  `address_office` text NOT NULL,
  `pf_complaint` varchar(300) NOT NULL,
  `communication_attachment` varchar(500) NOT NULL,
  `relief` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'PF Claim Notice',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'pf_claim'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pf_claim`
--

INSERT INTO `pf_claim` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `adhar_front`, `adhar_back`, `pf_office`, `address_office`, `pf_complaint`, `communication_attachment`, `relief`, `table_head`, `added_date`, `table_name`) VALUES
(1, '60a0a8b8e9da3', 'adsasdsad', 'sdasadsas', '05/03/2021', 'sdss', 'sadsadsda', '4102', 'sdds', 'dds', '0817018001621141568.jpeg', '0817121001621141568.jpeg', 'adsds', 'adsds', 'asdads', '0957697001621141688.jpeg', 'ads', 'PF Claim Notice', '2021-05-16 05:08:09', 'pf_claim');

-- --------------------------------------------------------

--
-- Table structure for table `product_service`
--

CREATE TABLE `product_service` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` text NOT NULL,
  `adhar_back` text NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `address_defendant` varchar(300) NOT NULL,
  `service_provided` varchar(500) NOT NULL,
  `service_voucher_attachment` varchar(500) NOT NULL,
  `other_attachment` varchar(500) NOT NULL,
  `complaint` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Product / Service',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'product_service'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_service`
--

INSERT INTO `product_service` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `adhar_front`, `adhar_back`, `company_name`, `address_defendant`, `service_provided`, `service_voucher_attachment`, `other_attachment`, `complaint`, `table_head`, `added_date`, `table_name`) VALUES
(1, '6049f52a4e26b', 'sdad', 'asdds', '03/11/2021', 'sadas@gmail.com', '1234741000', '411021', 'sddsds', 'fnsdsds', '0268328001615453199.pdf', '0268824001615453199.png', 'ssadas', 'sdasda', 'asddsaa', '0466862001615459599.pdf', '0466975001615459599.pdf', 'asdsadad', 'Product / Service', '2021-03-11 10:47:06', 'product_service'),
(2, '6031fbdb5b2d4', 'dsdsada', 'sasdasdad', '03/11/2021', 'aadssda@gmail.com', '4563211230', '41121', 'dfsdn', 'jsdsdsds', '0501187001615459708.pdf', '0501309001615459708.pdf', 'saddsda', 'sdasdasdd', 'sadasd', '0606473001615459723.pdf', '0606560001615459723.pdf', 'asdsadasd', 'Product / Service', '2021-03-11 10:48:51', 'product_service');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `user_id` varchar(300) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `adhar_front` varchar(500) NOT NULL,
  `adhar_back` varchar(500) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `user_id`, `first_name`, `last_name`, `email`, `phone`, `password`, `dob`, `age`, `gender`, `adhar_front`, `adhar_back`, `added_on`) VALUES
(1, '60a0ba9e76c5d', 'asdadsasd', 'dsdsaads', 'reshma@gmail.com', '8105495900', '123456', '05/04/2021', 0, '', '0136508001621146180.jpeg', '0136598001621146180.jpeg', '2021-05-16 06:24:30'),
(2, '60a0bb1f46d53', 'asdadsasd', 'dsdsaads', 'reshma@gmail.com', '8105495900', '123456', '05/04/2021', 0, '', '0136508001621146180.jpeg', '0136598001621146180.jpeg', '2021-05-16 06:26:39'),
(3, '60a0c58754b49', 'sdsdsds', 'sdsd', 'dsds@gmail.com', 'dsdds', '123456', '05/04/2021', 0, '', '0502530001621148937.jpeg', '0502624001621148937.jpeg', '2021-05-16 07:11:03'),
(4, '60a0c5b84ab90', 'sdsdsds', 'sdsd', 'dsds@gmail.com', 'dsdds', '123456', '05/04/2021', 0, '', '0502530001621148937.jpeg', '0502624001621148937.jpeg', '2021-05-16 07:11:52'),
(5, '60a0c8f155565', 'adsadsasddsa', 'assadads', 'dssad@gmail.com', '1236547890', '123456', '16-05-2021', 0, '', '0074842001621149929.jpeg', '0074914001621149929.jpeg', '2021-05-16 07:25:37'),
(6, '60a0cbdc4b5d0', 'saddsa', 'sddsaad', 'sasad@gmail.com', '7890001230', '123456', '16-05-2021', 0, '', '0766410001621150675.jpeg', '0766479001621150675.jpeg', '2021-05-16 07:38:04'),
(7, '60a0cd415b74e', 'asdsad', 'dsasdsda', 'iji@gmail.com', '5400012300', '123456', '16-05-2021', 0, '', '0472664001621150896.jpeg', '0472871001621150896.jpeg', '2021-05-16 07:44:01'),
(8, '60a0fef586b8d', 'sdad', 'asddasasd', 'asddsa@gmail.com', '8105495600', '123456', '16-05-2021', 0, '', '0922362001621163691.jpeg', '0922433001621163691.jpeg', '2021-05-16 11:16:05'),
(9, '60a0fef586b8d', 'sdad', 'asddasasd', 'asddsa@gmail.com', '8105495600', '123456', '16-05-2021', 0, '', '0922362001621163691.jpeg', '0922433001621163691.jpeg', '2021-05-16 11:16:05'),
(10, '60a0ffb163a12', 'sdad', 'asddasasd', 'asddsa@gmail.com', '8105495600', '123456', '16-05-2021', 0, '', '0922362001621163691.jpeg', '0922433001621163691.jpeg', '2021-05-16 11:19:13'),
(11, '60a105457b53f', 'sads', 'sadd', 'dsas@gmail.com', '7008009000', '123456', '16-05-2021', 0, '', '0463164001621165084.jpeg', '0512172001621165084.jpeg', '2021-05-16 11:43:01'),
(12, '60a10558d2711', 'sads', 'sadd', 'dsas@gmail.com', '7008009000', '123456', '16-05-2021', 0, '', '0463164001621165084.jpeg', '0512172001621165084.jpeg', '2021-05-16 11:43:20'),
(13, '60a1059180014', 'sads', 'sadd', 'dsas@gmail.com', '7008009000', '123456', '16-05-2021', 0, '', '0463164001621165084.jpeg', '0512172001621165084.jpeg', '2021-05-16 11:44:17'),
(14, '60a1060ce4b51', 'sads', 'sadd', 'dsas@gmail.com', '7008009000', '123456', '16-05-2021', 0, '', '0463164001621165084.jpeg', '0512172001621165084.jpeg', '2021-05-16 11:46:20'),
(15, '60a10cc8a282d', 'dasds', 'sdd', 'adas@gmail.com', 'assd', '123456', '16-05-2021', 0, '', '0690816001621167290.jpeg', '0690900001621167290.jpeg', '2021-05-16 12:15:04'),
(16, '60a10cf904ac4', 'dasds', 'sdd', 'adas@gmail.com', 'assd', '123456', '16-05-2021', 0, '', '0690816001621167290.jpeg', '0690900001621167290.jpeg', '2021-05-16 12:15:53'),
(17, '60a10d20e9f2e', 'dasds', 'sdd', 'adas@gmail.com', 'assd', '123456', '16-05-2021', 0, '', '0690816001621167290.jpeg', '0690900001621167290.jpeg', '2021-05-16 12:16:32'),
(18, '60a23fa97f962', 'dsddsds', 'dsdssad', 'sadsad@gmail.com', '400010001230', '123456', '17-05-2021', 0, '', '0373994001621245793.jpeg', '0394543001621245793.jpeg', '2021-05-17 10:04:25'),
(19, '60a23fe35144e', 'dsddsds', 'dsdssad', 'sadsad@gmail.com', '400010001230', '123456', '17-05-2021', 0, '', '0373994001621245793.jpeg', '0394543001621245793.jpeg', '2021-05-17 10:05:23'),
(20, '60a24eb991464', 'ddasdsda', 'dadsasd', 'ss@gmail.com', '8100000123', '123456', '17-05-2021', 0, '', '0017169001621249699.jpeg', '0034436001621249699.jpeg', '2021-05-17 11:08:42'),
(21, '60a25fcc53de0', 'sddsd', 'ssdsd', 'sdd@gmail.com', '8656612300', '123456', '17-05-2021', 0, '', '0861393001621254079.jpeg', '0861511001621254079.jpeg', '2021-05-17 12:21:32'),
(22, '60a276aada17a', 'sasasd', 'dsaasdasd', 'sd@gmail.com', '8155500000', '123456', '17-05-2021', 0, '', '0435438001621259498.jpeg', '0449700001621259498.jpeg', '2021-05-17 13:59:06'),
(23, '60a276d3684d7', 'sasasd', 'dsaasdasd', 'sd@gmail.com', '8155500000', '123456', '17-05-2021', 0, '', '0435438001621259498.jpeg', '0449700001621259498.jpeg', '2021-05-17 13:59:47'),
(24, '60a2771bade09', 'sasasd', 'dsaasdasd', 'sd@gmail.com', '8155500000', '123456', '17-05-2021', 0, '', '0435438001621259498.jpeg', '0449700001621259498.jpeg', '2021-05-17 14:00:59'),
(25, '60a27744f2d97', 'sasasd', 'dsaasdasd', 'sd@gmail.com', '8155500000', '123456', '17-05-2021', 0, '', '0435438001621259498.jpeg', '0449700001621259498.jpeg', '2021-05-17 14:01:40'),
(26, '60a27d8e425b2', 'dsdsdas', 'asddas', 'sad@gmail.com', '2321213', '123456', '17-05-2021', 0, '', '0394725001621261231.jpeg', '0410320001621261231.jpeg', '2021-05-17 14:28:30'),
(27, '60a27eb4b2e34', 'dsdsdas', 'asddas', 'sads@gmail.com', '23212130', '123456', '17-05-2021', 0, '', '0312644001621261740.jpeg', '0339072001621261740.jpeg', '2021-05-17 14:33:24');

-- --------------------------------------------------------

--
-- Table structure for table `reply_notice`
--

CREATE TABLE `reply_notice` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `advocate_id` varchar(500) NOT NULL,
  `notice_id` varchar(100) NOT NULL,
  `table_name` varchar(500) NOT NULL,
  `reply` varchar(500) NOT NULL,
  `reply_date` varchar(200) NOT NULL,
  `reply_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `retrenchment_notice`
--

CREATE TABLE `retrenchment_notice` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `first_party` varchar(200) NOT NULL,
  `adhar_front` varchar(500) NOT NULL,
  `adhar_back` varchar(500) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `employee_name` varchar(500) NOT NULL,
  `address_employee` text NOT NULL,
  `employment_letter` varchar(500) NOT NULL,
  `retrenchment_reason` text NOT NULL,
  `compensation` text NOT NULL,
  `item_handed` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Retrenchment Notice',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'retrenchment_notice'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retrenchment_notice`
--

INSERT INTO `retrenchment_notice` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `first_party`, `adhar_front`, `adhar_back`, `company_name`, `employee_name`, `address_employee`, `employment_letter`, `retrenchment_reason`, `compensation`, `item_handed`, `table_head`, `added_date`, `table_name`) VALUES
(1, '609e4d0887561', 'assdsd', 'dsds', 'adsasd', 'adsds', 'dsadssda', '454', '544', '444', '', '0920002001621087325.jpeg', '0937266001621087325.jpeg', 'dssd', 'saddasd', 'ddasads', '0813131001621087342.jpeg', 'asdd', 'asdsds', 'ads', 'Retrenchment Notice', '2021-05-15 14:02:22', 'retrenchment_notice'),
(2, '609fd53d9251b', 'asdsdas', 'adsdsasd', 'dsadas', 'dsdas', 'adsdsa', '410221', 'asdds', 'asdad', '', '0429343001621087538.jpeg', '0429488001621087538.jpeg', 'addaads', 'dasd', 'dsads', '0599229001621087549.jpeg', 'asddsa', 'adsdas', 'dsadsa', 'Retrenchment Notice', '2021-05-15 14:05:49', 'retrenchment_notice');

-- --------------------------------------------------------

--
-- Table structure for table `salary_dues`
--

CREATE TABLE `salary_dues` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` text NOT NULL,
  `adhar_back` text NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `address_defendant` varchar(300) NOT NULL,
  `date_emp` varchar(300) NOT NULL,
  `salary_slip` varchar(500) NOT NULL,
  `communication_attachment` varchar(500) NOT NULL,
  `complaint` text NOT NULL,
  `relief` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Salary Dues Notice',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'salary_dues'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary_dues`
--

INSERT INTO `salary_dues` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `adhar_front`, `adhar_back`, `company_name`, `address_defendant`, `date_emp`, `salary_slip`, `communication_attachment`, `complaint`, `relief`, `table_head`, `added_date`, `table_name`) VALUES
(1, '609d0f39dfdec', 'dsadasdsdsd', 'dsadsas', 'sdasdasdasd', 'dsdsads@gmail.com', 'dsadsda', '410021', 'sdjsdnj', 'jsnds', '0817403001620903942.jpeg', '0838400001620903942.jpeg', 'adsdsad', 'dasdasdasd', 'asdsd', '0916981001620905785.jpeg', '0949254001620905785.jpeg', 'dsffds', 'fsdfsd', 'Salary Dues Notice', '2021-05-13 11:36:27', 'salary_dues'),
(2, '609e500519b77', 'dadsdsaasd', 'gupta', '10/12/1990', 'reshma123@gmail.com', '8105495600', '4111022', 'hfhfhg', 'hggf', '0496861001620987862.jpg', '0598033001620987862.jpg', 'dasdsads', 'dsdsads', '10/12/1990', '', '', 'asddsa', 'dadsdas', 'Salary Dues Notice', '2021-05-14 10:25:09', 'salary_dues');

-- --------------------------------------------------------

--
-- Table structure for table `sarfaesi_notice`
--

CREATE TABLE `sarfaesi_notice` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` varchar(500) NOT NULL,
  `adhar_back` varchar(500) NOT NULL,
  `branch_name` varchar(500) NOT NULL,
  `address_bank` text NOT NULL,
  `contention` varchar(500) NOT NULL,
  `sarfaesi_notice` varchar(500) NOT NULL,
  `reply_notices` varchar(500) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_head` varchar(500) NOT NULL DEFAULT 'Sarfaesi Notice',
  `table_name` varchar(500) NOT NULL DEFAULT 'sarfaesi_notice'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sarfaesi_notice`
--

INSERT INTO `sarfaesi_notice` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `adhar_front`, `adhar_back`, `branch_name`, `address_bank`, `contention`, `sarfaesi_notice`, `reply_notices`, `added_date`, `table_head`, `table_name`) VALUES
(1, '6031fbdb5b2d4', 'asdada', 'sdasdasdsd', '03/02/2021', 'dssdasdds@gmail.com', '1200015970', '411021', 'ssdsdsd', 'jnssdsd', '0988542001614668391.pdf', '0008696001614668392.pdf', 'sddsd', 'sdsd', 'sddsdsdsd', '0224512001614669979.png', '0224612001614669979.png', '2021-03-02 07:26:23', 'Sarfaesi Notice', 'sarfaesi_notice'),
(2, '6031fbdb5b2d4', 'dsadadsa', 'sadadasdsad', '03/02/2021', 'saads@gmail.com', '1002001478', '411021', 'sdsdsd', 'sdsdsd', '0548694001614670516.pdf', '0548761001614670516.pdf', 'sadsdsa', 'dsadsad', 'asdsadsadsd', '0077189001614670530.pdf', '0077249001614670530.pdf', '2021-03-02 07:35:31', 'Sarfaesi Notice', 'sarfaesi_notice'),
(3, '6031fbdb5b2d4', 'dsadadsa', 'sadadasdsad', '03/02/2021', 'saads@gmail.com', '1002001478', '411021', 'sdsdsd', 'sdsdsd', '0548694001614670516.pdf', '0548761001614670516.pdf', 'asddda', 'ddasdd', 'sfddsfsdfsdf', '0767092001614670556.pdf', '0767385001614670556.pdf', '2021-03-02 07:35:59', 'Sarfaesi Notice', 'sarfaesi_notice'),
(4, '6031fbdb5b2d4', 'dsadadsa', 'sadadasdsad', '03/02/2021', 'saads@gmail.com', '1002001478', '411021', 'sdsdsd', 'sdsdsd', '0548694001614670516.pdf', '0548761001614670516.pdf', 'sddsd', 'sdsds', 'sddsd', '0314517001614670629.pdf', '0314583001614670629.pdf', '2021-03-02 07:37:12', 'Sarfaesi Notice', 'sarfaesi_notice'),
(5, '60a0bb1f46d53', 'asdadsasd', 'dsdsaads', '05/04/2021', 'reshma@gmail.com', '8105495900', '411021', 'sdsda', 'ddsfdfsdfs', '0136508001621146180.jpeg', '0136598001621146180.jpeg', 'dasdssda', 'ds', 'adsdsa', '0290189001621146399.jpeg', '0290135001621146399.jpeg', '2021-05-16 06:26:39', 'Sarfaesi Notice', 'sarfaesi_notice'),
(6, '60a0ba9e76c5d', 'assads', 'dsadsa', '05/16/2021', 'acasd@gmail.com', '8105495600', '411021', 'sadsa', 'asasd', '0485861001621146463.jpeg', '0485948001621146463.jpeg', 'aasdasd', 'asdsadsa', 'asd', '0805495001621146475.jpeg', '0805380001621146475.jpeg', '2021-05-16 06:27:55', 'Sarfaesi Notice', 'sarfaesi_notice');

-- --------------------------------------------------------

--
-- Table structure for table `suspension_notice`
--

CREATE TABLE `suspension_notice` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` text NOT NULL,
  `adhar_back` text NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `employee_name` varchar(200) NOT NULL,
  `address_employee` text NOT NULL,
  `employment_letter` text NOT NULL,
  `duration_suspension` varchar(500) NOT NULL,
  `reason_suspension` text NOT NULL,
  `reprimondent` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Suspension Notice',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'suspension_notice'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suspension_notice`
--

INSERT INTO `suspension_notice` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `adhar_front`, `adhar_back`, `company_name`, `employee_name`, `address_employee`, `employment_letter`, `duration_suspension`, `reason_suspension`, `reprimondent`, `table_head`, `added_date`, `table_name`) VALUES
(1, '609fc89810d25', 'asdasda', 'adssad', 'sdasddasd', 'asdasd@gmail.com', 'sadasasd', '41000', '000', '00', '0530808001621084290.', '0530822001621084290.', 'asdads', 'asdadsasd', 'dsadsa', '0068712001621084312.jpeg', 'sadasd', 'sdaads', 'sadsda', 'Suspension Notice', '2021-05-15 13:11:52', 'suspension_notice');

-- --------------------------------------------------------

--
-- Table structure for table `termination_notice`
--

CREATE TABLE `termination_notice` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `first_party` varchar(200) NOT NULL,
  `adhar_front` varchar(500) NOT NULL,
  `adhar_back` varchar(500) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `employee_name` varchar(500) NOT NULL,
  `address_employee` text NOT NULL,
  `employment_letter` varchar(500) NOT NULL,
  `reason_termination` text NOT NULL,
  `date_termination` varchar(500) NOT NULL,
  `item_handed` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Termination Notice',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'termination_notice'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `termination_notice`
--

INSERT INTO `termination_notice` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `first_party`, `adhar_front`, `adhar_back`, `company_name`, `employee_name`, `address_employee`, `employment_letter`, `reason_termination`, `date_termination`, `item_handed`, `table_head`, `added_date`, `table_name`) VALUES
(1, '6031fbdb5b2d4', 'saasdas', 'sasd', '03/01/2021', 'csdssdd@gmail.com', '1002001590', '411021', 'ssdsdj', 'sdsdn', '', '0379847001614581441.pdf', '0396833001614581441.png', 'asdsadas', 'dsdasd', 'dasdsa', '0554974001614581455.jpg', 'sadsdsad', '03/01/2021', 'asddass', 'Termination Notice', '2021-03-01 06:50:57', 'termination_notice'),
(2, '609fce74e09b6', 'sadsadas', 'dsadsads', 'dsdsasd', 'sddsads', 'asdsdads', 'dsda', 'sdasdsd', 'asad', '', '0208988001621085063.jpeg', '0209089001621085063.jpeg', 'csadasd', 'dadssd', 'dasdsad', '0920004001621085812.jpeg', 'addsa', 'adsads', 'asdads', 'Termination Notice', '2021-05-15 13:36:53', 'termination_notice');

-- --------------------------------------------------------

--
-- Table structure for table `termination_rental`
--

CREATE TABLE `termination_rental` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `first_party` varchar(200) NOT NULL,
  `adhar_front` varchar(500) NOT NULL,
  `adhar_back` varchar(500) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `address_defendant` text NOT NULL,
  `attachment_agreement` varchar(500) NOT NULL,
  `previous_notice` varchar(500) NOT NULL,
  `reason_termination` text NOT NULL,
  `relief` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Termination Rental',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'termination_rental'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `termination_rental`
--

INSERT INTO `termination_rental` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `first_party`, `adhar_front`, `adhar_back`, `company_name`, `address_defendant`, `attachment_agreement`, `previous_notice`, `reason_termination`, `relief`, `table_head`, `added_date`, `table_name`) VALUES
(1, '6007e518db7f6', 'asddasd', 'asdsadasdasdd', '01/20/2021', 'sas@gmail.com', '7004001230', '411021', 'sjsbsdjbsd', 'hbsdsdsds', 'sdsdfsdfdsf', '0193563001611117959.png', '0193642001611117959.png', 'asdda', 'dassaasd', '0770355001611130134.jpg', '0847033001611130134.jpg', 'asddddsasa', 'dsdsaasasdas', 'Termination Rental', '2021-01-20 08:08:57', 'termination_rental'),
(2, '6046f442cf77b', 'dffdsf', 'dsffdfsd', '03/09/2021', 'dfasdd@gmail.com', '1230007410', '411021', 'ssdsd', 'sdsdsd', 'dsdssd', '0755552001615262770.jpg', '0778006001615262770.png', 'sdgddsfds', 'fdsf', '0644914001615262784.pdf', '0657385001615262784.png', 'asd', 'ddsad', 'Termination Rental', '2021-03-09 04:06:26', 'termination_rental'),
(3, '6031fbdb5b2d4', 'asddd', 'saasdsdas', '03/09/2021', 'asds@gmail.com', '7411471470', '411021', 'sadd', 'dfasdas', '', '0520399001615262857.pdf', '0520460001615262857.pdf', 'asdad', 'dsdasd', '0541216001615262883.pdf', '0541262001615262883.pdf', 'sfaffsfsfdsas', 'ddsadasd', 'Termination Rental', '2021-03-09 04:08:05', 'termination_rental'),
(4, '60a10d20e9f2e', 'dasds', 'sdd', '16-05-2021', 'adas@gmail.com', 'assd', '411021', 'sadds', 'fssdf', '', '0690816001621167290.jpeg', '0690900001621167290.jpeg', 'sdadsds', 'dasdas', '0958268001621167392.jpeg', '0958375001621167392.jpeg', 'adds', 'adsads', 'Termination Rental', '2021-05-16 12:16:33', 'termination_rental');

-- --------------------------------------------------------

--
-- Table structure for table `title_deed`
--

CREATE TABLE `title_deed` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` varchar(500) NOT NULL,
  `adhar_back` varchar(500) NOT NULL,
  `defendant_name` varchar(500) NOT NULL,
  `address_defendant` text NOT NULL,
  `title_deed` varchar(500) NOT NULL,
  `complaint` text NOT NULL,
  `relief` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Title Deed Notice',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'title_deed'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title_deed`
--

INSERT INTO `title_deed` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `adhar_front`, `adhar_back`, `defendant_name`, `address_defendant`, `title_deed`, `complaint`, `relief`, `table_head`, `added_date`, `table_name`) VALUES
(1, '600693f0562cf', 'dads', 'dsdasd', '01/19/2021', 'sadsad@gmail.com', '8744101230', '41102', 'kdnsdb', 'joasdsa', '0026582001611043769.jpg', '0026934001611043769.png', 'ddfdas', 'asdsds', '0559566001611043820.pdf', 'asdsad', 'asddsaasdd', 'Title Deed Notice', '2021-01-19 08:10:24', 'title_deed'),
(2, '6006968148dbd', 'asdasd', 'asdddas', '01/19/2021', 'asdads@gmail.com', '8002001230', '411021', 'sdsjn', 'jinasasdad', '0661357001611044432.jpg', '0661474001611044432.png', 'huhihu', 'hhuuhhui', '0074422001611044477.png', 'kmkmkm', 'jjjnkk', 'Title Deed Notice', '2021-01-19 08:21:21', 'title_deed'),
(3, '6031fbdb5b2d4', 'asddasdsd', 'dasdsd', '02/28/2021', 'cascascas@gmail.com', '1599900102', '411021', 'sdsdsdh', 'sfsdsdsd', '0782866001614500832.jpg', '0854000001614500832.pdf', 'asdd', 'sasadasdasd', '0112363001614500842.png', 'adadd', 'dssadasda', 'Title Deed Notice', '2021-02-28 08:27:24', 'title_deed'),
(4, '604649cc2d7cc', 'sdsdsd', 'sdsd', '03/08/2021', 'ffdsfsd@gmail.com', '7410015912', '411021', 'sfksdd', 'jbsdbjdsd', '0549577001615219131.pdf', '0549651001615219131.png', 'dsfdsf', 'dsfsdfsdfsd', '0063951001615219142.png', 'dffdfdfsdfds', 'fdsf', 'Title Deed Notice', '2021-03-08 15:59:08', 'title_deed'),
(5, '6031fbdb5b2d4', 'asdads', 'asadsad', '03/08/2021', 'saads@gmail.com', '1200320012', '411021', 'sdsdb', 'sdsbdb', '0532104001615220408.jpg', '0532169001615220408.png', 'asdddsadasda', 'ddssa', '0241484001615220417.png', 'addas', 'dasdas', 'Title Deed Notice', '2021-03-08 16:20:23', 'title_deed'),
(6, '60a0c5b84ab90', 'sdsdsds', 'sdsd', '05/04/2021', 'dsds@gmail.com', 'dsdds', '411021', 'sads', 'fsadsad', '0502530001621148937.jpeg', '0502624001621148937.jpeg', 'adssdsda', 'adsdas', '0305956001621149112.jpeg', 'adsads', 'adssd', 'Title Deed Notice', '2021-05-16 07:11:52', 'title_deed'),
(7, '60a0ba9e76c5d', 'xvxzcxz', 'dasd', '05/16/2021', 'dsdas@gmail.com', '8105495600', '411021', 'asads', 'asda', '0828898001621149176.jpeg', '0829080001621149176.jpeg', 'dsadassad', 'sad', '0309716001621149247.jpeg', 'dads', 'dsa', 'Title Deed Notice', '2021-05-16 07:14:07', 'title_deed');

-- --------------------------------------------------------

--
-- Table structure for table `trespassing`
--

CREATE TABLE `trespassing` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` varchar(500) NOT NULL,
  `adhar_back` varchar(500) NOT NULL,
  `defendant_name` varchar(500) NOT NULL,
  `address_defendant` text NOT NULL,
  `nature_trespassing` varchar(500) NOT NULL,
  `trespassing_occured` text NOT NULL,
  `detail_trespassing` text NOT NULL,
  `title_deed` varchar(500) NOT NULL,
  `relief` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Trespassing Notice',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'trespassing'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trespassing`
--

INSERT INTO `trespassing` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `adhar_front`, `adhar_back`, `defendant_name`, `address_defendant`, `nature_trespassing`, `trespassing_occured`, `detail_trespassing`, `title_deed`, `relief`, `table_head`, `added_date`, `table_name`) VALUES
(1, '6006c136521e9', 'asdd', 'sadsadd', '01/19/2021', 'asads@gmail.com', '1223001230', '411021', 'sjsbdsbjjb', 'jsdsjbdsds', '0818897001611055404.jpg', '0818973001611055404.pdf', 'asdda', 'dasdsad', 'sadasd', 'dsadsa', 'adasdsad', '0336365001611055414.png', 'sdsad', 'Trespassing Notice', '2021-01-19 11:23:34', 'trespassing'),
(2, '6006d9c49670d', 'sdd', 'ssad', '01/19/2021', 'sadd@gmail.com', '1002003210', '41102', 'sddsd', 'dfsdsad', '0493969001611061184.jpg', '0494075001611061184.png', 'adsds', 'asdsad', 'ddasds', 'dsaddsds', 'dsdsdsd', '0849922001611061697.png', 'sddd', 'Trespassing Notice', '2021-01-19 13:08:20', 'trespassing'),
(3, '60a0cd415b74e', 'asdsad', 'dsasdsda', '16-05-2021', 'iji@gmail.com', '5400012300', '411021', 'sdds', 'dsdsf', '0472664001621150896.jpeg', '0472871001621150896.jpeg', 'saddsa', 'sd', 'dassad', 'dasdsa', 'sasadasd', '0374522001621151041.jpeg', 'dasds', 'Trespassing Notice', '2021-05-16 07:44:01', 'trespassing');

-- --------------------------------------------------------

--
-- Table structure for table `user_notice_filled`
--

CREATE TABLE `user_notice_filled` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `notice_id` varchar(500) NOT NULL,
  `table_name` varchar(500) NOT NULL,
  `table_heading` varchar(500) NOT NULL,
  `pulled` varchar(10) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_notice_filled`
--

INSERT INTO `user_notice_filled` (`id`, `user_id`, `notice_id`, `table_name`, `table_heading`, `pulled`, `added_date`) VALUES
(1, '6031fbdb5b2d4', '1', 'pf_claim', 'PF Claim', '1', '2021-02-28 09:21:24'),
(2, '6031fbdb5b2d4', '1', 'misconduct_notice', 'MisConduct Notice', '1', '2021-03-01 06:46:26'),
(3, '6031fbdb5b2d4', '1', 'termination_notice', 'Termination Notice', '1', '2021-03-01 06:51:15'),
(4, '6031fbdb5b2d4', '4', 'sarfaesi_notice', 'Sarfaesi Notice', '0', '2021-03-02 07:37:12'),
(5, '604649cc2d7cc', '4', 'title_deed', 'Title Deed Notice', '0', '2021-03-08 15:59:08'),
(6, '6031fbdb5b2d4', '5', 'title_deed', 'Title Deed Notice', '0', '2021-03-08 16:20:23'),
(7, '604651f4635be', '3', 'encroachment', 'Encroachment Notice', '0', '2021-03-08 16:33:56'),
(8, '6031fbdb5b2d4', '4', 'encroachment', 'Encroachment Notice', '0', '2021-03-08 16:35:26'),
(10, '60466a1a49d9d', '4', 'lessor_dispute', 'Lessor Dispute', '0', '2021-03-08 18:16:58'),
(11, '6031fbdb5b2d4', '5', 'lessor_dispute', 'Lessor Dispute', '0', '2021-03-08 18:23:49'),
(12, '6046f442cf77b', '2', 'termination_rental', 'Termination Rental', '0', '2021-03-09 04:06:27'),
(13, '6031fbdb5b2d4', '3', 'termination_rental', 'Termination Rental', '0', '2021-03-09 04:08:05'),
(14, '6031fbdb5b2d4', '2', 'arbitration_rental', 'Arbitration Rental', '1', '2021-03-31 14:57:08'),
(15, '6046f7f314e5d', '3', 'arbitration_rental', 'Arbitration Rental', '0', '2021-03-09 04:22:11'),
(16, '6046f975be36e', '3', 'delay_in_construction', 'Delay In Construction', '0', '2021-03-09 04:28:38'),
(17, '6046fcc3a0429', '4', 'delay_in_construction', 'Delay In Construction', '0', '2021-03-09 04:42:43'),
(18, '604704ae12027', '5', 'delay_in_construction', 'Delay In Construction', '0', '2021-03-09 05:16:30'),
(19, '60470934cbd6e', '6', 'delay_in_construction', 'Delay In Construction', '0', '2021-03-09 05:35:48'),
(20, '60472ee2b6d2c', '2', 'divorce_application', 'Divoce Notice', '0', '2021-03-09 08:16:35'),
(21, '60472f7aa33a2', '4', 'divorce_application', 'Divoce Notice', '0', '2021-03-09 08:19:06'),
(22, '6047364e8ecc6', '5', 'divorce_application', 'Divoce Notice', '0', '2021-03-09 08:48:14'),
(23, '6031fbdb5b2d4', '6', 'divorce_application', 'Divoce Notice', '0', '2021-03-09 08:53:37'),
(24, '6049f52a4e26b', '1', 'product_service', 'Product / Service', '0', '2021-03-11 10:47:06'),
(25, '6031fbdb5b2d4', '2', 'product_service', 'Product / Service', '0', '2021-03-11 10:48:51'),
(26, '604a060f79b31', '2', 'life_insurance_claim', 'Life Insurance Claim', '0', '2021-03-11 11:59:11'),
(27, '604a0769a2d21', '3', 'life_insurance_claim', 'Life Insurance Claim', '0', '2021-03-11 12:04:57'),
(28, '604b00a352ae2', '1', 'product_service', 'Product / Service', '0', '2021-03-12 05:48:19'),
(29, '604b03b4a9765', '2', 'health_insurance', 'Health Insurance', '0', '2021-03-12 06:01:25'),
(30, '60648d39cacfd', '7', 'divorce_application', 'Divoce Notice', '0', '2021-03-31 14:54:50'),
(31, '609cc8ed908ca', '1', 'esi_claim', 'ESI Claim', '0', '2021-05-13 06:36:30'),
(32, '609cc964b1406', '2', 'esi_claim', 'ESI Claim', '0', '2021-05-13 06:38:28'),
(33, '609cf02a10301', '3', 'esi_claim', 'ESI Claim', '0', '2021-05-13 09:23:54'),
(34, '609cf33ec24ad', '4', 'esi_claim', 'ESI Claim', '0', '2021-05-13 09:37:03'),
(35, '609cf3f3282f4', '5', 'esi_claim', 'ESI Claim', '0', '2021-05-13 09:40:03'),
(36, '609cf4b3287ae', '6', 'esi_claim', 'ESI Claim', '0', '2021-05-13 09:43:15'),
(37, '609cfdecce525', '2', 'pf_claim', 'PF Claim', '0', '2021-05-13 10:22:37'),
(38, '609cff0aaf62b', '3', 'pf_claim', 'PF Claim', '0', '2021-05-13 10:27:22'),
(39, '609cffe11813e', '4', 'pf_claim', 'PF Claim', '0', '2021-05-13 10:30:57'),
(40, '609d0f39dfdec', '1', 'salary_dues', 'Salary Dues Notice  ', '0', '2021-05-13 11:36:27'),
(41, '609d1aa019e9d', '1', 'harrashment', 'Sexual Harassment', '0', '2021-05-13 12:25:04'),
(42, '609d1b2e2a92a', '2', 'harrashment', 'Sexual Harassment', '0', '2021-05-13 12:27:26'),
(43, '609d208673140', '3', 'harrashment', 'Sexual Harassment', '0', '2021-05-13 12:50:14'),
(44, '609d562b0f2e5', '5', 'pf_claim', 'PF Claim', '0', '2021-05-13 16:39:07'),
(45, '609d56814784d', '6', 'pf_claim', 'PF Claim', '0', '2021-05-13 16:40:33'),
(46, '609e1fd3b773f', '7', 'pf_claim', 'PF Claim', '0', '2021-05-14 06:59:31'),
(47, '609d56814784d', '8', 'pf_claim', 'PF Claim', '0', '2021-05-14 07:01:28'),
(48, '609e4d0887561', '7', 'esi_claim', 'ESI Claim', '0', '2021-05-14 10:12:25'),
(49, '609e500519b77', '2', 'salary_dues', 'Salary Dues Notice  ', '0', '2021-05-14 10:25:09'),
(50, '609e553c03993', '4', 'harrashment', 'Sexual Harassment', '0', '2021-05-14 10:47:24'),
(51, '609e57a4536b9', '5', 'harrashment', 'Sexual Harassment', '0', '2021-05-14 10:57:40'),
(52, '609e6b03a5f03', '1', 'voilation_aggrement', 'Violation Of Aggrement', '0', '2021-05-14 12:20:19'),
(53, '609e74f39bac6', '1', 'gratuity_claim', 'Gratuity Claim', '0', '2021-05-14 13:02:45'),
(54, '609e7522eefcc', '2', 'gratuity_claim', 'Gratuity Claim', '0', '2021-05-14 13:03:31'),
(55, '609e4d0887561', '3', 'gratuity_claim', 'Gratuity Claim', '0', '2021-05-14 13:05:27'),
(56, '609e82b19db38', '1', 'abuse_power', 'Abuse Of Power', '0', '2021-05-14 14:01:22'),
(57, '609f643d010b0', '1', 'abuse_power', 'Abuse Of Power', '0', '2021-05-15 06:03:41'),
(58, '609e4d0887561', '2', 'abuse_power', 'Abuse Of Power', '0', '2021-05-15 06:04:46'),
(59, '609f6e799256f', '1', 'non_payment_salary', 'Non Payment Of Salary', '0', '2021-05-15 06:47:21'),
(60, '609e4d0887561', '2', 'non_payment_salary', 'Non Payment Of Salary', '0', '2021-05-15 06:51:03'),
(61, '609fac320bca3', '2', 'misconduct_notice', 'MisConduct Notice', '0', '2021-05-15 11:10:42'),
(62, '609e4d0887561', '3', 'misconduct_notice', 'MisConduct Notice', '0', '2021-05-15 11:11:38'),
(63, '609fad42a6a8d', '4', 'misconduct_notice', 'MisConduct Notice', '0', '2021-05-15 11:15:14'),
(64, '609fc89810d25', '1', 'suspension_notice', 'Suspension Notice', '0', '2021-05-15 13:11:52'),
(65, '609fce74e09b6', '2', 'termination_notice', 'Termination Notice', '0', '2021-05-15 13:36:53'),
(66, '609e4d0887561', '1', 'retrenchment_notice', 'Retrenchment Notice', '0', '2021-05-15 14:02:23'),
(67, '609fd53d9251b', '2', 'retrenchment_notice', 'Retrenchment Notice', '0', '2021-05-15 14:05:50'),
(68, '60a0a8b8e9da3', '1', 'pf_claim', 'PF Claim', '0', '2021-05-16 05:08:09'),
(69, '60a0aa8b2d414', '3', 'non_payment_salary', 'Non Payment Of Salary', '0', '2021-05-16 05:15:55'),
(70, '60a0bb1f46d53', '2', 'sarfaesi_notice', 'Sarfaesi Notice', '0', '2021-05-16 06:26:39'),
(71, '60a0bb1f46d53', '5', 'sarfaesi_notice', 'Sarfaesi Notice', '0', '2021-05-16 06:26:39'),
(72, '60a0ba9e76c5d', '6', 'sarfaesi_notice', 'Sarfaesi Notice', '0', '2021-05-16 06:27:55'),
(73, '60a0c5b84ab90', '6', 'title_deed', 'Title Deed Notice', '0', '2021-05-16 07:11:52'),
(74, '60a0ba9e76c5d', '7', 'title_deed', 'Title Deed Notice', '0', '2021-05-16 07:14:07'),
(75, '60a0ba9e76c5d', '5', 'encroachment', 'Encroachment Notice', '0', '2021-05-16 07:21:07'),
(76, '60a0c8f155565', '6', 'encroachment', 'Encroachment Notice', '0', '2021-05-16 07:25:37'),
(77, '60a0cbdc4b5d0', '7', 'encroachment', 'Encroachment Notice', '0', '2021-05-16 07:38:04'),
(78, '60a0cd415b74e', '3', 'trespassing', 'Trespassing Notice', '0', '2021-05-16 07:44:01'),
(79, '60a0ffb163a12', '4', 'administration', 'Notice To Administration', '0', '2021-05-16 11:19:13'),
(80, '60a1060ce4b51', '6', 'lessor_dispute', 'Lessor Dispute', '0', '2021-05-16 11:46:21'),
(81, '60a10d20e9f2e', '4', 'termination_rental', 'Termination Rental', '0', '2021-05-16 12:16:33'),
(82, '60a23fe35144e', '7', 'delay_in_construction', 'Delay In Construction', '0', '2021-05-17 10:05:23'),
(83, '60a24eb991464', '8', 'divorce_application', 'Divoce Notice', '0', '2021-05-17 11:08:42'),
(84, '60a27744f2d97', '1', 'product_service', 'Product / Service', '0', '2021-05-17 14:01:41'),
(85, '60a27d8e425b2', '4', 'life_insurance_claim', 'Life Insurance Claim', '0', '2021-05-17 14:28:30'),
(86, '60a27eb4b2e34', '1', 'life_insurance_claim', 'Life Insurance Claim', '0', '2021-05-17 14:33:25');

-- --------------------------------------------------------

--
-- Table structure for table `voilation_aggrement`
--

CREATE TABLE `voilation_aggrement` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `adhar_front` text NOT NULL,
  `adhar_back` text NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `address_company` text NOT NULL,
  `date_employment` varchar(300) NOT NULL,
  `aggrement_employment` varchar(200) NOT NULL,
  `complaint` text NOT NULL,
  `relief` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Violation Of Aggrement',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'voilation_aggrement'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voilation_aggrement`
--

INSERT INTO `voilation_aggrement` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `adhar_front`, `adhar_back`, `company_name`, `address_company`, `date_employment`, `aggrement_employment`, `complaint`, `relief`, `table_head`, `added_date`, `table_name`) VALUES
(1, '609e6b03a5f03', 'dasdds', 'dsds', '10/12/1990', 'dsds@gmail.com', '7890001230', '411021', 'state', 'sssd', '0275706001620994466.jpg', '0275800001620994466.png', 'dasdsads', 'sddasdasd', 'sadsd', '0679690001620994819.png', 'dadasdsa', 'sdadssda', 'Violation Of Aggrement', '2021-05-14 12:20:19', 'voilation_aggrement');

-- --------------------------------------------------------

--
-- Table structure for table `wrongful_termination`
--

CREATE TABLE `wrongful_termination` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `first_party` varchar(200) NOT NULL,
  `adhar_front` varchar(500) NOT NULL,
  `adhar_back` varchar(500) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `address_company` text NOT NULL,
  `employment_letter` varchar(500) NOT NULL,
  `ground_termination` varchar(500) NOT NULL,
  `complaint` text NOT NULL,
  `relief` text NOT NULL,
  `table_head` varchar(500) NOT NULL DEFAULT 'Wrongful Termination',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `table_name` varchar(500) NOT NULL DEFAULT 'wrongful_termination'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wrongful_termination`
--

INSERT INTO `wrongful_termination` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `pincode`, `state`, `address`, `first_party`, `adhar_front`, `adhar_back`, `company_name`, `address_company`, `employment_letter`, `ground_termination`, `complaint`, `relief`, `table_head`, `added_date`, `table_name`) VALUES
(1, '609e82b19db38', 'adsdsadasads', 'dsadasads', '10/12/1990', 'dd@gmail.com', '1233001230', '411021', 'saddasa', 'sads', '', '0217696001621000840.jpeg', '0298566001621000840.jpeg', 'adssadadsdas', 'dasdsdsa', '0645956001621000881.jpeg', 'adadsasd', 'dadads', 'aads', 'Wrongful Termination', '2021-05-14 14:01:22', 'wrongful_termination'),
(2, '609e4d0887561', 'adssa', 'aassda', 'ddad', 'asddasads@gmail.com', '1000200012', '411021', 'asdds', 'daaads', '', '0025662001621001040.jpeg', '0025760001621001040.jpeg', 'dsaasd', 'dasd', '0870881001621001160.jpeg', 'adsads', 'asddas', 'adads', 'Wrongful Termination', '2021-05-14 14:06:00', 'wrongful_termination');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abuse_power`
--
ALTER TABLE `abuse_power`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accidental_claim`
--
ALTER TABLE `accidental_claim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advocate`
--
ALTER TABLE `advocate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advocate_pulled_notice`
--
ALTER TABLE `advocate_pulled_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agreement_draft`
--
ALTER TABLE `agreement_draft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arbitration_rental`
--
ALTER TABLE `arbitration_rental`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chqbouncenotice`
--
ALTER TABLE `chqbouncenotice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consumernotice`
--
ALTER TABLE `consumernotice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consumer_defendant`
--
ALTER TABLE `consumer_defendant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delay_in_construction`
--
ALTER TABLE `delay_in_construction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divorce_application`
--
ALTER TABLE `divorce_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `encroachment`
--
ALTER TABLE `encroachment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `esi_claim`
--
ALTER TABLE `esi_claim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gratuity_claim`
--
ALTER TABLE `gratuity_claim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harrashment`
--
ALTER TABLE `harrashment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_insurance`
--
ALTER TABLE `health_insurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labour_notice`
--
ALTER TABLE `labour_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessor_dispute`
--
ALTER TABLE `lessor_dispute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `life_insurance_claim`
--
ALTER TABLE `life_insurance_claim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misconduct_notice`
--
ALTER TABLE `misconduct_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motor_vehicle_claim`
--
ALTER TABLE `motor_vehicle_claim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `non_payment_salary`
--
ALTER TABLE `non_payment_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_attachments`
--
ALTER TABLE `notice_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pf_claim`
--
ALTER TABLE `pf_claim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_service`
--
ALTER TABLE `product_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reply_notice`
--
ALTER TABLE `reply_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retrenchment_notice`
--
ALTER TABLE `retrenchment_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_dues`
--
ALTER TABLE `salary_dues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarfaesi_notice`
--
ALTER TABLE `sarfaesi_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suspension_notice`
--
ALTER TABLE `suspension_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `termination_notice`
--
ALTER TABLE `termination_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `termination_rental`
--
ALTER TABLE `termination_rental`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title_deed`
--
ALTER TABLE `title_deed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trespassing`
--
ALTER TABLE `trespassing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_notice_filled`
--
ALTER TABLE `user_notice_filled`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voilation_aggrement`
--
ALTER TABLE `voilation_aggrement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wrongful_termination`
--
ALTER TABLE `wrongful_termination`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abuse_power`
--
ALTER TABLE `abuse_power`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `accidental_claim`
--
ALTER TABLE `accidental_claim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `administration`
--
ALTER TABLE `administration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `advocate`
--
ALTER TABLE `advocate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `advocate_pulled_notice`
--
ALTER TABLE `advocate_pulled_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `agreement_draft`
--
ALTER TABLE `agreement_draft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `arbitration_rental`
--
ALTER TABLE `arbitration_rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chqbouncenotice`
--
ALTER TABLE `chqbouncenotice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consumernotice`
--
ALTER TABLE `consumernotice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consumer_defendant`
--
ALTER TABLE `consumer_defendant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delay_in_construction`
--
ALTER TABLE `delay_in_construction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `divorce_application`
--
ALTER TABLE `divorce_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `encroachment`
--
ALTER TABLE `encroachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `esi_claim`
--
ALTER TABLE `esi_claim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gratuity_claim`
--
ALTER TABLE `gratuity_claim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `harrashment`
--
ALTER TABLE `harrashment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `health_insurance`
--
ALTER TABLE `health_insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `labour_notice`
--
ALTER TABLE `labour_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessor_dispute`
--
ALTER TABLE `lessor_dispute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `life_insurance_claim`
--
ALTER TABLE `life_insurance_claim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `misconduct_notice`
--
ALTER TABLE `misconduct_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `motor_vehicle_claim`
--
ALTER TABLE `motor_vehicle_claim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `non_payment_salary`
--
ALTER TABLE `non_payment_salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice_attachments`
--
ALTER TABLE `notice_attachments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pf_claim`
--
ALTER TABLE `pf_claim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_service`
--
ALTER TABLE `product_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `reply_notice`
--
ALTER TABLE `reply_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `retrenchment_notice`
--
ALTER TABLE `retrenchment_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salary_dues`
--
ALTER TABLE `salary_dues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sarfaesi_notice`
--
ALTER TABLE `sarfaesi_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `suspension_notice`
--
ALTER TABLE `suspension_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `termination_notice`
--
ALTER TABLE `termination_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `termination_rental`
--
ALTER TABLE `termination_rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `title_deed`
--
ALTER TABLE `title_deed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trespassing`
--
ALTER TABLE `trespassing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_notice_filled`
--
ALTER TABLE `user_notice_filled`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `voilation_aggrement`
--
ALTER TABLE `voilation_aggrement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wrongful_termination`
--
ALTER TABLE `wrongful_termination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
