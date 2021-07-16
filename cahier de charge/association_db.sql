-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 16 juil. 2021 à 16:45
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `association_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonne`
--

CREATE TABLE `abonne` (
  `idabonne` int(11) NOT NULL,
  `noma` varchar(200) NOT NULL,
  `telephon` varchar(255) NOT NULL,
  `email` varchar(222) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `abonne`
--

INSERT INTO `abonne` (`idabonne`, `noma`, `telephon`, `email`, `categorie`, `date`, `photo`) VALUES
(22, 'samir', '0654325678', 'samir@gmail.com', 'orphelins', '2012-06-06', 'img/en2.jpg'),
(23, 'YASMIN', '0670661863', 'echahedmostafa@gmail.com', 'orphfin', '2021-07-30', 'img/en1.jpg'),
(24, 'yousef', '067894523', 'youssef@gmail.com', 'hondicapé', '2015-05-04', 'img/en4.jpg'),
(27, 'karima', '0670661863', 'echahedmostafa@gmail.com', 'éléve', '2015-12-23', 'img/en11.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `idactivite` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`idactivite`, `nom`, `date`, `image`, `text`) VALUES
(4, 'Célébrer la Journée internationale des enfants', '2021-07-31', 'img/img5.jpg', 'droits de l’enfant  en célébrant la journée mondiale de l’enfance. Pour l’occasion, depuis 2017 l’UNICEF demande aux adultes et aux jeunes du monde entier, de démontrer leur solidarité envers les enfants les plus défavorisés et les plus vulnérables, en les laissant prendre les commandes des médias, du sport, du divertissement, des affaires et même des gouvernements.'),
(56, 'envirennement', '2021-07-30', 'img/img32.jpg', 'La Journée mondiale de l\'environnement 2021, dont le Pakistan est le pays hôte cette année pour les célébrations officielles, appelle à une action urgente pour relancer nos écosystèmes endommagés. Des forêts aux tourbières en passant par les côtes, nous dépendons tous d\'écosystèmes sains pour notre survie');

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `idannonce` int(11) NOT NULL,
  `nomannonce` varchar(444) NOT NULL,
  `date` date NOT NULL,
  `imageA` varchar(100) NOT NULL,
  `textA` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`idannonce`, `nomannonce`, `date`, `imageA`, `textA`) VALUES
(1, 'annonce d\'inscription', '2021-07-08', 'img/img2.jpg', 'mondiale de l\'environnement 2021, dont le Pakistan est le pays hôte cette année pour les célébrations officielles, appelle à une action urgente pour relancer nos écosystèmes endommagés. Des forêts aux tourbières en passant par les côtes, nous dépendons tous d\'écosystèmes sains pour notre survie');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `iduser` int(12) NOT NULL,
  `nom` varchar(222) NOT NULL,
  `telephon` varchar(33) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`iduser`, `nom`, `telephon`, `message`) VALUES
(2, 'zahmidi', '0670661860', 'Un message est un ensemble de signes. Il implique donc un codage par l\'​émetteur, et un décodage par le récepteur'),
(4, 'zahmidi', '0670661860', 'Un message est un ensemble de signes. Il implique donc un codage par l\'​émetteur, et un décodage par le récepteur'),
(5, 'zahmidi', '0670661860', 'Un message est un ensemble de signes. Il implique donc un codage par l\'​émetteur, et un décodage par le récepteur'),
(6, 'zahmidi', '0670661860', 'Un message est un ensemble de signes. Il implique donc un codage par l\'​émetteur, et un décodage par le récepteur'),
(7, 'zahmidi', '0670661860', 'Un message est un ensemble de signes. Il implique donc un codage par l\'​émetteur, et un décodage par le récepteur'),
(8, 'zahmidi', '0670661860', 'Un message est un ensemble de signes. Il implique donc un codage par l\'​émetteur, et un décodage par le récepteur'),
(9, 'zahmidi', '0670661860', 'Un message est un ensemble de signes. Il implique donc un codage par l\'​émetteur, et un décodage par le récepteur'),
(10, 'zahmidi', '0670661860', 'Un message est un ensemble de signes. Il implique donc un codage par l\'​émetteur, et un décodage par le récepteur'),
(11, 'TARIK', '0670661863', 'Un message est un ensemble de signes. Il implique donc un codage par l\'​émetteur, et un décodage par le récepteur'),
(12, 'smed', '0670661863', 'salut'),
(13, 'simo', '0670661860', 'salut');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `userId` int(11) NOT NULL,
  `userName` varchar(44) DEFAULT NULL,
  `PassWord` varchar(44) DEFAULT NULL,
  `idact` int(11) DEFAULT NULL,
  `abo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`userId`, `userName`, `PassWord`, `idact`, `abo_id`) VALUES
(1, 'echahed mostafa', '198612', NULL, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonne`
--
ALTER TABLE `abonne`
  ADD PRIMARY KEY (`idabonne`);

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`idactivite`);

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`idannonce`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`iduser`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `kf` (`idact`),
  ADD KEY `a` (`abo_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonne`
--
ALTER TABLE `abonne`
  MODIFY `idabonne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `idactivite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `iduser` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
