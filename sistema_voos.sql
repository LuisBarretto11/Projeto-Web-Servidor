-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/12/2024 às 01:27
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_voos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `email` text NOT NULL,
  `senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(2, 'luiz', 'luiz@luiz.com', 'luiz'),
(5, 'Paulo', 'ppp@ppp', 'paulo'),
(6, 'du', 'ddd@ddd', 'ddd'),
(7, 'Jorge', 'bbb@bbb', 'jorge'),
(8, 'Fabio', 'fabio@fabio.com', 'fabio'),
(9, 'dede', 'ddd@ddd', 'dede'),
(10, 'du', 'ddd@ddd', 'ddd');

-- --------------------------------------------------------

--
-- Estrutura para tabela `voos`
--

CREATE TABLE `voos` (
  `id` int(11) NOT NULL,
  `numero_voo` text NOT NULL,
  `origem` text NOT NULL,
  `destino` text NOT NULL,
  `data_voo` text NOT NULL,
  `horario` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `voos`
--

INSERT INTO `voos` (`id`, `numero_voo`, `origem`, `destino`, `data_voo`, `horario`, `status`) VALUES
(1, '111', 'São Paulo', 'Rio de Janeiro', '01/01/2025', '09:00', 'Disponivel'),
(5, '777', 'Fortaleza', 'Salvador', '31/01/2025', '17:45', 'Disponivel');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `voos`
--
ALTER TABLE `voos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `voos`
--
ALTER TABLE `voos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
