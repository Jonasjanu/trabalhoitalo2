-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Dez-2019 às 20:30
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
DROP TABLE IF EXISTS oferta;
DROP TABLE IF EXISTS inscricao;
DROP TABLE IF EXISTS professor_disciplina;
DROP TABLE IF EXISTS situacao;
DROP TABLE IF EXISTS professor;
DROP TABLE IF EXISTS disciplina;
DROP TABLE IF EXISTS curso;
DROP TABLE IF EXISTS aluno;
DROP TABLE IF EXISTS administrador;




CREATE TABLE `administrador` (
  `senha` int(50) NOT NULL,
  `login` varchar(100) NOT NULL,
  `codigo` int PRIMARY KEY AUTO_INCREMENT,
  UNIQUE (login)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `codigo`  int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `periodo` int(1) NOT NULL,
  `nome_completo` varchar(250) NOT NULL,
  `matricula` int(20) NOT NULL,
  `telefone` varchar(15) DEFAULT 0,
  `e_mail` varchar(50) NOT NULL,
  UNIQUE (matricula)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `nome` varchar(50) NOT NULL,
  `codigo`  int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  UNIQUE (nome)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `nome` varchar(50) NOT NULL,
  `codigo`  int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fk_curso_codigo` int NOT NULL,
  FOREIGN KEY (fk_curso_codigo) REFERENCES curso(codigo),
  UNIQUE (nome)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `nome` varchar(250) NOT NULL,
  `telefone` int(15) DEFAULT NULL,
  `siape` int(10) NOT NULL,
  `e_mail` varchar(250) NOT NULL,
  `flag` boolean NOT NULL,
  `codigo` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  UNIQUE (siape)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--


--
-- Estrutura da tabela `situacao`
--

CREATE TABLE `situacao` (
  `codigo` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  UNIQUE (nome)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estrutura da tabela `professor_disciplina`
--

CREATE TABLE `professor_disciplina` (
  `codigo` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fk_professor_codigo` int DEFAULT NULL,
  `fk_disciplina_codigo` int DEFAULT NULL,
  FOREIGN KEY (fk_professor_codigo) REFERENCES professor(codigo),
  FOREIGN KEY (fk_disciplina_codigo) REFERENCES disciplina(codigo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professor_disciplina`

-- --------------------------------------------------------

 --  FOREIGN KEY (fk_cidade_id) REFERENCES cidade(id),
 
--
-- Índices para tabelas despejadas
--
--
-- Estrutura da tabela `inscricao`
--

CREATE TABLE `inscricao` (
  `codigo` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fk_aluno_codigo` int NOT NULL,
  `fk_disciplina_codigo` int NOT NULL,
  `fk_situacao_codigo` int DEFAULT 1,
  `ano` int(4) DEFAULT 0,
  FOREIGN KEY (fk_aluno_codigo) REFERENCES aluno(codigo),
  FOREIGN KEY (fk_disciplina_codigo) REFERENCES disciplina(codigo),
  FOREIGN KEY (fk_situacao_codigo) REFERENCES situacao(codigo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `oferta` (
  `codigo` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `vagas` int(2) NOT NULL DEFAULT 0,
  `flag` boolean NOT NULL,
  `fk_disciplina_codigo` int NOT NULL,
  `fk_situacao_codigo` int NOT NULL,
  `fk_professor_codigo` int NOT NULL,
  FOREIGN KEY (fk_disciplina_codigo) REFERENCES disciplina(codigo),
  FOREIGN KEY (fk_professor_codigo) REFERENCES professor(codigo),
  FOREIGN KEY (fk_situacao_codigo) REFERENCES situacao(codigo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

COMMIT;