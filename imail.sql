-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 06:20 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imail`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `mid` int(4) NOT NULL,
  `sender` varchar(50) DEFAULT NULL,
  `receiver` varchar(50) DEFAULT NULL,
  `dttime` datetime DEFAULT NULL,
  `sub` varchar(50) DEFAULT NULL,
  `mailbox` varchar(10) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `attachment` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`mid`, `sender`, `receiver`, `dttime`, `sub`, `mailbox`, `status`, `message`, `owner`, `attachment`) VALUES
(2, 'admin@imail.com', 'chinmay@imail.com', '2022-07-22 09:18:18', 'Mail Sent Fail', 'inbox', 1, 'Unable to Send Mail due to Invlid Receipent <b>das.dpk@imail.com</b> ', 'chinmay@imail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `draft`
--

CREATE TABLE `draft` (
  `mid` int(4) NOT NULL,
  `sender` varchar(50) DEFAULT NULL,
  `receiver` varchar(50) DEFAULT NULL,
  `dttime` datetime DEFAULT NULL,
  `sub` varchar(50) DEFAULT NULL,
  `mailbox` varchar(10) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `attachment` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `draft`
--

INSERT INTO `draft` (`mid`, `sender`, `receiver`, `dttime`, `sub`, `mailbox`, `status`, `message`, `owner`, `attachment`) VALUES
(1, 'chinmay@imail.com', 'das.dpk@imail.com', '2022-07-22 09:18:15', 'fads hela au', 'draft', 1, 'fdasdxz ', 'chinmay@imail.com', ''),
(2, 'rishi@imail.com', 'chinmay@imail.com', '2022-07-22 11:07:42', 'New Candidate Update', 'draft', 1, 'Hello,\r\n\r\nRishi this side.\r\n', 'rishi@imail.com', ''),
(3, 'smruti@imail.com', 'chinmay@imail.com', '2022-07-22 11:09:51', 'Savings Account', 'draft', 1, 'Hello,\r\n\r\nHere is the monthly statement of your savings account.\r\n', 'smruti@imail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `mid` int(4) NOT NULL,
  `sender` varchar(50) DEFAULT NULL,
  `receiver` varchar(50) DEFAULT NULL,
  `dttime` datetime DEFAULT NULL,
  `sub` varchar(50) DEFAULT NULL,
  `mailbox` varchar(10) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `attachment` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`mid`, `sender`, `receiver`, `dttime`, `sub`, `mailbox`, `status`, `message`, `owner`, `attachment`) VALUES
(3, 'rishi@imail.com', 'chinmay@imail.com', '2022-07-22 11:06:37', 'New Task', 'sent', 1, 'Hey Chinmay,\r\nNew task added to the todo list please check\r\n\r\nYours Faithfully,\r\nRishi', 'rishi@imail.com', ''),
(4, 'rishi@imail.com', 'chinmay@imail.com', '2022-07-22 11:06:37', 'New Task', 'inbox', 0, 'Hey Chinmay,\r\nNew task added to the todo list please check\r\n\r\nYours Faithfully,\r\nRishi', 'chinmay@imail.com', ''),
(5, 'smruti@imail.com', 'chinmay@imail.com', '2022-07-22 11:09:14', 'Monthly statement', 'sent', 1, 'Hello,\r\n\r\nHere is the monthly statement of your account.\r\n\r\nWith regards,\r\nSmruti', 'smruti@imail.com', ''),
(6, 'smruti@imail.com', 'chinmay@imail.com', '2022-07-22 11:09:14', 'Monthly statement', 'inbox', 0, 'Hello,\r\n\r\nHere is the monthly statement of your account.\r\n\r\nWith regards,\r\nSmruti', 'chinmay@imail.com', ''),
(7, 'piyush@imail.com', 'chinmay@imail.com', '2022-07-22 11:10:51', 'Savings account', 'sent', 1, 'Hello,\r\n\r\nHere is the details of your savings account.\r\n\r\nWith regards,\r\nPiyush', 'piyush@imail.com', ''),
(8, 'piyush@imail.com', 'chinmay@imail.com', '2022-07-22 11:10:51', 'Savings account', 'inbox', 0, 'Hello,\r\n\r\nHere is the details of your savings account.\r\n\r\nWith regards,\r\nPiyush', 'chinmay@imail.com', ''),
(9, 'asutosh@imail.com', 'chinmay@imail.com', '2022-07-22 11:11:48', 'Monthly Expenses', 'sent', 1, 'Hello,\r\n\r\nHere is the list of your monthly expenses. Kindly clear the due amount in time.\r\n\r\nWith regards,\r\nAsutosh', 'asutosh@imail.com', ''),
(10, 'asutosh@imail.com', 'chinmay@imail.com', '2022-07-22 11:11:48', 'Monthly Expenses', 'inbox', 0, 'Hello,\r\n\r\nHere is the list of your monthly expenses. Kindly clear the due amount in time.\r\n\r\nWith regards,\r\nAsutosh', 'chinmay@imail.com', ''),
(11, 'chinmay@imail.com', 'smruti@imail.com', '2022-07-22 11:13:16', 'Goods requirment', 'sent', 1, 'Hello,\r\nThe following goods are required by the end of this week. Kindly arrange them in time.\r\n\r\n', 'chinmay@imail.com', ''),
(12, 'chinmay@imail.com', 'smruti@imail.com', '2022-07-22 11:13:16', 'Goods requirment', 'inbox', 0, 'Hello,\r\nThe following goods are required by the end of this week. Kindly arrange them in time.\r\n\r\n', 'smruti@imail.com', ''),
(13, 'asutosh@imail.com', 'chinmay@imail.com', '2022-07-22 11:14:10', ' Devfolio ', 'sent', 1, 'Hey Chinmay Ranjan,\r\n \r\n\r\nIf you have been trying to make it big in Web3 or looking for interesting full-time job opportunities to contribute, worry not because we have got you covered. Polygon Village (an initiative of Polygon DAO), in collaboration with us at Devfolio, is thrilled to announce our first-ever Virtual Job Fair!', 'asutosh@imail.com', ''),
(14, 'asutosh@imail.com', 'chinmay@imail.com', '2022-07-22 11:14:10', ' Devfolio ', 'inbox', 0, 'Hey Chinmay Ranjan,\r\n \r\n\r\nIf you have been trying to make it big in Web3 or looking for interesting full-time job opportunities to contribute, worry not because we have got you covered. Polygon Village (an initiative of Polygon DAO), in collaboration with us at Devfolio, is thrilled to announce our first-ever Virtual Job Fair!', 'chinmay@imail.com', ''),
(15, 'asutosh@imail.com', 'chinmay@imail.com', '2022-07-22 11:15:17', ' Ishika Sharma Updates', 'sent', 1, 'Hi Chinmay,\r\n\r\nFrom searching on Google to being searched on Google, the life of all Googlers seems exciting until you try to fit into their shoes. And, hear their story.\r\n\r\nYou will more often hear words like consistency, discipline, multiple rejections, and a Roadmap', 'asutosh@imail.com', ''),
(16, 'asutosh@imail.com', 'chinmay@imail.com', '2022-07-22 11:15:17', ' Ishika Sharma Updates', 'inbox', 0, 'Hi Chinmay,\r\n\r\nFrom searching on Google to being searched on Google, the life of all Googlers seems exciting until you try to fit into their shoes. And, hear their story.\r\n\r\nYou will more often hear words like consistency, discipline, multiple rejections, and a Roadmap', 'chinmay@imail.com', ''),
(17, 'rishi@imail.com', 'chinmay@imail.com', '2022-07-22 11:16:09', 'Bosscoder Academy', 'sent', 1, 'Hey Chinmay Ranjan Sahoo,\r\n \r\nWhat if we help you reach success step-by-step? Guess what, we have just compiled all Microsoft specific questions round-wise!!\r\n \r\nThese are not just any questions but real-time questions aced by our top-notch mentor, Rajat Garg during his interview. What time is better than now to start practicing these and checking them off the list! \r\n \r\nGet set go!', 'rishi@imail.com', ''),
(18, 'rishi@imail.com', 'chinmay@imail.com', '2022-07-22 11:16:09', 'Bosscoder Academy', 'inbox', 0, 'Hey Chinmay Ranjan Sahoo,\r\n \r\nWhat if we help you reach success step-by-step? Guess what, we have just compiled all Microsoft specific questions round-wise!!\r\n \r\nThese are not just any questions but real-time questions aced by our top-notch mentor, Rajat Garg during his interview. What time is better than now to start practicing these and checking them off the list! \r\n \r\nGet set go!', 'chinmay@imail.com', ''),
(19, 'smruti@imail.com', 'chinmay@imail.com', '2022-07-22 11:17:23', 'Top accounts for sale this week', 'sent', 1, 'Hi sahoochinmay, here are the top accounts for sale this week\r\nhttps://fameswap.com/toplistings\r\n\r\nMost viewed\r\n*****es.001 58.9k instagram account selling for $1,000.00\r\n******imoqimi 704.4k instagram account selling for $5,600.00\r\n*****dZilla 518k youtube account selling for $5,000.00\r\n********_travela 208.7k instagram account selling for $1,699.00\r\n***L TV 376k youtube account selling for $70,000.00\r\n****eyMan 251k youtube account selling for $1,900.00\r\n***Malk 109k youtube account selling for $820.00\r\n**ey 88.5k youtube account selling for $700.00\r\n****Editz 540k youtube account selling for $5,000.00\r\n*******.crypto_ 130.7k instagram account selling for $1,000.00\r\n***Fans 231k youtube account selling for $1,750.00\r\n*******ELTODAY 106.2k instagram account selling for $800.00\r\n***cap 157k youtube account selling for $4,500.00\r\n***rfy 1.7m instagram account selling for $90,000.00\r\n********rn Colors 508k youtube account selling for $6,500.00', 'smruti@imail.com', ''),
(20, 'smruti@imail.com', 'chinmay@imail.com', '2022-07-22 11:17:23', 'Top accounts for sale this week', 'inbox', 0, 'Hi sahoochinmay, here are the top accounts for sale this week\r\nhttps://fameswap.com/toplistings\r\n\r\nMost viewed\r\n*****es.001 58.9k instagram account selling for $1,000.00\r\n******imoqimi 704.4k instagram account selling for $5,600.00\r\n*****dZilla 518k youtube account selling for $5,000.00\r\n********_travela 208.7k instagram account selling for $1,699.00\r\n***L TV 376k youtube account selling for $70,000.00\r\n****eyMan 251k youtube account selling for $1,900.00\r\n***Malk 109k youtube account selling for $820.00\r\n**ey 88.5k youtube account selling for $700.00\r\n****Editz 540k youtube account selling for $5,000.00\r\n*******.crypto_ 130.7k instagram account selling for $1,000.00\r\n***Fans 231k youtube account selling for $1,750.00\r\n*******ELTODAY 106.2k instagram account selling for $800.00\r\n***cap 157k youtube account selling for $4,500.00\r\n***rfy 1.7m instagram account selling for $90,000.00\r\n********rn Colors 508k youtube account selling for $6,500.00', 'chinmay@imail.com', ''),
(21, 'chinmay@imail.com', 'smruti@imail.com', '2022-07-22 11:57:15', 'frgt', 'sent', 1, 'cf4rgrrggt', 'chinmay@imail.com', ''),
(22, 'chinmay@imail.com', 'smruti@imail.com', '2022-07-22 11:57:15', 'frgt', 'inbox', 0, 'cf4rgrrggt', 'smruti@imail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `trash`
--

CREATE TABLE `trash` (
  `mid` int(4) NOT NULL,
  `sender` varchar(50) DEFAULT NULL,
  `receiver` varchar(50) DEFAULT NULL,
  `dttime` datetime DEFAULT NULL,
  `sub` varchar(50) DEFAULT NULL,
  `mailbox` varchar(10) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `attachment` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `name`, `phone`, `password`, `photo`) VALUES
('asutosh@imail.com', 'Asutosh', '3456788434', '12345', 'avatars/avatar.png'),
('chinmay@imail.com', 'chinmaya', '9937159477', '12345', 'avatars/avatar.png'),
('piyush@imail.com', 'Piyush', '8739287456', '12345', 'avatars/avatar.png'),
('rishi@imail.com', 'Rishi', '8765439875', '12345', 'avatars/avatar.png'),
('smruti@imail.com', 'Smruti', '3454678936', '12345', 'avatars/avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `draft`
--
ALTER TABLE `draft`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `draft`
--
ALTER TABLE `draft`
  MODIFY `mid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `mid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
