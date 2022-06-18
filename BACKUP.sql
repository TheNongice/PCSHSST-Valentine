-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: council_01
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `announce`
--

DROP TABLE IF EXISTS `announce`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texts` varchar(9999) NOT NULL,
  `lastchanged` varchar(999) NOT NULL,
  `titles` varchar(999) NOT NULL,
  `dates_change` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announce`
--

LOCK TABLES `announce` WRITE;
/*!40000 ALTER TABLE `announce` DISABLE KEYS */;
/*!40000 ALTER TABLE `announce` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std11`
--

DROP TABLE IF EXISTS `class_std11`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std11` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std11`
--

LOCK TABLES `class_std11` WRITE;
/*!40000 ALTER TABLE `class_std11` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std11` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std12`
--

DROP TABLE IF EXISTS `class_std12`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std12` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std12`
--

LOCK TABLES `class_std12` WRITE;
/*!40000 ALTER TABLE `class_std12` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std12` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std13`
--

DROP TABLE IF EXISTS `class_std13`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std13` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std13`
--

LOCK TABLES `class_std13` WRITE;
/*!40000 ALTER TABLE `class_std13` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std13` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std14`
--

DROP TABLE IF EXISTS `class_std14`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std14` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std14`
--

LOCK TABLES `class_std14` WRITE;
/*!40000 ALTER TABLE `class_std14` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std14` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std21`
--

DROP TABLE IF EXISTS `class_std21`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std21` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std21`
--

LOCK TABLES `class_std21` WRITE;
/*!40000 ALTER TABLE `class_std21` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std21` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std22`
--

DROP TABLE IF EXISTS `class_std22`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std22` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std22`
--

LOCK TABLES `class_std22` WRITE;
/*!40000 ALTER TABLE `class_std22` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std22` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std23`
--

DROP TABLE IF EXISTS `class_std23`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std23` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std23`
--

LOCK TABLES `class_std23` WRITE;
/*!40000 ALTER TABLE `class_std23` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std23` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std24`
--

DROP TABLE IF EXISTS `class_std24`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std24` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std24`
--

LOCK TABLES `class_std24` WRITE;
/*!40000 ALTER TABLE `class_std24` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std24` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std31`
--

DROP TABLE IF EXISTS `class_std31`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std31` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std31`
--

LOCK TABLES `class_std31` WRITE;
/*!40000 ALTER TABLE `class_std31` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std31` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std32`
--

DROP TABLE IF EXISTS `class_std32`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std32` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std32`
--

LOCK TABLES `class_std32` WRITE;
/*!40000 ALTER TABLE `class_std32` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std32` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std33`
--

DROP TABLE IF EXISTS `class_std33`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std33` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std33`
--

LOCK TABLES `class_std33` WRITE;
/*!40000 ALTER TABLE `class_std33` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std33` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std34`
--

DROP TABLE IF EXISTS `class_std34`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std34` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std34`
--

LOCK TABLES `class_std34` WRITE;
/*!40000 ALTER TABLE `class_std34` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std34` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std41`
--

DROP TABLE IF EXISTS `class_std41`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std41` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std41`
--

LOCK TABLES `class_std41` WRITE;
/*!40000 ALTER TABLE `class_std41` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std41` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std42`
--

DROP TABLE IF EXISTS `class_std42`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std42` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std42`
--

LOCK TABLES `class_std42` WRITE;
/*!40000 ALTER TABLE `class_std42` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std42` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std43`
--

DROP TABLE IF EXISTS `class_std43`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std43` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std43`
--

LOCK TABLES `class_std43` WRITE;
/*!40000 ALTER TABLE `class_std43` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std43` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std44`
--

DROP TABLE IF EXISTS `class_std44`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std44` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std44`
--

LOCK TABLES `class_std44` WRITE;
/*!40000 ALTER TABLE `class_std44` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std44` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std45`
--

DROP TABLE IF EXISTS `class_std45`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std45` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std45`
--

LOCK TABLES `class_std45` WRITE;
/*!40000 ALTER TABLE `class_std45` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std45` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std46`
--

DROP TABLE IF EXISTS `class_std46`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std46` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std46`
--

LOCK TABLES `class_std46` WRITE;
/*!40000 ALTER TABLE `class_std46` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std46` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std51`
--

DROP TABLE IF EXISTS `class_std51`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std51` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std51`
--

LOCK TABLES `class_std51` WRITE;
/*!40000 ALTER TABLE `class_std51` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std51` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std52`
--

DROP TABLE IF EXISTS `class_std52`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std52` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std52`
--

LOCK TABLES `class_std52` WRITE;
/*!40000 ALTER TABLE `class_std52` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std52` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std53`
--

DROP TABLE IF EXISTS `class_std53`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std53` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std53`
--

LOCK TABLES `class_std53` WRITE;
/*!40000 ALTER TABLE `class_std53` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std53` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std54`
--

DROP TABLE IF EXISTS `class_std54`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std54` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std54`
--

LOCK TABLES `class_std54` WRITE;
/*!40000 ALTER TABLE `class_std54` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std54` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std55`
--

DROP TABLE IF EXISTS `class_std55`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std55` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std55`
--

LOCK TABLES `class_std55` WRITE;
/*!40000 ALTER TABLE `class_std55` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std55` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std56`
--

DROP TABLE IF EXISTS `class_std56`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std56` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std56`
--

LOCK TABLES `class_std56` WRITE;
/*!40000 ALTER TABLE `class_std56` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std56` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std61`
--

DROP TABLE IF EXISTS `class_std61`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std61` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std61`
--

LOCK TABLES `class_std61` WRITE;
/*!40000 ALTER TABLE `class_std61` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std61` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std62`
--

DROP TABLE IF EXISTS `class_std62`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std62` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std62`
--

LOCK TABLES `class_std62` WRITE;
/*!40000 ALTER TABLE `class_std62` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std62` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std63`
--

DROP TABLE IF EXISTS `class_std63`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std63` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std63`
--

LOCK TABLES `class_std63` WRITE;
/*!40000 ALTER TABLE `class_std63` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std63` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std64`
--

DROP TABLE IF EXISTS `class_std64`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std64` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std64`
--

LOCK TABLES `class_std64` WRITE;
/*!40000 ALTER TABLE `class_std64` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std64` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std65`
--

DROP TABLE IF EXISTS `class_std65`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std65` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std65`
--

LOCK TABLES `class_std65` WRITE;
/*!40000 ALTER TABLE `class_std65` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std65` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_std66`
--

DROP TABLE IF EXISTS `class_std66`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_std66` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_std66`
--

LOCK TABLES `class_std66` WRITE;
/*!40000 ALTER TABLE `class_std66` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_std66` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `request_list`
--

DROP TABLE IF EXISTS `request_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_rq` varchar(100) NOT NULL,
  `nickname_rq` varchar(45) NOT NULL,
  `class_rq` varchar(10) NOT NULL,
  `name_rec` varchar(100) NOT NULL,
  `nickname_rec` varchar(45) NOT NULL,
  `class_rec` varchar(10) NOT NULL,
  `quest1` varchar(999) NOT NULL,
  `quest2` varchar(999) NOT NULL,
  `quest3` varchar(999) NOT NULL,
  `quest4` varchar(999) DEFAULT NULL,
  `quest5` varchar(999) DEFAULT NULL,
  `amount_photo` int(11) NOT NULL,
  `status_pub` varchar(45) DEFAULT 'ยังไม่ชำระค่าจอง',
  `status_admin` varchar(45) DEFAULT NULL,
  `price` float NOT NULL,
  `date_req` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request_list`
--

LOCK TABLES `request_list` WRITE;
/*!40000 ALTER TABLE `request_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `request_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(64) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Firstname` varchar(128) NOT NULL,
  `Lastname` varchar(128) NOT NULL,
  `Roles` varchar(45) NOT NULL,
  `changePwd` int(9) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
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

-- Dump completed on 2022-06-18 10:39:37
