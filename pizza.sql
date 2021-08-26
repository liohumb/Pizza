-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 26 août 2021 à 12:40
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
-- Base de données : `bdd_pizza`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `detail` text,
  `img_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `title`, `detail`, `img_path`) VALUES
(1, 'Pizza', 'Pizza', ''),
(2, 'Boisson', 'Boisson', 'assets/img/drink4.jpg'),
(3, 'Dessert', 'Dessert', 'assets/img/sweet3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(255) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `Id_customer` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Id_customer` (`Id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `commande_produit`
--

DROP TABLE IF EXISTS `commande_produit`;
CREATE TABLE IF NOT EXISTS `commande_produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_produit` int(11) DEFAULT NULL,
  `Id_commande` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Id_produit` (`Id_produit`),
  KEY `Id_commande` (`Id_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `Addresse` text,
  `Cmpt_addresse` text,
  `cp` decimal(15,0) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `horaire`
--

DROP TABLE IF EXISTS `horaire`;
CREATE TABLE IF NOT EXISTS `horaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jour` varchar(255) DEFAULT NULL,
  `start_slot` time DEFAULT NULL,
  `end_slot` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `detail` text,
  `price` decimal(15,2) DEFAULT NULL,
  `size` decimal(15,0) DEFAULT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `Id_category` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Id_category` (`Id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `title`, `detail`, `price`, `size`, `img_path`, `Id_category`) VALUES
(2, 'Pizza Pepperoni', 'Le pepperoni ou peppéroni est une variété de salami d’origine américaine faite d’un mélange séché de porc et de bœuf assaisonné de paprika ou d’un autre piment. Le pepperoni est généralement doux, légèrement fumé et de couleur rouge vif', '10.00', '24', 'assets/img/discover4.jpg', 1),
(3, 'Pizza 4 fromages', 'Pizza quattro formaggi Italian: est une variété de pizza dans la cuisine italienne qui est garnie d\'une combinaison de quatre types de fromage, généralement fondus ensemble, avec ou sans sauce tomate', '8.00', '24', 'assets/img/discover2.jpg', 1),
(4, 'Pizza 4 fromages', 'Pizza quattro formaggi Italian: est une variété de pizza dans la cuisine italienne qui est garnie d\'une combinaison de quatre types de fromage, généralement fondus ensemble, avec ou sans sauce tomate', '11.50', '36', 'assets/img/discover2.jpg', 1),
(5, 'Pizza 4 fromages ', 'Pizza quattro formaggi Italian: est une variété de pizza dans la cuisine italienne qui est garnie d\'une combinaison de quatre types de fromage, généralement fondus ensemble, avec ou sans sauce tomate', '14.00', '42', 'assets/img/discover2.jpg', 1),
(6, 'La Pizza Mozza', 'Une pâte à pizza, quelques tomates cerises, de la roquette, de la mozzarella di bufala et notre fameuse Sauce tomate et basilic Mutti suffisent, pour que l’Italie s’invite dans votre assiette ! La pizza à la mozzarella di bufala se prépare et se cuit très rapidement. Elle s’appréciera parfaitement lors de vos soirées détente ou lors d’évènements planifiés ou improvisés, en famille ou entre amis ! Si vous disposez d’assez de temps, cette recette peut tout à fait être réalisée avec une pâte faite maison, elle n’en sera que meilleure : pour une pâte maison voir la recette ici. La pizza un est un plat convivial et généreux, qui saura faire plaisir à coup sûr et en toute simplicité.', '8.00', '24', 'assets/img/discover3.jpg', 1),
(7, 'La Pizza Mozza', 'Une pâte à pizza, quelques tomates cerises, de la roquette, de la mozzarella di bufala et notre fameuse Sauce tomate et basilic Mutti suffisent, pour que l’Italie s’invite dans votre assiette ! La pizza à la mozzarella di bufala se prépare et se cuit très rapidement. Elle s’appréciera parfaitement lors de vos soirées détente ou lors d’évènements planifiés ou improvisés, en famille ou entre amis ! Si vous disposez d’assez de temps, cette recette peut tout à fait être réalisée avec une pâte faite maison, elle n’en sera que meilleure : pour une pâte maison voir la recette ici. La pizza un est un plat convivial et généreux, qui saura faire plaisir à coup sûr et en toute simplicité.', '11.50', '36', 'assets/mg/discover3.jpg', 1),
(8, 'La Pizza Mozza', 'Une pâte à pizza, quelques tomates cerises, de la roquette, de la mozzarella di bufala et notre fameuse Sauce tomate et basilic Mutti suffisent, pour que l’Italie s’invite dans votre assiette ! La pizza à la mozzarella di bufala se prépare et se cuit très rapidement. Elle s’appréciera parfaitement lors de vos soirées détente ou lors d’évènements planifiés ou improvisés, en famille ou entre amis ! Si vous disposez d’assez de temps, cette recette peut tout à fait être réalisée avec une pâte faite maison, elle n’en sera que meilleure : pour une pâte maison voir la recette ici. La pizza un est un plat convivial et généreux, qui saura faire plaisir à coup sûr et en toute simplicité.', '14.00', '42', 'assets/mg/discover3.jpg', 1),
(9, 'La Pizza Poulette', 'Pizza Roquette', '8.00', '24', 'assets/img/pizza3.jpg', 1),
(10, 'La Pizza Poulette', 'Pizza Roquette', '11.50', '36', 'assets/img/pizza3.jpg', 1),
(11, 'La Pizza Poulette', 'Pizza Roquette', '14.00', '42', 'assets/img/pizza3.jpg', 1),
(12, 'Coca-cola', 'Boisson Fraîche', '3.00', '33', 'assets\\img\\drink3.jpg', 2),
(13, 'Schweppes', 'Boisson Fraîche Citron', '3.90', '33', 'assets\\img\\drink1.jpg', 2),
(14, 'Carlsberg', 'Boisson Fraîche alcoolisée', '4.50', '50', 'assets\\img\\drink2.jpg', 2),
(15, 'Vin Rouge ', 'Vin rouge issue du loiret', '9.90', '1', 'assets\\img\\drink4.jpg', 2),
(16, 'Vin Rose', 'Vin Rose qui s\'en la rose', '9.90', '1', 'assets\\img\\drink4.jpg', 2),
(17, 'Vin Blanc', 'Vin Blanc de montagne', '9.90', '1', 'assets\\img\\drink4.jpg', 2),
(22, 'Pizza Fromage', 'Patte Fine sauce tomate et salade', '11.50', '36', 'assets/mg/about1.jpg', 1),
(23, 'Pizza fromages marguerite', 'Chaîne de pizzérias offrant des pizzas au mètre, paninis et pâtes dans un cadre fonctionnel ou à emporter.', '8.00', '24', 'assets\\img\\about1.jpg', 1),
(24, 'Pizza fromages marguerite', 'Chaîne de pizzérias offrant des pizzas au mètre, paninis et pâtes dans un cadre fonctionnel ou à emporter.', '11.50', '36', 'assets\\img\\about1.jpg', 1),
(25, 'Pizza fromages marguerite', 'Chaîne de pizzérias offrant des pizzas au mètre, paninis et pâtes dans un cadre fonctionnel ou à emporter.', '14.00', '42', 'assets\\img\\about1.jpg', 1),
(26, 'Pizza enfants ', 'Pizza spécialisé uniquement pour enfants', '8.00', '24', 'assets\\img\\pizza4.jpg', 1),
(27, 'Pizza enfants ', 'Pizza spécialisé uniquement pour enfants', '11.50', '36', 'assets\\img\\pizza4.jpg', 1),
(28, 'Pizza enfants', 'Pizza spécialisé uniquement pour enfants', '14.00', '42', 'assets\\img\\pizza4.jpg', 1),
(30, 'La Glace Chocolat', 'Un sorbet ou sorbet glacé est un entremets glacé qui, contrairement à la crème glacée, ne contient pas de crème, de lait ou de jaune d\'œuf. Souvent consommé comme dessert, il est préparé à partir d\'une purée ou d\'un jus de fruits auquel on ajoute un sirop de sucre\r\n', '3.90', NULL, 'assets\\img\\sweet3.jpg', 3),
(31, 'La glace sorbet à la fraise', 'Un sorbet ou sorbet glacé est un entremets glacé qui, contrairement à la crème glacée, ne contient pas de crème, de lait ou de jaune d\'œuf. Souvent consommé comme dessert, il est préparé à partir d\'une purée ou d\'un jus de fruits auquel on ajoute un sirop de sucre', '3.90', NULL, 'assets\\img\\sweet3.jpg', 3),
(32, 'La glace Vanille', 'La glace à la vanille ou crème glacée à la vanille est une crème glacée aromatisée à la vanille', '3.90', NULL, 'assets\\img\\sweet3.jpg', 3),
(33, 'la glace au chocolat', 'La glace au chocolat est une crème glacée à la saveur chocolatée', '3.90', NULL, 'assets\\img\\sweet3.jpg', 3),
(34, 'La glace sorbet à la fraise', 'Un sorbet ou sorbet glacé est un entremets glacé qui, contrairement à la crème glacée, ne contient pas de crème, de lait ou de jaune d\'œuf. Souvent consommé comme dessert, il est préparé à partir d\'une purée ou d\'un jus de fruits auquel on ajoute un sirop de sucre.', '3.90', NULL, 'assets\\img\\sweet3.jpg', 3),
(35, 'La glace à la vanille', 'La glace à la vanille ou crème glacée à la vanille est une crème glacée aromatisée à la vanille', '3.90', NULL, 'assets\\img\\sweet3.jpg', 3),
(36, 'La glace au chocolat', 'La glace au chocolat est une crème glacée à la saveur chocolatée', '3.90', NULL, 'assets\\img\\sweet3.jpg', 3);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`Id_customer`) REFERENCES `customer` (`id`);

--
-- Contraintes pour la table `commande_produit`
--
ALTER TABLE `commande_produit`
  ADD CONSTRAINT `commande_produit_ibfk_1` FOREIGN KEY (`Id_produit`) REFERENCES `produit` (`id`),
  ADD CONSTRAINT `commande_produit_ibfk_2` FOREIGN KEY (`Id_commande`) REFERENCES `commande` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`Id_category`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
