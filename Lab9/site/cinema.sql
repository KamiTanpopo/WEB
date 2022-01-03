-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 20 2021 г., 00:41
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cinema`
--

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE `films` (
  `idfilm` int NOT NULL,
  `film_name` varchar(50) NOT NULL,
  `director` varchar(40) NOT NULL,
  `genre` varchar(60) NOT NULL,
  `country` varchar(50) NOT NULL,
  `actors` varchar(200) NOT NULL,
  `duration` int NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`idfilm`, `film_name`, `director`, `genre`, `country`, `actors`, `duration`, `rating`) VALUES
(1, 'Дім Ґуччі', 'Рідлі Скотт', 'Кримінал, Трилер, Драма', 'США', 'Адам Драйвер, Леді Ґаґа, Джаред Лето, Аль Пачіно.', 157, 7),
(2, 'Дюна', 'Дені Вільньов', 'Пригоди, Драма, Наукова фантастика', 'США', 'Джейсон Момоа, Ребекка Фергюсон, Тімоті Шаламе, Джош Бролін, Зендея, Оскар Айзек', 155, 8.2),
(3, '007: Не час помирати', 'Кері Фукунага', 'Бойовик, Пригоди, Трилер', 'США, Великобританія, Австралія', 'Деніел Крейг, Леа Сейду, Рамі Малек, Рейф Файнз, Бен Вішоу, Наомі Гарріс, Рорі Кіннір', 163, 7.2),
(4, 'Щось не так з Роном', 'Алессандро Карлоні, Жан-Філіп Віне', 'Мультфільм, Пригоди, Комедія', 'США, Великобританія, Австралія', 'Томас Барбаска, Бентлі Калу, Ава Морс', 107, 7.5),
(5, 'Хід короля', 'Філіп Штьольцль', 'Історія, Драма', 'Німеччина, Австрія', 'Олівер Мазуччі, Альбрехт Шух, Бірґіт Мініхмайр, Самуель Фінці', 110, 7.3),
(6, 'Вічні ', 'Хлоя Чжао', 'Бойовик, Драма, Фантастика, Marvel', 'США', 'Анджеліна Джолі, Річард Медден, Кумейл Нанджиані, Кіт Гарінґтон, Сальма Гайєк, Браян Тайрі Генрі, Ма Дон Сок, Лорен Рідлофф, Лія Макх\'ю', 158, 6.8);

-- --------------------------------------------------------

--
-- Структура таблицы `halls`
--

CREATE TABLE `halls` (
  `idhalls` int NOT NULL,
  `hall_name` varchar(15) NOT NULL,
  `capacity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `halls`
--

INSERT INTO `halls` (`idhalls`, `hall_name`, `capacity`) VALUES
(1, 'green', 60),
(2, 'blue', 80),
(3, 'red', 65);

-- --------------------------------------------------------

--
-- Структура таблицы `seat`
--

CREATE TABLE `seat` (
  `idseat` int NOT NULL,
  `rownum` int NOT NULL,
  `seatnum` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `seat`
--

INSERT INTO `seat` (`idseat`, `rownum`, `seatnum`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 2, 1),
(12, 2, 2),
(13, 2, 3),
(14, 2, 4),
(15, 2, 5),
(16, 2, 6),
(17, 2, 7),
(18, 2, 8),
(19, 2, 9),
(20, 2, 10),
(21, 3, 1),
(22, 3, 2),
(23, 3, 3),
(24, 3, 4),
(25, 3, 5),
(26, 3, 6),
(27, 3, 7),
(28, 3, 8),
(29, 3, 9),
(30, 3, 10),
(31, 4, 1),
(32, 4, 2),
(33, 4, 3),
(34, 4, 4),
(35, 4, 5),
(36, 4, 6),
(37, 4, 7),
(38, 4, 8),
(39, 4, 9),
(40, 4, 10),
(41, 5, 1),
(42, 5, 2),
(43, 5, 3),
(44, 5, 4),
(45, 5, 5),
(46, 5, 6),
(47, 5, 7),
(48, 5, 8),
(49, 5, 9),
(50, 5, 10),
(51, 6, 1),
(52, 6, 2),
(53, 6, 3),
(54, 6, 4),
(55, 6, 5),
(56, 6, 6),
(57, 6, 7),
(58, 6, 8),
(59, 6, 9),
(60, 6, 10),
(61, 7, 1),
(62, 7, 2),
(63, 7, 3),
(64, 7, 4),
(65, 7, 5),
(66, 7, 6),
(67, 7, 7),
(68, 7, 8),
(69, 7, 9),
(70, 7, 10),
(71, 8, 1),
(72, 8, 2),
(73, 8, 3),
(74, 8, 4),
(75, 8, 5),
(76, 8, 6),
(77, 8, 7),
(78, 8, 8),
(79, 8, 9),
(80, 8, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `session`
--

CREATE TABLE `session` (
  `idsession` int NOT NULL,
  `film_name` int NOT NULL,
  `date` datetime NOT NULL,
  `hall` int NOT NULL,
  `prise` int NOT NULL,
  `ticketsnum` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `session`
--

INSERT INTO `session` (`idsession`, `film_name`, `date`, `hall`, `prise`, `ticketsnum`) VALUES
(1, 1, '2021-12-15 12:00:00', 1, 100, 60),
(2, 3, '2021-12-15 13:23:00', 3, 110, 65),
(3, 4, '2021-12-15 14:00:00', 2, 100, 80),
(4, 6, '2021-12-15 15:00:00', 1, 120, 60),
(5, 2, '2021-12-15 15:25:00', 3, 100, 65),
(6, 5, '2021-12-15 16:00:00', 2, 110, 80),
(7, 1, '2021-12-15 16:00:00', 1, 100, 60),
(8, 3, '2021-12-15 16:25:00', 3, 110, 65),
(9, 4, '2021-12-15 17:00:00', 2, 100, 80),
(10, 6, '2021-12-15 18:00:00', 1, 120, 60),
(11, 2, '2021-12-15 19:25:00', 3, 100, 65),
(12, 5, '2021-12-15 20:00:00', 2, 110, 80),
(13, 2, '2021-12-16 12:00:00', 1, 100, 55),
(14, 4, '2021-12-16 13:23:00', 3, 110, 65),
(15, 3, '2021-12-16 14:00:00', 2, 100, 80),
(16, 5, '2021-12-16 15:00:00', 1, 120, 60),
(17, 1, '2021-12-16 15:25:00', 3, 100, 65),
(18, 6, '2021-12-16 16:00:00', 2, 110, 80),
(19, 5, '2021-12-16 16:00:00', 1, 100, 55),
(20, 4, '2021-12-16 16:25:00', 3, 110, 65),
(21, 3, '2021-12-16 17:00:00', 2, 100, 80),
(22, 2, '2021-12-16 18:00:00', 1, 120, 60),
(23, 2, '2021-12-16 19:25:00', 3, 100, 65),
(24, 1, '2021-12-16 20:00:00', 2, 110, 80),
(25, 1, '2021-12-17 12:00:00', 1, 100, 60),
(26, 3, '2021-12-17 13:23:00', 3, 110, 65),
(27, 4, '2021-12-17 14:00:00', 2, 100, 80),
(28, 6, '2021-12-17 15:00:00', 1, 120, 60),
(29, 2, '2021-12-17 15:25:00', 3, 100, 25),
(30, 5, '2021-12-17 16:00:00', 2, 110, 80),
(31, 1, '2021-12-17 16:00:00', 1, 100, 60),
(32, 3, '2021-12-17 16:25:00', 3, 110, 65),
(33, 4, '2021-12-17 17:00:00', 2, 100, 80),
(34, 6, '2021-12-17 18:00:00', 1, 120, 60),
(35, 2, '2021-12-17 19:25:00', 3, 100, 65),
(36, 5, '2021-12-17 20:00:00', 2, 110, 80),
(37, 2, '2021-12-17 12:00:00', 1, 100, 60),
(38, 4, '2021-12-17 13:23:00', 3, 110, 65),
(39, 3, '2021-12-17 14:00:00', 2, 100, 80),
(40, 5, '2021-12-18 15:00:00', 1, 120, 60),
(41, 1, '2021-12-18 15:25:00', 3, 100, 65),
(42, 6, '2021-12-18 16:00:00', 2, 110, 80),
(43, 5, '2021-12-18 16:00:00', 1, 100, 60),
(44, 4, '2021-12-18 16:25:00', 3, 110, 65),
(45, 3, '2021-12-18 17:00:00', 2, 100, 80),
(46, 2, '2021-12-18 18:00:00', 1, 120, 60),
(47, 2, '2021-12-18 19:25:00', 3, 100, 65),
(48, 1, '2021-12-18 20:00:00', 2, 110, 80),
(49, 1, '2021-12-19 12:00:00', 1, 100, 60),
(50, 3, '2021-12-19 13:23:00', 3, 110, 65),
(51, 4, '2021-12-19 14:00:00', 2, 100, 80),
(52, 6, '2021-12-19 15:00:00', 1, 120, 60),
(53, 2, '2021-12-19 15:25:00', 3, 100, 65),
(54, 5, '2021-12-19 16:00:00', 2, 110, 40),
(55, 1, '2021-12-19 16:00:00', 1, 100, 60),
(56, 3, '2021-12-19 16:25:00', 3, 110, 65),
(57, 4, '2021-12-19 17:00:00', 2, 100, 80),
(58, 6, '2021-12-19 18:00:00', 1, 120, 60),
(59, 2, '2021-12-19 19:25:00', 3, 100, 65),
(60, 5, '2021-12-19 20:00:00', 2, 110, 80),
(61, 2, '2021-12-20 12:00:00', 1, 100, 60),
(62, 4, '2021-12-20 13:23:00', 3, 110, 65),
(63, 3, '2021-12-20 14:00:00', 2, 100, 80),
(64, 5, '2021-12-20 15:00:00', 1, 120, 60),
(65, 1, '2021-12-20 15:25:00', 3, 100, 65),
(66, 6, '2021-12-20 16:00:00', 2, 110, 80),
(67, 5, '2021-12-20 16:00:00', 1, 100, 60),
(68, 4, '2021-12-20 16:25:00', 3, 110, 65),
(69, 3, '2021-12-20 17:00:00', 2, 100, 80),
(70, 2, '2021-12-20 18:00:00', 1, 120, 60),
(71, 2, '2021-12-20 19:25:00', 3, 100, 65),
(72, 1, '2021-12-20 20:00:00', 2, 110, 80),
(73, 2, '2021-12-21 12:00:00', 1, 100, 60),
(74, 4, '2021-12-21 13:23:00', 3, 110, 65),
(75, 3, '2021-12-21 14:00:00', 2, 100, 80),
(76, 5, '2021-12-21 15:00:00', 1, 120, 60),
(77, 1, '2021-12-21 15:25:00', 3, 100, 65),
(78, 6, '2021-12-21 16:00:00', 2, 110, 80),
(79, 5, '2021-12-21 16:00:00', 1, 100, 60),
(80, 4, '2021-12-21 16:25:00', 3, 110, 65),
(81, 3, '2021-12-21 17:00:00', 2, 100, 80),
(82, 2, '2021-12-21 18:00:00', 1, 120, 60),
(83, 2, '2021-12-21 19:25:00', 3, 100, 65),
(84, 1, '2021-12-21 20:00:00', 2, 110, 80);

-- --------------------------------------------------------

--
-- Структура таблицы `tickets`
--

CREATE TABLE `tickets` (
  `idticket` int NOT NULL,
  `session` int NOT NULL,
  `seat` int NOT NULL,
  `bought` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `ID` int NOT NULL,
  `Name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `login` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `PhoneNumber` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`ID`, `Name`, `email`, `login`, `password`, `PhoneNumber`) VALUES
(1, 'Nastya', 'Nastya777@gmail.com', 'Nasty', '123', '098127694'),
(35, 'Аня', 'anya@gmail.com', 'anya', '123', '982427948'),
(36, 'Katya', 'kate@gmail.com', 'Kate', '555', '923847329'),
(37, 'John', 'jony@gmail.com', 'jony', '999', '932874387');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`idfilm`),
  ADD UNIQUE KEY `film_name` (`film_name`),
  ADD KEY `film_name_2` (`film_name`);

--
-- Индексы таблицы `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`idhalls`),
  ADD UNIQUE KEY `hall_name` (`hall_name`);

--
-- Индексы таблицы `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`idseat`);

--
-- Индексы таблицы `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`idsession`),
  ADD KEY `film` (`film_name`),
  ADD KEY `hall` (`hall`);

--
-- Индексы таблицы `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`idticket`),
  ADD KEY `session` (`session`),
  ADD KEY `seat` (`seat`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `idfilm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `halls`
--
ALTER TABLE `halls`
  MODIFY `idhalls` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `seat`
--
ALTER TABLE `seat`
  MODIFY `idseat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT для таблицы `session`
--
ALTER TABLE `session`
  MODIFY `idsession` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT для таблицы `tickets`
--
ALTER TABLE `tickets`
  MODIFY `idticket` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `session_ibfk_1` FOREIGN KEY (`hall`) REFERENCES `halls` (`idhalls`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `session_ibfk_2` FOREIGN KEY (`film_name`) REFERENCES `films` (`idfilm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`seat`) REFERENCES `seat` (`idseat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
