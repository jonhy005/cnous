-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 04 Mars 2016 à 09:30
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
-- Structure de la table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('f9e53ecfd63b144622a1b6390ec11c69f19cb636', '127.0.0.1', 1457075119, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373037343836383b656469744d6f64657c623a303b),
('0c04408660539c5a4197074c8cf923ce3910dd11', '127.0.0.1', 1457075423, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373037353132343b656469744d6f64657c623a303b),
('321988ca696befaffcac38586409862e5224433c', '127.0.0.1', 1457075282, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373037353238323b656469744d6f64657c623a303b),
('8f97a4757baea8c3bb9cbbc79ad63dcfc9806c06', '127.0.0.1', 1457075439, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373037353433353b656469744d6f64657c623a303b),
('6381766f01c3744680740fffcc3c85001dc76304', '127.0.0.1', 1457075937, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373037353733363b656469744d6f64657c623a313b),
('6be6c6fada73cf17bebc3ccd47d544783f599e6b', '127.0.0.1', 1457075912, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373037353838393b656469744d6f64657c623a303b),
('5428c6224693665207c978b3b4b4234a552c9114', '127.0.0.1', 1457076528, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373037363532313b656469744d6f64657c623a313b),
('1c376589aac63f32725473e4a7529b26c98928e3', '127.0.0.1', 1457077084, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373037363934333b656469744d6f64657c623a313b),
('5f66f64ac1ffc113ceef0fb30baeda48c040abe4', '127.0.0.1', 1457077697, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373037373432323b656469744d6f64657c623a313b),
('2bd03267380f6c1cb6bc6c1d25c55fac3671657e', '127.0.0.1', 1457078102, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373037373832323b656469744d6f64657c623a313b),
('9d80e6998b4ac3b966113b5b5131ef03cfe9bee4', '127.0.0.1', 1457078604, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373037383334353b656469744d6f64657c623a313b),
('63ca1ecd20a4b27bc95da7d5068bf537afa65538', '127.0.0.1', 1457078955, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373037383637353b656469744d6f64657c623a303b),
('a9a25e40a4093358bc6872e316bf930dc3792907', '127.0.0.1', 1457079484, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373037393237353b656469744d6f64657c623a313b),
('fded7f4fb3a2215b56599412de4aa9214fa36721', '127.0.0.1', 1457079979, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373037393638383b656469744d6f64657c623a313b),
('c25b0a19a4e4a41751a1f639aa839982dd16f938', '127.0.0.1', 1457080191, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373037393939383b656469744d6f64657c623a303b);

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
(1, 'info_message', 'info_message', 'info_message_text_1', '<h2>Qui sommes-nous</h2>\r\n\r\n<p>Et bien pour r&eacute;pondre &agrave; la question &laquo; qui se cache derri&egrave;re le logo C&rsquo;Nous ? &raquo; nous allons nous pr&eacute;senter&hellip; Nous sommes un jeune couple (enfin tout est relatif&hellip;) avec des passions communes, le d&eacute;sir de retour &agrave; des moments simples, naturels, de plaisirs partag&eacute;s. Amoureux de la nature, de grands espaces, ma moiti&eacute; m&rsquo;a partag&eacute; le plaisir de cuisiner, et je lui ai fait re-d&eacute;couvrir le plaisir de la cueillette et le go&ucirc;t naturel des aliments que nous consommons. Notre petite famille s&rsquo;est ensuite agrandie et il nous est paru logique de transmettre, de partager, tout en restant en accord avec la soci&eacute;t&eacute; qui nous entoure, cette mani&egrave;re de penser &agrave; nos enfants. Outre l&rsquo;aspect sant&eacute;, non n&eacute;gligeable, l&rsquo;utilisation des produits que nous offre la nature qui nous entoure, l&rsquo;&eacute;change de notre exp&eacute;rience sont autant de valeurs qui nous sont importantes. Nous avions d&egrave;s lors envie faire plaisir et de partager nos pr&eacute;parations &laquo; maison &raquo; avec nos proches, mais aussi avec vous, que nous ne connaissons peut &ecirc;tre pas encore. Alors voil&agrave;, n&rsquo;h&eacute;sitez pas, venez pousser la porte et vous laisser tenter.</p>\r\n\r\n<p>Au plaisir de vous rencontrer.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(2, 'realisation_message', 'realisation_message', 'realisation_message_text_1', '<ul>\r\n	<li>\r\n	<h1>Confitures</h1>\r\n\r\n	<p>Des confitures naturelles, sans colorant, ni conservateurs, ni de ar&ocirc;mes artificiels, un go&ucirc;t authentique, subtil parfois, mais qui ne vous laissera pas indiff&eacute;rent&hellip; Des conditionnements de 210 ml, pour pouvoir y revenir, sans s&rsquo;en lasser, et varier les plaisirs. Tous nos produits sont &agrave; conserver au frais et &agrave; consommer rapidement apr&egrave;s ouverture.</p>\r\n\r\n	<ul>\r\n		<li>\r\n		<h2>Les classiques</h2>\r\n		</li>\r\n		<li>\r\n		<h2>Les d&eacute;couvertes</h2>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<h1>Les tapenades</h1>\r\n	</li>\r\n</ul>\r\n'),
(3, 'situation_message', 'situation_message', 'situation_message_text_1', '<h1>Nos points de vente</h1>\r\n\r\n<h2>O&ugrave; nous trouver ?</h2>\r\n\r\n<p>Par internet, via notre site : Vous pouvez nous contacter, et commander en ligne. Nous vous r&eacute;pondrons dans les meilleurs d&eacute;lais et en fonction des commandes, nous vous donnerons la date &agrave; laquelle votre commande sera pr&ecirc;te. Vous pourrez venir rechercher votre commande soit &agrave; notre domicile, soit, si vous le souhaitez ou ne pouvez pas vous d&eacute;placer, nous livrons &agrave; domicile dans un rayon de 5 km autour d&rsquo;Arlon. Soit directement nous rendre visite et retirer votre commande &agrave; notre domicile.</p>\r\n\r\n<h2>Contactez-nous</h2>\r\n\r\n<p>Pour nous contacter, c&rsquo;est tr&egrave;s simple, par e-mail ou par t&eacute;l&eacute;phone, nous serons ravis de vous rencontrer, de vous aiguiller si possible et d&rsquo;avoir votre avis et vos suggestions en retour.</p>\r\n\r\n<p>C&rsquo;Nous 21, Rue de Clairefontaine 6700 Arlon Belgique</p>\r\n\r\n<p><strong>T&eacute;l&eacute;phone:</strong>+32 472.46.17.16</p>\r\n\r\n<p>Suivez notre petite aventure sur Facebook</p>\r\n'),
(4, 'cadeau_message', 'cadeau_message', 'cadeau_message_text_1', '<h1>Une envie cadeau</h1>\r\n\r\n<p>Vous d&eacute;sirez faire plaisir pour l&rsquo;une ou l&rsquo;autre occasion, n&rsquo;h&eacute;sitez pas, nous vous proposons plusieurs formules et seront ravis de r&eacute;aliser pour vous une petite composition en fonction de votre demande.</p>\r\n'),
(5, 'garanties_message', 'garanties_message', 'garanties_message_text_1', '<h1>Notre garantie</h1>\r\n\r\n<p>Tous nos produits sont garantis artisanaux, r&eacute;alis&eacute;s en Belgique, sans ajout de colorant artificiel, ni conservateur. Pour la conservation de nos confitures, nous n&rsquo;utilisons que du citron. Afin de garder un maximum le go&ucirc;t des ingr&eacute;dients, nous mettons volontairement moins de sucre et de mati&egrave;res grasses dans nos pr&eacute;parations, que les produits traditionnels de la grande distribution. Tous nos produits sont &agrave; conserver au frais, jusqu&rsquo;&agrave; 12 mois, et &agrave; consommer rapidement apr&egrave;s ouverture. N&rsquo;h&eacute;sitez pas &agrave; nous faire part de vos suggestions et de revenir vers nous si ceux-ci ne satisfont pas &agrave; nos exigences en termes de conservation et de go&ucirc;t.</p>\r\n'),
(6, 'travail_message', 'travail_message', 'travail_message_text_1', '<h1>Notre travail</h1>\r\n\r\n<h2>Fruits et l&eacute;gumes de saison</h2>\r\n\r\n<div class="content">\r\n<p>Nous essayons de vous proposer des saveurs de saison, si possible cueillis ou ramass&eacute;s dans notre r&eacute;gion, et des ingr&eacute;dients les plus sains possible. Cependant, nous avons la possibilit&eacute;, en fonction des r&eacute;coltes pr&eacute;c&eacute;dentes de vous faire d&eacute;guster des recettes &agrave; base d&rsquo;autres fruits ou l&eacute;gumes que ceux actuellement de saison. Pour les amateurs qui sont pr&ecirc;ts &agrave; se laisser tenter par des go&ucirc;ts un peu diff&eacute;rents, notre glissons dans notre chaudron quelques &eacute;pices et aromates qui ensorcelleront vos papilles. Voici un petit aper&ccedil;u des l&eacute;gumes et fruits que nous utilisons en fonction des saisons :</p>\r\n\r\n<ul>\r\n	<li>Printemps : les fraises, noix, pommes, poires, les carottes, carottes,&hellip;</li>\r\n	<li>Et&eacute; : le cassis, les framboises, fraises, griottes, mirabelles, groseilles, m&ucirc;res, myrtilles, prunes, pommes, poires, abricots, figues, les carottes, aubergines, oignons, poivrons, pommes-de-terre,&hellip;</li>\r\n	<li>Automne : les pommes, poires, bananes, coings, ch&acirc;taignes, les carottes, potirons, potimarrons, pommes-de-terre,&hellip;</li>\r\n	<li>Hiver : les pommes, poires, oranges, cl&eacute;mentines, citrons, bananes, kiwis, pamplemousse, noix, les carottes,&hellip;</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>Calendrier des fruits et l&eacute;gumes de saison.</h3>\r\n\r\n<div class="content"><img src="/cnous-web/images/calendar/janvier.jpg" style="height:200px; margin-bottom:5px; margin-top:5px; width:300px" /> <img src="/cnous-web/images/calendar/fevrier.jpg" style="float:left; height:202px; margin-bottom:5px; margin-top:5px; width:300px" /> <img src="/cnous-web/images/calendar/mars.jpg" style="height:201px; margin-bottom:5px; margin-top:5px; width:300px" /> <img src="/cnous-web/images/calendar/avril.jpg" style="height:200px; margin-bottom:5px; margin-top:5px; width:300px" /> <img src="/cnous-web/images/calendar/mai.jpg" style="height:202px; margin-bottom:5px; margin-top:5px; width:300px" /> <img src="/cnous-web/images/calendar/juin.jpg" style="height:201px; margin-bottom:5px; margin-top:5px; width:300px" /> <img src="/cnous-web/images/calendar/juillet.jpg" style="height:202px; margin-bottom:5px; margin-top:5px; width:300px" /> <img src="/cnous-web/images/calendar/aout.jpg" style="height:201px; margin-bottom:5px; margin-top:5px; width:300px" /> <img src="/cnous-web/images/calendar/septembre.jpg" style="height:203px; margin-bottom:5px; margin-top:5px; width:300px" /> <img src="/cnous-web/images/calendar/octobre.jpg" style="height:209px; margin-bottom:5px; margin-top:5px; width:300px" /> <img src="/cnous-web/images/calendar/novembre.jpg" style="height:203px; margin-bottom:5px; margin-top:5px; width:300px" /> <img src="/cnous-web/images/calendar/decembre.jpg" style="height:201px; margin-bottom:5px; margin-top:5px; width:300px" /></div>\r\n'),
(7, 'welcome_message', 'welcome_message', 'welcome_message_text_1', 'welcome_message_text_1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
