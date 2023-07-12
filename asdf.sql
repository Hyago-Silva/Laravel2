-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jul-2023 às 04:49
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `asdf`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamados`
--

CREATE TABLE `chamados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assunto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendedor` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `chamados`
--

INSERT INTO `chamados` (`id`, `assunto`, `descricao`, `data_criacao`, `status`, `vendedor`, `created_at`, `updated_at`) VALUES
(1, 'Impressora com falta de tinta', 'TEste', '2023-07-11 15:07:38', 'Resolvido', 'Hyago', '2023-07-11 05:25:59', '2023-07-11 18:07:38'),
(2, 'Instalação de PC', 'TEste', '2023-07-11 02:31:28', 'Aberto', 'Teste', '2023-07-11 05:31:28', '2023-07-11 05:31:28'),
(3, 'PC SEM LIGAR', 'TEste', '2023-07-11 02:31:46', 'Aberto', 'Teste', '2023-07-11 05:31:46', '2023-07-11 05:31:46'),
(4, 'PC SEM LIGAR', 'TEste', '2023-07-11 02:32:18', 'Aberto', 'Isabel', '2023-07-11 05:32:18', '2023-07-11 05:32:18'),
(5, 'Teste', 'Desligou sozinho', '2023-07-11 02:32:25', 'Aberto', 'Isabel', '2023-07-11 05:32:25', '2023-07-11 05:32:25'),
(6, 'PC SEM LIGAR', 'TEste', '2023-07-11 02:33:55', 'Aberto', 'Isabel', '2023-07-11 05:33:55', '2023-07-11 05:33:55'),
(7, 'PC SEM LIGAR', 'Desligou sozinho', '2023-07-11 02:34:07', 'Aberto', 'Hyago', '2023-07-11 05:34:07', '2023-07-11 05:34:07'),
(8, 'Teste', 'TEste', '2023-07-11 02:34:33', 'Aberto', 'Hyago', '2023-07-11 05:34:33', '2023-07-11 05:34:33'),
(9, 'Impressora com falta de tinta', 'Desligou sozinho', '2023-07-11 02:34:39', 'Aberto', 'Hyago', '2023-07-11 05:34:39', '2023-07-11 05:34:39'),
(10, 'Teste', 'Produto novo', '2023-07-11 02:34:46', 'Aberto', 'Hyago', '2023-07-11 05:34:46', '2023-07-11 05:34:46'),
(11, 'Teste', 'TEste', '2023-07-11 02:44:02', 'Aberto', 'Teste', '2023-07-11 05:44:02', '2023-07-11 05:44:02'),
(12, 'Teste', 'Desligou sozinho', '2023-07-11 02:44:43', 'Aberto', 'Teste', '2023-07-11 05:44:43', '2023-07-11 05:44:43'),
(13, 'Teste', 'Desligou sozinho', '2023-07-11 02:45:10', 'Aberto', 'Isabel', '2023-07-11 05:45:10', '2023-07-11 05:45:10'),
(14, 'Instalação de pc na rede', 'TEste', '2023-07-11 02:50:53', 'Aberto', 'Teste', '2023-07-11 05:50:53', '2023-07-11 05:50:53'),
(15, 'PC SEM LIGAR', 'TEste', '2023-07-11 02:51:24', 'Aberto', 'Teste', '2023-07-11 05:51:24', '2023-07-11 05:51:24'),
(16, 'Impressora com falta de tinta', 'Desligou sozinho', '2023-07-11 02:52:33', 'Aberto', 'Teste', '2023-07-11 05:52:33', '2023-07-11 05:52:33'),
(17, 'Teste', 'Desligou sozinho', '2023-07-11 02:53:10', 'Aberto', 'Isabel', '2023-07-11 05:53:10', '2023-07-11 05:53:10'),
(18, 'PC SEM LIGAR', 'TEste', '2023-07-11 02:54:29', 'Aberto', 'James bond', '2023-07-11 05:54:29', '2023-07-11 05:54:29'),
(19, 'PC SEM LIGAR', 'TEste', '2023-07-11 14:56:23', 'Aberto', 'James bond', '2023-07-11 17:56:23', '2023-07-11 17:56:23'),
(20, 'Teste', 'TEste', '2023-07-11 15:06:24', 'Aberto', 'Hyago', '2023-07-11 18:06:24', '2023-07-11 18:06:24'),
(21, 'PC SEM LIGAR', 'TEste', '2023-07-11 15:08:56', 'Aberto', 'Hyago', '2023-07-11 18:08:56', '2023-07-11 18:08:56'),
(22, 'as', 'TEste', '2023-07-11 15:10:17', 'Aberto', 'Isabel', '2023-07-11 18:10:17', '2023-07-11 18:10:17'),
(23, 'Impressora com falta de tinta', 'Desligou sozinho', '2023-07-11 17:14:06', 'Em andamento', 'Isabel', '2023-07-11 20:13:50', '2023-07-11 20:14:06'),
(24, 'PC SEM LIGAR', 'Desligou sozinho', '2023-07-11 20:51:44', 'Aberto', 'Teste', '2023-07-11 23:51:44', '2023-07-11 23:51:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
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
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_29_124212_create_chamados_table', 1),
(6, '2023_06_29_124256_create_vendedor_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
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
-- Estrutura da tabela `users`
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `QtdAb` int(11) NOT NULL,
  `QtdEAnd` int(11) NOT NULL,
  `QtdRes` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `vendedor`
--

INSERT INTO `vendedor` (`id`, `name`, `telefone`, `email`, `status`, `QtdAb`, `QtdEAnd`, `QtdRes`, `created_at`, `updated_at`) VALUES
(1, 'Hyago', '1656465546', 'hyagoteste@gmail.com', 'Ativo', 0, 0, 0, '2023-07-11 04:19:52', '2023-07-11 18:00:44'),
(2, 'Isabel', '65465465', 'isabel@teste.com', 'Ativo', 0, 0, 0, '2023-07-11 04:51:21', '2023-07-11 17:57:22'),
(3, 'Teste', '46345136', 'hyagosilva966@gmail.com', 'Ativo', 0, 0, 0, '2023-07-11 04:56:33', '2023-07-11 04:56:33'),
(4, 'James bond', '132132', 'Bond@gmail.com', 'Ativo', 0, 0, 0, '2023-07-11 05:53:44', '2023-07-11 05:53:44');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `chamados`
--
ALTER TABLE `chamados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices para tabela `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `chamados`
--
ALTER TABLE `chamados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
