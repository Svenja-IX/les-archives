-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 17 avr. 2020 à 16:23
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `les_archives`
--

-- --------------------------------------------------------

--
-- Structure de la table `jedi`
--

CREATE TABLE `jedi` (
  `jedi_id` int(11) NOT NULL,
  `jedi_prenom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jedi_nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jedi_img` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jedi_rang` int(11) NOT NULL,
  `jedi_race` int(11) NOT NULL,
  `jedi_sexe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jedi`
--

INSERT INTO `jedi` (`jedi_id`, `jedi_prenom`, `jedi_nom`, `jedi_img`, `jedi_rang`, `jedi_race`, `jedi_sexe`) VALUES
(1, 'Obi-Wan', 'Kenobi', 'images/Obi-Wan-Kenobi.jpg', 3, 2, 1),
(2, 'Anakin', 'Skywalker', 'images/anakin-skywalker.jpg', 2, 2, 1),
(3, 'Ahsoka', 'Tano', 'images/ahsoka-tano.jpg', 1, 1, 2),
(4, 'Mace', 'Windu', 'images/mace-windu.jpeg', 3, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `race`
--

CREATE TABLE `race` (
  `race_id` int(11) NOT NULL,
  `race_nom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `race`
--

INSERT INTO `race` (`race_id`, `race_nom`) VALUES
(1, 'Togruta'),
(2, 'Humain(e)'),
(3, 'Zabrak');

-- --------------------------------------------------------

--
-- Structure de la table `rang`
--

CREATE TABLE `rang` (
  `rang_id` int(11) NOT NULL,
  `rang_nom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rang`
--

INSERT INTO `rang` (`rang_id`, `rang_nom`) VALUES
(1, 'Padawan'),
(2, 'Chevalier Jedi'),
(3, 'Maître Jedi'),
(4, 'Grand Maître Jedi'),
(5, 'Sith');

-- --------------------------------------------------------

--
-- Structure de la table `sexe`
--

CREATE TABLE `sexe` (
  `sexe_id` int(11) NOT NULL,
  `sexe_nom` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sexe`
--

INSERT INTO `sexe` (`sexe_id`, `sexe_nom`) VALUES
(1, 'Homme'),
(2, 'Femme');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `jedi`
--
ALTER TABLE `jedi`
  ADD PRIMARY KEY (`jedi_id`),
  ADD UNIQUE KEY `jedi_prenom` (`jedi_prenom`,`jedi_nom`),
  ADD KEY `jedi_sexe_id` (`jedi_sexe`),
  ADD KEY `jedi_race_id` (`jedi_race`),
  ADD KEY `jedi_rang_id` (`jedi_rang`);

--
-- Index pour la table `race`
--
ALTER TABLE `race`
  ADD PRIMARY KEY (`race_id`);

--
-- Index pour la table `rang`
--
ALTER TABLE `rang`
  ADD PRIMARY KEY (`rang_id`);

--
-- Index pour la table `sexe`
--
ALTER TABLE `sexe`
  ADD PRIMARY KEY (`sexe_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `jedi`
--
ALTER TABLE `jedi`
  MODIFY `jedi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `race`
--
ALTER TABLE `race`
  MODIFY `race_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `rang`
--
ALTER TABLE `rang`
  MODIFY `rang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `sexe`
--
ALTER TABLE `sexe`
  MODIFY `sexe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `jedi`
--
ALTER TABLE `jedi`
  ADD CONSTRAINT `jedi_race_id` FOREIGN KEY (`jedi_race`) REFERENCES `race` (`race_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `jedi_rang_id` FOREIGN KEY (`jedi_rang`) REFERENCES `rang` (`rang_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `jedi_sexe_id` FOREIGN KEY (`jedi_sexe`) REFERENCES `sexe` (`sexe_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
