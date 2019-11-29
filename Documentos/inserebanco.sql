
insert into `administrador` (`senha`, `login`, `codigo`) values
(123456, 'elizangela1', 1),
(21345, 'luana2', 2);

insert into `administrador_curso` (`fk_disciplina_codigo`, `fk_curso_codigo`) values
(66666, 201901),
(14585, 201906),
(66666, 201901),
(14585, 201906);



insert into `aluno` (`periodo`, `cod_disciplina`, `codigo`, `nome_completo`, `matricula`, `e_mail`, `situacao`, `ano`, `curso`, `telefone`) values
(3, 6666, 555, 'bruno henrique', 201908, 'bh@gmail.com', 'homologado', 0, '0', 0),
(2, 5555, 888, 'gabriel barbosa', 201902, 'gabi@gmail.com', 'aprovado', 0, '0', 0);


insert into `curso` (`nome`, `codigo`, `fk_administrador_codigo`) values
('biologoa', 201901, 1),
('informatica', 201906, 2);


insert into `disciplina` (`nome`, `codigo`, `cod_curso`, `fk_aluno_codigo`, `fk_administrador_codigo`) values
('portugues', 14585, 64548, 888, 2),
('matematica', 66666, 51454, 555, 1);



insert into `professor` (`nome`, `telefone`, `siape`, `e_mail`, `codigo`) values
('italo arruda', 90122266, 1111110, 'italo.arruda@ifce.edu.br', 1222),
('savio oliveira', 611116555, 22222220, 'savio.oliveira@gmail.com', 32222);


insert into `professor_disciplina` (`fk_professor_codigo`, `fk_disciplina_codigo`) values
(1222, 14585),
(32222, 14585),
(1222, 14585),
(32222, 14585);
