-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2019 at 10:29 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bramlawfirm`
--

-- --------------------------------------------------------

--
-- Table structure for table `bramlawfirm_posts`
--

CREATE TABLE `bramlawfirm_posts` (
  `id_post` int(15) NOT NULL,
  `post_author` varchar(50) NOT NULL,
  `post_title` varchar(300) NOT NULL,
  `post_content` text NOT NULL,
  `post_date` datetime NOT NULL,
  `post_status` varchar(30) NOT NULL,
  `post_type` varchar(100) NOT NULL,
  `post_tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bramlawfirm_posts`
--

INSERT INTO `bramlawfirm_posts` (`id_post`, `post_author`, `post_title`, `post_content`, `post_date`, `post_status`, `post_type`, `post_tag`) VALUES
(5, 'administrator', 'Hukum KUHP', '<p>Donec pede justo, <strong>fringilla vel, aliquet nec,</strong> vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget</p>\r\n<p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</p>', '2019-09-27 03:18:09', 'Posted', 'article', '#article'),
(7, 'user', 'Hukum Rimba', '<p>In<strong> enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. In enim justo, rhoncus ut, i</strong>mperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>', '2019-09-27 05:23:41', 'posted', 'article', '#article'),
(8, 'administrator', 'Hukum RUU', '<p>jkyglygclgckchliukjh</p>\r\n<p>cklhglhghgjhgxjhgxjhgxhgx.hi</p>', '2019-09-27 10:26:17', 'posted', 'article', '#article');

-- --------------------------------------------------------

--
-- Table structure for table `bramlawfirm_user`
--

CREATE TABLE `bramlawfirm_user` (
  `id_user` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `access` varchar(15) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bramlawfirm_user`
--

INSERT INTO `bramlawfirm_user` (`id_user`, `name`, `title`, `username`, `password`, `access`, `photo`, `status`) VALUES
(1, 'Admin', 'Administrator', 'administrator', '48ac4c7891584fea20ad23b022f7890b', 'administrator', 'admin', ''),
(2, 'User', 'User', 'user', '6ad14ba9986e3615423dfca256d04e3f', 'user', 'user', '');

-- --------------------------------------------------------

--
-- Table structure for table `bramlawfirm_usergroup`
--

CREATE TABLE `bramlawfirm_usergroup` (
  `id_usergroup` int(15) NOT NULL,
  `rolegroup` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bramlawfirm_posts`
--
ALTER TABLE `bramlawfirm_posts`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `bramlawfirm_user`
--
ALTER TABLE `bramlawfirm_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `bramlawfirm_usergroup`
--
ALTER TABLE `bramlawfirm_usergroup`
  ADD PRIMARY KEY (`id_usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bramlawfirm_posts`
--
ALTER TABLE `bramlawfirm_posts`
  MODIFY `id_post` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bramlawfirm_user`
--
ALTER TABLE `bramlawfirm_user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bramlawfirm_usergroup`
--
ALTER TABLE `bramlawfirm_usergroup`
  MODIFY `id_usergroup` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
