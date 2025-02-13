-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2025 at 06:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sphatik_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `completed_projects`
--

CREATE TABLE `completed_projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `completion_date` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `completed_projects`
--

INSERT INTO `completed_projects` (`id`, `project_name`, `client_name`, `completion_date`, `description`) VALUES
(1, 'Database Management system', '', '2014-01-03', 'hi'),
(2, 'Microprocessor ', '', '2024-06-03', 'DOne');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `enroll_link` varchar(255) DEFAULT NULL,
  `college_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `img_src`, `title`, `description`, `enroll_link`, `college_name`) VALUES
(1, '../includes/images/dcn.jpg', 'Data Communication and Networking', 'Short description of the course.', 'dcn.php', 'College Name'),
(2, '../includes/images/dbms.jpg', 'Database Management System', 'Short description of the course.', '#', 'College Name'),
(3, '../includes/images/mit.png', 'Microprocessor and Interfacing Techniques', 'Short description of the course.', 'mit.php', 'College Name'),
(4, '../includes/images/os.jpg', 'Operating System', 'Short description of the course.', 'course-details.php?id=2', 'College Name'),
(5, '../includes/images/python.jpg', 'Python Programming', 'Short description of the course.', 'course-details.php?id=2', 'College Name'),
(6, '../includes/images/ds.jpg', 'Data Structures', 'Short description of the course.', 'course-details.php?id=2', 'College Name'),
(7, '../includes/images/se.jpg', 'Software Engineering', 'Short description of the course.', 'course-details.php?id=2', 'College Name'),
(8, '../includes/images/wt.jpg', 'Web Technologies', 'Short description of the course.', 'course-details.php?id=2', 'College Name'),
(9, '../includes/images/ict.jpg', 'Information and Communication Technologies', 'Short description of the course.', 'course-details.php?id=2', 'College Name');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_partners`
--

CREATE TABLE `delivery_partners` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `vehicle_type` enum('bike','truck','car') NOT NULL,
  `registered_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_partners`
--

INSERT INTO `delivery_partners` (`id`, `full_name`, `phone_number`, `vehicle_type`, `registered_at`) VALUES
(1, '', '', '', '2025-02-12 06:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `role` enum('normal_user','delivery_partner','employer','instructor','admin') NOT NULL,
  `verified` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `phone`, `password_hash`, `role`, `verified`, `created_at`) VALUES
(1, 'dhiru', 'dhiru12@mail.com', '', '$2y$10$jAtLcoiR./z5UEsn3EHnoeSUz7fTXVamZYTd7zzaTh/VXLFmyjO6q', '', 0, '2025-02-12 03:51:49'),
(7, 'kishu', 'krish12@mail.com', '', '$2y$10$Z.4ULlM4T9IHQA.J9QKHDejL6rgDsog9Erx0hEh4rA6OFEQT91pui', 'delivery_partner', 0, '2025-02-12 04:35:25'),
(8, 'hello', 'hello@mail.com', '', '$2y$10$L490hRCx6EeuYqvFfhTbKO2Y9DqCwVSPhqIEulEU7J/I5bR6RZOZ2', '', 0, '2025-02-12 16:52:01'),
(9, 'acb', 'abc@mail.com', '', '$2y$10$4Sr4YETP0o5D5CGQs9lDbeB2r9OgPE6dgIlD796Dp5YCuJRFJRrl.', 'delivery_partner', 0, '2025-02-12 16:58:11'),
(10, 'qwe', 'qwe@mail.com', '', '$2y$10$axDT5GaNk/aRD2UXwNCPuegS7F9m7TG5KFUjTj.tBXA1.PoNBFqTa', '', 0, '2025-02-12 16:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `profile_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`profile_id`, `user_id`, `full_name`, `phone`) VALUES
(1, 1, 'Dhiraj Jagwani', '977795522'),
(2, 7, 'Krish Jain', '8200700139'),
(3, 8, 'mannn', '8564213955'),
(4, 9, 'abc', '9876543210'),
(5, 10, 'qwe', '0123654789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `completed_projects`
--
ALTER TABLE `completed_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_partners`
--
ALTER TABLE `delivery_partners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `phone_2` (`phone`),
  ADD KEY `phone` (`phone`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`profile_id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `completed_projects`
--
ALTER TABLE `completed_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `delivery_partners`
--
ALTER TABLE `delivery_partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD CONSTRAINT `user_profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
