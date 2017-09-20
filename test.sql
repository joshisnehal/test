/*
SQLyog Enterprise Trial - MySQL GUI v7.11 
MySQL - 5.5.5-10.1.26-MariaDB : Database - test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`test` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `test`;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` text,
  `mobile` varchar(12) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `company_size` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`mobile`,`company_name`,`designation`,`company_size`,`created_at`,`updated_at`) values (1,'Snehal Joshi','snehalj89@yahoo.com','$2y$10$xDhGCnu9HXQxVlMSqipZMubWJ70anaeLU6aN/xteNFdRA.uoqU1Ii','9769114818','Binary','Php developer','40-45','2017-09-20 15:17:39','2017-09-20 15:17:39'),(2,'Abhishek Kothekar','abhishek.kothekar@gmail.com','$2y$10$wPe2KcJS6/lNq0TLxO1GvO88ulx6Jgvo2BOCce9gepmQrv1HhpP4G','9833802902','CMI FPE','Dept Manager Purchase','400','2017-09-20 18:15:40','2017-09-20 18:15:40'),(3,'Onkar','onkar@yahoo.com','$2y$10$mjABGV7XHs9yyRKj.9bx1Ok6rgIiOU6Q4JltrskL2mGC.axfHGiXa','9769114819','Test','Test','45','2017-09-21 00:21:29','2017-09-21 00:21:29');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
