CREATE DATABASE  IF NOT EXISTS `enterprise2` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `enterprise2`;
-- MySQL dump 10.13  Distrib 5.5.24, for osx10.5 (i386)
--
-- Host: 127.0.0.1    Database: enterprise2
-- ------------------------------------------------------
-- Server version	5.5.38

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
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `street1` varchar(45) DEFAULT NULL,
  `street2` varchar(45) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `billings`
--

DROP TABLE IF EXISTS `billings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billings` (
  `id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `IPN` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billings`
--

LOCK TABLES `billings` WRITE;
/*!40000 ALTER TABLE `billings` DISABLE KEYS */;
/*!40000 ALTER TABLE `billings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) DEFAULT NULL,
  `image_link` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories_have_products`
--

DROP TABLE IF EXISTS `categories_have_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories_have_products` (
  `products_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `upated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`products_id`,`categories_id`),
  KEY `fk_products_has_categories_categories1_idx` (`categories_id`),
  KEY `fk_products_has_categories_products1_idx` (`products_id`),
  CONSTRAINT `fk_products_has_categories_categories1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_has_categories_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories_have_products`
--

LOCK TABLES `categories_have_products` WRITE;
/*!40000 ALTER TABLE `categories_have_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories_have_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `shipping_cost` decimal(10,6) DEFAULT NULL,
  `total` decimal(10,6) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `shipping_address_id` int(11) DEFAULT NULL,
  `billing_address_ID` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `billings_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`billings_id`),
  KEY `fk_orders_billings1_idx` (`billings_id`),
  CONSTRAINT `fk_orders_billings1` FOREIGN KEY (`billings_id`) REFERENCES `billings` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_contain_products`
--

DROP TABLE IF EXISTS `orders_contain_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_contain_products` (
  `products_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`products_id`,`orders_id`),
  KEY `fk_products_has_orders_orders1_idx` (`orders_id`),
  KEY `fk_products_has_orders_products1_idx` (`products_id`),
  CONSTRAINT `fk_products_has_orders_orders1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_has_orders_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_contain_products`
--

LOCK TABLES `orders_contain_products` WRITE;
/*!40000 ALTER TABLE `orders_contain_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders_contain_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_has_addresses`
--

DROP TABLE IF EXISTS `orders_has_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_has_addresses` (
  `orders_id` int(11) NOT NULL,
  `addresses_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`orders_id`,`addresses_id`),
  KEY `fk_orders_has_addresses_addresses1_idx` (`addresses_id`),
  KEY `fk_orders_has_addresses_orders1_idx` (`orders_id`),
  CONSTRAINT `fk_orders_has_addresses_addresses1` FOREIGN KEY (`addresses_id`) REFERENCES `addresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_has_addresses_orders1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_has_addresses`
--

LOCK TABLES `orders_has_addresses` WRITE;
/*!40000 ALTER TABLE `orders_has_addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders_has_addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `price` decimal(10,2) DEFAULT NULL,
  `quant_sold` int(11) DEFAULT NULL,
  `inventory_count` int(11) DEFAULT NULL,
  `image_link` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'T-Shirt','The most amazing t-shirt you will ever wear',1000.00,1,999,'/uploads/smallpistol.jpg','2012-02-07 00:00:00',NULL),(22,'Crossfit workout shirt',' ',29.95,NULL,47,'/uploads/small_muscle_ups5.jpg','2015-02-07 23:12:56',NULL),(23,'The Ohio Bar','Amazing OLY lifting bar ',299.99,NULL,999,'/uploads/ohio-bar-th_3.jpg','2015-02-08 22:37:32',NULL),(24,'28 mm oly bar','Training bar for the beginner ',199.99,NULL,93,'/uploads/28mm-olympic-training-bar-web-th1.jpg','2015-02-08 22:38:07',NULL),(25,'Rogue 45#  Hundo Competition Bumper Weight','Awesome sauce for oly meets',99.95,NULL,22,'/uploads/hundo-comp-th.jpg','2015-02-08 22:38:59',NULL),(26,'BA Squat Rack','Get your squat on ',499.95,NULL,22,'/uploads/sml-2-th.jpg','2015-02-08 22:39:37',NULL),(27,'Medball Central','Get this awesome medball kit with 20# and 14# pro medbals and mountable shelf ',1799.99,NULL,99,'/uploads/strip-medball-shelf-th.jpg','2015-02-08 22:40:23',NULL),(28,'Ultimate Gym Bag','With errrrything you need for dem gainz ',349.99,NULL,77,'/uploads/rogue-gym-bags-h1_1_1.jpg','2015-02-08 22:41:22',NULL),(29,'Rogue Wood Rings',' ',189.99,NULL,129,'/uploads/wood-rings_1_1_1.jpg','2015-02-09 00:05:26',NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_has_related_roducts`
--

DROP TABLE IF EXISTS `products_has_related_roducts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_has_related_roducts` (
  `products_id` int(11) NOT NULL,
  `related_roducts_id` int(11) NOT NULL,
  PRIMARY KEY (`products_id`,`related_roducts_id`),
  KEY `fk_products_has_related_roducts_related_roducts1_idx` (`related_roducts_id`),
  KEY `fk_products_has_related_roducts_products1_idx` (`products_id`),
  CONSTRAINT `fk_products_has_related_roducts_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_has_related_roducts_related_roducts1` FOREIGN KEY (`related_roducts_id`) REFERENCES `related_roducts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_has_related_roducts`
--

LOCK TABLES `products_has_related_roducts` WRITE;
/*!40000 ALTER TABLE `products_has_related_roducts` DISABLE KEYS */;
/*!40000 ALTER TABLE `products_has_related_roducts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `related_roducts`
--

DROP TABLE IF EXISTS `related_roducts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `related_roducts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `related_product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `related_roducts`
--

LOCK TABLES `related_roducts` WRITE;
/*!40000 ALTER TABLE `related_roducts` DISABLE KEYS */;
/*!40000 ALTER TABLE `related_roducts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shippings`
--

DROP TABLE IF EXISTS `shippings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shippings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cost` decimal(10,6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shippings`
--

LOCK TABLES `shippings` WRITE;
/*!40000 ALTER TABLE `shippings` DISABLE KEYS */;
/*!40000 ALTER TABLE `shippings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `state` varchar(2) DEFAULT NULL,
  `addresses_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_ar` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`addresses_id`),
  KEY `fk_states_addresses1_idx` (`addresses_id`),
  CONSTRAINT `fk_states_addresses1` FOREIGN KEY (`addresses_id`) REFERENCES `addresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `access_level` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Michael','Wetizman','mw@worldsourcetech.com','9c79093f4bb9e112a9907373ece43421',1,NULL,NULL),(2,'James','Leapord','j@gmail.com','5d41402abc4b2a76b9719d911017c592',2,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users make orders`
--

DROP TABLE IF EXISTS `users make orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users make orders` (
  `orders_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`orders_id`,`users_id`),
  KEY `fk_orders_has_users_users1_idx` (`users_id`),
  KEY `fk_orders_has_users_orders_idx` (`orders_id`),
  CONSTRAINT `fk_orders_has_users_orders` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_has_users_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users make orders`
--

LOCK TABLES `users make orders` WRITE;
/*!40000 ALTER TABLE `users make orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `users make orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_hav_addresses`
--

DROP TABLE IF EXISTS `users_hav_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_hav_addresses` (
  `users_id` int(11) NOT NULL,
  `addresses_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`users_id`,`addresses_id`),
  KEY `fk_users_has_addresses_addresses1_idx` (`addresses_id`),
  KEY `fk_users_has_addresses_users1_idx` (`users_id`),
  CONSTRAINT `fk_users_has_addresses_addresses1` FOREIGN KEY (`addresses_id`) REFERENCES `addresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_addresses_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_hav_addresses`
--

LOCK TABLES `users_hav_addresses` WRITE;
/*!40000 ALTER TABLE `users_hav_addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_hav_addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zip`
--

DROP TABLE IF EXISTS `zip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zip` varchar(9) DEFAULT NULL,
  `states_id` int(11) NOT NULL,
  `states_addresses_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`states_id`,`states_addresses_id`),
  KEY `fk_zip_states1_idx` (`states_id`,`states_addresses_id`),
  CONSTRAINT `fk_zip_states1` FOREIGN KEY (`states_id`, `states_addresses_id`) REFERENCES `states` (`id`, `addresses_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zip`
--

LOCK TABLES `zip` WRITE;
/*!40000 ALTER TABLE `zip` DISABLE KEYS */;
/*!40000 ALTER TABLE `zip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zip_has_shipping_prices`
--

DROP TABLE IF EXISTS `zip_has_shipping_prices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zip_has_shipping_prices` (
  `zip_id` int(11) NOT NULL,
  `zip_states_id` int(11) NOT NULL,
  `zip_states_addresses_id` int(11) NOT NULL,
  `shipping_prices_id` int(11) NOT NULL,
  `shipping_prices_shipping_id` int(11) NOT NULL,
  PRIMARY KEY (`zip_id`,`zip_states_id`,`zip_states_addresses_id`,`shipping_prices_id`,`shipping_prices_shipping_id`),
  KEY `fk_zip_has_shipping_prices_zip1_idx` (`zip_id`,`zip_states_id`,`zip_states_addresses_id`),
  CONSTRAINT `fk_zip_has_shipping_prices_zip1` FOREIGN KEY (`zip_id`, `zip_states_id`, `zip_states_addresses_id`) REFERENCES `zip` (`id`, `states_id`, `states_addresses_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zip_has_shipping_prices`
--

LOCK TABLES `zip_has_shipping_prices` WRITE;
/*!40000 ALTER TABLE `zip_has_shipping_prices` DISABLE KEYS */;
/*!40000 ALTER TABLE `zip_has_shipping_prices` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-02-09  0:24:42
