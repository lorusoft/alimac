-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Jan-2023 às 18:05
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lorusoft`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tokens`
--

CREATE TABLE `tokens` (
  `tokenid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `tokenkey` varchar(14) COLLATE utf8_swedish_ci NOT NULL,
  `tokenused` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = Não, 1 = Sim'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `userid` int(11) NOT NULL,
  `userbanned` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = Não, 1 = Sim',
  `username` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `useremail` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `userpass` varchar(8) COLLATE utf8_swedish_ci NOT NULL,
  `userverificated` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = Não, 1 = Sim'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`userid`, `userbanned`, `username`, `useremail`, `userpass`, `userverificated`) VALUES
(1, 0, 'Alimac - Assistencia', 'alimac', '12345678', 0),
(2, 0, 'Júnior', 'lorinho@my.com', '123', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`tokenid`),
  ADD UNIQUE KEY `tokenkey` (`tokenkey`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `useremail` (`useremail`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tokens`
--
ALTER TABLE `tokens`
  MODIFY `tokenid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
