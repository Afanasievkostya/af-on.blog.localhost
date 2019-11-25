USE `af-on.blog`;

--
-- Структура таблицы `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_video_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `date` int(10),
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `views` int(10),
  `active`  enum('0','1') NOT NULL DEFAULT '0',
  `archive`  enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;
