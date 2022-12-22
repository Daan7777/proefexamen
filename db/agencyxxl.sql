-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 dec 2022 om 14:40
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `agencyxxl`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `companyacc`
--

CREATE TABLE `companyacc` (
  `id` int(11) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipCode` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `companyacc`
--

INSERT INTO `companyacc` (`id`, `companyName`, `firstName`, `middleName`, `lastName`, `email`, `phoneNumber`, `address1`, `address2`, `city`, `state`, `zipCode`, `country`, `password`) VALUES
(21, 'test', 'Daniël', '', 'van Montfoort', 'Detvanmontfoort@gmail.com', '+31624764996', 'Jolstraat 8', '', 'DEN HELDER', 'Select a state', '1784NK', 'Nederland', '$2y$10$huHSwVlt9vsejOObz1lO0uR85akYKKk4cfdXsF0d7DQXF3wf1gURC'),
(22, 'test', 'Daniël', '', 'van Montfoort', '1Detvanmontfoort@gmail.com', '+31624764996', 'Jolstraat 8', '', 'DEN HELDER', 'Select a state', '1784NK', 'Nederland', '$2y$10$G6aTdhRAZm9Sh/qiYeqzqeBR.w5S4Kv5lw0uRznM6xZrr9YlqQIQu');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `privateacc`
--

CREATE TABLE `privateacc` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipCode` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `privateacc`
--

INSERT INTO `privateacc` (`id`, `firstName`, `middleName`, `lastName`, `email`, `phoneNumber`, `address1`, `address2`, `city`, `state`, `zipCode`, `country`, `password`) VALUES
(6, 'Daniël', '', 'van Montfoort', 'Detvanmontfoort@gmail.com', '+31624764996', 'Jolstraat 8', '', 'DEN HELDER', 'Select a state', '1784NK', 'Nederland', '$2y$10$cChyS8XDcvsTCSdHVOo6XujIS.H6kOG41QM3FrfZbsl98wdbl/EqK');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `resume`
--

CREATE TABLE `resume` (
  `id` int(5) NOT NULL,
  `education` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `category` varchar(50) NOT NULL,
  `availability` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vacancy`
--

CREATE TABLE `vacancy` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `datePlaced` date NOT NULL,
  `education` varchar(50) NOT NULL,
  `period` varchar(50) NOT NULL,
  `yearSalary` decimal(25,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `companyacc`
--
ALTER TABLE `companyacc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexen voor tabel `privateacc`
--
ALTER TABLE `privateacc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexen voor tabel `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `companyacc`
--
ALTER TABLE `companyacc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT voor een tabel `privateacc`
--
ALTER TABLE `privateacc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;
