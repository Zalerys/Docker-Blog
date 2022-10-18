-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : mar. 18 oct. 2022 à 12:06
-- Version du serveur : 10.9.3-MariaDB-1:10.9.3+maria~ubu2204
-- Version de PHP : 8.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `Admin` tinyint(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




--
-- Déchargement des données de la table `User`
--

INSERT INTO `User` (`id`, `Admin`, `name`, `email`, `password`, `time`) VALUES
(1, 1, 'Admin', 'admin@gmail.com', 'password', '2022-10-14 08:26:34'),
(3, 0, 'test', 'test', 'test', '2022-10-14 11:58:34'),
(5, 0, 'test', 'oui', 'test', '2022-10-14 12:00:30'),
(7, 0, '', '', 'password', '2022-10-14 12:42:24'),
(8, 0, 'Zalerys', 'gustaveconstans@gmail.com', 'password', '2022-10-14 12:42:30'),
(12, 0, 'zozo', 'zozo', 'zozo', '2022-10-14 13:00:48'),
(57, 0, 'azerazerazer', 'aezrazer', 'azerazerar', '2022-10-14 14:09:23'),
(91, 0, 'aaaaaaaaaaa', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaa', '2022-10-14 14:20:30'),
(92, 0, 'aaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaa', '2022-10-14 14:21:03'),
(94, 0, 'b', 'b', 'b', '2022-10-14 14:31:13');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE `articles` (
  `articleId` INT,
  `user` INT NOT NULL,
  `content` VARCHAR(255),
  PRIMARY KEY (`articleId`),
  FOREIGN KEY (`User`) REFERENCES `User` (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `articles`
  MODIFY `articleId` int(11) NOT NULL AUTO_INCREMENT;