-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Dez-2024 às 22:16
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `web1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `email` varchar(250) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `mensagem` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `nota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `feedback`
--

INSERT INTO `feedback` (`id`, `nome`, `email`, `mensagem`, `nota`) VALUES
(1, 'Beatriz Martins', 'a2022136514@alumni.iscac.pt', 'olá', 5),
(2, 'Beatriz Martins', 'a2022136514@alumni.iscac.pt', 'Gostei muito!', 5),
(3, 'Beatriz Martins', 'a2022136514@alumni.iscac.pt', 'Recomendo a Cozinha de Mão-Cheia.', 5),
(4, 'Luís Martins', 'a2022136514@alumni.iscac.pt', 'A aposta feita no uso de produtos frescos, por parte desta casa traduz-se na qualidade e sabor de cada prato. \r\n', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `dia_semana` varchar(150) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `data` date NOT NULL,
  `sopa` varchar(150) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `peixe` varchar(150) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `carne` varchar(150) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `info` varchar(150) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `imagem` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`id`, `dia_semana`, `data`, `sopa`, `peixe`, `carne`, `info`, `imagem`) VALUES
(1, 'Segunda-feira', '2024-12-16', 'Sopa de agrião', 'Perca grelhada', 'Bitoque de porco', NULL, 'Peixe3.jpg'),
(2, 'Terça-feira', '2024-12-17', 'Sopa de feijão verde', 'Salmão grelhado', 'Bifes de vitela de cebolada', NULL, 'carne2_1.JPG'),
(3, 'Quarta-feira', '2024-12-18', 'Sopa de couve portuguesa', 'Polvo à Lagareiro', 'Secretos de porco grelhados', NULL, 'peixe6.JPG'),
(4, 'Quinta-feira', '2024-12-19', 'Creme de legumes', 'Raia frita com arroz de legumes', 'Picanha na grelha', NULL, 'carne1_1.GPG'),
(5, 'Sexta-feira ', '2024-12-20', 'Caldo verde', 'Bacalhau cozido com grão', 'Espetadas mistas ', NULL, 'Peixe2.jpg'),
(6, 'Sábado', '2024-12-21', 'Sopa de espinafres', 'Linguado grelhado', 'Cozido à Portuguesa', NULL, 'carne3.JPG'),
(7, 'Domingo', '2024-12-22', NULL, NULL, NULL, 'Descanso semanal', 'sobremesa_9.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `num_tele` varchar(150) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `data_hora` varchar(150) NOT NULL,
  `num_pessoas` int(11) NOT NULL,
  `pedidos` text CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`id`, `nome`, `num_tele`, `data_hora`, `num_pessoas`, `pedidos`) VALUES
(1, 'Beatriz Martins', '961062047', '20241221', 2, ''),
(2, 'Beatriz Martins', '961062047', '20241221', 2, ''),
(14, 'Beatriz Martins', '961062047', '22/12/2024 12:00', 2, ''),
(15, 'Beatriz Martins', '961062047', '22/12/2024 12:30', 2, ''),
(16, 'Beatriz Martins', '961062047', '22/12/2024 12:30', 2, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
