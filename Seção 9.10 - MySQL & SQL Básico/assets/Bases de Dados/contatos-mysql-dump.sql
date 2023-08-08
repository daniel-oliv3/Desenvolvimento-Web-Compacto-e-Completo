-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para contatos
CREATE DATABASE IF NOT EXISTS `contatos` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `contatos`;

-- Copiando estrutura para tabela contatos.amigos
CREATE TABLE IF NOT EXISTS `amigos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela contatos.amigos: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `amigos` DISABLE KEYS */;
INSERT INTO `amigos` (`id`, `nome`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Daniel Oliveira', '2023-08-05 08:52:20', '2023-08-05 08:52:23', NULL),
	(2, 'Priscila Andrade', '2023-08-05 08:52:52', '2023-08-05 08:52:53', NULL),
	(3, 'João Ribeiro', '2023-08-05 08:53:21', '2023-08-05 08:53:22', NULL),
	(4, 'Joaquim', '2030-10-01 12:30:10', '2030-10-01 12:30:10', NULL),
	(5, 'Cristina', '2030-10-01 12:30:10', '2030-10-01 12:30:10', NULL);
/*!40000 ALTER TABLE `amigos` ENABLE KEYS */;

-- Copiando estrutura para tabela contatos.telefones
CREATE TABLE IF NOT EXISTS `telefones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_amigo` int(10) unsigned DEFAULT NULL,
  `numero` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_telefones_amigos` (`id_amigo`),
  CONSTRAINT `FK_telefones_amigos` FOREIGN KEY (`id_amigo`) REFERENCES `amigos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela contatos.telefones: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `telefones` DISABLE KEYS */;
INSERT INTO `telefones` (`id`, `id_amigo`, `numero`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, '111', '2023-08-05 08:54:26', '2023-08-05 08:54:27', NULL),
	(2, 2, '222', '2023-08-05 08:54:49', '2023-08-05 08:54:50', NULL),
	(3, 2, '333', '2023-08-05 08:55:08', '2023-08-05 08:55:09', NULL),
	(4, 3, '444', '2023-08-05 08:55:21', '2023-08-05 08:55:22', NULL),
	(5, 4, '35813142', '2023-08-05 10:07:06', '2023-08-05 10:07:06', NULL),
	(6, 2, '2215202', '2023-08-05 10:10:37', '2023-08-05 10:10:37', NULL),
	(7, 2, '2215555', '2023-08-05 10:10:37', '2023-08-05 10:10:37', NULL);
/*!40000 ALTER TABLE `telefones` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
