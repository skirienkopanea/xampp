-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.1.30-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table coolwork_db.nutritionfacts
CREATE TABLE IF NOT EXISTS `nutritionfacts` (
  `user` varchar(10) NOT NULL DEFAULT 'sergio',
  `id` varchar(15) NOT NULL DEFAULT '00000',
  `name` varchar(50) NOT NULL,
  `active` binary(1) NOT NULL DEFAULT '1',
  `description` varchar(255) NOT NULL DEFAULT '',
  `category` varchar(255) NOT NULL DEFAULT '',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `weight_unit_g` decimal(10,2) NOT NULL DEFAULT '0.00',
  `kcals` decimal(8,3) NOT NULL DEFAULT '0.000',
  `protein` decimal(8,3) NOT NULL DEFAULT '0.000',
  `fat` decimal(8,3) NOT NULL DEFAULT '0.000',
  `carb` decimal(8,3) NOT NULL DEFAULT '0.000',
  `fiber` decimal(8,3) NOT NULL DEFAULT '0.000',
  `water` decimal(8,3) NOT NULL DEFAULT '0.000',
  `calcium` decimal(8,3) NOT NULL DEFAULT '0.000',
  `iron` decimal(8,3) NOT NULL DEFAULT '0.000',
  `magnesium` decimal(8,3) NOT NULL DEFAULT '0.000',
  `phosphorus` decimal(8,3) NOT NULL DEFAULT '0.000',
  `potassium` decimal(8,3) NOT NULL DEFAULT '0.000',
  `sodium` decimal(8,3) NOT NULL DEFAULT '0.000',
  `zinc` decimal(8,3) NOT NULL DEFAULT '0.000',
  `copper` decimal(8,3) NOT NULL DEFAULT '0.000',
  `fluoride` decimal(8,3) NOT NULL DEFAULT '0.000',
  `manganese` decimal(8,3) NOT NULL DEFAULT '0.000',
  `selenium` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitaminc` decimal(8,3) NOT NULL DEFAULT '0.000',
  `thiamin` decimal(8,3) NOT NULL DEFAULT '0.000',
  `riboflavin` decimal(8,3) NOT NULL DEFAULT '0.000',
  `niacin` decimal(8,3) NOT NULL DEFAULT '0.000',
  `pantothenicacid` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitaminb6` decimal(8,3) NOT NULL DEFAULT '0.000',
  `folate` decimal(8,3) NOT NULL DEFAULT '0.000',
  `choline` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitaminb12` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitamina` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitamine` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitamind` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitamink` decimal(8,3) NOT NULL DEFAULT '0.000',
  `ala183und` decimal(8,3) NOT NULL DEFAULT '0.000',
  `la182und` decimal(8,3) NOT NULL DEFAULT '0.000',
  `monofat` decimal(8,3) NOT NULL DEFAULT '0.000',
  `polyfat` decimal(8,3) NOT NULL DEFAULT '0.000',
  `satfat` decimal(8,3) NOT NULL DEFAULT '0.000',
  `transfat` decimal(8,3) NOT NULL DEFAULT '0.000',
  `phenylalanine` decimal(8,3) NOT NULL DEFAULT '0.000',
  `valine` decimal(8,3) NOT NULL DEFAULT '0.000',
  `threonine` decimal(8,3) NOT NULL DEFAULT '0.000',
  `tryptophan` decimal(8,3) NOT NULL DEFAULT '0.000',
  `methionine` decimal(8,3) NOT NULL DEFAULT '0.000',
  `leucine` decimal(8,3) NOT NULL DEFAULT '0.000',
  `isoleucine` decimal(8,3) NOT NULL DEFAULT '0.000',
  `lysine` decimal(8,3) NOT NULL DEFAULT '0.000',
  `histidine` decimal(8,3) NOT NULL DEFAULT '0.000',
  UNIQUE KEY `id_user` (`id`,`user`),
  KEY `user` (`user`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table coolwork_db.nutritionfacts: ~7,711 rows (approximately)
/*!40000 ALTER TABLE `nutritionfacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `nutritionfacts` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
