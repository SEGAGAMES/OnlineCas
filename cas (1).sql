-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 14 2025 г., 05:32
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
(5, 5, 'e@example.com'),
(6, 6, 'e@example.com'),
(14, 14, 'e@example.com'),
(15, 18, 'e@example.com'),
(16, 5, 'e@example.com'),
(30, 9, 'e@example.com'),
(31, 12, 'e@example.com'),
(32, 12, 'e@example.com'),
(53, 3, 't@example.com'),
(54, 4, 't@example.com');

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
-- Структура таблицы `item_type`
--

CREATE TABLE `item_type` (
  `item_type` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `item_type`
--

INSERT INTO `item_type` (`item_type`) VALUES
('Аватар'),
('Предмет');

-- --------------------------------------------------------

--
-- Структура таблицы `op_types`
--

CREATE TABLE `op_types` (
  `op_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Тип операции'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `op_types`
--

INSERT INTO `op_types` (`op_type`) VALUES
('Вывод'),
('Выигрыш'),
('Покупка'),
('Пополнение'),
('Продажа'),
('Проигрыш'),
('Регистрация');

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
('premium'),
('VIP'),
('Админ'),
('Обычный');

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
  `ava` int NOT NULL COMMENT 'аватарка',
  `regdate` date DEFAULT NULL COMMENT 'Дата регистрации'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`email`, `password`, `surname`, `name`, `lastname`, `balance`, `status`, `ava`, `regdate`) VALUES
('e@example.com', '$2y$10$tE7/Bu/qbbxyLFbnsdRwUupRp0qURJC25szkbU9swXjdjkjmIlRZm', 'Админов', 'Админ', 'Палыч', 1778627088, 'Админ', 12, '2025-08-02'),
('t@example.com', '$2y$10$/wES1LFM8McfvCrQBwYoOOwtM0ieRgoDptp8d7u2JRxHfhUeYRLje', 'Шиляев', 'Сергей', 'Павлович', 0, 'Обычный', 3, '2025-10-14');

-- --------------------------------------------------------

--
-- Структура таблицы `user_game_story`
--

CREATE TABLE `user_game_story` (
  `op_id` int NOT NULL COMMENT 'Идентификатор операции',
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'email пользователя',
  `op_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Тип операции',
  `balance` int NOT NULL COMMENT 'Новый баланс после игры',
  `changebalance` int NOT NULL COMMENT 'Изменение баланса',
  `time` time NOT NULL COMMENT 'Время изменения баланса',
  `date` date NOT NULL COMMENT 'Дата операции'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user_game_story`
--

INSERT INTO `user_game_story` (`op_id`, `email`, `op_type`, `balance`, `changebalance`, `time`, `date`) VALUES
(21, 'e@example.com', 'Проигрыш', 999967519, -50000, '04:15:07', '2025-10-14'),
(22, 'e@example.com', 'Проигрыш', 999917519, -50000, '04:15:11', '2025-10-14'),
(24, 'e@example.com', 'Покупка', 999916919, -500, '04:20:23', '2025-10-14'),
(25, 'e@example.com', 'Проигрыш', 999916919, 0, '05:11:06', '2025-10-14'),
(26, 'e@example.com', 'Проигрыш', 999916919, 0, '05:11:45', '2025-10-14'),
(27, 'e@example.com', 'Выигрыш', 999916929, 10, '05:13:28', '2025-10-14'),
(28, 'e@example.com', 'Выигрыш', 999917929, 1000, '05:14:35', '2025-10-14'),
(29, 'e@example.com', 'Проигрыш', 999916929, -1000, '05:15:48', '2025-10-14'),
(30, 'e@example.com', 'Проигрыш', 999915929, -1000, '05:15:53', '2025-10-14'),
(31, 'e@example.com', 'Проигрыш', 999914929, -1000, '05:15:57', '2025-10-14'),
(32, 'e@example.com', 'Проигрыш', 999913929, -1000, '05:16:01', '2025-10-14'),
(33, 'e@example.com', 'Проигрыш', 999912929, -1000, '05:16:05', '2025-10-14'),
(34, 'e@example.com', 'Проигрыш', 999911929, -1000, '05:16:09', '2025-10-14'),
(35, 'e@example.com', 'Проигрыш', 999910929, -1000, '05:16:13', '2025-10-14'),
(36, 'e@example.com', 'Выигрыш', 999913929, 3000, '05:16:17', '2025-10-14'),
(37, 'e@example.com', 'Выигрыш', 999913954, 25, '05:19:40', '2025-10-14'),
(38, 'e@example.com', 'Проигрыш', 999913944, -10, '05:19:54', '2025-10-14'),
(39, 'e@example.com', 'Проигрыш', 999913934, -10, '05:19:59', '2025-10-14'),
(40, 'e@example.com', 'Выигрыш', 999913944, 10, '05:20:03', '2025-10-14'),
(41, 'e@example.com', 'Проигрыш', 999912944, -1000, '05:20:11', '2025-10-14'),
(42, 'e@example.com', 'Выигрыш', 999913944, 1000, '05:20:15', '2025-10-14'),
(43, 'e@example.com', 'Проигрыш', 999913934, -10, '05:22:45', '2025-10-14'),
(44, 'e@example.com', 'Проигрыш', 999913924, -10, '05:22:53', '2025-10-14'),
(45, 'e@example.com', 'Выигрыш', 999913944, 20, '05:28:11', '2025-10-14'),
(46, 'e@example.com', 'Выигрыш', 999913954, 10, '05:28:56', '2025-10-14'),
(47, 'e@example.com', 'Проигрыш', 999913944, -10, '05:32:39', '2025-10-14'),
(48, 'e@example.com', 'Проигрыш', 999913934, -10, '05:33:28', '2025-10-14'),
(49, 'e@example.com', 'Проигрыш', 999913924, -10, '05:35:29', '2025-10-14'),
(50, 'e@example.com', 'Выигрыш', 999913944, 20, '05:35:52', '2025-10-14'),
(51, 'e@example.com', 'Выигрыш', 999913964, 20, '05:38:08', '2025-10-14'),
(52, 'e@example.com', 'Проигрыш', 999913954, -10, '05:41:05', '2025-10-14'),
(53, 'e@example.com', 'Проигрыш', 999913944, -10, '05:43:29', '2025-10-14'),
(54, 'e@example.com', 'Выигрыш', 999913994, 50, '05:43:46', '2025-10-14'),
(55, 'e@example.com', 'Выигрыш', 999914004, 10, '05:58:37', '2025-10-14'),
(56, 'e@example.com', 'Выигрыш', 999914014, 10, '05:58:45', '2025-10-14'),
(57, 'e@example.com', 'Проигрыш', 999914004, -10, '05:58:55', '2025-10-14'),
(58, 'e@example.com', 'Выигрыш', 999914019, 15, '05:59:44', '2025-10-14'),
(59, 'e@example.com', 'Покупка', 999913519, -500, '06:00:09', '2025-10-14'),
(60, 'e@example.com', 'Выигрыш', 999913544, 25, '06:00:49', '2025-10-14'),
(61, 'e@example.com', 'Проигрыш', 999813544, -100000, '06:01:02', '2025-10-14'),
(62, 'e@example.com', 'Проигрыш', 999713544, -100000, '06:01:13', '2025-10-14'),
(63, 'e@example.com', 'Проигрыш', 999613544, -100000, '06:01:21', '2025-10-14'),
(64, 'e@example.com', 'Проигрыш', 999513544, -100000, '06:01:29', '2025-10-14'),
(65, 'e@example.com', 'Выигрыш', 999613544, 100000, '06:01:49', '2025-10-14'),
(66, 'e@example.com', 'Выигрыш', 999713544, 100000, '06:01:56', '2025-10-14'),
(67, 'e@example.com', 'Проигрыш', 999613544, -100000, '06:02:04', '2025-10-14'),
(68, 'e@example.com', 'Проигрыш', 999513544, -100000, '06:02:12', '2025-10-14'),
(69, 'e@example.com', 'Проигрыш', 999413544, -100000, '06:02:20', '2025-10-14'),
(70, 'e@example.com', 'Проигрыш', 999313544, -100000, '06:02:26', '2025-10-14'),
(71, 'e@example.com', 'Проигрыш', 989313544, -10000000, '06:02:35', '2025-10-14'),
(72, 'e@example.com', 'Проигрыш', 889313544, -100000000, '06:02:45', '2025-10-14'),
(73, 'e@example.com', 'Выигрыш', 1778627088, 889313544, '06:03:22', '2025-10-14'),
(128, 't@example.com', 'Регистрация', 1000, 1000, '07:58:11', '2025-10-14'),
(129, 't@example.com', 'Проигрыш', 990, -10, '08:05:46', '2025-10-14'),
(130, 't@example.com', 'Выигрыш', 1000, 10, '08:05:54', '2025-10-14'),
(131, 't@example.com', 'Выигрыш', 1010, 10, '08:10:27', '2025-10-14'),
(132, 't@example.com', 'Проигрыш', 1000, -10, '08:10:32', '2025-10-14'),
(133, 't@example.com', 'Выигрыш', 1020, 20, '08:10:38', '2025-10-14'),
(134, 't@example.com', 'Проигрыш', 1010, -10, '08:10:44', '2025-10-14'),
(135, 't@example.com', 'Проигрыш', 990, -20, '08:10:49', '2025-10-14'),
(136, 't@example.com', 'Выигрыш', 1030, 40, '08:10:55', '2025-10-14'),
(137, 't@example.com', 'Проигрыш', 1020, -10, '08:11:01', '2025-10-14'),
(138, 't@example.com', 'Выигрыш', 1040, 20, '08:11:07', '2025-10-14'),
(139, 't@example.com', 'Выигрыш', 1050, 10, '08:11:12', '2025-10-14'),
(140, 't@example.com', 'Выигрыш', 1060, 10, '08:11:18', '2025-10-14'),
(141, 't@example.com', 'Проигрыш', 1050, -10, '08:11:22', '2025-10-14'),
(142, 't@example.com', 'Проигрыш', 1030, -20, '08:11:28', '2025-10-14'),
(143, 't@example.com', 'Выигрыш', 1070, 40, '08:11:34', '2025-10-14'),
(144, 't@example.com', 'Проигрыш', 1060, -10, '08:13:39', '2025-10-14'),
(145, 't@example.com', 'Выигрыш', 1070, 10, '08:13:44', '2025-10-14'),
(146, 't@example.com', 'Проигрыш', 1060, -10, '08:13:49', '2025-10-14'),
(147, 't@example.com', 'Выигрыш', 1080, 20, '08:13:59', '2025-10-14'),
(148, 't@example.com', 'Выигрыш', 1090, 10, '08:14:09', '2025-10-14'),
(149, 't@example.com', 'Выигрыш', 1100, 10, '08:14:14', '2025-10-14'),
(150, 't@example.com', 'Выигрыш', 1110, 10, '08:14:19', '2025-10-14'),
(151, 't@example.com', 'Выигрыш', 1120, 10, '08:14:23', '2025-10-14'),
(152, 't@example.com', 'Выигрыш', 1130, 10, '08:14:28', '2025-10-14'),
(153, 't@example.com', 'Проигрыш', 1110, -20, '08:20:01', '2025-10-14'),
(154, 't@example.com', 'Выигрыш', 1150, 40, '08:20:07', '2025-10-14'),
(155, 't@example.com', 'Выигрыш', 1170, 20, '08:20:15', '2025-10-14'),
(156, 't@example.com', 'Проигрыш', 1150, -20, '08:20:27', '2025-10-14'),
(157, 't@example.com', 'Проигрыш', 1110, -40, '08:20:33', '2025-10-14'),
(158, 't@example.com', 'Выигрыш', 1190, 80, '08:20:38', '2025-10-14'),
(159, 't@example.com', 'Проигрыш', 1170, -20, '08:20:44', '2025-10-14'),
(160, 't@example.com', 'Проигрыш', 1130, -40, '08:20:49', '2025-10-14'),
(161, 't@example.com', 'Проигрыш', 1050, -80, '08:20:57', '2025-10-14'),
(162, 't@example.com', 'Проигрыш', 890, -160, '08:21:02', '2025-10-14'),
(163, 't@example.com', 'Выигрыш', 1210, 320, '08:21:08', '2025-10-14'),
(164, 't@example.com', 'Проигрыш', 1190, -20, '08:21:15', '2025-10-14'),
(165, 't@example.com', 'Выигрыш', 1230, 40, '08:21:21', '2025-10-14'),
(166, 't@example.com', 'Выигрыш', 1250, 20, '08:21:29', '2025-10-14'),
(167, 't@example.com', 'Проигрыш', 1230, -20, '08:21:37', '2025-10-14'),
(168, 't@example.com', 'Проигрыш', 1190, -40, '08:21:44', '2025-10-14'),
(169, 't@example.com', 'Выигрыш', 1270, 80, '08:21:51', '2025-10-14'),
(170, 't@example.com', 'Выигрыш', 1290, 20, '08:21:57', '2025-10-14'),
(171, 't@example.com', 'Проигрыш', 1270, -20, '08:22:02', '2025-10-14'),
(172, 't@example.com', 'Выигрыш', 1310, 40, '08:22:08', '2025-10-14'),
(173, 't@example.com', 'Выигрыш', 1350, 40, '08:22:15', '2025-10-14'),
(174, 't@example.com', 'Проигрыш', 1310, -40, '08:22:20', '2025-10-14'),
(175, 't@example.com', 'Проигрыш', 1230, -80, '08:22:25', '2025-10-14'),
(176, 't@example.com', 'Проигрыш', 1070, -160, '08:22:31', '2025-10-14'),
(177, 't@example.com', 'Выигрыш', 1390, 320, '08:22:36', '2025-10-14'),
(178, 't@example.com', 'Выигрыш', 1430, 40, '08:22:46', '2025-10-14'),
(179, 't@example.com', 'Выигрыш', 1470, 40, '08:22:50', '2025-10-14'),
(180, 't@example.com', 'Выигрыш', 1510, 40, '08:22:55', '2025-10-14'),
(181, 't@example.com', 'Выигрыш', 1550, 40, '08:23:00', '2025-10-14'),
(182, 't@example.com', 'Проигрыш', 1510, -40, '08:23:04', '2025-10-14'),
(183, 't@example.com', 'Проигрыш', 1430, -80, '08:23:10', '2025-10-14'),
(184, 't@example.com', 'Проигрыш', 1270, -160, '08:23:15', '2025-10-14'),
(185, 't@example.com', 'Проигрыш', 950, -320, '08:23:21', '2025-10-14'),
(186, 't@example.com', 'Проигрыш', 310, -640, '08:23:27', '2025-10-14'),
(187, 't@example.com', 'Проигрыш', 0, -310, '08:23:56', '2025-10-14'),
(188, 't@example.com', 'Проигрыш', 0, 0, '08:30:30', '2025-10-14');

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
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `item_type` (`item_type`);

--
-- Индексы таблицы `item_type`
--
ALTER TABLE `item_type`
  ADD PRIMARY KEY (`item_type`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'идентификатор предмета 1 предмет одному игроку', AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int NOT NULL AUTO_INCREMENT COMMENT 'Идентификатор предмета', AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `user_game_story`
--
ALTER TABLE `user_game_story`
  MODIFY `op_id` int NOT NULL AUTO_INCREMENT COMMENT 'Идентификатор операции', AUTO_INCREMENT=189;

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
-- Ограничения внешнего ключа таблицы `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`item_type`) REFERENCES `item_type` (`item_type`) ON DELETE CASCADE ON UPDATE CASCADE;

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
