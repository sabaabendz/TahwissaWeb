-- ======================================================
-- INTEGRATED DATABASE: gestionreservation
-- Based on April 6 dump + missing rows from April 2 dump
-- No data loss – only adds what is missing
-- ======================================================

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------
-- Table structure and data from April 6 dump (complete)
-- --------------------------------------------------------

-- Table: destination
CREATE TABLE IF NOT EXISTS `destination` (
  `id_destination` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_destination`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `destination` (`id_destination`, `nom`, `pays`, `ville`, `description`, `image_url`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'Djerba', 'Tunisie', 'djerbahood', 'Île paradisiaque connue pour ses plages et son patrimoine culturel', 'djerba.jpg', 33.80760000, 10.84510000, '2026-02-16 13:16:01', '2026-02-16 13:16:01'),
(2, 'Sidi Bou Said', 'Tunisie', 'Tunis', 'Village pittoresque aux maisons bleues et blanches', 'sidibousaid.jpg', 36.86860000, 10.34110000, '2026-02-16 13:16:01', '2026-02-16 13:16:01'),
(3, 'roma', 'italie', 'rome', 'roma est une magnifique destination en italie à découvrir absolument.', '/images/destinations/destination_roma_1772516762299.png', 41.89332030, 12.48293210, '2026-03-02 23:28:40', '2026-03-03 05:46:05'),
(5, 'new york', 'usa', 'new york', 'new york est une magnifique destination en usa à découvrir absolument.', '', 40.71272810, -74.00601520, '2026-03-02 23:38:13', '2026-03-02 23:38:13'),
(6, 'RABAT', 'MAROC', 'RABAT', 'RABAT est une magnifique destination en MAROC à découvrir absolument.', '', 34.02184540, -6.84089290, '2026-03-03 00:13:12', '2026-03-03 00:13:12'),
(7, 'ouagadougou', 'burkina faso', 'ouagadougou', 'ouagadougou est une magnifique destination en burkina faso à découvrir absolument.', '', 12.36818730, -1.52709440, '2026-03-03 00:42:53', '2026-03-03 00:42:53'),
(8, 'tunis', 'tunisie', 'tunis', 'tunis est une magnifique destination en tunisie à découvrir absolument.', '', 33.84394080, 9.40013800, '2026-03-03 01:14:27', '2026-03-03 01:14:27'),
(9, 'france', 'france', 'paris', 'france est une magnifique destination en france à découvrir absolument.', '', 46.60335400, 1.88833350, '2026-03-03 01:26:24', '2026-03-03 01:26:24'),
(10, 'chine', 'chine', 'pekin', 'chine est une magnifique destination en chine à découvrir absolument.', '/images/destinations/destination_chine_1772528914055.png', 35.00007400, 104.99992700, '2026-03-03 01:33:26', '2026-03-03 09:08:41'),
(11, 'new delhi', 'inde', 'new delhi', 'new delhi vous attend en inde delhi pour des vacances inoubliables. Nature, culture et gastronomie sont au rendez-vous.', '/images/destinations/destination_new_delhi_1772516862429.png', 28.61389540, 77.20900570, '2026-03-03 05:47:57', '2026-03-03 05:47:57'),
(12, 'paris', 'france', 'paris', 'paris vous attend en france pour des vacances inoubliables. Nature, culture et gastronomie sont au rendez-vous.', '/images/destinations/destination_paris_1772517711801.png', 48.85349510, 2.34839150, '2026-03-03 06:02:00', '2026-03-03 06:02:00'),
(13, 'beirut', 'lebanon', 'beirut', 'beirut est une destination de rêve en lebanon. Entre patrimoine historique et paysages à couper le souffle, elle séduit tous les voyageurs.', '/images/destinations/destination_beirut_1772525264019.png', 33.88922650, 35.50255850, '2026-03-03 08:07:53', '2026-03-03 08:07:53'),
(14, 'Los angeles', 'Usa', 'los angeles', 'Partez à la découverte de Los angeles, perle de Usa. Une expérience authentique vous y attend.', '/images/destinations/destination_los_angeles_1772527749204.png', 34.05369090, -118.24276600, '2026-03-03 08:49:21', '2026-03-03 08:49:21'),
(15, 'bali', 'indonisia', 'bali', 'bali, située en indonisia, est une destination qui émerveille par sa beauté et sa richesse culturelle.', '/images/destinations/destination_bali_1772527875731.png', -8.22713030, 115.19192030, '2026-03-03 08:51:23', '2026-03-03 08:51:23'),
(16, 'PARIS', 'FRANCE', 'PARIS', 'Partez à la découverte de PARIS, perle de FRANCE. Une expérience authentique vous y attend.', '/images/destinations/destination_paris_1772530816388.png', 48.85349510, 2.34839150, '2026-03-03 09:42:16', '2026-03-03 09:42:16');

-- Table: evenement (with extra column `image_filename` and `date_creation`)
CREATE TABLE IF NOT EXISTS `evenement` (
  `id_evenement` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(150) NOT NULL,
  `description` text DEFAULT NULL,
  `lieu` varchar(120) NOT NULL,
  `date_event` date NOT NULL,
  `heure_event` time NOT NULL,
  `prix` double NOT NULL,
  `nb_places` int(11) NOT NULL,
  `categorie` varchar(80) DEFAULT NULL,
  `statut` varchar(50) DEFAULT 'DISPONIBLE',
  `image_filename` varchar(255) DEFAULT NULL,
  `date_creation` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id_evenement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `evenement` (`id_evenement`, `titre`, `description`, `lieu`, `date_event`, `heure_event`, `prix`, `nb_places`, `categorie`, `statut`, `image_filename`, `date_creation`) VALUES
(2, 'Festival du Film', 'Projection de films internationaux', 'Cinema Rio', '2026-04-15', '18:00:00', 30, 150, 'Culture', 'DISPONIBLE', NULL, '2026-02-16 13:56:37'),
(3, 'Conférence Techhhh', 'Innovation et technologies du futur', 'Centre de conférences', '2026-05-10', '09:00:00', 0, 300, 'Technologie', 'DISPONIBLE', NULL, '2026-02-16 13:56:37'),
(5, 'Exposition d\'Art', 'Œuvres contemporaines d\'artistes locaux', 'Galerie El Teatro', '2026-03-25', '10:00:00', 15, 100, 'Art', 'DISPONIBLE', NULL, '2026-02-16 13:56:37'),
(8, 'chedli', 'gssh', 'bbb', '2026-02-25', '12:01:00', 22, 100, 'Musique', 'COMPLET', NULL, '2026-02-16 22:04:42'),
(9, 'chedli', 'test', 'ariana', '2026-02-18', '14:00:00', 42, 98, 'Éducation', 'COMPLET', NULL, '2026-02-17 09:32:03'),
(10, 'kaaboura event', 'jhdjhdjhhdjdjhdjhjdhjhdjhd', 'bizert', '2026-02-27', '12:00:00', 25, 100, 'Musique', 'DISPONIBLE', 'event_1772215037243_01d956bf.png', '2026-02-27 17:57:17'),
(12, 'add', 'test', 'tunis', '2026-02-28', '12:00:00', 100, 100, 'Musique', 'DISPONIBLE', NULL, '2026-02-28 19:06:48'),
(13, 'test', 'test', 'test', '2026-02-28', '12:00:00', 100, 100, 'Musique', 'DISPONIBLE', 'event_1772309700154_401b136a.png', '2026-02-28 20:15:00'),
(14, 'test', 'test', 'test', '2026-02-28', '12:00:00', 100, 100, 'Musique', 'DISPONIBLE', 'event_1772309702492_c1ed940e.png', '2026-02-28 20:15:02');

-- Table: evenement_reaction
CREATE TABLE IF NOT EXISTS `evenement_reaction` (
  `id_reaction` int(11) NOT NULL AUTO_INCREMENT,
  `id_evenement` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `date_creation` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id_reaction`),
  UNIQUE KEY `uq_evenement_user` (`id_evenement`,`id_user`),
  KEY `fk_reaction_evenement` (`id_evenement`),
  KEY `fk_reaction_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `evenement_reaction` (`id_reaction`, `id_evenement`, `id_user`, `type`, `date_creation`) VALUES
(2, 1, 2, 'DISLIKE', '2026-02-23 00:45:38'),
(4, 5, 2, 'LIKE', '2026-02-23 00:45:40'),
(5, 5, 11, 'LIKE', '2026-03-01 04:05:06');

-- Table: paiement
CREATE TABLE IF NOT EXISTS `paiement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_reservation` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `montant` decimal(10,2) NOT NULL,
  `date_paiement` datetime DEFAULT current_timestamp(),
  `methode_paiement` varchar(50) NOT NULL DEFAULT 'CARTE',
  `statut` varchar(20) NOT NULL DEFAULT 'EN_ATTENTE',
  `reference` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `id_reservation` (`id_reservation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `paiement` (`id`, `id_reservation`, `id_utilisateur`, `montant`, `date_paiement`, `methode_paiement`, `statut`, `reference`, `created_at`) VALUES
(1, 32, 1, 890.00, '2026-02-17 10:21:18', 'ESPECES', 'EN_ATTENTE', 'PAY-1771320078298', '2026-02-17 10:21:18'),
(2, 33, 1, 1350.00, '2026-02-19 21:11:35', 'VIREMENT', 'EN_ATTENTE', 'PAY-1771531895404', '2026-02-19 21:11:35'),
(3, 34, 1, 500.00, '2026-02-27 03:00:09', 'CARTE', 'EN_ATTENTE', 'PAY-1772157609330', '2026-02-27 03:00:09'),
(4, 35, 1, 1500.00, '2026-02-27 03:03:29', 'CARTE', 'EN_ATTENTE', 'PAY-1772157809365', '2026-02-27 03:03:29'),
(5, 36, 1, 450.00, '2026-02-27 03:04:26', 'CARTE', 'EN_ATTENTE', 'PAY-1772157866509', '2026-02-27 03:04:26'),
(6, 37, 6, 890.00, '2026-02-27 21:42:02', 'CARTE', 'EN_ATTENTE', 'PAY-1772224922302', '2026-02-27 21:42:02'),
(7, 38, 6, 450.00, '2026-02-27 22:38:58', 'CARTE', 'EN_ATTENTE', 'PAY-1772228338013', '2026-02-27 22:38:58'),
(8, 39, 6, 450.00, '2026-02-27 22:40:06', 'CARTE', 'EN_ATTENTE', 'PAY-1772228406389', '2026-02-27 22:40:06'),
(9, 40, 6, 299.00, '2026-02-27 22:46:56', 'CARTE', 'EN_ATTENTE', 'PAY-1772228816792', '2026-02-27 22:46:56'),
(10, 41, 6, 900.00, '2026-02-27 23:11:49', 'CARTE', 'EN_ATTENTE', 'PAY-1772230309934', '2026-02-27 23:11:49'),
(11, 42, 6, 650.00, '2026-02-27 23:19:25', 'CARTE', 'EN_ATTENTE', 'PAY-1772230765519', '2026-02-27 23:19:25'),
(12, 43, 10, 650.00, '2026-02-27 23:28:35', 'CARTE', 'EN_ATTENTE', 'PAY-1772231315265', '2026-02-27 23:28:35'),
(13, 44, 10, 800.00, '2026-02-27 23:32:35', 'CARTE', 'EN_ATTENTE', 'PAY-1772231555438', '2026-02-27 23:32:35'),
(14, 45, 10, 890.00, '2026-02-27 23:44:52', 'CARTE', 'EN_ATTENTE', 'PAY-1772232292134', '2026-02-27 23:44:52'),
(16, 47, 10, 450.00, '2026-02-28 00:17:08', 'CARTE', 'EN_ATTENTE', 'PAY-1772234228766', '2026-02-28 00:17:08'),
(17, 48, 10, 299.00, '2026-02-28 00:17:28', 'CARTE', 'EN_ATTENTE', 'PAY-1772234248303', '2026-02-28 00:17:28'),
(18, 49, 6, 100.00, '2026-02-28 01:20:01', 'CARTE', 'EN_ATTENTE', 'PAY-1772238001125', '2026-02-28 01:20:01');

-- Table: point_interet
CREATE TABLE IF NOT EXISTS `point_interet` (
  `id_point_interet` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `destination_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_point_interet`),
  KEY `destination_id` (`destination_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `point_interet` (`id_point_interet`, `nom`, `type`, `description`, `image_url`, `destination_id`, `created_at`, `updated_at`) VALUES
(1, 'Plage de Sidi ali', 'plage', 'Magnifique plage de sable blanc', 'plage_mahrez.jpg', 1, '2026-02-16 13:16:01', '2026-03-02 23:30:35'),
(2, 'Synagogue de la Ghriba', 'monument', 'Synagogue historique et lieu de pèlerinage', 'ghriba.jpg', 1, '2026-02-16 13:16:01', '2026-02-16 13:16:01'),
(3, 'Musée de Guellala', 'musée', 'Musée dédié aux traditions de Djerba', 'guellala.jpg', 1, '2026-02-16 13:16:01', '2026-02-16 13:16:01'),
(4, 'Café des Délices', 'restaurant', 'Café emblématique avec vue sur la mer', 'cafe_delices.jpg', 2, '2026-02-16 13:16:01', '2026-02-16 13:16:01'),
(5, 'new york state building', 'hôtel', '', '', 5, '2026-03-03 05:46:48', '2026-03-03 05:46:48');

-- Table: reclamation
CREATE TABLE IF NOT EXISTS `reclamation` (
  `id_reclamation` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(80) DEFAULT NULL,
  `statut` varchar(50) DEFAULT 'EN_ATTENTE',
  `date_creation` datetime DEFAULT current_timestamp(),
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_reclamation`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `reclamation` (`id_reclamation`, `titre`, `description`, `type`, `statut`, `date_creation`, `id_user`) VALUES
(1, 'Problème de paiement', 'Le paiement n\'a pas été traité correctement', 'Autre', 'EN_ATTENTE', '2026-02-16 12:36:04', 2),
(8, 'test', 'hdhjd', 'Facturation', 'EN_COURS', '2026-02-17 09:26:38', 2),
(9, 'une arnaqueeee', 'je suis deçu par le service de cette plateforme', 'Service Client', 'EN_ATTENTE', '2026-02-28 18:23:09', 4);

-- Table: reservationvoyage
CREATE TABLE IF NOT EXISTS `reservationvoyage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUtilisateur` int(100) NOT NULL,
  `id_voyage` int(11) NOT NULL,
  `date_reservation` datetime DEFAULT current_timestamp(),
  `statut` enum('EN_ATTENTE','CONFIRMEE','ANNULEE','TERMINEE') NOT NULL DEFAULT 'EN_ATTENTE',
  `nbrPersonnes` int(100) NOT NULL DEFAULT 1,
  `montantTotal` decimal(10,2) NOT NULL DEFAULT 10.20,
  `dateCreation` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `idUtilisateur` (`idUtilisateur`),
  KEY `idDestination` (`id_voyage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `reservationvoyage` (`id`, `idUtilisateur`, `id_voyage`, `date_reservation`, `statut`, `nbrPersonnes`, `montantTotal`, `dateCreation`) VALUES
(5, 1, 1, '2026-02-13 15:22:42', 'CONFIRMEE', 2, 900.00, '2026-02-13 15:22:42'),
(6, 2, 2, '2026-02-13 15:22:42', 'EN_ATTENTE', 1, 890.00, '2026-02-13 15:22:42'),
(7, 1, 3, '2026-02-13 00:00:00', 'CONFIRMEE', 4, 2600.00, '2026-02-13 15:22:42'),
(8, 3, 4, '2026-02-13 15:22:42', 'ANNULEE', 2, 598.00, '2026-02-13 15:22:42'),
(9, 2, 5, '2026-02-13 15:22:42', 'EN_ATTENTE', 3, 4500.00, '2026-02-13 15:22:42'),
(10, 5, 4, '2026-02-13 15:22:54', 'CONFIRMEE', 3, 897.00, '2026-02-13 15:22:54'),
(11, 5, 4, '2026-02-13 15:59:55', 'CONFIRMEE', 3, 897.00, '2026-02-13 15:59:55'),
(12, 5, 4, '2026-02-13 16:43:02', 'CONFIRMEE', 3, 897.00, '2026-02-13 16:43:02'),
(19, 67, 1, '2026-02-15 19:20:33', 'EN_ATTENTE', 1, 450.00, '2026-02-15 19:20:33'),
(20, 6666, 1, '2026-03-07 00:00:00', 'EN_ATTENTE', 5, 2250.00, '2026-02-15 23:48:00'),
(21, 6666, 1, '2026-03-07 00:00:00', 'CONFIRMEE', 5, 2250.00, '2026-02-15 23:48:02'),
(22, 1, 1, '2026-02-16 14:16:01', 'CONFIRMEE', 2, 900.00, '2026-02-16 14:16:01'),
(23, 2, 2, '2026-02-16 14:16:01', 'EN_ATTENTE', 1, 890.00, '2026-02-16 14:16:01'),
(24, 1, 3, '2026-02-16 14:16:01', 'CONFIRMEE', 4, 2600.00, '2026-02-16 14:16:01'),
(25, 3, 4, '2026-02-16 14:16:01', 'ANNULEE', 2, 598.00, '2026-02-16 14:16:01'),
(28, 8998, 3, '2026-02-16 00:00:00', 'CONFIRMEE', 3, 1950.00, '2026-02-16 17:26:42'),
(29, 535, 2, '2026-02-12 00:00:00', 'CONFIRMEE', 1, 890.00, '2026-02-17 00:37:53'),
(32, 1, 7, '2026-09-05 00:00:00', 'ANNULEE', 1, 890.00, '2026-02-17 10:21:18'),
(33, 1, 1, '2026-07-11 00:00:00', 'EN_ATTENTE', 3, 1350.00, '2026-02-19 21:11:35'),
(34, 1, 5, '2026-10-20 00:00:00', 'EN_ATTENTE', 1, 500.00, '2026-02-27 03:00:09'),
(35, 1, 10, '2026-10-01 00:00:00', 'EN_ATTENTE', 1, 1500.00, '2026-02-27 03:03:29'),
(36, 1, 1, '2026-07-10 00:00:00', 'ANNULEE', 1, 450.00, '2026-02-27 03:04:26'),
(37, 6, 7, '2026-09-11 00:00:00', 'CONFIRMEE', 1, 890.00, '2026-02-27 21:42:02'),
(38, 6, 1, '2026-10-20 00:00:00', 'ANNULEE', 1, 450.00, '2026-02-27 22:38:58'),
(39, 6, 1, '2026-07-10 00:00:00', 'CONFIRMEE', 1, 450.00, '2026-02-27 22:40:06'),
(40, 6, 4, '2026-06-15 00:00:00', 'CONFIRMEE', 1, 299.00, '2026-02-27 22:46:56'),
(41, 6, 1, '2026-07-10 00:00:00', 'CONFIRMEE', 2, 900.00, '2026-02-27 23:11:49'),
(42, 6, 3, '2026-08-20 00:00:00', 'CONFIRMEE', 1, 650.00, '2026-02-27 23:19:25'),
(43, 10, 3, '2026-08-20 00:00:00', 'CONFIRMEE', 1, 650.00, '2026-02-27 23:28:35'),
(44, 10, 11, '2026-02-16 00:00:00', 'CONFIRMEE', 1, 800.00, '2026-02-27 23:32:35'),
(45, 10, 2, '2026-09-05 00:00:00', 'CONFIRMEE', 1, 890.00, '2026-02-27 23:44:52'),
(47, 10, 6, '2026-07-10 00:00:00', 'CONFIRMEE', 1, 450.00, '2026-02-28 00:17:08'),
(48, 10, 4, '2026-06-15 00:00:00', 'CONFIRMEE', 1, 299.00, '2026-02-28 00:17:28'),
(49, 6, 13, '2026-02-28 00:00:00', 'CONFIRMEE', 1, 100.00, '2026-02-28 01:20:01');

-- Table: reservation_evenement
CREATE TABLE IF NOT EXISTS `reservation_evenement` (
  `id_reservation` int(11) NOT NULL AUTO_INCREMENT,
  `date_reservation` date NOT NULL,
  `nb_places_reservees` int(11) NOT NULL,
  `statut` varchar(50) DEFAULT 'EN_ATTENTE',
  `id_evenement` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_reservation`),
  KEY `id_evenement` (`id_evenement`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `reservation_evenement` (`id_reservation`, `date_reservation`, `nb_places_reservees`, `statut`, `id_evenement`, `id_user`) VALUES
(2, '2026-02-14', 4, 'EN_ATTENTE', 2, 3),
(6, '2026-02-16', 50, 'CONFIRMEE', 1, 1),
(8, '2026-02-16', 1, 'EN_ATTENTE', 1, 1),
(9, '2026-02-16', 1, 'EN_ATTENTE', 3, 1),
(10, '2026-02-16', 1, 'EN_ATTENTE', 8, 1),
(11, '2026-02-17', 6, 'EN_ATTENTE', 5, 2),
(12, '2026-02-28', 6, 'EN_ATTENTE', 5, 4),
(13, '2026-02-28', 1, 'EN_ATTENTE', 13, 3);

-- Table: reservation_transport
CREATE TABLE IF NOT EXISTS `reservation_transport` (
  `id_reservation` int(11) NOT NULL AUTO_INCREMENT,
  `date_reservation` date NOT NULL,
  `nb_places_reservees` int(11) NOT NULL,
  `statut` varchar(50) NOT NULL DEFAULT 'EN_ATTENTE',
  `id_transport` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_reservation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `reservation_transport` (`id_reservation`, `date_reservation`, `nb_places_reservees`, `statut`, `id_transport`, `id_user`) VALUES
(8, '2026-02-17', 3, 'Annulée', 3, 1),
(9, '2026-02-22', 1, 'Confirmée', 3, 1),
(10, '2026-02-22', 1, 'Confirmée', 3, 1),
(11, '2026-03-03', 1, 'Confirmée', 4, 1),
(12, '2026-03-03', 1, 'Confirmée', 4, 1),
(13, '2026-03-03', 1, 'Confirmée', 4, 1);

-- Table: role
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `role` (`id`, `name`, `description`) VALUES
(1, 'USER', 'Utilisateur normal - touriste/voyageur'),
(2, 'AGENT', 'Agent de voyage - peut gérer des offres'),
(3, 'ADMIN', 'Administrateur système - tous les droits');

-- Table: transport
CREATE TABLE IF NOT EXISTS `transport` (
  `id_transport` int(11) NOT NULL AUTO_INCREMENT,
  `type_transport` varchar(50) NOT NULL,
  `ville_depart` varchar(100) NOT NULL,
  `ville_arrivee` varchar(100) NOT NULL,
  `date_depart` date NOT NULL,
  `heure_depart` time NOT NULL,
  `duree` int(11) NOT NULL,
  `prix` double NOT NULL,
  `nb_places` int(11) NOT NULL,
  PRIMARY KEY (`id_transport`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `transport` (`id_transport`, `type_transport`, `ville_depart`, `ville_arrivee`, `date_depart`, `heure_depart`, `duree`, `prix`, `nb_places`) VALUES
(3, 'Bus', 'Rome', 'Tunis', '2026-02-23', '04:22:15', 3, 200, 2),
(4, 'Avion', 'Tunisie', 'France', '2026-02-23', '05:13:13', 500, 300, 50);

-- Table: user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `avatar_url` varchar(500) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  `is_verified` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 1,
  `role_id` int(11) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `user` (`id`, `email`, `password`, `first_name`, `last_name`, `phone`, `avatar_url`, `description`, `address`, `city`, `country`, `latitude`, `longitude`, `is_verified`, `is_active`, `role_id`, `created_at`, `updated_at`) VALUES
(2, 'agent@test.com', 'password123', 'Janey', 'Smith', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 2, '2026-02-16 18:48:47', '2026-02-16 18:48:47'),
(3, 'admin@test.com', 'admin123', 'Admin', 'System', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 3, '2026-02-16 18:48:47', '2026-02-16 18:48:47'),
(4, 'touriste@email.com', 'pass123', 'Mohamed', 'Ben Ali', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, '2026-02-16 18:48:47', '2026-02-16 18:48:47'),
(5, 'agent@voyage.com', 'agent123', 'Sophie', 'Martin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 2, '2026-02-16 18:48:47', '2026-02-16 18:48:47'),
(6, 'sabaa.bendziri@esprit.tn', 'soubasouba', 'sabaa', 'dziri', '50960481', NULL, NULL, NULL, 'hhhh', 'Tunisie', NULL, NULL, 1, 1, 1, '2026-02-27 20:41:08', '2026-02-28 01:16:30'),
(8, 'sabsoubbdziri@gmail.com', 'soubasouba', 'sabaa', 'dziri', '50960481', NULL, NULL, NULL, 'tunis', 'Tunisie', NULL, NULL, 0, 1, 2, '2026-02-27 21:16:41', '2026-02-27 21:16:41'),
(10, 'ghorbali02@gmail.com', 'imenimen', 'imen', 'imen', '50960481', NULL, NULL, NULL, 'ttttttttt', 'Tunisie', NULL, NULL, 1, 1, 1, '2026-02-27 22:27:30', '2026-02-27 22:27:30'),
(11, 'sa@gmail.com', '123456', 'sayari', 'amin', '+21625476896', NULL, NULL, NULL, 'bizert', 'Tunisie', NULL, NULL, 1, 1, 3, '2026-03-01 03:02:43', '2026-03-01 03:07:20'),
(12, 'test@gmail.com', '123Test*', 'test', 'test', '*21622123456', NULL, NULL, NULL, 'tunis', 'Tunisie', NULL, NULL, 1, 1, 3, '2026-03-03 02:32:03', '2026-03-03 03:38:09');

-- Table: utilisateur (keep both tables – some parts of the code still reference it)
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `role` varchar(50) DEFAULT 'USER',
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `utilisateur` (`id_user`, `nom`, `email`, `mot_de_passe`, `role`) VALUES
(1, 'Administrateur', 'admin@tahwissa.com', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'ADMIN'),
(2, 'Ahmed Ben Ali', 'ahmed@example.com', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'USER'),
(3, 'Sarah Meziani', 'sarah@example.com', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'USER'),
(4, 'Mohamed Karoui', 'mohamed@example.com', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'USER'),
(5, 'agent', 'agent@tahwissa.com', 'password', 'USER');

-- Table: voyage
CREATE TABLE IF NOT EXISTS `voyage` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `destination` varchar(255) NOT NULL,
  `categorie` varchar(100) DEFAULT NULL,
  `prix_unitaire` decimal(10,2) NOT NULL,
  `date_depart` date DEFAULT NULL,
  `date_retour` date DEFAULT NULL,
  `places_disponibles` int(11) NOT NULL DEFAULT 0,
  `image_url` varchar(255) DEFAULT NULL,
  `statut` varchar(20) DEFAULT 'ACTIF',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `voyage` (`id`, `titre`, `description`, `destination`, `categorie`, `prix_unitaire`, `date_depart`, `date_retour`, `places_disponibles`, `image_url`, `statut`, `created_at`, `updated_at`) VALUES
(1, 'Séjour à Djerba', 'Profitez des plages paradisiaques et du soleil.', 'Djerba', 'Détente', 450.00, '2026-07-10', '2026-07-17', 15, '/images/djerba.jpg', 'ACTIF', '2026-02-13 15:22:10', '2026-02-13 15:22:10'),
(2, 'Circuit Andalucia', 'Découvrez les villes historiques du sud de l\'Espagne.', 'Espagne', 'Culturel', 890.00, '2026-09-05', '2026-09-12', 8, '/images/andalucia.jpg', 'ACTIF', '2026-02-13 15:22:10', '2026-02-13 15:22:10'),
(3, 'Aventure en Sardaigne', 'Randonnées et criques secrètes.', 'Sardaigne', 'Aventure', 650.00, '2026-08-20', '2026-08-27', 10, '/images/sardaigne.jpg', 'ACTIF', '2026-02-13 15:22:10', '2026-02-13 15:22:10'),
(4, 'Week-end à Paris', 'Séjour romantique avec croisière sur la Seine.', 'Paris', 'Romantique', 299.00, '2026-06-15', '2026-06-18', 20, '/images/paris.jpg', 'ACTIF', '2026-02-13 15:22:10', '2026-02-13 15:22:10'),
(5, 'Safari au Kenya', 'Rencontrez la faune sauvage dans son habitat naturel.', 'Kenya', 'Aventure', 500.00, '2026-10-20', '2026-10-10', 5, '/images/kenya.jpg', 'ACTIF', '2026-02-13 15:22:10', '2026-02-16 17:27:49'),
(6, 'Séjour à Djerba', 'Profitez des plages paradisiaques et du soleil.', 'Djerba', 'Détente', 450.00, '2026-07-10', '2026-07-17', 15, '/images/djerba.jpg', 'ACTIF', '2026-02-16 14:16:01', '2026-02-16 14:16:01'),
(7, 'Circuit Andalucia', 'Découvrez les villes historiques du sud de l\'Espagne.', 'Espagne', 'Culturel', 890.00, '2026-09-05', '2026-09-12', 8, '/images/andalucia.jpg', 'ACTIF', '2026-02-16 14:16:01', '2026-02-16 14:16:01'),
(8, 'Aventure en Sardaigne', 'Randonnées et criques secrètes.', 'Sardaigne', 'Aventure', 650.00, '2026-08-20', '2026-08-27', 10, '/images/sardaigne.jpg', 'ACTIF', '2026-02-16 14:16:01', '2026-02-16 14:16:01'),
(9, 'Week-end à Paris', 'Séjour romantique avec croisière sur la Seine.', 'Paris', 'Romantique', 299.00, '2026-06-15', '2026-06-18', 20, '/images/paris.jpg', 'ACTIF', '2026-02-16 14:16:01', '2026-02-16 14:16:01'),
(10, 'Safari au Kenya', 'Rencontrez la faune sauvage dans son habitat naturel.', 'Kenya', 'Aventure', 1500.00, '2026-10-01', '2026-10-10', 5, '/images/kenya.jpg', 'ACTIF', '2026-02-16 14:16:01', '2026-02-16 14:16:01'),
(11, 'Egypt', 'bbbbbbbb', 'aaaaaaaaa', 'ssssssss', 800.00, '2026-02-16', '2026-02-23', 10, 'https://share.google/atPEuVVyYbUu82C0f', 'ACTIF', '2026-02-16 17:24:48', '2026-02-16 17:24:48'),
(13, 'tabarka', '', 'tabarka', 'camping', 100.00, '2026-02-28', '2026-03-05', 7, '', 'ACTIF', '2026-02-28 01:19:14', '2026-02-28 01:19:14'),
(14, 'tabarka', '', 'tabarka', 'camping', 100.00, '2026-02-28', '2026-03-05', 7, '', 'ACTIF', '2026-02-28 01:19:16', '2026-02-28 01:19:16');

-- View: v_evenement_places_disponibles
DROP VIEW IF EXISTS `v_evenement_places_disponibles`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_evenement_places_disponibles` AS 
SELECT 
  `e`.`id_evenement` AS `id_evenement`, 
  `e`.`titre` AS `titre`, 
  `e`.`nb_places` AS `nb_places_total`, 
  coalesce(sum(case when `r`.`statut` in ('CONFIRMEE','EN_ATTENTE') then `r`.`nb_places_reservees` else 0 end),0) AS `nb_places_reservees`, 
  greatest(0,`e`.`nb_places` - coalesce(sum(case when `r`.`statut` in ('CONFIRMEE','EN_ATTENTE') then `r`.`nb_places_reservees` else 0 end),0)) AS `nb_places_disponibles` 
FROM (`evenement` `e` left join `reservation_evenement` `r` on(`r`.`id_evenement` = `e`.`id_evenement`)) 
GROUP BY `e`.`id_evenement`, `e`.`titre`, `e`.`nb_places`;

-- --------------------------------------------------------
-- ADD MISSING ROWS FROM THE APRIL 2 DUMP
-- --------------------------------------------------------

-- Missing evenement (id 1 and 4)
INSERT IGNORE INTO `evenement` (`id_evenement`, `titre`, `description`, `lieu`, `date_event`, `heure_event`, `prix`, `nb_places`, `categorie`, `statut`, `image_filename`, `date_creation`) VALUES
(1, 'Concert Live Jazz', 'Soirée jazz exceptionnelle avec les meilleurs artistes', 'Carthage Theatre', '2026-03-20', '20:00:00', 50, 200, 'Musique', 'DISPONIBLE', NULL, NULL),
(4, 'Marathon de Tunis', 'Course de 42km à travers la ville', 'Avenue Habib Bourguiba', '2026-06-01', '07:00:00', 25, 500, 'Sport', 'DISPONIBLE', NULL, NULL);

-- Missing reservation_evenement (id 1 and 3) – only if they don't exist
INSERT IGNORE INTO `reservation_evenement` (`id_reservation`, `date_reservation`, `nb_places_reservees`, `statut`, `id_evenement`, `id_user`) VALUES
(1, '2026-02-15', 2, 'CONFIRMEE', 1, 2),
(3, '2026-02-13', 3, 'CONFIRMEE', 3, 4);

-- --------------------------------------------------------
-- Add foreign key constraints (if not already present)
-- --------------------------------------------------------
ALTER TABLE `paiement` ADD CONSTRAINT `paiement_ibfk_1` FOREIGN KEY IF NOT EXISTS (`id_reservation`) REFERENCES `reservationvoyage` (`id`) ON DELETE CASCADE;
ALTER TABLE `point_interet` ADD CONSTRAINT `point_interet_ibfk_1` FOREIGN KEY IF NOT EXISTS (`destination_id`) REFERENCES `destination` (`id_destination`) ON DELETE CASCADE;
ALTER TABLE `reservationvoyage` ADD CONSTRAINT `fk_reservation_voyage` FOREIGN KEY IF NOT EXISTS (`id_voyage`) REFERENCES `voyage` (`id`) ON UPDATE CASCADE;
ALTER TABLE `user` ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY IF NOT EXISTS (`role_id`) REFERENCES `role` (`id`);

-- Note: foreign keys for evenement_reaction and reservation_evenement are omitted because the referenced tables (evenement, user, utilisateur) already exist.

COMMIT;