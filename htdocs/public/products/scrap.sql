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

-- Dumping structure for table coolwork_db.scrap_products
CREATE TABLE IF NOT EXISTS `scrap_products` (
  `id` varchar(8) NOT NULL,
  `sub_category` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `active` binary(1) DEFAULT NULL,
  `ingridients` varchar(550) DEFAULT NULL,
  `translation` varchar(50) DEFAULT NULL,
  `usda_id` varchar(15) DEFAULT NULL,
  `price` decimal(4,2) DEFAULT NULL,
  `weight_g_net` varchar(50) DEFAULT NULL,
  `price_per_kg` varchar(50) DEFAULT NULL,
  `fresh_days` int(2) DEFAULT NULL,
  `origin` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table coolwork_db.scrap_products: ~0 rows (approximately)
/*!40000 ALTER TABLE `scrap_products` DISABLE KEYS */;
INSERT INTO `scrap_products` (`id`, `sub_category`, `name`, `active`, `ingridients`, `translation`, `usda_id`, `price`, `weight_g_net`, `price_per_kg`, `fresh_days`, `origin`, `image`) VALUES
	('10074025', 'Banaan, appel & peer', 'Zoetzure Kanzi appels', _binary 0x31, '', NULL, NULL, 3.99, '1000', '3.99', 6, 'Nederland', '1eb9062f8fe190b6b61a3094385b84cadfeb569fe696f757d960461a6b21c411'),
	('10074801', 'Banaan, appel & peer', 'Kinderbananen', _binary 0x31, '', NULL, NULL, 1.65, '6', '275', 2, 'Colombia', '2a9540510e46c9c46ca3e07a8f2286987e61de536305fa5f259d9dd7f21052f9'),
	('10074802', 'Banaan, appel & peer', 'Zoetzure Kanzi appels', _binary 0x31, '', NULL, NULL, 2.99, '4 stuks', 'invalid weight', 7, 'Nederland', '6943f85e5a05d7f264eaaf58dc15615af88299a44757a849b5b5adc79fd15f1d'),
	('10075027', 'Banaan, appel & peer', 'Bio fairtrade bananen', _binary 0x31, '', NULL, NULL, 2.09, '5 stuks', 'invalid weight', 3, 'Ecuador', 'c4aad96cf2b5241449f857eb60e1ac682786b63e803df423a84e783773ecee23'),
	('10484758', 'Banaan, appel & peer', 'Picnic zoete Goudreinetten appels', _binary 0x31, '', NULL, NULL, 1.79, '1000', '1.79', 6, 'Nederland', 'd604ff375e923c0520e53ceaf110ea7480f576f395c57ac60f07cf65170fc90f'),
	('10568707', 'Banaan, appel & peer', 'Gala appels', _binary 0x31, '', NULL, NULL, 3.09, '6 stuks', 'invalid weight', 6, 'Frankrijk of Nederland', 'e59a72f744aba33e754707da651dfb9157277bab43d6c9d3a827557a14c2ec16'),
	('11325461', 'Banaan, appel & peer', 'Fruitpakket', _binary 0x31, '', NULL, NULL, 3.99, '1000', '3.99', 5, 'Nederland', '9e426fd61cdc7058575ce9ca01e73679aafcb76395ae4908b794b3bfbbd21d90'),
	('11385627', 'Banaan, appel & peer', 'Elstar appels', _binary 0x31, '', NULL, NULL, 2.49, '6 stuks', 'invalid weight', 6, 'Nederland', '15d1a0d1de6d2f43712e49678a154e316343861d970051307378cceeddc1c522'),
	('90006006', 'Banaan, appel & peer', 'Friszure Granny Smith appels', _binary 0x31, '', NULL, NULL, 3.29, '6 stuks', 'invalid weight', 5, 'ItaliÃ«', 'b14f0c4473c411228e690d8851d149404b2d728da7e52c13c7c7530fc2fc15a7'),
	('90006017', 'Banaan, appel & peer', 'Zoete golden delicious appels', _binary 0x31, '', NULL, NULL, 1.99, '6 stuks', 'invalid weight', 5, 'Nederland', 'cb7245773c9b15e28783620ca20309c2d2123c77802ac8ee723dc0078dbbe357'),
	('90006036', 'Banaan, appel & peer', 'Conference peren', _binary 0x31, '', NULL, NULL, 2.09, '4 stuks', 'invalid weight', 5, 'Nederland', '16e3999c097e0669b8f0b013a67aa9a54a2d9181650cd7c995930af2850d387d'),
	('90006048', 'Banaan, appel & peer', 'Jonagold appels', _binary 0x31, '', NULL, NULL, 1.99, '1000', '1.99', 3, 'Nederland', '6a114bd2f59d88f98eff142a2633d3fc718ce36bce562b2be5145485dba09b30'),
	('90006051', 'Banaan, appel & peer', 'Conference peren (voordeel verpakking)', _binary 0x31, '', NULL, NULL, 1.69, '1000', '1.69', 3, 'Nederland', 'c28ccec009417cc985b3b8c37335d575cca30c461b14230bc242fac86015d8b9'),
	('90006052', 'Banaan, appel & peer', 'Pink lady appels', _binary 0x31, '', NULL, NULL, 2.51, '4 stuks', 'invalid weight', 5, 'Chili', 'd2b6472b82dd81ff7b80830dfe6b11a32990c335a3c7a3d22046ed87fdfe467d'),
	('90006122', 'Banaan, appel & peer', 'Elstar appels', _binary 0x31, '', NULL, NULL, 3.69, '1000', '3.69', 3, 'Nederland', '4fc5ea0da30a802067d831a13543861da91b2d47eb79ff4fe234822a35212056'),
	('90006128', 'Banaan, appel & peer', 'Zoete jazz appels', _binary 0x31, '', NULL, NULL, 2.99, '750', '3.9866666666667', 3, 'Chili', '9c75fbe957220ef46496ea3d3b14ead871b03983343b50ed406f8ca2f32613fe'),
	('90006130', 'Banaan, appel & peer', 'Kleine kinder appels', _binary 0x31, '', NULL, NULL, 2.99, '1000', '2.99', 3, 'Nederland', '5801cd76bb87902b5e33b1a287a957ba39fc2af04f5369205af07dfb27a38f2b'),
	('90006132', 'Banaan, appel & peer', 'Bananen', _binary 0x31, '', NULL, NULL, 1.17, '5 stuks', 'invalid weight', 3, 'Costa Rica', 'd1a971e8e57a77b21c16f680816b7526aab257e22ecd7c07de9142a2551fb7ec'),
	('90006135', 'Banaan, appel & peer', 'Bio rode appels', _binary 0x31, '', NULL, NULL, 2.99, '4 stuks', 'invalid weight', 5, 'NL  NZ', '1e3460671b6206067c34a8ccc049f64e232c0dc8e14e8f4e9bfb2976ac39d29e'),
	('90006137', 'Banaan, appel & peer', 'Chiquita bananen', _binary 0x31, '', NULL, NULL, 1.95, '1000', '1.95', 3, 'Costa Rica', 'a47c652d4c362c65c9305b39930d54e18340c22536fefe6b407f2df1426b4489');
/*!40000 ALTER TABLE `scrap_products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
