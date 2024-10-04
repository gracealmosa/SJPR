-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 04:14 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbchurch_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `baptismal`
--

CREATE TABLE `baptismal` (
  `baptismal_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `priest_id` int(11) NOT NULL,
  `birthplace` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `f_birthplace` varchar(30) NOT NULL,
  `f_homeplace` varchar(30) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `m_birthplace` varchar(30) NOT NULL,
  `m_homeplace` varchar(30) NOT NULL,
  `parent_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baptismal`
--

INSERT INTO `baptismal` (`baptismal_id`, `member_id`, `priest_id`, `birthplace`, `f_name`, `f_birthplace`, `f_homeplace`, `m_name`, `m_birthplace`, `m_homeplace`, `parent_status`) VALUES
(1, 3, 51, 'Davao city', '', '', '', '', '', '', 'Single'),
(2, 3, 51, 'Davao city', '', '', '', '', '', '', 'Single'),
(3, 3, 51, 'Davao city', '', '', '', '', '', '', 'Single'),
(4, 19, 75, '', '', '', '', '', '', '', 'Married');

-- --------------------------------------------------------

--
-- Table structure for table `confess_sched`
--

CREATE TABLE `confess_sched` (
  `confess_id` int(11) NOT NULL,
  `priest_id` int(11) NOT NULL,
  `timefrom` time(6) NOT NULL,
  `timeto` time(6) NOT NULL,
  `orgname` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confess_sched`
--

INSERT INTO `confess_sched` (`confess_id`, `priest_id`, `timefrom`, `timeto`, `orgname`, `address`, `date`) VALUES
(1, 42, '10:15:00.000000', '07:18:00.000000', '', '', '0000-00-00'),
(2, 42, '10:15:00.000000', '07:18:00.000000', '', '', '0000-00-00'),
(3, 42, '10:15:00.000000', '07:18:00.000000', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `confirmation`
--

CREATE TABLE `confirmation` (
  `confirmation_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `priest_id` int(11) NOT NULL,
  `birthplace` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `date_confirm` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirmation`
--

INSERT INTO `confirmation` (`confirmation_id`, `member_id`, `priest_id`, `birthplace`, `f_name`, `m_name`, `date_confirm`) VALUES
(1, 3, 42, '', '', '', '0000-00-00'),
(2, 1, 43, '', '', '', '0000-00-00'),
(3, 1, 43, '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `defuncturiom`
--

CREATE TABLE `defuncturiom` (
  `defuncturiom_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `death_date` date NOT NULL,
  `death_place` varchar(30) NOT NULL,
  `informant` varchar(30) NOT NULL,
  `date_burial` date NOT NULL,
  `place_burial` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `defuncturiom`
--

INSERT INTO `defuncturiom` (`defuncturiom_id`, `member_id`, `death_date`, `death_place`, `informant`, `date_burial`, `place_burial`) VALUES
(1, 2, '2024-05-09', 'dd', 'dd', '2024-05-23', 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `place` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `title`, `description`, `date`, `time`, `place`) VALUES
(1, 'jj', 'hh', '2024-05-17', '06:57:00.000000', 'jj'),
(2, 'cute', 'ko', '2024-05-14', '23:47:00.000000', 'Cuteness');

-- --------------------------------------------------------

--
-- Table structure for table `marriage`
--

CREATE TABLE `marriage` (
  `marriage_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `b_occupation` varchar(30) NOT NULL,
  `g_occupation` varchar(30) NOT NULL,
  `b_religion` varchar(30) NOT NULL,
  `g_religion` varchar(30) NOT NULL,
  `b_fname` varchar(30) NOT NULL,
  `g_fname` varchar(30) NOT NULL,
  `b_fcitizen` varchar(30) NOT NULL,
  `g_fcitizen` varchar(30) NOT NULL,
  `b_mname` varchar(30) NOT NULL,
  `g_mname` varchar(30) NOT NULL,
  `b_mcitizen` varchar(30) NOT NULL,
  `g_mcitizen` varchar(30) NOT NULL,
  `b_citizen` varchar(30) NOT NULL,
  `g_citizen` varchar(30) NOT NULL,
  `b_lastmass` varchar(30) NOT NULL,
  `g_lastmass` varchar(30) NOT NULL,
  `b_birthplace` varchar(30) NOT NULL,
  `g_birthplace` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `language` varchar(30) NOT NULL,
  `date_marriage` date NOT NULL,
  `time_marriage` time(6) NOT NULL,
  `priest_id` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mass_sched`
--

CREATE TABLE `mass_sched` (
  `massched_id` int(11) NOT NULL,
  `priest_id` int(11) NOT NULL,
  `masstime` time(6) NOT NULL,
  `mass_language` varchar(30) NOT NULL,
  `churchname` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mass_sched`
--

INSERT INTO `mass_sched` (`massched_id`, `priest_id`, `masstime`, `mass_language`, `churchname`, `address`, `date`) VALUES
(1, 44, '19:53:00.000000', 'Widowed', 'ss', 'a', '2024-05-14'),
(2, 44, '19:53:00.000000', 'Widowed', 'ss', 'a', '2024-05-14'),
(3, 44, '19:53:00.000000', 'Widowed', 'ss', 'a', '2024-05-14'),
(4, 44, '19:53:00.000000', 'Widowed', 'ss', 'a', '2024-05-14'),
(5, 43, '00:00:00.000000', 'Tagalog', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `member_info`
--

CREATE TABLE `member_info` (
  `member_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `birthdate` date NOT NULL,
  `p_address` varchar(30) NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `stats` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_info`
--

INSERT INTO `member_info` (`member_id`, `firstname`, `middlename`, `lastname`, `birthdate`, `p_address`, `contact_no`, `age`, `stats`) VALUES
(19, 'Arvin James', 'Dahuyag', 'Malubay', '0000-00-00', 'asdfsad', '', 0, 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `personal_accounts`
--

CREATE TABLE `personal_accounts` (
  `account_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `personal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_accounts`
--

INSERT INTO `personal_accounts` (`account_id`, `username`, `password`, `personal_id`) VALUES
(1, 'danica', 'BhsXkflnsm0192023a7bbd73250516f069df18b500ls0a1L2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `personal_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `organization` varchar(50) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `civil_status` varchar(50) NOT NULL,
  `zipcode` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`personal_id`, `firstname`, `lastname`, `middlename`, `email`, `organization`, `contact_number`, `address`, `civil_status`, `zipcode`) VALUES
(1, 'Danica', 'Campado', 'Chiong', 'campado27@gmail.com', 'SLSU', '9750687528', 'Liloan, So.Leyte', 'Single', 6612),
(2, ' Danica', 'Campado', 'Chiong', 'campado@gmail.com', 'SLSU', '9750687528', 'Liloan, So. Leyte', 'Single', 6612),
(3, 'Danica', 'Campado', 'Chiong', 'campado@gmail.com', 'SLSU', '9750687528', 'Liloan, So. Leyte', 'Single', 6612),
(4, 'Danica', 'Campado', 'Chiong', 'campado@gmail.com', 'SLSU', '9750687528', 'Liloan, So. Leyte', 'Single', 6612);

-- --------------------------------------------------------

--
-- Table structure for table `priest_detail`
--

CREATE TABLE `priest_detail` (
  `priest_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `birthdate` date NOT NULL,
  `p_address` varchar(30) NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `priest_detail`
--

INSERT INTO `priest_detail` (`priest_id`, `firstname`, `middlename`, `lastname`, `birthdate`, `p_address`, `contact_no`, `email`, `position`) VALUES
(68, 'arvin ', 'sdfsdf', 'sdfdsf', '0000-00-00', 'asdfsad', '1231232', 'sdaadasd', 'Priesst'),
(75, 'Arvin James', 'Dahuyag', 'Malubay', '0000-00-00', 'asdasdsad', '', '', 'pari ko');

-- --------------------------------------------------------

--
-- Table structure for table `register_account`
--

CREATE TABLE `register_account` (
  `register_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact_number` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `civil_status` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sick_call`
--

CREATE TABLE `sick_call` (
  `sickcall_id` int(11) NOT NULL,
  `priest_id` int(11) NOT NULL,
  `parishioner_name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `requestedby` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sick_call`
--

INSERT INTO `sick_call` (`sickcall_id`, `priest_id`, `parishioner_name`, `address`, `requestedby`, `date`) VALUES
(1, 43, 'Danica', 'Maasin Southern leyte', 'Denple', '2024-05-22'),
(2, 43, 'Danica', 'Maasin Southern leyte', 'Denple', '2024-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `special_bless`
--

CREATE TABLE `special_bless` (
  `specialbless_id` int(11) NOT NULL,
  `priest_id` int(11) NOT NULL,
  `parishioner_name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `special_bless`
--

INSERT INTO `special_bless` (`specialbless_id`, `priest_id`, `parishioner_name`, `address`, `contact_no`, `date`) VALUES
(2, 43, 'hh', 'hh', '66', '2024-05-22'),
(3, 43, 'hh', 'hh', '66', '2024-05-22'),
(4, 43, 'hh', 'hh', '66', '2024-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `special_mass`
--

CREATE TABLE `special_mass` (
  `Servicemass_id` int(11) NOT NULL,
  `Priest_id` int(11) NOT NULL,
  `parishioner_name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `typeofmass` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `special_mass`
--

INSERT INTO `special_mass` (`Servicemass_id`, `Priest_id`, `parishioner_name`, `address`, `contact_no`, `typeofmass`, `date`) VALUES
(7, 41, 'nn', '', '', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baptismal`
--
ALTER TABLE `baptismal`
  ADD PRIMARY KEY (`baptismal_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `confess_sched`
--
ALTER TABLE `confess_sched`
  ADD PRIMARY KEY (`confess_id`),
  ADD KEY `priest_id` (`priest_id`);

--
-- Indexes for table `confirmation`
--
ALTER TABLE `confirmation`
  ADD PRIMARY KEY (`confirmation_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `priest_id` (`priest_id`);

--
-- Indexes for table `defuncturiom`
--
ALTER TABLE `defuncturiom`
  ADD PRIMARY KEY (`defuncturiom_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `marriage`
--
ALTER TABLE `marriage`
  ADD PRIMARY KEY (`marriage_id`);

--
-- Indexes for table `mass_sched`
--
ALTER TABLE `mass_sched`
  ADD PRIMARY KEY (`massched_id`),
  ADD KEY `priest_id` (`priest_id`);

--
-- Indexes for table `member_info`
--
ALTER TABLE `member_info`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `personal_accounts`
--
ALTER TABLE `personal_accounts`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `personal_id` (`personal_id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`personal_id`);

--
-- Indexes for table `priest_detail`
--
ALTER TABLE `priest_detail`
  ADD PRIMARY KEY (`priest_id`);

--
-- Indexes for table `register_account`
--
ALTER TABLE `register_account`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `sick_call`
--
ALTER TABLE `sick_call`
  ADD PRIMARY KEY (`sickcall_id`),
  ADD KEY `priest_id` (`priest_id`);

--
-- Indexes for table `special_bless`
--
ALTER TABLE `special_bless`
  ADD PRIMARY KEY (`specialbless_id`),
  ADD KEY `priest_id` (`priest_id`);

--
-- Indexes for table `special_mass`
--
ALTER TABLE `special_mass`
  ADD PRIMARY KEY (`Servicemass_id`),
  ADD KEY `Priest_id` (`Priest_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baptismal`
--
ALTER TABLE `baptismal`
  MODIFY `baptismal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `confess_sched`
--
ALTER TABLE `confess_sched`
  MODIFY `confess_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `confirmation`
--
ALTER TABLE `confirmation`
  MODIFY `confirmation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `defuncturiom`
--
ALTER TABLE `defuncturiom`
  MODIFY `defuncturiom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marriage`
--
ALTER TABLE `marriage`
  MODIFY `marriage_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mass_sched`
--
ALTER TABLE `mass_sched`
  MODIFY `massched_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member_info`
--
ALTER TABLE `member_info`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_accounts`
--
ALTER TABLE `personal_accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `personal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `priest_detail`
--
ALTER TABLE `priest_detail`
  MODIFY `priest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `register_account`
--
ALTER TABLE `register_account`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sick_call`
--
ALTER TABLE `sick_call`
  MODIFY `sickcall_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `special_bless`
--
ALTER TABLE `special_bless`
  MODIFY `specialbless_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `special_mass`
--
ALTER TABLE `special_mass`
  MODIFY `Servicemass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
