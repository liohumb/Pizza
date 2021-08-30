-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 30 août 2021 à 14:23
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lorenzzobd`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL,
  `Mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Nos Suggestion'),
(2, 'Nos Pizzas'),
(3, 'Nos Boissons'),
(4, 'Nos Dessert');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) NOT NULL,
  `statut_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Prenom` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Numéro Téléphone` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `option_product`
--

DROP TABLE IF EXISTS `option_product`;
CREATE TABLE IF NOT EXISTS `option_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `option_product`
--

INSERT INTO `option_product` (`id`, `opt`) VALUES
(1, '24 cm'),
(2, '36 cm'),
(3, '42 cm'),
(4, 'chocolat'),
(5, 'vanille'),
(6, 'fraise'),
(7, 'pistache'),
(8, 'blanc'),
(9, 'rouge'),
(10, 'rosé'),
(11, '33cl'),
(12, '1l');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_User` varchar(255) NOT NULL,
  `id_Produit` varchar(255) NOT NULL,
  `Quantité` float NOT NULL,
  `Prix` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `price`
--

DROP TABLE IF EXISTS `price`;
CREATE TABLE IF NOT EXISTS `price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` float NOT NULL,
  `option_id` int(11) DEFAULT NULL,
  `produit_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_size` (`option_id`),
  KEY `fk_product_price` (`produit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `price`
--

INSERT INTO `price` (`id`, `price`, `option_id`, `produit_id`) VALUES
(1, 8, 1, 5),
(2, 8, 1, 1),
(3, 8, 1, 4),
(4, 8, 1, 6),
(5, 6.5, NULL, 3),
(6, 8, 1, 7),
(7, 8, 1, 2),
(8, 4.5, 11, 10),
(9, 4.5, 11, 8),
(10, 9.9, 8, 11),
(11, 9.9, 10, 11),
(12, 9.9, 9, 11),
(13, 5.5, 11, 9),
(14, 3.9, 4, 14),
(15, 3.9, 6, 14),
(16, 3.9, 7, 14),
(17, 3.9, 5, 14),
(18, 3.9, NULL, 12),
(19, 3.9, NULL, 15),
(20, 5.5, NULL, 13),
(21, 10, 2, 1),
(22, 10, 2, 5),
(23, 10, 2, 4),
(24, 10, 2, 6),
(25, 10, 2, 7),
(79, 10, 2, 2),
(80, 6, 12, 10),
(81, 6, 12, 9),
(82, 6, 12, 8),
(83, 12.5, 3, 5),
(84, 12.5, 3, 1),
(85, 12.5, 3, 4),
(86, 12.5, 3, 6),
(87, 12.5, 3, 7),
(88, 12.5, 3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_category` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `name`, `details`, `img_path`, `category_id`) VALUES
(1, 'La chorizzo', 'pizza base tomate et chorizzo', 'assets/img/pizza2.jpg', 1),
(2, 'La poulette', 'pizza au poulet', 'assets/img/pizza3.jpg', 1),
(3, 'La pizza enfant ', 'taille unique pizza classique jambon formage', 'assets/img/pizza4.jpg', 1),
(4, 'La chèvre', 'pizza au chevre', 'assets/img/discover1.jpg', 2),
(5, 'La 4 fromages', '', 'assets/img/discover2.jpg', 2),
(6, 'La Mozza', 'Pizza tomate mozza', 'assets/img/discover3.jpg', 2),
(7, 'La pepperoni', 'pizza tomate pepperoni', 'assets/img/discover4.jpg', 2),
(8, 'Schweppes', 'Boisson fraiche gazeuse', 'assets/img/drink1.jpg', 3),
(9, 'Carlsberg', 'La ptite binouze', 'assets/img/drink2.jpg', 3),
(10, 'Coca-Cola', 'Coca-Cola rouge', 'assets/img/drink3.jpg', 3),
(11, 'Vin ', 'vin blanc , rouge ou rosé', 'assets/img/drink4.jpg', 3),
(12, 'Tiramisu', '', 'assets/img/sweet1.jpg', 4),
(13, 'Cookie', '', 'assets/img/sweet2.jpg', 4),
(14, 'Glace', 'Parfum au choix :\r\nchocolat, fraise , vanille ,pistache', 'assets/img/sweet3.jpg', 4),
(15, 'Muffins', '', 'assets/img/sweet4.jpg', 4),
(18, 'Nos pizza fait maison', '', 'assets/img/pizza1.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `quantit`
--

DROP TABLE IF EXISTS `quantit`;
CREATE TABLE IF NOT EXISTS `quantit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Valeur` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Statut` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL,
  `Mdp` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Numéro Téléphone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `price`
--
ALTER TABLE `price`
  ADD CONSTRAINT `fk_product_price` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`),
  ADD CONSTRAINT `fk_product_size` FOREIGN KEY (`option_id`) REFERENCES `option_product` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
