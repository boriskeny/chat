-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.7.26 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour userm
CREATE DATABASE IF NOT EXISTS `userm` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `userm`;

-- Listage de la structure de la table userm. message
CREATE TABLE IF NOT EXISTS `message` (
  `id_mess` int(11) NOT NULL AUTO_INCREMENT,
  `mess` longtext NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mess`),
  KEY `FK_message_user` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Listage des données de la table userm.message : 9 rows
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` (`id_mess`, `mess`, `id_user`) VALUES
	(1, 'bbjjbjgjgj', 1),
	(2, 'bonjour', 2),
	(3, '', 0),
	(4, 'dedededededed', 0),
	(5, 'dedededededed', 0),
	(6, 'dedededededed', 0),
	(7, 'ldlldldldl', 1),
	(8, 'cldcldlcldcdc', 1),
	(9, 'message', 2);
/*!40000 ALTER TABLE `message` ENABLE KEYS */;

-- Listage de la structure de la table userm. user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Listage des données de la table userm.user : 3 rows
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `login`) VALUES
	(1, 'boriskeny'),
	(2, 'dede'),
	(3, 'boriskeny');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
