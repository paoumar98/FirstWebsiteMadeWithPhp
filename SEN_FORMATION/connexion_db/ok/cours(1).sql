-- MySQL dump 10.9
--
-- Host: localhost    Database: cours
-- ------------------------------------------------------
-- Server version	4.1.9-max

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE="NO_AUTO_VALUE_ON_ZERO" */;

--
-- Table structure for table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE `enseignant` (
  `Numens` int(5) NOT NULL default '0',
  `Nomens` varchar(40) NOT NULL default '',
  `Prenomens` varchar(40) NOT NULL default '',
  `Grade` varchar(20) NOT NULL default '',
  `Ancien` int(2) NOT NULL default '0',
  PRIMARY KEY  (`Numens`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enseignant`
--


/*!40000 ALTER TABLE `enseignant` DISABLE KEYS */;
LOCK TABLES `enseignant` WRITE;
INSERT INTO `enseignant` VALUES (10,'Bertrand','Pierre','ASS',2),(11,'Dupond','Auguste','MCF',3),(12,'Aubois','Jean','MCF',5),(13,'Boyer',' Julie','ASS',2),(14,'Vincent','Paul','PR',4),(15,'Simon','Etienne','ASS',5);
UNLOCK TABLES;
/*!40000 ALTER TABLE `enseignant` ENABLE KEYS */;

--
-- Table structure for table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE `etudiant` (
  `Numetu` int(11) NOT NULL auto_increment,
  `Nometu` varchar(40) NOT NULL default '',
  `Prenometu` varchar(40) NOT NULL default '',
  `Dtnaiss` date NOT NULL default '0000-00-00',
  `Cdsexe` char(1) NOT NULL default '',
  PRIMARY KEY  (`Numetu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etudiant`
--


/*!40000 ALTER TABLE `etudiant` DISABLE KEYS */;
LOCK TABLES `etudiant` WRITE;
INSERT INTO `etudiant` VALUES (1,'Dubois','Jules','1982-02-11','H'),(2,'Favier','Isabelle','1979-02-02','F'),(3,'Laurent','Max','1982-10-08','H'),(4,'Paris','Jeanne','1981-03-01','F'),(5,'Dupond','Charles','1981-03-18','H'),(6,'Gros','Sophie','1980-06-21','F'),(7,'Henri','Pierre','1982-01-17','H'),(8,'Robert','Guy','1978-09-25','H'),(9,'Humbert','Odile','1980-03-19','F'),(10,'Martin','Julie','1980-04-25','F'),(11,'Romain','Georges','1977-06-21','H');
UNLOCK TABLES;
/*!40000 ALTER TABLE `etudiant` ENABLE KEYS */;

--
-- Table structure for table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE `matiere` (
  `Numat` int(5) NOT NULL auto_increment,
  `Nomat` varchar(40) NOT NULL default '',
  `Coeff` int(2) NOT NULL default '0',
  `Numens` int(5) NOT NULL default '0',
  PRIMARY KEY  (`Numat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matiere`
--


/*!40000 ALTER TABLE `matiere` DISABLE KEYS */;
LOCK TABLES `matiere` WRITE;
INSERT INTO `matiere` VALUES (1,'Mathématiques',3,11),(2,'Informatique',2,13),(3,'Sociologie',2,10),(4,'Histoire',1,15),(5,'Géographie',1,15);
UNLOCK TABLES;
/*!40000 ALTER TABLE `matiere` ENABLE KEYS */;

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE `notes` (
  `Numetu` int(11) NOT NULL default '0',
  `Numat` int(5) NOT NULL default '0',
  `note` float NOT NULL default '0',
  PRIMARY KEY  (`Numetu`,`Numat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--


/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
LOCK TABLES `notes` WRITE;
INSERT INTO `notes` VALUES (1,1,10.5),(1,2,9),(1,3,12.5),(1,4,13),(1,5,7),(2,1,11),(2,2,14.5),(2,3,8.5),(2,4,10),(2,5,13),(3,1,14),(3,2,9),(3,3,5),(3,4,7.5),(3,5,12),(4,1,11.5),(4,2,10),(4,4,13),(4,5,10),(5,1,7),(5,2,13),(5,3,10),(5,4,16),(5,5,6),(6,2,13),(6,3,10),(6,4,11),(7,1,12.5),(7,2,11.5),(7,3,9),(7,4,8),(7,5,7),(8,1,15),(8,2,16),(8,3,12),(8,4,13),(8,5,10),(9,1,8),(9,2,12),(9,4,8),(10,1,0),(10,2,16),(10,3,11.5),(10,4,9),(10,5,9);
UNLOCK TABLES;
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;

--
-- Table structure for table `sexe`
--

DROP TABLE IF EXISTS `sexe`;
CREATE TABLE `sexe` (
  `Cdsexe` char(1) NOT NULL default '',
  `Lbsexe` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`Cdsexe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sexe`
--


/*!40000 ALTER TABLE `sexe` DISABLE KEYS */;
LOCK TABLES `sexe` WRITE;
INSERT INTO `sexe` VALUES ('F','Femme'),('H','Homme');
UNLOCK TABLES;
/*!40000 ALTER TABLE `sexe` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

