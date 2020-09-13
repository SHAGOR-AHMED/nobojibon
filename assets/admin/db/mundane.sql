-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2020 at 11:16 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mundane`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `about_id` int(3) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `description`) VALUES
(1, 'Starting our business in March 2011, we provide premium support to a lot of end-users and\r\n                    traders dealing with reliable importers from Bangladesh as well as committed exporters from\r\n                    all over the world. <br><br>\r\n                    We possess a lifetime general permission of intending business obtained from the Central Bank\r\n                    of Bangladesh as well as memberships of Bangladesh Indenting Agents’ Association and Dhaka\r\n                    Chamber of Commerce & Industry.<br><br>\r\n                    As a leading indenting company dealing with local and overseas clients, we provide customer\r\n                    support from Bangladesh and Malaysia simultaneously. Some of the international companies\r\n                    that we work with are Kaizer PVC Additives SDN BHD, Purika Industries SDN BHD, Imerys\r\n                    Minerals Malaysia SDN BHD and so on. We are, in fact, the exclusive agent of Kaizer and Purika\r\n                    in Bangladesh since 2012.\r\n                    ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(2) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `mobile` int(15) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_pass` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `full_name`, `mobile`, `admin_email`, `admin_pass`, `status`) VALUES
(1, 'Mundane', 9554010, 'mundane@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(3) NOT NULL,
  `head_office` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `head_office`) VALUES
(1, '                                <b>Address:</b> 62-63, Motijheel C/A, Amin Court Bhaban, Level-7, Suite-705, Dhaka-1000,\r\n                        Bangladesh.<br><br>\r\n\r\n                        <b>Phone:</b> +880 2 9554010, 9550046,<br>\r\n                        <b>Mobile:</b> +880 1713452863<br>\r\n                        <b>Email:</b> info@mundanechem.com\r\n                    <span xss=\"removed\"></span>                            ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer_contact`
--

CREATE TABLE `tbl_footer_contact` (
  `fcontact_id` int(3) NOT NULL,
  `location` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_footer_contact`
--

INSERT INTO `tbl_footer_contact` (`fcontact_id`, `location`, `email`, `phone`, `created_date`) VALUES
(1, '                                <span xss=removed>62-63, Motijheel C/A, Amin Court Bhaban, Level-7, Suite-705, Dhaka-1000,</span><br><span xss=removed></span><span xss=removed>Bangladesh.</span><span></span>                                                                                                                ', '                                <span xss=removed>info@mundanechem.com</span>                                                                                                               ', '                                <div><span xss=\"removed\">+880 2 9554010,</span><br><span xss=\"removed\"><span>+880 1713452863,</span></span></div><div><span xss=\"removed\">9550046, </span></div><span xss=\"removed\"></span>                                                                                                                ', '2020-09-13 06:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photos`
--

CREATE TABLE `tbl_photos` (
  `photo_id` int(3) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `type` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_photos`
--

INSERT INTO `tbl_photos` (`photo_id`, `photo`, `type`, `created_date`) VALUES
(1, './assets/admin/uploaded_image/s-1.png', 3, '2020-09-12 10:35:50'),
(2, './assets/admin/uploaded_image/c-4.png', 2, '2020-09-12 10:35:27'),
(3, './assets/admin/uploaded_image/c-3.png', 2, '2020-09-12 10:35:17'),
(4, './assets/admin/uploaded_image/c-1.png', 2, '2020-09-12 10:33:41'),
(9, './assets/admin/uploaded_image/slider-7.png', 1, '2020-09-12 10:32:18'),
(10, './assets/admin/uploaded_image/slider-6.png', 1, '2020-09-12 10:32:08'),
(11, './assets/admin/uploaded_image/slider-5.png', 1, '2020-09-12 10:31:59'),
(12, './assets/admin/uploaded_image/slider-4.png', 1, '2020-09-12 10:31:48'),
(13, './assets/admin/uploaded_image/slider-3.png', 1, '2020-09-12 10:31:38'),
(14, './assets/admin/uploaded_image/slider-21.png', 1, '2020-09-12 10:31:27'),
(15, './assets/admin/uploaded_image/slider-12.png', 1, '2020-09-12 10:31:15'),
(18, './assets/admin/uploaded_image/s-2.png', 3, '2020-09-12 10:36:03'),
(19, './assets/admin/uploaded_image/s-3.png', 3, '2020-09-12 10:36:10'),
(20, './assets/admin/uploaded_image/s-4.png', 3, '2020-09-12 10:36:18'),
(21, './assets/admin/uploaded_image/s-5.png', 3, '2020-09-12 10:36:26'),
(22, './assets/admin/uploaded_image/s-6.png', 3, '2020-09-12 10:36:34'),
(23, './assets/admin/uploaded_image/s-7.png', 3, '2020-09-12 10:36:43'),
(24, './assets/admin/uploaded_image/s-8.png', 3, '2020-09-12 10:36:50'),
(26, './assets/admin/uploaded_image/s-9.png', 3, '2020-09-12 10:43:46'),
(27, './assets/admin/uploaded_image/c-11.png', 4, '2020-09-12 10:44:18'),
(28, './assets/admin/uploaded_image/c-2.png', 4, '2020-09-12 10:44:27'),
(29, './assets/admin/uploaded_image/c-31.png', 4, '2020-09-12 10:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(3) NOT NULL,
  `category_id` smallint(6) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `pdf_file` text NOT NULL,
  `review_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `category_id`, `title`, `description`, `photo`, `pdf_file`, `review_status`, `created_date`) VALUES
(1, 1, 'PVC Stabilizer', 'Product Details Coming Soon......', './assets/admin/uploaded_image/p-1.png', './assets/admin/uploaded_image/', 0, '2020-09-13 06:58:01'),
(2, 6, 'PVC Resin', 'Product Details Coming Soon......\r\n', './assets/admin/uploaded_image/p-2.png', './assets/admin/uploaded_image/', 0, '2020-09-13 06:59:31'),
(3, 7, 'Calcium Carbonate', 'Product Details Coming Soon......', './assets/admin/uploaded_image/p-3.png', './assets/admin/uploaded_image/', 0, '2020-09-13 07:00:15'),
(4, 9, 'UPVC Fittings Compound  ', '                                Product Details Coming Soon......                            ', './assets/admin/uploaded_image/p-10.png', './assets/admin/uploaded_image/', 0, '2020-09-13 08:02:19'),
(5, 10, 'Stearic Acid', 'Product Details Coming Soon......', './assets/admin/uploaded_image/p-4.png', './assets/admin/uploaded_image/', 0, '2020-09-13 07:01:53'),
(6, 11, 'Paraffin Wax  ', 'Product Details Coming Soon......', './assets/admin/uploaded_image/p-5.png', './assets/admin/uploaded_image/', 0, '2020-09-13 07:02:22'),
(7, 12, 'PP  ', 'Product Details Coming Soon......', './assets/admin/uploaded_image/p-6.png', './assets/admin/uploaded_image/', 0, '2020-09-13 07:02:53'),
(8, 13, 'LDPE  ', 'Product Details Coming Soon......', './assets/admin/uploaded_image/p-7.png', './assets/admin/uploaded_image/', 0, '2020-09-13 07:03:31'),
(9, 14, 'GPPS  ', 'Product Details Coming Soon......', './assets/admin/uploaded_image/p-8.png', './assets/admin/uploaded_image/', 0, '2020-09-13 07:04:14'),
(10, 15, 'HIPS  ', 'Product Details Coming Soon......', './assets/admin/uploaded_image/p-9.png', './assets/admin/uploaded_image/', 0, '2020-09-13 07:04:45'),
(11, 16, 'LLDPE(Rotomoulding)  ', 'Product Details Coming Soon......', './assets/admin/uploaded_image/p-11.png', './assets/admin/uploaded_image/', 0, '2020-09-13 07:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type_id` int(3) NOT NULL,
  `type_name` varchar(100) NOT NULL,
  `publication_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`type_id`, `type_name`, `publication_status`, `created_datetime`) VALUES
(1, 'PVC Stabilizer', 1, '2020-09-13 06:53:55'),
(6, 'PVC Resin', 1, '2020-09-13 06:54:08'),
(7, 'Calcium Carbonate', 1, '2020-09-13 06:54:23'),
(9, 'UPVC Fittings Compound', 1, '2020-09-13 08:02:09'),
(10, 'Stearic Acid', 1, '2020-09-13 06:54:49'),
(11, 'Paraffin Wax', 1, '2020-09-13 06:55:03'),
(12, 'PP', 1, '2020-09-13 06:55:12'),
(13, 'LDPE', 1, '2020-09-13 06:55:24'),
(14, 'GPPS', 1, '2020-09-13 06:55:37'),
(15, 'HIPS', 1, '2020-09-13 06:55:51'),
(16, 'LLDPE(Rotomoulding)', 1, '2020-09-13 06:56:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_footer_contact`
--
ALTER TABLE `tbl_footer_contact`
  ADD PRIMARY KEY (`fcontact_id`);

--
-- Indexes for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `about_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_footer_contact`
--
ALTER TABLE `tbl_footer_contact`
  MODIFY `fcontact_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  MODIFY `photo_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `type_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
