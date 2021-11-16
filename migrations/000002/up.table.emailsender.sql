CREATE TABLE `emailsender` (
  `id` int NOT NULL AUTO_INCREMENT,
  `toName` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toEmail` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toQR` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toContent` text COLLATE utf8mb4_unicode_ci,
  `statusSent` tinyint(1) DEFAULT NULL,
  `sentTime` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `emailsender_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;