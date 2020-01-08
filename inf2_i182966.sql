-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 08 jan. 2020 à 17:08
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `inf2_i182966`
--

-- --------------------------------------------------------

--
-- Structure de la table `acces`
--

DROP TABLE IF EXISTS `acces`;
CREATE TABLE IF NOT EXISTS `acces` (
  `Id_Us` int(11) NOT NULL,
  `Id_Li` int(11) NOT NULL,
  `Acces_Li` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Us`,`Id_Li`),
  KEY `Id_Li` (`Id_Li`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `acces`
--

INSERT INTO `acces` (`Id_Us`, `Id_Li`, `Acces_Li`) VALUES
(1, 17, 'createur');

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

DROP TABLE IF EXISTS `activite`;
CREATE TABLE IF NOT EXISTS `activite` (
  `Id_El` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_El` varchar(50) DEFAULT NULL,
  `Desc_El` varchar(255) DEFAULT NULL,
  `Date_El` date NOT NULL,
  `Close_El` tinyint(1) DEFAULT NULL,
  `Id_Li` int(11) NOT NULL,
  PRIMARY KEY (`Id_El`),
  KEY `Id_Li` (`Id_Li`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`Id_El`, `Nom_El`, `Desc_El`, `Date_El`, `Close_El`, `Id_Li`) VALUES
(13, 'MANGER', 'Et le mmatin aussi !\r\n', '2019-11-24', 0, 17),
(14, 'coder', 'Une petite description ici. ', '2019-11-01', 0, 17),
(12, 'MANGER', 'juste le soir hein !', '2019-11-24', 0, 17);

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `Id_Us` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Us` varchar(50) DEFAULT NULL,
  `Pass_Us` varchar(50) DEFAULT NULL,
  `Desc_Us` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Us`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`Id_Us`, `Nom_Us`, `Pass_Us`, `Desc_Us`) VALUES
(1, 'Wilhelm', 'Salles', 'AAAAAAAAAA'),
(2, 'Clément', 'Boussard', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `liste`
--

DROP TABLE IF EXISTS `liste`;
CREATE TABLE IF NOT EXISTS `liste` (
  `Id_Li` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Li` varchar(50) DEFAULT NULL,
  `Desc_Li` varchar(255) DEFAULT NULL,
  `Date_Li` date NOT NULL,
  PRIMARY KEY (`Id_Li`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `liste`
--

INSERT INTO `liste` (`Id_Li`, `Nom_Li`, `Desc_Li`, `Date_Li`) VALUES
(17, 'ZBeuB', 'Une petite description ici. ', '2019-11-30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
