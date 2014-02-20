-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 20 Février 2014 à 04:35
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ilab`
--
CREATE DATABASE IF NOT EXISTS `ilab` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ilab`;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `auteur_comment` varchar(255) NOT NULL,
  `date_comment` datetime NOT NULL,
  `content_comment` text NOT NULL,
  `id_projet_comment` int(11) NOT NULL,
  PRIMARY KEY (`id_comment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `id_profil` int(11) NOT NULL AUTO_INCREMENT,
  `id_user_profil` int(11) NOT NULL,
  `blocked_user_profil` text NOT NULL,
  `projet_filter_profil` varchar(255) NOT NULL,
  PRIMARY KEY (`id_profil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE IF NOT EXISTS `projet` (
  `id_projet` int(11) NOT NULL AUTO_INCREMENT,
  `titre_projet` varchar(255) NOT NULL,
  `date_remise_projet` date NOT NULL,
  `auteur_projet` int(11) NOT NULL,
  `professeur_projet` varchar(255) NOT NULL,
  `cours_projet` varchar(255) NOT NULL,
  `briefing_projet` text NOT NULL,
  PRIMARY KEY (`id_projet`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`id_projet`, `titre_projet`, `date_remise_projet`, `auteur_projet`, `professeur_projet`, `cours_projet`, `briefing_projet`) VALUES
(32, 'Test de fouuuu', '2014-02-28', 1, '', '', ''),
(33, 'hfgdhfdgh', '2014-02-25', 1, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `projet_gestion`
--

CREATE TABLE IF NOT EXISTS `projet_gestion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_projet` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `hidden_projet` tinyint(1) NOT NULL,
  `checked_projet` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Contenu de la table `projet_gestion`
--

INSERT INTO `projet_gestion` (`id`, `id_projet`, `id_user`, `hidden_projet`, `checked_projet`) VALUES
(33, 33, 1, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

CREATE TABLE IF NOT EXISTS `tache` (
  `id_tache` int(11) NOT NULL AUTO_INCREMENT,
  `id_projet_tache` int(11) DEFAULT NULL,
  `titre_tache` varchar(255) NOT NULL,
  `date_remise_tache` date NOT NULL,
  `auteur_tache` int(11) NOT NULL,
  `checked_tache` tinyint(1) NOT NULL,
  `deleted_tache` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_tache`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `tache`
--

INSERT INTO `tache` (`id_tache`, `id_projet_tache`, `titre_tache`, `date_remise_tache`, `auteur_tache`, `checked_tache`, `deleted_tache`) VALUES
(3, NULL, 'Test 1', '2014-02-22', 1, 0, 0),
(4, NULL, 'Test 2', '2014-02-26', 1, 0, 0),
(5, NULL, 'Test 3', '2014-02-23', 1, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `prenom_user` varchar(255) NOT NULL,
  `nom_user` varchar(255) NOT NULL,
  `classe_user` varchar(255) NOT NULL,
  `login_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `last_login_user` datetime NOT NULL,
  `loged_jeton_user` varchar(255) NOT NULL,
  `url_img_user` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `prenom_user`, `nom_user`, `classe_user`, `login_user`, `password_user`, `last_login_user`, `loged_jeton_user`, `url_img_user`) VALUES
(1, 'GrÃ©gory', 'Meis', '3tid2', 'gregory.meis', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', '0000-00-00 00:00:00', '', 'test'),
(2, 'Antoine', 'Gouin', '3tid2', 'antoine.gouin', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', '0000-00-00 00:00:00', '', 'test'),
(3, 'Antonin', 'Lambinet', '3tid2', 'antonin.lambinet', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', '0000-00-00 00:00:00', '', 'test'),
(4, 'Adrien', 'Labigne', '3tid2', 'adrien.labigne', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', '0000-00-00 00:00:00', '', 'test'),
(10, 'user', 'prof', '3tid2', 'user.prof', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', '0000-00-00 00:00:00', '', 'test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
