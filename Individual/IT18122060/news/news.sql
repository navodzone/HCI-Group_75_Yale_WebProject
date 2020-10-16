-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2020 at 07:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(5) NOT NULL,
  `title` varchar(128) NOT NULL,
  `image` varchar(64) NOT NULL,
  `imgPosition` text NOT NULL DEFAULT '\'center\'',
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `imgPosition`, `content`, `date`) VALUES
(1, 'Yale school of art receives generous gift, establishes new art and social justice initiative', '6.jpg', 'center', 'ABOUT\r\nThe Yale School of Art’s Art and Social Justice Initiative aims to foster an awareness as to how a practicing artist in today’s landscape is both challenged and influenced by the current climate of political and social dissonance, turmoil of public opinion, and structural problems of inequity—all amid rising costs of graduate art education.\r\n\r\nFounded in November 2017 by Stavros Niarchos Foundation Dean and Professor of Art Marta Kuzma, and launched by a $750,000 gift from an anonymous Yale alumnus, the Art and Social Justice Initiative endeavors toward equity in graduate visual arts education, within which personal or social circumstances, race, gender, ethnic origin, or economic background might in no way serve as an obstacle to higher learning.\r\n\r\nThe Initiative proceeds in:\r\n\r\nPursuit of scholarships for financial aid to foster increased diversity and inclusion in graduate arts education.\r\nCommunity outreach and engagement in the form of programs and offerings that promote e', '2017-11-06'),
(2, 'Yale school of art mourns the passing of william bailey', '1.jpg', 'top', 'We are saddened to share the news with the School of Art community that William Bailey, distinguished alumnus, former dean and faculty member, as well as the Kingman Brewster Professor Emeritus of Art, passed away on April 13, 2020 at his home in Branford, Connecticut due to complications from an existing illness. Regarded in his art practice for his meditative approach to realism, Bailey was an esteemed member of the Yale School of Art faculty and community, and he played a pivotal role in informing and developing its pedagogy for nearly three decades.\r\n\r\nHaving earned both his BFA in 1955 and his MFA in 1957 at what was then the Yale School of Art and Architecture, William “Bill” Bailey joined the faculty as a Professor of Art in 1969 before his appointment as Dean from 1974 to 1975. During his time as Professor and then as Dean, Bailey was essential in fostering a sense of academic continuity as the institution formally became designated as the Yale School of Art when the School of ', '2020-04-17'),
(3, '2020 presidential visiting fellow in fine arts: mickalene thomas', '2.png', 'center', 'The Yale School of Art announces the appointment of Mickalene Thomas as the 2020 Presidential Visiting Fellow in Fine Arts. Stavros Niarchos Foundation Dean Marta Kuzma notes: “We are honored to have Mickalene Thomas join the Yale School of Art faculty throughout 2020 as a black feminist artist whose practice contributes to the evolving conversation around post-blackness, sexuality and power. She is a fierce mentor who has supported emerging queer black artists, through fostering critical conversations and assisting with professional development.”\r\n\r\n\r\nIn a practice that spans from painting, collage, and photography to video and installation, Mickalene Thomas creates art historically-informed work that recasts the central protagonists as women of color in the creation of a new art history that references both the civil rights movement and second wave feminism. Thomas explores pictorial strategies around African American women. Charlotte Burns, the executive editor of In Other Words, writ', '2019-11-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
