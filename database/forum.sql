-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 26 jun 2019 om 14:10
-- Serverversie: 10.1.35-MariaDB
-- PHP-versie: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comment`
--

CREATE TABLE `comment` (
  `ID` int(11) NOT NULL,
  `thread_ID` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `thread1`
--

CREATE TABLE `thread1` (
  `ID` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `made` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `thread2`
--

CREATE TABLE `thread2` (
  `ID` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `made` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `thread3`
--

CREATE TABLE `thread3` (
  `ID` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `made` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `thread3`
--

INSERT INTO `thread3` (`ID`, `subject`, `content`, `made`) VALUES
(26, 'test', 'test', '2');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`ID`, `email`, `username`, `password`) VALUES
(30, 'henk@gmail.com', 'jacco', '$2y$10$XnDfSg7GrRkn8o5CnXMQF.O1GyQ4azkbWeNcWP'),
(31, 'donaldtrump@gmail.com', 'Donnie', '$2y$10$fVmVmB9sVVSfYr8R8jM0weaiZOUfqR6AoVHSaT'),
(32, 'kut@gmail.com', 'kut', '$2y$10$JhAnw.zYg/OWehDgYVKIqe/l43k14QkLBAt/wx'),
(33, 'test123@mail.com', 'test123', '$2y$10$po1Ein5U.R502yaQNXZ6ruz00oVpXb5bC5JQ1v'),
(34, 'moi@mail', '123', '$2y$10$piJTFdt2zZCDGDHYVEl4nucg6vW4LI2o8ZoEVC'),
(35, '1@1', '1', '$2y$10$yWAUmfmZhoNKaga8DFjlmew6Fx5sNwwKplq61qGRjAGb8jQIs4s3.'),
(36, '1@1', '1', '$2y$10$J2zkXO1RWf5SUD.fjvDaH.I3f7GX2lyz48sHMO4Ewi9fPvn6W.GO.'),
(37, '1@2', '2', '$2y$10$8Mp1HnPSSnskBHVUp.RqxOhJw7BrkXbKsrc9.zBlfvyC4yslrviia'),
(38, 'rlj.mennega@student.alfa-college.nl', 'Ramon Mennega', '$2y$10$0CuPfirpfUUavMI5pQZPAenlLs9j/tzFI0ch0Qzf0bY7q2HkWfajq');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `thread1`
--
ALTER TABLE `thread1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `thread2`
--
ALTER TABLE `thread2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `thread3`
--
ALTER TABLE `thread3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `thread1`
--
ALTER TABLE `thread1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `thread2`
--
ALTER TABLE `thread2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `thread3`
--
ALTER TABLE `thread3`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
