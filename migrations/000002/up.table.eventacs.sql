CREATE TABLE `eventacs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `station` int unsigned DEFAULT NULL,
  `qrcode` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eventacs_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;