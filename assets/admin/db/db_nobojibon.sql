-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2020 at 12:16 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nobojibon`
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
(1, '<span xss=removed>In Bangladesh, both at rural and urban settings, a huge number of populations are fighting for coping with poverty, hunger as well as illiteracy from generation to generation. For their education, economic graduation, creating of livelihood opportunities is crucial through improving life skills. Nobo Jibon set off in 1998 in the heart of the south-western district Satkhira by Mr. Shahid Khan living in London and left Bangladesh 54 years back, giving highest priority on ensuring education and socio-economic development of the by-passed, disadvantaged and vulnerable segment of the community. Nobo Jibon is transforming the poor and vulnerable community as a change maker of their own fate and has been implementing various programs by following a integrated development approach (IDA). The well designed sustainable programs of Nobo Jibon through covering huge number of beneficiaries is definitely contributing towards achieving Sustainable Development Goals (SDG). Nobo Jibon is now operating its activities all over the countries and plans to expand its interventions gradually in challenging and hard to reach areas to address the dire needs of the people who are deprived from education and other basic rights and continuously fighting against poverty.</span><br xss=removed><br xss=removed><b xss=removed>We are very much grateful to Mr. Shahid khan for his moral advice and provide us his all lifetime savings for implement Nobo Jibon.</b><br xss=removed><br xss=removed><span xss=removed>The endeavor of Nobo Jibon started in 1998 with a view to improving the socio economic conditions of the by-passed, disadvantaged and most vulnerable population, particularly the women and children in both rural and urban areas;</span><br xss=removed><br xss=removed><b xss=removed>Goal of Nobo Jibon:</b><span xss=removed><span> </span>To improve quality of life of the poor particularly most disadvantaged women and children and community as a whole</span><br xss=removed><br xss=removed><b xss=removed>Vision of Nobo Jibon:</b><span xss=removed><span> </span>To make an educated, democratic, just, equitable, capable and poverty free Bangladesh. It also envisages a society in Bangladesh where every human being living with human dignity and free from all sorts of human rights violations</span><br xss=removed><br xss=removed><b xss=removed>Mission of Nobo Jibon:</b><span xss=removed><span> </span>To create self-financed, self-employed and self-empowered communities with increased capabilities by providing need-based services and supports like education, health, income generation, accommodation and fooding, microfinance, agriculture, water and sanitation, environment, Climate change, social security, technology, etc.</span><br xss=removed><br xss=removed><b xss=removed>Legal Status:</b><span xss=removed><span> </span>NOBO JIBON registered with</span><br xss=removed><br xss=removed><span xss=removed>a) Social Welfare Department,Reg. No: 357/2001, Date: 23.10.2001</span><br xss=removed><br xss=removed><span xss=removed>b) NGO Affairs Bureau,Reg. No. 2365, Date: 05.06.2008</span><br xss=removed><br xss=removed><span xss=removed>c) Micro Credit Regulatory Authority, Reg. No: 01510-00598-00166, Date: 16/03/2008</span>');

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
(1, 'Nobo Jibon', 47165065, 'nobojibon07@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(3) NOT NULL,
  `contact_person` text NOT NULL,
  `head_office` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `contact_person`, `head_office`) VALUES
(1, '<b xss=removed>Tarequzzaman Khan</b><br xss=removed><span xss=removed>Executive Director</span><br xss=removed><span xss=removed>NOBO JIBON</span><br xss=removed><span xss=removed>Cell: +88-01716-982790</span><br xss=removed><span xss=removed>Email:tareqzerin@gmail.com</span>', '<span xss=removed>Polashpole, Satkhira Sadar,</span><br xss=removed><span xss=removed>Satkhira, Bangladesh.</span><br xss=removed><span xss=removed>Telephone: +88- 0471- 65065</span><br xss=removed><span xss=removed>E-mail: nobojibon07@gmail.com, info@nobojibon.org</span>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer_contact`
--

CREATE TABLE `tbl_footer_contact` (
  `fcontact_id` int(3) NOT NULL,
  `location` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_footer_contact`
--

INSERT INTO `tbl_footer_contact` (`fcontact_id`, `location`, `email`, `phone`, `created_date`) VALUES
(1, '                                                                <span>Polashpole, Satkhira Sadar,</span><br><span>Satkhira, Bangladesh.</span>                                                        ', '                                                   <span>nobojibon07@gmail.com, info@nobojibon.org</span>                                                       ', '                                                                <span>Telephone: +88- 0471- 65065</span>                                                        ', '2020-08-22 10:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery_album`
--

CREATE TABLE `tbl_gallery_album` (
  `galbum_id` int(3) NOT NULL,
  `album_name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gallery_album`
--

INSERT INTO `tbl_gallery_album` (`galbum_id`, `album_name`, `photo`, `created_date`) VALUES
(2, 'Rose', './assets/admin/uploaded_image/flower.jpg', '2020-08-23 06:19:34'),
(4, 'Lotus', './assets/admin/uploaded_image/download2.png', '2020-08-23 06:36:23'),
(5, 'New Album', './assets/admin/uploaded_image/download.png', '2020-08-23 10:05:27'),
(6, 'old album', './assets/admin/uploaded_image/old.jpg', '2020-08-23 10:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery_images`
--

CREATE TABLE `tbl_gallery_images` (
  `gimage_id` int(3) NOT NULL,
  `album_id` int(3) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gallery_images`
--

INSERT INTO `tbl_gallery_images` (`gimage_id`, `album_id`, `photo`, `created_date`) VALUES
(1, 2, './assets/admin/uploaded_image/rose2.jpg', '2020-08-23 06:36:51'),
(3, 2, './assets/admin/uploaded_image/rose.jpg', '2020-08-23 06:37:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_link`
--

CREATE TABLE `tbl_link` (
  `link_id` int(3) NOT NULL,
  `link_title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_link`
--

INSERT INTO `tbl_link` (`link_id`, `link_title`, `url`) VALUES
(1, 'Nobo Jibon Education', 'http://www.nobojibonpi.edu.bd/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(3) NOT NULL,
  `date` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `date`, `title`, `description`, `photo`, `created_date`) VALUES
(5, '2020-08-23', 'Welcoming Event', '<strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span>&nbsp;</span>is\r\n simply dummy text of the printing and typesetting industry. Lorem Ipsum\r\n has been the industry\'s standard dummy text ever since the 1500s, when \r\nan unknown printer took a galley of type and scrambled it to make a type\r\n specimen book. It has survived not only five centuries, but also the \r\nleap into electronic typesetting, remaining essentially unchanged. It \r\nwas popularised in the 1960s with the release of Letraset sheets \r\ncontaining Lorem Ipsum passages, and more recently with desktop \r\npublishing software like Aldus PageMaker including versions of Lorem \r\nIpsum.</span>', './assets/admin/uploaded_image/download.jpg', '2020-08-22 09:47:14'),
(6, '2020-08-24', 'Grand Ceremony', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span>', './assets/admin/uploaded_image/download2.jpg', '2020-08-22 09:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partner`
--

CREATE TABLE `tbl_partner` (
  `partner_id` int(3) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_partner`
--

INSERT INTO `tbl_partner` (`partner_id`, `photo`, `created_date`) VALUES
(2, './assets/admin/uploaded_image/p-31.png', '2020-08-22 06:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photos`
--

CREATE TABLE `tbl_photos` (
  `photo_id` int(3) NOT NULL,
  `photo_title` varchar(55) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `type` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_photos`
--

INSERT INTO `tbl_photos` (`photo_id`, `photo_title`, `description`, `photo`, `type`, `created_date`) VALUES
(1, 'Welcome to NOBO JIBON', 'Let us think of education as the means of developing our greatest abilities, because in each of us there is a private hope and dream which, fulfilled, can be translated into benefit for everyone and greater strength for our nation.', './assets/admin/uploaded_image/slider-1.png', 1, '2020-08-23 07:50:15'),
(2, 'We are proud', 'Let us think of education as the means of developing our greatest abilities, because in each of us there is a private hope and dream which, fulfilled, can be translated into benefit for everyone and greater strength for our nation.', './assets/admin/uploaded_image/slider-2.png', 1, '2020-08-23 07:49:38'),
(3, 'Welcome to NOBO JIBON', '<span style=\"color: rgb(102, 102, 102); font-family: Lato, sans-serif; font-size: 14px; letter-spacing: 0.3px; text-align: justify; background-color: rgb(255, 255, 255);\">In Bangladesh, both at rural and urban settings, a huge number of populations are fighting for coping with poverty, hunger as well as illiteracy from generation to generation. For their education, economic graduation, creating of livelihood opportunities is crucial through improving life skills. Nobo Jibon set off in 1998 in the heart of the south-western district Satkhira by Mr. Shahid Khan living in London and left Bangladesh 54 years back, giving highest priority on ensuring education and socio....</span>', './assets/admin/uploaded_image/about.png', 2, '2020-08-19 05:32:14'),
(4, 'ACHIEVEMENTS', '<span xss=removed>NoboJibon has come a long way from its early nervous days. The trustees and supporters have a very good reason to be proud of its success. Within this short period of time its work on the ground has overtaken many of the big organizations. It works within a very limited budget and spend money very carefully. It is not proud of its bank-balance but proud of its achievement because of financial handicap, the program is progressing slowly but surely. It\'s ETAF(E=Education, T=Training, A=Advice, F=Family income generating) formula is working well on the ground. We find full participation from the poor people for its projects.</span><br xss=removed><br xss=removed><span xss=removed>Nobo Jibon strongly believes that sustainability of the organization depends on the sustainability of the beneficiary target groups. Nobo Jibon implements most of its programs/projects by organizing beneficiaries in groups. Groups decide what kind of approach and assistance they need. Nobo Jibon assists them in taking proper decision. In the light of the decision taken by the groups, Nobo Jibon provides the group members with technical and financial supports.</span><br xss=removed><br xss=removed><span xss=removed>-Enhancing the socio-economic condition of the by-passed, disadvantaged and underprivileged people through undertaking and implementing strategic programs and projects</span><br xss=removed><br xss=removed><span xss=removed>-Ensuring education for all by increasing enrollment of most vulnerable, disadvantaged, orphans and dropped out children in the institution</span><br xss=removed><br xss=removed><span xss=removed>-Ensuring food security of the underprivileged poor people through improving their income and access to food</span><br xss=removed><br xss=removed><span xss=removed>-Assisting and supporting the disadvantaged and the underprivileged people for capacity building and ensuring provisions of basic needs of life like employment, income, health, education etc</span><br xss=removed><br xss=removed><span xss=removed>-Helping in building institution of the target groups for establishing their basic rights in the family, community and society</span><br xss=removed><br xss=removed><span xss=removed>-Making ownership of the organizations among beneficiaries</span>                                                            ', './assets/admin/uploaded_image/achieve.png', 4, '2020-08-22 06:17:17'),
(9, 'Donar Title', '', './assets/admin/uploaded_image/d-1.png', 6, '2020-08-19 05:36:31'),
(10, 'Donar Title', '', './assets/admin/uploaded_image/d-2.png', 6, '2020-08-19 05:37:46'),
(11, 'Donar Title', '', './assets/admin/uploaded_image/d-3.png', 6, '2020-08-19 05:37:56'),
(12, 'Donar Title', '', './assets/admin/uploaded_image/d-4.png', 6, '2020-08-19 05:38:06'),
(13, 'Donar Title', '', './assets/admin/uploaded_image/d-5.png', 6, '2020-08-19 05:38:16'),
(14, 'Program Title', '<span xss=removed>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like.</span>                                                            ', './assets/admin/uploaded_image/p-1.jpg', 5, '2020-08-22 10:08:13'),
(15, 'Program Title', '<strong xss=removed>Lorem Ipsum</strong><span xss=removed><span> </span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>                                                            ', './assets/admin/uploaded_image/p-1.png', 5, '2020-08-22 10:07:50'),
(17, 'Annual Report', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Annual Report 2016-2017</span></font>', './assets/admin/uploaded_image/publication.pdf', 7, '2020-08-19 08:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(3) NOT NULL,
  `review_type` tinyint(4) NOT NULL COMMENT '1=product, 2=service',
  `description` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `review_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `review_type`, `description`, `photo`, `review_status`, `created_date`) VALUES
(24, 1, '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255);\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', './assets/admin/uploaded_image/health.png', 0, '2020-08-19 09:36:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type_id` int(3) NOT NULL,
  `type_name` varchar(100) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`type_id`, `type_name`, `publication_status`, `created_datetime`) VALUES
(1, 'Health,Nutrition', 1, '2020-08-19 08:56:52'),
(6, 'New Program', 0, '2020-08-19 08:57:08');

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
-- Indexes for table `tbl_gallery_album`
--
ALTER TABLE `tbl_gallery_album`
  ADD PRIMARY KEY (`galbum_id`);

--
-- Indexes for table `tbl_gallery_images`
--
ALTER TABLE `tbl_gallery_images`
  ADD PRIMARY KEY (`gimage_id`);

--
-- Indexes for table `tbl_link`
--
ALTER TABLE `tbl_link`
  ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_partner`
--
ALTER TABLE `tbl_partner`
  ADD PRIMARY KEY (`partner_id`);

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
-- AUTO_INCREMENT for table `tbl_gallery_album`
--
ALTER TABLE `tbl_gallery_album`
  MODIFY `galbum_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_gallery_images`
--
ALTER TABLE `tbl_gallery_images`
  MODIFY `gimage_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_link`
--
ALTER TABLE `tbl_link`
  MODIFY `link_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_partner`
--
ALTER TABLE `tbl_partner`
  MODIFY `partner_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  MODIFY `photo_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `type_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
