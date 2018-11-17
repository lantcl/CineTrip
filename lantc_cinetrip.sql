-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 16, 2018 at 12:31 PM
-- Server version: 5.5.61-cll
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lantc_cinetrip`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `id` int(11) NOT NULL,
  `actorid` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `birthday` year(4) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `actorid`, `firstname`, `lastname`, `birthday`, `nationality`, `photo`) VALUES
(1, 1, 'Sally', 'Hawkins', 1976, 'English', 'sally-hawkins.jpg'),
(2, 2, 'Doug', 'Jones', 1960, 'American', 'doug-jones.jpg'),
(3, 3, 'Tatiana', 'Maslany', 1985, 'Canadian', 'tatiana-maslany.jpg'),
(4, 4, 'Dylan', 'Bruce', 1980, 'Canadian', 'dylan-bruce.jpg'),
(5, 5, 'Daniel', 'Radcliffe', 1989, 'English', 'daniel-radcliffe.jpg'),
(6, 6, 'Zoe', 'Kazan', 1983, 'American', 'zoe-kazan.jpg'),
(7, 7, 'Hugh', 'Dancy', 1975, 'English', 'hugh-dancy.jpg'),
(8, 8, 'Mads', 'Mikkelsen', 1965, 'Danish', 'mads-mikkelsen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE `badges` (
  `id` int(11) NOT NULL,
  `badgeid` int(11) NOT NULL,
  `badgename` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `badges`
--

INSERT INTO `badges` (`id`, `badgeid`, `badgename`, `image`, `description`) VALUES
(1, 1, 'Horror Badge', '', 'Checked in at 5 locations in the Horror Genre.'),
(2, 2, 'Science-Fiction Badge', '', 'Checked in at 5 locations in the Science Fiction Genre.'),
(3, 3, 'Romance Badge', '', 'Checked in at 5 locations in the Romance Genre.'),
(4, 4, 'Comedy Badge', '', 'Checked in at 5 locations in the Comedy Genre.'),
(5, 5, 'Drama Badge', '', 'Checked in at 5 locations in the Drama Genre.'),
(6, 6, 'Fan Badge', '', 'Checked in at 10 locations in any Genre.'),
(7, 7, 'Super Fan Badge', '', 'Checked in at 20 locations in any Genre.'),
(8, 8, 'Film Buff Badge', '', 'Checked in at 35 locations in any Genre.'),
(9, 9, 'Expert Badge', '', 'Checked in at all locations of 1 film.'),
(10, 10, 'Director Badge', '', 'Check into 10 locations of 1 director of any film and genre.');

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `birthday` year(4) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`id`, `firstname`, `lastname`, `birthday`, `nationality`, `photo`) VALUES
(1, 'John', 'Fawcett', 1968, 'Canadian', ''),
(2, 'Guillermo', 'del Toro', 1964, 'Mexican ', ''),
(3, 'Brian', 'Fuller', 1969, 'American', ''),
(4, 'Michael', 'Dowse', 1973, 'Canadian', '');

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `releasedate` date NOT NULL,
  `tv` tinyint(1) NOT NULL,
  `film` tinyint(1) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `title`, `releasedate`, `tv`, `film`, `photo`) VALUES
(1, 'Hannibal', '2013-04-14', 1, 0, 'hannibal.jpg'),
(2, 'Orphan Black', '2013-03-30', 1, 0, 'orphan.jpg'),
(3, 'The Shape of Water', '2017-09-11', 0, 1, 'shapeofwater.jpg'),
(4, 'The F Word', '2013-09-07', 0, 1, 'fword.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `films-actors`
--

CREATE TABLE `films-actors` (
  `id` int(11) NOT NULL,
  `filmid` int(11) NOT NULL,
  `actorid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `films-actors`
--

INSERT INTO `films-actors` (`id`, `filmid`, `actorid`) VALUES
(1, 1, 7),
(2, 1, 8),
(3, 3, 1),
(4, 3, 2),
(5, 4, 5),
(6, 4, 6),
(7, 2, 3),
(8, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `films-directors`
--

CREATE TABLE `films-directors` (
  `id` int(11) NOT NULL,
  `filmid` int(11) NOT NULL,
  `directorid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `films-directors`
--

INSERT INTO `films-directors` (`id`, `filmid`, `directorid`) VALUES
(1, 1, 3),
(2, 2, 1),
(3, 3, 2),
(4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `films-genres`
--

CREATE TABLE `films-genres` (
  `id` int(11) NOT NULL,
  `filmid` int(11) NOT NULL,
  `genreid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `films-genres`
--

INSERT INTO `films-genres` (`id`, `filmid`, `genreid`) VALUES
(1, 1, 4),
(2, 2, 6),
(3, 3, 5),
(4, 4, 3),
(5, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `films-locations`
--

CREATE TABLE `films-locations` (
  `id` int(11) NOT NULL,
  `filmid` int(11) NOT NULL,
  `locationid` int(11) NOT NULL,
  `scene-episode` varchar(400) NOT NULL,
  `trivia` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `films-locations`
--

INSERT INTO `films-locations` (`id`, `filmid`, `locationid`, `scene-episode`, `trivia`) VALUES
(1, 1, 8, 'Season 3', 'The psych hospital’s exterior is the (again, augmented) administration building of Richmond Hill’s David Dunlap Observatory.'),
(2, 1, 7, 'Season 2', 'Key shots of the fountain'),
(3, 2, 5, '', 'Alley Scenes'),
(4, 2, 6, '', ''),
(5, 3, 2, '', ''),
(6, 3, 1, '', ''),
(7, 4, 3, '', ''),
(8, 4, 4, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `genreid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genreid`, `name`, `description`) VALUES
(1, 1, 'Action', 'Action films are usually big-budget and have physical stunts.'),
(2, 2, 'Comedy', 'Comedies are funny.'),
(3, 3, 'Romance', 'Romance movies are about love.'),
(4, 4, 'Horror', 'Horror movies are made to frighten and shock viewers.'),
(5, 5, 'Drama', 'Dramas are usually serious in tone and explore relationships, hardship, and character development. Drama has the most sub-genres'),
(6, 6, 'Science Fiction', 'Science Fiction films are about the future, space and technology. '),
(7, 7, 'Fantasy', 'Fantasy movies take place in another world. They often include mystical creatures.'),
(8, 8, 'Adventure', 'Adventure movies are often historical or fantasy as well. They focus on a journey.'),
(9, 9, 'War', 'War movies are about combat and often paired with genres such as action and romance.'),
(10, 10, 'Western', 'Westerns take place on the frontier and have some of the most recognizable visual archetypes. '),
(11, 11, 'Musical', 'The Musical tells a story through song and dance. '),
(12, 12, 'Crime', 'Crime films are a wide genre developed around the balance of good and evil.'),
(13, 13, 'Documentary ', 'Documentaries use real footage to explore a topic.'),
(14, 14, 'Historical', 'Also known as period films, historical films take place in the past.');

-- --------------------------------------------------------

--
-- Table structure for table `location-genres`
--

CREATE TABLE `location-genres` (
  `id` int(11) NOT NULL,
  `genreid` int(11) NOT NULL,
  `filmid` int(11) NOT NULL,
  `locationid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location-photos`
--

CREATE TABLE `location-photos` (
  `id` int(11) NOT NULL,
  `filmid` int(11) NOT NULL,
  `locationid` int(11) NOT NULL,
  `imagename` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location-photos`
--

INSERT INTO `location-photos` (`id`, `filmid`, `locationid`, `imagename`) VALUES
(1, 2, 6, 'bus.jpg'),
(2, 2, 6, 'busterminal.jpg'),
(3, 3, 1, 'elgin.jpg'),
(4, 3, 1, 'elginoutside.jpg'),
(5, 1, 8, 'dunlap.jpg'),
(6, 1, 8, 'dunlapadmin.jpg'),
(7, 1, 7, 'james.jpg'),
(8, 1, 7, 'james2.png'),
(9, 4, 4, 'spin.jpg'),
(10, 4, 4, 'spin2.jpg'),
(11, 4, 3, 'purpleinside.jpg'),
(12, 4, 3, 'purplepurl.jpg'),
(13, 2, 5, 'graffiti.jpg'),
(14, 2, 5, 'graffiti2.jpg'),
(15, 3, 2, 'lakeview.jpg'),
(16, 3, 2, 'lakeview2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `location-user-tips`
--

CREATE TABLE `location-user-tips` (
  `id` int(11) NOT NULL,
  `locationid` int(11) NOT NULL,
  `filmid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `tip` text NOT NULL,
  `dateadded` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `tips` text NOT NULL,
  `mapurl` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `address`, `name`, `description`, `tips`, `mapurl`) VALUES
(1, '189 Yonge Street, Toronto, ON M5B 1M4', 'Elgin Theatre', 'Built in the early 20th century (formerly Loews Yonge Street Theatre)\r\nSeven storeys above is the Elgin is the Winter Garden Theatre, making them the worlds last remaining Edwardian stacked theatres\r\n', 'Taken from Tripadvisor:\r\n“Riding up in century old elevator cars (refurbed obv.) to a beautiful theatre sets such a great tone for any movie going experience. Even better when it is a TIFF launch!”\r\n“There is always a great play to see here. Location is good, venue is beautiful, and there are restaurants nearby.”\r\n“Do the tour! Had the opportunity to attend Grease, but before the show we accidentally ended up on a tour of the theatre. Learned the history as we travelled throughout the whole theatre -- it made the evening performance even more special because we had an appreciation for the building we were in and the transformation that it had undergone.”\r\n', 'https://www.google.com/maps/place/Elgin+and+Winter+Garden+Theatre+Centre/@43.653072,-79.3793786,20.5z/data=!4m12!1m6!3m5!1s0x89d4cb3344bb0cd9:0xfb693006ac051ca2!2sElgin+and+Winter+Garden+Theatre+Centre!8m2!3d43.6530329!4d-79.3792955!3m4!1s0x89d4cb3344bb0cd9:0xfb693006ac051ca2!8m2!3d43.6530329!4d-79.3792955'),
(2, '1132 Dundas St, West, Toronto, ON M6J 1X2', 'The Lakeview Restaurant', 'Open since 1932\r\n“They’re known for their short but epic list of burgers” - blogTO\r\n', 'Taken from Tripadvisor:\r\n“We stopped for lunch at 11am on a Friday. There were only 2 other customers. We liked the feel of the restaurant and the staff was super friendly. The food was just average. Seems like a place that is in the wrong neighbourhood.”\r\n“While watching Diners, Drive Ins, and Dives one night this restaurant was featured. I jokingly said I wanted the apple pie milkshake from this joint. So my husband surprised me with a getaway to Toronto for our first anniversary. It was a great adventure maneuvering around the city. Loved the food and atmosphere here too.”\r\n', 'https://www.google.com/maps/place/The+Lakeview+Restaurant/@43.6495586,-79.4206221,19.75z/data=!4m13!1m7!3m6!1s0x882b34f965997979:0x33196539eee3b381!2s1132+Dundas+St+W,+Toronto,+ON+M6J+1X2!3b1!8m2!3d43.6495907!4d-79.4203852!3m4!1s0x882b34f965c36839:0xe6ec62c3892d7859!8m2!3d43.6495907!4d-79.4203852'),
(3, '1162 Queen St East, Toronto, ON M4M 1L5', 'The Purple Purl', 'Store that sells fine yarns and crafting tools\r\nHosts a stitch-in night every Tuesday\r\nHosts group classes on knitting and crochet and clinics\r\nKnitting cafe and retail store\r\n', 'Taken from Facebook:\r\n“The Purple Purl is colourful and fun. The smell of fresh roasted coffee greets you along with the exquisite palette of hand-dyed yarns. Helpful and friendly staff and customers who treat you like a welcome friend too. Love this shop!”\r\n“The store was beautiful! The workers were informed about their products and very welcoming! They had coffee drinks and cookies for sale, and super cosy couches to sit on. They even helped us find an easier way to get to our next location! Will definitely be back!”\r\n', 'https://www.google.com/maps/place/The+Purple+Purl/@43.6627247,-79.3328726,19.25z/data=!4m5!3m4!1s0x89d4cb9d264d8fbd:0xe9b0b759e0fffa8d!8m2!3d43.6628259!4d-79.3326087'),
(4, '461 King St West, Toronto, ON M5V 1K4', 'SPiN Toronto', 'Ping pong bar and lounge\r\n12000 sq ft\r\n12 ping pong tables, lounge, and private party room\r\nTwo bars\r\nHas a league\r\nEvents, tournaments, lessons\r\n', 'Taken from Tripadvisor:\r\n“Had a great time at SPiN this past week. It’s a great spot to hang out with friends, and is a good mix between nightlife and chill fun.”\r\n“You can go play ping pong!! So fun but make sure to go early or you may not even make the list. Yes...there is a list. Either way you will have a great time there!”\r\n“Unbelievably FUN, the place will resurrect your inner child for sure. It’s higher end than your regular pool hall atmosphere, but also super chill and just plain fun! The ball wranglers are awesome!”\r\n', 'https://www.google.com/maps/place/SPiN+Toronto/@43.6444814,-79.3962476,19.75z/data=!4m5!3m4!1s0x882b34d93915f4ff:0x6ef80c088444f733!8m2!3d43.6444564!4d-79.3960911'),
(5, 'Graffiti Alley, Toronto, ON M5V 2W1', 'Graffiti Alley', 'Location for the entrance Felix’s flat\r\nCan spot the signature of local muralist Uber5000 on the wall next to the gate\r\nGraffiti Alley is in the Fashion District of Toronto, and runs south of Queen Street West from Spadina Ave to Portland Street\r\nOne of the best-known locations to see graffiti in Toronto\r\nAbout a kilometre of artwork\r\nWhere Rick Mercer filmed his weekly Rick’s Rants\r\n', 'Taken from Tripadvisor:\r\n“So the graffiti is pretty cool. It spans for 3 blocks worth of buildings. It’s an alley so it’s a little funky and full of trash. It’s honestly the area on Queen Street that really makes it worth seeing. I walked up from the Financial District and the shops and neighbourhood around it was the best part.”\r\n“A hidden treasure and fun to walk along to see the talented art. Only takes a few minutes and well worth stopping by here.”\r\nVery cool. Very unique and some very impressive graffiti - grab a coffee and stroll the alley on a nice summer day.”\r\n“I am not sure what to say here… You could just walk by and not realize that there is something particular to see, before running into a group of tourists taking pictures… If you are not staying in the area, this should not be the only reason to come around”\r\n', 'https://www.google.com/maps/place/Graffiti+Alley,+Toronto,+ON/@43.6478858,-79.4003929,18.25z/data=!4m5!3m4!1s0x882b34dc5d1879bd:0xb1e3dea697e20389!8m2!3d43.6477085!4d-79.3995188'),
(6, '1606 Danforth Ave, Toronto, ON M4C 1H6', 'Bus Terminal Diner', 'Formerly Bus Terminal Family Restaurant\r\nShot in the first episode of season 2\r\nIs one of Danforth’s oldest restaurants, located behind Coxwell station since 1948\r\nClosed for a short time in 2016, but reopened in after longtime patron Tim Dutaud and restaurateur Kevin Wallace salvaged it\r\nClassic style diner with a retro, kitsch vibe\r\n', 'Taken from Tripadvisor:\r\n“The bus terminal is now closed. There are signs indicating that they plan to reopen as a new restaurant in September 2018, but as of October 1, 2018 it is still closed. Sad to see it close as it was a favourite for weekend brunch.”\r\n', 'https://www.google.com/maps/place/Bus+Terminal+Diner/@43.6837518,-79.3234793,19z/data=!4m5!3m4!1s0x89d4cc6f9bf3e1c3:0x9664df5482c4cb45!8m2!3d43.6836098!4d-79.3230327'),
(7, '120 King St. East, Toronto, ON M5C 1G6', 'St. James Park', 'Public park located next to St. James Cathedral in downtown Toronto\r\nVictorian-inspired park created in the early 20th century\r\nFeatures include: formal gardens, grand gazebo, water fountain, two small walking trails\r\nA popular spot for weddings\r\n', 'Taken from Tripadvisor:\r\n“Cute little park. On route to St. Lawrence Market we past by. It’s next to the cathedral. Only a little park but very quaint. Rather cheeky chap of a squirrel there too!”\r\n“There is a very pretty flower garden at the front of the park that is very well tended - not a weed in sight. Behind it is a grassed park area in which, I believe, they hold concerts in the summer.”\r\n“Beautiful city park in the summer. The flowers in the gardens are changed regularly. But have to say watch out for the homeless!”\r\n', 'https://www.google.com/maps/place/St.+James+Park/@43.6507863,-79.3735274,18.5z/data=!4m12!1m6!3m5!1s0x89d4cb310bcc037b:0xac6e6373b17149b1!2sSt.+James+Park!8m2!3d43.6508405!4d-79.3730599!3m4!1s0x89d4cb310bcc037b:0xac6e6373b17149b1!8m2!3d43.6508405!4d-79.3730599'),
(8, '123 Hillsview Dr, Richmond Hill, ON L4C 1T3', 'David Dunlap Observatory', 'The David Dunlap Observatory (DDO) opened in 1935\r\nFormerly owned and operated by the University of Toronto’s Department of Astronomy of Astrophysics (until 2008)\r\nIt is now operated by the Royal Astronomical Society of Canada, Toronto Centre and David Dunlap Observatory Defenders\r\nThe largest telescope in Canada\r\n', 'Taken from Tripadvisor:\r\n“Good for kids. The giant telescope is really cool! I learned lots of ‘spacey stuff!’ Go when it’s cooler though because when I went there were tons of bugs :P”\r\n“Great night thanks to the volunteers and speaker. Would definitely recommend visiting on a Speaker Night.”\r\n“The Dunlap Observatory has an interesting history; it costs little to get there and to enjoy the night. The grounds are gorgeous and a great place to picnic or just stroll around. A great place to take the family, a date, or some folks that may be visiting you from out of town.”\r\n“I think they are in a state of flux right now - issues with the town and the royal astronomical society. So it’s possible things are changing frequently”\r\n', 'https://www.google.com/maps/place/David+Dunlap+Observatory/@43.8624894,-79.4263445,15.75z/data=!4m12!1m6!3m5!1s0x882b2b07b3ac09df:0x42f25c90c349f24c!2sDavid+Dunlap+Observatory!8m2!3d43.8619017!4d-79.4229877!3m4!1s0x882b2b07b3ac09df:0x42f25c90c349f24c!8m2!3d43.8619017!4d-79.4229877');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `profilepic` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `reason` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `birthday`, `gender`, `profilepic`, `location`, `reason`) VALUES
(1, 'user', 'user', 'user', 'user', 'user@user.com', '0000-00-00', 'female', '', '', ''),
(2, 'test', 'test', 'Cleo', '', 'lantc@sheridancollege.ca', '2018-11-22', 'female', '', 'gta', 'casual'),
(3, 'test', 'test', 'test', 'test', 'lantc@sheridancollege.ca', '2018-11-14', 'male', 'andrew.jpg', 'toronto', 'other'),
(4, 'user', 'user', 'test', 'test', 'lantc@sheridancollege.ca', '0000-00-00', 'male', 'andrew.jpg', 'toronto', 'professional');

-- --------------------------------------------------------

--
-- Table structure for table `users-badges`
--

CREATE TABLE `users-badges` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `badgeid` int(11) NOT NULL,
  `dateearned` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users-checkins`
--

CREATE TABLE `users-checkins` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `locationid` int(11) NOT NULL,
  `filmid` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users-checkins`
--

INSERT INTO `users-checkins` (`id`, `userid`, `locationid`, `filmid`, `date`) VALUES
(1, 1, 7, 1, '2018-11-11 07:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `users-interests`
--

CREATE TABLE `users-interests` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `genreid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users-interests`
--

INSERT INTO `users-interests` (`id`, `userid`, `genreid`) VALUES
(1, 1, 4),
(2, 1, 6),
(4, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users-savedlocations`
--

CREATE TABLE `users-savedlocations` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `locationid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `badges`
--
ALTER TABLE `badges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `films-actors`
--
ALTER TABLE `films-actors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `films-directors`
--
ALTER TABLE `films-directors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `films-genres`
--
ALTER TABLE `films-genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `films-locations`
--
ALTER TABLE `films-locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location-genres`
--
ALTER TABLE `location-genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location-photos`
--
ALTER TABLE `location-photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location-user-tips`
--
ALTER TABLE `location-user-tips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users-badges`
--
ALTER TABLE `users-badges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users-checkins`
--
ALTER TABLE `users-checkins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users-interests`
--
ALTER TABLE `users-interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users-savedlocations`
--
ALTER TABLE `users-savedlocations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `badges`
--
ALTER TABLE `badges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `films-actors`
--
ALTER TABLE `films-actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `films-directors`
--
ALTER TABLE `films-directors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `films-genres`
--
ALTER TABLE `films-genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `films-locations`
--
ALTER TABLE `films-locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `location-genres`
--
ALTER TABLE `location-genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location-photos`
--
ALTER TABLE `location-photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `location-user-tips`
--
ALTER TABLE `location-user-tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users-badges`
--
ALTER TABLE `users-badges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users-checkins`
--
ALTER TABLE `users-checkins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users-interests`
--
ALTER TABLE `users-interests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users-savedlocations`
--
ALTER TABLE `users-savedlocations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
