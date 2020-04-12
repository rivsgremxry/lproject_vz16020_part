-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 09:58 AM
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
  `module_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`id`, `requirement_title`, `requirement_description`, `module_id`) VALUES
(1, 'Requirement 1-1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce accumsan, nisl eget dignissim commodo, dolor nibh aliquet diam, eu congue lacus nibh a purus. Praesent placerat, justo eu convallis accumsan, eros nisl pretium libero, a fermentum risus orci non lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse mattis accumsan eros nec vehicula. Nam ultrices enim sed rutrum eleifend. Curabitur suscipit imperdiet velit, nec aliquam neque placerat eu. Nullam nec interdum ante. Fusce condimentum sit amet diam id suscipit. Nam venenatis tempus justo ac porttitor. Etiam nec magna massa.', 1),
(2, 'Requirement 2-1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce accumsan, nisl eget dignissim commodo, dolor nibh aliquet diam, eu congue lacus nibh a purus. Praesent placerat, justo eu convallis accumsan, eros nisl pretium libero, a fermentum risus orci non lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse mattis accumsan eros nec vehicula. Nam ultrices enim sed rutrum eleifend. Curabitur suscipit imperdiet velit, nec aliquam neque placerat eu. Nullam nec interdum ante. Fusce condimentum sit amet diam id suscipit. Nam venenatis tempus justo ac porttitor. Etiam nec magna massa.', 1),
(3, 'Requirement 3-1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce accumsan, nisl eget dignissim commodo, dolor nibh aliquet diam, eu congue lacus nibh a purus. Praesent placerat, justo eu convallis accumsan, eros nisl pretium libero, a fermentum risus orci non lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse mattis accumsan eros nec vehicula. Nam ultrices enim sed rutrum eleifend. Curabitur suscipit imperdiet velit, nec aliquam neque placerat eu. Nullam nec interdum ante. Fusce condimentum sit amet diam id suscipit. Nam venenatis tempus justo ac porttitor. Etiam nec magna massa.', 1),
(4, 'Requirement 4-1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce accumsan, nisl eget dignissim commodo, dolor nibh aliquet diam, eu congue lacus nibh a purus. Praesent placerat, justo eu convallis accumsan, eros nisl pretium libero, a fermentum risus orci non lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse mattis accumsan eros nec vehicula. Nam ultrices enim sed rutrum eleifend. Curabitur suscipit imperdiet velit, nec aliquam neque placerat eu. Nullam nec interdum ante. Fusce condimentum sit amet diam id suscipit. Nam venenatis tempus justo ac porttitor. Etiam nec magna massa.', 1),
(5, 'Requirement 1-2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce accumsan, nisl eget dignissim commodo, dolor nibh aliquet diam, eu congue lacus nibh a purus. Praesent placerat, justo eu convallis accumsan, eros nisl pretium libero, a fermentum risus orci non lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse mattis accumsan eros nec vehicula. Nam ultrices enim sed rutrum eleifend. Curabitur suscipit imperdiet velit, nec aliquam neque placerat eu. Nullam nec interdum ante. Fusce condimentum sit amet diam id suscipit. Nam venenatis tempus justo ac porttitor. Etiam nec magna massa.', 2),
(6, 'Requirement 2-2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce accumsan, nisl eget dignissim commodo, dolor nibh aliquet diam, eu congue lacus nibh a purus. Praesent placerat, justo eu convallis accumsan, eros nisl pretium libero, a fermentum risus orci non lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse mattis accumsan eros nec vehicula. Nam ultrices enim sed rutrum eleifend. Curabitur suscipit imperdiet velit, nec aliquam neque placerat eu. Nullam nec interdum ante. Fusce condimentum sit amet diam id suscipit. Nam venenatis tempus justo ac porttitor. Etiam nec magna massa.', 2),
(7, 'Requirement 3-2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce accumsan, nisl eget dignissim commodo, dolor nibh aliquet diam, eu congue lacus nibh a purus. Praesent placerat, justo eu convallis accumsan, eros nisl pretium libero, a fermentum risus orci non lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse mattis accumsan eros nec vehicula. Nam ultrices enim sed rutrum eleifend. Curabitur suscipit imperdiet velit, nec aliquam neque placerat eu. Nullam nec interdum ante. Fusce condimentum sit amet diam id suscipit. Nam venenatis tempus justo ac porttitor. Etiam nec magna massa.', 2),
(8, 'Test', 'askjajsfa', 1),
(78, 'asda', 'asdasd', 1),
(80, 'asdas', 'asdasd', 1),
(83, 'BBBB', 'BBBBBBBBBBBB', 2),
(85, 'TEST', 'MUAAHHAHA', 2);

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
  ADD KEY `module_id` (`module_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actor`
--
ALTER TABLE `actor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `requirement`
--
ALTER TABLE `requirement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `requirement`
--
ALTER TABLE `requirement`
  ADD CONSTRAINT `requirement_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
