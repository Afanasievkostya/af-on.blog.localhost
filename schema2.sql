USE `af-on.blog`;

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content_info` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `date` int(10),
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `ok` enum('0','1') NOT NULL DEFAULT '0',
  `bad`  enum('0','1') NOT NULL DEFAULT '0',
  `sums` int(10),
  `hits` int(10),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------
--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `name`, `image`, `content_info`, `content`, `date`, `keywords`, `description`, `ok`, `bad`, `sums`, `hits`) VALUES
(1, 1, 'Парк "Кузминки"', 'img2.jpg',  'Усадьба «Кузьминки», возникшая в XVIII веке на бывших землях Симонова и Николо-Угрешского монастырей, в течение двух столетий принадлежала баронам Строгановым и князьям Голицыным.', 'Усадьба «Кузьминки», возникшая в XVIII веке на бывших землях Симонова и Николо-Угрешского монастырей, в течение двух столетий принадлежала баронам Строгановым и князьям Голицыным.
К XX веку на территории Кузьминок сохранилось более 20 памятников архитектуры. Среди них сохранились в руинированном состоянии кузница и теплица. В аварийном состоянии Оранжерея, дворцовые флигели, Скотный и Конный дворы. Требующие безотлагательных восстановительных и реставрационных работ — Музыкальный и Египетский павильоны. Полностью утрачена парковая скульптура. Исчезла две трети металлических изделий, украшавших Кузьминский парк. Английский парк был запущен, французский парк относительно благоустроен.', '10.10.1020', NULL, NULL, '0', '0', NULL, NULL),
(2, 1, 'Специальный заголовок2', 'no-image.png',  'With supporting text below as a natural lead-in to additional content.', 'With supporting text below as a natural lead-in to additional content.', '10.10.1020', NULL, NULL, '0', '0', NULL, NULL),
(3, 3, 'Специальный заголовок3', 'no-image.png',  'With supporting text below as a natural lead-in to additional content.', 'With supporting text below as a natural lead-in to additional content.', '10.10.1020', NULL, NULL, '0', '0', NULL, NULL),
(4, 4, 'Специальный заголовок4', 'no-image.png',  'With supporting text below as a natural lead-in to additional content.', 'With supporting text below as a natural lead-in to additional content.', '10.10.1020', NULL, NULL, '0', '0', NULL, NULL),
(5, 5, 'Специальный заголовок5', 'no-image.png',  'With supporting text below as a natural lead-in to additional content.', 'With supporting text below as a natural lead-in to additional content.', '10.10.1020', NULL, NULL, '0', '0', NULL, NULL),
(6, 6, 'Специальный заголовок6', 'no-image.png',  'With supporting text below as a natural lead-in to additional content.', 'With supporting text below as a natural lead-in to additional content.', '10.10.1020', NULL, NULL, '0', '0', NULL, NULL),
(7, 7, 'Специальный заголовок7', 'no-image.png',  'With supporting text below as a natural lead-in to additional content.', 'With supporting text below as a natural lead-in to additional content.', '10.10.1020', NULL, NULL, '0', '0', NULL, NULL);
