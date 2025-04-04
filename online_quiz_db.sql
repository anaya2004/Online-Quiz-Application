-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: NOW()
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `online_quiz_db`
--

-- --------------------------------------------------------

-- Table structure for table `tbl_quiz`
--

CREATE TABLE `tbl_quiz` (
  `tbl_quiz_id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_question` text NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_answer` text NOT NULL,
  PRIMARY KEY (`tbl_quiz_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert sample data into `tbl_quiz`
INSERT INTO `tbl_quiz` (`quiz_question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`) VALUES
('What is HTML stands for?', 'How To Make Lumpia', 'Hyper Tronic Mongo Logic', 'Hard To Make Love', 'HyperText Markup Language', 'D'),
('What is the original acronym of PHP?', 'Hypertext Preprocessor', 'Personal Home Page', 'Programming Happy Pill', 'None of the above', 'B'),
('CSS is fundamental to?', 'Databases', 'Web design', 'Server-side', 'None of the above', 'B');

-- --------------------------------------------------------

-- Table structure for table `tbl_result`
--

CREATE TABLE `tbl_result` (
  `tbl_result_id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_taker` text NOT NULL,
  `year_section` text NOT NULL,
  `total_score` int(11) NOT NULL,
  `date_taken` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`tbl_result_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert sample data into `tbl_result`
INSERT INTO `tbl_result` (`quiz_taker`, `year_section`, `total_score`) VALUES
('John Doe', '3A', 2);

-- --------------------------------------------------------

-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_suggestion` text NOT NULL,
  `experience_rating` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert sample data into `tbl_feedback`
INSERT INTO `tbl_feedback` (`question_suggestion`, `experience_rating`) VALUES
('Add more PHP-based questions', 4);

COMMIT;
