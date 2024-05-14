-- MySQL dump 10.13  Distrib 8.0.37, for Linux (x86_64)
--
-- Host: localhost    Database: digitalforge_db
-- ------------------------------------------------------
-- Server version       8.0.37

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
-- Table structure for table `preferiti`
--

CREATE DATABASE digitalforge_db;
USE digitalforge_db;

DROP TABLE IF EXISTS `prodotti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prodotti` (
  `id_prodotto` int NOT NULL AUTO_INCREMENT,
  `nominativo` varchar(30) NOT NULL,
  `prezzo` decimal(10,2) NOT NULL,
  `descrizione` text NOT NULL,
  `link_sito_app` varchar(255) NOT NULL,
  `link_img1` varchar(255) NOT NULL,
  `link_img2` varchar(255) DEFAULT NULL,
  `link_img3` varchar(255) DEFAULT NULL,
  `email_ads_add` varchar(50) NOT NULL,
  `produttore` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  PRIMARY KEY (`id_prodotto`),
  KEY `email_ads_add` (`email_ads_add`),
  CONSTRAINT `prodotti_ibfk_1` FOREIGN KEY (`email_ads_add`) REFERENCES `utenti_ads` (`email_ads`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prodotti`
--

LOCK TABLES `prodotti` WRITE;
/*!40000 ALTER TABLE `prodotti` DISABLE KEYS */;
/*!40000 ALTER TABLE `prodotti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utenti`
--

DROP TABLE IF EXISTS `utenti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `utenti` (
  `email_user` varchar(50) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `cognome` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`email_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utenti`
--

LOCK TABLES `utenti` WRITE;
/*!40000 ALTER TABLE `utenti` DISABLE KEYS */;
INSERT INTO `utenti` VALUES ('onizuka@gmoil.com','Onizuka','Ben','onizuka123456');
/*!40000 ALTER TABLE `utenti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utenti_ads`
--

DROP TABLE IF EXISTS `utenti_ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `utenti_ads` (
  `email_ads` varchar(50) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `cognome` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`email_ads`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utenti_ads`
--

LOCK TABLES `utenti_ads` WRITE;
/*!40000 ALTER TABLE `utenti_ads` DISABLE KEYS */;
INSERT INTO `utenti_ads` VALUES ('ads@gmoil.com','Giacomo','Verdi','ads1234567');
/*!40000 ALTER TABLE `utenti_ads` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-14 19:24:24

DROP TABLE IF EXISTS `preferiti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `preferiti` (
  `id_preferito` int NOT NULL AUTO_INCREMENT,
  `id_prodotto_pre` int NOT NULL,
  `email_user_pre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_preferito`),
  UNIQUE KEY `email_user_pre` (`email_user_pre`,`id_prodotto_pre`),
  KEY `id_prodotto_pre` (`id_prodotto_pre`),
  CONSTRAINT `preferiti_ibfk_1` FOREIGN KEY (`id_prodotto_pre`) REFERENCES `prodotti` (`id_prodotto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `preferiti_ibfk_2` FOREIGN KEY (`email_user_pre`) REFERENCES `utenti` (`email_user`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preferiti`
--

LOCK TABLES `preferiti` WRITE;
/*!40000 ALTER TABLE `preferiti` DISABLE KEYS */;
/*!40000 ALTER TABLE `preferiti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prodotti`
--
