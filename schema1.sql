SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



--
-- База данных: `af-on.blog`
--
CREATE DATABASE IF NOT EXISTS `af-on.blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `af-on.blog`;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `keywords`, `description`) VALUES
(1, 0, 'Рождённый в СССР', NULL, NULL),
(2, 0, 'Путешествие', NULL, NULL),
(3, 0, 'Семья', 'семья ключевики...', 'семья описание...'),
(4, 0, 'Политика', NULL, NULL),
(5, 3, 'В мире', NULL, NULL),
(6, 3, 'В стране', NULL, NULL),
(7, 0, 'Разное', NULL, NULL);
