-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Maio-2019 às 05:10
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbplaza`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apartments`
--

CREATE TABLE `apartments` (
  `id` int(10) UNSIGNED NOT NULL,
  `blap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` enum('alugado','residindo','aluga-se','vende-se','vazio') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `apartments`
--

INSERT INTO `apartments` (`id`, `blap`, `condition`, `created_at`, `updated_at`) VALUES
(1, 'A/01', 'vazio', NULL, NULL),
(2, 'A/02', 'vazio', NULL, NULL),
(3, 'A/03', 'vazio', NULL, NULL),
(4, 'A/04', 'vazio', NULL, NULL),
(5, 'A/11', 'vazio', NULL, NULL),
(6, 'A/12', 'vazio', NULL, NULL),
(7, 'A/13', 'vazio', NULL, NULL),
(8, 'A/14', 'vazio', NULL, NULL),
(9, 'A/21', 'vazio', NULL, NULL),
(10, 'A/22', 'vazio', NULL, NULL),
(11, 'A/23', 'vazio', NULL, NULL),
(12, 'A/24', 'vazio', NULL, NULL),
(13, 'A/31', 'vazio', NULL, NULL),
(14, 'A/32', 'vazio', NULL, NULL),
(15, 'A/33', 'vazio', NULL, NULL),
(16, 'A/34', 'vazio', NULL, NULL),
(17, 'B/01', 'vazio', NULL, NULL),
(18, 'B/02', 'vazio', NULL, NULL),
(19, 'B/03', 'vazio', NULL, NULL),
(20, 'B/04', 'vazio', NULL, NULL),
(21, 'B/11', 'vazio', NULL, NULL),
(22, 'B/12', 'vazio', NULL, NULL),
(23, 'B/13', 'vazio', NULL, NULL),
(24, 'B/14', 'vazio', NULL, NULL),
(25, 'B/21', 'vazio', NULL, NULL),
(26, 'B/22', 'vazio', NULL, NULL),
(27, 'B/23', 'vazio', NULL, NULL),
(28, 'B/24', 'vazio', NULL, NULL),
(29, 'B/31', 'vazio', NULL, NULL),
(30, 'B/32', 'vazio', NULL, NULL),
(31, 'B/33', 'vazio', NULL, NULL),
(32, 'B/34', 'vazio', NULL, NULL),
(33, 'C/01', 'vazio', NULL, NULL),
(34, 'C/02', 'vazio', NULL, NULL),
(35, 'C/03', 'alugado', NULL, '2019-05-13 04:28:21'),
(36, 'C/04', 'vazio', NULL, NULL),
(37, 'C/11', 'vazio', NULL, NULL),
(38, 'C/12', 'vazio', NULL, NULL),
(39, 'C/13', 'vazio', NULL, NULL),
(40, 'C/14', 'vazio', NULL, NULL),
(41, 'C/21', 'vazio', NULL, NULL),
(42, 'C/22', 'vazio', NULL, NULL),
(43, 'C/23', 'vazio', NULL, NULL),
(44, 'C/24', 'vazio', NULL, NULL),
(45, 'C/31', 'vazio', NULL, NULL),
(46, 'C/32', 'vazio', NULL, NULL),
(47, 'C/33', 'vazio', NULL, NULL),
(48, 'C/34', 'vazio', NULL, NULL),
(49, 'D/01', 'vazio', NULL, NULL),
(50, 'D/02', 'vazio', NULL, NULL),
(51, 'D/03', 'vazio', NULL, NULL),
(52, 'D/04', 'vazio', NULL, NULL),
(53, 'D/11', 'vazio', NULL, NULL),
(54, 'D/12', 'vazio', NULL, NULL),
(55, 'D/13', 'vazio', NULL, NULL),
(56, 'D/14', 'vazio', NULL, NULL),
(57, 'D/21', 'vazio', NULL, NULL),
(58, 'D/22', 'vazio', NULL, NULL),
(59, 'D/23', 'vazio', NULL, NULL),
(60, 'D/24', 'vazio', NULL, NULL),
(61, 'D/31', 'vazio', NULL, NULL),
(62, 'D/32', 'vazio', NULL, NULL),
(63, 'D/33', 'vazio', NULL, NULL),
(64, 'D/34', 'vazio', NULL, NULL),
(65, 'E/01', 'vazio', NULL, NULL),
(66, 'E/02', 'vazio', NULL, NULL),
(67, 'E/03', 'vazio', NULL, NULL),
(68, 'E/04', 'vazio', NULL, NULL),
(69, 'E/11', 'vazio', NULL, NULL),
(70, 'E/12', 'vazio', NULL, NULL),
(71, 'E/13', 'vazio', NULL, NULL),
(72, 'E/14', 'vazio', NULL, NULL),
(73, 'E/21', 'vazio', NULL, NULL),
(74, 'E/22', 'vazio', NULL, NULL),
(75, 'E/23', 'vazio', NULL, NULL),
(76, 'E/24', 'vazio', NULL, NULL),
(77, 'E/31', 'vazio', NULL, NULL),
(78, 'E/32', 'vazio', NULL, NULL),
(79, 'E/33', 'vazio', NULL, NULL),
(80, 'E/34', 'vazio', NULL, NULL),
(81, 'F/01', 'vazio', NULL, NULL),
(82, 'F/02', 'vazio', NULL, NULL),
(83, 'F/03', 'vazio', NULL, NULL),
(84, 'F/04', 'vazio', NULL, NULL),
(85, 'F/11', 'vazio', NULL, NULL),
(86, 'F/12', 'vazio', NULL, NULL),
(87, 'F/13', 'vazio', NULL, NULL),
(88, 'F/14', 'vazio', NULL, NULL),
(89, 'F/21', 'vazio', NULL, NULL),
(90, 'F/22', 'vazio', NULL, NULL),
(91, 'F/23', 'vazio', NULL, NULL),
(92, 'F/24', 'vazio', NULL, NULL),
(93, 'F/31', 'vazio', NULL, NULL),
(94, 'F/32', 'vazio', NULL, NULL),
(95, 'F/33', 'vazio', NULL, NULL),
(96, 'F/34', 'vazio', NULL, NULL),
(97, 'G/01', 'vazio', NULL, NULL),
(98, 'G/02', 'vazio', NULL, NULL),
(99, 'G/03', 'vazio', NULL, NULL),
(100, 'G/04', 'vazio', NULL, NULL),
(101, 'G/11', 'vazio', NULL, NULL),
(102, 'G/12', 'vazio', NULL, NULL),
(103, 'G/13', 'vazio', NULL, NULL),
(104, 'G/14', 'vazio', NULL, NULL),
(105, 'G/21', 'vazio', NULL, NULL),
(106, 'G/22', 'vazio', NULL, NULL),
(107, 'G/23', 'vazio', NULL, NULL),
(108, 'G/24', 'vazio', NULL, NULL),
(109, 'G/31', 'vazio', NULL, NULL),
(110, 'G/32', 'vazio', NULL, NULL),
(111, 'G/33', 'vazio', NULL, NULL),
(112, 'G/34', 'vazio', NULL, NULL),
(113, 'H/01', 'vazio', NULL, NULL),
(114, 'H/02', 'vazio', NULL, NULL),
(115, 'H/03', 'vazio', NULL, NULL),
(116, 'H/04', 'vazio', NULL, NULL),
(117, 'H/11', 'residindo', NULL, '2019-05-13 03:06:15'),
(118, 'H/12', 'vazio', NULL, NULL),
(119, 'H/13', 'vazio', NULL, NULL),
(120, 'H/14', 'vazio', NULL, NULL),
(121, 'H/21', 'vazio', NULL, NULL),
(122, 'H/22', 'vazio', NULL, NULL),
(123, 'H/23', 'vazio', NULL, NULL),
(124, 'H/24', 'vazio', NULL, NULL),
(125, 'H/31', 'vazio', NULL, NULL),
(126, 'H/32', 'vazio', NULL, NULL),
(127, 'H/33', 'vazio', NULL, NULL),
(128, 'H/34', 'vazio', NULL, NULL),
(129, 'I/01', 'vazio', NULL, NULL),
(130, 'I/02', 'vazio', NULL, NULL),
(131, 'I/03', 'vazio', NULL, NULL),
(132, 'I/04', 'vazio', NULL, NULL),
(133, 'I/11', 'vazio', NULL, NULL),
(134, 'I/12', 'vazio', NULL, NULL),
(135, 'I/13', 'vazio', NULL, NULL),
(136, 'I/14', 'vazio', NULL, NULL),
(137, 'I/21', 'vazio', NULL, NULL),
(138, 'I/22', 'vazio', NULL, NULL),
(139, 'I/23', 'vazio', NULL, NULL),
(140, 'I/24', 'vazio', NULL, NULL),
(141, 'I/31', 'vazio', NULL, NULL),
(142, 'I/32', 'vazio', NULL, NULL),
(143, 'I/33', 'vazio', NULL, NULL),
(144, 'I/34', 'vazio', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `classifieds`
--

CREATE TABLE `classifieds` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `classifieds`
--

INSERT INTO `classifieds` (`id`, `title`, `price`, `description`, `photo_path`, `owner_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Eu voluptatem omnis', '65', 'At aut doloremque qu', NULL, 6, '2019-05-13 05:16:06', '2019-05-13 05:16:06', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `kiosks`
--

CREATE TABLE `kiosks` (
  `id` int(10) UNSIGNED NOT NULL,
  `date_marked` date NOT NULL,
  `date_delivery` date NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observation` text COLLATE utf8mb4_unicode_ci,
  `owner_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `kiosks`
--

INSERT INTO `kiosks` (`id`, `date_marked`, `date_delivery`, `status`, `observation`, `owner_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2019-05-15', '2019-05-16', 'Optio eveniet aliq', 'Nisi nisi voluptatum', 5, '2019-05-13 05:17:58', '2019-05-13 05:26:28', NULL),
(2, '2019-05-23', '2019-05-23', 'Tenetur quaerat proi', 'Dolorem et dolor des', 8, '2019-05-13 05:28:17', '2019-05-13 05:28:17', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `letters`
--

CREATE TABLE `letters` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observation` text COLLATE utf8mb4_unicode_ci,
  `owner_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `letters`
--

INSERT INTO `letters` (`id`, `title`, `status`, `observation`, `owner_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Labore dolore maxime', 'portaria', 'Perspiciatis omnis', 5, '2019-05-13 05:06:06', '2019-05-13 05:08:33', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_30_024025_create_apartments_table', 1),
(4, '2019_01_22_010656_create_owners_table', 1),
(5, '2019_01_24_010231_create_residents_table', 1),
(6, '2019_01_24_010312_create_vehicles_table', 1),
(7, '2019_01_24_010328_create_letters_table', 1),
(8, '2019_01_24_010350_create_classifieds_table', 1),
(9, '2019_01_24_010408_create_kiosks_table', 1),
(10, '2019_01_24_010527_create_visitors_table', 1),
(11, '2019_01_24_172553_create_visits_table', 1),
(12, '2019_01_29_180801_create_notices_table', 1),
(13, '2019_03_01_231445_create_phones_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `owners`
--

CREATE TABLE `owners` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('masculino','feminino') COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observation` text COLLATE utf8mb4_unicode_ci,
  `apartment_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `owners`
--

INSERT INTO `owners` (`id`, `fullname`, `birthday`, `email`, `rg`, `cpf`, `gender`, `phone`, `photo_path`, `observation`, `apartment_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Quinn Weiss', '2019-05-22', NULL, 'Tenetur molestiae do', 'Odio velit est elige', 'feminino', '+1 (698) 708-8775', NULL, NULL, 23, '2019-05-08 05:37:58', '2019-05-08 05:37:58', NULL),
(5, 'Colorado Blevins', '2019-05-23', 'rinyhes@mailinator.com', 'Eu temporibus deleni', 'Nulla qui quia quis', 'feminino', '+1 (868) 265-2256', NULL, NULL, 106, '2019-05-08 05:42:08', '2019-05-08 05:42:08', NULL),
(6, 'Rose Zamora', '2019-05-31', 'bagir@mailinator.com', 'Numquam ducimus lab', 'Odit doloribus bland', 'feminino', '+1 (746) 282-4187', NULL, NULL, 35, '2019-05-08 05:44:38', '2019-05-09 05:03:21', NULL),
(8, 'Aquila Benjamin', '2019-05-22', 'didim@mailinator.net', 'Doloremque numquam f', 'Quia consequatur ip', 'feminino', '+1 (621) 416-9054', NULL, 'A et totam qui ea cu', 117, '2019-05-13 03:06:15', '2019-05-13 03:06:15', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `phones`
--

CREATE TABLE `phones` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `residents`
--

CREATE TABLE `residents` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('masculino','feminino') COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resident_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `residents`
--

INSERT INTO `residents` (`id`, `fullname`, `photo_path`, `rg`, `cpf`, `gender`, `birthday`, `phone`, `resident_type`, `owner_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Conan Leach', NULL, 'Consequatur qui qui', 'Reprehenderit iste l', 'feminino', '2019-05-15', '+1 (458) 105-1532', 'Residentype12', 6, '2019-05-09 03:38:45', '2019-05-09 05:05:49', '2019-05-09 05:05:49'),
(4, 'Eric Greer', NULL, 'Nihil cupiditate sit', 'Aliquid repudiandae', 'feminino', '2019-05-22', '+1 (328) 724-8445', 'Residentype9', 6, '2019-05-09 04:28:40', '2019-05-09 04:28:40', NULL),
(5, 'Dahlia Brock', NULL, 'Magna impedit dolor', 'Ut in sit nisi aut r', 'masculino', '2019-05-14', '+1 (902) 776-5326', 'Residentype9', 5, '2019-05-13 04:30:48', '2019-05-13 04:31:03', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrador', 'admin@email.com', '2019-05-01 04:48:39', '$2y$10$SDmacwa5mV8PIAlsB6wPRuGMriDSqyuDqcmpw.gNHv7UfUCsa3Jde', '22DBRSQmASi5lwukYiTAAmcQFUXSeZV9ifjBBvZ3IsFWk2mJEM1XW60Zv6un', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_vehicle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_plate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observation` text COLLATE utf8mb4_unicode_ci,
  `owner_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `vehicles`
--

INSERT INTO `vehicles` (`id`, `brand`, `model`, `type_vehicle`, `vehicle_color`, `vehicle_plate`, `observation`, `owner_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Renault', 'Clio Campus Hi-Flex 1.0 16V 5p', 'carros', 'Prata', 'ewsdfsdf', NULL, 6, '2019-05-13 04:48:52', '2019-05-13 04:48:52', NULL),
(2, 'Ford', 'Corcel II L', 'carros', 'Prata', 'ewsdfsdf', NULL, 4, '2019-05-13 04:51:28', '2019-05-13 04:51:28', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitors`
--

CREATE TABLE `visitors` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('masculino','feminino') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `visitors`
--

INSERT INTO `visitors` (`id`, `fullname`, `rg`, `cpf`, `phone`, `photo_path`, `gender`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Amethyst Webb', 'Inventore amet temp', 'Dicta veniam expedi', '+1 (547) 546-5996', NULL, 'feminino', '2019-05-13 05:30:57', '2019-05-13 05:30:57', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `visits`
--

CREATE TABLE `visits` (
  `entry_date` date DEFAULT NULL,
  `departure_date` date DEFAULT NULL,
  `entry_hour` time DEFAULT NULL,
  `departure_hour` time DEFAULT NULL,
  `observation` text COLLATE utf8mb4_unicode_ci,
  `owner_id` int(10) UNSIGNED NOT NULL,
  `visitor_id` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartments`
--
ALTER TABLE `apartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classifieds`
--
ALTER TABLE `classifieds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classifieds_owner_id_foreign` (`owner_id`);

--
-- Indexes for table `kiosks`
--
ALTER TABLE `kiosks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kiosks_owner_id_foreign` (`owner_id`);

--
-- Indexes for table `letters`
--
ALTER TABLE `letters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `letters_owner_id_foreign` (`owner_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notices_owner_id_foreign` (`owner_id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owners_apartment_id_foreign` (`apartment_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `residents_owner_id_foreign` (`owner_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicles_owner_id_foreign` (`owner_id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visits_owner_id_foreign` (`owner_id`),
  ADD KEY `visits_visitor_id_foreign` (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartments`
--
ALTER TABLE `apartments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `classifieds`
--
ALTER TABLE `classifieds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kiosks`
--
ALTER TABLE `kiosks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `letters`
--
ALTER TABLE `letters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `classifieds`
--
ALTER TABLE `classifieds`
  ADD CONSTRAINT `classifieds_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `kiosks`
--
ALTER TABLE `kiosks`
  ADD CONSTRAINT `kiosks_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `letters`
--
ALTER TABLE `letters`
  ADD CONSTRAINT `letters_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `notices`
--
ALTER TABLE `notices`
  ADD CONSTRAINT `notices_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `owners`
--
ALTER TABLE `owners`
  ADD CONSTRAINT `owners_apartment_id_foreign` FOREIGN KEY (`apartment_id`) REFERENCES `apartments` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `residents`
--
ALTER TABLE `residents`
  ADD CONSTRAINT `residents_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `visits`
--
ALTER TABLE `visits`
  ADD CONSTRAINT `visits_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `visits_visitor_id_foreign` FOREIGN KEY (`visitor_id`) REFERENCES `visitors` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
