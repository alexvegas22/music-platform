-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2022 at 10:18 PM
-- Server version: 10.5.6-MariaDB
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wave`
--
CREATE DATABASE IF NOT EXISTS `wave` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wave`;

-- --------------------------------------------------------

--
-- Table structure for table `musique`
--

DROP TABLE IF EXISTS `musique`;
CREATE TABLE IF NOT EXISTS `musique` (
  `lien` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `artist` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musique`
--

INSERT INTO `musique` (`lien`, `title`, `artist`, `image`, `id`) VALUES
('music/LMN222DRP.wav', 'LMN222DRP', 'kaleidoplasm', 'https://freemusicarchive.org/image/?file=track_image%2FyU8zK8EaC4aOfw0GgvdrDfyY9oMpiatRA6FfFgTy.jpg&width=290&height=290&type=track', 1),
('music/Innapad.wav', 'Inna&nbsp;pad', 'Blue&nbsp;Mar&nbsp;Ten', 'https://i1.sndcdn.com/artworks-000004187771-zi0naf-t500x500.jpg', 2),
('music/jazz1.wav', 'Jazz1', 'Unknown', 'images/breakcore.jpg', 3),
('music/jazz2.wav', 'Jazz2', 'Unknown', 'images/breakcore.jpg', 4),
('music/jazz3.wav', 'Jazz3', 'Unknown', 'images/breakcore.jpg', 5),
('music/jazz4.wav', 'Jazz4', 'Unknown', 'images/breakcore.jpg', 6),
('music/RDConnecting.wav', 'Connecting...', 'Chrome&nbsp;System&nbsp;LTD', 'images/renderDistance.png', 7),
('music/RD_CompactSuite.wav', 'Compact&nbsp;Suite', 'Chrome&nbsp;System&nbsp;LTD', 'images/renderDistance.png', 8),
('music/RD_DialupNetworking.wav', 'Dialup&nbsp;Networking', 'Chrome&nbsp;System&nbsp;LTD', 'images/renderDistance.png', 9),
('music/RD_DotcomMillenium.wav', 'Dotcom&nbsp;Millenium', 'Chrome&nbsp;System&nbsp;LTD', 'images/renderDistance.png', 10),
('music/RD_EchoMotionWire.wav', 'Echo&nbsp;Motion&nbsp;Wire', 'Chrome&nbsp;System&nbsp;LTD', 'images/renderDistance.png', 11),
('music/RD_MobileTelecom.wav', 'Mobile&nbsp;Telecom', 'Chrome&nbsp;System&nbsp;LTD', 'images/renderDistance.png', 12),
('music/RD_SphericalRaycast.wav', 'Spherical&nbsp;Raycast', 'Chrome&nbsp;System&nbsp;LTD', 'images/renderDistance.png', 13),
('music/RD_Symbian.wav', 'Symbian', 'Chrome&nbsp;System&nbsp;LTD', 'images/renderDistance.png', 14),
('music/RD_SystemShutdown.wav', 'System&nbsp;Shutdown', 'Chrome&nbsp;System&nbsp;LTD', 'images/renderDistance.png', 15);

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

DROP TABLE IF EXISTS `playlist`;
CREATE TABLE IF NOT EXISTS `playlist` (
  `nom` varchar(100) NOT NULL,
  `user_id` int(20) NOT NULL,
  `id` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `username` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`nom`, `user_id`, `id`) VALUES
('RenderDistance', 1, 1),
('JazzBreaks', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `playlistsong`
--

DROP TABLE IF EXISTS `playlistsong`;
CREATE TABLE IF NOT EXISTS `playlistsong` (
  `song_id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `song_id` (`song_id`),
  KEY `playlist_id` (`playlist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlistsong`
--

INSERT INTO `playlistsong` (`song_id`, `playlist_id`, `id`) VALUES
(7, 1, 1),
(8, 1, 2),
(11, 1, 5),
(12, 1, 6),
(13, 1, 7),
(14, 1, 8),
(15, 1, 9),
(3, 3, 19),
(4, 3, 20),
(6, 3, 22);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `nom` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `myplaylists` (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nom`, `username`, `password`, `photo`, `id`) VALUES
('admin', 'admin', 'root', 'images\\user.png', 1),
('Alex', 'alexvegas', 'root', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/SNice.svg/1200px-SNice.svg.png', 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `playlistsong`
--
ALTER TABLE `playlistsong`
  ADD CONSTRAINT `fk_playlist` FOREIGN KEY (`playlist_id`) REFERENCES `playlist` (`id`),
  ADD CONSTRAINT `fk_song` FOREIGN KEY (`song_id`) REFERENCES `musique` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
