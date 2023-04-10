-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Apr 10, 2023 at 04:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Kyle Lamocha', 'k@gmail.com', '09751906576', 'concern', 'hi', '2023-04-05 18:03:38', '2023-04-05 18:03:38'),
(2, 'Kyle Lamocha', 'k@gmail.com', '09751906576', 'concern', 'hi', '2023-04-05 18:04:49', '2023-04-05 18:04:49'),
(3, 'Kyle Lamocha', 'k@gmail.com', '09751906576', 'concern', 'hi', '2023-04-05 18:05:20', '2023-04-05 18:05:20'),
(4, 'Kyle Lamocha', 'k@gmail.com', '09751906576', 'concern', 'hi', '2023-04-05 18:06:21', '2023-04-05 18:06:21'),
(5, 'Kyle Lamocha', 'k@gmail.com', '09751906576', 'concern', 'hi', '2023-04-05 18:06:58', '2023-04-05 18:06:58'),
(6, 'Kyle Lamocha', 'k@gmail.com', '09751906576', 'concern', 'hi', '2023-04-05 18:10:56', '2023-04-05 18:10:56'),
(7, 'Kyle Lamocha', 'k@gmail.com', '09751906576', 'concern', 'hi', '2023-04-05 18:12:17', '2023-04-05 18:12:17'),
(8, 'Kyle Lamocha', 'k@gmail.com', '09751906576', 'concern', 'hi', '2023-04-05 18:14:53', '2023-04-05 18:14:53'),
(9, 'Kyle Lamocha', 'k@gmail.com', '09751906576', 'concern', 'hi', '2023-04-05 18:25:18', '2023-04-05 18:25:18'),
(10, 'Kyle Lamocha', 'k@gmail.com', '09751906576', 'concern', 'hi', '2023-04-05 18:26:39', '2023-04-05 18:26:39'),
(11, 'Kyle Lamocha', 'k@gmail.com', '09751906576', 'concern', 'heloo', '2023-04-06 16:59:11', '2023-04-06 16:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `journal_details`
--

CREATE TABLE `journal_details` (
  `id` int(11) NOT NULL,
  `User_name` varchar(50) DEFAULT NULL,
  `JournalDate` date DEFAULT NULL,
  `user_id` int(10) NOT NULL,
  `message` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journal_details`
--

INSERT INTO `journal_details` (`id`, `User_name`, `JournalDate`, `user_id`, `message`) VALUES
(1, 'ke', '2023-04-08', 0, 'her'),
(2, 'keke', '2023-04-08', 0, 'heloo'),
(3, 'kyle', '2023-04-08', 0, 'heluar'),
(4, 'kyle', '2023-04-07', 0, 'eeeeee'),
(5, NULL, NULL, 0, NULL),
(6, 'dsa', '2023-04-07', 0, 'he'),
(7, 'kyle', '2023-04-08', 9, 'ge'),
(8, 'xy', '2023-04-08', 8, 'gegege');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_06_011242_create_contacts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('km@gmail.com', 'cL65c59vTX32gKLmqqnKL7ltTdi2KsRvggIEeq6CVw8Vxry5L2dEWbusLvGucs7b', '2023-04-06 17:54:43'),
('km@gmail.com', 'NW3zka5z01Bv4LUsyyszCzeChv0Nrhbhq20efV1GRpYphdGvQGTIHEpu7apu3cvy', '2023-04-06 18:21:00'),
('km@gmail.com', 'L5Lkfx6hITsIEXzoFWt43D5dkJeh94niFmHkSG24dfEbgwWxLyLb3UgaHeMS6ZYA', '2023-04-06 18:24:40'),
('km@gmail.com', 'lJVKhGQs3pbdVaRqdFLeNts409Yuhhfzns2KnHbVFvZvkiWwn2k6mUMYyCC86amD', '2023-04-06 18:25:50'),
('km@gmail.com', 'Pz9QHDJ9V0ZBPffmLGTr5xwSHec8JnLzS7zObaidgDyWRhXLYhN01KUMhL5zC0EQ', '2023-04-06 18:26:16'),
('km@gmail.com', 'uk7LyJeQ1r4s9YXTRRiU3hDZiZ2XTqYIvH1Jl8EGlDiiTRSe2y1gq4soOTLUvSkS', '2023-04-06 18:27:03'),
('km@gmail.com', '0uuCFzjqEnaQ4h8ia1Djfjb3DymL0gnwUnHw4AaBjok0nKs5e0LwoO4xPiR8OtY1', '2023-04-06 18:30:52'),
('km@gmail.com', 'AFMQvXdLd9cGZD5Fa8VoHQlRBtJdtRu8UHm2qyz7IfJjg2oCKvbTi8gCCjKGaKid', '2023-04-06 18:32:37'),
('km@gmail.com', 'ODwSjLAR6j62DrgsT3ECEkTMe75SZt9gxAb6i2k8JUE7qRCpWXtSxoJzH0ZMpgqa', '2023-04-06 18:33:00'),
('km@gmail.com', 'ipYmbSRL5IHzwPxULGwN0cCUuQEVKS2D4ZDmGhKEVFLvzElSlY6t7xMXhKlxXVzi', '2023-04-06 18:37:01'),
('s@gmail.com', 'NaYfJfnfr7iXFDQL27gy0k21A9nUJjQqIDaG787zrJ0v7dYkILSEUUEhLB3oy3RL', '2023-04-06 18:40:13'),
('s@gmail.com', 'n6drQ7ZvrZTudYqOy5Ci0gqDwn1fXfp5WkSzmy2lRXwXKuSUmN3q4lONA4zGWai2', '2023-04-06 18:42:26'),
('kylelamcha@gmail.com', '2o33fw1HNAs88bNsmGxWta8xn2BSHbW4W9M61AIEZvJESdryX4rAGSVZjqIP4obC', '2023-04-06 18:44:20'),
('kylelamcha@gmail.com', 'XXz7k6Qru2boFWaZsUmnE5EV9pBxk7C16foGPxxz1ql79mWkD9aNO7CIWmYGOEga', '2023-04-06 18:45:28'),
('kylelamcha@gmail.com', 'UOxqvbgkNSP2Cz69bK2e2UrKuk7paamuseIjVH5p8cMpMy3W85wvByzmlCx6XUHi', '2023-04-06 18:46:31'),
('s@gmail.com', '0qvHQ2kmslfRZrzy6gCZRdaaau2z24wMJ6KYxoIPgtfCjLiT5ZAJlVIn5RR5C8Q9', '2023-04-06 18:47:41'),
('t@gmail.com', '8XJub4iF8Kidgt4L01GBQdCxP3gY1MiuxTkscM2ujGTen2yUbEnJt5NPSWfDrDUc', '2023-04-06 18:49:20'),
('kylelamcha@gmail.com', 'HxuP1Kq4fCZTCmLrNYnYK3PYg1FiUYwTabxaY0hmFZNmBQhrWKCv2Ee8l0Blyv1V', '2023-04-07 05:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `message` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kyle Lamocha', 'k@gmail.com', NULL, '$2y$10$TmVMgXHDlsNiiJ4jdvb6JuOqVSotIUXjzHy82bn3S6bFRm8/vV5Pa', NULL, '2023-02-09 21:13:54', '2023-02-09 21:13:54'),
(2, 'John Mark Calabio', 'j@gmail.com', NULL, '$2y$10$g53xoeCWzRIWRzUU.NzM/exjUqKLX8SfJw2v8l.sgDRewk9JdO/7C', NULL, '2023-02-18 04:32:00', '2023-02-18 04:32:00'),
(3, 'John Mark Calabio', 'jm@gmail.com', NULL, '$2y$10$/sd7ulBj1mZdwdLPB3q/QOVkkm.jRn9HsCcogrRBz4UiW0dxmCys.', NULL, '2023-02-18 04:32:41', '2023-02-18 04:32:41'),
(4, 'Kyla Mocha', 'km@gmail.com', NULL, '$2y$10$j1DzTb0BQ8qkP4lj9TlNwuke1Iq3GBrUtn9VIICjDG6m1qDToQPtO', NULL, '2023-02-18 04:54:58', '2023-02-18 04:54:58'),
(5, 'Kylie Jenner', 'kj@gmail.com', NULL, '$2y$10$pmEcd.jGnF/HJm3JbCK/N.96hR/SV6Q4vmlbRtGU38YqIM9TL9DPi', NULL, '2023-02-18 04:55:34', '2023-02-18 04:55:34'),
(6, 'Tom Nook', 'tm@gmail.com', NULL, 'tom123', NULL, '2023-04-06 17:04:15', '2023-04-06 17:04:15'),
(7, 'Tom Nook', 't@gmail.com', NULL, 'tommy123', NULL, '2023-04-06 17:05:51', '2023-04-06 17:05:51'),
(8, 'Shanai', 's@gmail.com', NULL, '$2y$10$3kFTCGJAWddVC.ISfw2gBeD.oWXXGD6DNlOE3GC3hnfrmIeXb0BC2', NULL, '2023-04-06 17:07:59', '2023-04-06 17:07:59'),
(9, 'Kyle Lamocha', 'kylelamcha@gmail.com', NULL, '$2y$10$V0LLQBqzupWlYFGkW6MNB.um2CNnOfDt536.kUToBEwJuUCOyDPDi', NULL, '2023-04-06 18:44:08', '2023-04-06 18:44:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `journal_details`
--
ALTER TABLE `journal_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `journal_details`
--
ALTER TABLE `journal_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
