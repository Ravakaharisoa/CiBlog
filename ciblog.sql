-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 03 août 2021 à 14:53
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ciblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `create_at`) VALUES
(1, 2, 'Business', '2021-07-29 16:37:36'),
(2, 2, 'Technology', '2021-07-29 16:37:36');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `posts_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `posts_id`, `name`, `email`, `body`, `created_at`) VALUES
(1, 13, 'Charles', 'charle@gmail.com', '<p>That&#39;s a good work</p>\r\n', '2021-07-31 14:06:50');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `body`, `post_image`, `creat_at`) VALUES
(2, 1, 1, 'Post two', 'Post-two', '			This is the page post two!		', '', '2021-07-29 03:45:52'),
(3, 2, 1, 'Post three', 'Post-three', 'This is my page post three', '', '2021-07-29 04:38:41'),
(4, 1, 1, 'Post four', 'Post-four', '<p>This is my forth post <strong>page</strong></p>\r\n', 'IMG_20190122_102011865.jpg', '2021-07-29 18:47:17'),
(5, 2, 0, 'Test Post', 'Test-Post', '<p>this is the test post</p>\r\n', '1591616361525.jpg', '2021-07-29 18:51:36'),
(6, 2, 0, 'post five', 'post-five', '<p>This is my five post page.</p>\r\n', 'IMG_20190609_162006498.jpg', '2021-07-29 18:59:20'),
(7, 1, 0, 'Post six', 'Post-six', '<p>This is my sixth post page</p>\r\n', 'IMG_20191108_063426450.jpg', '2021-07-29 19:01:24'),
(8, 2, 0, 'Post test two', 'Post-test-two', '<p>This my post page two</p>\r\n', 'noimage.jpg', '2021-07-29 19:04:51'),
(9, 2, 0, 'Post test three', 'Post-test-three', '<p>This is my Post page test three</p>\r\n', 'noimage.jpg', '2021-07-29 19:09:54'),
(10, 1, 0, 'Post test four', 'Post-test-four', '<p>This is my four post page</p>\r\n', 'noimage.jpg', '2021-07-29 19:23:21'),
(11, 1, 0, 'Post five test', 'Post-five-test', '<p>this is my five post page</p>\r\n', 'FB_IMG_15965641871112848.jpg', '2021-07-29 19:26:29'),
(12, 2, 0, 'title', 'title', '<p>this is my title</p>\r\n', 'noimage.jpg', '2021-07-29 20:09:38'),
(13, 1, 0, 'Second title', 'Second-title', '<p>This is my second title</p>\r\n', '', '2021-07-29 20:10:56'),
(14, 2, 0, 'Post five test', 'Post-five-test', '<p>this is my post five page ;this is a new page</p>\r\n', 'noimage.jpg', '2021-07-30 04:57:22');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_id` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `zipcode`, `email`, `username`, `password`, `register_id`) VALUES
(1, 'Jean Pierre', '0123', 'jean@gmail.fr', 'Pierre', '81dc9bdb52d04dc20036dbd8313ed055', '2021-07-31 16:40:09');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
