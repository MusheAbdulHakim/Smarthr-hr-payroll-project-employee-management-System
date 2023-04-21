-- MySQL dump 10.13  Distrib 8.0.30, for macos12 (x86_64)
--
-- Host: 127.0.0.1    Database: smarthr
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `assets`
--

DROP TABLE IF EXISTS `assets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `assets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `assetName` varchar(200) NOT NULL,
  `assetId` varchar(200) NOT NULL,
  `PurchaseDate` date NOT NULL,
  `PurchaseFrom` varchar(200) NOT NULL,
  `Manufacturer` varchar(200) NOT NULL,
  `Model` varchar(200) NOT NULL,
  `Status` int NOT NULL,
  `Supplier` varchar(255) NOT NULL,
  `AssetCondition` varchar(255) NOT NULL,
  `Warranty` varchar(255) NOT NULL,
  `Price` int NOT NULL,
  `AssetUser` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `assetId` (`assetId`),
  UNIQUE KEY `assetId_2` (`assetId`),
  UNIQUE KEY `assetId_3` (`assetId`),
  UNIQUE KEY `assetId_4` (`assetId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assets`
--

LOCK TABLES `assets` WRITE;
/*!40000 ALTER TABLE `assets` DISABLE KEYS */;
INSERT INTO `assets` VALUES (1,'Macbook Book','#AST-031256','2020-09-23','Amazon','Apple Inc.','2020',1,'Amazon','In good shape','12 Months',1900,'Mushe abdul-Hakim','This is the description of the laptop','2020-09-23 23:57:26');
/*!40000 ALTER TABLE `assets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `ClientId` varchar(225) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Company` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Status` int NOT NULL,
  `Picture` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ClientId` (`ClientId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'Yahuza','Abdul-Hakim','Vendetta','musheabdulhakim@protonmail.ch','$2y$10$xU1zDRigag7ZMGs0Egcqoei0SrtZJRX/p425h4qOi5OMKFz32k0UC','CLT-613498','233209229025','Microsoft Inc','Live from home',1,'d41d8cd98f00b204e9800998ecf8427e1601112041','2020-09-26 00:00:00'),(2,'Vendetta','Alkaline','alkaline','musheabdulhakim99@gmail.com','$2y$10$qUL2APr762X.vvJuNQvqludvabDa.Y3TRHOa.M/qq8WFoeoh7IaWG','CLT-217594','233209229025','Falcon Systems','Live from home',1,'d41d8cd98f00b204e9800998ecf8427e1601112339','2020-09-26 00:00:00');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `departments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Department` varchar(200) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Department` (`Department`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (2,'Marketing','2020-09-26 00:00:00'),(3,'IT Department','2020-09-26 00:00:00'),(4,'Web Development','2020-09-27 00:00:00');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `designations`
--

DROP TABLE IF EXISTS `designations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `designations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Designation` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `designations`
--

LOCK TABLES `designations` WRITE;
/*!40000 ALTER TABLE `designations` DISABLE KEYS */;
INSERT INTO `designations` VALUES (1,'Web Designer','Web Development','2020-09-27 00:00:00'),(2,'Web Developer','Web Development','2020-09-27 00:00:00');
/*!40000 ALTER TABLE `designations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Employee_Id` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Joining_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Picture` varchar(200) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Employee_Id` (`Employee_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (3,'Goerge','Merchason','George','george@gmail.com','$2y$10$QFstJz1mhq4iHksQyfCpjeaaUlmu7fwFcpCvJlt/C4vbE9Lqjf7IO','EMP-283560','99922246633','Web Development','Web Designer','0000-00-00 00:00:00','avatar-25.jpg','2020-09-28 23:46:51'),(4,'Mushe','Abdul-Hakim','abdul','musheabdulhakim@protonmail.ch','$2y$10$E8FuYrk8eyA2s5bccuUNk.bTFXPHjzgbzhgJzIFfZHmevYT6Z41k6','EMP-743619','+233209229025','Web Development','Web Developer','2020-09-29 00:00:00','avatar-11.jpg','2020-09-29 00:04:29'),(5,'Yahuza','Abdul-Hakim','Vendetta','musheabdulhakim@protonmail.ch','$2y$10$fBLIUiJ3HTgxW5RcEdfi0O3NEUN.Sn8mdfBC5GckdTJdOTsSJRNBW','EMP-186249','+233209229025','Web Development','Web Developer','2020-09-29 00:00:00','avatar-09.jpg','2020-09-29 00:14:44'),(6,'firs','employee','first_employee','first_employee@xpeedstudio.com','$2y$10$Fw1srrtSNVY1SCdqZB65WuE9uybqWq7MHwJzCdrYybzur2PuHBtGC','EMP-162390','162390','Web Development','Web Designer','2023-03-16 09:24:02','screenshot-2023-03-16-at-10.25.49-am.png','2023-03-16 15:24:02');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goal_type`
--

DROP TABLE IF EXISTS `goal_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `goal_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Type` varchar(200) NOT NULL,
  `Description` text NOT NULL,
  `Status` int NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Type` (`Type`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goal_type`
--

LOCK TABLES `goal_type` WRITE;
/*!40000 ALTER TABLE `goal_type` DISABLE KEYS */;
INSERT INTO `goal_type` VALUES (1,'Invoice Goal','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti laudantium animi fuga hic nobis culpa, sapiente numquam quaerat quisquam eveniet dolorum soluta harum eligendi praesentium corporis error quo inventore suscipit?',1,'2020-09-24 00:00:00'),(3,'Another One','This is another test for the type section. Just testing it and seeing it work makes me smile with joy. Thats the power of programming for humans and especially to me .It makes me more happy to see my code run without troubles or bugs.',1,'2020-09-24 00:00:00');
/*!40000 ALTER TABLE `goal_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goals`
--

DROP TABLE IF EXISTS `goals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `goals` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Type` varchar(200) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Target` text NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Description` text NOT NULL,
  `Status` int NOT NULL,
  `Progress` varchar(200) NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goals`
--

LOCK TABLES `goals` WRITE;
/*!40000 ALTER TABLE `goals` DISABLE KEYS */;
INSERT INTO `goals` VALUES (1,'Another One','Coding','Code till time infinity ','2020-09-25','2020-10-10','This is the thing i always want to do and am doing it for the rest of my life now friend.',1,'80','2020-09-25 00:13:34'),(2,'Another One','this is a test','Code till time infinity ','2020-09-25','2020-10-10','This is a test',1,'50','2020-09-25 00:39:34'),(3,'Invoice Goal','This is another test','Code till thy kingdom come.','2020-09-25','2048-09-10','this is another one of the wierdest thing that i have ever done. I having alot of the shit not working but i got this.',0,'0','2020-09-25 01:08:59');
/*!40000 ALTER TABLE `goals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `holidays`
--

DROP TABLE IF EXISTS `holidays`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `holidays` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Holiday_Name` varchar(200) NOT NULL,
  `Holiday_Date` date NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `holidays`
--

LOCK TABLES `holidays` WRITE;
/*!40000 ALTER TABLE `holidays` DISABLE KEYS */;
INSERT INTO `holidays` VALUES (1,'Christmas','2020-12-25','2020-09-26 19:15:02');
/*!40000 ALTER TABLE `holidays` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leaves`
--

DROP TABLE IF EXISTS `leaves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `leaves` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Employee` varchar(200) NOT NULL,
  `Starting_At` date NOT NULL,
  `Ending_On` date NOT NULL,
  `Days` int NOT NULL,
  `Reason` text NOT NULL,
  `Time_Added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leaves`
--

LOCK TABLES `leaves` WRITE;
/*!40000 ALTER TABLE `leaves` DISABLE KEYS */;
INSERT INTO `leaves` VALUES (1,'Goerge Merchason','2020-09-01','2020-10-01',10,'This is a test to the leaving system','2020-10-04 01:50:34'),(2,'Mushe Abdul-Hakim','2020-09-01','2020-10-16',10,'this is another reason why he going home for number of days','2020-10-04 01:53:22');
/*!40000 ALTER TABLE `leaves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `overtime`
--

DROP TABLE IF EXISTS `overtime`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `overtime` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Employee` varchar(200) NOT NULL,
  `OverTime_Date` date NOT NULL,
  `Hours` varchar(20) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Description` text NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `overtime`
--

LOCK TABLES `overtime` WRITE;
/*!40000 ALTER TABLE `overtime` DISABLE KEYS */;
INSERT INTO `overtime` VALUES (1,'Mushe Abdul-Hakim','2020-09-29','5','	Normal ex.5','This extra minutes are spent on trying to improve my knowledge on programming everyday.','2020-09-29 00:38:26'),(2,'Goerge Merchason','2020-09-29','5','	Normal ex.5','This was just to help the ceo with his presentation prep for tomorrow\'s big event.','2020-09-29 09:20:37'),(3,'Yahuza Abdul-Hakim','2020-09-10','3','Normal ex.5','This is another test of the overtime of employees','2020-09-29 09:28:59');
/*!40000 ALTER TABLE `overtime` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_role` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_role`
--

LOCK TABLES `user_role` WRITE;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` VALUES (1,'admin\r\n','2020-09-21 00:00:00'),(2,'employee','2020-09-21 00:00:00');
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (6,'Barry','Cudo','Barry','barrycuda@example.com','$2y$10$zb2ibzzBKJHQaMeMoMZqTuRxERFAZl0LZUya8yJkxKa8JM6yzQEXy','9876543210','Los Angeles, California','avatar-19.jpg','2020-09-21 19:04:47'),(7,'Yahuza','Abdul-Hakim','Vendetta','musheabdulhakim@protonmail.ch','$2y$10$f3acNJ/slpOfQvZy.u6OfOM6GOLTTjz3IYUIbMMQuixXjmgeRQ0Ga','233209229025','San Francisco Bay Area','my-passport-photo.jpg','2020-09-21 19:05:43');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-16 16:34:12
