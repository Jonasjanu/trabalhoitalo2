
insert into `administrador` (`senha`, `login` ) values
(123456, 'elizangela1'),
(21345, 'luana2');



insert into `aluno` (`periodo`, `nome_completo`, `matricula`, `e_mail`, `ano`, `curso`, `telefone`) values
(3,   'bruno henrique', 201908, 'bh@gmail.com', 2019, 'biologia', 99595555),
(2,  'gabriel barbosa', 201902, 'gabi@gmail.com', 2017, 'informatica', 111111111);


insert into `curso` (`nome`) values
('biologoa'),
('historia'),
('Libra'),
('letras'),
('informatica');


insert into `disciplina` (`nome`) values
('portugues' ),
('Inglês Instrumental' ),
('Fisica' ),
('eticaS' ),
('matematica');



insert into `professor` (`nome`, `telefone`, `siape`, `e_mail` ) values
('italo arruda', 90122266, 1111110, 'italo.arruda@ifce.edu.br'),
('savio oliveira', 611116555, 22222220, 'savio.oliveira@gmail.com');


insert into `professor_disciplina` (`fk_professor_codigo`, `fk_disciplina_codigo`) values
(1222, 14585),
(32222, 14585),
(1222, 14585),
(32222, 14585);

insert into `inscricao` (`situacao`) values
('Aprovado' ),
('Reprovado' ),


