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
  `ov_name` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ov_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table coolwork_db.ov: ~12 rows (approximately)
/*!40000 ALTER TABLE `ov` DISABLE KEYS */;
INSERT INTO `ov` (`ov_name`, `timestamp`) VALUES
	('Amsterdam Centraal', '2019-07-09 21:40:00'),
	('Amsterdam Zuid', '2030-08-19 17:34:00'),
	('Breukelen', '2019-06-09 23:52:00'),
	('Den Haag Centraal', '2019-08-09 09:35:00'),
	('Den Haag Laan V Noi', '2030-08-19 23:55:00'),
	('Eindhoven', '2019-08-09 11:16:00'),
	('Leiden Centraal', '2019-01-09 18:23:00'),
	('Rotterdam Centraal', '2031-08-19 16:43:00'),
	('Sassenheim', '2019-01-09 17:44:00'),
	('Schiphol Airport', '2019-01-09 16:53:00'),
	('Utrecht Centraal', '2019-05-09 19:54:00'),
	('Zoetermeer', '2018-08-19 22:42:00');
/*!40000 ALTER TABLE `ov` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
