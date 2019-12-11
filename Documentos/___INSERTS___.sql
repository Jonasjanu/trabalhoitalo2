--

INSERT INTO `curso` (`nome`) VALUES
('Ciencias Biologicas'),
('Técnico em Informática');

INSERT INTO `disciplina` (`nome`, `fk_curso_codigo`) VALUES
('Programação Orientada a Objeto', 1),
('Engenharia de Software', 2),
('Banco de dados', 1),
('Manutenção de computadores', 2),
('Desenvolvimento Web-Front End', 1),
('Inglês Instrumental', 2),
('Introdução a Computação', 1),
('Introdução a Eletricidade', 2),
('Lógica e Linguagem de Programação', 1),
('Matemática Discreta', 2),
('Redes de computadores', 1),
('Sistemas Operacionis Livres', 2),
('Segurança de Redes', 1),
('Empreendorismo', 2),
('Ètica e Relações Humanas', 1),
('Português Instrumental', 2),
('Desenvolvimento Movel', 1),
('Desenvolvimento Web-Back End', 2),
('Análise e Projeto de Software', 1),
('História da Educação', 1),
('Fundamentos Sócio-Filosóficos da Educação', 2),
('Biologia Celular', 1),
('Química geral', 2),
('Matemática aplicada', 1),
('Psicologia do Desenvolvimento', 2),
('Política e Gestão Educacional', 1),
('Embriologia e Histologia Animal Comparada', 2),
('Princípios de Sistemática e Taxonomia ', 1),
('Bioestatística', 2),
('Química Orgânica', 1),
('Psicologia da Aprendizagem', 2),
('Zoologia de Invertebrados I', 1),
('Botânica de Criptógamas ', 2),
('Bioquímica', 1),
('Física para Ciências Biológicas', 2),
('Metodologia do Trabalho Científico', 1),
('Didática Educacional', 2),
('Zoologia de Invertebrados II', 1),
('Botânica de Fanerógamas', 2),
('Microbiologia', 1),
('Biofísica', 2),
('Currículos e Programas', 1),
('Zoologia de Cordados', 2),
('Metodologia e Prática de Ensino de Biologia', 1),
('Ecologia de Populações ', 2),
('Princípios de Etnobiologia e Educação Ambiental', 1),
('Genética', 2),
('Fisiologia Animal Comparada ', 1),
('Ecologia de Comunidades e Conservação', 2),
('Trabalho de Conclusão de Curso I', 1),
('Paleontologia', 2),
('Fisiologia e Anatomia Humana', 1),
('Biologia Molecular ', 2),
('Fisiologia Vegetal', 2),
('Biologia Evolutiva', 1),
('Ética e Legislação em Biologia', 2),
('LIBRAS', 1),
('Trabalho de Conclusão de Curso II (TCC II)', 2);


INSERT INTO `administrador` (`senha`, `login`) VALUES
(123456, 'elizangela1'),
(21345, 'luana2');

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`periodo`, `nome_completo`, `matricula`, `telefone`, `e_mail`) VALUES
(3, 'bruno henrique', 201908, 99595555, 'bh@gmail.com'),
(2, 'gabriel barbosa', 201902, 111111111, 'gabi@gmail.com'),
(2, 'jonas januario da silva ', 2147483647, 981077143, 'jonasjanu@gmail.com'),
(3, 'Elizangela do Monitora ', 2147483646, 981077144, 'elizangela.monitora@gmail.com');

-- --------------------------------------------------------

-- ---------

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`nome`, `telefone`, `siape`, `e_mail`) VALUES
('italo arruda', 90122266, 1111110, 'italo.arruda@ifce.edu.br'),
('savio oliveira', 611116555, 22222220, 'savio.oliveira@gmail.com');


--
-- Extraindo dados da tabela `professor_disciplina`
--

INSERT INTO `professor_disciplina` (`fk_professor_codigo`, 
`fk_disciplina_codigo`) VALUES
(1, 7),
(2, 6),
(1, 7),
(2, 6);

--
-- Extraindo dados da tabela `situacao`
--

INSERT INTO `situacao` (`nome`) VALUES
('HOMOLOGADO'),
('NÃO HOMOLOGADO'),
('APROVADO'),
('NÃO APROVADO'),
('PREENCHIDA'),
('NÃO PREENCHIDA');

--
-- Extraindo dados da tabela `inscricao`
--

INSERT INTO `inscricao` (`fk_aluno_codigo`, `fk_disciplina_codigo`, `fk_situacao_codigo`, `ano`) VALUES
(2, 7, 1, 2019),
(1, 9, 2, 2018),
(3, 11, 3, 2017),
(4, 13, 4, 2019),
(2, 15, 1, 2018),
(1, 17, 2, 2020),
(3, 19, 3, 2020),
(4, 21, 4, 2019);

INSERT INTO `oferta` (`vagas`, `fk_disciplina_codigo`, `fk_situacao_codigo`, `fk_professor_codigo`) VALUES
(2, 2, 5, 1),
(1, 4, 5, 1),
(1, 6, 5, 2),
(2, 8, 6, 2),
(1, 10, 5, 2),
(1, 12, 6, 2),
(2, 14, 6, 1);


COMMIT;