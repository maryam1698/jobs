-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 09:57 AM
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
-- Database: `jobdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `law` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `type` enum('0','1') NOT NULL DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `cat_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `company`, `logo`, `law`, `location`, `type`, `user_id`, `cat_type`) VALUES
(1, 'طراح سایت', 'هلدینگ نیلپر', 'd1.png', '17-20میلیون تومان', 'تهران 5530', '0', 1, 'it'),
(2, 'برنامه نویس Back-End (Python)', 'نوین پژوه', 'd2.jpg', '11-12میلیون تومان', 'تهران-تهرانپارس 455001', '1', 2, 'it'),
(3, 'برنامه نویس Back-End (js)', 'ماهان نوین', 'd3.png', '10-21میلیون تومان', 'تهران-تهرانپارس 455001', '0', 3, 'it'),
(4, 'برنامه نویس Back-End (c#)', 'جابینجا', 'd4.png', '10-12میلیون تومان', 'تهران-تهرانپارس 455001', '1', 2, 'it'),
(5, 'برنامه نویس Back-End (Python)', 'جاب ویژن', 'd5.png', '10-12میلیون تومان', 'تهران-تهرانپارس 455001', '1', 2, 'it'),
(6, 'کارشناس هوش مصنوعی', 'ایان کاوش اطلاعات مدار', 'd1.png', '20-25میلیون تومان', 'تهران-سعادت آباد 455001', '1', 2, 'tech'),
(7, 'کارشناس هوش مصنوعی', 'ایان کاوش اطلاعات مدار', 'd1.png', '20-25میلیون تومان', 'تهران-سعادت آباد 455001', '1', 2, 'tech'),
(8, 'کارشناس هوش مصنوعی', 'ایان کاوش اطلاعات مدار', 'd1.png', '20-25میلیون تومان', 'تهران-سعادت آباد 455001', '1', 2, 'tech'),
(9, 'کارشناس هوش مصنوعی', 'ایان کاوش اطلاعات مدار', 'd1.png', '20-25میلیون تومان', 'تهران-سعادت آباد 455001', '1', 2, 'tech'),
(10, 'کارمند عملیات بانکی', 'بانک خاورمیانه', 'd2.jpg', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'hesabdary'),
(11, 'کارمند عملیات بانکی', 'بانک خاورمیانه', 'd2.jpg', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'hesabdary'),
(12, 'کارمند عملیات بانکی', 'بانک خاورمیانه', 'd2.jpg', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'hesabdary'),
(13, 'کارمند عملیات بانکی', 'بانک خاورمیانه', 'd2.jpg', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'hesabdary'),
(14, 'کارمند عملیات بانکی', 'بانک خاورمیانه', 'd2.jpg', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'hesabdary'),
(15, 'کارمند عملیات بانکی', 'بانک خاورمیانه', 'd2.jpg', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'hesabdary'),
(16, '  مهندسی پزشکی', ' شرکت احیا درمان پیشرفته', 'd4.jpg', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'pezeshki'),
(17, '  مهندسی پزشکی', ' شرکت احیا درمان پیشرفته', 'd4.jpg', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'pezeshki'),
(18, '  مهندسی پزشکی', ' شرکت احیا درمان پیشرفته', 'd4.jpg', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'pezeshki'),
(19, '  مهندسی پزشکی', ' شرکت احیا درمان پیشرفته', 'd4.jpg', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'pezeshki'),
(20, '  مهندسی پزشکی', ' شرکت احیا درمان پیشرفته', 'd4.jpg', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'pezeshki'),
(21, ' کارشناس فروش -خانم', ' سازمان جهاد دانشگاهی صنعتی شریف', 'd3.png', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'forosh'),
(22, ' کارشناس فروش -خانم', ' سازمان جهاد دانشگاهی صنعتی شریف', 'd3.png', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'forosh'),
(23, ' کارشناس فروش -خانم', ' سازمان جهاد دانشگاهی صنعتی شریف', 'd3.png', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'forosh'),
(24, ' کارشناس فروش -خانم', ' سازمان جهاد دانشگاهی صنعتی شریف', 'd3.png', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'forosh'),
(25, ' کارشناس فروش -خانم', ' سازمان جهاد دانشگاهی صنعتی شریف', 'd3.png', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'forosh'),
(26, ' کارشناس تولید محتوا و شبکه های اجتماعی', ' دپارتمان املاک ملک آسا شریف', 'd1.png', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'socials'),
(27, ' کارشناس تولید محتوا و شبکه های اجتماعی', ' دپارتمان املاک ملک آسا شریف', 'd1.png', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'socials'),
(28, ' کارشناس تولید محتوا و شبکه های اجتماعی', ' دپارتمان املاک ملک آسا شریف', 'd1.png', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'socials'),
(29, ' کارشناس تولید محتوا و شبکه های اجتماعی', ' دپارتمان املاک ملک آسا شریف', 'd1.png', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'socials'),
(30, ' کارشناس تولید محتوا و شبکه های اجتماعی', ' دپارتمان املاک ملک آسا شریف', 'd1.png', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'socials'),
(31, ' کارشناس تولید محتوا و شبکه های اجتماعی', ' دپارتمان املاک ملک آسا شریف', 'd1.png', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'socials'),
(32, ' کارشناس تولید محتوا و شبکه های اجتماعی', ' دپارتمان املاک ملک آسا شریف', 'd1.png', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'socials'),
(33, ' سرآشپز وآشپز-آقا', ' رستوران یاس', 'd2.jpg', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'foods'),
(34, ' سرآشپز وآشپز-آقا', ' رستوران یاس', 'd2.jpg', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'foods'),
(35, ' سرآشپز وآشپز-آقا', ' رستوران یاس', 'd2.jpg', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'foods'),
(36, ' سرآشپز وآشپز-آقا', ' رستوران یاس', 'd2.jpg', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'foods'),
(37, ' سرآشپز وآشپز-آقا', ' رستوران یاس', 'd2.jpg', '15-20میلیون تومان', 'اصفهان-کاوه 45500', '0', 3, 'foods');

-- --------------------------------------------------------

--
-- Table structure for table `job_user`
--

CREATE TABLE `job_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `job_id` int(11) NOT NULL,
  `resume` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_user`
--

INSERT INTO `job_user` (`id`, `user_id`, `message`, `job_id`, `resume`) VALUES
(37, 1, '44444444', 4, '11-0-Color-Day-thumbnails.jpg'),
(38, 1, 'tech ', 6, '11-0-Color-Day-thumbnails.jpg'),
(39, 1, '', 4, 'ft5.png'),
(40, 1, '', 5, 'd7.jpg'),
(41, 1, '', 26, '02.jpg'),
(42, 17, '', 4, 'd5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_contact` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` text DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `about_job` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `country` varchar(255) NOT NULL DEFAULT 'ایران',
  `area` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pastal_code` bigint(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `size_of_company` varchar(255) DEFAULT NULL,
  `permission` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `email_contact`, `password`, `avatar`, `phone`, `website`, `about_job`, `address`, `country`, `area`, `city`, `pastal_code`, `location`, `size_of_company`, `permission`) VALUES
(1, 'مریم غلامی', 'maryam@gmail.com', 'maryam-contact@gmail.com', '12345', '10-15-Night-thumb.jpg', '09390991698', 'jobdesk', 'آی تی و کامپیوتر', 'استان اصفهان', 'Iran', 'شهرک لاله ها        ', 'esfahan', 6647149856, NULL, '1-100', 1),
(2, 'melika helali', 'melikahelali@gmail.com', NULL, '12345', 'profile.jpg', '', '', '', '', 'ایران', NULL, 'kashan', NULL, NULL, NULL, 0),
(4, 'maryam mazaheri', 'maryammazaheri@gmail.com', NULL, 'mr_369', 'profile.jpg', '', '', '', '', 'ایران', NULL, 'esfahan', NULL, NULL, NULL, 0),
(14, 'mona azizi4', 'mona4@gmail.com', NULL, 'mr_369', 'profile.jpg', '', '', '', '', 'ایران', NULL, NULL, NULL, NULL, NULL, 0),
(15, 'ali azizi', 'ali12ali@gmail.com3', NULL, '12345', NULL, NULL, NULL, NULL, NULL, 'ایران', NULL, NULL, NULL, NULL, NULL, 0),
(16, 'ali azizi', 'ali@gmail.com', NULL, '12345', '11-0-Color-Day-thumbnails.jpg', '0918563455', '', 'مهندس کامپیوتر', 'تهران ', 'ایران', ' آریا شهر', 'تهران', 6647149175, NULL, NULL, 0),
(17, ' lia parsa', 'lia2568@gmail.com', NULL, '654321', 'BeautyPlus_20230603155923543_save.png', '09123651225', '', 'فناوری اطلاعات', 'شهرک الغدیر', 'ایران', '2 ', 'قم', 2555451610, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_user`
--
ALTER TABLE `job_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_contact` (`email_contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `job_user`
--
ALTER TABLE `job_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_user`
--
ALTER TABLE `job_user`
  ADD CONSTRAINT `job_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `job_user_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
