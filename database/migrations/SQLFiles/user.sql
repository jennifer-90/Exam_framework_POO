-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 05 oct. 2023 à 18:00
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_juin_2023`
--

--
-- Déchargement des données de la table `user`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `lastlogin`, `admin`, `image`) VALUES
(1, 'Jennifer', '$2y$10$mIUBUdSPxLIBIf7lDxFS5u9AnyFKBUtOESGS75ZbuueY8f0NOG61S', 'Jennifer@gmail.com', '2023-08-11 18:52:34', '2023-08-26 14:56:57', 1, NULL),
(2, 'Laura', '$2y$10$/4NieYh2eTTwQr6kHofM9.67KDY8jnpmHPOFqmgsP.ecY8TfmSnQO', 'Laura@gmail.com', '2023-08-11 18:52:59', '2023-08-11 18:53:04', NULL, NULL),
(3, 'Fabio', '$2y$10$WrSLSPKZLIzQY8Wly1XZDunxRfakiz0uw2LJ9p6U8lur/IwmvE3zS', 'Fabio@gmail.com', '2023-08-16 23:24:35', '2023-08-16 23:24:43', NULL, NULL),
(4, 'coucou', '$2y$10$8a3rhqe1UDLxCxbBV.0okuIn3TIx.JWyoJBMvIAT6sJCkWeDYsBqG', 'coucou@gmail.com', '2023-08-17 21:37:42', '2023-08-17 21:37:48', NULL, NULL),
(5, 'Jen', '$2y$10$CKQNy3KFxBk73fCmgXe5B.M3jF9FSe/WnW3RLwXWfT0eaaoZzoWdK', 'Jen@gmail.com', '2023-08-19 23:09:48', '2023-08-19 23:09:52', NULL, NULL),
(6, 'Amelie', '$2y$10$5BfnIfPOmJHLHRBxGx61NuW6QO/uXfkzERNkMz3DqGREvj/z1qD9S', 'Amelie@gmail.com', '2023-08-26 14:52:29', '2023-08-26 14:52:36', NULL, NULL),
(7, 'Toutou', '$2y$10$1jiRe8zqu.aesxqFB8ufj.SIb/fxdjXuxDoUvDsFXFRIxSyhBUWbW', 'Loulou@gmail.com', '2023-08-26 14:55:28', '2023-08-26 14:55:36', NULL, NULL),
(8, 'sabrina', '$2y$10$buznpdwaiyMdfBl9HKg8ueZPX6DK2PrvTaI3aysFXcgcY4R.c0SZy', 'sabrina@gmail.com', '2023-08-27 19:23:34', '2023-08-27 19:23:41', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
