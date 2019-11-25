-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Nov-2019 às 18:31
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoriavoluntaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `Senha` int(50) NOT NULL,
  `Login` varchar(100) NOT NULL,
  `Codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`Senha`, `Login`, `Codigo`) VALUES
(123456, 'Elizangela1', 1),
(21345, 'Luana2', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `Periodo` int(3) NOT NULL,
  `fk_cod_disciplina` int(11) NOT NULL,
  `Codigo` int(11) NOT NULL,
  `Nome_Completo` varchar(250) NOT NULL,
  `Matricula` int(10) NOT NULL,
  `E_mail` varchar(50) NOT NULL,
  `situacao` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`Periodo`, `fk_cod_disciplina`, `Codigo`, `Nome_Completo`, `Matricula`, `E_mail`, `situacao`) VALUES
(3, 4321, 6456, 'Bruno Henrique', 68798798, 'BH@gmail.com', 'Aprovado'),
(2, 1234, 567685, 'Gabriel barbosa', 2019023335, 'Gabi@gmail.com', 'Aprovado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `Nome` varchar(50) NOT NULL,
  `Codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`Nome`, `Codigo`) VALUES
('Biologia', 1010),
('Informatica', 2020);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `Nome` varchar(50) NOT NULL,
  `Codigo` int(11) NOT NULL,
  `fk_cod_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`Nome`, `Codigo`, `fk_cod_curso`) VALUES
('Portugues', 1234, 1010),
('Matematica', 4321, 2020);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `Nome` varchar(250) NOT NULL,
  `Telefone` int(15) DEFAULT NULL,
  `Siape` int(10) NOT NULL,
  `E_mail` varchar(250) NOT NULL,
  `Codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`Nome`, `Telefone`, `Siape`, `E_mail`, `Codigo`) VALUES
('Italo arrada', 548489789, 20181, 'italo.arruda@gmail.com', 22018),
('Savio Oliveira', 326489484, 201903, 'savio.oliveira@gmail.com', 32018);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor_disciplina`
--

CREATE TABLE `professor_disciplina` (
  `fk_Professor_Codigo` int(11) DEFAULT NULL,
  `fk_Disciplina_Codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor_disciplina`
--

INSERT INTO `professor_disciplina` (`fk_Professor_Codigo`, `fk_Disciplina_Codigo`) VALUES
(22018, 1234),
(32018, 4321),
(22018, 1234),
(32018, 4321);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`Codigo`),
  ADD KEY `FK_Disciplina_2` (`fk_cod_disciplina`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`Codigo`),
  ADD KEY `fk_cod_curso` (`fk_cod_curso`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`Codigo`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `FK_Disciplina_2` FOREIGN KEY (`fk_cod_disciplina`) REFERENCES `disciplina` (`Codigo`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD CONSTRAINT `disciplina_ibfk_1` FOREIGN KEY (`fk_cod_curso`) REFERENCES `curso` (`Codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
