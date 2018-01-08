-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 06 jan. 2018 à 09:37
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `membre`
--

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(90) NOT NULL,
  `lastname` varchar(90) NOT NULL,
  `birth_year` varchar(15) NOT NULL,
  `native_country` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `authors_books`
--

DROP TABLE IF EXISTS `authors_books`;
CREATE TABLE IF NOT EXISTS `authors_books` (
  `book_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `overview` text NOT NULL,
  `availability` varchar(11) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `publication_date` varchar(10) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `connectes`
--

DROP TABLE IF EXISTS `connectes`;
CREATE TABLE IF NOT EXISTS `connectes` (
  `ip` varchar(15) NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `connectes`
--

INSERT INTO `connectes` (`ip`, `timestamp`) VALUES
('::1', 1515231253);

-- --------------------------------------------------------

--
-- Structure de la table `info_message`
--

DROP TABLE IF EXISTS `info_message`;
CREATE TABLE IF NOT EXISTS `info_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info` text NOT NULL,
  `statut` int(11) NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `info_message`
--

INSERT INTO `info_message` (`id`, `info`, `statut`, `link`) VALUES
(1, 'Bienvenue sur le site Test MVC !!<br>Ce site fonctionne avec un nouveau design pattern de ma propre conception<br> mon cerveau torduuuuuu met du temps a se mettre en route.<br>mais quand il est en route plus rien de ne l\'arrete<br>venez jouer sur le jeu dont je suis admin<br>', 1, 'http://moon-xnova.org');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `type_droit` int(1) NOT NULL,
  `date_naissance` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `date_enregistrement` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `pseudo`, `pass`, `email`, `type_droit`, `date_naissance`, `date_enregistrement`) VALUES
(1, 'oziris', '0f3ea7b8c4b7f8ed0e46dd1de11acc4bc3e57faf', 'o_ziris@hotmail.com', 0, '10/12/1974', '2017-12-27 01:15:23'),
(4, 'toto', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 'to@to.fr', 1, '15/12/2011', '2017-12-23 19:18:44'),
(9, 'AuberGIne', '026ccaa15edfeb5832120a2588f7d04cffec72b4', 'au@ber.gine', 1, '10/01/1945', '2017-12-24 19:04:14'),
(11, 'courgette', '1f30d53f1df6af5c41618a2f04431a31a827d2b2', 'courg@gmail.com', 2, '25/07/1999', '2017-12-24 19:09:57'),
(13, 'gabriel', '18a98c35f49808b45edadc75fb1b25ebfd4037d6', 'gab@gab.com', 1, '15/12/2011', '2017-12-28 17:52:19'),
(14, 'Dwaps', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'dwaps@dwaps.fr', 0, '05/12/2017', '2018-01-01 09:06:16');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
