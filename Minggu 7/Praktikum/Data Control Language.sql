-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: universitas
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `mahasiswa_ekonomi`
--

DROP TABLE IF EXISTS `mahasiswa_ekonomi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mahasiswa_ekonomi` (
  `NIM` char(9) DEFAULT NULL,
  `Nama` char(50) DEFAULT NULL,
  `Umur` int(11) DEFAULT NULL,
  `Tempat_lahir` char(50) DEFAULT NULL,
  `IPK` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mahasiswa_ekonomi`
--

LOCK TABLES `mahasiswa_ekonomi` WRITE;
/*!40000 ALTER TABLE `mahasiswa_ekonomi` DISABLE KEYS */;
INSERT INTO `mahasiswa_ekonomi` VALUES ('089023013','Alex Supriyanto',23,'Surabaya',2.90);
/*!40000 ALTER TABLE `mahasiswa_ekonomi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mahasiswa_rmik`
--

DROP TABLE IF EXISTS `mahasiswa_rmik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mahasiswa_rmik` (
  `NIM` char(9) DEFAULT NULL,
  `Nama` char(50) DEFAULT NULL,
  `Umur` int(2) DEFAULT NULL,
  `Tempat_lahir` char(50) DEFAULT NULL,
  `IPK` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mahasiswa_rmik`
--

LOCK TABLES `mahasiswa_rmik` WRITE;
/*!40000 ALTER TABLE `mahasiswa_rmik` DISABLE KEYS */;
INSERT INTO `mahasiswa_rmik` VALUES ('089045001','Andi Suryo',23,'Jakarta',2.70);
/*!40000 ALTER TABLE `mahasiswa_rmik` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-08 12:29:32
