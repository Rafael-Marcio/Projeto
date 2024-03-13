-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3310
-- Tempo de geração: 13-Mar-2024 às 20:41
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
-- Banco de dados: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `id` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `data` varchar(45) DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  `raAluno` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tarefas`
--

INSERT INTO `tarefas` (`id`, `descricao`, `data`, `hora`, `raAluno`) VALUES
(518, 'Tarefa Editada', '2024-03-12', '14:00', '972244'),
(519, 'Organizar o Github', '2024-03-12', '18:00', '972244'),
(520, 'JAVASCRIPT Avançado II | Aprendido', '13/03/2024', '16:00', '007'),
(521, 'Estudar PHP', '2024-10-05', '22:00', '978789'),
(522, 'JAVASCRIPT Avançado I | Aprendido', '13/03/2024', '16:00', '007'),
(523, 'JAVASCRIPT Avançado III | Aprendido', '13/03/2024', '16:00', '007'),
(524, 'JAVASCRIPT Avançado IV | Aprendido', '13/03/2024', '16:00', '007'),
(526, 'Estudar React', '2024-03-12', '20:00', '972244'),
(527, 'Desenvoler uma aplicação em C#', '2024-10-05', '22:00', '978789'),
(529, 'Estudar AWS', '2024-03-13', '09:00', '972244'),
(530, 'teste', '14', '15', '970'),
(531, 'Programar em PHP', '2024-03-30', '19:00', '968840'),
(532, 'Aprender em Java', '2024-10-05', '22:00', '978789'),
(533, 'Cobrar Dívida', '2024-10-05', '22:00', '978789'),
(534, 'Estudar PowerBI', '2024-10-05', '22:00', '978789'),
(536, 'Finalizar Projeto', '2024-03-13', '19:00', '972244'),
(537, 'Ficar pro no javaScript', '2024-08-12', '00:00', '970'),
(538, 'Programar em PHP', '2024-03-30', '19:00', '968840'),
(539, 'ajudar o rafael', '2024-08-12', '00:00', '970'),
(540, 'Estudar HTML e CSS', '2024-03-30', '19:00', '968840'),
(541, 'Estudar mais javascript', '2024-08-12', '00:00', '970'),
(544, 'Estudar mais javascript', '2024-08-12', '00:00', '970'),
(546, 'estudar c# hj !!!', '2024-05-12', '20:00', '01'),
(547, 'Estudar Power BI Avançado', '2024-05-12', '20:00', '887169'),
(548, 'Estudar Python', '2024-05-12', '20:00', '887169'),
(549, 'Estudar JavaScript', '2024-05-12', '20:00', '887169'),
(550, 'Estudar React.js', '2024-05-12', '20:00', '887169'),
(552, 'JAVASCRIPT Avançado V | Aprendido', '13/03/2024', '16:00', '007'),
(553, 'programar hj ', '2024-05-12', '19:30', '01'),
(554, 'ler o livro ... ', '2024-05-12', '19:30', '01'),
(555, 'ensinar o henricão a usar o C# ', '2024-05-12', '19:30', '01'),
(556, 'Estudar Java Script 2024', '2024-05-12', '20:00', NULL),
(557, 'ensinar o henricão a usar o phyton ', '2024-05-12', '19:30', '01'),
(558, 'Estudar PDO', '2024-05-12', '20:00', '887169'),
(559, 'Estudar JavaScript', '2024-03-30', '19:00', '973297'),
(560, 'Estudar PHP', '2024-03-30', '19:00', '973297'),
(561, 'Estudar PDO', '2024-03-30', '19:00', '973297'),
(562, 'Estudar C#', '2024-03-30', '19:00', '973297'),
(563, 'Estudar Python', '2024-03-30', '19:00', '973297'),
(564, 'ESTUDAR JAVASCRIPT', '2024-10-05', '08:00:00', '976512'),
(565, 'ESTUDAR JAVASCRIPT', '2024-10-05', '08:00:00', '976512'),
(566, 'ESTUDAR JAVASCRIPT', '2024-10-05', '08:00:00', '976512'),
(567, 'ESTUDAR JAVASCRIPT', '2024-10-05', '08:00:00', '976512'),
(568, 'ESTUDAR JAVASCRIPT', '2024-10-05', '08:00:00', '976512'),
(569, 'ESTUDAR JAVASCRIPT', '2024-10-05', '08:00:00', '976512'),
(570, 'ESTUDAR JAVASCRIPT', '2024-10-05', '08:00:00', '976512'),
(571, 'Estudar Java Script 2024', '2024-05-12', '20:00', '822729'),
(572, 'Estudar Java Script', '2024-10-05', '22:00', '822729'),
(573, 'Estudar Java Script', '2024-10-05', '22:00', '822729'),
(574, 'Estudar Java Script 2024', '2024-05-12', '20:00', '822729'),
(575, 'Estudar Java Script', '2024-10-05', '22:00', '822729'),
(576, 'ESTUDAR JAVASCRIPT', '2024-10-05', '08:00:00', '976512'),
(577, 'Estudar Java Script 2024', '2024-05-12', '970275', '20:00'),
(578, 'Estudar Java Script 2024', '2024-05-12', '970275', '20:00'),
(579, 'ESTUDAR JAVASCRIPT', '2024-10-05', '08:00:00', '976512'),
(580, 'ESTUDAR JAVASCRIPT', '2024-10-05', '08:00:00', '976512'),
(582, 'ESTUDAR JAVASCRIPT', '2024-10-05', '08:00:00', '976512'),
(583, 'ESTUDAR JAVASCRIPT', '2024-10-05', '08:00:00', '976512'),
(584, 'ESTUDAR JAVASCRIPT', '2024-10-05', '08:00:00', '976512'),
(585, 'Estudar PHP 2024', '2024-05-12', '14:42', NULL),
(587, 'ESTUDAR JAVASCRIPT', '2024-10-05', '08:00:00', '976512'),
(588, 'Estudar PHP 2024', '2024-05-12', '14:42', '979675'),
(592, 'Aprender HTML', '2024-12-03', '13:00', '007'),
(593, 'ESTUDAR JAVASCRIPT', '2024-10-05', '08:00:00', '976512'),
(594, 'Fazer Café', '23/01/1211', '12:00', NULL),
(595, 'pegar dinheiro emprestado', '23/01/1211', '12:00', NULL),
(596, 'pegar dinheiro emprestado', '23/01/1211', '12:00', NULL),
(597, 'aaaa', '123', '123', NULL),
(598, 'fazer cafe', '123', '123', NULL),
(599, 'fazer cafe', '123312', '1232', NULL),
(601, 'agua', '123312', '1232', NULL),
(606, 'emprestar um dinheiro', '12/08/2023', '12:21', '12:14'),
(607, 'cobrar o Eduardo', '12/08/2023', '12:50', '123421'),
(608, 'teste', '1212-01-02', '00:12', '007'),
(609, 'teste', '1212-01-02', '00:12', '007'),
(610, 'comer cu', '23/04/1999', 'hora', '122123'),
(611, 'Nova Tarefa', '2024-03-13', '16:08', '972244'),
(612, 'Novo Teste', '2024-03-13', '16:12', '972244'),
(613, 'teste', '1', '1', '970'),
(614, 'teste', '1', '1', '970'),
(615, 'ESTUDAR JAVASCRIPT', '2024-10-05', '08:00:00', '976512'),
(616, 'ESTUDAR JAVASCRIPT', '2024-10-05', '08:00:00', '976512'),
(617, 'Estudar Lógica ', '1212-12-12', '12:21', '968840'),
(618, 'Estdar POO Avançado', '2024-03-12', '20:44', '887169');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=619;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
