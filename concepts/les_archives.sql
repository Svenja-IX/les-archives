-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 23 avr. 2020 à 12:01
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
  `arme_img` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arme_categorie` int(11) NOT NULL
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
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `categorie_id` int(11) NOT NULL,
  `categorie_nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`categorie_id`, `categorie_nom`) VALUES
(1, 'ordre Jedi'),
(2, 'sith'),
(3, 'chasseur de primes');

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
  `organisation_img` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organisation_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personnages`
--

CREATE TABLE `personnages` (
  `perso_id` int(11) NOT NULL,
  `perso_prenom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perso_nom` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perso_img` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perso_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personnages`
--

INSERT INTO `personnages` (`perso_id`, `perso_prenom`, `perso_nom`, `perso_img`, `perso_categorie`) VALUES
(1, 'anakin', 'skywalker', 'images/anakin-skywalker.jpg', 1),
(2, 'obi-Wan', 'kenobi', 'images/obi-wan-kenobi.jpg', 1),
(3, 'maul', NULL, 'images/maul.jpg', 2),
(4, 'Sheev', 'Palpatine', 'images/sheev-palpatine.jpg', 2),
(5, 'jango', 'fett', 'images/jango-fett.png', 3);

-- --------------------------------------------------------

--
-- Structure de la table `planetes`
--

CREATE TABLE `planetes` (
  `planete_id` int(11) NOT NULL,
  `planete_nom` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planete_img` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `planete_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `utilisateur_img` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs_roles`
--

CREATE TABLE `utilisateurs_roles` (
  `utilisateur_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vaisseaux`
--

CREATE TABLE `vaisseaux` (
  `vaisseau_id` int(11) NOT NULL,
  `vaisseau_nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vaisseau_img` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vaisseau_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `armes`
--
ALTER TABLE `armes`
  ADD PRIMARY KEY (`arme_id`),
  ADD KEY `armes_ibfk_1` (`arme_categorie`);

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
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categorie_id`);

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
  ADD KEY `perso_categorie` (`perso_categorie`);

--
-- Index pour la table `planetes`
--
ALTER TABLE `planetes`
  ADD PRIMARY KEY (`planete_id`),
  ADD KEY `planete_categorie` (`planete_categorie`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`utilisateur_id`);

--
-- Index pour la table `utilisateurs_roles`
--
ALTER TABLE `utilisateurs_roles`
  ADD KEY `role_id` (`role_id`),
  ADD KEY `utilisateur_id` (`utilisateur_id`);

--
-- Index pour la table `vaisseaux`
--
ALTER TABLE `vaisseaux`
  ADD PRIMARY KEY (`vaisseau_id`),
  ADD KEY `vaisseau_categorie` (`vaisseau_categorie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `armes`
--
ALTER TABLE `armes`
  MODIFY `arme_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `categorie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `citation`
--
ALTER TABLE `citation`
  MODIFY `citation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `organisations`
--
ALTER TABLE `organisations`
  MODIFY `organisation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personnages`
--
ALTER TABLE `personnages`
  MODIFY `perso_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `planetes`
--
ALTER TABLE `planetes`
  MODIFY `planete_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `utilisateur_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vaisseaux`
--
ALTER TABLE `vaisseaux`
  MODIFY `vaisseau_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `armes`
--
ALTER TABLE `armes`
  ADD CONSTRAINT `armes_ibfk_1` FOREIGN KEY (`arme_categorie`) REFERENCES `categories` (`categorie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Contraintes pour la table `organisations`
--
ALTER TABLE `organisations`
  ADD CONSTRAINT `organisations_ibfk_1` FOREIGN KEY (`organisation_categorie`) REFERENCES `categories` (`categorie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `personnages`
--
ALTER TABLE `personnages`
  ADD CONSTRAINT `personnages_ibfk_1` FOREIGN KEY (`perso_categorie`) REFERENCES `categories` (`categorie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `planetes`
--
ALTER TABLE `planetes`
  ADD CONSTRAINT `planetes_ibfk_1` FOREIGN KEY (`planete_categorie`) REFERENCES `categories` (`categorie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `utilisateurs_roles`
--
ALTER TABLE `utilisateurs_roles`
  ADD CONSTRAINT `utilisateurs_roles_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `utilisateurs_roles_ibfk_2` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`utilisateur_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `vaisseaux`
--
ALTER TABLE `vaisseaux`
  ADD CONSTRAINT `vaisseaux_ibfk_1` FOREIGN KEY (`vaisseau_categorie`) REFERENCES `categories` (`categorie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
