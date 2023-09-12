-- --------------------------------------------------------
-- Anfitrião:                    127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- SO do servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6568
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- A despejar dados para tabela db_bng.persons: ~5 rows (aproximadamente)
INSERT INTO `persons` (`id`, `name`, `gender`, `birthdate`, `email`, `phone`, `interests`, `id_agent`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, _binary 0x227aec935b174af61b4db632c96108c7, 'm', '1973-10-19', _binary 0x13d25a7cb886dc24ff4b47f215538ec92a968fa13248d1642ebf6c406abe7576, _binary 0xde8e4552aba7ee39434762c89c13e29c, 'desenvolvimento,tv,cinema', 2, '2022-11-14 21:55:58', '2022-11-14 21:55:58', NULL),
	(2, _binary 0x7a1e3f93b1e6c442783e0463d7c9785d, 'm', '2000-12-03', _binary 0x5cb29ec66fdda8e151d95bf3d477b4ce90fe7a86e1bac235b38e6b2c8c96288c, _binary 0x71f8496362988a873ec054845546ab45, 'tv,cinema,desporto', 2, '2022-11-14 21:57:35', '2022-11-14 21:57:35', NULL),
	(3, _binary 0xd259eb2b2664c5f9b9a2571622be670d, 'f', '1981-08-12', _binary 0x6fa2d195f55abee98ae3f47b63c15ff52a968fa13248d1642ebf6c406abe7576, _binary 0x2b838723f12506faea5846684b59b350, 'cinema,desporto,música', 3, '2022-11-14 21:58:24', '2022-11-14 21:58:24', NULL),
	(4, _binary 0x8ac5bb083d885a3d983bec04836cf103, 'f', '1988-10-12', _binary 0xbd5e4f70ff6fe186049dc1d0d4331ac3eff5673b30413c696c25d5fd085e239c, _binary 0xfbc2bf768d5551ef66ecd10292e71d1c, 'cinema,música', 3, '2022-11-14 21:59:01', '2022-11-14 21:59:01', NULL),
	(5, _binary 0xd04c77a81acd2226d84d5960ec231238923059e9a96237aa38e950f085e6d0bd, 'm', '1979-11-05', _binary 0x327dbf849f658413a85c7dfe7cd4fe6278efc79178b40809379c6b6d61a63812, _binary 0x5c827c51367da9454e63db2ae438f256, 'música,desporto,gastronomia', 2, '2022-11-14 22:00:05', '2022-11-14 22:00:05', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
