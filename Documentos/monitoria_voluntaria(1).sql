
set sql_mode = "no_auto_value_on_zero";
set autocommit = 0;
start transaction;
set time_zone = "+00:00";



create table `administrador` (
  `senha` int(10) default null,
  `login` varchar(100) default null,
  `codigo` int not null primary key AUTO_INCREMENT
) engine=innodb default charset=latin1;


create table `aluno` (
  `periodo` int(3) default null,
  `cod_disciplina` int(10) default null,
  `codigo` int not null primary key AUTO_INCREMENT,
  `nome_completo` varchar(250) default null,
  `matricula` int(10) default null,
  `e_mail` varchar(50) default null,
  `situacao` varchar(20) default null,
  `ano` int(11) not null,
  `curso` varchar(20) not null,
  `telefone` int(11) not null
) engine=innodb default charset=latin1;



create table `curso` (
  `nome` varchar(50) default null,
  `codigo` int not null primary key AUTO_INCREMENT,
  `fk_administrador_codigo` int(10) default null
) engine=innodb default charset=latin1;

--
-

create table `disciplina` (
  `nome` varchar(50) default null,
  `codigo` int not null primary key AUTO_INCREMENT,
  `fk_cod_curso` int default null
  ) engine=innodb default charset=latin1;


create table `professor` (
  `nome` varchar(250) default null,
  `telefone` int(15) default null,
  `siape` int(10) default null,
  `e_mail` varchar(250) default null,
  `codigo` int not null primary key AUTO_INCREMENT
) engine=innodb default charset=latin1;


create table `professor_disciplina` (
  `fk_professor_codigo` int default null,
  `fk_disciplina_codigo` int default null
) engine=innodb default charset=latin1;

--
-- limitadores para a tabela `curso`
--
alter table `curso`
  add constraint `fk_curso_2` foreign key (`fk_administrador_codigo`) references `administrador` (`codigo`);

--
-- limitadores para a tabela `disciplina`
--
alter table `disciplina`
  add constraint `fk_disciplina_1` foreign key (`fk_cod_curso`) references `curso` (`codigo`) on delete cascade;


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
