-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Cze 2020, 23:07
-- Wersja serwera: 10.4.8-MariaDB
-- Wersja PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `dane`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kluby`
--

CREATE TABLE `kluby` (
  `Id` int(11) NOT NULL,
  `Nazwa_klubu` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `miasto` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `ilosc_graczy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kluby`
--

INSERT INTO `kluby` (`Id`, `Nazwa_klubu`, `miasto`, `ilosc_graczy`) VALUES
(1, 'Falcons', 'Tychy', 80),
(2, 'Panthers', 'Wrocław', 97),
(3, 'Armada', 'Szczecin', 68),
(4, 'Rebels', 'Silesia', 64),
(5, 'Lowlanders', 'Białystok', 84);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zawodnicy`
--

CREATE TABLE `zawodnicy` (
  `Id` int(11) NOT NULL,
  `Imie` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Nazwisko` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Waga` int(11) NOT NULL,
  `Wzrost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zawodnicy`
--

INSERT INTO `zawodnicy` (`Id`, `Imie`, `Nazwisko`, `Waga`, `Wzrost`) VALUES
(1, 'Karol', 'Rzepa', 135, 205),
(5, 'Arkadiusz', 'Cieślok', 114, 185),
(6, 'Michał', 'Faber', 115, 198),
(7, 'Tomasz', 'Dziedzic', 80, 180),
(8, 'Tony', 'Dawson', 83, 183);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kluby`
--
ALTER TABLE `kluby`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `zawodnicy`
--
ALTER TABLE `zawodnicy`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kluby`
--
ALTER TABLE `kluby`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `zawodnicy`
--
ALTER TABLE `zawodnicy`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
