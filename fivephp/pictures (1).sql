-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 08 2018 г., 02:27
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
-- База данных: `php_1_lesson_5`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `path` varchar(50) NOT NULL,
  `path_2` varchar(20) DEFAULT NULL,
  `name2` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pictures`
--

INSERT INTO `pictures` (`id`, `name`, `path`, `path_2`, `name2`) VALUES
(1, '1-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '1.jpg'),
(2, '2-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '2.jpg'),
(3, '3-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '3.jpg'),
(4, '4-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '4.jpg'),
(5, '5-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '5.jpg'),
(6, '6-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '6.jpg'),
(7, '7-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '7.jpg'),
(8, '8-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '8.jpg'),
(9, '9-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '9.jpg'),
(10, '10-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '10.jpg'),
(11, '11-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '11.jpg'),
(12, '12-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '12.jpg'),
(13, '13-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '13.jpg'),
(14, '14-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '14.jpg'),
(15, '15-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '15.jpg'),
(16, '16-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '16.jpg'),
(17, '17-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '17.jpg'),
(18, '18-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '18.jpg'),
(19, '19-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '19.jpg'),
(20, '20-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '20.jpg'),
(21, '21-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '21.jpg'),
(22, '22-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '22.jpg'),
(24, '24-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '24.jpg'),
(25, '25-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '25.jpg'),
(26, '26-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '26.jpg'),
(27, '27-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '27.jpg'),
(28, '28-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '28.jpg'),
(29, '29-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '28.jpg'),
(30, '30-min.jpg', 'img/flowers_2/', 'img/flowers_1/', '30.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
