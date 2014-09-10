-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: 
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `shinethelight`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `shinethelight` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `shinethelight`;

--
-- Table structure for table `council`
--

DROP TABLE IF EXISTS `council`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `council` (
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `council`
--

LOCK TABLES `council` WRITE;
/*!40000 ALTER TABLE `council` DISABLE KEYS */;
INSERT INTO `council` VALUES ('Layton'),('Ogden North'),('Ogden South'),('Ogden West'),('Southwest Wyoming'),('Weber East'),('Weber West');
/*!40000 ALTER TABLE `council` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leader`
--

DROP TABLE IF EXISTS `leader`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leader` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(767) NOT NULL,
  `ward` varchar(250) NOT NULL,
  `calling` varchar(250) NOT NULL,
  `password` varchar(64) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ward` (`ward`),
  UNIQUE KEY `email` (`email`),
  KEY `calling` (`calling`),
  CONSTRAINT `leader_ward` FOREIGN KEY (`ward`) REFERENCES `ward` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leader`
--

LOCK TABLES `leader` WRITE;
/*!40000 ALTER TABLE `leader` DISABLE KEYS */;
INSERT INTO `leader` VALUES (1,'Jolene Reneau','jodyreneau@gmail.com','Burch Creek 6th','Stake Music Director','847421a2e5d99e999639ec631ddc79a9baf1f22c9c65961d44d824e23c2102af','2014-07-01 23:52:47'),(3,'Michael Jacobsen','jacobsen.mike@gmail.com','Founders Park','Bishop','3f256d86e526e23579b5a684034a142664f9ffa3a4a17e36cead8b0536871ba2','2014-07-03 13:32:45'),(4,'Tammy Budge','btbudge@q.com','Rock Cliff 7th','Young Women\'s President','e95065d76dbe66a0a43e4cd554eb581055f31e7b809fa96ad3e9a350815f95da','2014-07-03 15:21:07');
/*!40000 ALTER TABLE `leader` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session`
--

LOCK TABLES `session` WRITE;
/*!40000 ALTER TABLE `session` DISABLE KEYS */;
INSERT INTO `session` VALUES ('41e29a01ebd854db67e9c7544c8bf6d0','65.130.79.203','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.153 Safari/537.36',1404419165,''),('684d6036887d06c28ce167ec40c13845','70.196.194.96','Mozilla/5.0 (iPhone; CPU iPhone OS 7_1_1 like Mac OS X) AppleWebKit/537.51.2 (KHTML, like Gecko) Version/7.0 Mobile/11D2',1404413763,''),('eea9e7c4ed15c59fd5209aa54565873a','70.196.194.190','Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; NP06; rv:11.0) like Gecko',1404416841,''),('fdd890695dbd3130b73f868946d14b17','172.56.38.184','Mozilla/5.0 (Linux; Android 4.4.2; LG-D801 Build/KOT49I.D80120a) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916',1404417395,'');
/*!40000 ALTER TABLE `session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stake`
--

DROP TABLE IF EXISTS `stake`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stake` (
  `name` varchar(250) NOT NULL,
  `council` varchar(50) NOT NULL,
  `host` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`name`),
  KEY `council` (`council`),
  KEY `leader` (`host`),
  CONSTRAINT `council_name` FOREIGN KEY (`council`) REFERENCES `council` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stake`
--

LOCK TABLES `stake` WRITE;
/*!40000 ALTER TABLE `stake` DISABLE KEYS */;
INSERT INTO `stake` VALUES ('Clearfield Utah','Weber East',0),('Clearfield Utah North','Weber East',0),('Clearfield Utah South','Weber East',0),('Clinton Utah','Weber West',0),('Clinton Utah North','Weber West',0),('Clinton Utah West','Weber West',0),('Coalville Utah','Southwest Wyoming',0),('Evanston Wyoming','Southwest Wyoming',0),('Evanston Wyoming South','Southwest Wyoming',0),('Farr West Utah','Ogden West',0),('Farr West Utah Poplar','Ogden West',0),('Harrisville Utah','Ogden West',0),('Hooper Utah','Ogden West',0),('Hooper Utah Pioneer Trail','Ogden West',0),('Huntsville Utah','Ogden North',0),('Kanesville Utah','Ogden West',0),('Kemmerer Wyoming','Southwest Wyoming',0),('Layton Utah','Layton',0),('Layton Utah Creekside','Layton',0),('Layton Utah East','Layton',0),('Layton Utah Holmes Creek','Layton',0),('Layton Utah Kays Creek','Layton',0),('Layton Utah Layton Hills','Layton',0),('Layton Utah Legacy','Layton',0),('Layton Utah North','Layton',0),('Layton Utah Northridge','Layton',0),('Layton Utah South','Layton',0),('Layton Utah Valley View','Layton',0),('Layton Utah West','Layton',0),('Lyman Wyoming','Southwest Wyoming',0),('Morgan Utah','Weber East',0),('Morgan Utah North','Weber East',0),('North Ogden Utah','Ogden North',0),('North Ogden Utah Ben Lomond','Ogden North',0),('North Ogden Utah Coldwater','Ogden North',0),('North Ogden Utah East','Ogden North',0),('Ogden Utah','Ogden South',0),('Ogden Utah Burch Creek','Ogden South',0),('Ogden Utah East','Ogden South',0),('Ogden Utah Lorin Farr','Ogden North',0),('Ogden Utah Mound Fort','Ogden West',0),('Ogden Utah Mount Lewis','Ogden North',0),('Ogden Utah Pleasant Valley','Ogden South',0),('Ogden Utah Rock Cliff','Ogden North',0),('Ogden Utah Weber','Ogden South',1),('Ogden Utah Weber Heights','Ogden South',0),('Ogden Utah Weber North','Ogden West',0),('Ogden Utah West','Ogden West',0),('Plain City Utah','Ogden West',0),('Pleasant View Utah','Ogden North',1),('Pleasant View Utah South','Ogden North',0),('Riverdale Utah','Ogden South',0),('Riverton Wyoming','Southwest Wyoming',0),('Roy Utah','Weber West',0),('Roy Utah Central','Weber West',0),('Roy Utah Midland','Weber West',0),('Roy Utah North','Weber West',0),('Roy Utah South','Weber West',0),('Roy Utah West','Weber West',0),('South Ogden Utah','Ogden South',0),('South Weber Utah','Weber East',1),('Sunset Utah','Weber East',0),('Syracuse Utah','Weber East',0),('Syracuse Utah Bluff','Weber East',0),('Syracuse Utah Legacy Park','Weber East',0),('Syracuse Utah South','Weber East',0),('Syracuse Utah West','Weber East',0),('Washington Terrace Utah East','Ogden South',0),('Washington Terrace Utah West','Ogden South',0),('West Haven Utah','Ogden West',0),('West Point Utah','Weber West',1),('West Point Utah Lakeside','Weber West',0);
/*!40000 ALTER TABLE `stake` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ward`
--

DROP TABLE IF EXISTS `ward`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ward` (
  `name` varchar(250) NOT NULL,
  `stake` varchar(250) NOT NULL,
  PRIMARY KEY (`name`),
  KEY `stake` (`stake`),
  CONSTRAINT `ward_stake` FOREIGN KEY (`stake`) REFERENCES `stake` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ward`
--

LOCK TABLES `ward` WRITE;
/*!40000 ALTER TABLE `ward` DISABLE KEYS */;
INSERT INTO `ward` VALUES ('Chelemes','Clearfield Utah'),('Clearfield 11th','Clearfield Utah'),('Clearfield 1st','Clearfield Utah'),('Clearfield 2nd','Clearfield Utah'),('Clearfield 4th','Clearfield Utah'),('Clearfield 5th','Clearfield Utah'),('Clearfield 9th','Clearfield Utah'),('Fox Hollow','Clearfield Utah'),('Major Meadows','Clearfield Utah'),('Clearfield 10th','Clearfield Utah North'),('Clearfield 12th','Clearfield Utah North'),('Clearfield 18th','Clearfield Utah North'),('Clearfield 22nd','Clearfield Utah North'),('Clearfield 23rd','Clearfield Utah North'),('Clearfield 3rd','Clearfield Utah North'),('Clearfield 8th','Clearfield Utah North'),('Wedgewood','Clearfield Utah North'),('Clearfield 14th','Clearfield Utah South'),('Clearfield 16th','Clearfield Utah South'),('Clearfield 20th (Spanish)','Clearfield Utah South'),('Island View 1st','Clearfield Utah South'),('Island View 2nd','Clearfield Utah South'),('Melanie Acres','Clearfield Utah South'),('West Park','Clearfield Utah South'),('Windsor Meadows 2nd','Clearfield Utah South'),('Clinton 10th','Clinton Utah'),('Clinton 12th','Clinton Utah'),('Clinton 13th','Clinton Utah'),('Clinton 16th','Clinton Utah'),('Clinton 19th','Clinton Utah'),('Clinton 1st','Clinton Utah'),('Clinton 20th','Clinton Utah'),('Clinton 27th','Clinton Utah'),('Clinton 8th','Clinton Utah'),('Clinton 11th','Clinton Utah North'),('Clinton 18th','Clinton Utah North'),('Clinton 23rd','Clinton Utah North'),('Clinton 3rd','Clinton Utah North'),('Clinton 4th','Clinton Utah North'),('Clinton 5th','Clinton Utah North'),('Clinton 6th','Clinton Utah North'),('Clinton 7th','Clinton Utah North'),('Clinton 15th','Clinton Utah West'),('Clinton 17th','Clinton Utah West'),('Clinton 21st','Clinton Utah West'),('Clinton 22nd','Clinton Utah West'),('Clinton 25th','Clinton Utah West'),('Clinton 26th','Clinton Utah West'),('Clinton 29th','Clinton Utah West'),('Clinton 2nd','Clinton Utah West'),('Clinton 9th','Clinton Utah West'),('Coalville 1st','Coalville Utah'),('Coalville 2nd','Coalville Utah'),('Henefer 1st','Coalville Utah'),('Henefer 2nd','Coalville Utah'),('Hoytsville 1st','Coalville Utah'),('Hoytsville 2nd','Coalville Utah'),('Upton','Coalville Utah'),('Wanship','Coalville Utah'),('Almy','Evanston Wyoming'),('Evanston 2nd','Evanston Wyoming'),('Evanston 3rd','Evanston Wyoming'),('Evanston 5th','Evanston Wyoming'),('Evanston 6th','Evanston Wyoming'),('Evanston 1st','Evanston Wyoming South'),('Evanston 4th','Evanston Wyoming South'),('Evanston 7th','Evanston Wyoming South'),('Evanston 8th','Evanston Wyoming South'),('Hilliard','Evanston Wyoming South'),('Uinta View','Evanston Wyoming South'),('Yellow Creek','Evanston Wyoming South'),('Farr West 4th','Farr West Utah'),('Farr West 5th','Farr West Utah'),('Farr West 6th','Farr West Utah'),('Farr West 9th','Farr West Utah'),('Plain City 2nd','Farr West Utah'),('Plain City 7th','Farr West Utah'),('Cottonwood Creek','Farr West Utah Poplar'),('Farr West 1st','Farr West Utah Poplar'),('Farr West 2nd','Farr West Utah Poplar'),('Farr West 3rd','Farr West Utah Poplar'),('Farr West 7th','Farr West Utah Poplar'),('Farr West 8th','Farr West Utah Poplar'),('Poplar','Farr West Utah Poplar'),('Westwood','Farr West Utah Poplar'),('Harrisville 10th','Harrisville Utah'),('Harrisville 1st','Harrisville Utah'),('Harrisville 2nd','Harrisville Utah'),('Harrisville 3rd','Harrisville Utah'),('Harrisville 6th','Harrisville Utah'),('Harrisville 7th','Harrisville Utah'),('Harrisville 8th','Harrisville Utah'),('Harrisville 9th','Harrisville Utah'),('Homestead','Hooper Utah'),('Hooper 1st','Hooper Utah'),('Hooper 2nd','Hooper Utah'),('Hooper 3rd','Hooper Utah'),('Lakeview','Hooper Utah'),('Park','Hooper Utah'),('Shannondoah','Hooper Utah'),('Freedom','Hooper Utah Pioneer Trail'),('Fremont','Hooper Utah Pioneer Trail'),('Hooper Landings','Hooper Utah Pioneer Trail'),('Muskrat Springs','Hooper Utah Pioneer Trail'),('Pioneer Trail','Hooper Utah Pioneer Trail'),('Wildwood','Hooper Utah Pioneer Trail'),('Eden 1st','Huntsville Utah'),('Eden 2nd','Huntsville Utah'),('Huntsville 1st','Huntsville Utah'),('Huntsville 2nd','Huntsville Utah'),('Liberty 1st','Huntsville Utah'),('Liberty 2nd','Huntsville Utah'),('Middle Fork','Huntsville Utah'),('Middleton','Huntsville Utah'),('Nordic Valley','Huntsville Utah'),('North Fork','Huntsville Utah'),('South Fork','Huntsville Utah'),('Wolf Creek','Huntsville Utah'),('Country View','Kanesville Utah'),('Fair Grove','Kanesville Utah'),('Foxglen Park','Kanesville Utah'),('Pheasant Meadow','Kanesville Utah'),('Prairie Crossing','Kanesville Utah'),('Regal Country','Kanesville Utah'),('Rocky Mountain','Kanesville Utah'),('Big Piney','Kemmerer Wyoming'),('Kemmerer 1st','Kemmerer Wyoming'),('Kemmerer 2nd','Kemmerer Wyoming'),('Kemmerer 3rd','Kemmerer Wyoming'),('La Barge','Kemmerer Wyoming'),('Randolph 1st','Kemmerer Wyoming'),('Randolph 2nd','Kemmerer Wyoming'),('Woodruff','Kemmerer Wyoming'),('Central','Layton Utah'),('Fort Lane','Layton Utah'),('Fox Creek','Layton Utah'),('Layton 17th','Layton Utah'),('Layton 3rd (Spanish)','Layton Utah'),('Layton 6th','Layton Utah'),('North Park','Layton Utah'),('Robins Park','Layton Utah'),('Summerfield','Layton Utah'),('Heritage','Layton Utah Creekside'),('Layton 18th','Layton Utah Creekside'),('Layton 31st','Layton Utah Creekside'),('Layton 38th','Layton Utah Creekside'),('Layton 4th','Layton Utah Creekside'),('Layton 7th','Layton Utah Creekside'),('Adams Park','Layton Utah East'),('Cherry Lane','Layton Utah East'),('Country Hollow','Layton Utah East'),('Emerald','Layton Utah East'),('Fairfield 2nd','Layton Utah East'),('Falcon Ridge','Layton Utah East'),('Snow Creek','Layton Utah East'),('Chapel Park','Layton Utah Holmes Creek'),('Country Creek','Layton Utah Holmes Creek'),('Creekside','Layton Utah Holmes Creek'),('Fiddlers Creek','Layton Utah Holmes Creek'),('Kimball','Layton Utah Holmes Creek'),('Maple Way','Layton Utah Holmes Creek'),('Rosewood','Layton Utah Holmes Creek'),('Summerhaze','Layton Utah Holmes Creek'),('Country Oaks','Layton Utah Kays Creek'),('Dawson Hollow','Layton Utah Kays Creek'),('Kays Creek','Layton Utah Kays Creek'),('Oak Lane','Layton Utah Kays Creek'),('Orchard Grove','Layton Utah Kays Creek'),('Snow Canyon','Layton Utah Kays Creek'),('Valley View','Layton Utah Kays Creek'),('Antelope Hills','Layton Utah Layton Hills'),('Chapel Hills','Layton Utah Layton Hills'),('Fairfield','Layton Utah Layton Hills'),('Lakeland','Layton Utah Layton Hills'),('Layton Hills','Layton Utah Layton Hills'),('Lincoln','Layton Utah Layton Hills'),('Pleasant Hills','Layton Utah Layton Hills'),('Sun Hills','Layton Utah Layton Hills'),('Woodland Park','Layton Utah Layton Hills'),('Evans Meadows','Layton Utah Legacy'),('Feathering Sands','Layton Utah Legacy'),('Layton 2nd','Layton Utah Legacy'),('Meadow Green','Layton Utah Legacy'),('Sand Springs','Layton Utah Legacy'),('West Layton','Layton Utah Legacy'),('Wheatfield','Layton Utah Legacy'),('Forest Park','Layton Utah North'),('Forest Ridge','Layton Utah North'),('Heather Glen','Layton Utah North'),('Hidden Hollow','Layton Utah North'),('Oak Forest','Layton Utah North'),('Oak Ridge','Layton Utah North'),('Greyhawk','Layton Utah Northridge'),('Hobbs Creek','Layton Utah Northridge'),('La Donna Mesa','Layton Utah Northridge'),('Layton 28th','Layton Utah Northridge'),('Ridge Crest','Layton Utah Northridge'),('Tri Oaks','Layton Utah Northridge'),('Angel Crossing','Layton Utah South'),('Bridgecreek','Layton Utah South'),('Greenbriar','Layton Utah South'),('Layton 37th','Layton Utah South'),('Pheasant Place','Layton Utah South'),('Roberts Farms','Layton Utah South'),('Stone Creek','Layton Utah South'),('Swan Lakes','Layton Utah South'),('Weaver Lane','Layton Utah South'),('Adamswood','Layton Utah Valley View'),('Aspen Cove','Layton Utah Valley View'),('Dixie','Layton Utah Valley View'),('Forest Hills','Layton Utah Valley View'),('Layton Park','Layton Utah Valley View'),('Oakhills','Layton Utah Valley View'),('Peacefield','Layton Utah Valley View'),('Summerwood','Layton Utah Valley View'),('Camelot','Layton Utah West'),('Chelsie Park 1st','Layton Utah West'),('Chelsie Park 2nd','Layton Utah West'),('Chelsie Park 3rd','Layton Utah West'),('Green Leaf','Layton Utah West'),('Park West','Layton Utah West'),('Suntrails','Layton Utah West'),('Vae View','Layton Utah West'),('Windsor Meadows 1st','Layton Utah West'),('Fort Bridger','Lyman Wyoming'),('Lyman 1st','Lyman Wyoming'),('Lyman 2nd','Lyman Wyoming'),('Lyman 3rd','Lyman Wyoming'),('Lyman 4th','Lyman Wyoming'),('Mountain View 1st','Lyman Wyoming'),('Mountain View 2nd','Lyman Wyoming'),('Mountain View 3rd','Lyman Wyoming'),('Urie','Lyman Wyoming'),('Morgan 11th','Morgan Utah'),('Morgan 12th','Morgan Utah'),('Morgan 1st','Morgan Utah'),('Morgan 2nd','Morgan Utah'),('Morgan 3rd','Morgan Utah'),('Morgan 4th','Morgan Utah'),('Morgan 5th','Morgan Utah'),('Morgan 6th','Morgan Utah'),('Morgan 7th','Morgan Utah'),('Morgan 8th','Morgan Utah'),('Morgan 9th','Morgan Utah'),('Enterprise','Morgan Utah North'),('Hidden Hills','Morgan Utah North'),('Highlands','Morgan Utah North'),('Milton','Morgan Utah North'),('Mountain Green','Morgan Utah North'),('Peterson','Morgan Utah North'),('Rosehill','Morgan Utah North'),('Silver Lake','Morgan Utah North'),('Stoddard','Morgan Utah North'),('North Ogden 16th','North Ogden Utah'),('North Ogden 17th','North Ogden Utah'),('North Ogden 1st','North Ogden Utah'),('North Ogden 21st','North Ogden Utah'),('North Ogden 3rd','North Ogden Utah'),('North Ogden 5th','North Ogden Utah'),('North Ogden 7th','North Ogden Utah'),('North Ogden 9th','North Ogden Utah'),('Ben Lomond 10th','North Ogden Utah Ben Lomond'),('Ben Lomond 11th','North Ogden Utah Ben Lomond'),('Ben Lomond 12th','North Ogden Utah Ben Lomond'),('Ben Lomond 1st','North Ogden Utah Ben Lomond'),('Ben Lomond 4th','North Ogden Utah Ben Lomond'),('Ben Lomond 5th','North Ogden Utah Ben Lomond'),('Ben Lomond 9th','North Ogden Utah Ben Lomond'),('Mountain','North Ogden Utah Coldwater'),('North Ogden 10th','North Ogden Utah Coldwater'),('North Ogden 12th','North Ogden Utah Coldwater'),('North Ogden 15th','North Ogden Utah Coldwater'),('North Ogden 19th','North Ogden Utah Coldwater'),('North Ogden 23rd','North Ogden Utah Coldwater'),('North Ogden 2nd','North Ogden Utah Coldwater'),('North Ogden 4th','North Ogden Utah Coldwater'),('North Ogden 6th','North Ogden Utah Coldwater'),('North Ogden 11th','North Ogden Utah East'),('North Ogden 13th','North Ogden Utah East'),('North Ogden 14th','North Ogden Utah East'),('North Ogden 20th','North Ogden Utah East'),('North Ogden 22nd','North Ogden Utah East'),('North Ogden 24th','North Ogden Utah East'),('North Ogden 8th','North Ogden Utah East'),('Buenaventura (Spanish) ','Ogden Utah'),('Canyon Hollows','Ogden Utah'),('Foothills','Ogden Utah'),('Liberty Park','Ogden Utah'),('Ogden 4th','Ogden Utah'),('River Parkway','Ogden Utah'),('Rushton Heights','Ogden Utah'),('Taylor Canyon','Ogden Utah'),('Burch Creek 1st','Ogden Utah Burch Creek'),('Burch Creek 2nd','Ogden Utah Burch Creek'),('Burch Creek 3rd','Ogden Utah Burch Creek'),('Burch Creek 4th','Ogden Utah Burch Creek'),('Burch Creek 5th','Ogden Utah Burch Creek'),('Burch Creek 6th','Ogden Utah Burch Creek'),('Burch Creek 7th','Ogden Utah Burch Creek'),('Eccles Park','Ogden Utah East'),('Highland','Ogden Utah East'),('Jackson','Ogden Utah East'),('Jefferson 2nd (Spanish) ','Ogden Utah East'),('Kingston','Ogden Utah East'),('Mount Ogden','Ogden Utah East'),('Waterfall Canyon','Ogden Utah East'),('Lorin Farr 1st','Ogden Utah Lorin Farr'),('Lorin Farr 2nd','Ogden Utah Lorin Farr'),('Lorin Farr 3rd','Ogden Utah Lorin Farr'),('Lorin Farr 4th','Ogden Utah Lorin Farr'),('Lorin Farr 5th','Ogden Utah Lorin Farr'),('Lorin Farr 6th','Ogden Utah Lorin Farr'),('Lomond View','Ogden Utah Mound Fort'),('Marriott-Slaterville 1st','Ogden Utah Mound Fort'),('Marriott-Slaterville 2nd','Ogden Utah Mound Fort'),('Marriott-Slaterville 3rd','Ogden Utah Mound Fort'),('Mound Fort 1st','Ogden Utah Mound Fort'),('Mound Fort 2nd','Ogden Utah Mound Fort'),('Ogden 3rd','Ogden Utah Mound Fort'),('Mount Lewis 1st','Ogden Utah Mount Lewis'),('Mount Lewis 2nd','Ogden Utah Mount Lewis'),('Mount Lewis 3rd','Ogden Utah Mount Lewis'),('Mount Lewis 4th','Ogden Utah Mount Lewis'),('Mount Lewis 5th','Ogden Utah Mount Lewis'),('Mount Lewis 6th','Ogden Utah Mount Lewis'),('Mount Lewis 7th','Ogden Utah Mount Lewis'),('Mount Lewis 8th','Ogden Utah Mount Lewis'),('Mount Lewis 9th (Spanish) ','Ogden Utah Mount Lewis'),('Pleasant Valley 3rd','Ogden Utah Pleasant Valley'),('Pleasant Valley 4th','Ogden Utah Pleasant Valley'),('Pleasant Valley 5th','Ogden Utah Pleasant Valley'),('Pleasant Valley 6th','Ogden Utah Pleasant Valley'),('Pleasant Valley 7th','Ogden Utah Pleasant Valley'),('Uintah 1st','Ogden Utah Pleasant Valley'),('Uintah 2nd','Ogden Utah Pleasant Valley'),('Rock Cliff 1st','Ogden Utah Rock Cliff'),('Rock Cliff 2nd','Ogden Utah Rock Cliff'),('Rock Cliff 3rd','Ogden Utah Rock Cliff'),('Rock Cliff 4th','Ogden Utah Rock Cliff'),('Rock Cliff 5th','Ogden Utah Rock Cliff'),('Rock Cliff 6th','Ogden Utah Rock Cliff'),('Rock Cliff 7th','Ogden Utah Rock Cliff'),('Canyon Crest','Ogden Utah Weber'),('Eastwood','Ogden Utah Weber'),('Meadows','Ogden Utah Weber'),('Shadow Mountain','Ogden Utah Weber'),('Shadow Valley','Ogden Utah Weber'),('Spring Canyon','Ogden Utah Weber'),('Wasatch','Ogden Utah Weber'),('Country Hills','Ogden Utah Weber Heights'),('Forest Green','Ogden Utah Weber Heights'),('Old Post','Ogden Utah Weber Heights'),('Orchard Park','Ogden Utah Weber Heights'),('Shadow Ridge','Ogden Utah Weber Heights'),('Sullivan Hollow 1st','Ogden Utah Weber Heights'),('Sullivan Hollow 2nd','Ogden Utah Weber Heights'),('Warren','Ogden Utah Weber North'),('West Warren','Ogden Utah Weber North'),('West Weber 1st','Ogden Utah Weber North'),('West Weber 2nd','Ogden Utah Weber North'),('West Weber 3rd','Ogden Utah Weber North'),('Taylor 1st','Ogden Utah West'),('Taylor 2nd','Ogden Utah West'),('Taylor 3rd','Ogden Utah West'),('Taylor 4th','Ogden Utah West'),('Wilson 1st','Ogden Utah West'),('Wilson 2nd','Ogden Utah West'),('Wilson 3rd','Ogden Utah West'),('Wilson 4th','Ogden Utah West'),('Wilson 5th','Ogden Utah West'),('Plain City 1st','Plain City Utah'),('Plain City 3rd','Plain City Utah'),('Plain City 4th','Plain City Utah'),('Plain City 5th','Plain City Utah'),('Plain City 6th','Plain City Utah'),('Riverside','Plain City Utah'),('Pleasant View 12th','Pleasant View Utah'),('Pleasant View 13th','Pleasant View Utah'),('Pleasant View 14th','Pleasant View Utah'),('Pleasant View 16th','Pleasant View Utah'),('Pleasant View 17th','Pleasant View Utah'),('Pleasant View 18th','Pleasant View Utah'),('Pleasant View 1st','Pleasant View Utah'),('Pleasant View 3rd','Pleasant View Utah'),('Pleasant View 4th','Pleasant View Utah'),('Pleasant View 5th','Pleasant View Utah'),('Pleasant View 6th','Pleasant View Utah'),('Pleasant View 7th','Pleasant View Utah'),('Colonial Springs','Pleasant View Utah South'),('Harrisville 4th','Pleasant View Utah South'),('Harrisville 5th','Pleasant View Utah South'),('Misty Meadows','Pleasant View Utah South'),('Pleasant View 10th','Pleasant View Utah South'),('Pleasant View 11th','Pleasant View Utah South'),('Pleasant View 2nd','Pleasant View Utah South'),('Pleasant View 8th','Pleasant View Utah South'),('Pleasant View 9th','Pleasant View Utah South'),('Willow Brook','Pleasant View Utah South'),('Jefferson 1st','Riverdale Utah'),('Riverdale 1st','Riverdale Utah'),('Riverdale 2nd','Riverdale Utah'),('Riverdale 4th','Riverdale Utah'),('Riverdale 5th','Riverdale Utah'),('Riverdale 6th','Riverdale Utah'),('Riverdale 7th','Riverdale Utah'),('Riverdale 8th','Riverdale Utah'),('Aspen Park','Riverton Wyoming'),('Mountain View','Riverton Wyoming'),('Sinks Canyon','Riverton Wyoming'),('Sunset Park','Riverton Wyoming'),('Wind River','Riverton Wyoming'),('Chateau Park','Roy Utah'),('Municipal Park','Roy Utah'),('Roy 13th','Roy Utah'),('Roy 2nd','Roy Utah'),('Roy 4th','Roy Utah'),('Roy 5th','Roy Utah'),('Lake View','Roy Utah Central'),('Roy 12th','Roy Utah Central'),('Roy 16th','Roy Utah Central'),('Roy 7th','Roy Utah Central'),('Roy West Park','Roy Utah Central'),('Sand Ridge','Roy Utah Central'),('Foxglen','Roy Utah Midland'),('Meadow Creek','Roy Utah Midland'),('Midland 2nd','Roy Utah Midland'),('Roy 26th','Roy Utah Midland'),('Roy 27th','Roy Utah Midland'),('Roy 28th','Roy Utah Midland'),('Roy 31st','Roy Utah Midland'),('Cedar Crest','Roy Utah North'),('Midland Farms','Roy Utah North'),('Monte Vista','Roy Utah North'),('Roy 11th','Roy Utah North'),('Roy 9th','Roy Utah North'),('Roy 10th','Roy Utah South'),('Roy 15th','Roy Utah South'),('Roy 17th','Roy Utah South'),('Roy 18th','Roy Utah South'),('Roy 24th','Roy Utah South'),('Roy 30th','Roy Utah South'),('Country Lane','Roy Utah West'),('Pheasant Run','Roy Utah West'),('Roy 14th','Roy Utah West'),('Roy 1st','Roy Utah West'),('Springbrook','Roy Utah West'),('Westlake','Roy Utah West'),('Wheatridge','Roy Utah West'),('Adams','South Ogden Utah'),('Memorial Park','South Ogden Utah'),('South Ogden 3rd','South Ogden Utah'),('South Ogden 4th','South Ogden Utah'),('South Ogden 5th','South Ogden Utah'),('South Ogden 6th','South Ogden Utah'),('South Ogden 7th','South Ogden Utah'),('South Ogden 8th','South Ogden Utah'),('Cedar Bench','South Weber Utah'),('Cedar Bluff','South Weber Utah'),('Pioneer','South Weber Utah'),('South Weber 1st','South Weber Utah'),('South Weber 2nd','South Weber Utah'),('South Weber 3rd','South Weber Utah'),('South Weber 4th','South Weber Utah'),('South Weber 5th','South Weber Utah'),('South Weber 6th','South Weber Utah'),('South Weber 8th','South Weber Utah'),('Clearfield 6th','Sunset Utah'),('Clearfield 7th','Sunset Utah'),('Clinton 14th','Sunset Utah'),('Sunset 1st','Sunset Utah'),('Sunset 2nd','Sunset Utah'),('Sunset 3rd','Sunset Utah'),('Sunset 4th','Sunset Utah'),('Sunset 5th','Sunset Utah'),('Banbury','Syracuse Utah'),('Founders Park','Syracuse Utah'),('Syracuse 4th','Syracuse Utah'),('Syracuse 5th','Syracuse Utah'),('Syracuse 7th','Syracuse Utah'),('Syracuse 9th','Syracuse Utah'),('Zions Crossing','Syracuse Utah'),('Canterbury Park','Syracuse Utah Bluff'),('Cherry Village','Syracuse Utah Bluff'),('Country Crossing','Syracuse Utah Bluff'),('Hansen Meadows','Syracuse Utah Bluff'),('Huckleberry','Syracuse Utah Bluff'),('Syracuse 1st','Syracuse Utah Bluff'),('Syracuse 6th','Syracuse Utah Bluff'),('Buffalo Ridge','Syracuse Utah Legacy Park'),('Centennial Park','Syracuse Utah Legacy Park'),('Center','Syracuse Utah Legacy Park'),('Legacy Park','Syracuse Utah Legacy Park'),('Maplewood','Syracuse Utah Legacy Park'),('Syracuse 11th','Syracuse Utah Legacy Park'),('Syracuse 2nd','Syracuse Utah Legacy Park'),('Syracuse 3rd','Syracuse Utah Legacy Park'),('Bluff Ridge','Syracuse Utah South'),('Harmony Bluff','Syracuse Utah South'),('Jensen Park','Syracuse Utah South'),('Sandridge','Syracuse Utah South'),('Silver Lakes','Syracuse Utah South'),('South Bluff','Syracuse Utah South'),('Spring Haven','Syracuse Utah South'),('Walnut Grove','Syracuse Utah South'),('Whisper Wood','Syracuse Utah South'),('Eagle Estates','Syracuse Utah West'),('Glen Eagle 1st','Syracuse Utah West'),('Inverness','Syracuse Utah West'),('Jupiter Hills','Syracuse Utah West'),('Lakeshore','Syracuse Utah West'),('Rock Creek','Syracuse Utah West'),('Syracuse 10th','Syracuse Utah West'),('Syracuse 8th','Syracuse Utah West'),('Trailside','Syracuse Utah West'),('Turnberry','Syracuse Utah West'),('Ogden 49th','Washington Terrace Utah East'),('Washington Terrace 10th','Washington Terrace Utah East'),('Washington Terrace 13th','Washington Terrace Utah East'),('Washington Terrace 3rd','Washington Terrace Utah East'),('Washington Terrace 4th','Washington Terrace Utah East'),('Washington Terrace 6th','Washington Terrace Utah East'),('Washington Terrace 12th','Washington Terrace Utah West'),('Washington Terrace 2nd','Washington Terrace Utah West'),('Washington Terrace 5th','Washington Terrace Utah West'),('Washington Terrace 7th','Washington Terrace Utah West'),('Washington Terrace 8th','Washington Terrace Utah West'),('Washington Terrace 9th','Washington Terrace Utah West'),('Country Meadows','West Haven Utah'),('Kanesville','West Haven Utah'),('Rose Wood','West Haven Utah'),('West Haven','West Haven Utah'),('White Rail','West Haven Utah'),('West Point 10th','West Point Utah'),('West Point 11th','West Point Utah'),('West Point 12th','West Point Utah'),('West Point 14th','West Point Utah'),('West Point 18th','West Point Utah'),('West Point 2nd','West Point Utah'),('West Point 4th','West Point Utah'),('West Point 7th','West Point Utah'),('West Point 8th','West Point Utah'),('West Point 13th','West Point Utah Lakeside'),('West Point 16th','West Point Utah Lakeside'),('West Point 17th','West Point Utah Lakeside'),('West Point 19th','West Point Utah Lakeside'),('West Point 1st','West Point Utah Lakeside'),('West Point 3rd','West Point Utah Lakeside'),('West Point 5th','West Point Utah Lakeside'),('West Point 6th','West Point Utah Lakeside'),('West Point 9th','West Point Utah Lakeside');
/*!40000 ALTER TABLE `ward` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `youth`
--

DROP TABLE IF EXISTS `youth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `youth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `ward` varchar(250) NOT NULL,
  `forms` tinyint(1) NOT NULL DEFAULT '0',
  `area` varchar(20) NOT NULL DEFAULT 'Please Specify',
  PRIMARY KEY (`id`),
  KEY `age` (`age`,`gender`),
  KEY `ward` (`ward`),
  KEY `forms` (`forms`,`area`),
  CONSTRAINT `youth_ward` FOREIGN KEY (`ward`) REFERENCES `ward` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `youth`
--

LOCK TABLES `youth` WRITE;
/*!40000 ALTER TABLE `youth` DISABLE KEYS */;
INSERT INTO `youth` VALUES (1,'Kimball Budge',16,1,'Rock Cliff 7th',0,'Choir - Tenor'),(2,'Cora Budge',15,0,'Rock Cliff 7th',0,'Cast'),(3,'Kadun Budge',14,1,'Rock Cliff 7th',0,'Choir - Tenor'),(4,'Hyrum Barnes',14,1,'Rock Cliff 7th',0,'Choir - Tenor'),(5,'Ammon Barnes',16,1,'Rock Cliff 7th',0,'Choir - Tenor'),(6,'Joe Barnes',15,1,'Rock Cliff 7th',0,'Choir - Tenor'),(7,'Liz Barnes',17,0,'Rock Cliff 7th',0,'Choir - Soprano'),(8,'Megan Barnes',12,0,'Rock Cliff 7th',0,'Choir - Soprano'),(9,'Karina Schaffer',14,0,'Rock Cliff 7th',0,'Choir - Soprano'),(10,'Cassidee Schaffer',12,0,'Rock Cliff 7th',0,'Choir - Soprano'),(11,'McKinzie Burnett',13,0,'Rock Cliff 7th',0,'Choir - Soprano'),(12,'Abby Hendersen',14,0,'Rock Cliff 7th',0,'Choir - Soprano'),(13,'Alex Chrisoffersen',14,1,'Rock Cliff 7th',0,'Choir - Tenor'),(14,'Eden Kunzler',13,0,'Rock Cliff 7th',0,'Cast'),(15,'McKay Kunzler',12,0,'Rock Cliff 7th',0,'Choir - Soprano');
/*!40000 ALTER TABLE `youth` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-03 16:43:13
