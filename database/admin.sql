-- MySQL dump 10.13  Distrib 5.7.20, for osx10.12 (x86_64)
--
-- Host: localhost    Database: shengxian
-- ------------------------------------------------------
-- Server version	5.7.20

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
-- Dumping data for table `admin_menu`
--

LOCK TABLES `admin_menu` WRITE;
/*!40000 ALTER TABLE `admin_menu` DISABLE KEYS */;
INSERT INTO `admin_menu` VALUES (1,0,1,'首页','fa-bar-chart','/',NULL,'2018-12-03 22:03:35'),(2,0,9,'管理员','fa-tasks',NULL,NULL,'2018-12-20 17:32:02'),(3,2,10,'管理员列表','fa-users','auth/users',NULL,'2018-12-20 17:32:02'),(4,2,11,'角色管理','fa-user','auth/roles',NULL,'2018-12-20 17:32:02'),(5,2,12,'权限管理','fa-ban','auth/permissions',NULL,'2018-12-20 17:32:02'),(6,2,13,'菜单','fa-bars','auth/menu',NULL,'2018-12-20 17:32:02'),(7,2,14,'操作日志','fa-history','auth/logs',NULL,'2018-12-20 17:32:02'),(8,0,2,'轮播图','fa-apple','/rollingimg','2018-12-03 18:36:03','2018-12-03 21:53:34'),(9,0,3,'微信用户列表','fa-user','/users','2018-12-03 18:46:27','2018-12-03 21:53:34'),(11,0,4,'文章管理','fa-newspaper-o','/articles','2018-12-03 18:56:00','2018-12-03 21:53:34'),(12,0,6,'产品报价图','fa-image','/imgs','2018-12-03 19:48:32','2018-12-03 23:56:59'),(13,0,5,'资讯列表','fa-hacker-news','/news','2018-12-03 23:56:30','2018-12-03 23:56:59'),(14,0,7,'海报管理','fa-file-powerpoint-o','/poster','2018-12-04 18:50:21','2018-12-04 18:50:25'),(15,0,8,'前台显示的图','fa-amazon','/caonima','2018-12-20 17:31:54','2018-12-20 17:32:02');
/*!40000 ALTER TABLE `admin_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_permissions`
--

LOCK TABLES `admin_permissions` WRITE;
/*!40000 ALTER TABLE `admin_permissions` DISABLE KEYS */;
INSERT INTO `admin_permissions` VALUES (1,'All permission','*','','*',NULL,NULL),(2,'Dashboard','dashboard','GET','/',NULL,NULL),(3,'Login','auth.login','','/auth/login\r\n/auth/logout',NULL,NULL),(4,'User setting','auth.setting','GET,PUT','/auth/setting',NULL,NULL),(5,'Auth management','auth.management','','/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs',NULL,NULL),(6,'轮播图管理','rollingimg','','/rollingimg*','2018-12-03 21:55:33','2018-12-03 21:55:33'),(7,'用户管理','users','','/users*','2018-12-03 21:56:03','2018-12-03 21:56:03'),(8,'文章管理','articles','','/articles*','2018-12-03 21:56:44','2018-12-03 21:56:44'),(9,'产品图报价图片管理','imgs','','/imgs*','2018-12-03 21:57:27','2018-12-03 21:57:27'),(10,'资讯管理','news','','/news*','2018-12-04 00:08:10','2018-12-04 00:08:10'),(11,'海报管理','poster','','/poster*','2018-12-04 18:51:09','2018-12-04 18:51:09');
/*!40000 ALTER TABLE `admin_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_menu`
--

LOCK TABLES `admin_role_menu` WRITE;
/*!40000 ALTER TABLE `admin_role_menu` DISABLE KEYS */;
INSERT INTO `admin_role_menu` VALUES (1,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_permissions`
--

LOCK TABLES `admin_role_permissions` WRITE;
/*!40000 ALTER TABLE `admin_role_permissions` DISABLE KEYS */;
INSERT INTO `admin_role_permissions` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL),(2,3,NULL,NULL),(2,4,NULL,NULL),(2,6,NULL,NULL),(2,7,NULL,NULL),(2,8,NULL,NULL),(2,9,NULL,NULL),(2,10,NULL,NULL),(2,11,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_users`
--

LOCK TABLES `admin_role_users` WRITE;
/*!40000 ALTER TABLE `admin_role_users` DISABLE KEYS */;
INSERT INTO `admin_role_users` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_roles`
--

LOCK TABLES `admin_roles` WRITE;
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
INSERT INTO `admin_roles` VALUES (1,'Administrator','administrator','2018-12-03 18:31:50','2018-12-03 18:31:50'),(2,'运营管理员','manager','2018-12-03 21:58:27','2018-12-03 21:58:27');
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_user_permissions`
--

LOCK TABLES `admin_user_permissions` WRITE;
/*!40000 ALTER TABLE `admin_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_user_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_users`
--

LOCK TABLES `admin_users` WRITE;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` VALUES (1,'admin','$2y$10$592MjdanivdNqitjMovJoO6V5VvfYPRMij6eTRO2OhuMu6pehXHLq','Administrator',NULL,'h6vXQoCLn6qfdkqhJD9O5LT9NX1SKasut0LFrGNhCCqagerja8KjqfBfeiG1','2018-12-03 18:31:50','2018-12-03 18:31:50'),(2,'manager','$2y$10$01piU2uZJADoEMyGVEThGeTLpwLhPb0tktQVTjJlL5rjzlEy2UOB2','运营管理员','images/dfb4d67dae472c7bc176b9890ed7bbe9.jpg','FjfvkQ87FYslm3idqOJApDW8J94XgF7guYlTs8GDPv2xdvfJ8EnYTxfiuCDc','2018-12-03 21:59:34','2018-12-03 21:59:34');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-21  9:37:13
