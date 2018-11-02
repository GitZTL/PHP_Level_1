-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 02 2018 г., 20:04
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
-- База данных: `php_2_lesson_3`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `path`, `name`) VALUES
(1, '../public/img/', '1.jpg'),
(2, '../public/img/', '2.jpg'),
(3, '../public/img/', '3.jpg'),
(4, '../public/img/', '4.jpg'),
(5, '../public/img/', '5.jpg'),
(6, '../public/img/', '6.jpg'),
(7, '../public/img/', '7.jpg'),
(8, '../public/img/', '8.jpg'),
(9, '../public/img/', '9.jpg'),
(10, '../public/img/', '10.jpg'),
(11, '../public/img/', '11.jpg'),
(12, '../public/img/', '12.jpg'),
(13, '../public/img/', '13.jpg'),
(14, '../public/img/', '14.jpg'),
(15, '../public/img/', '15.jpg'),
(16, '../public/img/', '16.jpg'),
(17, '../public/img/', '17.jpg'),
(18, '../public/img/', '18.jpg'),
(19, '../public/img/', '19.jpg'),
(20, '../public/img/', '20.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
