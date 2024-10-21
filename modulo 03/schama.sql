-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.3.0 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para blog_redesocial
CREATE DATABASE IF NOT EXISTS `blog_redesocial` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `blog_redesocial`;

-- Copiando estrutura para tabela blog_redesocial.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela blog_redesocial.cache: 0 rows
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;

-- Copiando estrutura para tabela blog_redesocial.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela blog_redesocial.cache_locks: 0 rows
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;

-- Copiando estrutura para tabela blog_redesocial.comentarios
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `conteudo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_comentario` date NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `postagem_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comentarios_user_id_foreign` (`user_id`),
  KEY `comentarios_postagem_id_foreign` (`postagem_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela blog_redesocial.comentarios: 1 rows
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
INSERT INTO `comentarios` (`id`, `conteudo`, `data_comentario`, `user_id`, `postagem_id`, `created_at`, `updated_at`) VALUES
	(1, '"Experimentando novas receitas e enchendo a casa de aromas deliciosos! O que você está cozinhando hoje? #Culinária #AmorPelaComida"', '2024-10-11', 1, 0, NULL, NULL);
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;

-- Copiando estrutura para tabela blog_redesocial.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela blog_redesocial.failed_jobs: 0 rows
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Copiando estrutura para tabela blog_redesocial.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela blog_redesocial.jobs: 0 rows
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;

-- Copiando estrutura para tabela blog_redesocial.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela blog_redesocial.job_batches: 0 rows
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;

-- Copiando estrutura para tabela blog_redesocial.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela blog_redesocial.migrations: 8 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2024_10_10_113149_create_postagems_table', 2),
	(5, '2024_10_10_113212_create_comentarios_table', 2),
	(6, '2024_10_10_140614_alter_table_users', 3),
	(7, '2024_10_11_110946_alter_table_postagems', 4),
	(8, '2024_10_11_111141_alter_table_comentarios', 4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela blog_redesocial.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela blog_redesocial.password_reset_tokens: 0 rows
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;

-- Copiando estrutura para tabela blog_redesocial.postagems
CREATE TABLE IF NOT EXISTS `postagems` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conteudo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_postagem` date NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `postagems_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela blog_redesocial.postagems: 3 rows
/*!40000 ALTER TABLE `postagems` DISABLE KEYS */;
INSERT INTO `postagems` (`id`, `titulo`, `conteudo`, `data_postagem`, `user_id`, `created_at`, `updated_at`, `foto`) VALUES
	(1, 'Volei', '"A paixão pelo vôlei vai além da quadra. É sobre trabalho em equipe, superação e momentos inesquecíveis! Cada ponto é uma nova oportunidade de brilhar. Vamos juntos nessa jornada!#Vôlei #EspíritoDeEquipe #AmorPeloEsporte"', '2024-10-11', 1, NULL, NULL, 'fotos/publicacao01.png'),
	(2, 'Carro BMW', '"A BMW é mais do que apenas um carro; é uma experiência de dirigir! Com seu design icônico e engenharia de ponta, cada viagem se torna uma aventura emocionante.', '2024-10-11', 1, NULL, NULL, 'fotos/publicacao02.png'),
	(3, 'Receitas novas', '"Experimentando novas receitas e enchendo a casa de aromas deliciosos! #Culinária #AmorPelaComida"', '2024-10-11', 1, NULL, NULL, 'fotos/publicacao03.png');
/*!40000 ALTER TABLE `postagems` ENABLE KEYS */;

-- Copiando estrutura para tabela blog_redesocial.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela blog_redesocial.sessions: 2 rows
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('PBDmx3H7CpdI1brFVfJs7qPdrej1LaCUXF8BZlna', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiS2pBYXdyeGJxcFBhRllqSnBLTkNvYW1DeTNvZ3hycGdUUm1TOFB3TSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wb3N0YWdlbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1729511224);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Copiando estrutura para tabela blog_redesocial.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `apelido` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela blog_redesocial.users: 2 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `apelido`, `foto`) VALUES
	(1, 'Maria Vitoria', 'mariavitoriamedeiros27@gmail.com', NULL, '$2y$12$7daRUutnrN95bYd/RFwSmubpSz4IzpNgLcdYrT9tkomd7rZPCOjsC', NULL, '2024-10-10 16:27:23', '2024-10-10 16:27:23', 'maria', 'fotos/usuario01.png'),
	(2, 'Maria Vitoria', 'vitoriamedeiros27@gmail.com', NULL, '$2y$12$iFW8phv0JjX9LrfO9xT6U.4nBM0VzMXGyZutfh552Tang.W/V.mtK', NULL, '2024-10-10 17:03:42', '2024-10-10 17:03:42', 'vicky', 'foto/usuario02.png');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
