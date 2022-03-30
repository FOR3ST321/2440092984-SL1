/*
SQLyog Ultimate v12.5.1 (32 bit)
MySQL - 10.4.22-MariaDB : Database - keuangan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`keuangan` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `keuangan`;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `nik` varchar(16) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_depan` varchar(64) NOT NULL,
  `nama_tengah` varchar(64) NOT NULL,
  `nama_belakang` varchar(64) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(64) NOT NULL,
  `warga_negara` varchar(64) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `profile_pic` varchar(64) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`nik`,`email`,`username`,`password`,`nama_depan`,`nama_tengah`,`nama_belakang`,`tanggal_lahir`,`tempat_lahir`,`warga_negara`,`alamat`,`kode_pos`,`no_hp`,`profile_pic`) values 
('1234123412341233','moch.kelvin@binus.ac.id','wanbo_admin','827ccb0eea8a706c4c34a16891f84e7b','kelvin','asdasd','adsadsads','2022-03-08','adsadsads','adsdsaads','asasdfadfsads',12345,'1234444444444','kiri.png'),
('1234123412341234','mkelvin3321@gmail.com','kelvin123','8c015c6d014bf41ee094a466e55b12a5','ajksdh','Kelvin','kajsdh','2002-02-06','garut','indonesia','aklsdj alksdj alsk djaklsdj ',12345,'1234123412445','kay.png');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
