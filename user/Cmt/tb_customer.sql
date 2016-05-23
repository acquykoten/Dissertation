-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Dim 07 Décembre 2014 à 02:25
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `demo`
--

-- --------------------------------------------------------

--
-- Structure de la table `tb_customer`
--

CREATE TABLE IF NOT EXISTS `tb_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `tb_customer`
--

INSERT INTO `tb_customer` (`id`, `name`, `website`) VALUES
(1, 'Nguyễn Văn Cường', 'freetuts.net'),
(2, 'Trương Phúc Hoài Minh', 'freetuts.net'),
(3, 'Đặng Văn Chương', 'freetuts.net'),
(4, 'Trương Tấn Thành', 'freetuts.net'),
(5, 'Lâm văn Lang', 'demo.com'),
(6, 'Nguyễn Văn Kiệt', 'ajax.com'),
(7, 'Nguyễn Thị Nở', 'thimau.com'),
(8, 'Đặng Thị Thoa', 'scrolling.com'),
(9, 'Trương Văn Kiệt', 'ajaxscrolling.com'),
(10, 'Đặng Thị Tâm', 'nono.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
