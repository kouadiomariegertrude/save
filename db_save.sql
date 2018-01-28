-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 28 jan. 2018 à 00:51
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_save`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

CREATE TABLE `actualites` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `resume` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actualites`
--

INSERT INTO `actualites` (`id`, `titre`, `resume`, `image`) VALUES
(10, 'activite 5', 'g', 'DSC00506.JPG'),
(12, 'Nouveau', 'Et c\'es reparti', 'riz.PNG'),
(13, 'Bonne nouvelle!', 'save the olders  desormais  vous ouvre un cadre agreable, merveilleux, dans ses locaux ou vous pourrai venir vous detendre, lire, pratiquer des jeux de dames et autre et avec en plus un repas offert , nous vous offrons tous ceci avec joie et plaisir chers doyens, car votre epanouissement c\'est notre mission.', 'damier.png'),
(15, 'Causerie', 'Ce jeudi 15 octobre , tous nos amis du troisieme age se sont reunis au siege de l\'ong save the olders pour une merveilleuse causerie debat avec nos benevoles sur le theme de la pace des personnes agees dans notre societe aujourd\'hui et face au reseaux sociaux.', 'reunion.png');

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

CREATE TABLE `offres` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `offres`
--

INSERT INTO `offres` (`id`, `libelle`, `description`) VALUES
(5, 'psychologue', 'moral'),
(6, 'geriatre', 'sante'),
(7, 'ecoute', 'bien etre'),
(8, 'suivie religieux', 'details'),
(9, 'echange', 'loisir');

-- --------------------------------------------------------

--
-- Structure de la table `personnes`
--

CREATE TABLE `personnes` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `date_naissance` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `id_villes` int(11) NOT NULL,
  `id_offres` int(11) NOT NULL,
  `mdp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnes`
--

INSERT INTO `personnes` (`id`, `nom`, `prenom`, `date_naissance`, `email`, `telephone`, `image`, `id_villes`, `id_offres`, `mdp`) VALUES
(30, 'nadiya', 'bradi', '', 'k@o', '', 'riz.PNG', 0, 0, 'sdff'),
(31, 'refita', 'gtadi', '', 'hdhdjj@gdg', '', 'lire.png', 0, 0, 'jdkkd'),
(32, 'KOUADIO', 'MOH MARIE-GERTRUDE', '', 'kouadiomariegertrude@gmail.com', '', '22.jpg', 0, 0, 'christvit');

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `id` int(11) NOT NULL,
  `nom_villes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`id`, `nom_villes`) VALUES
(1, 'bassam'),
(3, 'jacqueville'),
(4, 'gagnoa'),
(5, 'man'),
(6, 'abengourou'),
(7, 'tiassale'),
(8, 'abidjan');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `offres`
--
ALTER TABLE `offres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnes`
--
ALTER TABLE `personnes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `offres`
--
ALTER TABLE `offres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `personnes`
--
ALTER TABLE `personnes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
