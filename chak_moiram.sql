-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2016 at 12:31 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chak_moiram`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`) VALUES
(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `uri_segment` varchar(255) NOT NULL,
  `has_sub_page` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `uri_segment`, `has_sub_page`) VALUES
(1, 'Home', 'home', 0),
(2, 'About', 'about', 0),
(3, 'Officials', 'officials', 0),
(4, 'Academic', 'academic', 1),
(5, 'Results', 'results', 0),
(6, 'Gallery', 'gallery', 0),
(7, 'Contact', '#contact_section', 0);

-- --------------------------------------------------------

--
-- Table structure for table `school_details`
--

CREATE TABLE `school_details` (
  `id` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `school_details`
--

INSERT INTO `school_details` (`id`, `school_name`, `address`, `phone`, `logo`) VALUES
(1, 'chakma', 'dfghdfgh', '1234', 'backblue2.gif');

-- --------------------------------------------------------

--
-- Table structure for table `single_page_contents`
--

CREATE TABLE `single_page_contents` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `contents` text NOT NULL,
  `head_sir_photo` text NOT NULL,
  `school_photo` text NOT NULL,
  `mission_and_vision` text NOT NULL,
  `at_a_glance` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `single_page_contents`
--

INSERT INTO `single_page_contents` (`id`, `page_id`, `contents`, `head_sir_photo`, `school_photo`, `mission_and_vision`, `at_a_glance`) VALUES
(1, 0, '', '', '', '', ''),
(2, 0, '', '', '', '', ''),
(15, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos corrupti, nisi! Sequi praesentium minima velit officia distinctio, beatae. Deleniti pariatur animi ex excepturi dolorem nobis dicta et vel quis amet iure earum vero, dolore consequatur eum, quaerat temporibus omnis. Est odit minus voluptas nihil praesentium, eius voluptate repellendus beatae consequuntur odio placeat. Deleniti delectus atque quas architecto, quia vel ipsa voluptatum in id natus ratione vero illum doloribus unde, quod non perspiciatis ex quae. Dignissimos beatae facilis magnam, quibusdam ad neque cum iste veniam vitae, alias amet qui aspernatur porro, quos, iusto culpa eveniet. Fuga, necessitatibus, animi? Magni quos quod aperiam quia, eius culpa! Totam libero consectetur architecto aliquid ipsum tempore, natus dolorum reprehenderit culpa at vitae exercitationem saepe quos ex animi quo dolore facilis explicabo, quia maxime sed magnam doloremque ratione facere? Quos odio, corporis excepturi sequi fugiat eveniet natus odit officiis ea deserunt tempore voluptate repudiandae, laborum, debitis unde! Ipsum culpa perspiciatis est, earum saepe deleniti a magni fugiat maiores atque, architecto quia consequatur esse explicabo amet omnis et eius quae obcaecati dolorum. Alias, deserunt, earum. Aperiam ipsam enim odio ad veniam ducimus ratione accusamus quos, alias nemo neque a eaque autem eveniet ipsa laboriosam fuga totam atque optio officiis numquam molestiae consequuntur animi. Libero harum mollitia voluptatem, error ipsum autem provident placeat, porro impedit. Harum, nobis maxime cum fugiat esse vitae praesentium id sit nihil velit, aliquid culpa necessitatibus aperiam corporis consectetur. Optio incidunt illum, recusandae, porro autem dolore sed? Ipsam aut laborum iste pariatur, quam aperiam, tempore itaque ipsa blanditiis praesentium perspiciatis nulla et, quisquam excepturi harum recusandae minus placeat incidunt maxime voluptas velit veniam. Eveniet porro, quae aperiam quia eum quis nemo saepe reiciendis nesciunt hic corrupti non veritatis ex ipsa soluta velit eius dolores doloremque dolorum iure maiores rerum. Fuga quasi ratione tempore magni.', 'head8.png', '', '', ''),
(16, 5, '<p>fghjkl</p>', '', '', '', ''),
(17, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias doloremque iusto, sit dolores necessitatibus et quod, eum omnis sint vel eos perferendis, eius quae error quia fugiat a saepe quam ducimus. Qui labore iste ipsa quaerat placeat, beatae est libero voluptate cupiditate error tempora nostrum repellat eveniet earum ipsum incidunt magni magnam ducimus dolorem quos illo dolor sapiente laborum. Incidunt aspernatur labore nostrum ipsum corrupti assumenda soluta ab, necessitatibus earum quae omnis nemo laborum, quasi, officiis totam inventore ratione? Ipsam sequi distinctio amet cumque aperiam hic voluptates molestias recusandae natus. Ipsam adipisci impedit laborum eaque quibusdam, aspernatur, fuga reiciendis a perferendis tenetur, unde. Eveniet amet deleniti quam error molestiae. Hic, neque eos, exercitationem quaerat sapiente aperiam vel eligendi est repudiandae itaque tenetur sequi corporis quae quam laboriosam, rem ipsum. Maxime repudiandae voluptatem facilis, vel labore voluptates quia, exercitationem ducimus nulla, asperiores nemo soluta saepe provident? Eveniet aspernatur libero magni quas nihil fugiat numquam culpa rem, adipisci a quis soluta quod dignissimos eligendi, id commodi! Doloremque consequuntur id voluptates incidunt ullam neque ratione. Commodi architecto alias illo, cum esse sequi, facilis natus praesentium atque eius unde! Temporibus perspiciatis eligendi consequuntur voluptate eius magnam sunt provident corporis dignissimos dolores, ea alias natus aut quo enim molestiae aliquid tempore odit aspernatur, exercitationem. Iste quasi eos ab placeat quod qui laudantium quidem molestiae, laborum voluptatem aperiam blanditiis ratione commodi, labore deleniti, sed repudiandae facilis laboriosam. Facilis repudiandae, assumenda magnam excepturi, consequatur maiores consectetur a! Saepe officiis repellat ipsam necessitatibus placeat, dolorum enim earum. Tempore at veritatis harum, ducimus. Nobis sequi, omnis tenetur totam repellendus culpa repudiandae id nesciunt amet consequatur, minus, libero sed iusto rem quidem exercitationem sit veritatis corporis. Neque, veritatis vel officia minus, facilis repellendus quidem architecto fugiat sed magnam ut iste ab at cum reprehenderit unde illo quod non, dolorem iure.', '', 'about-school131.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias doloremque iusto, sit dolores necessitatibus et quod, eum omnis sint vel eos perferendis, eius quae error quia fugiat a saepe quam ducimus. Qui labore iste ipsa quaerat placeat, beatae est libero voluptate cupiditate error tempora nostrum repellat eveniet earum ipsum incidunt magni magnam ducimus dolorem quos illo dolor sapiente laborum. Incidunt aspernatur labore nostrum ipsum corrupti assumenda soluta ab, necessitatibus earum quae omnis nemo laborum, quasi, officiis totam inventore ratione?', 'libero magni quas nihil fugiat numquam culpa rem, adipisci a quis soluta quod dignissimos eligendi, id commodi! Doloremque consequuntur id voluptates incidunt ullam neque ratione. Commodi architecto alias illo, cum esse sequi, facilis natus praesentium atque eius unde! Temporibus perspiciatis eligendi consequuntur voluptate eius magnam sunt provident corporis dignissimos dolores, ea alias natus aut quo enim molestiae aliquid tempore odit aspernatur, exercitationem. Iste quasi eos ab placeat quod qui laudantium quidem molestiae, laborum voluptatem aperiam blanditiis ratione commodi, labore deleniti, sed repudiandae facilis laboriosam. Facilis repudiandae, assumenda magnam excepturi, consequatur maiores consectetur a! Saepe officiis repellat ipsam necessitatibus placeat, dolorum enim earum. Tempore at veritatis harum, ducimus. Nobis sequi, omnis tenetur totam repellendus culpa repudiandae id nesciunt amet consequatur, minus, libero sed iusto rem quidem exercitationem sit veritatis corporis. Neque, veritatis vel officia minus, facilis repellendus quidem architec');

-- --------------------------------------------------------

--
-- Table structure for table `subpages`
--

CREATE TABLE `subpages` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `sub_page_name` varchar(255) DEFAULT NULL,
  `uri_segment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subpages`
--

INSERT INTO `subpages` (`id`, `page_id`, `sub_page_name`, `uri_segment`) VALUES
(1, 4, 'Student Info', 'student-info'),
(2, 4, 'Student Info', 'student-info'),
(3, 4, 'Student Info', 'student-info'),
(4, 4, 'Student Info', 'student-info');

-- --------------------------------------------------------

--
-- Table structure for table `subpage_contents`
--

CREATE TABLE `subpage_contents` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `contents` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teachers_and_staff`
--

CREATE TABLE `teachers_and_staff` (
  `id` int(11) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `qualification` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `religion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_details`
--
ALTER TABLE `school_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single_page_contents`
--
ALTER TABLE `single_page_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subpages`
--
ALTER TABLE `subpages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_id` (`page_id`);

--
-- Indexes for table `subpage_contents`
--
ALTER TABLE `subpage_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers_and_staff`
--
ALTER TABLE `teachers_and_staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `school_details`
--
ALTER TABLE `school_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `single_page_contents`
--
ALTER TABLE `single_page_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `subpages`
--
ALTER TABLE `subpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subpage_contents`
--
ALTER TABLE `subpage_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teachers_and_staff`
--
ALTER TABLE `teachers_and_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `subpages`
--
ALTER TABLE `subpages`
  ADD CONSTRAINT `subpages_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
