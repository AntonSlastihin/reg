-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Ноя 20 2020 г., 07:21
-- Версия сервера: 8.0.18
-- Версия PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `created_at`, `update_at`) VALUES
(2, 'data@mail.ru', 'Antoa', '$argon2id$v=19$m=65536,t=4,p=1$NGF2NGphelpHOUVVQk9EMg$Zr9LW7AvLwx6JVvKMkrwzXgpLESrANBjiRx6EJ1DpsQ', '2020-11-20 06:40:50', NULL),
(3, 'datea@mail.ru', 'Anton1', '$argon2id$v=19$m=65536,t=4,p=1$MWxDcFV5Y20yNE5jZVZLTg$TYom8y4SjJPGcSF8HuWmsQUpjpHBSvXBa2Ej7hAVfJE', '2020-11-20 07:01:21', '2020-11-20 13:07:39'),
(4, 'fsdf@mail.ru', 'Anton', '$argon2id$v=19$m=65536,t=4,p=1$cFBQR2dJMlVaaFZ1S0J3Mw$z7XHajTA67yUg8fSpmjXsRHc23U+egfi4Q7BfdXqiI4', '2020-11-20 07:05:01', NULL),
(5, 'contentType@mail.ru', 'AAAA', '$argon2id$v=19$m=65536,t=4,p=1$Q1EwTjdmTTdyQ2xXa0t0TA$TmNnKxfB6AGHMPJyb0dE+QILBlOYNVVeOP+6CPluRGg', '2020-11-20 07:05:20', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_unique` (`email`) USING BTREE,
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
