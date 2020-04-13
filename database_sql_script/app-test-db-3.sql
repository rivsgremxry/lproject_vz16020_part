-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 09:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app-test-db-3`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `id` int(11) NOT NULL,
  `actor_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`id`, `actor_title`) VALUES
(1, 'Actor 1'),
(2, 'Actor 2');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `module_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `module_title`) VALUES
(1, 'Module 1'),
(2, 'Module 2');

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE `requirement` (
  `id` int(11) NOT NULL,
  `requirement_title` varchar(50) NOT NULL,
  `requirement_description` text NOT NULL,
  `module_id` int(11) NOT NULL,
  `actor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`id`, `requirement_title`, `requirement_description`, `module_id`, `actor_id`) VALUES
(1, 'Requirement 1-1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue magna nibh, eu congue tellus faucibus a. Sed nibh ante, dictum sit amet mi quis, porttitor congue nisi. Sed efficitur leo velit, non rutrum enim mattis quis. Pellentesque a elementum odio. Sed non mauris ac massa iaculis imperdiet id vel dolor. Phasellus ornare felis et sem ornare, in laoreet ante varius. Nam interdum blandit risus vel malesuada.', 1, 1),
(2, 'Requirement 2-1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue magna nibh, eu congue tellus faucibus a. Sed nibh ante, dictum sit amet mi quis, porttitor congue nisi. Sed efficitur leo velit, non rutrum enim mattis quis. Pellentesque a elementum odio. Sed non mauris ac massa iaculis imperdiet id vel dolor. Phasellus ornare felis et sem ornare, in laoreet ante varius. Nam interdum blandit risus vel malesuada.', 1, 1),
(3, 'Requirement 2-2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue magna nibh, eu congue tellus faucibus a. Sed nibh ante, dictum sit amet mi quis, porttitor congue nisi. Sed efficitur leo velit, non rutrum enim mattis quis. Pellentesque a elementum odio. Sed non mauris ac massa iaculis imperdiet id vel dolor. Phasellus ornare felis et sem ornare, in laoreet ante varius. Nam interdum blandit risus vel malesuada.', 2, 1),
(4, 'Requirement 1-2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue magna nibh, eu congue tellus faucibus a. Sed nibh ante, dictum sit amet mi quis, porttitor congue nisi. Sed efficitur leo velit, non rutrum enim mattis quis. Pellentesque a elementum odio. Sed non mauris ac massa iaculis imperdiet id vel dolor. Phasellus ornare felis et sem ornare, in laoreet ante varius. Nam interdum blandit risus vel malesuada.', 2, 2),
(12, 'm1a1', '', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requirement`
--
ALTER TABLE `requirement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_id` (`module_id`),
  ADD KEY `actor_id` (`actor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actor`
--
ALTER TABLE `actor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `requirement`
--
ALTER TABLE `requirement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `requirement`
--
ALTER TABLE `requirement`
  ADD CONSTRAINT `requirement_ibfk_1` FOREIGN KEY (`actor_id`) REFERENCES `actor` (`id`),
  ADD CONSTRAINT `requirement_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
