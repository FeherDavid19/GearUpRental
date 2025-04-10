-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2025. Ápr 10. 15:28
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `gearuprental`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `berlesek`
--

CREATE TABLE `berlesek` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `auto_tipus` varchar(255) NOT NULL,
  `berles_kezdete` date NOT NULL,
  `berles_vege` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `telefonszam` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `berlesek`
--

INSERT INTO `berlesek` (`id`, `user_name`, `auto_tipus`, `berles_kezdete`, `berles_vege`, `created_at`, `updated_at`, `telefonszam`) VALUES
(54, 'Fehér Dávid', 'BMW 5 Series', '2025-04-14', '2025-04-15', '2025-04-10 04:34:48', '2025-04-10 04:34:48', '+36203324122'),
(55, 'Fehér Dávid', 'BMW 5 Series', '2025-04-17', '2025-04-18', '2025-04-10 04:43:11', '2025-04-10 04:43:11', '+36203324122'),
(56, 'Fehér Dávid', 'BMW 5 Series', '2025-04-26', '2025-04-27', '2025-04-10 04:43:50', '2025-04-10 04:43:50', '+36203324122');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `flotta`
--

CREATE TABLE `flotta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evjarat` int(11) NOT NULL,
  `alvazszam` char(255) NOT NULL,
  `kmallas` int(11) NOT NULL,
  `tipus` varchar(255) NOT NULL,
  `indexkep` varchar(255) DEFAULT NULL,
  `uzemanyag` char(255) NOT NULL,
  `suly` char(255) NOT NULL,
  `klima` varchar(255) NOT NULL,
  `cm3` int(11) NOT NULL,
  `lekw` char(255) NOT NULL,
  `valto` varchar(255) NOT NULL,
  `ajtok` int(11) NOT NULL,
  `jogsi` varchar(255) NOT NULL,
  `kivitel` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `flotta`
--

INSERT INTO `flotta` (`id`, `evjarat`, `alvazszam`, `kmallas`, `tipus`, `indexkep`, `uzemanyag`, `suly`, `klima`, `cm3`, `lekw`, `valto`, `ajtok`, `jogsi`, `kivitel`, `created_at`, `updated_at`, `ar`) VALUES
(1, 1993, 'JT2JA82JX00300000', 120000, 'Toyota Supra MK4', 'toyotasupra.jpg', 'benzin', '1495', '1', 2997, '206', 'manuális', 2, 'B', 2, '2025-03-25 11:45:55', '2025-03-25 11:45:55', 15000),
(2, 1999, 'BNR34-400000', 80000, 'Nissan GTR R34', 'nissangtr.jpg', 'benzin', '1560', '1', 2568, '206', 'manuális', 2, 'B', 2, '2025-03-25 11:45:55', '2025-03-25 11:45:55', 15000),
(3, 2020, 'WBA5A7C50ED123456', 15000, 'BMW 5 Series', 'bmw5series.jpg', 'benzin', '1700', '1', 1998, '185', 'automata', 4, 'B', 1, '2025-03-25 12:27:56', '2025-03-25 12:27:56', 5500),
(4, 2018, 'WAUZZZ8V4JA123456', 30000, 'Audi A3', 'audia3.jpg', 'dízel', '1400', '1', 1968, '150', 'manuális', 4, 'B', 1, '2025-03-25 12:27:56', '2025-03-25 12:27:56', 4000),
(5, 2021, 'JH4DC4460RS123456', 5000, 'Honda Civic', 'hondacivic.jpg', 'benzin', '1300', '1', 1498, '130', 'automata', 4, 'B', 1, '2025-03-25 12:27:56', '2025-03-25 12:27:56', 3500),
(6, 2019, '1HGCM82633A123456', 20000, 'Toyota Camry', 'toyotacamry.jpg', 'hibrid', '1600', '1', 2487, '160', 'automata', 4, 'B', 1, '2025-03-25 12:27:56', '2025-03-25 12:27:56', 2000),
(7, 2022, '1FTFW1EF1EK123456', 10000, 'Ford F-150', 'fordf150.jpg', 'benzin', '2500', '1', 3496, '290', 'automata', 4, 'B', 3, '2025-03-25 12:27:56', '2025-03-25 12:27:56', 10000),
(8, 2017, '3VW2B7AJ5HM123456', 40000, 'Volkswagen Golf', 'vwgolf.jpg', 'dízel', '1350', '1', 1598, '115', 'manuális', 4, 'B', 1, '2025-03-25 12:27:56', '2025-03-25 12:27:56', 3700),
(9, 2020, '5YJ3E1EA7LF123456', 20000, 'Tesla Model 3', 'teslamodel3.jpg', 'elektromos', '1800', '1', 0, '283', 'automata', 4, 'B', 5, '2025-03-25 12:27:56', '2025-03-25 12:27:56', 6800),
(10, 2016, 'JN1AZ4EH3EM123456', 60000, 'Nissan 370Z', 'nissan370z.jpg', 'benzin', '1500', '1', 3696, '245', 'manuális', 2, 'B', 2, '2025-03-25 12:27:56', '2025-03-25 12:27:56', 12500),
(11, 2015, 'WDDGF8AB9EA123456', 80000, 'Mercedes-Benz C-Class', 'mercedescclass.jpg', 'dízel', '1600', '1', 2143, '170', 'automata', 4, 'B', 1, '2025-03-25 12:27:56', '2025-03-25 12:27:56', 4200),
(12, 2023, 'ZFF65LJA8E0123456', 1000, 'Ferrari California', 'ferraricalifornia.jpg', 'benzin', '1472', '1', 3855, '456', 'automata', 2, 'B', 2, '2025-03-25 12:27:56', '2025-03-25 12:27:56', 54000),
(13, 2021, '1C4RJFBG8LC123456', 15000, 'Jeep Grand Cherokee', 'jeepgrandcherokee.jpg', 'benzin', '2200', '1', 3604, '295', 'automata', 4, 'B', 3, '2025-03-25 12:27:56', '2025-03-25 12:27:56', 5000),
(14, 2019, 'SALWR2RV1KA123456', 25000, 'Range Rover Sport', 'rangerover.jpg', 'dízel', '2400', '1', 2993, '250', 'automata', 4, 'B', 3, '2025-03-25 12:27:56', '2025-03-25 12:27:56', 4800),
(15, 2018, '1G1ZD5ST5JF123456', 35000, 'Chevrolet Malibu', 'chevroletmalibu.jpg', 'benzin', '1500', '1', 1498, '160', 'automata', 4, 'B', 1, '2025-03-25 12:27:56', '2025-03-25 12:27:56', 2000),
(16, 2020, '5NPE24AF4LH123456', 10000, 'Hyundai Sonata', 'hyundaisonata.jpg', 'hibrid', '1450', '1', 1999, '192', 'automata', 4, 'B', 1, '2025-03-25 12:27:56', '2025-03-25 12:27:56', 1500),
(17, 2017, '1FA6P8CF7H5A123456', 50000, 'Ford Mustang', 'fordmustang.jpg', 'benzin', '1650', '1', 4951, '450', 'manuális', 2, 'B', 2, '2025-03-25 12:27:56', '2025-03-25 12:27:56', 11000),
(18, 2022, 'WA1LAAF73ND123456', 5000, 'Audi Q7', 'audiq7.jpg', 'dízel', '2400', '1', 2967, '286', 'automata', 4, 'B', 3, '2025-03-25 12:27:56', '2025-03-25 12:27:56', 7900),
(19, 2019, 'WBAJA9C57KB123456', 30000, 'BMW 3 Series', 'bmw3series.jpg', 'benzin', '1550', '1', 1998, '184', 'automata', 4, 'B', 2, '2025-03-25 12:27:56', '2025-03-25 12:27:56', 9000),
(20, 2021, '1HGCV1F30MA123456', 15000, 'Honda Accord', 'hondaaccord.jpg', 'hibrid', '1500', '1', 1993, '212', 'automata', 4, 'B', 1, '2025-03-25 12:27:56', '2025-03-25 12:27:56', 1900),
(21, 2023, 'ZAM57XSA6N1234567', 500, 'Maserati Ghibli', 'maseratighibli.jpg', 'benzin', '1800', '1', 2979, '345', 'automata', 4, 'B', 2, '2025-03-25 12:27:56', '2025-03-25 12:27:56', 20000),
(22, 2020, '1N4AL3AP5LC123456', 20000, 'Nissan Juke', 'nissanjuke.jpg', 'benzin', '1400', '1', 2488, '188', 'automata', 4, 'B', 1, '2025-03-25 12:27:56', '2025-03-25 12:27:56', 3400),
(23, 1980, 'ABC123456789', 120000, 'Opel Manta B Rally', 'opelmantab.jpg', 'Benzin', '1050 kg', '0', 1979, '110', 'Manuális', 2, 'B', 4, '2025-03-25 16:30:13', '2025-03-25 16:30:20', 35000),
(24, 1985, 'AUDIS1QUATTRO12345', 50000, 'Audi S1 Quattro Rally', 'audis1q.jpg', 'Benzin', '1090 kg', '0', 2110, '250', 'Manuális', 2, 'B', 4, '2025-03-25 17:16:07', '2025-03-25 17:16:13', 47000),
(25, 1990, 'LANCIAHF123456789', 75000, 'Lancia HF Integrale', 'lanciahfint.jpg', 'Benzin', '1250 kg', '0', 1995, '155', 'Manuális', 2, 'B', 4, '2025-03-25 17:21:50', '2025-03-25 17:21:54', 67000),
(27, 2021, 'DEF654321', 30000, 'Nissan Leaf', 'nissanleaf.jpg', 'elektromos', '1600', '1', 0, '110', 'automata', 4, 'B', 5, '2023-10-01 10:00:00', '2023-10-01 10:00:00', 1200),
(28, 2023, 'GHI789012', 5000, 'BMW i3', 'bmwi3.jpg', 'elektromos', '1400', '1', 0, '125', 'automata', 4, 'B', 5, '2023-10-01 10:00:00', '2023-10-01 10:00:00', 1500),
(29, 2020, 'JKL345678', 45000, 'Audi e-tron', 'audiet.jpg', 'elektromos', '2200', '1', 0, '300', 'automata', 5, 'B', 5, '2023-10-01 10:00:00', '2023-10-01 10:00:00', 25000),
(30, 2022, 'MNO987654', 10000, 'Hyundai Kona', 'hyundaikona.jpg', 'elektromos', '1700', '1', 0, '150', 'automata', 4, 'B', 5, '2023-10-01 10:00:00', '2023-10-01 10:00:00', 1300),
(31, 2023, 'PQR123789', 2000, 'Kia EV6', 'kiaev6.jpg', 'elektromos', '1900', '1', 0, '239', 'automata', 5, 'B', 5, '2023-10-01 10:00:00', '2023-10-01 10:00:00', 2200),
(32, 2021, 'STU456123', 25000, 'VW ID.4', 'vwid4.jpg', 'elektromos', '1800', '1', 0, '204', 'automata', 5, 'B', 5, '2023-10-01 10:00:00', '2023-10-01 10:00:00', 2000),
(33, 2020, 'VWX789456', 40000, 'Renault Zoe', 'renaultzoe.jpg', 'elektromos', '1500', '1', 0, '100', 'automata', 4, 'B', 5, '2023-10-01 10:00:00', '2023-10-01 10:00:00', 1000),
(34, 2022, 'YZA123654', 8000, 'Polestar 2', 'polestar2.jpg', 'elektromos', '2000', '1', 0, '300', 'automata', 5, 'B', 5, '2023-10-01 10:00:00', '2023-10-01 10:00:00', 24000),
(35, 2023, 'BCD456789', 1000, 'Mercedes EQC', 'mercedeseqc.jpg', 'elektromos', '2100', '1', 0, '300', 'automata', 5, 'B', 5, '2023-10-01 10:00:00', '2023-10-01 10:00:00', 26000);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_25_074857_gearuprental', 1),
(5, '2025_03_25_075023_foglalasok', 1),
(6, '2025_03_25_075055_felhasznalok', 1),
(7, '2025_03_31_091604_create_berlesek_table', 1),
(8, '2025_04_01_114040_create_velemenyek_table', 2),
(9, '2025_04_02_055104_create_reviews_table', 3),
(10, '2025_04_06_110305_add_email_to_berlesek_table', 4);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('HXVGIFP8VFQAwaBXOQAKuNeii1wtQ03vvzvfrLbw', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQlRnUEJ6ckRaY096Sm9DU1dhQ0xEdXhVV2JXS3I3UmZiTGI0cEVONCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly9sb2NhbGhvc3QvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1744284268),
('zuQxBLo8deismN2wzzV2pRHtbCw6e3MYKZykgCib', 9, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQkNWeDJwZ0d1NDRpNjdlTWZuQnBOaHRrWDRoMENYRGQ4OEM1WFVLciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly9sb2NhbGhvc3QvZmxvdHRhIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6OTt9', 1744267503);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Fehér Dávid', 'eher_david@freemail.hu', NULL, '$2y$12$IINCrNHkCf09p5ysHZnD1u.i8jsn5fw0sgdDtYzOrj7THwIfqUAW6', NULL, '2025-04-10 04:27:46', '2025-04-10 04:27:46');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `berlesek`
--
ALTER TABLE `berlesek`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- A tábla indexei `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- A tábla indexei `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- A tábla indexei `flotta`
--
ALTER TABLE `flotta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipus` (`tipus`);

--
-- A tábla indexei `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- A tábla indexei `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- A tábla indexei `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `berlesek`
--
ALTER TABLE `berlesek`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT a táblához `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `flotta`
--
ALTER TABLE `flotta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT a táblához `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
