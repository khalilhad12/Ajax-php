-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 20 mars 2023 à 23:08
-- Version du serveur :  5.7.31
-- Version de PHP : 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ajax23`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `civilite` varchar(4) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `tel` int(10) UNSIGNED ZEROFILL NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `civilite`, `nom`, `prenom`, `email`, `photo`, `tel`) VALUES
(1, 'Mlle', 'Tahiri', 'Fatima Zahrae', 'tahiri@gmail.com', 'tahiri.png', 0111111111),
(2, 'Mr', 'Yahya', 'Ahmed', 'yahya@yahoo.fr', 'yahya.png', 0147852369),
(3, 'Mlle', 'Tahiri', 'Fatima Zahrae', 'tahiri@gmail.com', 'tahiri.png', 0123654789),
(5, 'Mme', 'Farah', 'Saida', 'farah@laposte.net', 'farah.jpg', 0987456321),
(6, 'Mlle', 'Dadi', 'Latifa', 'latifa@yahoo.fr', 'latifa.jpg', 0369852147),
(7, 'Mr', 'test', 'test', 'test@gmail.com', 'test.jpg', 0111111111);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
