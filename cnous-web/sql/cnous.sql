-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 03 Mars 2016 à 15:42
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cnous`
--

-- --------------------------------------------------------

--
-- Structure de la table `cn_data`
--

CREATE TABLE IF NOT EXISTS `cn_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(50) NOT NULL,
  `raw_text` text NOT NULL,
  `text_area_name` varchar(50) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `cn_data`
--

INSERT INTO `cn_data` (`id`, `page_name`, `raw_text`, `text_area_name`, `text`) VALUES
(1, 'info_message', 'info_message', 'info_message_text_1', '<h2 style="border-bottom:1px solid #17954c;color:#17954c;font-size::200%;font-weight:bold;text-align:left;"><strong>info_message_textdfsdfsdfs</strong></h2>\r\n\r\n<p>qsqsq</p>\r\n'),
(2, 'realisation_message', 'realisation_message', 'realisation_message_text_1', 'realisation_message_text_1'),
(3, 'situation_message', 'situation_message', 'situation_message_text_1', 'situation_message_text_1'),
(4, 'cadeau_message', 'cadeau_message', 'cadeau_message_text_1', 'cadeau_message_text_1'),
(5, 'garanties_message', 'garanties_message', 'garanties_message_text_1', 'garanties_message_text_1'),
(6, 'travail_message', 'travail_message', 'travail_message_text_1', 'travail_message_text_1'),
(7, 'welcome_message', 'welcome_message', 'welcome_message_text_1', 'welcome_message_text_1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
