-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2018 at 10:27 PM
-- Server version: 5.7.21
-- PHP Version: 7.0.28-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cursophp`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `content`) VALUES
(1, 'Title 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod                         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,                         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo                         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse                         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non                         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'Ttitle 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod                         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,                         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo                         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse                         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non                         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'Titulo', 'Este es el texto del post');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'victor', 'victor@plazi.com', '123456'),
(3, 'Marioe', 'mario@platzi.com', '5fc6c7266584b405d4b7fc14f0799d65');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
