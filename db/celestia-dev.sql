-- MySQL dump 10.13  Distrib 5.5.34, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: celestia-dev
-- ------------------------------------------------------
-- Server version	5.5.34-0ubuntu0.12.04.1

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
-- Table structure for table `dogimages`
--

DROP TABLE IF EXISTS `dogimages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dogimages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dog_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dogimages`
--

LOCK TABLES `dogimages` WRITE;
/*!40000 ALTER TABLE `dogimages` DISABLE KEYS */;
INSERT INTO `dogimages` VALUES (1,1,'/public/images/dogimage/finouka1.jpg'),(2,1,'/public/images/944830_586112368128673_13451773_n.jpg'),(3,1,'/public/images/dogimage/finouka3.jpg'),(4,1,'/public/images/dogimage/finouka4.jpg');
/*!40000 ALTER TABLE `dogimages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dogs`
--

DROP TABLE IF EXISTS `dogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `age` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `textdog` text NOT NULL,
  `textright` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dogs`
--

LOCK TABLES `dogs` WRITE;
/*!40000 ALTER TABLE `dogs` DISABLE KEYS */;
INSERT INTO `dogs` VALUES (1,'Finouka des reve de burtons','2011-06-15','femelle','<table class=\"table table-striped table-bordered\"> \r\n<tbody>\r\n     <tr>\r\n       <td>Producteur</td>\r\n       <td><a href=\"http://www.desrevesdeburtone.com/\">Des rêves de burtone</a></td>\r\n     </tr>\r\n     <tr>\r\n       <td>Couleurs</td>\r\n       <td>Noir</td>\r\n     </tr>\r\n     <tr>\r\n       <td>Puce</td>\r\n       <td>250268500331470</td>\r\n     </tr>\r\n     <tr>\r\n       <td>Inscrit au Livre d\'origine</td>\r\n       <td>LOF</td>\r\n     </tr>\r\n     <tr>\r\n       <td>N° d\'origine</td>\r\n       <td>72298/12077</td>\r\n     </tr>\r\n     <tr>\r\n       <td>Cotation</td>\r\n       <td>Confirmé</td>\r\n      </tr>\r\n      <tr>\r\n        <td>Dysplasie</td>\r\n        <td>B</td>\r\n      </tr>\r\n      <tr>\r\n         <td>Taux de cons</td>\r\n         <td>0 % (calcul 6 générations)</td>\r\n      </tr>\r\n      <tr>\r\n       <td>Fichier chien de France</td>\r\n       <td><a href=\"http://desfeesdecelestia.chiens-de-france.com/site_eleveur/index.php?rub=chiens&amp;page=fiche&amp;TITRE=FEMELLE&amp;ID_ELEVEUR=34064&amp;ID_SITE=36376&amp;ID_CHIEN=575469&amp;TABLE=t_chien_03\" target=\"new\">Fichier</a></td>\r\n      </tr>\r\n      <tr>\r\n       <td>Son pedrigrée officiel</td>\r\n       <td><a href=\"http://www.chiens-de-france.com/photo/chiens/t_chien_03/pedigree/e4851871-67f4-8ee4-259e-b6efeff7d873.jpg\">Son pedrigrée officiel</a></td>\r\n     </tr>\r\n</table> ','  <blockquote>\r\n    <dl>\r\n      <dt>Papa, Cronos de l\'Orangerie des perles rares</dt>\r\n      <dd>Champion des jeunes d\'Allemagne</dd>\r\n      <dd>Champion des jeunes du club suisse</dd>\r\n      <dd> Ch. TCHEQUE</dd>\r\n      <dd>CH.SUISSE 2010</dd>\r\n      <dd>CH. INTERNATIONAL</dd>\r\n      <dd>VICE-CH. De FRANCE</dd>\r\n      <dd>VDH-Saar Sieger Saarbrûcken 2010</dd>\r\n      <dd><cite title=\"Source Title\"><a href=\"http://www.chiens-de-france.com/chiens/fiche_popup.php?ID_CHIEN=336427&amp;TABLE=t_chien_03\">Pedigrée Chien de france</a></cite></dd>\r\n  </dl>\r\n</blockquote>\r\n\r\n\r\n   <blockquote>\r\n    <dl>\r\n      <dt>Mére, Bali des Colonnes de Chaux</dt>\r\n      <dd>2éme Excellent à Bassevelle</dd>\r\n      <dd>1ère Excellent, Manifestation Le Puy en Velay CACS</dd>\r\n      <dd>3ème Très Bon, Manifestation Nantes D CACIB</dd>\r\n      <dd>2ème Excellent RCACS</dd>\r\n      <dd>1ère Excellent Meilleur de Race, Manifestation : Tarbes CACIB</dd>\r\n      <dd><cite title=\"Source Title\"><a href=\"http://www.chiens-de-france.com/chiens/fiche_popup.php?ID_CHIEN=523294&amp;TABLE=t_chien_03\">Pedigrée Chien de france</a></cite></dd>\r\n  </dl>\r\n</blockquote>\r\n \r\n\r\n\r\n\r\n\r\n\r\n  <blockquote>\r\n    <dl>\r\n		<dt>Grand Pére: Saphyr de l\'Orangerie des perles rares</dt>\r\n		<dd>france-international-belgique-luxembourg</dd>\r\n		<dd>Champion de France de conformité au standard</dd>\r\n		<dd>Champion international de beauté</dd>\r\n		<dd>Champion du Luxembourg</dd>\r\n		<dd>Champion de Belgique</dd>\r\n		<dd>Champion des jeunes de Luxembourg</dd>\r\n		<dd>Champion des jeunes du club de Luxembourg</dd>\r\n		<dd>Meilleur dogue regionnale d\'Alsace Lorraine</dd>\r\n		<dd>Champion EUDDC 2008</dd>\r\n		<dd>Champion du MONDE Vétéran 2009</dd>\r\n		<dd>Champion de Slovaquie Vétéran</dd>\r\n		<dd>Champion de Luxembourg Vétéran</dd>\r\n       <dd><cite title=\"Source Title\"><a href=\"http://www.chiens-de-france.com/chiens/fiche_popup.php?ID_CHIEN=81310&amp;TABLE=t_chien_03\">Pedigrée Chien de france</a></cite></dd>\r\n    </dl>\r\n  </blockquote>'),(2,'Issi des terre d\'andalousie','2013-11-25','femelle','to write','to write');
/*!40000 ALTER TABLE `dogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `errors`
--

DROP TABLE IF EXISTS `errors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `errors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `errors`
--

LOCK TABLES `errors` WRITE;
/*!40000 ALTER TABLE `errors` DISABLE KEYS */;
INSERT INTO `errors` VALUES (2,1,'Someone found a 404 page','Controller :nedddd view :','2013-12-27 16:20:49'),(3,1,'Someone found a 404 page','Controller :news view :index','2013-12-27 16:43:58'),(4,1,'Someone found a 404 page','Controller :news view :show','2013-12-27 16:44:02'),(5,1,'Someone found a 404 page','Controller :news view :show','2013-12-27 16:44:08'),(6,1,'Someone found a 404 page','Controller :news view :show','2013-12-27 16:44:38'),(7,1,'Someone found a 404 page','Controller :news view :show','2013-12-27 16:46:34'),(8,1,'Someone found a 404 page','Controller :news view :show','2013-12-27 16:47:08'),(9,1,'Someone found a 404 page','Controller :news view :show','2013-12-27 16:49:25'),(10,1,'Someone found a 404 page','Controller :news view :index','2013-12-27 16:52:53'),(11,1,'Someone found a 404 page','Controller :news view :show','2013-12-27 16:53:06'),(12,1,'Someone found a 404 page','Controller :news view :show','2013-12-27 16:54:50'),(13,1,'Someone found a 404 page','Controller :news view :show','2013-12-27 16:55:05'),(14,1,'Someone found a 404 page','Controller :news view :show','2013-12-27 16:56:56'),(15,1,'Someone found a 404 page','Controller :news view :index','2013-12-27 17:14:36'),(16,1,'Someone found a 404 page','Controller :news view :view','2013-12-27 22:56:53'),(17,1,'Someone found a 404 page','Controller :news view :view','2013-12-27 22:56:53'),(18,1,'Someone found a 404 page','Controller :news view :view','2013-12-27 22:56:53'),(19,1,'Someone found a 404 page','Controller :news view :view','2013-12-27 22:58:50'),(20,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 00:27:30'),(21,1,'Someone found a 404 page','Controller :news view :show','2013-12-28 01:33:54'),(22,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 01:42:39'),(23,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 01:50:36'),(24,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 01:50:52'),(25,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 01:54:56'),(26,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 01:55:13'),(27,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 01:57:24'),(28,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 01:57:36'),(29,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 01:59:11'),(30,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 02:00:02'),(31,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 02:01:21'),(32,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 02:03:05'),(33,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 02:04:35'),(34,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 10:14:01'),(35,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 10:47:53'),(36,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 10:56:17'),(37,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 10:56:22'),(38,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:21:34'),(39,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:24:04'),(40,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:24:24'),(41,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:25:19'),(42,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:25:48'),(43,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:25:55'),(44,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:26:01'),(45,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:26:03'),(46,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:26:14'),(47,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:26:19'),(48,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:26:25'),(49,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:26:33'),(50,1,'Someone found a 404 page','Controller :chiot view :index','2013-12-28 12:16:36'),(51,1,'Someone found missing controller','Controller :chiot view :index','2013-12-28 12:21:44'),(52,1,'Someone found missing view','Controller :chiot view :index','2013-12-28 12:21:44'),(53,1,'Someone found missing controller','Controller :chiot view :index','2013-12-28 12:22:13'),(54,1,'Someone found missing view','Controller :chiot view :index','2013-12-28 12:22:13'),(55,1,'Someone found missing controller','Controller :chiens view :index','2013-12-28 15:09:07'),(56,1,'Someone found missing view','Controller :chiens view :index','2013-12-28 15:09:07'),(57,1,'Someone found missing view','Controller :chiens view :index','2013-12-28 16:10:19'),(58,1,'Someone found missing view','Controller :chiens view :show','2013-12-28 16:11:33'),(59,1,'Someone found missing view','Controller :chiens view :index','2013-12-28 17:26:08'),(60,1,'Someone found missing controller','Controller :chiot view :index','2013-12-29 10:42:50'),(61,1,'Someone found missing view','Controller :chiot view :index','2013-12-29 10:42:50'),(62,1,'Someone found a 404, missing a controller','Controller :installation view :index','2013-12-29 10:53:38'),(63,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:38'),(64,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:38'),(65,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:38'),(66,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:39'),(67,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:39'),(68,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:39'),(69,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:39'),(70,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:39'),(71,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:39'),(72,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:39'),(73,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:39'),(74,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:39'),(75,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:39'),(76,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:40'),(77,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:40'),(78,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:40'),(79,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:40'),(80,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:40'),(81,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:40'),(82,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:40'),(83,1,'Someone found a 404, missing a controller','Controller :contact view :index','2013-12-29 10:54:41'),(84,1,'Someone found a 404, missing a view','Controller :chiens view :dddd','2013-12-29 11:01:35'),(85,1,'Someone found a 404, missing a view','Controller :chiens view :dddd','2013-12-29 11:01:35'),(86,1,'Someone found a 404, missing a view','Controller :chiens view :index','2013-12-29 11:01:35');
/*!40000 ALTER TABLE `errors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `leadin` varchar(255) NOT NULL,
  `main` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Finouka a vendu tout les petits','Finouka a eu 4 petits, malheureusment une décéde a la naissance mais les trois autre etait génial','mail text','/public/images/944830_586112368128673_13451773_n.jpg','2013-12-27 23:13:16'),(2,'Happy a recu un trophée','un chiot du 20012 fait pas de conpetition etc...','Some main test','/public/images/944830_586112368128673_13451773_n.jpg','2013-12-27 23:30:10');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stickynews`
--

DROP TABLE IF EXISTS `stickynews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stickynews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `leadin` text NOT NULL,
  `main` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stickynews`
--

LOCK TABLES `stickynews` WRITE;
/*!40000 ALTER TABLE `stickynews` DISABLE KEYS */;
INSERT INTO `stickynews` VALUES (1,'Welcome to the new site of Celestia','The site before was too complicated we decided to simplify it. ','Some main text','/public/images/944830_586112368128673_13451773_n.jpg','2013-12-27 13:06:37');
/*!40000 ALTER TABLE `stickynews` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-12-29 13:44:55
