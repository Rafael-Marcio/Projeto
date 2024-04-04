-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3310
-- Tempo de geração: 04-Abr-2024 às 21:40
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `idcursos` int(11) NOT NULL,
  `NomeCurso` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`idcursos`, `NomeCurso`) VALUES
(1, 'Estética'),
(2, 'Cabelereiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrada`
--

CREATE TABLE `entrada` (
  `identrada` int(11) NOT NULL,
  `iduser` varchar(45) DEFAULT NULL,
  `idproduto` varchar(45) DEFAULT NULL,
  `data` varchar(45) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `entrada`
--

INSERT INTO `entrada` (`identrada`, `iduser`, `idproduto`, `data`, `quantidade`) VALUES
(1, '4', '8', '04-04-2024 14:41:10', 1),
(2, '4', '8', '04-04-2024 14:42:59', 1),
(3, '4', '8', '04-04-2024 14:43:00', 1),
(4, '4', '1', '04-04-2024 14:43:39', 1),
(5, '4', '8', '04-04-2024 14:50:49', 1),
(6, '4', '8', '04-04-2024 14:50:50', 1),
(7, '4', '8', '04-04-2024 14:50:50', 1),
(8, '4', '8', '04-04-2024 14:50:51', 1),
(9, '4', '8', '04-04-2024 14:50:52', 1),
(10, '4', '8', '04-04-2024 14:50:53', 1),
(11, '4', '8', '04-04-2024 14:50:53', 1),
(12, '4', '8', '04-04-2024 14:50:54', 1),
(13, '4', '8', '04-04-2024 14:50:55', 1),
(14, '4', '8', '04-04-2024 14:50:56', 1),
(15, '4', '8', '04-04-2024 14:50:58', 1),
(16, '4', '8', '04-04-2024 14:51:24', 1),
(17, '4', '8', '04-04-2024 14:51:26', 1),
(18, '4', '8', '04-04-2024 14:55:29', 1),
(19, '4', '8', '04-04-2024 15:15:05', 1),
(20, '4', '8', '04-04-2024 15:17:14', 1),
(21, '4', '8', '04-04-2024 15:17:56', 1),
(22, '4', '8', '04-04-2024 15:18:49', 1),
(23, '5', '4', '04/04/2024', 1),
(24, '5', '4', '04/04/2024', 1),
(25, '5', '4', '04/04/2024', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idprodutos` int(11) NOT NULL,
  `produtoDescri` varchar(45) DEFAULT NULL,
  `produtoQtd` int(11) DEFAULT NULL,
  `produtoValidade` varchar(45) DEFAULT NULL,
  `produtoLote` varchar(45) DEFAULT NULL,
  `produtosCurso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idprodutos`, `produtoDescri`, `produtoQtd`, `produtoValidade`, `produtoLote`, `produtosCurso`) VALUES
(1, 'Produto teste', 7, '2024-12-12', 'CM91384811Z4', 1),
(4, 'Teste', 3, '2024-04-30', '00000001', 2),
(5, 'Teste2', 8, '2024-05-31', '00000001', 2),
(7, 'Teste3', 13, '2024-08-31', '00000001', 2),
(8, 'Shampoo', 28, '2024-04-30', '12345678', 1),
(9, '33242432', NULL, '0535-03-04', '3543', 1),
(11, 'produto teste', 15, '2024-04-04', '1', 2),
(12, 'mais um produto', 45, '2024-04-02', '52', 1),
(13, 'Maca ', 5, '2024 08 31', '0202020202', 1),
(19, 'ESQUIM QUER ', NULL, '0033-03-23', 'RTRJOGOS', 1),
(20, 'Sabonete', 10, '2024-04-25', '2313', 1),
(21, '33242432', NULL, '5325-03-04', '435345', 1),
(22, 'Sabonete', 2, '203012 12', '2313', 1),
(23, 'Sabonete', 2, '20301212', '2313', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida`
--

CREATE TABLE `saida` (
  `idsaida` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `data` varchar(50) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `saida`
--

INSERT INTO `saida` (`idsaida`, `idproduto`, `iduser`, `data`, `quantidade`) VALUES
(1, 1, 5, '', 1),
(2, 1, 5, '', 1),
(3, 8, 4, '', 1),
(4, 1, 5, '04/04/2024', 1),
(5, 4, 5, '04/04/2024', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `Nome` varchar(45) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `idcurso` int(1) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `senhaCripto` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`idUser`, `Nome`, `celular`, `idcurso`, `senha`, `senhaCripto`, `email`) VALUES
(1, 'Edu', '(85) 99408-7509', 1, 'admin123', '0192023a7bbd73250516f069df18b500', 'admin13@gmail.com'),
(3, 'Hildemberg', '35 9 9271-9089', 1, '123456', '', 'hilmengo@gmail.com'),
(4, 'Camila', '35991362018', 1, '@123', '865bedd2fba8fe20b828ed07600c64a4', 'camila@email.com'),
(5, 'Rafael', '992356302', 2, '123', '202cb962ac59075b964b07152d234b70', 'rafael@gmail.com'),
(6, 'theyllon', '40028922', 1, '40028922', '', 'eu@gmail.com'),
(8, 'Alexandre', '359863975666', 1, '123123', NULL, 'alexandre@gmail.com'),
(10, 'Marcelo', '1234', 1, '1234', NULL, 'marcelo@mail.com'),
(11, 'Cristian', '998382861', 1, '123', '123', 'zd4rks@gmail.com'),
(12, 'Cosmo', '(35) 9 9999-9999', 1, '123', 'cos123smo', 'cosmo@zeus.com'),
(13, 'Cosma', '(35) 9 8888-8888', 2, '123', 'cos123sma', 'cosma@zeus.com'),
(14, 'Carlos', '245584', 1, '123', '123', 'email@gmail.com'),
(15, 'THEYLLON', '445', 2, '88772115az', NULL, 'rtrjogos@gmail.com'),
(16, 'THEYLLON', '(35)98407-3166', 2, '88772115az', NULL, 'cunhalorran777@gmail.com'),
(24, '23', '45', 2, '88772115az', NULL, 'cunhalorran56@gmail.com'),
(25, '23', '45', 2, '88772115az', NULL, 'cunhalorran56@gmail.com'),
(28, 'Lais Sirino Novais', '(35) 9 8476-5225', 1, '1231236', '24bf6e223bbf0d4a3f3c976baaa61990', 'novaislais1@gmail.com'),
(29, 'THEYLLON', '(35)98407-3166', 1, '88772115az', NULL, 'cunhalorran777@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`idcursos`);

--
-- Índices para tabela `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`identrada`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idprodutos`);

--
-- Índices para tabela `saida`
--
ALTER TABLE `saida`
  ADD PRIMARY KEY (`idsaida`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `idcursos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `entrada`
--
ALTER TABLE `entrada`
  MODIFY `identrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idprodutos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `saida`
--
ALTER TABLE `saida`
  MODIFY `idsaida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
