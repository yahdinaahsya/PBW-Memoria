-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2023 pada 10.33
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyekpbw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `kapsulwaktus`
--

CREATE TABLE `kapsulwaktus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2023_04_05_033403_create_momens_table', 3),
(55, '2014_10_12_000000_create_users_table', 4),
(56, '2014_10_12_100000_create_password_reset_tokens_table', 4),
(57, '2019_08_19_000000_create_failed_jobs_table', 4),
(58, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(59, '2023_04_04_162341_create_kapsulwaktus_table', 4),
(60, '2023_04_05_033649_create_momens_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `momens`
--

CREATE TABLE `momens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `momens`
--

INSERT INTO `momens` (`id`, `user_id`, `tanggal`, `judul`, `message`, `gambar`, `created_at`, `updated_at`) VALUES
(1, '1', '2023-05-16', 'KWAK KWAK KWAK JISEOKKK', 'namanya kwak jiseOOKK panggilan gaon tp ky bbekk', 'Screenshot_20211213_180348.jpg', '2023-05-17 20:53:45', '2023-05-17 20:53:45'),
(2, '1', '2023-05-10', 'GAMBAR JOOYEON', 'ku menemukan ini T__T \r\nGAMBAR IJUY YG SGT KOCAKKKK WATDEPAKK', 'FGA-lt8X0Akr36i_waifu2x_photo_noise3_scale_tta_1.png', '2023-05-17 20:54:31', '2023-05-17 20:54:31'),
(3, '1', '2023-05-18', 'IJUY PuShINK', 'KU JUGA pusinKKK @_@ ntar lgi uas kelarrr smunguttttt', 'jooyeon pusing.png', '2023-05-17 20:55:20', '2023-05-17 20:55:20'),
(4, '1', '2023-05-19', 'tersenyum pulsa', 'sejak saat itu senyumku menjadi pulsa -gunil', 'gunil tersenyum jilid 2.png', '2023-05-17 20:55:50', '2023-05-17 20:55:50'),
(5, '1', '2023-05-08', 'JIE WAMIL??!', 'HUEE ni sdih bgt bg, jie dh pigi wamil ueueueueue /mnangisdipojokan', 'E7dSqEMVcAgjtfr.jpg', '2023-05-17 20:57:00', '2023-05-17 20:57:00'),
(6, '1', '2023-05-08', 'JIE WAMIL???!!', 'ni ccdihh bgt bg...\r\nanak lanangku pigi wamil pala botak\r\nueueueueue', '5b9f5-16835669917910-1920.jpg', '2023-05-17 20:59:17', '2023-05-17 20:59:17'),
(8, '1', '2023-05-09', 'hums', 'cpek bg', 'E4YiEl_UYAkDyvr.jpg', '2023-05-17 22:38:33', '2023-05-17 22:38:33'),
(9, '1', '2023-05-01', 'juDull', 'AsDDAJDAHJFA', 'f4615c30a2721b2803f2f1f392c963af.jpg', '2023-05-17 23:38:03', '2023-05-17 23:38:03'),
(10, '3', '2023-05-18', 'AAAAAAAAA', 'adnjsadhjs', 'cake.jpg', '2023-05-18 01:07:17', '2023-05-18 01:07:17'),
(11, '3', '2023-05-20', 'apa iyh', 'fnwefw', 'more digicam.jpg', '2023-05-18 01:09:24', '2023-05-18 01:09:24'),
(12, '3', '2023-05-11', 'art class today!', 'Hari ini akuu melukisss', 'art class.jpg', '2023-05-18 01:30:54', '2023-05-18 01:30:54'),
(13, '3', '2023-05-20', 'Baskett', 'main basket!!', 'basket.jpg', '2023-05-18 01:31:13', '2023-05-18 01:31:13'),
(14, '3', '2023-05-25', 'Gelang', 'nemu di mr diy! kyut', 'gelang.jpg', '2023-05-18 01:31:33', '2023-05-18 01:31:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rarar', 'rara@gmail.com', NULL, '$2y$10$owob6ryIwwsylZCwOVvbGuumVqDfi87omBSQ6TlaVnFeYs8jtkcoW', NULL, '2023-05-17 20:41:23', '2023-05-17 20:41:23'),
(3, 'kola', 'kola@gmail.com', NULL, '$2y$10$v6K2oTNHhcoXDAAQRLmQ9.XNw73WBT/DZjBh/fYTk6DUsVd6ei31q', NULL, '2023-05-18 01:06:35', '2023-05-18 01:06:35');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kapsulwaktus`
--
ALTER TABLE `kapsulwaktus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `momens`
--
ALTER TABLE `momens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kapsulwaktus`
--
ALTER TABLE `kapsulwaktus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `momens`
--
ALTER TABLE `momens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
