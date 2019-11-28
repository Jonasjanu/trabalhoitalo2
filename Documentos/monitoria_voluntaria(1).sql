-- phpmyadmin sql dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- host: 127.0.0.1
-- tempo de geração: 28-nov-2019 às 18:50
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
-- estrutura da tabela `administrador`
--

create table `administrador` (
  `senha` int(10) default null,
  `login` varchar(100) default null,
  `codigo` int(10) not null
) engine=innodb default charset=latin1;

--
-- truncar tabela antes do insert `administrador`
--

truncate table `administrador`;
--
-- extraindo dados da tabela `administrador`
--

insert into `administrador` (`senha`, `login`, `codigo`) values
(123456, 'elizangela1', 1),
(21345, 'luana2', 2);

-- --------------------------------------------------------

--
-- estrutura da tabela `administrador_curso`
--

create table `administrador_curso` (
  `fk_disciplina_codigo` int(10) default null,
  `fk_curso_codigo` int(10) default null
) engine=innodb default charset=latin1;

--
-- truncar tabela antes do insert `administrador_curso`
--

truncate table `administrador_curso`;
--
-- extraindo dados da tabela `administrador_curso`
--

insert into `administrador_curso` (`fk_disciplina_codigo`, `fk_curso_codigo`) values
(66666, 201901),
(14585, 201906),
(66666, 201901),
(14585, 201906);

-- --------------------------------------------------------

--
-- estrutura da tabela `aluno`
--

create table `aluno` (
  `periodo` int(3) default null,
  `cod_disciplina` int(10) default null,
  `codigo` int(30) not null,
  `nome_completo` varchar(250) default null,
  `matricula` int(10) default null,
  `e_mail` varchar(50) default null,
  `situacao` varchar(20) default null,
  `ano` int(11) not null,
  `curso` varchar(20) not null,
  `telefone` int(11) not null
) engine=innodb default charset=latin1;

--
-- truncar tabela antes do insert `aluno`
--

truncate table `aluno`;
--
-- extraindo dados da tabela `aluno`
--

insert into `aluno` (`periodo`, `cod_disciplina`, `codigo`, `nome_completo`, `matricula`, `e_mail`, `situacao`, `ano`, `curso`, `telefone`) values
(3, 6666, 555, 'bruno henrique', 201908, 'bh@gmail.com', 'homologado', 0, '0', 0),
(2, 5555, 888, 'gabriel barbosa', 201902, 'gabi@gmail.com', 'aprovado', 0, '0', 0);

-- --------------------------------------------------------

--
-- estrutura da tabela `curso`
--

create table `curso` (
  `nome` varchar(50) default null,
  `codigo` int(10) not null,
  `fk_administrador_codigo` int(10) default null
) engine=innodb default charset=latin1;

--
-- truncar tabela antes do insert `curso`
--

truncate table `curso`;
--
-- extraindo dados da tabela `curso`
--

insert into `curso` (`nome`, `codigo`, `fk_administrador_codigo`) values
('biologoa', 201901, 1),
('informatica', 201906, 2);

-- --------------------------------------------------------

--
-- estrutura da tabela `disciplina`
--

create table `disciplina` (
  `nome` varchar(50) default null,
  `codigo` int(10) not null,
  `cod_curso` int(10) default null,
  `fk_aluno_codigo` int(30) default null,
  `fk_administrador_codigo` int(10) default null
) engine=innodb default charset=latin1;

--
-- truncar tabela antes do insert `disciplina`
--

truncate table `disciplina`;
--
-- extraindo dados da tabela `disciplina`
--

insert into `disciplina` (`nome`, `codigo`, `cod_curso`, `fk_aluno_codigo`, `fk_administrador_codigo`) values
('portugues', 14585, 64548, 888, 2),
('matematica', 66666, 51454, 555, 1);

-- --------------------------------------------------------

--
-- estrutura da tabela `professor`
--

create table `professor` (
  `nome` varchar(250) default null,
  `telefone` int(15) default null,
  `siape` int(10) default null,
  `e_mail` varchar(250) default null,
  `codigo` int(10) not null
) engine=innodb default charset=latin1;

--
-- truncar tabela antes do insert `professor`
--

truncate table `professor`;
--
-- extraindo dados da tabela `professor`
--

insert into `professor` (`nome`, `telefone`, `siape`, `e_mail`, `codigo`) values
('italo arruda', 90122266, 1111110, 'italo.arruda@ifce.edu.br', 1222),
('savio oliveira', 611116555, 22222220, 'savio.oliveira@gmail.com', 32222);

-- --------------------------------------------------------

--
-- estrutura da tabela `professor_disciplina`
--

create table `professor_disciplina` (
  `fk_professor_codigo` int(10) default null,
  `fk_disciplina_codigo` int(10) default null
) engine=innodb default charset=latin1;

--
-- truncar tabela antes do insert `professor_disciplina`
--

truncate table `professor_disciplina`;
--
-- extraindo dados da tabela `professor_disciplina`
--

insert into `professor_disciplina` (`fk_professor_codigo`, `fk_disciplina_codigo`) values
(1222, 14585),
(32222, 14585),
(1222, 14585),
(32222, 14585);

--
-- índices para tabelas despejadas
--

--
-- índices para tabela `administrador`
--
alter table `administrador`
  add primary key (`codigo`);

--
-- índices para tabela `administrador_curso`
--
alter table `administrador_curso`
  add key `fk_administrador_curso_1` (`fk_disciplina_codigo`),
  add key `fk_administrador_curso_2` (`fk_curso_codigo`);

--
-- índices para tabela `aluno`
--
alter table `aluno`
  add primary key (`codigo`);

--
-- índices para tabela `curso`
--
alter table `curso`
  add primary key (`codigo`),
  add key `fk_curso_2` (`fk_administrador_codigo`);

--
-- índices para tabela `disciplina`
--
alter table `disciplina`
  add primary key (`codigo`),
  add key `fk_disciplina_2` (`fk_aluno_codigo`),
  add key `fk_disciplina_3` (`fk_administrador_codigo`);

--
-- índices para tabela `professor`
--
alter table `professor`
  add primary key (`codigo`);

--
-- índices para tabela `professor_disciplina`
--
alter table `professor_disciplina`
  add key `fk_professor_disciplina_1` (`fk_professor_codigo`),
  add key `fk_professor_disciplina_2` (`fk_disciplina_codigo`);

--
-- restrições para despejos de tabelas
--

--
-- limitadores para a tabela `administrador_curso`
--
alter table `administrador_curso`
  add constraint `fk_administrador_curso_1` foreign key (`fk_disciplina_codigo`) references `disciplina` (`codigo`),
  add constraint `fk_administrador_curso_2` foreign key (`fk_curso_codigo`) references `curso` (`codigo`);

--
-- limitadores para a tabela `curso`
--
alter table `curso`
  add constraint `fk_curso_2` foreign key (`fk_administrador_codigo`) references `administrador` (`codigo`);

--
-- limitadores para a tabela `disciplina`
--
alter table `disciplina`
  add constraint `fk_disciplina_2` foreign key (`fk_aluno_codigo`) references `aluno` (`codigo`) on delete cascade,
  add constraint `fk_disciplina_3` foreign key (`fk_administrador_codigo`) references `administrador` (`codigo`) on delete cascade;

--
-- limitadores para a tabela `professor_disciplina`
--
alter table `professor_disciplina`
  add constraint `fk_professor_disciplina_1` foreign key (`fk_professor_codigo`) references `professor` (`codigo`),
  add constraint `fk_professor_disciplina_2` foreign key (`fk_disciplina_codigo`) references `disciplina` (`codigo`) on delete set null;
commit;

/*!40101 set character_set_client=@old_character_set_client */;
/*!40101 set character_set_results=@old_character_set_results */;
/*!40101 set collation_connection=@old_collation_connection */;
