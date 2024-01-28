-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2023 at 02:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `debug_demons`
--
CREATE DATABASE IF NOT EXISTS `debug_demons` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `debug_demons`;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(100) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `organizer` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `events`:
--   `user_id`
--       `users` -> `user_id`
--

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `image_path`, `organizer`, `category`, `date_time`, `date`, `time`, `location`, `description`, `user_id`) VALUES
(1, 'Toronto New Years Eve 2024 Boat Party\r\n', '../sharedenImg/65744c58c6272_IMG_1913.JPG', 'Casey', 'Food', '2023-11-30 12:37:00', '0000-00-00', '00:00:00', '3685 waterfall cresent', 'Bring in 2024 with a Boat Party on Jubilee Queen Cruises with music provided by Toronto\'s best DJs and views of the Toronto Skyline.\r\nWelcome to \"Art of Soul,\" an intimate concert series set in the heart of creativity at various art galleries across Ontario.', NULL),
(2, 'Stargazing To the Moon, the stars and the sun!! Come stargaze with us lol', '../sharedenImg/6579c3ef37db6_stargazing.jpg', 'Empire of the Sun', 'party', '2023-12-09 17:10:00', '0000-00-00', '00:00:00', 'Square One Mississauga', 'Come view the stars with us guys Itll be a pretty great crazy experience its a luna constellation so come view that shit. Whoever sees the sun of ozen becomes the firelord too and whoever finds the star of zeus becomes him!!', NULL),
(5, 'Football competition', '../sharedenImg/6579c42a28c04_spring.jpg', 'Casey', 'Food', '2023-12-09 18:14:00', '0000-00-00', '00:00:00', 'Sheridan Mac Hazel Campus', 'Come play ball with us my gs. Winner takes all. Also there\'s a money prize!!!!!! 5K dollars worth of Love for the winners of the soccer match!!!! So come join us rn and lets kick on and have some fun. If you want to meet up reach out to us through this mail and let us know. \r\n\r\ncasey@gmail.com', NULL),
(6, 'An Intimate Concert Series\r\n', '../sharedenImg/6570e586e4600_1f1.jpg', 'Kanye West', 'Party', '2023-12-11 16:19:00', '0000-00-00', '00:00:00', 'Jubilee Queen Cruises\r\n539 Queens Quay West Toronto, ON M5V 2G3\r\n', 'Hop on a magic school bus tour of 3+ eerily silent, empty, withering dead malls that somehow still exist.\r\nJoin us for a night of Trivia that will stump you! Grab some bites and a drink as you test your trivia ability!\r\nBrass Taps on College\r\nCome play ball with us my gs. Winner takes all.', NULL),
(7, 'Football competition', '../sharedenImg/65744c58c6272_IMG_1913.JPG', 'Casey', 'Education', '2023-12-20 06:14:00', '2023-12-20', '11:14:00', 'Sheridan Mac Hazel Campus', 'Come play ball with us my gs. Winner takes all.', NULL),
(8, 'testing new event', '../sharedenImg/6575179d22e86_5zfsu3.png', 'Dide', 'Party', '2023-12-21 00:42:00', '2023-12-19', '00:42:00', '3685 wanterloo', 'Remember, it\'s essential to properly authenticate users and protect against unauthorized access before allowing them to create events or perform any actions that modify the database.', 1),
(18, 'test', '../sharedenImg/65792d080286d_20230302_163505.jpg', 'Casey', 'Party', '2023-12-26 17:44:00', '2023-12-23', '23:06:00', 'home', 'mjlv fejkv fjkvf', 5),
(19, 'Harmonic Melodies Concert', '../sharedenImg/6579c165e1ba0_stargazing.jpg', 'Alexis Santa Ana', 'Party', '2023-12-22 09:34:00', '2023-12-21', '17:34:00', ' Central Park Amphitheater', 'Immerse yourself in an enchanting musical journey at the \"Harmonic Melodies Concert.\" Set against the backdrop of a starlit night at Central Park Amphitheater, this event promises an unforgettable experience. Renowned artists from jazz, classical, and contemporary genres will grace the stage, creating a symphony of emotions that resonates with the soul. The park transforms into a magical venue where the audience can unwind, surrounded by nature\'s beauty, and indulge in the sweet serenade of harmonic melodies. Let the music weave stories and emotions, creating memories that linger long after the final note.\r\n', 5),
(20, 'Tech Innovators Summit', '../sharedenImg/6579c1cf941a8_tech.jpg', 'Gloria ', 'Education', '2023-12-21 09:37:00', '2023-12-21', '13:37:00', 'Innovation Center, TechHub City', 'Join visionaries and tech enthusiasts at the \"Tech Innovators Summit\" in the Innovation Center, TechHub City. This summit is a convergence of brilliance, showcasing the latest breakthroughs in technology. Attendees will have the opportunity to engage with industry pioneers, explore hands-on exhibits, and participate in interactive sessions that delve into the future of innovation. From artificial intelligence to sustainable tech solutions, this summit provides a platform to connect, learn, and shape the technological landscape.\r\n\r\n', 5),
(21, 'Gourmet Delights Tasting', '../sharedenImg/6579c24c891ae_food.jpg', 'Casey', 'Food', '2023-12-07 09:39:00', '2023-12-27', '13:39:00', 'Downtown Culinary Loft', 'Indulge your senses in a culinary escapade at the \"Gourmet Delights Tasting\" in the Downtown Culinary Loft. This event invites food connoisseurs to savor an exquisite array of gourmet dishes. From tantalizing appetizers to decadent desserts, each bite is a symphony of flavors crafted by master chefs. Whether you\'re a gastronomic enthusiast or simply looking to treat your palate, this tasting event promises an evening of culinary delight and sophistication.\r\n', 3),
(22, 'Nature Explorer Hike', '../sharedenImg/6579c281f023d_hike.jpg', 'Anetor', 'Party', '2023-12-21 09:40:00', '2023-12-27', '13:40:00', 'Blue Ridge Mountain Trails', 'Embark on a thrilling adventure with the \"Nature Explorer Hike\" on the Blue Ridge Mountain Trails. This guided hike offers breathtaking vistas, serene trails, and the opportunity to reconnect with nature. Led by experienced naturalists, participants will traverse through lush forests, discover hidden waterfalls, and embrace the tranquility of the great outdoors. Whether you\'re an avid hiker or a nature enthusiast, this expedition promises a rejuvenating experience away from the hustle and bustle of city life.\r\n', 3),
(23, 'Literary Evening Extravaganza', '../sharedenImg/6579c2bc28e6b_library.jpg', 'Casey', 'Education', '2023-12-20 09:41:00', '2023-12-21', '14:41:00', 'Historic City Library', 'Immerse yourself in the magic of words at the \"Literary Evening Extravaganza\" in the Historic City Library. This event celebrates literature in all its forms. Acclaimed authors will engage the audience with captivating readings, profound discussions, and exclusive book signings. From classic literature to contemporary masterpieces, this evening promises to ignite the imagination and foster a love for storytelling. Book enthusiasts and casual readers alike are invited to a literary journey that transcends time and genres.\r\n', 3),
(24, ' Artistry Unveiled Exhibition', '../sharedenImg/6579c3088420e_artexhibition.jpg', 'Future', 'Party', '2023-12-21 09:42:00', '2023-12-20', '14:42:00', 'Downtown Art Gallery', 'Step into the world of creativity at the \"Artistry Unveiled Exhibition\" in the Downtown Art Gallery. This exhibition showcases an eclectic mix of visual expressions from local and international artists. From vibrant paintings to thought-provoking sculptures, each piece tells a unique story, inviting viewers to explore the depths of artistic imagination. The gallery becomes a vibrant tapestry of colors, textures, and ideas, creating an immersive experience for art enthusiasts and casual observers alike.', 1),
(25, 'Wellness Oasis Retreat', '../sharedenImg/6579c364f1aed_yoga.jpg', 'Casey', 'Party', '2023-12-28 09:44:00', '2023-12-27', '13:44:00', 'Serenity Wellness Center', 'Escape the stresses of daily life and embrace well-being at the \"Wellness Oasis Retreat\" in the Serenity Wellness Center. This retreat offers a holistic approach to health and happiness. Participants will engage in rejuvenating yoga sessions, mindfulness practices, and educational workshops led by experienced wellness professionals. Whether you\'re a seasoned wellness enthusiast or exploring a healthier lifestyle, this retreat provides a sanctuary for self-discovery and renewal.', 1),
(26, 'Starlit Cinema Night', '../sharedenImg/6579c3a03dc63_stargazing.jpg', 'Young Thug', 'Party', '2023-12-28 12:45:00', '2023-12-28', '14:45:00', 'Open-Air Amphitheater', 'Experience the magic of cinema under the stars at \"Starlit Cinema Night\" in the Open-Air Amphitheater. This event invites movie enthusiasts to bring blankets and snacks for a cinematic adventure beneath the night sky. The amphitheater transforms into a cozy haven, where friends and family can enjoy classic and contemporary films in a unique and enchanting setting. From romantic comedies to thrilling adventures, this outdoor movie night promises a nostalgic and memorable evening for movie lovers of all ages.\r\n', 1),
(27, 'Celestial Wonders Stargazing', '../sharedenImg/6579c3ef37db6_stargazing.jpg', 'Gunna', 'Education', '2023-12-28 09:46:00', '2023-12-27', '15:46:00', 'Stellar Observatory', 'Peer into the cosmos at the \"Celestial Wonders Stargazing\" event at the Stellar Observatory. This night sky exploration offers a rare opportunity to observe celestial phenomena with powerful telescopes. Accompanied by passionate astronomers, participants will unravel the mysteries of the universe, identify constellations, and witness the beauty of distant galaxies. Whether you\'re an astronomy enthusiast or a casual stargazer, this event promises a celestial journey that sparks wonder and awe.\r\n', 1),
(28, 'Networking Gala', '../sharedenImg/6579c42a28c04_spring.jpg', 'Metro Boomin', 'Party', '2023-12-21 09:47:00', '2023-12-29', '14:47:00', 'Grand Ballroom, Metropolitan Hotel', 'Elevate your professional network at the \"Networking Gala\" in the Grand Ballroom of the Metropolitan Hotel. This gala brings together industry leaders, entrepreneurs, and professionals for an evening of meaningful connections and collaboration. Engage in insightful conversations, exchange ideas, and foster partnerships in a dynamic atmosphere. From interactive panels to casual networking sessions, this gala provides a platform for individuals to expand their professional horizons and forge relationships that transcend business. Dress to impress and join us for a night of opportunity and innovation', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `users`:
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'test', 'test@gmail.com', '1234'),
(2, 'new', 'new@gmail.com', '1234'),
(3, 'casey', 'casey@gmail.com', '1234'),
(4, 'caseyae', 'caseyanetor@gmail.com', '1234'),
(5, 'sanchita', 'sanchita@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user_events`
--

CREATE TABLE `user_events` (
  `user_event_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `is_liked` tinyint(1) DEFAULT 0,
  `is_favorite` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `user_events`:
--   `user_id`
--       `users` -> `user_id`
--   `event_id`
--       `events` -> `event_id`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_events`
--
ALTER TABLE `user_events`
  ADD PRIMARY KEY (`user_event_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `event_id` (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_events`
--
ALTER TABLE `user_events`
  MODIFY `user_event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `user_events`
--
ALTER TABLE `user_events`
  ADD CONSTRAINT `user_events_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `user_events_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
