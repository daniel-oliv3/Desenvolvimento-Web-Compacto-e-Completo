/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `db_bng` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_bng`;

CREATE TABLE IF NOT EXISTS `agents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varbinary(200) DEFAULT NULL,
  `passwrd` varchar(200) DEFAULT NULL,
  `profile` varchar(20) DEFAULT NULL,
  `purl` varchar(20) DEFAULT NULL,
  `code` varchar(6) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `agents` (`id`, `name`, `passwrd`, `profile`, `purl`, `code`, `last_login`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, _binary 0xa1aa1cec8e28ce52716a58fa8ad44f65, '$2y$10$3g5mYc9.8Fz8/z7x8TCJp.w.KL.X0ujyzxzaJWyoOgHaZ2nTupPA6', 'admin', NULL, NULL, '2022-11-20 16:20:17', '2022-11-11 00:11:30', NULL, NULL),
	(2, _binary 0xe720e3e06cf8b1f18595f465b4912334, '$2y$10$3g5mYc9.8Fz8/z7x8TCJp.w.KL.X0ujyzxzaJWyoOgHaZ2nTupPA6', 'agent', NULL, NULL, '2022-11-20 16:20:47', '2022-11-11 00:11:30', NULL, NULL),
	(3, _binary 0x27f1c82272d5349f57f76e83b6e13023, '$2y$10$3g5mYc9.8Fz8/z7x8TCJp.w.KL.X0ujyzxzaJWyoOgHaZ2nTupPA6', 'agent', NULL, NULL, '2022-11-19 23:58:07', '2022-11-11 00:11:30', NULL, NULL);

CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varbinary(200) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `email` varbinary(200) DEFAULT NULL,
  `phone` varbinary(100) DEFAULT NULL,
  `interests` varchar(1000) DEFAULT NULL,
  `id_agent` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `persons` (`id`, `name`, `gender`, `birthdate`, `email`, `phone`, `interests`, `id_agent`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, _binary 0x33599e07367a7226d39efa12f36a4f3a, 'm', '2022-02-20', _binary 0x6a4452297cf75b414e3dd88946605cab, _binary 0x60fd1c2eac07d278bc154b4ea2c3ca1b, 'a,b,c', 2, '2022-11-19 23:49:18', '2022-11-20 16:05:44', NULL),
	(2, _binary 0x431296ddfb2533d24cbc5bd741819025, 'f', '2022-02-20', _binary 0x2c5e69b4a05fd236915f3818fe71a99a, _binary 0x7f34472a198b72d80acf0edd4fe5c08c, 'aaa,bbb,ccc', 2, '2022-11-19 23:53:24', '2022-11-20 16:03:24', NULL),
	(3, _binary 0xcab3b1c89c4d483c3479a65815701382, 'm', '2022-11-03', _binary 0x2c5003addf4465fec8b6d19f95cce552, _binary 0xd8a7663b68f823f5ae19936353b8972c, 'lol', 2, '2022-11-20 00:20:47', '2022-11-20 00:20:47', NULL),
	(4, _binary 0xd8ad16419b2e9f37e3e80ced0eddb80a, 'm', '2022-11-04', _binary 0x2c5003addf4465fec8b6d19f95cce552, _binary 0xd8a7663b68f823f5ae19936353b8972c, '', 2, '2022-11-20 00:22:15', '2022-11-20 00:22:15', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
