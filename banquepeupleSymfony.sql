-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 29 août 2020 à 17:58
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `banquepeupleSymfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `clear`
--

CREATE TABLE `clear` (
  `id` int(11) NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cni` int(11) NOT NULL,
  `date_naissance` date NOT NULL,
  `matricule` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raison_sociale` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salaire` int(11) DEFAULT NULL,
  `nom_employeur` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adr_employeur` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cni` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricule` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datenaiss` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raison_sociale` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salaire` int(11) DEFAULT NULL,
  `nom_employeur` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adr_employeur` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `cni`, `matricule`, `sexe`, `datenaiss`, `telephone`, `adresse`, `email`, `raison_sociale`, `salaire`, `nom_employeur`, `adr_employeur`) VALUES
(1, 'k,jmvn ', 'Gor', '2749847428747', '8MPW468J', 'masculin', '2020-07-28', '775377837', 'Touba', 'momo@outlook.fr', NULL, NULL, NULL, NULL),
(2, 'k,jmvn ', 'Gor', '2749847428747', 'DKMKTENV', 'masculin', '2020-07-28', '775377837', 'Touba', 'momo@outlook.fr', NULL, NULL, NULL, NULL),
(3, 'k,jmvn ', 'Gor', '2749847428747', 'DKUTJ3GM', 'masculin', '2020-07-28', '775377837', 'Touba', 'momo@outlook.fr', NULL, NULL, NULL, NULL),
(4, 'k,jmvn ', 'Gor', '2749847428747', '4MUTNUDV', 'masculin', '2020-07-28', '775377837', 'Touba', 'momo@outlook.fr', NULL, NULL, NULL, NULL),
(5, 'k,jmvn ', 'Gor', '2749847428747', 'N2DV2UKR', 'masculin', '2020-07-28', '775377837', 'Touba', 'momo@outlook.fr', NULL, NULL, NULL, NULL),
(6, 'k,jmvn ', 'Gor', '2749847428747', '2AVM4M2B', 'masculin', '2020-07-28', '775377837', 'Touba', 'momo@outlook.fr', NULL, NULL, NULL, NULL),
(7, 'k,jmvn ', 'Gor', '2749847428747', 'ENAV9BNJ', 'masculin', '2020-07-28', '775377837', 'Touba', 'momo@outlook.fr', NULL, NULL, NULL, NULL),
(8, 'k,jmvn ', 'Gor', '2749847428747', 'JRE4RVP3', 'masculin', '2020-07-28', '775377837', 'Touba', 'momo@outlook.fr', NULL, NULL, NULL, NULL),
(9, 'k,jmvn ', 'Gor', '2749847428747', '9RKUF9T8', 'masculin', '2020-07-28', '775377837', 'Touba', 'momo@outlook.fr', NULL, NULL, NULL, NULL),
(10, 'Dia', 'kv ', '2749847428747', 'CMUN8VUR', 'feminin', '2020-08-04', '702457895', 'Fatick', 'KOKO@gmail.com', NULL, NULL, NULL, NULL),
(11, 'Lo', 'Gor', '2749847428747', 'GTC2CCKV', 'masculin', '2020-08-11', '777783723', 'Mboro', 'diadia@gmail.com', NULL, NULL, NULL, NULL),
(12, 'Lo', 'Gor', '2749847428747', 'BDRJV9VM', 'masculin', '2020-08-11', '777783723', 'Mboro', 'diadia@gmail.com', NULL, NULL, NULL, NULL),
(13, 'Lo', 'Gor', '2749847428747', 'RRF4J4UD', 'masculin', '2020-08-11', '777783723', 'Mboro', 'diadia@gmail.com', NULL, NULL, NULL, NULL),
(14, 'Lo', 'Gor', '2749847428747', 'NCPFRC94', 'masculin', '2020-08-11', '777783723', 'Mboro', 'diadia@gmail.com', NULL, NULL, NULL, NULL),
(15, 'Lo', 'Gor', '2749847428747', 'HERCDTGN', 'masculin', '2020-08-11', '777783723', 'Mboro', 'diadia@gmail.com', NULL, NULL, NULL, NULL),
(16, 'Lo', 'COdou', '2749847428747', '2P9PU3D3', 'feminin', '2020-07-29', '702457895', 'Fatick', 'momo@outlook.fr', NULL, NULL, NULL, NULL),
(17, 'Lo', 'COdou', '2749847428747', '4GAWRR7H', 'feminin', '2020-07-29', '702457895', 'Fatick', 'momo@outlook.fr', NULL, NULL, NULL, NULL),
(18, 'Dieye', 'Moustapha', '1764895739464', 'EGURH4UW', 'masculin', '1991-06-30', '781234567', 'Thiadiaye', 'tiothio@gmail.com', 'dtyfuyyoij', 50000, 'stfgikjjl', 'gfddygkhj'),
(19, 'jufyrsaewastg', 'gytsdiuglnljvj', '2867565454343', 'HWBPTHF9', 'feminin', '2020-07-28', '781234567', 'fstrgklj;ljli', 'rsesf@gbhj.com', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `type_compte_id` int(11) DEFAULT NULL,
  `numero` int(11) NOT NULL,
  `rib` int(11) NOT NULL,
  `solde` int(11) NOT NULL,
  `date_ouv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frais_ouv` int(11) DEFAULT NULL,
  `remuneration` int(11) DEFAULT NULL,
  `date_debut` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_fin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agios` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entreprise_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id`, `client_id`, `type_compte_id`, `numero`, `rib`, `solde`, `date_ouv`, `frais_ouv`, `remuneration`, `date_debut`, `date_fin`, `agios`, `entreprise_id`) VALUES
(1, 1, NULL, 37267174, 398631489, 50000, '2020-08-28', 25000, 10000, NULL, NULL, NULL, NULL),
(2, 8, NULL, 64603479, 232029619, 50000, '2020-08-28', 25000, 10000, NULL, NULL, NULL, NULL),
(3, 9, NULL, 37319783, 804206283, 50000, '2020-08-28', 25000, 10000, NULL, NULL, NULL, NULL),
(4, 10, NULL, 84810433, 928377178, 50000, '2020-08-28', 25000, 10000, NULL, NULL, NULL, NULL),
(5, 17, NULL, 28600032, 78818322, 50000, '2020-08-28', 25000, 10000, NULL, NULL, NULL, NULL),
(6, 18, NULL, 37740726, 312217631, 50000, '2020-08-28', NULL, NULL, NULL, NULL, '10000', NULL),
(7, 19, NULL, 18801941, 692398631, 50000, '2020-08-28', 25000, 10000, '2020-08-28', '2021-10-28', NULL, NULL),
(8, NULL, NULL, 14282243, 797170814, 50000, '2020-08-28', 25000, 10000, NULL, NULL, NULL, 1),
(9, NULL, NULL, 27407307, 393478263, 50000, '2020-08-28', 25000, 10000, '2020-08-28', '2020-09-06', NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20200822172437', '2020-08-22 17:44:07', 3448),
('DoctrineMigrations\\Version20200822175410', '2020-08-22 17:56:00', 1523);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id` int(11) NOT NULL,
  `nom_entreprise` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_entreprise` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_entreprise` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget_entreprise` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adr_entreprise` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom_entreprise`, `tel_entreprise`, `email_entreprise`, `budget_entreprise`, `adr_entreprise`, `login`, `password`) VALUES
(1, 'Auchan', '781226738', 'auchan@gmail.com', '926637', 'Thiaroye', NULL, NULL),
(2, 'Auchan', '781226738', 'auchan@gmail.com', '926637', 'Thiaroye', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `type_compte`
--

CREATE TABLE `type_compte` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_compte`
--

INSERT INTO `type_compte` (`id`, `libelle`) VALUES
(1, 'Simple et Xeewel'),
(2, 'Courant'),
(3, 'Bloqué');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clear`
--
ALTER TABLE `clear`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_CFF6526019EB6921` (`client_id`),
  ADD KEY `IDX_CFF6526046032730` (`type_compte_id`),
  ADD KEY `IDX_CFF65260A4AEAFEA` (`entreprise_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_compte`
--
ALTER TABLE `type_compte`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clear`
--
ALTER TABLE `clear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `type_compte`
--
ALTER TABLE `type_compte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `FK_CFF6526019EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_CFF6526046032730` FOREIGN KEY (`type_compte_id`) REFERENCES `type_compte` (`id`),
  ADD CONSTRAINT `FK_CFF65260A4AEAFEA` FOREIGN KEY (`entreprise_id`) REFERENCES `entreprise` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
