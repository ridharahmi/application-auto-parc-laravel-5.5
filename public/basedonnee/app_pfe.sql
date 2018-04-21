-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 16 avr. 2018 à 18:37
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
(1, '13-CH-14', 'med ali', '09254156', '22541785', 'tunisie, monastir', 'Disponible', '2018-04-14 20:05:17', '2018-04-16 15:00:52'),
(2, '13-CH-15', 'marwen', '09652638', '45652362', 'tunisie, monastir', 'Disponible', '2018-04-14 20:24:54', '2018-04-16 15:01:03');

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
(1, 'Fo-10', 'ahmed', 'ahmed.bensalem@gmail.com', '93652541', '98745852', 'sousse tunisie', '2018-04-14 20:31:35', '2018-04-14 20:31:35'),
(2, 'Fo-11', 'mounir', 'mounir@gmail.com', '33652145', '23652541', 'sfax tunisie', '2018-04-14 20:45:38', '2018-04-14 20:45:38');

-- --------------------------------------------------------

--
-- Structure de la table `maintenances`
--

CREATE TABLE `maintenances` (
  `id` int(10) UNSIGNED NOT NULL,
  `matricule` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'MA-01', 'taxe 3', '2018-04-08', '111', '5', 2, '2018-04-15 20:51:54', '2018-04-15 21:49:05'),
(2, 'MA-02', 'taxe', '2018-04-13', '250', '256', 1, '2018-04-15 21:16:16', '2018-04-15 21:48:19'),
(3, 'MA-03', 'taxe 1', '2018-04-01', '13', '125', 2, '2018-04-16 15:11:45', '2018-04-16 15:11:45');

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2018_04_11_210528_create_vehicules_table', 1),
(9, '2018_04_12_220214_create_chauffeurs_table', 1),
(10, '2018_04_12_220345_create_fournisseurs_table', 1),
(11, '2018_04_15_160932_create_missions_table', 2),
(12, '2018_04_15_205227_create_maintenances_table', 3);

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
(1, 'Mi-01', 'Locale', 1, 1, '2018-04-07', '2018-04-21', '10', '8', 'Mahdia', '6', '9', '2018-04-15 16:17:41', '2018-04-15 21:48:27'),
(3, 'Mi-03', 'Locale 3', 1, 1, '2018-04-21', '2018-04-22', '23', '32', 'Siliana', '22', '202', '2018-04-15 19:30:23', '2018-04-15 21:48:33'),
(4, 'Mi-05', 'Locale 1', 1, 1, '2018-04-08', '2018-04-21', '5', '7', 'Ben Arous', '12', '10', '2018-04-16 15:08:52', '2018-04-16 15:08:52');

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
(1, 'ridha rahmi', 'ridha.rahmi13@gmail.com', '$2y$10$9Zb9PI4wXToyB1WmvjMjTOY3kmC7zjU1M5ugi4hQHjKVpXX7DV5ma', 'vlNNljmn9jd1D1L03V5cGWfG0u0nGcA6VzCXKBWMmle2cJFC0La5ke1O1dGi', '2018-04-14 19:57:40', '2018-04-14 19:57:40');

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
(1, '13-TU-1470', 'Austin', 'Toyota', 'monastir', 'carte', 'Diesel', '60', 'Disponible', '2018-04-21', '50', '2018-04-14 20:00:31', '2018-04-15 19:29:02'),
(2, '13-TU-1472', 'Audi', 'Renault', 'direction informatique', 'grise', 'Diesel', '102', 'En marche', '2018-04-28', '20', '2018-04-14 20:34:01', '2018-04-15 15:47:04'),
(4, '13-TU-1475', 'Bmw', 'Peugeot', 'direction informatique', 'carte', 'GPL', '555', 'En panne', '2018-04-20', '1102', '2018-04-16 14:59:22', '2018-04-16 15:00:04');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chauffeurs`
--
ALTER TABLE `chauffeurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fournisseurs_email_unique` (`email`);

--
-- Index pour la table `maintenances`
--
ALTER TABLE `maintenances`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `maintenances_matricule_unique` (`matricule`),
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
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `maintenances`
--
ALTER TABLE `maintenances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  ADD CONSTRAINT `maintenances_for_id_foreign` FOREIGN KEY (`for_id`) REFERENCES `fournisseurs` (`id`);

--
-- Contraintes pour la table `missions`
--
ALTER TABLE `missions`
  ADD CONSTRAINT `missions_chaffeur_id_foreign` FOREIGN KEY (`chaffeur_id`) REFERENCES `chauffeurs` (`id`),
  ADD CONSTRAINT `missions_vihicule_id_foreign` FOREIGN KEY (`vihicule_id`) REFERENCES `vehicules` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
