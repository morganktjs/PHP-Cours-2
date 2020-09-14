CREATE DATABASE  IF NOT EXISTS `db_cours2` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `db_cours2`;

DROP TABLE IF EXISTS `tbl_class`;
CREATE TABLE `tbl_class` (
  `id_class` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_class`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tbl_class` VALUES (1,'Math'),(2,'Anglais'),(3,'Informatique');

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tbl_user` VALUES (1,'Lachance','Jean'),(2,'Mercier','Roger'),(3,'Lepetit','Frank');



/*!50003 DROP PROCEDURE IF EXISTS `get_all_users` */;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_all_users`()
BEGIN
	SELECT * FROM tbl_user;
END ;;
DELIMITER ;

/*!50003 DROP PROCEDURE IF EXISTS `get_user_by_id` */;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_user_by_id`(
	IN filter_id_user int
)
BEGIN
	SELECT * FROM tbl_user WHERE id_user = filter_id_user limit 1;
END ;;
DELIMITER ;

