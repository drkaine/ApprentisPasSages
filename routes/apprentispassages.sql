-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 09 avr. 2021 à 09:12
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `apprentispassages`
--

-- --------------------------------------------------------

--
-- Structure de la table `actioncatalogues`
--

CREATE TABLE `actioncatalogues` (
  `action_id` bigint(20) UNSIGNED NOT NULL,
  `catalogue_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actioncatalogues`
--

INSERT INTO `actioncatalogues` (`action_id`, `catalogue_id`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL),
(2, 1, NULL, NULL),
(3, 1, NULL, NULL),
(8, 1, '2021-04-09 06:58:19', '2021-04-09 06:58:19');

-- --------------------------------------------------------

--
-- Structure de la table `actions`
--

CREATE TABLE `actions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actions`
--

INSERT INTO `actions` (`id`, `created_at`, `updated_at`, `nom`, `description`, `img`, `deleted_at`) VALUES
(1, NULL, NULL, 'Le monde des antennes et des petites pattes', 'Le monde des antennes et des petites pattes', NULL, NULL),
(2, NULL, NULL, 'Acidification des océans, et alors ?', 'Acidification des océans, et alors ?', NULL, NULL),
(3, NULL, NULL, 'Jeu de rôle écocitoyen', 'Jeu de rôle écocitoyen', NULL, NULL),
(4, NULL, NULL, 'test', 'testtest', NULL, NULL),
(5, NULL, NULL, 'tz', 'tztz', NULL, NULL),
(6, NULL, NULL, ' cbvvhjhklb:jgv;hc,gxnfbwdvS', 'fbwgfnhsx,gd;f:gouif;yu,dhnfgsbwd', NULL, NULL),
(7, NULL, NULL, 'GRQwhstjxydtkuyfdtjsrheqgzFA', 'GRQHTSRJYDKUFKDTJRSHWFsd', NULL, NULL),
(8, '2021-04-09 06:58:19', '2021-04-09 06:58:19', 'fgh', 'ztry', 'rgeth', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `albums`
--

CREATE TABLE `albums` (
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `albums`
--

INSERT INTO `albums` (`nom`, `created_at`, `updated_at`, `deleted_at`) VALUES
('ezfrted', '2021-04-08 07:14:38', '2021-04-08 07:14:38', NULL),
('hello', '2021-04-08 07:18:03', '2021-04-08 07:18:03', NULL),
('partenaires', NULL, NULL, NULL),
('t', NULL, NULL, NULL),
('team', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `catalogues`
--

CREATE TABLE `catalogues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `catalogues`
--

INSERT INTO `catalogues` (`id`, `created_at`, `updated_at`, `nom`, `deleted_at`) VALUES
(1, NULL, NULL, 'Animations', NULL),
(2, NULL, NULL, 'Formations', NULL),
(3, NULL, NULL, 'Soutien scolaire', NULL),
(5, '2021-04-07 07:29:16', '2021-04-07 07:45:39', '<p>dfghnf</p>', '2021-04-07 07:45:39'),
(6, '2021-04-07 10:12:21', '2021-04-07 11:54:28', '<p>&ugrave;</p>\r\n\r\n<p>mlkjn</p>', '2021-04-07 11:54:28'),
(7, '2021-04-07 11:54:05', '2021-04-08 06:07:05', 'bo', '2021-04-08 06:07:05'),
(8, '2021-04-07 11:54:19', '2021-04-08 06:07:08', 'ijpbohubnm', '2021-04-08 06:07:08'),
(9, '2021-04-08 05:04:15', '2021-04-08 06:07:02', 'tesgrhd', '2021-04-08 06:07:02'),
(10, '2021-04-08 05:04:19', '2021-04-08 06:06:59', '<p>tryeturyituo</p>', '2021-04-08 06:06:59');

-- --------------------------------------------------------

--
-- Structure de la table `categoriecoupsdecoeurs`
--

CREATE TABLE `categoriecoupsdecoeurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categoriecoupsdecoeurs`
--

INSERT INTO `categoriecoupsdecoeurs` (`id`, `nom`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sciences', NULL, NULL, NULL),
(2, 'Art et littérature', NULL, NULL, NULL),
(3, 'Ludique', NULL, NULL, NULL),
(4, 'Histoire', NULL, NULL, NULL),
(5, 'Divers', NULL, NULL, NULL),
(10, '<p>test</p>', '2021-04-02 11:36:50', '2021-04-07 07:49:00', '2021-04-07 07:49:00');

-- --------------------------------------------------------

--
-- Structure de la table `contentprogs`
--

CREATE TABLE `contentprogs` (
  `programmation_id` bigint(20) UNSIGNED NOT NULL,
  `module_id` bigint(20) UNSIGNED NOT NULL,
  `action_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contentprogs`
--

INSERT INTO `contentprogs` (`programmation_id`, `module_id`, `action_id`, `created_at`, `updated_at`) VALUES
(2, 1, 1, '2021-04-02 09:36:02', '2021-04-02 09:36:02');

-- --------------------------------------------------------

--
-- Structure de la table `coupsdecoeurs`
--

CREATE TABLE `coupsdecoeurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoriecoupsdecoeur_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lien` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `coupsdecoeurs`
--

INSERT INTO `coupsdecoeurs` (`id`, `categoriecoupsdecoeur_id`, `created_at`, `updated_at`, `lien`, `nom`, `description`, `deleted_at`) VALUES
(1, 1, NULL, NULL, 'http://www.jimal-khalili.com/', 'Jim Al Khalili', 'Professeur de physique à l\'université de Surrey,président de l\'association Humaniste Britannique, il a réalisé des vidéos de vulgarisation sur l\'histoire de la chimie extrêmement bien vulgarisées : A voir absolument!(Site en anglais, mais de nombreuses vidéos on été traduites en français)', NULL),
(4, 1, NULL, NULL, 'http://www.savoir-sans-frontieres.com/JPP/telechargeables/free_downloads.htm', 'Savoir sans frontière', 'De nombreuses Bd sur les sciences physiques en téléchargement gratuit par Jean Pierre Petit, maître de recherche au CNRS, Ouvrages sur les aventures d\'Anselme Lanturlu en plusieurs langues', NULL),
(5, 1, NULL, NULL, 'http://www.hubertreeves.info', 'Hubert Reeves', 'astrophysicien vulgarisateur génial, orienté vers l\'écologie. La rubrique spectacle du site permet une première approche de sujets plus complexes', NULL),
(7, 1, NULL, NULL, 'http://lewebpedagogique.com/eleec/voyage-en-electricite/', 'Voyage en électricité', 'dessin animé, pour tous où on explique les principes de l\'electricité et de l\'électronique', NULL),
(8, 1, NULL, NULL, 'http://www.canal-educatif.fr/sciences.htm', 'Canal educatif', 'Des questions de sciences, mais aussi de mathématiques et d\'économie', NULL),
(9, 1, NULL, NULL, 'http://education.francetv.fr', 'Education francetv', 'Nombreuses videos sur tous les sujets', NULL),
(10, 1, NULL, NULL, 'http://www.france3.fr/emissions/c-est-pas-sorcier', 'C\'est pas sorcier', 'Emission de vulgarisation sur de nombreux sujets', NULL),
(11, 1, NULL, NULL, 'http://www.france-universite-numerique.fr/moocs.html', 'FUN France Université Numérique', 'Pour ceux, et celles qui veulent aller plus loin', NULL),
(12, 2, NULL, NULL, 'http://arts-vesubiens.com', 'Galerie Arts Vesubiens', 'Galerie Arts Vesubiens', NULL),
(13, 2, NULL, NULL, 'http://www.canal-educatif.fr/art.htm?gclid=Cj0KEQjwyMafBRCU7OCRyc2vitsBEiQAKV4H9IQBkX3U72_PsHa2JtabJWRBfO7Tv-FKVMScdaNFmlkaAvGl8P8HAQ', 'Canal Educatif-Art', 'Approche sympatique en video expliquant des oeuvres d\'art', NULL),
(14, 3, NULL, NULL, 'http://www.jeux-historiques.com', 'Jeux historiques', 'jeux en ligne gratuits sur les périodes de l\'histoire', NULL),
(15, 1, NULL, NULL, 'http://unice.fr/vie-etudiante/culture/culture-sciences/science-et-experiences/exposition-en-cours', 'Science et Expériences', 'Science & Expériences est une exposition itinérante de culture scientifique présentant 60 expériences de Physique, Biologie et Mathématiques étonnantes et amusantes, qui mettent en évidence des phénomènes naturels et qui proposent des défis mathématiques sans équation. Son public scolaire va du CP à la Terminale, et elle est proposée également au Grand Public lors de la Fête de la Science.', NULL),
(16, 1, NULL, NULL, 'http://www.fondation-lamap.org/', 'Main à la Pâte', 'La Fondation La main à la pâte a pour mission de contribuer à améliorer la qualité de l?enseignement de la science et de la technologie à l?école primaire et au collège, école du socle commun où se joue l?égalité des chances.', NULL),
(17, 2, NULL, NULL, 'http://www.remyjammes.com/', 'Rémy Jammes', 'Un pied dans le territoire abstrait', NULL),
(18, 2, NULL, NULL, 'http://www.metiersdart-paca.fr/profil/212/ATELIER%20DE%20LUTHERIE%20DU%20QUATUOR%20A%20CORDES', 'Atelier de lutherie Artisanal', 'Atelier de lutherie Artisanal Olivieri & Clairici', NULL),
(19, 4, NULL, NULL, 'http://gili-eric.e-monsite.com/', 'Histoire du Haut Pays Niçois', 'Des articles gratuits, des vidéos (cours, conférences), des rapports de recherches et notes d\'archives, une vitrine sur les expositions du musée du Patrimoine du Haut-Pays Niçois et les publications de l\'AMONT (Patrimoines du Haut-Pays ; Carnets de l\'AMONT ; Racines du Haut-Pays)', NULL),
(20, 4, NULL, NULL, 'http://amontcev.free.fr/', 'AMONT', 'Site officiel de l\'Association MONTagne et Patrimoine (AMONT)  qui anime le musée du Patrimoine du Haut Pays, à Saint-Martin Vésubie (France) et le Centre d\'Études Vésubiennes', NULL),
(21, 1, NULL, NULL, 'http://sites.unice.fr/site/broch/Lazarus-Mirages/Lazarus.html', 'Lazarus Mirages', 'Venez découvrir a quel point votre cerveau interprètre les informations qu\'il reçoit !', NULL),
(22, 5, NULL, NULL, 'http://www.vesubian.com', 'Vésubie Découverte', 'La vallée de la Vésubie et sa cure thermale au carrefour du Mercantour, de la vallée des merveilles, de la Gordolasque et des plages de Nice dans le 06 Alpes maritimes - Côte d\'Azur.', NULL),
(23, 5, NULL, NULL, 'http://www.leportailvesubien.com', 'Le journal de la Vésubie', 'Le Portail Vésubien de la Vésubie / Valdeblore - Pour et Avec les vésubiens', NULL),
(24, 5, NULL, NULL, 'https://www.facebook.com/igloosinsolites/', 'igloowood', 'autoconstruction d\'igloo en bois', NULL),
(25, 5, NULL, NULL, 'https://fr.khanacademy.org', 'Khan academy', 'mini leçons et exercices en ligne', NULL),
(26, 1, NULL, NULL, 'https://interstices.info/', 'interstices découverte du numérique', 'Dernières informations sur le numérique par l\'Inria', NULL),
(27, 1, NULL, NULL, 'https://pixees.fr/', 'Ressources numériques', 'Ressources numériques pour tous par l\'inria', NULL),
(28, 1, NULL, NULL, 'http://www.choosr.io/', 'Choosr : Révélateur de préférences', 'Choosr est un outil de vote innovant qui permet de classer et mesurer les préférences collectives d\'un groupe (clients, collaborateurs, citoyens...). C\'est une solution alternative aux sondages qui prend mieux en compte les intérêts de chacun et aide la prise de décision.', NULL),
(30, 5, NULL, NULL, 'https://fr.jooble.org/employer/jobposting', 'Recruter avec Jooble', 'Recruter avec Jooble', NULL),
(33, 1, NULL, NULL, 'https://www.echosciences-paca.fr', 'Echosciences, culture science', 'site du réseau culture science', NULL),
(34, 1, NULL, NULL, 'www.astrorama.net', 'Astrorama de la Trinité', 'Astronomie grand public', NULL),
(35, 1, NULL, NULL, 'http://lecosmophile.free.fr/', 'le cosmophile', 'Astronomie grand public', NULL),
(36, 1, NULL, NULL, 'https://www.afastronomie.fr/', 'Association Française d\'Astronomie', 'site de l\'association française d\'Astronomie', NULL),
(37, 1, '2021-04-07 07:49:59', '2021-04-07 07:52:08', '<p>(tgref</p>', '<p>hytjukilouiyutyjrhge</p>', '<p>gtrhyjukil</p>', '2021-04-07 07:52:08');

-- --------------------------------------------------------

--
-- Structure de la table `etiquettemodules`
--

CREATE TABLE `etiquettemodules` (
  `module_id` bigint(20) UNSIGNED NOT NULL,
  `etiquette_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etiquettemodules`
--

INSERT INTO `etiquettemodules` (`module_id`, `etiquette_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 1, NULL, NULL),
(3, 1, NULL, NULL),
(4, 2, NULL, NULL),
(5, 1, NULL, NULL),
(5, 2, NULL, NULL),
(6, 1, NULL, NULL),
(6, 2, NULL, NULL),
(7, 5, NULL, NULL),
(8, 4, NULL, NULL),
(9, 4, NULL, NULL),
(9, 5, NULL, NULL),
(11, 1, '2021-04-07 10:15:17', '2021-04-07 10:15:17'),
(11, 2, '2021-04-07 10:15:17', '2021-04-07 10:15:17');

-- --------------------------------------------------------

--
-- Structure de la table `etiquettes`
--

CREATE TABLE `etiquettes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couleur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etiquettes`
--

INSERT INTO `etiquettes` (`id`, `created_at`, `updated_at`, `nom`, `couleur`, `deleted_at`) VALUES
(1, NULL, NULL, 'SVT', '#FD6D3F', NULL),
(2, NULL, NULL, 'Chimie', '#B42BE3', NULL),
(3, NULL, NULL, 'Phys', '#E3932D', NULL),
(4, NULL, NULL, 'jhlgchgv', '#FD6D3F', NULL),
(5, NULL, NULL, 'dgsdg', '#FD6D3F', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `created_at`, `updated_at`, `nom`, `prenom`, `telephone`, `email`, `photo`, `description`, `deleted_at`) VALUES
(1, NULL, NULL, 'DICKA DICKA', 'Laetitia', '06.59.88.45.45', 'tormentito13@hotmail.fr', 'laeti-dicka.png', 'Presidente', NULL),
(2, NULL, NULL, 'LANNEY RICCI', 'Rémi', '06.20.82.70.88', 'contact@remi-lanney.com', 'LANNEY-remi.png', '<p>Tr&eacute;sorier &amp; webmaster</p>\r\n', NULL),
(3, NULL, NULL, 'LANNEY RICCI', 'Samantha', '06.52.25.17.66', 'chen.ricci@gmail.com', 'Sam-RICCI.png', '<p>Coordinatrice</p>\r\n', NULL),
(7, NULL, '2021-04-08 12:20:24', 'Estival', 'Laetitia', '<p>0771067549</p>', '<p>estiticia@hotmail.fr</p>', 'laeti-estival.png', 'http://creaticia.fr\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;&gt;</p>\r\n\r\n<p>http://creaticia.fr</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;&gt;</p>\r\n\r\n<p>Cr&eacute;atrice de bijoux sur mesure et d&#39;objets usuels d&eacute;coratifs, &agrave; l&#39;aide de mat&eacute;riel recycl&eacute; ou de mat&eacute;riaux divers.</p>\r\n\r\n<p><a href=\"http://creaticia.fr\" target=\"_blank\">http://creaticia.fr</a></p>', NULL),
(8, NULL, NULL, 'Gatineau', 'Jean-Sebastien', '0652251766', 'apprentispassages@gmail.com', NULL, '<p>Centres d&#39;int&eacute;r&ecirc;ts pour l&#39;art des costumes de sc&egrave;ne, broderie, maquillage, d&eacute;cors latex, ma&ccedil;onnerie, bricolage</p>\r\n', NULL),
(9, NULL, NULL, 'Guigo', 'René Pierre', '0614538641', 'elvraenir@yahoo.fr', NULL, '<p>Jeu de r&ocirc;le, bricolage</p>\r\n\r\n<p>En poste actuellement.</p>\r\n', NULL),
(10, NULL, NULL, 'Chelbi Rallion', 'Meryem', '0652251766', 'apprentispassages@gmail.com', NULL, '<p>Assistante de vie actuellement.</p>\r\n\r\n<p>Graphiste, designer et communication visuelle.</p>\r\n\r\n<p>Illustratrice</p>\r\n\r\n<p>Infographiste</p>\r\n\r\n<p>Animatrice</p>\r\n', NULL),
(11, NULL, NULL, 'Dattero', 'Sébastien', '0652251766', 'apprentispassages@gmail.com', NULL, '<p>Agent de s&eacute;curit&eacute; &agrave; la fondation Lenval de Nice, passionn&eacute; d&#39;informatique et de musique, je suis batteur.</p>\r\n', NULL),
(12, NULL, NULL, 'Todesco', 'Stéphane', '0652251766', 'todescostephane@hotmail.com', 'steph.png', '<p>Eb&eacute;niste d&#39;art, sculpteur sur boi</p>\r\n\r\n<p>Fabricant de diadem, colliers, parures, bracelets de force, d&eacute;coration, fioritures en fil d&#39;aluminium</p>\r\n\r\n<p>Connaissance et utilisation de machines outils</p>\r\n', NULL),
(13, NULL, NULL, 'Michelet', 'Claire', '0622343385', 'michelet.claire@hotmail.com', 'Michelet-Claire.jpg', '<p>Docteur en bioinformatique sp&eacute;cialis&eacute;e en interaction mol&eacute;culaire et cellulaire.</p>\r\n', NULL),
(14, NULL, NULL, 'Enrici', 'Cyril', '06 27 20 01 62', 'enrici.cyril@gmail.com', NULL, '<p>C&#39;est le Cyril</p>\r\n', NULL),
(15, NULL, NULL, 'Gharoual', 'Bouzidi', '06 28 33 58 56', 'bouzidi.gharoual@gmail.com', NULL, '<p>Appelez moi Boubou</p>\r\n<p>Bisous</p>\r\n', NULL),
(16, NULL, NULL, 'Heudier', 'Jean-Louis ', '0608545676', 'jean-louis@heudier.eu', 'Heudier-Jean-Louis.jpg', '<p><strong>Jean-Louis Heudier</strong>, est <a href=\"https://fr.wikipedia.org/wiki/Astronome\" title=\"Astronome\">astronome. Il</a> a exerc&eacute; &agrave; l&#39;<a href=\"https://fr.wikipedia.org/wiki/Observatoire_de_la_C%C3%B4te_d%27Azur\" title=\"Observatoire de la Côte d\'Azur\">observatoire de la C&ocirc;te d&#39;Azur</a> de 1967 &agrave; 2009.</p>\r\n\r\n<p>De 1974 &agrave; 1989, il dirige le <a href=\"https://fr.wikipedia.org/wiki/Chambre_de_Schmidt\" title=\"Chambre de Schmidt\">t&eacute;lescope de Schmidt</a> du <a href=\"https://fr.wikipedia.org/wiki/Centre_de_recherches_en_g%C3%A9odynamique_et_astrom%C3%A9trie\" title=\"Centre de recherches en géodynamique et astrométrie\">CERGA</a> au plateau de Calern, le plus gros appareil photographique d&#39;Europe. &Agrave; partir de 2006, il dirige <em><a href=\"https://fr.wikipedia.org/wiki/Observatoire_de_la_C%C3%B4te_d%27Azur\" title=\"Observatoire de la Côte d\'Azur\">Observatorium</a></em>, p&ocirc;le de diffusion de culture scientifique implant&eacute; &agrave; l&#39;<a href=\"https://fr.wikipedia.org/wiki/Observatoire_de_Nice\" title=\"Observatoire de Nice\">observatoire de Nice</a>. Il prend sa retraite en septembre 2009.</p>\r\n\r\n<p>En tant qu&#39;astronome professionnel, il a pr&eacute;sid&eacute;, de 1979 &agrave; 1982 et de 1988 &agrave; 1991, le groupe de travail &quot;Photographie&quot; de l&#39;<a href=\"https://fr.wikipedia.org/wiki/Union_astronomique_internationale\" title=\"Union astronomique internationale\">Union astronomique internationale</a>.</p>\r\n', NULL),
(17, NULL, NULL, 'Carassou', 'Sebastien', '06 52 25 17 66', 'sebastiencarassou974@gmail.com', 'Carassou-Sebastien.jpg', '<p style=\"text-align:justify\">S&eacute;bastien Carassou est Docteur en astrophysique et sp&eacute;cialiste de l&rsquo;&eacute;volution des galaxies.</p>\r\n\r\n<p style=\"text-align:justify\">En parall&egrave;le de ses fonctions acad&eacute;miques, il a lanc&eacute; sa cha&icirc;ne YouTube de vulgarisation scientifique sur la science de l&rsquo;univers qu&rsquo;il pr&eacute;sente et qu&rsquo;il r&eacute;alise.</p>\r\n', NULL),
(19, NULL, NULL, 'Ricci', 'Louis', '0652251766', 'louis.ricci@free.fr', 'Ricci-Louis.jpg', '<h3>Ing&eacute;nieur en m&eacute;canique &eacute;nerg&eacute;tique diplom&eacute; des Arts et M&eacute;tiers</h3>\r\n', NULL),
(20, NULL, '2021-04-08 12:19:27', '<p>fqs</p>', '<p>QFDvcGR</p>', '<p>rz gvg GZRVEHCTC</p>', '<p>vtzr ybevqb ybv RGVQC grzvgv cz ZVC grCZRcgtsevg</p>', NULL, '<p>rqgsthjbd,tbfcbvqwf</p>', NULL),
(21, NULL, '2021-04-08 06:09:12', 'fg fdhgjbfhkdgh', 'hdgfjhkgjlgs', 'dgfxjhkgjhfdwf', 'HFGJwfhk', '', 'ghxjc,;,bnvbhjfx', '2021-04-08 06:09:12'),
(22, '2021-04-08 06:02:04', '2021-04-08 06:02:04', '<p>ezqrghstjydtuk</p>', '<p>xfgrcqethvsryt</p>', '<p>TEZREQYTHRSJY</p>', '<p>zetreytqhrhgfdws</p>', '<p>TZQREYSRHYJDT</p>', '<p>erztqeyhsryjdtu</p>', '2021-04-02 10:54:41'),
(23, '2021-04-08 06:06:03', '2021-04-08 06:06:03', 'raezgrqhtrs', 'feZRQGETHRSGFW', 'reTQGEFCZEGXARQE', 'Czqersgherzrctg', 'REZTGEQHRSY', 'erztqgethsrergqzf', '2021-04-15 14:18:26');

-- --------------------------------------------------------

--
-- Structure de la table `membrestatuts`
--

CREATE TABLE `membrestatuts` (
  `membre_id` bigint(20) UNSIGNED NOT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `membrestatuts`
--

INSERT INTO `membrestatuts` (`membre_id`, `statut_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(9, 3, NULL, NULL),
(10, 3, NULL, NULL),
(11, 3, NULL, NULL),
(2, 4, NULL, NULL),
(3, 4, NULL, NULL),
(7, 4, NULL, NULL),
(8, 4, NULL, NULL),
(12, 4, NULL, NULL),
(14, 4, NULL, NULL),
(2, 5, NULL, NULL),
(3, 5, NULL, NULL),
(2, 6, NULL, NULL),
(20, 6, NULL, NULL),
(13, 7, NULL, NULL),
(15, 7, NULL, NULL),
(20, 7, NULL, NULL),
(2, 9, NULL, NULL),
(13, 9, NULL, NULL),
(16, 9, NULL, NULL),
(17, 9, NULL, NULL),
(19, 9, NULL, NULL);

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
(4, '2021_03_15_130705_create_actions_table', 1),
(5, '2021_03_15_131001_create_catalogues_table', 1),
(6, '2021_03_15_131047_create_etiquettes_table', 1),
(7, '2021_03_15_131127_create_modules_table', 1),
(8, '2021_03_15_131151_create_programmations_table', 1),
(9, '2021_03_15_131408_create_pages_table', 1),
(10, '2021_03_15_131419_create_photos_table', 1),
(11, '2021_03_15_131441_create_membres_table', 1),
(12, '2021_03_15_131511_create_statuts_table', 1),
(13, '2021_03_15_131755_create_categoriecoupsdecoeurs_table', 1),
(14, '2021_03_16_130949_create_actioncatalogues_table', 1),
(15, '2021_03_16_131022_create_contentprogs_table', 1),
(16, '2021_03_16_131101_create_etiquettemodules_table', 1),
(17, '2021_03_16_131137_create_moduleactions_table', 1),
(18, '2021_03_16_131428_create_albums_table', 1),
(19, '2021_03_16_131502_create_membrestatus_table', 1),
(20, '2021_03_16_131654_create_coupsdecoeurs_table', 1),
(21, '2021_03_17_074326_create_tagalbum_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `moduleactions`
--

CREATE TABLE `moduleactions` (
  `module_id` bigint(20) UNSIGNED NOT NULL,
  `action_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `moduleactions`
--

INSERT INTO `moduleactions` (`module_id`, `action_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 1, NULL, NULL),
(3, 1, NULL, NULL),
(11, 1, '2021-04-07 10:15:17', '2021-04-07 10:15:17'),
(4, 2, NULL, NULL),
(5, 2, NULL, NULL),
(6, 3, NULL, NULL),
(4, 4, NULL, NULL),
(7, 4, NULL, NULL),
(10, 4, NULL, NULL),
(4, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temps` time DEFAULT NULL,
  `materiel` text COLLATE utf8mb4_unicode_ci,
  `projetPeda` text COLLATE utf8mb4_unicode_ci,
  `lieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `format` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `modules`
--

INSERT INTO `modules` (`id`, `created_at`, `updated_at`, `nom`, `description`, `img`, `temps`, `materiel`, `projetPeda`, `lieu`, `format`, `deleted_at`) VALUES
(1, NULL, NULL, 'Qu\'est-ce qu\'un insecte ?', 'Observation des différences entre les petites bêtes du jardin, jeu « insecte ou pas insecte ? » \n            Une autre manière de classer : les différentes pièces buccales.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, 'Jeu « la pollinisation »', 'Comprendre le phénomène de pollinisation et son importance au cours de jeux : jeu de carte, puis : jeu où les participants sont les insectes.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, 'Construction « l’hôtel à insectes »', 'Les insectes utiles au potager, comment les aider à nous aider ? Construction d’un hôtel à insectes pour attirer nos petites bêtes. Hôtel fourni.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, 'Acidification des océans, et alors ?', 'Notions d’acides, de bases, de pH, phénomène d’acidification des océans, ses conséquences et les moyens d’action.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, 'Réalité virtuelle, Stanford océan', 'Stanford acidification océan permet de suivre le voyage d’une molécule de CO2 jusque dans l’océan et montre les conséquences de l’acidification', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, 'Éco logique ?', 'Jeu de rôle autour de l’écocitoyenneté. Grand jeu sur un ou trois jours, constructions, jeux éducatifs, épreuves et énigmes...', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, 'bsNDTdgwn', 'DSGHNGDF ESGDc', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, 'dgsfcEZVGBCQRZGVRz', 'rgvCRZVGBzrvcgrx', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, 'test', 'test2', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '2021-04-07 10:15:17', '2021-04-07 10:15:17', ',nkphn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '2021-04-07 10:15:34', '2021-04-07 10:15:34', 'jmblhj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pages`
--

INSERT INTO `pages` (`id`, `created_at`, `updated_at`, `nom`, `contenu`) VALUES
(1, NULL, '2021-03-31 04:59:20', 'association', '<p>Notre association, fondée en 2013, œuvre pour la diffusion de la culture, notamment la culture scientifique dans la vallée de la Vésubie et ailleurs.</p><p>Nous nous efforçons de présenter des sujets scientifiques de manière ludique, chacune de nos activités et de nos animations sont relues et validée par notre conseil scientifique avant d\'être proposé à notre public.</p><p>Professionnels ou amateurs, tous nos intervenants sont animés d\'une même passion de transmettre.</p><p><strong>Notre but</strong> : remettre du plaisir dans l\'apprentissage.</p><p><i><strong>Edito</strong></i></p><p>Certains peuvent prétendre qu\'enseigner, former, ne s\'invente pas. Nous répondons que si, justement, cela s\'invente et se réinvente, chaque jour, au contact du public, au gré des nouvelles découvertes, des avancées de la science.</p><p>Nos formations sont donc toutes animées de ce désir de rester en accord avec notre public et les dernières découvertes.</p><p><i><strong>Action « Talents oubliés »</strong></i></p><p>Nos apprentis pas sages, intervenants, sont pour la plupart des « talents oubliés ». Des personnes dotées d\'une soif de découvertes, souvent autodidactes, toujours très cultivées dans divers domaines, en permanence en démarche d\'amélioration de leurs connaissances et compétences, elles ont rejoints notre association pour donner corps à&nbsp; leur envie de savoir et de partager. Notre association souhaite leur donner une chance de se faire valoir pour leur réelles compétences, pas toujours reconnues à leur juste valeur.</p>'),
(2, NULL, NULL, 'Information', ' <p><em><strong>Association loi 1901</strong>, parution au JO:&nbsp;le 10 Octobre 2013, </em></p>\r\n            <p><em><strong>siège social</strong> : quartier les blancons - 06450 Belvédère&nbsp;</em></p>\r\n            <p><em>Agrément éducation nationale, académie de Nice le 9/02/2019</em></p>\r\n            <p><em>Code APE : 9499Z Autre organisation fonctionnant par adhésion volontaire</em></p>\r\n            <p><em><strong>N°RNA</strong> : W062007381 - <strong>N° Siret</strong> : 80960587600014 - <strong>N° sociétaire</strong> 3916720P (MAIF) </em></p>\r\n            <p><em>Déclaration d\'activité d\'organisme de formation : 93060847206</em></p>\r\n\r\n        </div>'),
(3, NULL, NULL, 'contact', '\r\n              <!-- Modal -->\r\n              <div id=\"ContactModal\" class=\"modal fade\" role=\"dialog\">\r\n                <div class=\"contactMod modal-dialog\">\r\n\r\n                  <!-- Modal content-->\r\n                  <div class=\"modal-content\">\r\n                    <div class=\"modal-header\">\r\n                      <h4 class=\"modal-title\">Contacter</h4>\r\n                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>\r\n                    </div>\r\n                    <div class=\"modal-body\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n                    <!-- galerie -->\r\n                    <section class=\"contact-section\" >\r\n                       <h1 id=\"send-message\">Envoyez nous un message, nous y répondrons le plus vite possible.</h1>\r\n                      <div class=\"ctc-zone\">\r\n\r\n                        <div class=\"contact-form\">\r\n\r\n                          <div>\r\n                          <form id=\"formulaire\" method=\"POST\" action=\"\"  >\r\n                <!-- csrf_field()-->          \r\n                              <label for=\"fname\">Nom *</label>\r\n\r\n                              <input type=\"text\" id=\"fname\" name=\"name\" placeholder=\"Votre nom *\">\r\n\r\n                              <label for=\"email\">Email *</label>\r\n\r\n                              <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Votre email *\">\r\n\r\n                              <label for=\"phone\">Numérot de téléphone</label>\r\n\r\n                              <input type=\"tel\" name=\"phone\" id=\"phone\" placeholder=\"Votre téléphone\">\r\n\r\n                              <label for=\"message\">Sujet du message *</label>\r\n\r\n                              <input type=\"text\" name=\"subject\" id=\"message\" placeholder=\"Sujet du message *\">\r\n\r\n                              <label for=\"ctc-message\">Votre message *</label>\r\n\r\n                              <textarea id=\"subject\" name=\"message\" placeholder=\"Votre message..\" style=\"height:100%; width:100%\"></textarea>\r\n                              <br>\r\n                              <div class=\"btn-form-contact\">\r\n                                <input type=\"submit\" value=\"Envoyer votre message\">\r\n\r\n                               </div>\r\n                              <input type=\"hidden\" name=\"contactCacher\" value=\"1\">\r\n                            </form>\r\n                          </div>\r\n\r\n                        </div>\r\n                        <div class=\"contact-info\">\r\n                          <h1>Nos coordonnées</h1>\r\n\r\n                          <div class=\"adresse\">\r\n                            <div id=\"icon\">\r\n                              <i class=\"fas fa-map-marked-alt\" style=\"font-size:30px;color:#41046f;\"></i>\r\n                            </div>\r\n                            <div id=\"info-adress\"><h4>Apprentis Pas Sages</h4>\r\n                                  <h5>Chalet les Carlines</h5>\r\n                                  <h5>Quartier les blancons</h5>\r\n                                  <h5>06450 Belvédère</h5>\r\n                            </div>\r\n\r\n                            <div>\r\n                            </div>\r\n\r\n                          </div>\r\n\r\n                          <div class=\"email-adresse\">\r\n                              <div id=\"icon\">\r\n                                  <i class=\"fas fa-envelope\" style=\"font-size:30px;color:#41046f;\"></i>\r\n                              </div>\r\n                              <div id=\"mail-adress\">\r\n                                <a href=\"mailto:contact@apprentispassages.com\" target=\"_blank\"><h4>contact@apprentispassages.com</h4></a>\r\n                              </div>\r\n\r\n                              <div>\r\n                              </div>\r\n\r\n                          </div>\r\n\r\n                          <div class=\"info-general\">\r\n                              <div id=\"icon\">\r\n                                <i class=\"fas fa-phone-alt\" style=\"font-size:30px;color:#41046f;\"></i>\r\n                              </div>\r\n                              <div class=\"inf-gen-pers\">\r\n                                <div id=\"info-pers\">\r\n\r\n                                  <div>\r\n                                    <div>Général:</div>\r\n                                    <div>+33 (0)6.52.25.17.66</div>\r\n                                  </div>\r\n\r\n                                  <div>\r\n                                      <div>Presidente: <br>\r\n                                        Laetitia DICKA DICKA</div>\r\n                                      <div>06.59.88.45.45</div>\r\n                                  </div>\r\n\r\n                                  <div>\r\n                                    <div>Trésorier, Coordinateur/trice : <br>\r\n                                      Rémi LANNEY RICCI</div>\r\n                                    <div>06.20.82.70.88</div>\r\n                                  </div>\r\n\r\n                                  <div>\r\n                                    <div>Secrétaire : <br>\r\n                                      Claire Michelet</div>\r\n                                    <div>06.22.34.33.85</div>\r\n                                  </div>\r\n\r\n                                  <div>\r\n                                    <div>Secrétaire : <br>\r\n                                    Bouzidi Gharoual</div>\r\n                                    <div>06.28.33.58.56</div>\r\n                                  </div>\r\n\r\n                                  <div>\r\n                                    <div>Coordinateur/trice :\r\n                                    <br>\r\n                                      Samantha LANNEY RICCI</div>\r\n                                    <div>06.52.25.17.66</div>\r\n                                  </div>\r\n                                </div>\r\n                              </div>\r\n\r\n                              <div>\r\n\r\n                              </div>\r\n                          </div>\r\n                        </div>\r\n                      </div>\r\n                    </section>\r\n\r\n\r\n                    </div>\r\n                    <div class=\"modal-footer\">\r\n                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>\r\n                    </div>\r\n                  </div>\r\n\r\n                </div>\r\n                           </div>   ');

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
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `chemin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `photos`
--

INSERT INTO `photos` (`id`, `created_at`, `updated_at`, `chemin`, `deleted_at`) VALUES
(1, NULL, NULL, '/partenaires/1-region-sud.jpg', NULL),
(2, NULL, NULL, 'partenaires/2-terra-numerica.png', NULL),
(3, NULL, NULL, '/partenaires/3-culture-science.png', NULL),
(4, NULL, NULL, '/partenaires/academie-nice.jpg', NULL),
(5, NULL, '2021-04-07 11:35:23', '/partenaires/belveder-06.jpg', NULL),
(6, NULL, '2021-04-08 06:12:11', 't/apprentis_pas_sages_banniere.png', NULL),
(7, NULL, '2021-04-08 06:27:15', 't/BELVEDERE-06.jpg', NULL),
(8, NULL, '2021-04-08 06:12:05', 't/connaissance-du-hibou.jpg', NULL),
(9, NULL, '2021-04-08 06:00:00', 't/coupe de coeur.png', NULL),
(10, NULL, '2021-04-08 06:10:19', 't/cropped-en-tete-site-numerica-logo.png', NULL),
(11, NULL, '2021-04-08 06:11:56', 't/fox_logo.png', NULL),
(12, NULL, '2021-04-08 06:10:25', 't/logo_academie_nice.jpg', NULL),
(13, NULL, '2021-04-08 06:10:56', 't/photo-back.jpg', NULL),
(14, NULL, '2021-04-08 06:11:02', 't/pngegg.png', NULL),
(15, NULL, NULL, 't/Région-Sud-Logo.jpg', NULL),
(16, NULL, NULL, 'team/apprentispassages_logo_renard.png', NULL),
(17, NULL, NULL, 'team/Carassou-Sebastien.jpg', NULL),
(18, NULL, NULL, 'team/Heudier-Jean-Louis.jpg', NULL),
(19, NULL, NULL, 'team/laeti-estival.png', NULL),
(20, NULL, NULL, 'team/LANNEY-remi.png', NULL),
(21, NULL, NULL, 'team/Michelet-Claire.jpg', NULL),
(22, NULL, NULL, 'team/Ricci-Louis.jpg', NULL),
(23, NULL, NULL, 'team/Sam-Ricci.png', NULL),
(24, NULL, NULL, 'team/steph.png', NULL),
(25, '2021-04-08 07:59:17', '2021-04-08 07:59:17', 'ezfrted', NULL),
(26, '2021-04-09 05:08:49', '2021-04-09 05:08:49', 'ezfrted', NULL),
(27, '2021-04-09 05:12:13', '2021-04-09 05:12:13', 'hello', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `programmations`
--

CREATE TABLE `programmations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dateDebut` datetime NOT NULL,
  `dateFin` datetime DEFAULT NULL,
  `nbPersonnesPrevues` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `programmations`
--

INSERT INTO `programmations` (`id`, `created_at`, `updated_at`, `dateDebut`, `dateFin`, `nbPersonnesPrevues`, `deleted_at`) VALUES
(1, '2020-08-29 04:06:03', '2021-04-08 06:07:25', '2021-03-18 09:00:00', '2021-03-20 17:00:00', 20, '2021-04-08 06:07:25'),
(2, '2021-04-02 11:36:02', '2021-04-02 11:36:08', '2021-04-17 15:35:43', '2021-04-17 15:35:47', 11, NULL),
(3, '2021-04-07 06:04:57', '2021-04-08 06:07:16', '2021-04-07 10:05:49', '2021-04-07 11:04:51', 23, '2021-04-08 06:07:16');

-- --------------------------------------------------------

--
-- Structure de la table `statuts`
--

CREATE TABLE `statuts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `statuts`
--

INSERT INTO `statuts` (`id`, `created_at`, `updated_at`, `nom`, `description`) VALUES
(1, NULL, NULL, 'Présidente', '1'),
(3, NULL, NULL, 'participant', '4'),
(4, NULL, NULL, 'Intervenant/Animateur', '3'),
(5, NULL, NULL, 'Coordinateur/trice', '2'),
(6, NULL, NULL, 'Trésorier', '1'),
(7, NULL, NULL, 'Secrétaire', '1'),
(9, NULL, NULL, 'Conseil scientifique', '5');

-- --------------------------------------------------------

--
-- Structure de la table `tagalbums`
--

CREATE TABLE `tagalbums` (
  `module_id` bigint(20) UNSIGNED DEFAULT NULL,
  `photo_id` bigint(20) UNSIGNED NOT NULL,
  `nom_album` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tagalbums`
--

INSERT INTO `tagalbums` (`module_id`, `photo_id`, `nom_album`, `created_at`, `updated_at`) VALUES
(NULL, 6, 'ezfrted', NULL, NULL),
(NULL, 27, 'hello', '2021-04-09 05:12:13', '2021-04-09 05:12:13'),
(NULL, 1, 'partenaires', NULL, NULL),
(NULL, 2, 'partenaires', NULL, NULL),
(NULL, 3, 'partenaires', NULL, NULL),
(7, 4, 'partenaires', NULL, NULL),
(7, 5, 'partenaires', NULL, NULL),
(NULL, 14, 't', NULL, NULL),
(NULL, 16, 'team', NULL, NULL),
(NULL, 17, 'team', NULL, NULL),
(NULL, 18, 'team', NULL, NULL),
(NULL, 19, 'team', NULL, NULL),
(NULL, 20, 'team', NULL, NULL),
(NULL, 21, 'team', NULL, NULL),
(NULL, 22, 'team', NULL, NULL),
(NULL, 23, 'team', NULL, NULL),
(NULL, 24, 'team', NULL, NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actioncatalogues`
--
ALTER TABLE `actioncatalogues`
  ADD PRIMARY KEY (`action_id`,`catalogue_id`),
  ADD KEY `actioncatalogues_catalogue_id_foreign` (`catalogue_id`);

--
-- Index pour la table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `catalogues`
--
ALTER TABLE `catalogues`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categoriecoupsdecoeurs`
--
ALTER TABLE `categoriecoupsdecoeurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contentprogs`
--
ALTER TABLE `contentprogs`
  ADD PRIMARY KEY (`action_id`,`programmation_id`,`module_id`),
  ADD KEY `contentprogs_programmation_id_foreign` (`programmation_id`),
  ADD KEY `contentprogs_module_id_foreign` (`module_id`);

--
-- Index pour la table `coupsdecoeurs`
--
ALTER TABLE `coupsdecoeurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coupsdecoeurs_categoriecoupsdecoeur_id_foreign` (`categoriecoupsdecoeur_id`);

--
-- Index pour la table `etiquettemodules`
--
ALTER TABLE `etiquettemodules`
  ADD PRIMARY KEY (`module_id`,`etiquette_id`),
  ADD KEY `etiquettemodules_etiquette_id_foreign` (`etiquette_id`);

--
-- Index pour la table `etiquettes`
--
ALTER TABLE `etiquettes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membrestatuts`
--
ALTER TABLE `membrestatuts`
  ADD PRIMARY KEY (`statut_id`,`membre_id`),
  ADD KEY `membrestatuts_membre_id_foreign` (`membre_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `moduleactions`
--
ALTER TABLE `moduleactions`
  ADD PRIMARY KEY (`action_id`,`module_id`),
  ADD KEY `moduleactions_module_id_foreign` (`module_id`);

--
-- Index pour la table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `programmations`
--
ALTER TABLE `programmations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `statuts`
--
ALTER TABLE `statuts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tagalbums`
--
ALTER TABLE `tagalbums`
  ADD PRIMARY KEY (`nom_album`,`photo_id`),
  ADD KEY `tagalbums_module_id_foreign` (`module_id`),
  ADD KEY `tagalbums_photo_id_foreign` (`photo_id`);

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
-- AUTO_INCREMENT pour la table `actions`
--
ALTER TABLE `actions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `catalogues`
--
ALTER TABLE `catalogues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `categoriecoupsdecoeurs`
--
ALTER TABLE `categoriecoupsdecoeurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `coupsdecoeurs`
--
ALTER TABLE `coupsdecoeurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `etiquettes`
--
ALTER TABLE `etiquettes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `programmations`
--
ALTER TABLE `programmations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `statuts`
--
ALTER TABLE `statuts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actioncatalogues`
--
ALTER TABLE `actioncatalogues`
  ADD CONSTRAINT `actioncatalogues_action_id_foreign` FOREIGN KEY (`action_id`) REFERENCES `actions` (`id`),
  ADD CONSTRAINT `actioncatalogues_catalogue_id_foreign` FOREIGN KEY (`catalogue_id`) REFERENCES `catalogues` (`id`);

--
-- Contraintes pour la table `contentprogs`
--
ALTER TABLE `contentprogs`
  ADD CONSTRAINT `contentprogs_action_id_foreign` FOREIGN KEY (`action_id`) REFERENCES `actions` (`id`),
  ADD CONSTRAINT `contentprogs_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`),
  ADD CONSTRAINT `contentprogs_programmation_id_foreign` FOREIGN KEY (`programmation_id`) REFERENCES `programmations` (`id`);

--
-- Contraintes pour la table `coupsdecoeurs`
--
ALTER TABLE `coupsdecoeurs`
  ADD CONSTRAINT `coupsdecoeurs_categoriecoupsdecoeur_id_foreign` FOREIGN KEY (`categoriecoupsdecoeur_id`) REFERENCES `categoriecoupsdecoeurs` (`id`);

--
-- Contraintes pour la table `etiquettemodules`
--
ALTER TABLE `etiquettemodules`
  ADD CONSTRAINT `etiquettemodules_etiquette_id_foreign` FOREIGN KEY (`etiquette_id`) REFERENCES `etiquettes` (`id`),
  ADD CONSTRAINT `etiquettemodules_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`);

--
-- Contraintes pour la table `membrestatuts`
--
ALTER TABLE `membrestatuts`
  ADD CONSTRAINT `membrestatuts_membre_id_foreign` FOREIGN KEY (`membre_id`) REFERENCES `membres` (`id`),
  ADD CONSTRAINT `membrestatuts_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`);

--
-- Contraintes pour la table `moduleactions`
--
ALTER TABLE `moduleactions`
  ADD CONSTRAINT `moduleactions_action_id_foreign` FOREIGN KEY (`action_id`) REFERENCES `actions` (`id`),
  ADD CONSTRAINT `moduleactions_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`);

--
-- Contraintes pour la table `tagalbums`
--
ALTER TABLE `tagalbums`
  ADD CONSTRAINT `tagalbums_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`),
  ADD CONSTRAINT `tagalbums_nom_album_foreign` FOREIGN KEY (`nom_album`) REFERENCES `albums` (`nom`),
  ADD CONSTRAINT `tagalbums_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `photos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
