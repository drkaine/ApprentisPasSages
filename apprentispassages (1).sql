-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 15 mars 2021 à 09:30
-- Version du serveur :  10.5.1-MariaDB-log
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `apprentispassages`
--
CREATE DATABASE IF NOT EXISTS `apprentispassages` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `apprentispassages`;

-- --------------------------------------------------------

--
-- Structure de la table `action`
--

CREATE TABLE `action` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `action`
--

INSERT INTO `action` (`id`, `created_at`, `updated_at`, `nom`, `description`, `img`) VALUES
(1, NULL, NULL, 'Le monde des antennes et des petites pattes', 'Le monde des antennes et des petites pattes', NULL),
(2, NULL, NULL, 'Acidification des océans, et alors ?', 'Acidification des océans, et alors ?', NULL),
(3, NULL, NULL, 'Jeu de rôle écocitoyen', 'Jeu de rôle écocitoyen', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `actioncatalogue`
--

CREATE TABLE `actioncatalogue` (
  `action_id` bigint(20) UNSIGNED NOT NULL,
  `catalogue_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actioncatalogue`
--

INSERT INTO `actioncatalogue` (`action_id`, `catalogue_id`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL),
(2, 1, NULL, NULL),
(3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `catalogue`
--

CREATE TABLE `catalogue` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `catalogue`
--

INSERT INTO `catalogue` (`id`, `created_at`, `updated_at`, `nom`, `description`, `img`) VALUES
(1, NULL, NULL, 'Animations', 'Animations', 'Animation.jpg'),
(2, NULL, NULL, 'Formations', 'Formations', 'Formation.jpg'),
(3, NULL, NULL, 'Soutien scolaire', 'Soutien scolaire', 'Soutien.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `contentprog`
--

CREATE TABLE `contentprog` (
  `programmation_id` bigint(20) UNSIGNED NOT NULL,
  `module_id` bigint(20) UNSIGNED NOT NULL,
  `action_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contentprog`
--

INSERT INTO `contentprog` (`programmation_id`, `module_id`, `action_id`, `created_at`, `updated_at`) VALUES
(1, 5, 2, '2021-02-24 15:28:07', '2021-02-24 15:28:07');

-- --------------------------------------------------------

--
-- Structure de la table `etiquette`
--

CREATE TABLE `etiquette` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couleur` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etiquette`
--

INSERT INTO `etiquette` (`id`, `created_at`, `updated_at`, `nom`, `couleur`) VALUES
(1, NULL, NULL, 'SVT', '#FD6D3F'),
(2, NULL, NULL, 'Chimie', '#B42BE3'),
(3, NULL, NULL, 'Phys', '#E3932D');

-- --------------------------------------------------------

--
-- Structure de la table `etiquettemodule`
--

CREATE TABLE `etiquettemodule` (
  `module_id` bigint(20) UNSIGNED NOT NULL,
  `etiquette_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etiquettemodule`
--

INSERT INTO `etiquettemodule` (`module_id`, `etiquette_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 1, NULL, NULL),
(3, 1, NULL, NULL),
(4, 1, NULL, NULL),
(4, 2, NULL, NULL),
(5, 1, NULL, NULL),
(5, 2, NULL, NULL),
(6, 1, NULL, NULL),
(6, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_25_132508_create_catalogue_table', 1),
(5, '2020_08_25_143822_create_action_table', 1),
(6, '2020_08_25_143950_create_module_table', 1),
(7, '2020_08_25_144236_create_etiquette_table', 1),
(8, '2020_08_25_144426_create_programmation_table', 1),
(9, '2020_08_25_145956_create_action_catalogue_table', 1),
(10, '2020_08_25_150109_create_module_action_table', 1),
(11, '2020_08_25_150149_create_content_prog_table', 1),
(12, '2020_08_25_150158_create_etiquette_module_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temps` time DEFAULT NULL,
  `materiel` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `projetPeda` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `format` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id`, `created_at`, `updated_at`, `nom`, `description`, `img`, `temps`, `materiel`, `projetPeda`, `lieu`, `format`) VALUES
(1, NULL, NULL, 'Qu\'est-ce qu\'un insecte ?', 'Observation des différences entre les petites bêtes du jardin, jeu « insecte ou pas insecte ? » \n            Une autre manière de classer : les différentes pièces buccales.', NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, 'Jeu « la pollinisation »', 'Comprendre le phénomène de pollinisation et son importance au cours de jeux : jeu de carte, puis : jeu où les participants sont les insectes.', NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, 'Construction « l’hôtel à insectes »', 'Les insectes utiles au potager, comment les aider à nous aider ? Construction d’un hôtel à insectes pour attirer nos petites bêtes. Hôtel fourni.', NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, 'Acidification des océans, et alors ?', 'Notions d’acides, de bases, de pH, phénomène d’acidification des océans, ses conséquences et les moyens d’action.', NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, 'Réalité virtuelle, Stanford océan', 'Stanford acidification océan permet de suivre le voyage d’une molécule de CO2 jusque dans l’océan et montre les conséquences de l’acidification', NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, 'Éco logique ?', 'Jeu de rôle autour de l’écocitoyenneté. Grand jeu sur un ou trois jours, constructions, jeux éducatifs, épreuves et énigmes...', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `moduleaction`
--

CREATE TABLE `moduleaction` (
  `module_id` bigint(20) UNSIGNED NOT NULL,
  `action_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `moduleaction`
--

INSERT INTO `moduleaction` (`module_id`, `action_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 1, NULL, NULL),
(3, 1, NULL, NULL),
(4, 2, NULL, NULL),
(5, 2, NULL, NULL),
(6, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `programmation`
--

CREATE TABLE `programmation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dateDebut` datetime NOT NULL,
  `dateFin` datetime DEFAULT NULL,
  `nbPersonnesPrevues` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `programmation`
--

INSERT INTO `programmation` (`id`, `created_at`, `updated_at`, `dateDebut`, `dateFin`, `nbPersonnesPrevues`) VALUES
(1, '2020-08-29 08:06:03', '2020-08-29 08:06:03', '2021-03-18 09:00:00', '2021-03-20 17:00:00', 20);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `actioncatalogue`
--
ALTER TABLE `actioncatalogue`
  ADD PRIMARY KEY (`action_id`,`catalogue_id`),
  ADD KEY `actioncatalogue_catalogue_id_foreign` (`catalogue_id`);

--
-- Index pour la table `catalogue`
--
ALTER TABLE `catalogue`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contentprog`
--
ALTER TABLE `contentprog`
  ADD PRIMARY KEY (`programmation_id`,`action_id`,`module_id`),
  ADD KEY `contentprog_action_id_foreign` (`action_id`),
  ADD KEY `contentprog_module_id_foreign` (`module_id`);

--
-- Index pour la table `etiquette`
--
ALTER TABLE `etiquette`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etiquettemodule`
--
ALTER TABLE `etiquettemodule`
  ADD PRIMARY KEY (`module_id`,`etiquette_id`),
  ADD KEY `etiquettemodule_etiquette_id_foreign` (`etiquette_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `moduleaction`
--
ALTER TABLE `moduleaction`
  ADD PRIMARY KEY (`module_id`,`action_id`),
  ADD KEY `moduleaction_action_id_foreign` (`action_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `programmation`
--
ALTER TABLE `programmation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `action`
--
ALTER TABLE `action`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `catalogue`
--
ALTER TABLE `catalogue`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `etiquette`
--
ALTER TABLE `etiquette`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `programmation`
--
ALTER TABLE `programmation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actioncatalogue`
--
ALTER TABLE `actioncatalogue`
  ADD CONSTRAINT `actioncatalogue_action_id_foreign` FOREIGN KEY (`action_id`) REFERENCES `action` (`id`),
  ADD CONSTRAINT `actioncatalogue_catalogue_id_foreign` FOREIGN KEY (`catalogue_id`) REFERENCES `catalogue` (`id`);

--
-- Contraintes pour la table `contentprog`
--
ALTER TABLE `contentprog`
  ADD CONSTRAINT `contentprog_action_id_foreign` FOREIGN KEY (`action_id`) REFERENCES `action` (`id`),
  ADD CONSTRAINT `contentprog_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`),
  ADD CONSTRAINT `contentprog_programmation_id_foreign` FOREIGN KEY (`programmation_id`) REFERENCES `programmation` (`id`);

--
-- Contraintes pour la table `etiquettemodule`
--
ALTER TABLE `etiquettemodule`
  ADD CONSTRAINT `etiquettemodule_etiquette_id_foreign` FOREIGN KEY (`etiquette_id`) REFERENCES `etiquette` (`id`),
  ADD CONSTRAINT `etiquettemodule_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`);

--
-- Contraintes pour la table `moduleaction`
--
ALTER TABLE `moduleaction`
  ADD CONSTRAINT `moduleaction_action_id_foreign` FOREIGN KEY (`action_id`) REFERENCES `action` (`id`),
  ADD CONSTRAINT `moduleaction_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
