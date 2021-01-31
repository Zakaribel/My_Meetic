-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 30 jan. 2021 à 13:23
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `zakidb`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_naissance` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `loisir` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `date_naissance`, `genre`, `ville`, `email`, `pass`, `loisir`, `status`) VALUES
(1, 'BELKACEMI', 'Zakari', '1993-06-07', 'homme', 'ste luce', 'zakaribel@hotmail.com', 'a16358be6e2306b153b1f071477e68837266075e', 'netflix', 1),
(3, 'BELKACEMI', 'Zakaria', '1993-06-07', 'femme', 'ste luce', 'zak@lol.fr', 'a16358be6e2306b153b1f071477e68837266075e', 'jeux videos', 1),
(4, 'zakaria', 'belkacemi', '1993-02-02', 'homme', 'ste luce', 'test@test.fr', 'a16358be6e2306b153b1f071477e68837266075e', 'Netflix', 1),
(7, 'pierre', 'janaud', '1992-02-02', 'homme', 'Marseille', 'lol@test.fr', 'a16358be6e2306b153b1f071477e68837266075e', 'Netflix', 1),
(6, 'BELKACEMI', 'Zakaria', '1993-06-07', 'homme', 'ste luce', 'mdr@lol.fr', '23e591e8c36dda987970603ad0fdd031b7dff9f9', 'sport', 1),
(8, 'pipo', 'bimbo', '1984-12-01', 'homme', 'Paris', 'jetest@cvrai.fr', 'a16358be6e2306b153b1f071477e68837266075e', 'Netflix', 1),
(9, 'pololo', 'gertrude', '1977-01-01', 'femme', 'ste luce', 'zaza@hotmail.fr', 'a16358be6e2306b153b1f071477e68837266075e', 'Jeux videos', 1),
(10, 'Panards', 'pignouf', '1984-08-05', 'homme', 'Juvisy', 'pearl@hotmail.fr', 'a16358be6e2306b153b1f071477e68837266075e', 'Lire', 1),
(11, 'nomdutilisateur', 'prenom', '1982-02-01', 'homme', 'Lyon', 'autretest@hotmail.fr', 'a16358be6e2306b153b1f071477e68837266075e', 'Sport', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
