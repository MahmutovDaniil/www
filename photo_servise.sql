-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 29 2018 г., 18:38
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `photo_servise`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `autor` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `votes_up` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=103 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `text`, `autor`, `date`, `votes_up`) VALUES
(2, 'reyxstag.jpeg', 'Рейхстаг', 'Вот так это было! Далее комментарии излишни.', 'Совет', '2018-06-28 13:13:18', 15),
(3, 'baklagan.jpg', 'Баклажан', 'Вот это баклажан!', 'Фермер', '2018-06-28 13:08:35', 7),
(4, 'pomidory-i-ogurcy.jpg', 'Огурцы и помидоры.', 'Вот ОНИ - огурчики и помидорчики!', 'Фермер', '2018-06-28 13:13:16', 7),
(5, 'volf.jpg', 'белый волк', 'Примерно такой мне повстречался в тайге.', 'логин', '2018-06-29 13:27:45', 0),
(6, 'maxresdefault.jpg', 'Красный флаг над Рейхстагом.', 'Вот он - миг славы! После стольких мучений и невзгод мы наконец-то победили!', 'Совет', '2018-06-28 13:13:22', 10),
(102, 'bv.jpg', 'Чёрный волк', 'Видали какие красавцы ходят по лесу?', 'логин1', '2018-06-29 14:15:54', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `bal` char(255) NOT NULL DEFAULT '10',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `bal`) VALUES
(3, 'логин', 'mahmutov.daniil@mail.ru', 'пароль', '18'),
(4, 'логин1', 'mahmutov.daniil@mail.ru', 'пароль', '26'),
(5, 'Совет', 'mahmutov.daniil@mail.ru', 'пароль', '17'),
(6, 'Фермер', 'mahmutov.daniil@mail.ru', 'пароль', '12');

-- --------------------------------------------------------

--
-- Структура таблицы `vote_ip`
--

CREATE TABLE IF NOT EXISTS `vote_ip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_resp` int(11) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `date_resp` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
