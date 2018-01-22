-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 22, 2018 at 05:21 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `compilations`
--

CREATE TABLE `compilations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci,
  `video` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `compilations`
--

INSERT INTO `compilations` (`id`, `title`, `thumb`, `video`, `status`, `created_at`, `updated_at`) VALUES
(1, '8 Epic Lasagnas', 'https://s3.amazonaws.com/video-api-prod/assets/97740f979085400e809cf5c913190775/LFBThumb.jpg?output-format=webp&output-quality=60&resize=1000:*', '', 1, '2018-01-14 12:33:08', '2018-01-14 12:33:08'),
(2, 'Satisfying Salads That Don\'t Suck', 'https://s3.amazonaws.com/video-api-prod/assets/f3f32d255e084b48858bdf14c7588ad3/Untitled-1.jpg?output-format=webp&output-quality=60&resize=1000:*', 'https://vid.buzzfeed.com/output/72952/mp4_1280X720/1516123030', 1, '2018-01-14 12:33:08', '2018-01-14 12:33:08');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci,
  `ingredient` text COLLATE utf8mb4_unicode_ci,
  `serving` int(11) DEFAULT NULL,
  `preparation` text COLLATE utf8mb4_unicode_ci,
  `video` text COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `publishDate` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customerId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `productType` tinyint(4) DEFAULT NULL,
  `quantity` float NOT NULL,
  `userNote` text COLLATE utf8_unicode_ci,
  `adminNote` text COLLATE utf8_unicode_ci,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compilationId` int(11) DEFAULT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci,
  `ingredient` text COLLATE utf8mb4_unicode_ci,
  `serving` int(11) DEFAULT NULL,
  `preparation` text COLLATE utf8mb4_unicode_ci,
  `video` text COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `title`, `compilationId`, `thumb`, `ingredient`, `serving`, `preparation`, `video`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Caramel Banana Crepes 1', 1, 'https://img.buzzfeed.com/thumbnailer-prod-us-east-1/3f2f5ec67e414ed68dc774f6129a8740/BFV9642_Crepes_4_Ways-FB1080.jpg?output-quality=60&resize=1000:*', '<p>1 cup unsalted butter<br>¼ cup brown sugar<br>¼ cup corn syrup<br>¼ cup flour<br>¾ cup finely chopped pecan<br>1 cup semi sweet chocolate, chopped<br>1 pt vanilla ice cream<br>1 cup mixed nut, chopped<br></p>', 4, '<p></p><ol><li>In a large bowl, combine flour, eggs, butter, and sugar, stirring until ingredients are slightly mixed.<br></li><li>Add the milk ½ cup (120 ml) at a time, stirring vigorously, making sure the milk is completely incorporated into the batter and that the batter is smooth before adding more milk.<br></li><li>Repeat with the rest of the milk. The batter should be very liquidy and have no lumps.<br></li><li>In a pan over medium heat, pour ⅓ cup (95 grams) of the batter in the center and swirl the batter around the edges of the pan until set.<br></li><li>To know when the crepe is ready to flip, lift up one of the edges about ⅓ of the way. The bottom side should be golden brown. Flip the crepe.<br></li><li>Cook until the edges are starting to slightly crisp.<br></li><li>Remove from heat and cover with a paper towel to make sure the crepes stay moist.<br></li><li>In a pan over medium heat, mix the brown sugar and butter until slightly bubbling.<br></li><li>Add the cinnamon and bananas, stirring until bananas are evenly coated with the caramel.<br></li><li>Remove from heat and cool.<br></li><li>Spread half of the banana mixture on half of one crepe.<br></li><li>Fold the other half of the crepe on top of the bananas, then fold the crepe in half.<br></li><li>Repeat with the other crepe.<br></li><li>Serve with whipped cream and a drizzle of caramel sauce.<br></li><li>Enjoy!</li></ol><br><p></p>', 'https://vid.buzzfeed.com/output/44985/mp4_1280X720/1501028201', '250000', 1, '2018-01-14 19:33:08', '2018-01-14 19:33:08'),
(2, 'Caramel Banana Crepes 2', 1, 'https://img.buzzfeed.com/thumbnailer-prod-us-east-1/3f2f5ec67e414ed68dc774f6129a8740/BFV9642_Crepes_4_Ways-FB1080.jpg?output-quality=60&resize=1000:*', '<p>1 cup unsalted butter<br>¼ cup brown sugar<br>¼ cup corn syrup<br>¼ cup flour<br>¾ cup finely chopped pecan<br>1 cup semi sweet chocolate, chopped<br>1 pt vanilla ice cream<br>1 cup mixed nut, chopped<br></p>', 4, '<p></p><ol><li>In a large bowl, combine flour, eggs, butter, and sugar, stirring until ingredients are slightly mixed.<br></li><li>Add the milk ½ cup (120 ml) at a time, stirring vigorously, making sure the milk is completely incorporated into the batter and that the batter is smooth before adding more milk.<br></li><li>Repeat with the rest of the milk. The batter should be very liquidy and have no lumps.<br></li><li>In a pan over medium heat, pour ⅓ cup (95 grams) of the batter in the center and swirl the batter around the edges of the pan until set.<br></li><li>To know when the crepe is ready to flip, lift up one of the edges about ⅓ of the way. The bottom side should be golden brown. Flip the crepe.<br></li><li>Cook until the edges are starting to slightly crisp.<br></li><li>Remove from heat and cover with a paper towel to make sure the crepes stay moist.<br></li><li>In a pan over medium heat, mix the brown sugar and butter until slightly bubbling.<br></li><li>Add the cinnamon and bananas, stirring until bananas are evenly coated with the caramel.<br></li><li>Remove from heat and cool.<br></li><li>Spread half of the banana mixture on half of one crepe.<br></li><li>Fold the other half of the crepe on top of the bananas, then fold the crepe in half.<br></li><li>Repeat with the other crepe.<br></li><li>Serve with whipped cream and a drizzle of caramel sauce.<br></li><li>Enjoy!</li></ol><br><p></p>', 'https://vid.buzzfeed.com/output/44985/mp4_1280X720/1501028201', '250000', 1, '2018-01-14 12:33:08', '2018-01-14 12:33:08'),
(3, 'Caramel Banana Crepes 3', 1, 'https://img.buzzfeed.com/thumbnailer-prod-us-east-1/3f2f5ec67e414ed68dc774f6129a8740/BFV9642_Crepes_4_Ways-FB1080.jpg?output-quality=60&resize=1000:*', '<p>1 cup unsalted butter<br>¼ cup brown sugar<br>¼ cup corn syrup<br>¼ cup flour<br>¾ cup finely chopped pecan<br>1 cup semi sweet chocolate, chopped<br>1 pt vanilla ice cream<br>1 cup mixed nut, chopped<br></p>', 4, '<p></p><ol><li>In a large bowl, combine flour, eggs, butter, and sugar, stirring until ingredients are slightly mixed.<br></li><li>Add the milk ½ cup (120 ml) at a time, stirring vigorously, making sure the milk is completely incorporated into the batter and that the batter is smooth before adding more milk.<br></li><li>Repeat with the rest of the milk. The batter should be very liquidy and have no lumps.<br></li><li>In a pan over medium heat, pour ⅓ cup (95 grams) of the batter in the center and swirl the batter around the edges of the pan until set.<br></li><li>To know when the crepe is ready to flip, lift up one of the edges about ⅓ of the way. The bottom side should be golden brown. Flip the crepe.<br></li><li>Cook until the edges are starting to slightly crisp.<br></li><li>Remove from heat and cover with a paper towel to make sure the crepes stay moist.<br></li><li>In a pan over medium heat, mix the brown sugar and butter until slightly bubbling.<br></li><li>Add the cinnamon and bananas, stirring until bananas are evenly coated with the caramel.<br></li><li>Remove from heat and cool.<br></li><li>Spread half of the banana mixture on half of one crepe.<br></li><li>Fold the other half of the crepe on top of the bananas, then fold the crepe in half.<br></li><li>Repeat with the other crepe.<br></li><li>Serve with whipped cream and a drizzle of caramel sauce.<br></li><li>Enjoy!</li></ol><br><p></p>', 'https://vid.buzzfeed.com/output/44985/mp4_1280X720/1501028201', '250000', 1, '2018-01-14 12:33:08', '2018-01-14 12:33:08'),
(4, 'Caramel Banana Crepes 4', 1, 'https://img.buzzfeed.com/thumbnailer-prod-us-east-1/3f2f5ec67e414ed68dc774f6129a8740/BFV9642_Crepes_4_Ways-FB1080.jpg?output-quality=60&resize=1000:*', '<p>1 cup unsalted butter<br>¼ cup brown sugar<br>¼ cup corn syrup<br>¼ cup flour<br>¾ cup finely chopped pecan<br>1 cup semi sweet chocolate, chopped<br>1 pt vanilla ice cream<br>1 cup mixed nut, chopped<br></p>', 4, '<p></p><ol><li>In a large bowl, combine flour, eggs, butter, and sugar, stirring until ingredients are slightly mixed.<br></li><li>Add the milk ½ cup (120 ml) at a time, stirring vigorously, making sure the milk is completely incorporated into the batter and that the batter is smooth before adding more milk.<br></li><li>Repeat with the rest of the milk. The batter should be very liquidy and have no lumps.<br></li><li>In a pan over medium heat, pour ⅓ cup (95 grams) of the batter in the center and swirl the batter around the edges of the pan until set.<br></li><li>To know when the crepe is ready to flip, lift up one of the edges about ⅓ of the way. The bottom side should be golden brown. Flip the crepe.<br></li><li>Cook until the edges are starting to slightly crisp.<br></li><li>Remove from heat and cover with a paper towel to make sure the crepes stay moist.<br></li><li>In a pan over medium heat, mix the brown sugar and butter until slightly bubbling.<br></li><li>Add the cinnamon and bananas, stirring until bananas are evenly coated with the caramel.<br></li><li>Remove from heat and cool.<br></li><li>Spread half of the banana mixture on half of one crepe.<br></li><li>Fold the other half of the crepe on top of the bananas, then fold the crepe in half.<br></li><li>Repeat with the other crepe.<br></li><li>Serve with whipped cream and a drizzle of caramel sauce.<br></li><li>Enjoy!</li></ol><br><p></p>', 'https://vid.buzzfeed.com/output/44985/mp4_1280X720/1501028201', '250000', 1, '2018-01-14 12:33:08', '2018-01-14 12:33:08'),
(5, 'Caramel Banana Crepes 5', NULL, 'https://img.buzzfeed.com/thumbnailer-prod-us-east-1/3f2f5ec67e414ed68dc774f6129a8740/BFV9642_Crepes_4_Ways-FB1080.jpg?output-quality=60&resize=1000:*', '<p>1 cup unsalted butter<br>¼ cup brown sugar<br>¼ cup corn syrup<br>¼ cup flour<br>¾ cup finely chopped pecan<br>1 cup semi sweet chocolate, chopped<br>1 pt vanilla ice cream<br>1 cup mixed nut, chopped<br></p>', 4, '<p></p><ol><li>In a large bowl, combine flour, eggs, butter, and sugar, stirring until ingredients are slightly mixed.<br></li><li>Add the milk ½ cup (120 ml) at a time, stirring vigorously, making sure the milk is completely incorporated into the batter and that the batter is smooth before adding more milk.<br></li><li>Repeat with the rest of the milk. The batter should be very liquidy and have no lumps.<br></li><li>In a pan over medium heat, pour ⅓ cup (95 grams) of the batter in the center and swirl the batter around the edges of the pan until set.<br></li><li>To know when the crepe is ready to flip, lift up one of the edges about ⅓ of the way. The bottom side should be golden brown. Flip the crepe.<br></li><li>Cook until the edges are starting to slightly crisp.<br></li><li>Remove from heat and cover with a paper towel to make sure the crepes stay moist.<br></li><li>In a pan over medium heat, mix the brown sugar and butter until slightly bubbling.<br></li><li>Add the cinnamon and bananas, stirring until bananas are evenly coated with the caramel.<br></li><li>Remove from heat and cool.<br></li><li>Spread half of the banana mixture on half of one crepe.<br></li><li>Fold the other half of the crepe on top of the bananas, then fold the crepe in half.<br></li><li>Repeat with the other crepe.<br></li><li>Serve with whipped cream and a drizzle of caramel sauce.<br></li><li>Enjoy!</li></ol><br><p></p>', 'https://vid.buzzfeed.com/output/44985/mp4_1280X720/1501028201', '250000', 1, '2018-01-14 12:33:08', '2018-01-14 12:33:08'),
(6, 'Caramel Banana Crepes 6', NULL, 'https://img.buzzfeed.com/thumbnailer-prod-us-east-1/3f2f5ec67e414ed68dc774f6129a8740/BFV9642_Crepes_4_Ways-FB1080.jpg?output-quality=60&resize=1000:*', '<p>1 cup unsalted butter<br>¼ cup brown sugar<br>¼ cup corn syrup<br>¼ cup flour<br>¾ cup finely chopped pecan<br>1 cup semi sweet chocolate, chopped<br>1 pt vanilla ice cream<br>1 cup mixed nut, chopped<br></p>', 4, '<p></p><ol><li>In a large bowl, combine flour, eggs, butter, and sugar, stirring until ingredients are slightly mixed.<br></li><li>Add the milk ½ cup (120 ml) at a time, stirring vigorously, making sure the milk is completely incorporated into the batter and that the batter is smooth before adding more milk.<br></li><li>Repeat with the rest of the milk. The batter should be very liquidy and have no lumps.<br></li><li>In a pan over medium heat, pour ⅓ cup (95 grams) of the batter in the center and swirl the batter around the edges of the pan until set.<br></li><li>To know when the crepe is ready to flip, lift up one of the edges about ⅓ of the way. The bottom side should be golden brown. Flip the crepe.<br></li><li>Cook until the edges are starting to slightly crisp.<br></li><li>Remove from heat and cover with a paper towel to make sure the crepes stay moist.<br></li><li>In a pan over medium heat, mix the brown sugar and butter until slightly bubbling.<br></li><li>Add the cinnamon and bananas, stirring until bananas are evenly coated with the caramel.<br></li><li>Remove from heat and cool.<br></li><li>Spread half of the banana mixture on half of one crepe.<br></li><li>Fold the other half of the crepe on top of the bananas, then fold the crepe in half.<br></li><li>Repeat with the other crepe.<br></li><li>Serve with whipped cream and a drizzle of caramel sauce.<br></li><li>Enjoy!</li></ol><br><p></p>', 'https://vid.buzzfeed.com/output/44985/mp4_1280X720/1501028201', '250000', 1, '2018-01-14 12:33:08', '2018-01-14 12:33:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lê Huỳnh Đức', 'hoabattu', 'duclh711@gmail.com', '$2y$10$iJo1JNvKHGLMPTkKHnpAmukgj9MtB1SRVkaqBZnF3ztoEDlDzDCZu', NULL, '2018-01-14 19:31:04', '2018-01-14 19:31:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compilations`
--
ALTER TABLE `compilations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compilations`
--
ALTER TABLE `compilations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
