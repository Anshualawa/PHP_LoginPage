-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2023 at 08:00 AM
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
-- Database: `PracticeDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `PlayerList`
--

CREATE TABLE `PlayerList` (
  `player_id` int(11) NOT NULL,
  `TeamName` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `squadeCategory` varchar(100) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `PlayerList`
--

INSERT INTO `PlayerList` (`player_id`, `TeamName`, `name`, `squadeCategory`, `img`) VALUES
(1, 'PBKS', 'Shahrukh Khan', 'Batsman', 'https://www.punjabkingsipl.in/static-assets/images/players/64721.png?v=5.6'),
(2, 'PBKS', 'Atharva Taide', 'Batsman', 'https://www.punjabkingsipl.in/static-assets/images/players/67910.png?v=5.6'),
(3, 'PBKS', 'Arshdeep Singh', 'Bowler', 'https://www.punjabkingsipl.in/static-assets/images/players/67905.png?v=5.6'),
(4, 'PBKS', 'Baltej Singh', 'Bowler', 'https://www.punjabkingsipl.in/static-assets/images/players/59234.png?v=5.6'),
(5, 'PBKS', 'Gurnoor Brar', 'Bowler', 'https://www.punjabkingsipl.in/static-assets/images/players/90572.png?v=5.6'),
(6, 'PBKS', 'Harpreet Singh', 'Batsman', 'https://www.punjabkingsipl.in/static-assets/images/players/5211.png?v=5.6'),
(7, 'PBKS', 'Shikhar Dhawan', 'Batsman', 'https://www.punjabkingsipl.in/static-assets/images/players/3722.png?v=5.6'),
(8, 'PBKS', 'Bhanuka Rajapaksa', 'Batsman', 'https://www.punjabkingsipl.in/static-assets/images/players/10183.png?v=5.6'),
(9, 'PBKS', 'Shivam Singh', 'Batsman', 'https://www.punjabkingsipl.in/static-assets/images/players/91592.png?v=5.6'),
(10, 'PBKS', 'Kagiso Rabada', 'Bowler', 'https://www.punjabkingsipl.in/static-assets/images/players/63611.png?v=5.6'),
(11, 'PBKS', 'Harpreet Brar', 'Bowler', 'https://www.punjabkingsipl.in/static-assets/images/players/70500.png?v=5.6'),
(41, 'MI', 'Rohit Sharma', 'Batsman', 'https://www.mumbaiindians.com/static-assets/images/players/large/3852.png?v=3.76&w=200'),
(73, 'MI', 'Devald Brevis', 'Batsman', 'https://www.mumbaiindians.com/static-assets/images/players/large/84562.png?v=3.76&w=200'),
(74, 'MI', 'Suryakumar Yadav', 'Batsman', 'https://www.mumbaiindians.com/static-assets/images/players/large/11803.png?v=3.76&w=200'),
(75, 'MI', 'Nehal Wadhera', 'Batsman', 'https://www.mumbaiindians.com/static-assets/images/players/large/69657.png?v=3.76&w=200'),
(76, 'MI', 'Ramandeep Singh', 'Batsman', 'https://www.mumbaiindians.com/static-assets/images/players/large/66953.png?v=3.76&w=200'),
(77, 'MI', 'Tilak Varma', 'Batsman', 'https://www.mumbaiindians.com/static-assets/images/players/large/70761.png?v=3.76&w=200'),
(78, 'MI', 'Tristan Stubbs', 'Batsman', 'https://www.mumbaiindians.com/static-assets/images/players/large/74761.png?v=3.76&w=200'),
(80, 'MI', 'Arjun Tendulkar', 'Bowler', 'https://www.mumbaiindians.com/static-assets/images/players/large/69659.png?v=3.76&w=200'),
(81, 'MI', 'Arshad Khan', 'Bowler', 'https://www.mumbaiindians.com/static-assets/images/players/large/82839.png?v=3.76&w=200'),
(82, 'MI', 'Akash Madhwal', 'Bowler', 'https://www.mumbaiindians.com/static-assets/images/players/large/74055.png?v=3.76&w=200'),
(83, 'MI', 'Duan Jansen', 'Bowler', 'https://www.mumbaiindians.com/static-assets/images/players/large/70815.png?v=3.76&w=200'),
(141, 'GT', 'Shubman Gill', 'Batsman', 'https://www.gujarattitansipl.com/static-assets/images/players/66818.png?v=4.44'),
(142, 'GT', 'Hardik Pandya', 'Batsman', 'https://www.gujarattitansipl.com/static-assets/images/players/63751.png?v=4.44'),
(144, 'GT', 'Wriddhiman Saha', 'WK-Batsman', 'https://www.gujarattitansipl.com/static-assets/images/players/4508.png?v=4.44'),
(145, 'GT', 'Sai Sudharsan', 'Batsman', 'https://www.gujarattitansipl.com/static-assets/images/players/69500.png?v=4.44'),
(146, 'GT', 'David Miller', 'Batsman', 'https://www.gujarattitansipl.com/static-assets/images/players/5313.png?v=4.44'),
(147, 'GT', 'Rahul Tewatia', 'Batsman Allrounder', 'https://www.gujarattitansipl.com/static-assets/images/players/64440.png?v=4.44'),
(148, 'GT', 'Rashid Khan', 'Bowler Allrounder', 'https://www.gujarattitansipl.com/static-assets/images/players/65748.png?v=4.44'),
(149, 'GT', 'Vijay Shankar', 'Batsman Allrounder', 'https://www.gujarattitansipl.com/static-assets/images/players/61738.png?v=4.44'),
(150, 'GT', 'Mohit Sharma', 'Bowler', 'https://www.gujarattitansipl.com/static-assets/images/players/63341.png?v=4.44'),
(151, 'GT', 'Noor Ahmad', 'Bowler', 'https://www.gujarattitansipl.com/static-assets/images/players/71411.png?v=4.44'),
(158, 'GT', 'Mohmmed Shami', 'Bowler', 'https://www.gujarattitansipl.com/static-assets/images/players/28994.png?v=4.44'),
(491, 'CSK', 'Devon Conway', 'Batter', 'https://gallery.chennaisuperkings.com/PROD/SQUAD/7.png'),
(492, 'CSK', 'MS Dhoni', 'Wicket Keeper', 'https://gallery.chennaisuperkings.com/PROD/SQUAD/8.png'),
(493, 'CSK', 'Ravindra Jadega', 'All-Rounder', 'https://gallery.chennaisuperkings.com/PROD/SQUAD/10.png'),
(494, 'CSK', 'Moeen Ali', 'All-Rounder', 'https://gallery.chennaisuperkings.com/PROD/SQUAD/15.png'),
(495, 'CSK', 'Ruturaj Gaikwad', 'Batsman', 'https://gallery.chennaisuperkings.com/PROD/SQUAD/19.png'),
(496, 'CSK', 'Mitchell Santner', 'All-Rounder', 'https://gallery.chennaisuperkings.com/PROD/SQUAD/14.png'),
(497, 'CSK', 'Ambati Rayudu', 'Batsman', 'https://gallery.chennaisuperkings.com/PROD/SQUAD/3.png'),
(498, 'CSK', 'Deepak Chahar', 'Bowler', 'https://gallery.chennaisuperkings.com/PROD/SQUAD/6.png'),
(500, 'CSK', 'Shivam Dube', 'All-Rounder', 'https://gallery.chennaisuperkings.com/PROD/SQUAD/22.png'),
(501, 'CSK', 'Dwaine Pretorius', 'All-Rounder', 'https://gallery.chennaisuperkings.com/PROD/SQUAD/18.png'),
(502, 'CSK', 'Maheesh Theekshana', 'All-Rounder', 'https://gallery.chennaisuperkings.com/PROD/SQUAD/12.png'),
(582, 'DC', 'David Warner', 'Batsman', 'https://www.delhicapitals.in/static-assets/images/players/small/12/5380.png?v=4.75'),
(583, 'DC', 'Manish Pandey', 'Batsman', 'https://www.delhicapitals.in/static-assets/images/players/small/12/4276.png?v=4.75'),
(584, 'DC', 'Prithvi Shaw', 'Batsman', 'https://www.delhicapitals.in/static-assets/images/players/small/12/66812.png?v=4.75'),
(585, 'DC', 'Ripal Patel', 'Batsman', 'https://www.delhicapitals.in/static-assets/images/players/small/12/73393.png?v=4.75'),
(586, 'DC', 'Priyam Garg', 'Batsman', 'https://www.delhicapitals.in/static-assets/images/players/small/12/66803.png?v=4.75'),
(587, 'DC', 'Rovman Powell', 'Batsman', 'https://www.delhicapitals.in/static-assets/images/players/small/12/65291.png?v=4.75'),
(588, 'DC', 'Rilee Rossouw', 'Batsman', 'https://www.delhicapitals.in/static-assets/images/players/small/12/4357.png?v=4.75'),
(590, 'DC', 'Yash Dhull', 'Batsman', 'https://www.delhicapitals.in/static-assets/images/players/small/12/74091.png?v=4.75'),
(591, 'DC', 'Ishant Sharma', 'Bowler', 'https://www.delhicapitals.in/static-assets/images/players/small/12/3899.png?v=4.75'),
(594, 'DC', 'Khaleel Ahmed', 'Bowler', 'https://www.delhicapitals.in/static-assets/images/players/small/12/65867.png?v=4.75'),
(595, 'DC', 'Kamlesh Nagarkoti', 'Bowler', 'https://www.delhicapitals.in/static-assets/images/players/small/12/66807.png?v=4.75');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PlayerList`
--
ALTER TABLE `PlayerList`
  ADD PRIMARY KEY (`player_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `PlayerList`
--
ALTER TABLE `PlayerList`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=771;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
