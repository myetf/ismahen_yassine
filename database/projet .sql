-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2017 at 03:28 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `achat`
--

CREATE TABLE `achat` (
  `achat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `prix` varchar(50) NOT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `nom`, `categorie`, `genre`, `prix`, `description`, `image`) VALUES
(1, 'Legging Marron', 'Legging', 'feminin', '19.99', 'Ideal pour les sorties weekend', 'legging1.jpeg'),
(2, 'Legging Rayee', 'Legging', 'feminin', '24.99', 'Ideal pour les sorties weekend', 'legging2.jpeg'),
(3, 'Veste Grise', 'Veste', 'feminin', '34.99', 'Toujours au chaud!', 'blouson.jpeg'),
(4, 'Veste Jean', 'Veste', 'feminin', '27.99', 'Elegance en marche', 'blouson2.jpeg'),
(6, 'Jean Couleur Claire', 'Jean', 'feminin', '14.99', 'Ideal pour tout', 'jean2.jpeg'),
(7, 'Jean Fusuao', 'Jean', 'feminin', '24.99', 'Parfait', 'jean3.jpeg'),
(17, 'trefle feuille', 'Pull', 'male', '1897', 'itreza', 'photo1.jpeg'),
(18, 'jupe dezni', 'Jupe', 'feminin', '14.99', 'JUpe style', 'photo2.jpeg'),
(19, 'Chimisier', 'Haut', 'feminin', '17.99', 'Haut chemisier', 'haut.jpeg'),
(20, 'Pull de Sport', 'Pull', 'feminin', '17.99', 'Sport pour pull', 'photo3.jpeg'),
(21, 'jean Zlin', 'Jean', 'feminin', '18.99', 'C\'est un jean', 'photo4.jpeg'),
(22, 'Jean Fuzlo', 'Pull', 'feminin', '14.59', 'Soiree partout', 'photo5.jpeg'),
(24, 'Jean Derick', 'Jean', 'male', '14.58', 'Fais pour ca', 'photo6.jpeg'),
(25, 'Artisan', 'Jupe', 'male', '14.99', 'Ecossais', 'photo7.jpeg'),
(28, 'Yarli', 'Pull', 'male', '17.99', 'Excellent Pull', 'photo8.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mail` varchar(99) NOT NULL,
  `tagname` varchar(50) NOT NULL,
  `rang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `mail`, `tagname`, `rang`) VALUES
(0, 'Administrateur', '372eeffaba2b5b61fb02513ecb84f1ff', 'isimaster@isi.tn', 'Administrateur', 0),
(2, 'Yassine', '5bfe0c405c67de32b1de9ea40d093666', 'yassine@gmail.com', 'myetf', 1),
(3, 'Ismahene', 'c7e411e7a0a9ef48cd226bacbf142c47', 'ismahene@gmail.com', 'ismahene', 1),
(9, 'gillespenissar', '372eeffaba2b5b61fb02513ecb84f1ff', 'gille@isi.com', 'gillespenissard', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
