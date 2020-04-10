-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: rentalmobil
-- ------------------------------------------------------
-- Server version	8.0.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `kendaraan`
--

DROP TABLE IF EXISTS `kendaraan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kendaraan` (
  `no_plat` varchar(10) NOT NULL,
  `id_type` int DEFAULT NULL,
  `tahun` year NOT NULL,
  `tarif_kendaraan` int NOT NULL,
  `status_kendaraan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`no_plat`),
  KEY `id_type` (`id_type`),
  CONSTRAINT `id_type` FOREIGN KEY (`id_type`) REFERENCES `tipe_kendaraan` (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kendaraan`
--

LOCK TABLES `kendaraan` WRITE;
/*!40000 ALTER TABLE `kendaraan` DISABLE KEYS */;
INSERT INTO `kendaraan` VALUES ('H4532JQ',16,2017,180000,'BEBAS PAKAI'),('H8788HA',17,2017,250000,'BEBAS PAKAI'),('H9668UI',2,2013,180000,'BEBAS PAKAI');
/*!40000 ALTER TABLE `kendaraan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pelanggan`
--

DROP TABLE IF EXISTS `pelanggan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pelanggan` (
  `no_ktp` int NOT NULL AUTO_INCREMENT,
  `nama_pelanggan` varchar(30) NOT NULL,
  `alamat_pelanggan` varchar(50) DEFAULT NULL,
  `telp_pelanggan` char(14) DEFAULT NULL,
  PRIMARY KEY (`no_ktp`)
) ENGINE=InnoDB AUTO_INCREMENT=12348 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pelanggan`
--

LOCK TABLES `pelanggan` WRITE;
/*!40000 ALTER TABLE `pelanggan` DISABLE KEYS */;
INSERT INTO `pelanggan` VALUES (12345,'Rudy','Jl. Manggis no.20','081121212112'),(12346,'Yuny','Jl. Adi Sucipto no.99','081234234234'),(12347,'Wisnu','Jl. Boja Utara no. 12','089112321345');
/*!40000 ALTER TABLE `pelanggan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sopir`
--

DROP TABLE IF EXISTS `sopir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sopir` (
  `id_sopir` int NOT NULL AUTO_INCREMENT,
  `nama_sopir` varchar(30) NOT NULL,
  `alamat_sopir` varchar(50) DEFAULT NULL,
  `telp_sopir` char(14) DEFAULT NULL,
  `sim` varchar(10) DEFAULT NULL,
  `tarif_sopir` int NOT NULL,
  PRIMARY KEY (`id_sopir`)
) ENGINE=InnoDB AUTO_INCREMENT=29130 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sopir`
--

LOCK TABLES `sopir` WRITE;
/*!40000 ALTER TABLE `sopir` DISABLE KEYS */;
INSERT INTO `sopir` VALUES (29127,'Joko','Jl. Sumedang Barat','082101231222','A,C',200000),(29128,'Susilo','Jl. Merdeka Utara','081345665787','A,B,C',190000),(29129,'Anwar','Jl. Beringin no.4','081998076543','A,B,C',220000);
/*!40000 ALTER TABLE `sopir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipe_kendaraan`
--

DROP TABLE IF EXISTS `tipe_kendaraan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipe_kendaraan` (
  `id_type` int NOT NULL AUTO_INCREMENT,
  `type` varchar(25) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipe_kendaraan`
--

LOCK TABLES `tipe_kendaraan` WRITE;
/*!40000 ALTER TABLE `tipe_kendaraan` DISABLE KEYS */;
INSERT INTO `tipe_kendaraan` VALUES (2,'Toyota Avanza'),(16,'Suzuki Ertiga'),(17,'Toyota Innova');
/*!40000 ALTER TABLE `tipe_kendaraan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transaksi` (
  `no_transaksi` int NOT NULL AUTO_INCREMENT,
  `no_ktp` int DEFAULT NULL,
  `id_sopir` int DEFAULT NULL,
  `no_plat` varchar(10) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali_rencana` date NOT NULL,
  `jam_kembali_rencana` time NOT NULL,
  `tgl_kembali_realisasi` date NOT NULL,
  `jam_kembali_realisasi` time NOT NULL,
  `denda` int NOT NULL,
  `km_pinjam` int NOT NULL,
  `km_kembali` int NOT NULL,
  `bbm_pinjam` varchar(10) NOT NULL,
  `bbm_kembali` varchar(10) NOT NULL,
  `kondisi_mobil_pinjam` varchar(30) DEFAULT NULL,
  `kondisi_mobil_kembali` varchar(30) NOT NULL,
  `kerusakan` varchar(20) DEFAULT NULL,
  `biaya_kerusakan` int DEFAULT NULL,
  `biaya_bbm` int NOT NULL,
  PRIMARY KEY (`no_transaksi`),
  KEY `no_ktp` (`no_ktp`),
  KEY `id_sopir` (`id_sopir`),
  KEY `no_plat` (`no_plat`),
  CONSTRAINT `id_sopir` FOREIGN KEY (`id_sopir`) REFERENCES `sopir` (`id_sopir`),
  CONSTRAINT `no_ktp` FOREIGN KEY (`no_ktp`) REFERENCES `pelanggan` (`no_ktp`),
  CONSTRAINT `no_plat` FOREIGN KEY (`no_plat`) REFERENCES `kendaraan` (`no_plat`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=1098775 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` VALUES (1098767,12345,29127,'H9668UI','2020-01-10','2020-03-29','2020-04-07','12:00:00','2020-04-10','22:12:16',500000,23456,24201,'PENUH','SETENGAH','GOOD','GOOD','TIDAK',0,200000),(1098772,12346,29128,'H4532JQ','2020-01-11','2020-02-02','2020-02-05','12:00:00','2020-02-05','11:20:00',0,33234,33788,'PENUH','PENUH','GOOD','GOOD','TIDAK',0,250000),(1098774,12347,29129,'H8788HA','2020-01-11','2020-03-12','2020-03-15','18:00:00','2020-03-15','17:30:00',0,11456,11786,'PENUH','SETENGAH','GOOD','GOOD','TIDAK',0,150000);
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-10 22:31:44
