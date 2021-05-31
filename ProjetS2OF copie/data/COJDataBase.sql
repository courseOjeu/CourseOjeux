-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 31, 2021 at 06:58 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `courseojeux`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajoute`
--

CREATE TABLE `ajoute` (
                          `id_jeu` int(11) NOT NULL,
                          `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
                             `id_categorie` int(11) NOT NULL,
                             `titre_categorie` varchar(50) DEFAULT NULL,
                             `libelle` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `don`
--

CREATE TABLE `don` (
                       `id_don` int(11) NOT NULL,
                       `nom` varchar(50) DEFAULT NULL,
                       `prenom` varchar(50) DEFAULT NULL,
                       `e_mail` varchar(50) DEFAULT NULL,
                       `adresse_postal` varchar(50) DEFAULT NULL,
                       `code_postal` varchar(50) DEFAULT NULL,
                       `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
                         `id_forum` int(11) NOT NULL,
                         `titre_forum` varchar(50) DEFAULT NULL,
                         `description_forum` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jeu`
--

CREATE TABLE `jeu` (
                       `id_jeu` int(11) NOT NULL,
                       `libelle` varchar(500) DEFAULT NULL,
                       `nom_jeu` varchar(50) DEFAULT NULL,
                       `image_jeu` varchar(50) DEFAULT NULL,
                       `date_jeu` date DEFAULT NULL,
                       `lien_affiliation` varchar(250) DEFAULT NULL,
                       `id_utilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jeu`
--

INSERT INTO `jeu` (`id_jeu`, `libelle`, `nom_jeu`, `image_jeu`, `date_jeu`, `lien_affiliation`, `id_utilisateur`) VALUES
(1, 'Avancez autour du plateau en achetant le plus de propriétés', 'Monopoly', NULL, '2021-05-15', NULL, NULL),
(2, 'Premier joueur lit une carte bleue contenant une phrase à trou(s)', 'Blanc Manger Coco', NULL, '2021-05-15', NULL, NULL),
(3, 'Soyez le premier à vous débarrasser de toutes vos cartes', 'UNO', NULL, '2021-05-15', NULL, NULL),
(4, 'Faites deviner aux autres joueurs le mot Mystère en donnant des Indices ', 'Code names', NULL, '2021-05-15', NULL, NULL),
(5, 'Un jeu pour adultes dont le but est de créer des associations de cartes plus drôles les unes que les autres', 'Limite limite', NULL, '2021-05-15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
                           `id_message` int(11) NOT NULL,
                           `texte_message` varchar(250) DEFAULT NULL,
                           `id_utilisateur` int(11) NOT NULL,
                           `id_sujet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sujet`
--

CREATE TABLE `sujet` (
                         `id_sujet` int(11) NOT NULL,
                         `titre_sujet` varchar(50) DEFAULT NULL,
                         `description_sujet` varchar(250) DEFAULT NULL,
                         `id_utilisateur` int(11) NOT NULL,
                         `id_forum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
                               `id_utilisateur` int(11) NOT NULL,
                               `prenom` varchar(50) DEFAULT NULL,
                               `identifiant` varchar(50) DEFAULT NULL,
                               `mot_de_passe` varchar(50) DEFAULT NULL,
                               `adresse_mail` varchar(50) DEFAULT NULL,
                               `nom` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `prenom`, `identifiant`, `mot_de_passe`, `adresse_mail`, `nom`) VALUES
(1, 'Nico', NULL, 'qsd', 'nlouisin@jn', 'Louisin'),
(2, 'Nico', NULL, '81b87be71decdd74ee12a34ad4c278b401bc2a09', 'nlouisin@jn', 'Louisin'),
(3, 'Nicolas', NULL, '81b87be71decdd74ee12a34ad4c278b401bc2a09', 'nlouisin@jnnkzd', 'Louisin'),
(4, 'Nicolas', NULL, '81b87be71decdd74ee12a34ad4c278b401bc2a09', 'nlouisin@jnnkzd', 'Louisin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajoute`
--
ALTER TABLE `ajoute`
    ADD PRIMARY KEY (`id_jeu`,`id_categorie`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
    ADD PRIMARY KEY (`id_categorie`);

--
-- Indexes for table `don`
--
ALTER TABLE `don`
    ADD PRIMARY KEY (`id_don`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
    ADD PRIMARY KEY (`id_forum`);

--
-- Indexes for table `jeu`
--
ALTER TABLE `jeu`
    ADD PRIMARY KEY (`id_jeu`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
    ADD PRIMARY KEY (`id_message`),
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `id_sujet` (`id_sujet`);

--
-- Indexes for table `sujet`
--
ALTER TABLE `sujet`
    ADD PRIMARY KEY (`id_sujet`),
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `id_forum` (`id_forum`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
    ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
    MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `don`
--
ALTER TABLE `don`
    MODIFY `id_don` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
    MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jeu`
--
ALTER TABLE `jeu`
    MODIFY `id_jeu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
    MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sujet`
--
ALTER TABLE `sujet`
    MODIFY `id_sujet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
    MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ajoute`
--
ALTER TABLE `ajoute`
    ADD CONSTRAINT `ajoute_ibfk_1` FOREIGN KEY (`id_jeu`) REFERENCES `jeu` (`id_jeu`),
  ADD CONSTRAINT `ajoute_ibfk_2` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`);

--
-- Constraints for table `don`
--
ALTER TABLE `don`
    ADD CONSTRAINT `don_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Constraints for table `jeu`
--
ALTER TABLE `jeu`
    ADD CONSTRAINT `jeu_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
    ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`id_sujet`) REFERENCES `sujet` (`id_sujet`);

--
-- Constraints for table `sujet`
--
ALTER TABLE `sujet`
    ADD CONSTRAINT `sujet_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `sujet_ibfk_2` FOREIGN KEY (`id_forum`) REFERENCES `forum` (`id_forum`);
