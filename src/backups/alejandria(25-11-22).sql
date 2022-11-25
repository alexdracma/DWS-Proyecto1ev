-- MariaDB dump 10.19  Distrib 10.4.25-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: alejandria
-- ------------------------------------------------------
-- Server version	10.4.25-MariaDB

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
-- Table structure for table `colaborador`
--

DROP TABLE IF EXISTS `colaborador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colaborador` (
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colaborador`
--

LOCK TABLES `colaborador` WRITE;
/*!40000 ALTER TABLE `colaborador` DISABLE KEYS */;
INSERT INTO `colaborador` VALUES ('Snoopy','El oso','snopy.png'),('Juana','La mas rica de su pueblo','colaborador1.png'),('Julio','Rey de petanca de su pueblo','colaborador2.png'),('Mauricio','Modelo internacional','colaborador3.png'),('Mafalda','Meh','article_13948998063.png');
/*!40000 ALTER TABLE `colaborador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libro`
--

DROP TABLE IF EXISTS `libro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isbn13` bigint(20) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `genero` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libro`
--

LOCK TABLES `libro` WRITE;
/*!40000 ALTER TABLE `libro` DISABLE KEYS */;
INSERT INTO `libro` VALUES (1,123456789,'la biblia',NULL,NULL),(2,4509889587942,'Don Quijote de la Mancha I','Miguel de Cervantes','Caballeresco'),(3,5071574823843,'Don Quijote de la Mancha II','Miguel de Cervantes','Caballeresco'),(4,7423738625248,'Historias de Nueva Orleans','William Faulkner','Novela'),(5,4009690586430,'El principito','Antoine Sant-Exupery','Aventura'),(6,1221498091031,'El príncipe','Maquiavelo','Político'),(7,8356056816509,'Diplomacia','Henry Kissinger','Político'),(8,5263137002491,'Los Windsor','Kitty Kelley','Biografías'),(9,3272464098274,'El Último Emperador','Pu - Yi','Autobiografías'),(10,8788066326899,'Fortunata y Jacinta','Pérez Galdós','Novela'),(11,3559812491184,'Diálogos','Joan Lluís Vives','Histórico'),(12,7035808928296,'Arroz y Tartana','Vicente Blasco Ibañez','Novela'),(13,2531563285455,'El bilingüisme valencià','Nicolau Gómez','Político'),(14,97630483840555,'Tirant Lo Blanch','Joanot Martorell','Histórico'),(15,5101360916406,'Harry Potter y la piedra filosofal','J.K. Rowling','Novela'),(16,948006055038,'Harry Potter y la cámara secreta','J.K. Rowling','Novela'),(17,9026905829540,'El día que se perdió la cordura','Javier Castillo','Thriller'),(18,5951679376811,'El día que se perdió el amor','Javier Castillo','Thriller'),(19,8507582214543,'Luna nueva','Stephenie Meyer','Novela'),(20,264355133165,'Amanecer','Stephenie Meyer','Novela'),(21,1477293167109,'Las aventuras del capitán calzoncillos','Dav Pilkey','Infantil'),(22,6575307191316,'Violeta','Isabel Allende','Novela'),(23,730228550861,'Todas esas cosas que te diré mañana','Elisabet Benavent','Novela');
/*!40000 ALTER TABLE `libro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensaje`
--

DROP TABLE IF EXISTS `mensaje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensaje` (
  `nombreCompleto` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `asunto` text COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensaje`
--

LOCK TABLES `mensaje` WRITE;
/*!40000 ALTER TABLE `mensaje` DISABLE KEYS */;
INSERT INTO `mensaje` VALUES ('alex Lopez Provenza','alexdracma@gmail.com',698905842,'Queja','Estoy muy muy molesto eh'),('paco','paco@gmail.com',666666666,'lasld','dfld'),('paco martinez','paco@gmail.com',622266264,'TEstes','masdopaspm'),('lala','alexdracma@gmail.com',698905842,'alsd','sda');
/*!40000 ALTER TABLE `mensaje` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prestamo`
--

DROP TABLE IF EXISTS `prestamo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prestamo` (
  `libro` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fechaPrestamo` date NOT NULL DEFAULT curdate(),
  `fechaMaxDevolucion` date NOT NULL DEFAULT (`fechaPrestamo` + interval 30 day),
  `fechaDevolucion` date DEFAULT NULL,
  PRIMARY KEY (`libro`,`usuario`,`fechaPrestamo`),
  KEY `Prestamo_Usuario_FK` (`usuario`),
  CONSTRAINT `Prestamo_Libro_FK` FOREIGN KEY (`libro`) REFERENCES `libro` (`id`) ON DELETE CASCADE,
  CONSTRAINT `Prestamo_Usuario_FK` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`email`) ON DELETE CASCADE,
  CONSTRAINT `CHK_Prestamo` CHECK (`fechaDevolucion` <= `fechaMaxDevolucion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prestamo`
--

LOCK TABLES `prestamo` WRITE;
/*!40000 ALTER TABLE `prestamo` DISABLE KEYS */;
/*!40000 ALTER TABLE `prestamo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8_spanish_ci DEFAULT 'defaultAlejandriaUser.png',
  `nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES ('administrador@gmail.com','2003-03-17',698905842,'defaultAlejandriaUser.png','Administrador',NULL),('alejandro@gmail.com','2003-12-20',649307605,'defaultAlejandriaUser.png','Alejandro','Ferrando Guzmán'),('carlos@gmail.com','2005-11-14',655856088,'defaultAlejandriaUser.png','Carlos','Díaz Díaz'),('eva@gmail.com','1980-05-23',665782411,'defaultAlejandriaUser.png','Eva','Santana Páez'),('german@gmail.com','2002-04-27',640705914,'defaultAlejandriaUser.png','Germán','Fortea López'),('ines@gmail.com','1971-07-04',665179126,'defaultAlejandriaUser.png','Inés','Posadas Gil'),('joaquin@gmail.com','1998-07-08',664551768,'defaultAlejandriaUser.png','Joaquin','Tarín Bellver'),('jose@gmail.com','1966-09-06',613758333,'defaultAlejandriaUser.png','José','Sánchez Pons'),('joseg@gmail.com','1993-01-24',699144729,'defaultAlejandriaUser.png','Jose','García Tomás'),('juan@gmail.com','1982-03-01',637655144,'defaultAlejandriaUser.png','Juan','Blasco Pita'),('lucas@gmail.com','2000-03-23',688178718,'defaultAlejandriaUser.png','Lucas','Castillo González'),('miguel@gmail.com','1976-12-09',698197138,'defaultAlejandriaUser.png','Miguel','Gómez Sáez'),('pablo@gmail.com','1987-08-13',635905570,'defaultAlejandriaUser.png','Pablo','Lozano Pérez'),('paula@gmail.com','2001-06-02',693150389,'defaultAlejandriaUser.png','Paula','Sánchez Cervera'),('sergio@gmail.com','1985-10-09',652408217,'defaultAlejandriaUser.png','Sergio','López Albarca'),('yolanda@gmail.com','1976-09-17',672695111,'defaultAlejandriaUser.png','Yolanda','Betancor Díaz');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-25 23:35:48
