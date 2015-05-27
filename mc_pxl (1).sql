-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 21 mei 2015 om 18:38
-- Serverversie: 5.6.23
-- PHP-versie: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `mc_pxl`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `membersonly` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `membersonly`) VALUES
(1, 'members only', 'Only members will be able to view this category', 1),
(2, 'non-members', 'Both members and non-members will be able to view this category', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date DEFAULT NULL,
  `location` varchar(1000) NOT NULL,
  `xcoord` varchar(50) DEFAULT NULL,
  `ycoord` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden uitgevoerd voor tabel `events`
--

INSERT INTO `events` (`ID`, `title`, `description`, `date`, `location`, `xcoord`, `ycoord`) VALUES
(1, 'Unexpected Connections', 'From connecting mobile gaming with raising funds, to connecting the experience of food with the perception of pain. TEDxUHasselt 2014 speakers have one thing in common: they create breakthrough innovation by making unexpected connections.\r\n\r\nOn Saturday March 29th 2014, speakers from around the world will share innovative ideas in talks of maximum 18 minutes; creating the ultimate brain spa.', '2015-05-29', 'Hasselt', '50.9302835', '5.3965595'),
(2, 'TEDxUHasseltLive 2015: Do you dare to face the truth?', 'This is your chance to be among the few lucky ones to experience TED 2015 live, as it happens, on Wednesday, March 18th! TEDxUHasselt is proud to bring to you the live simulcast of the annual TED conference, held in Vancouver, Canada.\n\nWe will be streaming exciting and inspiring talks from the session titled Life Stories, covering themes like ethnical diversity, bringing more women into science, and jaw-dropping achievements. But wait, there is more! We are also organising a networking party, where you can catch up with fellow participants, learn more about TEDx, and grab some cheap drinks and delicious pizza slices!\n\nSo do not miss this opportunity, and go grab your FREE ticket now. The number of seats is limited, so do not wait too long. Oh, and tell your friends too. The event is open to everyone!\n\nPractical Information:\n\nDate: 18 March, 2015\n\nTime: 17:30 to 20:00 (Live-stream). Networking party afterwards.\n\nLocation: Aula H6, Agoralaan gebouw D, 3590 Diepenbeek', '2015-03-18', 'Aula H6, Agoralaan gebouw D, 3590 Diepenbeek', '50.9289019', '5.3898276'),
(3, 'TEDxUHasselt 2016: Challenge Accepted', 'TEDxUHasselt presents to you the theme for TEDxUHasselt 2016: CHALLENGE ACCEPTED!\r\n\r\nTaking UHasselt by storm in March 2016.\r\n\r\nMore details coming soon... Subscribe to our newsletter, or follow us on our social channels, to get the latest updates!', '2016-05-01', 'Hasselt, Diepenbeek', '50.9381436', '5.3487629');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `event_attenders`
--

CREATE TABLE IF NOT EXISTS `event_attenders` (
  `eventid` int(100) NOT NULL,
  `userid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `event_attenders`
--

INSERT INTO `event_attenders` (`eventid`, `userid`) VALUES
(1, 8);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emailadres` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden uitgevoerd voor tabel `newsletter`
--

INSERT INTO `newsletter` (`id`, `emailadres`) VALUES
(1, 'lemmens.9@gmail.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `posterID` int(10) NOT NULL,
  `guestname` text,
  `thread` int(10) NOT NULL,
  `message` longtext NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden uitgevoerd voor tabel `posts`
--

INSERT INTO `posts` (`id`, `posterID`, `guestname`, `thread`, `message`, `timestamp`) VALUES
(1, 8, NULL, 1, 'lorem ipsum', 1432230227),
(2, 8, NULL, 2, 'lorem ipsum', 1432230452),
(3, 8, NULL, 3, 'lorem ipsum', 1432230490),
(4, 8, NULL, 2, 'testbericht 2', 1432231948);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` int(10) NOT NULL,
  `title` varchar(256) NOT NULL,
  `authorid` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `membersonly` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Gegevens worden uitgevoerd voor tabel `topics`
--

INSERT INTO `topics` (`id`, `categorie`, `title`, `authorid`, `timestamp`, `membersonly`) VALUES
(1, 1, 'test-topic', 8, 1432230227, 1),
(2, 2, 'test', 8, 1432230452, 0),
(3, 1, 'test membersonly', 8, 1432230490, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) DEFAULT 'Member',
  `image` varchar(40) DEFAULT 'default.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Gegevens worden uitgevoerd voor tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`, `image`) VALUES
(8, 'Dieter Possen', 'dieter@possen.be', 'e7af287f7c896a07485ff47fed078512', 'Admin', 'ae0dEwv_460s.jpg'),
(11, 'Yannick Lemmens', 'lemmens.9@gmail.com', '9c337aaf8d50bdb5a69126867ce5e2c6', 'Admin', 'hqdefault.jpg'),
(12, 'Kevin De Leo', 'kevindeleo@hotmail.com', '4de821b132e2c393f7c52bf6e41a4331', 'Admin', 'default.jpg'),
(14, 'Brent Mellaerts', 'brent.mellaerts.bm@gmail.com', '0997d785133ba833a8223898aaa7d763', 'Admin', 'default.jpg'),
(22, 'Kevin Laeremans', 'Kevin@kevin.com', 'tetet', 'Admin', 'default.jpg'),
(23, 'test', 'lemmens.9@test.com', 'tetet', 'Member', 'default.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
