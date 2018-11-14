-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 14 2018 г., 14:52
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
-- База данных: `php_2_lesson_6`
--

-- --------------------------------------------------------

--
-- Структура таблицы `img`
--

CREATE TABLE `img` (
  `id_img` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img`
--

INSERT INTO `img` (`id_img`, `path`, `name`) VALUES
(1, 'uploads/mini', '1-min.jpg'),
(2, 'uploads/mini', '2-min.jpg'),
(3, 'uploads/mini', '3-min.jpg'),
(4, 'uploads/mini', '4-min.jpg'),
(5, 'uploads/mini', '5-min.jpg'),
(6, 'uploads/mini', '6-min.jpg'),
(7, 'uploads/mini', '7-min.jpg'),
(8, 'uploads/mini', '8-min.jpg'),
(9, 'uploads/mini', '9-min.jpg'),
(10, 'uploads/mini', '10-min.jpg'),
(11, 'uploads/mini', '11.min.jpg'),
(12, 'uploads/mini', '12.min.jpg'),
(13, 'uploads/mini', '13-min.jpg'),
(14, 'uploads/mini', '14-min.jpg'),
(15, 'uploads/mini', '15-min.jpg'),
(16, 'uploads/mini', '16-min.jpg'),
(17, 'uploads/mini', '17-min.jpg'),
(18, 'uploads/mini', '18-min.jpg'),
(19, 'uploads/mini', '19-min.jpg'),
(20, 'uploads/mini', '20-min.jpg'),
(21, 'uploads/mini', '21-min.jpg'),
(22, 'uploads/mini', '22-min.jpg'),
(23, 'uploads/mini', '23-min.jpg'),
(24, 'uploads/mini', '24-min.jpg'),
(25, 'uploads/mini', '25-min.jpg'),
(26, 'uploads/mini', '26-min.jpg'),
(27, 'uploads/mini', '27-min.jpg'),
(28, 'uploads/mini', '28-min.jpg'),
(29, 'uploads/mini', '29-min.jpg'),
(30, 'uploads/mini', '30-min.jpg'),
(31, 'uploads/mini', '31-min.jpg'),
(32, 'uploads/mini', '32-min.jpg'),
(33, 'uploads/mini', '33-min.jpg'),
(34, 'uploads/mini', '34-min.jpg'),
(35, 'uploads/mini', '35-min.jpg'),
(36, 'uploads/mini', '36-min.jpg'),
(37, 'uploads/mini', '37-min.jpg'),
(38, 'uploads/mini', '38-min.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `login` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`) VALUES
(6, 'aidar', 'admin', 'f0d587897834a73c4ca8290d3b13742781dc9bdb52d04dc20036dbd8313ed055'),
(9, 'trrrr', 'rhtyhyhy', '7e4467d9754488c124715a0991dda95ac6c2ea1c7521cab5d0b8e8a85cbe6529'),
(10, 'test', 'test', '6f4b726238e4edac373d1264dcb6f890098f6bcd4621d373cade4e832627b4f6');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id_img`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `img`
--
ALTER TABLE `img`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
