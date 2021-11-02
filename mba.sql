/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.38-MariaDB : Database - mba
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mba` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mba`;

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(100) DEFAULT NULL,
  `gambar` text,
  `status` int(11) DEFAULT NULL,
  `date_upload` datetime DEFAULT NULL,
  `date_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

insert  into `kategori`(`id_kategori`,`kategori`,`gambar`,`status`,`date_upload`,`date_update`) values 
(3,'Action','',1,'2021-10-26 08:54:06','2021-10-31 12:26:38'),
(4,'Arcade','',1,'2021-10-26 10:22:31','2021-10-31 12:26:38'),
(5,'Racing','',1,'2021-10-26 10:26:53','2021-10-31 12:26:38'),
(6,'Survival',NULL,1,'2021-10-31 12:26:38','2021-10-31 12:26:38'),
(7,'Strategi',NULL,1,'2021-10-31 12:26:38','2021-10-31 12:26:38'),
(8,'Sport',NULL,1,'2021-10-31 12:26:38','2021-10-31 12:26:38'),
(9,'Simulation',NULL,1,'2021-10-31 12:26:38','2021-10-31 12:26:38'),
(10,'Role Play',NULL,1,'2021-10-31 12:26:38','2021-10-31 12:26:38'),
(11,'Puzzel',NULL,1,'2021-10-31 12:26:38','2021-10-31 12:26:38'),
(12,'Casual',NULL,1,'2021-10-31 12:26:38','2021-10-31 12:26:38'),
(13,'Musik',NULL,1,'2021-10-31 12:26:38','2021-10-31 12:26:38'),
(14,'RPG',NULL,1,'2021-10-31 12:26:38','2021-10-31 12:26:38');

/*Table structure for table `post` */

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(2) DEFAULT NULL,
  `kategori` int(2) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `versi` varchar(20) DEFAULT NULL,
  `deskripsi_singkat` text,
  `deskripsi` text,
  `link` text,
  `gambar` varchar(100) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `date_upload` datetime DEFAULT NULL,
  `date_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `post` */

insert  into `post`(`id_post`,`id_kategori`,`kategori`,`judul`,`versi`,`deskripsi_singkat`,`deskripsi`,`link`,`gambar`,`status`,`date_upload`,`date_update`) values 
(1,3,1,'Judul game 1',NULL,'Deskripsi Singkat 1','<p>Deskripsi 1</p>\r\n','link 1','http://localhost/ModBoyApps/source/APPS/01.jpg',1,'2021-10-26 09:56:28','2021-10-28 08:10:58'),
(2,2,2,'Judul app 1v',NULL,'Deskripsi Singkat','<p>Deskripsi</p>\r\n','','http://localhost/ModBoyApps/source/APPS/05.jpg',1,'2021-10-26 10:26:34','2021-10-28 08:27:22'),
(5,NULL,2,'Apps',NULL,'appsv','<p>app</p>\r\n','app','http://localhost/ModBoyApps/source/APPS/05.jpg',1,'2021-10-26 11:45:21','2021-10-28 08:27:28'),
(6,5,1,'Judul Game 2',NULL,'Game 2','<p>Game 2</p>\r\n','link 2','http://localhost/ModBoyApps/source/APPS/02.jpg',1,'2021-10-27 11:56:44','2021-10-28 08:10:53'),
(7,5,1,'Judul Game 3',NULL,'game 3','<p>game 3</p>\r\n','link 3','http://localhost/ModBoyApps/source/APPS/03.jpg',1,'2021-10-27 12:00:58','2021-10-28 07:29:03'),
(8,3,1,'Judul Game 21',NULL,'ssss','<p><img alt=\"\" src=\"http://localhost/ModBoyApps/source/Capture.png\" style=\"height:206px; width:500px\" /></p>\r\n\r\n<p>ffdsfgsdfgdfgkdfgdfgdf</p>\r\n','sdfsdf','http://localhost/ModBoyApps/source/APPS/04.jpg',1,'2021-10-28 06:58:55','2021-10-28 07:29:11');

/*Table structure for table `slide` */

DROP TABLE IF EXISTS `slide`;

CREATE TABLE `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slide_pertama` varchar(10) DEFAULT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `deskripsi` text,
  `gambar` text,
  `status` int(2) DEFAULT NULL,
  `date_upload` datetime DEFAULT NULL,
  `date_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `slide` */

insert  into `slide`(`id`,`slide_pertama`,`judul`,`deskripsi`,`gambar`,`status`,`date_upload`,`date_update`) values 
(1,'active','Judul Slide 1','<p>deskripsi</p>\r\n','http://localhost/ModBoyApps/source/SLIDE/01.jpg',1,'2021-10-27 12:28:27','2021-10-28 07:09:49'),
(2,'non_active','Judul Slide 2','<p>Deskripsi 2</p>\r\n','http://localhost/ModBoyApps/source/SLIDE/02.jpg',1,'2021-10-27 07:53:52','2021-10-28 07:13:51'),
(3,'non_active','Judul Slide 3','<p>Deskripsi 3</p>\r\n','http://localhost/ModBoyApps/source/SLIDE/03.jpg',1,'2021-10-27 07:55:56','2021-10-28 07:14:02'),
(4,'non_active','Judul Slide 4','<p>Deskripsi 4</p>\r\n','http://localhost/ModBoyApps/source/SLIDE/04.jpg',1,'2021-10-27 07:56:25','2021-10-28 07:25:32');

/*Table structure for table `tb_log` */

DROP TABLE IF EXISTS `tb_log`;

CREATE TABLE `tb_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(20) DEFAULT NULL,
  `nama` text,
  `kategori` varchar(20) DEFAULT NULL,
  `tanggal` int(2) DEFAULT NULL,
  `bulan` varchar(15) DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_log` */

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(20) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `katerangan` enum('Guru','Siswa') DEFAULT NULL,
  `status` enum('1','0') DEFAULT '1',
  `foto` text,
  `akses` enum('1','0') DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id`,`id_user`,`username`,`password`,`nama`,`email`,`katerangan`,`status`,`foto`,`akses`) values 
(10,10,'feri','4c850dbd4128e75d16f407a9188e2aab','Feri Pebriansah Nugraha','feripebriansah@gmail.com',NULL,'1',NULL,'1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
