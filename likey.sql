-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2023 at 12:51 PM
-- Server version: 5.7.42-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `likey`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` bigint(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `detail` text NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `username`, `detail`, `date`, `created_at`, `updated_at`) VALUES
(1, 'olaolumide', 'Logged out :197.210.85.149', '2023-06-12', '2023-06-12 16:32:26', '2023-06-12 16:32:26'),
(2, 'olaolumide', 'Logged in:197.210.85.149', '2023-06-12', '2023-06-12 16:32:29', '2023-06-12 16:32:29'),
(3, 'jhay', 'Logged out :77.111.246.9', '2023-06-12', '2023-06-12 16:42:35', '2023-06-12 16:42:35'),
(4, 'jhay', 'Logged in:77.111.246.10', '2023-06-12', '2023-06-12 16:42:50', '2023-06-12 16:42:50'),
(5, 'jhay', 'Transfered 100credits from your purchased to earned wallets :77.111.246.31', '2023-06-12', '2023-06-12 16:52:09', '2023-06-12 16:52:09'),
(6, 'jhay', 'Created a new promotion :77.111.246.31', '2023-06-12', '2023-06-12 16:56:49', '2023-06-12 16:56:49'),
(7, 'jhay', 'Created a new promotion :77.111.246.31', '2023-06-12', '2023-06-12 16:57:13', '2023-06-12 16:57:13'),
(8, 'olaolumide', 'Logged out :197.210.85.76', '2023-06-12', '2023-06-12 17:02:39', '2023-06-12 17:02:39'),
(9, 'olaolumide', 'Logged in:197.210.85.76', '2023-06-12', '2023-06-12 17:02:42', '2023-06-12 17:02:42'),
(10, 'dev_jcworld', 'Logged in:129.205.113.159', '2023-06-15', '2023-06-15 00:11:56', '2023-06-15 00:11:56'),
(11, 'dev_jcworld', 'Logged out :129.205.113.159', '2023-06-15', '2023-06-15 00:15:15', '2023-06-15 00:15:15'),
(12, 'olaolumide', 'Logged in:77.111.247.146', '2023-06-16', '2023-06-16 20:54:24', '2023-06-16 20:54:24'),
(13, 'jhay', 'Logged in:102.90.42.108', '2023-06-16', '2023-06-16 21:52:15', '2023-06-16 21:52:15'),
(14, 'dev_jcworld', 'Logged in:129.205.113.158', '2023-06-16', '2023-06-16 22:37:31', '2023-06-16 22:37:31'),
(15, 'jhay', 'Logged in:77.111.247.5', '2023-06-17', '2023-06-17 20:01:49', '2023-06-17 20:01:49'),
(16, 'olaolumide', 'Logged in:77.111.247.13', '2023-06-18', '2023-06-18 16:02:27', '2023-06-18 16:02:27'),
(17, 'jhay', 'Logged in:105.112.18.79', '2023-06-18', '2023-06-18 16:44:43', '2023-06-18 16:44:43'),
(18, 'jhay', 'Logged in:102.89.33.91', '2023-06-18', '2023-06-18 17:44:52', '2023-06-18 17:44:52'),
(19, 'olaolumide', 'Logged in:105.112.18.79', '2023-06-18', '2023-06-18 21:23:52', '2023-06-18 21:23:52'),
(20, 'jhay', 'Created a new promotion :105.113.18.69', '2023-06-18', '2023-06-18 22:11:19', '2023-06-18 22:11:19'),
(21, 'olaolumide', 'Logged in:197.210.8.121', '2023-06-19', '2023-06-19 20:19:20', '2023-06-19 20:19:20'),
(22, 'dev_jcworld', 'Logged in:102.88.36.104', '2023-06-19', '2023-06-19 20:38:47', '2023-06-19 20:38:47'),
(23, 'olaolumide', 'Logged in:197.210.8.121', '2023-06-19', '2023-06-19 20:46:32', '2023-06-19 20:46:32'),
(24, 'dev_jcworld', 'Logged in:102.88.36.148', '2023-06-20', '2023-06-19 23:24:39', '2023-06-19 23:24:39'),
(25, 'dev_jcworld', 'Logged in:102.89.45.57', '2023-06-20', '2023-06-20 15:38:36', '2023-06-20 15:38:36'),
(26, 'dev_jcworld', 'Logged out :102.89.45.57', '2023-06-20', '2023-06-20 15:38:45', '2023-06-20 15:38:45'),
(27, 'dev_jcworld', 'Logged in:102.89.45.57', '2023-06-20', '2023-06-20 15:38:49', '2023-06-20 15:38:49'),
(28, 'dev_jcworld', 'Logged out :102.89.45.57', '2023-06-20', '2023-06-20 15:38:56', '2023-06-20 15:38:56'),
(29, 'dev_jcworld', 'Logged in:102.89.45.57', '2023-06-20', '2023-06-20 15:39:21', '2023-06-20 15:39:21'),
(30, 'olaolumide', 'Logged in:107.161.86.165', '2023-06-20', '2023-06-20 15:49:40', '2023-06-20 15:49:40'),
(31, 'dev_jcworld', 'Transfered 10credits from your purchased to earned wallets :102.89.45.57', '2023-06-20', '2023-06-20 15:55:38', '2023-06-20 15:55:38'),
(32, 'olaolumide', 'Logged in:102.88.34.60', '2023-06-24', '2023-06-24 00:58:37', '2023-06-24 00:58:37'),
(33, 'dev_jcworld', 'Logged in:149.102.229.228', '2023-06-24', '2023-06-24 08:56:13', '2023-06-24 08:56:13'),
(34, 'olaolumide', 'Logged in:149.50.208.100', '2023-06-24', '2023-06-24 21:45:07', '2023-06-24 21:45:07'),
(35, 'olaolumide', 'Logged in:77.111.247.68', '2023-06-24', '2023-06-24 21:47:47', '2023-06-24 21:47:47'),
(36, 'dev_jcworld', 'Logged in:102.88.35.87', '2023-06-25', '2023-06-24 23:29:54', '2023-06-24 23:29:54'),
(37, 'olaolumide', 'Created a new task :77.111.247.68', '2023-06-25', '2023-06-24 23:55:07', '2023-06-24 23:55:07'),
(38, 'olaolumide', 'Logged out :77.111.247.68', '2023-06-25', '2023-06-24 23:55:55', '2023-06-24 23:55:55'),
(39, 'jhay', 'Logged in:77.111.247.68', '2023-06-25', '2023-06-24 23:56:01', '2023-06-24 23:56:01'),
(40, 'jhay', 'Logged in:149.102.229.243', '2023-06-25', '2023-06-25 00:40:39', '2023-06-25 00:40:39'),
(41, 'dev_jcworld', 'Logged in:102.88.34.21', '2023-06-25', '2023-06-25 01:26:11', '2023-06-25 01:26:11'),
(42, 'olaolumide', 'Logged in:102.88.62.52', '2023-06-25', '2023-06-25 01:58:57', '2023-06-25 01:58:57'),
(43, 'dev_jcworld', 'Logged in:102.88.63.103', '2023-06-25', '2023-06-25 02:13:38', '2023-06-25 02:13:38'),
(44, 'jhay', 'Logged in:149.102.229.245', '2023-06-25', '2023-06-25 09:05:05', '2023-06-25 09:05:05'),
(45, 'jhay', 'Created a new task :149.102.229.245', '2023-06-25', '2023-06-25 09:10:22', '2023-06-25 09:10:22'),
(46, 'jhay', 'Created a new promotion :149.102.229.245', '2023-06-25', '2023-06-25 09:11:46', '2023-06-25 09:11:46'),
(47, 'jhay', 'Created a new promotion :149.50.208.98', '2023-06-25', '2023-06-25 09:18:07', '2023-06-25 09:18:07'),
(48, 'jhay', 'Logged out :149.50.208.98', '2023-06-25', '2023-06-25 09:28:21', '2023-06-25 09:28:21'),
(49, 'olaolumide', 'Logged in:149.50.208.98', '2023-06-25', '2023-06-25 09:29:22', '2023-06-25 09:29:22'),
(50, 'olaolumide', 'Logged out :149.50.208.98', '2023-06-25', '2023-06-25 09:33:08', '2023-06-25 09:33:08'),
(51, 'dev_jcworld', 'Logged in:102.89.23.148', '2023-06-25', '2023-06-25 16:20:48', '2023-06-25 16:20:48'),
(52, 'olaolumide', 'Logged in:197.210.85.15', '2023-06-25', '2023-06-25 17:02:07', '2023-06-25 17:02:07'),
(53, 'olaolumide', 'Transfered 2000credits from your purchased to earned wallets :197.210.78.190', '2023-06-25', '2023-06-25 17:05:21', '2023-06-25 17:05:21'),
(54, 'olaolumide', 'Logged out :197.210.85.15', '2023-06-25', '2023-06-25 17:11:16', '2023-06-25 17:11:16'),
(55, 'jhay', 'Logged in:197.210.85.15', '2023-06-25', '2023-06-25 17:11:21', '2023-06-25 17:11:21'),
(56, 'jhay', 'Logged in:77.111.246.14', '2023-06-25', '2023-06-25 21:45:11', '2023-06-25 21:45:11'),
(57, 'olaolumide', 'Logged in:171.25.193.79', '2023-06-25', '2023-06-25 21:48:54', '2023-06-25 21:48:54'),
(58, 'olaolumide', 'Logged out :171.25.193.79', '2023-06-25', '2023-06-25 21:52:33', '2023-06-25 21:52:33'),
(59, 'olaolumide', 'Logged in:94.228.169.70', '2023-06-25', '2023-06-25 22:08:06', '2023-06-25 22:08:06'),
(60, 'olaolumide', 'Logged out :94.228.169.70', '2023-06-25', '2023-06-25 22:08:26', '2023-06-25 22:08:26'),
(61, 'dev_jcworld', 'Logged in:94.228.169.70', '2023-06-25', '2023-06-25 22:08:44', '2023-06-25 22:08:44'),
(62, 'dev_jcworld', 'Logged in:102.89.23.140', '2023-06-25', '2023-06-25 22:09:37', '2023-06-25 22:09:37'),
(63, 'dev_jcworld', 'Created a new promotion :104.244.74.159', '2023-06-26', '2023-06-25 23:03:11', '2023-06-25 23:03:11'),
(64, 'dev_jcworld', 'Transfered 100credits from your purchased to earned wallets :109.70.100.8', '2023-06-26', '2023-06-25 23:03:45', '2023-06-25 23:03:45'),
(65, 'jhay', 'Logged in:105.112.189.157', '2023-06-26', '2023-06-26 06:52:24', '2023-06-26 06:52:24'),
(66, 'jhay', 'Logged in:169.150.197.170', '2023-06-26', '2023-06-26 07:59:28', '2023-06-26 07:59:28'),
(67, 'jhay', 'Logged in:105.113.19.70', '2023-06-26', '2023-06-26 10:38:34', '2023-06-26 10:38:34'),
(68, 'jhay', 'Logged out :105.113.19.7', '2023-06-26', '2023-06-26 10:41:47', '2023-06-26 10:41:47'),
(69, 'jhay', 'Logged in:105.113.19.175', '2023-06-26', '2023-06-26 10:41:56', '2023-06-26 10:41:56'),
(70, 'jhay', 'Logged in:105.113.19.61', '2023-06-26', '2023-06-26 10:52:34', '2023-06-26 10:52:34'),
(71, 'dev_jcworld', 'Logged in:102.88.36.170', '2023-06-26', '2023-06-26 18:05:34', '2023-06-26 18:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `addfunds`
--

CREATE TABLE `addfunds` (
  `id` bigint(25) NOT NULL,
  `transaction_id` varchar(25) NOT NULL,
  `wallet_to` varchar(125) NOT NULL,
  `currency` varchar(25) NOT NULL,
  `amount_usd` varchar(25) NOT NULL,
  `amount_crypto` varchar(25) NOT NULL,
  `credits` varchar(20) NOT NULL DEFAULT '0',
  `status` varchar(12) NOT NULL DEFAULT 'processing',
  `username` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addfunds`
--

INSERT INTO `addfunds` (`id`, `transaction_id`, `wallet_to`, `currency`, `amount_usd`, `amount_crypto`, `credits`, `status`, `username`, `created_at`, `updated_at`) VALUES
(1, 'THFW302023489985', 'TJ8mZ1UtN5YDJtPYQ64jeVyMrvxQP3Hu7g', 'eth', '5', '0.00346839', '1000', 'processing', 'olaolumide', '2023-06-19 20:39:13', '0000-00-00 00:00:00'),
(2, 'THFW789028995529', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '5', '6.00163545', '1000', 'processing', 'dev_jcworld', '2023-06-19 20:40:40', '2023-06-19 20:40:40'),
(3, 'THFW461407256077', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '5', '6.00163545', '1000', 'processing', 'dev_jcworld', '2023-06-19 20:40:46', '2023-06-19 20:40:46'),
(4, 'THFW010160667677', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '5', '6.00163545', '1000', 'processing', 'dev_jcworld', '2023-06-19 20:40:52', '2023-06-19 20:40:52'),
(5, 'THFW140865633885', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '5', '6.00163545', '1000', 'processing', 'dev_jcworld', '2023-06-19 20:40:58', '2023-06-19 20:40:58'),
(6, 'THFW078797134530', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '5', '6.00163545', '1000', 'processing', 'dev_jcworld', '2023-06-19 20:41:04', '2023-06-19 20:41:04'),
(7, 'THFW828806232564', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '5', '6.00163545', '1000', 'processing', 'dev_jcworld', '2023-06-19 20:41:10', '2023-06-19 20:41:10'),
(8, 'THFW540517873515', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '6', '7.00180296', '1200', 'processing', 'dev_jcworld', '2023-06-19 21:02:44', '2023-06-19 21:02:44'),
(9, 'THFW506821457095', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '6', '7.00180296', '1200', 'processing', 'dev_jcworld', '2023-06-19 21:02:50', '2023-06-19 21:02:50'),
(10, 'THFW361090163624', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '6', '7.00180296', '1200', 'processing', 'dev_jcworld', '2023-06-19 21:03:05', '2023-06-19 21:03:05'),
(11, 'THFW238296791102', '1FveyB4DLXUjx33RGr3qFUQyMGDeUH4FKG', 'btc', '5', '0.00022507', '1000', 'processing', 'olaolumide', '2023-06-19 21:13:58', '2023-06-19 21:13:58'),
(12, 'THFW541089205678', '1FveyB4DLXUjx33RGr3qFUQyMGDeUH4FKG', 'btc', '5', '0.00022507', '1000', 'processing', 'olaolumide', '2023-06-19 21:14:04', '2023-06-19 21:14:04'),
(13, 'THFW222164569779', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '5', '6.00136531', '1000', 'processing', 'olaolumide', '2023-06-19 21:24:32', '2023-06-19 21:24:32'),
(14, 'THFW189855505824', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '5', '6.00121525', '1000', 'processing', 'dev_jcworld', '2023-06-19 21:42:20', '2023-06-19 21:42:20'),
(15, 'THFW459189493057', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '5', '6.00121525', '1000', 'processing', 'dev_jcworld', '2023-06-19 21:42:30', '2023-06-19 21:42:30'),
(16, 'THFW130366467188', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '49', '50.00987695', '9800', 'processing', 'olaolumide', '2023-06-19 21:44:49', '2023-06-19 21:44:49'),
(17, 'THFW920370923452', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '20', '21.00467354', '4000', 'processing', 'dev_jcworld', '2023-06-19 23:19:35', '2023-06-19 23:19:35'),
(18, 'THFW482483623765', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '20', '21.00467354', '4000', 'processing', 'dev_jcworld', '2023-06-19 23:19:45', '2023-06-19 23:19:45'),
(19, 'THFW356171512190', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '20', '21.00467354', '4000', 'processing', 'dev_jcworld', '2023-06-19 23:20:42', '2023-06-19 23:20:42'),
(20, 'THFW970229897948', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '20', '21.00467354', '4000', 'processing', 'dev_jcworld', '2023-06-19 23:20:48', '2023-06-19 23:20:48'),
(21, 'THFW008962784590', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '6', '7.00166289', '1200', 'processing', 'dev_jcworld', '2023-06-19 23:22:14', '2023-06-19 23:22:14'),
(22, 'THFW069506654601', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '6', '7.00166289', '1200', 'processing', 'dev_jcworld', '2023-06-19 23:22:43', '2023-06-19 23:22:43'),
(23, 'THFW346053881340', 'TJ8mZ1UtN5YDJtPYQ64jeVyMrvxQP3Hu7g', 'usdt', '5', '6.00142534', '1000', 'processing', 'dev_jcworld', '2023-06-19 23:25:37', '2023-06-19 23:25:37'),
(24, 'THFW653047088242', 'TJ8mZ1UtN5YDJtPYQ64jeVyMrvxQP3Hu7g', 'usdt', '5', '6.00142534', '1000', 'processing', 'dev_jcworld', '2023-06-19 23:29:34', '2023-06-19 23:29:34'),
(25, 'THFW606513922369', 'TJ8mZ1UtN5YDJtPYQ64jeVyMrvxQP3Hu7g', 'usdt', '5', '6.00142534', '1000', 'processing', 'dev_jcworld', '2023-06-19 23:29:39', '2023-06-19 23:29:39'),
(26, 'THFW133078879011', 'TJ8mZ1UtN5YDJtPYQ64jeVyMrvxQP3Hu7g', 'usdt', '5', '6.00142534', '1000', 'processing', 'dev_jcworld', '2023-06-19 23:29:45', '2023-06-19 23:29:45'),
(27, 'THFW097210442256', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '5', '6.00148537', '1000', 'processing', 'dev_jcworld', '2023-06-20 15:41:34', '2023-06-20 15:41:34'),
(28, 'THFW898021078653', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '5', '6.00148537', '1000', 'processing', 'dev_jcworld', '2023-06-20 15:42:28', '2023-06-20 15:42:28'),
(29, 'THFW652638926935', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '5', '6.00148537', '1000', 'processing', 'dev_jcworld', '2023-06-20 15:42:34', '2023-06-20 15:42:34'),
(30, 'THFW592532152609', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '5', '6.00148537', '1000', 'processing', 'dev_jcworld', '2023-06-20 15:42:40', '2023-06-20 15:42:40'),
(31, 'THFW916118621231', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '5', '6.00148537', '1000', 'processing', 'dev_jcworld', '2023-06-20 15:42:46', '2023-06-20 15:42:46'),
(32, 'THFW225864119991', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '5', '6.00148537', '1000', 'processing', 'dev_jcworld', '2023-06-20 15:42:52', '2023-06-20 15:42:52'),
(33, 'THFW485474590397', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'usdt', '5', '6.00148537', '1000', 'processing', 'dev_jcworld', '2023-06-20 15:42:58', '2023-06-20 15:42:58'),
(34, 'THFW763220965796', 'bnb165q9dz39mqh789zuuuqwkv22plut6f4nzy9jc9', 'usdt', '50', '50.99426315', '10000', 'processing', 'olaolumide', '2023-06-25 17:05:58', '2023-06-25 17:05:58'),
(35, 'THFW772101933069', '0x024d11aff0a7b496be9f745f84a5bc632cd195c7', 'btc', '50', '0.00166629', '10000', 'processing', 'olaolumide', '2023-06-25 17:10:07', '2023-06-25 17:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `id` bigint(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(25) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `username`, `email`, `password`, `created_at`, `created_by`, `updated_at`) VALUES
(1, 'olaolumide', 'olajesujuwon@gmail.com', '$2y$10$Cp2IX55atrSf.1d.ZcmRzOsU8lHwfSAqyPNcKAaZDKdZQbNMQt5/u', '2023-05-28 10:20:18', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` text NOT NULL,
  `token_sent` tinyint(1) DEFAULT '0',
  `remember_token` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) NOT NULL,
  `V` varchar(25) NOT NULL,
  `D` varchar(25) NOT NULL,
  `M` varchar(25) NOT NULL,
  `T` varchar(25) NOT NULL,
  `platform` varchar(25) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `V`, `D`, `M`, `T`, `platform`, `created_at`) VALUES
(1, 'FB_LIKES', 'FACEBOOK LIKE', 'FACEBOOK', 'LIKE', 'facecbook', '2023-05-28 10:24:12'),
(2, 'FB_SHARE', 'FACEBOOK SHARE', 'FACEBOOK', 'SHARE', 'facecbook', '2023-05-28 10:32:44'),
(3, 'FB_ADD', 'FACEBOOK ADD', 'FACEBOOK', 'ADD', 'facecbook', '2023-05-28 10:33:06'),
(4, 'FB_COMMENT', 'FACEBOOK COMMENT', 'FACEBOOK', 'COMMENT', 'facecbook', '2023-05-28 10:33:20'),
(5, 'TW_SHARE', 'TWITTER SHARE', 'TWITTER', 'SHARE', 'twitter', '2023-05-28 12:53:21'),
(6, 'TW_COMMENT', 'TWITTER COMMENT', 'TWITTER', 'COMMENT', 'twitter', '2023-05-28 12:59:20'),
(7, 'TW_FOLLOW', 'TWITTER FOLLOW', 'TWITTER', 'FOLLOW', 'twitter', '2023-05-28 13:06:30'),
(8, 'IG_COMMENT', 'INSTAGRAM COMMENT', 'INSTAGRAM', 'COMMENT', 'instagram', '2023-05-28 13:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('olajesujuwon@gmail.com', '$2y$10$NWSUO2ncx079XrlEKCTSSe1qMFqlCJT4ISZLjrRGBZdjEJ9j0iRUi', '2023-05-13 17:20:13');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint(20) NOT NULL,
  `unique_id` varchar(25) NOT NULL,
  `title` varchar(225) NOT NULL,
  `type` varchar(25) NOT NULL,
  `description` varchar(225) NOT NULL,
  `platform` varchar(25) NOT NULL,
  `link` varchar(225) NOT NULL,
  `location` varchar(225) NOT NULL,
  `target` varchar(25) NOT NULL,
  `cpu` varchar(25) NOT NULL,
  `achieved` varchar(25) NOT NULL,
  `total_cost` varchar(25) NOT NULL,
  `left_cost` varchar(25) NOT NULL,
  `created_by` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `unique_id`, `title`, `type`, `description`, `platform`, `link`, `location`, `target`, `cpu`, `achieved`, `total_cost`, `left_cost`, `created_by`, `status`, `created_at`, `updated_at`) VALUES
(1, '41795433657055296705', 'TWITTER SHARE', 'SHARE', 'Share on twitter', 'TWITTER', 'www.twitter.com', 'worldwide', '10', '5', '0', '50', '50', 'jhay', '', '2023-06-09 21:51:00', '2023-06-09 21:51:00'),
(2, '88400480625255939715', 'INSTAGRAM COMMENT', 'COMMENT', 'Comment on some Instagram posts', 'INSTAGRAM', 'www.instagram.com', 'worldwide', '10', '3', '0', '30', '30', 'jhay', 'active', '2023-06-09 21:55:14', '2023-06-09 21:55:14'),
(3, '01898347798115076168', 'TWITTER SHARE', 'SHARE', 'Share my Twitter post', 'TWITTER', 'twitter.com', 'worldwide', '10', '3', '0', '30', '30', 'jhay', 'active', '2023-06-10 11:18:19', '2023-06-10 11:18:19'),
(4, '22956804819960237367', 'TWITTER SHARE', 'SHARE', 'Share my Twitter post', 'TWITTER', 'twitter.com', 'worldwide', '10', '10', '0', '100', '100', 'jhay', 'active', '2023-06-10 11:18:40', '2023-06-10 11:18:40'),
(5, '61515604275691170188', 'FACEBOOK LIKE', 'LIKE', 'Like my Facebook page', 'FACEBOOK', 'www.facebook.com', 'worldwide', '10', '10', '0', '100', '100', 'jhay', 'active', '2023-06-12 16:56:49', '2023-06-12 16:56:49'),
(6, '01354658253230391663', 'FACEBOOK SHARE', 'SHARE', 'Like my Facebook page', 'FACEBOOK', 'www.facebook.com', 'worldwide', '10', '10', '0', '100', '100', 'jhay', 'active', '2023-06-12 16:57:13', '2023-06-12 16:57:13'),
(7, '62021470805038939851', 'FACEBOOK SHARE', 'SHARE', 'share shit', 'FACEBOOK', 'https://web.facebook.com/jathglobal/', 'worldwide', '10', '3', '0', '30', '30', 'jhay', 'active', '2023-06-18 22:11:19', '2023-06-18 22:11:19'),
(8, '88134281861419499795', 'FACEBOOK LIKE', 'LIKE', 'App PlaystoreApp PlaystoreApp PlaystoreApp Playstore', 'FACEBOOK', 'https://play.google.com/store/apps/details?id=com.eivaagames.RealChess3DFree&hl=en&gl=US', 'worldwide', '10', '3', '0', '30', '30', 'jhay', 'active', '2023-06-25 09:11:46', '2023-06-25 09:11:46'),
(9, '90265202510287966434', 'FACEBOOK ADD', 'ADD', 'App Playstore', 'FACEBOOK', 'https://web.facebook.com/jathglobal/', 'worldwide', '10', '3', '0', '30', '30', 'jhay', 'active', '2023-06-25 09:18:07', '2023-06-25 09:18:07'),
(10, '76977631898593109197', 'FACEBOOK ADD', 'ADD', 'like', 'FACEBOOK', 'facebook.com', 'worldwide', '10', '3', '0', '30', '30', 'dev_jcworld', 'active', '2023-06-25 23:03:11', '2023-06-25 23:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(25) NOT NULL,
  `unique_id` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  `description` varchar(225) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `location` varchar(125) NOT NULL,
  `target` int(11) NOT NULL,
  `cpu` int(11) NOT NULL,
  `achieved` int(11) NOT NULL DEFAULT '0',
  `total_cost` int(11) NOT NULL,
  `left_cost` int(11) NOT NULL,
  `created_by` varchar(25) NOT NULL,
  `status` enum('active','completed','cancelled') NOT NULL DEFAULT 'active',
  `done` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `unique_id`, `type`, `title`, `description`, `link`, `location`, `target`, `cpu`, `achieved`, `total_cost`, `left_cost`, `created_by`, `status`, `done`, `created_at`, `updated_at`) VALUES
(1, 'uukxks1rl20g', 'task', 'Referral', 'Download, install, and verify your account using my referal link attached below.', 'https://www.google.com', 'worldwide', 10, 10, 0, 100, 100, 'olaolumide', 'active', '', '2023-05-29 14:46:02', NULL),
(2, '23069534819336109777', 'promotion', 'FACEBOOK LIKE', 'New promotion on facebook, like my page!', 'https://web.facebook.com/jathglobal/', 'worldwide', 15, 3, 0, 45, 45, 'olaolumide', 'active', '', '2023-05-29 14:47:17', NULL),
(3, 'gn4iaeyso3xy', 'task', 'Website view', 'I wanna generate traffic on my website', 'https://www.grandapihub.org.ng', 'worldwide', 10, 20, 0, 200, 200, 'olaolumide', 'active', '', '2023-05-29 15:45:32', NULL),
(4, 'goemwgrwcjqiytioiukp', 'task', 'Download and install them', 'Download and install the purple admin theme from google play store and apple store.\r\n\r\nAndroid users can make use of the link applied below:', 'https://play.google.com/store/apps/details?id=com.eivaagames.RealChess3DFree&hl=en&gl=US', 'worldwide', 200, 15, 0, 3000, 3000, 'jhay', 'active', '', '2023-06-01 13:44:50', NULL),
(5, '31566145974805683924', 'promotion', 'FACEBOOK SHARE', 'yuio', 'https://www.facebook.com', 'worldwide', 100, 7, 0, 700, 700, 'olaolumide', 'active', '', '2023-06-04 21:42:45', NULL),
(6, '23069534819336109779', 'promotion', 'FACEBOOK LIKE', 'A detailed information ', 'Facebook.com', 'worldwide', 15, 7, 0, 105, 105, 'olaolumide', 'active', '', '2023-06-04 21:49:18', NULL),
(7, '70080157729284262970', 'task', 'Website view', 'a brief instructions on what to do and how to do them', 'www.facebook.com', 'worldwide', 10, 10, 0, 100, 100, 'olaolumide', 'active', '', '2023-06-05 14:49:09', NULL),
(8, '74923607227849734743', 'task', 'Website view', 'A very brief information', 'www.facebook.com', 'worldwide', 5, 10, 0, 50, 50, 'olaolumide', 'active', '', '2023-06-05 15:03:38', NULL),
(9, '80444322118294165534', 'task', 'Website view', 'A very brief information', 'www.facebook.com', 'worldwide', 5, 10, 0, 50, 50, 'olaolumide', 'active', '', '2023-06-05 15:06:15', NULL),
(10, '21680255841647986721', 'task', 'Website view', 'A very brief information', 'www.facebook.com', 'worldwide', 5, 10, 0, 50, 50, 'olaolumide', 'active', '', '2023-06-05 15:06:18', NULL),
(11, '36721729235039478940', 'task', 'Website view', 'A very brief information', 'www.facebook.com', 'worldwide', 5, 10, 0, 50, 50, 'olaolumide', 'active', '', '2023-06-05 15:09:45', NULL),
(12, '26741161939199436048', 'task', 'Website view', 'A very brief information', 'www.facebook.com', 'worldwide', 5, 10, 0, 50, 50, 'olaolumide', 'active', '', '2023-06-05 15:11:03', NULL),
(13, '34149012835659522883', 'task', 'Website view', 'A very brief information', 'www.facebook.com', 'worldwide', 5, 10, 0, 50, 50, 'olaolumide', 'active', '', '2023-06-05 15:13:23', NULL),
(14, '54862449112486224052', 'task', 'Website view', 'A very brief information', 'www.facebook.com', 'worldwide', 5, 10, 0, 50, 50, 'olaolumide', 'active', '', '2023-06-05 15:14:44', NULL),
(15, '23157006573075919980', 'task', 'Website view', 'A very brief information', 'www.facebook.com', 'worldwide', 5, 10, 0, 50, 50, 'olaolumide', 'active', '', '2023-06-05 15:16:31', NULL),
(16, '44880310544916755390', 'task', 'Website view', 'A very brief information', 'www.facebook.com', 'worldwide', 5, 10, 0, 50, 50, 'olaolumide', 'active', '', '2023-06-05 15:21:18', NULL),
(17, '29428817146003701401', 'task', 'Website view', 'A very brief information', 'www.facebook.com', 'worldwide', 5, 10, 0, 50, 50, 'olaolumide', 'active', '', '2023-06-05 15:23:54', NULL),
(18, '04146042270146014590', 'task', 'Website view', 'A very brief information', 'www.facebook.com', 'worldwide', 5, 10, 0, 50, 50, 'olaolumide', 'active', '', '2023-06-05 15:25:25', NULL),
(19, '28969627607867705977', 'task', 'Website view', 'A very brief information', 'www.facebook.com', 'worldwide', 5, 10, 0, 50, 50, 'olaolumide', 'active', '', '2023-06-05 15:27:26', NULL),
(20, '01181209906670643553', 'task', 'Website view', 'A very brief information', 'www.facebook.com', 'worldwide', 5, 10, 0, 50, 50, 'olaolumide', 'active', '', '2023-06-05 15:29:57', NULL),
(21, '59623042306308471836', 'task', 'Website view', 'A very brief information', 'www.facebook.com', 'worldwide', 5, 10, 0, 50, 50, 'olaolumide', 'active', '', '2023-06-05 15:30:39', NULL),
(22, '80401952583881791214', 'task', 'Website view', 'A very brief information', 'www.facebook.com', 'worldwide', 5, 10, 0, 50, 50, 'olaolumide', 'active', '', '2023-06-05 15:32:19', NULL),
(23, '42370843342403900443', 'task', 'Website view', 'wukvyyiu irejulit hij p woteg ', 'www.facebook.com', 'worldwide', 100, 10, 0, 1000, 1000, 'olaolumide', 'active', '', '2023-06-05 16:06:12', NULL),
(24, '43596222596955596092', 'task', 'App download, installatio', 'App download, installation and verification ', 'https://www.facebook.com/20229467', 'worldwide', 5, 10, 0, 50, 50, 'olaolumide', 'active', '', '2023-06-05 16:53:15', NULL),
(25, '41352148093095421162', 'promotion', 'INSTAGRAM COMMENT', 'Zyxucirvtobypinmiop,[', 'www.instagram.com', 'worldwide', 10, 3, 0, 30, 30, 'olaolumide', 'active', '', '2023-06-06 17:25:17', NULL),
(26, '33169707645738909088', 'task', 'App download', '1. go to playstore\r\n\r\n2. download my app\r\n\r\n3. use the refer id jcworld\r\n\r\n4. verify your kyc\r\n\r\n5. submit the screenshot', NULL, 'worldwide', 5, 20, 0, 100, 100, 'olaolumide', 'active', '', '2023-06-24 23:55:07', NULL),
(27, '19073285974591859904', 'task', 'App Playstore', 'App Playstore\r\nApp Playstore\r\nApp Playstore', NULL, 'worldwide', 5, 20, 0, 100, 100, 'jhay', 'active', '', '2023-06-25 09:10:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_token` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `earned` int(200) NOT NULL DEFAULT '0',
  `deposited` int(200) NOT NULL DEFAULT '0',
  `processed` int(200) NOT NULL DEFAULT '0',
  `location` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/assets/images/faces/face1.jpg',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` text COLLATE utf8mb4_unicode_ci,
  `twitter_handle` text COLLATE utf8mb4_unicode_ci,
  `instagram_handle` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_token`, `email_verified_at`, `password`, `earned`, `deposited`, `processed`, `location`, `display_picture`, `remember_token`, `facebook_id`, `twitter_handle`, `instagram_handle`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'olaolumide', 'olajesujuwon@gmail.com', '850709664', NULL, '$2y$10$kU/3BRea8yBL75yDL4LTsOKNVTUtxamqrUleshX0MOT1rankuCNv.', 2170, 8000, 3180, 'NIGERIA', '/assets/images/faces/face1.jpg', NULL, 'oladejo.isaacjesujuwon1', 'olajesujuwon', 'developer_jay', NULL, NULL, NULL),
(2, 'jhay', 'engrolaolumide@gmail.com', '380202215', NULL, '$2y$10$WA0qrpQ9.6xMpEL7YTi4HeX2XxztgKB2JzwI5SoY6OLZ.GyaN08Pm', 1900, 74900, 3600, 'NIGERIA', '/assets/images/faces/face1.jpg', NULL, 'oladejo.isaacjesujuwon1', '', '', NULL, NULL, NULL),
(4, 'dev_jcworld', 'developerjcworld@gmail.com', '335264938', NULL, '$2y$10$kCetHCZLqI6c7VGcLxutCeZ.gZ03ws5BnScn4Bn.pkxEOqKHvlVbG', 100, 96900, 30, 'NIGERIA', '/assets/images/faces/face1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--

CREATE TABLE `withdrawal` (
  `id` bigint(20) NOT NULL,
  `transaction_id` varchar(25) NOT NULL,
  `wallet_to` varchar(125) NOT NULL,
  `currency` varchar(25) NOT NULL,
  `network` varchar(125) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `credits` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'processing',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdrawal`
--

INSERT INTO `withdrawal` (`id`, `transaction_id`, `wallet_to`, `currency`, `network`, `amount`, `credits`, `username`, `status`, `created_at`, `updated_at`) VALUES
(1, 'THWFB089331736866341', 'adby3qMAtyXBJmNO7nkhImuGZ', 'usdt', '', '2', '1000', 'jhay', 'processing', '2023-06-25 02:46:29', '2023-06-25 02:46:29'),
(2, 'THWFB812672663380902', 'adby3qMAtyXBJmNO7nkhImuGZ', 'usdt', 'bnb165q9dz39mqh789zuuuqwkv22plut6f4nzy9jc9', '2', '1000', 'jhay', 'processing', '2023-06-25 02:50:17', '2023-06-25 02:50:17'),
(3, 'THWFB503528715061976', 'adby3qMAtyXBJmNO7nkhImuGZ', 'usdt', 'Arbitrum One', '2', '1000', 'jhay', 'processing', '2023-06-25 02:52:16', '2023-06-25 02:52:16'),
(4, 'THWFB947176165363351', 'adby3qMAtyXBJmNO7nkhImuGZ', 'usdt', 'Arbitrum One', '2', '1000', 'jhay', 'processing', '2023-06-25 02:53:43', '2023-06-25 02:53:43'),
(5, 'THWFB259405869620597', 'adby3qMAtyXBJmNO7nkhImuGZ', 'usdt', 'BNB Beacon Chain (BEP2)', '2', '1000', 'jhay', 'processing', '2023-06-25 02:55:16', '2023-06-25 02:55:16'),
(6, 'THWFB107690084348371', 'adby3qMAtyXBJmNO7nkhImuGZ', 'usdt', 'Arbitrum One', '2', '1000', 'jhay', 'processing', '2023-06-25 02:56:16', '2023-06-25 02:56:16'),
(7, 'THWFB130907053248847', 'Vgjnffbjijhggg', 'usdt', 'BNB smart Chain (BEP20)', '10', '5000', 'olaolumide', 'processing', '2023-06-25 17:04:27', '2023-06-25 17:04:27'),
(8, 'THWFB950253487957706', 'xder45464554h45y45y35634634t44t3434346345643', 'usdt', 'BNB smart Chain (BEP20)', '4', '2000', 'dev_jcworld', 'processing', '2023-06-25 23:02:00', '2023-06-25 23:02:00'),
(9, 'THWFB748315669321652', 'adby3qMAtyXBJmNO7nkhImuGZadby3qMAtyXBJmNO7nkhImuGZ', 'usdt', 'Arbitrum One', '2', '1000', 'jhay', 'processing', '2023-06-26 09:48:29', '2023-06-26 09:48:29'),
(10, 'THWFB088803013445279', 'adby3qMAtyXBJmNO7nkhImuGZadby3qMAtyXBJmNO7nkhImuGZ', 'usdt', 'Tron (TRC20)', '2', '1000', 'jhay', 'processing', '2023-06-26 09:49:45', '2023-06-26 09:49:45'),
(11, 'THWFB714164182996405', 'adby3qMAtyXBJmNO7nkhImuGZadby3qMAtyXBJmNO7nkhImuGZ', 'usdt', 'Ethereum (ERC20)', '2', '1000', 'jhay', 'processing', '2023-06-26 09:57:10', '2023-06-26 09:57:10'),
(12, 'THWFB657372893659172', 'adby3qMAtyXBJmNO7nkhImuGZadby3qMAtyXBJmNO7nkhImuGZ', 'usdt', 'Arbitrum One', '2', '1000', 'jhay', 'processing', '2023-06-26 10:22:42', '2023-06-26 10:22:42'),
(13, 'THWFB122029788393824', 'adby3qMAtyXBJmNO7nkhImuGZadby3qMAtyXBJmNO7nkhImuGZ', 'usdt', 'BNB smart Chain (BEP20)', '4', '2000', 'jhay', 'processing', '2023-06-26 10:33:58', '2023-06-26 10:33:58'),
(14, 'THWFB155906436812439', 'adby3qMAtyXBJmNO7nkhImuGZadby3qMAtyXBJmNO7nkhImuGZ', 'usdt', 'BNB smart Chain (BEP20)', '3', '1500', 'jhay', 'processing', '2023-06-26 10:35:33', '2023-06-26 10:35:33'),
(15, 'THWFB622703870927795', 'adby3qMAtyXBJmNO7nkhImuGZadby3qMAtyXBJmNO7nkhImuGZ', 'usdt', 'Ethereum (ERC20)', '3', '1500', 'jhay', 'processing', '2023-06-26 10:37:05', '2023-06-26 10:37:05'),
(16, 'THWFB531544917066439', 'vvngb cbnjufyhvfhjhgg', 'usdt', 'Tron (TRC20)', '2', '1000', 'jhay', 'processing', '2023-06-26 10:39:12', '2023-06-26 10:39:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addfunds`
--
ALTER TABLE `addfunds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaction_id` (`transaction_id`);

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `V` (`V`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `withdrawal`
--
ALTER TABLE `withdrawal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaction_id` (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `addfunds`
--
ALTER TABLE `addfunds`
  MODIFY `id` bigint(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
