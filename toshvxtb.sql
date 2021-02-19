-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 24 2021 г., 19:23
-- Версия сервера: 10.4.10-MariaDB
-- Версия PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `toshvxtb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `viewed` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `title`, `description`, `content`, `date`, `image`, `viewed`, `user_id`, `status`) VALUES
(1, 'article 1', '<p>d1</p>\r\n', '<p>c1</p>\r\n', '2020-09-19', '80b209f19a96a24a2120d25b06b2787b.jpg', 9, 1, NULL),
(2, 'title 2', '<p>ddf</p>\r\n', '<p>dsfsd</p>\r\n', '2020-09-19', '9b98fbd8cc013add1c1dc9cd759adf4b.jpg', 12, 1, NULL),
(3, 'sdfkkdskjh', 'hdsjkfhs', 'fdjskfhjsk', '2020-09-19', 'd3a220b1f43280db21d4ffbad0d52fcb.jpg', 4, 1, NULL),
(4, 'tt3', 'tt3', 'cc3', '2020-09-20', '9262fa630e3f2108dd14775ed10e7dde.jpg', 5, 1, NULL),
(6, 'new article test', '<p>dmamd</p>\r\n', '<p>kldsfklsf</p>\r\n', '2020-10-11', 'd5d27aee37899b50df6001d7ae2e3e63.jpg', 2, 1, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

DROP TABLE IF EXISTS `migration`;
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1611508455),
('m200904_115619_create_article_table', 1611508460),
('m200904_120625_create_user_table', 1611508460);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `isAdmin` int(11) DEFAULT 0,
  `photo` varchar(255) DEFAULT NULL,
  `authKey` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `isAdmin`, `photo`, `authKey`) VALUES
(1, 'ikrom', 'ikrom@mail.ru', '12345', 1, NULL, NULL),
(2, 'test', 'test@mail.ru', 'test1234', 0, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
