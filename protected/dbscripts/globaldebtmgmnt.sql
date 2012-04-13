-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2012 at 03:50 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `globaldebtmgmnt`
--

-- --------------------------------------------------------

--
-- Table structure for table `sessiondb`
--

CREATE TABLE IF NOT EXISTS `sessiondb` (
  `id` char(32) NOT NULL,
  `expire` int(11) DEFAULT NULL,
  `data` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessiondb`
--

INSERT INTO `sessiondb` (`id`, `expire`, `data`) VALUES
('tgaop17huvibsbf8sujj64udt0', 1334325333, '899ca626168ff9e09829cdb758d6f433__returnUrl|s:33:"/globaldebtmgmnt/index.php?r=user";');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_payable`
--

CREATE TABLE IF NOT EXISTS `tbl_account_payable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_user_id` int(11) DEFAULT NULL,
  `invoice_number` varchar(255) DEFAULT NULL,
  `invoice_date` datetime DEFAULT NULL,
  `invoice_amount` float DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Fk_file_id` (`Fk_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_receivable`
--

CREATE TABLE IF NOT EXISTS `tbl_account_receivable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_user_id` int(11) DEFAULT NULL,
  `invoice_number` varchar(255) DEFAULT NULL,
  `invoice_date` datetime DEFAULT NULL,
  `invoice_amount` float DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Fk_file_id` (`Fk_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_amortization`
--

CREATE TABLE IF NOT EXISTS `tbl_amortization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_debtor_id` int(11) DEFAULT NULL,
  `payment_start_date` datetime DEFAULT NULL,
  `payment_end_date` datetime DEFAULT NULL,
  `total_monthly_cost` float DEFAULT NULL,
  `adminstration_fee` float DEFAULT NULL,
  `maintenance_fee` float DEFAULT NULL,
  `settlement_savings_fund` float DEFAULT NULL,
  `total_monthly_cost_total` float DEFAULT NULL,
  `total_adminstration_fee` float DEFAULT NULL,
  `total_maintenance_fee` float DEFAULT NULL,
  `total_settlement_savings_fund` float DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `payment_period` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Fk_debtor_id` (`Fk_debtor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_amortization`
--

INSERT INTO `tbl_amortization` (`id`, `Fk_debtor_id`, `payment_start_date`, `payment_end_date`, `total_monthly_cost`, `adminstration_fee`, `maintenance_fee`, `settlement_savings_fund`, `total_monthly_cost_total`, `total_adminstration_fee`, `total_maintenance_fee`, `total_settlement_savings_fund`, `created_at`, `updated_at`, `payment_period`) VALUES
(1, 1, '2012-03-27 00:00:00', '2012-06-29 00:00:00', 271164, 4291.91, 557.949, 396.825, NULL, NULL, NULL, NULL, '2012-03-27 14:39:05', '2012-04-04 19:06:26', 1),
(2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 554.268, 139.33, 18.1129, 396.825, 13302.4, 3343.91, 434.709, 9523.8, '2012-03-27 18:03:20', '0000-00-00 00:00:00', 1),
(4, 1, '2012-04-04 00:00:00', NULL, 271164, 4291.91, 557.949, 509.325, NULL, NULL, NULL, NULL, '2012-04-04 22:42:55', '0000-00-00 00:00:00', 5),
(5, 1, '2012-04-04 00:00:00', '2012-09-04 00:00:00', 271164, 4291.91, 557.949, 509.325, NULL, NULL, NULL, NULL, '2012-04-04 22:52:25', '0000-00-00 00:00:00', 5),
(6, 1, '2012-04-20 00:00:00', '2013-02-20 00:00:00', 17073.7, NULL, NULL, NULL, NULL, 4200, 1000, 4000, '2012-04-05 14:14:47', '0000-00-00 00:00:00', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE IF NOT EXISTS `tbl_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `file_number` varchar(255) DEFAULT NULL,
  `savings` float DEFAULT NULL,
  `assigned_to` varchar(255) DEFAULT NULL,
  `negotiator` varchar(255) DEFAULT NULL,
  `client_services` varchar(255) DEFAULT NULL,
  `account_managers` varchar(255) DEFAULT NULL,
  `total_debt` float DEFAULT NULL,
  `original_debt` float DEFAULT NULL,
  `enrollment_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `file_number` (`file_number`),
  KEY `Fk_client_userid` (`Fk_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_creditor`
--

CREATE TABLE IF NOT EXISTS `tbl_creditor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_user_id` int(11) NOT NULL,
  `Fk_debtor_id` int(11) DEFAULT NULL,
  `badge_number` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `telephone1` varchar(255) DEFAULT NULL,
  `telephone1_ext` varchar(6) DEFAULT NULL,
  `telephone2` varchar(255) DEFAULT NULL,
  `telephone2_ext` varchar(6) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `faxnumber` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `Fk_debtor_id` (`Fk_debtor_id`),
  KEY `Fk_creditor_userid` (`Fk_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `tbl_creditor`
--

INSERT INTO `tbl_creditor` (`id`, `Fk_user_id`, `Fk_debtor_id`, `badge_number`, `name`, `address`, `postal_code`, `telephone1`, `telephone1_ext`, `telephone2`, `telephone2_ext`, `email`, `faxnumber`, `comments`, `created_at`, `updated_at`) VALUES
(1, 4, NULL, NULL, 'Creditor1', 'Creditor1 Address', '0001', '4166823788', NULL, '4166823788', NULL, 'w2davids@yahoo.com', '', NULL, '2012-03-31 13:29:00', '0000-00-00 00:00:00'),
(2, 4, NULL, NULL, 'Creditor1', 'Creditor1 Address', '0001', '4166823788', NULL, '4166823788', NULL, 'w2davids@yahoo.com', '', NULL, '2012-03-31 13:33:35', '0000-00-00 00:00:00'),
(3, 4, NULL, NULL, 'wagied davids', '116 spadina', 'M5V3S2', '', NULL, '', NULL, 'w2davids@yahoo.com', '', NULL, '2012-03-31 13:36:22', '0000-00-00 00:00:00'),
(4, 4, NULL, NULL, 'wagied davids', '116 spadina', 'M5V3S2', '', NULL, '', NULL, 'w2davids@yahoo.com', '', NULL, '2012-03-31 13:37:34', '0000-00-00 00:00:00'),
(5, 4, NULL, NULL, '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-03-31 13:37:45', '0000-00-00 00:00:00'),
(6, 4, NULL, NULL, 'wagied davids', '116 spadina', 'M5V3S2', '', NULL, '', NULL, 'w2davids@yahoo.com', '', NULL, '2012-03-31 19:49:56', '0000-00-00 00:00:00'),
(7, 4, NULL, NULL, 'wagied davids', '116 spadina', 'M5V3S2', '', NULL, '', NULL, 'w2davids@yahoo.com', '', NULL, '2012-03-31 19:55:20', '0000-00-00 00:00:00'),
(8, 4, NULL, NULL, 'wagied davids', '116 spadina', 'M5V3S2', '', NULL, '', NULL, 'w2davids@yahoo.com', '', NULL, '2012-03-31 19:56:24', '0000-00-00 00:00:00'),
(9, 4, NULL, NULL, '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-03-31 20:07:04', '0000-00-00 00:00:00'),
(10, 4, NULL, NULL, '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-03-31 20:08:57', '0000-00-00 00:00:00'),
(11, 4, NULL, NULL, 'efzdafsfdsa', '', '', '', NULL, '', NULL, '', '', NULL, '2012-03-31 20:09:23', '0000-00-00 00:00:00'),
(12, 4, NULL, NULL, 'afdafd', '', '', '', NULL, '', NULL, '', '', NULL, '2012-03-31 20:11:55', '0000-00-00 00:00:00'),
(13, 4, NULL, NULL, 'adfasfafdf', '', '', '', NULL, '', NULL, '', '', NULL, '2012-03-31 20:12:37', '0000-00-00 00:00:00'),
(14, 4, NULL, NULL, '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-03-31 20:30:14', '0000-00-00 00:00:00'),
(15, 4, NULL, NULL, 'aeasfdavdgf', '', '', '', NULL, '', NULL, '', '', NULL, '2012-03-31 23:44:57', '0000-00-00 00:00:00'),
(16, 4, NULL, NULL, 'wagied davids', '116 spadina', 'M5V3S2', '', NULL, '', NULL, 'w2davids@yahoo.com', '', NULL, '2012-04-02 17:40:14', '0000-00-00 00:00:00'),
(17, 4, NULL, NULL, 'wagied davids', '116 spadina', 'M5V3S2', '', NULL, '', NULL, 'w2davids@yahoo.com', '', NULL, '2012-04-02 17:41:25', '0000-00-00 00:00:00'),
(18, 4, NULL, NULL, 'afdafd', '', '', '', NULL, '', NULL, 'af', '', NULL, '2012-04-02 17:48:51', '0000-00-00 00:00:00'),
(19, 4, NULL, NULL, 'Wagied Davids', '81 Navy Wharf Court', 'M5V3S2', '14168378196', NULL, '14168378196', NULL, 'w2davids@gmail.com', '', NULL, '2012-04-02 18:04:14', '0000-00-00 00:00:00'),
(20, 4, 1, NULL, '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 18:07:33', '0000-00-00 00:00:00'),
(21, 4, 1, 'adsads', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 18:08:36', '0000-00-00 00:00:00'),
(22, 4, NULL, 'dsac', 'afdav ', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 19:20:41', '0000-00-00 00:00:00'),
(23, 4, NULL, 'dsac', 'afdav ', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 19:21:11', '0000-00-00 00:00:00'),
(24, 4, NULL, 'adcav', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 19:23:36', '0000-00-00 00:00:00'),
(25, 4, NULL, 'adcav', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 19:23:48', '0000-00-00 00:00:00'),
(26, 4, NULL, 'adcavadasffdsa', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 19:24:17', '0000-00-00 00:00:00'),
(27, 4, NULL, 'adcavadasffdsa', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 19:24:32', '0000-00-00 00:00:00'),
(28, 4, NULL, '', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 19:26:44', '0000-00-00 00:00:00'),
(29, 4, NULL, '', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 19:33:31', '0000-00-00 00:00:00'),
(30, 4, NULL, '', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 19:36:17', '0000-00-00 00:00:00'),
(31, 4, NULL, '', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 19:38:42', '0000-00-00 00:00:00'),
(32, 4, NULL, '', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 19:39:06', '0000-00-00 00:00:00'),
(33, 4, NULL, '', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 19:41:34', '0000-00-00 00:00:00'),
(34, 4, NULL, '', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 19:43:45', '0000-00-00 00:00:00'),
(35, 4, NULL, '', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 19:44:41', '0000-00-00 00:00:00'),
(36, 4, NULL, '', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 19:46:46', '0000-00-00 00:00:00'),
(37, 4, NULL, '', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 19:59:52', '0000-00-00 00:00:00'),
(38, 4, NULL, '', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 20:20:29', '0000-00-00 00:00:00'),
(39, 4, NULL, '', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 20:47:06', '0000-00-00 00:00:00'),
(40, 4, NULL, '', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 20:47:18', '0000-00-00 00:00:00'),
(41, 4, NULL, '', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 20:47:24', '0000-00-00 00:00:00'),
(42, 4, NULL, '', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 20:49:56', '0000-00-00 00:00:00'),
(43, 4, NULL, '', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 20:53:23', '0000-00-00 00:00:00'),
(44, 4, NULL, '', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 23:18:40', '0000-00-00 00:00:00'),
(45, 4, NULL, '', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 23:20:57', '0000-00-00 00:00:00'),
(46, 4, 1, '', '', '', '', '', NULL, '', NULL, '', '', NULL, '2012-04-02 23:37:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_debtor`
--

CREATE TABLE IF NOT EXISTS `tbl_debtor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_user_id` int(11) DEFAULT NULL,
  `file_number` varchar(255) DEFAULT NULL,
  `credit_card_number` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `drivers_licence` varchar(255) DEFAULT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `social_insurance_number` varchar(255) DEFAULT NULL,
  `pension` varchar(255) DEFAULT NULL,
  `date_filed_chapter7` datetime DEFAULT NULL,
  `date_filed_chapter13` datetime DEFAULT NULL,
  `home_telephone` varchar(255) DEFAULT NULL,
  `mobile_telephone` varchar(255) DEFAULT NULL,
  `other_telephone` varchar(255) DEFAULT NULL,
  `best_time_to_call` varchar(255) DEFAULT NULL,
  `faxnumber` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `employment_status` int(11) DEFAULT NULL,
  `employer` varchar(255) DEFAULT NULL,
  `employment_occupation` varchar(255) DEFAULT NULL,
  `employment_work_years` int(11) DEFAULT NULL,
  `employment_telephone` varchar(255) DEFAULT NULL,
  `employment_insurance` int(11) DEFAULT NULL,
  `employment_disability` int(11) DEFAULT NULL,
  `employee_pension` int(11) DEFAULT NULL,
  `correspondence_language` int(11) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `spouse_firstname` varchar(255) DEFAULT NULL,
  `spouse_lastname` varchar(255) DEFAULT NULL,
  `spouse_address` varchar(255) DEFAULT NULL,
  `spouse_marital_status` int(11) DEFAULT NULL,
  `spouse_monthly_income` float DEFAULT NULL,
  `spouse_gross_monthly_income` float DEFAULT NULL,
  `spouse_employment_status` int(11) DEFAULT NULL,
  `spouse_employer` varchar(255) DEFAULT NULL,
  `spouse_employment_occupation` varchar(255) DEFAULT NULL,
  `spouse_employment_work_years` int(11) DEFAULT NULL,
  `spouse_number_of_children` int(11) DEFAULT NULL,
  `spouse_drivers_licence` varchar(255) DEFAULT NULL,
  `spouse_active_duty` int(11) DEFAULT NULL,
  `spouse_comments` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Fk_user_id` (`Fk_user_id`),
  KEY `file_number` (`file_number`),
  KEY `firstname` (`firstname`),
  KEY `lastname` (`lastname`),
  KEY `address` (`address`),
  KEY `social_insurance_number` (`social_insurance_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_debtor`
--

INSERT INTO `tbl_debtor` (`id`, `Fk_user_id`, `file_number`, `credit_card_number`, `firstname`, `lastname`, `address`, `postal_code`, `drivers_licence`, `date_of_birth`, `social_insurance_number`, `pension`, `date_filed_chapter7`, `date_filed_chapter13`, `home_telephone`, `mobile_telephone`, `other_telephone`, `best_time_to_call`, `faxnumber`, `email`, `employment_status`, `employer`, `employment_occupation`, `employment_work_years`, `employment_telephone`, `employment_insurance`, `employment_disability`, `employee_pension`, `correspondence_language`, `comments`, `spouse_firstname`, `spouse_lastname`, `spouse_address`, `spouse_marital_status`, `spouse_monthly_income`, `spouse_gross_monthly_income`, `spouse_employment_status`, `spouse_employer`, `spouse_employment_occupation`, `spouse_employment_work_years`, `spouse_number_of_children`, `spouse_drivers_licence`, `spouse_active_duty`, `spouse_comments`, `created_at`, `updated_at`) VALUES
(1, NULL, '1234', '1234', 'Wagied', 'Davids', '81 Navy Wharf Court', 'M5V3S2', '1234', '2012-03-27 00:00:00', '1234', '', '2012-03-27 00:00:00', '2012-03-30 00:00:00', '14168378196', '14168378196', '14168378196', '', '', NULL, NULL, '', '', NULL, '14168378196', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, '', NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_debtor_budget_info`
--

CREATE TABLE IF NOT EXISTS `tbl_debtor_budget_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gross_monthly_income` float DEFAULT NULL,
  `monthly_income` float DEFAULT NULL,
  `monthly_auto_expenses` float DEFAULT NULL,
  `car_payment1` float DEFAULT NULL,
  `car_payment2` float DEFAULT NULL,
  `recreational_vehicle` float DEFAULT NULL,
  `monthly_auto_payments` float DEFAULT NULL,
  `monthly_utilites` float DEFAULT NULL,
  `monthly_grocery_expenses` float DEFAULT NULL,
  `monthly_insurance_payments` float DEFAULT NULL,
  `rrsp` float DEFAULT NULL,
  `gas_and_electricuty` float DEFAULT NULL,
  `telephone` float DEFAULT NULL,
  `water_trash_sewer` float DEFAULT NULL,
  `cable_and_internet_services` float DEFAULT NULL,
  `food_stamp_or_other` float DEFAULT NULL,
  `spouse_monthly_takehome_pay` float DEFAULT NULL,
  `reason_for_hardship` varchar(255) DEFAULT NULL,
  `estimated_home_value` float DEFAULT NULL,
  `remaining_mortgage_balance` float DEFAULT NULL,
  `total_number_dependants` int(11) DEFAULT NULL,
  `household_expenses` float DEFAULT NULL,
  `total_debt_to_income_perc` float DEFAULT NULL,
  `total_expenses_to_income_variance` float DEFAULT NULL,
  `mortgage` float DEFAULT NULL,
  `rent` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Fk_debtor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Fk_budgetinfo_debtorid` (`Fk_debtor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_debtor_budget_info`
--

INSERT INTO `tbl_debtor_budget_info` (`id`, `gross_monthly_income`, `monthly_income`, `monthly_auto_expenses`, `car_payment1`, `car_payment2`, `recreational_vehicle`, `monthly_auto_payments`, `monthly_utilites`, `monthly_grocery_expenses`, `monthly_insurance_payments`, `rrsp`, `gas_and_electricuty`, `telephone`, `water_trash_sewer`, `cable_and_internet_services`, `food_stamp_or_other`, `spouse_monthly_takehome_pay`, `reason_for_hardship`, `estimated_home_value`, `remaining_mortgage_balance`, `total_number_dependants`, `household_expenses`, `total_debt_to_income_perc`, `total_expenses_to_income_variance`, `mortgage`, `rent`, `created_at`, `updated_at`, `Fk_debtor_id`) VALUES
(1, 45000, 4000, 90, NULL, NULL, NULL, 90, 90, 300, NULL, NULL, NULL, NULL, NULL, NULL, 90, 90, 'poor', NULL, NULL, 2, 90, NULL, NULL, NULL, NULL, '2012-03-27 21:39:47', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_debtor_financial_info`
--

CREATE TABLE IF NOT EXISTS `tbl_debtor_financial_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_debtor_id` int(11) DEFAULT NULL,
  `name_financial_institution` varchar(255) DEFAULT NULL,
  `branch_address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `institution_numer` varchar(255) DEFAULT NULL,
  `branch_number` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `Fk_financialinfo_debtorid` (`Fk_debtor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_debtor_financial_info`
--

INSERT INTO `tbl_debtor_financial_info` (`id`, `Fk_debtor_id`, `name_financial_institution`, `branch_address`, `city`, `province`, `postal_code`, `phone_number`, `institution_numer`, `branch_number`, `account_number`, `created_at`, `updated_at`) VALUES
(1, 1, 'TD', '123', 'Toronto', 'ON', 'M5V 2K6', '4166823788', '1234', '123', '12324324', '2012-03-27 21:38:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_debtor_program_info`
--

CREATE TABLE IF NOT EXISTS `tbl_debtor_program_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_debtor_id` int(11) DEFAULT NULL,
  `program_type` int(11) DEFAULT NULL,
  `monthly_payment` float DEFAULT NULL,
  `type_of_debt` varchar(255) DEFAULT NULL,
  `total_debt` float DEFAULT NULL,
  `original_debt` float DEFAULT NULL,
  `monthly_income` float DEFAULT NULL,
  `saf_monthly_payment` float DEFAULT NULL,
  `nsf_amount` float DEFAULT NULL,
  `monthly_payment_due_date` datetime DEFAULT NULL,
  `enrollment_date` datetime DEFAULT NULL,
  `first_monthly_payment_date` datetime DEFAULT NULL,
  `next_payment_due_date` datetime DEFAULT NULL,
  `contract_due_date` datetime DEFAULT NULL,
  `maintenance_fee_manual` float DEFAULT NULL,
  `maintenance_fee_automatic` float DEFAULT NULL,
  `admin_fee_automatic` float DEFAULT NULL,
  `admin_fee_percentage_automatic` float DEFAULT NULL,
  `admin_fee_manual` float DEFAULT NULL,
  `admin_fee_percentage_manual` float DEFAULT NULL,
  `service_fee_automatic` float DEFAULT NULL,
  `service_fee_percentage_automatic` float DEFAULT NULL,
  `service_fee_manual` float DEFAULT NULL,
  `service_fee_percentage_manual` float DEFAULT NULL,
  `savings_amount` float DEFAULT NULL,
  `savings_percentage` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `Fk_debtor_id` (`Fk_debtor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_debtor_program_info`
--

INSERT INTO `tbl_debtor_program_info` (`id`, `Fk_debtor_id`, `program_type`, `monthly_payment`, `type_of_debt`, `total_debt`, `original_debt`, `monthly_income`, `saf_monthly_payment`, `nsf_amount`, `monthly_payment_due_date`, `enrollment_date`, `first_monthly_payment_date`, `next_payment_due_date`, `contract_due_date`, `maintenance_fee_manual`, `maintenance_fee_automatic`, `admin_fee_automatic`, `admin_fee_percentage_automatic`, `admin_fee_manual`, `admin_fee_percentage_manual`, `service_fee_automatic`, `service_fee_percentage_automatic`, `service_fee_manual`, `service_fee_percentage_manual`, `savings_amount`, `savings_percentage`, `created_at`, `updated_at`) VALUES
(2, 1, 5, 800, '', 21164, NULL, 4000, 200, 20, '2012-04-27 00:00:00', '2012-03-27 00:00:00', '2012-04-27 00:00:00', '0000-00-00 00:00:00', '2012-03-28 00:00:00', NULL, 0.13, NULL, 0.158, NULL, NULL, 0.45, NULL, NULL, NULL, NULL, NULL, '2012-03-27 19:58:44', '2012-03-29 22:49:51'),
(3, 1, 1, NULL, '', 12000, 12000, 4000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 0.13, NULL, 0.158, NULL, NULL, 0.45, NULL, NULL, NULL, NULL, NULL, '2012-03-27 21:53:52', '0000-00-00 00:00:00'),
(4, 1, 4, NULL, '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 0.13, NULL, 0.16, NULL, NULL, 0.45, NULL, NULL, NULL, NULL, NULL, '2012-04-03 15:49:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_debtor_progress`
--

CREATE TABLE IF NOT EXISTS `tbl_debtor_progress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_debtor_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `current_settlement_offer` float DEFAULT NULL,
  `current_settlement_perc` float DEFAULT NULL,
  `offer_date` datetime DEFAULT NULL,
  `offer_valid_until_date` datetime DEFAULT NULL,
  `type_of_debt` varchar(255) DEFAULT NULL,
  `total_debt` float DEFAULT NULL,
  `days_behind` int(11) DEFAULT NULL,
  `settlement_date` datetime DEFAULT NULL,
  `settlement_amount` float DEFAULT NULL,
  `savings` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `Fk_debtor_id` (`Fk_debtor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_debtor_progress`
--

INSERT INTO `tbl_debtor_progress` (`id`, `Fk_debtor_id`, `status`, `current_settlement_offer`, `current_settlement_perc`, `offer_date`, `offer_valid_until_date`, `type_of_debt`, `total_debt`, `days_behind`, `settlement_date`, `settlement_amount`, `savings`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL, '2012-03-29 00:00:00', '2012-03-30 00:00:00', '', 21164, 0, '2012-03-29 00:00:00', 0, 21164, '2012-03-27 22:01:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_user_id` int(11) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `emergency_contact` varchar(255) DEFAULT NULL,
  `emergency_phone_number` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Fk_user_id` (`Fk_user_id`),
  KEY `firstname` (`firstname`),
  KEY `lastname` (`lastname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file_upload_item`
--

CREATE TABLE IF NOT EXISTS `tbl_file_upload_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_user_id` int(11) NOT NULL,
  `description` text,
  `filename` varchar(128) DEFAULT NULL,
  `create_user_id` int(11) DEFAULT NULL,
  `update_user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Fk_fileuploaditem_userid` (`Fk_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_file_upload_item`
--

INSERT INTO `tbl_file_upload_item` (`id`, `Fk_user_id`, `description`, `filename`, `create_user_id`, `update_user_id`, `created_at`, `updated_at`) VALUES
(1, 4, 'test', 'globaldebtmgmnt.sql', NULL, NULL, '2012-03-31 16:44:59', NULL),
(2, 4, '', 'yii-blog-1.1.0.pdf', NULL, NULL, '2012-04-09 17:07:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_negotiator`
--

CREATE TABLE IF NOT EXISTS `tbl_negotiator` (
  `Fk_user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_debtor_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `faxnumber` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `Fk_debtor_id` (`Fk_debtor_id`),
  KEY `Fk_negotiator_userid` (`Fk_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_negotiator`
--

INSERT INTO `tbl_negotiator` (`Fk_user_id`, `id`, `Fk_debtor_id`, `name`, `address`, `telephone`, `email`, `faxnumber`, `created_at`, `updated_at`) VALUES
(4, 3, 1, 'me', 'me', 'mem', 'emme', 'emem', '2012-04-11 16:22:48', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settlement_offer`
--

CREATE TABLE IF NOT EXISTS `tbl_settlement_offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_debtor_id` int(11) DEFAULT NULL,
  `file_number` varchar(255) DEFAULT NULL,
  `offer_date` datetime DEFAULT NULL,
  `offer_amount` float DEFAULT NULL,
  `offer_amount_percentage` float DEFAULT NULL,
  `client_saving_amonut` float DEFAULT NULL,
  `client_savings_percentage` float DEFAULT NULL,
  `client_reserves` float DEFAULT NULL,
  `service_fees` float DEFAULT NULL,
  `difference_amount` float DEFAULT NULL,
  `offer_status` int(11) DEFAULT NULL,
  `valid_date` datetime DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `Fk_debtor_id` (`Fk_debtor_id`),
  KEY `file_number` (`file_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_settlement_offer`
--

INSERT INTO `tbl_settlement_offer` (`id`, `Fk_debtor_id`, `file_number`, `offer_date`, `offer_amount`, `offer_amount_percentage`, `client_saving_amonut`, `client_savings_percentage`, `client_reserves`, `service_fees`, `difference_amount`, `offer_status`, `valid_date`, `comments`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2012-04-11 00:00:00', 5000, 15, 2000, 15, 2000, 4000, 1000, 1, '2012-09-11 00:00:00', '', '2012-04-11 16:08:04', '0000-00-00 00:00:00'),
(2, 1, '1234', '2012-04-11 00:00:00', 5000, 15, 2000, 15, 2000, 4000, 1000, 1, '2012-09-11 00:00:00', '', '2012-04-11 16:09:57', '0000-00-00 00:00:00'),
(3, 1, '1234', '2012-04-11 00:00:00', 5000, 15, 2000, 15, 2000, 4000, 1000, 1, '2012-09-11 00:00:00', '', '2012-04-11 16:11:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settlement_offer_summary`
--

CREATE TABLE IF NOT EXISTS `tbl_settlement_offer_summary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_debtor_id` int(11) DEFAULT NULL,
  `total_debt` float DEFAULT NULL,
  `months_to_repay` int(11) DEFAULT NULL,
  `interest_rate` float DEFAULT NULL,
  `extra_interest_paid` float DEFAULT NULL,
  `ave_settlement` float DEFAULT NULL,
  `total_cost` float DEFAULT NULL,
  `savings_our_program` float DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `Fk_debtor_id` (`Fk_debtor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(255) DEFAULT NULL,
  `remember_me` int(11) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_2` (`username`),
  KEY `username` (`username`),
  KEY `password` (`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `role`, `remember_me`, `created_at`, `updated_at`) VALUES
(2, 'wagied', 'a6c2b22acb8c4414cc97256c3286abb69b27340e', NULL, 0, '2012-03-27 16:17:47', '0000-00-00 00:00:00'),
(4, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 0, '2012-03-29 17:33:50', '2012-04-10 18:10:36'),
(5, 'user1', 'b3daa77b4c04a9551b8781d03191fe098f325e67', 2, 0, '2012-04-03 12:32:24', '0000-00-00 00:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_account_payable`
--
ALTER TABLE `tbl_account_payable`
  ADD CONSTRAINT `Fk_accountpayable_userid` FOREIGN KEY (`Fk_user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_account_receivable`
--
ALTER TABLE `tbl_account_receivable`
  ADD CONSTRAINT `Fk_accountreceivable_userid` FOREIGN KEY (`Fk_user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_amortization`
--
ALTER TABLE `tbl_amortization`
  ADD CONSTRAINT `Fk_amortization_debtorid` FOREIGN KEY (`Fk_debtor_id`) REFERENCES `tbl_debtor` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD CONSTRAINT `Fk_client_userid` FOREIGN KEY (`Fk_user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_creditor`
--
ALTER TABLE `tbl_creditor`
  ADD CONSTRAINT `Fk_creditor_debtorid` FOREIGN KEY (`Fk_debtor_id`) REFERENCES `tbl_debtor` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Fk_creditor_userid` FOREIGN KEY (`Fk_user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_debtor`
--
ALTER TABLE `tbl_debtor`
  ADD CONSTRAINT `Fk_debtor_userid` FOREIGN KEY (`Fk_user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_debtor_budget_info`
--
ALTER TABLE `tbl_debtor_budget_info`
  ADD CONSTRAINT `Fk_budgetinfo_debtorid` FOREIGN KEY (`Fk_debtor_id`) REFERENCES `tbl_debtor` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_debtor_financial_info`
--
ALTER TABLE `tbl_debtor_financial_info`
  ADD CONSTRAINT `Fk_financialinfo_debtorid` FOREIGN KEY (`Fk_debtor_id`) REFERENCES `tbl_debtor` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_debtor_program_info`
--
ALTER TABLE `tbl_debtor_program_info`
  ADD CONSTRAINT `Fk_programinfo_debtorid` FOREIGN KEY (`Fk_debtor_id`) REFERENCES `tbl_debtor` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_debtor_progress`
--
ALTER TABLE `tbl_debtor_progress`
  ADD CONSTRAINT `Fk_progress_debtorid` FOREIGN KEY (`Fk_debtor_id`) REFERENCES `tbl_debtor` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD CONSTRAINT `Fk_employee_userid` FOREIGN KEY (`Fk_user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_file_upload_item`
--
ALTER TABLE `tbl_file_upload_item`
  ADD CONSTRAINT `Fk_fileuploaditem_userid` FOREIGN KEY (`Fk_user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_negotiator`
--
ALTER TABLE `tbl_negotiator`
  ADD CONSTRAINT `Fk_negotiator_debtorid` FOREIGN KEY (`Fk_debtor_id`) REFERENCES `tbl_debtor` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Fk_negotiator_userid` FOREIGN KEY (`Fk_user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_settlement_offer`
--
ALTER TABLE `tbl_settlement_offer`
  ADD CONSTRAINT `Fk_settlementoffer_debtorid` FOREIGN KEY (`Fk_debtor_id`) REFERENCES `tbl_debtor` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_settlement_offer_summary`
--
ALTER TABLE `tbl_settlement_offer_summary`
  ADD CONSTRAINT `tbl_settlementoffersummary_debtorid` FOREIGN KEY (`Fk_debtor_id`) REFERENCES `tbl_debtor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
