-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 24 août 2021 à 13:24
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pizza_test`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `img_path` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `img_path`) VALUES
(1, 'Nos Pizzas', ''),
(2, 'Nos Boissons', ''),
(3, 'Nos Desserts', '');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `details` text COLLATE utf8mb4_general_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` float NOT NULL,
  `img_path` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `category_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_category` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `details`, `size`, `price`, `img_path`, `category_id`) VALUES
(1, 'La Chèvre', 'Lorem ipsum dolor sit amet. In dolore repellendus vel nisi libero id omnis reprehenderit. Et molestias consequatur aut deleniti natus vel commodi officia. In iure rerum a iure maiores ea nesciunt ipsam quo autem dolorum.', '24', 8, 'assets\\img\\discover1.jpg', 1),
(2, 'La Chèvre', 'Lorem ipsum dolor sit amet. In dolore repellendus vel nisi libero id omnis reprehenderit. Et molestias consequatur aut deleniti natus vel commodi officia. In iure rerum a iure maiores ea nesciunt ipsam quo autem dolorum.', '36', 11.5, 'assets\\img\\discover1.jpg', 1),
(3, 'La Chèvre', 'Lorem ipsum dolor sit amet. In dolore repellendus vel nisi libero id omnis reprehenderit. Et molestias consequatur aut deleniti natus vel commodi officia. In iure rerum a iure maiores ea nesciunt ipsam quo autem dolorum.', '42', 14, 'assets\\img\\discover1.jpg', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
