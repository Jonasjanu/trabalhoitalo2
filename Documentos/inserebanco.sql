
insert into `administrador` (`senha`, `login` ) values
(123456, 'elizangela1'),
(21345, 'luana2');


insert into `situacao` (`nome`) values
('HOMOLOGADO' ),
('NÃO HOMOLOGADO' ),
('APROVADO' ),
('NÃO APROVADO');

insert into `aluno` (`periodo`, `nome_completo`, `matricula`, `e_mail`, `ano`, `telefone`) values
(3,   'bruno henrique', 201908, 'bh@gmail.com', 2019, 99595555),
(2,  'gabriel barbosa', 201902, 'gabi@gmail.com', 2017, 111111111);


insert into `curso` (`nome`) values
('biologoa'),
('historia'),
('Libra'),
('letras'),
('informatica');


insert into `disciplina` (`nome`, `fk_curso_codigo`) values
('portugues', 1 ),
('Inglês Instrumental', 2 ),
('Fisica', 1 ),
('eticaS', 2 ),
('matematica', 1);



insert into `professor` (`nome`, `telefone`, `siape`, `e_mail` ) values
('italo arruda', 90122266, 1111110, 'italo.arruda@ifce.edu.br'),
('savio oliveira', 611116555, 22222220, 'savio.oliveira@gmail.com');


insert into `professor_disciplina` (`fk_professor_codigo`, `fk_disciplina_codigo`) values
(1222, 14585),
(32222, 14585),
(1222, 14585),
(32222, 14585);

INSERT INTO `inscricao`(`fk_aluno_codigo`, `fk_disciplina_codigo`, `fk_curso_codigo`, `fk_situacao_codigo`) VALUES 
(1, 2, 1, 2),
(2, 1, 2, 1);



