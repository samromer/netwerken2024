-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 13 mrt 2024 om 12:55
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcbuilder`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestellingen`
--

CREATE TABLE `bestellingen` (
  `KlantID` int(30) NOT NULL,
  `videokaart` varchar(30) NOT NULL,
  `processor` varchar(30) NOT NULL,
  `moederbord` varchar(30) NOT NULL,
  `RAM` varchar(30) NOT NULL,
  `behuizing` varchar(30) NOT NULL,
  `SSD` varchar(30) NOT NULL,
  `HDD` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `bestellingen`
--

INSERT INTO `bestellingen` (`KlantID`, `videokaart`, `processor`, `moederbord`, `RAM`, `behuizing`, `SSD`, `HDD`) VALUES
(31, 'test', 'test', 'test', 'test', 'test', 'test', 'test'),
(32, 'test', 'test', 'test', 'test', 'test', 'test', 'test'),
(33, 'test', 'test', 'test', 'test', 'test', 'test', 'test'),
(34, 'test', 'test', 'test', 'test', 'test', 'test', 'test'),
(35, 'test', 'test', 'test', 'test', 'test', 'test', 'test'),
(36, '1660', '2700x', '', '', '', '', ''),
(37, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klantgegevens`
--

CREATE TABLE `klantgegevens` (
  `KlantID` int(11) NOT NULL,
  `Voornaam` varchar(50) DEFAULT NULL,
  `Achternaam` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `straat` varchar(50) DEFAULT NULL,
  `huisnmr` int(10) DEFAULT NULL,
  `Postcode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `klantgegevens`
--

INSERT INTO `klantgegevens` (`KlantID`, `Voornaam`, `Achternaam`, `email`, `tel`, `straat`, `huisnmr`, `Postcode`) VALUES
(2, '', '', '', '', '', 0, ''),
(3, '', '', '', '', '', 0, ''),
(4, 'Bas', 'Garretsen', '', '', '', 0, ''),
(5, '', '', 'bdgbg@df', '', '', 0, '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `email` varchar(30) NOT NULL,
  `wachtwoord` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`email`, `wachtwoord`) VALUES
('admin@123', '123');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bestellingen`
--
ALTER TABLE `bestellingen`
  ADD PRIMARY KEY (`KlantID`);

--
-- Indexen voor tabel `klantgegevens`
--
ALTER TABLE `klantgegevens`
  ADD PRIMARY KEY (`KlantID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bestellingen`
--
ALTER TABLE `bestellingen`
  MODIFY `KlantID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT voor een tabel `klantgegevens`
--
ALTER TABLE `klantgegevens`
  MODIFY `KlantID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
