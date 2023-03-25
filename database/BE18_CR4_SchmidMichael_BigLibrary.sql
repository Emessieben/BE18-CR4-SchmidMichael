-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 25. Mrz 2023 um 15:50
-- Server-Version: 10.4.27-MariaDB
-- PHP-Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `BE18_CR4_SchmidMichael_BigLibrary`
--
CREATE DATABASE IF NOT EXISTS `BE18_CR4_SchmidMichael_BigLibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `BE18_CR4_SchmidMichael_BigLibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `ISBN` varchar(13) NOT NULL,
  `short_description` varchar(5000) DEFAULT NULL,
  `type` varchar(10) NOT NULL,
  `author_first_name` varchar(50) DEFAULT NULL,
  `author_last_name` varchar(50) DEFAULT NULL,
  `publisher_name` varchar(50) DEFAULT NULL,
  `publisher_address` varchar(200) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `library`
--

INSERT INTO `library` (`id`, `title`, `image`, `ISBN`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES
(1, 'Atomic Habits', 'https://bilder.buecher.de/produkte/52/52820/52820873n.jpg', '9781473537804', 'People think that when you want to change your life, you need to think big. But world-renowned habits expert James Clear has discovered another way. He knows that real change comes from the compound effect of hundreds of small decisions – doing two push-ups a day, waking up five minutes early, or holding a single short phone call.', 'book', 'James', 'Clear', 'Random House', 'New York City', '2018-10-16', 'available'),
(2, 'Factfulness', 'https://bilder.buecher.de/produkte/54/54462/54462131n.jpg', '9781250123817', 'Factfulness explains how our worldview has been distorted with the rise of new media, which ten human instincts cause erroneous thinking, and how we can learn to separate fact from fiction when forming our opinions.', 'book', 'Hans', 'Rosling', 'Flatiron Books', 'New York City', '2018-02-28', 'reserved'),
(3, 'Getting Things Done', 'https://images.thalia.media/00/-/7642a2e1d8044686bb07a58f8ac4a4bc/getting-things-done-taschenbuch-david-allen-englisch.jpeg', '9780349423142', 'Getting Things Done is a manual for stress-free productivity, which helps you set up a system of lists, reminders and weekly reviews, in order to free your mind from having to remember tasks and to-dos and instead let it work at full focus on the task at hand.', 'book', 'David', 'Allen', 'Little, Brown Book Group', 'Boston', '2019-07-04', 'available'),
(4, 'Shoe Dog', 'https://images.thalia.media/-/BF2000-2000/be8c6aaefe444aec8aeffa4b1c686e38/shoe-dog-gebundene-ausgabe-phil-knight.jpeg', '9781501135910', 'Shoe Dog is a memoir by Nike co-founder Phil Knight. The memoir chronicles the history of Nike from its founding as Blue Ribbon Sports and its early challenges to its evolution into one of the worlds most recognized and profitable companies. It also highlights certain parts of Phil Knights life.', 'book', 'Phil', 'Knight', 'Scrible', 'New York City', '2017-08-20', 'available'),
(5, 'Elon Musk', 'https://images.thalia.media/00/-/5b9c00561df146c0b39c16df17ef652e/elon-musk-taschenbuch-ashlee-vance-englisch.jpeg', '9780753555644', 'Elon Musk paints a portrait of a complex man who has renewed American industry and sparked new levels of innovation—from PayPal to Tesla, SpaceX, and SolarCity—overcoming hardship, earning billions, and making plenty of enemies along the way.', 'book', 'Ashlee', 'Vance', 'Virgin Books', 'New York City', '2016-03-10', 'available'),
(6, 'Think and Grow Rich', 'https://images.thalia.media/00/-/e61935b951dc48449f1b4a20519fe679/think-and-grow-rich-deutsche-ausgabe-taschenbuch-napoleon-hill.jpeg', '9780785833529', 'Think and Grow Rich by Napoleon Hill examines the psychological power of thought and the brain in the process of furthering your career for both monetary and personal satisfaction. Originally published in 1937, this is one of the all-time self-help classics and a must read for investors and entrepreneurial types.', 'book', 'Napoleon', 'Hill', 'Book Sales', 'Washington', '1937-01-01', 'available'),
(7, 'Steve Jobs', 'https://images.thalia.media/00/-/7cf88a87160e46cca7fc89c852053aad/steve-jobs-taschenbuch-walter-isaacson.jpeg', '9780748131327', 'A minded perfectionist, Steve Jobs had a vision of changing the world through technology. In this best-selling biography, you will learn that while perfectionism and desire drove Jobs to achieve greatness, it was his personality that was the cause of discord and conflict.', 'book', 'Walter', 'Isaacson', 'Hachette Digital', 'Texas', '2011-10-24', 'available'),
(8, 'Eragon', 'https://images.thalia.media/00/-/558dbf0eaa9149ae85a4e00ed9c91e73/inheritance-01-eragon-taschenbuch-christopher-paolini-englisch.jpeg', '9781407047201', 'When poor farm boy Eragon finds a polished stone in the forest, he thinks it’s a lucky discovery. Perhaps, he will be able to buy his family food for the winter. But, when a baby dragon hatches out of the stone, Eragon realises he’s stumbled upon a legacy nearly as old as the Empire itself. His simple life is shattered, and he’s thrust into a perilous new world of destiny, magic and power. To navigate this dark terrain, and survive his cruel king’s evil ways, he must take up the mantle of the legendary Dragon Riders.', 'book', 'Christopher', 'Paolini', 'Penguin Random House', 'London', '2009-03-08', 'available'),
(9, 'Harry Potter and the Philosopher`s Stone', 'https://images.thalia.media/00/-/d380296e634f4bfeb4b61c7313c8fdaf/harry-potter-1-and-the-philosopher-s-stone-taschenbuch-j-k-rowling-englisch.jpeg', '9781408855898', 'When a letter arrives for unhappy but ordinary Harry Potter, a decade-old secret is revealed to him that apparently he`s the last to know. His parents were wizards, killed by a Dark Lord`s curse when Harry was just a baby, and which he somehow survived. Leaving his unsympathetic aunt and uncle for Hogwarts, a wizarding school brimming with ghosts and enchantments, Harry stumbles upon a sinister mystery when he finds a three-headed dog guarding a room on the third floor. Then he hears of a missing stone with astonishing powers which could be valuable, dangerous - or both. An incredible adventure is about to begin! These new editions of the classic and internationally bestselling, multi-award-winning series feature instantly pick-up-able new jackets with huge child appeal, to bring Harry Potter to the next generation of readers.', 'book', 'Joanne', 'Rowling', 'Bloomsbury', 'London', '2014-01-09', 'available'),
(10, '1984', 'https://images.thalia.media/00/-/3f9944adb91944fa97f4e733b940d71f/nineteen-eighty-four-1984-taschenbuch-george-orwell-englisch.jpeg', '9783548225623', '1984 is a dystopian novella by George Orwell published in 1949, which follows the life of Winston Smith, a low ranking member of \"he Party\", who is frustrated by the omnipresent eyes of the party, and its ominous ruler Big Brother. \"Big Brother\" controls every aspect of people`s lives.', 'book', 'George', 'Orwell', 'Ullstein', 'Munich', '1949-06-08', 'reserved'),
(11, 'Harry Potter and the Chamber of Secrets', 'https://images.thalia.media/00/-/5561d8e0d64b4f70a48a1e6dda51032a/harry-potter-2-and-the-chamber-of-secrets-taschenbuch-j-k-rowling-englisch.jpeg', '9781408855669', 'The second adventure in the spellbinding Harry Potter saga - the series that changed the world of books forever Harry Potter`s summer has included the worst birthday ever, doomy warnings from a house-elf called Dobby, and rescue from the Dursleys...', 'book', 'Joanne', 'Rowling', 'Bloomsbury', 'London', '2014-09-11', 'available'),
(12, 'Harry Potter and the Prisoner of Azkaban', 'https://images.thalia.media/-/BF2000-2000/3f6eab6e99024f779ab988be9d7d04d3/harry-potter-and-the-prisoner-of-azkaban-taschenbuch-j-k-rowling-englisch.jpeg', '9781408855676', 'It\'s time to PASS THE MAGIC ON - with brand new children\'s editions of the classic and internationally bestselling series The third book in the global phenomenon series that changed the world of books forever When the Knight Bus crashes...', 'book', 'Joanne', 'Rowling', 'Bloomsbury', 'London', '2014-01-09', 'available');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
