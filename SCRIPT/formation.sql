-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 13 août 2018 à 01:38
-- Version du serveur :  10.1.33-MariaDB
-- Version de PHP :  7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `formation_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_formation` int(5) NOT NULL,
  `domaine` varchar(50) NOT NULL,
  `intitule` varchar(50) NOT NULL,
  `lieu` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `duree` int(5) NOT NULL,
  `montant` int(9) NOT NULL,
  `animateur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `domaine`, `intitule`, `lieu`, `date`, `duree`, `montant`, `animateur`) VALUES
(1, 'Administration, commerce et informatique', 'Comptabilité', 'CFPT', '2018-08-23', 5, 250000, 'Mr Preira , Mr Dieng			'),
(2, 'Alimentation et tourisme', 'Cuisine', 'Centre Sauvegarde Guediawaye', '2018-09-20', 15, 300000, 'Mme Ndiaye				'),
(3, 'Bois et materiaux connexes', 'Ebenisterie', 'Medina', '2019-01-09', 3, 100000, 'Mr Seck				'),
(4, 'Entretien d\'equipement motorise', 'Mecanique automobile', 'CFPT', '2019-10-23', 4, 25000, 'Mme Sow				'),
(5, 'Fabrication mecanique', 'Dessin industriel', 'Diamniado', '2018-09-20', 3, 75000, 'Pr Gueye				'),
(6, 'Communications et documentation', 'Procedes infographiques ', 'ESP', '2018-05-30', 12, 100000, 'Mr Mendy				'),
(7, 'Metallurgie', 'Soudage-montage', 'ESMT', '2017-12-12', 6, 35000, 'Mme Gaye				'),
(8, 'Sante', 'Soins infirmiers', 'Hopital Fann', '2018-03-12', 15, 150000, 'Dr Wague');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_formation`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_formation` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
