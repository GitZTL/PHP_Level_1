-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 07 2018 г., 01:29
-- Версия сервера: 5.6.38
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop111`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `fio` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `fio`, `email`, `text`, `date`) VALUES
(7, 'Roman', 'qwerty@mail.ru', 'Super!', '2017-10-28 15:44:53'),
(8, 'Roman', 'erer@mail.ru', '111111', '2017-10-28 15:46:34'),
(9, '11', '222@mail.ru', '333', '2017-10-28 18:49:03');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `src` varchar(255) NOT NULL,
  `small_src` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `description`, `price`, `src`, `small_src`, `is_active`) VALUES
(16, 'Ноутбук 1', 'тест', 11111, 'uploads/1.jpg', 'uploads/mini/1-min.jpg', 1),
(17, 'Ноутбук 2', 'тест', 50000, 'uploads/2.jpg', 'uploads/mini/2-min.jpg', 1),
(18, 'Ноутбук 3', 'тест', 58000, 'uploads/3.jpg', 'uploads/mini/3-min.jpg', 1),
(19, ' Ноутбук 4', 'тест', 84000, 'uploads/4.jpg', 'uploads/mini/4-min.jpg', 1),
(20, 'Ноутбук 5', 'тест', 48000, 'uploads/5.jpg', 'uploads/mini/5-min.jpg', 1),
(21, 'Ноутбук 6', 'тест', 20000, 'uploads/6.jpg', 'uploads/mini/6-min.jpg', 1),
(22, 'Ноутбук 7', 'тест', 63000, 'uploads/7.jpg', 'uploads/mini/7-min.jpg', 1),
(23, 'Ноутбук 8', 'тест', 12000, 'uploads/8.jpg', 'uploads/mini/8-min.jpg', 1),
(24, 'Ноутбук 9', 'тест', 15000, 'uploads/9.jpg', 'uploads/mini/9-min.jpg', 1),
(25, 'Ноутбук 10', 'тест', 8000, 'uploads/10.jpg', 'uploads/mini/10-min.jpg', 1),
(26, 'Ноутбук 11', 'тест', 5000, 'uploads/11.jpg', 'uploads/mini/11-min.jpg', 1),
(27, 'Ноутбук 12', 'тест', 18000, 'uploads/12.jpg', 'uploads/mini/12-min.jpg', 1),
(28, 'Ноутбук 13', 'тест', 87000, 'uploads/13.jpg', 'uploads/mini/13-min.jpg', 1),
(29, 'Ноутбук 14', 'тест', 58000, 'uploads/14.jpg', 'uploads/mini/14-min.jpg', 1),
(30, 'Ноутбук 15', 'тест', 87000, 'uploads/15.jpg', 'uploads/mini/15-min.jpg', 1),
(31, 'Ноутбук 16', 'тест', 45000, 'uploads/16.jpg', 'uploads/mini/16-min.jpg', 1),
(32, 'Ноутбук 17', 'тест', 84000, 'uploads/17.jpg', 'uploads/mini/18-min.jpg', 1),
(33, 'Ноутбук 19', 'тест', 45000, 'uploads/19.jpg', 'uploads/mini/19-min.jpg', 1),
(34, 'Ноутбук 20', 'тест', 46000, 'uploads/20.jpg', 'uploads/mini/20-min.jpg', 1),
(35, 'Ноутбук 21', 'тест', 65000, 'uploads/21.jpg', 'uploads/mini/21-min.jpg', 1),
(36, 'Ноутбук 22', 'тест', 45000, 'uploads/22.jpg', 'uploads/mini/22-min.jpg', 1),
(37, 'Ноутбук 23', 'тест', 24000, 'uploads/23.jpg', 'uploads/mini/23-min.jpg', 1),
(38, 'Ноутбук 24', 'тест', 32600, 'uploads/24.jpg', 'uploads/mini/24-min.jpg', 1),
(39, 'Ноутбук 25', 'тест', 14000, 'uploads/25.jpg', 'uploads/mini/25-min.jpg', 1),
(40, 'Ноутбук 26', 'тест', 47000, 'uploads/26.jpg', 'uploads/mini/26-min.jpg', 1),
(41, 'Ноутбук 27', 'тест', 47000, 'uploads/27.jpg', 'uploads/mini/27-min.jpg', 1),
(42, 'Ноутбук 28', 'тест', 32000, 'uploads/28.jpg', 'uploads/mini/28-min.jpg', 1),
(43, 'Ноутбук 29', 'тест', 14000, 'uploads/29.jpg', 'uploads/mini/29-min.jpg', 1),
(44, 'Ноутбук 30', 'тест', 8000, 'uploads/30', 'uploads/mini/30-min.jpg', 1),
(45, 'Ноутбук 31', 'тест', 7800, 'uploads/31.jpg', 'uploads/mini/31-min.jpg', 1),
(46, 'Ноутбук 32', 'тест', 7800, 'uploads/32.jpg', 'uploads/mini/32-min.jpg', 1),
(47, 'Ноутбук 33', 'тест', 8700, 'uploads/33.jpg', 'uploads/mini/33-min.jpg', 1),
(48, 'Ноутбук 34', 'тест', 7900, 'uploads/34.jpg', 'uploads/mini/34-min.jpg', 1),
(49, 'Ноутбук 35', 'тест', 7900, 'uploads/35.jpg', 'uploads/mini/35-min.jpg', 1),
(50, 'Ноутбук 36', 'тест', 4900, 'uploads/36.jpg', 'uploads/mini/36-min.jpg', 1),
(51, 'Ноутбук 37', 'тест', 49000, 'uploads/37.jpg', 'uploads/mini/37-min.jpg', 1),
(52, 'Ноутбук 38', 'тест', 41000, 'uploads/38.jpg', 'uploads/mini/38-min.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  `small_src` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`, `src`, `small_src`, `size`, `count`) VALUES
(32, '1.jpg', 'uploads/1.jpg', 'uploads/mini/1-min.jpg', 50232, 1),
(33, '2.jpg', 'uploads/2.jpg', 'uploads/mini/2-min.jpg', 759342, 0),
(34, '3.jpg', 'uploads/3.jpg', 'uploads/mini/3-min.jpg', 108256, 0),
(35, '4.jpg', 'uploads/4.jpg', 'uploads/mini/4-min.jpg', 2585, 0),
(36, '5.jpg', 'uploads/5.jpg', 'uploads/mini/5-min.jpg', 89847, 0),
(37, '6.jpg', 'uploads/6.jpg', 'uploads/mini/6-min.jpg', 888, 0),
(38, '7.jpg', 'uploads/7.jpg', 'uploads/mini/7-min.jpg', 245, 0),
(39, '8.jpg', 'uplaods/8.jpg', 'uploads/mini/8-min.jpg', 98749, 0),
(40, '9.jpg', 'uploads/9.jpg', 'uploads/mini/9-min.jpg', 2454, 0),
(41, '10.jpg', 'uploads/10.jpg', 'uploads/mini/10-min.jpg', 111, 0),
(42, '11.jpg', 'uploads/11.jpg', 'uploads/mini/11-min.jpg', 8888, 0),
(43, '12.jpg', 'uploads/12.jpg', 'uploads/mini/12-min.jpg', 258, 0),
(44, '13.jpg', 'uploads/13.jpg', 'uploads/mini/13-min.jpg', 333, 0),
(45, '14.jpg', 'uploads/14.jpg', 'uploads/mini/14-min.jpg', 887, 0),
(46, '15.jpg', 'uploads/15.jpg', 'uploads/mini/15-min.jpg', 98798, 0),
(47, '16.jpg', 'uploads/16.jpg', 'uploads/mini/16-min.jpg', 788, 0),
(48, '17.jpg', 'uploads/17.jpg', 'uploads/mini/17-min.jpg', 987, 0),
(49, '18.jpg', 'uploads/18.jpg', 'uploads/mini/18-min.jpg', 0, 0),
(50, '19.jpg', 'uploads/19.jpg', 'uploads/mini/19-min.jpg', 3598, 0),
(51, '20.jpg', 'uploads/20.jpg', 'uploads/mini/20-min.jpg', 987, 0),
(52, '21.jpg', 'uploads/21.jpg', 'uploads/mini/21-min.jpg', 214, 0),
(53, '22.jpg', 'uploads/22.jpg', 'uploads/mini/22-min.jpg', 8798, 0),
(54, '23.jpg', 'uploads/23.jpg', 'uploads/mini/23-min.jpg', 8778, 0),
(55, '24.jpg', 'uploads/24.jpg', 'uploads/mini/24-min.jpg', 49, 0),
(56, '25.jpg', 'uploads/25.jpg', 'uploads/mini/25-min.jpg', 46854, 0),
(57, '26.jpg', 'uploads/26.jpg', 'uploads/mini/26-min.jpg', 56498, 0),
(58, '27.jpg', 'uploads/27.jpg', 'uploads/mini/27-min.jpg', 898, 0),
(59, '28.jpg', 'uploads/28.jpg', 'uploads/mini/28-min.jpg', 98498, 0),
(60, '29.jpg', 'uploads/29.jpg', 'uploads/mini/29-min.jpg', 8998, 0),
(61, '30.jpg', 'uploads/30.jpg', 'uploads/mini/30-min.jpg', 98, 0),
(62, '31.jpg', 'uploads/31.jpg', 'uploads/mini/31-min.jpg', 84, 0),
(63, '32.jpg', 'uploads/32.jpg', 'uploads/mini/32-min.jpg', 9879, 0),
(64, '33.jpg', 'uploads/33.jpg', 'uploads/mini/33-min.jpg', 584, 0),
(65, '34.jpg', 'uploads/34.jpg', 'uploads/mini/34-min.jpg', 987, 0),
(66, '35.jpg', 'uploads/35.jpg', 'uploads/mini/35-min.jpg', 6584, 0),
(67, '36.jpg', 'uploads/36.jpg', 'uploads/mini/36-min.jpg', 5588, 0),
(68, '37.jpg', 'uploads/37.jpg', 'uploads/mini/37-min.jpg', 8445, 0),
(69, '38.jpg', 'uploads/38.jpg', 'uploads/mini/38-min.jpg', 898, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `src` (`src`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
