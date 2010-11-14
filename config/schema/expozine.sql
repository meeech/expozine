# Sequel Pro dump
# Version 2492
# http://code.google.com/p/sequel-pro
#
# Host: 127.0.0.1 (MySQL 5.1.36)
# Database: expozine
# Generation Time: 2010-11-13 19:59:59 -0500
# ************************************************************

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table app_exhibitors
# ------------------------------------------------------------

DROP TABLE IF EXISTS `app_exhibitors`;

CREATE TABLE `app_exhibitors` (
  `id` varchar(36) NOT NULL DEFAULT '',
  `year_id` varchar(36) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `contact` varchar(255) DEFAULT NULL,
  `phone` varchar(17) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(30) DEFAULT NULL,
  `postal` varchar(10) DEFAULT NULL,
  `web` varchar(255) DEFAULT NULL,
  `publish_address` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `publish_web` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `verified` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `days` varchar(4) NOT NULL DEFAULT '',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `catlivres` tinyint(1) DEFAULT NULL,
  `cataffiche` tinyint(1) DEFAULT NULL,
  `catautre` tinyint(1) DEFAULT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'en',
  `twitter` varchar(255) DEFAULT NULL,
  `confirmation_email` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table app_groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `app_groups`;

CREATE TABLE `app_groups` (
  `id` varchar(36) NOT NULL DEFAULT '',
  `title` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table app_sponsors
# ------------------------------------------------------------

DROP TABLE IF EXISTS `app_sponsors`;

CREATE TABLE `app_sponsors` (
  `id` varchar(36) NOT NULL DEFAULT '',
  `title` varchar(255) DEFAULT NULL,
  `web` varchar(255) DEFAULT NULL,
  `image_en` varchar(255) DEFAULT NULL,
  `image_fr` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table app_sponsors_years
# ------------------------------------------------------------

DROP TABLE IF EXISTS `app_sponsors_years`;

CREATE TABLE `app_sponsors_years` (
  `sponsor_id` char(36) DEFAULT NULL,
  `year_id` char(36) DEFAULT NULL,
  KEY `sponsor_id` (`sponsor_id`),
  KEY `year_id` (`year_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table app_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `app_users`;

CREATE TABLE `app_users` (
  `id` varchar(36) NOT NULL DEFAULT '',
  `group_id` varchar(36) NOT NULL DEFAULT '',
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table app_years
# ------------------------------------------------------------

DROP TABLE IF EXISTS `app_years`;

CREATE TABLE `app_years` (
  `id` char(36) NOT NULL DEFAULT '',
  `year` int(4) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;






/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
