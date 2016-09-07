-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 06 Septembre 2016 à 23:30
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE IF NOT EXISTS `cv` (
  `idcv` int(11) NOT NULL AUTO_INCREMENT,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP,
  `num_version` int(11) DEFAULT NULL,
  `accroche` varchar(45) DEFAULT NULL,
  `idutilisateur` int(11) NOT NULL,
  PRIMARY KEY (`idcv`),
  KEY `fk_cv_utilisateur_idx` (`idutilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `cv`
--

INSERT INTO `cv` (`idcv`, `date_creation`, `num_version`, `accroche`, `idutilisateur`) VALUES
(1, '2016-09-06 09:16:00', 0, 'Developpeur web', 1),
(2, '2016-09-06 11:07:03', 0, 'Assistant Photographe', 1),
(3, '2016-09-06 11:07:09', 0, 'Web designer', 1);

-- --------------------------------------------------------

--
-- Structure de la table `rubrique`
--

CREATE TABLE IF NOT EXISTS `rubrique` (
  `idrubrique` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) DEFAULT NULL,
  `contenu` longtext,
  `idcv` int(11) NOT NULL,
  PRIMARY KEY (`idrubrique`),
  KEY `fk_rubrique_cv1_idx` (`idcv`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `rubrique`
--

INSERT INTO `rubrique` (`idrubrique`, `titre`, `contenu`, `idcv`) VALUES
(1, 'Formation', 'BTS SIO – Lycée privée technologique sainte Ursule, Caen\r\n- Spécialité : SLAM (Solution logicielle Application Métier)\r\n', 1),
(2, 'Experience professionnelle', 'Janv. - Fév. 2016 Agnès recup’art – Développeur – Caen\r\n- Refonte d’un site (HTML/CSS, PHP)\r\n- Intégration Template\r\n- Conception du Front-Office', 1),
(3, 'Formation', '2014 Baccalauréat STMG – Lycée Younoussa Bamana – Mamoudzou\r\n- Spécialité : SIG (Système d’Information de Gestion)', 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idutilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `adresse` longtext,
  `cp` varchar(5) DEFAULT NULL,
  `ville` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `fixe` varchar(10) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `pseudo` varchar(45) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idutilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idutilisateur`, `nom`, `prenom`, `adresse`, `cp`, `ville`, `email`, `fixe`, `mobile`, `pseudo`, `mdp`) VALUES
(1, 'Rachidi', 'Aboudou', 'Residence e.bacot\r\nbat B, apt 33\r\n10 bd marechal juin', '14000', 'Caen', 'ofcl-aboud976@live.fr', '0269632942', '0782942894', 'aboud976', '123456'),
(2, 'Ladakpo', 'jibril', 'caen lycée sainte ursule', '14000', 'Caen', 'admin@local.fr', '0782999999', '782999999', 'jibjib', '123456'),
(3, 'Jackson', 'Michael', 'neverland californie', '90089', 'Californie', 'admin@local.fr', '01xxxxxxxx', '02xxxxxxxx', 'MJ', '123456');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `fk_cv_utilisateur` FOREIGN KEY (`idutilisateur`) REFERENCES `utilisateur` (`idutilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `rubrique`
--
ALTER TABLE `rubrique`
  ADD CONSTRAINT `fk_rubrique_cv1` FOREIGN KEY (`idcv`) REFERENCES `cv` (`idcv`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
