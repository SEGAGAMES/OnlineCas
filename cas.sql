-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 09 2025 г., 22:01
-- Версия сервера: 8.0.43
-- Версия PHP: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cas`
--

-- --------------------------------------------------------

--
-- Структура таблицы `inventory`
--

CREATE TABLE `inventory` (
  `id` int NOT NULL COMMENT 'идентификатор предмета 1 предмет одному игроку',
  `item_id` int NOT NULL COMMENT 'идентификатор предмета',
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'идентификатор пользователя'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `inventory`
--

INSERT INTO `inventory` (`id`, `item_id`, `email`) VALUES
(3, 3, 'e@example.com'),
(4, 4, 'e@example.com'),
(5, 5, 'e@example.com'),
(6, 6, 'e@example.com'),
(14, 14, 'e@example.com'),
(15, 18, 'e@example.com');

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `item_id` int NOT NULL COMMENT 'Идентификатор предмета',
  `item_type` varchar(20) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Тип предмета',
  `path` varchar(50) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Путь до картинки предмета',
  `description` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'Описание предмета',
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Наименование предмета',
  `cost` int NOT NULL COMMENT 'Стоимость предмета'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`item_id`, `item_type`, `path`, `description`, `name`, `cost`) VALUES
(3, 'Аватар', 'imgs/аватар 1М.png', 'Аватар начальный мужской', 'Аватар \"Обычный\"', 0),
(4, 'Аватар', 'imgs/аватар 1Ж.png', 'Аватар начальный женский', 'Аватар \"Обычный\"', 0),
(5, 'Аватар', 'imgs/аватар 2М.png', 'Аватар обычный мужской', 'Аватар придумать название', 10),
(6, 'Аватар', 'imgs/аватар 2Ж.png', 'Аватар обычный женский', 'Аватар придумать название', 10),
(9, 'Аватар', 'imgs/аватар 3.png', 'Аватар \"Хитрый Шулер\"', 'Аватар Шулер', 100),
(10, 'Аватар', 'imgs/аватар 4.png', 'Аватар \"Богатый лев\"', 'Аватар Лев', 250),
(11, 'Аватар', 'imgs/аватар 5.png', 'Аватар \"Гений БлэкДжэка\"', 'Аватар БлэкДжэк', 400),
(12, 'Аватар', 'imgs/аватар 6.png', 'Аватар \"Король БлэкДжэка\"', 'Аватар Богатый', 500),
(13, 'Аватар', 'imgs/аватар 7.png', 'Аватар \"Хитрый лис\"', 'Аватар Лис', 400),
(14, 'Аватар', 'imgs/аватар 8.png', 'Аватар \"Жена Мафиози\"', 'Аватар Богатая женщина', 750),
(15, 'Аватар', 'imgs/аватар 9.png', 'Аватар \"Дед лудоман\"', 'Аватар Дедуля', 200),
(16, 'Аватар', 'imgs/аватар 10.png', 'Аватар \"Киборг покера\"', 'Аватар Робот', 1000),
(17, 'Аватар', 'imgs/аватар 11.png', 'Аватар \"Карточный книгер\"', 'Аватар Волшебный лудоман', 1500),
(18, 'Аватар', 'imgs/аватар 12.png', 'Аватар \"Заводной песик\"', 'Аватар Пес Лудоман', 1500);

-- --------------------------------------------------------

--
-- Структура таблицы `op_types`
--

CREATE TABLE `op_types` (
  `op_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Тип операции'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `statuses`
--

CREATE TABLE `statuses` (
  `status_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Статус игрока'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `statuses`
--

INSERT INTO `statuses` (`status_name`) VALUES
('admin'),
('common'),
('premium'),
('vip');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Почта/логин',
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Пароль',
  `surname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Фамилия',
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Имя',
  `lastname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'Отчество',
  `balance` int NOT NULL COMMENT 'Баланс',
  `status` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `ava` int NOT NULL COMMENT 'аватарка'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`email`, `password`, `surname`, `name`, `lastname`, `balance`, `status`, `ava`) VALUES
('e@example.com', '$2y$10$tE7/Bu/qbbxyLFbnsdRwUupRp0qURJC25szkbU9swXjdjkjmIlRZm', 'Админов', 'Админ', 'Палыч', 999997749, 'admin', 18);

-- --------------------------------------------------------

--
-- Структура таблицы `user_game_story`
--

CREATE TABLE `user_game_story` (
  `op_id` int NOT NULL COMMENT 'Идентификатор операции',
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'email пользователя',
  `op_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Тип операции',
  `balance` int NOT NULL COMMENT 'Новый баланс после игры',
  `time` datetime NOT NULL COMMENT 'Время изменения баланса'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `item_id` (`item_id`);

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Индексы таблицы `op_types`
--
ALTER TABLE `op_types`
  ADD PRIMARY KEY (`op_type`),
  ADD UNIQUE KEY `op_type` (`op_type`);

--
-- Индексы таблицы `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`status_name`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD KEY `status` (`status`);

--
-- Индексы таблицы `user_game_story`
--
ALTER TABLE `user_game_story`
  ADD UNIQUE KEY `op_id` (`op_id`,`email`),
  ADD KEY `op_type` (`op_type`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'идентификатор предмета 1 предмет одному игроку', AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int NOT NULL AUTO_INCREMENT COMMENT 'Идентификатор предмета', AUTO_INCREMENT=19;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventory_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`status`) REFERENCES `statuses` (`status_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_game_story`
--
ALTER TABLE `user_game_story`
  ADD CONSTRAINT `user_game_story_ibfk_1` FOREIGN KEY (`op_type`) REFERENCES `op_types` (`op_type`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_game_story_ibfk_2` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
