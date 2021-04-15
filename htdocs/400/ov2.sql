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

-- Dumping structure for table coolwork_db.ov
CREATE TABLE IF NOT EXISTS `ov` (
  `transactionId` varchar(550) NOT NULL,
  `ov_name` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `checkout` tinyint(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `transactionId_checkout` (`transactionId`,`checkout`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table coolwork_db.ov: ~0 rows (approximately)
/*!40000 ALTER TABLE `ov` DISABLE KEYS */;
/*!40000 ALTER TABLE `ov` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
