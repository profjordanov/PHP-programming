-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Време на генериране: 
-- Версия на сървъра: 5.6.14
-- Версия на PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- БД: `ue`
--

-- --------------------------------------------------------

--
-- Структура на таблица `disciplini`
--

CREATE TABLE IF NOT EXISTS `disciplini` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_spec` tinyint(4) NOT NULL,
  `ime` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Схема на данните от таблица `disciplini`
--

INSERT INTO `disciplini` (`id`, `id_spec`, `ime`) VALUES
(1, 1, 'икономическа психология'),
(2, 1, 'икономическа социология'),
(3, 1, 'история на икономиката'),
(4, 1, 'кариерно развитие'),
(5, 1, 'макроикономика'),
(6, 1, 'теория на управлението'),
(7, 2, 'въведение в програмирането'),
(8, 2, 'дискретна математика'),
(9, 2, 'компютърни архитектури'),
(10, 2, 'математически анализ'),
(11, 2, 'мултимедия'),
(12, 3, 'глобализация'),
(13, 3, 'икономическа психология'),
(14, 3, 'икономическа социология'),
(15, 3, 'история на икономиката'),
(16, 3, 'кариерно развитие'),
(17, 3, 'макроикономика'),
(18, 3, 'основи на правото'),
(19, 3, 'теория на управлението');

-- --------------------------------------------------------

--
-- Структура на таблица `specialnosti`
--

CREATE TABLE IF NOT EXISTS `specialnosti` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `ime` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Схема на данните от таблица `specialnosti`
--

INSERT INTO `specialnosti` (`id`, `ime`) VALUES
(1, 'БИС'),
(2, 'Информатика'),
(3, 'Финанси');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
