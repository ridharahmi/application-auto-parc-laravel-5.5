-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 21 avr. 2018 à 15:52
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `app_pfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `chauffeurs`
--

CREATE TABLE `chauffeurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `matricule` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `chauffeurs`
--

INSERT INTO `chauffeurs` (`id`, `matricule`, `nom`, `cin`, `tel`, `adresse`, `etat`, `created_at`, `updated_at`) VALUES
(1, 'Ch-01', 'mounir', '12547854', '25415632', 'tunisie, monastir', 'Disponible', '2018-04-17 21:00:20', '2018-04-17 21:00:20'),
(2, 'CH-02', 'ahmed ben brahim', '12652145', '22541785', 'sousse tunisie', 'Disponible', '2018-04-20 19:24:17', '2018-04-20 19:24:29'),
(3, 'CH-03', 'olfa ben ali', '09652632', '25415632', 'sfax tunisie', 'Non Disponible', '2018-04-20 19:25:01', '2018-04-20 19:25:01');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs`
--

CREATE TABLE `fournisseurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fournisseurs`
--

INSERT INTO `fournisseurs` (`id`, `code`, `nom`, `email`, `fax`, `tel`, `adresse`, `created_at`, `updated_at`) VALUES
(1, 'Fo-01', 'ahmed', 'ahmed@gmail.com', '73652632', '22541785', 'skanes, monastir', '2018-04-17 20:59:27', '2018-04-17 20:59:27'),
(2, 'Fo-02', 'marwen gassoumi', 'gassoumi.marwen@gmail.com', '73652415', '55874854', 'gafsa tunsie', '2018-04-20 19:26:17', '2018-04-20 19:26:17');

-- --------------------------------------------------------

--
-- Structure de la table `maintenances`
--

CREATE TABLE `maintenances` (
  `id` int(10) UNSIGNED NOT NULL,
  `matricule` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cout` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kmveh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `maintenances`
--

INSERT INTO `maintenances` (`id`, `matricule`, `type`, `date`, `cout`, `kmveh`, `for_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'taxe 2', '2018-04-14', '25', '125', 1, '2018-04-19 19:41:09', '2018-04-20 12:49:56'),
(2, 4, 'taxe 1', '2018-04-27', '235', '125', 2, '2018-04-20 19:32:26', '2018-04-20 19:32:26'),
(3, 1, 'taxe 2', '2018-04-27', '12', '125', 1, '2018-04-20 19:32:47', '2018-04-20 19:32:47'),
(4, 3, 'taxe 1', '2018-04-27', '145', '125', 2, '2018-04-21 12:09:21', '2018-04-21 12:09:21');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2018_04_11_210528_create_vehicules_table', 1),
(13, '2018_04_12_220214_create_chauffeurs_table', 1),
(14, '2018_04_12_220345_create_fournisseurs_table', 1),
(15, '2018_04_15_160932_create_missions_table', 1),
(16, '2018_04_15_205227_create_maintenances_table', 1),
(17, '2018_04_16_213249_create_sinistres_table', 1),
(18, '2018_04_17_203000_create_papiers_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `missions`
--

CREATE TABLE `missions` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vihicule_id` int(10) UNSIGNED NOT NULL,
  `chaffeur_id` int(10) UNSIGNED NOT NULL,
  `datedepart` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateretour` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kmdepart` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kmretour` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kmville` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nmbonus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `missions`
--

INSERT INTO `missions` (`id`, `code`, `type`, `vihicule_id`, `chaffeur_id`, `datedepart`, `dateretour`, `kmdepart`, `kmretour`, `ville`, `kmville`, `nmbonus`, `created_at`, `updated_at`) VALUES
(1, 'Mi-01', 'Locale 1', 2, 1, '2018-04-13', '2018-04-27', '25', '75', 'Nabeul', '50', '5', '2018-04-18 20:58:51', '2018-04-20 20:39:13'),
(2, 'Mi-02', 'Locale 2', 3, 1, '2018-04-01', '2018-04-21', '10', '80', 'Sousse', '70', '7', '2018-04-18 21:42:07', '2018-04-20 21:38:36'),
(3, 'Mi-03', 'Locale 2', 4, 2, '2018-04-26', '2018-04-30', '250', '289', 'Kasserine', '39', '3', '2018-04-20 19:30:11', '2018-04-20 21:38:11'),
(4, 'Mi-04', 'Locale 2', 2, 3, '2018-04-27', '2018-04-30', '25', '77', 'Manouba', '52', '5', '2018-04-20 21:54:35', '2018-04-20 21:54:35'),
(5, 'Mi-05', 'Locale 3', 1, 2, '2018-04-29', '2018-04-30', '125', '180', 'Nabeul', '55', '5', '2018-04-21 12:08:00', '2018-04-21 12:08:00');

-- --------------------------------------------------------

--
-- Structure de la table `papiers`
--

CREATE TABLE `papiers` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mantant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricule` int(10) UNSIGNED NOT NULL,
  `datepaiement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateechance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `papiers`
--

INSERT INTO `papiers` (`id`, `code`, `mantant`, `categorie`, `matricule`, `datepaiement`, `dateechance`, `created_at`, `updated_at`) VALUES
(1, 'Pa-01', '245', 'Categorie 2', 3, '2018-04-15', '2018-04-27', '2018-04-17 20:37:17', '2018-04-20 12:50:12'),
(2, 'Pa-02', '254', 'Categorie 2', 3, '2018-04-21', '2018-04-29', '2018-04-19 20:18:44', '2018-04-19 20:18:44'),
(4, 'Pa-03', '236', 'Categorie 1', 1, '2018-04-21', '2018-05-01', '2018-04-20 13:42:43', '2018-04-20 15:46:27');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sinistres`
--

CREATE TABLE `sinistres` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mantdep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mantremb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chaffeur_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sinistres`
--

INSERT INTO `sinistres` (`id`, `code`, `date`, `mantdep`, `mantremb`, `chaffeur_id`, `created_at`, `updated_at`) VALUES
(1, 'Si-01', '2018-04-20', '11', '21', 1, '2018-04-19 20:09:07', '2018-04-19 20:09:07'),
(2, 'Si-02', '2018-04-27', '125', '365', 2, '2018-04-20 19:33:11', '2018-04-20 19:33:11'),
(3, 'Si-03', '2018-04-26', '125', '360', 2, '2018-04-20 19:33:34', '2018-04-20 19:33:34');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ridha rahmi', 'ridha.rahmi13@gmail.com', '$2y$10$x0QcbvQoMWRB7MsOBTWUUOG8JbeeuXL5ZvMA0d0EGIyQb6gNnIbRW', NULL, '2018-04-17 19:49:38', '2018-04-17 19:49:38');

-- --------------------------------------------------------

--
-- Structure de la table `vehicules`
--

CREATE TABLE `vehicules` (
  `id` int(10) UNSIGNED NOT NULL,
  `matricule` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modele` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `affectation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carte` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valeur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kilometrage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vehicules`
--

INSERT INTO `vehicules` (`id`, `matricule`, `modele`, `marque`, `affectation`, `carte`, `type`, `valeur`, `etat`, `date`, `kilometrage`, `created_at`, `updated_at`) VALUES
(1, '13-TU-1470', 'Citroen', 'Citroen 1', 'direction informatique', 'carte', 'Gazole', '60', 'En panne', '2018-04-07', '50', '2018-04-17 20:16:46', '2018-04-21 09:04:52'),
(2, '13-TU-1471', 'Citroen', 'Citroen 4', 'direction', 'grise', 'Diesel', '120', 'En marche', '2018-04-28', '125', '2018-04-17 21:01:16', '2018-04-20 15:37:49'),
(3, '13-TU-1472', 'Austin', 'Austin 2', 'informatique', 'carte grise', 'Gazole', '250', 'Disponible', '2018-04-21', '111', '2018-04-17 21:02:02', '2018-04-20 15:37:59'),
(4, '13-TU-1474', 'Audi', 'Audi 1', 'direction informatique', 'carte', 'Diesel', '60', 'En panne', '2018-04-13', '256', '2018-04-20 19:23:18', '2018-04-20 20:02:11');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chauffeurs`
--
ALTER TABLE `chauffeurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `chauffeurs_matricule_unique` (`matricule`);

--
-- Index pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fournisseurs_id_unique` (`id`),
  ADD UNIQUE KEY `fournisseurs_email_unique` (`email`);

--
-- Index pour la table `maintenances`
--
ALTER TABLE `maintenances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maintenances_matricule_foreign` (`matricule`),
  ADD KEY `maintenances_for_id_foreign` (`for_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `missions_code_unique` (`code`),
  ADD KEY `missions_vihicule_id_foreign` (`vihicule_id`),
  ADD KEY `missions_chaffeur_id_foreign` (`chaffeur_id`);

--
-- Index pour la table `papiers`
--
ALTER TABLE `papiers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `papiers_matricule_foreign` (`matricule`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `sinistres`
--
ALTER TABLE `sinistres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sinistres_code_unique` (`code`),
  ADD KEY `sinistres_chaffeur_id_foreign` (`chaffeur_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `vehicules`
--
ALTER TABLE `vehicules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehicules_matricule_unique` (`matricule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chauffeurs`
--
ALTER TABLE `chauffeurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `maintenances`
--
ALTER TABLE `maintenances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `papiers`
--
ALTER TABLE `papiers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `sinistres`
--
ALTER TABLE `sinistres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `vehicules`
--
ALTER TABLE `vehicules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `maintenances`
--
ALTER TABLE `maintenances`
  ADD CONSTRAINT `maintenances_for_id_foreign` FOREIGN KEY (`for_id`) REFERENCES `fournisseurs` (`id`),
  ADD CONSTRAINT `maintenances_matricule_foreign` FOREIGN KEY (`matricule`) REFERENCES `vehicules` (`id`);

--
-- Contraintes pour la table `missions`
--
ALTER TABLE `missions`
  ADD CONSTRAINT `missions_chaffeur_id_foreign` FOREIGN KEY (`chaffeur_id`) REFERENCES `chauffeurs` (`id`),
  ADD CONSTRAINT `missions_vihicule_id_foreign` FOREIGN KEY (`vihicule_id`) REFERENCES `vehicules` (`id`);

--
-- Contraintes pour la table `papiers`
--
ALTER TABLE `papiers`
  ADD CONSTRAINT `papiers_matricule_foreign` FOREIGN KEY (`matricule`) REFERENCES `vehicules` (`id`);

--
-- Contraintes pour la table `sinistres`
--
ALTER TABLE `sinistres`
  ADD CONSTRAINT `sinistres_chaffeur_id_foreign` FOREIGN KEY (`chaffeur_id`) REFERENCES `chauffeurs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
