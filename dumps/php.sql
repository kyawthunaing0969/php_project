-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: abc_db
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
-- Table structure for table `addexam`
--

DROP TABLE IF EXISTS `addexam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `addexam` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `time` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addexam`
--

LOCK TABLES `addexam` WRITE;
/*!40000 ALTER TABLE `addexam` DISABLE KEYS */;
INSERT INTO `addexam` VALUES (51,'PHP','63ec65e2e168b8.21653422.jpg','80'),(52,'AI','63ec66048debf2.74400003.png','80'),(53,'SAD','63ec661bca3684.39223491.png','80'),(54,'Java','63ec6735631b71.42158294.jpg','80'),(56,'Database','63ec677b6f2f55.81264371.png','80');
/*!40000 ALTER TABLE `addexam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `admin_id` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin@admin.com','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `adminlogin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminlogin`
--

LOCK TABLES `adminlogin` WRITE;
/*!40000 ALTER TABLE `adminlogin` DISABLE KEYS */;
INSERT INTO `adminlogin` VALUES (1,'admin','admin');
/*!40000 ALTER TABLE `adminlogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer` (
  `customer_name` varchar(15) NOT NULL,
  `customer_phone` varchar(45) NOT NULL,
  `customer_address` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES ('mg mg','0989','sittwe'),('kyaw','0978','rethedaung'),('','',''),('gg','ff','tt'),('m mg','0977','sittwe'),('','',''),('','','');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_image_tbl`
--

DROP TABLE IF EXISTS `post_image_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_image_tbl` (
  `image_id` int NOT NULL AUTO_INCREMENT,
  `image_by` int DEFAULT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_image_tbl`
--

LOCK TABLES `post_image_tbl` WRITE;
/*!40000 ALTER TABLE `post_image_tbl` DISABLE KEYS */;
/*!40000 ALTER TABLE `post_image_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_tbl`
--

DROP TABLE IF EXISTS `post_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_tbl` (
  `post_id` int NOT NULL AUTO_INCREMENT,
  `post_image_id` int DEFAULT NULL,
  `post_title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `post_desc` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `post_by` int DEFAULT NULL,
  `post_status` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_tbl`
--

LOCK TABLES `post_tbl` WRITE;
/*!40000 ALTER TABLE `post_tbl` DISABLE KEYS */;
/*!40000 ALTER TABLE `post_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `question` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `question` varchar(500) DEFAULT NULL,
  `opt1` varchar(100) DEFAULT NULL,
  `opt2` varchar(100) DEFAULT NULL,
  `opt3` varchar(100) DEFAULT NULL,
  `opt4` varchar(100) DEFAULT NULL,
  `answer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT INTO `question` VALUES (45,'PHP','What is PHP?','PHP is an open-source programming language','PHP is used to develop dynamic and interactive websites','PHP is a server-side scripting language','All of the mentioned','All of the mentioned'),(46,'PHP','Who is the father of PHP?','Drek Kolkevi','Rasmus Lerdorf','Willam Makepiece','List Barely','Rasmus Lerdorf'),(49,'PHP','Which of the following is the default file extension of PHP files?','.php','.ph','.xml','.html','.php'),(51,'PHP','Which is the right way of declaring a variable in PHP?','$3hello','$_hello','$this','$5_Hello','$_hello'),(52,'PHP','Which of the following PHP functions can be used for generating unique ids?','md5()','uniqueid()','mdid()','id()','uniqueid()'),(53,'AI','What is the full form of “AI”?','Artificially Intelligent','Artificial Intelligence','Artificially Intelligence','Advanced Intelligence','Artificial Intelligence'),(54,'AI','Who is the inventor of Artificial Intelligence?','Geoffrey Hinton','Andrew Ng','John McCarthy','Jürgen Schmidhuber','John McCarthy'),(55,'AI','Which of the following is the branch of Artificial Intelligence?','Machine Learning','Cyber forensics','Full-Stack Developer','Network Design','Machine Learning'),(56,'AI','What is the goal of Artificial Intelligence?','To solve artificial problems','To extract scientific causes','To explain various sorts of intelligence','To solve real-world problems','To explain various sorts of intelligence'),(57,'AI','Which of the following is a component of Artificial Intelligence?','Learning','Training','Designing','Puzzling','Learning'),(58,'SAD','What is Software Engineering?','Designing a software','Testing a software','Application of engineering principles to the design a software','None of the above','Application of engineering principles to the design a software'),(59,'SAD','Who is the father of Software Engineering?','Margaret Hamilton','Watts S. Humphrey','Alan Turing','Boris Beizer','Watts S. Humphrey'),(60,'SAD','What are the features of Software Code?','Simplicity','Accessibility','Modularity','All of the above','Modularity'),(61,'SAD','Why do bugs and failures occur in software?','Because of Developers','Because of companies','Because of both companies and Developers','None of the mentioned','Because of both companies and Developers'),(62,'SAD','What is a Functional Requirement?','specifies the tasks the program must complete','specifies the tasks the program should not complete','specifies the tasks the program must not work','All of the mentioned','specifies the tasks the program must complete'),(63,'Java','Who invented Java Programming?','Guido van Rossum','James Gosling','Dennis Ritchie','Bjarne Stroustrup','James Gosling'),(64,'Java','Which component is used to compile, debug and execute the java programs?','JRE','JIT','JDK','JVM','JDK'),(65,'Java','Which one of the following is not a Java feature?','Object-oriented','Use of pointers','Portable','Dynamic and Extensible','Use of pointers'),(66,'Java','What is the extension of java code files?','.js','.txt','.class','.java','.java'),(67,'Java','Which environment variable is used to set the java path?','MAVEN_Path','JavaPATH','JAVA','JAVA_HOME','JAVA_HOME'),(68,'Database','Which of the following is the full form of RDBMS?','Relational Data Management System','Relational Database Management System','Relative Database Management System','Regional Data Management System','Relational Data Management System'),(69,'Database','What is a relation in RDBMS?','Key','Table','Row','Data Types','Table'),(70,'Database','Which of the following systems use RDMS?','Oracle','Microsoft SQLServer','IBM','All of the mentioned','All of the mentioned'),(71,'Database','Dynamic hashing allows us to?','Accommodate the growth of the database','Accommodate the shrinkage of the database','Allows modification of hash function','All of the mentioned','All of the mentioned'),(72,'Database','Which of the following constraints RDBS doesn’t check before creating the tables?','Not null','Primary keys','Data Structure','Data integrity','Data Structure');
/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `register` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `confirm` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` VALUES (31,'oo','oo@gmail.com','oo','oo'),(32,'KyawThuNaing','kyawthunaing0969@gmail.com','111','111'),(33,'myat hla wain','myat@gmail.com','123','123'),(34,'thant myat','thant@gmail.com','123','123'),(35,'min khant kyaw','min@gmail.com','main','main'),(36,'PHP','kyawthunaing0969@email.com','111','111'),(37,'ma khine htay','makhinehtay@gmail.com','123','123'),(38,'Oo Zaw Naing','oo@gmail.com','111',''),(39,'mg','mg@gmail.com','111','111'),(40,'myat pann','myat@gmail.com','111','111');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `showuser`
--

DROP TABLE IF EXISTS `showuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `showuser` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `mark` varchar(45) DEFAULT NULL,
  `Totalmark` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `showuser`
--

LOCK TABLES `showuser` WRITE;
/*!40000 ALTER TABLE `showuser` DISABLE KEYS */;
INSERT INTO `showuser` VALUES (1,'mg','4','',''),(2,'mg','4','','');
/*!40000 ALTER TABLE `showuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student` (
  `student_name` varchar(45) NOT NULL,
  `student_phone` varchar(45) NOT NULL,
  `student_address` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_tbl`
--

DROP TABLE IF EXISTS `student_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student_tbl` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roll_no` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `enroll_id` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `nrc` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `nrc_front` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `nrc_back` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `father_nrc` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `father_nrc_front` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `father_nrc_back` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `mother_nrc` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `mother_nrc_front` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `mother_nrc_back` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `student_tblcol` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `household` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `ward_support_letter` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `police_certificate` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `stu_name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `student_tblcol1` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `university_registration_no` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `uni_enter_yr` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `nrc_status` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `father_job_info` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `mother_job_info` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `matric_info` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `permanent_address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `phone` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_tbl`
--

LOCK TABLES `student_tbl` WRITE;
/*!40000 ALTER TABLE `student_tbl` DISABLE KEYS */;
/*!40000 ALTER TABLE `student_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_tbl`
--

DROP TABLE IF EXISTS `user_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_tbl` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `password` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `full_name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `role` int DEFAULT NULL,
  `status` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_tbl`
--

LOCK TABLES `user_tbl` WRITE;
/*!40000 ALTER TABLE `user_tbl` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_tbl` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-05 13:22:18
