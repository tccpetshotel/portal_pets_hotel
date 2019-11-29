CREATE DATABASE  IF NOT EXISTS `tcc_pets_hotel` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `tcc_pets_hotel`;
-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: tcc_pets_hotel
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_client`
--

DROP TABLE IF EXISTS `tb_client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_client`
--

LOCK TABLES `tb_client` WRITE;
/*!40000 ALTER TABLE `tb_client` DISABLE KEYS */;
INSERT INTO `tb_client` VALUES (2,'teste','teste@teste','4ce792e4213ed7c9c92d16b2d3729b95','R. Teste 222','Teste','Teste','999-999',0),(7,'Rafa','rafa@gmail.com','4ce792e4213ed7c9c92d16b2d3729b95','R. Rafa','indaiatuba','SP ','999-999',0),(9,'admin','admin','21232f297a57a5a743894a0e4a801fc3','admin','admin','admin','admin',1);
/*!40000 ALTER TABLE `tb_client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_hotel`
--

DROP TABLE IF EXISTS `tb_hotel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `contato` varchar(100) DEFAULT NULL,
  `CNPJ` varchar(50) DEFAULT NULL,
  `fantasia` varchar(100) DEFAULT NULL,
  `razsocial` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_hotel`
--

LOCK TABLES `tb_hotel` WRITE;
/*!40000 ALTER TABLE `tb_hotel` DISABLE KEYS */;
INSERT INTO `tb_hotel` VALUES (1,'-47.21935052705834',' -23.09169889001072','teste@teste.com','555555555','Hotelzinho da Raquel','PetTeste'),(2,'-47.21955877224465',' -23.11721623058955','teste@teste.com','222222222','Lar doce AuAu! Pet\'s Hotel','PetTeste'),(3,'-47.22838853085827','-23.098026000797162','teste@teste.com','111111111','Viva o Miau!','PetTeste'),(4,'-47.19657819408803','-23.08721168942678','teste@teste.com','333333333','DoguinhoFeliz Pet\'s Hotel','PetTeste'),(5,'-47.23181414717695','-23.071665397241986','teste@teste.com','444444444','Seu Lar AuAu!','PetTeste'),(6,'-47.247837571742025','-23.124050650141925','teste@teste.com','','Mundo Dos Pet\'s','');
/*!40000 ALTER TABLE `tb_hotel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pet`
--

DROP TABLE IF EXISTS `tb_pet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_pet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) DEFAULT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `raca` varchar(50) DEFAULT NULL,
  `peso` decimal(3,2) DEFAULT NULL,
  `port` varchar(20) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_client` (`id_client`),
  CONSTRAINT `pet_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `tb_client` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pet`
--

LOCK TABLES `tb_pet` WRITE;
/*!40000 ALTER TABLE `tb_pet` DISABLE KEYS */;
INSERT INTO `tb_pet` VALUES (1,2,'Max','2018-09-09','Hot',5.20,'Grande','Cachorro'),(2,NULL,'Maxzera','2001-07-23','PitBull',5.70,'Grande','Cachorro');
/*!40000 ALTER TABLE `tb_pet` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-21 19:03:13
