-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: literie3000
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.18-MariaDB

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
-- Table structure for table `matelas`
--

DROP TABLE IF EXISTS `matelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matelas` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) DEFAULT NULL,
  `dimension` varchar(10) DEFAULT NULL,
  `marque` varchar(15) DEFAULT NULL,
  `initprice` int(11) DEFAULT NULL,
  `soldprice` int(11) DEFAULT NULL,
  `picture` varchar(150) DEFAULT NULL,
  `dispo` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matelas`
--

LOCK TABLES `matelas` WRITE;
/*!40000 ALTER TABLE `matelas` DISABLE KEYS */;
INSERT INTO `matelas` VALUES (7,'Joris','90x190','Goudale',1013,850,'https://www.maisondelaliterie.fr/4224-category_index/polaris-relax.jpg',1),(8,'Tamoul','90x190','Epeda',759,529,'https://www.maisondelaliterie.fr/1531-category_index/contralto.jpg',1),(9,'Waldorf','90x190','Dreamway',809,709,'https://www.maisondelaliterie.fr/1524-category_index/basse.jpg',1),(10,'Melon','160x200','Epeda',1019,509,'https://www.maisondelaliterie.fr/1527-category_index/soprano.jpg',1),(12,'Le Gauquelin','90x190','Timothé',5800,5799,'https://www.maisondelaliterie.fr/1530-category_index/cantate.jpg',1);
/*!40000 ALTER TABLE `matelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'literie3000'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-01 16:51:58
