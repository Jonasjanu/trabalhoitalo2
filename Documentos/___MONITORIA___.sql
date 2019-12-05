-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2019 às 17:41
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
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `senha` int(50) NOT NULL,
  `login` varchar(100) NOT NULL,
  `codigo` int NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`

CREATE TABLE `aluno` (
  `codigo` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `periodo` int(3) NOT NULL,
  `nome_completo` varchar(250) NOT NULL,
  `matricula` int(10) NOT NULL,
  `telefone` int(10) NOT NULL,
  `curso` varchar(250) NOT NULL,
  `ano` int(10) NOT NULL,
  `e_mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `curso` (
  `nome` varchar(50) NOT NULL,
  `codigo` int NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `professor` (
  `nome` varchar(250) NOT NULL,
  `telefone` int(15) DEFAULT NULL,
  `siape` int(10) NOT NULL,
  `e_mail` varchar(250) NOT NULL,
  `codigo` int NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `disciplina` (
  `nome` varchar(50) NOT NULL,
  `codigo` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fk_curso_codigo` int NOT NULL,
  `fk_professor_codigo` int NOT NULL,
   FOREIGN KEY (fk_curso_codigo) REFERENCES curso(codigo),
  FOREIGN KEY (fk_professor_codigo) REFERENCES professor(codigo)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `inscricao` (
  `codigo` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fk_aluno_codigo` int NOT NULL,
  `fk_disciplina_codigo` int NOT NULL,
  `situacao` varchar(20) DEFAULT NULL,
  FOREIGN KEY (fk_disciplina_codigo) REFERENCES disciplina(codigo),
  FOREIGN KEY (fk_aluno_codigo) REFERENCES aluno(codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `professor_disciplina` (
  `codigo` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fk_professor_codigo` int DEFAULT NULL,
  `fk_disciplina_codigo` int DEFAULT NULL,
   FOREIGN KEY (fk_professor_codigo) REFERENCES professor(codigo),
  FOREIGN KEY (fk_disciplina_codigo) REFERENCES disciplina(codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
