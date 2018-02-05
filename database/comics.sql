-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2018 at 08:29 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comics`
--

-- --------------------------------------------------------

--
-- Table structure for table `comics`
--

CREATE TABLE `comics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `comics`
--

INSERT INTO `comics` (`id`, `name`, `price`, `description`, `author`, `images`) VALUES
(1, 'Star Wars#5', 400, 'The adventures of the Old and Last Jedi. Trapped in a bat cave.', 'Aaron, Dauterman', 'img/bsell1.jpg'),
(2, 'Guardians of Galaxy #2', 480, 'The Guardians saves the the galaxy for nth time from space invaders.', 'Bendis, McNiven', 'img/bsell2.jpg'),
(3, 'Moon Knight Vol. 2: Dead Will Rise', 399, 'The mystery identity of the Moon Knight revealed and secret origin.', 'Mcdonald, Ronald', 'img/bsell3.jpg'),
(4, 'Ultimate Spider-Man #2', 459, 'Miles Morales\' journey as the current spider-man (prelude to movie).', 'Bendis, Andrews', 'img/bsell4.jpg'),
(5, 'Captain America: Living Legend', 520, 'The complete story of post World War II featuring Cap himself.', 'Slott, Martin', 'img/bsell5.jpg'),
(6, 'Ultimate Spdier-Man #10', 500, 'How will Peter Parker live his life as a teacher and a Superhero.', 'Bendis, Marquez', 'img/bsell6.jpg'),
(7, 'Spider-Woman: Origin #5', 490, 'Origin story of the Lady Webcrawler and prelude to upcoming series.', 'Bendis, Brothers', 'img/bsell7.jpg'),
(8, 'Superior Spider-Man #10', 470, 'The dark and untold past of Peter Parker before becoming Spider-man.', 'Dunn, James', 'img/bsell8.jpg'),
(9, 'Carnage', 500, 'df', 'df', 'img/bsell17.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `password`, `email`, `role`, `images`) VALUES
(7, 'arjo', 'Arjo', 'Chavez', 'e38ad214943daad1d64c102faec29de4afe9da3d', 'rjochavez@gmail.com', 'admin', 'profile1.jpg'),
(8, 'kevin', 'Kevin', 'Bigay', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'kb@yahoo.com', 'admin', 'profile2.jpg'),
(13, 'charlie', 'Charlie', 'Day', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'cd@yahoo.com', 'user', 'profile3.jpg'),
(15, 'mac', 'Ronald', 'Mcdonald', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'mc@gmail.com', 'user', 'profile5.jpg'),
(16, 'frank', 'Frank', 'Reynolds', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'fr@yahoo.com', 'user', 'profile6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comics`
--
ALTER TABLE `comics`
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
-- AUTO_INCREMENT for table `comics`
--
ALTER TABLE `comics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
