-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 20 mars 2020 à 11:31
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
-- Base de données :  `phpmmi`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$F53EA6btPKB.m2OUykFxF.Tz6pY3l8xf7DSj8k3UU2PcMKB74PA2K');

-- --------------------------------------------------------

--
-- Structure de la table `works`
--

DROP TABLE IF EXISTS `works`;
CREATE TABLE IF NOT EXISTS `works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `works`
--

INSERT INTO `works` (`id`, `title`, `description`) VALUES
(1, 'Titre 1', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisÃ©e Ã  titre provisoire pour calibrer une mise en page, le texte dÃ©finitif venant remplacer le faux-texte dÃ¨s qu\'il est prÃªt ou que la mise en page est achevÃ©e. GÃ©nÃ©ralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.'),
(2, 'Titre 2', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisÃ©e Ã  titre provisoire pour calibrer une mise en page, le texte dÃ©finitif venant remplacer le faux-texte dÃ¨s qu\'il est prÃªt ou que la mise en page est achevÃ©e. GÃ©nÃ©ralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.'),
(3, 'Titre 3', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisÃ©e Ã  titre provisoire pour calibrer une mise en page, le texte dÃ©finitif venant remplacer le faux-texte dÃ¨s qu\'il est prÃªt ou que la mise en page est achevÃ©e. GÃ©nÃ©ralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.'),
(4, 'Titre 4', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisÃ©e Ã  titre provisoire pour calibrer une mise en page, le texte dÃ©finitif venant remplacer le faux-texte dÃ¨s qu\'il est prÃªt ou que la mise en page est achevÃ©e. GÃ©nÃ©ralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.'),
(5, 'GNEUGNEUGNEU tg', 'ouiouioui J4AI 140 DE QI');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
