-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 26 2025 г., 11:21
-- Версия сервера: 5.7.33
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `donate`
--

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `title` varchar(355) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `goal` int(50) NOT NULL,
  `donated` int(50) NOT NULL,
  `img` varchar(455) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`title`, `text`, `goal`, `donated`, `img`, `id`) VALUES
('Студия танцев для начинающих', 'Хочу открыть студию танцев для тех, кто ни разу не танцевал с поддерживающей атмосферой. Будет отличный дизайн, штатный видеограф, конкурсы внутри студии и вне, отчётные концерты и т.д.', 3000000, 50000, '1.jpg', 1),
('Выпустить большой сборник рассказов о моей семье', 'Я очень люблю и восхищаюсь своей семьей. Хочу рассказать о каждом члене моей семьи, чтобы наши будущие поколения не забывали нас и помнили:)', 500000, 10000, '3.jpg', 3),
('Роблокс укради брейнрот', 'Вип в игре укради брейнрот, с помощью его можно заработать много крутых брейнротов', 800, 40, 'https://wotpack.ru/wp-content/uploads/2025/10/pererozhdeniya-v-ukradi-breynrot-chto-nuzhno-dlya-kazhdogo-urovnya-730x411.jpg', 8),
('Пж донат я бедный', 'Пж донат я бедный у меня нету деняг вапше', 1000, 1, 'https://img.freepik.com/free-photo/front-view-homeless-man-with-beard-doorstep_23-2148760819.jpg?semt=ais_hybrid&w=740&q=80', 9);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
