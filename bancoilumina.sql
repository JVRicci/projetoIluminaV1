-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Nov-2021 às 08:02
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bancoilumina`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos`
--

CREATE DATABASE bancoilumina;
use bancoilumina;

CREATE TABLE `pontos` (
  `id` int(11) NOT NULL,
  `idUser` int(50) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pontos`
--

INSERT INTO `pontos` (`id`, `idUser`, `latitude`, `longitude`, `status`, `email`, `descricao`) VALUES
(1, 1, '-20.530445', '-48.5637543', 'regular', '', 'Vidro quebrado e lâmpada estourada '),
(2, NULL, '-20.530445', '-48.5637543', 'critico', '', 'Vidro quebrado e lâmpada estourada '),
(47, NULL, '-20.5367547', '-48.5687697', 'regular', '', 'Poste quase caindo'),
(61, NULL, '-20.5355566', '-48.5749895', 'critico', '', 'Poste quebrado após acidente'),
(62, NULL, '-20.5355566', '-48.5749895', 'regular', '', 'Poste foi abduzido por aliens'),
(72, NULL, '-20.5367547', '-48.5687697', 'regular', 'jvricci99@gmail.com', 'Teste 20000002'),
(73, NULL, '-20.5367547', '-48.5687697', 'regular', 'jvricci99@gmail.com', 'Okkaaaaaay entendi'),
(74, NULL, '-20.5367547', '-48.5687697', 'critico', 'james@gmail.com', 'Poste caindo aos pedaços'),
(75, NULL, '-20.5367547', '-48.5687697', 'regular', 'beca@gmail.com', 'poste desintegrado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `func` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `login`, `senha`, `func`) VALUES
(1, 'hanzo', 'jvricci99@gmail.com', 'hanzo', '951753', 'admin'),
(4, 'joao', 'teste@gmail.com', 'joao', '951753', 'usuario'),
(8, 'james', 'james@gmail.com', 'james', '1234', 'usuario'),
(9, 'beca', 'beca@gmail.com', 'beca', '1234', 'usuario');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pontos`
--
ALTER TABLE `pontos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pontos`
--
ALTER TABLE `pontos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
