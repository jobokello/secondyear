-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2017 at 10:33 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thefundis`
--

-- --------------------------------------------------------

--
-- Table structure for table `myclientinfo`
--

CREATE TABLE `myclientinfo` (
  `clientID` int(50) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `sName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `county` varchar(255) NOT NULL,
  `constituency` varchar(255) NOT NULL,
  `clientPassWord` varchar(255) NOT NULL,
  `securityQuestion` varchar(255) DEFAULT NULL,
  `securityAnswer` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myclientinfo`
--

INSERT INTO `myclientinfo` (`clientID`, `fName`, `sName`, `username`, `email`, `phone`, `county`, `constituency`, `clientPassWord`, `securityQuestion`, `securityAnswer`, `latitude`, `longitude`) VALUES
(31, 'Felix', 'ongati', 'Felix', 'jobokello5@gmail.com', '0725890567n', 'Nairobi', 'Ruaraka', '25779f8829ab7a7650e85a4cc871e6ac', NULL, NULL, '-1.2452301478635088', '36.88036859035492'),
(39, 'tony', 'mola', 'tony', 'jobokello5@gmail.com', '0723456744', 'Nairobi', 'Kibra', 'ddc5f5e86d2f85e1b1ff763aff13ce0a', 'What was the house number and street name you lived in as a child?', 'd305d506b258c223454584eb193a973a', '-1.3095549845626855', '36.785863637924194'),
(29, 'Job', 'Okello', 'jobson', 'jobokello5@gmail.com', '0728633625', 'Nairobi', 'Parklands', 'f415f81ddab784d56120b14e8f640474', 'Whatsapp', 'a2e36666d822965d2b9e3bf97017f0bf', '-1.2610385251626606', '36.80211782455444'),
(32, 'Daniel', 'Ndambuki', 'daniel', 'jobokello5@gmail.com', '0723567854', 'Nairobi', 'Makadara', 'aa47f8215c6f30a0dcdb2a36a9f4168e', 'What primary school did you attend?', '008dc9abeec1fbf78506d360c8b9e4b9', '-1.2905269286944383', '36.913676261901855'),
(33, 'Dorcas', 'Adrian', 'adrian', 'jobokello5@gmail.com', '0713131809', 'Nairobi', 'Kibra', '8c4205ec33d8f6caeaaaa0c10a14138c', 'What is the middle name of your oldest child?', 'af164aebfa2fb657fcf6994fa64f543c', '-1.3022934491697167', '36.77861899137497'),
(34, 'markus', 'browley', 'markus', 'jobokello5@gmail.com', '0732515155', 'Nairobi', 'Embakasi', '23c496d2ee2494b3f380a2bd7380b811', 'In what town or city did your mother and father meet?', '389641de061b635f0c315ce15a3ae2c5', '-1.2413579498795597', '37.0953369140625'),
(35, 'Nelly', 'awuor', 'nelly', 'jobokello5@gmail.com', '0977576576', 'Nairobi', 'Ruaraka', '7909ee02ba4a7c0558028a58a1a3ed65', 'What was the house number and street name you lived in as a child?', '19df3be71019964b3e3968e8a8eba280', '-1.263325357489324', '36.7437744140625'),
(36, 'jackson', 'kimaswa', 'jackson', 'jobokello5@gmail.com', '0823456789', 'Nairobi', 'Kibra', 'b41779690b83f182acc67d6388c7bac9', 'What was the house number and street name you lived in as a child?', '8459e2a2318870facfc5cf56049ed3d3', '-0.7470491450051796', '37.5787353515625'),
(38, 'antony', 'njuguna', 'antony', 'jobokello5@gmail.com', '0728646565', 'Nairobi', 'Langata', '3716114b005e9b4e533c7f3cd0f4f253', 'What was the house number and street name you lived in as a child?', '6e9d25362c485bc3c90c818dfac5dc49', '-1.322774786259461', '36.79836004972458'),
(40, 'victor', 'zombo', 'victor', 'jobokello5@gmail.com', '0731234567', 'Nairobi', 'Ruaraka', 'ffc150a160d37e92012c196b6af4160d', 'What was the house number and street name you lived in as a child?', '6f427f870f0aef834e15363f1e3b7258', '-1.2451657900487167', '36.88224345445633'),
(41, 'maurice', 'kapombe', 'maurice', 'jobokello5@gmail.com', '0726566785', 'Mombasa', 'Nyali', 'dd099c2f017f990e68f5c90a413abc5d', 'What was the house number and street name you lived in as a child?', '5fd1b18d6d1cd408324aee3f46ac828b', '-4.0539720000376915', '39.69661697745323'),
(42, 'christine', 'ronge', 'ronge', 'jobokello5@gmail.com', '0912345678', 'Nairobi', 'Langata', '04f3640357881de7467e6521ada3678a', 'What was the house number and street name you lived in as a child?', '4108ef3146e63f3a6ca059d228212530', '-1.2677874645693734', '36.81638717651367'),
(43, 'myteacher', 'ronge', 'myteacher', 'jobokello5@gmail.com', '1234570987', 'Nairobi', 'Langata', 'fbe5c0fb679f3de4cab9cd0d7052cd2c', 'What was the house number and street name you lived in as a child?', 'b87b50fe16d67a3f8bdab3bddd83e533', '-1.4610232806227417', '36.9195556640625'),
(44, 'Byron', 'baraza', 'byron', 'jobokello5@gmail.com', '0721234567', 'Nairobi', 'Kibra', '8720070ac8f94bbbff5a347eed656925', 'What was the house number and street name you lived in as a child?', '8459e2a2318870facfc5cf56049ed3d3', '-1.313877572458884', '36.78502142429352'),
(45, 'Njoka', 'Dennnis', 'Kariuki', 'jobokello5@gmail.com', '0721234567', 'Nairobi', 'Makadara', '37351450d2932c504e7b0b5bca63384b', 'What were the last four digits of your childhood telephone number?', '28bda53c86d37e275a3ebfdc113b1f59', '-1.2577155341121464', '36.903609931468964'),
(46, 'Dennis', 'Njoka', 'dennis', 'jobokello5@gmail.com', '0721234567', 'Nairobi', 'Makadara', '94a9a5dcad692a3f4ca1d6b18bb33fd4', 'What were the last four digits of your childhood telephone number?', '28bda53c86d37e275a3ebfdc113b1f59', '-1.2968553284547013', '36.869253516197205'),
(47, 'Alex', 'Mwangi', 'alex', 'jobokello5@gmail.com', '0721234567', 'Nairobi', 'Kasarani', '534b44a19bf18d20b71ecc4eb77c572f', 'What was the house number and street name you lived in as a child?', '6e9d25362c485bc3c90c818dfac5dc49', '-1.2199025456187942', '36.898608952760696'),
(48, 'Junior', 'mawele', 'Junior', 'jobokello5@gmail.com', '0721234567', 'Nairobi', 'Ruaraka', 'b03e3fd2b3d22ff6df2796c412b09311', 'What was the house number and street name you lived in as a child?', 'c88d212ddef15f88157d48ad1eed48b0', '-1.2405186153576253', '36.89572557806969'),
(49, 'jerry', 'waters', 'jerry', 'jobokello5@gmail.com', '0723979889', 'Nairobi', 'Kibera', '30035607ee5bb378c71ab434a6d05410', 'What was the house number and street name you lived in as a child?', 'fd25d193f3d822f46e27c09c56b608eb', '-1.3210291328960724', '36.787916868925095');

-- --------------------------------------------------------

--
-- Table structure for table `myworkersinfo`
--

CREATE TABLE `myworkersinfo` (
  `workerID` int(50) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `sName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `natID` varchar(255) NOT NULL,
  `workerSkills` varchar(255) NOT NULL,
  `tertiaryInstitution` varchar(255) NOT NULL,
  `testimonial` varchar(1000) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `county` varchar(255) NOT NULL,
  `constituency` varchar(255) NOT NULL,
  `workerPassWord` varchar(255) NOT NULL,
  `securityQuestion` varchar(255) DEFAULT NULL,
  `securityAnswer` varchar(255) DEFAULT NULL,
  `jobCount` int(30) NOT NULL DEFAULT '0',
  `workerStatus` varchar(20) NOT NULL DEFAULT 'available'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myworkersinfo`
--

INSERT INTO `myworkersinfo` (`workerID`, `fName`, `sName`, `username`, `natID`, `workerSkills`, `tertiaryInstitution`, `testimonial`, `email`, `phone`, `county`, `constituency`, `workerPassWord`, `securityQuestion`, `securityAnswer`, `jobCount`, `workerStatus`) VALUES
(3, 'john', 'kiriamiti', 'john', '32542223', 'Electrician', 'uon', '20170522_161619_doc_20170522161651.pdf', 'jacknovak254@gmail.com', '0728633625', 'Nairobi', 'Makadara', '527bd5b5d689e2c32ae974c6229ff785', NULL, NULL, 4, 'available'),
(2, 'jack', 'novak', 'novak', '42442878', 'Carpenter', 'Kenya polytechnique', 'MotherboardFactors (1).pdf', 'jacknovak254@gmail.com', '0721715293', 'Nairobi', 'Kibra', 'f4ef2c3931255364f81564fc2b8aafc3', 'nop', 'a571d969c8661fb0342afd08e571dfa0', 13, 'available'),
(4, 'peter', 'kahenya', 'peter', '45457665', 'Mechanic', 'uon', 'php meetup at ihub 29846565882-606597712-ticket.pdf', 'jacknovak254@gmail.com', '0721818181', 'Nairobi', 'Kibra', 'd50474f35a8d6820b58426987cdce8df', 'urry', '78b95490f2cda93a3258eb8e9b4b4190', 2, 'available'),
(7, 'mary', 'otieno', 'mary', '23456787', 'Plumber', 'uon', 'Project proposal job okello.pdf', 'jacknovak254@gmail.com', '0987654323', 'Nairobi', 'Langata', 'b8e7be5dfa2ce0714d21dcfc7d72382c', 'What was the house number and street name you lived in as a child?', 'a9d3f14be9af44a40c6d4790689a2f7e', 16, 'available'),
(8, 'Anna', 'adhiambo', 'anna', '23245765', 'Gardener/Landscape artist', 'uon', 'iuo.pdf', 'jacknovak254@gmail.com', '0732345678', 'Nairobi', 'Mathare', 'a70f9e38ff015afaa9ab0aacabee2e13', 'What was the house number and street name you lived in as a child?', 'c2bbdff6e5f82751c3da0f4bd6618f1d', 0, 'available'),
(9, 'Juma', 'njuguna', 'juma', '23434567', 'Car driver', 'TUK', 'amsuuu.pdf', 'jacknovak254@gmail.com', '0721234567', 'Nairobi', 'Parklands', '1d528266b85cf052e9a4794803a57288', 'What was the house number and street name you lived in as a child?', '6e9d25362c485bc3c90c818dfac5dc49', 1, 'available'),
(10, 'Javis', 'Nyambane', 'javis', '34567678', 'Carpenter', 'UoN', 'MotherboardFactors.pdf', 'jacknovak254@gmail.com', '0723456744', 'Nairobi', 'Mathare', '2583d14d1b63d6784fa4ac0c58200750', 'What was the house number and street name you lived in as a child?', '6e9d25362c485bc3c90c818dfac5dc49', 2, 'booked'),
(11, 'julius', 'Njoka', 'julius', '34567678', 'Carpenter', 'UoN', 'MotherboardFactors.pdf', 'jacknovak254@gmail.com', '0723456744', 'Nairobi', 'Mathare', '30e6d8432ce54710f9c09f305e7b9829', 'What was the house number and street name you lived in as a child?', '6e9d25362c485bc3c90c818dfac5dc49', 1, 'available'),
(12, 'james', 'maina', 'james', '34567678', 'Cleaner', 'UoN', 'MotherboardFactors.pdf', 'jacknovak254@gmail.com', '0723456744', 'Nairobi', 'Mathare', 'b4cc344d25a2efe540adbf2678e2304c', 'What was the house number and street name you lived in as a child?', '6e9d25362c485bc3c90c818dfac5dc49', 1, 'available'),
(13, 'Angeline', 'Muthee', 'angeline', '34567678', 'Cleaner', 'UoN', 'MotherboardFactors.pdf', 'jacknovak254@gmail.com', '0723456744', 'Nairobi', 'Mathare', '3c010dac299ef4aa8a2f6d9ce5187698', 'What was the house number and street name you lived in as a child?', '6e9d25362c485bc3c90c818dfac5dc49', 0, 'available'),
(14, 'Antony', 'Karuki', 'antony', '34567678', 'Electrician', 'Tuk', 'MotherboardFactors.pdf', 'jacknovak254@gmail.com', '0723456744', 'Nairobi', 'Makadara', '3716114b005e9b4e533c7f3cd0f4f253', 'What was the house number and street name you lived in as a child?', '6e9d25362c485bc3c90c818dfac5dc49', 0, 'available'),
(15, 'Maurice', 'Karuki', 'maurice', '34567678', 'Cleaner', 'Tuk', 'MotherboardFactors.pdf', 'jacknovak254@gmail.com', '0723456744', 'Nairobi', 'Makadara', 'dd099c2f017f990e68f5c90a413abc5d', 'What was the house number and street name you lived in as a child?', '6e9d25362c485bc3c90c818dfac5dc49', 0, 'available'),
(16, 'Phenious', 'oloo', 'phenious', '23456789', 'Plumber', 'Tuk', 'MotherboardFactors.pdf', 'jacknovak254@gmail.com', '0723456744', 'Nairobi', 'Kibra', '76d7863bcb2f97cc459d14e4b8d89f2e', 'What was the house number and street name you lived in as a child?', '6e9d25362c485bc3c90c818dfac5dc49', 0, 'available'),
(17, 'Michael', 'Mutua', 'michael', '23456789', 'Mechanic', 'Tuk', 'MotherboardFactors.pdf', 'jacknovak254@gmail.com', '0723456744', 'Nairobi', 'Kibra', '0acf4539a14b3aa27deeb4cbdf6e989f', 'What was the house number and street name you lived in as a child?', '6e9d25362c485bc3c90c818dfac5dc49', 2, 'available'),
(18, 'Ali', 'Komora', 'Ali', '23456789', 'Painter', 'Tuk', 'MotherboardFactors.pdf', 'jacknovak254@gmail.com', '0723456744', 'Nairobi', 'Kibra', '86318e52f5ed4801abe1d13d509443de', 'What was the house number and street name you lived in as a child?', '6e9d25362c485bc3c90c818dfac5dc49', 1, 'available'),
(19, 'Javan', 'Muzina', 'javan', '23456789', 'Painter', 'Tuk', 'MotherboardFactors.pdf', 'jacknovak254@gmail.com', '0723456744', 'Nairobi', 'Kibra', 'a93cc53bb987caebe9c7eca6f71e491e', 'What was the house number and street name you lived in as a child?', '6e9d25362c485bc3c90c818dfac5dc49', 0, 'available'),
(20, 'Steve', 'Amenge', 'steve', '23456789', 'Welder', 'Tuk', 'MotherboardFactors.pdf', 'jacknovak254@gmail.com', '0723456744', 'Nairobi', 'Kibra', 'd69403e2673e611d4cbd3fad6fd1788e', 'What was the house number and street name you lived in as a child?', '6e9d25362c485bc3c90c818dfac5dc49', 0, 'available'),
(21, 'Emmanuel', 'Amenge', 'emmanuel', '23456789', 'Welder', 'Tuk', 'MotherboardFactors.pdf', 'jacknovak254@gmail.com', '0723456744', 'Nairobi', 'Kibra', '0d0de813c1105498e3435dd2fbf7fa26', 'What was the house number and street name you lived in as a child?', '6e9d25362c485bc3c90c818dfac5dc49', 0, 'available'),
(22, 'Martin', 'Anyole', 'martin', '23456789', 'Car driver', 'Tuk', 'MotherboardFactors.pdf', 'jacknovak254@gmail.com', '0723456744', 'Nairobi', 'Kibra', '925d7518fc597af0e43f5606f9a51512', 'What was the house number and street name you lived in as a child?', '6e9d25362c485bc3c90c818dfac5dc49', 0, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `tbljoborders`
--

CREATE TABLE `tbljoborders` (
  `jobID` int(11) NOT NULL,
  `clientID` int(50) NOT NULL,
  `clientUsername` varchar(255) NOT NULL,
  `clientFname` varchar(255) NOT NULL,
  `clientSname` varchar(255) NOT NULL,
  `clientEmail` varchar(255) NOT NULL,
  `workerID` int(50) NOT NULL,
  `workerUsername` varchar(255) NOT NULL,
  `workerFname` varchar(255) NOT NULL,
  `workerSname` varchar(255) NOT NULL,
  `workerEmail` varchar(255) NOT NULL,
  `jobDescription` varchar(6000) NOT NULL,
  `jobDate` date NOT NULL,
  `totalCost` int(11) DEFAULT NULL,
  `paymentCode` varchar(255) DEFAULT NULL,
  `clientLocLatitude` varchar(255) NOT NULL,
  `clientLocLongitude` varchar(255) NOT NULL,
  `clientJobStatus` varchar(255) DEFAULT 'pending',
  `workerJobStatus` varchar(255) DEFAULT 'pending',
  `clientPhone` varchar(255) NOT NULL,
  `workerPhone` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljoborders`
--

INSERT INTO `tbljoborders` (`jobID`, `clientID`, `clientUsername`, `clientFname`, `clientSname`, `clientEmail`, `workerID`, `workerUsername`, `workerFname`, `workerSname`, `workerEmail`, `jobDescription`, `jobDate`, `totalCost`, `paymentCode`, `clientLocLatitude`, `clientLocLongitude`, `clientJobStatus`, `workerJobStatus`, `clientPhone`, `workerPhone`) VALUES
(141, 31, 'felix', 'Felix', 'ongati', 'jobokello5@gmail.com', 2, 'novak', 'jack', 'novak', 'jacknovak254@gmail.com', 'rdtctrdtrsre', '2017-06-08', 650, 'fyewgudfeg', '-1.2452301478635088', '36.88036859035492', 'confirmed', 'confirmed', '0725890567n', '0721715293'),
(140, 40, 'victor', 'victor', 'zombo', 'jobokello5@gmail.com', 2, 'novak', 'jack', 'novak', 'jacknovak254@gmail.com', 'refwvvvww', '2017-06-23', 650, 'cjienvuwev', '-1.2451657900487167', '36.88224345445633', 'confirmed', 'confirmed', '0731234567', '0721715293'),
(139, 40, 'victor', 'victor', 'zombo', 'jobokello5@gmail.com', 2, 'novak', 'jack', 'novak', 'jacknovak254@gmail.com', 'efef', '2017-06-22', 650, NULL, '-1.2451657900487167', '36.88224345445633', 'cancelled', 'cancelled', '0731234567', '0721715293'),
(138, 39, 'tony', 'tony', 'mola', 'jobokello5@gmail.com', 4, 'peter', 'peter', 'kahenya', 'jacknovak254@gmail.com', 'rotgimti', '2017-06-23', 1500, 'neieivebve', '-1.3095549845626855', '36.785863637924194', 'pending', 'pending', '0723456744', '0721818181'),
(137, 39, 'tony', 'tony', 'mola', 'jobokello5@gmail.com', 4, 'peter', 'peter', 'kahenya', 'jacknovak254@gmail.com', 'rotgimti', '2017-06-23', 1500, NULL, '-1.3095549845626855', '36.785863637924194', 'pending', 'pending', '0723456744', '0721818181'),
(136, 38, 'antony', 'antony', 'njuguna', 'jobokello5@gmail.com', 2, 'novak', 'jack', 'novak', 'jacknovak254@gmail.com', 'jenga vitu', '2017-06-23', 650, 'lnuiedebec', '-1.322774786259461', '36.79836004972458', 'pending', 'pending', '0728646565', '0721715293'),
(135, 38, 'antony', 'antony', 'njuguna', 'jobokello5@gmail.com', 2, 'novak', 'jack', 'novak', 'jacknovak254@gmail.com', 'jenga vitu', '2017-06-23', 650, NULL, '-1.322774786259461', '36.79836004972458', 'pending', 'pending', '0728646565', '0721715293'),
(134, 34, 'markus', 'markus', 'browley', 'jobokello5@gmail.com', 2, 'novak', 'jack', 'novak', 'jacknovak254@gmail.com', 'mbao', '2017-06-16', 650, 'niwhueefko', '-1.2413579498795597', '37.0953369140625', 'pending', 'pending', '0732515155', '0721715293'),
(133, 34, 'markus', 'markus', 'browley', 'jobokello5@gmail.com', 2, 'novak', 'jack', 'novak', 'jacknovak254@gmail.com', 'fundi', '2017-06-24', 650, 'lvaftyfyfy', '-1.2413579498795597', '37.0953369140625', 'pending', 'pending', '0732515155', '0721715293'),
(130, 35, 'nelly', 'nelly', 'awuor', 'jobokello5@gmail.com', 3, 'john', 'john', 'kiriamiti', 'jacknovak254@gmail.com', 'enyewe', '2017-06-22', 860, 'wertyuiopo', '-1.263325357489324', '36.7437744140625', 'pending', 'pending', '0977576576', '0728633625'),
(129, 35, 'nelly', 'nelly', 'awuor', 'jobokello5@gmail.com', 3, 'john', 'john', 'kiriamiti', 'jacknovak254@gmail.com', 'enyewe', '2017-06-22', 860, NULL, '-1.263325357489324', '36.7437744140625', 'pending', 'pending', '0977576576', '0728633625'),
(128, 29, 'jobson', 'Job', 'Okello', 'jobokello5@gmail.com', 3, 'john', 'john', 'kiriamiti', 'jacknovak254@gmail.com', 'stiga', '2017-06-22', 860, 'yeydtdycyt', '-1.2610385251626606', '36.80211782455444', 'cancelled', 'cancelled', '0728633625', '0728633625'),
(132, 34, 'markus', 'markus', 'browley', 'jobokello5@gmail.com', 2, 'novak', 'jack', 'novak', 'jacknovak254@gmail.com', 'fundi', '2017-06-24', 650, NULL, '-1.2413579498795597', '37.0953369140625', 'pending', 'pending', '0732515155', '0721715293'),
(126, 30, 'byron', 'byron', 'ochieng', 'jobokello5@gmail.com', 5, 'agalo', 'Isaac', 'Agalo', 'jacknovak254@gmail.com', 'kuja tuchome', '2017-06-22', 800, 'h3ury39eko', '-1.3951257897508238', '37.7984619140625', 'cancelled', 'cancelled', '0728633625', '0726987876'),
(122, 31, 'felix', 'Felix', 'ongati', 'jobokello5@gmail.com', 2, 'novak', 'jack', 'novak', 'jacknovak254@gmail.com', 'yep', '2017-06-23', 650, 'qwertyuiop', '-1.2452301478635088', '36.88036859035492', 'pending', 'pending', '0725890567n', '0721715293'),
(123, 31, 'felix', 'Felix', 'ongati', 'jobokello5@gmail.com', 2, 'novak', 'jack', 'novak', 'jacknovak254@gmail.com', 'urtrtyrftf', '2017-06-16', 650, 'uityufgyur', '-1.2452301478635088', '36.88036859035492', 'pending', 'pending', '0725890567n', '0721715293'),
(124, 31, 'felix', 'Felix', 'ongati', 'jobokello5@gmail.com', 3, 'john', 'john', 'kiriamiti', 'jacknovak254@gmail.com', 'thitima', '2017-06-16', 860, 'LFRWTRUTYU', '-1.2452301478635088', '36.88036859035492', 'pending', 'pending', '0725890567n', '0728633625'),
(142, 31, 'felix', 'Felix', 'ongati', 'jobokello5@gmail.com', 3, 'john', 'john', 'kiriamiti', 'jacknovak254@gmail.com', 'bulbs not working', '2017-06-22', 860, NULL, '-1.2452301478635088', '36.88036859035492', 'pending', 'pending', '0725890567n', '0728633625'),
(143, 31, 'felix', 'Felix', 'ongati', 'jobokello5@gmail.com', 3, 'john', 'john', 'kiriamiti', 'jacknovak254@gmail.com', 'bulbs not working', '2017-06-22', 860, NULL, '-1.2452301478635088', '36.88036859035492', 'pending', 'pending', '0725890567n', '0728633625'),
(144, 31, 'felix', 'Felix', 'ongati', 'jobokello5@gmail.com', 2, 'novak', 'jack', 'novak', 'jacknovak254@gmail.com', 'uyuydjhqgfjh', '2017-06-22', 650, NULL, '-1.2452301478635088', '36.88036859035492', 'pending', 'pending', '0725890567n', '0721715293'),
(145, 31, 'felix', 'Felix', 'ongati', 'jobokello5@gmail.com', 2, 'novak', 'jack', 'novak', 'jacknovak254@gmail.com', 'Now we are working', '2017-06-30', 650, NULL, '-1.2452301478635088', '36.88036859035492', 'cancelled', 'cancelled', '0725890567n', '0721715293'),
(146, 42, 'ronge', 'christine', 'ronge', 'jobokello5@gmail.com', 7, 'mary', 'mary', 'otieno', 'jacknovak254@gmail.com', 'blocked sink', '2017-06-17', 745, NULL, '-1.2677874645693734', '36.81638717651367', 'cancelled', 'cancelled', '0912345678', '0987654323'),
(160, 42, 'ronge', 'christine', 'ronge', 'jobokello5@gmail.com', 2, 'novak', 'jack', 'novak', 'jacknovak254@gmail.com', 'I have a blocked sink', '2017-06-29', 650, 'yugdtwftef', '-1.2677874645693734', '36.81638717651367', 'cancelled', 'cancelled', '0912345678', '0721715293'),
(161, 42, 'ronge', 'christine', 'ronge', 'jobokello5@gmail.com', 3, 'john', 'john', 'kiriamiti', 'jacknovak254@gmail.com', 'eeaayresrher', '2017-06-23', 860, 'utusrs6e46', '-1.2677874645693734', '36.81638717651367', 'cancelled', 'cancelled', '0912345678', '0728633625'),
(162, 42, 'ronge', 'christine', 'ronge', 'jobokello5@gmail.com', 2, 'novak', 'jack', 'novak', 'jacknovak254@gmail.com', 'yes get me service', '2017-06-23', 650, '7r7edcyrd6', '-1.2677874645693734', '36.81638717651367', 'pending', 'pending', '0912345678', '0721715293'),
(163, 42, 'ronge', 'christine', 'ronge', 'jobokello5@gmail.com', 7, 'mary', 'mary', 'otieno', 'jacknovak254@gmail.com', 'clean', '2017-06-22', 700, '7tcyd75dcy', '-1.2677874645693734', '36.81638717651367', 'cancelled', 'cancelled', '0912345678', '0987654323'),
(164, 31, 'felix', 'Felix', 'ongati', 'jobokello5@gmail.com', 2, 'novak', 'jack', 'novak', 'jacknovak254@gmail.com', 'job neeeded', '2017-06-23', 650, 'gyiguybufu', '-1.2452301478635088', '36.88036859035492', 'pending', 'pending', '0725890567n', '0721715293'),
(165, 44, 'byron', 'Byron', 'baraza', 'jobokello5@gmail.com', 7, 'mary', 'mary', 'otieno', 'jacknovak254@gmail.com', 'pipe imeblock', '2017-06-30', 745, 'yf td64e4', '-1.313877572458884', '36.78502142429352', 'pending', 'pending', '0721234567', '0987654323'),
(166, 46, 'dennis', 'Dennis', 'Njoka', 'jobokello5@gmail.com', 3, 'john', 'john', 'kiriamiti', 'jacknovak254@gmail.com', 'bulb kuchomeka', '2017-06-20', 860, NULL, '-1.2968553284547013', '36.869253516197205', 'confirmed', 'confirmed', '0721234567', '0728633625'),
(167, 46, 'dennis', 'Dennis', 'Njoka', 'jobokello5@gmail.com', 2, 'novak', 'jack', 'novak', 'jacknovak254@gmail.com', 'Kiti imevunjika', '2017-06-21', 650, '6ygg667678', '-1.2968553284547013', '36.869253516197205', 'cancelled', 'cancelled', '0721234567', '0721715293'),
(168, 46, 'dennis', 'Dennis', 'Njoka', 'jobokello5@gmail.com', 7, 'mary', 'mary', 'otieno', 'jacknovak254@gmail.com', 'kitu', '2017-06-23', 745, 'fyur8rur6r', '-1.2968553284547013', '36.869253516197205', 'confirmed', 'confirmed', '0721234567', '0987654323'),
(169, 47, 'alex', 'Alex', 'Mwangi', 'jobokello5@gmail.com', 9, 'juma', 'Juma', 'njuguna', 'jacknovak254@gmail.com', 'I Want In', '2017-06-24', 900, NULL, '-1.2199025456187942', '36.898608952760696', 'cancelled', 'cancelled', '0721234567', '0721234567'),
(158, 43, 'myteacher', 'myteacher', 'ronge', 'jobokello5@gmail.com', 7, 'mary', 'mary', 'otieno', 'jacknovak254@gmail.com', 'wertyui', '2017-06-23', 745, NULL, '-1.4610232806227417', '36.9195556640625', 'cancelled', 'cancelled', '1234570987', '0987654323'),
(159, 43, 'myteacher', 'myteacher', 'ronge', 'jobokello5@gmail.com', 7, 'mary', 'mary', 'otieno', 'jacknovak254@gmail.com', 'yudrudf7dftyc', '2017-06-07', 745, 'yetyd6e64e', '-1.4610232806227417', '36.9195556640625', 'pending', 'pending', '1234570987', '0987654323'),
(170, 47, 'alex', 'Alex', 'Mwangi', 'jobokello5@gmail.com', 2, 'novak', 'jack', 'novak', 'jacknovak254@gmail.com', 'viti', '2017-06-23', 650, 'drswswxwee', '-1.2199025456187942', '36.898608952760696', 'confirmed', 'confirmed', '0721234567', '0721715293'),
(171, 48, 'Junior', 'Junior', 'mawele', 'jobokello5@gmail.com', 17, 'michael', 'Michael', 'Mutua', 'jacknovak254@gmail.com', 'Gari imekwama', '2017-06-22', 1500, NULL, '-1.2405186153576253', '36.89572557806969', 'pending', 'pending', '0721234567', '0723456744'),
(172, 48, 'Junior', 'Junior', 'mawele', 'jobokello5@gmail.com', 12, 'james', 'james', 'maina', 'jacknovak254@gmail.com', 'Mop the floor', '2017-06-24', 700, 'y7t76r56fr', '-1.2405186153576253', '36.89572557806969', 'pending', 'confirmed', '0721234567', '0723456744'),
(173, 42, 'ronge', 'christine', 'ronge', 'jobokello5@gmail.com', 18, 'Ali', 'Ali', 'Komora', 'jacknovak254@gmail.com', 'I have a full house with three bedrooms and a living romm to be painted', '2017-06-21', 950, 'JUIYUFGTEF', '-1.2677874645693734', '36.81638717651367', 'confirmed', 'confirmed', '0912345678', '0723456744'),
(174, 49, 'jerry', 'jerry', 'waters', 'jobokello5@gmail.com', 10, 'javis', 'Javis', 'Nyambane', 'jacknovak254@gmail.com', 'my job', '2017-07-27', 650, NULL, '-1.3210291328960724', '36.787916868925095', 'pending', 'pending', '0723979889', '0723456744'),
(175, 49, 'jerry', 'jerry', 'waters', 'jobokello5@gmail.com', 17, 'michael', 'Michael', 'Mutua', 'jacknovak254@gmail.com', 'creep', '2017-07-20', 1500, 'gyujhvjvuv', '-1.3210291328960724', '36.787916868925095', 'pending', 'pending', '0723979889', '0723456744'),
(176, 49, 'jerry', 'jerry', 'waters', 'jobokello5@gmail.com', 11, 'julius', 'julius', 'Njoka', 'jacknovak254@gmail.com', 'hhh', '2017-07-14', 650, 'ftydcudutf', '-1.3210291328960724', '36.787916868925095', 'pending', 'pending', '0723979889', '0723456744'),
(177, 31, 'felix', 'Felix', 'ongati', 'jobokello5@gmail.com', 10, 'javis', 'Javis', 'Nyambane', 'jacknovak254@gmail.com', 'joshua', '2017-07-14', 3250, 'giygbguuig', '-1.2452301478635088', '36.88036859035492', 'pending', 'pending', '0725890567n', '0723456744');

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

CREATE TABLE `tblpayment` (
  `paymentID` int(50) NOT NULL,
  `workerID` int(50) NOT NULL,
  `workerFname` varchar(255) NOT NULL,
  `workerSname` varchar(255) NOT NULL,
  `jobID` int(50) NOT NULL,
  `paymentAmount` int(11) NOT NULL,
  `workerPhone` varchar(255) NOT NULL,
  `paymentStatus` varchar(255) NOT NULL DEFAULT 'pending payment',
  `paymentDate` varchar(20) NOT NULL DEFAULT 'N/A'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpayment`
--

INSERT INTO `tblpayment` (`paymentID`, `workerID`, `workerFname`, `workerSname`, `jobID`, `paymentAmount`, `workerPhone`, `paymentStatus`, `paymentDate`) VALUES
(7, 2, 'jack', 'novak', 133, 650, '0721715293', 'pending payment', 'N/A'),
(4, 3, 'Yohana', 'Muthee', 131, 860, '0721715293', 'pending payment', 'N/A'),
(5, 3, 'john', 'kiriamiti', 131, 860, '0728633625', 'pending payment', 'N/A'),
(6, 3, 'john', 'kiriamiti', 129, 860, '0728633625', 'pending payment', 'N/A'),
(8, 2, 'jack', 'novak', 133, 650, '0721715293', 'pending payment', 'N/A'),
(9, 2, 'jack', 'novak', 122, 650, '0721715293', 'pending payment', 'N/A'),
(10, 2, 'jack', 'novak', 140, 650, '0721715293', 'pending payment', 'N/A'),
(11, 2, 'jack', 'novak', 141, 650, '0721715293', 'pending payment', 'N/A'),
(12, 3, 'john', 'kiriamiti', 166, 860, '0728633625', 'pending payment', 'N/A'),
(13, 7, 'mary', 'otieno', 168, 745, '0987654323', 'pending payment', 'N/A'),
(14, 2, 'jack', 'novak', 170, 650, '0721715293', 'pending payment', 'N/A'),
(15, 18, 'Ali', 'Komora', 173, 950, '0723456744', 'pending payment', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `tblrefunds`
--

CREATE TABLE `tblrefunds` (
  `refundID` int(50) NOT NULL,
  `clientID` int(50) NOT NULL,
  `clientFname` varchar(255) NOT NULL,
  `clientSname` varchar(255) NOT NULL,
  `jobID` int(50) NOT NULL,
  `refundAmount` int(11) NOT NULL,
  `clientPhone` varchar(255) NOT NULL,
  `refundStatus` varchar(255) NOT NULL DEFAULT 'pending refund'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblrefunds`
--

INSERT INTO `tblrefunds` (`refundID`, `clientID`, `clientFname`, `clientSname`, `jobID`, `refundAmount`, `clientPhone`, `refundStatus`) VALUES
(31, 34, 'markus', 'browley', 133, 650, '0732515155', 'pending refund'),
(30, 34, 'markus', 'browley', 132, 650, '0732515155', 'pending refund'),
(29, 34, 'markus', 'browley', 132, 650, '0732515155', 'pending refund'),
(28, 15, 'job', 'opiyo', 157, 2000, '0728633625', 'pending refund'),
(38, 31, 'Felix', 'ongati', 145, 650, '0725890567n', 'pending refund'),
(39, 42, 'christine', 'ronge', 160, 650, '0912345678', 'pending refund'),
(40, 42, 'christine', 'ronge', 146, 745, '0912345678', 'pending refund'),
(41, 30, 'byron', 'ochieng', 126, 800, '0728633625', 'pending refund'),
(42, 46, 'Dennis', 'Njoka', 167, 650, '0721234567', 'pending refund'),
(43, 47, 'Alex', 'Mwangi', 169, 900, '0721234567', 'pending refund');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myclientinfo`
--
ALTER TABLE `myclientinfo`
  ADD PRIMARY KEY (`clientID`);

--
-- Indexes for table `myworkersinfo`
--
ALTER TABLE `myworkersinfo`
  ADD PRIMARY KEY (`workerID`);

--
-- Indexes for table `tbljoborders`
--
ALTER TABLE `tbljoborders`
  ADD PRIMARY KEY (`jobID`),
  ADD KEY `clientID` (`clientID`),
  ADD KEY `workerID` (`workerID`);

--
-- Indexes for table `tblpayment`
--
ALTER TABLE `tblpayment`
  ADD PRIMARY KEY (`paymentID`),
  ADD KEY `jobID` (`jobID`);

--
-- Indexes for table `tblrefunds`
--
ALTER TABLE `tblrefunds`
  ADD PRIMARY KEY (`refundID`),
  ADD KEY `jobID` (`jobID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myclientinfo`
--
ALTER TABLE `myclientinfo`
  MODIFY `clientID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `myworkersinfo`
--
ALTER TABLE `myworkersinfo`
  MODIFY `workerID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbljoborders`
--
ALTER TABLE `tbljoborders`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
--
-- AUTO_INCREMENT for table `tblpayment`
--
ALTER TABLE `tblpayment`
  MODIFY `paymentID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tblrefunds`
--
ALTER TABLE `tblrefunds`
  MODIFY `refundID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
