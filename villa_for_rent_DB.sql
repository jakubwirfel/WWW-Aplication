-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Gru 2019, 21:39
-- Wersja serwera: 10.4.10-MariaDB
-- Wersja PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `villa_for_rent`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `hotels`
--

CREATE TABLE `hotels` (
  `id_hotel` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `main_img` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL,
  `place` varchar(10) NOT NULL,
  `price` decimal(8,0) NOT NULL,
  `l_area` int(4) NOT NULL,
  `persons` int(2) NOT NULL,
  `bedrooms` int(2) NOT NULL,
  `bathrooms` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `hotels`
--

INSERT INTO `hotels` (`id_hotel`, `name`, `main_img`, `location`, `place`, `price`, `l_area`, `persons`, `bedrooms`, `bathrooms`) VALUES
(1, 'Villa Perfect', './hotels_img/villa-perfect-1.jpg', 'Hungary Dalmatia', 'Coast', '350', 200, 9, 4, 4),
(2, 'Villa Jasmina', './hotels_img/villa-jasmina-1.jpg', 'Hungary Istria', 'Coast', '326', 342, 8, 4, 4),
(3, 'Villa 2m', './hotels_img/villa-2m-1.jpg', 'Hungary Dalmatia', 'Coast', '327', 160, 8, 3, 3),
(4, 'Villa la reina', './hotels_img/villa-la-reina-1.jpg', 'Hungary Istra', 'Coast', '1443', 700, 10, 5, 5),
(5, 'Villa Paulina', './hotels_img/villa-paulina-1.jpg', 'Hungary Dubrovnik', 'Coast', '850', 450, 12, 5, 7),
(6, 'Villa Costanza', './hotels_img/villa-costanza-1.jpg', 'Hungary Istria', 'Coast', '326', 262, 8, 4, 4),
(7, 'Villa Zara', './hotels_img/villa-zara-1.jpg', 'Turkey Alanya', 'Coast', '400', 190, 7, 3, 2),
(8, 'Villa Sunsetloft', './hotels_img/villa-sunset-loft-1.jpg', 'Turkey Izmir', 'Country', '399', 536, 10, 5, 5),
(9, 'Villa Duga', './hotels_img/villa-duga-1.jpg', 'Turkey Antalya', 'Country', '356', 350, 14, 7, 7),
(10, 'Villa Royale', './hotels_img/villa-royale-1.jpg', 'Turkey Istanbul', 'Country', '580', 425, 8, 4, 2),
(11, 'Villa Ana', './hotels_img/villa-ana-1.jpg', 'Greece Kriti', 'Coast', '379', 260, 10, 5, 5),
(12, 'Villa San Bartolo', './hotels_img/villa-san-bartolo-1.jpg', 'Italy Palermo', 'Country', '350', 200, 6, 3, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_preferences` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `email`, `email_preferences`) VALUES
(1, 'Jakub', '58bc81a03e1b78fc118ca8d2e813a9f8', 'jakubwirfel@gmail.com', 0),
(2, 'agasshi', '8309cf0782583b4e80ef1c9d0c1f406f', 'agasshi@onet.eu', 1),
(39, 'test', '13bade984aa416220470ca3f82bf5fb8', 'test@test', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT dla tabel zrzutów
--

--
-- AUTO_INCREMENT dla tabeli `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
