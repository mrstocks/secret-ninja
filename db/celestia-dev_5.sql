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
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dogimages`
--

LOCK TABLES `dogimages` WRITE;
/*!40000 ALTER TABLE `dogimages` DISABLE KEYS */;
INSERT INTO `dogimages` VALUES (1,1,'/public/images/dogimage/finouka1.jpg',NULL),(2,1,'/public/images/944830_586112368128673_13451773_n.jpg',NULL),(3,1,'/public/images/dogimage/finouka3.jpg',NULL),(4,1,'/public/images/dogimage/finouka4.jpg',NULL);
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
INSERT INTO `dogs` VALUES (1,'Finouka des reve de burtons','2011-06-15','femelle','<table class=\"table table-striped table-bordered\"> \r\n<tbody>\r\n     <tr>\r\n       <td>Producteur</td>\r\n       <td><a href=\"http://www.desrevesdeburtone.com/\">Des r&ecirc;ves de burtone</a></td>\r\n     </tr>\r\n     <tr>\r\n       <td>Couleurs</td>\r\n       <td>Noir</td>\r\n     </tr>\r\n     <tr>\r\n       <td>Puce</td>\r\n       <td>250268500331470</td>\r\n     </tr>\r\n     <tr>\r\n       <td>Inscrit au Livre d\'origine</td>\r\n       <td>LOF</td>\r\n     </tr>\r\n     <tr>\r\n       <td>N° d\'origine</td>\r\n       <td>72298/12077</td>\r\n     </tr>\r\n     <tr>\r\n       <td>Cotation</td>\r\n       <td>Confirmé</td>\r\n      </tr>\r\n      <tr>\r\n        <td>Dysplasie</td>\r\n        <td>B</td>\r\n      </tr>\r\n      <tr>\r\n         <td>Taux de cons</td>\r\n         <td>0 % (calcul 6 générations)</td>\r\n      </tr>\r\n      <tr>\r\n         <td>ADN</td>\r\n         <td>Novembre 2013</td>\r\n      </tr>\r\n      <tr>\r\n       <td>Fichier chien de France</td>\r\n       <td><a href=\"http://desfeesdecelestia.chiens-de-france.com/site_eleveur/index.php?rub=chiens&amp;page=fiche&amp;TITRE=FEMELLE&amp;ID_ELEVEUR=34064&amp;ID_SITE=36376&amp;ID_CHIEN=575469&amp;TABLE=t_chien_03\" target=\"new\">Fichier</a></td>\r\n      </tr>\r\n      <tr>\r\n       <td>Son pedrigrée officiel</td>\r\n       <td><a href=\"http://www.chiens-de-france.com/photo/chiens/t_chien_03/pedigree/e4851871-67f4-8ee4-259e-b6efeff7d873.jpg\">Son pedrigr&eacute;e officiel</a></td>\r\n     </tr>\r\n</table> ','  <blockquote>\r\n    <dl>\r\n      <dt>Papa, Cronos de l\'Orangerie des perles rares</dt>\r\n      <dd>Champion des jeunes d\'Allemagne</dd>\r\n      <dd>Champion des jeunes du club suisse</dd>\r\n      <dd> Ch. TCHEQUE</dd>\r\n      <dd>CH.SUISSE 2010</dd>\r\n      <dd>CH. INTERNATIONAL</dd>\r\n      <dd>VICE-CH. De FRANCE</dd>\r\n      <dd>VDH-Saar Sieger Saarbrûcken 2010</dd>\r\n      <dd><cite title=\"Source Title\"><a href=\"http://www.chiens-de-france.com/chiens/fiche_popup.php?ID_CHIEN=336427&amp;TABLE=t_chien_03\">Pedigrée Chien de france</a></cite></dd>\r\n  </dl>\r\n</blockquote>\r\n\r\n\r\n   <blockquote>\r\n    <dl>\r\n      <dt>Mére, Bali des Colonnes de Chaux</dt>\r\n      <dd>2éme Excellent à Bassevelle</dd>\r\n      <dd>1ère Excellent, Manifestation Le Puy en Velay CACS</dd>\r\n      <dd>3ème Très Bon, Manifestation Nantes D CACIB</dd>\r\n      <dd>2ème Excellent RCACS</dd>\r\n      <dd>1ère Excellent Meilleur de Race, Manifestation : Tarbes CACIB</dd>\r\n      <dd><cite title=\"Source Title\"><a href=\"http://www.chiens-de-france.com/chiens/fiche_popup.php?ID_CHIEN=523294&amp;TABLE=t_chien_03\">Pedigrée Chien de france</a></cite></dd>\r\n  </dl>\r\n</blockquote>\r\n \r\n\r\n\r\n\r\n\r\n\r\n  <blockquote>\r\n    <dl>\r\n		<dt>Grand Pére: Saphyr de l\'Orangerie des perles rares</dt>\r\n		<dd>france-international-belgique-luxembourg</dd>\r\n		<dd>Champion de France de conformité au standard</dd>\r\n		<dd>Champion international de beauté</dd>\r\n		<dd>Champion du Luxembourg</dd>\r\n		<dd>Champion de Belgique</dd>\r\n		<dd>Champion des jeunes de Luxembourg</dd>\r\n		<dd>Champion des jeunes du club de Luxembourg</dd>\r\n		<dd>Meilleur dogue regionnale d\'Alsace Lorraine</dd>\r\n		<dd>Champion EUDDC 2008</dd>\r\n		<dd>Champion du MONDE Vétéran 2009</dd>\r\n		<dd>Champion de Slovaquie Vétéran</dd>\r\n		<dd>Champion de Luxembourg Vétéran</dd>\r\n       <dd><cite title=\"Source Title\"><a href=\"http://www.chiens-de-france.com/chiens/fiche_popup.php?ID_CHIEN=81310&amp;TABLE=t_chien_03\">Pedigrée Chien de france</a></cite></dd>\r\n    </dl>\r\n  </blockquote>'),(2,'Issi des terre d\'andalousie','2013-11-25','femelle','to write','to write');
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
) ENGINE=InnoDB AUTO_INCREMENT=207 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `errors`
--

LOCK TABLES `errors` WRITE;
/*!40000 ALTER TABLE `errors` DISABLE KEYS */;
INSERT INTO `errors` VALUES (2,1,'Someone found a 404 page','Controller :nedddd view :','2013-12-27 16:20:49'),(3,1,'Someone found a 404 page','Controller :news view :index','2013-12-27 16:43:58'),(4,1,'Someone found a 404 page','Controller :news view :show','2013-12-27 16:44:02'),(5,1,'Someone found a 404 page','Controller :news view :show','2013-12-27 16:44:08'),(6,1,'Someone found a 404 page','Controller :news view :show','2013-12-27 16:44:38'),(7,1,'Someone found a 404 page','Controller :news view :show','2013-12-27 16:46:34'),(8,1,'Someone found a 404 page','Controller :news view :show','2013-12-27 16:47:08'),(9,1,'Someone found a 404 page','Controller :news view :show','2013-12-27 16:49:25'),(10,1,'Someone found a 404 page','Controller :news view :index','2013-12-27 16:52:53'),(11,1,'Someone found a 404 page','Controller :news view :show','2013-12-27 16:53:06'),(12,1,'Someone found a 404 page','Controller :news view :show','2013-12-27 16:54:50'),(13,1,'Someone found a 404 page','Controller :news view :show','2013-12-27 16:55:05'),(14,1,'Someone found a 404 page','Controller :news view :show','2013-12-27 16:56:56'),(15,1,'Someone found a 404 page','Controller :news view :index','2013-12-27 17:14:36'),(16,1,'Someone found a 404 page','Controller :news view :view','2013-12-27 22:56:53'),(17,1,'Someone found a 404 page','Controller :news view :view','2013-12-27 22:56:53'),(18,1,'Someone found a 404 page','Controller :news view :view','2013-12-27 22:56:53'),(19,1,'Someone found a 404 page','Controller :news view :view','2013-12-27 22:58:50'),(20,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 00:27:30'),(21,1,'Someone found a 404 page','Controller :news view :show','2013-12-28 01:33:54'),(22,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 01:42:39'),(23,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 01:50:36'),(24,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 01:50:52'),(25,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 01:54:56'),(26,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 01:55:13'),(27,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 01:57:24'),(28,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 01:57:36'),(29,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 01:59:11'),(30,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 02:00:02'),(31,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 02:01:21'),(32,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 02:03:05'),(33,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 02:04:35'),(34,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 10:14:01'),(35,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 10:47:53'),(36,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 10:56:17'),(37,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 10:56:22'),(38,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:21:34'),(39,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:24:04'),(40,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:24:24'),(41,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:25:19'),(42,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:25:48'),(43,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:25:55'),(44,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:26:01'),(45,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:26:03'),(46,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:26:14'),(47,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:26:19'),(48,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:26:25'),(49,1,'Someone found a 404 page','Controller :news view :view','2013-12-28 11:26:33'),(50,1,'Someone found a 404 page','Controller :chiot view :index','2013-12-28 12:16:36'),(51,1,'Someone found missing controller','Controller :chiot view :index','2013-12-28 12:21:44'),(52,1,'Someone found missing view','Controller :chiot view :index','2013-12-28 12:21:44'),(53,1,'Someone found missing controller','Controller :chiot view :index','2013-12-28 12:22:13'),(54,1,'Someone found missing view','Controller :chiot view :index','2013-12-28 12:22:13'),(55,1,'Someone found missing controller','Controller :chiens view :index','2013-12-28 15:09:07'),(56,1,'Someone found missing view','Controller :chiens view :index','2013-12-28 15:09:07'),(57,1,'Someone found missing view','Controller :chiens view :index','2013-12-28 16:10:19'),(58,1,'Someone found missing view','Controller :chiens view :show','2013-12-28 16:11:33'),(59,1,'Someone found missing view','Controller :chiens view :index','2013-12-28 17:26:08'),(60,1,'Someone found missing controller','Controller :chiot view :index','2013-12-29 10:42:50'),(61,1,'Someone found missing view','Controller :chiot view :index','2013-12-29 10:42:50'),(62,1,'Someone found a 404, missing a controller','Controller :installation view :index','2013-12-29 10:53:38'),(63,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:38'),(64,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:38'),(65,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:38'),(66,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:39'),(67,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:39'),(68,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:39'),(69,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:39'),(70,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:39'),(71,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:39'),(72,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:39'),(73,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:39'),(74,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:39'),(75,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:39'),(76,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:40'),(77,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:40'),(78,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:40'),(79,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:40'),(80,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:40'),(81,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:40'),(82,1,'Someone found a 404, missing a controller','Controller :index.php view :index','2013-12-29 10:53:40'),(83,1,'Someone found a 404, missing a controller','Controller :contact view :index','2013-12-29 10:54:41'),(84,1,'Someone found a 404, missing a view','Controller :chiens view :dddd','2013-12-29 11:01:35'),(85,1,'Someone found a 404, missing a view','Controller :chiens view :dddd','2013-12-29 11:01:35'),(86,1,'Someone found a 404, missing a view','Controller :chiens view :index','2013-12-29 11:01:35'),(87,1,'Someone found a 404, missing a controller','Controller :chiot view :index','2013-12-30 19:25:03'),(88,1,'Someone found a 404, missing a controller','Controller :chiot view :index','2013-12-31 16:43:50'),(89,1,'Someone found a 404, missing a controller','Controller :contact view :index','2014-01-01 09:13:48'),(90,1,'Someone found a 404, missing a view','Controller :contact view :index','2014-01-01 09:20:48'),(91,1,'Someone found a 404, missing a view','Controller :contact view :index','2014-01-01 09:22:00'),(92,1,'Someone found a 404, missing a view','Controller :news view :index','2014-01-02 08:12:46'),(93,1,'Someone found a 404, missing a controller','Controller :chiot view :index','2014-01-02 11:31:59'),(94,1,'Someone found a 404, missing a controller','Controller :chiots view :index','2014-01-02 11:47:52'),(95,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-02 11:48:25'),(96,1,'Someone found a 404, missing a view','Controller :chiots view :index','2014-01-02 11:48:28'),(97,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-02 15:30:29'),(98,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-02 15:42:50'),(99,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-02 16:16:00'),(100,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-02 17:03:44'),(101,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-02 17:03:50'),(102,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-02 17:04:02'),(103,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-02 17:05:26'),(104,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-02 17:55:29'),(105,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-02 17:56:50'),(106,1,'Someone found a 404, missing a controller','Controller :chien view :1','2014-01-02 18:38:22'),(107,1,'Someone found a 404, missing a controller','Controller :chien view :1','2014-01-02 18:38:22'),(108,1,'Someone found a 404, missing a controller','Controller :chien view :index','2014-01-02 18:38:22'),(109,1,'Someone found a 404, missing a view','Controller :chiens view :1','2014-01-02 18:39:17'),(110,1,'Someone found a 404, missing a view','Controller :chiens view :index','2014-01-02 18:39:17'),(111,1,'Someone found a 404, missing a view','Controller :contact view :','2014-01-02 18:40:00'),(112,1,'Someone found a 404, missing a view','Controller :contact view :','2014-01-02 18:40:27'),(113,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-02 18:42:02'),(114,1,'Someone found a 404, missing a view','Controller :contact view :','2014-01-02 18:49:30'),(115,1,'Someone found a 404, missing a view','Controller :contact view :','2014-01-02 18:49:43'),(116,1,'Someone found a 404, missing a view','Controller :contact view :','2014-01-02 18:52:09'),(117,2,'Security information.','Someone tried to login with a index but wasn\'t authentitacted.','2014-01-02 20:39:13'),(118,2,'Security information.','Someone tried to login with a index but wasn\'t authentitacted.','2014-01-02 20:39:52'),(119,2,'Security information.','Someone tried to login with a index but wasn\'t authentitacted.','2014-01-02 21:01:23'),(120,2,'Security information.','Someone tried to login with a index but wasn\'t authentitacted.','2014-01-02 22:01:51'),(121,2,'Security information.','Someone tried to login with a index but wasn\'t authentitacted.','2014-01-02 22:01:58'),(122,2,'Security information.','Someone tried to login with a index but wasn\'t authentitacted.','2014-01-02 22:02:14'),(123,2,'Security information.','Someone tried to login with a index but wasn\'t authentitacted.','2014-01-02 22:03:49'),(124,2,'Security information.','Someone tried to login with a index but wasn\'t authentitacted.','2014-01-02 22:03:56'),(125,2,'Security information.','Someone tried to login with a index but wasn\'t authentitacted.','2014-01-02 22:04:59'),(126,2,'Security information.','Someone tried to login with a index but wasn\'t authentitacted.','2014-01-02 22:05:59'),(127,3,'Security information.','mrstocks logged-in at ','2014-01-02 22:24:36'),(128,2,'Security information.','Someone tried to login with a index but wasn\'t authentitacted.','2014-01-03 02:55:44'),(129,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-03 02:56:06'),(130,2,'Security information.','Someone tried to login with a index but wasn\'t authentitacted.','2014-01-03 03:11:05'),(131,3,'Security information.','mrstocks logged-in at ','2014-01-03 03:11:26'),(132,2,'Security information.','Someone tried to login with a index but wasn\'t authentitacted.','2014-01-03 03:39:38'),(133,3,'Security information.','mrstocks logged-in at ','2014-01-03 03:39:49'),(134,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-03 03:42:42'),(135,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-03 10:52:01'),(136,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-03 11:00:30'),(137,1,'Someone found a 404, missing a controller','Controller :gallerie view :','2014-01-03 11:13:24'),(138,2,'Security information.','Someone tried to login with a index but wasn\'t authentitacted.','2014-01-03 11:15:54'),(139,3,'Security information.','mrstocks logged-in at ','2014-01-03 11:16:08'),(140,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-03 14:55:04'),(141,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-03 14:55:41'),(142,2,'Security information.','Someone tried to login with a index but wasn\'t authentitacted.','2014-01-03 16:03:08'),(143,3,'Security information.','mrstocks logged-in at ','2014-01-03 16:03:20'),(144,1,'Someone found a 404, missing a view','Controller :news view :index','2014-01-03 17:14:22'),(145,1,'Someone found a 404, missing a controller','Controller :data-toggle= view :index','2014-01-03 17:15:36'),(146,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-04 00:05:48'),(147,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-04 00:07:18'),(148,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-04 00:10:53'),(149,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-04 00:31:40'),(150,1,'Someone found a 404, missing a controller','Controller :gallerie view :','2014-01-04 13:32:15'),(151,2,'Security information.','Someone tried to login with a index but wasn\'t authentitacted.','2014-01-04 13:32:44'),(152,3,'Security information.','mrstocks logged-in at ','2014-01-04 13:32:50'),(153,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-06 02:40:05'),(154,1,'Someone found a 404, missing a controller','Controller :gallerie view :','2014-01-06 02:56:02'),(155,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-06 11:10:48'),(156,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:49:54'),(157,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:49:54'),(158,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:49:54'),(159,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:49:55'),(160,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:49:55'),(161,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:49:55'),(162,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:49:55'),(163,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:49:55'),(164,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:49:55'),(165,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:49:55'),(166,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:49:55'),(167,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:49:55'),(168,1,'Someone found a 404, missing a controller','Controller :images view :index','2014-01-06 16:49:55'),(169,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:49:55'),(170,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:49:55'),(171,1,'Someone found a 404, missing a controller','Controller :images view :index','2014-01-06 16:49:55'),(172,1,'Someone found a 404, missing a controller','Controller :images view :index','2014-01-06 16:49:55'),(173,1,'Someone found a 404, missing a controller','Controller :images view :index','2014-01-06 16:49:55'),(174,1,'Someone found a 404, missing a controller','Controller :images view :index','2014-01-06 16:49:55'),(175,1,'Someone found a 404, missing a controller','Controller :images view :index','2014-01-06 16:49:55'),(176,1,'Someone found a 404, missing a controller','Controller :images view :index','2014-01-06 16:49:55'),(177,1,'Someone found a 404, missing a controller','Controller :installation view :index','2014-01-06 16:56:18'),(178,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:56:21'),(179,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:56:21'),(180,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:56:21'),(181,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:56:21'),(182,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:56:21'),(183,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:56:21'),(184,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:56:21'),(185,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:56:21'),(186,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:56:21'),(187,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:56:21'),(188,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:56:21'),(189,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:56:21'),(190,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:56:21'),(191,1,'Someone found a 404, missing a controller','Controller :images view :index','2014-01-06 16:56:21'),(192,1,'Someone found a 404, missing a controller','Controller :images view :demo','2014-01-06 16:56:21'),(193,1,'Someone found a 404, missing a controller','Controller :images view :index','2014-01-06 16:56:21'),(194,1,'Someone found a 404, missing a controller','Controller :images view :index','2014-01-06 16:56:21'),(195,1,'Someone found a 404, missing a controller','Controller :images view :index','2014-01-06 16:56:21'),(196,1,'Someone found a 404, missing a controller','Controller :images view :index','2014-01-06 16:56:21'),(197,1,'Someone found a 404, missing a controller','Controller :images view :index','2014-01-06 16:56:21'),(198,1,'Someone found a 404, missing a controller','Controller :images view :index','2014-01-06 16:56:22'),(199,1,'Someone found a 404, missing a controller','Controller :gallerie view :','2014-01-10 08:40:23'),(200,2,'Security information.','Someone tried to login with a index but wasn\'t authentitacted.','2014-01-13 15:18:11'),(201,3,'Security information.','mrstocks logged-in at ','2014-01-13 15:18:50'),(202,1,'Someone found a 404, missing a controller','Controller :_MG_8145_6_7.JPEG view :index','2014-01-13 17:29:34'),(203,2,'Security information.','Someone tried to login with a index but wasn\'t authentitacted.','2014-01-13 18:37:18'),(204,3,'Security information.','mrstocks logged-in at ','2014-01-13 18:37:30'),(205,2,'Security information.','Someone tried to login with a index but wasn\'t authentitacted.','2014-01-13 19:28:47'),(206,3,'Security information.','mrstocks logged-in at ','2014-01-13 19:29:27');
/*!40000 ALTER TABLE `errors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `frontpagecarrousels`
--

DROP TABLE IF EXISTS `frontpagecarrousels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `frontpagecarrousels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `frontpagecarrousels`
--

LOCK TABLES `frontpagecarrousels` WRITE;
/*!40000 ALTER TABLE `frontpagecarrousels` DISABLE KEYS */;
INSERT INTO `frontpagecarrousels` VALUES (1,'puppies running','/public/images/8176799175_af066b2760_c.jpg'),(2,'Another puppy','/public/images/8176974148_b129cf537b_c.jpg'),(3,'Puppy from 2012','/public/images/8176756647_837d3b1cfd_c.jpg'),(4,'Puppy from 2013','/public/images/8176932177_f2671347d0_c.jpg');
/*!40000 ALTER TABLE `frontpagecarrousels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dog_id` int(11) NOT NULL,
  `picture_number` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf32 DEFAULT NULL,
  `filename` varchar(255) NOT NULL,
  `available` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (25,0,0,NULL,'/public/images/galleries/IMG_7122.jpg (8176963098).jpg',0),(26,0,0,NULL,'/public/images/galleries/IMG_7141.jpg (8176932177).jpg',0),(27,0,0,NULL,'/public/images/galleries/IMG_7151.jpg (8176932873).jpg',0),(28,0,0,NULL,'/public/images/galleries/IMG_7155.jpg (8176933425).jpg',0),(29,0,0,NULL,'/public/images/galleries/IMG_7160.jpg (8176934047).jpg',0),(30,0,0,NULL,'/public/images/galleries/IMG_7162.jpg (8176968146).jpg',0),(31,0,0,NULL,'/public/images/galleries/IMG_7164.jpg (8176937077).jpg',0),(32,0,0,NULL,'/public/images/galleries/IMG_7165.jpg (8176969640).jpg',0),(33,0,0,NULL,'/public/images/galleries/IMG_7173.jpg (8176970112).jpg',0),(34,0,0,NULL,'/public/images/galleries/IMG_7176.jpg (8176939061).jpg',0),(35,0,0,NULL,'/public/images/galleries/IMG_7178.jpg (8176939653).jpg',0),(36,0,0,NULL,'/public/images/galleries/IMG_7179.jpg (8176940429).jpg',0),(37,0,0,NULL,'/public/images/galleries/IMG_7201.jpg (8176941139).jpg',0),(38,0,0,NULL,'/public/images/galleries/IMG_7207.jpg (8176974148).jpg',0),(39,0,0,NULL,'/public/images/galleries/IMG_7219.jpg (8176942921).jpg',0),(40,0,0,NULL,'/public/images/galleries/IMG_7230.jpg (8176943811).jpg',0),(41,0,0,NULL,'/public/images/galleries/IMG_7240.jpg (8176944437).jpg',0),(42,0,0,NULL,'/public/images/galleries/IMG_7354 (8176839272).jpg',0),(43,0,0,NULL,'/public/images/galleries/IMG_7355 (8176808567).jpg',0),(44,0,0,NULL,'/public/images/galleries/IMG_7356 (8176841196).jpg',0),(45,0,0,NULL,'/public/images/galleries/IMG_7424.jpg (8202767618).jpg',0),(46,0,0,NULL,'/public/images/galleries/IMG_7357 (8176841976).jpg',0),(47,0,0,NULL,'/public/images/galleries/IMG_7438.jpg (8201676879).jpg',0),(48,0,0,NULL,'/public/images/galleries/IMG_7439.jpg (8202768752).jpg',0),(49,0,0,NULL,'/public/images/galleries/IMG_7441.jpg (8201678413).jpg',0),(50,0,0,NULL,'/public/images/galleries/IMG_7440.jpg (8202769308).jpg',0),(51,0,0,NULL,'/public/images/galleries/IMG_7443.jpg (8201679295).jpg',0),(52,0,0,NULL,'/public/images/galleries/IMG_7442.jpg (8202770142).jpg',0),(53,0,0,NULL,'/public/images/galleries/IMG_7444.jpg (8201679575).jpg',0),(54,0,0,NULL,'/public/images/galleries/IMG_7445.jpg (8202771262).jpg',0),(55,0,0,NULL,'/public/images/galleries/IMG_7447.jpg (8201680737).jpg',0),(56,0,0,NULL,'/public/images/galleries/IMG_7446.jpg (8201680343).jpg',0),(57,0,0,NULL,'/public/images/galleries/IMG_7449.jpg (8202772738).jpg',0),(58,0,0,NULL,'/public/images/galleries/IMG_7448.jpg (8201681081).jpg',0),(59,0,0,NULL,'/public/images/galleries/IMG_7450.jpg (8202773022).jpg',0),(60,0,0,NULL,'/public/images/galleries/IMG_7451.jpg (8202773320).jpg',0),(61,0,0,NULL,'/public/images/galleries/IMG_7453.jpg (8202773906).jpg',0),(62,0,0,NULL,'/public/images/galleries/IMG_7452.jpg (8201682225).jpg',0),(63,0,0,NULL,'/public/images/galleries/IMG_7456.jpg (8202774338).jpg',0),(64,0,0,NULL,'/public/images/galleries/IMG_7457.jpg (8201683247).jpg',0),(65,0,0,NULL,'/public/images/galleries/IMG_7458.jpg (8201683555).jpg',0),(66,0,0,NULL,'/public/images/galleries/IMG_7464.jpg (8201683989).jpg',0),(67,0,0,NULL,'/public/images/galleries/IMG_7495.jpg (8237813738).jpg',0),(68,0,0,NULL,'/public/images/galleries/IMG_7498.jpg (8237814498).jpg',0),(69,0,0,NULL,'/public/images/galleries/IMG_7499.jpg (8237815090).jpg',0),(70,0,0,NULL,'/public/images/galleries/IMG_7500.jpg (8236748057).jpg',0),(71,0,0,NULL,'/public/images/galleries/IMG_7501.jpg (8237816186).jpg',0),(72,0,0,NULL,'/public/images/galleries/IMG_7504.jpg (8237817584).jpg',0),(73,0,0,NULL,'/public/images/galleries/IMG_7503.jpg (8237816962).jpg',0),(74,0,0,NULL,'/public/images/galleries/IMG_7508.jpg (8237819402).jpg',0),(75,0,0,NULL,'/public/images/galleries/IMG_7507.jpg (8237818418).jpg',0),(76,0,0,NULL,'/public/images/galleries/IMG_7512.jpg (8237820350).jpg',0),(77,0,0,NULL,'/public/images/galleries/IMG_7509.jpg (8236752435).jpg',0),(78,0,0,NULL,'/public/images/galleries/IMG_7513.jpg (8236760007).jpg',0),(79,0,0,NULL,'/public/images/galleries/IMG_7513.jpg (8237820830).jpg',0),(80,0,0,NULL,'/public/images/galleries/IMG_7514.jpg (8237828266).jpg',0),(81,0,0,NULL,'/public/images/galleries/IMG_7515.jpg (8237828722).jpg',0),(82,0,0,NULL,'/public/images/galleries/IMG_7516.jpg (8236762339).jpg',0),(83,0,0,NULL,'/public/images/galleries/IMG_7517.jpg (8237831654).jpg',0),(84,0,0,NULL,'/public/images/galleries/IMG_7518.jpg (8236764773).jpg',0),(85,0,0,NULL,'/public/images/galleries/IMG_7521.jpg (8236765313).jpg',0);
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matingpuppies`
--

DROP TABLE IF EXISTS `matingpuppies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matingpuppies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `information` text NOT NULL,
  `price` int(10) unsigned NOT NULL,
  `color` varchar(10) NOT NULL,
  `mating_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matingpuppies`
--

LOCK TABLES `matingpuppies` WRITE;
/*!40000 ALTER TABLE `matingpuppies` DISABLE KEYS */;
INSERT INTO `matingpuppies` VALUES (1,'happy des f&eacute;es de Celestia','mâle','Super dogue allemand je voulais le garder en elevage mais apres une ostenocrose au dus le vendre. Happy fait des expo donc ont est bien content.',1400,'bleu',1),(2,'Hortensia des f&eacute;es de Celestia','femelle','Une tres jolie bleu.',1400,'bleu',1),(3,'Hiroshi des f&eacute;es de Celestia','Femelle','...',1400,'bleu',1),(4,'Halima Des f&eacute;es de Celestia','Femelle','...',1400,'Noir',1),(5,'Hiroshi des f&eacute;es de Celestia','male','...',1400,'noir',1),(6,'Hortensia des f&eacute;es de Celestia','Male','...',1400,'Noir',1),(7,'Hugo des f&eacute;es de Celestia','1400','...',1400,'Noir',1),(8,'Hero de f&eacute;es de Celestia ','Femelle','...',1400,'Bleu',1),(9,'Haribo des f&eacute;es de celestia','Male','...',1400,'Bleu',1),(10,'Icko des f&eacute;es de celestia','male','...',1300,'Noir',2),(11,'Isis des f&eacute;es de celestia','Femelle','...',1300,'Noir',2),(12,'Ilia des f&eacute;es de celestia','Femelle','...',1400,'Noir',2);
/*!40000 ALTER TABLE `matingpuppies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matingpuppyimages`
--

DROP TABLE IF EXISTS `matingpuppyimages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matingpuppyimages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `matingpuppy_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `matingpuppy_id` (`matingpuppy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matingpuppyimages`
--

LOCK TABLES `matingpuppyimages` WRITE;
/*!40000 ALTER TABLE `matingpuppyimages` DISABLE KEYS */;
INSERT INTO `matingpuppyimages` VALUES (1,10,'/public/images/8176932177_f2671347d0_c.jpg');
/*!40000 ALTER TABLE `matingpuppyimages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matings`
--

DROP TABLE IF EXISTS `matings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `information` text NOT NULL,
  `year` date NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matings`
--

LOCK TABLES `matings` WRITE;
/*!40000 ALTER TABLE `matings` DISABLE KEYS */;
INSERT INTO `matings` VALUES (1,'La premiere portée de Finouka et Enzo. Neuf très beaux doggues de couleurs bleu et noire.','2012-06-07','Finouka & Enzo, 2012'),(2,'Nous avons visitez la Hongrie pour trouver le male.','2013-08-08','Finouka & L\'anour noir, 2013');
/*!40000 ALTER TABLE `matings` ENABLE KEYS */;
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

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'mrstocks','9de78d7fb5bf8edff3d5f110cae86643',NULL,NULL,NULL);
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

-- Dump completed on 2014-01-13 22:25:44
