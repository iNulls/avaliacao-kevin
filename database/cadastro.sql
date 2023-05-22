-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: cadastro
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `cargo`
--

DROP TABLE IF EXISTS `cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cargo` (
  `Nome` varchar(30) NOT NULL,
  `Salário` decimal(7,2) NOT NULL,
  UNIQUE KEY `Nome` (`Nome`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargo`
--

LOCK TABLES `cargo` WRITE;
/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
INSERT INTO `cargo` VALUES ('Assistente Administrativo',1500.00),('Auxiliar Administrativo',1200.00),('Digitador',1625.00),('Jovem Aprendiz',850.00),('Atendente',1100.00),('Coordenador',3500.00),('Surpevisor Financeiro',2500.00),('Analista Junior',1800.00),('Desenvolvedor',2000.00);
/*!40000 ALTER TABLE `cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionários`
--

DROP TABLE IF EXISTS `funcionários`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionários` (
  `CPF` varchar(11) NOT NULL,
  `Nome` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Nascimento` date DEFAULT NULL,
  `CEP` varchar(8) DEFAULT NULL,
  `Logradouro` varchar(30) DEFAULT NULL,
  `Numero` varchar(8) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `Complemento` varchar(20) DEFAULT NULL,
  `Bairro` varchar(20) DEFAULT NULL,
  `Cidade` varchar(20) DEFAULT NULL,
  `UF` varchar(2) DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `Telefone` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `Cargo` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`CPF`),
  KEY `Cargo` (`Cargo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionários`
--

LOCK TABLES `funcionários` WRITE;
/*!40000 ALTER TABLE `funcionários` DISABLE KEYS */;
INSERT INTO `funcionários` VALUES ('21523510085','Alberto Silva','1985-04-03','23012201','Rua da Consolação','20','Casa 2','campo grande','rio de janeiro','rj','alberto.s23@gmail.com','21961451268','Analista Junior'),('24846415265','Genivaldo dos Santos Soares','1998-03-11','23254615','Rua Padre Luis','254','Ap 302','senador camara','rio de janeiro','RJ','g.nivaldoss@gmail.com','21985125410','Assistente Administrativo'),('12564201258','Pedro Alvares Junior','1972-10-25','32014541','Av Rio Branco','5413','Casa B','Centro','Rio de Janeiro','RJ','pedrotricolor2@gmail.com','21955101458','Digitador'),('21185132154','Joana Dark Souza','2001-09-14','20145320','Rua Arthur Rios','156',NULL,'Anchieta','Sao Gonçalo','RJ','joaninha12@gmail.com','21987421863','Jovem Aprendiz'),('15620545638','Caio Gonçalves de Souza','1994-06-10','54103541','Av Santa Cruz','25100','4B','Santa Cruz','Rio de Janeiro','RJ','caiosg@outlook.com','21975462148','Atendente'),('16663878786','Kevin','1998-05-18','23013320','rua padre','17','quadra 02','vasconcelos','rio de janeiro','RJ','kevin@gmail.com','21968930719','Atendente'),('11510205646','Jorge Luiz','2001-05-18','23132165','Rua Ali do lado','14','Casa 3','Curcovado','Rio de Janeiro','RJ','jl@gmail.com','21554648789','Supervisor Financeiro');
/*!40000 ALTER TABLE `funcionários` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-22  0:05:58
