-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 20 fév. 2024 à 20:50
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `connect_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `connect_p`
--

CREATE TABLE `connect_p` (
  `email` text,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `connect_p`
--

INSERT INTO `connect_p` (`email`, `password`) VALUES
('mouna@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Structure de la table `user_db`
--

CREATE TABLE `user_db` (
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user_db`
--

INSERT INTO `user_db` (`email`, `password`) VALUES
('amir@gmail.com', 'wdsfsdf'),
('wajdi@gmail.com', '123456'),
('farouk@gmail.com', '123456'),
('mouna@gmail.com', '123456789');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user_db`
--
ALTER TABLE `user_db`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
