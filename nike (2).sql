-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 05 2023 г., 09:14
-- Версия сервера: 10.4.18-MariaDB
-- Версия PHP: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nike`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `colors` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `image_path`, `description`, `price`, `class`, `colors`) VALUES
(1, 'LEBRON 18 LOW “NEON LIGHTS”', 'img/lebron.jpg', '', '156 €', 'rectangle1', 'Доступно +1 цвет'),
(2, 'NIKE AIR VAPORMAX EVO', 'img/vapormax_evo1.jpg', '', '220 €', 'rectangle2', 'Доступно +1 цвет'),
(3, 'NIKE FREE METCON 3', 'img/metcon2.jpg', '', '110 €', 'rectangle3', ''),
(4, 'NIKE AIR FORCE 1 LOW CR7 BY YOU', 'img/airforce/air_force.jpg', '', '204 €', 'rectangle4', 'Доступно +5 цветов');

-- --------------------------------------------------------

--
-- Структура таблицы `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `colors` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `news_date` date NOT NULL,
  `text` text NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `image_class` varchar(255) NOT NULL,
  `arrow_class` varchar(255) NOT NULL,
  `more` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `name`, `news_date`, `text`, `image_path`, `class`, `image_class`, `arrow_class`, `more`) VALUES
(1, 'Что нового в Kyrie 7', '2023-04-10', 'Используя возможности вычислительного дизайна за счет взаимодействия с данными, Kyrie 7 выйдет 21 июня в четырех цветовых вариантах', 'img/k7.jpg', 'k7', 'k7', 'arrow1', 'arrow1'),
(2, 'Вы не можете остановить нас', '2023-04-25', 'Серия “Вы не можете остановить нас” от Nike\r\nпразднует возвращение в наши спортивные сооружения после беспрецедентного сезона ограничений.', 'img/ycss.jpg', 'ycss', 'ycss', 'arrow2', 'arrow2'),
(3, 'Новая линия одежды Nike', '2023-04-18', 'Ведущие в отрасли научные исследования в\r\nобласти спорта и инноваций в продуктах\r\nопределяют уникальную междисциплинарную практику дизайна Nike', 'img/man_woman.png', 'clothes', '', 'arrow3', 'arrow3');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
