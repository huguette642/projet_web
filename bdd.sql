-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 15 Mai 2023 à 00:22
-- Version du serveur :  5.7.41-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Projet_web`
--

-- -----------------------------------------------------------------


--
-- Structure table `Customer`
--
CREATE TABLE `Customer` (
`Name` varchar(255) NOT NULL COMMENT 'Nom du client.',
`Logo` longblob COMMENT 'Logo du client.',
`Seller_expense` decimal(4,2) COMMENT 'Frais vendeur.',
`Buyer_expense` decimal(4,2) COMMENT 'Frais acheteur.',
`Link` varchar(500) COMMENT 'Lien vers le site du client.',
PRIMARY KEY (`Name`)
)

-- -----------------------------------------------------------------

--
-- Structure de la table `Stock`
--

CREATE TABLE `Stock`(
    `Idshoes` int(4) PRIMARY KEY COMMENT "Identifiant paire de chaussure",
    `Name` varchar(255) COMMENT "Nom de la paire",
    `Size` decimal(4,2) COMMENT "Taille de la paire",
    `Retail-price` decimal(6,2) COMMENT "Prix d'achat de la paire",
    `Resale_price` decimal(6,2) COMMENT "Prix de vente de la paire",
    `Retail_date` date COMMENT "Date d'achat",
    `Resale_date` date COMMENT "Date de vente",
    `Resale_time` int(4) COMMENT "Temps de vente de la paire ne nombre de jours",
    `Customer` varchar(255) COMMENT "Nom du client",
    `Sale` boolean COMMENT "1 si la paire est vendu, 0 si non",
    FOREIGN KEY (`Customer`) REFERENCES Customer(`Name`)
)
