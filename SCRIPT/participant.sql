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
-- Structure de la table `participant`
--

CREATE TABLE `participant` (
  `id` int(5) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `sexe` char(1) NOT NULL,
  `date_naiss` date NOT NULL,
  `lieu_naiss` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp_part` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `id_formation` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `participant`
--

INSERT INTO `participant` (`id`, `nom`, `prenom`, `sexe`, `date_naiss`, `lieu_naiss`, `email`, `mdp_part`, `region`, `id_formation`) VALUES
(7, 'Dieye', 'Papa Oumar', 'M', '1998-09-08', 'Dakar', 'paoumar98@gmail.com', 'pod', 'Dakar', 5),
(8, 'Dieye', 'Ndeye Fatou', 'F', '1998-09-08', 'Dakar', 'ndeye@gmail.com', 'passer', 'ThiÃ¨s', 8),
(9, 'Sow', 'Abibatou', 'F', '1994-03-31', 'Dakar', 'aby@gmail.com', 'passer', 'Dakar', 2),
(10, 'Diop', 'Cheikh', 'M', '1997-08-15', 'Dakar', 'fou@yahoo.fr', 'passer', 'Dakar', 3),
(12, 'Ndiaye', 'Baba', 'M', '1997-09-14', 'Dakar', 'ndiayebaba@live.sn', 'passer', 'Matam', 7),
(13, 'Diagne', 'Sy', 'F', '2018-08-23', 'Dior', 'boydior@froncais.com', 'passer', 'Kaffrine', 5),
(14, 'Pod', 'Dieye', 'M', '1998-09-08', 'DAKAR', 'paoumar98@gmail.com', 'PASSZ', 'Dakar', 8),
(15, 'Ndiaye', 'Modou', 'M', '2018-08-17', 'Dakar', 'paoumar98@gmail.com', 'passer', 'Dakar', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `participant`
--
ALTER TABLE `participant`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
