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
  `id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` text,
  `keyword` text,
  `icon_32` text,
  `icon_128` text,
  `icon_192` text,
  `logo` varchar(50) DEFAULT NULL,
  `date_upload` datetime DEFAULT NULL,
  `date_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `meta` */

insert  into `meta`(`id`,`title`,`description`,`keyword`,`icon_32`,`icon_128`,`icon_192`,`logo`,`date_upload`,`date_update`) values 
(0,'Home','ModBoyApk is a completely free website, we share games, android premium apps with high-quality mods','1,2,3,4,5','http://localhost/ModBoyApps/source/ICON/32.png','http://localhost/ModBoyApps/source/ICON/128.png','http://localhost/ModBoyApps/source/ICON/192.png','http://localhost/ModBoyApps/source/ICON/01.jpg','2021-11-09 05:03:05','2021-11-13 13:02:29'),
(1,'Game',NULL,'1,2,3,4,5','http://localhost/ModBoyApps/source/ICON/32.png','http://localhost/ModBoyApps/source/ICON/128.png','http://localhost/ModBoyApps/source/ICON/192.png','http://localhost/ModBoyApps/source/ICON/01.jpg',NULL,NULL),
(2,'Apk',NULL,'1,2,3,4,5','http://localhost/ModBoyApps/source/ICON/32.png','http://localhost/ModBoyApps/source/ICON/128.png','http://localhost/ModBoyApps/source/ICON/192.png','http://localhost/ModBoyApps/source/ICON/01.jpg',NULL,NULL),
(3,'Tutorial',NULL,'1,2,3,4,5','http://localhost/ModBoyApps/source/ICON/32.png','http://localhost/ModBoyApps/source/ICON/128.png','http://localhost/ModBoyApps/source/ICON/192.png','http://localhost/ModBoyApps/source/ICON/01.jpg',NULL,NULL),
(5,'youtube','youtube','1,2,3,4,5','http://localhost/ModBoyApps/source/ICON/32.png','http://localhost/ModBoyApps/source/ICON/128.png','http://localhost/ModBoyApps/source/ICON/192.png','http://localhost/ModBoyApps/source/ICON/01.jpg','2021-11-13 13:10:03','2021-11-13 13:11:57');

/*Table structure for table `post` */

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` varchar(50) DEFAULT NULL,
  `kategori` int(2) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `keyword` text,
  `versi` varchar(20) DEFAULT NULL,
  `deskripsi_singkat` text,
  `deskripsi` text,
  `link` text,
  `gambar` varchar(100) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `uri` varchar(100) DEFAULT NULL,
  `alfabet` varchar(5) DEFAULT NULL,
  `date_upload` date DEFAULT NULL,
  `time_upload` time DEFAULT NULL,
  `date_update` date DEFAULT NULL,
  `time_update` time DEFAULT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `post` */

insert  into `post`(`id_post`,`id_kategori`,`kategori`,`judul`,`keyword`,`versi`,`deskripsi_singkat`,`deskripsi`,`link`,`gambar`,`status`,`uri`,`alfabet`,`date_upload`,`time_upload`,`date_update`,`time_update`) values 
(12,'3,4,5,6,7,8,9,10,11,12,13,14',1,'Drive Ahead! v3.9.1 MOD APK (Mega Menu/Unlocked All) ','1,2,3,4,5',NULL,'Drive Ahead! v3.9.1 MOD APK (Mega Menu/Unlocked All) ','<h1>Drive Ahead! v3.9.1 MOD APK (Mega Menu/Unlocked All)</h1>\r\n','Drive Ahead! v3.9.1 MOD APK (Mega Menu/Unlocked All) ','http://localhost/ModBoyApps/source/ICON/192.png',1,'drive-aheads','D','2021-11-09','07:53:42','2021-11-13','11:58:34'),
(13,'2,4',2,'Drive Ahead! v3.9.1 MOD APK (Mega Menu/Unlocked All) APP','1,2,3,4,5',NULL,'Worms Zone io, game cacing yang saat ini tengah naik daun dan menjadi game populer dikalangan para pecinta game. Dimana-mana banyak orang yang memainkan game cacing Worms Zone io. Tampilannya yang sederhana namun dengan grafik yang halus dan mudah untuk dimainkan, membuat game ini banyak disukai baik dikalangan anak-anak maupun orang dewasa. Bikin ketagihan, itulah yang dirasakan oleh para pemain game Worms Zone io.','<h1>Drive Ahead! v3.9.1 MOD APK (Mega Menu/Unlocked All)</h1>\r\n','','http://localhost/ModBoyApps/source/ICON/192.png',1,'drive-aheads','D','2021-11-09','07:53:42','2021-11-13','11:59:02'),
(14,'3,4,5,6,7,8,9,10,11,12,13,14',1,'Worms Zone.io v2.3.4-c MOD APK (Unlimited Coins/Skins Unlock)','Worms Zone.io, game mod, mod',NULL,'Worms Zone io, game cacing yang saat ini tengah naik daun dan menjadi game populer dikalangan para pecinta game. Dimana-mana banyak orang yang memainkan game cacing Worms Zone io. Tampilannya yang sederhana namun dengan grafik yang halus dan mudah untuk dimainkan, membuat game ini banyak disukai baik dikalangan anak-anak maupun orang dewasa. Bikin ketagihan, itulah yang dirasakan oleh para pemain game Worms Zone io.','<p>Worms Zone io, game cacing yang saat ini tengah naik daun dan menjadi game populer dikalangan para pecinta game. Dimana-mana banyak orang yang memainkan game cacing Worms Zone io. Tampilannya yang sederhana namun dengan grafik yang halus dan mudah untuk dimainkan, membuat game ini banyak disukai baik dikalangan anak-anak maupun orang dewasa. Bikin ketagihan, itulah yang dirasakan oleh para pemain game Worms Zone io.</p>\r\n','','http://localhost/ModBoyApps/source/KATEGORI/arcade.png',1,'worms-zone','W','2021-11-13','11:54:39','2021-11-13','11:54:39');

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

/*Table structure for table `tutorial` */

DROP TABLE IF EXISTS `tutorial`;

CREATE TABLE `tutorial` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` varchar(50) DEFAULT NULL,
  `kategori` int(2) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi_singkat` text,
  `keyword` text,
  `deskripsi` text,
  `link` text,
  `gambar` varchar(100) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `uri` varchar(100) DEFAULT NULL,
  `date_upload` date DEFAULT NULL,
  `time_upload` time DEFAULT NULL,
  `date_update` date DEFAULT NULL,
  `time_update` time DEFAULT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tutorial` */

insert  into `tutorial`(`id_post`,`id_kategori`,`kategori`,`judul`,`deskripsi_singkat`,`keyword`,`deskripsi`,`link`,`gambar`,`status`,`uri`,`date_upload`,`time_upload`,`date_update`,`time_update`) values 
(2,NULL,3,'TUTORIAL 1','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing','1,2,3,4,5','<p>TUTORIAL 1</p>\r\n',NULL,'http://localhost/ModBoyApps/source/TUTORIAL/192.png','1','tutorial-1','2021-11-12','04:34:55','2021-11-13','12:07:13'),
(3,NULL,3,'TUTORIAL 2','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing\r\n\r\nLorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound ','1,2,3,4,5','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>\r\n\r\n<p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound</p>\r\n',NULL,'http://localhost/ModBoyApps/source/SLIDE/05.jpg','1','tutorial-2','2021-11-12','05:05:54','2021-11-13','12:05:54'),
(4,NULL,3,'TUTORIAL 1 a','TUTORIAL 1 a','1,2,3,4,5','<p>TUTORIAL 1 a</p>\r\n',NULL,'TUTORIAL 1 a','1','tutorial-1-a','2021-11-12','11:29:46','2021-11-13','12:05:57');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
