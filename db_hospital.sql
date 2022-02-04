/*
SQLyog Enterprise v13.1.1 (64 bit)
MySQL - 10.4.17-MariaDB : Database - db_hospital
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_hospital` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_hospital`;

/*Table structure for table `access` */

DROP TABLE IF EXISTS `access`;

CREATE TABLE `access` (
  `access_id` bigint(50) NOT NULL AUTO_INCREMENT,
  `access_name` varchar(250) DEFAULT NULL,
  `access_fullname` varchar(250) DEFAULT NULL,
  `access_role` int(50) DEFAULT NULL,
  `access_password` varchar(250) DEFAULT NULL,
  `access_address` varchar(250) DEFAULT NULL,
  `access_city` varchar(100) DEFAULT NULL,
  `access_status` int(10) DEFAULT NULL,
  `access_date_created` date DEFAULT NULL,
  PRIMARY KEY (`access_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `access` */

LOCK TABLES `access` WRITE;

insert  into `access`(`access_id`,`access_name`,`access_fullname`,`access_role`,`access_password`,`access_address`,`access_city`,`access_status`,`access_date_created`) values 
(1,'coba','cobacoba',1,'admin','coba','semarang',1,'0000-00-00');

UNLOCK TABLES;

/*Table structure for table `action` */

DROP TABLE IF EXISTS `action`;

CREATE TABLE `action` (
  `action_id` bigint(50) NOT NULL AUTO_INCREMENT,
  `action_handling` varchar(250) DEFAULT NULL,
  `action_date` date DEFAULT NULL,
  PRIMARY KEY (`action_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `action` */

LOCK TABLES `action` WRITE;

insert  into `action`(`action_id`,`action_handling`,`action_date`) values 
(1,'Rawat Inap','2022-02-04');

UNLOCK TABLES;

/*Table structure for table `auth_assignment` */

DROP TABLE IF EXISTS `auth_assignment`;

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `idx-auth_assignment-user_id` (`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_assignment` */

LOCK TABLES `auth_assignment` WRITE;

insert  into `auth_assignment`(`item_name`,`user_id`,`created_at`) values 
('Administrator','1',1643984579),
('Administrator','2',1643984597),
('Dokter','5',1643984616),
('Pegawai','3',1643984589),
('Pegawai','4',1643984608);

UNLOCK TABLES;

/*Table structure for table `auth_item` */

DROP TABLE IF EXISTS `auth_item`;

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_item` */

LOCK TABLES `auth_item` WRITE;

insert  into `auth_item`(`name`,`type`,`description`,`rule_name`,`data`,`created_at`,`updated_at`) values 
('/*',2,NULL,NULL,NULL,1643975003,1643975003),
('/access/*',2,NULL,NULL,NULL,1643975002,1643975002),
('/access/create',2,NULL,NULL,NULL,1643975002,1643975002),
('/access/delete',2,NULL,NULL,NULL,1643975002,1643975002),
('/access/index',2,NULL,NULL,NULL,1643975002,1643975002),
('/access/update',2,NULL,NULL,NULL,1643975002,1643975002),
('/access/view',2,NULL,NULL,NULL,1643975002,1643975002),
('/action/*',2,NULL,NULL,NULL,1643975002,1643975002),
('/action/create',2,NULL,NULL,NULL,1643975002,1643975002),
('/action/delete',2,NULL,NULL,NULL,1643975002,1643975002),
('/action/index',2,NULL,NULL,NULL,1643975002,1643975002),
('/action/update',2,NULL,NULL,NULL,1643975002,1643975002),
('/action/view',2,NULL,NULL,NULL,1643975002,1643975002),
('/admin/*',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/assignment/*',2,NULL,NULL,NULL,1643975000,1643975000),
('/admin/assignment/assign',2,NULL,NULL,NULL,1643975000,1643975000),
('/admin/assignment/index',2,NULL,NULL,NULL,1643975000,1643975000),
('/admin/assignment/revoke',2,NULL,NULL,NULL,1643975000,1643975000),
('/admin/assignment/view',2,NULL,NULL,NULL,1643975000,1643975000),
('/admin/default/*',2,NULL,NULL,NULL,1643975000,1643975000),
('/admin/default/index',2,NULL,NULL,NULL,1643975000,1643975000),
('/admin/menu/*',2,NULL,NULL,NULL,1643975000,1643975000),
('/admin/menu/create',2,NULL,NULL,NULL,1643975000,1643975000),
('/admin/menu/delete',2,NULL,NULL,NULL,1643975000,1643975000),
('/admin/menu/index',2,NULL,NULL,NULL,1643975000,1643975000),
('/admin/menu/update',2,NULL,NULL,NULL,1643975000,1643975000),
('/admin/menu/view',2,NULL,NULL,NULL,1643975000,1643975000),
('/admin/permission/*',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/permission/assign',2,NULL,NULL,NULL,1643975000,1643975000),
('/admin/permission/create',2,NULL,NULL,NULL,1643975000,1643975000),
('/admin/permission/delete',2,NULL,NULL,NULL,1643975000,1643975000),
('/admin/permission/get-users',2,NULL,NULL,NULL,1643975000,1643975000),
('/admin/permission/index',2,NULL,NULL,NULL,1643975000,1643975000),
('/admin/permission/remove',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/permission/update',2,NULL,NULL,NULL,1643975000,1643975000),
('/admin/permission/view',2,NULL,NULL,NULL,1643975000,1643975000),
('/admin/role/*',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/role/assign',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/role/create',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/role/delete',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/role/get-users',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/role/index',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/role/remove',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/role/update',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/role/view',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/route/*',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/route/assign',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/route/create',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/route/index',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/route/refresh',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/route/remove',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/rule/*',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/rule/create',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/rule/delete',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/rule/index',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/rule/update',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/rule/view',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/user/*',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/user/activate',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/user/change-password',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/user/delete',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/user/index',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/user/login',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/user/logout',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/user/request-password-reset',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/user/reset-password',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/user/signup',2,NULL,NULL,NULL,1643975001,1643975001),
('/admin/user/view',2,NULL,NULL,NULL,1643975001,1643975001),
('/debug/*',2,NULL,NULL,NULL,1643975002,1643975002),
('/debug/default/*',2,NULL,NULL,NULL,1643975001,1643975001),
('/debug/default/db-explain',2,NULL,NULL,NULL,1643975001,1643975001),
('/debug/default/download-mail',2,NULL,NULL,NULL,1643975001,1643975001),
('/debug/default/index',2,NULL,NULL,NULL,1643975001,1643975001),
('/debug/default/toolbar',2,NULL,NULL,NULL,1643975001,1643975001),
('/debug/default/view',2,NULL,NULL,NULL,1643975001,1643975001),
('/debug/user/*',2,NULL,NULL,NULL,1643975002,1643975002),
('/debug/user/reset-identity',2,NULL,NULL,NULL,1643975002,1643975002),
('/debug/user/set-identity',2,NULL,NULL,NULL,1643975002,1643975002),
('/drug/*',2,NULL,NULL,NULL,1643975002,1643975002),
('/drug/create',2,NULL,NULL,NULL,1643975002,1643975002),
('/drug/delete',2,NULL,NULL,NULL,1643975002,1643975002),
('/drug/index',2,NULL,NULL,NULL,1643975002,1643975002),
('/drug/update',2,NULL,NULL,NULL,1643975002,1643975002),
('/drug/view',2,NULL,NULL,NULL,1643975002,1643975002),
('/gii/*',2,NULL,NULL,NULL,1643975002,1643975002),
('/gii/default/*',2,NULL,NULL,NULL,1643975002,1643975002),
('/gii/default/action',2,NULL,NULL,NULL,1643975002,1643975002),
('/gii/default/diff',2,NULL,NULL,NULL,1643975002,1643975002),
('/gii/default/index',2,NULL,NULL,NULL,1643975002,1643975002),
('/gii/default/preview',2,NULL,NULL,NULL,1643975002,1643975002),
('/gii/default/view',2,NULL,NULL,NULL,1643975002,1643975002),
('/patient/*',2,NULL,NULL,NULL,1643975002,1643975002),
('/patient/create',2,NULL,NULL,NULL,1643975002,1643975002),
('/patient/delete',2,NULL,NULL,NULL,1643975002,1643975002),
('/patient/index',2,NULL,NULL,NULL,1643975002,1643975002),
('/patient/update',2,NULL,NULL,NULL,1643975002,1643975002),
('/patient/view',2,NULL,NULL,NULL,1643975002,1643975002),
('/region/*',2,NULL,NULL,NULL,1643975003,1643975003),
('/region/create',2,NULL,NULL,NULL,1643975002,1643975002),
('/region/delete',2,NULL,NULL,NULL,1643975003,1643975003),
('/region/index',2,NULL,NULL,NULL,1643975002,1643975002),
('/region/update',2,NULL,NULL,NULL,1643975003,1643975003),
('/region/view',2,NULL,NULL,NULL,1643975002,1643975002),
('/service/*',2,NULL,NULL,NULL,1643975003,1643975003),
('/service/create',2,NULL,NULL,NULL,1643975003,1643975003),
('/service/delete',2,NULL,NULL,NULL,1643975003,1643975003),
('/service/export-pdf',2,NULL,NULL,NULL,1643975003,1643975003),
('/service/index',2,NULL,NULL,NULL,1643975003,1643975003),
('/service/update',2,NULL,NULL,NULL,1643975003,1643975003),
('/service/view',2,NULL,NULL,NULL,1643975003,1643975003),
('/site/*',2,NULL,NULL,NULL,1643975003,1643975003),
('/site/about',2,NULL,NULL,NULL,1643975003,1643975003),
('/site/captcha',2,NULL,NULL,NULL,1643975003,1643975003),
('/site/contact',2,NULL,NULL,NULL,1643975003,1643975003),
('/site/error',2,NULL,NULL,NULL,1643975003,1643975003),
('/site/gallery',2,NULL,NULL,NULL,1643975003,1643975003),
('/site/hello',2,NULL,NULL,NULL,1643975003,1643975003),
('/site/index',2,NULL,NULL,NULL,1643975003,1643975003),
('/site/login',2,NULL,NULL,NULL,1643975003,1643975003),
('/site/logout',2,NULL,NULL,NULL,1643975003,1643975003),
('/site/salam',2,NULL,NULL,NULL,1643975003,1643975003),
('/user/*',2,NULL,NULL,NULL,1643975000,1643975000),
('/user/admin/*',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/admin/assignments',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/admin/block',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/admin/confirm',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/admin/create',2,NULL,NULL,NULL,1643974998,1643974998),
('/user/admin/delete',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/admin/index',2,NULL,NULL,NULL,1643974998,1643974998),
('/user/admin/info',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/admin/resend-password',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/admin/switch',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/admin/update',2,NULL,NULL,NULL,1643974998,1643974998),
('/user/admin/update-profile',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/profile/*',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/profile/index',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/profile/show',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/recovery/*',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/recovery/request',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/recovery/reset',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/registration/*',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/registration/confirm',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/registration/connect',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/registration/register',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/registration/resend',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/security/*',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/security/auth',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/security/login',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/security/logout',2,NULL,NULL,NULL,1643974999,1643974999),
('/user/settings/*',2,NULL,NULL,NULL,1643975000,1643975000),
('/user/settings/account',2,NULL,NULL,NULL,1643975000,1643975000),
('/user/settings/confirm',2,NULL,NULL,NULL,1643975000,1643975000),
('/user/settings/delete',2,NULL,NULL,NULL,1643975000,1643975000),
('/user/settings/disconnect',2,NULL,NULL,NULL,1643975000,1643975000),
('/user/settings/networks',2,NULL,NULL,NULL,1643975000,1643975000),
('/user/settings/profile',2,NULL,NULL,NULL,1643974999,1643974999),
('Administrator',1,NULL,NULL,NULL,1643975064,1643975064),
('administratorPermision',2,NULL,NULL,NULL,1643975260,1643975260),
('Dokter',1,NULL,NULL,NULL,1643975141,1643975141),
('dokterPermision',2,NULL,NULL,NULL,1643975294,1643975294),
('Pegawai',1,NULL,NULL,NULL,1643975111,1643975111),
('pegawaiPermision',2,NULL,NULL,NULL,1643975279,1643975279);

UNLOCK TABLES;

/*Table structure for table `auth_item_child` */

DROP TABLE IF EXISTS `auth_item_child`;

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_item_child` */

LOCK TABLES `auth_item_child` WRITE;

insert  into `auth_item_child`(`parent`,`child`) values 
('Administrator','administratorPermision'),
('Administrator','dokterPermision'),
('Administrator','pegawaiPermision'),
('administratorPermision','/*'),
('Dokter','dokterPermision'),
('dokterPermision','/service/*'),
('Pegawai','pegawaiPermision'),
('pegawaiPermision','/drug/*'),
('pegawaiPermision','/patient/*'),
('pegawaiPermision','/region/*');

UNLOCK TABLES;

/*Table structure for table `auth_rule` */

DROP TABLE IF EXISTS `auth_rule`;

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_rule` */

LOCK TABLES `auth_rule` WRITE;

UNLOCK TABLES;

/*Table structure for table `drug` */

DROP TABLE IF EXISTS `drug`;

CREATE TABLE `drug` (
  `drug_id` bigint(50) NOT NULL AUTO_INCREMENT,
  `drug_name` varchar(250) DEFAULT NULL,
  `drug_dosis` varbinary(250) DEFAULT NULL,
  `drug_type` varchar(250) DEFAULT NULL,
  `drug_date_exp` date DEFAULT NULL,
  `drug_date_created` date DEFAULT NULL,
  `drug_status` int(10) DEFAULT NULL,
  PRIMARY KEY (`drug_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `drug` */

LOCK TABLES `drug` WRITE;

insert  into `drug`(`drug_id`,`drug_name`,`drug_dosis`,`drug_type`,`drug_date_exp`,`drug_date_created`,`drug_status`) values 
(1,'Paracetamol',0x32,'Pusing','2024-04-02','2022-02-04',1);

UNLOCK TABLES;

/*Table structure for table `migration` */

DROP TABLE IF EXISTS `migration`;

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `migration` */

LOCK TABLES `migration` WRITE;

insert  into `migration`(`version`,`apply_time`) values 
('m000000_000000_base',1643971921),
('m140209_132017_init',1643971939),
('m140403_174025_create_account_table',1643971941),
('m140504_113157_update_tables',1643971943),
('m140504_130429_create_token_table',1643971945),
('m140506_102106_rbac_init',1643974263),
('m140830_171933_fix_ip_field',1643971945),
('m140830_172703_change_account_table_name',1643971946),
('m141222_110026_update_ip_field',1643971947),
('m141222_135246_alter_username_length',1643971947),
('m150614_103145_update_social_account_table',1643971947),
('m150623_212711_fix_username_notnull',1643971948),
('m151218_234654_add_timezone_to_profile',1643971948),
('m160929_103127_add_last_login_at_to_user_table',1643971948),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id',1643974263),
('m180523_151638_rbac_updates_indexes_without_prefix',1643974264),
('m200409_110543_rbac_update_mssql_trigger',1643974264);

UNLOCK TABLES;

/*Table structure for table `patient` */

DROP TABLE IF EXISTS `patient`;

CREATE TABLE `patient` (
  `patient_id` bigint(50) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(250) DEFAULT NULL,
  `patient_fullname` varchar(250) DEFAULT NULL,
  `patient_date_birth` date DEFAULT NULL,
  `patient_phone` varchar(100) DEFAULT NULL,
  `patient_gender` varchar(20) DEFAULT NULL,
  `patient_symptom` varchar(100) DEFAULT NULL,
  `patient_addres` varchar(250) DEFAULT NULL,
  `patient_date_created` date DEFAULT NULL,
  `patient_status` int(10) DEFAULT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `patient` */

LOCK TABLES `patient` WRITE;

insert  into `patient`(`patient_id`,`patient_name`,`patient_fullname`,`patient_date_birth`,`patient_phone`,`patient_gender`,`patient_symptom`,`patient_addres`,`patient_date_created`,`patient_status`) values 
(1,'Andre','Andre Don','1999-12-22','089776567257','Laki-Laki','Pusing','Semarang','2022-02-04',1);

UNLOCK TABLES;

/*Table structure for table `profile` */

DROP TABLE IF EXISTS `profile`;

CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_id` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `timezone` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `profile` */

LOCK TABLES `profile` WRITE;

insert  into `profile`(`user_id`,`name`,`public_email`,`gravatar_email`,`gravatar_id`,`location`,`website`,`bio`,`timezone`) values 
(1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `region` */

DROP TABLE IF EXISTS `region`;

CREATE TABLE `region` (
  `region_id` bigint(50) NOT NULL AUTO_INCREMENT,
  `region_city` varchar(250) DEFAULT NULL,
  `region_province` varchar(250) DEFAULT NULL,
  `region_address` text DEFAULT NULL,
  `region_date_created` date DEFAULT NULL,
  PRIMARY KEY (`region_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `region` */

LOCK TABLES `region` WRITE;

insert  into `region`(`region_id`,`region_city`,`region_province`,`region_address`,`region_date_created`) values 
(1,'Semarang','Jawa Tengah','Semarang','2022-02-04');

UNLOCK TABLES;

/*Table structure for table `service` */

DROP TABLE IF EXISTS `service`;

CREATE TABLE `service` (
  `service_id` bigint(50) NOT NULL AUTO_INCREMENT,
  `service_drug_id` bigint(50) DEFAULT NULL,
  `service_action_id` bigint(50) DEFAULT NULL,
  `service_patient_id` bigint(50) DEFAULT NULL,
  `service_subtotal` varchar(5) DEFAULT NULL,
  `service_date_created` date DEFAULT NULL,
  `service_ppn` varchar(5) DEFAULT NULL,
  `service_total` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`service_id`),
  KEY `sr_patient_1` (`service_drug_id`),
  KEY `sr_patient_2` (`service_action_id`),
  KEY `sr_patient_3` (`service_patient_id`),
  CONSTRAINT `sr_patient_1` FOREIGN KEY (`service_drug_id`) REFERENCES `drug` (`drug_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `sr_patient_2` FOREIGN KEY (`service_action_id`) REFERENCES `action` (`action_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `sr_patient_3` FOREIGN KEY (`service_patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `service` */

LOCK TABLES `service` WRITE;

insert  into `service`(`service_id`,`service_drug_id`,`service_action_id`,`service_patient_id`,`service_subtotal`,`service_date_created`,`service_ppn`,`service_total`) values 
(1,1,1,1,'2000','2022-02-04','0','2000');

UNLOCK TABLES;

/*Table structure for table `social_account` */

DROP TABLE IF EXISTS `social_account`;

CREATE TABLE `social_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account_unique` (`provider`,`client_id`),
  UNIQUE KEY `account_unique_code` (`code`),
  KEY `fk_user_account` (`user_id`),
  CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `social_account` */

LOCK TABLES `social_account` WRITE;

UNLOCK TABLES;

/*Table structure for table `token` */

DROP TABLE IF EXISTS `token`;

CREATE TABLE `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL,
  UNIQUE KEY `token_unique` (`user_id`,`code`,`type`),
  CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `token` */

LOCK TABLES `token` WRITE;

insert  into `token`(`user_id`,`code`,`created_at`,`type`) values 
(1,'W_seAdXeUTDX8rK-4rT1V349uRT7mnlC',1643972122,0),
(3,'BtiprQicAcrMIRmvksNwZ_H6uzl1cq7X',1643972732,0);

UNLOCK TABLES;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT 0,
  `last_login_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_unique_username` (`username`),
  UNIQUE KEY `user_unique_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user` */

LOCK TABLES `user` WRITE;

insert  into `user`(`id`,`username`,`email`,`password_hash`,`auth_key`,`confirmed_at`,`unconfirmed_email`,`blocked_at`,`registration_ip`,`created_at`,`updated_at`,`flags`,`last_login_at`) values 
(1,'admin','admin@admin.com','$2y$10$zkHb1NG9OzKRSJ9rqAVYVOh6X6X1jLOVaw1f5BC0MpVA1bdBGhSG2','1OFw7M-ZKWU7t5KBrI-tOPTNMqYkr-Di',1643972471,NULL,NULL,'::1',1643972122,1643972122,0,1643985549),
(2,'demo','demo@demo.com','$2y$10$nrBo/JQ9zGA6U7ZCJAMNqOg1ik.SVEaOFlEqzUHaB401PX82DJYNC','fJ7kn4bltfKdfgElb8lcASZ5afEyqquw',1643972576,NULL,NULL,'::1',1643972576,1643972576,0,1643972780),
(3,'pegawai','pegawai@inovasimedika.com','$2y$10$xFiQxY55ir0yQHP16LAtV.hig6Jk0vyA2lOU89dNLotraV9U767Km','Pi67vG_P1kuie0cG5cPrDBPfSzg4WqHU',1643972822,NULL,NULL,'::1',1643972732,1643972732,0,1643972873),
(4,'ina','staff@inovasimedika.com','$2y$10$g0azm9xPXCwvvlp.OdK0WuFvmqjIvHMkfmfqMnXfrA26KxKIibaGi','rQMegEfg_Y4tM2q1frEwCMOGWeKMmqv2',1643974826,NULL,NULL,'::1',1643974826,1643974826,0,NULL),
(5,'nina','inovasimedika@staff.com','$2y$10$ilLLThNvKdvsM7Z/tGRbRuZT3kZqLVqP5cp8KA2evnkMdz9uDUtI.','mQkopOtmLoOezZVIjeeS3dfQ3ECCbvfv',1643974879,NULL,NULL,'::1',1643974878,1643974878,0,1643984909);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
