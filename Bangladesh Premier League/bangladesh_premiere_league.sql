-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2017 at 09:11 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bangladesh_premiere_league`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`, `password`) VALUES
(1, 'mejbah', '5001'),
(2, 'kazi', '1234'),
(3, 'milon', '5678');

-- --------------------------------------------------------

--
-- Table structure for table `batting_perfomance`
--

CREATE TABLE `batting_perfomance` (
  `player_id` int(11) NOT NULL,
  `team_name` varchar(20) NOT NULL,
  `player_name` varchar(30) NOT NULL,
  `matches` int(20) DEFAULT NULL,
  `runs` int(22) DEFAULT NULL,
  `highest_scores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batting_perfomance`
--

INSERT INTO `batting_perfomance` (`player_id`, `team_name`, `player_name`, `matches`, `runs`, `highest_scores`) VALUES
(1, 'barisal bulls', 'mahmudullah ', 13, 300, 45),
(2, 'rangpur riders', 'shakib al hasan', 13, 333, 40),
(7, 'barisal bulls', 'chris gayle', 4, 139, 75),
(10, 'chittagong vikings', 'anamul haque', 10, 142, 55),
(11, 'sylhet superstars', 'mushfiqur Rahim', 10, 155, 65),
(12, 'chittagong vikings', 'Tamim Iqbal khan', 10, 298, 0),
(15, 'comilla victorians', 'imrul kayes', 12, 312, 0),
(16, 'chittagong vikings', 'tm dilshan', 10, 260, 0),
(45, 'sylhet superstars', 'jahurul islam', 11, 215, 0),
(50, 'sylhet superstars', 'Sabbir Rahman', 5, 123, 0);

-- --------------------------------------------------------

--
-- Table structure for table `best_batting_strike_rate`
--

CREATE TABLE `best_batting_strike_rate` (
  `player_name` varchar(30) NOT NULL,
  `runs` int(11) NOT NULL,
  `matches` int(11) NOT NULL,
  `balls` int(11) NOT NULL,
  `strike_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `best_bowling_figures`
--

CREATE TABLE `best_bowling_figures` (
  `player_name` varchar(30) NOT NULL,
  `bowling_figure` varchar(11) NOT NULL,
  `own_team` varchar(30) NOT NULL,
  `against` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `best_bowling_figures`
--

INSERT INTO `best_bowling_figures` (`player_name`, `bowling_figure`, `own_team`, `against`) VALUES
('Mahmudullah Riad', '3/33', 'Barisal Bulls', 'Dhaka Dynamites');

-- --------------------------------------------------------

--
-- Table structure for table `best_economy`
--

CREATE TABLE `best_economy` (
  `player_id` int(11) NOT NULL,
  `player_name` varchar(30) NOT NULL,
  `overs` float DEFAULT NULL,
  `runs_conceded` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `best_economy`
--

INSERT INTO `best_economy` (`player_id`, `player_name`, `overs`, `runs_conceded`) VALUES
(0, 'Sakib', 22.3, 1263);

-- --------------------------------------------------------

--
-- Table structure for table `bowling_perfomance`
--

CREATE TABLE `bowling_perfomance` (
  `player_id` int(10) NOT NULL,
  `team_name` varchar(19) NOT NULL,
  `player_name` varchar(20) NOT NULL,
  `matches` int(13) NOT NULL,
  `wicket` int(12) NOT NULL,
  `best_figure` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bowling_perfomance`
--

INSERT INTO `bowling_perfomance` (`player_id`, `team_name`, `player_name`, `matches`, `wicket`, `best_figure`) VALUES
(1, 'barisal bulls', 'mahmudullah', 12, 5, 4),
(2, 'rangpur riders', 'shakib al hasan', 11, 18, 3),
(6, 'comilla victorians', 'mashrafe mortaza', 12, 5, 4),
(19, 'Dhaka Dynamites', 'mustafizur rahman', 10, 14, 0),
(20, 'barisal bulls', 'kk cooper', 9, 22, 0),
(23, 'comilla victorians', 'abu haider', 12, 21, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(23) NOT NULL,
  `comment` text NOT NULL,
  `blog_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `comment`, `blog_num`) VALUES
(20, 'jhh', '   bdhsbdshd', 0),
(21, 'opo', '   is it okaY', 0),
(22, 'mejbah', ' Sylhet got fine players', 0),
(23, 'tamim', '   luv u my friend', 0),
(24, 'gu', '   gu is the best', 2),
(25, 'ddsd', '  sdsds ', 2),
(26, 'iui', '   klkl', 2),
(27, 'kazi', '   misbah uddin shaem', 1),
(28, 'kazi', '', 1),
(29, 'kazi', '   uiu', 1),
(30, 'kazi', '   milok', 1),
(31, 'kazi', '   ', 1),
(32, 'kazi', '   ', 1),
(33, 'kazi', 'hhdsdishdsihdsid', 1),
(34, 'kazi', 'hhh', 1),
(35, 'kazi', 'mushi khela pare na\r\n', 1),
(36, 'kazi', 'i am okay now', 2),
(37, 'kazi', 'KIIIIILHJHHJHJHJHHJHJ', 1),
(38, 'kazi', 'k', 1),
(39, 'kazi', 'lutha bpl', 1),
(40, 'kazi', 'iiii', 1),
(41, 'kazi', 'jj', 3);

-- --------------------------------------------------------

--
-- Table structure for table `highest_individual_scores`
--

CREATE TABLE `highest_individual_scores` (
  `player_name` varchar(30) NOT NULL,
  `run` int(11) NOT NULL,
  `against` varchar(30) NOT NULL,
  `own_team` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `highest_team_total`
--

CREATE TABLE `highest_team_total` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(30) NOT NULL,
  `score` int(11) NOT NULL,
  `against` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `live_score`
--

CREATE TABLE `live_score` (
  `match_id` int(11) NOT NULL,
  `team1bat` varchar(40) NOT NULL,
  `team1bowl` varchar(40) NOT NULL,
  `team2bat` varchar(40) NOT NULL,
  `team2bowl` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `live_score`
--

INSERT INTO `live_score` (`match_id`, `team1bat`, `team1bowl`, `team2bat`, `team2bowl`) VALUES
(13, '60/0', '6.0', '40/3', '8.0');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `player_id` int(11) NOT NULL,
  `player_name` varchar(30) NOT NULL,
  `jersey_no` int(11) NOT NULL,
  `country` varchar(25) NOT NULL,
  `team` varchar(35) NOT NULL,
  `age` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  `matches` int(11) NOT NULL,
  `runs` int(11) NOT NULL,
  `wickets` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`player_id`, `player_name`, `jersey_no`, `country`, `team`, `age`, `role`, `matches`, `runs`, `wickets`) VALUES
(1, 'mahmudullah riyad', 36, 'bangladesh', 'Chittagong Vikings', 30, 'allrounder', 97, 1512, 44),
(6, 'mashrafe mortaza', 49, 'bangladesh', 'Comilla Victorians', 33, 'bowler', 88, 597, 74),
(7, 'chris gayle', 333, 'west indies', 'Barisal Bulls', 37, 'Allrounder', 233, 8567, 72),
(10, 'anamul haque', 56, 'bangladesh', 'Dhaka Dynamites', 23, 'wicketkeeper', 62, 1425, 0),
(11, 'mushfiqur rahim', 15, 'bangladesh', 'Barisal Bulls', 29, 'Wicketkeeper batsman', 95, 1796, 0),
(12, 'Tamim Iqbal Khan', 29, 'bangladesh', 'Sylhet Superstars', 27, 'Opening batsman', 102, 2594, 0),
(13, 'Kumar Sangakkara', 11, 'sri lanka', 'Chittagong Vikings', 39, 'wicketkeeper batsman', 182, 4668, 0),
(14, 'kohli', 12, 'India', 'Rangpur Riders', 35, 'batsman', 189, 3568, 15);

-- --------------------------------------------------------

--
-- Table structure for table `req`
--

CREATE TABLE `req` (
  `match_id` int(11) NOT NULL,
  `fin` varchar(20) NOT NULL,
  `sin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `summary`
--

CREATE TABLE `summary` (
  `match_id` int(11) NOT NULL,
  `team1` varchar(25) NOT NULL,
  `team2` varchar(25) NOT NULL,
  `first_innings_score` varchar(10) NOT NULL,
  `second_innings_score` varchar(10) NOT NULL,
  `date` varchar(20) NOT NULL,
  `winner` varchar(255) NOT NULL,
  `result` varchar(999) NOT NULL,
  `toss_winner` varchar(25) NOT NULL,
  `decision` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `summary`
--

INSERT INTO `summary` (`match_id`, `team1`, `team2`, `first_innings_score`, `second_innings_score`, `date`, `winner`, `result`, `toss_winner`, `decision`) VALUES
(1, 'Rangpur Riders', 'Dhaka Dynamites', '135/7', '136/4 ', '6/12/2015', 'Rangpur Riders', 'Rangpur Riders won by 6 wickets', ' Dhaka Dynamites', 'Bat'),
(2, 'Barisal Bulls', 'Chittagong Vikings', '170/7 ', '137/10', '30/11/2015', 'Barisal Bulls', 'Barisal Bulls won by 33 runs', 'Chittagong Vikings', 'Bowl'),
(3, 'Comilla Victorians', 'Barisal Bulls', ' 89 /10', '90/2', '25/11/2015', 'Barisal Bulls', 'Barisal Bulls won by 8 wickets', 'Barisal Bulls', 'Bat'),
(4, ' Sylhet Super Stars ', 'Dhaka Dynamites', '157/5 ', '162/4 ', '9/12/2015', ' Sylhet Super Stars ', ' Sylhet Super Stars won by 6 wickets', 'Sylhet Super Stars', 'Bowl'),
(6, 'chittagong Vikings', 'Rangpur Riders', '165/8', '163', '7/12/2015', 'chittagong Vikings', 'chittagong Vikings won by 2 runs', 'Rangpur Riders', 'Bowl');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` int(2) NOT NULL,
  `team_name` varchar(20) NOT NULL,
  `sponsors` varchar(20) NOT NULL,
  `owner` varchar(20) NOT NULL,
  `worth` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `team_name`, `sponsors`, `owner`, `worth`) VALUES
(2, 'Dhaka Dynamites', 'Beximco', 'shayan fazlur rahman', 10000000),
(3, 'Chittagong Vikings', 'BBL', 'abdul Wahed', 20000000),
(4, 'Comilla Victorians', 'Royal Sporting Ltd', 'Nafisa kamal', 30000000),
(5, 'Barisal Bulls', 'Exiom', 'Shahin Anam', 35000000),
(6, 'Sylhet Superstars', 'Alif group', 'Sujauddin prasad', 40000000),
(7, 'Rangpur Riders', 'I sports', 'Rafiqul Alam', 26000000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fav_team` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `password`, `fav_team`) VALUES
(1, 'kazi', 'kaziuuu', '1234', 'myteam'),
(2, 'iqbal', 'kj', '12345', 'myteam'),
(3, 'milon', 'nabshab', '123', 'myteam'),
(4, 'tonmou', 'dfdf', '221111', 'myteam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `batting_perfomance`
--
ALTER TABLE `batting_perfomance`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `best_economy`
--
ALTER TABLE `best_economy`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `bowling_perfomance`
--
ALTER TABLE `bowling_perfomance`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `summary`
--
ALTER TABLE `summary`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `summary`
--
ALTER TABLE `summary`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
