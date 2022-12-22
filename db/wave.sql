-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2022 at 05:28 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `musique`
--

CREATE TABLE `musique` (
  `lien` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `artist` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL
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

CREATE TABLE `playlist` (
  `nom` varchar(100) NOT NULL,
  `user_id` int(20) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `playlistsong` (
  `song_id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlistsong`
--

INSERT INTO `playlistsong` (`song_id`, `playlist_id`, `id`) VALUES
(7, 1, 1),
(8, 1, 2),
(9, 1, 3),
(10, 1, 4),
(11, 1, 5),
(12, 1, 6),
(13, 1, 7),
(14, 1, 8),
(15, 1, 9),
(3, 3, 19),
(4, 3, 20),
(5, 3, 21),
(6, 3, 22),
(6, 3, 26);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nom` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nom`, `username`, `password`, `photo`, `id`) VALUES
('admin', 'admin', 'root', 'images\\user.png', 1),
('Alex', 'alexvegas', 'root', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/SNice.svg/1200px-SNice.svg.png', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `musique`
--
ALTER TABLE `musique`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`user_id`);


--
-- Indexes for table `playlistsong`
--
ALTER TABLE `playlistsong`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `song_id` (`song_id`),
  ADD KEY `playlist_id` (`playlist_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `myplaylists` (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `playlistsong`
--
ALTER TABLE `playlistsong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
