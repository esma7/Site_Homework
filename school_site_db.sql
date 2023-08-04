-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 12:13 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_site_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `a_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_username`, `a_password`, `a_email`, `a_status`, `a_img`) VALUES
(1, 'Revan', 'cool_revan', '123', 'revan@gmail.com', 'Active', 'avatar.jpg'),
(2, 'Sema', 'esma', '12345', 'esma@gmail.com', 'Active', 'avatar2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` int(5) NOT NULL,
  `n_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `n_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `n_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_file_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_creator_id` int(11) NOT NULL,
  `n_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_updater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `n_title`, `n_description`, `n_date`, `n_category`, `n_status`, `n_file`, `n_file_ext`, `n_image`, `n_creator_id`, `n_create_date`, `n_updater_id`, `n_update_date`) VALUES
(1, 'php dersi', 'Hello world', 'd', 'sport', 'active', '', '', '1.jpg', 1, 's', '', ''),
(11, 'nes nes', 'nenenene', '2023-07-22T00:04', 'UX/UI_design', 'Active', 'spring.jpg', '.jpg', '', 2, '2023-07-22 00:04:40', '', ''),
(13, 'sksks', 'asmams', '2023-07-22T00:21', 'Web_design', 'Deactive', 'image.jpg', '.jpg', '', 2, '2023-07-22 00:22:00', '', ''),
(22, 'salam', 'salam', '2023-07-31T02:14', 'Software_programming', 'Active', 'ads.jpg', '.jpg', '', 1, '2023-07-31 02:15:25', '', '2023-07-31 02:22:04'),
(25, 'dm dm ', 'd,m d,', '2023-07-31T08:13', 'Web_design', 'Active', 'spears.mp3', '.mp3', '', 2, '2023-07-31 04:13:30', '', ''),
(26, 'Id 2id 2 ', 'id 2 ', '2023-08-05T04:13', 'Web_design', 'Active', 'image5.jpg', '.jpg', '', 2, '2023-08-05 02:12:26', '2', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
