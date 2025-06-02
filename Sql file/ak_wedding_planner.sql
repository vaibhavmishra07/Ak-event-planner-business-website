-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 02, 2025 at 04:32 PM
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
-- Database: `ak_wedding_planner`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_users`
--

CREATE TABLE `all_users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_users`
--

INSERT INTO `all_users` (`id`, `full_name`, `address`, `email`, `password`) VALUES
(0, 'manoj tiwari', '123@gmail.com', '123@gmail.com', '$2y$10$ZbP42KJr2rcknAH1.Sn9ruXJk6.CFB/fyqEDIKLutFGOjEa.AgWtG'),
(0, 'Vaibhav Mishra', 'Tarti, Jaunpur', 'mishravaibhav0712@gmail.com', '$2y$10$B6.wc6EbX5OwDQNsgbvPYOcUyvrE0uTlq2ufo4cT7cLuhTEyTm8p6'),
(0, 'Vaibhav Mishra', 'Tarti,', 'mishrayash07@gmail.com', '$2y$10$Uifxg8442vmTI.8pJVtj8eBF/TYcfnJACx0W8ylTcqjjeydoTT8mW'),
(0, 'Shashank Tiwari ', 'Nimaich', 'shashankiatiwari1331@gmail.com', '$2y$10$ZOINKbgdtPnvrDZcS4aCTenrQoPe2EECqqh/hz/mgTRno75MbbfdC');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `message_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `message_on`) VALUES
(1, '$name', '$mobile', '$address', '2024-12-01 23:56:31'),
(2, '.$name.', '.$mobile.', '.$address.', '2024-12-01 23:58:46'),
(3, 'Vaibhav Mishra', 'mishravaibhav0712@gmail.com', 'LKJHLKLKM', '2024-12-02 00:00:03'),
(4, 'Mishir jee', 'vaibhavvidhayak0007@gmail.com', 'i am vaibhav', '2024-12-02 00:00:47'),
(5, 'Mishir jee', 'vaibhavvidhayak0007@gmail.com', 'i am vaibhav', '2024-12-02 00:03:24'),
(6, 'ayush', 'aaa0000@gmail.com', 'Ayush here', '2024-12-02 00:06:38'),
(7, 'Shashank Tiwari', 'shashankiatiwari1331@gmail.com', 'I want your services in my brothers friend wedding.', '2024-12-02 19:27:10'),
(8, 'Shashank Tiwari', 'shashankiatiwari1331@gmail.com', 'I want your services in my brothers friend wedding.', '2024-12-02 19:31:41'),
(12, 'Sumit Tiwari', 'aaa0000@gmail.com', 'swqwsgxhvjewvxhjcwegvyugewyufvhjvxiew', '2024-12-02 19:33:33'),
(13, 'Sumit Tiwari', 'aaa0000@gmail.com', 'swqwsgxhvjewvxhjcwegvyugewyufvhjvxiew', '2024-12-02 19:34:48'),
(38, '', '', '', '2024-12-02 22:19:18'),
(41, '', '', '', '2024-12-02 22:29:08'),
(43, 'Vaibhav Mishra', 'aaa0000@gmail.com', 'Vaibhav here', '2024-12-02 22:46:52'),
(46, 'Mishir jee', 'vaibhavvidhayak0007@gmail.com', 'xxxxxxxxxxxqqwww', '2024-12-02 23:22:57'),
(48, 'Sumit Tiwari', 'aaa0000@gmail.com', 'I am Sumit want your services', '2024-12-04 00:11:02'),
(49, 'Hello', '123@gmail.com', 'Hey this is me', '2024-12-04 15:37:37'),
(56, 'Vaibhav Mishra', 'mishravaibhav0712@gmail.com', 'Need your services immediately.', '2024-12-31 18:40:30'),
(57, 'ayush', '0000@gmail.com', 'iugfyki42hypfh4', '2024-12-31 18:42:27'),
(59, 'Sumit Tiwari', '1111@gmail', 'I want your services in my brothers friend wedding.', '2025-02-03 19:59:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_users`
--
ALTER TABLE `all_users`
  ADD UNIQUE KEY `unique` (`email`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
