CREATE DATABASE  IF NOT EXISTS `enterprise2` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `enterprise2`;
-- MySQL dump 10.13  Distrib 5.5.24, for osx10.5 (i386)
--
-- Host: 127.0.0.1    Database: enterprise2
-- ------------------------------------------------------
-- Server version	5.5.38

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `street1` varchar(45) DEFAULT NULL,
  `street2` varchar(45) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `zip` varchar(45) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` VALUES (1,'Amy','Wilson','1982 Zanker Road','Suite 30','San Jose','CA','97112',1,NULL,'2012-02-09 00:00:00',NULL),(2,'Bob','Wilson','1982 Zanker','Suite 30','San Jose ','CA','97112',2,NULL,'2012-02-09 00:00:00',NULL),(3,NULL,NULL,'555 Stevens Creek Road',NULL,'San Jose','CA','97112',3,NULL,'2012-01-05 00:00:00',NULL),(4,'Paul ','Chang','677 Fremon St','Apt A','Menlo Park','CA','94025',3,NULL,'2012-02-11 00:00:00',NULL),(5,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,NULL,'2015-02-11 15:46:15',NULL),(6,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VASc2eZvKYlo2CuIvWs3GL','2015-02-11 16:04:06',NULL),(7,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VATb2eZvKYlo2CFO4HAPEz','2015-02-11 16:05:07',NULL),(8,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VAUT2eZvKYlo2CMP9neTE6','2015-02-11 16:06:01',NULL),(9,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VAVO2eZvKYlo2CCYGLgAAF','2015-02-11 16:06:58',NULL),(10,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VAXA2eZvKYlo2C3Vaw9yoo','2015-02-11 16:08:48',NULL),(11,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VAYR2eZvKYlo2CQTtvFTMl','2015-02-11 16:10:08',NULL),(12,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VAZN2eZvKYlo2Ch6D01BJa','2015-02-11 16:11:06',NULL),(13,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VAbt2eZvKYlo2Cr2UEtPl2','2015-02-11 16:13:40',NULL),(14,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VAeD2eZvKYlo2CYosXDWVg','2015-02-11 16:16:07',NULL),(15,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VAfH2eZvKYlo2CjKS4OsO9','2015-02-11 16:17:11',NULL),(16,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VAhq2eZvKYlo2C9jp3m0Or','2015-02-11 16:19:50',NULL),(17,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VAiX2eZvKYlo2CUTbxtlXH','2015-02-11 16:20:33',NULL),(18,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VAj42eZvKYlo2Cgq8hcOuJ','2015-02-11 16:21:07',NULL),(19,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VAr92eZvKYlo2C9M9Z0hWk','2015-02-11 16:29:33',NULL),(20,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VAsD2eZvKYlo2CghVa3bDE','2015-02-11 16:30:33',NULL),(21,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VAtp2eZvKYlo2CQiaDpY38','2015-02-11 16:32:13',NULL),(22,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VAxG2eZvKYlo2C3Z0r66Bl','2015-02-11 16:35:47',NULL),(23,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VB2F2eZvKYlo2CwhF1ik0n','2015-02-11 16:40:55',NULL),(24,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VB6S2eZvKYlo2CHCHxaAEe','2015-02-11 16:45:16',NULL),(25,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VB772eZvKYlo2CL1CHK9uQ','2015-02-11 16:45:57',NULL),(26,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VB7n2eZvKYlo2CRTkUca74','2015-02-11 16:46:39',NULL),(27,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VB8U2eZvKYlo2CpnwxkywV','2015-02-11 16:47:21',NULL),(28,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VB9X2eZvKYlo2CVi8lQbJl','2015-02-11 16:48:27',NULL),(29,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VBDb2eZvKYlo2C0epfJQ11','2015-02-11 16:52:39',NULL),(30,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VBFP2eZvKYlo2CERKZ2F2H','2015-02-11 16:54:34',NULL),(31,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VBGm2eZvKYlo2CCypHT5jU','2015-02-11 16:55:56',NULL),(32,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VBJW2eZvKYlo2CUoikhGme','2015-02-11 16:58:48',NULL),(33,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VBK52eZvKYlo2CRawK5O1Q','2015-02-11 16:59:21',NULL),(34,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VBLK2eZvKYlo2CCY8CQML4','2015-02-11 17:00:39',NULL),(35,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VBMI2eZvKYlo2CZ4eHqt5t','2015-02-11 17:01:39',NULL),(36,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VBN32eZvKYlo2CJpjGORnF','2015-02-11 17:02:25',NULL),(37,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VBOK2eZvKYlo2CQZf2EmCo','2015-02-11 17:03:44',NULL),(38,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VBOu2eZvKYlo2CoiCGeIQf','2015-02-11 17:04:21',NULL),(39,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VCMt2eZvKYlo2CqyUHFOql','2015-02-11 18:06:19',NULL),(40,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VCNY2eZvKYlo2CQx4H6Hdq','2015-02-11 18:07:03',NULL),(41,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VCOH2eZvKYlo2CXueNG4M9','2015-02-11 18:07:45',NULL),(42,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VCQD2eZvKYlo2Cj6hXY571','2015-02-11 18:09:45',NULL),(43,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VCRX2eZvKYlo2COF3yKGoG','2015-02-11 18:11:08',NULL),(44,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VCZo2eZvKYlo2CRRoTIBNK','2015-02-11 18:19:40',NULL),(45,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VCal2eZvKYlo2Cj4h9yIp7','2015-02-11 18:20:39',NULL),(46,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VCbG2eZvKYlo2C4ecNTPbp','2015-02-11 18:21:12',NULL),(47,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VCbu2eZvKYlo2ChKt7Osrf','2015-02-11 18:21:50',NULL),(48,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VCpb2eZvKYlo2CNHG6Pc9p','2015-02-11 18:35:59',NULL),(49,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VCq32eZvKYlo2C99N6cOlT','2015-02-11 18:36:26',NULL),(50,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VCye2eZvKYlo2CUKz29mP5','2015-02-11 18:45:21',NULL),(51,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VD3f2eZvKYlo2COziOQdWq','2015-02-11 18:50:31',NULL),(52,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VD4O2eZvKYlo2CF1VWVq1E','2015-02-11 18:51:16',NULL),(53,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VD7h2eZvKYlo2COpJGv0w4','2015-02-11 18:54:41',NULL),(54,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VDBm2eZvKYlo2CtSvo8ObS','2015-02-11 18:58:54',NULL),(55,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VDDA2eZvKYlo2C5hCP3PVV','2015-02-11 19:00:21',NULL),(56,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VDE32eZvKYlo2C0rOm73M1','2015-02-11 19:01:15',NULL),(57,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VDGW2eZvKYlo2CcPMAcTGY','2015-02-11 19:03:48',NULL),(58,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VDHD2eZvKYlo2CMmedjEtf','2015-02-11 19:04:31',NULL),(59,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VDIu2eZvKYlo2CtW2nBtVv','2015-02-11 19:06:16',NULL),(60,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VDJU2eZvKYlo2CguS5TyN9','2015-02-11 19:06:53',NULL),(61,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VDNe2eZvKYlo2CTvn8fvya','2015-02-11 19:11:10',NULL),(62,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VDPR2eZvKYlo2CLJlNIQ2G','2015-02-11 19:13:01',NULL),(63,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VDS02eZvKYlo2Cnph7VJ7K','2015-02-11 19:15:40',NULL),(64,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VDV72eZvKYlo2CY0sKTvcc','2015-02-11 19:18:53',NULL),(65,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VDVr2eZvKYlo2CskpvtKSq','2015-02-11 19:19:39',NULL),(66,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,'2015-02-11 19:23:35',NULL),(67,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,NULL,'2015-02-11 19:23:35',NULL),(68,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VDb52eZvKYlo2CBQTT2SUc','2015-02-11 19:25:03',NULL),(69,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VDfA2eZvKYlo2CR6Y9tIQn','2015-02-11 19:29:16',NULL),(70,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VDmp2eZvKYlo2Cd4HgzKaY','2015-02-11 19:37:11',NULL),(71,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VDuw2eZvKYlo2CFbx9ufXC','2015-02-11 19:45:34',NULL),(72,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VE002eZvKYlo2CuDg8tfF7','2015-02-11 19:50:48',NULL),(73,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VE1u2eZvKYlo2C7WafYY9g','2015-02-11 19:52:46',NULL),(74,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VE5G2eZvKYlo2CiJNnq0wu','2015-02-11 19:56:14',NULL),(75,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VE9a2eZvKYlo2CIQ95FaWp','2015-02-11 20:00:42',NULL),(76,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VEFp2eZvKYlo2CZaYV7fqK','2015-02-11 20:07:09',NULL),(77,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VEHD2eZvKYlo2CtDqkC2V3','2015-02-11 20:08:35',NULL),(78,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VEKC2eZvKYlo2CYQK1k21w','2015-02-11 20:11:40',NULL),(79,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VGI92eZvKYlo2C4WwTwtR4','2015-02-11 22:17:41',NULL),(80,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VGJt2eZvKYlo2CexeZV37F','2015-02-11 22:19:29',NULL),(81,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VGLR2eZvKYlo2Cqu4czrpo','2015-02-11 22:21:05',NULL),(82,'Michael','Testing only','124 Fulton','','Grand Rapids','Michigan','49503',3,'tok_15VGMS2eZvKYlo2CQ0guJ52J','2015-02-11 22:22:08',NULL),(83,'Michael','Testing only','124 Fulton','','Grand Rapids','Michigan','49503',3,'tok_15VGNo2eZvKYlo2Cb8ysCO1Z','2015-02-11 22:23:35',NULL),(84,'Jonathon','Kane','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VGqk2eZvKYlo2CilYLHNld','2015-02-11 22:53:26',NULL),(85,'Jonathon','Kane','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VGss2eZvKYlo2CHts6KFkZ','2015-02-11 22:55:39',NULL),(86,'Stacy','James','2976 Cree Ct. NE','','Grand Rapids','Michigan','49525',3,'tok_15VGvQ2eZvKYlo2CByChp0fV','2015-02-11 22:58:16',NULL),(87,'Stacy','James','2976 Cree Ct. NE','','Grand Rapids','Michigan','49525',3,'tok_15VGvu2eZvKYlo2CT0qC4Cbn','2015-02-11 22:58:47',NULL),(88,'Michael','Weitzman','229 Prospect Avenue NE','Apt 1','Grand Rapids','Michigan','49503',3,'tok_15VGx22eZvKYlo2CVZHdOR3G','2015-02-11 22:59:56',NULL);
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `billings`
--

DROP TABLE IF EXISTS `billings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) DEFAULT NULL,
  `IPN` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billings`
--

LOCK TABLES `billings` WRITE;
/*!40000 ALTER TABLE `billings` DISABLE KEYS */;
INSERT INTO `billings` VALUES (1,1,'1234556213',1,'2015-02-09 00:00:00',NULL),(2,NULL,'tok_15VABK2eZvKYlo2CEkAWSTV1',NULL,'2015-02-11 15:46:15',NULL),(3,NULL,'tok_15VASc2eZvKYlo2CuIvWs3GL',NULL,'2015-02-11 16:04:06',NULL),(4,NULL,'tok_15VATb2eZvKYlo2CFO4HAPEz',NULL,'2015-02-11 16:05:07',NULL),(5,NULL,'tok_15VAUT2eZvKYlo2CMP9neTE6',NULL,'2015-02-11 16:06:01',NULL),(6,NULL,'tok_15VAVO2eZvKYlo2CCYGLgAAF',NULL,'2015-02-11 16:06:58',NULL),(7,NULL,'tok_15VAXA2eZvKYlo2C3Vaw9yoo',NULL,'2015-02-11 16:08:48',NULL),(8,NULL,'tok_15VAYR2eZvKYlo2CQTtvFTMl',NULL,'2015-02-11 16:10:08',NULL),(9,NULL,'tok_15VAZN2eZvKYlo2Ch6D01BJa',NULL,'2015-02-11 16:11:06',NULL),(10,NULL,'tok_15VAbt2eZvKYlo2Cr2UEtPl2',NULL,'2015-02-11 16:13:40',NULL),(11,NULL,'tok_15VAeD2eZvKYlo2CYosXDWVg',NULL,'2015-02-11 16:16:07',NULL),(12,NULL,'tok_15VAfH2eZvKYlo2CjKS4OsO9',NULL,'2015-02-11 16:17:11',NULL),(13,NULL,'tok_15VAhq2eZvKYlo2C9jp3m0Or',NULL,'2015-02-11 16:19:50',NULL),(14,NULL,'tok_15VAiX2eZvKYlo2CUTbxtlXH',NULL,'2015-02-11 16:20:33',NULL),(15,NULL,'tok_15VAj42eZvKYlo2Cgq8hcOuJ',NULL,'2015-02-11 16:21:07',NULL),(16,NULL,'tok_15VAr92eZvKYlo2C9M9Z0hWk',NULL,'2015-02-11 16:29:33',NULL),(17,NULL,'tok_15VAsD2eZvKYlo2CghVa3bDE',NULL,'2015-02-11 16:30:33',NULL),(18,NULL,'tok_15VAtp2eZvKYlo2CQiaDpY38',NULL,'2015-02-11 16:32:13',NULL),(19,NULL,'tok_15VAxG2eZvKYlo2C3Z0r66Bl',NULL,'2015-02-11 16:35:47',NULL),(20,NULL,'tok_15VB2F2eZvKYlo2CwhF1ik0n',NULL,'2015-02-11 16:40:55',NULL),(21,NULL,'tok_15VB6S2eZvKYlo2CHCHxaAEe',NULL,'2015-02-11 16:45:16',NULL),(22,NULL,'tok_15VB772eZvKYlo2CL1CHK9uQ',NULL,'2015-02-11 16:45:57',NULL),(23,NULL,'tok_15VB7n2eZvKYlo2CRTkUca74',NULL,'2015-02-11 16:46:39',NULL),(24,NULL,'tok_15VB8U2eZvKYlo2CpnwxkywV',NULL,'2015-02-11 16:47:21',NULL),(25,NULL,'tok_15VB9X2eZvKYlo2CVi8lQbJl',NULL,'2015-02-11 16:48:27',NULL),(26,NULL,'tok_15VBDb2eZvKYlo2C0epfJQ11',NULL,'2015-02-11 16:52:39',NULL),(27,NULL,'tok_15VBFP2eZvKYlo2CERKZ2F2H',NULL,'2015-02-11 16:54:34',NULL),(28,NULL,'tok_15VBGm2eZvKYlo2CCypHT5jU',NULL,'2015-02-11 16:55:56',NULL),(29,NULL,'tok_15VBJW2eZvKYlo2CUoikhGme',NULL,'2015-02-11 16:58:48',NULL),(30,NULL,'tok_15VBK52eZvKYlo2CRawK5O1Q',NULL,'2015-02-11 16:59:21',NULL),(31,NULL,'tok_15VBLK2eZvKYlo2CCY8CQML4',NULL,'2015-02-11 17:00:39',NULL),(32,NULL,'tok_15VBMI2eZvKYlo2CZ4eHqt5t',NULL,'2015-02-11 17:01:39',NULL),(33,NULL,'tok_15VBN32eZvKYlo2CJpjGORnF',NULL,'2015-02-11 17:02:25',NULL),(34,NULL,'tok_15VBOK2eZvKYlo2CQZf2EmCo',NULL,'2015-02-11 17:03:44',NULL),(35,NULL,'tok_15VBOu2eZvKYlo2CoiCGeIQf',NULL,'2015-02-11 17:04:21',NULL),(36,NULL,'tok_15VCMt2eZvKYlo2CqyUHFOql',NULL,'2015-02-11 18:06:19',NULL),(37,NULL,'tok_15VCNY2eZvKYlo2CQx4H6Hdq',NULL,'2015-02-11 18:07:03',NULL),(38,NULL,'tok_15VCOH2eZvKYlo2CXueNG4M9',NULL,'2015-02-11 18:07:45',NULL),(39,NULL,'tok_15VCQD2eZvKYlo2Cj6hXY571',NULL,'2015-02-11 18:09:45',NULL),(40,NULL,'tok_15VCRX2eZvKYlo2COF3yKGoG',NULL,'2015-02-11 18:11:08',NULL),(41,NULL,'tok_15VCZo2eZvKYlo2CRRoTIBNK',NULL,'2015-02-11 18:19:40',NULL),(42,NULL,'tok_15VCal2eZvKYlo2Cj4h9yIp7',NULL,'2015-02-11 18:20:39',NULL),(43,NULL,'tok_15VCbG2eZvKYlo2C4ecNTPbp',NULL,'2015-02-11 18:21:12',NULL),(44,NULL,'tok_15VCbu2eZvKYlo2ChKt7Osrf',NULL,'2015-02-11 18:21:50',NULL),(45,NULL,'tok_15VCpb2eZvKYlo2CNHG6Pc9p',NULL,'2015-02-11 18:35:59',NULL),(46,NULL,'tok_15VCq32eZvKYlo2C99N6cOlT',NULL,'2015-02-11 18:36:26',NULL),(47,NULL,'tok_15VCye2eZvKYlo2CUKz29mP5',NULL,'2015-02-11 18:45:21',NULL),(48,NULL,'tok_15VD3f2eZvKYlo2COziOQdWq',NULL,'2015-02-11 18:50:31',NULL),(49,NULL,'tok_15VD4O2eZvKYlo2CF1VWVq1E',NULL,'2015-02-11 18:51:16',NULL),(50,NULL,'tok_15VD7h2eZvKYlo2COpJGv0w4',NULL,'2015-02-11 18:54:41',NULL),(51,NULL,'tok_15VDBm2eZvKYlo2CtSvo8ObS',NULL,'2015-02-11 18:58:54',NULL),(52,NULL,'tok_15VDDA2eZvKYlo2C5hCP3PVV',NULL,'2015-02-11 19:00:21',NULL),(53,NULL,'tok_15VDE32eZvKYlo2C0rOm73M1',NULL,'2015-02-11 19:01:15',NULL),(54,NULL,'tok_15VDGW2eZvKYlo2CcPMAcTGY',NULL,'2015-02-11 19:03:48',NULL),(55,NULL,'tok_15VDHD2eZvKYlo2CMmedjEtf',NULL,'2015-02-11 19:04:31',NULL),(56,NULL,'tok_15VDIu2eZvKYlo2CtW2nBtVv',NULL,'2015-02-11 19:06:16',NULL),(57,NULL,'tok_15VDJU2eZvKYlo2CguS5TyN9',NULL,'2015-02-11 19:06:53',NULL),(58,NULL,'tok_15VDNe2eZvKYlo2CTvn8fvya',NULL,'2015-02-11 19:11:10',NULL),(59,NULL,'tok_15VDPR2eZvKYlo2CLJlNIQ2G',NULL,'2015-02-11 19:13:01',NULL),(60,NULL,'tok_15VDS02eZvKYlo2Cnph7VJ7K',NULL,'2015-02-11 19:15:40',NULL),(61,NULL,'tok_15VDV72eZvKYlo2CY0sKTvcc',NULL,'2015-02-11 19:18:53',NULL),(62,NULL,'tok_15VDVr2eZvKYlo2CskpvtKSq',NULL,'2015-02-11 19:19:39',NULL),(63,NULL,NULL,NULL,'2015-02-11 19:23:35',NULL),(64,NULL,'tok_15VDb52eZvKYlo2CBQTT2SUc',NULL,'2015-02-11 19:25:03',NULL),(65,NULL,'tok_15VDfA2eZvKYlo2CR6Y9tIQn',NULL,'2015-02-11 19:29:16',NULL),(66,NULL,'tok_15VDmp2eZvKYlo2Cd4HgzKaY',NULL,'2015-02-11 19:37:11',NULL),(67,NULL,'tok_15VDuw2eZvKYlo2CFbx9ufXC',NULL,'2015-02-11 19:45:34',NULL),(68,NULL,'tok_15VE002eZvKYlo2CuDg8tfF7',NULL,'2015-02-11 19:50:48',NULL),(69,NULL,'tok_15VE1u2eZvKYlo2C7WafYY9g',NULL,'2015-02-11 19:52:46',NULL),(70,NULL,'tok_15VE5G2eZvKYlo2CiJNnq0wu',NULL,'2015-02-11 19:56:14',NULL),(71,NULL,'tok_15VE9a2eZvKYlo2CIQ95FaWp',NULL,'2015-02-11 20:00:42',NULL),(72,NULL,'tok_15VEFp2eZvKYlo2CZaYV7fqK',NULL,'2015-02-11 20:07:09',NULL),(73,NULL,'tok_15VEHD2eZvKYlo2CtDqkC2V3',NULL,'2015-02-11 20:08:35',NULL),(74,NULL,'tok_15VEKC2eZvKYlo2CYQK1k21w',NULL,'2015-02-11 20:11:40',NULL),(75,NULL,'tok_15VGI92eZvKYlo2C4WwTwtR4',NULL,'2015-02-11 22:17:41',NULL),(76,NULL,'tok_15VGJt2eZvKYlo2CexeZV37F',NULL,'2015-02-11 22:19:29',NULL),(77,NULL,'tok_15VGLR2eZvKYlo2Cqu4czrpo',NULL,'2015-02-11 22:21:05',NULL),(78,NULL,'tok_15VGMS2eZvKYlo2CQ0guJ52J',NULL,'2015-02-11 22:22:08',NULL),(79,NULL,'tok_15VGNo2eZvKYlo2Cb8ysCO1Z',NULL,'2015-02-11 22:23:35',NULL),(80,NULL,'tok_15VGqk2eZvKYlo2CilYLHNld',NULL,'2015-02-11 22:53:26',NULL),(81,NULL,'tok_15VGss2eZvKYlo2CHts6KFkZ',NULL,'2015-02-11 22:55:39',NULL),(82,NULL,'tok_15VGvQ2eZvKYlo2CByChp0fV',NULL,'2015-02-11 22:58:16',NULL),(83,NULL,'tok_15VGvu2eZvKYlo2CT0qC4Cbn',NULL,'2015-02-11 22:58:47',NULL),(84,NULL,'tok_15VGx22eZvKYlo2CVZHdOR3G',NULL,'2015-02-11 22:59:56',NULL);
/*!40000 ALTER TABLE `billings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) DEFAULT NULL,
  `image_link` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Shirts',NULL,'Awesome crossfit shirts',NULL,NULL),(2,'Hats',NULL,'Cool hats',NULL,NULL),(3,'Mugs',NULL,'Coffeeeee',NULL,NULL),(4,'Weights',NULL,'Gainz',NULL,NULL),(5,'Gymnastics ',NULL,NULL,NULL,NULL),(6,'Shakes',NULL,NULL,'2012-02-09 00:00:00',NULL),(10,'Vitaminas',NULL,NULL,'2015-02-09 12:15:47',NULL),(11,'Shakers',NULL,NULL,'2015-02-09 12:52:46',NULL),(13,'Fish Oil',NULL,NULL,'2015-02-09 13:25:39',NULL),(14,'Shoes',NULL,NULL,'2015-02-10 01:14:53',NULL),(15,'Suppliments',NULL,NULL,'2015-02-10 09:59:57',NULL),(16,'Gear',NULL,NULL,'2015-02-10 10:04:29',NULL),(17,'New Gear',NULL,NULL,'2015-02-10 10:09:06',NULL),(18,'More New Gear',NULL,NULL,'2015-02-10 10:10:35',NULL),(19,'Omegas',NULL,NULL,'2015-02-10 10:16:39',NULL),(20,'Drinks',NULL,NULL,'2015-02-10 10:26:10',NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories_have_products`
--

DROP TABLE IF EXISTS `categories_have_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories_have_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `products_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_products_has_categories_categories1_idx` (`categories_id`),
  KEY `fk_products_has_categories_products1_idx` (`products_id`),
  CONSTRAINT `fk_products_has_categories_categories1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_has_categories_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories_have_products`
--

LOCK TABLES `categories_have_products` WRITE;
/*!40000 ALTER TABLE `categories_have_products` DISABLE KEYS */;
INSERT INTO `categories_have_products` VALUES (1,29,5,NULL,NULL),(4,68,20,'2015-02-09 13:15:49','0000-00-00 00:00:00'),(9,1,1,NULL,NULL),(10,23,4,'2015-02-09 00:00:00',NULL),(13,76,13,'2015-02-10 22:46:17','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `categories_have_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_products`
--

DROP TABLE IF EXISTS `order_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_products` (
  `order_product_id` int(11) NOT NULL AUTO_INCREMENT,
  `products_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `order_product_name` varchar(45) DEFAULT NULL,
  `order_product_price` varchar(45) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`order_product_id`),
  KEY `fk_products_has_orders_orders1_idx` (`orders_id`),
  KEY `fk_products_has_orders_products1_idx` (`products_id`),
  CONSTRAINT `fk_products_has_orders_orders1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_has_orders_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_products`
--

LOCK TABLES `order_products` WRITE;
/*!40000 ALTER TABLE `order_products` DISABLE KEYS */;
INSERT INTO `order_products` VALUES (1,76,1,'Stronger Faster Harder Fish Oil','59.99',1,'2012-09-05 00:00:00',NULL),(2,68,1,'Progenix Cacoon','99.99',1,'2012-09-05 00:00:00',NULL),(39,23,40,'Ohio Bar','199.99',1,'2015-02-11 19:50:48',NULL),(40,23,41,'Ohio Bar','199.99',1,'2015-02-11 19:52:46',NULL),(41,23,42,'Ohio Bar','199.99',1,'2015-02-11 19:56:14',NULL),(42,23,43,'Ohio Bar','199.99',1,'2015-02-11 20:00:42',NULL),(43,23,44,'Ohio Bar','199.99',1,'2015-02-11 20:07:09',NULL),(44,23,47,'Ohio Bar','199.99',1,'2015-02-11 22:17:41',NULL),(45,23,48,'Ohio Bar','199.99',1,'2015-02-11 22:19:29',NULL),(46,23,49,'Ohio Bar','199.99',1,'2015-02-11 22:21:05',NULL),(47,23,50,'Ohio Bar','199.99',1,'2015-02-11 22:22:08',NULL),(48,23,51,'Ohio Bar','199.99',1,'2015-02-11 22:23:35',NULL),(49,27,52,'Medball Central','1799.99',1,'2015-02-11 22:53:26',NULL),(50,29,52,'Rogue Wood Rings','189.99',1,'2015-02-11 22:53:26',NULL),(51,24,52,'28 mm oly bar','199.99',3,'2015-02-11 22:53:26',NULL),(52,27,53,'Medball Central','1799.99',1,'2015-02-11 22:55:39',NULL),(53,29,53,'Rogue Wood Rings','189.99',1,'2015-02-11 22:55:39',NULL),(54,24,53,'28 mm oly bar','199.99',3,'2015-02-11 22:55:39',NULL),(55,27,54,'Medball Central','1799.99',1,'2015-02-11 22:58:16',NULL),(56,29,54,'Rogue Wood Rings','1989.98',1,'2015-02-11 22:58:16',NULL),(57,24,54,'28 mm oly bar','2189.97',3,'2015-02-11 22:58:16',NULL),(58,27,55,'Medball Central','1799.99',1,'2015-02-11 22:58:47',NULL),(59,29,55,'Rogue Wood Rings','1989.98',1,'2015-02-11 22:58:47',NULL),(60,24,55,'28 mm oly bar','2189.97',3,'2015-02-11 22:58:47',NULL),(61,27,56,'Medball Central','1799.99',1,'2015-02-11 22:59:56',NULL),(62,29,56,'Rogue Wood Rings','189.99',1,'2015-02-11 22:59:56',NULL),(63,24,56,'28 mm oly bar','199.99',3,'2015-02-11 22:59:56',NULL);
/*!40000 ALTER TABLE `order_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `shipping_cost` decimal(10,2) DEFAULT NULL,
  `grand_total` decimal(10,2) DEFAULT NULL,
  `shipping_address_id` int(11) DEFAULT NULL,
  `billing_address_id` int(11) DEFAULT NULL,
  `shipping_method` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `billings_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`billings_id`),
  KEY `fk_orders_billings1_idx` (`billings_id`),
  CONSTRAINT `fk_orders_billings1` FOREIGN KEY (`billings_id`) REFERENCES `billings` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,359.97,20.00,379.97,1,2,NULL,'2012-02-09 00:00:00',NULL,1),(40,1,NULL,NULL,NULL,72,72,NULL,'2015-02-11 19:50:48',NULL,68),(41,1,NULL,NULL,NULL,73,73,NULL,'2015-02-11 19:52:46',NULL,69),(42,1,NULL,NULL,NULL,74,74,NULL,'2015-02-11 19:56:14',NULL,70),(43,1,NULL,NULL,NULL,75,75,NULL,'2015-02-11 20:00:42',NULL,71),(44,1,NULL,NULL,NULL,76,76,NULL,'2015-02-11 20:07:09',NULL,72),(45,1,NULL,NULL,NULL,77,77,NULL,'2015-02-11 20:08:35',NULL,73),(46,1,NULL,NULL,NULL,78,78,NULL,'2015-02-11 20:11:40',NULL,74),(47,1,NULL,NULL,NULL,79,79,NULL,'2015-02-11 22:17:41',NULL,75),(48,1,NULL,NULL,NULL,80,80,NULL,'2015-02-11 22:19:29',NULL,76),(49,1,NULL,NULL,NULL,81,81,NULL,'2015-02-11 22:21:05',NULL,77),(50,1,NULL,NULL,NULL,82,82,NULL,'2015-02-11 22:22:08',NULL,78),(51,1,NULL,9.95,209.94,83,83,NULL,'2015-02-11 22:23:35','0000-00-00 00:00:00',79),(52,1,599.97,9.95,609.92,84,84,NULL,'2015-02-11 22:53:26','0000-00-00 00:00:00',80),(53,1,599.97,9.95,609.92,85,85,NULL,'2015-02-11 22:55:39','0000-00-00 00:00:00',81),(54,1,10359.88,9.95,10389.73,86,86,NULL,'2015-02-11 22:58:16','0000-00-00 00:00:00',82),(55,2,10359.88,9.95,10389.73,87,87,NULL,'2015-02-11 22:58:47','0000-00-00 00:00:00',83),(56,1,2589.95,9.95,2619.80,88,88,NULL,'2015-02-11 22:59:56','0000-00-00 00:00:00',84);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_has_addresses`
--

DROP TABLE IF EXISTS `orders_has_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_has_addresses` (
  `orders_id` int(11) NOT NULL,
  `addresses_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`orders_id`,`addresses_id`),
  KEY `fk_orders_has_addresses_addresses1_idx` (`addresses_id`),
  KEY `fk_orders_has_addresses_orders1_idx` (`orders_id`),
  CONSTRAINT `fk_orders_has_addresses_addresses1` FOREIGN KEY (`addresses_id`) REFERENCES `addresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_has_addresses_orders1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_has_addresses`
--

LOCK TABLES `orders_has_addresses` WRITE;
/*!40000 ALTER TABLE `orders_has_addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders_has_addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `price` decimal(10,2) DEFAULT NULL,
  `quant_sold` int(11) DEFAULT NULL,
  `inventory_count` int(11) DEFAULT NULL,
  `image_link` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'T-Shirt','The most amazing t-shirt you will ever wear',1000.00,1,999,'/uploads/smallpistol.jpg','2012-02-07 00:00:00',NULL),(22,'Crossfit workout shirt',' ',29.95,15,32,'/uploads/small_muscle_ups5.jpg','2015-02-07 23:12:56','0000-00-00 00:00:00'),(23,'Ohio Bar','Absolutely Amazing OLY lifting bar ',199.99,8,988,'/uploads/ohio-bar-th_3.jpg','2015-02-08 22:37:32','0000-00-00 00:00:00'),(24,'28 mm oly bar','Training bar for the beginner ',199.99,15,78,'/uploads/28mm-olympic-training-bar-web-th1.jpg','2015-02-08 22:38:07','0000-00-00 00:00:00'),(25,'Rogue 45#  Hundo Competition Bumper Weight','Awesome sauce for oly meets',99.95,NULL,22,'/uploads/hundo-comp-th.jpg','2015-02-08 22:38:59',NULL),(26,'BA Squat Rack','Get your squat on ',499.95,NULL,22,'/uploads/sml-2-th.jpg','2015-02-08 22:39:37',NULL),(27,'Medball Central','Get this awesome medball kit with 20# and 14# pro medbals and mountable shelf ',1799.99,5,94,'/uploads/strip-medball-shelf-th.jpg','2015-02-08 22:40:23','0000-00-00 00:00:00'),(28,'Ultimate Gym Bag','With errrrything you need for dem gainz ',349.99,NULL,77,'/uploads/rogue-gym-bags-h1_1_1.jpg','2015-02-08 22:41:22',NULL),(29,'Rogue Wood Rings',' ',189.99,5,124,'/uploads/wood-rings_1_1_1.jpg','2015-02-09 00:05:26','0000-00-00 00:00:00'),(68,'Progenix Cacoon','Awesome night time recover ',99.99,1,2000,'/uploads/IMG_5626-298x40023.jpg','2015-02-09 13:15:49','0000-00-00 00:00:00'),(76,'Stronger Faster Harder Fish Oil','Amazing omega threes ',59.99,1,99,'/uploads/119023.jpg','2015-02-10 22:46:17','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_has_related_roducts`
--

DROP TABLE IF EXISTS `products_has_related_roducts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_has_related_roducts` (
  `products_id` int(11) NOT NULL,
  `related_roducts_id` int(11) NOT NULL,
  PRIMARY KEY (`products_id`,`related_roducts_id`),
  KEY `fk_products_has_related_roducts_related_roducts1_idx` (`related_roducts_id`),
  KEY `fk_products_has_related_roducts_products1_idx` (`products_id`),
  CONSTRAINT `fk_products_has_related_roducts_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_has_related_roducts_related_roducts1` FOREIGN KEY (`related_roducts_id`) REFERENCES `related_roducts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_has_related_roducts`
--

LOCK TABLES `products_has_related_roducts` WRITE;
/*!40000 ALTER TABLE `products_has_related_roducts` DISABLE KEYS */;
/*!40000 ALTER TABLE `products_has_related_roducts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `related_roducts`
--

DROP TABLE IF EXISTS `related_roducts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `related_roducts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `related_product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `related_roducts`
--

LOCK TABLES `related_roducts` WRITE;
/*!40000 ALTER TABLE `related_roducts` DISABLE KEYS */;
/*!40000 ALTER TABLE `related_roducts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shipping_status`
--

DROP TABLE IF EXISTS `shipping_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shipping_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(45) DEFAULT NULL,
  `status_code` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shipping_status`
--

LOCK TABLES `shipping_status` WRITE;
/*!40000 ALTER TABLE `shipping_status` DISABLE KEYS */;
INSERT INTO `shipping_status` VALUES (1,'In Progress',1),(2,'Shipped',2),(3,'Cancelled',NULL);
/*!40000 ALTER TABLE `shipping_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shippings`
--

DROP TABLE IF EXISTS `shippings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shippings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cost` decimal(10,6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shippings`
--

LOCK TABLES `shippings` WRITE;
/*!40000 ALTER TABLE `shippings` DISABLE KEYS */;
/*!40000 ALTER TABLE `shippings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `state` varchar(2) DEFAULT NULL,
  `addresses_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_ar` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`addresses_id`),
  KEY `fk_states_addresses1_idx` (`addresses_id`),
  CONSTRAINT `fk_states_addresses1` FOREIGN KEY (`addresses_id`) REFERENCES `addresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `access_level` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Michael','Wetizman','mw@worldsourcetech.com','9c79093f4bb9e112a9907373ece43421',1,NULL,NULL),(2,'James','Leapord','j@gmail.com','5d41402abc4b2a76b9719d911017c592',2,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users make orders`
--

DROP TABLE IF EXISTS `users make orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users make orders` (
  `orders_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`orders_id`,`users_id`),
  KEY `fk_orders_has_users_users1_idx` (`users_id`),
  KEY `fk_orders_has_users_orders_idx` (`orders_id`),
  CONSTRAINT `fk_orders_has_users_orders` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_has_users_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users make orders`
--

LOCK TABLES `users make orders` WRITE;
/*!40000 ALTER TABLE `users make orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `users make orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_hav_addresses`
--

DROP TABLE IF EXISTS `users_hav_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_hav_addresses` (
  `users_id` int(11) NOT NULL,
  `addresses_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`users_id`,`addresses_id`),
  KEY `fk_users_has_addresses_addresses1_idx` (`addresses_id`),
  KEY `fk_users_has_addresses_users1_idx` (`users_id`),
  CONSTRAINT `fk_users_has_addresses_addresses1` FOREIGN KEY (`addresses_id`) REFERENCES `addresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_addresses_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_hav_addresses`
--

LOCK TABLES `users_hav_addresses` WRITE;
/*!40000 ALTER TABLE `users_hav_addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_hav_addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zip`
--

DROP TABLE IF EXISTS `zip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zip` varchar(9) DEFAULT NULL,
  `states_id` int(11) NOT NULL,
  `states_addresses_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`states_id`,`states_addresses_id`),
  KEY `fk_zip_states1_idx` (`states_id`,`states_addresses_id`),
  CONSTRAINT `fk_zip_states1` FOREIGN KEY (`states_id`, `states_addresses_id`) REFERENCES `states` (`id`, `addresses_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zip`
--

LOCK TABLES `zip` WRITE;
/*!40000 ALTER TABLE `zip` DISABLE KEYS */;
/*!40000 ALTER TABLE `zip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zip_has_shipping_prices`
--

DROP TABLE IF EXISTS `zip_has_shipping_prices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zip_has_shipping_prices` (
  `zip_id` int(11) NOT NULL,
  `zip_states_id` int(11) NOT NULL,
  `zip_states_addresses_id` int(11) NOT NULL,
  `shipping_prices_id` int(11) NOT NULL,
  `shipping_prices_shipping_id` int(11) NOT NULL,
  PRIMARY KEY (`zip_id`,`zip_states_id`,`zip_states_addresses_id`,`shipping_prices_id`,`shipping_prices_shipping_id`),
  KEY `fk_zip_has_shipping_prices_zip1_idx` (`zip_id`,`zip_states_id`,`zip_states_addresses_id`),
  CONSTRAINT `fk_zip_has_shipping_prices_zip1` FOREIGN KEY (`zip_id`, `zip_states_id`, `zip_states_addresses_id`) REFERENCES `zip` (`id`, `states_id`, `states_addresses_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zip_has_shipping_prices`
--

LOCK TABLES `zip_has_shipping_prices` WRITE;
/*!40000 ALTER TABLE `zip_has_shipping_prices` DISABLE KEYS */;
/*!40000 ALTER TABLE `zip_has_shipping_prices` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-02-12  2:09:29
