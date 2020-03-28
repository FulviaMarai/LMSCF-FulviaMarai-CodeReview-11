-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mar 28, 2020 alle 16:45
-- Versione del server: 10.4.11-MariaDB
-- Versione PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr11_fulviamarai_petadoption`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `pet`
--

CREATE TABLE `pet` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `breed` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `adoptable` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `hobbies` varchar(255) DEFAULT NULL,
  `web` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `ZIP` varchar(10) DEFAULT NULL,
  `coordLat` varchar(25) DEFAULT NULL,
  `coordLon` varchar(25) DEFAULT NULL,
  `size` enum('little','big') DEFAULT 'little',
  `country` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `pet`
--

INSERT INTO `pet` (`id`, `name`, `photo`, `breed`, `age`, `adoptable`, `description`, `hobbies`, `web`, `location`, `image`, `address`, `city`, `ZIP`, `coordLat`, `coordLon`, `size`, `country`) VALUES
(1, 'Peanut', 'https://cdn.pupmazing.com/wp-content/uploads/2019/03/puppy-2145278_1280-1024x682.jpg', 'pomeranian dog', 5, '0000-00-00', 'A fluffy ball of cuteness, with very small toungue', 'chasing butterfly', 'https://geo1.ggpht.com/cbk?panoid=5m75S7eiUO7kHHEsM8aFbQ&output=thumbnail&cb_client=search.gws-prod.gps&thumb=2&w=408&h=240&yaw=289.72232&pitch=0&thumbfov=100', 'private house', 'https://goo.gl/maps/7J2wBPGrDZUjMhpR6', 'Offenbachgasse 3', 'Wien', '1020', '48.215756', '16.416110', 'little', 'Austria'),
(2, 'Cotton', 'https://static.boredpanda.com/blog/wp-content/uploads/2014/03/cute-fluffy-animals-22.jpg', 'White Silkie (Bantam) hen', 2, '0000-00-00', 'Special breed of hen, famous for the beauty of their feathers and a cat-like temperament', 'pet exibitions & singing', 'https://www.mypetchicken.com/chicken-breeds/Silkie-Bantam-B100.aspx', 'private house', 'https://www.geschichtewiki.wien.gv.at/Datei:WSTLA_Fotoarchiv_Gerlach_FC1_01808m_v2.jpg', 'Czerningasse 9', 'Wien', '1020', '048.215084', '16.387875', 'little', 'Austria'),
(3, 'Mischa', 'https://images.fineartamerica.com/images/artworkimages/mediumlarge/1/2-young-cute-cat-resting-on-leather-sofa-the-british-shorthair-kitten-with-blue-gray-fur-michal-bednarek.jpg', 'british shorthair cat', 9, '2019-10-15', 'Elegant cat, professional napper, can look at you with disdain and disappointment.', 'naps & birdwatching ', 'https://www.youtube.com/watch?v=8vQKdHhRSBk', 'Mansfield supermarket', 'https://lh5.googleusercontent.com/p/AF1QipPQd8jsTlNOwVIUjf_2RCSRYpn9-DRz72gYv9VL=w408-h306-k-no', '82 Mansfield Rd', 'London', 'NW3 2HX', '51.554056', '-0.154306', 'little', 'Great Britain'),
(4, 'Coral', 'https://www.thesprucepets.com/thmb/N273Ny9ozOk2CO-ng2_G20HAzP0=/960x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/corn-snake-5af06f69875db9003784a64b.JPG', 'corn snake', 7, '0000-00-00', 'Slimy, scaly & fiercy little noodle, red as passion, with the cutest smile!', 'prestidigtation (she is amaster escapist!)', 'https://www.thesprucepets.com/corn-snakes-1236771', 'Lovely Rooms Hotel', 'https://lh4.googleusercontent.com/proxy/FzuDLks9rzjCh5ABG0s2gJD5LFb6Jcs27hNPvtal8G4SM6o4wjBt0L452IvCS3NzEOkGzUUuCyqb-9kaqtmeHVr52NYW7iVP1wijq4kY-Ilyq-BsEvey2vvHUZOl5D75TJ6T76RXMejRDEUCr-g9ryQ8OObKqg=w437-h240-k-no', ' 20-64 Saltram Cres', 'London', 'W9 3HW', '51.529848', '-0.198449', 'little', 'Great Britain'),
(5, 'Leafy', 'https://www.demilked.com/magazine/wp-content/uploads/2017/02/real-pokemon-digital-illustrations-joshua-dunlop-1.jpg', 'bulbasaur', 23, '2019-09-30', 'Fantastical breed, very rare, a sight to behold. Can become huge.', 'dispensing sage advices, gardening & putting out fires', '', 'Natural Regional Park of Ballons des Vosges', 'https://www.google.com/maps/d/viewer?msa=0&mid=1aN8K687UseiJGzqK_lCLYCFUrgI&ll=48.031762671806774%2C7.148205270635799&z=14', '2 Place des Verriers', 'Wildenstein', '68820', '47.977888', '6.960887', 'big', 'France'),
(6, 'Mariposa', 'https://www.demilked.com/magazine/wp-content/uploads/2015/11/new-hybrid-animals-photoshop-18.jpg', 'butterphant', 8, NULL, 'Majestic beast, with colorful ears that indoubtily cannot go unnoticed.', 'stargazing & art appreciation (expecially Picasso)', NULL, 'Zakouma National Park', 'https://lh5.googleusercontent.com/p/AF1QipO_C_Wz98d36BkE3G0jVO3SMIOttWtTWopxHSbJ=w408-h272-k-no', 'random places', 'Zakouma National Park', '7F2XRMQ4', '10.797534', '19.644940', 'big', 'Ciad'),
(7, 'Bamboo', 'http://www.pethealthnetwork.com/sites/default/files/styles/large/public/the-tibetan-mastiff179469705.png?itok=wUWyTeUk', 'tibetan mastiff', 7, NULL, 'A gentle giant, don´t tell him that look a carpet with legs!', 'doing martial arts, napping & baking', NULL, 'private house', 'https://goo.gl/maps/UtscxELKdoz6uZTb8', 'Drimey Lam', 'Thimphu', NULL, '27.469542', '89.634585', 'big', 'Bhutan'),
(8, 'Bailey', 'https://www.ilmiocaneleggenda.it/wp-content/uploads/2019/10/levriero-afgano.jpg', 'levriero afgano', 7, NULL, 'An elegant dog, perfect for a lady of great taste. Remember: she is a beauty and she know it!', 'walking in fashion show', '', 'private house', 'https://geo1.ggpht.com/cbk?panoid=76UM_0IhOf6Kzi2nQ8mrog&output=thumbnail&cb_client=search.gws-prod.gps&thumb=2&w=408&h=240&yaw=185.94658&pitch=0&thumbfov=100', 'Baumgartenstraße 44-60', 'Wien', '1140', '48.194143', '16.280442', 'big', 'Austria'),
(9, 'Smiley', 'https://www.petmd.com/sites/default/files/senior-staffordshire-bull-terrier-picture-id494571264.jpg', 'bull terrier', 11, '2018-10-28', 'Sweet ball of fur & fleas. Remember: you can teach new tricks to an old dogs!', 'chasing balls, napping & eating pizza ', NULL, 'private house', 'https://goo.gl/maps/t2YaQHLJWfLUg9qm8', 'Wienerstraße 19-13\r\n', 'Himberg bei Wien\r\n', '2325', '48.085200', '16.436315', 'little', 'Austria'),
(10, 'Cameo', 'https://i0.wp.com/bestlifeonline.com/wp-content/uploads/2018/11/Rhynchocyon_petersi_from_side.jpg?w=1200&ssl=1', 'elephant shrew', 4, '0000-00-00', 'A mysterious little critter, a rare specimen.. half elephant and half mouse. ', 'taxidermy', 'https://en.wikipedia.org/wiki/Elephant_shrew', 'Hanuman Temple', 'https://lh5.googleusercontent.com/p/AF1QipMAFcsrfuK56xhpMplXx8b8oDjeVdrPqvpQQZOj=w408-h306-k-no', 'Hanuman Temple St\r\n', 'Chandrala, Andhra Pradesh\r\n', '521230', '16.763303', '80.702535', 'little', 'India'),
(11, 'Bromach', 'https://i.etsystatic.com/9351246/r/il/9b078c/1768155432/il_794xN.1768155432_mupm.jpg', 'kelpie (nocturnal)', 129, '1908-03-25', 'Spirit of water, swamp and ponds.', 'swimming & tricking fools', NULL, 'Lochleven Castle', 'https://goo.gl/maps/ZUZkJNgww4x54MpH9', 'Lochleven Castle Ferry Landing\r\n', 'Kinross\r\n', '0', '56.200732', '-3.392605', 'big', 'Ireland'),
(12, 'Bubo', 'https://www.cremaonline.it/articoli/images/17387-1-ev_ga.jpg', 'eagle owl', 8, '2020-02-11', 'A rare breed, this bird has distinctive ear tufts, with upper parts that are mottled with darker blackish colouring and tawny. ', 'gingerbread house making', 'https://en.wikipedia.org/wiki/Eurasian_eagle-owl', 'La Boscarina Del Dott.Lunghi Mario', 'https://goo.gl/maps/4gJe89gaFagEVNBd7', 'Via Donati Pietro, 48\r\n', 'Crema\r\n', '26013', '45.385185', ' 9.702982', 'big', 'Italy');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `status` enum('user','admin') DEFAULT 'user',
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`userId`, `userName`, `status`, `userEmail`, `userPass`) VALUES
(1, 'Fulvia Marai', 'admin', 'marai78@libero.it', '9ae9a0d0b521d4390ebb7e08837b0bbcd098c25f2e989271b4092679926cf1af'),
(2, 'Cristiano Bazzan', 'user', 'topino@libero.it', '1718c24b10aeb8099e3fc44960ab6949ab76a267352459f203ea1036bec382c2');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `pet`
--
ALTER TABLE `pet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
