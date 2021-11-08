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
(3,'Action','http://localhost/ModBoyApps/source/KATEGORI/arcade.png',1,'2021-10-26 08:54:06','2021-10-31 12:26:38'),
(4,'Arcade','http://localhost/ModBoyApps/source/KATEGORI/arcade.png',1,'2021-10-26 10:22:31','2021-10-31 12:26:38'),
(5,'Racing','http://localhost/ModBoyApps/source/KATEGORI/arcade.png',1,'2021-10-26 10:26:53','2021-10-31 12:26:38'),
(6,'Survival','http://localhost/ModBoyApps/source/KATEGORI/arcade.png',1,'2021-10-31 12:26:38','2021-10-31 12:26:38'),
(7,'Strategi','http://localhost/ModBoyApps/source/KATEGORI/arcade.png',1,'2021-10-31 12:26:38','2021-10-31 12:26:38'),
(8,'Sport','http://localhost/ModBoyApps/source/KATEGORI/arcade.png',1,'2021-10-31 12:26:38','2021-10-31 12:26:38'),
(9,'Simulation','http://localhost/ModBoyApps/source/KATEGORI/arcade.png',1,'2021-10-31 12:26:38','2021-10-31 12:26:38'),
(10,'Role Play','http://localhost/ModBoyApps/source/KATEGORI/arcade.png',1,'2021-10-31 12:26:38','2021-11-03 02:56:46'),
(11,'Puzzel','http://localhost/ModBoyApps/source/KATEGORI/arcade.png',1,'2021-10-31 12:26:38','2021-11-03 02:57:09'),
(12,'Casual','http://localhost/ModBoyApps/source/KATEGORI/arcade.png',1,'2021-10-31 12:26:38','2021-10-31 12:26:38'),
(13,'Musik','http://localhost/ModBoyApps/source/KATEGORI/arcade.png',1,'2021-10-31 12:26:38','2021-10-31 12:26:38'),
(14,'RPG','http://localhost/ModBoyApps/source/KATEGORI/arcade.png',1,'2021-10-31 12:26:38','2021-10-31 12:26:38');

/*Table structure for table `meta` */

DROP TABLE IF EXISTS `meta`;

CREATE TABLE `meta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `description` text,
  `icon_32` text,
  `icon_128` text,
  `icon_192` text,
  `logo` varchar(50) DEFAULT NULL,
  `date_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `meta` */

insert  into `meta`(`id`,`title`,`description`,`icon_32`,`icon_128`,`icon_192`,`logo`,`date_update`) values 
(1,'ModBoyApk','ModBoyApk is a completely free website, we share games, android premium apps with high-quality mods','32','128','192',NULL,'2021-11-04 11:35:33');

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
  `url` varchar(100) DEFAULT NULL,
  `alfabet` varchar(5) DEFAULT NULL,
  `date_upload` datetime DEFAULT NULL,
  `date_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `post` */

insert  into `post`(`id_post`,`id_kategori`,`kategori`,`judul`,`versi`,`deskripsi_singkat`,`deskripsi`,`link`,`gambar`,`status`,`url`,`alfabet`,`date_upload`,`date_update`) values 
(1,3,1,'Captain Tsubasa Zero v2.4.6 MOD APK (Unlimited Stamina)',NULL,'Deskripsi Singkat 1','<p>Deskripsi 1</p>\r\n','link 1','http://localhost/ModBoyApps/source/APPS/01.jpg',1,'Captain-Tsubasa-Zero-v------MOD-APK--Unlimited-Stamina-','C','2021-10-26 09:56:28','2021-11-07 12:44:34'),
(2,0,2,'Judul app 1v',NULL,'Deskripsi Singkat','<p>Deskripsi</p>\r\n','link','http://localhost/ModBoyApps/source/APPS/05.jpg',1,NULL,'A','2021-10-26 10:26:34','2021-10-28 08:27:22'),
(5,0,2,'Apps',NULL,'appsv','<p>app</p>\r\n','app','http://localhost/ModBoyApps/source/APPS/05.jpg',1,NULL,'A','2021-10-26 11:45:21','2021-10-28 08:27:28'),
(6,5,1,'Judul Game 2',NULL,'Game 2','<p>Game 2</p>\r\n','link 2','http://localhost/ModBoyApps/source/APPS/02.jpg',1,NULL,'J','2021-10-27 11:56:44','2021-10-28 08:10:53'),
(7,5,1,'Judul Game 3',NULL,'game 3','<p>game 3</p>\r\n','link 3','http://localhost/ModBoyApps/source/APPS/03.jpg',1,NULL,'J','2021-10-27 12:00:58','2021-10-28 07:29:03'),
(8,3,1,'Judul Game 21',NULL,'ssss','<p><strong>L</strong>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.Lorem Ipsum is simply dummy text of the printing and typesetting industry. book.</p>\r\n','sdfsdf','http://localhost/ModBoyApps/source/APPS/04.jpg',1,NULL,'J','2021-10-28 06:58:55','2021-11-03 06:02:32'),
(9,3,1,'Game',NULL,'as','<p>as</p>\r\n','link','http://localhost/ModBoyApps/source/APPS/05.jpg',1,NULL,'G','2021-11-04 08:40:17','2021-11-04 08:40:17'),
(10,3,1,'Game','versi','sdf','','','http://localhost/ModBoyApps/source/APPS/05.jpg',1,'1','G','2021-11-04 09:17:11','2021-11-04 09:17:11');

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
(1,'active','Slide','','http://localhost/ModBoyApps/source/SLIDE/01.jpg',1,'2021-10-27 12:28:27','2021-11-06 05:22:05'),
(2,'non_active','Judul Slide 2','<p>Deskripsi 2</p>\r\n','http://localhost/ModBoyApps/source/SLIDE/02.jpg',1,'2021-10-27 07:53:52','2021-10-28 07:13:51'),
(3,'non_active','Judul Slide 3','<p>Deskripsi 3</p>\r\n','http://localhost/ModBoyApps/source/SLIDE/03.jpg',1,'2021-10-27 07:55:56','2021-10-28 07:14:02'),
(4,'non_active','Judul Slide 4','<p>Deskripsi 4</p>\r\n','http://localhost/ModBoyApps/source/SLIDE/04.jpg',1,'2021-10-27 07:56:25','2021-10-28 07:25:32');

/*Table structure for table `socialmedia` */

DROP TABLE IF EXISTS `socialmedia`;

CREATE TABLE `socialmedia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) DEFAULT NULL,
  `link` text,
  `status` int(2) DEFAULT NULL,
  `date_upload` datetime DEFAULT NULL,
  `date_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `socialmedia` */

insert  into `socialmedia`(`id`,`nama`,`link`,`status`,`date_upload`,`date_update`) values 
(1,'instagram',NULL,1,'2021-11-04 16:35:20','2021-11-04 16:35:23'),
(2,'youtube','#',1,'2021-11-04 10:42:39','2021-11-04 10:48:32');

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
