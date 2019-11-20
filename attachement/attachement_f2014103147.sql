/*
SQLyog Community Edition- MySQL GUI v5.22a
Host - 5.0.77-community-nt : Database - videostanography
*********************************************************************
Server version : 5.0.77-community-nt
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `videostanography`;

USE `videostanography`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `cus_records` */

DROP TABLE IF EXISTS `cus_records`;

CREATE TABLE `cus_records` (
  `cus_no` varchar(100) default NULL,
  `name` varchar(100) default NULL,
  `gender` varchar(100) default NULL,
  `dob` varchar(100) default NULL,
  `contact_no` varchar(100) default NULL,
  `email` varchar(100) default NULL,
  `address` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cus_records` */

insert  into `cus_records`(`cus_no`,`name`,`gender`,`dob`,`contact_no`,`email`,`address`) values ('1','pramod','Male','03-Mar-1982','9856231245','pramod@gmail.com','jhajha');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `uname` varchar(100) default NULL,
  `pwd` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`uname`,`pwd`) values ('A','A'),('gunjan','batra'),('tushank','bhardwaj'),('sumit','soni');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
