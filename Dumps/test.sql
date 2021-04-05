-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server Version:               8.0.23 - MySQL Community Server - GPL
-- Server Betriebssystem:        Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Exportiere Datenbank Struktur für test
DROP DATABASE IF EXISTS `test`;
CREATE DATABASE IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `test`;

-- Exportiere Struktur von Tabelle test.haltestellen
DROP TABLE IF EXISTS `haltestellen`;
CREATE TABLE IF NOT EXISTS `haltestellen` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_general_ci NOT NULL,
  `pos` point NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportiere Daten aus Tabelle test.haltestellen: ~0 rows (ungefähr)
/*!40000 ALTER TABLE `haltestellen` DISABLE KEYS */;
INSERT INTO `haltestellen` (`id`, `name`, `pos`) VALUES
	(2, 'Schärding', _binary 0x0000000001010000007394CD661FE12A40ACE28DCC233A4840),
	(4, 'St. Aegidi', _binary 0x000000000101000000BAF1930FE67B2B409ED4F25E103D4840),
	(6, 'Schule', _binary 0x0000000001010000003D49152065AB2B402F7EAE111C1E4840),
	(7, 'Kopfing', _binary 0x0000000001010000002FDFFAB0DE502B40840607205A384840),
	(8, 'Neukirchen am Walde', _binary 0x0000000001010000001B18D41286142B40157B1E9210054840),
	(9, 'Galspach', _binary 0x000000000101000000E371512D229E2B40215624CBEE1A4840),
	(10, 'St.Roman', _binary 0x000000000101000000BEBACF9618382B400668B686AD3D4840);
/*!40000 ALTER TABLE `haltestellen` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
