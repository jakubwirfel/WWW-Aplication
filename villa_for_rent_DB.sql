-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Sty 2020, 15:02
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
  `hotel_price` decimal(8,0) NOT NULL,
  `l_area` int(4) NOT NULL,
  `persons` int(2) NOT NULL,
  `bedrooms` int(2) NOT NULL,
  `bathrooms` int(2) NOT NULL,
  `seperate_toilet` int(2) NOT NULL,
  `distance_to_sea` varchar(4) NOT NULL,
  `year_of_build` int(4) NOT NULL,
  `pets` varchar(10) NOT NULL,
  `young_groups` varchar(15) NOT NULL,
  `airport` varchar(4) NOT NULL,
  `beach` varchar(4) NOT NULL,
  `city` varchar(4) NOT NULL,
  `pharmacy` varchar(4) NOT NULL,
  `pub` varchar(4) NOT NULL,
  `restaurant` varchar(4) NOT NULL,
  `sea` varchar(4) NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `tv` tinyint(1) NOT NULL,
  `pool` tinyint(1) NOT NULL,
  `parking` tinyint(1) NOT NULL,
  `grill` tinyint(1) NOT NULL,
  `espresso` tinyint(1) NOT NULL,
  `baby` tinyint(1) NOT NULL,
  `washing` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `hotels`
--

INSERT INTO `hotels` (`id_hotel`, `name`, `main_img`, `location`, `place`, `hotel_price`, `l_area`, `persons`, `bedrooms`, `bathrooms`, `seperate_toilet`, `distance_to_sea`, `year_of_build`, `pets`, `young_groups`, `airport`, `beach`, `city`, `pharmacy`, `pub`, `restaurant`, `sea`, `wifi`, `tv`, `pool`, `parking`, `grill`, `espresso`, `baby`, `washing`) VALUES
(1, 'Villa Perfect', './hotels_img/villa-perfect-1.jpg', 'Hungary Dalmatia', 'Coast', '350', 200, 9, 4, 4, 1, '500m', 2013, 'On request', 'Allowed', '25km', '500m', '2km', '3km', '3km', '4km', '500m', 1, 1, 1, 1, 0, 0, 0, 1),
(2, 'Villa Jasmina', './hotels_img/villa-jasmina-1.jpg', 'Hungary Istria', 'Coast', '326', 342, 8, 4, 4, 0, '250m', 2017, 'On request', 'Allowed', '45km', '600m', '5km', '3km', '5km', '5km', '600m', 1, 1, 1, 0, 0, 1, 1, 1),
(3, 'Villa 2m', './hotels_img/villa-2m-1.jpg', 'Hungary Dalmatia', 'Coast', '327', 160, 8, 3, 3, 1, '300m', 2015, 'On request', 'Not Allowed', '35km', '300m', '3km', '3km', '5km', '2km', '400m', 1, 1, 1, 1, 1, 1, 0, 1),
(4, 'Villa la reina', './hotels_img/villa-la-reina-1.jpg', 'Hungary Istra', 'Coast', '1443', 700, 10, 5, 5, 0, '240m', 2016, 'On request', 'Not allowed', '25km', '300m', '1km', '4km', '3km', '6km', '300m', 1, 1, 1, 1, 1, 1, 1, 1),
(5, 'Villa Paulina', './hotels_img/villa-paulina-1.jpg', 'Hungary Dubrovnik', 'Coast', '850', 450, 12, 5, 7, 1, '540m', 2018, 'On request', 'Not allowed', '65km', '600m', '6km', '4km', '4km', '2km', '700m', 1, 1, 1, 1, 1, 1, 1, 1),
(6, 'Villa Costanza', './hotels_img/villa-costanza-1.jpg', 'Hungary Istria', 'Coast', '326', 262, 8, 4, 4, 0, '400m', 2016, 'On request', 'Allowed', '42km', '400m', '2km', '4km', '6km', '4km', '400m', 1, 1, 1, 0, 0, 0, 0, 0),
(7, 'Villa Zara', './hotels_img/villa-zara-1.jpg', 'Turkey Alanya', 'Coast', '400', 190, 7, 3, 2, 1, '300m', 2018, 'On request', 'Allowed', '63km', '340m', '7km', '4km', '2km', '4km', '400m', 1, 1, 1, 1, 0, 1, 1, 1),
(8, 'Villa Sunsetloft', './hotels_img/villa-sunset-loft-1.jpg', 'Turkey Izmir', 'Country', '399', 536, 10, 5, 5, 1, '3km', 2014, 'On request', 'Allowed', '34km', '3km', '6km', '8km', '6km', '9km', '6km', 1, 1, 1, 1, 1, 0, 1, 1),
(9, 'Villa Duga', './hotels_img/villa-duga-1.jpg', 'Turkey Antalya', 'Country', '356', 350, 14, 7, 7, 1, '2km', 2016, 'On request', 'Allowed', '63km', '2km', '8km', '5km', '8km', '8km', '2km', 1, 1, 1, 1, 0, 1, 1, 0),
(10, 'Villa Royale', './hotels_img/villa-royale-1.jpg', 'Turkey Istanbul', 'Country', '580', 425, 8, 4, 2, 1, '1km', 2015, 'On request', 'Allowed', '75km', '1km', '6km', '4km', '3km', '3km', '1km', 1, 1, 1, 0, 1, 0, 1, 0),
(11, 'Villa Ana', './hotels_img/villa-ana-1.jpg', 'Greece Kriti', 'Coast', '379', 260, 10, 5, 5, 1, '100m', 2016, 'On request', 'Not allowed', '53km', '100m', '2km', '2km', '2km', '2km', '100m', 1, 1, 1, 0, 0, 1, 1, 1),
(12, 'Villa San Bartolo', './hotels_img/villa-san-bartolo-1.jpg', 'Italy Palermo', 'Country', '350', 200, 6, 3, 3, 1, '4km', 2015, 'On request', 'Allowed', '34km', '4km', '4km', '4km', '6km', '5km', '4km', 1, 1, 1, 0, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` char(13) NOT NULL,
  `client_name` varchar(20) NOT NULL,
  `client_surname` varchar(30) NOT NULL,
  `client_phone` varchar(16) NOT NULL,
  `client_email` varchar(40) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `massage` text DEFAULT NULL,
  `price` int(6) NOT NULL,
  `is_user` tinyint(1) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_hotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `client_name`, `client_surname`, `client_phone`, `client_email`, `adults`, `children`, `check_in`, `check_out`, `massage`, `price`, `is_user`, `id_user`, `id_hotel`) VALUES
('1111111111111', 'Test', 'Test', '517823845', 'test@test', 4, 4, '2019-12-20', '2019-12-30', 'test test test', 0, 1, 39, 7),
('5dfe1edb70e7f', 'test', 'test', '435 533 532', 'test@test', 5, 1, '2020-01-17', '2020-01-24', '', 2492, 1, 39, 9);

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
-- Indeksy dla tabeli `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_hotel` (`id_hotel`);

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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_hotel`) REFERENCES `hotels` (`id_hotel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
