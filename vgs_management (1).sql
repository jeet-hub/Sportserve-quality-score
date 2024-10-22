-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2024 at 11:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vgs_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'jude', '$2y$10$9WFXdP8f6PRyQWEYRNGqmO2DqPggl4fYO1F2ZnRbhFsQkvUlsu95W');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(140) NOT NULL,
  `password` varchar(150) NOT NULL,
  `course` varchar(50) NOT NULL,
  `process` varchar(30) NOT NULL,
  `empid` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `password`, `course`, `process`, `empid`) VALUES
(1, 'jeet', 'jeet@gmail.com', '$2y$10$8dR92buMqunSuAgFRZagg.MUsNMVaVO3QOC30xIbz7lGXuzKzDEI6', 'hello', '1', 'VGSS1'),
(2, 'jeet', 'jeet@gmail.com', '$2y$10$48Jf2d0Sy8Z2ZC0O4UvRoe0oBsny.znfm7bAh4.cyg/rBGIbhLqay', 'hello', '1', 'VGSS1'),
(3, 'pari', 'pari@gmail.com', '$2y$10$H1jKjhtYWiGS9rh/55u74.R1h5a./hCoVOiBK6Fbhmr3OHyGvasoq', '1234', '1', 'era'),
(4, 'pari', 'pari@gmail.com', '$2y$10$qwQ00hptxVk9sgDxrk9EW.SmiHslhXgjolBmpRDVq5ApZDEttsXpG', '1234', '1', 'era'),
(5, 'Parimal Rawani', 'parimal@gmail.com', '$2y$10$7EpNXjcaNbeSy8tciU5Lce5tRVb8J4LEWFUEM6CKM3/3e6zNkebZ2', 'jeet', '1', 'dga'),
(6, 'Parimal Rawani', 'parimal@gmail.com', '$2y$10$Q.gQUW5oyA5fIze3aFQ.YOsybN4HL1Nl8cW2Xvq4H6OXbQkWLclQO', 'jeet', '1', 'dga'),
(7, 'Parimal Rawani', 'parimal@gmail.com', '$2y$10$T22oXH/z6sO9H9jjvikjyeTfTssiCBxR0fE1pDOBm3PGNth7intx.', 'jeet', '1', 'dga'),
(8, 'Parimal Rawani', 'parimal@gmail.com', '$2y$10$uKCdmO9rmfFMnRv0GAevQOA4Xjy06F1RMAY.YQc9n4HjpjnLZigOG', 'jeet', '1', 'dga'),
(9, 'Parimal Rawani', 'parimal@gmail.com', '$2y$10$fFyElpeaM0EnEh1PT.XDFuE1Kpe3UtBWgzDYT6bxk1z9QFlmiNB6m', 'jeet', '1', 'dga'),
(10, 'Parimal Rawani', 'parimal@gmail.com', '$2y$10$MBNMQuCGv4/ZlJN57IH8gOBk6SH1e/BfLXqosRcTrOUk6dCc5Hj0i', 'jeet', '1', 'dga'),
(11, 'Parimal Rawani', 'parimal@gmail.com', '$2y$10$liqypGLMg2lXomVwKikJeuV0sc69R5ECnTq9GdYEZOu35/QlinAYW', 'jeet', '1', 'dga'),
(12, 'Parimal Rawani', 'parimal@gmail.com', '$2y$10$/SLcipAQfySbW50rEqqqk.TZDS.devZ/YpAGKcbiaLmqDS5vDyyKu', 'jeet', '1', 'dga'),
(13, 'Parimal Rawani', 'parimal@gmail.com', '$2y$10$Hht1iTE975nprBPYKyfOne..ZrxRHCms0NTTrkc3AhI71aCjPQU/S', 'jeet', '1', 'dga'),
(14, 'Parimal Rawani', 'parimal@gmail.com', '$2y$10$Y9elrvaTJ1A8985ufyxiReq876H5Y/82OyiG8RU2STk23EKtj4bMy', 'jeet', '1', 'dga'),
(15, 'Parimal Rawani', 'parimal@gmail.com', '$2y$10$XyjWGNair9xzM.ag.7AS7eIkJZDz5lEMqZxHPOHwu36jG5gBoH0eK', 'jeet', '1', 'dga'),
(16, 'Parimal Rawani', 'parimal@gmail.com', '$2y$10$ez0OJHGNXKnpkJTkxRJjZOf33HRYq0bYNCnUbivWGJxBxXka8CjYe', 'jeet', '1', 'dga'),
(17, 'Parimal Rawani', 'parimal@gmail.com', '$2y$10$qOrW516lbyzbj2Uey6fnKu/TH6bgaXdP3QjmAqhKD/9oZUWnSEQFW', 'jeet', '1', 'dga'),
(18, 'Parimal Rawani', 'parimal@gmail.com', '$2y$10$O188VS8i2xjVHY8Hq4mlG.pUuvLxwA6cH4gfLYJ8jhxi.e9vebT0G', 'jeet', '1', 'dga'),
(19, 'Parimal Rawani', 'parimal@gmail.com', '$2y$10$.1pjW42bWVUcCCGksmVcfuPe18HtG7H8kH5k0fdk2QpG2iFpAImky', 'jeet', '1', 'dga'),
(20, 'Parimal Rawani', 'parimal@gmail.com', '$2y$10$tnr.mtx.wUS7oo7XT1rxieLreMIgq7ulI6c2zSG63YBZQtamvABZu', 'jeet', '1', 'dga'),
(21, 'Parimal Rawani', 'parimal@gmail.com', '$2y$10$yRAd9c0WA.aXy9ZrwcfUh.r5ute/nduuBErHjsboq/aB29Cg7pndO', 'jeet', '1', 'dga'),
(22, 'eva', 'eva@gmail.com', '$2y$10$8rdM2dg5OCSgHI1gqEZWS.e2.o1CwRjULupFEqAA77OFskRJnBgQ.', '1', '1', '12345'),
(23, 'eva', 'eva@gmail.com', '$2y$10$JvnsGksql3LpIc0qrCthJuG/nomEvz/brOZsImii9fb4FhIquRdqK', '1', '1', '12345'),
(24, 'eva', 'eva@gmail.com', '$2y$10$vItpigm1nOqQMd8hORGEVed203yeD837MNMNp2RR7/wHc18nxRrdC', '1', '1', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `feedback_text` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `student_id`, `feedback_text`, `created_at`) VALUES
(5, 47, 'ok', '2024-09-18 12:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `subject1_marks` int(11) DEFAULT NULL,
  `subject2_marks` int(11) DEFAULT NULL,
  `subject3_marks` int(11) DEFAULT NULL,
  `subject4_marks` int(11) DEFAULT NULL,
  `subject5_marks` int(11) DEFAULT NULL,
  `subject6_marks` int(40) DEFAULT NULL,
  `subject7_marks` int(30) DEFAULT NULL,
  `total_marks` int(11) DEFAULT 500,
  `achieved_score` int(11) GENERATED ALWAYS AS (`subject1_marks` + `subject2_marks` + `subject3_marks` + `subject4_marks` + `subject5_marks`) VIRTUAL,
  `percentage` decimal(5,2) GENERATED ALWAYS AS (`achieved_score` / `total_marks` * 100) VIRTUAL,
  `acknowledgment_text` text DEFAULT NULL,
  `acknowledged` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `student_id`, `subject1_marks`, `subject2_marks`, `subject3_marks`, `subject4_marks`, `subject5_marks`, `subject6_marks`, `subject7_marks`, `total_marks`, `acknowledgment_text`, `acknowledged`) VALUES
(2, 47, 2, 2, 2, 2, 2, 0, 0, 500, 'love', 1),
(3, 50, 10, 122, 2, 3, 3, 0, 0, 500, NULL, 0),
(4, 47, 10, 0, 0, 0, 0, 0, 0, 500, NULL, 0),
(5, 47, 10, 0, 0, 0, 0, 0, 0, 500, NULL, 0),
(6, 55, 30, 0, 0, 0, 0, 0, 0, 500, NULL, 0),
(7, 58, 10, 30, 20, 20, 20, 0, 0, 500, NULL, 0),
(8, 47, 10, 10, 10, 10, 10, 0, 0, 200, NULL, 0),
(9, 47, 10, 10, 10, 10, 10, 0, 0, 200, NULL, 0),
(10, 62, 20, 20, 20, 20, 30, 0, 0, 200, NULL, 0),
(11, 62, 10, 10, 10, 10, 10, 10, 10, 200, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `course` varchar(100) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `process` varchar(40) NOT NULL,
  `empid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `password`, `course`, `profile_image`, `process`, `empid`) VALUES
(47, 'jeet', 'jeet@gmail.com', '$2y$10$jZCJgR5r8wqPWmyOOGae2uv/UklvljmYrLrGFh/sgrHY5JYtCbCkq', 'h', NULL, 'jeet', 'h'),
(50, 'parimal', 'parimal@gmail.com', '$2y$10$QrPxcC7t/KdOSaOV2IZE1e11KnEusjAVN3/6AwWee7wf83EudeDLe', '13', NULL, '1q', 'e'),
(55, 'xyz', 'xyz@gmail.com', '$2y$10$wEWJLJev/41J3vOdPCfVUuCtFLxnBrJhGDEMb4GE/TXKveSygC9da', '123', NULL, '123', 'eei'),
(58, 'abc', 'abc@gmail.com', '$2y$10$SZvQ/PGQoCfdO6AzjCWF5e1Ba.VJiCULqDIHsViS3hNXMaSXZs6zW', 'abc', NULL, 'abc', 'abc'),
(62, 'Aa', 'A@gmail.com', '$2y$10$bmTGkMrRhdHkFsEKiy8v5.il2qU.joIh0KgOut6tNzO9V5hlfusBO', '2', NULL, 'o', '33');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `task_description` text DEFAULT NULL,
  `task_status` enum('pending','completed') DEFAULT 'pending',
  `assigned_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tasks_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
