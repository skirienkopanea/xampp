-- --------------------------------------------------------
--
-- Table structure for table `body`
--
USE coolwork_db;
CREATE TABLE `body` (
  `user` varchar(10) NOT NULL,
  `SEX` varchar(6) DEFAULT 'MALE',
  `AGE` tinyint(2) DEFAULT '24',
  `height-centimeters` int(3) DEFAULT '175',
  `WEIGHT` int(3) DEFAULT '75',
  `ACTIVITY` varchar(11) DEFAULT 'Very Active',
  `F_STATUS` varchar(13) DEFAULT NULL,
  `STRENGTH` varchar(3) DEFAULT 'No',
  `GOAL` varchar(7) DEFAULT 'Mantain'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='mantain';

--
-- Dumping data for table `body`
--

INSERT INTO `body` (`user`, `SEX`, `AGE`, `height-centimeters`, `WEIGHT`, `ACTIVITY`, `F_STATUS`, `STRENGTH`, `GOAL`) VALUES
('sergio', 'MALE', 24, 187, 80, 'Very Active', '', 'No', 'Cut');

-- --------------------------------------------------------

--
-- Table structure for table `diet_constraints`
--

CREATE TABLE `diet_constraints` (
  `user` varchar(10) NOT NULL,
  `kcals_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `kcals_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `carb_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `carb_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `fiber_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `fiber_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `protein_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `protein_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `fat_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `fat_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `ala183und_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `ala183und_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `la182und_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `la182und_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `water_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `water_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitamina_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitamina_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitaminc_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitaminc_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitamind_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitamind_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitaminb6_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitaminb6_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitamine_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitamine_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitamink_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitamink_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `thiamin_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `thiamin_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitaminb12_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `vitaminb12_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `riboflavin_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `riboflavin_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `folate_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `folate_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `niacin_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `niacin_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `choline_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `choline_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `pantothenicacid_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `pantothenicacid_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `calcium_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `calcium_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `copper_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `copper_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `fluoride_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `fluoride_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `iron_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `iron_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `magnesium_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `magnesium_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `manganese_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `manganese_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `phosphorus_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `phosphorus_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `potassium_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `potassium_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `selenium_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `selenium_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `sodium_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `sodium_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `zinc_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `zinc_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `monofat_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `monofat_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `polyfat_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `polyfat_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `satfat_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `satfat_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `transfat_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `transfat_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `phenylalanine_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `phenylalanine_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `valine_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `valine_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `threonine_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `threonine_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `tryptophan_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `tryptophan_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `methionine_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `methionine_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `leucine_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `leucine_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `isoleucine_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `isoleucine_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `lysine_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `lysine_max` decimal(8,3) NOT NULL DEFAULT '0.000',
  `histidine_min` decimal(8,3) NOT NULL DEFAULT '0.000',
  `histidine_max` decimal(8,3) NOT NULL DEFAULT '0.000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diet_constraints`
--

INSERT INTO `diet_constraints` (`user`, `kcals_min`, `kcals_max`, `carb_min`, `carb_max`, `fiber_min`, `fiber_max`, `protein_min`, `protein_max`, `fat_min`, `fat_max`, `ala183und_min`, `ala183und_max`, `la182und_min`, `la182und_max`, `water_min`, `water_max`, `vitamina_min`, `vitamina_max`, `vitaminc_min`, `vitaminc_max`, `vitamind_min`, `vitamind_max`, `vitaminb6_min`, `vitaminb6_max`, `vitamine_min`, `vitamine_max`, `vitamink_min`, `vitamink_max`, `thiamin_min`, `thiamin_max`, `vitaminb12_min`, `vitaminb12_max`, `riboflavin_min`, `riboflavin_max`, `folate_min`, `folate_max`, `niacin_min`, `niacin_max`, `choline_min`, `choline_max`, `pantothenicacid_min`, `pantothenicacid_max`, `calcium_min`, `calcium_max`, `copper_min`, `copper_max`, `fluoride_min`, `fluoride_max`, `iron_min`, `iron_max`, `magnesium_min`, `magnesium_max`, `manganese_min`, `manganese_max`, `phosphorus_min`, `phosphorus_max`, `potassium_min`, `potassium_max`, `selenium_min`, `selenium_max`, `sodium_min`, `sodium_max`, `zinc_min`, `zinc_max`, `monofat_min`, `monofat_max`, `polyfat_min`, `polyfat_max`, `satfat_min`, `satfat_max`, `transfat_min`, `transfat_max`, `phenylalanine_min`, `phenylalanine_max`, `valine_min`, `valine_max`, `threonine_min`, `threonine_max`, `tryptophan_min`, `tryptophan_max`, `methionine_min`, `methionine_max`, `leucine_min`, `leucine_max`, `isoleucine_min`, `isoleucine_max`, `lysine_min`, `lysine_max`, `histidine_min`, `histidine_max`) VALUES
('sergio', '3239.000', '4191.000', '429.000', '667.000', '38.000', '0.000', '127.000', '0.000', '85.000', '148.000', '1.600', '0.000', '17.000', '0.000', '3700.000', '0.000', '900.000', '3000.000', '90.000', '2000.000', '15.000', '100.000', '1.300', '100.000', '15.000', '1000.000', '120.000', '0.000', '1.200', '0.000', '2.400', '0.000', '1.300', '0.000', '400.000', '1000.000', '16.000', '35.000', '550.000', '3500.000', '5.000', '0.000', '1000.000', '2500.000', '0.900', '10.000', '4000.000', '10000.000', '8.000', '45.000', '400.000', '0.000', '2.300', '11.000', '700.000', '4000.000', '3400.000', '0.000', '55.000', '400.000', '1500.000', '0.000', '11.000', '40.000', '0.000', '0.000', '0.000', '0.000', '0.000', '0.000', '0.000', '0.000', '2.000', '0.000', '2.080', '0.000', '1.200', '0.000', '0.320', '0.000', '1.200', '0.000', '3.120', '0.000', '1.600', '0.000', '2.400', '0.000', '0.800', '0.000');

-- --------------------------------------------------------

--
-- Table structure for table `diet_plan`
--

CREATE TABLE `diet_plan` (
  `user` varchar(10) NOT NULL,
  `feedback` int(1) NOT NULL DEFAULT '0',
  `product1` varchar(8) DEFAULT NULL,
  `product2` varchar(8) DEFAULT NULL,
  `product3` varchar(8) DEFAULT NULL,
  `product4` varchar(8) DEFAULT NULL,
  `product5` varchar(8) DEFAULT NULL,
  `product6` varchar(8) DEFAULT NULL,
  `product7` varchar(8) DEFAULT NULL,
  `product8` varchar(8) DEFAULT NULL,
  `product9` varchar(8) DEFAULT NULL,
  `product10` varchar(8) DEFAULT NULL,
  `product11` varchar(8) DEFAULT NULL,
  `product12` varchar(8) DEFAULT NULL,
  `product13` varchar(8) DEFAULT NULL,
  `product14` varchar(8) DEFAULT NULL,
  `product15` varchar(8) DEFAULT NULL,
  `product16` varchar(8) DEFAULT NULL,
  `grams1` smallint(4) DEFAULT NULL,
  `grams2` smallint(4) DEFAULT NULL,
  `grams3` smallint(4) DEFAULT NULL,
  `grams4` smallint(4) DEFAULT NULL,
  `grams5` smallint(4) DEFAULT NULL,
  `grams6` smallint(4) DEFAULT NULL,
  `grams7` smallint(4) DEFAULT NULL,
  `grams8` smallint(4) DEFAULT NULL,
  `grams9` smallint(4) DEFAULT NULL,
  `grams10` smallint(4) DEFAULT NULL,
  `grams11` smallint(4) DEFAULT NULL,
  `grams12` smallint(4) DEFAULT NULL,
  `grams13` smallint(4) DEFAULT NULL,
  `grams14` smallint(4) DEFAULT NULL,
  `grams15` smallint(4) DEFAULT NULL,
  `grams16` smallint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diet_plan`
--

INSERT INTO `diet_plan` (`user`, `feedback`, `product1`, `product2`, `product3`, `product4`, `product5`, `product6`, `product7`, `product8`, `product9`, `product10`, `product11`, `product12`, `product13`, `product14`, `product15`, `product16`, `grams1`, `grams2`, `grams3`, `grams4`, `grams5`, `grams6`, `grams7`, `grams8`, `grams9`, `grams10`, `grams11`, `grams12`, `grams13`, `grams14`, `grams15`, `grams16`) VALUES
('sergio', 0, '10543560', '10562319', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 100, 200, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE `exercises` (
  `id` tinyint(2) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `active` binary(1) NOT NULL DEFAULT '1',
  `description` varchar(255) DEFAULT '',
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `protraction` decimal(3,2) DEFAULT '0.00',
  `retraction` decimal(3,2) DEFAULT '0.00',
  `uprotation` decimal(3,2) DEFAULT '0.00',
  `downrotation` decimal(3,2) DEFAULT '0.00',
  `depression` decimal(3,2) DEFAULT '0.00',
  `elevation` decimal(3,2) DEFAULT '0.00',
  `introtation` decimal(3,2) DEFAULT '0.00',
  `extrotation` decimal(3,2) DEFAULT '0.00',
  `hamdom` decimal(3,2) DEFAULT '0.00',
  `quadom` decimal(3,2) DEFAULT '0.00',
  `ratioref` tinyint(4) DEFAULT NULL,
  `ratio` decimal(4,3) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exercises`
--

INSERT INTO `exercises` (`id`, `name`, `active`, `description`, `timestamp`, `protraction`, `retraction`, `uprotation`, `downrotation`, `depression`, `elevation`, `introtation`, `extrotation`, `hamdom`, `quadom`, `ratioref`, `ratio`, `reference`) VALUES
(-1, '', 0x30, 'don\'t remove, is for having an empty value in the workout dropdown list', '2019-07-16 22:30:37', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL),
(1, 'squat', 0x31, 'high bar', '2019-07-19 12:25:47', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.40', '0.60', 1, '1.000', 'https://exrx.net/WeightExercises/Quadriceps/BBSquat'),
(2, 'f. squat', 0x31, '', '2019-07-19 12:29:51', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.25', '0.75', 1, '0.875', 'https://exrx.net/WeightExercises/Quadriceps/BBFrontSquat'),
(3, 'clean', 0x30, '', '2019-07-19 12:30:32', '0.00', '0.00', '0.00', '0.00', '0.00', '1.00', '0.00', '0.00', '0.75', '0.25', 1, '0.775', 'https://exrx.net/WeightExercises/OlympicLifts/Clean'),
(4, 'c&j', 0x30, 'clean and jerk', '2019-07-19 12:30:58', '0.00', '0.00', '0.50', '0.00', '0.00', '1.00', '0.50', '0.00', '0.75', '0.25', 1, '0.750', 'https://exrx.net/WeightExercises/OlympicLifts/CleanAndJerk'),
(5, 'p. clean', 0x31, 'power clean', '2019-07-19 12:31:27', '0.00', '0.00', '0.00', '0.00', '0.00', '1.00', '0.00', '0.00', '0.85', '0.15', 1, '0.650', 'https://exrx.net/WeightExercises/OlympicLifts/PowerClean'),
(6, 'snatch', 0x30, '', '2019-07-19 12:31:51', '0.00', '0.00', '0.00', '0.00', '0.00', '1.00', '0.00', '0.00', '0.85', '0.15', 1, '0.650', 'https://exrx.net/WeightExercises/OlympicLifts/Snatch'),
(7, 'deadlift', 0x30, 'conventional', '2019-07-19 12:32:03', '0.00', '0.00', '0.00', '0.00', '0.00', '1.00', '0.00', '0.00', '0.90', '0.10', 1, '1.250', 'https://exrx.net/WeightExercises/GluteusMaximus/BBDeadlift'),
(8, 'clean pull', 0x30, '', '2019-07-19 12:32:20', '0.00', '0.00', '0.00', '0.00', '0.00', '1.00', '0.00', '0.00', '0.90', '0.10', 1, '1.000', 'https://www.youtube.com/watch?v=1WuSiyM-knI'),
(9, 'press', 0x31, '', '2019-07-19 12:33:12', '0.00', '0.00', '1.00', '0.00', '0.00', '0.00', '1.00', '0.00', '0.00', '0.00', 12, '0.600', 'https://exrx.net/WeightExercises/DeltoidAnterior/BBMilitaryPress'),
(10, 'jerk', 0x30, '', '2019-07-19 12:33:38', '0.00', '0.00', '0.50', '0.00', '0.00', '0.00', '0.50', '0.00', '0.00', '0.00', 9, '2.000', 'https://exrx.net/WeightExercises/OlympicLifts/SplitJerk'),
(11, 'p. press', 0x30, 'push press', '2019-07-19 12:34:45', '0.00', '0.00', '1.00', '0.00', '0.00', '0.00', '1.00', '0.00', '0.00', '0.00', 9, '1.250', 'https://exrx.net/WeightExercises/OlympicLifts/PushPress'),
(12, 'bench', 0x31, 'barbell bench press', '2019-07-19 12:34:23', '1.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1.00', '0.00', '0.00', '0.00', 13, '1.000', 'https://exrx.net/WeightExercises/PectoralSternal/BBBenchPress'),
(13, 'row', 0x30, 'barbell pendlay row', '2019-07-21 09:33:16', '0.00', '1.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 5, '1.154', 'https://exrx.net/WeightExercises/BackGeneral/BBBentOverRow'),
(14, 'pull up', 0x31, 'Ratio assumes your bodyweight is included', '2019-07-19 13:12:01', '0.00', '0.00', '0.00', '1.00', '0.00', '0.00', '0.50', '0.00', '0.00', '0.00', 15, '0.950', 'https://exrx.net/WeightExercises/LatissimusDorsi/BWPullup'),
(15, 'chin up', 0x30, 'Ratio assumes your bodyweight is included', '2019-07-19 13:12:40', '0.00', '0.00', '0.00', '1.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 16, '1.320', 'https://exrx.net/WeightExercises/LatissimusDorsi/BWUnderhandChinup'),
(16, 'dip', 0x30, '', '2019-07-16 12:16:21', '1.00', '0.00', '0.00', '0.00', '1.00', '0.00', '1.00', '0.00', '0.00', '0.00', 12, '1.320', 'https://exrx.net/WeightExercises/PectoralSternal/BWChestDip'),
(17, 'facepull', 0x30, '', '2019-07-16 12:18:32', '0.00', '1.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1.00', '0.00', '0.00', NULL, NULL, 'https://www.youtube.com/watch?v=Q18p2QtQAes'),
(18, 'side rise', 0x30, '', '2019-07-16 12:19:06', '0.00', '0.00', '1.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, 'https://exrx.net/WeightExercises/DeltoidLateral/DBLateralRaise'),
(19, 'shrug', 0x30, '', '2019-07-16 12:25:37', '0.00', '0.00', '0.00', '0.00', '0.00', '1.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, 'https://exrx.net/WeightExercises/TrapeziusUpper/DBShrug'),
(20, 'salatpd', 0x30, 'stiffed arm lat pulldown (bent-over pullover)', '2019-07-16 12:28:55', '0.00', '0.00', '0.00', '0.00', '1.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, 'https://exrx.net/WeightExercises/LatissimusDorsi/CBBentoverPullover'),
(21, 'erc', 0x31, 'external rotator cuff', '2019-07-16 12:46:00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1.00', '0.00', '0.00', NULL, NULL, 'https://exrx.net/WeightExercises/Infraspinatus/DBUprightExternalRotation');

-- --------------------------------------------------------

--
-- Table structure for table `intensity`
--

CREATE TABLE `intensity` (
  `sets` tinyint(2) DEFAULT NULL,
  `reps` tinyint(2) DEFAULT NULL,
  `pof1rm` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intensity`
--

INSERT INTO `intensity` (`sets`, `reps`, `pof1rm`) VALUES
(1, 1, '1.00'),
(1, 2, '0.97'),
(1, 3, '0.94'),
(1, 4, '0.92'),
(1, 5, '0.89'),
(1, 6, '0.86'),
(1, 7, '0.83'),
(1, 8, '0.81'),
(1, 9, '0.78'),
(1, 10, '0.75'),
(2, 1, '0.98'),
(2, 2, '0.95'),
(2, 3, '0.93'),
(2, 4, '0.90'),
(2, 5, '0.87'),
(2, 6, '0.84'),
(2, 7, '0.82'),
(2, 8, '0.79'),
(2, 9, '0.76'),
(2, 10, '0.73'),
(3, 1, '0.96'),
(3, 2, '0.94'),
(3, 3, '0.91'),
(3, 4, '0.88'),
(3, 5, '0.85'),
(3, 6, '0.83'),
(3, 7, '0.80'),
(3, 8, '0.77'),
(3, 9, '0.74'),
(3, 10, '0.71'),
(4, 1, '0.95'),
(4, 2, '0.92'),
(4, 3, '0.89'),
(4, 4, '0.86'),
(4, 5, '0.84'),
(4, 6, '0.81'),
(4, 7, '0.78'),
(4, 8, '0.75'),
(4, 9, '0.72'),
(4, 10, '0.69'),
(5, 1, '0.93'),
(5, 2, '0.90'),
(5, 3, '0.87'),
(5, 4, '0.85'),
(5, 5, '0.82'),
(5, 6, '0.79'),
(5, 7, '0.76'),
(5, 8, '0.73'),
(5, 9, '0.70'),
(5, 10, '0.67'),
(5, 1, '0.91'),
(5, 2, '0.88'),
(5, 3, '0.86'),
(5, 4, '0.83'),
(5, 5, '0.80'),
(5, 6, '0.77'),
(5, 7, '0.74'),
(5, 8, '0.71'),
(5, 9, '0.68'),
(5, 10, '0.65'),
(6, 1, '0.89'),
(6, 2, '0.87'),
(6, 3, '0.84'),
(6, 4, '0.81'),
(6, 5, '0.78'),
(6, 6, '0.75'),
(6, 7, '0.72'),
(6, 8, '0.69'),
(6, 9, '0.66'),
(6, 10, '0.63'),
(7, 1, '0.88'),
(7, 2, '0.85'),
(7, 3, '0.82'),
(7, 4, '0.79'),
(7, 5, '0.76'),
(7, 6, '0.73'),
(7, 7, '0.70'),
(7, 8, '0.67'),
(7, 9, '0.64'),
(7, 10, '0.61'),
(8, 1, '0.86'),
(8, 2, '0.83'),
(8, 3, '0.80'),
(8, 4, '0.77'),
(8, 5, '0.74'),
(8, 6, '0.71'),
(8, 7, '0.68'),
(8, 8, '0.65'),
(8, 9, '0.62'),
(8, 10, '0.59'),
(9, 1, '0.84'),
(9, 2, '0.81'),
(9, 3, '0.78'),
(9, 4, '0.75'),
(9, 5, '0.72'),
(9, 6, '0.69'),
(9, 7, '0.66'),
(9, 8, '0.63'),
(9, 9, '0.60'),
(9, 10, '0.57'),
(10, 1, '0.82'),
(10, 2, '0.79'),
(10, 3, '0.76'),
(10, 4, '0.73'),
(10, 5, '0.70'),
(10, 6, '0.67'),
(10, 7, '0.64'),
(10, 8, '0.61'),
(10, 9, '0.58'),
(10, 10, '0.55');

-- --------------------------------------------------------

--
-- Table structure for table `main_categories`
--

CREATE TABLE `main_categories` (
  `id` varchar(8) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `active` binary(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Stand-in structure for view `map`
-- (See below for the actual view)
--
CREATE TABLE `map` (
`user` varchar(10)
,`product_id` varchar(8)
,`product_name` varchar(50)
,`product_active` binary(1)
,`feedback` binary(1)
,`product_description` varchar(255)
,`product_timestamp` timestamp
,`price_per_kg` varchar(50)
,`image` varchar(255)
,`usda_id` varchar(15)
,`usda_name` varchar(50)
,`usda_active` binary(1)
,`usda_description` varchar(255)
,`category` varchar(255)
,`usda_timestamp` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
,`kcals` decimal(8,3)
,`protein` decimal(8,3)
,`fat` decimal(8,3)
,`carb` decimal(8,3)
,`fiber` decimal(8,3)
,`water` decimal(8,3)
,`calcium` decimal(8,3)
,`iron` decimal(8,3)
,`magnesium` decimal(8,3)
,`phosphorus` decimal(8,3)
,`potassium` decimal(8,3)
,`sodium` decimal(8,3)
,`zinc` decimal(8,3)
,`copper` decimal(8,3)
,`fluoride` decimal(8,3)
,`manganese` decimal(8,3)
,`selenium` decimal(8,3)
,`vitaminc` decimal(8,3)
,`thiamin` decimal(8,3)
,`riboflavin` decimal(8,3)
,`niacin` decimal(8,3)
,`pantothenicacid` decimal(8,3)
,`vitaminb6` decimal(8,3)
,`folate` decimal(8,3)
,`choline` decimal(8,3)
,`vitaminb12` decimal(8,3)
,`vitamina` decimal(8,3)
,`vitamine` decimal(8,3)
,`vitamind` decimal(8,3)
,`vitamink` decimal(8,3)
,`ala183und` decimal(8,3)
,`la182und` decimal(8,3)
,`monofat` decimal(8,3)
,`polyfat` decimal(8,3)
,`satfat` decimal(8,3)
,`transfat` decimal(8,3)
,`phenylalanine` decimal(8,3)
,`valine` decimal(8,3)
,`threonine` decimal(8,3)
,`tryptophan` decimal(8,3)
,`methionine` decimal(8,3)
,`leucine` decimal(8,3)
,`isoleucine` decimal(8,3)
,`lysine` decimal(8,3)
,`histidine` decimal(8,3)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `map_min`
-- (See below for the actual view)
--
CREATE TABLE `map_min` (
`user` varchar(10)
,`product_id` varchar(8)
,`product_name` varchar(50)
,`product_active` binary(1)
,`feedback` binary(1)
,`product_description` varchar(255)
,`product_timestamp` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
,`price_per_kg` varchar(50)
,`usda_id` varchar(15)
,`usda_name` varchar(50)
,`usda_active` binary(1)
,`usda_description` varchar(255)
,`category` varchar(255)
,`usda_timestamp` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
,`kcals` decimal(8,3)
,`protein` decimal(8,3)
,`fat` decimal(8,3)
,`carb` decimal(8,3)
,`fiber` decimal(8,3)
,`water` decimal(8,3)
,`calcium` decimal(8,3)
,`iron` decimal(8,3)
,`magnesium` decimal(8,3)
,`phosphorus` decimal(8,3)
,`potassium` decimal(8,3)
,`sodium` decimal(8,3)
,`zinc` decimal(8,3)
,`copper` decimal(8,3)
,`fluoride` decimal(8,3)
,`manganese` decimal(8,3)
,`selenium` decimal(8,3)
,`vitaminc` decimal(8,3)
,`thiamin` decimal(8,3)
,`riboflavin` decimal(8,3)
,`niacin` decimal(8,3)
,`pantothenicacid` decimal(8,3)
,`vitaminb6` decimal(8,3)
,`folate` decimal(8,3)
,`choline` decimal(8,3)
,`vitaminb12` decimal(8,3)
,`vitamina` decimal(8,3)
,`vitamine` decimal(8,3)
,`vitamind` decimal(8,3)
,`vitamink` decimal(8,3)
,`ala183und` decimal(8,3)
,`la182und` decimal(8,3)
,`monofat` decimal(8,3)
,`polyfat` decimal(8,3)
,`satfat` decimal(8,3)
,`transfat` decimal(8,3)
,`phenylalanine` decimal(8,3)
,`valine` decimal(8,3)
,`threonine` decimal(8,3)
,`tryptophan` decimal(8,3)
,`methionine` decimal(8,3)
,`leucine` decimal(8,3)
,`isoleucine` decimal(8,3)
,`lysine` decimal(8,3)
,`histidine` decimal(8,3)
);

-- --------------------------------------------------------

--
-- Table structure for table `museums`
--

CREATE TABLE `museums` (
  `link` varchar(550) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `lat` float DEFAULT NULL,
  `lng` float DEFAULT NULL,
  `visited` tinyint(1) DEFAULT '0',
  `image` varchar(550) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `museums`
--

INSERT INTO `museums` (`link`, `name`, `lat`, `lng`, `visited`, `image`) VALUES
('/museum/De+Fraeylemaborg/Fraeylemaborg.aspx', 'De Fraeylemaborg', 53.2158, 6.80645, 0, '//cdn.museum.nl/cards/700x394/cde7fd5a-b859-4dc9-b68c-69e624636857\\Fraeylemaborg (2).jpg'),
('/museum/Anne+Frank+Huis/Anne+Frank+Huis.aspx', 'Anne Frank Huis', 52.3752, 4.88399, 0, '//cdn.museum.nl/cards/700x394/9af49663-7651-468c-a2eb-81aa699aed56\\31236439164_49130417de_b.jpg'),
('/museum/Nederlands+Stoommachinemuseum/Nederlands+Stoommachinemuseum.aspx', 'Nederlands Stoommachinemuseum', 52.76, 5.11786, 0, '//cdn.museum.nl/cards/700x394/1b459b9c-9785-4e04-9807-73d032f881bf\\nederlands stoommachine museum.jpg'),
('/museum/Keramiekmuseum+Princessehof/Keramiekmuseum+Princessehof+.aspx', 'Keramiekmuseum Princessehof', 53.203, 5.79208, 0, '//cdn.museum.nl/cards/700x394/7071d701-3d9d-4574-a566-ee1239ff891a\\M1022 Princessehof.jpg'),
('/museum/Kunsthal++Rotterdam/Kunsthal+Rotterdam.aspx', 'Kunsthal  Rotterdam', 51.9106, 4.47365, 0, '//cdn.museum.nl/cards/700x394/13d05864-d3d4-4a24-94de-cc1134eafe2f\\kunsthal_rotterdam.jpg'),
('/museum/Museum+Hindeloopen/Museum+Hindeloopen.aspx', 'Museum Hindeloopen', 52.9433, 5.39862, 0, '//cdn.museum.nl/cards/700x394/plaatjesbank/hidde nijland stichting 1015/1015_hindeloper_wieg_1752.jpg'),
('/museum/Stadsmuseum+Rhenen/Stadsmuseum+Rhenen.aspx', 'Stadsmuseum Rhenen', 51.9569, 5.56524, 0, '//cdn.museum.nl/cards/700x394/239ecd27-9f9d-4e02-ad5b-72a91ae27656\\rhenen.jpg'),
('/museum/Museum+MORE/Museum+MORE.aspx', 'Museum MORE', 52.1996, 6.20095, 0, '//cdn.museum.nl/cards/700x394/2a6a744c-3588-4251-9e09-fe691364bd76\\LOW RES - ZOMERVOORKANT Museum MORE - fotocredit Luuk Kramer voor Van Heeswijk architecten.jpg'),
('/museum/Batavialand/Batavialand.aspx', 'Batavialand', 52.5024, 5.4195, 0, '//cdn.museum.nl/cards/700x394/2c90d8d5-16a3-4094-a186-7ec18086b58b\\06jun2015_9931.jpg'),
('/museum/Nationaal+Militair+Museum/Nationaal+Militair+Museum.aspx', 'Nationaal Militair Museum', 52.1317, 5.28057, 0, '//cdn.museum.nl/cards/700x394/e96efc84-4600-4ead-a8c4-f113fbb87983\\NMM Leukste uitje van Utrecht 2019.jpg'),
('/museum/Museum+de+Kantfabriek/De+Kantfabriek.aspx', 'Museum de Kantfabriek', 51.4511, 6.04897, 0, '//cdn.museum.nl/cards/700x394/f1378504-7b7e-4499-97ad-64ce147dbb18\\M9886 rij machines.jpg'),
('/museum/Museum+MORE+%7c+Kasteel+Ruurlo/Museum+MORE+%7c+Kasteel+Ruurlo.aspx', 'Museum MORE | Kasteel Ruurlo', 52.0789, 6.44498, 0, '//cdn.museum.nl/cards/700x394/b2b403a1-f22f-45f2-b0c7-1920fcefab91\\Kasteel Ruurlo.jpg'),
('/museum/Afrika+Museum/Afrika+Museum.aspx', 'Afrika Museum', 51.8125, 5.90962, 0, '//cdn.museum.nl/cards/700x394/b6ed7b04-92ed-4b0f-b9b6-d78e9afa9f93\\Afrika Museum.jpg'),
('/museum/Hortus+Botanicus+Leiden/Hortus+botanicus+Leiden.aspx', 'Hortus Botanicus Leiden', 52.156, 4.48392, 0, '//cdn.museum.nl/cards/700x394/4cc82c9d-097e-4341-954b-4d64076248e3\\hortus.jpg'),
('/museum/Museum+Bredius/Museum+Bredius.aspx', 'Museum Bredius', 52.0812, 4.31249, 0, '//cdn.museum.nl/cards/700x394/plaatjesbank/bredius museum 3040/3040_Wil CB3.jpg'),
('/museum/Het+Oude+Raadhuis+Urk/Cultuurhistorisch+Museum+Het+Oude+Raadhuis.aspx', 'Het Oude Raadhuis Urk', 52.6616, 5.5957, 0, '//cdn.museum.nl/cards/700x394/plaatjesbank/Het Oude Raadhuis 7205/7205_het_oude_raadhuis3.jpg'),
('/museum/Universiteitsmuseum+Utrecht/Universiteitsmuseum+Utrecht.aspx', 'Universiteitsmuseum Utrecht', 52.0848, 5.12571, 0, '//cdn.museum.nl/cards/700x394/5898c29e-623f-4ae3-93c8-35a3766704cf\\Kennislab_4122_fotograaf Steven Snoep.jpg'),
('/museum/Museum+van+de+20e+Eeuw/Museum+van+de+20e+Eeuw.aspx', 'Museum van de 20e Eeuw', 52.6347, 5.06246, 0, '//cdn.museum.nl/cards/700x394/a39ed646-0608-4d29-9f2e-369a2c44b139\\Museum van de 20e Eeuw Algemeen Oostereiland Hoorn1 700 pixels.jpg'),
('/museum/Museum+Bronbeek/Museum+Bronbeek.aspx', 'Museum Bronbeek', 51.9951, 5.95021, 0, '//cdn.museum.nl/cards/700x394/c00fb38d-fd12-4d9f-b4e0-e189740ab0b5\\museum bronbeek.jpg'),
('/museum/Zeeuws+Maritiem+MuZEEum/Zeeuws+maritiem+muZEEum+Vlissingen.aspx', 'Zeeuws Maritiem MuZEEum', 51.4413, 3.57528, 0, '//cdn.museum.nl/cards/700x394/8379d7a1-b2ce-4ee7-8bc6-091482aa10df\\Zeeuws maritiem muZEEum.jpg'),
('/museum/Museum+Beelden+aan+Zee/Beelden+aan+Zee.aspx', 'Museum Beelden aan Zee', 52.1109, 4.2784, 0, '//cdn.museum.nl/cards/700x394/20ea8392-8a9b-4ffa-9123-4ac78248aff3\\beelden aan zee 3.jpg'),
('/museum/Het+Sterkenhuis/Gemeentemuseum+Het+Sterkenhuis.aspx', 'Het Sterkenhuis', 52.6697, 4.69964, 0, '//cdn.museum.nl/cards/700x394/plaatjesbank/het sterkenhuis 7015/7015_interieur1.jpg'),
('/museum/Mondriaanhuis/Mondriaanhuis.aspx', 'Mondriaanhuis', 52.1548, 5.39037, 0, '//cdn.museum.nl/cards/700x394/2228151c-1902-4a13-af42-b73e70a1ab57\\Mondriaanhuis_34.jpg'),
('/museum/Nationaal+Modelspoor+Museum/Het+Nationaal+Modelspoor+Museum.aspx', 'Nationaal Modelspoor Museum', 53.0309, 5.66161, 0, '//cdn.museum.nl/cards/700x394/3f38575f-aa8d-48d5-bf3a-21c8bce0f3fc\\Foto web MJK.jpg'),
('/museum/Veiligheidsmuseum+PIT+/Veiligheidsmuseum+PIT.aspx', 'Veiligheidsmuseum PIT ', 52.3671, 5.2157, 0, '//cdn.museum.nl/cards/700x394/fdbf73ce-ad52-4db1-a175-ae152769c852\\politiewagen 1000X.jpg'),
('/museum/Zaans+Museum/Zaans+Museum+%26+Verkade+Paviljoen.aspx', 'Zaans Museum', 52.4737, 4.82311, 0, '//cdn.museum.nl/cards/700x394/2f5077af-04fa-4378-880b-fde4705fce48\\Zaans Museum foto Pascal Fielmich.jpg'),
('/museum/Stadskasteel+Zaltbommel/Stadskasteel+Zaltbommel.aspx', 'Stadskasteel Zaltbommel', 51.8113, 5.24933, 0, '//cdn.museum.nl/cards/700x394/125770ba-5506-46ea-ab76-e455b9112bfa\\450px-Zaltbommel_Maarten_van_Rossum_museum.jpg'),
('/museum/Museum+Maassluis/Gemeentemuseum+Maassluis.aspx', 'Museum Maassluis', 51.9209, 4.25421, 0, '//cdn.museum.nl/cards/700x394/plaatjesbank/gem museum maassluis 3018/3018_zaal2.jpg'),
('/museum/Marechausseemuseum/Marechausseemuseum.aspx', 'Marechausseemuseum', 51.9119, 5.33666, 0, '//cdn.museum.nl/cards/700x394/3c88d40e-18ef-4b45-a9e4-87b866f84f68\\marechaussee.jpg'),
('/museum/Philips+Museum/Philips+Museum.aspx', 'Philips Museum', 51.439, 5.47509, 0, '//cdn.museum.nl/cards/700x394/a9f568a0-ae7c-44d3-8b40-3d796d74a6e7\\Museum_front.jpg'),
('/museum/De+Museumfabriek/De+Museumfabriek.aspx', 'De Museumfabriek', 52.2324, 6.89503, 0, '//cdn.museum.nl/cards/700x394/39183d28-373a-485f-bc3e-42728d0ca06b\\twentsewelle.jpg'),
('/museum/Museum+Romeinse+Katakomben/Museum+Romeinse+Katakomben.aspx', 'Museum Romeinse Katakomben', 50.8655, 5.82168, 0, '//cdn.museum.nl/cards/700x394/31f36629-7672-4ef7-8669-f60fd9cc3bc5\\M7222 Katakombenstichting_1 Museum Romeinse Katakomben kl.jpg'),
('/museum/Museum+Engelandvaarders/Museum+Engelandvaarders.aspx', 'Museum Engelandvaarders', 52.2518, 4.43698, 0, '//cdn.museum.nl/cards/700x394/3b729d09-7618-47a9-979a-c89f4ad1eb4e\\museum engelandvaarders.jpg'),
('/museum/Limburgs+Museum/Limburgs+Museum.aspx', 'Limburgs Museum', 51.3668, 6.17179, 0, '//cdn.museum.nl/cards/700x394/a130df6f-f765-40ba-9178-77f92d23a981\\Foto Museumkaart.jpg'),
('/museum/Stedelijk+Museum+Alkmaar/Stedelijk+Museum+Alkmaar.aspx', 'Stedelijk Museum Alkmaar', 52.6334, 4.74364, 0, '//cdn.museum.nl/cards/700x394/5b2907be-5790-47b9-8220-ee0b0d34b8bb\\StedelijkMuseumAlkmaar.jpg'),
('/museum/Museum+Hengelo/Museum+Hengelo.aspx', 'Museum Hengelo', 52.2642, 6.79194, 0, '//cdn.museum.nl/cards/700x394/c32f5c03-bb4f-4e14-b4e5-a899934fe9a9\\Dikkers2 (2).jpg'),
('/museum/Grote+Kerk+Alkmaar/Grote+Kerk+Alkmaar.aspx', 'Grote Kerk Alkmaar', 52.6325, 4.74448, 0, '//cdn.museum.nl/cards/700x394/d9570f85-c565-4505-9c8e-ddabfba264ac\\grote-kerk-nieuwe-website-cropped-voor-carrousel.jpg'),
('/museum/Stedelijk+Museum+Breda/Stedelijk+Museum+Breda.aspx', 'Stedelijk Museum Breda', 51.5896, 4.78097, 0, '//cdn.museum.nl/cards/700x394/56390463-1dd4-4470-a155-ebd12b584f69\\stedelijk museum breda.jpg'),
('/museum/Museum+Het+Pakhuis/Het+Pakhuis.aspx', 'Museum Het Pakhuis', 52.301, 5.62949, 0, '//cdn.museum.nl/cards/700x394/af948d40-2839-4291-bd04-3f8dda959497\\SAM_0192.JPG'),
('/museum/nijntje+museum/nijntje+museum.aspx', 'nijntje museum', 52.0841, 5.12619, 0, '//cdn.museum.nl/cards/700x394/3625fac0-e050-4252-b12f-53fcedf4d753\\nijntje.jpg'),
('/museum/Drukkerijmuseum+Meppel/Drukkerijmuseum+Meppel.aspx', 'Drukkerijmuseum Meppel', 52.6964, 6.18876, 0, '//cdn.museum.nl/cards/700x394/bb83e808-6927-4301-8a08-0da3f036af7e\\DSC01899.JPG'),
('/museum/Museum+Veenendaal/Museum+Veenendaal.aspx', 'Museum Veenendaal', 52.0273, 5.55891, 0, '//cdn.museum.nl/cards/700x394/8b73f3aa-29bd-416b-b33b-f86bc859dde1\\museum veenendaal.jpg'),
('/museum/Feyenoord+Museum/Feyenoord+Museum.aspx', 'Feyenoord Museum', 51.8944, 4.52132, 0, '//cdn.museum.nl/cards/700x394/6157d4c4-590c-4318-96af-ac312d04fec1\\Feyenoord Museum03.jpg'),
('/museum/Verzetsmuseum+Zuid-Holland/Verzetsmuseum+Zuid-Holland.aspx', 'Verzetsmuseum Zuid-Holland', 52.0126, 4.70888, 0, '//cdn.museum.nl/cards/700x394/2cc0cadf-406d-43ea-9933-2f8ce222e3a4\\VMZH algemeen - foto.jpg'),
('/museum/Het+Palthe+Huis/Het+Palthe+Huis.aspx', 'Het Palthe Huis', 52.3132, 6.9302, 0, '//cdn.museum.nl/cards/700x394/f96dd559-1e64-4abc-ace7-0524c67a804d\\Palthehuis_005.jpg'),
('/museum/Heksenwaag/Heksenwaag.aspx', 'Heksenwaag', 52.0233, 4.87228, 0, '//cdn.museum.nl/cards/700x394/plaatjesbank/heksenwaag 9362/9362_de_heksenwaag3.jpg'),
('/museum/Liemers+Museum/Liemers+Museum.aspx', 'Liemers Museum', 51.9252, 6.07471, 0, '//cdn.museum.nl/cards/700x394/0d11ce67-9036-4b43-8663-1ebafa7b2e82\\_dsc0133.jpg'),
('/museum/De+Koperen+Knop/Museum+De+Koperen+Knop.aspx', 'De Koperen Knop', 51.8328, 4.84708, 0, '//cdn.museum.nl/cards/700x394/6e8a0b91-81e6-469d-8148-73d11e23d7f8\\engel in de opkamer 1.jpg'),
('/museum/De+Nieuwe+Kerk/De+Nieuwe+Kerk.aspx', 'De Nieuwe Kerk', 52.3732, 4.89356, 0, '//cdn.museum.nl/cards/700x394/5f9b3a7e-9f12-437a-9810-a1a83560b75a\\de nieuwe kerk.jpg'),
('/museum/Museum+Stedh%c3%bbs+Sleat/Museum+Stedh%c3%bbs+Sleat.aspx', 'Museum StedhÃ»s Sleat', 52.8948, 5.64564, 0, '//cdn.museum.nl/cards/700x394/musnieuw/MuseumSloten.jpg'),
('/museum/Openluchtmuseum+en+Themapark+De+Spitkeet/Openluchtmuseum+De+Spitkeet.aspx', 'Openluchtmuseum en Themapark D', 53.18, 6.11713, 0, '//cdn.museum.nl/cards/700x394/153f8896-f75d-4973-9434-9c3728ac7754\\spitkeet.jpg'),
('/museum/Huis+Zypendaal/Huis+Zypendaal.aspx', 'Huis Zypendaal', 51.9993, 5.89314, 0, '//cdn.museum.nl/cards/700x394/d48a0d80-55d7-40b1-bdc0-e122d271f0dc\\Zypendaal-huis-vooraanzicht-veraf2-KD-2007.JPG'),
('/museum/Het+Nieuwe+Instituut/Het+Nieuwe+Instituut.aspx', 'Het Nieuwe Instituut', 51.9127, 4.47332, 0, '//cdn.museum.nl/cards/700x394/828f4475-1dfb-4df3-9baa-608167891874\\Het Nieuwe Instituut.jpg'),
('/museum/De+Hollandsche+Schouwburg/Hollandsche+Schouwburg.aspx', 'De Hollandsche Schouwburg', 52.3665, 4.91113, 0, '//cdn.museum.nl/cards/700x394/musnieuw/HollandseSchouwburg.jpg'),
('/museum/TextielMuseum/Textielmuseum+Tilburg.aspx', 'TextielMuseum', 51.5709, 5.07946, 0, '//cdn.museum.nl/cards/700x394/e2a73c7e-c16d-4436-8e6f-68b9d107454e\\M2020 TextielMuseum prachtige hoed.jpg'),
('/museum/Museum+Het+Bolwerk/Museum+Het+Bolwerk.aspx', 'Museum Het Bolwerk', 51.3225, 3.61582, 0, '//cdn.museum.nl/cards/700x394/738d0ea0-9ac3-42ee-8087-c7041088db38\\M9614 het bolwerk.jpg'),
('/museum/NEST/NEST.aspx', 'NEST', 52.0766, 4.29144, 0, '//cdn.museum.nl/cards/700x394/a95b2c87-14e8-4fca-95d5-1f3640246148\\Nest Ruimte - On Speaking Terms.jpg'),
('/museum/Stedelijk+Museum+Amsterdam/Stedelijk+Museum+Amsterdam.aspx', 'Stedelijk Museum Amsterdam', 52.3582, 4.87978, 0, '//cdn.museum.nl/cards/700x394/eb63bbad-f19a-4806-8a46-2403358d04e8\\Gebouw Stedelijk 2, aangepast.jpg'),
('/museum/Purmerends+Museum/Purmerends+Museum.aspx', 'Purmerends Museum', 52.51, 4.94635, 0, '//cdn.museum.nl/cards/700x394/2e5d03c5-24b9-4fdf-a1a2-8d8428ceef57\\Purmerends Museum.jpg'),
('/museum/Kasteel+de+Haar/Kasteel+de+Haar.aspx', 'Kasteel de Haar', 52.1215, 4.98627, 0, '//cdn.museum.nl/cards/700x394/5e1749e9-7154-4a0e-9a1c-93504397e929\\kasteel de haar.jpg'),
('/museum/Museum+Sjoel+Elburg/Museum+Sjoel+Elburg.aspx', 'Museum Sjoel Elburg', 52.448, 5.83618, 0, '//cdn.museum.nl/cards/700x394/0542ddc7-a492-4513-84f3-a99f84d13049\\sjoel.JPG'),
('/museum/Museum+van+Egmond/Museum+Van+Egmond.aspx', 'Museum van Egmond', 52.6174, 4.62513, 0, '//cdn.museum.nl/cards/700x394/plaatjesbank/van egmond mus 7034/7034_museum_van-egmond3.jpg'),
('/museum/Observeum+Burgum/Observeum+Burgum.aspx', 'Observeum Burgum', 53.2041, 6.00047, 0, '//cdn.museum.nl/cards/700x394/1edb667a-d4dc-4ec9-9bed-c32dc263422c\\064.JPG'),
('/museum/Natuurcentrum+Ameland/Natuurcentrum+Ameland.aspx', 'Natuurcentrum Ameland', 53.4502, 5.7749, 0, '//cdn.museum.nl/cards/700x394/59a99a22-562a-4ebd-84db-259e52d6f6cb\\Natuurcentrum_6251.jpg'),
('/museum/Bonnefantenmuseum/Bonnefantenmuseum.aspx', 'Bonnefantenmuseum', 50.8425, 5.70204, 0, '//cdn.museum.nl/cards/700x394/b03f4521-1108-442a-b146-f8ec9f04f0dc\\Bonnefantenmuseum, 2006, foto Kim Zwarts.jpg'),
('/museum/Nederlands+Watermuseum/Het+Nederlands+Watermuseum.aspx', 'Nederlands Watermuseum', 51.9884, 5.90098, 0, '//cdn.museum.nl/cards/700x394/80c36c83-100a-4cfc-ad08-9b4e9be99a9b\\Opa&omadag-orgineel-300dpi.jpg'),
('/museum/Museum+Flehite/Museum+Flehite.aspx', 'Museum Flehite', 52.1568, 5.38618, 0, '//cdn.museum.nl/cards/700x394/80d686b6-578d-4e29-9b76-cf8a392348a3\\Exterieur Flehite sept.2015- 01 kleiner.jpg'),
('/museum/Buitenplaats+Kasteel+Wijlre/Kasteel+Wijlre.aspx', 'Buitenplaats Kasteel Wijlre', 50.8289, 5.88904, 0, '//cdn.museum.nl/cards/700x394/10328e88-1389-484c-bb3d-20422e0ea2a9\\buitenplaats Kasteel Wijlre.jpg'),
('/museum/Museum+Collectie+Krop/Museum+Hildo+Krop.aspx', 'Museum Collectie Krop', 52.7854, 6.11229, 0, '//cdn.museum.nl/cards/700x394/1b726858-f1c6-464a-a1bc-f0c6d1bb0f10\\Hildo Krop zelf.jpg'),
('/museum/Museum+Slager/Museum+Slager.aspx', 'Museum Slager', 51.6877, 5.30976, 0, '//cdn.museum.nl/cards/700x394/fd0a7940-db07-4048-900e-f697909401ea\\Het rode mutsje.jpg'),
('/museum/Museum+van+Bommel+van+Dam/Museum+Van+Bommel+van+Dam.aspx', 'Museum van Bommel van Dam', 51.3673, 6.1713, 0, '//cdn.museum.nl/cards/700x394/3f995a99-48be-4784-ad6c-88eb6c7dbe7a\\VAn Bommel Van Dam logo 3.jpg'),
('/museum/Museum+Abdijkerk/Museum+Abdijkerk.aspx', 'Museum Abdijkerk', 51.1608, 5.84153, 0, '//cdn.museum.nl/cards/700x394/musnieuw/museumabdijkerk.jpg'),
('/museum/mij+%7c+museum+ijsselstein/MIJ+l+Museum+IJsselstein.aspx', 'mij | museum ijsselstein', 52.0203, 5.04758, 0, '//cdn.museum.nl/cards/700x394/6527c17e-abe8-4b80-acce-09f2d65f9ec6\\Nicolas Dings, Mnemosyne, 1996.jpg'),
('/museum/Kasteel+Doorwerth/Kasteel+Doorwerth.aspx', 'Kasteel Doorwerth ', 51.9668, 5.78865, 0, '//cdn.museum.nl/cards/700x394/9dee2791-00fa-4fe6-9470-1c7536da0154\\Doorwerth-kasteel-vooraanzicht-gids.jpg'),
('/museum/Museum+Tromp%27s+Huys/Museum+Tromp%27s+Huys.aspx', 'Museum Tromp\'s Huys', 53.2954, 5.06745, 0, '//cdn.museum.nl/cards/700x394/20596367-0f02-440a-a332-84d96dc48d91\\tromphuis.jpg'),
('/museum/Museum+Rotterdam+%e2%80%9940-%e2%80%9945+NU/Museum+Rotterdam+%e2%80%9940-%e2%80%9945+NU.aspx', 'Museum Rotterdam â€™40-â€™45 NU', 51.9095, 4.45914, 0, '//cdn.museum.nl/cards/700x394/3998e3d1-304b-49ff-87b6-c1f3e2c67132\\Museum Rotterdam 40 45 NU.jpg'),
('/museum/Museum+Klooster+Ter+Apel/Museum+Klooster+Ter+Apel.aspx', 'Museum Klooster Ter Apel', 52.876, 7.07516, 0, '//cdn.museum.nl/cards/700x394/b6045b2f-76d6-4ad5-8469-2e5185a6758b\\Klooster Ter Apel luchtfoto.jpg'),
('/museum/Museon/Museon.aspx', 'Museon', 52.0891, 4.28071, 0, '//cdn.museum.nl/cards/700x394/75730ffb-c49f-4a49-ab6e-f8da61e7d23e\\gevel_museon_004_1920.jpg'),
('/museum/Museum+Joure/Museum+Joure.aspx', 'Museum Joure', 52.9679, 5.79686, 0, '//cdn.museum.nl/cards/700x394/082c8d55-7349-4c73-8975-968138a6fc6d\\museum joure.jpg'),
('/museum/Kasteel+Duivenvoorde/Kasteel+Duivenvoorde.aspx', 'Kasteel Duivenvoorde', 52.1113, 4.41742, 0, '//cdn.museum.nl/cards/700x394/b4a48a94-1a73-44bb-94a9-0ca21bb22045\\duivenvoorde.jpg'),
('/museum/Zandvoorts+Museum/Zandvoorts+Museum.aspx', 'Zandvoorts Museum', 52.3727, 4.5291, 0, '//cdn.museum.nl/cards/700x394/3f6a0a78-4d28-40de-82c4-4b7569a587eb\\museum zandvoort.jpg'),
('/museum/Marinemuseum/Marinemuseum.aspx', 'Marinemuseum', 52.9637, 4.77219, 0, '//cdn.museum.nl/cards/700x394/231f10a6-f6b9-48a9-a3e2-106427b8d371\\DD399607-klein.jpg'),
('/museum/Nationaal+Archief/Nationaal+Archief.aspx', 'Nationaal Archief', 52.0811, 4.32643, 0, '//cdn.museum.nl/cards/700x394/621831b6-1654-4636-ae48-f7786cf97409\\M9888 Nationaal Archief Foto Jan Zweerts - Zijden kaarten NL BE 1929- Nationaal Archief.jpg'),
('/museum/Tassenmuseum+Hendrikje/Tassenmuseum+Hendrikje.aspx', 'Tassenmuseum Hendrikje', 52.3652, 4.89686, 0, '//cdn.museum.nl/cards/700x394/0989aa4f-e965-4d75-993d-c6016a12ae74\\Tassenmuseum Hendrikje vast.jpg'),
('/museum/Frans+Hals+Museum+Hof/Frans+Hals+Museum+Hof.aspx', 'Frans Hals Museum Hof', 52.3766, 4.63368, 0, '//cdn.museum.nl/cards/700x394/c20b3fbd-0a13-4654-9c6e-9e04792d2939\\Binnentuin Frans Hals Museum Haarlem 1920x.jpg'),
('/museum/Chabot+Museum/Chabot+Museum.aspx', 'Chabot Museum', 51.9147, 4.47238, 0, '//cdn.museum.nl/cards/700x394/407fadc5-f16f-4ca6-b591-0bb69d07a6bb\\chabot.jpg'),
('/museum/Industrieel+Museum+Zeeland/Industrieel+Museum+.aspx', 'Industrieel Museum Zeeland', 51.2314, 3.80086, 0, '//cdn.museum.nl/cards/700x394/2272c020-f552-463e-9d6e-7953dcba4d6b\\industrieel museum opening 2 (19).jpg'),
('/museum/Het+Scheepvaartmuseum/Het+Scheepvaartmuseum+.aspx', 'Het Scheepvaartmuseum', 52.3708, 4.91648, 0, '//cdn.museum.nl/cards/700x394/04b8b36a-a8fb-4dc0-987d-076bf040e338\\VOC schip enHSM campagnebeeld.jpg'),
('/museum/Historisch+Museum+De+Bevelanden/Historisch+Museum+De+Bevelanden.aspx', 'Historisch Museum De Bevelande', 51.5027, 3.88995, 0, '//cdn.museum.nl/cards/700x394/musnieuw/DeBevelanden.jpg'),
('/museum/Museum+Helmond/Museum+Helmond.aspx', 'Museum Helmond', 51.4779, 5.65019, 0, '//cdn.museum.nl/cards/700x394/ef5d4999-3535-4dca-8c44-e890de9d2bad\\Press-Res-20190310-Opening-Karin-Hanssen-FSJ-046.jpg'),
('/museum/Louwman+Museum/Louwman+Museum.aspx', 'Louwman Museum', 52.0996, 4.34863, 0, '//cdn.museum.nl/cards/700x394/8bf4a749-26df-4c0a-bece-5f99b8833b48\\M9950 Louwman.jpg'),
('/museum/Museum+%27De+Tien+Malen%27/Historisch+Museum+De+Tien+Malen.aspx', 'Museum \'De Tien Malen\'', 52.2518, 5.62636, 0, '//cdn.museum.nl/cards/700x394/musnieuw/museumdetienmalen.jpg'),
('/museum/Watersnoodmuseum/Watersnoodmuseum.aspx', 'Watersnoodmuseum', 51.6176, 3.98262, 0, '//cdn.museum.nl/cards/700x394/13d691a6-2b9b-45cf-8628-f288c43f6584\\watersnoodmuseum anwb.jpg'),
('/museum/Museum+Het+Valkhof/Museum+Het+Valkhof.aspx', 'Museum Het Valkhof', 51.846, 5.87132, 0, '//cdn.museum.nl/cards/700x394/330ea724-a605-4dae-9053-89221a1677f5\\museum-het-valkhof.jpg'),
('/museum/Museum+de+Pelgrim/Museum+de+Pelgrim.aspx', 'Museum de Pelgrim', 52.3125, 6.9316, 0, '//cdn.museum.nl/cards/700x394/f4e9f2b7-c840-448f-abd3-59775340168b\\7 kleiner.jpg'),
('/museum/Mauritshuis/Mauritshuis.aspx', 'Mauritshuis', 52.0805, 4.3143, 0, '//cdn.museum.nl/cards/700x394/f974bd0a-167e-4b1a-8a42-c12fc8cca931\\Meisjemetdeparel_site_museumvereniging.jpg'),
('/museum/Museum+%27De+Roos%27/Museum+De+Roos.aspx', 'Museum \'De Roos\'', 51.7008, 4.85981, 0, '//cdn.museum.nl/cards/700x394/9f488528-97b3-4550-a182-aff930b51522\\logo de roos.jpg'),
('/museum/Biesbosch+MuseumEiland/Biesbosch+MuseumEiland.aspx', 'Biesbosch MuseumEiland', 51.7654, 4.77172, 0, '//cdn.museum.nl/cards/700x394/39708318-c30c-418c-ad1f-3f0748c9f3da\\biesbosch.jpg'),
('/museum/Weegschaalmuseum/Weegschaalmuseum.aspx', 'Weegschaalmuseum', 52.2946, 5.16275, 0, '//cdn.museum.nl/cards/700x394/15023147-91ba-4e6a-9a10-5f485838f4bc\\Weegschaalmuseum2.jpg'),
('/museum/Titus+Brandsma+Museum/Titus+Brandsma+Museum.aspx', 'Titus Brandsma Museum', 53.0632, 5.52307, 0, '//cdn.museum.nl/cards/700x394/musnieuw/moeder.titusbrandsma.jpg'),
('/museum/Gemeentemuseum+Weert/Gemeentemuseum+Weert.aspx', 'Gemeentemuseum Weert', 51.2535, 5.70647, 0, '//cdn.museum.nl/cards/700x394/plaatjesbank/gem mus weert 7611/7611_jacob_v_horne_kapelzaa.jpg'),
('/museum/Natuurhistorisch+Museum+Rotterdam/Het+Natuurhistorisch+Museum+.aspx', 'Natuurhistorisch Museum Rotter', 51.9123, 4.4733, 0, '//cdn.museum.nl/cards/700x394/c7f8493f-8127-4b43-8ff8-d90a6318f407\\natuur historisch rotterdam.jpg'),
('/museum/Museum+de+Buitenplaats/Museum+De+Buitenplaats+.aspx', 'Museum de Buitenplaats', 53.1341, 6.56387, 0, '//cdn.museum.nl/cards/700x394/musnieuw/museumdebuitenplaats.jpg'),
('/museum/Huizer+Museum/Huizer+Museum+Het+Schoutenhuis.aspx', 'Huizer Museum', 52.3, 5.23446, 0, '//cdn.museum.nl/cards/700x394/8a77777f-6f85-4f85-9b6a-360fc5f60c5a\\Huizer Museum[1].jpg'),
('/museum/Nationaal+Biermuseum+De+Boom/Biermuseum+De+Boom.aspx', 'Nationaal Biermuseum De Boom', 52.6323, 4.75074, 0, '//cdn.museum.nl/cards/700x394/88d49c46-4a63-4d26-af06-952d1266c73a\\biermuseum de boom.jpg'),
('/museum/Westfries+Museum/Westfries+Museum.aspx', 'Westfries Museum', 52.6392, 5.05896, 0, '//cdn.museum.nl/cards/700x394/65b21717-3289-45e8-aa7b-270654f16086\\Westfries Museum.jpg'),
('/museum/Groninger+Museum/Groninger+Museum.aspx', 'Groninger Museum', 53.2124, 6.56606, 0, '//cdn.museum.nl/cards/700x394/088cd33d-95f5-41aa-910c-b0c824514fe2\\3.jpg'),
('/museum/Amsterdam+Pipe+Museum/Amsterdam+Pipe+Museum.aspx', 'Amsterdam Pipe Museum', 52.3642, 4.8853, 0, '//cdn.museum.nl/cards/700x394/d8a1e2fc-b96a-4507-91d4-38843bb62c7c\\AmsterdamPipe Museum_10.jpg'),
('/museum/Eye+Filmmuseum/Eye+Filmmuseum.aspx', 'Eye Filmmuseum', 52.3847, 4.90037, 0, '//cdn.museum.nl/cards/700x394/ffcc749f-b51d-43ff-ab57-07cfb0e2c2ac\\2012-02-07_EYE_fotoRenedenEngelsman_uitsnede.jpg'),
('/museum/Brabants+Museum+Oud+Oosterhout/Brabants+Museum+Oud+Oosterhout.aspx', 'Brabants Museum Oud Oosterhout', 51.6315, 4.84189, 0, '//cdn.museum.nl/cards/700x394/musnieuw/brabantsmuseumoudoosterhout.jpg'),
('/museum/Jopie+Huisman+Museum/Jopie+Huisman+Museum.aspx', 'Jopie Huisman Museum', 52.9798, 5.44371, 0, '//cdn.museum.nl/cards/700x394/e7ce7ce9-93b2-4f7b-9273-341099054157\\JopieHuisman.jpg'),
('/museum/Geologisch+Museum+Hofland/Geologisch+Museum+Hofland.aspx', 'Geologisch Museum Hofland', 52.2464, 5.20782, 0, '//cdn.museum.nl/cards/700x394/musnieuw/geologisch-museum-hofland.jpg'),
('/museum/Het+Cuypershuis/Cuypershuis.aspx', 'Het Cuypershuis', 51.1882, 5.98839, 0, '//cdn.museum.nl/cards/700x394/77525df7-2ee7-453e-8e58-3a65e74459b9\\Cuypershuis inrichting Harry Segers.jpg'),
('/museum/Science+Centre+Delft/Science+Centre+Delft.aspx', 'Science Centre Delft', 52.0071, 4.3695, 0, '//cdn.museum.nl/cards/700x394/e46a4b7d-7293-4eb6-a278-248f13988992\\05.jpg'),
('/museum/Stadsmuseum+Woerden/Stadsmuseum+Woerden.aspx', 'Stadsmuseum Woerden', 52.0861, 4.88455, 0, '//cdn.museum.nl/cards/700x394/bf55c463-ec56-49bf-bdc5-18705c3bee78\\landschap-schilderij-Leo-Gestel.jpg'),
('/museum/Museum+Het+Grachtenhuis+/Museum+Het+Grachtenhuis+.aspx', 'Museum Het Grachtenhuis ', 52.3679, 4.88631, 0, '//cdn.museum.nl/cards/700x394/96aec1ad-a622-4822-b7ca-df028271af94\\LOWRES Het Grachtenhuis_02Plannenkamer-Foto Thijs Wolzak.jpg'),
('/museum/Gelders+Geologisch+Museum/Gelders+Geologisch+Museum.aspx', 'Gelders Geologisch Museum', 51.9985, 5.97162, 0, '//cdn.museum.nl/cards/700x394/plaatjesbank/gelders geologisch museum 9317/9317_versteend_hout_1.jpg'),
('/museum/Kasteel+Hoensbroek/Kasteel+Hoensbroek.aspx', 'Kasteel Hoensbroek', 50.9166, 5.91805, 0, '//cdn.museum.nl/cards/700x394/0f1b71f1-4a6d-487a-b0d4-c61c298ab2a0\\M9743-juni2019hoensbroek.jpg'),
('/museum/Zuiderzeemuseum/Zuiderzeemuseum.aspx', 'Zuiderzeemuseum', 52.7031, 5.29703, 0, '//cdn.museum.nl/cards/700x394/aed9d4d7-4948-4928-886d-b9c0edb9ed11\\Zuiderzeemuseum anwb.jpg'),
('/museum/Fries+Scheepvaartmuseum/Fries+Scheepvaart+Museum%3b+Sneker+Oudheidkamer.aspx', 'Fries Scheepvaartmuseum', 53.0323, 5.66314, 0, '//cdn.museum.nl/cards/700x394/6a27cde8-05bc-4b97-87e6-39a04d354fdb\\fries scheepvaartmuseum.jpg'),
('/museum/Maritiem+Museum+Rotterdam/Maritiem+Museum+.aspx', 'Maritiem Museum Rotterdam', 51.9175, 4.48261, 0, '//cdn.museum.nl/cards/700x394/a4732cbc-49b1-4d18-b305-abbbb76d2e22\\M7170 MaritiemMuseumRotterdam_Annigje_fotografieMarcodeSwart.jpg'),
('/museum/Museum+%27t+Behouden+Huys/Terschellingmuseum+%27t+Behouden+Huys.aspx', 'Museum \'t Behouden Huys', 53.3577, 5.2144, 0, '//cdn.museum.nl/cards/700x394/72e65759-89ee-4a59-88aa-eae7071a47cb\\voorgevels.jpg'),
('/museum/Joods+Historisch+Museum/Joods+Historisch+Museum.aspx', 'Joods Historisch Museum', 52.3673, 4.90391, 0, '//cdn.museum.nl/cards/700x394/plaatjesbank/Joods Historsisch Museum 5007/5007_Joods_Historisch_3.jpg'),
('/museum/Cube+Design+Museum/Cube+design+museum.aspx', 'Cube Design Museum', 50.8615, 6.05857, 0, '//cdn.museum.nl/cards/700x394/50c14d35-4a12-4895-be8a-faba44ac1039\\Cube.jpg'),
('/museum/Stedelijk+Museum+Vianen/Stedelijk+Museum+Vianen.aspx', 'Stedelijk Museum Vianen', 51.9928, 5.09268, 0, '//cdn.museum.nl/cards/700x394/plaatjesbank/stedmus vianen 3031/3031_shilderij_ruiter_2.jpg'),
('/museum/Openluchtmuseum+Eynderhoof/Openluchtmuseum+Eynderhoof.aspx', 'Openluchtmuseum Eynderhoof', 51.2766, 5.77734, 0, '//cdn.museum.nl/cards/700x394/004f36de-19d4-46d9-9919-62ea00cfb17c\\IMG_0908.JPG'),
('/museum/Stedelijk+Museum+Schiedam/Stedelijk+Museum+Schiedam.aspx', 'Stedelijk Museum Schiedam', 51.9161, 4.39805, 0, '//cdn.museum.nl/cards/700x394/5791b041-edc4-4d87-a6c9-de4758a24725\\SMS.jpg'),
('/museum/BAK%2c+basis+voor+actuele+kunst/BAK%2c+basis+voor+actuele+kunst.aspx', 'BAK, basis voor actuele kunst', 52.0945, 5.11774, 0, '//cdn.museum.nl/cards/700x394/c190a13c-c58a-4f76-8c75-fe46f008e50b\\BAK voor site.jpg'),
('/museum/Dordrechts+Museum/Dordrechts+Museum.aspx', 'Dordrechts Museum', 51.8145, 4.67174, 0, '//cdn.museum.nl/cards/700x394/6d161036-ad16-45f8-b5cf-eedff40a86ef\\DM.Zaagman.Gezin bij Schouman.jpg'),
('/museum/Nationaal+Reddingmuseum+Dorus+Rijkers/Nationaal+Reddingmuseum+Dorus+Rijkers.aspx', 'Nationaal Reddingmuseum Dorus ', 52.9584, 4.76866, 0, '//cdn.museum.nl/cards/700x394/a634b1f1-e9cc-494e-a62c-f5370b937edf\\insulinde 2009.jpg'),
('/museum/Kinderboekenmuseum/Kinderboekenmuseum.aspx', 'Kinderboekenmuseum', 52.082, 4.32699, 0, '//cdn.museum.nl/cards/700x394/kinderboekenmus2.jpg'),
('/museum/Museum+Veere+Stadhuismuseum/Museum+Veere+Stadhuismuseum.aspx', 'Museum Veere Stadhuismuseum', 51.549, 3.66773, 0, '//cdn.museum.nl/cards/700x394/musnieuw/StadhuismuseumDeVierschaar.jpg'),
('/museum/Botanische+Tuin+De+Kruidhof/Botanische+Tuin+De+Kruidhof.aspx', 'Botanische Tuin De Kruidhof', 53.2553, 6.1407, 0, '//cdn.museum.nl/cards/700x394/03afcd6c-b392-4dc0-a1ff-b09eabd6e93a\\avondwandeling.jpg'),
('/museum/De+Casteelse+Poort/Historisch+Museum+De+Casteelse+Poort.aspx', 'De Casteelse Poort', 51.9648, 5.66569, 0, '//cdn.museum.nl/cards/700x394/4fc8967d-1205-4deb-b215-596c37c8a6a4\\M7112 Museum Casteelse Poort.jpg'),
('/museum/Museum+Valkenburg/Museum+Valkenburg.aspx', 'Museum Valkenburg', 50.8637, 5.83205, 0, '//cdn.museum.nl/cards/700x394/d8fd44b3-1c74-42ac-ad8d-38b9b1591fe7\\M7335 Land van Valkenburg - Guillaume Stassen \'Limburg\'  olieverf op doek 1950.jpg'),
('/museum/Gemeentemuseum+Het+Land+van+Thorn/Gemeentemuseum+Het+Land+van+Thorn+.aspx', 'Gemeentemuseum Het Land van Th', 51.1608, 5.84056, 0, '//cdn.museum.nl/cards/700x394/musnieuw/Thorn.jpg'),
('/museum/SCHUNCK/SCHUNCK+Glaspaleis.aspx', 'SCHUNCK', 50.8879, 5.9794, 0, '//cdn.museum.nl/cards/700x394/glaspaleis binnen.JPG'),
('/museum/Vincent+van+GoghHuis/Vincent+van+GoghHuis.aspx', 'Vincent van GoghHuis', 51.4725, 4.66493, 0, '//cdn.museum.nl/cards/700x394/Van GoghHuis zaal.jpg'),
('/museum/De+Appel/De+Appel.aspx', 'De Appel', 52.3573, 4.83769, 0, '//cdn.museum.nl/cards/700x394/aaacf500-81d6-4156-9438-fc8a41fe7af8\\de appel.jpg'),
('/museum/Hermitage+Amsterdam/Hermitage+Amsterdam.aspx', 'Hermitage Amsterdam', 52.3653, 4.90254, 0, '//cdn.museum.nl/cards/700x394/93625de7-bcbe-400a-849c-0a57035942c4\\hermitage-algemeen-38.jpg'),
('/museum/Bakkerijmuseum+De+Oude+Bakkerij/Bakkerijmuseum+De+Oude+Bakkerij.aspx', 'Bakkerijmuseum De Oude Bakkeri', 52.7733, 5.10613, 0, '//cdn.museum.nl/cards/700x394/d77d3160-15a1-4b62-a7a7-f4d76a3b3c2b\\ZelfBakken_121219-099.jpg'),
('/museum/Nederlands+Zouavenmuseum/Nederlands+Zouavenmuseum.aspx', 'Nederlands Zouavenmuseum', 51.5889, 4.52665, 0, '//cdn.museum.nl/cards/700x394/c1148e2b-3f38-4f36-be47-2f11c5a2fc91\\zaal 2 - mentanavaandel.jpg'),
('/museum/Gorcums+Museum/Gorcums+Museum.aspx', 'Gorcums Museum', 51.8296, 4.97436, 0, '//cdn.museum.nl/cards/700x394/8c4c6784-7579-4824-a74c-e51c0942209d\\Gorcums Museum header.jpg'),
('/museum/Wereldmuseum+Rotterdam/Wereldmuseum+Rotterdam.aspx', 'Wereldmuseum Rotterdam', 51.908, 4.48061, 0, '//cdn.museum.nl/cards/700x394/ebc14305-2a6c-4a77-b205-48d202ca9562\\M3025 Wereldmuseum Rotterdam.jpg'),
('/museum/Markiezenhof/Het+Markiezenhof.aspx', 'Markiezenhof', 51.4958, 4.28471, 0, '//cdn.museum.nl/cards/700x394/7e707604-de20-441b-95d8-572ac1031af4\\markiezenhof.jpg'),
('/museum/Stadsarchief+Amsterdam/Stadsarchief+Amsterdam.aspx', 'Stadsarchief Amsterdam', 52.3654, 4.89282, 0, '//cdn.museum.nl/cards/700x394/b9a24643-c103-4480-af3a-62e66dccf304\\AF_TentoonNienhuisFotoDix (4).jpg'),
('/museum/Museum+Weesp/Museum+Weesp.aspx', 'Museum Weesp', 52.3068, 5.04275, 0, '//cdn.museum.nl/cards/700x394/d62f606e-165f-4346-950c-1b5b99a2461f\\museum weesp.jpg'),
('/museum/Huis+Doorn/Huis+Doorn.aspx', 'Huis Doorn', 52.0324, 5.34111, 0, '//cdn.museum.nl/cards/700x394/3d1e4d3f-65fb-4229-af22-1dbc8ce6fedc\\Huis Doorn met borstbeeld Wilhelm.jpg'),
('/museum/Stedelijk+Museum+Zutphen+/Stedelijk+Museum+Zutphen.aspx', 'Stedelijk Museum Zutphen', 52.1399, 6.19474, 0, '//cdn.museum.nl/cards/700x394/8f68b535-022a-4f18-bcec-a39a4c89755e\\SMZ Vrijheid en Verlichting GOED - Folder.jpg'),
('/museum/Japanmuseum+SieboldHuis/Japanmuseum+SieboldHuis.aspx', 'Japanmuseum SieboldHuis', 52.1597, 4.48461, 0, '//cdn.museum.nl/cards/700x394/7354ba6a-a93d-40e5-b87e-ce55daae5a4d\\prenten panoramakamer.jpg'),
('/museum/Museum+Drachten+/Museum+Drachten.aspx', 'Museum Drachten ', 53.1042, 6.09797, 0, '//cdn.museum.nl/cards/700x394/164fe021-44f5-48ac-a4c1-dc721971c6bc\\Template.jpg'),
('/museum/Warkums+Erfskip/Museum+Warkums+Erfskip.aspx', 'Warkums Erfskip', 52.9794, 5.44313, 0, '//cdn.museum.nl/cards/700x394/c426b5bb-cfac-4847-9b7f-87a47d7eca1d\\warkums.jpg'),
('/museum/Museum+Nederlandse+Cavalerie/Museum+Nederlandse+Cavalerie.aspx', 'Museum Nederlandse Cavalerie', 52.1489, 5.35297, 0, '//cdn.museum.nl/cards/700x394/bc2aa258-fb38-4c7e-9e54-8f16547e47de\\7002.jpg'),
('/museum/GRID+Grafisch+Museum+Groningen/GRID+Grafisch+Museum+Groningen.aspx', 'GRID Grafisch Museum Groningen', 53.2196, 6.57026, 0, '//cdn.museum.nl/cards/700x394/5da7254d-844f-4485-8fed-4bf422bdf30d\\GRID.jpg'),
('/museum/Rijssens+Museum/Rijssens+Museum.aspx', 'Rijssens Museum', 52.3097, 6.53553, 0, '//cdn.museum.nl/cards/700x394/3f6aae47-4313-4978-aed8-e95eb5513c71\\rijssensmuseum.jpg'),
('/museum/Nederlands+Fotomuseum/Nederlands+Fotomuseum.aspx', 'Nederlands Fotomuseum', 51.9063, 4.48823, 0, '//cdn.museum.nl/cards/700x394/3eb21ca0-712f-471f-9d55-2ed7dd5937ca\\nederlands fotomuseum.jpg'),
('/museum/+Continium+discovery+center/+Continium+discovery+center.aspx', ' Continium discovery center', 50.8615, 6.05857, 0, '//cdn.museum.nl/cards/700x394/e0b539e5-0525-4b2a-b7c5-166041e626fd\\continium KP 1.jpg'),
('/museum/Speelgoedmuseum/Speelgoedmuseum+Deventer.aspx', 'Speelgoedmuseum', 52.251, 6.15961, 0, '//cdn.museum.nl/cards/700x394/35afe5ee-c77c-4f12-83db-354dd0e6fba9\\Speelgoedmuseum aug 2018-8.jpg'),
('/museum/Museum+Wierdenland+Ezinge/Museum+Wierdenland.aspx', 'Museum Wierdenland Ezinge', 53.3083, 6.44042, 0, '//cdn.museum.nl/cards/700x394/musnieuw/museumwierdenland.jpg'),
('/museum/Kasteel+Museum+Sypesteyn/Kasteel-Museum+Sypesteyn.aspx', 'Kasteel Museum Sypesteyn', 52.1937, 5.12348, 0, '//cdn.museum.nl/cards/700x394/musnieuw/kasteel-museumsypesteyn.jpg'),
('/museum/Museum+Collectie+Brands/Museum+Collectie+Brands.aspx', 'Museum Collectie Brands', 52.7501, 6.96998, 0, '//cdn.museum.nl/cards/700x394/780fccd6-2f26-45a9-b9b4-ee2fe0278c66\\collectiebrands.jpg'),
('/museum/Museum+Speelklok/Museum+Speelklok+.aspx', 'Museum Speelklok', 52.0908, 5.1194, 0, '//cdn.museum.nl/cards/700x394/451d59f0-f837-4123-961e-476da0cee11d\\M4032PROFIEL.jpg'),
('/museum/Botanische+Tuinen+Utrecht/Botanische+Tuinen+Universiteit+Utrecht+.aspx', 'Botanische Tuinen Utrecht', 52.0878, 5.16759, 0, '//cdn.museum.nl/cards/700x394/f8147bad-f2aa-47fd-9e33-4f603eda46e5\\botanische tuinen anwb.jpg'),
('/museum/Museum+Broeker+Veiling/Museum+Broeker+Veiling.aspx', 'Museum Broeker Veiling', 52.68, 4.80732, 0, '//cdn.museum.nl/cards/700x394/1eb20b92-8404-47f8-83d4-75d072e55567\\broekerveiling anwb.jpg'),
('/museum/Rijksmuseum+Twenthe/Rijksmuseum+Twenthe.aspx', 'Rijksmuseum Twenthe', 52.2277, 6.89708, 0, '//cdn.museum.nl/cards/700x394/61e59b98-7912-426c-ba64-1fc48b955b73\\George Hendrik Breitner, Meisje in witte kimono, ca 1895.jpg'),
('/museum/Stadsmuseum+Doetinchem/Stadsmuseum+Doetinchem.aspx', 'Stadsmuseum Doetinchem', 51.9672, 6.28974, 0, '//cdn.museum.nl/cards/700x394/5298c576-75f5-49bf-bfec-8a8d357e96d6\\DSC_0108.JPG'),
('/museum/Miramar+Zeemuseum/Miramar+Zeemuseum.aspx', 'Miramar Zeemuseum', 52.8504, 6.1964, 0, '//cdn.museum.nl/cards/700x394/plaatjesbank/zeemusmiramar vledder 9120/zaal2 klein.jpg'),
('/museum/Tropenmuseum/Tropenmuseum.aspx', 'Tropenmuseum', 52.3628, 4.92265, 0, '//cdn.museum.nl/cards/700x394/8858a0ae-fcf7-4f30-b133-1ba460112041\\Tropenmuseum.jpg'),
('/museum/Nationaal+Brandweermuseum/Nationaal+Brandweermuseum.aspx', 'Nationaal Brandweermuseum', 51.8249, 4.13002, 0, '//cdn.museum.nl/cards/700x394/3970053d-1c0a-4a98-ae77-c03d5eb99d4a\\M7052 Ahrens-Fox 1927 29.JPG'),
('/museum/Het+Spinozahuis/Het+Spinozahuis.aspx', 'Het Spinozahuis', 52.1915, 4.43715, 0, '//cdn.museum.nl/cards/700x394/musnieuw/Spinozahuis.jpg'),
('/museum/Nederlands+Zilvermuseum/Nederlands+Zilvermuseum.aspx', 'Nederlands Zilvermuseum', 51.9471, 4.85231, 0, '//cdn.museum.nl/cards/700x394/734a6b3a-9b55-4012-b43b-1d88be7ee1b1\\21.jpg'),
('/museum/Speelgoedmuseum+Kinderwereld+Roden/Museum+Kinderwereld.aspx', 'Speelgoedmuseum Kinderwereld R', 53.1352, 6.43215, 0, '//cdn.museum.nl/cards/700x394/065e0761-38e8-46f2-a877-5c1607a3032d\\Tut-Tut Lehmann groot liggend  Jos.jpg'),
('/museum/Openbaar+Vervoer+%26+Speelgoed+Museum+Doetinchem/Openbaar+Vervoermuseum.aspx', 'Openbaar Vervoer & Speelgoed M', 51.9587, 6.29361, 0, '//cdn.museum.nl/cards/700x394/d813f752-9dc6-4dd7-b766-5f8f3b90c6ce\\Openbaar Vervoer Museum.jpg'),
('/museum/Museum+Stad+Appingedam/Museum+Stad+Appingedam.aspx', 'Museum Stad Appingedam', 53.3203, 6.85767, 0, '//cdn.museum.nl/cards/700x394/2943da38-508e-4801-8e69-6fd26ea1e880\\Appingedam2.jpg'),
('/museum/Kasteel+Huis+Bergh/Kasteel+Huis+Bergh.aspx', 'Kasteel Huis Bergh', 51.8747, 6.24076, 0, '//cdn.museum.nl/cards/700x394/f81b3453-abf9-4fcb-a31d-e2fa9f303c2a\\kasteel huis bergh.jpg'),
('/museum/Agrarisch+Museum+Westerhem/Agrarisch+Museum+Westerhem.aspx', 'Agrarisch Museum Westerhem', 52.5466, 4.91112, 0, '//cdn.museum.nl/cards/700x394/3ac6ef6c-8a2a-423c-b540-160e58f88dcb\\Agrarisch Museum Westerhem buitenkant.JPG'),
('/museum/Tongerlohuys/Museum+Tongerlohuys.aspx', 'Tongerlohuys', 51.5335, 4.45901, 0, '//cdn.museum.nl/cards/700x394/f4e1ea55-0e44-45ab-a990-051f22034495\\Tongerlohuys verkleind 1.jpg'),
('/museum/Kazemattenmuseum+Kornwerderzand/Kazemattenmuseum+Kornwerderzand.aspx', 'Kazemattenmuseum Kornwerderzan', 53.0745, 5.33982, 0, '//cdn.museum.nl/cards/700x394/e6561b2e-5d00-4036-9274-9af0567e8ff6\\Kazemattenmuseum.jpg'),
('/museum/Nationaal+Vlasserij-Suikermuseum/Nationaal+Vlasserij-Suikermuseum.aspx', 'Nationaal Vlasserij-Suikermuse', 51.6596, 4.52607, 0, '//cdn.museum.nl/cards/700x394/386b408b-5205-442b-8497-5f6d923aecf2\\img270.jpg'),
('/museum/Museum+Bussemakerhuis/Museum+Bussemakerhuis.aspx', 'Museum Bussemakerhuis', 52.2993, 6.76064, 0, '//cdn.museum.nl/cards/700x394/fc46b99f-2bf5-48fd-ade9-39910f8c5b57\\Voorkant pand.jpg'),
('/museum/Nationaal+Orgelmuseum+/Nationaal+Orgelmuseum.aspx', 'Nationaal Orgelmuseum', 52.4488, 5.83509, 0, '//cdn.museum.nl/cards/700x394/1370742d-d3f7-42d4-a1dc-d1a26b48da58\\2017_Elburg (37).JPG'),
('/museum/TENT/TENT.aspx', 'TENT', 51.9155, 4.47706, 0, '//cdn.museum.nl/cards/700x394/63736760-8ef8-4449-a926-0eafef1ec17d\\New Romantic Spirit (05.02 - 19.04.2015) Photo Janssen Adriaans  (23).jpg'),
('/museum/Museum+Tot+Zover/Nederlands+Uitvaart+Museum+Tot+Zover.aspx', 'Museum Tot Zover', 52.3462, 4.93846, 0, '//cdn.museum.nl/cards/700x394/0f2486bf-a9ee-455c-92cc-59658f9aa4cf\\_DIE0728 (1).jpg'),
('/museum/Museum+Kaap+Skil/Museum+Kaap+Skil.aspx', 'Museum Kaap Skil', 53.0392, 4.84808, 0, '//cdn.museum.nl/cards/700x394/90449708-5cb9-440e-becd-fa065251eea9\\bootje (002).jpg'),
('/museum/Museum+Elburg/Museum+Elburg.aspx', 'Museum Elburg', 52.4476, 5.83576, 0, '//cdn.museum.nl/cards/700x394/8b3e2f6a-cf6e-4980-aa28-6c81ce5d151c\\BRF-0064 (2).jpg'),
('/museum/Kasteel+Heeswijk/Kasteel+Heeswijk.aspx', 'Kasteel Heeswijk', 51.6559, 5.44116, 0, '//cdn.museum.nl/cards/700x394/42629c95-faec-447c-b9ec-200bd9058994\\buitenzijde voor foto.jpg'),
('/museum/Museum+de+Oude+Wolden/Museum+de+Oude+Wolden.aspx', 'Museum de Oude Wolden', 53.1131, 7.16197, 0, '//cdn.museum.nl/cards/700x394/2eb8b458-2dcd-4270-a91e-e85ec6bc1f33\\Aangezicht MOW.jpg'),
('/museum/Westlands+Museum/Westlands+Museum+voor+Streek-+en+Tuinbouwhistorie.aspx', 'Westlands Museum', 52.0091, 4.24629, 0, '//cdn.museum.nl/cards/700x394/4403076a-d65f-4f85-a139-4935f0b13532\\IMG_0094-min.jpg'),
('/museum/Louis+Couperus+Museum/Louis+Couperus+Museum.aspx', 'Louis Couperus Museum', 52.0886, 4.30775, 0, '//cdn.museum.nl/cards/700x394/216ab4f3-a294-48a1-b40f-e0d5eef8b0a8\\louis couperus.jpg'),
('/museum/Kasteel+Radboud/Kasteel+Radboud.aspx', 'Kasteel Radboud', 52.7724, 5.11297, 0, '//cdn.museum.nl/cards/700x394/8661787a-75b1-48e0-bd6a-8f4f98399b40\\Kasteel Radboud 2018_lage resolutie2.jpg'),
('/museum/Museum+Jan+van+der+Togt/Museum+Jan+van+der+Togt.aspx', 'Museum Jan van der Togt', 52.3023, 4.84689, 0, '//cdn.museum.nl/cards/700x394/ce171b8a-ba8e-4633-805d-00d1308c13fd\\jan van der togt.jpg'),
('/museum/Comenius+Museum/Comenius+Museum.aspx', 'Comenius Museum', 52.2973, 5.16432, 0, '//cdn.museum.nl/cards/700x394/ad4856ec-8772-43b3-9bcf-5187f3a09a68\\WunKam 03b.jpg'),
('/museum/Museum+aan+het+Vrijthof/Museum+aan+het+Vrijthof.aspx', 'Museum aan het Vrijthof', 50.8484, 5.68878, 0, '//cdn.museum.nl/cards/700x394/ffb9bb53-2628-47bf-bc8e-e8e97fb6dcb2\\Museum aan het Vrijthof.jpg'),
('/museum/Museum+Terra+Maris/Terra+Maris.aspx', 'Museum Terra Maris', 51.5697, 3.52001, 0, '//cdn.museum.nl/cards/700x394/plaatjesbank/Zeeuws biologisch museum 3020/Zeeuws-Biol-Mus-02.jpg'),
('/museum/Visserijmuseum+Breskens/Visserijmuseum+Breskens.aspx', 'Visserijmuseum Breskens', 51.3957, 3.567, 0, '//cdn.museum.nl/cards/700x394/1e3f2cf6-63e7-4db5-9e69-c467fcc41d07\\visserijmuseum breskens.JPG'),
('/museum/Waterlandsmuseum+de+Speeltoren/Waterlands+Museum+De+Speeltoren.aspx', 'Waterlandsmuseum de Speeltoren', 52.4594, 5.03573, 0, '//cdn.museum.nl/cards/700x394/musnieuw/waterlandsmuseumdespeeltoren.jpg'),
('/museum/Kasteel+Doornenburg/Kasteel+Doornenburg.aspx', 'Kasteel Doornenburg', 51.8945, 5.99903, 0, '//cdn.museum.nl/cards/700x394/9e9f65be-676e-49d4-bac0-5d1be7af1eba\\Luchtfoto.jpg'),
('/museum/Aviodrome/Nationaal+Luchtvaart-Themapark+Aviodrome.aspx', 'Aviodrome', 52.4572, 5.52949, 0, '//cdn.museum.nl/cards/700x394/1ad34b89-b883-48fb-b60c-8ab4a2a750ca\\aviodrome ANWB.jpg'),
('/museum/Museum+Van+Loon/Museum+Van+Loon.aspx', 'Museum Van Loon', 52.3635, 4.89337, 0, '//cdn.museum.nl/cards/700x394/bef2f30f-372c-48ac-94ab-31a335badce7\\M73 28 Museum Van Loon. Photo by Peter Kooijman.jpg'),
('/museum/Van+Gogh+Museum/Van+Gogh+Museum.aspx', 'Van Gogh Museum', 52.3583, 4.88113, 0, '//cdn.museum.nl/cards/700x394/4a2fed5f-da51-425e-8f34-4a43b709110c\\6012302453112832.jpg'),
('/museum/Marker+Museum/Marker+Museum.aspx', 'Marker Museum', 52.4605, 5.10618, 0, '//cdn.museum.nl/cards/700x394/musnieuw/MuseumMarken.jpg'),
('/museum/Rijksmuseum+van+Oudheden/Rijksmuseum+van+Oudheden.aspx', 'Rijksmuseum van Oudheden', 52.1585, 4.48547, 0, '//cdn.museum.nl/cards/700x394/1ab54a87-a9a5-42e2-a824-c8f704c7ba9e\\Maya & Merit Egyptisch beeld Rijksmuseum van Oudheden.jpg'),
('/museum/Museum+Vlaardingen/+Museum+Vlaardingen.aspx', 'Museum Vlaardingen', 51.9056, 4.34541, 0, '//cdn.museum.nl/cards/700x394/0869484b-eac3-44ba-bf6e-5ac57d9da38b\\Banier-Museum-juli-2015_10-08.jpg'),
('/museum/Bevrijdingsmuseum+Zeeland/Bevrijdingsmuseum+Zeeland.aspx', 'Bevrijdingsmuseum Zeeland', 51.4679, 3.74397, 0, '//cdn.museum.nl/cards/700x394/5d0a30b0-ad7e-4d9d-a096-cff5e1c5fd38\\Bevrijdingsmuseum_Moeder-neemt-afscheid-van-zoon-mobilisatie.jpg'),
('/museum/Museum+Paulina+Bisdom+van+Vliet+/Museum+Paulina+Bisdom+van+Vliet+.aspx', 'Museum Paulina Bisdom van Vlie', 52.0013, 4.7714, 0, '//cdn.museum.nl/cards/700x394/4156373a-27e5-411d-973d-49cc66fa0698\\M9527 Bisdom Van Vliet 3.JPG'),
('/museum/Museum+Opsterl%c3%a2n/Streekmuseum+Opsterl%c3%a2n.aspx', 'Museum OpsterlÃ¢n', 53.0019, 6.06336, 0, '//cdn.museum.nl/cards/700x394/a0d2eb2a-517d-4176-91d2-be612fcec0e6\\collectie 2011kleding aristocratie.jpg'),
('/museum/Kunstvereniging+Diepenheim/Kunstvereniging+Diepenheim.aspx', 'Kunstvereniging Diepenheim', 52.2007, 6.5504, 0, '//cdn.museum.nl/cards/700x394/51e2a811-f8ca-46d2-9564-f77376555bfc\\Kunstvereniging-Diepenheim.jpg'),
('/museum/Geniemuseum/Geniemuseum.aspx', 'Geniemuseum', 51.6583, 5.25689, 0, '//cdn.museum.nl/cards/700x394/ee772577-d426-4b2f-b0a6-f09b3819330f\\museumweekeinde_2017 (6).JPG'),
('/museum/CODA/CODA+Museum.aspx', 'CODA', 52.2155, 5.95843, 0, '//cdn.museum.nl/cards/700x394/486bc350-67cb-4df2-9724-436057b777d2\\Relief- IrisBodemer Foto Julian Kirschler (1).jpg'),
('/museum/Vechtstreekmuseum/Vechtstreekmuseum.aspx', 'Vechtstreekmuseum', 52.1443, 5.03233, 0, '//cdn.museum.nl/cards/700x394/7b2a47cf-0f4e-46ec-951f-45ca9a861db4\\vechtstreekmuseum.jpg'),
('/museum/Kasteel+Amerongen/Kasteel+Amerongen.aspx', 'Kasteel Amerongen', 51.9972, 5.45886, 0, '//cdn.museum.nl/cards/700x394/b5dc2a50-9e06-4748-a0a5-6f3392a5e43f\\DJI_0003.JPG'),
('/museum/Museum+Zaanse+Tijd/Museum+Zaanse+Tijd.aspx', 'Museum Zaanse Tijd', 52.4718, 4.81532, 0, '//cdn.museum.nl/cards/700x394/plaatjesbank/museum vh ned uurwerk 5036/5036_stoelklok_met_carillon.jpg'),
('/museum/Marie+Tak+van+Poortvliet+Museum/Marie+Tak+van+Poortvliet+Museum.aspx', 'Marie Tak van Poortvliet Museu', 51.5637, 3.49801, 0, '//cdn.museum.nl/cards/700x394/cc25cdec-18f5-477b-ab82-e4945dc9a845\\marietak11.jpg'),
('/museum/Embassy+of+the+Free+Mind/Embassy+of+the+Free+Mind.aspx', 'Embassy of the Free Mind', 52.3766, 4.88774, 0, '//cdn.museum.nl/cards/700x394/63619657-d020-4d63-b2bf-8e2c0579d35a\\grote sael1.jpg'),
('/museum/Van+Abbemuseum/Van+Abbemuseum.aspx', 'Van Abbemuseum', 51.4344, 5.48181, 0, '//cdn.museum.nl/cards/700x394/6885875e-14f9-4ab7-87ea-db5bd50e540c\\021018_JannesLinders.jpg'),
('/museum/Museum+Henriette+Polak/Museum+Henriette+Polak.aspx', 'Museum Henriette Polak', 52.1403, 6.19689, 0, '//cdn.museum.nl/cards/700x394/musnieuw/HenriettePolak.jpg'),
('/museum/Historisch+Museum+Den+Briel/Historisch+Museum+Den+Briel.aspx', 'Historisch Museum Den Briel', 51.9024, 4.16462, 0, '//cdn.museum.nl/cards/700x394/52333f5a-2da5-430d-a362-b401f157d38b\\BeeldmerkHMDBkopie.jpg'),
('/museum/Museum+Dokkum/Museum+Dokkum.aspx', 'Museum Dokkum', 53.3253, 6.00029, 0, '//cdn.museum.nl/cards/700x394/musnieuw/Admiraliteitshuis.jpg'),
('/museum/Hannemahuis/Gemeentemuseum+Het+Hannemahuis.aspx', 'Hannemahuis', 53.1746, 5.41924, 0, '//cdn.museum.nl/cards/700x394/hannema7.jpg'),
('/museum/Ikonenmuseum+Kampen/Ikonenmuseum+Kampen.aspx', 'Ikonenmuseum Kampen', 52.5587, 5.91527, 0, '//cdn.museum.nl/cards/700x394/plaatjesbank/Ikonenmuseum Kampen/oud testamentische triniteit.jpg'),
('/museum/COMM/COMM.aspx', 'COMM', 52.0859, 4.30164, 0, '//cdn.museum.nl/cards/700x394/e05a8fb0-1676-453c-9d49-f12d870d7c38\\DigiDaan - DD455910.jpg'),
('/museum/Verzetsmuseum+Amsterdam/Verzetsmuseum+Amsterdam.aspx', 'Verzetsmuseum Amsterdam', 52.3678, 4.91293, 0, '//cdn.museum.nl/cards/700x394/d511044d-d973-4dea-b563-5b1722a53d3a\\verzetsmuseum.JPG'),
('/museum/Museummolen+en+molenwinkel+De+Walvisch/Museummolen+en+molenwinkel+De+Walvisch.aspx', 'Museummolen en molenwinkel De ', 51.92, 4.4012, 0, '//cdn.museum.nl/cards/700x394/dbf5425d-15f7-4f5f-a61d-7e1eb5106350\\DeWalvisch_foto.jpg'),
('/museum/Cromhouthuis+%26+Bijbels+Museum/Cromhouthuis+%26+Bijbels+Museum.aspx', 'Cromhouthuis & Bijbels Museum', 52.3685, 4.88636, 0, '//cdn.museum.nl/cards/700x394/0ad9ca6d-b9a4-408d-b037-872a24cb10ac\\cromhout.jpg'),
('/museum/Streekmuseum+Schippersbeurs/Streekmuseum+Schippersbeurs+.aspx', 'Streekmuseum Schippersbeurs', 50.9479, 5.75881, 0, '//cdn.museum.nl/cards/700x394/musnieuw/Streekmuseum Schippersbeurs.jpg'),
('/museum/Pieter+Vermeulen+Museum/Pieter+Vermeulen+Museum.aspx', 'Pieter Vermeulen Museum', 52.4501, 4.63777, 0, '//cdn.museum.nl/cards/700x394/73d85565-11ed-4683-aa1c-8807956c5411\\pieter vermeulen museum.jpg'),
('/museum/Museum+De+Waag/Museum+De+Waag.aspx', 'Museum De Waag', 52.2514, 6.15997, 0, '//cdn.museum.nl/cards/700x394/cb379f7f-c4b1-4a71-ad6f-6e2cbeb3abad\\Museum de Waag.jpg'),
('/museum/%27t+Fiskersh%c3%baske/%27t+Fiskersh%c3%baske.aspx', '\'t FiskershÃºske', 53.4051, 6.0756, 0, '//cdn.museum.nl/cards/700x394/b782f0d5-ad32-426d-835c-6f7fccf24294\\JPEG_00002.jpg'),
('/museum/Nationaal+Baggermuseum/Nationaal+Baggermuseum.aspx', 'Nationaal Baggermuseum', 51.8242, 4.75693, 0, '//cdn.museum.nl/cards/700x394/fe2b3c61-bbf8-4f5f-ae33-50de9be5be5c\\scheepsmodellen varen.jpg'),
('/museum/De+Pont+museum/De+Pont+museum.aspx', 'De Pont museum', 51.5671, 5.07659, 0, '//cdn.museum.nl/cards/700x394/47ab13dd-c91f-458c-a90b-45f6ae6fb6c4\\de pont.jpg'),
('/museum/Nederlands+Bakkerijmuseum/Nederlands+Bakkerijmuseum+Het+Warme+Land.aspx', 'Nederlands Bakkerijmuseum', 52.4746, 6.07129, 0, '//cdn.museum.nl/cards/700x394/56eae305-e265-4cf2-b721-36800346309b\\M4019 Nederlands Bakkerijmuseum.jpg'),
('/museum/Verzetsmuseum+Friesland/Fries+Verzetsmuseum.aspx', 'Verzetsmuseum Friesland', 53.2028, 5.80151, 0, '//cdn.museum.nl/cards/700x394/FriesVerzetsmuseum3.jpg'),
('/museum/Museummolen+Schermerhorn/Museummolen+Schermerhorn.aspx', 'Museummolen Schermerhorn', 52.6001, 4.87341, 0, '//cdn.museum.nl/cards/700x394/74a5ee5f-4964-4f93-9868-ee7f086787dc\\museummolen.jpg'),
('/museum/Natuurmuseum+Brabant/Natuurmuseum+Brabant.aspx', 'Natuurmuseum Brabant', 51.5599, 5.08138, 0, '//cdn.museum.nl/cards/700x394/ca944594-7d8a-435d-9653-68982bc8f57a\\Potvis-1977.jpg'),
('/museum/Museum+Rotterdam+/Museum+Rotterdam+.aspx', 'Museum Rotterdam ', 51.9221, 4.48089, 0, '//cdn.museum.nl/cards/700x394/0af30424-5ecb-4c35-9cc2-95597ace6bc7\\_AD_6195-1.jpg'),
('/museum/Slot+Loevestein/Slot+Loevestein.aspx', 'Slot Loevestein', 51.8164, 5.0214, 0, '//cdn.museum.nl/cards/700x394/85aeb524-9ee9-4219-856f-f660922338fd\\07227985-Tentoonstelling.jpg'),
('/museum/Museum+Nienoord%2c+Borg+en+Nationaal+Rijtuigmuseum+/Museum+Nienoord.aspx', 'Museum Nienoord, Borg en Natio', 53.168, 6.39424, 0, '//cdn.museum.nl/cards/700x394/bc547af2-3a30-452b-b918-f918e718ed2b\\borg nienoord-frontaal.jpg'),
('/museum/Geert+Groote+Huis/Geert+Groote+Huis.aspx', 'Geert Groote Huis', 52.2535, 6.15637, 0, '//cdn.museum.nl/cards/700x394/96cb20b7-5314-4abd-8b83-ee03f0445e44\\GEERT.JPG'),
('/museum/Mariniersmuseum/Mariniersmuseum.aspx', 'Mariniersmuseum', 51.9187, 4.49156, 0, '//cdn.museum.nl/cards/700x394/7f26e6a1-4acb-4311-8cbc-78099da9e563\\mariniersmuseum anwb.jpg'),
('/museum/Kasteelru%c3%afne+-+Fluweelengrot+Valkenburg/Kasteelru%c3%afne+-+Fluweelengrot+Valkenburg.aspx', 'KasteelruÃ¯ne - Fluweelengrot V', 50.861, 5.83035, 0, '//cdn.museum.nl/cards/700x394/2d59fbbe-1689-4f5c-83ba-0f1c94cba713\\fluweelengrot.jpg'),
('/museum/Natura+Docet+Wonderryck+Twente/Natura+Docet+Wonderryck+Twente.aspx', 'Natura Docet Wonderryck Twente', 52.3708, 7.00149, 0, '//cdn.museum.nl/cards/700x394/2f0bed09-348d-413a-98af-b4cdb5681b71\\Natura Docet Wonderryck Twente - De vlucht van de Torenvalk - fotografie Arie Kwast.jpg'),
('/museum/Slot+Zuylen/Slot+Zuylen.aspx', 'Slot Zuylen', 52.1272, 5.07314, 0, '//cdn.museum.nl/cards/700x394/8bfbce5a-16eb-4690-9765-e4ee041789b3\\slot zuylen.jpg'),
('/museum/Humanity+House/Humanity+House.aspx', 'Humanity House', 52.0748, 4.30799, 0, '//cdn.museum.nl/cards/700x394/d60db414-f14d-4fe0-9d42-79b0a82562b9\\Humanity-House_Douane.jpg'),
('/museum/Zoutmuseum/Zoutmuseum+Delden.aspx', 'Zoutmuseum', 52.2628, 6.71248, 0, '//cdn.museum.nl/cards/700x394/baaed1d4-db43-4611-8bae-5d161ab227d7\\Zoutmuseum-Delden.jpg'),
('/museum/Fries+Museum/Fries+Museum.aspx', 'Fries Museum', 53.1996, 5.79242, 0, '//cdn.museum.nl/cards/700x394/e58b2827-997f-41f0-adf7-1affb94f15d4\\Fries Museum - foto Ruben van Vliet.jpg'),
('/museum/Molenmuseum+De+Valk/Molenmuseum+De+Valk.aspx', 'Molenmuseum De Valk', 52.1638, 4.48591, 0, '//cdn.museum.nl/cards/700x394/plaatjesbank/molenmuseum de valk 3016/3016_Molen_de_Valk.jpg'),
('/museum/De+Looierij/Museum+De+Looierij.aspx', 'De Looierij', 51.6237, 4.93316, 0, '//cdn.museum.nl/cards/700x394/3ed399eb-a533-4de4-a960-5bdd060d87a9\\11e.jpg'),
('/museum/Naturalis/Naturalis+Biodiversity+Center.aspx', 'Naturalis', 52.1647, 4.47309, 0, '//cdn.museum.nl/cards/700x394/dd3ed00e-f8a0-4031-aad9-3fdbd517e011\\M7248 Naturalis 2019.jpg'),
('/museum/Historiehuis+Roermond/Historiehuis+Roermond.aspx', 'Historiehuis Roermond', 51.1943, 5.98572, 0, '//cdn.museum.nl/cards/700x394/2ec2e147-2488-414d-93bb-7af036298f06\\Gezin 1 klein (foto Maartje van Berkel).jpg'),
('/museum/Kunstfort+bij+Vijfhuizen/Kunstfort+bij+Vijfhuizen.aspx', 'Kunstfort bij Vijfhuizen', 52.3474, 4.6703, 0, '//cdn.museum.nl/cards/700x394/aa9a2a00-23e6-4ae5-ba7c-514fd2d8f901\\1.jpg'),
('/museum/Drents+Museum/Drents+Museum.aspx', 'Drents Museum', 52.9933, 6.56398, 0, '//cdn.museum.nl/cards/700x394/1b5cee4e-a5f7-4916-82d5-c213cebf0a22\\Drents Museum - Museumkaart.jpg'),
('/museum/Nationaal+Onderwijsmuseum/Nationaal+Onderwijsmuseum.aspx', 'Nationaal Onderwijsmuseum', 51.8084, 4.66106, 0, '//cdn.museum.nl/cards/700x394/7d49fc5c-2019-4699-b5a1-bb9088c178d9\\220715-208Ronald-van-den-Heerik-(6)--web.jpg');
INSERT INTO `museums` (`link`, `name`, `lat`, `lng`, `visited`, `image`) VALUES
('/museum/Museum+Het+Rembrandthuis/Museum+Het+Rembrandthuis.aspx', 'Museum Het Rembrandthuis', 52.3694, 4.90124, 0, '//cdn.museum.nl/cards/700x394/f622d37f-4fea-4e2a-aba9-09b6d41a2001\\rembrandthuis.jpg'),
('/museum/Internationaal+Klompenmuseum/Internationaal+Klompenmuseum+.aspx', 'Internationaal Klompenmuseum', 53.1377, 6.56839, 0, '//cdn.museum.nl/cards/700x394/761f929d-5b0a-4f61-9533-60e45730a816\\Klompenmuseum.jpg'),
('/museum/Museum+Belv%c3%a9d%c3%a8re/Museum+Belv%c3%a9d%c3%a8re+.aspx', 'Museum BelvÃ©dÃ¨re', 52.9547, 5.9488, 0, '//cdn.museum.nl/cards/700x394/05B2G2849.jpg'),
('/museum/Airborne+Museum+%27Hartenstein%27/Airborne+Museum+Hartenstein.aspx', 'Airborne Museum \'Hartenstein\'', 51.9877, 5.83275, 0, '//cdn.museum.nl/cards/700x394/9733b2fd-b4db-4dc4-911e-ccc0b0fae5e6\\Airborne Hartenstein 1280x768-4633.jpg'),
('/museum/Museum+Swaensteyn/Museum+Swaensteyn.aspx', 'Museum Swaensteyn', 52.0673, 4.36371, 0, '//cdn.museum.nl/cards/700x394/605ef78e-69d1-4c62-a423-e98e873f5519\\20140620-2014June_Museum-Swaensteyn_1A9B9563foto-_Charles-Groeneveld.jpg'),
('/museum/Het+Klederdrachtmuseum/Het+Klederdrachtmuseum.aspx', 'Het Klederdrachtmuseum', 52.3674, 4.88781, 0, '//cdn.museum.nl/cards/700x394/5fbfea1a-3b4f-4755-8964-26896410a28c\\klederdracht.jpg'),
('/museum/Streekmuseum+Etten+Leur/Streekmuseum+Etten+Leur.aspx', 'Streekmuseum Etten Leur', 51.5712, 4.6339, 0, '//cdn.museum.nl/cards/700x394/gif2jpg/9662_jan_uten_houte3.jpg'),
('/museum/Museum+De+Vier+Quartieren/De+Vier+Quartieren.aspx', 'Museum De Vier Quartieren', 51.5042, 5.30804, 0, '//cdn.museum.nl/cards/700x394/vierquartieren.jpg'),
('/museum/Wevershuis/Wevershuis.aspx', 'Wevershuis', 52.4735, 4.82242, 0, '//cdn.museum.nl/cards/700x394/6ff27271-7f78-46e0-9117-cc1a7b54f65e\\wevershuis.jpg'),
('/museum/Venrays+Museum/Venrays+Museum.aspx', 'Venrays Museum', 51.5288, 5.97459, 0, '//cdn.museum.nl/cards/700x394/72a5f043-abc5-4117-970a-2579b2aadbd5\\borggraaf.jpg'),
('/museum/Nationaal+Glasmuseum/Nationaal+Glasmuseum.aspx', 'Nationaal Glasmuseum', 51.8818, 5.08569, 0, '//cdn.museum.nl/cards/700x394/cbea6b7f-22e3-42a3-acff-aadfa0c2dafb\\Nationaal Glasmuseum, Transparant Depot, foto Ben Deiman - kopie.jpg'),
('/museum/Museum+Prinsenhof+Delft/Museum+Prinsenhof+Delft.aspx', 'Museum Prinsenhof Delft', 52.0121, 4.35463, 0, '//cdn.museum.nl/cards/700x394/c9563d69-3215-4edd-a072-72ed2117a313\\Museum Prinsenhof Delft.jpg'),
('/museum/Stedelijk+Museum+Kampen/Stedelijk+Museum+Kampen.aspx', 'Stedelijk Museum Kampen', 52.5589, 5.91676, 0, '//cdn.museum.nl/cards/700x394/muskampen21.jpg'),
('/museum/Koninklijk+Paleis+Amsterdam/Koninklijk+Paleis+A%27dam.aspx', 'Koninklijk Paleis Amsterdam', 52.3733, 4.89363, 0, '//cdn.museum.nl/cards/700x394/3c5a5972-29f7-4ba8-9ec6-23ce0c9aebf0\\Koninklijk Paleis Amsterdam.jpg'),
('/museum/Frans+Hals+Museum+Hal/Frans+Hals+Museum+Hal.aspx', 'Frans Hals Museum Hal', 52.3811, 4.63606, 0, '//cdn.museum.nl/cards/700x394/e5d946b6-8cb8-409b-9318-dadb715495f9\\029.FRANS HALS HAL-RENDEZ VOUS MET FRANS HALS 2018-PH.GJ.vanROOIJ 1920x.jpg'),
('/museum/Speelgoed+en+Carnavalsmuseum+Op+Stelten/Speelgoed+en+Carmavalsmuseum+Op+Stelten.aspx', 'Speelgoed en Carnavalsmuseum O', 51.6422, 4.86778, 0, '//cdn.museum.nl/cards/700x394/musnieuw/speelgoedmuseumopstelten.jpg'),
('/museum/West+Den+Haag/West+Den+Haag.aspx', 'West Den Haag', 52.083, 4.31203, 0, '//cdn.museum.nl/cards/700x394/b1ba8db4-4cf0-4419-9c2a-06c1e4101720\\WestDenHaag-MV-dec2016.jpg'),
('/museum/De+Halve+Maen/Halve+Maen.aspx', 'De Halve Maen', 52.6335, 5.06231, 0, '//cdn.museum.nl/cards/700x394/504f0818-ff79-4cae-b7a9-96055a135488\\02 PB Nieuwe seizoen Halve Maen bulderend van start.jpg'),
('/museum/Museum+Kasteel+Wijchen/Museum+Kasteel+Wijchen.aspx', 'Museum Kasteel Wijchen', 51.8085, 5.72775, 0, '//cdn.museum.nl/cards/700x394/c6fcefcf-1900-4399-9ef0-46b29dd4842d\\Tuinhuisje 003.jpg'),
('/museum/Het+Hollands+Kaasmuseum/Het+Hollands+Kaasmuseum.aspx', 'Het Hollands Kaasmuseum', 52.6313, 4.74997, 0, '//cdn.museum.nl/cards/700x394/54c7d3f7-a811-4582-9f20-a7c4ddc5e6e3\\Koe_kaasmuseum_small.jpg'),
('/museum/Haarlemmermeermuseum+Historisch+Museum+/Haarlemmermeermuseum+Historisch+Museum+.aspx', 'Haarlemmermeermuseum Historisc', 52.3217, 4.66511, 0, '//cdn.museum.nl/cards/700x394/416ff819-608f-4e98-b346-fbe8dc981890\\kindergidsen-4.jpg'),
('/museum/Sint+Jan+Gouda/Sint+Jan+Gouda.aspx', 'Sint Jan Gouda', 52.0105, 4.71211, 0, '//cdn.museum.nl/cards/700x394/ed2f3371-3fe6-4c01-8235-486796f05f1e\\SintJan-koor3-HarryAndersE3media.jpg'),
('/museum/Portugese+Synagoge+Amsterdam/Portugese+Synagoge.aspx', 'Portugese Synagoge Amsterdam', 52.3678, 4.90472, 0, '//cdn.museum.nl/cards/700x394/cab5894a-5242-48a6-8638-3809f933f83b\\portugesesynagoge.jpg'),
('/museum/Museum+Het+Schip/Museum+Het+Schip-De+Amsterdamse+School.aspx', 'Museum Het Schip', 52.3899, 4.87414, 0, '//cdn.museum.nl/cards/700x394/c2385789-6e12-4156-8216-7e28f18818a7\\museum het schip.jpg'),
('/museum/Space+Expo/Space+Expo.aspx', 'Space Expo', 52.215, 4.42117, 0, '//cdn.museum.nl/cards/700x394/921c5260-4411-4d79-a983-a63941704ebd\\11-SPACE TRAIN.jpg'),
('/museum/Kunsthal+KAdE/Kunsthal+KAdE.aspx', 'Kunsthal KAdE', 52.1595, 5.38248, 0, '//cdn.museum.nl/cards/700x394/de069827-184b-4feb-9bc5-d38e85b22c2d\\kunsthal kade.jpg'),
('/museum/Museum+Martena/Museum+Martena+.aspx', 'Museum Martena', 53.1865, 5.54225, 0, '//cdn.museum.nl/cards/700x394/martena 2.jpg'),
('/museum/Museum+De+Wemme/Cultuurhistorisch+streek-+en+handkarrenmuseum+De+Wemme.aspx', 'Museum De Wemme', 52.6666, 6.41866, 0, '//cdn.museum.nl/cards/700x394/e82dd82a-2459-4f07-87af-b090bbf54a43\\Wemme aanzicht (8) (2014_11_20 12_57_24 UTC).jpg'),
('/museum/Elisabeth+Weeshuis+Museum/Elisabeth+Weeshuis+Museum.aspx', 'Elisabeth Weeshuis Museum', 51.9574, 5.22381, 0, '//cdn.museum.nl/cards/700x394/125a4ada-ff59-4e86-b732-4c6c0e0ddacd\\elisabethweeshuis-profiel.jpg'),
('/museum/Trompenburg+Tuinen+%26+Arboretum/Trompenburg+Tuinen+%26+Arboretum.aspx', 'Trompenburg Tuinen & Arboretum', 51.9198, 4.5185, 0, '//cdn.museum.nl/cards/700x394/54308571-8c50-4c8c-bd61-5eb76ac24c0f\\Voorvijver  met Rhodo \'Mrs Davies Evans\' (R) 2006 (2).JPG'),
('/museum/Flessenscheepjesmuseum/Flessenscheepjes+Museum.aspx', 'Flessenscheepjesmuseum', 52.7011, 5.29127, 0, '//cdn.museum.nl/cards/700x394/plaatjesbank/flessenscheepjesmuseum 7247/7247_windjammer_1860.jpg'),
('/museum/Nationaal+Sleepvaart+Museum/Nationaal+Sleepvaart+Museum.aspx', 'Nationaal Sleepvaart Museum', 51.9216, 4.25325, 0, '//cdn.museum.nl/cards/700x394/90761078-cce2-4ec7-a7a1-00a2078041e3\\Maassluis sleepvaartmuseum.jpg'),
('/museum/Vrijheidsmuseum/Vrijheidsmuseum.aspx', 'Vrijheidsmuseum', 51.7857, 5.93644, 0, '//cdn.museum.nl/cards/700x394/27d6c8ea-1e74-4021-8cdd-a4eb30189a1a\\Nieuwbouw foto 4 Bron Shaded Dome Technologies.jpg'),
('/museum/Museumpark+Orientalis/Museumpark+Orientalis.aspx', 'Museumpark Orientalis', 51.8161, 5.89223, 0, '//cdn.museum.nl/cards/700x394/dc5c01f9-acfa-4a04-b3fb-535ca076d2fd\\Arabisch dorp 2018.jpg'),
('/museum/Oorlogsmuseum+Overloon/Oorlogsmuseum+Overloon.aspx', 'Oorlogsmuseum Overloon', 51.5707, 5.95723, 0, '//cdn.museum.nl/cards/700x394/5ad3aeba-8b56-466c-85a3-bdd6d7c7550f\\overloon anwb.jpg'),
('/museum/Haags+Historisch+Museum/Haags+Historisch+Museum.aspx', 'Haags Historisch Museum', 52.0813, 4.314, 0, '//cdn.museum.nl/cards/700x394/162ecef6-a294-4fb3-9467-f288f90d3369\\M3038 haags historisch museum.jpg'),
('/museum/Museum+Krona/Museum+Krona.aspx', 'Museum Krona', 51.6557, 5.60684, 0, '//cdn.museum.nl/cards/700x394/436097c0-65fd-43d8-8c7a-20daa49be9a2\\7738-birgitta.JPG'),
('/museum/Belasting+%26+Douane+Museum/Belasting+%26+Douane+Museum.aspx', 'Belasting & Douane Museum', 51.9076, 4.47643, 0, '//cdn.museum.nl/cards/700x394/59185f5c-7fa1-4006-b89e-5ea49c7d10cd\\het oor.jpg'),
('/museum/Outsider+Art+Museum/Outsider+Art+Museum.aspx', 'Outsider Art Museum', 52.3653, 4.90254, 0, '//cdn.museum.nl/cards/700x394/967c5ec6-1b2a-43cc-b2c7-54c8e8311302\\Keisuke ISHINO.jpg'),
('/museum/Museum+Lunteren/Museum+Lunteren.aspx', 'Museum Lunteren', 52.0841, 5.62081, 0, '//cdn.museum.nl/cards/700x394/9bb6f395-4241-471a-adf7-d57ebbeb8f5d\\museum lunteren.jpg'),
('/museum/Stadsmuseum+Steenwijk/Stadsmuseum+Steenwijk.aspx', 'Stadsmuseum Steenwijk', 52.7865, 6.11689, 0, '//cdn.museum.nl/cards/700x394/stadsmuseum2.jpg'),
('/museum/Museum+Waelstee/Museum+Waelstee.aspx', 'Museum Waelstee', 53.0725, 4.82143, 0, '//cdn.museum.nl/cards/700x394/9040acc8-8359-4006-a4b6-e8e2521ac998\\dewaal365.jpg'),
('/museum/Galerij+Prins+Willem+V/Galerij+Prins+Willem+V+.aspx', 'Galerij Prins Willem V', 52.0796, 4.31041, 0, '//cdn.museum.nl/cards/700x394/40dc2bba-890b-440d-a633-4cf69fb41026\\GalerijPrinsWillemV_site_museumvereniging.jpg'),
('/museum/Museum+Willet-Holthuysen/Museum+Willet-Holthuysen.aspx', 'Museum Willet-Holthuysen', 52.3656, 4.89902, 0, '//cdn.museum.nl/cards/700x394/7ce7729b-89de-4450-8b01-e5db30a370e5\\Museum Willet-Holthuysen (1).jpg'),
('/museum/Forteiland+Pampus/Forteiland+Pampus.aspx', 'Forteiland Pampus', 52.3646, 5.06907, 0, '//cdn.museum.nl/cards/700x394/d7a7009f-3e08-4c7b-b07e-17cb4b18976a\\forteiland pampus.jpg'),
('/museum/Universiteitsmuseum+Groningen/Universiteitsmuseum+Groningen.aspx', 'Universiteitsmuseum Groningen', 53.2184, 6.56294, 0, '//cdn.museum.nl/cards/700x394/ac709205-8fb7-4234-b94c-0afac6f4082e\\bovenzaal.jpg'),
('/museum/Het+Noordbrabants+Museum/Het+Noordbrabants+Museum.aspx', 'Het Noordbrabants Museum', 51.6866, 5.30472, 0, '//cdn.museum.nl/cards/700x394/847b06e1-35e6-4e9e-8fe9-b6b589aa0929\\MK_000266P.jpg'),
('/museum/Zeeuws+Museum/Zeeuws+Museum+.aspx', 'Zeeuws Museum', 51.5008, 3.61452, 0, '//cdn.museum.nl/cards/700x394/72b37e71-917e-4c3e-bb1a-362e968e0df6\\Zeeuws Museum.jpg'),
('/museum/Museum+de+Fundatie/Museum+de+Fundatie+Zwolle.aspx', 'Museum de Fundatie', 52.5102, 6.09148, 0, '//cdn.museum.nl/cards/700x394/5128f4e4-646a-49da-a922-4ab6854fd9be\\Afb Museum de Fundatie.jpg'),
('/museum/Vleeshal/Vleeshal.aspx', 'Vleeshal', 51.4988, 3.61095, 0, '//cdn.museum.nl/cards/700x394/1d6414d1-f417-445d-84d4-87f8ff4aa52a\\MP_1.jpg'),
('/museum/Museum+Spakenburg/Museum+Spakenburg.aspx', 'Museum Spakenburg', 52.2546, 5.37793, 0, '//cdn.museum.nl/cards/700x394/459b44d8-9352-4cfb-a010-f39bc302a01b\\VEV08.jpg'),
('/museum/Volendams+Museum/Volendams+Museum.aspx', 'Volendams Museum', 52.4951, 5.07081, 0, '//cdn.museum.nl/cards/700x394/12bebdb0-e394-458b-aa9c-796fcd18916a\\Vitrine en grote zaal.jpg'),
('/museum/Keramiekcentrum+Tiendschuur+Tegelen/Keramiekcentrum+Tiendschuur+Tegelen.aspx', 'Keramiekcentrum Tiendschuur Te', 51.3317, 6.13689, 0, '//cdn.museum.nl/cards/700x394/bc128e3d-941f-4d39-bcaf-1166b537044a\\M9766 Keramiekmuseum Tiendschuur Tegelen - kl.jpg'),
('/museum/Nederlands+Tegelmuseum/Nederlands+Tegelmuseum.aspx', 'Nederlands Tegelmuseum', 52.0985, 5.77252, 0, '//cdn.museum.nl/cards/700x394/0444fba7-5f7c-4524-ad16-32473fdcb1aa\\NEd Tegelmuseum.jpg'),
('/museum/GEM%2c+museum+voor+actuele+kunst/GEM+Museum+voor+actuele+kunst.aspx', 'GEM, museum voor actuele kunst', 52.0898, 4.28024, 0, '//cdn.museum.nl/cards/700x394/ecf8e523-9556-4d4c-9753-d60a750cbaa2\\GEM.jpg'),
('/museum/Stadhuismuseum+Zierikzee/Stadhuismuseum+Zierikzee+.aspx', 'Stadhuismuseum Zierikzee', 51.6501, 3.9205, 0, '//cdn.museum.nl/cards/700x394/ba8237a6-a124-4269-b4ac-3f58da7bee61\\2016-04-01 Stadhuismuseum-13-2.jpg'),
('/museum/Museum+Volkenkunde/Museum+Volkenkunde.aspx', 'Museum Volkenkunde', 52.1636, 4.48415, 0, '//cdn.museum.nl/cards/700x394/f57dd9b4-776f-4074-a051-593108c13625\\Exterieur Museum Volkenkunde.jpg'),
('/museum/Museum+Haarlem/Museum+Haarlem.aspx', 'Museum Haarlem', 52.3771, 4.63401, 0, '//cdn.museum.nl/cards/700x394/fb658a04-bf38-4f77-b4bf-ff282b271803\\M7348 Museum Haarlem.JPG'),
('/museum/Nederlands+Leder+en+Schoenenmuseum/Nederlands+Leder+en+Schoenenmuseum.aspx', 'Schoenenmuseum', 52.3702, 4.89517, 0, '//cdn.museum.nl/cards/700x394/4ccbd37c-832b-4e50-af32-d169b2315d50\\Slingback met de afbeelding van de Waalwijkse Sint Jan de Doper kerk. Van Schijndel, 1948. Â©Coll. Nederlands leder en Schoenen Museum.jpg'),
('/museum/GeoFort/Geofort.aspx', 'GeoFort', 51.8663, 5.12538, 0, '//cdn.museum.nl/cards/700x394/deef7dfd-c6fb-4095-b50e-9528a51e6d73\\Museumjaarkaart 2017 GeoFort.jpg'),
('/museum/Boomkwekerijmuseum/Boomkwekerijmuseum.aspx', 'Boomkwekerijmuseum', 52.0743, 4.66916, 0, '//cdn.museum.nl/cards/700x394/306359b2-af30-48be-aee5-4b3731d82a74\\BKM3 002 retouche (2) (800x550) kopie.jpg'),
('/museum/Streekmuseum+Stevensweert+Oh%c3%a9+en+Laak/Streekmuseum+Stevensweert+-+Ohe+en+Laak.aspx', 'Streekmuseum Stevensweert OhÃ© ', 51.132, 5.84426, 0, '//cdn.museum.nl/cards/700x394/c0a03300-cd69-414a-a9ee-03b5a057dc76\\Streekuseum Stevensweert-OheÌ en Laak.jpg'),
('/museum/Stadsmuseum+Almelo/Stadsmuseum+Almelo.aspx', 'Stadsmuseum Almelo', 52.3543, 6.66507, 0, '//cdn.museum.nl/cards/700x394/e634c94b-483e-4642-945b-a8ead4a3567a\\stadsmuseum almelo.jpg'),
('/museum/Kasteel+Cannenburch/Kasteel+Cannenburch.aspx', 'Kasteel Cannenburch', 52.2917, 5.96473, 0, '//cdn.museum.nl/cards/700x394/84710676-20ab-4ad4-8032-c93e6381c0b5\\M9316-Cannenburch-kasteel-.jpg'),
('/museum/Natuurhistorisch+Museum+Maastricht/Natuurhistorisch+Museum+Maastricht.aspx', 'Natuurhistorisch Museum Maastr', 50.8449, 5.68779, 0, '//cdn.museum.nl/cards/700x394/a8671b83-ed11-4863-a48b-b9a2a1c6e0a2\\246.JPG'),
('/museum/Museum+de+Scheper/Museum+de+Scheper.aspx', 'Museum de Scheper', 52.1022, 6.6474, 0, '//cdn.museum.nl/cards/700x394/98e23880-338b-4fa6-892a-b0db674c9402\\museum de scheper.jpg'),
('/museum/Museum+Nairac/Museum+Nairac.aspx', 'Museum Nairac', 52.1406, 5.5845, 0, '//cdn.museum.nl/cards/700x394/4220fc34-a994-42c8-8975-6c037a6ce652\\Museum Nairac A (1).jpg'),
('/museum/De+Bastei/De+Bastei.aspx', 'De Bastei', 51.8487, 5.86951, 0, '//cdn.museum.nl/cards/700x394/ec66d354-7fd0-4ff9-a0bf-5737750dc5ae\\De Bastei gang.jpg'),
('/museum/Cultuur-Historisch+Museum+Sorgdrager/Cultuurhistorisch+Museum+Sorgdrager+.aspx', 'Cultuur-Historisch Museum Sorg', 53.438, 5.6412, 0, '//cdn.museum.nl/cards/700x394/855e7372-6077-4f3d-837a-4b725bbdaf0a\\sorgdrager.jpg'),
('/museum/Dolhuys+%7c+museum+van+de+geest/Dolhuys+%7c+museum+van+de+geest.aspx', 'Dolhuys | museum van de geest', 52.3905, 4.63804, 0, '//cdn.museum.nl/cards/700x394/f8220091-41d0-48c4-a0e8-c3eab4ee8a05\\Dolhuys-museum-wat is normaal.jpg'),
('/museum/Veenkoloniaal+Museum/Veenkoloniaal+Museum.aspx', 'Veenkoloniaal Museum', 53.1071, 6.87602, 0, '//cdn.museum.nl/cards/700x394/e7e08f40-5e0d-4576-a6a0-8dd0db682666\\IMG_3593.JPG'),
('/museum/Design+Museum+Den+Bosch/Design+Museum+Den+Bosch.aspx', 'Design Museum Den Bosch', 51.6861, 5.30382, 0, '//cdn.museum.nl/cards/700x394/692ec7f6-8c4a-4ac4-8643-2934b25bf1ae\\design museum den bosch.jpg'),
('/museum/De+Mesdag+Collectie/De++Mesdag+Collectie.aspx', 'De Mesdag Collectie', 52.0863, 4.29906, 0, '//cdn.museum.nl/cards/700x394/524183f1-74de-427d-87b3-87686e6f2753\\De kalfjes, ca.1863. Willem Maris (1844-1910). De Mesdag Collectie, Den ....jpg'),
('/museum/IJmuider+Zee-+en+Havenmuseum/IJmuider+Zee-+en+Havenmuseum+%27De+Visserijschool%27.aspx', 'IJmuider Zee- en Havenmuseum', 52.4574, 4.59863, 0, '//cdn.museum.nl/cards/700x394/f40b2710-4f90-49b4-a43a-75ea9c3bf257\\loodsenzaal.jpg'),
('/museum/Jenevermuseum/Nationaal+Jenevermuseum+Schiedam.aspx', 'Jenevermuseum', 51.9153, 4.39737, 0, '//cdn.museum.nl/cards/700x394/caf86df4-e8db-43ed-b8a4-5af40638c4ce\\Jenevermuseum_LR (3).jpg'),
('/museum/Museum+Rijswijk/Museum+Rijswijk+Het+Tollenshuis.aspx', 'Museum Rijswijk', 52.0556, 4.33504, 0, '//cdn.museum.nl/cards/700x394/2e0bc449-f1ac-4541-aa39-2580c3f17d9e\\Voorzijde Museum Rijswijk-Tollenshuis.JPG'),
('/museum/Veluws+Museum+Hagedoorns+Plaatse/Veluws+Museum+Hagedoorns+Plaatse.aspx', 'Veluws Museum Hagedoorns Plaat', 52.3343, 5.99572, 0, '//cdn.museum.nl/cards/700x394/6a65d09f-56c8-4702-ae8c-1ef7c136494b\\M7149 Museum Hagedoorns Plaatse.jpg'),
('/museum/Beeld+en+Geluid/Beeld+en+Geluid+Experience.aspx', 'Beeld en Geluid', 52.2358, 5.17256, 0, '//cdn.museum.nl/cards/700x394/4da73395-a349-4e58-ae7d-d4631ff60bf6\\BeeldenGeluid02.jpg'),
('/museum/DAF+Museum/DAF+Museum.aspx', 'DAF Museum', 51.4372, 5.49043, 0, '//cdn.museum.nl/cards/700x394/49d5da7f-3fbe-4d75-ac89-c1cc3c19982c\\DAF-Museum-historie.jpg'),
('/museum/Streekmuseum+Krimpenerwaard/Streekmuseum+voor+de+Krimpenerwaard.aspx', 'Streekmuseum Krimpenerwaard', 51.92, 4.58812, 0, '//cdn.museum.nl/cards/700x394/842c330d-dce0-426c-92bf-0ac681f490b4\\streekmuseum.jpg'),
('/museum/Kunstmuseum+Den+Haag/Kunstmuseum+Den+Haag.aspx', 'Kunstmuseum Den Haag', 52.0892, 4.27988, 0, '//cdn.museum.nl/cards/700x394/0edc8d2f-5840-4c5f-91eb-a6d8f90ab264\\Gemeentemuseum Den Haag buitenkant Gerrit Schreurs.jpg'),
('/museum/Lalique+Museum/Lalique+Museum.aspx', 'Lalique Museum', 52.0152, 6.13465, 0, '//cdn.museum.nl/cards/700x394/6df5fcaf-83d4-457a-b12b-74c4e976a313\\lalique.jpg'),
('/museum/Museum+In+%27t+Houten+Huis/Museum+In+%27t+Houten+Huis.aspx', 'Museum In \'t Houten Huis', 52.5594, 4.85322, 0, '//cdn.museum.nl/cards/700x394/16d40e10-4bb9-464c-a6be-401f2197ab2e\\houten huis.jpg'),
('/museum/Museum+Noordwijk/Museum+Noordwijk.aspx', 'Museum Noordwijk', 52.2443, 4.43137, 0, '//cdn.museum.nl/cards/700x394/67a49b79-4975-432f-b73d-2675e5dadfa7\\museum noordwijk.jpg'),
('/museum/Fotomuseum+Den+Haag/Fotomuseum+Den+Haag.aspx', 'Fotomuseum Den Haag', 52.0898, 4.28024, 0, '//cdn.museum.nl/cards/700x394/eb16f5ba-2062-430c-b9d3-5c707320fa31\\M3054 Fotomuseum klein.jpg'),
('/museum/Stedelijk+Museum+Coevorden/Stedelijk+Museum+Coevorden.aspx', 'Stedelijk Museum Coevorden', 52.6612, 6.74298, 0, '//cdn.museum.nl/cards/700x394/2bfa909c-9773-4b8b-8575-5fcb37c96f97\\IMG_1317.JPG'),
('/museum/Museum+Nijkerk/Museum+Nijkerk.aspx', 'Museum Nijkerk', 52.222, 5.48345, 0, '//cdn.museum.nl/cards/700x394/af48bd59-ad30-4f11-8ede-cd2518aa4e24\\Venenstraat 16 foto Gerrit van de Veen.jpg'),
('/museum/Huis+Van+Gijn/Huis+Van+Gijn.aspx', 'Huis Van Gijn', 51.8165, 4.66382, 0, '//cdn.museum.nl/cards/700x394/c7fe391a-a261-4a96-a935-d8956a2a96da\\M3006 HuisVanGijn keuken.jpg'),
('/museum/Valkerij+en+Sigarenmakerij+Museum/Valkerij+en+Sigarenmakerij+Museum.aspx', 'Valkerij en Sigarenmakerij Mus', 51.3543, 5.45922, 0, '//cdn.museum.nl/cards/700x394/musnieuw/valkerijensigarenmakerijmuseum.jpg'),
('/museum/Flipje+en+Streekmuseum+Tiel/Flipje+en+Streekmuseum+Tiel.aspx', 'Flipje en Streekmuseum Tiel', 51.8864, 5.43978, 0, '//cdn.museum.nl/cards/700x394/6acbe19b-cb40-4c7c-8cc7-7a2460aa1c8b\\Flipposcoop rood.jpg'),
('/museum/Museum+De+Domijnen%2c+afdeling+Hedendaagse+Kunst/Museum+De+Domijnen%2c+afdeling+Hedendaagse+Kunst.aspx', 'Museum De Domijnen, afdeling H', 51.0003, 5.86629, 0, '//cdn.museum.nl/cards/700x394/b52e6880-8022-4981-abed-0693f16ab9dc\\Museum De Domijnen HK.jpg'),
('/museum/Hunebedcentrum/Hunebedcentrum.aspx', 'Hunebedcentrum', 52.9306, 6.79838, 0, '//cdn.museum.nl/cards/700x394/3bfaef1d-4b47-4ddd-b273-af040f91dff6\\16312193814_152f235549_o.jpg'),
('/museum/Nationaal+Vlechtmuseum/Nationaal+Vlechtmuseum.aspx', 'Nationaal Vlechtmuseum', 52.8911, 6.14323, 0, '//cdn.museum.nl/cards/700x394/3a73afb4-bb32-43aa-bf04-dd12e24b9ec8\\Museum Vlechtkunst.jpg'),
('/museum/Openluchtmuseum+Het+Hoogeland/Openluchtmuseum+Het+Hoogeland.aspx', 'Openluchtmuseum Het Hoogeland', 53.3922, 6.56221, 0, '//cdn.museum.nl/cards/700x394/f423b3a0-fd9c-441d-bc68-197048ef76cf\\Hoogeland anwb.jpg'),
('/museum/Waterliniemuseum/Waterliniemuseum.aspx', 'Waterliniemuseum', 52.0583, 5.16884, 0, '//cdn.museum.nl/cards/700x394/8a7fca70-0343-493a-962b-0bbc0b4c45dd\\Waterliniemuseum.jpg'),
('/museum/Kasteel+Het+Nijenhuis/Museum+De+Fundatie+-+Kasteel+Het+Nijenhuis.aspx', 'Kasteel Het Nijenhuis', 52.4165, 6.21362, 0, '//cdn.museum.nl/cards/700x394/e2c39d61-de6f-43d4-ba70-adffe024656d\\Kasteel het Nijenhuis Foto Pedro Sluiter.jpg'),
('/museum/Museum+van+de+Vrouw/Museum+van+de+Vrouw.aspx', 'Museum van de Vrouw', 51.1064, 5.86731, 0, '//cdn.museum.nl/cards/700x394/bc034629-b36a-4c1c-a0cb-39085d8b7b9a\\Museum van de Vrouw - Buiten aanzicht Museum van de Vrouw - Cultuurhuis Edith Stein - Fotografie door Hugo van Ool.jpg'),
('/museum/Thermenmuseum/Thermenmuseum.aspx', 'Thermenmuseum', 50.8855, 5.97693, 0, '//cdn.museum.nl/cards/700x394/cc7e30e6-aee4-4a70-884c-f379ae2e8223\\Thermenmuseum-049.jpg'),
('/museum/Nederlands+Openluchtmuseum/Nederlands+Openluchtmuseum.aspx', 'Nederlands Openluchtmuseum', 52.0081, 5.90721, 0, '//cdn.museum.nl/cards/700x394/8ad1a997-0be5-4b1c-912a-9fb38e343451\\Hooien.jpg'),
('/museum/Allard+Pierson+/Allard+Pierson+Museum.aspx', 'Allard Pierson ', 52.3688, 4.89302, 0, '//cdn.museum.nl/cards/700x394/c1ea851e-9943-4f61-835d-0a3ac5197256\\Foto Lysbeth Holthuis.jpg'),
('/museum/Openluchtmuseum+Ootmarsum/Openluchtmuseum+Ootmarsum+.aspx', 'Openluchtmuseum Ootmarsum', 52.4058, 6.8982, 0, '//cdn.museum.nl/cards/700x394/e799d2bf-5c3f-47fd-a5ed-6cd526a92f2a\\ootmarsum.jpg'),
('/museum/ABC+Architectuurcentrum+Haarlem/ABC+Architectuurcentrum+Haarlem.aspx', 'ABC Architectuurcentrum Haarle', 52.3771, 4.63401, 0, '//cdn.museum.nl/cards/700x394/f6f7ac75-88be-4e83-bacf-cb9b60e2e7b6\\ABC.jpg'),
('/museum/Museum+Ons%27+Lieve+Heer+op+Solder/Museum+Ons%27+Lieve+Heer+op+Solder.aspx', 'Museum Ons\' Lieve Heer op Sold', 52.3751, 4.89935, 0, '//cdn.museum.nl/cards/700x394/49cfad56-3bd7-467a-9ea1-a7a89f503a59\\Fotograaf Arjan Bronkhorst - De zolderkerk 2.jpg'),
('/museum/Visserijmuseum+Zoutkamp/Visserijmuseum+Zoutkamp.aspx', 'Visserijmuseum Zoutkamp', 53.337, 6.29993, 0, '//cdn.museum.nl/cards/700x394/af480aba-c218-4320-8bb5-12e8e0259a83\\Siegerlida\'s Hoeske.JPG'),
('/museum/Museum+Jan+Cunen/Museum+Jan+Cunen.aspx', 'Museum Jan Cunen', 51.7654, 5.52653, 0, '//cdn.museum.nl/cards/700x394/744a7038-f663-4816-ad83-b6ed7dbc47ce\\03 buitenkant gebouw 300 dpi.jpg'),
('/museum/Vrijmetselarij+Museum/Vrijmetselarij+Museum.aspx', 'Vrijmetselarij Museum', 52.0872, 4.301, 0, '//cdn.museum.nl/cards/700x394/da51df1c-2dcd-421d-a277-72961f352297\\vrijmetselaar.jpg'),
('/museum/Het+Dordts+Patrici%c3%abrshuis/Het+Dordts+Patrici%c3%abrshuis.aspx', 'Het Dordts PatriciÃ«rshuis', 51.8191, 4.66721, 0, '//cdn.museum.nl/cards/700x394/aaa0f17d-06e3-4885-954c-bc2ff8f95478\\copyright mascha joustra_lestudio35-8088.jpg'),
('/museum/Nederlands+Steendrukmuseum/Nederlands+Steendrukmuseum.aspx', 'Nederlands Steendrukmuseum', 51.3543, 5.45919, 0, '//cdn.museum.nl/cards/700x394/a4deed9a-b461-4cdd-b156-e436ddb6729e\\M9818 Ned Steendrukmuseum 1.JPG'),
('/museum/Nationaal+Holocaust+Museum/Nationaal+Holocaust+Museum.aspx', 'Nationaal Holocaust Museum', 52.3669, 4.91094, 0, '//cdn.museum.nl/cards/700x394/92d0693b-23d9-48f2-92ca-8d833b262b5d\\2016_NHM_NHM_met banieren_2.JPG'),
('/museum/Kijk-+en+Luistermuseum/Kijk-+en+Luistermuseum.aspx', 'Kijk- en Luistermuseum', 51.9976, 5.67515, 0, '//cdn.museum.nl/cards/700x394/a33f603d-cf4e-4b29-86a6-ee0ff16c47f9\\kinderen bij goochelaar in muziekzaal.JPG'),
('/museum/Museum+Vekemans/Museum+Vekemans.aspx', 'Museum Vekemans', 51.5879, 5.32231, 0, '//cdn.museum.nl/cards/700x394/4f9008e2-bd1d-4617-9120-47daf69bc0c2\\9648 Museum Vekemans.jpg'),
('/museum/Museum+De+Voorde/Museum+De+Voorde.aspx', 'Museum De Voorde', 52.0606, 4.49346, 0, '//cdn.museum.nl/cards/700x394/3f954b45-9964-4b27-a23c-b5d1a27f883d\\Schatkamer, F. Falkenhagen.jpg'),
('/museum/Museum+Hoeksche+Waard/Museum+Hoeksche+Waard.aspx', 'Museum Hoeksche Waard', 51.8253, 4.47723, 0, '//cdn.museum.nl/cards/700x394/3060afd5-991d-473c-8cab-f8fd13a8d6cf\\Museum HW Open dag.jpg'),
('/museum/Museum+Klok+%26+Peel+/Museum+Klok+%26+Peel+.aspx', 'Museum Klok & Peel ', 51.4036, 5.73348, 0, '//cdn.museum.nl/cards/700x394/bb8b9962-69df-4e7a-931b-95341e80b5f0\\klok en peel anwb.jpg'),
('/museum/Stadsmuseum+Groenlo/Stadsmuseum+Groenlo.aspx', 'Stadsmuseum Groenlo', 52.041, 6.61914, 0, '//cdn.museum.nl/cards/700x394/musnieuw/groenlo.jpg'),
('/museum/Huis+Marseille/Huis+Marseille+-+museum+voor+fotografie.aspx', 'Huis Marseille', 52.3676, 4.88482, 0, '//cdn.museum.nl/cards/700x394/568434e0-cbbf-4250-9dcc-1a2483c77cf4\\BX302041[2].JPG'),
('/museum/Fruitteeltmuseum/Fruitteeltmuseum.aspx', 'Fruitteeltmuseum', 51.4813, 3.94928, 0, '//cdn.museum.nl/cards/700x394/0427df94-4d6c-400b-9662-c2593366a4c4\\20160430_134710.jpg'),
('/museum/NEMO+Science+Museum/NEMO+Science+Museum.aspx', 'NEMO Science Museum', 52.3738, 4.91219, 0, '//cdn.museum.nl/cards/700x394/b942fee9-d664-44ba-b89f-c75bb3b475f7\\GebouwNEMO-DigiDaan-juli2016.jpg'),
('/museum/Marres+Maastricht/Marres+Centrum+voor+contemporaine+cultuur.aspx', 'Marres Maastricht', 50.8517, 5.68585, 0, '//cdn.museum.nl/cards/700x394/713c33da-7353-417d-b52b-20949e1cbd29\\marres.jpg'),
('/museum/Stadsmuseum+Harderwijk/Stadsmuseum+Harderwijk.aspx', 'Stadsmuseum Harderwijk', 52.3479, 5.61625, 0, '//cdn.museum.nl/cards/700x394/b44e18dd-30e3-4469-ba09-17effeaaf29d\\stadsmuseum.jpg'),
('/museum/Heerenveen+Museum+/Heerenveen+Museum.aspx', 'Heerenveen Museum ', 52.9565, 5.9274, 0, '//cdn.museum.nl/cards/700x394/9d11bfa0-152e-4327-ae85-916f4fdb51e0\\Maquette2.jpg'),
('/museum/Het+Nederlands+Vestingmuseum/Het+Nederlands+Vestingmuseum.aspx', 'Het Nederlands Vestingmuseum', 52.293, 5.16027, 0, '//cdn.museum.nl/cards/700x394/2671d788-9ad3-4ef6-ac6b-bc57bd01424d\\vestingmuseum.jpg'),
('/museum/Historische+Tuin+Aalsmeer/Historische+Tuin+Aalsmeer.aspx', 'Historische Tuin Aalsmeer', 52.2674, 4.74707, 0, '//cdn.museum.nl/cards/700x394/d93768b7-36d3-4e5c-b7c3-35e8c92f1205\\historische tuin.jpg'),
('/museum/Geelvinck+Muziek+Museum+Zutphen/Geelvinck+Muziek+Museum+Zutphen.aspx', 'Geelvinck Muziek Museum Zutphe', 52.1403, 6.19689, 0, '//cdn.museum.nl/cards/700x394/9604d84f-5400-4f29-9e17-73103bc80339\\muziek museum.jpg'),
('/museum/Cobra+Museum+voor+Moderne+Kunst/Cobra+Museum+voor+Moderne+Kunst+.aspx', 'Cobra Museum voor Moderne Kuns', 52.3037, 4.8587, 0, '//cdn.museum.nl/cards/700x394/4705ae9a-f287-4374-a90b-d13be065e9a3\\014.COBRA MUSEUM -algemeen 2013-PH.GJ.vanROOIJ.jpg'),
('/museum/Bureau+Europa/Bureau+Europa.aspx', 'Bureau Europa', 50.8431, 5.70256, 0, '//cdn.museum.nl/cards/700x394/musnieuw/NAIM_Bureau_Europa.jpg'),
('/museum/Museum+De+Wieger/Museum+De+Wieger.aspx', 'Museum De Wieger', 51.4589, 5.79607, 0, '//cdn.museum.nl/cards/700x394/f2e60423-ce22-4144-b778-c46967408cf3\\voorkant recht ervoor.jpg'),
('/museum/Botanische+Tuin+TU+Delft/Botanische+Tuin+TU+Delft.aspx', 'Botanische Tuin TU Delft', 52.0077, 4.37096, 0, '//cdn.museum.nl/cards/700x394/2dce0961-c426-4aef-bf16-047b0f4ab6a4\\bijgesneden logo BTD 72dpi.jpg'),
('/museum/Rijksmuseum+Boerhaave/Rijksmuseum+Boerhaave.aspx', 'Rijksmuseum Boerhaave', 52.1614, 4.48918, 0, '//cdn.museum.nl/cards/700x394/c754abe5-a78b-4f69-a96d-e0e6e4a6f464\\171210-FE0131-FredErnst-30cm.jpg'),
('/museum/Kempenmuseum+De+Acht+Zaligheden/Kempenmuseum+De+Acht+Zaligheden.aspx', 'Kempenmuseum De Acht Zalighede', 51.3534, 5.31171, 0, '//cdn.museum.nl/cards/700x394/73f8003d-6d20-4a71-b5bf-42c633797980\\museumkaart site.jpg'),
('/museum/Oyfo+Techniekmuseum/Oyfo+Techniekmuseum.aspx', 'Oyfo Techniekmuseum', 52.2587, 6.78904, 0, '//cdn.museum.nl/cards/700x394/58476b4b-07be-4655-b421-8ddb594477be\\Jongen op hefstoel fotograaf Herbert Wender (002).jpg'),
('/museum/Voerman+Museum+Hattem/Voerman+Museum+Hattem.aspx', 'Voerman Museum Hattem', 52.4752, 6.06712, 0, '//cdn.museum.nl/cards/700x394/55db04be-8174-4a38-97f2-9f87f485dca7\\voerman.jpg'),
('/museum/Museum+%27t+Oude+Slot/Museum+%27t+Oude+Slot.aspx', 'Museum \'t Oude Slot', 51.4284, 5.41666, 0, '//cdn.museum.nl/cards/700x394/f4194a50-7d34-4179-b67e-8d4323d8055a\\oude slot.JPG'),
('/museum/Maritiem+Centrum+%22Abraham+Fock%22/Mar.+Centrum+Abraham+Fock.aspx', 'Maritiem Centrum \"Abraham Fock', 53.443, 5.63691, 0, '//cdn.museum.nl/cards/700x394/b7587fd5-1c15-4e9b-a1b2-0a6c3fbbd76b\\MC pr foto.jpg'),
('/museum/Kr%c3%b6ller-M%c3%bcller+Museum/Kr%c3%b6ller-M%c3%bcller+Museum.aspx', 'KrÃ¶ller-MÃ¼ller Museum', 52.0955, 5.81661, 0, '//cdn.museum.nl/cards/700x394/52df3101-325c-4063-9669-3bbee242fedf\\A_Overzicht_beeldentuin_PT2 Vergroot.jpg'),
('/museum/MU/MU.aspx', 'MU', 51.4471, 5.45702, 0, '//cdn.museum.nl/cards/700x394/0e9d4b4f-be9f-4087-b1ce-3a389d4817c6\\MU.jpg'),
('/museum/Museum+Het+Warenhuis+-+Axel/Het+Warenhuis+-+Museum+Land+van+Axel.aspx', 'Museum Het Warenhuis - Axel', 51.2653, 3.90885, 0, '//cdn.museum.nl/cards/700x394/8ad9dd7d-bb99-41e6-8f4a-706ee673a89d\\warenhuis exterieur.jpg'),
('/museum/Nationaal+Gevangenismuseum/Nationaal+Gevangenismuseum+.aspx', 'Nationaal Gevangenismuseum', 53.042, 6.39133, 0, '//cdn.museum.nl/cards/700x394/05f593ea-b4fa-45ec-a327-3e074b7fadbe\\gevangenismuseum ANWB.jpg'),
('/museum/Marius+van+Dokkum+Museum/Marius+van+Dokkum+Museum.aspx', 'Marius van Dokkum Museum', 52.3484, 5.61872, 0, '//cdn.museum.nl/cards/700x394/f7649d7d-4aee-4518-b0a5-ff9a5e913178\\DSC05381 (1).jpg'),
('/museum/Katwijks+Museum/Katwijks+Museum.aspx', 'Katwijks Museum', 52.2037, 4.39707, 0, '//cdn.museum.nl/cards/700x394/11eb5476-1948-4319-9f0d-a8533ba7c60a\\DSC03083_bewerkt-1.JPG'),
('/museum/Heiligenbeeldenmuseum/Heiligenbeeldenmuseum.aspx', 'Heiligenbeeldenmuseum', 52.1019, 6.35893, 0, '//cdn.museum.nl/cards/700x394/ab44dbef-4734-4bbe-b679-5deaef797117\\9794 Heiligenbeeldenmuseum.jpg'),
('/museum/Schoonewelle+Mus.+voor+Natuur+en+Ambacht/Schoonewelle%2c+Centrum+Natuur+en+Ambacht.aspx', 'Schoonewelle Mus. voor Natuur ', 52.6419, 6.07491, 0, '//cdn.museum.nl/cards/700x394/musnieuw/MuseumSchoonewelle.jpg'),
('/museum/Museum+De+Zwarte+Tulp/Museum+De+Zwarte+Tulp.aspx', 'Museum De Zwarte Tulp', 52.2591, 4.55505, 0, '//cdn.museum.nl/cards/700x394/7faa3c92-85eb-44ac-84f4-cb7ddcb2dfdf\\Vipera Fufca.jpg'),
('/museum/Streek+%26+Landbouwmuseum+Goemanszorg/Goemanszorg+Streek-+en+Landbouwmuseum.aspx', 'Streek & Landbouwmuseum Goeman', 51.6896, 3.98631, 0, '//cdn.museum.nl/cards/700x394/27meigoemanszorg.jpg'),
('/museum/Museum+Catharijneconvent/Museum+Catharijneconvent.aspx', 'Museum Catharijneconvent', 52.0873, 5.12392, 0, '//cdn.museum.nl/cards/700x394/Museum Catharijneconvent - Schatkamer (zaaloverzicht) - copyright Museum Catharijneconvent 2006 72 dpi1.jpg'),
('/museum/Amsterdam+Museum/Amsterdam+Museum.aspx', 'Amsterdam Museum', 52.3704, 4.8913, 0, '//cdn.museum.nl/cards/700x394/20b5c6ac-3327-48fc-88dd-53a75254a928\\amsterdam museum.jpg'),
('/museum/Museum+Veere++/Museum+Veere+.aspx', 'Museum Veere ', 51.5494, 3.66803, 0, '//cdn.museum.nl/cards/700x394/654d08a6-2d41-462c-8b14-de22bdc05373\\Beeldenzaal Museum De Schotse Huizen (1).jpg'),
('/museum/Panorama+Mesdag/Panorama+Mesdag.aspx', 'Panorama Mesdag', 52.0847, 4.30329, 0, '//cdn.museum.nl/cards/700x394/d838fa68-f962-4278-b1d7-85d8355d4a3a\\M9524 Panorama Mesdag.jpg'),
('/museum/Czaar+Peterhuisje/Museum+Czaar+Peterhuisje.aspx', 'Czaar Peterhuisje', 52.4373, 4.82349, 0, '//cdn.museum.nl/cards/700x394/musnieuw/CzaarPeterhuisje.jpg'),
('/museum/Anton+Pieck+Museum/Anton+Pieck+Museum.aspx', 'Anton Pieck Museum', 52.4756, 6.06768, 0, '//cdn.museum.nl/cards/700x394/45b58738-720e-4711-9dbb-cfebbe6b776e\\P1100417.JPG'),
('/museum/preHistorisch+Dorp/preHistorisch+Dorp.aspx', 'preHistorisch Dorp', 51.4231, 5.47483, 0, '//cdn.museum.nl/cards/700x394/482e559c-6b86-4d52-9158-ff38223e4b83\\preHistorisch_Dorp.jpg'),
('/museum/Museum+Gevangenpoort/Museum+de+Gevangenpoort.aspx', 'Museum Gevangenpoort', 52.0795, 4.31027, 0, '//cdn.museum.nl/cards/700x394/71085fc7-64ee-4ce6-a2c6-154ec6801473\\M6010 Gevangenpoort.jpg'),
('/museum/Het+Hof+van+Nederland/Het+Hof+van+Nederland.aspx', 'Het Hof van Nederland', 51.8156, 4.67035, 0, '//cdn.museum.nl/cards/700x394/14b2f245-c3b8-4d0e-b59e-20a4a09f38a3\\048_VSÂ© Pief Weyman-HR.jpg'),
('/museum/De+Kuiperij/Kuiperij.aspx', 'De Kuiperij', 52.4725, 4.81864, 0, '//cdn.museum.nl/cards/700x394/763f5f69-990a-448e-afa0-579f5cbe9440\\kuiperij.jpg'),
('/museum/Centraal+Museum/Centraal+Museum.aspx', 'Centraal Museum', 52.084, 5.1263, 0, '//cdn.museum.nl/cards/700x394/15d16e3b-0d27-4384-8904-6e620ec0cfd0\\M9805 centraal museum.jpg'),
('/museum/Museum+Dorestad/Museum+Dorestad.aspx', 'Museum Dorestad', 51.9706, 5.34488, 0, '//cdn.museum.nl/cards/700x394/gif2jpg/7116_3_pijlpunten.jpg'),
('/museum/Museum+Hilversum/Museum+Hilversum.aspx', 'Museum Hilversum', 52.2241, 5.17145, 0, '//cdn.museum.nl/cards/700x394/43e7d889-1f53-4979-a920-b6c0a5c634b0\\IC4U_Museum_Hilversum-813-Pano.jpg'),
('/museum/Streekmuseum+%22De+Meestoof%22/Streekmuseum+De+Meestoof.aspx', 'Streekmuseum \"De Meestoof\"', 51.6007, 4.10091, 0, '//cdn.museum.nl/cards/700x394/plaatjesbank/streekmuseum de meestoof 9624/9624_schoolbanken.jpg'),
('/museum/Micropia/Micropia.aspx', 'Micropia', 52.367, 4.91258, 0, '//cdn.museum.nl/cards/700x394/02c23b53-236f-4a6c-87c6-225a40c0cb38\\Met de bodyscan ontdek je je eigen microben. Foto Micropia, Maarten van der Wal.jpg'),
('/museum/Nationaal+Tinnen+Figuren+Museum/Nationaal+Tinnen+Figuren+Museum.aspx', 'Nationaal Tinnen Figuren Museu', 52.5178, 6.42218, 0, '//cdn.museum.nl/cards/700x394/f9fdea4d-5995-4129-b7b6-db2708a5c922\\foto bij algemene tekst NTFM.jpg'),
('/museum/Natuurmuseum+Frysl%c3%a2n/Natuurmuseum+Frysl%c3%a2n.aspx', 'Natuurmuseum FryslÃ¢n', 53.2041, 5.79568, 0, '//cdn.museum.nl/cards/700x394/2d931655-be63-46e0-aced-d19c37044f2a\\M1021 Natuurmuseum Fryslan.jpg'),
('/museum/Betje+Wolff+Museum/Betje+Wolff+Museum.aspx', 'Betje Wolff Museum', 52.5473, 4.91262, 0, '//cdn.museum.nl/cards/700x394/da98d95f-e853-4da7-8393-c26a50e46b87\\schrijftafel bewerkt.jpg'),
('/museum/Touwmuseum+%27De+Baanschuur%27/Touwmuseum+De+Baanschuur.aspx', 'Touwmuseum \'De Baanschuur\'', 52.0245, 4.8719, 0, '//cdn.museum.nl/cards/700x394/musnieuw/Touw.jpg'),
('/museum/Openluchtmuseum+de+Locht/Openluchtmuseum+de+Locht.aspx', 'Openluchtmuseum de Locht', 51.4631, 6.08609, 0, '//cdn.museum.nl/cards/700x394/9a36f46f-6281-4fbe-ba1d-1f2e97290633\\Museum de Locht.jpg'),
('/museum/Museum+Schokland/Museum+Schokland.aspx', 'Museum Schokland', 52.6349, 5.77747, 0, '//cdn.museum.nl/cards/700x394/eb5eaea5-1ae9-4122-9fa6-f7d496973e7c\\M4040 Museum Schokland.jpg'),
('/museum/Diamant+Museum+Amsterdam/Diamant+Museum+Amsterdam.aspx', 'Diamant Museum Amsterdam', 52.3594, 4.88248, 0, '//cdn.museum.nl/cards/700x394/experience1.jpg'),
('/museum/Museum+Boijmans+Van+Beuningen/Museum+Boijmans+Van+Beuningen.aspx', 'Museum Boijmans Van Beuningen', 51.9144, 4.47313, 0, '//cdn.museum.nl/cards/700x394/musnieuw/imageboijmans.jpg'),
('/museum/Museum+Paul+Tetar+van+Elven/Museum+Paul+Tetar+van+Elven.aspx', 'Museum Paul Tetar van Elven', 52.0095, 4.35878, 0, '//cdn.museum.nl/cards/700x394/c325bc8a-d889-4f28-ac91-232891dbc659\\Paul Tetar van Elven, de familie Schmidt (staand met muziekrol zijn echtgenote Louise).jpg'),
('/museum/Kasteel+Rosendael/Kasteel+Rosendael.aspx', 'Kasteel Rosendael', 52.0096, 5.96365, 0, '//cdn.museum.nl/cards/700x394/cb17672f-b03a-478a-abe9-5b36541b88d0\\Rosendael- Torenkamer.JPG'),
('/museum/Noord-Veluws+Museum/Noord-Veluws+Museum.aspx', 'Noord-Veluws Museum', 52.3743, 5.78078, 0, '//cdn.museum.nl/cards/700x394/b04bb1c6-d510-43b9-ad5d-2f481b81d4a7\\Noord-Veluws Museum.jpg'),
('/museum/Muzee+Scheveningen/Muzee+Scheveningen.aspx', 'Muzee Scheveningen', 52.1081, 4.28287, 0, '//cdn.museum.nl/cards/700x394/808d4bb5-0120-466b-90c3-353f47f993e3\\muzee scheveningen algemeen.jpg'),
('/museum/Haarlemmermeermuseum+De+Cruquius/Haarlemmermeermuseum+De+Cruquius.aspx', 'Haarlemmermeermuseum De Cruqui', 52.3381, 4.63814, 0, '//cdn.museum.nl/cards/700x394/8f07fe29-3033-4a72-a82a-35f312b471ae\\M5035 Cruquius.jpg'),
('/museum/Foam+Fotografiemuseum+Amsterdam/Foam+Fotografiemuseum+Amsterdam.aspx', 'Foam Fotografiemuseum Amsterda', 52.364, 4.89329, 0, '//cdn.museum.nl/cards/700x394/1af0cb29-2348-4c91-a99e-921d12151dc6\\M7361 Foam.jpg'),
('/museum/Honig+Breethuis/Honig+Breethuis.aspx', 'Honig Breethuis', 52.4734, 4.81332, 0, '//cdn.museum.nl/cards/700x394/0fac1e55-45ce-453d-8f1b-6be164bbec17\\TUIN_LUCHTHUIS_HONIG_BREETHUIS.JPG'),
('/museum/De+Oude+Kerk/De+Oude+Kerk.aspx', 'De Oude Kerk', 52.3742, 4.89792, 0, '//cdn.museum.nl/cards/700x394/e49e0883-0ae1-4652-9d00-5daf312169f2\\1ErnstVanDeursen.jpg'),
('/museum/Museum+Menkemaborg/Museum+Menkemaborg.aspx', 'Museum Menkemaborg', 53.405, 6.68386, 0, '//cdn.museum.nl/cards/700x394/c1e736b6-9def-4763-8e9d-59ed7445ea34\\Menkemaborg, herenkamer, buffet, foto Otto Kalkhoven.JPG'),
('/museum/Museum+Giethoorn+%27t+Olde+Maat+Uus/Museumboerderij+%27t+Olde+Maat+Uus.aspx', 'Museum Giethoorn \'t Olde Maat ', 52.7222, 6.08971, 0, '//cdn.museum.nl/cards/700x394/b533b7c4-2c9d-4856-ae61-9730729b764a\\Foto Museum Giethoorn.JPG'),
('/museum/Rijksmuseum+Muiderslot/Rijksmuseum+Muiderslot.aspx', 'Rijksmuseum Muiderslot', 52.3343, 5.07141, 0, '//cdn.museum.nl/cards/700x394/712a2fed-9799-48c5-b0e6-aeb2910bfb1f\\BF 01 Muiderslot inclusief poortgebouw.jpg'),
('/museum/Nederlands+Volksbuurtmuseum/Nederlands+Volksbuurtmuseum+.aspx', 'Nederlands Volksbuurtmuseum', 52.0952, 5.11472, 0, '//cdn.museum.nl/cards/700x394/49034743-bf22-4acc-bd4f-43349938fb54\\Volksbuurtmuseum-Kinderen.jpg'),
('/museum/Singer+Laren/Singer+Laren.aspx', 'Singer Laren', 52.2594, 5.22162, 0, '//cdn.museum.nl/cards/700x394/f1a9e9fe-f2b8-4cee-868b-cf5219b5cf31\\M4023 Singer Laren.jpg'),
('/museum/Fries+Landbouwmuseum/Fries+Landbouwmuseum.aspx', 'Fries Landbouwmuseum', 53.1793, 5.7896, 0, '//cdn.museum.nl/cards/700x394/5edbb2b1-b261-4899-a9f2-75c71043961d\\Frysk-Lanboumuseum-juli2018-web-28.jpg'),
('/museum/Museum+Jan+Heestershuis/Museum+Jan+Heestershuis.aspx', 'Museum Jan Heestershuis', 51.618, 5.43254, 0, '//cdn.museum.nl/cards/700x394/8263a95b-8d94-4a5a-aa80-3e5ca6567b4a\\SchilderijJan Heesters4.jpg'),
('/museum/Kasteel+Ammersoyen/Kasteel+Ammersoyen.aspx', 'Kasteel Ammersoyen', 51.7515, 5.22947, 0, '//cdn.museum.nl/cards/700x394/d7be3cfd-68d8-422f-a0a7-58a6535330ad\\M9208-Ammersoyen-kasteel.jpg'),
('/museum/Het+Utrechts+Archief/Het+Utrechts+Archief.aspx', 'Het Utrechts Archief', 52.0891, 5.12284, 0, '//cdn.museum.nl/cards/700x394/a6274b57-050e-4fa0-ad3a-be34915ae358\\2 HUA 19-0033 Herpositionering & Expositie Campagnebeeld HUA pand_V2.jpg'),
('/museum/Landbouw-Juttersmuseum+%27Swartwoude%27/Juttersmuseum++Swartwoude.aspx', 'Landbouw-Juttersmuseum \'Swartw', 53.4474, 5.79691, 0, '//cdn.museum.nl/cards/700x394/e1d16cd9-3442-4638-ae61-677e3547c1c8\\Swartwoude_6263.jpg'),
('/museum/Spoorwegmuseum/Het+Spoorwegmuseum.aspx', 'Spoorwegmuseum', 52.088, 5.13106, 0, '//cdn.museum.nl/cards/700x394/4f0f62f0-6e54-4d29-b0b4-b3c79b46b3ef\\Het Spoorwegmuseum - Stalen Monsters 1 (persfoto).jpg'),
('/museum/Museum+De+Lakenhal/Museum+De+Lakenhal.aspx', 'Museum De Lakenhal', 52.1629, 4.48716, 0, '//cdn.museum.nl/cards/700x394/b6eb0325-0ae8-43dd-80fb-f3f48b616ac9\\MuseumDeLakenhal-.jpg'),
('/museum/Museum+Sterrenwacht+Sonnenborgh/Museum+Sterrenwacht+Sonnenborgh.aspx', 'Museum Sterrenwacht Sonnenborg', 52.0854, 5.12927, 0, '//cdn.museum.nl/cards/700x394/32ab584c-6931-4dbc-9956-75506354f658\\de grote telescoop_Marieke Wijntjes (1).jpg'),
('/museum/Molenmuseum/Molenmuseum.aspx', 'Molenmuseum', 52.4682, 4.80789, 0, '//cdn.museum.nl/cards/700x394/b92eba4d-fbc2-4c7a-9ea6-4c5822044bc7\\Molenmuseum brievenbus 2 - Simone Ronchetti.jpg'),
('/museum/Paleis+Het+Loo/Paleis+Het+Loo.aspx', 'Paleis Het Loo', 52.2269, 5.93584, 0, '//cdn.museum.nl/cards/700x394/180432d1-1110-49f0-84df-5e8e7b29335b\\Paleis het Loo2.jpg'),
('/museum/Museum+Arnhem/Museum+Arnhem.aspx', 'Museum Arnhem', 51.9853, 5.8922, 0, '//cdn.museum.nl/cards/700x394/8701c850-2eb1-4c99-b7c7-31e79d58b5a5\\GOPR2613-18-41-47-11.jpg'),
('/museum/Museumstoomtram+Hoorn-Medemblik/Museumstoomtram+Hoorn-Medemblik.aspx', 'Museumstoomtram Hoorn-Medembli', 52.6465, 5.05428, 0, '//cdn.museum.nl/cards/700x394/a17c6332-be00-4a83-8a7e-d1579488445e\\Rein Korthof 090513.jpg'),
('/museum/Oudheidkamer+Texel/Oudheidkamer+Texel.aspx', 'Oudheidkamer Texel', 53.0555, 4.79638, 0, '//cdn.museum.nl/cards/700x394/5ffbd105-4080-42b3-859f-9672a3b33447\\oudheidkamer texel.jpg'),
('/museum/Edams+Museum/Edams+Museum.aspx', 'Edams Museum', 52.5127, 5.0496, 0, '//cdn.museum.nl/cards/700x394/5666f14f-1808-4878-a927-24636d36a005\\foto Vind magazine 1.jpg'),
('/museum/Boerderijmuseum+%27%27De+Bovenstreek%27%27/Boerderijmuseum+De+Bovenstreek.aspx', 'Boerderijmuseum \'\'De Bovenstre', 52.4427, 5.91262, 0, '//cdn.museum.nl/cards/700x394/41f18d04-d0af-4692-b2af-d508d3fbc440\\uitleg graan dorsen oogstfeest.jpg'),
('/museum/Huis+Verwolde/Huis+Verwolde.aspx', 'Huis Verwolde', 52.2005, 6.39197, 0, '//cdn.museum.nl/cards/700x394/5d90d39f-fb96-4935-9363-59b0ed54fabf\\Verwolde-huis-vooraanzicht-met vlag1-JBu-09.jpg'),
('/museum/Museum+Meermanno/Museum+Meermanno+%7c+Huis+van+het+boek.aspx', 'Museum Meermanno', 52.085, 4.31574, 0, '//cdn.museum.nl/cards/700x394/1593d2fb-efa0-4fcb-b686-cb7c014d848c\\nieuwepicmeermanno.jpg'),
('/museum/Kranenburgh/Kranenburgh.aspx', 'Kranenburgh', 52.6682, 4.69526, 0, '//cdn.museum.nl/cards/700x394/92f76d05-3dea-4100-a91b-a65c5c987d59\\leo gestel.jpg'),
('/museum/Kasteel+Hernen/Kasteel+Hernen.aspx', 'Kasteel Hernen', 51.8345, 5.67627, 0, '//cdn.museum.nl/cards/700x394/82978cb0-1fe3-4801-8747-3a6825aa1920\\M9271-hernen-kasteel-TonRot.jpg'),
('/museum/Witte+de+With%2c+Hedendaagse+Kunst/Witte+de+With+Center+for+Contemporary+Art.aspx', 'Witte de With, Hedendaagse Kun', 51.9155, 4.47706, 0, '//cdn.museum.nl/cards/700x394/59789726-9002-47e3-aef5-e1074def229b\\_GOE5400-6.jpg'),
('/museum/Teylers+Museum/Teylers+Museum.aspx', 'Teylers Museum', 52.3804, 4.64034, 0, '//cdn.museum.nl/cards/700x394/3fb753ea-bd91-4577-a00e-9a507d4893ee\\Teylers.jpg'),
('/museum/Landgoed+Verhildersum+Leens/Landgoed+Verhildersum+Leens.aspx', 'Landgoed Verhildersum Leens', 53.3625, 6.39303, 0, '//cdn.museum.nl/cards/700x394/630fc636-9592-46b6-8056-451f04530c82\\Landgoed Verhildersum Leens MJK2.jpg'),
('/museum/Graafs+Museum/Graafs+Museum+.aspx', 'Graafs Museum', 51.7575, 5.73874, 0, '//cdn.museum.nl/cards/700x394/musnieuw/graafsmuseum.jpg'),
('/museum/Museum+Gouda/Museum+Gouda.aspx', 'Museum Gouda', 52.0104, 4.71189, 0, '//cdn.museum.nl/cards/700x394/449ef177-a58e-46e4-aeb4-46030cdfabf6\\AchterdeKerk.jpg'),
('/museum/Rijksmuseum+Amsterdam/Rijksmuseum.aspx', 'Rijksmuseum Amsterdam', 52.3605, 4.88487, 0, '//cdn.museum.nl/cards/700x394/6ccfaf87-9870-4ada-af1b-6d5e362db12d\\Atrium Oost - 2013 - John Lewis Marshall - 08.jpg'),
('/museum/Museumpark+Archeon/Archeon.aspx', 'Museumpark Archeon', 52.1143, 4.65164, 0, '//cdn.museum.nl/cards/700x394/d37bc83a-6a54-479d-9ed3-a64302099e07\\archeon.jpg'),
('/museum/Streekmuseum+Veldzicht/Streekmuseum+Veldzicht.aspx', 'Streekmuseum Veldzicht', 52.2197, 4.43892, 0, '//cdn.museum.nl/cards/700x394/veldzicht3.jpg'),
('/museum/Nationaal+Onderduikmuseum/Nationaal+Onderduikmuseum.aspx', 'Nationaal Onderduikmuseum', 51.9277, 6.58146, 0, '//cdn.museum.nl/cards/700x394/0b6d0530-bcd1-41b6-b061-cd1a63e0aaca\\onderduikruimte 1 M12.jpg'),
('/museum/Huygens%27+Hofwijck/Huygens%27+Hofwijck.aspx', 'Huygens\' Hofwijck', 52.0655, 4.36072, 0, '//cdn.museum.nl/cards/700x394/89aaa040-7028-4c45-b15c-1aa60bb8f04a\\huygensmuseum hofwijck nieuwe foto.jpg'),
('/museum/Noordelijk+Scheepvaartmuseum/Noordelijk+Scheepvaartmuseum+.aspx', 'Noordelijk Scheepvaartmuseum', 53.2165, 6.56018, 0, '//cdn.museum.nl/cards/700x394/494de9f9-bf99-49c1-8a7f-2412947a7193\\Museum (1).jpg'),
('/museum/Nationaal+Monument+Kamp+Vught/Nationaal+Monument+Kamp+Vught.aspx', 'Nationaal Monument Kamp Vught', 51.6658, 5.25857, 0, '//cdn.museum.nl/cards/700x394/70a593fc-3196-4390-bdf7-9dcc82879d0a\\Kamp Vught.jpg'),
('/museum/Gemeentelijk+Archeologisch+Museum/Gemeentelijk+Archeologisch+Museum.aspx', 'Gemeentelijk Archeologisch Mus', 51.2741, 3.44809, 0, '//cdn.museum.nl/cards/700x394/plaatjesbank/gem archeologisch museum 7125/7125_skelet_gemaansekrijger.jpg'),
('/museum/Muzeeaquarium+Delfzijl/Muzeeaquarium+Delfzijl.aspx', 'Muzeeaquarium Delfzijl', 53.3353, 6.92708, 0, '//cdn.museum.nl/cards/700x394/63822e64-6d14-4de4-bbb6-7876b997d302\\Muzeeaquarium.jpg'),
('/museum/Literatuurmuseum/Literatuurmuseum.aspx', 'Literatuurmuseum', 52.082, 4.32699, 0, '//cdn.museum.nl/cards/700x394/f6f75e21-db41-497e-bbd0-d83ebe042025\\LetterkundigMuseumGalerij_fotoLodewijkDuijvesteijn.jpg'),
('/museum/Paviljoen+Nederland+en+WOI/Paviljoen+Nederland+en+WO+I.aspx', 'Paviljoen Nederland en WOI', 52.0324, 5.34111, 0, '//cdn.museum.nl/cards/700x394/2a1ced08-95ad-4492-b445-437ae0e8bb0c\\paviljoen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ns`
--

CREATE TABLE `ns` (
  `code` varchar(10) NOT NULL,
  `UICCode` varchar(10) DEFAULT NULL,
  `land` varchar(2) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `lat` float DEFAULT NULL,
  `lng` float DEFAULT NULL,
  `ig` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ns`
--

INSERT INTO `ns` (`code`, `UICCode`, `land`, `name`, `type`, `lat`, `lng`, `ig`) VALUES
('AC', '8400047', 'NL', 'Abcoude', 'STOPTREIN_STATION', 52.2785, 4.977, NULL),
('ACDG', '8727149', 'F', 'Airport Charles de Gaulle', 'KNOOPPUNT_INTERCITY_STATION', 49.004, 2.57113, NULL),
('AH', '8400071', 'NL', 'Arnhem Centraal', 'KNOOPPUNT_INTERCITY_STATION', 51.985, 5.89917, NULL),
('AHBF', '8015345', 'D', 'Aachen Hbf', 'KNOOPPUNT_INTERCITY_STATION', 50.7678, 6.0915, NULL),
('AHP', '8400072', 'NL', 'Arnhem Velperpoort', 'STOPTREIN_STATION', 51.9853, 5.91944, NULL),
('AHPR', '8400075', 'NL', 'Arnhem Presikhaaf', 'STOPTREIN_STATION', 51.9881, 5.94389, NULL),
('AHZ', '8400227', 'NL', 'Arnhem Zuid', 'STOPTREIN_STATION', 51.955, 5.85194, NULL),
('AIME', '8774176', 'F', 'Aime-la-Plagne', 'INTERCITY_STATION', 45.5544, 6.64869, NULL),
('AIXTGV', '8731901', 'F', 'Aix-en-Provence TGV', 'INTERCITY_STATION', 43.5228, 5.44531, NULL),
('AKL', '8400068', 'NL', 'Arkel', 'STOPTREIN_STATION', 51.8719, 4.99278, NULL),
('AKM', '8400049', 'NL', 'Akkrum', 'STOPTREIN_STATION', 53.0464, 5.84361, NULL),
('ALBERT', '8774164', 'F', 'Albertville', 'INTERCITY_STATION', 45.673, 6.38306, NULL),
('ALM', '8400080', 'NL', 'Almere Centrum', 'KNOOPPUNT_INTERCITY_STATION', 52.375, 5.21764, NULL),
('ALMB', '8400081', 'NL', 'Almere Buiten', 'STOPTREIN_STATION', 52.3942, 5.27806, NULL),
('ALMM', '8400082', 'NL', 'Almere Muziekwijk', 'STOPTREIN_STATION', 52.3675, 5.19028, NULL),
('ALMO', '8400226', 'NL', 'Almere Oostvaarders', 'STOPTREIN_STATION', 52.4033, 5.30056, NULL),
('ALMP', '8400104', 'NL', 'Almere Parkwijk', 'STOPTREIN_STATION', 52.3767, 5.24472, NULL),
('AMF', '8400055', 'NL', 'Amersfoort', 'KNOOPPUNT_INTERCITY_STATION', 52.1539, 5.37056, NULL),
('AMFS', '8400054', 'NL', 'Amersfoort Schothorst', 'STOPTREIN_STATION', 52.1748, 5.40389, NULL),
('AML', '8400051', 'NL', 'Almelo', 'KNOOPPUNT_INTERCITY_STATION', 52.3581, 6.65389, NULL),
('AMPO', '8400450', 'NL', 'Almere Poort', 'STOPTREIN_STATION', 52.3428, 5.15194, NULL),
('AMR', '8400050', 'NL', 'Alkmaar', 'KNOOPPUNT_INTERCITY_STATION', 52.6378, 4.73972, NULL),
('AMRI', '8400520', 'NL', 'Almelo de Riet', 'STOPTREIN_STATION', 52.3419, 6.66667, NULL),
('AMRN', '8400052', 'NL', 'Alkmaar Noord', 'STOPTREIN_STATION', 52.6439, 4.76417, NULL),
('ANA', '8400065', 'NL', 'Anna Paulowna', 'STOPTREIN_STATION', 52.8672, 4.81111, NULL),
('ANDD', '8821089', 'B', 'Antwerpen-Noorderdokken', 'STOPTREIN_STATION', 51.2617, 4.42743, NULL),
('APD', '8400066', 'NL', 'Apeldoorn', 'KNOOPPUNT_INTERCITY_STATION', 52.2092, 5.97028, NULL),
('APDM', '8400233', 'NL', 'Apeldoorn De Maten', 'STOPTREIN_STATION', 52.2053, 6.00056, NULL),
('APDO', '8400229', 'NL', 'Apeldoorn Osseveld', 'STOPTREIN_STATION', 52.2153, 6.00444, NULL),
('APG', '8400067', 'NL', 'Appingedam', 'STOPTREIN_STATION', 53.3258, 6.86196, NULL),
('APN', '8400053', 'NL', 'Alphen a/d Rijn', 'KNOOPPUNT_INTERCITY_STATION', 52.1244, 4.65778, NULL),
('ARN', '8400069', 'NL', 'Arnemuiden', 'STOPTREIN_STATION', 51.5017, 3.66917, NULL),
('ASA', '8400057', 'NL', 'Amsterdam Amstel', 'INTERCITY_STATION', 52.3467, 4.91778, NULL),
('ASB', '8400074', 'NL', 'Amsterdam Bijlmer ArenA', 'KNOOPPUNT_STOPTREIN_STATION', 52.3122, 4.94694, NULL),
('ASD', '8400058', 'NL', 'Amsterdam Centraal', 'MEGA_STATION', 52.3789, 4.90028, 'https://www.instagram.com/p/B3IJSQuCs-3/'),
('ASDL', '8400079', 'NL', 'Amsterdam Lelylaan', 'STOPTREIN_STATION', 52.3578, 4.83389, NULL),
('ASDM', '8400060', 'NL', 'Amsterdam Muiderpoort', 'STOPTREIN_STATION', 52.3606, 4.93111, NULL),
('ASDZ', '8400061', 'NL', 'Amsterdam Zuid', 'INTERCITY_STATION', 52.3389, 4.87236, NULL),
('ASHD', '8400231', 'NL', 'Amsterdam Holendrecht', 'STOPTREIN_STATION', 52.2984, 4.95972, NULL),
('ASN', '8400073', 'NL', 'Assen', 'KNOOPPUNT_INTERCITY_STATION', 52.9917, 6.57083, NULL),
('ASS', '8400059', 'NL', 'Amsterdam Sloterdijk', 'KNOOPPUNT_INTERCITY_STATION', 52.3889, 4.83778, 'https://www.instagram.com/p/B2xCoxXiNYZ/'),
('ASSP', '8400235', 'NL', 'Amsterdam Science Park', 'STOPTREIN_STATION', 52.3553, 4.94651, NULL),
('ATN', '8400045', 'NL', 'Aalten', 'STOPTREIN_STATION', 51.9213, 6.57863, NULL),
('ATW', '8821006', 'B', 'Antwerpen-Centraal', 'MEGA_STATION', 51.2161, 4.42122, NULL),
('ATWLB', '8821063', 'B', 'Antwerpen-Luchtbal', 'STOPTREIN_STATION', 51.2449, 4.42515, NULL),
('AVAT', '8400228', 'NL', 'Amersfoort Vathorst', 'STOPTREIN_STATION', 52.1928, 5.43389, NULL),
('AVTGV', '8731896', 'F', 'Avignon TGV', 'MEGA_STATION', 43.9219, 4.78604, NULL),
('AW', '8015199', 'D', 'Aachen West', 'STOPTREIN_STATION', 50.7804, 6.07071, NULL),
('BADENZ', '8503504', 'CH', 'Baden (CH)', 'STOPTREIN_STATION', 47.4764, 8.30772, NULL),
('BASELB', '8014431', 'D', 'Basel Bad Bf', 'STOPTREIN_STATION', 47.5681, 7.6073, NULL),
('BASELS', '8500010', 'CH', 'Basel SBB', 'MEGA_STATION', 47.5474, 7.58956, NULL),
('BD', '8400131', 'NL', 'Breda', 'KNOOPPUNT_INTERCITY_STATION', 51.5956, 4.78, NULL),
('BDE', '8400140', 'NL', 'Bunde', 'STOPTREIN_STATION', 50.8969, 5.73667, NULL),
('BDG', '8400121', 'NL', 'Bodegraven', 'STOPTREIN_STATION', 52.0814, 4.74611, NULL),
('BDM', '8400094', 'NL', 'Bedum', 'STOPTREIN_STATION', 53.3069, 6.59305, NULL),
('BDPB', '8400132', 'NL', 'Breda-Prinsenbeek', 'STOPTREIN_STATION', 51.6064, 4.72083, NULL),
('BERCH', '8821121', 'B', 'Antwerpen-Berchem', 'KNOOPPUNT_STOPTREIN_STATION', 51.2002, 4.43277, NULL),
('BERHBL', '8065969', 'D', 'Berlin Hbf', 'MEGA_STATION', 52.525, 13.3695, NULL),
('BET', '8400112', 'NL', 'Best', 'STOPTREIN_STATION', 51.51, 5.38917, NULL),
('BF', '8400089', 'NL', 'Baflo', 'STOPTREIN_STATION', 53.3609, 6.51856, NULL),
('BGN', '8400108', 'NL', 'Bergen op Zoom', 'STOPTREIN_STATION', 51.4939, 4.29611, NULL),
('BH', '8021156', 'D', 'Bad Bentheim', 'KNOOPPUNT_INTERCITY_STATION', 52.3097, 7.15854, NULL),
('BHDV', '8400236', 'NL', 'Boven-Hardinxveld', 'STOPTREIN_STATION', 51.8322, 4.87806, NULL),
('BHF', '8003004', 'D', 'Berlin Ostbahnhof', 'KNOOPPUNT_INTERCITY_STATION', 52.5105, 13.4347, NULL),
('BHV', '8400114', 'NL', 'Bilthoven', 'STOPTREIN_STATION', 52.13, 5.20389, NULL),
('BIELEF', '8013597', 'D', 'Bielefeld Hbf', 'STOPTREIN_STATION', 52.0293, 8.53272, NULL),
('BK', '8400096', 'NL', 'Beek-Elsloo', 'STOPTREIN_STATION', 50.9475, 5.78667, NULL),
('BKF', '8400230', 'NL', 'Bovenkarspel Flora', 'STOPTREIN_STATION', 52.6961, 5.25278, NULL),
('BKG', '8400127', 'NL', 'Bovenkarspel-Grootebroek', 'STOPTREIN_STATION', 52.695, 5.23778, NULL),
('BKL', '8400133', 'NL', 'Breukelen', 'KNOOPPUNT_STOPTREIN_STATION', 52.1715, 4.9906, 'https://www.instagram.com/p/B3FNpGjiy9a/'),
('BL', '8400100', 'NL', 'Beilen', 'STOPTREIN_STATION', 52.8547, 6.52111, NULL),
('BLL', '8400118', 'NL', 'Bloemendaal', 'STOPTREIN_STATION', 52.4042, 4.6275, NULL),
('BLTM', '8841665', 'B', 'Milmort', 'STOPTREIN_STATION', 50.693, 5.59983, NULL),
('BMN', '8400136', 'NL', 'Brummen', 'STOPTREIN_STATION', 52.0911, 6.14694, NULL),
('BMR', '8400128', 'NL', 'Boxmeer', 'KNOOPPUNT_STOPTREIN_STATION', 51.6445, 5.93903, NULL),
('BN', '8400124', 'NL', 'Borne', 'STOPTREIN_STATION', 52.2989, 6.74806, NULL),
('BNC', '8400091', 'NL', 'Barneveld Centrum', 'STOPTREIN_STATION', 52.14, 5.59028, NULL),
('BNK', '8400141', 'NL', 'Bunnik', 'STOPTREIN_STATION', 52.0631, 5.19444, NULL),
('BNN', '8400092', 'NL', 'Barneveld Noord', 'STOPTREIN_STATION', 52.1614, 5.59806, NULL),
('BNZ', '8400115', 'NL', 'Barneveld Zuid', 'STOPTREIN_STATION', 52.1289, 5.60246, NULL),
('BONN', '8015485', 'D', 'Bonn Hbf', 'STOPTREIN_STATION', 50.732, 7.09713, NULL),
('BOURG', '8774179', 'F', 'Bourg-St-Maurice', 'INTERCITY_STATION', 45.6192, 6.77167, NULL),
('BP', '8400139', 'NL', 'Buitenpost', 'KNOOPPUNT_SNELTREIN_STATION', 53.2565, 6.14465, NULL),
('BR', '8400117', 'NL', 'Blerick', 'STOPTREIN_STATION', 51.3725, 6.155, NULL),
('BRD', '8400090', 'NL', 'Barendrecht', 'STOPTREIN_STATION', 51.8547, 4.55333, NULL),
('BRESSX', '8843901', 'B', 'Bressoux', 'STOPTREIN_STATION', 50.6438, 5.61125, NULL),
('BRN', '8400086', 'NL', 'Baarn', 'KNOOPPUNT_STOPTREIN_STATION', 52.2083, 5.28083, NULL),
('BRUSC', '8813003', 'B', 'Brussel-Centraal', 'INTERCITY_STATION', 50.8455, 4.35711, NULL),
('BRUSN', '8812005', 'B', 'Brussel-Noord', 'KNOOPPUNT_STOPTREIN_STATION', 50.8605, 4.36179, NULL),
('BRUSZ', '8814001', 'B', 'Brussel-Zuid/Midi', 'MEGA_STATION', 50.835, 4.3346, NULL),
('BSD', '8400097', 'NL', 'Beesd', 'STOPTREIN_STATION', 51.8994, 5.19444, NULL),
('BSK', '8400125', 'NL', 'Boskoop', 'STOPTREIN_STATION', 52.0778, 4.64694, NULL),
('BSKS', '8400126', 'NL', 'Boskoop Snijdelwijk', 'STOPTREIN_STATION', 52.0677, 4.64619, NULL),
('BSMZ', '8400145', 'NL', 'Bussum Zuid', 'STOPTREIN_STATION', 52.2658, 5.16306, NULL),
('BSPD', '8003025', 'D', 'Berlin-Spandau', 'INTERCITY_STATION', 52.5343, 13.1989, NULL),
('BTL', '8400129', 'NL', 'Boxtel', 'KNOOPPUNT_STOPTREIN_STATION', 51.5843, 5.31912, NULL),
('BUENDE', '8021173', 'D', 'BÃ¼nde (Westf)', 'STOPTREIN_STATION', 52.2021, 8.57388, NULL),
('BV', '8400113', 'NL', 'Beverwijk', 'INTERCITY_STATION', 52.4783, 4.65667, NULL),
('BZL', '8400354', 'NL', 'Kapelle-Biezelinge', 'STOPTREIN_STATION', 51.4808, 3.95611, NULL),
('CAS', '8400151', 'NL', 'Castricum', 'INTERCITY_STATION', 52.5458, 4.65861, NULL),
('CHAMB', '8774100', 'F', 'ChambÃ©ry', 'INTERCITY_STATION', 45.5713, 5.91953, NULL),
('CK', '8400155', 'NL', 'Cuijk', 'STOPTREIN_STATION', 51.7267, 5.8743, NULL),
('CL', '8400154', 'NL', 'Culemborg', 'STOPTREIN_STATION', 51.9467, 5.22694, NULL),
('CO', '8400153', 'NL', 'Coevorden', 'KNOOPPUNT_SNELTREIN_STATION', 52.6636, 6.73556, NULL),
('CPS', '8400147', 'NL', 'Capelle Schollevaar', 'STOPTREIN_STATION', 51.9542, 4.58417, NULL),
('CVM', '8400152', 'NL', 'Chevremont', 'STOPTREIN_STATION', 50.8761, 6.05972, NULL),
('DA', '8400164', 'NL', 'Daarlerveen', 'STOPTREIN_STATION', 52.4408, 6.57599, NULL),
('DB', '8400182', 'NL', 'Driebergen-Zeist', 'KNOOPPUNT_STOPTREIN_STATION', 52.0653, 5.25861, NULL),
('DDN', '8400169', 'NL', 'Delden', 'STOPTREIN_STATION', 52.26, 6.71611, NULL),
('DDR', '8400180', 'NL', 'Dordrecht', 'KNOOPPUNT_INTERCITY_STATION', 51.8072, 4.66833, NULL),
('DDRS', '8400186', 'NL', 'Dordrecht Stadspolders', 'STOPTREIN_STATION', 51.8019, 4.71667, NULL),
('DDZD', '8400181', 'NL', 'Dordrecht Zuid', 'STOPTREIN_STATION', 51.79, 4.67139, NULL),
('DEI', '8400168', 'NL', 'Deinum', 'STOPTREIN_STATION', 53.1888, 5.72816, NULL),
('DID', '8400174', 'NL', 'Didam', 'STOPTREIN_STATION', 51.9335, 6.13241, NULL),
('DL', '8400167', 'NL', 'Dalfsen', 'SNELTREIN_STATION', 52.4983, 6.25861, NULL),
('DLD', '8400179', 'NL', 'Den Dolder', 'KNOOPPUNT_STOPTREIN_STATION', 52.1403, 5.24278, NULL),
('DLN', '8400161', 'NL', 'Dalen', 'STOPTREIN_STATION', 52.6942, 6.75806, NULL),
('DMN', '8400165', 'NL', 'Diemen', 'STOPTREIN_STATION', 52.3451, 4.96757, NULL),
('DMNZ', '8400163', 'NL', 'Diemen Zuid', 'STOPTREIN_STATION', 52.3303, 4.95583, NULL),
('DN', '8400172', 'NL', 'Deurne', 'STOPTREIN_STATION', 51.4558, 5.78889, NULL),
('DR', '8400176', 'NL', 'Dieren', 'INTERCITY_STATION', 52.045, 6.10306, NULL),
('DRH', '8400183', 'NL', 'Driehuis', 'STOPTREIN_STATION', 52.4425, 4.63806, NULL),
('DRON', '8400198', 'NL', 'Dronten', 'STOPTREIN_STATION', 52.5344, 5.72089, NULL),
('DRP', '8400192', 'NL', 'Dronryp', 'STOPTREIN_STATION', 53.1778, 5.63474, NULL),
('DT', '8400170', 'NL', 'Delft', 'KNOOPPUNT_INTERCITY_STATION', 52.0067, 4.35639, NULL),
('DTC', '8400177', 'NL', 'Doetinchem', 'KNOOPPUNT_STOPTREIN_STATION', 51.9586, 6.29621, NULL),
('DTCH', '8400184', 'NL', 'Doetinchem De Huet', 'STOPTREIN_STATION', 51.9591, 6.25985, NULL),
('DTZ', '8400166', 'NL', 'Delft Zuid', 'STOPTREIN_STATION', 51.9908, 4.36472, NULL),
('DUISB', '8010316', 'D', 'Duisburg Hbf', 'KNOOPPUNT_INTERCITY_STATION', 51.4298, 6.7759, NULL),
('DUSSEL', '8008094', 'D', 'DÃ¼sseldorf Hbf', 'MEGA_STATION', 51.2201, 6.79314, NULL),
('DV', '8400173', 'NL', 'Deventer', 'KNOOPPUNT_INTERCITY_STATION', 52.2575, 6.16056, NULL),
('DVC', '8400185', 'NL', 'Deventer Colmschate', 'STOPTREIN_STATION', 52.2503, 6.21444, NULL),
('DVD', '8400194', 'NL', 'Duivendrecht', 'KNOOPPUNT_STOPTREIN_STATION', 52.3233, 4.93639, NULL),
('DVN', '8400193', 'NL', 'Duiven', 'STOPTREIN_STATION', 51.9433, 6.01472, NULL),
('DVNK', '8400188', 'NL', 'De Vink', 'STOPTREIN_STATION', 52.1472, 4.45639, NULL),
('DWE', '8400745', 'NL', 'De Westereen', 'STOPTREIN_STATION', 53.2482, 6.03463, NULL),
('DZ', '8400171', 'NL', 'Delfzijl', 'STOPTREIN_STATION', 53.3337, 6.92408, NULL),
('DZW', '8400175', 'NL', 'Delfzijl West', 'STOPTREIN_STATION', 53.3321, 6.90691, NULL),
('EABG', '8021148', 'D', 'Altenberge', 'STOPTREIN_STATION', 52.0522, 7.4812, NULL),
('EAHS', '8021123', 'D', 'Ahaus', 'STOPTREIN_STATION', 52.0798, 7.01636, NULL),
('EBEO', '8010385', 'D', 'BÃ¶nen', 'STOPTREIN_STATION', 51.598, 7.7573, NULL),
('EBFT', '8021143', 'D', 'Steinfurt-Burgsteinfurt', 'STOPTREIN_STATION', 52.1474, 7.32934, NULL),
('EBGO', '8021150', 'D', 'Steinfurt-Borghorst', 'STOPTREIN_STATION', 52.1188, 7.39758, NULL),
('EBOK', '8021111', 'D', 'Bork (Westf)', 'STOPTREIN_STATION', 51.6699, 7.45664, NULL),
('EC', '8400195', 'NL', 'Echt', 'STOPTREIN_STATION', 51.1006, 5.87889, NULL),
('ECMF', '8021119', 'D', 'Coesfeld (Westf)', 'STOPTREIN_STATION', 51.939, 7.1642, NULL),
('ED', '8400200', 'NL', 'Ede-Wageningen', 'KNOOPPUNT_INTERCITY_STATION', 52.0278, 5.67306, NULL),
('EDC', '8400201', 'NL', 'Ede Centrum', 'STOPTREIN_STATION', 52.0436, 5.66833, NULL),
('EDD', '8010101', 'D', 'Dortmund Derne', 'STOPTREIN_STATION', 51.5675, 7.52855, NULL),
('EDKD', '8010102', 'D', 'Dortmund Kirchderne', 'STOPTREIN_STATION', 51.5471, 7.5101, NULL),
('EDN', '8400219', 'NL', 'Eijsden', 'STOPTREIN_STATION', 50.7719, 5.71, NULL),
('EDO', '8010053', 'D', 'Dortmund Hbf', 'KNOOPPUNT_INTERCITY_STATION', 51.5179, 7.45929, NULL),
('EDULH', '8021005', 'D', 'DÃ¼lmen', 'STOPTREIN_STATION', 51.8279, 7.29576, NULL),
('EEM', '8400202', 'NL', 'Eemshaven', 'STOPTREIN_STATION', 53.4584, 6.832, NULL),
('EENP', '8008134', 'D', 'Ennepetal', 'STOPTREIN_STATION', 51.3049, 7.34329, NULL),
('EEPE', '8021126', 'D', 'Epe (Westf)', 'STOPTREIN_STATION', 52.1835, 7.03009, NULL),
('EGH', '8400338', 'NL', 'Eygelshoven', 'STOPTREIN_STATION', 50.8906, 6.045, NULL),
('EGHM', '8400234', 'NL', 'Eygelshoven Markt', 'STOPTREIN_STATION', 50.896, 6.06025, NULL),
('EGRK', '8071069', 'D', 'Steinfurt-Grottenkamp', 'STOPTREIN_STATION', 52.1234, 7.37603, NULL),
('EHS', '8400196', 'NL', 'Eindhoven Strijp-S', 'STOPTREIN_STATION', 51.4511, 5.45583, NULL),
('EHV', '8400206', 'NL', 'Eindhoven', 'MEGA_STATION', 51.4433, 5.48139, 'https://www.instagram.com/p/B3FLW6SiDMZ/'),
('EHW', '8021121', 'D', 'Rosendahl-Holtwick', 'STOPTREIN_STATION', 51.9995, 7.1215, NULL),
('EHZW', '8010384', 'D', 'Holzwickede', 'STOPTREIN_STATION', 51.5048, 7.61965, NULL),
('EKZ', '8400210', 'NL', 'Enkhuizen', 'STOPTREIN_STATION', 52.6992, 5.28639, NULL),
('EL', '8033415', 'D', 'Elten', 'STOPTREIN_STATION', 51.8743, 6.15417, NULL),
('ELDH', '8021113', 'D', 'LÃ¼dinghausen', 'STOPTREIN_STATION', 51.7618, 7.43165, NULL),
('ELET', '8021117', 'D', 'Lette (Kr Coesfeld)', 'STOPTREIN_STATION', 51.8925, 7.187, NULL),
('ELGD', '8021122', 'D', 'Legden', 'STOPTREIN_STATION', 52.0349, 7.08854, NULL),
('ELUE', '8010098', 'D', 'LÃ¼nen Hbf', 'STOPTREIN_STATION', 51.6171, 7.52949, NULL),
('EM', '8010288', 'D', 'Emmerich', 'KNOOPPUNT_STOPTREIN_STATION', 51.8343, 6.25572, NULL),
('EML', '8400216', 'NL', 'Ermelo', 'STOPTREIN_STATION', 52.3017, 5.61472, NULL),
('EMN', '8400208', 'NL', 'Emmen', 'SNELTREIN_STATION', 52.79, 6.89944, NULL),
('EMNZ', '8400407', 'NL', 'Emmen Zuid', 'SNELTREIN_STATION', 52.7489, 6.87478, NULL),
('EMTE', '8021151', 'D', 'Metelen Land', 'STOPTREIN_STATION', 52.1624, 7.25442, NULL),
('ENBE', '8021147', 'D', 'MÃ¼nster-HÃ¤ger', 'STOPTREIN_STATION', 52.0223, 7.56267, NULL),
('ENHF', '8023783', 'D', 'MÃ¼nster (W) Zentrum Nord', 'STOPTREIN_STATION', 51.985, 7.63861, NULL),
('ENOW', '8021149', 'D', 'Nordwalde', 'STOPTREIN_STATION', 52.0776, 7.46171, NULL),
('EOP', '8021152', 'D', 'Ochtrup', 'STOPTREIN_STATION', 52.2017, 7.18264, NULL),
('EPRN', '8010100', 'D', 'Preussen', 'STOPTREIN_STATION', 51.5883, 7.53933, NULL),
('ES', '8400212', 'NL', 'Enschede', 'KNOOPPUNT_INTERCITY_STATION', 52.2225, 6.89, NULL),
('ESE', '8400217', 'NL', 'Enschede De Eschmarke', 'STOPTREIN_STATION', 52.2214, 6.95111, NULL),
('ESEB', '8021120', 'D', 'Selm-Beifang', 'STOPTREIN_STATION', 51.6929, 7.45483, NULL),
('ESEM', '8021112', 'D', 'Selm', 'STOPTREIN_STATION', 51.7079, 7.4534, NULL),
('ESK', '8400221', 'NL', 'Enschede Kennispark', 'STOPTREIN_STATION', 52.2375, 6.83889, NULL),
('ESN', '8821402', 'B', 'Essen (B)', 'STOPTREIN_STATION', 51.4626, 4.45129, NULL),
('ESRT', '8008016', 'D', 'Schwerte (Ruhr)', 'STOPTREIN_STATION', 51.4423, 7.55896, NULL),
('EST', '8400207', 'NL', 'Elst', 'KNOOPPUNT_STOPTREIN_STATION', 51.9169, 5.855, NULL),
('ETN', '8400218', 'NL', 'Etten-Leur', 'INTERCITY_STATION', 51.575, 4.63583, NULL),
('EUN', '8010382', 'D', 'Unna', 'STOPTREIN_STATION', 51.5386, 7.69531, NULL),
('FBNL', '8819406', 'B', 'Brussels Airport-Zaventem', 'MEGA_STATION', 50.8964, 4.48194, NULL),
('FBR', '8894748', 'B', 'Beveren', 'STOPTREIN_STATION', 51.2081, 4.25944, NULL),
('FFFM', '8011068', 'D', 'Frankfurt (M) Hbf', 'KNOOPPUNT_INTERCITY_STATION', 50.1071, 8.66383, NULL),
('FHS', '8831005', 'B', 'Hasselt', 'STOPTREIN_STATION', 50.9306, 5.3275, NULL),
('FIE', '8831138', 'B', 'Bilzen', 'STOPTREIN_STATION', 50.8683, 5.50917, NULL),
('FKTH', '8821444', 'B', 'Kalmthout', 'STOPTREIN_STATION', 51.391, 4.46682, NULL),
('FLB', '8032572', 'D', 'Limburg SÃ¼d', 'STOPTREIN_STATION', 50.3825, 8.09611, NULL),
('FLK', '8894201', 'B', 'Lokeren', 'STOPTREIN_STATION', 51.1072, 3.98583, NULL),
('FMB', '8822814', 'B', 'Boom', 'STOPTREIN_STATION', 51.0906, 4.36057, NULL),
('FMZ', '8019051', 'D', 'Mainz Hbf', 'INTERCITY_STATION', 50.0011, 8.25872, NULL),
('FN', '8400232', 'NL', 'Franeker', 'STOPTREIN_STATION', 53.1824, 5.54831, NULL),
('FNAF', '8061676', 'D', 'Frankfurt Flughafen Fernb', 'KNOOPPUNT_INTERCITY_STATION', 50.0532, 8.57024, NULL),
('FNU', '8894714', 'B', 'Nieuwkerken-Waas', 'STOPTREIN_STATION', 51.1856, 4.18583, NULL),
('FNZD', '8821196', 'B', 'Antwerpen-Zuid', 'STOPTREIN_STATION', 51.1978, 4.39027, NULL),
('FOE', '8824158', 'B', 'Hoboken-Polder', 'STOPTREIN_STATION', 51.1828, 4.34831, NULL),
('FRP', '8822715', 'B', 'Puurs', 'STOPTREIN_STATION', 51.0772, 4.28273, NULL),
('FSN', '8894508', 'B', 'Sint-Niklaas', 'STOPTREIN_STATION', 51.1719, 4.14417, NULL),
('FSV', '8822848', 'B', 'Ruisbroek-Sauvegarde', 'STOPTREIN_STATION', 51.0812, 4.32551, NULL),
('FTG', '8831310', 'B', 'Tongeren', 'STOPTREIN_STATION', 50.7842, 5.47306, NULL),
('FVS', '8846201', 'B', 'VisÃ©', 'KNOOPPUNT_STOPTREIN_STATION', 50.7378, 5.69232, NULL),
('FWD', '8400638', 'NL', 'FeanwÃ¢lden', 'STOPTREIN_STATION', 53.2352, 5.98866, NULL),
('G', '8021128', 'D', 'Gronau (Westf.)', 'KNOOPPUNT_STOPTREIN_STATION', 52.2152, 7.02211, NULL),
('GBG', '8400259', 'NL', 'Gramsbergen', 'STOPTREIN_STATION', 52.6092, 6.67583, NULL),
('GBR', '8400262', 'NL', 'Glanerbrug', 'STOPTREIN_STATION', 52.2186, 6.97444, NULL),
('GD', '8400258', 'NL', 'Gouda', 'KNOOPPUNT_INTERCITY_STATION', 52.0175, 4.70444, NULL),
('GDG', '8400257', 'NL', 'Gouda Goverwelle', 'STOPTREIN_STATION', 52.015, 4.74083, NULL),
('GDM', '8400244', 'NL', 'Geldermalsen', 'KNOOPPUNT_STOPTREIN_STATION', 51.883, 5.27127, NULL),
('GDP', '8831112', 'B', 'Diepenbeek', 'STOPTREIN_STATION', 50.9103, 5.41972, NULL),
('GDR', '8400241', 'NL', 'Gaanderen', 'STOPTREIN_STATION', 51.9307, 6.3486, NULL),
('GERP', '8400238', 'NL', 'Groningen Europapark', 'STOPTREIN_STATION', 53.2048, 6.58542, NULL),
('GK', '8400267', 'NL', 'Grijpskerk', 'STOPTREIN_STATION', 53.2557, 6.30978, NULL),
('GKT', '8821451', 'B', 'Kijkuit', 'STOPTREIN_STATION', 51.3787, 4.46722, NULL),
('GLN', '8400246', 'NL', 'Geleen Oost', 'STOPTREIN_STATION', 50.9669, 5.84306, NULL),
('GN', '8400263', 'NL', 'Groningen', 'KNOOPPUNT_INTERCITY_STATION', 53.2106, 6.56472, NULL),
('GND', '8400295', 'NL', 'Hardinxveld-Giessendam', 'STOPTREIN_STATION', 51.8306, 4.83583, NULL),
('GNN', '8400264', 'NL', 'Groningen Noord', 'STOPTREIN_STATION', 53.2301, 6.55632, NULL),
('GO', '8400254', 'NL', 'Goor', 'STOPTREIN_STATION', 52.2303, 6.58444, NULL),
('GP', '8400245', 'NL', 'Geldrop', 'KNOOPPUNT_STOPTREIN_STATION', 51.4197, 5.55056, NULL),
('GR', '8400256', 'NL', 'Gorinchem', 'KNOOPPUNT_STOPTREIN_STATION', 51.8339, 4.96833, NULL),
('GS', '8400253', 'NL', 'Goes', 'STOPTREIN_STATION', 51.4981, 3.89056, NULL),
('GSB', '8007799', 'D', 'Berlin Gesundbrunnen', 'INTERCITY_STATION', 52.5486, 13.3904, NULL),
('GV', '8400280', 'NL', 'Den Haag HS', 'KNOOPPUNT_INTERCITY_STATION', 52.0697, 4.3225, NULL),
('GVC', '8400282', 'NL', 'Den Haag Centraal', 'MEGA_STATION', 52.0803, 4.325, 'https://www.instagram.com/p/B3ASZ98CpIF/'),
('GVM', '8400278', 'NL', 'Den Haag Mariahoeve', 'STOPTREIN_STATION', 52.0906, 4.36944, NULL),
('GVMW', '8400279', 'NL', 'Den Haag Moerwijk', 'STOPTREIN_STATION', 52.0539, 4.30861, NULL),
('GW', '8400266', 'NL', 'Grou-Jirnsum', 'STOPTREIN_STATION', 53.0889, 5.8225, NULL),
('GWD', '8821436', 'B', 'Wildert', 'STOPTREIN_STATION', 51.4277, 4.4634, NULL),
('GZ', '8400251', 'NL', 'Gilze-Rijen', 'STOPTREIN_STATION', 51.5836, 4.92611, NULL),
('HAD', '8400302', 'NL', 'Heemstede-Aerdenhout', 'INTERCITY_STATION', 52.3592, 4.60667, NULL),
('HAGEN', '8008073', 'D', 'Hagen Hbf', 'KNOOPPUNT_SNELTREIN_STATION', 51.3627, 7.46025, NULL),
('HAMM', '8010002', 'D', 'Hamm (Westf.)', 'KNOOPPUNT_STOPTREIN_STATION', 51.6781, 7.80782, NULL),
('HANN', '8013552', 'D', 'Hannover Hbf', 'MEGA_STATION', 52.377, 9.74168, NULL),
('HB', '8400326', 'NL', 'Hoensbroek', 'STOPTREIN_STATION', 50.9056, 5.93056, NULL),
('HBZM', '8400438', 'NL', 'Hardinxveld Blauwe Zoom', 'STOPTREIN_STATION', 51.8294, 4.81556, NULL),
('HD', '8400294', 'NL', 'Harderwijk', 'KNOOPPUNT_STOPTREIN_STATION', 52.3375, 5.61972, NULL),
('HDB', '8400293', 'NL', 'Hardenberg', 'SNELTREIN_STATION', 52.5728, 6.62861, NULL),
('HDE', '8400388', 'NL', '\'t Harde', 'STOPTREIN_STATION', 52.4092, 5.89361, NULL),
('HDG', '8400292', 'NL', 'Hurdegaryp', 'STOPTREIN_STATION', 53.2188, 5.93454, NULL),
('HDR', '8400311', 'NL', 'Den Helder', 'INTERCITY_STATION', 52.9553, 4.76111, NULL),
('HDRZ', '8400303', 'NL', 'Den Helder Zuid', 'STOPTREIN_STATION', 52.9325, 4.76417, NULL),
('HFD', '8400332', 'NL', 'Hoofddorp', 'STOPTREIN_STATION', 52.2933, 4.70056, NULL),
('HGL', '8400316', 'NL', 'Hengelo', 'KNOOPPUNT_INTERCITY_STATION', 52.2617, 6.79389, NULL),
('HGLG', '8400433', 'NL', 'Hengelo Gezondheidspark', 'STOPTREIN_STATION', 52.2617, 6.77361, NULL),
('HGLO', '8400312', 'NL', 'Hengelo Oost', 'STOPTREIN_STATION', 52.2689, 6.81944, NULL),
('HGV', '8400330', 'NL', 'Hoogeveen', 'STOPTREIN_STATION', 52.7339, 6.47361, NULL),
('HGZ', '8400331', 'NL', 'Hoogezand-Sappemeer', 'KNOOPPUNT_STOPTREIN_STATION', 53.1598, 6.77075, NULL),
('HIL', '8400329', 'NL', 'Hillegom', 'STOPTREIN_STATION', 52.3025, 4.56556, NULL),
('HK', '8400317', 'NL', 'Heemskerk', 'STOPTREIN_STATION', 52.4953, 4.68694, NULL),
('HKS', '8400334', 'NL', 'Hoogkarspel', 'STOPTREIN_STATION', 52.6906, 5.18389, NULL),
('HLG', '8400296', 'NL', 'Harlingen', 'STOPTREIN_STATION', 53.1704, 5.42519, NULL),
('HLGH', '8400298', 'NL', 'Harlingen Haven', 'STOPTREIN_STATION', 53.1749, 5.41129, NULL),
('HLM', '8400285', 'NL', 'Haarlem', 'KNOOPPUNT_INTERCITY_STATION', 52.3878, 4.63833, NULL),
('HLMS', '8400270', 'NL', 'Haarlem Spaarnwoude', 'STOPTREIN_STATION', 52.3828, 4.67306, NULL),
('HLO', '8400309', 'NL', 'Heiloo', 'STOPTREIN_STATION', 52.5994, 4.70056, NULL),
('HM', '8400313', 'NL', 'Helmond', 'KNOOPPUNT_INTERCITY_STATION', 51.4756, 5.66194, NULL),
('HMBH', '8400299', 'NL', 'Helmond Brouwhuis', 'STOPTREIN_STATION', 51.4707, 5.70177, NULL),
('HMBV', '8400242', 'NL', 'Helmond Brandevoort', 'STOPTREIN_STATION', 51.4622, 5.60722, NULL),
('HMH', '8400300', 'NL', 'Helmond \'t Hout', 'STOPTREIN_STATION', 51.4679, 5.63085, NULL),
('HMN', '8400315', 'NL', 'Hemmen-Dodewaard', 'STOPTREIN_STATION', 51.9222, 5.67373, NULL),
('HN', '8400337', 'NL', 'Hoorn', 'KNOOPPUNT_INTERCITY_STATION', 52.6447, 5.05556, NULL),
('HNK', '8400336', 'NL', 'Hoorn Kersenboogerd', 'STOPTREIN_STATION', 52.6536, 5.08556, NULL),
('HNO', '8400310', 'NL', 'Heino', 'STOPTREIN_STATION', 52.4272, 6.22111, NULL),
('HNP', '8400323', 'NL', 'Hindeloopen', 'STOPTREIN_STATION', 52.9465, 5.42306, NULL),
('HON', '8400328', 'NL', 'Holten', 'STOPTREIN_STATION', 52.2839, 6.42028, NULL),
('HOR', '8400327', 'NL', 'Hollandsche Rading', 'STOPTREIN_STATION', 52.1778, 5.17917, NULL),
('HR', '8400305', 'NL', 'Heerenveen', 'INTERCITY_STATION', 52.9614, 5.91417, NULL),
('HRL', '8400307', 'NL', 'Heerlen', 'KNOOPPUNT_INTERCITY_STATION', 50.8908, 5.975, NULL),
('HRLW', '8400404', 'NL', 'Heerlen Woonboulevard', 'STOPTREIN_STATION', 50.8967, 5.95222, NULL),
('HRN', '8400297', 'NL', 'Haren', 'STOPTREIN_STATION', 53.1761, 6.61722, NULL),
('HRNOVT', '8400290', 'NL', 'Haren OV Transferium', 'FACULTATIEF_STATION', 53.1701, 6.5922, NULL),
('HRT', '8400339', 'NL', 'Horst-Sevenum', 'STOPTREIN_STATION', 51.4264, 6.04222, NULL),
('HRY', '8400301', 'NL', 'Heerenveen IJsstadion', 'FACULTATIEF_STATION', 52.9353, 5.94389, NULL),
('HT', '8400319', 'NL', '\'s-Hertogenbosch', 'KNOOPPUNT_INTERCITY_STATION', 51.6905, 5.29362, NULL),
('HTN', '8400340', 'NL', 'Houten', 'KNOOPPUNT_STOPTREIN_STATION', 52.034, 5.16821, NULL),
('HTNC', '8400335', 'NL', 'Houten Castellum', 'STOPTREIN_STATION', 52.017, 5.17949, NULL),
('HTO', '8400320', 'NL', '\'s-Hertogenbosch Oost', 'STOPTREIN_STATION', 51.7006, 5.31833, NULL),
('HVL', '8400490', 'NL', 'Hoevelaken', 'STOPTREIN_STATION', 52.1665, 5.45718, NULL),
('HVS', '8400322', 'NL', 'Hilversum', 'KNOOPPUNT_INTERCITY_STATION', 52.2258, 5.18194, NULL),
('HVSM', '8400324', 'NL', 'Hilversum Media Park', 'STOPTREIN_STATION', 52.2381, 5.17389, NULL),
('HVSP', '8400570', 'NL', 'Hilversum Sportpark', 'STOPTREIN_STATION', 52.2161, 5.18722, NULL),
('HWD', '8400306', 'NL', 'Heerhugowaard', 'KNOOPPUNT_STOPTREIN_STATION', 52.6697, 4.82278, NULL),
('HWOB', '8013017', 'D', 'Wolfsburg Hbf', 'SNELTREIN_STATION', 52.4295, 10.7882, NULL),
('HWZB', '8400400', 'NL', 'Halfweg-Zwanenburg', 'STOPTREIN_STATION', 52.3859, 4.74717, NULL),
('HZ', '8015190', 'D', 'Herzogenrath', 'STOPTREIN_STATION', 50.8709, 6.09449, NULL),
('HZE', '8400308', 'NL', 'Heeze', 'STOPTREIN_STATION', 51.385, 5.56944, NULL),
('IJT', '8400722', 'NL', 'IJlst', 'STOPTREIN_STATION', 53.0147, 5.61608, NULL),
('INNSB', '8101187', 'A', 'Innsbruck Hbf', 'KNOOPPUNT_INTERCITY_STATION', 47.2633, 11.401, NULL),
('JENBAC', '8101176', 'A', 'Jenbach', 'STOPTREIN_STATION', 47.3884, 11.7784, NULL),
('KARLSR', '8014228', 'D', 'Karlsruhe Hbf', 'INTERCITY_STATION', 48.9936, 8.40074, NULL),
('KBD', '8400367', 'NL', 'Krabbendijke', 'STOPTREIN_STATION', 51.4333, 4.11694, NULL),
('KBK', '8400361', 'NL', 'Klarenbeek', 'STOPTREIN_STATION', 52.1781, 6.08361, NULL),
('KBOI', '8015128', 'D', 'Boisheim', 'INTERCITY_STATION', 51.2743, 6.27459, NULL),
('KBRY', '8015129', 'D', 'Breyell', 'INTERCITY_STATION', 51.2946, 6.24117, NULL),
('KDFFH', '8039904', 'D', 'DÃ¼sseldorf Flughafen', 'KNOOPPUNT_INTERCITY_STATION', 51.292, 6.78684, NULL),
('KDUL', '8015125', 'D', 'DÃ¼lken', 'INTERCITY_STATION', 51.2571, 6.33793, NULL),
('KKD', '8015561', 'D', 'KÃ¶ln Messe/Deutz', 'MEGA_STATION', 50.9409, 6.975, NULL),
('KKO', '8019023', 'D', 'Koblenz Hbf', 'INTERCITY_STATION', 50.3511, 7.58865, NULL),
('KLP', '8400637', 'NL', 'Veenendaal-De Klomp', 'STOPTREIN_STATION', 52.0458, 5.57389, NULL),
('KMA', '8400368', 'NL', 'Krommenie-Assendelft', 'STOPTREIN_STATION', 52.4951, 4.75417, NULL),
('KMR', '8400362', 'NL', 'Klimmen-Ransdaal', 'STOPTREIN_STATION', 50.8664, 5.89056, NULL),
('KMW', '8400366', 'NL', 'Koudum-Molkwerum', 'STOPTREIN_STATION', 52.9028, 5.41069, NULL),
('KN', '8015130', 'D', 'Kaldenkirchen', 'STOPTREIN_STATION', 51.3272, 6.20323, NULL),
('KOLN', '8015458', 'D', 'KÃ¶ln Hbf', 'MEGA_STATION', 50.9432, 6.95892, NULL),
('KPN', '8400353', 'NL', 'Kampen', 'STOPTREIN_STATION', 52.5597, 5.92167, NULL),
('KPNZ', '8400360', 'NL', 'Kampen Zuid', 'STOPTREIN_STATION', 52.5331, 5.91309, NULL),
('KRD', '8400355', 'NL', 'Kerkrade Centrum', 'KNOOPPUNT_STOPTREIN_STATION', 50.8617, 6.0575, NULL),
('KRG', '8400370', 'NL', 'Kruiningen-Yerseke', 'STOPTREIN_STATION', 51.465, 4.03722, NULL),
('KSB', '8015588', 'D', 'Siegburg/Bonn', 'STOPTREIN_STATION', 50.7939, 7.203, NULL),
('KSWE', '8008136', 'D', 'Schwelm', 'STOPTREIN_STATION', 51.2905, 7.28968, NULL),
('KTR', '8400359', 'NL', 'Kesteren', 'STOPTREIN_STATION', 51.9314, 5.58335, NULL),
('KUFST', '8102184', 'A', 'Kufstein', 'INTERCITY_STATION', 47.5831, 12.1657, NULL),
('KW', '8400369', 'NL', 'Kropswolde', 'STOPTREIN_STATION', 53.1617, 6.72209, NULL),
('KWBA', '8008142', 'D', 'Wuppertal-Barmen', 'STOPTREIN_STATION', 51.2671, 7.19593, NULL),
('KWO', '8008138', 'D', 'Wuppertal Oberbarmen', 'STOPTREIN_STATION', 51.2738, 7.22148, NULL),
('KZ', '8400363', 'NL', 'Koog aan de Zaan', 'STOPTREIN_STATION', 52.4586, 4.80556, NULL),
('LAA', '8400380', 'NL', 'Den Haag Laan v NOI', 'KNOOPPUNT_STOPTREIN_STATION', 52.0786, 4.34278, 'https://www.instagram.com/p/B3IJmtricda/'),
('LANDRY', '8774177', 'F', 'Landry', 'INTERCITY_STATION', 45.5741, 6.73378, NULL),
('LC', '8400399', 'NL', 'Lochem', 'STOPTREIN_STATION', 52.1667, 6.42639, NULL),
('LDL', '8400384', 'NL', 'Leiden Lammenschans', 'STOPTREIN_STATION', 52.1469, 4.4925, NULL),
('LDM', '8400386', 'NL', 'Leerdam', 'STOPTREIN_STATION', 51.8947, 5.09139, NULL),
('LEDN', '8400390', 'NL', 'Leiden Centraal', 'KNOOPPUNT_INTERCITY_STATION', 52.1661, 4.48167, NULL),
('LEER', '8021091', 'D', 'Leer (Ostfriesl)', 'STOPTREIN_STATION', 53.2317, 7.46528, NULL),
('LEUVEN', '8833001', 'B', 'Leuven', 'INTERCITY_STATION', 50.8814, 4.71568, NULL),
('LG', '8400548', 'NL', 'Landgraaf', 'KNOOPPUNT_STOPTREIN_STATION', 50.8964, 6.01917, NULL),
('LGL', '8841731', 'B', 'Glons', 'STOPTREIN_STATION', 50.7503, 5.53528, NULL),
('LHS', '8841608', 'B', 'Herstal', 'STOPTREIN_STATION', 50.6608, 5.62231, NULL),
('LILLEE', '8722326', 'F', 'Lille Europe', 'INTERCITY_STATION', 50.6394, 3.07472, NULL),
('LKM', '8824224', 'B', 'Hemiksem', 'STOPTREIN_STATION', 51.1362, 4.33828, NULL),
('LKP', '8821535', 'B', 'Kapellen', 'STOPTREIN_STATION', 51.3136, 4.43262, NULL),
('LKR', '8821071', 'B', 'Ekeren', 'STOPTREIN_STATION', 51.2816, 4.43412, NULL),
('LLB', '8894433', 'B', 'Belsele', 'STOPTREIN_STATION', 51.1508, 4.08833, NULL),
('LLS', '8400394', 'NL', 'Lelystad Centrum', 'KNOOPPUNT_INTERCITY_STATION', 52.5078, 5.47278, NULL),
('LLZM', '8400135', 'NL', 'Lansingerland-Zoetermeer', 'STOPTREIN_STATION', 52.0422, 4.51722, NULL),
('LM', '8894755', 'B', 'Melsele', 'STOPTREIN_STATION', 51.2106, 4.28667, NULL),
('LNI', '8824240', 'B', 'Niel', 'STOPTREIN_STATION', 51.1115, 4.33845, NULL),
('LP', '8400403', 'NL', 'Loppersum', 'STOPTREIN_STATION', 53.3347, 6.74726, NULL),
('LS', '8024062', 'D', 'Stendal', 'INTERCITY_STATION', 52.5947, 11.8544, NULL),
('LSL', '8841673', 'B', 'Liers', 'STOPTREIN_STATION', 50.6982, 5.56848, NULL),
('LSW', '8894425', 'B', 'Sinaai', 'STOPTREIN_STATION', 51.1433, 4.06889, NULL),
('LTN', '8400405', 'NL', 'Lunteren', 'STOPTREIN_STATION', 52.0853, 5.62444, NULL),
('LTV', '8400395', 'NL', 'Lichtenvoorde-Groenlo', 'STOPTREIN_STATION', 52.0119, 6.59641, NULL),
('LUIK', '8841004', 'B', 'LiÃ¨ge-Guillemins', 'KNOOPPUNT_INTERCITY_STATION', 50.6244, 5.56648, NULL),
('LUIKJ', '8841558', 'B', 'LiÃ¨ge-Jonfosse', 'STOPTREIN_STATION', 50.6405, 5.56197, NULL),
('LUIKP', '8841525', 'B', 'LiÃ¨ge-Palais', 'STOPTREIN_STATION', 50.6465, 5.57072, NULL),
('LUT', '8400248', 'NL', 'Geleen-Lutterade', 'STOPTREIN_STATION', 50.9756, 5.82472, NULL),
('LW', '8400387', 'NL', 'Leeuwarden', 'KNOOPPUNT_INTERCITY_STATION', 53.1958, 5.79222, NULL),
('LWC', '8400389', 'NL', 'Leeuwarden Camminghaburen', 'STOPTREIN_STATION', 53.2022, 5.8423, NULL),
('LZD', '8894821', 'B', 'Zwijndrecht (B)', 'STOPTREIN_STATION', 51.2142, 4.33, NULL),
('MA', '8002140', 'D', 'Augsburg Hbf', 'SNELTREIN_STATION', 48.3654, 10.8855, NULL),
('MANNHE', '8014008', 'D', 'Mannheim Hbf', 'INTERCITY_STATION', 49.4794, 8.46892, NULL),
('MARIA', '8821543', 'B', 'Sint-Mariaburg', 'STOPTREIN_STATION', 51.2913, 4.43495, NULL),
('MARNE', '8738264', 'F', 'Marne-la-VallÃ©e-Chessy', 'STOPTREIN_STATION', 48.8683, 2.78218, NULL),
('MARS', '8775100', 'F', 'Marseille-St-Charles', 'INTERCITY_STATION', 43.3038, 5.38195, NULL),
('MAS', '8400419', 'NL', 'Maarssen', 'STOPTREIN_STATION', 52.1353, 5.03361, 'https://www.instagram.com/p/B3IKnEViOpN/'),
('MCGB', '8015165', 'D', 'MÃ¶nchengladbach Hbf', 'KNOOPPUNT_INTERCITY_STATION', 51.1966, 6.44611, NULL),
('MDB', '8400436', 'NL', 'Middelburg', 'STOPTREIN_STATION', 51.4947, 3.61722, NULL),
('MECH', '8822004', 'B', 'Mechelen', 'INTERCITY_STATION', 51.0179, 4.48306, NULL),
('MES', '8400434', 'NL', 'Meerssen', 'SNELTREIN_STATION', 50.8829, 5.751, NULL),
('MG', '8400427', 'NL', 'Mantgum', 'STOPTREIN_STATION', 53.1296, 5.7132, NULL),
('MGZB', '8002084', 'D', 'GÃ¼nzburg', 'SNELTREIN_STATION', 48.4602, 10.2787, NULL),
('MID', '8821519', 'B', 'Heide (B)', 'STOPTREIN_STATION', 51.3648, 4.46043, NULL),
('MINDEN', '8013578', 'D', 'Minden (Westf)', 'STOPTREIN_STATION', 52.2901, 8.93473, NULL),
('MMLH', '8400446', 'NL', 'Mook Molenhoek', 'STOPTREIN_STATION', 51.7663, 5.87913, NULL),
('MOUT', '8774172', 'F', 'Moutiers-Salins-Brides', 'STOPTREIN_STATION', 45.4866, 6.53105, NULL),
('MP', '8400435', 'NL', 'Meppel', 'KNOOPPUNT_STOPTREIN_STATION', 52.6908, 6.1975, NULL),
('MRB', '8400428', 'NL', 'MariÃ«nberg', 'KNOOPPUNT_SNELTREIN_STATION', 52.5094, 6.57528, NULL),
('MRN', '8400417', 'NL', 'Maarn', 'KNOOPPUNT_STOPTREIN_STATION', 52.0642, 5.37, NULL),
('MT', '8400424', 'NL', 'Maastricht', 'KNOOPPUNT_INTERCITY_STATION', 50.8503, 5.70556, NULL),
('MTH', '8400430', 'NL', 'Martenshoek', 'STOPTREIN_STATION', 53.1607, 6.7403, NULL),
('MTN', '8400449', 'NL', 'Maastricht Noord', 'STOPTREIN_STATION', 50.8709, 5.71774, NULL),
('MTR', '8400426', 'NL', 'Maastricht Randwyck', 'KNOOPPUNT_STOPTREIN_STATION', 50.8386, 5.71722, NULL),
('MUNCHH', '8020347', 'D', 'MÃ¼nchen Hbf', 'MEGA_STATION', 48.1402, 11.5583, NULL),
('MUNST', '8021011', 'D', 'MÃ¼nster (Westf) Hbf', 'KNOOPPUNT_INTERCITY_STATION', 51.9569, 7.63589, NULL),
('MZ', '8400432', 'NL', 'Maarheeze', 'STOPTREIN_STATION', 51.3038, 5.63034, NULL),
('NA', '8400454', 'NL', 'Nieuw Amsterdam', 'SNELTREIN_STATION', 52.7186, 6.84861, NULL),
('NDB', '8400452', 'NL', 'Naarden-Bussum', 'KNOOPPUNT_STOPTREIN_STATION', 52.2803, 5.15694, NULL),
('NDKP', '8821105', 'B', 'Noorderkempen', 'STOPTREIN_STATION', 51.3573, 4.63273, NULL),
('NEUSS', '8015149', 'D', 'Neuss Hbf', 'STOPTREIN_STATION', 51.2044, 6.68468, NULL),
('NH', '8400467', 'NL', 'Nuth', 'STOPTREIN_STATION', 50.9194, 5.89278, NULL),
('NKK', '8400469', 'NL', 'Nijkerk', 'STOPTREIN_STATION', 52.2222, 5.49389, NULL),
('NM', '8400470', 'NL', 'Nijmegen', 'KNOOPPUNT_INTERCITY_STATION', 51.8436, 5.85222, NULL),
('NMD', '8400475', 'NL', 'Nijmegen Dukenburg', 'STOPTREIN_STATION', 51.8242, 5.79556, NULL),
('NMGO', '8400477', 'NL', 'Nijmegen Goffert', 'STOPTREIN_STATION', 51.8273, 5.82272, NULL),
('NMH', '8400468', 'NL', 'Nijmegen Heyendaal', 'STOPTREIN_STATION', 51.8269, 5.8675, NULL),
('NML', '8400451', 'NL', 'Nijmegen Lent', 'STOPTREIN_STATION', 51.8618, 5.85969, NULL),
('NS', '8400466', 'NL', 'Nunspeet', 'STOPTREIN_STATION', 52.3708, 5.78528, NULL),
('NSCH', '8400457', 'NL', 'Bad Nieuweschans', 'KNOOPPUNT_STOPTREIN_STATION', 53.1844, 7.19937, NULL),
('NVD', '8400472', 'NL', 'Nijverdal', 'STOPTREIN_STATION', 52.3661, 6.462, NULL),
('NVP', '8400460', 'NL', 'Nieuw Vennep', 'STOPTREIN_STATION', 52.2589, 4.64556, NULL),
('NWK', '8400455', 'NL', 'Nieuwerkerk a/d IJssel', 'STOPTREIN_STATION', 51.9653, 4.61694, NULL),
('O', '8400495', 'NL', 'Oss', 'KNOOPPUNT_INTERCITY_STATION', 51.7656, 5.53222, NULL),
('OBD', '8400480', 'NL', 'Obdam', 'STOPTREIN_STATION', 52.6781, 4.90722, NULL),
('OBERH', '8010263', 'D', 'Oberhausen Hbf', 'KNOOPPUNT_STOPTREIN_STATION', 51.4751, 6.85204, NULL),
('OBERHS', '8010266', 'D', 'Oberhausen-Sterkrade', 'STOPTREIN_STATION', 51.5122, 6.84361, NULL),
('ODB', '8400498', 'NL', 'Oudenbosch', 'STOPTREIN_STATION', 51.5878, 4.53333, NULL),
('ODZ', '8400483', 'NL', 'Oldenzaal', 'STOPTREIN_STATION', 52.3064, 6.93472, NULL),
('OEYNH', '8013585', 'D', 'Bad Oeynhausen', 'INTERCITY_STATION', 52.2055, 8.79693, NULL),
('OMN', '8400487', 'NL', 'Ommen', 'KNOOPPUNT_SNELTREIN_STATION', 52.5094, 6.41583, NULL),
('OP', '8400494', 'NL', 'Opheusden', 'STOPTREIN_STATION', 51.9262, 5.63711, NULL),
('OSNH', '8021025', 'D', 'OsnabrÃ¼ck Hbf', 'MEGA_STATION', 52.2729, 8.06178, NULL),
('OST', '8400486', 'NL', 'Olst', 'STOPTREIN_STATION', 52.3347, 6.11306, NULL),
('OT', '8400482', 'NL', 'Oisterwijk', 'STOPTREIN_STATION', 51.5822, 5.19417, NULL),
('OTB', '8400489', 'NL', 'Oosterbeek', 'STOPTREIN_STATION', 51.995, 5.84, NULL),
('OVN', '8400501', 'NL', 'Overveen', 'STOPTREIN_STATION', 52.3911, 4.60611, NULL),
('OW', '8400496', 'NL', 'Oss West', 'STOPTREIN_STATION', 51.7581, 5.50556, NULL),
('PARIS', '8727100', 'F', 'Paris-Nord', 'MEGA_STATION', 48.8798, 2.35575, NULL),
('PMO', '8400506', 'NL', 'Purmerend Overwhere', 'STOPTREIN_STATION', 52.5114, 4.96833, NULL),
('PMR', '8400508', 'NL', 'Purmerend', 'KNOOPPUNT_STOPTREIN_STATION', 52.5031, 4.95361, NULL),
('PMW', '8400499', 'NL', 'Purmerend Weidevenne', 'STOPTREIN_STATION', 52.4966, 4.93563, NULL),
('PT', '8400509', 'NL', 'Putten', 'STOPTREIN_STATION', 52.265, 5.57528, NULL),
('RAI', '8400056', 'NL', 'Amsterdam RAI', 'STOPTREIN_STATION', 52.3372, 4.89028, NULL),
('RAT', '8400513', 'NL', 'Raalte', 'STOPTREIN_STATION', 52.3917, 6.2775, NULL),
('RB', '8400521', 'NL', 'Rilland-Bath', 'STOPTREIN_STATION', 51.4228, 4.16111, NULL),
('RD', '8400525', 'NL', 'Roodeschool', 'STOPTREIN_STATION', 53.4213, 6.7587, NULL),
('RF', '8014350', 'D', 'Freiburg (Breisgau) Hbf', 'SNELTREIN_STATION', 47.9979, 7.84134, NULL),
('RH', '8400519', 'NL', 'Rheden', 'STOPTREIN_STATION', 52.0101, 6.0314, NULL),
('RHEINE', '8021067', 'D', 'Rheine', 'KNOOPPUNT_INTERCITY_STATION', 52.2763, 7.43426, NULL),
('RHN', '8400517', 'NL', 'Rhenen', 'KNOOPPUNT_STOPTREIN_STATION', 51.9586, 5.57833, NULL),
('RL', '8400537', 'NL', 'Ruurlo', 'STOPTREIN_STATION', 52.0811, 6.44927, NULL),
('RLB', '8400542', 'NL', 'Rotterdam Lombardijen', 'STOPTREIN_STATION', 51.88, 4.53139, NULL),
('RM', '8400523', 'NL', 'Roermond', 'KNOOPPUNT_INTERCITY_STATION', 51.1931, 5.99417, NULL),
('RO', '8014309', 'D', 'Offenburg', 'SNELTREIN_STATION', 48.4765, 7.94672, NULL),
('RS', '8400524', 'NL', 'Rosmalen', 'STOPTREIN_STATION', 51.7147, 5.36806, NULL),
('RSD', '8400526', 'NL', 'Roosendaal', 'KNOOPPUNT_INTERCITY_STATION', 51.5403, 4.45833, NULL),
('RSN', '8400538', 'NL', 'Rijssen', 'STOPTREIN_STATION', 52.3122, 6.52028, NULL),
('RSW', '8400505', 'NL', 'Rijswijk', 'STOPTREIN_STATION', 52.0397, 4.31917, NULL),
('RTA', '8400507', 'NL', 'Rotterdam Alexander', 'INTERCITY_STATION', 51.9519, 4.55361, NULL),
('RTB', '8400529', 'NL', 'Rotterdam Blaak', 'STOPTREIN_STATION', 51.9203, 4.48889, 'https://www.instagram.com/p/B3IFEh2CSWA/'),
('RTD', '8400530', 'NL', 'Rotterdam Centraal', 'MEGA_STATION', 51.925, 4.46889, 'https://www.instagram.com/p/B3INvxhCMOu/'),
('RTN', '8400531', 'NL', 'Rotterdam Noord', 'STOPTREIN_STATION', 51.9422, 4.48167, NULL),
('RTST', '8400534', 'NL', 'Rotterdam Stadion', 'FACULTATIEF_STATION', 51.8939, 4.51972, NULL),
('RTZ', '8400533', 'NL', 'Rotterdam Zuid', 'STOPTREIN_STATION', 51.9044, 4.51028, NULL),
('RV', '8400518', 'NL', 'Reuver', 'STOPTREIN_STATION', 51.2832, 6.07896, NULL),
('RVS', '8400515', 'NL', 'Ravenstein', 'STOPTREIN_STATION', 51.7942, 5.63583, NULL),
('SBK', '8400572', 'NL', 'Spaubeek', 'STOPTREIN_STATION', 50.9433, 5.85053, NULL),
('SCHLL', '8824232', 'B', 'Schelle', 'STOPTREIN_STATION', 51.1255, 4.34023, NULL),
('SD', '8400569', 'NL', 'Soestdijk', 'STOPTREIN_STATION', 52.1836, 5.3, NULL),
('SDA', '8400551', 'NL', 'Scheemda', 'STOPTREIN_STATION', 53.1655, 6.97778, NULL),
('SDM', '8400553', 'NL', 'Schiedam Centrum', 'STOPTREIN_STATION', 51.9212, 4.40899, NULL),
('SDT', '8400565', 'NL', 'Sliedrecht', 'STOPTREIN_STATION', 51.8297, 4.77833, NULL),
('SDTB', '8400497', 'NL', 'Sliedrecht Baanhoek', 'STOPTREIN_STATION', 51.8297, 4.74333, NULL),
('SGL', '8400341', 'NL', 'Houthem-St. Gerlach', 'STOPTREIN_STATION', 50.8733, 5.79722, NULL),
('SGN', '8400549', 'NL', 'Schagen', 'STOPTREIN_STATION', 52.7844, 4.80528, NULL),
('SHL', '8400561', 'NL', 'Schiphol Airport', 'MEGA_STATION', 52.3094, 4.76194, 'https://www.instagram.com/p/B3FNhyQCFLE/'),
('SK', '8400566', 'NL', 'Sneek', 'KNOOPPUNT_STOPTREIN_STATION', 53.0329, 5.6524, NULL),
('SKND', '8400574', 'NL', 'Sneek Noord', 'STOPTREIN_STATION', 53.0409, 5.66318, NULL),
('SM', '8400583', 'NL', 'Swalmen', 'STOPTREIN_STATION', 51.2358, 6.03228, NULL),
('SN', '8400554', 'NL', 'Schinnen', 'STOPTREIN_STATION', 50.9392, 5.87444, NULL),
('SOG', '8400555', 'NL', 'Schin op Geul', 'STOPTREIN_STATION', 50.8564, 5.87222, NULL),
('SPM', '8400545', 'NL', 'Sappemeer Oost', 'STOPTREIN_STATION', 53.1589, 6.79556, NULL),
('SPTN', '8400543', 'NL', 'Santpoort Noord', 'STOPTREIN_STATION', 52.4339, 4.6325, NULL),
('SPTZ', '8400544', 'NL', 'Santpoort Zuid', 'STOPTREIN_STATION', 52.4197, 4.63139, NULL),
('SRN', '8400582', 'NL', 'Susteren', 'STOPTREIN_STATION', 51.0614, 5.86306, NULL),
('SSH', '8400603', 'NL', 'Sassenheim', 'STOPTREIN_STATION', 52.2153, 4.51722, 'https://www.instagram.com/p/B3AQFhnCJzP/'),
('ST', '8400567', 'NL', 'Soest', 'KNOOPPUNT_STOPTREIN_STATION', 52.1733, 5.31, NULL),
('STD', '8400564', 'NL', 'Sittard', 'KNOOPPUNT_INTERCITY_STATION', 51.0017, 5.85861, NULL),
('STM', '8400576', 'NL', 'Stedum', 'STOPTREIN_STATION', 53.3262, 6.68756, NULL),
('STP', '7015400', 'GB', 'London St. Pancras Int.', 'MEGA_STATION', 51.5314, -0.126136, NULL),
('STV', '8400575', 'NL', 'Stavoren', 'STOPTREIN_STATION', 52.8866, 5.36002, NULL),
('STZ', '8400571', 'NL', 'Soest Zuid', 'STOPTREIN_STATION', 52.1653, 5.30306, NULL),
('SWD', '8400547', 'NL', 'Sauwerd', 'STOPTREIN_STATION', 53.2911, 6.5404, NULL),
('SWK', '8400578', 'NL', 'Steenwijk', 'INTERCITY_STATION', 52.7915, 6.11456, NULL),
('TB', '8400597', 'NL', 'Tilburg', 'KNOOPPUNT_INTERCITY_STATION', 51.5606, 5.08361, NULL),
('TBG', '8400592', 'NL', 'Terborg', 'STOPTREIN_STATION', 51.9225, 6.36425, NULL),
('TBR', '8400598', 'NL', 'Tilburg Reeshof', 'STOPTREIN_STATION', 51.5736, 4.99444, NULL),
('TBU', '8400594', 'NL', 'Tilburg Universiteit', 'STOPTREIN_STATION', 51.565, 5.05111, NULL),
('TG', '8400591', 'NL', 'Tegelen', 'STOPTREIN_STATION', 51.3389, 6.14253, NULL),
('TGO', '8029066', 'D', 'GÃ¶ppingen', 'SNELTREIN_STATION', 48.7002, 9.65168, NULL),
('TL', '8400596', 'NL', 'Tiel', 'KNOOPPUNT_STOPTREIN_STATION', 51.8894, 5.42222, NULL),
('TP', '8029060', 'D', 'Plochingen', 'SNELTREIN_STATION', 48.7131, 9.41081, NULL),
('TPSW', '8400600', 'NL', 'Tiel Passewaaij', 'STOPTREIN_STATION', 51.8739, 5.39222, NULL),
('TS', '8029034', 'D', 'Stuttgart Hbf', 'KNOOPPUNT_INTERCITY_STATION', 48.7841, 9.18163, NULL),
('TU', '8029103', 'D', 'Ulm Hbf', 'SNELTREIN_STATION', 48.399, 9.98217, NULL),
('TWL', '8400599', 'NL', 'Twello', 'STOPTREIN_STATION', 52.2378, 6.09861, NULL),
('UHM', '8400618', 'NL', 'Uithuizermeeden', 'STOPTREIN_STATION', 53.4146, 6.7203, NULL),
('UHZ', '8400617', 'NL', 'Uithuizen', 'STOPTREIN_STATION', 53.41, 6.67489, NULL),
('UST', '8400619', 'NL', 'Usquert', 'STOPTREIN_STATION', 53.4015, 6.60938, NULL),
('UT', '8400621', 'NL', 'Utrecht Centraal', 'MEGA_STATION', 52.0889, 5.11028, 'https://www.instagram.com/p/B3IGjveCPsB/'),
('UTG', '8400615', 'NL', 'Uitgeest', 'KNOOPPUNT_STOPTREIN_STATION', 52.5217, 4.70167, NULL),
('UTLN', '8400623', 'NL', 'Utrecht Lunetten', 'STOPTREIN_STATION', 52.0656, 5.14417, NULL),
('UTLR', '8400607', 'NL', 'Utrecht Leidsche Rijn', 'STOPTREIN_STATION', 52.099, 5.06523, NULL),
('UTM', '8400624', 'NL', 'Utrecht Maliebaan', 'STOPTREIN_STATION', 52.0878, 5.13139, 'https://www.instagram.com/p/B3ICisOiV9q/'),
('UTO', '8400620', 'NL', 'Utrecht Overvecht', 'KNOOPPUNT_STOPTREIN_STATION', 52.11, 5.12472, 'https://www.instagram.com/p/B3IM89Hit9p/'),
('UTT', '8400614', 'NL', 'Utrecht Terwijde', 'STOPTREIN_STATION', 52.1001, 5.04395, NULL),
('UTVR', '8400606', 'NL', 'Utrecht Vaartsche Rijn', 'KNOOPPUNT_STOPTREIN_STATION', 52.0789, 5.12167, NULL),
('UTZL', '8400613', 'NL', 'Utrecht Zuilen', 'STOPTREIN_STATION', 52.1031, 5.09, NULL),
('VALTGV', '8776302', 'F', 'Valence TGV', 'STOPTREIN_STATION', 44.9278, 4.89321, NULL),
('VB', '8400658', 'NL', 'Voorburg', 'STOPTREIN_STATION', 52.0667, 4.35944, NULL),
('VD', '8400661', 'NL', 'Vorden', 'STOPTREIN_STATION', 52.1072, 6.31705, NULL),
('VDL', '8400656', 'NL', 'Voerendaal', 'STOPTREIN_STATION', 50.8872, 5.93028, NULL),
('VDM', '8400636', 'NL', 'Veendam', 'KNOOPPUNT_STOPTREIN_STATION', 53.1032, 6.88475, NULL),
('VEM', '8400668', 'NL', 'Voorst-Empe', 'STOPTREIN_STATION', 52.1575, 6.14361, NULL),
('VG', '8400667', 'NL', 'Vught', 'STOPTREIN_STATION', 51.6556, 5.29194, NULL),
('VH', '8400655', 'NL', 'Voorhout', 'STOPTREIN_STATION', 52.2244, 4.48444, 'https://www.instagram.com/p/B2_nqILC0ek/'),
('VHP', '8400666', 'NL', 'Vroomshoop', 'STOPTREIN_STATION', 52.4572, 6.56967, NULL),
('VIERS', '8015122', 'D', 'Viersen', 'STOPTREIN_STATION', 51.2552, 6.40388, NULL),
('VK', '8400632', 'NL', 'Valkenburg', 'KNOOPPUNT_SNELTREIN_STATION', 50.8697, 5.83222, NULL),
('VL', '8400644', 'NL', 'Venlo', 'KNOOPPUNT_INTERCITY_STATION', 51.3636, 6.17278, NULL),
('VLB', '8400647', 'NL', 'Vierlingsbeek', 'STOPTREIN_STATION', 51.5919, 5.99714, NULL),
('VMW', '8400078', 'NL', 'Amsterdam Van der Madeweg', 'FACULTATIEF_STATION', 52.3301, 4.92975, NULL),
('VNDC', '8400627', 'NL', 'Veenendaal Centrum', 'KNOOPPUNT_STOPTREIN_STATION', 52.02, 5.54861, NULL),
('VNDW', '8400628', 'NL', 'Veenendaal West', 'STOPTREIN_STATION', 52.0281, 5.53139, NULL),
('VP', '8400640', 'NL', 'Velp', 'STOPTREIN_STATION', 51.9947, 5.98028, NULL),
('VRY', '8400646', 'NL', 'Venray', 'KNOOPPUNT_STOPTREIN_STATION', 51.5266, 6.01418, NULL),
('VS', '8400652', 'NL', 'Vlissingen', 'KNOOPPUNT_INTERCITY_STATION', 51.4458, 3.59528, NULL),
('VSS', '8400653', 'NL', 'Vlissingen Souburg', 'STOPTREIN_STATION', 51.4647, 3.59528, NULL),
('VST', '8400659', 'NL', 'Voorschoten', 'STOPTREIN_STATION', 52.1253, 4.4325, 'https://www.instagram.com/p/B29MZQdiycZ/'),
('VSV', '8400635', 'NL', 'Varsseveld', 'STOPTREIN_STATION', 51.9373, 6.45884, NULL),
('VTN', '8400651', 'NL', 'Vleuten', 'STOPTREIN_STATION', 52.1031, 5.0074, NULL),
('VZ', '8400664', 'NL', 'Vriezenveen', 'STOPTREIN_STATION', 52.402, 6.60041, NULL),
('WAD', '8400675', 'NL', 'Waddinxveen', 'STOPTREIN_STATION', 52.0442, 4.64972, NULL),
('WADN', '8400674', 'NL', 'Waddinxveen Noord', 'STOPTREIN_STATION', 52.055, 4.64833, NULL),
('WADT', '8400677', 'NL', 'Waddinxveen Triangel', 'STOPTREIN_STATION', 52.0272, 4.6491, NULL),
('WC', '8400710', 'NL', 'Wijchen', 'STOPTREIN_STATION', 51.8117, 5.73083, NULL),
('WD', '8400702', 'NL', 'Woerden', 'KNOOPPUNT_STOPTREIN_STATION', 52.085, 4.89361, NULL),
('WDN', '8400691', 'NL', 'Wierden', 'KNOOPPUNT_STOPTREIN_STATION', 52.3614, 6.59167, NULL),
('WESEL', '8010275', 'D', 'Wesel', 'STOPTREIN_STATION', 51.6558, 6.62722, NULL),
('WF', '8400704', 'NL', 'Wolfheze', 'STOPTREIN_STATION', 52.0056, 5.79361, NULL),
('WFM', '8400679', 'NL', 'Warffum', 'STOPTREIN_STATION', 53.3908, 6.56714, NULL),
('WH', '8400711', 'NL', 'Wijhe', 'STOPTREIN_STATION', 52.3903, 6.14056, NULL),
('WK', '8400706', 'NL', 'Workum', 'STOPTREIN_STATION', 52.9725, 5.45643, NULL),
('WL', '8400686', 'NL', 'Wehl', 'STOPTREIN_STATION', 51.9578, 6.21384, NULL),
('WM', '8400707', 'NL', 'Wormerveer', 'STOPTREIN_STATION', 52.4892, 4.79222, NULL),
('WP', '8400685', 'NL', 'Weesp', 'KNOOPPUNT_STOPTREIN_STATION', 52.3128, 5.04306, NULL),
('WR', '8021239', 'D', 'Weener', 'STOPTREIN_STATION', 53.1631, 7.3442, NULL),
('WS', '8400696', 'NL', 'Winschoten', 'KNOOPPUNT_STOPTREIN_STATION', 53.1392, 7.0351, NULL),
('WSM', '8400697', 'NL', 'Winsum', 'STOPTREIN_STATION', 53.3301, 6.52029, NULL),
('WT', '8400684', 'NL', 'Weert', 'INTERCITY_STATION', 51.2486, 5.70361, NULL),
('WTV', '8400688', 'NL', 'Westervoort', 'STOPTREIN_STATION', 51.9629, 5.9695, NULL),
('WUPPH', '8008140', 'D', 'Wuppertal Hbf', 'STOPTREIN_STATION', 51.2543, 7.14939, NULL),
('WUPPV', '8008082', 'D', 'Wuppertal-Vohwinkel', 'STOPTREIN_STATION', 51.2335, 7.07237, NULL),
('WV', '8400705', 'NL', 'Wolvega', 'STOPTREIN_STATION', 52.8808, 6.00361, NULL),
('WW', '8400698', 'NL', 'Winterswijk', 'KNOOPPUNT_STOPTREIN_STATION', 51.9677, 6.71552, NULL),
('WWW', '8400700', 'NL', 'Winterswijk West', 'STOPTREIN_STATION', 51.9745, 6.70417, NULL),
('WZ', '8400690', 'NL', 'Wezep', 'STOPTREIN_STATION', 52.4542, 6.0025, NULL),
('YPB', '8400379', 'NL', 'Den Haag Ypenburg', 'STOPTREIN_STATION', 52.0553, 4.39222, NULL),
('ZA', '8400734', 'NL', 'Zetten-Andelst', 'STOPTREIN_STATION', 51.9201, 5.72284, NULL),
('ZB', '8400742', 'NL', 'Zuidbroek', 'KNOOPPUNT_STOPTREIN_STATION', 53.1596, 6.86791, NULL),
('ZBM', '8400732', 'NL', 'Zaltbommel', 'STOPTREIN_STATION', 51.8089, 5.26333, NULL),
('ZD', '8400731', 'NL', 'Zaandam', 'KNOOPPUNT_INTERCITY_STATION', 52.4389, 4.81361, NULL),
('ZDK', '8400728', 'NL', 'Zaandam Kogerveld', 'STOPTREIN_STATION', 52.4567, 4.82028, NULL),
('ZH', '8400743', 'NL', 'Zuidhorn', 'STOPTREIN_STATION', 53.2486, 6.40624, NULL),
('ZL', '8400747', 'NL', 'Zwolle', 'KNOOPPUNT_INTERCITY_STATION', 52.5047, 6.09194, NULL),
('ZLW', '8400382', 'NL', 'Lage Zwaluwe', 'KNOOPPUNT_STOPTREIN_STATION', 51.6911, 4.66306, NULL),
('ZP', '8400744', 'NL', 'Zutphen', 'KNOOPPUNT_INTERCITY_STATION', 52.1453, 6.19417, NULL),
('ZTM', '8400741', 'NL', 'Zoetermeer', 'KNOOPPUNT_STOPTREIN_STATION', 52.0475, 4.47722, NULL),
('ZTMO', '8400740', 'NL', 'Zoetermeer Oost', 'STOPTREIN_STATION', 52.0464, 4.49278, NULL),
('ZUE', '8503000', 'CH', 'ZÃ¼rich HB', 'INTERCITY_STATION', 47.3782, 8.5392, NULL),
('ZV', '8400735', 'NL', 'Zevenaar', 'KNOOPPUNT_STOPTREIN_STATION', 51.9231, 6.07194, NULL),
('ZVB', '8400737', 'NL', 'Zevenbergen', 'STOPTREIN_STATION', 51.6404, 4.60904, NULL),
('ZVT', '8400733', 'NL', 'Zandvoort aan Zee', 'STOPTREIN_STATION', 52.3753, 4.53278, NULL),
('ZWD', '8400752', 'NL', 'Zwijndrecht', 'STOPTREIN_STATION', 51.815, 4.64167, NULL),
('ZZS', '8400364', 'NL', 'Zaandijk Zaanse Schans', 'KNOOPPUNT_STOPTREIN_STATION', 52.4692, 4.805, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ns_check`
-- (See below for the actual view)
--
CREATE TABLE `ns_check` (
`code` varchar(10)
,`UICCode` varchar(10)
,`land` varchar(2)
,`name` varchar(100)
,`type` varchar(50)
,`lat` float
,`lng` float
,`timestamp` timestamp
,`checkout` tinyint(1)
,`transactionId` varchar(550)
,`ig` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ns_checks`
-- (See below for the actual view)
--
CREATE TABLE `ns_checks` (
`code` varchar(10)
,`UICCode` varchar(10)
,`land` varchar(2)
,`name` varchar(100)
,`type` varchar(50)
,`lat` float
,`lng` float
,`timestamp` timestamp
,`checkout` tinyint(1)
,`transactionId` varchar(550)
,`ig` varchar(255)
);

-- --------------------------------------------------------


--
-- Table structure for table `quiz_math`
--

CREATE TABLE `quiz_math` (
  `id` smallint(6) NOT NULL,
  `category` varchar(20) NOT NULL,
  `concat` varchar(20) NOT NULL,
  `result` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_math`
--

INSERT INTO `quiz_math` (`id`, `category`, `concat`, `result`) VALUES
(1, 'addition', '1 + 1', 2),
(2, 'addition', '1 + 2', 3),
(3, 'addition', '1 + 3', 4),
(4, 'addition', '1 + 4', 5),
(5, 'addition', '1 + 5', 6),
(6, 'addition', '1 + 6', 7),
(7, 'addition', '1 + 7', 8),
(8, 'addition', '1 + 8', 9),
(9, 'addition', '1 + 9', 10),
(10, 'addition', '2 + 1', 3),
(11, 'addition', '2 + 2', 4),
(12, 'addition', '2 + 3', 5),
(13, 'addition', '2 + 4', 6),
(14, 'addition', '2 + 5', 7),
(15, 'addition', '2 + 6', 8),
(16, 'addition', '2 + 7', 9),
(17, 'addition', '2 + 8', 10),
(18, 'addition', '2 + 9', 11),
(19, 'addition', '3 + 1', 4),
(20, 'addition', '3 + 2', 5),
(21, 'addition', '3 + 3', 6),
(22, 'addition', '3 + 4', 7),
(23, 'addition', '3 + 5', 8),
(24, 'addition', '3 + 6', 9),
(25, 'addition', '3 + 7', 10),
(26, 'addition', '3 + 8', 11),
(27, 'addition', '3 + 9', 12),
(28, 'addition', '4 + 1', 5),
(29, 'addition', '4 + 2', 6),
(30, 'addition', '4 + 3', 7),
(31, 'addition', '4 + 4', 8),
(32, 'addition', '4 + 5', 9),
(33, 'addition', '4 + 6', 10),
(34, 'addition', '4 + 7', 11),
(35, 'addition', '4 + 8', 12),
(36, 'addition', '4 + 9', 13),
(37, 'addition', '5 + 1', 6),
(38, 'addition', '5 + 2', 7),
(39, 'addition', '5 + 3', 8),
(40, 'addition', '5 + 4', 9),
(41, 'addition', '5 + 5', 10),
(42, 'addition', '5 + 6', 11),
(43, 'addition', '5 + 7', 12),
(44, 'addition', '5 + 8', 13),
(45, 'addition', '5 + 9', 14),
(46, 'addition', '6 + 1', 7),
(47, 'addition', '6 + 2', 8),
(48, 'addition', '6 + 3', 9),
(49, 'addition', '6 + 4', 10),
(50, 'addition', '6 + 5', 11),
(51, 'addition', '6 + 6', 12),
(52, 'addition', '6 + 7', 13),
(53, 'addition', '6 + 8', 14),
(54, 'addition', '6 + 9', 15),
(55, 'addition', '7 + 1', 8),
(56, 'addition', '7 + 2', 9),
(57, 'addition', '7 + 3', 10),
(58, 'addition', '7 + 4', 11),
(59, 'addition', '7 + 5', 12),
(60, 'addition', '7 + 6', 13),
(61, 'addition', '7 + 7', 14),
(62, 'addition', '7 + 8', 15),
(63, 'addition', '7 + 9', 16),
(64, 'addition', '8 + 1', 9),
(65, 'addition', '8 + 2', 10),
(66, 'addition', '8 + 3', 11),
(67, 'addition', '8 + 4', 12),
(68, 'addition', '8 + 5', 13),
(69, 'addition', '8 + 6', 14),
(70, 'addition', '8 + 7', 15),
(71, 'addition', '8 + 8', 16),
(72, 'addition', '8 + 9', 17),
(73, 'addition', '9 + 1', 10),
(74, 'addition', '9 + 2', 11),
(75, 'addition', '9 + 3', 12),
(76, 'addition', '9 + 4', 13),
(77, 'addition', '9 + 5', 14),
(78, 'addition', '9 + 6', 15),
(79, 'addition', '9 + 7', 16),
(80, 'addition', '9 + 8', 17),
(81, 'addition', '9 + 9', 18),
(82, 'subtraction', '1 - 1', 0),
(83, 'subtraction', '1 - 2', -1),
(84, 'subtraction', '1 - 3', -2),
(85, 'subtraction', '1 - 4', -3),
(86, 'subtraction', '1 - 5', -4),
(87, 'subtraction', '1 - 6', -5),
(88, 'subtraction', '1 - 7', -6),
(89, 'subtraction', '1 - 8', -7),
(90, 'subtraction', '1 - 9', -8),
(91, 'subtraction', '2 - 1', 1),
(92, 'subtraction', '2 - 2', 0),
(93, 'subtraction', '2 - 3', -1),
(94, 'subtraction', '2 - 4', -2),
(95, 'subtraction', '2 - 5', -3),
(96, 'subtraction', '2 - 6', -4),
(97, 'subtraction', '2 - 7', -5),
(98, 'subtraction', '2 - 8', -6),
(99, 'subtraction', '2 - 9', -7),
(100, 'subtraction', '3 - 1', 2),
(101, 'subtraction', '3 - 2', 1),
(102, 'subtraction', '3 - 3', 0),
(103, 'subtraction', '3 - 4', -1),
(104, 'subtraction', '3 - 5', -2),
(105, 'subtraction', '3 - 6', -3),
(106, 'subtraction', '3 - 7', -4),
(107, 'subtraction', '3 - 8', -5),
(108, 'subtraction', '3 - 9', -6),
(109, 'subtraction', '4 - 1', 3),
(110, 'subtraction', '4 - 2', 2),
(111, 'subtraction', '4 - 3', 1),
(112, 'subtraction', '4 - 4', 0),
(113, 'subtraction', '4 - 5', -1),
(114, 'subtraction', '4 - 6', -2),
(115, 'subtraction', '4 - 7', -3),
(116, 'subtraction', '4 - 8', -4),
(117, 'subtraction', '4 - 9', -5),
(118, 'subtraction', '5 - 1', 4),
(119, 'subtraction', '5 - 2', 3),
(120, 'subtraction', '5 - 3', 2),
(121, 'subtraction', '5 - 4', 1),
(122, 'subtraction', '5 - 5', 0),
(123, 'subtraction', '5 - 6', -1),
(124, 'subtraction', '5 - 7', -2),
(125, 'subtraction', '5 - 8', -3),
(126, 'subtraction', '5 - 9', -4),
(127, 'subtraction', '6 - 1', 5),
(128, 'subtraction', '6 - 2', 4),
(129, 'subtraction', '6 - 3', 3),
(130, 'subtraction', '6 - 4', 2),
(131, 'subtraction', '6 - 5', 1),
(132, 'subtraction', '6 - 6', 0),
(133, 'subtraction', '6 - 7', -1),
(134, 'subtraction', '6 - 8', -2),
(135, 'subtraction', '6 - 9', -3),
(136, 'subtraction', '7 - 1', 6),
(137, 'subtraction', '7 - 2', 5),
(138, 'subtraction', '7 - 3', 4),
(139, 'subtraction', '7 - 4', 3),
(140, 'subtraction', '7 - 5', 2),
(141, 'subtraction', '7 - 6', 1),
(142, 'subtraction', '7 - 7', 0),
(143, 'subtraction', '7 - 8', -1),
(144, 'subtraction', '7 - 9', -2),
(145, 'subtraction', '8 - 1', 7),
(146, 'subtraction', '8 - 2', 6),
(147, 'subtraction', '8 - 3', 5),
(148, 'subtraction', '8 - 4', 4),
(149, 'subtraction', '8 - 5', 3),
(150, 'subtraction', '8 - 6', 2),
(151, 'subtraction', '8 - 7', 1),
(152, 'subtraction', '8 - 8', 0),
(153, 'subtraction', '8 - 9', -1),
(154, 'subtraction', '9 - 1', 8),
(155, 'subtraction', '9 - 2', 7),
(156, 'subtraction', '9 - 3', 6),
(157, 'subtraction', '9 - 4', 5),
(158, 'subtraction', '9 - 5', 4),
(159, 'subtraction', '9 - 6', 3),
(160, 'subtraction', '9 - 7', 2),
(161, 'subtraction', '9 - 8', 1),
(162, 'subtraction', '9 - 9', 0),
(163, 'multiplication', '1 * 1', 1),
(164, 'multiplication', '1 * 2', 2),
(165, 'multiplication', '1 * 3', 3),
(166, 'multiplication', '1 * 4', 4),
(167, 'multiplication', '1 * 5', 5),
(168, 'multiplication', '1 * 6', 6),
(169, 'multiplication', '1 * 7', 7),
(170, 'multiplication', '1 * 8', 8),
(171, 'multiplication', '1 * 9', 9),
(172, 'multiplication', '2 * 1', 2),
(173, 'multiplication', '2 * 2', 4),
(174, 'multiplication', '2 * 3', 6),
(175, 'multiplication', '2 * 4', 8),
(176, 'multiplication', '2 * 5', 10),
(177, 'multiplication', '2 * 6', 12),
(178, 'multiplication', '2 * 7', 14),
(179, 'multiplication', '2 * 8', 16),
(180, 'multiplication', '2 * 9', 18),
(181, 'multiplication', '3 * 1', 3),
(182, 'multiplication', '3 * 2', 6),
(183, 'multiplication', '3 * 3', 9),
(184, 'multiplication', '3 * 4', 12),
(185, 'multiplication', '3 * 5', 15),
(186, 'multiplication', '3 * 6', 18),
(187, 'multiplication', '3 * 7', 21),
(188, 'multiplication', '3 * 8', 24),
(189, 'multiplication', '3 * 9', 27),
(190, 'multiplication', '4 * 1', 4),
(191, 'multiplication', '4 * 2', 8),
(192, 'multiplication', '4 * 3', 12),
(193, 'multiplication', '4 * 4', 16),
(194, 'multiplication', '4 * 5', 20),
(195, 'multiplication', '4 * 6', 24),
(196, 'multiplication', '4 * 7', 28),
(197, 'multiplication', '4 * 8', 32),
(198, 'multiplication', '4 * 9', 36),
(199, 'multiplication', '5 * 1', 5),
(200, 'multiplication', '5 * 2', 10),
(201, 'multiplication', '5 * 3', 15),
(202, 'multiplication', '5 * 4', 20),
(203, 'multiplication', '5 * 5', 25),
(204, 'multiplication', '5 * 6', 30),
(205, 'multiplication', '5 * 7', 35),
(206, 'multiplication', '5 * 8', 40),
(207, 'multiplication', '5 * 9', 45),
(208, 'multiplication', '6 * 1', 6),
(209, 'multiplication', '6 * 2', 12),
(210, 'multiplication', '6 * 3', 18),
(211, 'multiplication', '6 * 4', 24),
(212, 'multiplication', '6 * 5', 30),
(213, 'multiplication', '6 * 6', 36),
(214, 'multiplication', '6 * 7', 42),
(215, 'multiplication', '6 * 8', 48),
(216, 'multiplication', '6 * 9', 54),
(217, 'multiplication', '7 * 1', 7),
(218, 'multiplication', '7 * 2', 14),
(219, 'multiplication', '7 * 3', 21),
(220, 'multiplication', '7 * 4', 28),
(221, 'multiplication', '7 * 5', 35),
(222, 'multiplication', '7 * 6', 42),
(223, 'multiplication', '7 * 7', 49),
(224, 'multiplication', '7 * 8', 56),
(225, 'multiplication', '7 * 9', 63),
(226, 'multiplication', '8 * 1', 8),
(227, 'multiplication', '8 * 2', 16),
(228, 'multiplication', '8 * 3', 24),
(229, 'multiplication', '8 * 4', 32),
(230, 'multiplication', '8 * 5', 40),
(231, 'multiplication', '8 * 6', 48),
(232, 'multiplication', '8 * 7', 56),
(233, 'multiplication', '8 * 8', 64),
(234, 'multiplication', '8 * 9', 72),
(235, 'multiplication', '9 * 1', 9),
(236, 'multiplication', '9 * 2', 18),
(237, 'multiplication', '9 * 3', 27),
(238, 'multiplication', '9 * 4', 36),
(239, 'multiplication', '9 * 5', 45),
(240, 'multiplication', '9 * 6', 54),
(241, 'multiplication', '9 * 7', 63),
(242, 'multiplication', '9 * 8', 72),
(243, 'multiplication', '9 * 9', 81),
(244, 'division', '1 / 1', 1),
(245, 'division', '2 / 1', 2),
(246, 'division', '2 / 2', 1),
(247, 'division', '3 / 1', 3),
(248, 'division', '3 / 3', 1),
(249, 'division', '4 / 1', 4),
(250, 'division', '4 / 2', 2),
(251, 'division', '4 / 4', 1),
(252, 'division', '5 / 1', 5),
(253, 'division', '5 / 5', 1),
(254, 'division', '6 / 1', 6),
(255, 'division', '6 / 2', 3),
(256, 'division', '6 / 3', 2),
(257, 'division', '6 / 6', 1),
(258, 'division', '7 / 1', 7),
(259, 'division', '7 / 7', 1),
(260, 'division', '8 / 1', 8),
(261, 'division', '8 / 2', 4),
(262, 'division', '8 / 4', 2),
(263, 'division', '8 / 8', 1),
(264, 'division', '9 / 1', 9),
(265, 'division', '9 / 3', 3),
(266, 'division', '9 / 9', 1),
(267, 'division', '10 / 2', 5),
(268, 'division', '10 / 5', 2),
(269, 'division', '12 / 2', 6),
(270, 'division', '12 / 3', 4),
(271, 'division', '12 / 4', 3),
(272, 'division', '12 / 6', 2),
(273, 'division', '14 / 2', 7),
(274, 'division', '14 / 7', 2),
(275, 'division', '15 / 3', 5),
(276, 'division', '15 / 5', 3),
(277, 'division', '16 / 2', 8),
(278, 'division', '16 / 4', 4),
(279, 'division', '16 / 8', 2),
(280, 'division', '18 / 2', 9),
(281, 'division', '18 / 3', 6),
(282, 'division', '18 / 6', 3),
(283, 'division', '18 / 9', 2),
(284, 'division', '20 / 4', 5),
(285, 'division', '20 / 5', 4),
(286, 'division', '21 / 3', 7),
(287, 'division', '21 / 7', 3),
(288, 'division', '24 / 3', 8),
(289, 'division', '24 / 4', 6),
(290, 'division', '24 / 6', 4),
(291, 'division', '24 / 8', 3),
(292, 'division', '25 / 5', 5),
(293, 'division', '27 / 3', 9),
(294, 'division', '27 / 9', 3),
(295, 'division', '28 / 4', 7),
(296, 'division', '28 / 7', 4),
(297, 'division', '30 / 5', 6),
(298, 'division', '30 / 6', 5),
(299, 'division', '32 / 4', 8),
(300, 'division', '32 / 8', 4),
(301, 'division', '35 / 5', 7),
(302, 'division', '35 / 7', 5),
(303, 'division', '36 / 4', 9),
(304, 'division', '36 / 6', 6),
(305, 'division', '36 / 9', 4),
(306, 'division', '40 / 5', 8),
(307, 'division', '40 / 8', 5),
(308, 'division', '42 / 6', 7),
(309, 'division', '42 / 7', 6),
(310, 'division', '45 / 5', 9),
(311, 'division', '45 / 9', 5),
(312, 'division', '48 / 6', 8),
(313, 'division', '48 / 8', 6),
(314, 'division', '49 / 7', 7),
(315, 'division', '54 / 6', 9),
(316, 'division', '54 / 9', 6),
(317, 'division', '56 / 7', 8),
(318, 'division', '56 / 8', 7),
(319, 'division', '63 / 7', 9),
(320, 'division', '63 / 9', 7),
(321, 'division', '64 / 8', 8),
(322, 'division', '72 / 8', 9),
(323, 'division', '72 / 9', 8),
(324, 'division', '81 / 9', 9);

-- --------------------------------------------------------

--
-- Table structure for table `scrap_products`
--

CREATE TABLE `scrap_products` (
  `id` varchar(8) NOT NULL,
  `sub_category` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `active` binary(1) DEFAULT NULL,
  `ingridients` varchar(550) DEFAULT NULL,
  `translation` varchar(50) DEFAULT NULL,
  `usda_id` varchar(15) DEFAULT NULL,
  `usda_name` varchar(500) DEFAULT NULL,
  `price` decimal(4,2) DEFAULT NULL,
  `weight_g_net` varchar(50) DEFAULT NULL,
  `price_per_kg` varchar(50) DEFAULT NULL,
  `fresh_days` int(2) DEFAULT NULL,
  `origin` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `strength`
--

CREATE TABLE `strength` (
  `user` varchar(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pr1` decimal(5,2) DEFAULT NULL,
  `pr2` decimal(5,2) DEFAULT NULL,
  `pr3` decimal(5,2) DEFAULT NULL,
  `pr4` decimal(5,2) DEFAULT NULL,
  `pr5` decimal(5,2) DEFAULT NULL,
  `pr6` decimal(5,2) DEFAULT NULL,
  `pr7` decimal(5,2) DEFAULT NULL,
  `pr8` decimal(5,2) DEFAULT NULL,
  `pr9` decimal(5,2) DEFAULT NULL,
  `pr10` decimal(5,2) DEFAULT NULL,
  `pr11` decimal(5,2) DEFAULT NULL,
  `pr12` decimal(5,2) DEFAULT NULL,
  `pr13` decimal(5,2) DEFAULT NULL,
  `pr14` decimal(5,2) DEFAULT NULL,
  `pr15` decimal(5,2) DEFAULT NULL,
  `pr16` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` varchar(8) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `active` binary(1) DEFAULT NULL,
  `main_category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user` varchar(10) NOT NULL,
  `hash_password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user`, `hash_password`, `admin`) VALUES
('sergio', '$2y$10$7aKOiWVw/jsiIh0U8gV29e3KvqwF0D/.mQRNGijCPmZ8VlG.mggD2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `workouts`
--

CREATE TABLE `workouts` (
  `user` varchar(10) NOT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `comments` varchar(500) DEFAULT NULL,
  `exercise1` tinyint(2) DEFAULT '1',
  `sets1` tinyint(2) DEFAULT '5',
  `reps1` tinyint(2) DEFAULT '5',
  `weight1` decimal(5,2) DEFAULT NULL,
  `exercise2` tinyint(2) DEFAULT '12',
  `sets2` tinyint(2) DEFAULT '5',
  `reps2` tinyint(2) DEFAULT '5',
  `weight2` decimal(5,2) DEFAULT NULL,
  `exercise3` tinyint(2) DEFAULT '14',
  `sets3` tinyint(2) DEFAULT '5',
  `reps3` tinyint(2) DEFAULT '5',
  `weight3` decimal(5,2) DEFAULT NULL,
  `exercise4` tinyint(2) DEFAULT '17',
  `sets4` tinyint(2) DEFAULT '3',
  `reps4` tinyint(2) DEFAULT '10',
  `weight4` decimal(5,2) DEFAULT NULL,
  `exercise5` tinyint(2) DEFAULT '21',
  `sets5` tinyint(2) DEFAULT '3',
  `reps5` tinyint(2) DEFAULT '10',
  `weight5` decimal(5,2) DEFAULT NULL,
  `exercise6` tinyint(2) DEFAULT '-1',
  `sets6` tinyint(2) DEFAULT NULL,
  `reps6` tinyint(2) DEFAULT NULL,
  `weight6` decimal(5,2) DEFAULT NULL,
  `exercise7` tinyint(2) DEFAULT '-1',
  `sets7` tinyint(2) DEFAULT NULL,
  `reps7` tinyint(2) DEFAULT NULL,
  `weight7` decimal(5,2) DEFAULT NULL,
  `exercise8` tinyint(2) DEFAULT '-1',
  `sets8` tinyint(2) DEFAULT NULL,
  `reps8` tinyint(2) DEFAULT NULL,
  `weight8` decimal(5,2) DEFAULT NULL,
  `exercise9` tinyint(2) DEFAULT '-1',
  `sets9` tinyint(2) DEFAULT NULL,
  `reps9` tinyint(2) DEFAULT NULL,
  `weight9` decimal(5,2) DEFAULT NULL,
  `exercise10` tinyint(2) DEFAULT '-1',
  `sets10` tinyint(2) DEFAULT NULL,
  `reps10` tinyint(2) DEFAULT NULL,
  `weight10` decimal(5,2) DEFAULT NULL,
  `exercise11` tinyint(2) DEFAULT '-1',
  `sets11` tinyint(2) DEFAULT NULL,
  `reps11` tinyint(2) DEFAULT NULL,
  `weight11` decimal(5,2) DEFAULT NULL,
  `exercise12` tinyint(2) DEFAULT '-1',
  `sets12` tinyint(2) DEFAULT NULL,
  `reps12` tinyint(2) DEFAULT NULL,
  `weight12` decimal(5,2) DEFAULT NULL,
  `exercise13` tinyint(2) DEFAULT '-1',
  `sets13` tinyint(2) DEFAULT NULL,
  `reps13` tinyint(2) DEFAULT NULL,
  `weight13` decimal(5,2) DEFAULT NULL,
  `exercise14` tinyint(2) DEFAULT '-1',
  `sets14` tinyint(2) DEFAULT NULL,
  `reps14` tinyint(2) DEFAULT NULL,
  `weight14` decimal(5,2) DEFAULT NULL,
  `exercise15` tinyint(2) DEFAULT '-1',
  `sets15` tinyint(2) DEFAULT NULL,
  `reps15` tinyint(2) DEFAULT NULL,
  `weight15` decimal(5,2) DEFAULT NULL,
  `exercise16` tinyint(2) DEFAULT '-1',
  `sets16` tinyint(2) DEFAULT NULL,
  `reps16` tinyint(2) DEFAULT NULL,
  `weight16` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workouts`
--

INSERT INTO `workouts` (`user`, `timestamp`, `comments`, `exercise1`, `sets1`, `reps1`, `weight1`, `exercise2`, `sets2`, `reps2`, `weight2`, `exercise3`, `sets3`, `reps3`, `weight3`, `exercise4`, `sets4`, `reps4`, `weight4`, `exercise5`, `sets5`, `reps5`, `weight5`, `exercise6`, `sets6`, `reps6`, `weight6`, `exercise7`, `sets7`, `reps7`, `weight7`, `exercise8`, `sets8`, `reps8`, `weight8`, `exercise9`, `sets9`, `reps9`, `weight9`, `exercise10`, `sets10`, `reps10`, `weight10`, `exercise11`, `sets11`, `reps11`, `weight11`, `exercise12`, `sets12`, `reps12`, `weight12`, `exercise13`, `sets13`, `reps13`, `weight13`, `exercise14`, `sets14`, `reps14`, `weight14`, `exercise15`, `sets15`, `reps15`, `weight15`, `exercise16`, `sets16`, `reps16`, `weight16`) VALUES
('sergio', '2020-08-15 08:06:16', '', 1, 3, 5, '80.00', 14, 3, 10, '75.00', 16, 3, 10, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 3, 5, '40.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:07:01', '', 1, 3, 5, '80.00', 14, 3, 10, '75.00', 16, 3, 10, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 3, 5, '40.00', 17, 3, 14, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:07:06', '', 1, 3, 5, '80.00', 14, 3, 10, '75.00', 16, 3, 10, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 3, 5, '40.00', 17, 3, 14, '15.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:07:33', '', 1, 3, 5, '80.00', 14, 3, 10, '75.00', 16, 3, 10, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 5, 5, '40.00', 17, 3, 14, '15.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:09:26', '', 1, 3, 5, '80.00', 14, 3, 5, '75.00', 16, 3, 5, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 5, 5, '40.00', 17, 3, 14, '15.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:10:05', '', 1, 3, 5, '80.00', 14, 3, 5, '75.00', 16, 3, 5, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 3, 5, '40.00', 17, 3, 14, '15.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:10:51', '', 1, 3, 5, '80.00', 14, 3, 5, '75.00', 16, 3, 5, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 3, 5, '40.00', 17, 1, 15, '15.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:12:30', '', 1, 3, 5, '80.00', 14, 3, 5, '75.00', 16, 3, 5, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 3, 5, '40.00', 17, 3, 15, '15.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:12:39', '', 1, 3, 5, '80.00', 14, 3, 10, '75.00', 16, 3, 10, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 3, 5, '40.00', 17, 3, 15, '15.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:13:00', '', 1, 3, 5, '80.00', 14, 3, 10, '75.00', 16, 3, 10, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 5, 5, '40.00', 17, 3, 15, '15.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:14:38', '', 1, 5, 5, '80.00', 14, 3, 10, '75.00', 16, 3, 10, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 5, 5, '40.00', 17, 3, 15, '15.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', 8, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:14:55', '', 1, 3, 10, '80.00', 14, 3, 10, '75.00', 16, 3, 10, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 5, 5, '40.00', 17, 3, 15, '15.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', 8, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:15:22', '', 1, 5, 5, '80.00', 14, 3, 10, '75.00', 16, 3, 10, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 5, 5, '40.00', 17, 3, 15, '15.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', 8, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:16:22', '', 1, 5, 5, '80.00', 14, 3, 10, '75.00', 16, 3, 10, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 5, 5, '40.00', 17, 3, 15, '15.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', 8, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:18:14', '', 1, 5, 5, '80.00', 14, 3, 10, '75.00', 16, 3, 10, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 5, 5, '40.00', 17, 3, 15, '15.00', 19, 1, 15, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', 8, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:19:35', '', 1, 5, 5, '80.00', 14, 3, 10, '75.00', 16, 3, 10, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 5, 5, '40.00', 17, 6, 15, '15.00', 19, 0, 15, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', 8, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:21:03', '', 1, 5, 5, '80.00', 14, 3, 10, '75.00', 16, 3, 5, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 5, 5, '40.00', 17, 6, 15, '15.00', 19, 0, 15, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', 8, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:21:21', '', 1, 5, 5, '80.00', 14, 3, 10, '75.00', 16, 3, 5, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 5, 5, '40.00', 17, 3, 15, '15.00', 19, 0, 15, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', 8, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:21:29', '', 1, 5, 5, '80.00', 14, 3, 10, '75.00', 16, 3, 5, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 5, 5, '40.00', 17, 6, 15, '15.00', 19, 0, 15, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', 8, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:21:39', '', 1, 5, 5, '80.00', 14, 3, 10, '75.00', 16, 3, 5, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 5, 5, '40.00', 17, 4, 15, '15.00', 19, 0, 15, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', 8, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:22:11', '', 1, 5, 5, '80.00', 14, 3, 10, '75.00', 16, 3, 5, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 5, 5, '40.00', 17, 6, 15, '15.00', 19, 0, 15, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', 8, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:24:34', '', 1, 5, 5, '80.00', 14, 3, 10, '75.00', 16, 3, 10, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 5, 5, '40.00', 17, 6, 15, '15.00', 19, 0, 15, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', 8, 0, 0, '0.00', -1, 0, 0, '0.00'),
('sergio', '2020-08-15 08:24:54', '', 1, 5, 5, '80.00', 14, 3, 10, '75.00', 16, 3, 10, '75.00', -1, 0, 0, '0.00', 5, 5, 3, '60.00', 9, 5, 5, '40.00', 17, 6, 15, '15.00', 19, 1, 15, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', -1, 0, 0, '0.00', 8, 0, 0, '0.00', -1, 0, 0, '0.00');

-- --------------------------------------------------------

--
-- Structure for view `map`
--
DROP TABLE IF EXISTS `map`;

CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `map`  AS  select `p`.`user` AS `user`,`p`.`id` AS `product_id`,`p`.`name` AS `product_name`,`p`.`active` AS `product_active`,`p`.`feedback` AS `feedback`,`p`.`description` AS `product_description`,`p`.`timestamp` AS `product_timestamp`,`p`.`price_per_kg` AS `price_per_kg`,`p`.`image` AS `image`,`n`.`id` AS `usda_id`,`n`.`name` AS `usda_name`,`n`.`active` AS `usda_active`,`n`.`description` AS `usda_description`,`n`.`category` AS `category`,`n`.`timestamp` AS `usda_timestamp`,`n`.`kcals` AS `kcals`,`n`.`protein` AS `protein`,`n`.`fat` AS `fat`,`n`.`carb` AS `carb`,`n`.`fiber` AS `fiber`,`n`.`water` AS `water`,`n`.`calcium` AS `calcium`,`n`.`iron` AS `iron`,`n`.`magnesium` AS `magnesium`,`n`.`phosphorus` AS `phosphorus`,`n`.`potassium` AS `potassium`,`n`.`sodium` AS `sodium`,`n`.`zinc` AS `zinc`,`n`.`copper` AS `copper`,`n`.`fluoride` AS `fluoride`,`n`.`manganese` AS `manganese`,`n`.`selenium` AS `selenium`,`n`.`vitaminc` AS `vitaminc`,`n`.`thiamin` AS `thiamin`,`n`.`riboflavin` AS `riboflavin`,`n`.`niacin` AS `niacin`,`n`.`pantothenicacid` AS `pantothenicacid`,`n`.`vitaminb6` AS `vitaminb6`,`n`.`folate` AS `folate`,`n`.`choline` AS `choline`,`n`.`vitaminb12` AS `vitaminb12`,`n`.`vitamina` AS `vitamina`,`n`.`vitamine` AS `vitamine`,`n`.`vitamind` AS `vitamind`,`n`.`vitamink` AS `vitamink`,`n`.`ala183und` AS `ala183und`,`n`.`la182und` AS `la182und`,`n`.`monofat` AS `monofat`,`n`.`polyfat` AS `polyfat`,`n`.`satfat` AS `satfat`,`n`.`transfat` AS `transfat`,`n`.`phenylalanine` AS `phenylalanine`,`n`.`valine` AS `valine`,`n`.`threonine` AS `threonine`,`n`.`tryptophan` AS `tryptophan`,`n`.`methionine` AS `methionine`,`n`.`leucine` AS `leucine`,`n`.`isoleucine` AS `isoleucine`,`n`.`lysine` AS `lysine`,`n`.`histidine` AS `histidine` from (`nutritionfacts` `n` join `products` `p` on(((`n`.`id` = `p`.`usda_id`) and (`p`.`user` = `n`.`user`)))) order by `p`.`price_per_kg` ;

-- --------------------------------------------------------

--
-- Structure for view `map_min`
--
DROP TABLE IF EXISTS `map_min`;

CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `map_min`  AS  select `t1`.`user` AS `user`,`t1`.`product_id` AS `product_id`,`t1`.`product_name` AS `product_name`,`t1`.`product_active` AS `product_active`,`t1`.`feedback` AS `feedback`,`t1`.`product_description` AS `product_description`,`t1`.`product_timestamp` AS `product_timestamp`,`t1`.`price_per_kg` AS `price_per_kg`,`t1`.`usda_id` AS `usda_id`,`t1`.`usda_name` AS `usda_name`,`t1`.`usda_active` AS `usda_active`,`t1`.`usda_description` AS `usda_description`,`t1`.`category` AS `category`,`t1`.`usda_timestamp` AS `usda_timestamp`,`t1`.`kcals` AS `kcals`,`t1`.`protein` AS `protein`,`t1`.`fat` AS `fat`,`t1`.`carb` AS `carb`,`t1`.`fiber` AS `fiber`,`t1`.`water` AS `water`,`t1`.`calcium` AS `calcium`,`t1`.`iron` AS `iron`,`t1`.`magnesium` AS `magnesium`,`t1`.`phosphorus` AS `phosphorus`,`t1`.`potassium` AS `potassium`,`t1`.`sodium` AS `sodium`,`t1`.`zinc` AS `zinc`,`t1`.`copper` AS `copper`,`t1`.`fluoride` AS `fluoride`,`t1`.`manganese` AS `manganese`,`t1`.`selenium` AS `selenium`,`t1`.`vitaminc` AS `vitaminc`,`t1`.`thiamin` AS `thiamin`,`t1`.`riboflavin` AS `riboflavin`,`t1`.`niacin` AS `niacin`,`t1`.`pantothenicacid` AS `pantothenicacid`,`t1`.`vitaminb6` AS `vitaminb6`,`t1`.`folate` AS `folate`,`t1`.`choline` AS `choline`,`t1`.`vitaminb12` AS `vitaminb12`,`t1`.`vitamina` AS `vitamina`,`t1`.`vitamine` AS `vitamine`,`t1`.`vitamind` AS `vitamind`,`t1`.`vitamink` AS `vitamink`,`t1`.`ala183und` AS `ala183und`,`t1`.`la182und` AS `la182und`,`t1`.`monofat` AS `monofat`,`t1`.`polyfat` AS `polyfat`,`t1`.`satfat` AS `satfat`,`t1`.`transfat` AS `transfat`,`t1`.`phenylalanine` AS `phenylalanine`,`t1`.`valine` AS `valine`,`t1`.`threonine` AS `threonine`,`t1`.`tryptophan` AS `tryptophan`,`t1`.`methionine` AS `methionine`,`t1`.`leucine` AS `leucine`,`t1`.`isoleucine` AS `isoleucine`,`t1`.`lysine` AS `lysine`,`t1`.`histidine` AS `histidine` from (`map` `t1` left join `map` `t2` on(((`t1`.`usda_id` = `t2`.`usda_id`) and (`t1`.`price_per_kg` > `t2`.`price_per_kg`) and (`t2`.`product_active` = 1)))) where (isnull(`t2`.`price_per_kg`) and (`t1`.`product_active` = 1) and (`t1`.`usda_active` = 1) and (`t1`.`feedback` = 0) and (`t1`.`price_per_kg` > 0)) ;

-- --------------------------------------------------------

--
-- Structure for view `ns_check`
--
DROP TABLE IF EXISTS `ns_check`;

CREATE ALGORITHM=UNDEFINED DEFINER=`coolwork_db`@`localhost` SQL SECURITY DEFINER VIEW `ns_check`  AS  select `t1`.`code` AS `code`,`t1`.`UICCode` AS `UICCode`,`t1`.`land` AS `land`,`t1`.`name` AS `name`,`t1`.`type` AS `type`,`t1`.`lat` AS `lat`,`t1`.`lng` AS `lng`,`t1`.`timestamp` AS `timestamp`,`t1`.`checkout` AS `checkout`,`t1`.`transactionId` AS `transactionId`,`t1`.`ig` AS `ig` from (`ns_checks` `t1` left join `ns_checks` `t2` on(((`t1`.`name` = `t2`.`name`) and (`t1`.`timestamp` > `t2`.`timestamp`)))) where isnull(`t2`.`timestamp`) ;

-- --------------------------------------------------------

--
-- Structure for view `ns_checks`
--
DROP TABLE IF EXISTS `ns_checks`;

CREATE ALGORITHM=UNDEFINED DEFINER=`coolwork_db`@`localhost` SQL SECURITY DEFINER VIEW `ns_checks`  AS  select distinct `n`.`code` AS `code`,`n`.`UICCode` AS `UICCode`,`n`.`land` AS `land`,`n`.`name` AS `name`,`n`.`type` AS `type`,`n`.`lat` AS `lat`,`n`.`lng` AS `lng`,`o`.`timestamp` AS `timestamp`,`o`.`checkout` AS `checkout`,`o`.`transactionId` AS `transactionId`,`n`.`ig` AS `ig` from (`ns` `n` left join `ov` `o` on((`n`.`name` = `o`.`ov_name`))) where (`n`.`land` = 'NL') order by `o`.`timestamp` desc ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_categories`
--
ALTER TABLE `main_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns`
--
ALTER TABLE `ns`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `nutritionfacts`
--
ALTER TABLE `nutritionfacts`
  ADD UNIQUE KEY `id_user` (`id`,`user`),
  ADD KEY `user` (`user`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ov`
--
ALTER TABLE `ov`
  ADD UNIQUE KEY `transactionId_checkout` (`transactionId`,`checkout`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD UNIQUE KEY `id_user` (`id`,`user`),
  ADD KEY `id` (`id`),
  ADD KEY `user` (`user`),
  ADD KEY `usda_id` (`usda_id`);

--
-- Indexes for table `quiz_math`
--
ALTER TABLE `quiz_math`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scrap_products`
--
ALTER TABLE `scrap_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
