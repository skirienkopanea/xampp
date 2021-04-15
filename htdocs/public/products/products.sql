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

-- Dumping structure for table coolwork_db.products
CREATE TABLE IF NOT EXISTS `products` (
  `user` varchar(10) NOT NULL DEFAULT 'sergio',
  `id` varchar(8) NOT NULL DEFAULT '00000',
  `name` varchar(50) NOT NULL,
  `active` binary(1) NOT NULL DEFAULT '1',
  `description` varchar(255) DEFAULT '',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usda_id` varchar(15) DEFAULT NULL,
  `price` decimal(4,2) DEFAULT NULL,
  `weight_g_net` varchar(50) DEFAULT NULL,
  `price_per_kg` varchar(50) DEFAULT NULL,
  `fresh_days` int(2) DEFAULT NULL,
  `origin` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `feedback` binary(1) DEFAULT NULL,
  UNIQUE KEY `id_user` (`id`,`user`),
  KEY `id` (`id`),
  KEY `user` (`user`),
  KEY `usda_id` (`usda_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table coolwork_db.products: ~0 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
