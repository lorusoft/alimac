-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jan-2023 às 18:47
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
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `categoriaid` int(11) NOT NULL,
  `userid` tinyint(11) NOT NULL,
  `lojaid` tinyint(11) NOT NULL,
  `categorianame` varchar(20) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`categoriaid`, `userid`, `lojaid`, `categorianame`) VALUES
(2, 1, 1, 'Tablets'),
(3, 1, 1, 'Celulares');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `produtoid` int(11) NOT NULL,
  `lojaid` tinyint(11) NOT NULL,
  `userid` tinyint(11) NOT NULL,
  `produtoname` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `produtodesc` varchar(250) COLLATE utf8_swedish_ci NOT NULL,
  `produtocateg` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `produtoqnt` tinyint(3) NOT NULL,
  `produtocusto` float(11,2) NOT NULL,
  `produtovenda` float(11,2) NOT NULL,
  `produtoobs` varchar(250) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`produtoid`, `lojaid`, `userid`, `produtoname`, `produtodesc`, `produtocateg`, `produtoqnt`, `produtocusto`, `produtovenda`, `produtoobs`) VALUES
(1, 1, 1, 'Poco  F1', 'Celular android XIAOMI', 'Celulares', 1, 899.00, 1700.00, 'Melhor custo benefício');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `servicoid` int(11) NOT NULL,
  `lojaid` tinyint(11) NOT NULL,
  `userid` tinyint(11) NOT NULL,
  `serviconame` varchar(30) COLLATE utf8_swedish_ci NOT NULL,
  `servicodesc` varchar(80) COLLATE utf8_swedish_ci NOT NULL,
  `servicovalor` double(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`servicoid`, `lojaid`, `userid`, `serviconame`, `servicodesc`, `servicovalor`) VALUES
(1, 1, 1, 'Teste', 'Teste', 1.00),
(2, 1, 1, 'Teste2', 'Teste 2', 2.00);

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
  `userverificated` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = Não, 1 = Sim',
  `lojaid` tinyint(11) NOT NULL,
  `userperfil` tinyint(1) NOT NULL DEFAULT 0,
  `username` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `userlastname` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `usertype` varchar(10) COLLATE utf8_swedish_ci NOT NULL,
  `usercpf` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `usercelular` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `usertelefone` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `useremail` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `userpass` varchar(8) COLLATE utf8_swedish_ci NOT NULL,
  `userendereco` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `userendnumber` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `userbairro` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `useruf` varchar(2) COLLATE utf8_swedish_ci NOT NULL,
  `usercidade` varchar(30) COLLATE utf8_swedish_ci NOT NULL,
  `userobs` varchar(255) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`userid`, `userbanned`, `userverificated`, `lojaid`, `userperfil`, `username`, `userlastname`, `usertype`, `usercpf`, `usercelular`, `usertelefone`, `useremail`, `userpass`, `userendereco`, `userendnumber`, `userbairro`, `useruf`, `usercidade`, `userobs`) VALUES
(1, 0, 0, 1, 2, 'Administrador', '', '', '', '', '', 'MASTER', '123', '', '', '', '', '', ''),
(2, 0, 0, 1, 0, 'Júnior', 'Goularte Teixeira', 'Física', '123', '48996228545', '', 'lorinho@my.com', '12345678', 'Servidão Flor de Lis', '65', 'Santinho', 'SC', 'Florianópolis', 'Desenvolvedor do sistema'),
(3, 1, 0, 1, 0, 'Morgana', '', 'Física', '234', '', '', 'morgana', '12345678', '', '', '', 'AC', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categoriaid`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`produtoid`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`servicoid`);

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
  ADD UNIQUE KEY `useremail` (`useremail`),
  ADD UNIQUE KEY `usercpf` (`usercpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `categoriaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `produtoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `servicoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tokens`
--
ALTER TABLE `tokens`
  MODIFY `tokenid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
