-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2022 at 04:19 AM
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

CREATE TABLE IF NOT EXISTS `musique`  (
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
