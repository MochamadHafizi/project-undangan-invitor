-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2022 pada 08.27
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invitor`
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
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Undangan Pernikahan', '2022-12-10 05:01:27', '2022-12-10 05:01:27'),
(2, 'Undangan Seminar', '2022-12-10 05:01:50', '2022-12-10 05:01:50'),
(3, 'Undangan Konser Musik', '2022-12-10 05:02:04', '2022-12-10 05:02:04');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_28_182535_create_kategoris_table', 1),
(6, '2022_12_01_182334_create_undangans_table', 1),
(7, '2022_12_10_112426_create_susunan_acaras_table', 1),
(8, '2022_12_10_114840_create_tamus_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Struktur dari tabel `susunan_acaras`
--

CREATE TABLE `susunan_acaras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_acara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` time NOT NULL,
  `pengisi_acara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamus`
--

CREATE TABLE `tamus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `undangan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `qr_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_tamu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_tamu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tamus`
--

INSERT INTO `tamus` (`id`, `undangan_id`, `qr_code`, `nama_tamu`, `email_tamu`, `created_at`, `updated_at`) VALUES
(12, 9, 'gCQp0EZpFNFn58ExLvww', 'Mochamad Hafizi', 'mochamadhafizi3@gmail.com', '2022-12-12 21:14:59', '2022-12-12 21:14:59'),
(13, 9, '6CwvmQNWzYenD3Mlamsv', 'Ibra', 'ibrahim@gmail.com', '2022-12-12 22:49:43', '2022-12-12 22:49:43'),
(16, 10, '1U8CgmSpPrgJ7Ka48i3d', 'Windah Basundara', 'windah@gmail.com', '2022-12-12 23:55:45', '2022-12-12 23:55:45'),
(17, 10, 'xCFIeCDqMsMQWH84j7vl', 'Zakaria', 'zakaria@gmail.com', '2022-12-12 23:56:08', '2022-12-12 23:56:08'),
(18, 10, 'L2ZWZdCKhnKJAmZEADUX', 'Danu', 'danu@gmail.com', '2022-12-12 23:56:20', '2022-12-12 23:56:20'),
(19, 10, 'vP5RpXiP3vJ6DkLOi8GR', 'Adit', 'adit@gmail.com', '2022-12-12 23:56:33', '2022-12-12 23:56:33'),
(20, 10, 'Dx1uJl26bsj2tzNFIs3G', 'Anjas', 'anjasdimawa@gmail.com', '2022-12-12 23:56:46', '2022-12-12 23:56:46'),
(21, 11, 'RMYKtUl53FcxY3NqfZ3K', 'Putri', 'putri123@gmail.com', '2022-12-12 23:59:42', '2022-12-12 23:59:42'),
(22, 11, 'O3CJSM754THcoeFE98PO', 'Adel', 'adel@gmail.com', '2022-12-13 00:00:05', '2022-12-13 00:00:05'),
(23, 11, 'vMQ2j5y7YcvnpfAGuECk', 'Naditya', 'naditya@gmail.com', '2022-12-13 00:00:24', '2022-12-13 00:00:24'),
(24, 11, '2FHv4YIcAMe9WxXD5HZq', 'Rehan', 'rehan@gmail.com', '2022-12-13 00:00:41', '2022-12-13 00:00:41'),
(26, 11, 'ZpAr0vJXnV68b3q1DaRa', 'Dani', 'dani@gmail.com', '2022-12-13 00:01:12', '2022-12-13 00:01:12'),
(27, 11, 'q9EvKC8FVEsV2i5VjUnV', 'Hafiz', 'hafiz@gmail.com', '2022-12-13 00:01:25', '2022-12-13 00:01:25'),
(28, 11, 'fzbwzsXCw0XoPL8z2mIY', 'Zalilan', 'zalilan@gmail.com', '2022-12-13 00:01:55', '2022-12-13 00:01:55'),
(29, 11, 'I7jcwFPcY4Xy9gp7tXu4', 'Salsa', 'salsa@gmail.com', '2022-12-13 00:02:13', '2022-12-13 00:02:13'),
(30, 11, 'h03IO1dVcvBsnpFvz99m', 'Maya', 'maya@gmail.com', '2022-12-13 00:02:26', '2022-12-13 00:02:26'),
(31, 11, 'L4K7n1VHDG2506m0w6pL', 'Ridho', 'ridho@gmail.com', '2022-12-13 00:02:42', '2022-12-13 00:02:42'),
(32, 9, 'AukGyGJLtVWE7jaZY44U', 'Bambang', 'bambang@gmal.com', '2022-12-13 00:03:56', '2022-12-13 00:03:56'),
(34, 9, 'P7emwWb51lvH6jSBEdRa', 'Nadit', 'nadit@gmail.com', '2022-12-13 00:04:47', '2022-12-13 00:04:47'),
(35, 9, 'dxgajyiQgYsql28yLdnI', 'Sukses', 'sukses@gmail.com', '2022-12-13 00:05:30', '2022-12-13 00:05:30'),
(36, 9, '2MmxS85Fk7dsTktFMsfU', 'Arya', 'arya@gmail.com', '2022-12-13 00:05:56', '2022-12-13 00:05:56'),
(37, 9, 'dtC7f8YWFKdvZdT6snPX', 'Nazwa', 'nazwa@gmail.com', '2022-12-13 00:06:21', '2022-12-13 00:06:21'),
(38, 9, 'NaEAM9MBb86Gxh07tCoF', 'Cindy', 'cindy@gmail.com', '2022-12-13 00:06:42', '2022-12-13 00:06:42'),
(39, 9, '30bEurnuQZhCLFIzRWck', 'oddis', 'oddis@gmail.com', '2022-12-13 00:07:00', '2022-12-13 00:07:00'),
(40, 9, 'MyHOGAPWV9JFgz41psRq', 'Melisa', 'melisa@gmail.com', '2022-12-13 00:07:23', '2022-12-13 00:07:23'),
(41, 10, 'oI7SuXoj3eUdPCJsESvy', 'Ridwan', 'ridwan@gmail.com', '2022-12-13 00:11:04', '2022-12-13 00:11:04'),
(43, 10, '1W50in5GHF6xuKcM33Cl', 'Tukiyem', 'tukiyem@gmail.com', '2022-12-13 00:11:54', '2022-12-13 00:11:54'),
(44, 10, 'VMQY5SiAFRT3jojTlJMh', 'Sumini', 'sumini@gmail.com', '2022-12-13 00:12:28', '2022-12-13 00:12:28'),
(45, 10, 'DJyVxQnQD2eWDhjWKNPR', 'Sam', 'sam@gmail.com', '2022-12-13 00:12:48', '2022-12-13 00:12:48'),
(46, 10, 'g5NgBz6LMCbE8fTflaUX', 'Edi', 'edi@gmail.com', '2022-12-13 00:13:05', '2022-12-13 00:13:05'),
(47, 12, 'wdSHv7aqPd3CH8BU1JOb', 'Zillan', 'zillan123@gmail.com', '2022-12-13 00:14:55', '2022-12-13 00:14:55'),
(48, 12, 'wftrRCCPfMOTAhGJetRL', 'Aziz', 'aziz@gmail.com', '2022-12-13 00:15:13', '2022-12-13 00:15:13'),
(49, 12, 'zXnKBiiCuf89Hr0df7SU', 'Dirhamawan', 'dirhamawan@gmail.com', '2022-12-13 00:15:40', '2022-12-13 00:15:40'),
(50, 12, 'Kw2a9BebMms1T55qr7b5', 'Khoirul', 'khoirul@gmail.com', '2022-12-13 00:16:04', '2022-12-13 00:16:04'),
(51, 12, '5YAeLZTioCSwqQLVmL96', 'Rama', 'rama@gmail.com', '2022-12-13 00:16:22', '2022-12-13 00:16:22'),
(52, 12, '8Eivpn8n2jm8V8s1vX90', 'Ashrul', 'ashrul@gmail.com', '2022-12-13 00:16:50', '2022-12-13 00:16:50'),
(53, 12, 'g5vrRmWkMu3vh42uT2CC', 'Putra', 'ptra@gmail.com', '2022-12-13 00:17:41', '2022-12-13 00:17:41'),
(54, 12, 'kFVDoNxRgU4QbzmRH93t', 'Yoga', 'yoga@gmail.com', '2022-12-13 00:18:00', '2022-12-13 00:18:00'),
(55, 12, 'ZKTTouNlbEKH60PvbH3o', 'Khen', 'khen@gmail.com', '2022-12-13 00:18:36', '2022-12-13 00:18:36'),
(56, 12, 'Slxh24pI14un8jY2DqpB', 'Fabian', 'fabian@gmail.com', '2022-12-13 00:19:12', '2022-12-13 00:19:12'),
(57, 13, '6fhvbfDMxI92thk4zrNQ', 'Wong', 'wng@gmail.com', '2022-12-13 00:21:27', '2022-12-13 00:21:27'),
(58, 13, 'whto7uYHBkI3HQDOi370', 'Ada', 'ada@gmail.com', '2022-12-13 00:21:41', '2022-12-13 00:21:41'),
(59, 13, 'Yx7YEDzmvDvg6mgdXafU', 'Slamet', 'slamet123@gmail.com', '2022-12-13 00:22:14', '2022-12-13 00:22:14'),
(60, 13, 'WKsMVlfSTB6iDo65qgng', 'maliki', 'maliki@gmail.com', '2022-12-13 00:22:39', '2022-12-13 00:22:39'),
(61, 13, 'WCBRXs7SsU22L3dJK7UV', 'Joko', 'joko@gmail.com', '2022-12-13 00:23:18', '2022-12-13 00:23:18'),
(62, 13, 'DYww77FftLKZDPEOE71p', 'Reyhan', 'reyhan@gmail.com', '2022-12-13 00:23:58', '2022-12-13 00:23:58'),
(63, 13, '7yt8d4K60uG99sta2g41', 'Rangga', 'rangga@gmail.com', '2022-12-13 00:24:15', '2022-12-13 00:24:15'),
(64, 13, 'LfmY64ePR1euz8T13yKt', 'Adel', 'adel@gmail.com', '2022-12-13 00:24:34', '2022-12-13 00:24:34'),
(65, 13, 'suBqeJv1Yr924oOTE3Wa', 'Rafif', 'rafif@gmail.com', '2022-12-13 00:24:57', '2022-12-13 00:24:57'),
(66, 13, 'HhEOQUHK69reUtxsOyr2', 'Ola', 'ola@gmail.com', '2022-12-13 00:25:18', '2022-12-13 00:25:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `undangans`
--

CREATE TABLE `undangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` date NOT NULL,
  `jam` time NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `susunan_acara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `undangans`
--

INSERT INTO `undangans` (`id`, `user_id`, `kategori_id`, `judul`, `deskripsi`, `waktu`, `jam`, `tempat`, `susunan_acara`, `created_at`, `updated_at`) VALUES
(9, 7, 1, 'Jony & Jane', 'Kami selaku panitia acara, mengundang Anda untuk Datang ke acara kami', '2022-12-15', '12:05:00', 'Aula Pertamina Polinema', 'lorem ipsum', '2022-12-12 21:06:09', '2022-12-12 21:06:09'),
(10, 7, 1, 'Seminar Fullstack Developer', 'Kami selaku panitia acara, mengundang Anda untuk Datang ke acara kami', '2022-12-30', '10:22:00', 'Aula Pertamina Polinema', 'lorem ipsum', '2022-12-12 22:23:07', '2022-12-12 23:54:49'),
(11, 7, 3, 'Malam', 'Kami selaku panitia acara, mengundang Anda untuk Datang ke acara kami', '2022-12-17', '18:00:00', 'Aula Pertamina Polinema', 'Pembukaan, Sambutan Ketua Pelaksana, Perfomance Musik, Penutup', '2022-12-12 23:58:32', '2022-12-12 23:58:32'),
(12, 7, 1, 'Adit & Adel', 'Kami selaku panitia acara, mengundang Anda untuk Datang ke acara kami', '2022-12-31', '20:00:00', 'Rumah Adel', 'pembukaan, Acara serah terima,ijab kabul,doa nikah', '2022-12-13 00:14:23', '2022-12-13 00:14:23'),
(13, 7, 3, 'digifast', 'Kami selaku panitia acara, mengundang Anda untuk Datang ke acara kami', '2022-12-25', '20:59:00', 'Graha Cakrawala', 'Pembukaan, Sambutan Ketua Pelaksana, Perfomance Musik, Penutup', '2022-12-13 00:20:45', '2022-12-13 00:20:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'conglaitau12@gmail.com', '2022-12-10 04:57:48', 1, '$2y$10$rt2Lbkt9GTSDRm1il/6Ev.hJ3Y1cBvEveGPHSoRRTptAmQ0DoImSi', NULL, '2022-12-10 04:47:54', '2022-12-10 04:57:48'),
(2, 'User', 'user@gmail.com', NULL, 0, '$2y$10$aAA/ZwbIPUgGM/P3DEav2u8qrWM1KfHIicGjaFWkMfYI8btJFAihC', NULL, '2022-12-10 04:47:54', '2022-12-10 04:47:54'),
(7, 'Mochamad Hafizi', 'mochamadhafizi3@gmail.com', '2022-12-12 21:05:07', 0, '$2y$10$a.1mSaRr/Zys9FWz/mzka.RkeLTHnP7eEW1Nvj7DnB6bLIaHNpV7W', NULL, '2022-12-12 21:03:30', '2022-12-12 21:05:07');

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
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `susunan_acaras`
--
ALTER TABLE `susunan_acaras`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tamus`
--
ALTER TABLE `tamus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tamus_undangan_id_foreign` (`undangan_id`);

--
-- Indeks untuk tabel `undangans`
--
ALTER TABLE `undangans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `undangans_user_id_foreign` (`user_id`),
  ADD KEY `undangans_kategori_id_foreign` (`kategori_id`);

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
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `susunan_acaras`
--
ALTER TABLE `susunan_acaras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tamus`
--
ALTER TABLE `tamus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `undangans`
--
ALTER TABLE `undangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tamus`
--
ALTER TABLE `tamus`
  ADD CONSTRAINT `tamus_undangan_id_foreign` FOREIGN KEY (`undangan_id`) REFERENCES `undangans` (`id`);

--
-- Ketidakleluasaan untuk tabel `undangans`
--
ALTER TABLE `undangans`
  ADD CONSTRAINT `undangans_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`),
  ADD CONSTRAINT `undangans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
