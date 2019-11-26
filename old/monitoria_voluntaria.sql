-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Nov-2019 às 20:32
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `monitoria voluntaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `lista_aluno`
--

CREATE TABLE `lista_aluno` (
  `ID_Estudante` int(11) NOT NULL,
  `Nome_Completo` varchar(100) NOT NULL,
  `Matricula` int(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Curso` varchar(50) NOT NULL,
  `PeriodoMatriculado` date NOT NULL,
  `Telefone` int(12) NOT NULL,
  `QualDiciplina` text NOT NULL,
  `FoiMonitor` tinyint(1) NOT NULL,
  `AnoMonitor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `lista_aluno`
--
ALTER TABLE `lista_aluno`
  ADD PRIMARY KEY (`ID_Estudante`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `lista_aluno`
--
ALTER TABLE `lista_aluno`
  MODIFY `ID_Estudante` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
