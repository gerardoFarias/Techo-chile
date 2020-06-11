CREATE DATABASE  IF NOT EXISTS `techochile` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `techochile`;
-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: 192.168.99.100    Database: techochile
-- ------------------------------------------------------
-- Server version	5.7.30

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
-- Table structure for table `cons_comuna`
--

DROP TABLE IF EXISTS `cons_comuna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cons_comuna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comuna` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `provincia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cons_comuna_cons_provincia1_idx` (`provincia_id`),
  CONSTRAINT `fk_cons_comuna_cons_provincia1` FOREIGN KEY (`provincia_id`) REFERENCES `cons_provincia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cons_comuna`
--

LOCK TABLES `cons_comuna` WRITE;
/*!40000 ALTER TABLE `cons_comuna` DISABLE KEYS */;
/*!40000 ALTER TABLE `cons_comuna` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cons_perfil`
--

DROP TABLE IF EXISTS `cons_perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cons_perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cons_perfil`
--

LOCK TABLES `cons_perfil` WRITE;
/*!40000 ALTER TABLE `cons_perfil` DISABLE KEYS */;
INSERT INTO `cons_perfil` VALUES (1,'administrador'),(2,'dirigente'),(3,'colaborador');
/*!40000 ALTER TABLE `cons_perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cons_provincia`
--

DROP TABLE IF EXISTS `cons_provincia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cons_provincia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provincia` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `region_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cons_provincia_cons_region_idx` (`region_id`),
  CONSTRAINT `fk_cons_provincia_cons_region` FOREIGN KEY (`region_id`) REFERENCES `cons_region` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cons_provincia`
--

LOCK TABLES `cons_provincia` WRITE;
/*!40000 ALTER TABLE `cons_provincia` DISABLE KEYS */;
/*!40000 ALTER TABLE `cons_provincia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cons_region`
--

DROP TABLE IF EXISTS `cons_region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cons_region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cons_region`
--

LOCK TABLES `cons_region` WRITE;
/*!40000 ALTER TABLE `cons_region` DISABLE KEYS */;
/*!40000 ALTER TABLE `cons_region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cons_tipo_actividad`
--

DROP TABLE IF EXISTS `cons_tipo_actividad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cons_tipo_actividad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cons_tipo_actividad`
--

LOCK TABLES `cons_tipo_actividad` WRITE;
/*!40000 ALTER TABLE `cons_tipo_actividad` DISABLE KEYS */;
/*!40000 ALTER TABLE `cons_tipo_actividad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rel_usuario_mesa_trabajo`
--

DROP TABLE IF EXISTS `rel_usuario_mesa_trabajo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rel_usuario_mesa_trabajo` (
  `mesa_trabajo_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  KEY `fk_rel_usuario_mesa_trabajo_tr_mesa_trabajo1_idx` (`mesa_trabajo_id`),
  KEY `fk_rel_usuario_mesa_trabajo_tr_usuario1_idx` (`usuario_id`),
  CONSTRAINT `fk_rel_usuario_mesa_trabajo_tr_mesa_trabajo1` FOREIGN KEY (`mesa_trabajo_id`) REFERENCES `tr_mesa_trabajo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_rel_usuario_mesa_trabajo_tr_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `tr_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rel_usuario_mesa_trabajo`
--

LOCK TABLES `rel_usuario_mesa_trabajo` WRITE;
/*!40000 ALTER TABLE `rel_usuario_mesa_trabajo` DISABLE KEYS */;
/*!40000 ALTER TABLE `rel_usuario_mesa_trabajo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tr_activades`
--

DROP TABLE IF EXISTS `tr_activades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tr_activades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish_ci,
  `tipo_actividad_id` int(11) NOT NULL,
  `mesa_trabajo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tr_activades_cons_tipo_actividad1_idx` (`tipo_actividad_id`),
  KEY `fk_tr_activades_tr_mesa_trabajo1_idx` (`mesa_trabajo_id`),
  CONSTRAINT `fk_tr_activades_cons_tipo_actividad1` FOREIGN KEY (`tipo_actividad_id`) REFERENCES `cons_tipo_actividad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tr_activades_tr_mesa_trabajo1` FOREIGN KEY (`mesa_trabajo_id`) REFERENCES `tr_mesa_trabajo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tr_activades`
--

LOCK TABLES `tr_activades` WRITE;
/*!40000 ALTER TABLE `tr_activades` DISABLE KEYS */;
/*!40000 ALTER TABLE `tr_activades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tr_mesa_trabajo`
--

DROP TABLE IF EXISTS `tr_mesa_trabajo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tr_mesa_trabajo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `comunidad` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `latitud` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `longitud` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `comuna_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tr_mesa_trabajo_cons_comuna1_idx` (`comuna_id`),
  CONSTRAINT `fk_tr_mesa_trabajo_cons_comuna1` FOREIGN KEY (`comuna_id`) REFERENCES `cons_comuna` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tr_mesa_trabajo`
--

LOCK TABLES `tr_mesa_trabajo` WRITE;
/*!40000 ALTER TABLE `tr_mesa_trabajo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tr_mesa_trabajo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tr_usuario`
--

DROP TABLE IF EXISTS `tr_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tr_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido_paterno` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido_materno` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `perfil_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tr_usuario_cons_perfil1_idx` (`perfil_id`),
  CONSTRAINT `fk_tr_usuario_cons_perfil1` FOREIGN KEY (`perfil_id`) REFERENCES `cons_perfil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tr_usuario`
--

LOCK TABLES `tr_usuario` WRITE;
/*!40000 ALTER TABLE `tr_usuario` DISABLE KEYS */;
INSERT INTO `tr_usuario` VALUES (1,'adm','adm','adm','adm@gmail.com','123456',1,1),(2,'dirigente','dirigente','dirigente','dirigente@gmail.com','123456',1,2),(3,'colaborador','colaborador','colaborador','colaborador@gmail.com','123456',1,3),(4,'dirigenteNuevo','dirigenteNuevo','dirigenteNuevo','dirigenteNuevo@gmail.com','1234567',0,2);
/*!40000 ALTER TABLE `tr_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'techochile'
--

--
-- Dumping routines for database 'techochile'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-11 19:50:07
