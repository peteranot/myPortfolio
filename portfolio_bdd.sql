-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 10, 2021 at 08:23 PM
-- Server version: 5.7.35-0ubuntu0.18.04.1
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_bdd`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `objet` varchar(100) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `img_src` text,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `link_github` varchar(255) DEFAULT NULL,
  `id_types` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `img_src`, `title`, `description`, `link`, `link_github`, `id_types`) VALUES
(66, 'ncp.png', 'New Cuisine Pacific', 'Site WordPress', 'https://ncp.application-proxi.com/', '', 16),
(67, 'trombi.jpg', 'CrÃ©ateur de Trombinoscope', 'Trombinoscope RSMA Arue', 'https://projet-trombinoscope-rsma.000webhostapp.com/index.php', 'https://github.com/peteranot/projet-trombi.git', 6),
(68, 'facepolynÃ©sie.png', 'PROJET Face PolynÃ©sie', 'Projet Laravel ', '', 'https://github.com/peteranot/Projet_Face.git', 6),
(69, 'rsma trombi.png', 'Trombinoscope ', 'Trombinoscope Dweb ', 'https://peteranot.github.io/trombinoscope_dweb/', 'https://github.com/peteranot/trombinoscope_dweb.git', 6);

-- --------------------------------------------------------

--
-- Table structure for table `types_project`
--

CREATE TABLE `types_project` (
  `id_types` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `types_project`
--

INSERT INTO `types_project` (`id_types`, `name`) VALUES
(6, 'Application Web'),
(7, 'Application Mobile'),
(16, 'Site WordPress');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`),
  ADD KEY `id_types` (`id_types`),
  ADD KEY `id_types_2` (`id_types`);

--
-- Indexes for table `types_project`
--
ALTER TABLE `types_project`
  ADD PRIMARY KEY (`id_types`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `types_project`
--
ALTER TABLE `types_project`
  MODIFY `id_types` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `FK_project_types` FOREIGN KEY (`id_types`) REFERENCES `types_project` (`id_types`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
