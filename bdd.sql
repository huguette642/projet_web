-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 01 juin 2023 à 19:44
-- Version du serveur :  10.5.15-MariaDB-0+deb11u1
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Projet_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `Customer`
--

CREATE TABLE `Customer` (
  `Name` varchar(255) NOT NULL COMMENT 'Nom du client.',
  `Seller_expense` decimal(4,2) DEFAULT NULL COMMENT 'Frais vendeur.',
  `Buyer_expense` decimal(4,2) DEFAULT NULL COMMENT 'Frais acheteur.',
  `Link` varchar(500) DEFAULT NULL COMMENT 'Lien vers le site du client.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Customer`
--

INSERT INTO `Customer` (`Name`, `Seller_expense`, `Buyer_expense`, `Link`) VALUES
('StockX', '12.00', '15.00', 'https://www.stockx.com');

-- --------------------------------------------------------

--
-- Structure de la table `Stock`
--

CREATE TABLE `Stock` (
  `Idshoes` int(4) NOT NULL COMMENT 'Identifiant paire de chaussure',
  `Name` varchar(255) DEFAULT NULL COMMENT 'Nom de la paire',
  `Size` decimal(4,2) DEFAULT NULL,
  `Retail_price` decimal(6,2) DEFAULT NULL,
  `Resale_price` decimal(6,2) DEFAULT NULL COMMENT 'Prix de vente de la paire',
  `Retail_date` date DEFAULT NULL COMMENT 'Date d''achat',
  `Resale_date` date DEFAULT NULL COMMENT 'Date de vente',
  `Customer` varchar(255) DEFAULT NULL COMMENT 'Nom du client',
  `Sale` tinyint(1) DEFAULT NULL COMMENT '1 si la paire est vendu, 0 si non'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Stock`
--

INSERT INTO `Stock` (`Idshoes`, `Name`, `Size`, `Retail_price`, `Resale_price`, `Retail_date`, `Resale_date`, `Customer`, `Sale`) VALUES
(1, 'Nike dunk low \"University blue\"', '44.50', '90.00', NULL, '2023-03-28', NULL, NULL, 0),
(2, 'Adidas predator', '34.00', '50.00', '100.00', '2023-04-06', '2023-06-01', 'StockX', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`Name`);

--
-- Index pour la table `Stock`
--
ALTER TABLE `Stock`
  ADD PRIMARY KEY (`Idshoes`),
  ADD KEY `Customer` (`Customer`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Stock`
--
ALTER TABLE `Stock`
  MODIFY `Idshoes` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant paire de chaussure', AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Stock`
--
ALTER TABLE `Stock`
  ADD CONSTRAINT `Stock_ibfk_1` FOREIGN KEY (`Customer`) REFERENCES `Customer` (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
