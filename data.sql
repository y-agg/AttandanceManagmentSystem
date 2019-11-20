/*
SQLyog Community Edition- MySQL GUI v5.22a
Host - 5.0.19-nt : Database - dbattandance
*********************************************************************
Server version : 5.0.19-nt
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `dbattandance`;

USE `dbattandance`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `uname` varchar(100) default NULL,
  `pwd` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`uname`,`pwd`) values ('a','a');

/*Table structure for table `attandance` */

DROP TABLE IF EXISTS `attandance`;

CREATE TABLE `attandance` (
  `sname` varchar(100) default NULL,
  `pstatus` varchar(100) default NULL,
  `course` varchar(100) default NULL,
  `sem` varchar(100) default NULL,
  `date` varchar(100) default NULL,
  `tname` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `attandance` */

insert  into `attandance`(`sname`,`pstatus`,`course`,`sem`,`date`,`tname`) values ('a','P','BCA','SEM-1','2015-10-06 14:25:40','d'),('ravi','P','BCA','SEM-1','2015-10-06 16:06:01','d');

/*Table structure for table `attandancenoti` */

DROP TABLE IF EXISTS `attandancenoti`;

CREATE TABLE `attandancenoti` (
  `sname` varchar(100) default NULL,
  `pstatus` varchar(100) default NULL,
  `course` varchar(100) default NULL,
  `sem` varchar(100) default NULL,
  `date` varchar(100) default NULL,
  `tname` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `attandancenoti` */

insert  into `attandancenoti`(`sname`,`pstatus`,`course`,`sem`,`date`,`tname`) values ('aa',' ghgj jh jk hj gghj ghj gjjhhjh gjhgjh gj','BCA','SEM-1','2015-10-06 14:27:07','d'),('ravi','your attandance is short','BCA','SEM-1','2015-10-06 16:06:45','d');

/*Table structure for table `faq` */

DROP TABLE IF EXISTS `faq`;

CREATE TABLE `faq` (
  `faqid` varchar(100) default NULL,
  `name` varchar(100) default NULL,
  `faqdetails` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `faq` */

insert  into `faq`(`faqid`,`name`,`faqdetails`) values ('5002','jh','jhj');

/*Table structure for table `marksdetails` */

DROP TABLE IF EXISTS `marksdetails`;

CREATE TABLE `marksdetails` (
  `tname` varchar(100) default NULL,
  `sname` varchar(100) default NULL,
  `enroll` varchar(100) default NULL,
  `course` varchar(100) default NULL,
  `sem` varchar(100) default NULL,
  `marks` varchar(100) default NULL,
  `aggre` varchar(100) default NULL,
  `attachement` mediumtext,
  `msg_date` varchar(100) default NULL,
  `a7` varchar(100) default NULL,
  `a8` varchar(100) default NULL,
  `a9` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `marksdetails` */

insert  into `marksdetails`(`tname`,`sname`,`enroll`,`course`,`sem`,`marks`,`aggre`,`attachement`,`msg_date`,`a7`,`a8`,`a9`) values ('d','aa','55','BCA','SEM-1','678','A+','attachement_f2016124732.jpg','2016-05-09 16:17:32','55','55','55');

/*Table structure for table `reply` */

DROP TABLE IF EXISTS `reply`;

CREATE TABLE `reply` (
  `faqid` varchar(100) default NULL,
  `name` varchar(100) default NULL,
  `faqdetails` varchar(100) default NULL,
  `reply` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `reply` */

insert  into `reply`(`faqid`,`name`,`faqdetails`,`reply`) values ('5002','jh','jhj','df dfdfd');

/*Table structure for table `signup` */

DROP TABLE IF EXISTS `signup`;

CREATE TABLE `signup` (
  `sid` varchar(100) default NULL,
  `uname` varchar(100) default NULL,
  `pwd` varchar(100) default NULL,
  `fname` varchar(100) default NULL,
  `lname` varchar(100) default NULL,
  `gender` varchar(100) default NULL,
  `dob` varchar(100) default NULL,
  `mob` varchar(100) default NULL,
  `email` varchar(100) default NULL,
  `address` varchar(100) default NULL,
  `city` varchar(100) default NULL,
  `pin` varchar(100) default NULL,
  `state` varchar(100) default NULL,
  `country` varchar(100) default NULL,
  `course` varchar(100) default NULL,
  `semester` varchar(100) default NULL,
  `tname` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `signup` */

insert  into `signup`(`sid`,`uname`,`pwd`,`fname`,`lname`,`gender`,`dob`,`mob`,`email`,`address`,`city`,`pin`,`state`,`country`,`course`,`semester`,`tname`) values ('1003','aa','aa','f','dsd','Male','06-10-2015','445','pramod@gmail.com','fdd','Select','','','Select','CS','SEM-1','Select'),('1004','ravi','ravi','Ravi','Kumar','Male','01-10-1997','9865322154','pramod@gmail.com','new delhi','Delhi','9856','Delhi','India','CS','SEM-1','d'),('1005','Prabhjot','p','f','Dhamija','Male','01-06-2016','9999836563','prab1995@gmail.com','1234 kb','Delhi','110005','new delhi','India','Civil','SEM-6','d');

/*Table structure for table `teacher` */

DROP TABLE IF EXISTS `teacher`;

CREATE TABLE `teacher` (
  `sid` varchar(100) default NULL,
  `uname` varchar(100) default NULL,
  `pwd` varchar(100) default NULL,
  `fname` varchar(100) default NULL,
  `lname` varchar(100) default NULL,
  `gender` varchar(100) default NULL,
  `dob` varchar(100) default NULL,
  `mob` varchar(100) default NULL,
  `email` varchar(100) default NULL,
  `address` varchar(100) default NULL,
  `city` varchar(100) default NULL,
  `pin` varchar(100) default NULL,
  `state` varchar(100) default NULL,
  `country` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `teacher` */

insert  into `teacher`(`sid`,`uname`,`pwd`,`fname`,`lname`,`gender`,`dob`,`mob`,`email`,`address`,`city`,`pin`,`state`,`country`) values ('4002',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('4003','d','d','d','d','Male','06-10-2015','9865322154','pramod@gmail.com','','Select','','','Select');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
