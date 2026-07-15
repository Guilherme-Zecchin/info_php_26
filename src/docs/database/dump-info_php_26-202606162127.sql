-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: info_php_26
-- ------------------------------------------------------
-- Server version	5.5.5-10.6.23-MariaDB-0ubuntu0.22.04.1

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
-- Table structure for table `Estado`
--

DROP TABLE IF EXISTS `Estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Estado` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(500) NOT NULL,
  `Sigla` varchar(10) NOT NULL,
  `capital` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Estado`
--

LOCK TABLES `Estado` WRITE;
/*!40000 ALTER TABLE `Estado` DISABLE KEYS */;
INSERT INTO `Estado` VALUES (1,'Acre','AC','Rio Branco'),(2,'Alagoas','AL',''),(3,'Amapa','AP',''),(4,'Amazonas','AM',''),(5,'Bahia','BA',''),(6,'Ceara','CE',''),(7,'Espirito Santo','ES',''),(8,'Goias ','GO',''),(9,'Distrito Federal','DF','Distrito Federal'),(10,'Maranhao','MA',''),(11,'Mato Grosso','MT',''),(12,'Mato Grosso do Sul','MS',''),(13,'Minas Gerais','MG',''),(14,'Para','PA',''),(15,'Paraiba','PB',''),(16,'Parana','PR',''),(17,'Pernambuco','PE',''),(18,'Piaui','PI',''),(19,'Rio de Janeiro','RJ','Rio de Janeiro'),(20,'Rio Grande do Norte','RN',''),(21,'Rio Grande do Sul','RS','Porto Alegre'),(22,'Rondonia','RO',''),(23,'Roraima','RR',''),(24,'Santa Catarina','SC',''),(25,'São Paulo','SP','São Paulo'),(26,'Sergipe','SE',''),(27,'Tocantins','TO','');
/*!40000 ALTER TABLE `Estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `endereco` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `rua` varchar(512) NOT NULL,
  `numero` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
INSERT INTO `endereco` VALUES (1,'RS','Bento Gonçalves','95702000','IMIGRANTE','OLAVO BILAC','830'),(2,'RS','Garibaldi','95601000','CENTRO','GIUSEPPE GARIBALDI','800'),(3,'RS','Carlos Barbosa','95504000','APARECIDA','Francisco D\'Arrigo','900'),(4,'RS','Bento Gonçalves','95700026','BORGO','SAO PAULO','230'),(5,'RS','Bento Gonçalves','95705456','SAO FRANCISCO','PEDRO MARCOS FLAIBAN','700'),(6,'RS','Porto Alegre','90810-240','PRAIA DE BELAS','AV. PADRE CACIQUE','24891');
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionario` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `salario` decimal(10,0) NOT NULL,
  `cargo` varchar(512) NOT NULL,
  `setor` varchar(150) NOT NULL,
  `cracha` varchar(15) NOT NULL,
  `idPessoa` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES (1,'Guilherme','Zecchin',3000,'Faturamento','Faturamento','556644',6),(2,'Joao','da Ré',4000,'Expedição','Expedição','165467',1),(3,'Kiko','da Ré ',2700,'Separação ','Separação','321684',1),(4,'Fernando','da Silva',1700,'Estagiário ','Administração','998477',4),(5,'Silvana','Andrade ',2800,'Auxiliar Escritório','Compras','498432',7),(6,'Mayara','Da Ré ',9000,'Gerente Administrativo','Gerência','111111',8);
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pessoa` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(512) NOT NULL,
  `idade` int(11) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `cnpj` varchar(18) DEFAULT NULL,
  `tipoPessoa` enum('F','J') NOT NULL DEFAULT 'F',
  `idEndereco` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoa`
--

LOCK TABLES `pessoa` WRITE;
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` VALUES (1,'JOÃO',4,'54992929574','010020030-40',NULL,'F',5),(2,'JOAQUIM',3,'54999996578','012345678-90',NULL,'F',5),(3,'TCHUCO',10,'54998134865','987654321-50',NULL,'F',1),(4,'FERNANDAO',40,'51945312165','354896100-14',NULL,'F',6),(5,'CENTROTEC',25,'5430552244',NULL,'081236540001-40','J',4),(6,'GUILHERME ',29,'5466688228','054659128-84',NULL,'F',5),(7,'SILVANA',56,'54979876521','954787573-14',NULL,'F',NULL);
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'info_php_26'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-06-16 21:27:04
