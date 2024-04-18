-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: louka
-- ------------------------------------------------------
-- Server version	8.0.34

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `accountuser`
--

DROP TABLE IF EXISTS `accountuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `accountuser` (
  `accountUserID` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`accountUserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accountuser`
--

LOCK TABLES `accountuser` WRITE;
/*!40000 ALTER TABLE `accountuser` DISABLE KEYS */;
/*!40000 ALTER TABLE `accountuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `choixuser`
--

DROP TABLE IF EXISTS `choixuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `choixuser` (
  `choixUserID` int NOT NULL AUTO_INCREMENT,
  `choixFaitUser` varchar(20) DEFAULT NULL,
  `sportsID` int DEFAULT NULL,
  `userID` int DEFAULT NULL,
  PRIMARY KEY (`choixUserID`),
  KEY `sportsID` (`sportsID`),
  KEY `userID` (`userID`),
  CONSTRAINT `choixuser_ibfk_1` FOREIGN KEY (`sportsID`) REFERENCES `sports` (`sportsID`),
  CONSTRAINT `choixuser_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choixuser`
--

LOCK TABLES `choixuser` WRITE;
/*!40000 ALTER TABLE `choixuser` DISABLE KEYS */;
/*!40000 ALTER TABLE `choixuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complexes`
--

DROP TABLE IF EXISTS `complexes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `complexes` (
  `complexesID` int NOT NULL AUTO_INCREMENT,
  `adresseComplexe` varchar(100) DEFAULT NULL,
  `nomComplexe` varchar(50) DEFAULT NULL,
  `villeComplexe` varchar(40) DEFAULT NULL,
  `numPhoneComplexe` varchar(40) DEFAULT NULL,
  `descriptionComplexes` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`complexesID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complexes`
--

LOCK TABLES `complexes` WRITE;
/*!40000 ALTER TABLE `complexes` DISABLE KEYS */;
INSERT INTO `complexes` VALUES (1,'Rue Joseph Hanse 6','Centre sportif de Floreffe','Floreffe','081 45 18 11','Plongez dans un monde où la passion du sport rencontre l\'excitation de la compétition et le plaisir de la communauté. Bienvenue à Oasis, le complexe sportif de vos rêves, où chaque instant est une célébration de la vie active et saine.'),(2,'Rue Géo Warzée 19','Hall Omnisport de Wanze','Wanze',' 085 25 16 92','Oasis offre une variété d\'installations de classe mondiale pour répondre à tous vos besoins sportifs. Des terrains impeccables pour le football, le basketball, le tennis, le cricket et bien d\'autres sports encore vous attendent. Peu importe votre passion, nous avons l\'espace idéal pour vous permettre de briller.'),(3,'Av. de Tabora 21','Centre sportif de Namur','Namur','081 24 71 56','Le stade principal d\'Oasis est le lieu ultime pour vivre des moments inoubliables. Des compétitions de niveau professionnel aux spectacles sensationnels, notre stade est le cœur battant de l\'action. Joignez-vous à nous pour des événements électrisants qui laisseront des souvenirs impérissables.'),(4,'Pl. Wilson 15','Centre sportif de Châtelet','Châtelet','085 65 84 18','Notre salle de sport ultramoderne est l\'endroit idéal pour sculpter votre corps et augmenter votre force. Avec des équipements de pointe et des instructeurs passionnés, vous atteindrez vos objectifs de fitness plus rapidement que jamais.'),(5,'Rue Visart de Bocarmé 30','Complexe de Temploux','Temploux','083 52 78 69','Chez Oasis, nous croyons en l\'équilibre entre l\'esprit, le corps et l\'âme. Profitez de nos espaces de détente, de nos sentiers de jogging sinueux et de nos jardins paisibles pour vous ressourcer après une séance d\'entraînement stimulante.'),(6,'Rue des Hayeffes 27','Complexe sportif de Mont-Saint-Guibert','Mont-Saint-Guibert','081 45 10 14',NULL);
/*!40000 ALTER TABLE `complexes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complexessports`
--

DROP TABLE IF EXISTS `complexessports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `complexessports` (
  `complexesSportsID` int NOT NULL AUTO_INCREMENT,
  `nbrePlacesDispo` int DEFAULT NULL,
  `complexesID` int DEFAULT NULL,
  `sportsID` int DEFAULT NULL,
  PRIMARY KEY (`complexesSportsID`),
  KEY `complexesID` (`complexesID`),
  KEY `sportsID` (`sportsID`),
  CONSTRAINT `complexessports_ibfk_1` FOREIGN KEY (`complexesID`) REFERENCES `complexes` (`complexesID`),
  CONSTRAINT `complexessports_ibfk_2` FOREIGN KEY (`sportsID`) REFERENCES `sports` (`sportsID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complexessports`
--

LOCK TABLES `complexessports` WRITE;
/*!40000 ALTER TABLE `complexessports` DISABLE KEYS */;
/*!40000 ALTER TABLE `complexessports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inscription` (
  `inscriptionID` int NOT NULL AUTO_INCREMENT,
  `dateInscription` date DEFAULT NULL,
  `complexesSportsID` int DEFAULT NULL,
  `userID` int DEFAULT NULL,
  PRIMARY KEY (`inscriptionID`),
  KEY `complexesSportsID` (`complexesSportsID`),
  KEY `userID` (`userID`),
  CONSTRAINT `inscription_ibfk_1` FOREIGN KEY (`complexesSportsID`) REFERENCES `complexessports` (`complexesSportsID`),
  CONSTRAINT `inscription_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscription`
--

LOCK TABLES `inscription` WRITE;
/*!40000 ALTER TABLE `inscription` DISABLE KEYS */;
/*!40000 ALTER TABLE `inscription` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rendezvous`
--

DROP TABLE IF EXISTS `rendezvous`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rendezvous` (
  `rendezVousID` int NOT NULL AUTO_INCREMENT,
  `dateRendezVous` date DEFAULT NULL,
  `heure` time DEFAULT NULL,
  `lieuRendezVous` varchar(20) DEFAULT NULL,
  `userID` int DEFAULT NULL,
  PRIMARY KEY (`rendezVousID`),
  KEY `userID` (`userID`),
  CONSTRAINT `rendezvous_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rendezvous`
--

LOCK TABLES `rendezvous` WRITE;
/*!40000 ALTER TABLE `rendezvous` DISABLE KEYS */;
INSERT INTO `rendezvous` VALUES (3,'2024-01-01','15:00:00','Floreffe',1);
/*!40000 ALTER TABLE `rendezvous` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sports`
--

DROP TABLE IF EXISTS `sports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sports` (
  `sportsID` int NOT NULL AUTO_INCREMENT,
  `nomSports` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`sportsID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sports`
--

LOCK TABLES `sports` WRITE;
/*!40000 ALTER TABLE `sports` DISABLE KEYS */;
INSERT INTO `sports` VALUES (1,'football'),(2,'Basketball'),(3,'Tennis'),(4,'Escalade'),(5,'Badminton'),(6,'Handball'),(7,'Gymnastique'),(8,'Boxe'),(9,'Karaté'),(10,'Judo'),(11,'Taekwondo'),(12,'Athlétisme'),(13,'Danse'),(14,'Yoga'),(15,'Tir arc'),(16,'Escrime'),(17,'Jumping Fitness'),(18,'Taï-chi'),(19,'Frisbee en salle'),(20,'Lutte'),(21,'Tennis de table ');
/*!40000 ALTER TABLE `sports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `userID` int NOT NULL AUTO_INCREMENT,
  `nomUser` varchar(30) DEFAULT NULL,
  `prenomUser` varchar(30) DEFAULT NULL,
  `genreUser` varchar(1) DEFAULT NULL,
  `bornUser` date DEFAULT NULL,
  `mailUser` varchar(50) DEFAULT NULL,
  `passwordUser` varchar(100) DEFAULT NULL,
  `loginUser` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Test','Test','M','2000-01-01','test@gmail.com','MYtest','test123');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-18 16:12:24
