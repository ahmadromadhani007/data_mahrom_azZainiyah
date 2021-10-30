-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Okt 2021 pada 02.51
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_mahrom_db`
--

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2021_10_25_132257_create_wali_santri', 1),
(3, '2021_10_25_135208_create_mahrom', 1),
(4, '2021_10_25_140539_create_setting_kunjungan', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahrom`
--

CREATE TABLE `tb_mahrom` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daerah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_mahrom`
--

INSERT INTO `tb_mahrom` (`id`, `nama`, `alamat`, `daerah`, `created_at`, `updated_at`) VALUES
(1, 'Siti Aisyah', 'Tiris-Probolinggo', 'A.3 (sayyidah hafsoh)', '2021-10-29 17:13:49', '2021-10-29 17:13:49'),
(2, 'Alfina Diyan Kamila', 'Besuki-Situbondo', 'I.2 (dewi masyithah)', '2021-10-29 17:14:54', '2021-10-29 17:14:54'),
(3, 'Bulqis Ifatil', 'Binakal-Bondowoso', 'c.7 (sayyidah aisyah)', '2021-10-29 17:15:49', '2021-10-29 17:15:49'),
(4, 'Nur Diana Kholida', 'Glenmorel-Banyuwangi', 'm.3 (fatimmah az-zahra)', '2021-10-29 17:16:37', '2021-10-29 17:16:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_setting_kunjungan`
--

CREATE TABLE `tb_setting_kunjungan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jml_kunjungan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_tamu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari_kunjungan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_setting_kunjungan`
--

INSERT INTO `tb_setting_kunjungan` (`id`, `jml_kunjungan`, `jml_tamu`, `hari_kunjungan`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '12', '23', 'senin', 'pagi', '2021-10-29 17:17:20', '2021-10-29 17:17:20'),
(2, '43', '52', 'ahad', 'siang', '2021-10-29 17:17:42', '2021-10-29 17:17:42'),
(3, '23', '54', 'kamis', 'siang', '2021-10-29 17:18:02', '2021-10-29 17:18:02'),
(4, '40', '60', 'rabu', 'pagi', '2021-10-29 17:18:32', '2021-10-29 17:18:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wali_santri`
--

CREATE TABLE `tb_wali_santri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ayah','ibu') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_wali_santri`
--

INSERT INTO `tb_wali_santri` (`id`, `nama`, `alamat`, `no_hp`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Holili', 'Tiris-Probolinggo', '082235918228', 'siti71770@gmail.com', 'ayah', '2021-10-29 17:05:25', '2021-10-29 17:05:25'),
(2, 'Agus Susila', 'Binakal-Bondowoso', '082302019347', 'aisyahnursiti@gmail.com', 'ayah', '2021-10-29 17:07:27', '2021-10-29 17:07:27'),
(3, 'Siti Nur Aisyah', 'Besuki-Situbondo', '082235175878', 'dan10kiy@gmail.com', 'ibu', '2021-10-29 17:10:04', '2021-10-29 17:10:04'),
(4, 'Ayu Maulidiya', 'Glenmore-Banyuwangi', '082266606716', 'ayu12@gmail.com', 'ibu', '2021-10-29 17:12:10', '2021-10-29 17:12:10');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tb_mahrom`
--
ALTER TABLE `tb_mahrom`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_setting_kunjungan`
--
ALTER TABLE `tb_setting_kunjungan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_wali_santri`
--
ALTER TABLE `tb_wali_santri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_mahrom`
--
ALTER TABLE `tb_mahrom`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_setting_kunjungan`
--
ALTER TABLE `tb_setting_kunjungan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_wali_santri`
--
ALTER TABLE `tb_wali_santri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
