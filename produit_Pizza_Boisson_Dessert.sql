-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 25 août 2021 à 06:41
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
-- Base de données : `test`
--

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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

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
(21, 'Pizza enfants', 'Pizza spécialement conçu pour le tout-petit', '7.50', NULL, 'assets\\img\\pizza4.jpg', 1),
(22, 'Pizza Fromage', 'Patte Fine sauce tomate et salade', '11.50', '36', 'assets/mg/about1.jpg', 1),
(23, 'Pizza fromages marguerite', 'Chaîne de pizzérias offrant des pizzas au mètre, paninis et pâtes dans un cadre fonctionnel ou à emporter.', '8.00', '24', 'assets\\img\\about1.jpg', 1),
(24, 'Pizza fromages marguerite', 'Chaîne de pizzérias offrant des pizzas au mètre, paninis et pâtes dans un cadre fonctionnel ou à emporter.', '36.00', '12', 'assets\\img\\about1.jpg', 1),
(25, 'Pizza fromages marguerite', 'Chaîne de pizzérias offrant des pizzas au mètre, paninis et pâtes dans un cadre fonctionnel ou à emporter.', '14.00', '42', NULL, 1),
(12, 'Coca-cola', 'Boisson Fraîche', '3.00', '33', 'assets\\img\\drink3.jpg', 2),
(13, 'Schweppes', 'Boisson Fraîche Citron', '3.90', '33', 'assets\\img\\drink1.jpg', 2),
(14, 'Carlsberg', 'Boisson Fraîche alcoolisée', '4.50', '50', 'assets\\img\\drink2.jpg', 2),
(15, 'Vin Rouge ', 'Vin rouge issue du loiret', '9.90', '1', 'assets\\img\\drink4.jpg', 2),
(16, 'Vin Rose', 'Vin Rose qui s\'en la rose', '9.90', '1', 'assets\\img\\drink4.jpg', 2),
(17, 'Vin Blanc', 'Vin Blanc de montagne', '9.90', '1', 'assets\\img\\drink4.jpg', 2),
(18, 'La Glace sorbet et Fraise', 'Un sorbet ou sorbet glacé est un entremets glacé qui, contrairement à la crème glacée, ne contient pas de crème, de lait ou de jaune d\'œuf. Souvent consommé comme dessert, il est préparé à partir d\'une purée ou d\'un jus de fruits auquel on ajoute un sirop de sucre\r\n', '3.90', NULL, 'assets\\img\\sweet3.jpg', 3),
(19, 'La Glace Vanille', 'Un sorbet ou sorbet glacé est un entremets glacé qui, contrairement à la crème glacée, ne contient pas de crème, de lait ou de jaune d\'œuf. Souvent consommé comme dessert, il est préparé à partir d\'une purée ou d\'un jus de fruits auquel on ajoute un sirop de sucre\r\n', '3.90', NULL, 'assets\\img\\sweet3.jpg', 3),
(20, 'La Glace chocolat', 'Un sorbet ou sorbet glacé est un entremets glacé qui, contrairement à la crème glacée, ne contient pas de crème, de lait ou de jaune d\'œuf. Souvent consommé comme dessert, il est préparé à partir d\'une purée ou d\'un jus de fruits auquel on ajoute un sirop de sucre\r\n', '3.90', NULL, 'assets\\img\\sweet3.jpg', 3);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`Id_category`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
