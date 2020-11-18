
/*Table structure for table `atraccions` */

DROP TABLE IF EXISTS `atraccions`;

CREATE TABLE `atraccions` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `clasificacion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clasificacion_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `atracciones_clasificacion_id_foreign` (`clasificacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `atraccions` */

insert  into `atraccions`(`id`,`nombre`,`clasificacion`,`clasificacion_id`,`created_at`,`updated_at`,`slug`) values (1,'Alberca','Alberca-Tobogán',1,'2016-09-20 00:00:00',NULL,'alberca'),(2,'Camastro Gigante','Alberca-Tobogán',1,'2016-09-20 00:00:00',NULL,'camastro-gigante'),(3,'Cueva','Alberca-Tobogán',1,'2016-09-20 00:00:00',NULL,'cueva'),(4,'Solarium','Alberca-Tobogán',1,'2016-09-20 00:00:00',NULL,'solarium'),(5,'Potro del Amor','Potro del Amor',2,'2016-09-20 00:00:00','2017-05-16 11:18:53','potro-del-amor'),(6,'Potro Árabe','Potro del Amor',2,'2016-09-20 00:00:00',NULL,'potro-arabe'),(7,'Potro Colgante','Potro del Amor',2,'2016-09-20 00:00:00',NULL,'potro-colgante'),(9,'Potro en Niveles','Potro del Amor',2,'2016-09-20 00:00:00',NULL,'potro-en-niveles'),(10,'Rampa Tántrica','Potro del Amor',2,'2016-09-20 00:00:00',NULL,'rampa-tantrica'),(11,'Love Seat','Potro del Amor',2,'2016-09-20 00:00:00',NULL,'love-seat'),(12,'Cóncavo y Convexo','Potro del Amor',2,'2016-09-20 00:00:00',NULL,'concavo-y-convexo'),(13,'Tubo - Pole Dance','Pole Dance',3,'2016-09-20 00:00:00',NULL,'tubo'),(14,'Esfera de Luces','Pole Dance',3,'2016-09-20 00:00:00',NULL,'esfera-de-luces'),(15,'Palo de Lluvia','Pole Dance',3,'2016-09-20 00:00:00',NULL,'palo-de-lluvia'),(16,'Herrón','Pole Dance',3,'2016-09-20 00:00:00',NULL,'herron'),(17,'Table Dance','Pole Dance',3,'2016-09-20 00:00:00',NULL,'table-dance');

/*Table structure for table `blogs` */

DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `blogs` */

insert  into `blogs`(`id`,`titulo`,`img`,`created_at`,`updated_at`) values (1,'Así puedes aprovechar Hoteles Kinky durante la cua...','img/blog/retosbig.png','2020-11-12 06:00:00','2020-11-12 06:00:00'),(2,'Así puedes aprovechar Hoteles Kinky durante la cua...','img/blog/cowbig.png','2020-10-06 05:00:00','2020-11-12 06:00:00');

/*Table structure for table `clasificacions` */

DROP TABLE IF EXISTS `clasificacions`;

CREATE TABLE `clasificacions` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci,
  `orden` int(12) DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `clasificacions` */

insert  into `clasificacions`(`id`,`nombre`,`descripcion`,`orden`,`imagen`,`created_at`,`updated_at`,`slug`) values (1,'Alberca Tobogán','Encuentra habitaciones con Atracciones divertidas y refrescantes como la Alberca, la Cueva, el  Solárium, la Cascada y la Terraza o, espacios para relajarte al máximo, como el Camastro Gigante, la  Playa artificial y la Tumbona.',1,'img/atracciones/sxd1.png',NULL,'2017-06-24 03:05:40','alberca-tobogan'),(2,'Potro del Amor','En esta Atracción puedes realizar más de 30 posiciones y, lo mejor de todo, es que  hay de diferentes tipos: árabe, en niveles, colgante… Y en otras versiones, como la Rampa Tántrica, el  Love Seat y el Cóncavo y Convexo.',4,'img/atracciones/enc1.png',NULL,'2017-05-04 16:17:19','potro-del-amor'),(3,'Pole Dance','¡Seduce con un baile erótico! Aquí puedes encontrar las Atracciones necesarias para  hacerlo inolvidable, como el Tubo, que puedes encontrar en escenarios fuera de serie, la Esfera de  Luces, el Palo de Lluvia y el Herrón.',7,'img/atracciones/beso1.png',NULL,'2017-05-04 16:17:25','pole-dance');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2019_08_19_000000_create_failed_jobs_table',1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `situacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

