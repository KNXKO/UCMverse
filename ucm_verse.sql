-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Po 05.Dec 2022, 18:49
-- Verzia serveru: 10.4.25-MariaDB
-- Verzia PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `ucm_verse`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `likes`
--

CREATE TABLE `likes` (
  `relation_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `value` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `likes`
--

INSERT INTO `likes` (`relation_id`, `post_id`, `user_id`, `value`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 1);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `posts`
--

CREATE TABLE `posts` (
  `ID` int(11) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_photo_dir` varchar(255) NOT NULL,
  `img_dir` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `likes` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `posts`
--

INSERT INTO `posts` (`ID`, `author_name`, `author_photo_dir`, `img_dir`, `msg`, `likes`, `time`) VALUES
(1, '', '', 'images/web/profile_default.png', 'Ahoj, ahoj', -1, '2022-12-04 10:45:57'),
(2, '', '', 'images/web/', 'Zjec mi', 1, '2022-12-05 16:37:28');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `saved`
--

CREATE TABLE `saved` (
  `relation_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `value` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `saved`
--

INSERT INTO `saved` (`relation_id`, `post_id`, `user_id`, `value`) VALUES
(1, 2, 1, 1),
(2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(255) NOT NULL,
  `usersLastname` varchar(255) NOT NULL,
  `usersEmail` varchar(255) NOT NULL,
  `usersBdate` date DEFAULT NULL,
  `usersPwd` varchar(255) NOT NULL,
  `usersImgdir` varchar(255) NOT NULL DEFAULT '/images/profiles/profile_default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersLastname`, `usersEmail`, `usersBdate`, `usersPwd`, `usersImgdir`) VALUES
(1, 'Erik', 'Pál', 'erikpal201@gmail.com', '2001-11-02', '$2y$10$5fdN5rwkTsQBzecV4K/G2OomEvyWfUSdHrH01Apm/c7ShSwjnNAFS', '/images/profiles/profile_default.png');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`relation_id`);

--
-- Indexy pre tabuľku `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexy pre tabuľku `saved`
--
ALTER TABLE `saved`
  ADD PRIMARY KEY (`relation_id`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `likes`
--
ALTER TABLE `likes`
  MODIFY `relation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pre tabuľku `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pre tabuľku `saved`
--
ALTER TABLE `saved`
  MODIFY `relation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

DELIMITER $$
--
-- Udalosti
--
CREATE DEFINER=`root`@`localhost` EVENT `event1` ON SCHEDULE EVERY 1 DAY STARTS '2022-12-15 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE `posts` SET `likes`='0' WHERE 1$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
