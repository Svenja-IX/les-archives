-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 18 juin 2020 à 12:16
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
-- Structure de la table `armes`
--

CREATE TABLE `armes` (
  `arme_id` int(11) NOT NULL,
  `arme_nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arme_bio` longtext COLLATE utf8mb4_unicode_ci,
  `arme_img` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `article_nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `articles_armes`
--

CREATE TABLE `articles_armes` (
  `article_id` int(11) NOT NULL,
  `arme_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `articles_organisations`
--

CREATE TABLE `articles_organisations` (
  `article_id` int(11) NOT NULL,
  `organisation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `articles_personnages`
--

CREATE TABLE `articles_personnages` (
  `article_id` int(11) NOT NULL,
  `perso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `articles_planetes`
--

CREATE TABLE `articles_planetes` (
  `article_id` int(11) NOT NULL,
  `planete_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `articles_vaisseaux`
--

CREATE TABLE `articles_vaisseaux` (
  `article_id` int(11) NOT NULL,
  `vaisseau_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `citation`
--

CREATE TABLE `citation` (
  `citation_id` int(11) NOT NULL,
  `citation_perso` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citation_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `citation`
--

INSERT INTO `citation` (`citation_id`, `citation_perso`, `citation_description`) VALUES
(1, 'Vador', '\"Je suis ton père\"'),
(2, '', '\"Que la force soit avec toi\"'),
(3, 'Yoda', '\"La peur mène à la colère, la colère mène à la haine, la haine mène à la souffrance.\"');

-- --------------------------------------------------------

--
-- Structure de la table `organisations`
--

CREATE TABLE `organisations` (
  `organisation_id` int(11) NOT NULL,
  `organisation_nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organisation_bio` longtext COLLATE utf8mb4_unicode_ci,
  `organisation_img` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organisation_categorie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personnages`
--

CREATE TABLE `personnages` (
  `perso_id` int(11) NOT NULL,
  `perso_prenom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perso_nom` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perso_race` int(11) DEFAULT NULL,
  `perso_bio` longtext COLLATE utf8mb4_unicode_ci,
  `perso_img` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perso_categorie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `planetes`
--

CREATE TABLE `planetes` (
  `planete_id` int(11) NOT NULL,
  `planete_nom` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planete_bio` longtext COLLATE utf8mb4_unicode_ci,
  `planete_img` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `races`
--

CREATE TABLE `races` (
  `race_id` int(11) NOT NULL,
  `race_nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `races`
--

INSERT INTO `races` (`race_id`, `race_nom`) VALUES
(1, 'Humain'),
(2, 'Togruta'),
(3, 'Zabrak');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`role_id`, `role_nom`) VALUES
(1, 'Utilisateur'),
(2, 'Modérateur'),
(3, 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `utilisateur_id` int(11) NOT NULL,
  `utilisateur_prenom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilisateur_nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilisateur_mail` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilisateur_mdp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilisateur_img` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utilisateur_role` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`utilisateur_id`, `utilisateur_prenom`, `utilisateur_nom`, `utilisateur_mail`, `utilisateur_mdp`, `utilisateur_img`, `utilisateur_role`) VALUES
(3, 'Axel', 'Abad', 'axel.abad0901@gmail.com', '$2y$10$5P5TqAID6hgbktQAcFyuee.5gcGtSvb6bkJsZC59VO6qQxy4ofS/.', NULL, 3),
(4, 'Theo', 'Ozenda', 'ozendatheo@gmail.com', '$2y$10$tjsxLGFa5.wnCPNbN/qcyOq4H9F2TFLc9xbBc2e.4yp5A/k65aLl2', NULL, 2),
(5, 'connard', 'demerde', 'connarddemerde@gmail.com', '$2y$10$x65N9m4LHP6fkT3arZvB8OUBFTIYsEqK4YFo3c0/Xw23VUgkKZY4i', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `vaisseaux`
--

CREATE TABLE `vaisseaux` (
  `vaisseau_id` int(11) NOT NULL,
  `vaisseau_nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vaisseau_bio` longtext COLLATE utf8mb4_unicode_ci,
  `vaisseau_img` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `armes`
--
ALTER TABLE `armes`
  ADD PRIMARY KEY (`arme_id`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Index pour la table `articles_armes`
--
ALTER TABLE `articles_armes`
  ADD KEY `article_id` (`article_id`),
  ADD KEY `arme_id` (`arme_id`);

--
-- Index pour la table `articles_organisations`
--
ALTER TABLE `articles_organisations`
  ADD KEY `article_id` (`article_id`),
  ADD KEY `organisation_id` (`organisation_id`);

--
-- Index pour la table `articles_personnages`
--
ALTER TABLE `articles_personnages`
  ADD KEY `article_id` (`article_id`),
  ADD KEY `perso_id` (`perso_id`);

--
-- Index pour la table `articles_planetes`
--
ALTER TABLE `articles_planetes`
  ADD KEY `article_id` (`article_id`),
  ADD KEY `planete_id` (`planete_id`);

--
-- Index pour la table `articles_vaisseaux`
--
ALTER TABLE `articles_vaisseaux`
  ADD KEY `article_id` (`article_id`),
  ADD KEY `vaisseau_id` (`vaisseau_id`);

--
-- Index pour la table `citation`
--
ALTER TABLE `citation`
  ADD PRIMARY KEY (`citation_id`);

--
-- Index pour la table `organisations`
--
ALTER TABLE `organisations`
  ADD PRIMARY KEY (`organisation_id`),
  ADD KEY `organisations_ibfk_1` (`organisation_categorie`);

--
-- Index pour la table `personnages`
--
ALTER TABLE `personnages`
  ADD PRIMARY KEY (`perso_id`),
  ADD KEY `perso_categorie` (`perso_categorie`),
  ADD KEY `perso_race` (`perso_race`);

--
-- Index pour la table `planetes`
--
ALTER TABLE `planetes`
  ADD PRIMARY KEY (`planete_id`);

--
-- Index pour la table `races`
--
ALTER TABLE `races`
  ADD PRIMARY KEY (`race_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`utilisateur_id`),
  ADD KEY `utilisateur_role` (`utilisateur_role`);

--
-- Index pour la table `vaisseaux`
--
ALTER TABLE `vaisseaux`
  ADD PRIMARY KEY (`vaisseau_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `armes`
--
ALTER TABLE `armes`
  MODIFY `arme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `citation`
--
ALTER TABLE `citation`
  MODIFY `citation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `organisations`
--
ALTER TABLE `organisations`
  MODIFY `organisation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `personnages`
--
ALTER TABLE `personnages`
  MODIFY `perso_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `planetes`
--
ALTER TABLE `planetes`
  MODIFY `planete_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `races`
--
ALTER TABLE `races`
  MODIFY `race_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `utilisateur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `vaisseaux`
--
ALTER TABLE `vaisseaux`
  MODIFY `vaisseau_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles_armes`
--
ALTER TABLE `articles_armes`
  ADD CONSTRAINT `articles_armes_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`article_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `articles_armes_ibfk_2` FOREIGN KEY (`arme_id`) REFERENCES `armes` (`arme_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `articles_organisations`
--
ALTER TABLE `articles_organisations`
  ADD CONSTRAINT `articles_organisations_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`article_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `articles_organisations_ibfk_2` FOREIGN KEY (`organisation_id`) REFERENCES `organisations` (`organisation_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `articles_personnages`
--
ALTER TABLE `articles_personnages`
  ADD CONSTRAINT `articles_personnages_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`article_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `articles_personnages_ibfk_2` FOREIGN KEY (`perso_id`) REFERENCES `personnages` (`perso_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `articles_planetes`
--
ALTER TABLE `articles_planetes`
  ADD CONSTRAINT `articles_planetes_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`article_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `articles_planetes_ibfk_2` FOREIGN KEY (`planete_id`) REFERENCES `planetes` (`planete_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `articles_vaisseaux`
--
ALTER TABLE `articles_vaisseaux`
  ADD CONSTRAINT `articles_vaisseaux_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`article_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `articles_vaisseaux_ibfk_2` FOREIGN KEY (`vaisseau_id`) REFERENCES `vaisseaux` (`vaisseau_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `personnages`
--
ALTER TABLE `personnages`
  ADD CONSTRAINT `personnages_ibfk_1` FOREIGN KEY (`perso_categorie`) REFERENCES `categories` (`categorie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `personnages_ibfk_2` FOREIGN KEY (`perso_race`) REFERENCES `races` (`race_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `utilisateurs_ibfk_1` FOREIGN KEY (`utilisateur_role`) REFERENCES `roles` (`role_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
