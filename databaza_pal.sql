-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Št 17.Nov 2022, 16:16
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
-- Databáza: `databaza_pal`
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
(1, 5, 1, 0),
(2, 6, 1, 0);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `posts`
--

CREATE TABLE `posts` (
  `ID` int(11) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_photo_dir` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `img_dir` varchar(255) NOT NULL,
  `likes` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `posts`
--

INSERT INTO `posts` (`ID`, `author_name`, `author_photo_dir`, `msg`, `img_dir`, `likes`, `time`) VALUES
(5, '', '', 'Du bist eine kleine schweine\r\n', 'images/web/716ASj7z2GL._AC_UF894,1000_QL80_.jpg', 0, '2022-11-17 15:41:19'),
(6, '', '', 'PICE tam aj ', 'images/web/HORIZONT.png', 0, '2022-11-17 15:50:07');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
