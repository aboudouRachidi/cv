-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 05 Septembre 2016 à 23:54
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
-- Structure de la table `details_loisirs`
--

CREATE TABLE IF NOT EXISTS `details_loisirs` (
  `iddetails_loisirs` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`iddetails_loisirs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `experience_pro`
--

CREATE TABLE IF NOT EXISTS `experience_pro` (
  `idexperience_pro` int(11) NOT NULL AUTO_INCREMENT,
  `entreprise` varchar(45) DEFAULT NULL,
  `annee_debut` date DEFAULT NULL,
  `annee_fin` date DEFAULT NULL,
  `poste` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idexperience_pro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `experience_pro`
--

INSERT INTO `experience_pro` (`idexperience_pro`, `entreprise`, `annee_debut`, `annee_fin`, `poste`) VALUES
(1, 'Agnes Recup''art', '2016-01-04', '2016-02-05', 'Developpeur web'),
(2, 'Agnes Recup''art', '2015-05-25', '2015-06-26', 'Developpeur web'),
(3, 'BV photos', NULL, NULL, 'Assistant Photographe');

-- --------------------------------------------------------

--
-- Structure de la table `experience_pro_has_mission`
--

CREATE TABLE IF NOT EXISTS `experience_pro_has_mission` (
  `experience_pro_idexperience_pro` int(11) NOT NULL,
  `mission_idmission` int(11) NOT NULL,
  PRIMARY KEY (`experience_pro_idexperience_pro`,`mission_idmission`),
  KEY `fk_experience_pro_has_mission_mission1_idx` (`mission_idmission`),
  KEY `fk_experience_pro_has_mission_experience_pro_idx` (`experience_pro_idexperience_pro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `idformation` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) DEFAULT NULL,
  `annee_debut` date DEFAULT NULL,
  `annee_fin` date DEFAULT NULL,
  `etablissement` varchar(45) DEFAULT NULL,
  `lieu` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idformation`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`idformation`, `libelle`, `annee_debut`, `annee_fin`, `etablissement`, `lieu`) VALUES
(1, 'Baccalaureat STMG', '2013-08-28', '2014-07-04', 'lycée younoussa bamana', 'Mamoudzou (Mayotte)'),
(2, 'BTS SIO', '2014-09-02', '2017-07-07', 'Lycée sainte ursule', 'Caen');

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

CREATE TABLE IF NOT EXISTS `langue` (
  `idlangue` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) DEFAULT NULL,
  `niveau` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idlangue`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `langue`
--

INSERT INTO `langue` (`idlangue`, `libelle`, `niveau`) VALUES
(1, 'Anglais', 'Niveau scolaire');

-- --------------------------------------------------------

--
-- Structure de la table `loisirs`
--

CREATE TABLE IF NOT EXISTS `loisirs` (
  `idloisirs` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idloisirs`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `loisirs`
--

INSERT INTO `loisirs` (`idloisirs`, `libelle`) VALUES
(1, 'Tennis');

-- --------------------------------------------------------

--
-- Structure de la table `loisirs_has_details_loisirs`
--

CREATE TABLE IF NOT EXISTS `loisirs_has_details_loisirs` (
  `loisirs_idloisirs` int(11) NOT NULL,
  `details_loisirs_iddetails_loisirs` int(11) NOT NULL,
  PRIMARY KEY (`loisirs_idloisirs`,`details_loisirs_iddetails_loisirs`),
  KEY `fk_loisirs_has_details_loisirs_details_loisirs1_idx` (`details_loisirs_iddetails_loisirs`),
  KEY `fk_loisirs_has_details_loisirs_loisirs1_idx` (`loisirs_idloisirs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mission`
--

CREATE TABLE IF NOT EXISTS `mission` (
  `idmission` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idmission`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `idprofil` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `adresse` longtext,
  `cp` varchar(5) DEFAULT NULL,
  `ville` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idprofil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `profil`
--

INSERT INTO `profil` (`idprofil`, `nom`, `prenom`, `adresse`, `cp`, `ville`, `email`) VALUES
(1, 'Rachidi', 'Aboudou', 'Residence e.bacot\r\nbat B, apt 33\r\n10 bd marechal juin', '14000', 'Caen', 'ofcl-aboud976@live.fr');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `experience_pro_has_mission`
--
ALTER TABLE `experience_pro_has_mission`
  ADD CONSTRAINT `fk_experience_pro_has_mission_experience_pro` FOREIGN KEY (`experience_pro_idexperience_pro`) REFERENCES `experience_pro` (`idexperience_pro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_experience_pro_has_mission_mission1` FOREIGN KEY (`mission_idmission`) REFERENCES `mission` (`idmission`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `loisirs_has_details_loisirs`
--
ALTER TABLE `loisirs_has_details_loisirs`
  ADD CONSTRAINT `fk_loisirs_has_details_loisirs_loisirs1` FOREIGN KEY (`loisirs_idloisirs`) REFERENCES `loisirs` (`idloisirs`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_loisirs_has_details_loisirs_details_loisirs1` FOREIGN KEY (`details_loisirs_iddetails_loisirs`) REFERENCES `details_loisirs` (`iddetails_loisirs`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
