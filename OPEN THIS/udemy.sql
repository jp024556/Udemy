-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 05:21 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udemy`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'C Programmings'),
(3, 'PHP'),
(4, 'SQL'),
(5, 'Java');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `course_demo` varchar(255) NOT NULL,
  `course_desc` text NOT NULL,
  `course_req` text NOT NULL,
  `course_aud` text NOT NULL,
  `course_get` text NOT NULL,
  `course_image` varchar(255) NOT NULL,
  `course_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `cat_id`, `sub_cat_id`, `course_title`, `course_demo`, `course_desc`, `course_req`, `course_aud`, `course_get`, `course_image`, `course_price`) VALUES
(1, 1, 3, 'Introduction to C Programming Language', 'Learn about C Programming Language from scratch', 'C is a powerful general-purpose programming language. It is fast, portable and available in all platforms.\r\n\r\nIf you are new to programming, C is a good choice to start your programming journey.\r\n\r\nThis is a comprehensive guide on how to get started in C programming language, why you should learn it and how you can learn it.', 'Basic understanding of how a computer works.', 'Anyone with basic understanding of how a computer works.', 'Personally speaking, I love C programming. It is a good language to start your programming journey if you are a newbie. Even if you are an experienced programmer, I recommend you to learn it at some point; it will certainly help.', '5acdfb083e131.png', '10 $'),
(4, 1, 3, 'Introduction to C Programming Language', 'Learn about C Programming Language from scratch', 'C is a powerful general-purpose programming language. It is fast, portable and available in all platforms.\r\n\r\nIf you are new to programming, C is a good choice to start your programming journey.\r\n\r\nThis is a comprehensive guide on how to get started in C programming language, why you should learn it and how you can learn it.', 'Basic understanding of how a computer works.', 'Anyone with basic understanding of how a computer works.', 'Personally speaking, I love C programming. It is a good language to start your programming journey if you are a newbie. Even if you are an experienced programmer, I recommend you to learn it at some point; it will certainly help.', '5acdfb083e131.png', '10 $'),
(5, 1, 3, 'Introduction to C Programming Language', 'Learn about C Programming Language from scratch', 'C is a powerful general-purpose programming language. It is fast, portable and available in all platforms.\r\n\r\nIf you are new to programming, C is a good choice to start your programming journey.\r\n\r\nThis is a comprehensive guide on how to get started in C programming language, why you should learn it and how you can learn it.', 'Basic understanding of how a computer works.', 'Anyone with basic understanding of how a computer works.', 'Personally speaking, I love C programming. It is a good language to start your programming journey if you are a newbie. Even if you are an experienced programmer, I recommend you to learn it at some point; it will certainly help.', '5acdfb083e131.png', '10 $'),
(11, 1, 3, 'Introduction to C Programming Language', 'Learn about C Programming Language from scratch', 'C is a powerful general-purpose programming language. It is fast, portable and available in all platforms.\r\n\r\nIf you are new to programming, C is a good choice to start your programming journey.\r\n\r\nThis is a comprehensive guide on how to get started in C programming language, why you should learn it and how you can learn it.', 'Basic understanding of how a computer works.', 'Anyone with basic understanding of how a computer works.', 'Personally speaking, I love C programming. It is a good language to start your programming journey if you are a newbie. Even if you are an experienced programmer, I recommend you to learn it at some point; it will certainly help.', '5acdfb083e131.png', '10 $'),
(12, 1, 3, 'Introduction to C Programming Language', 'Learn about C Programming Language from scratch', 'C is a powerful general-purpose programming language. It is fast, portable and available in all platforms.\r\n\r\nIf you are new to programming, C is a good choice to start your programming journey.\r\n\r\nThis is a comprehensive guide on how to get started in C programming language, why you should learn it and how you can learn it.', 'Basic understanding of how a computer works.', 'Anyone with basic understanding of how a computer works.', 'Personally speaking, I love C programming. It is a good language to start your programming journey if you are a newbie. Even if you are an experienced programmer, I recommend you to learn it at some point; it will certainly help.', '5acdfb083e131.png', '10 $'),
(13, 1, 3, 'Introduction to C Programming Language', 'Learn about C Programming Language from scratch', 'C is a powerful general-purpose programming language. It is fast, portable and available in all platforms.\r\n\r\nIf you are new to programming, C is a good choice to start your programming journey.\r\n\r\nThis is a comprehensive guide on how to get started in C programming language, why you should learn it and how you can learn it.', 'Basic understanding of how a computer works.', 'Anyone with basic understanding of how a computer works.', 'Personally speaking, I love C programming. It is a good language to start your programming journey if you are a newbie. Even if you are an experienced programmer, I recommend you to learn it at some point; it will certainly help.', '5acdfb083e131.png', '10 $'),
(14, 1, 3, 'Introduction to C Programming Language', 'Learn about C Programming Language from scratch', 'C is a powerful general-purpose programming language. It is fast, portable and available in all platforms.\r\n\r\nIf you are new to programming, C is a good choice to start your programming journey.\r\n\r\nThis is a comprehensive guide on how to get started in C programming language, why you should learn it and how you can learn it.', 'Basic understanding of how a computer works.', 'Anyone with basic understanding of how a computer works.', 'Personally speaking, I love C programming. It is a good language to start your programming journey if you are a newbie. Even if you are an experienced programmer, I recommend you to learn it at some point; it will certainly help.', '5acdfb083e131.png', '10 $'),
(15, 1, 3, 'Introduction to C Programming Language', 'Learn about C Programming Language from scratch', 'C is a powerful general-purpose programming language. It is fast, portable and available in all platforms.\r\n\r\nIf you are new to programming, C is a good choice to start your programming journey.\r\n\r\nThis is a comprehensive guide on how to get started in C programming language, why you should learn it and how you can learn it.', 'Basic understanding of how a computer works.', 'Anyone with basic understanding of how a computer works.', 'Personally speaking, I love C programming. It is a good language to start your programming journey if you are a newbie. Even if you are an experienced programmer, I recommend you to learn it at some point; it will certainly help.', '5acdfb083e131.png', '10 $'),
(16, 1, 3, 'Introduction to C Programming Language', 'Learn about C Programming Language from scratch', 'C is a powerful general-purpose programming language. It is fast, portable and available in all platforms.\r\n\r\nIf you are new to programming, C is a good choice to start your programming journey.\r\n\r\nThis is a comprehensive guide on how to get started in C programming language, why you should learn it and how you can learn it.', 'Basic understanding of how a computer works.', 'Anyone with basic understanding of how a computer works.', 'Personally speaking, I love C programming. It is a good language to start your programming journey if you are a newbie. Even if you are an experienced programmer, I recommend you to learn it at some point; it will certainly help.', '5acdfb083e131.png', '10 $'),
(17, 1, 3, 'Introduction to C Programming Language', 'Learn about C Programming Language from scratch', 'C is a powerful general-purpose programming language. It is fast, portable and available in all platforms.\r\n\r\nIf you are new to programming, C is a good choice to start your programming journey.\r\n\r\nThis is a comprehensive guide on how to get started in C programming language, why you should learn it and how you can learn it.', 'Basic understanding of how a computer works.', 'Anyone with basic understanding of how a computer works.', 'Personally speaking, I love C programming. It is a good language to start your programming journey if you are a newbie. Even if you are an experienced programmer, I recommend you to learn it at some point; it will certainly help.', '5acdfb083e131.png', '10 $');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `sub_cat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sub_cat_id`, `cat_id`, `sub_cat_name`) VALUES
(3, 1, 'Modular Programming'),
(4, 5, 'Web Technology');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `uname`, `email`, `pwd`, `role`) VALUES
(1, 'Jay', 'Prakash', 'jp024556', 'jp024556@gmail.com', '1234567', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
