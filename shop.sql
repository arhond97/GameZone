-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Gru 2020, 11:51
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `shop`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `catId` int(11) NOT NULL,
  `catName` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `categories`
--

INSERT INTO `categories` (`catId`, `catName`) VALUES
(1, 'kategoria1'),
(2, 'kat2'),
(7, 'urzadzenia12');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `items`
--

CREATE TABLE `items` (
  `itemId` int(11) NOT NULL,
  `itemName` varchar(30) NOT NULL,
  `catId` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `items`
--

INSERT INTO `items` (`itemId`, `itemName`, `catId`, `stock`) VALUES
(1, 'słuchawki', 1, 10),
(2, 'klawiatura', 2, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL COMMENT 'id użytkownika',
  `username` varchar(30) NOT NULL COMMENT 'login użytkownika',
  `password` varchar(255) NOT NULL COMMENT 'hasło użytkownika',
  `name` varchar(30) NOT NULL COMMENT 'imię użytkownika',
  `surname` varchar(50) NOT NULL COMMENT 'nazwisko użytkownika',
  `permission` varchar(20) NOT NULL COMMENT 'uprawnienia użytkownika'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`userId`, `username`, `password`, `name`, `surname`, `permission`) VALUES
(1, 'admin', '$2y$10$MFNp4h3HgeCRSYN8jkZugOZN12vxIfsmgjp6rcZ.Eqd6MbrttCokK', 'Admin', 'Admin', 'admin'),
(2, 'user', '$2y$10$9YfAu1vrRxCLG12uY5E6luBVZFZrLd7jgQxxIDbyzYfHlBYxnMSgS', 'Jan', 'Kowalski', 'user'),
(9, 'us', '$2y$10$HEZHNhJEirh9MsmxLg/ZU.Kn6TRSnOmgDLRTn8Nt.QMmpEAPYOX6G', 'us', 'us', 'user'),
(10, 'user1', '$2y$10$N8PuPtDCBVWBAGwTljikheia/FppJ2ILalqMeKR6ktEBVf.RCMfhC', 'user1', 'user1', 'user');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catId`);

--
-- Indeksy dla tabeli `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemId`),
  ADD KEY `catId` (`catId`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `items`
--
ALTER TABLE `items`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id użytkownika', AUTO_INCREMENT=11;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`catId`) REFERENCES `categories` (`catId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
