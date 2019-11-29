-- phpmyadmin sql dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- host: 127.0.0.1
-- tempo de geração: 18-nov-2019 às 20:32
-- versão do servidor: 10.3.16-mariadb
-- versão do php: 7.1.30

set sql_mode = "no_auto_value_on_zero";
set autocommit = 0;
start transaction;
set time_zone = "+00:00";


/*!40101 set @old_character_set_client=@@character_set_client */;
/*!40101 set @old_character_set_results=@@character_set_results */;
/*!40101 set @old_collation_connection=@@collation_connection */;
/*!40101 set names utf8mb4 */;

--
-- banco de dados: `monitoria voluntaria`
--

-- --------------------------------------------------------

--
-- estrutura da tabela `lista_aluno`
--

create table `lista_aluno` (
  `id_estudante` int(11) not null,
  `nome_completo` varchar(100) not null,
  `matricula` int(20) not null,
  `email` varchar(50) not null,
  `curso` varchar(50) not null,
  `periodomatriculado` date not null,
  `telefone` int(12) not null,
  `qualdiciplina` text not null,
  `foimonitor` tinyint(1) not null,
  `anomonitor` date not null
) engine=innodb default charset=latin1;

--
-- índices para tabelas despejadas
--

--
-- índices para tabela `lista_aluno`
--
alter table `lista_aluno`
  add primary key (`id_estudante`);

--
-- auto_increment de tabelas despejadas
--

--
-- auto_increment de tabela `lista_aluno`
--
alter table `lista_aluno`
  modify `id_estudante` int(11) not null auto_increment;
commit;

/*!40101 set character_set_client=@old_character_set_client */;
/*!40101 set character_set_results=@old_character_set_results */;
/*!40101 set collation_connection=@old_collation_connection */;
