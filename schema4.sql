USE `af-on.blog`;
--
-- Структура таблицы `category-video`
--

CREATE TABLE IF NOT EXISTS `category_video` (
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

INSERT INTO `category_video` (`id`, `parent_id`, `name`, `keywords`, `description`) VALUES
(1, 0, 'Путешествие', NULL, NULL),
(2, 0, 'Семья', 'семья ключевики...', 'семья описание...'),
(3, 0, 'Разное', NULL, NULL);
