-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 02 mai 2019 à 12:16
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projettest`
--

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `descri` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `categorie` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id`, `nom`, `photo`, `descri`, `prix`, `categorie`, `quantite`) VALUES
(1, 'le livre perdu', 'https://parismatch.be/app/uploads/2018/04/Macaca_nigra_self-portrait_large-e1524567086123-1100x715.jpg', 'livre roman qui parle d\'un truc perdu', 15, 1, 0),
(2, 'coco', 'http://localhost/projet/test_projet/picsbook/bd_coco.jpg', 'bd du film coco', 10, 1, 0),
(3, 'la femme du diable', 'http://localhost/projet/test_projet/picsbook/lafemmedudiable.jpg', 'une femme venale', 30, 1, 0),
(4, 'genesis', '/picsbook/photo_genesis.jpg', 'beau livre de photo de voyage', 40, 1, 0),
(5, 'zip zap', '\\picsbook\\zip-zap.jpg', 'zip zap apprend a s\'habiller', 5, 1, 0),
(7, 'dg', 'http://localhost/projet/test_projet/picsbook/intero.jpg', 'description ', 1, 1, 0),
(8, 'benoit', 'http://localhost/projet/test_projet/picsbook/intero.jpg', 'description ', 4, 1, 0),
(9, 'zer', 'http://localhost/projet/test_projet/picsbook/intero.jpg', 'descriptionzre', 4, 1, 5),
(10, 'pantin', 'http://localhost/projet/test_projet/picsbook/de97a34217abbc2ffac7d33eb551e5a8.jpg', 'lel', 69, 1, 5),
(11, 'testst', 'http://localhost/projet/test_projet/picsbook/58d664a3325e8660c821e550d640cf71.jpg', 'dgsfstgsfdsgfsdg', 1, 1, 5),
(12, 'dsqqsdttt', 'http://localhost/projet/test_projet/picsbook/eb3640adc630d49d8f56b97639d252a1.png', 'tt', 4, 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `id` int(11) NOT NULL,
  `categorie` int(11) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `editeur` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id`, `categorie`, `genre`, `auteur`, `editeur`, `type`) VALUES
(1, 1, 'amour', 'inc1', 'inc12', 'roman'),
(2, 1, 'enfant', 'pixar', 'disney', 'bd'),
(3, 1, 'amour', 'jesaispas', 'non plus', 'roman'),
(4, 1, 'voyage', 'photographe', 'albpho', 'album photo'),
(5, 1, 'educatif', 'auteur', 'anfant', 'livre pour enfant');

-- --------------------------------------------------------

--
-- Structure de la table `musique`
--

DROP TABLE IF EXISTS `musique`;
CREATE TABLE IF NOT EXISTS `musique` (
  `id` int(11) NOT NULL,
  `categorie` int(11) NOT NULL,
  `artiste` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sport et loisirs`
--

DROP TABLE IF EXISTS `sport et loisirs`;
CREATE TABLE IF NOT EXISTS `sport et loisirs` (
  `id` int(11) NOT NULL,
  `categorie` int(11) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `nomactivite` varchar(255) NOT NULL,
  `poids` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vetement`
--

DROP TABLE IF EXISTS `vetement`;
CREATE TABLE IF NOT EXISTS `vetement` (
  `id` int(11) NOT NULL,
  `categorie` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `taille` int(11) NOT NULL,
  `couleur` varchar(255) NOT NULL,
  `matiere` varchar(255) NOT NULL,
  `genre` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
