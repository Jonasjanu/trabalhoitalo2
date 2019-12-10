--
-- Extraindo dados da tabela `administrador`
--
INSERT INTO `administrador` (`senha`, `login`, `codigo`) VALUES
(123456, 'elizangela1', 1),
(21345, 'luana2', 2);

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`codigo`, `periodo`, `nome_completo`, `matricula`, `telefone`, `ano`, `e_mail`) VALUES
(1, 3, 'bruno henrique', 201908, 99595555, 2019, 'bh@gmail.com'),
(2, 2, 'gabriel barbosa', 201902, 111111111, 2017, 'gabi@gmail.com'),
(3, 2, 'jonas januario da silva ', 2147483647, 981077143, 2018, 'jonasjanu@gmail.com'),
(4, 2, 'jonas januario da silva ', 2147483647, 981077143, 2018, 'jonasjanu@gmail.com');

-- --------------------------------------------------------

----
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`nome`, `codigo`) VALUES
('Ciencias biologicas', 1),
('informatica', 2);


--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`nome`, `codigo`, `fk_curso_codigo`) VALUES
('Programação Orientada a Objeto', 1, 1),
('Engenharia de Software', 1, 2),
('Banco de dados', 2, 1),
('Manutenção de computadores', 2, 2),
('Desenvolvimento Web-Front End', 1, 1),
('Inglês Instrumental', 1, 2),
('Introdução a Computação', 2, 1),
('Introdução a Eletricidade', 2, 2),
('Lógica e Linguagem de Programação', 1, 1),
('Matemática Discreta', 1, 2),
('Redes de computadores', 2, 1),
('Sistemas Operacionis Livres', 2, 2),
('Segurança de Redes', 1, 1),
('Empreendorismo', 1, 2),
('Ètica e Relações Humanas', 2, 1),
('Português Instrumental', 2, 2),
('Desenvolvimento Movel', 1, 1),
('Desenvolvimento Web-Back End', 1, 2),
('Análise e Projeto de Software', 2, 1),
('Banco de dados', 2, 2),
('História da Educação', 1, 1),
('Fundamentos Sócio-Filosóficos da Educação', 1, 2),
('Biologia Celular', 2, 1),
('Química geral', 2, 2),
('Matemática aplicada', 1, 1),
('Psicologia do Desenvolvimento', 1, 2),
('Política e Gestão Educacional', 2, 1),
('Embriologia e Histologia Animal Comparada', 2, 2),
('Princípios de Sistemática e Taxonomia ', 1, 1),
('Bioestatística', 1, 2),
('Química Orgânica', 2, 1),
('Psicologia da Aprendizagem', 2, 2),
('Zoologia de Invertebrados I', 1, 1),
('Botânica de Criptógamas ', 1, 2),
('Bioquímica', 2, 1),
('Física para Ciências Biológicas', 2, 2),
('Metodologia do Trabalho Científico', 1, 1),
('Didática Educacional', 1, 2),
('Zoologia de Invertebrados II', 2, 1),
('Botânica de Fanerógamas', 2, 2),
('Microbiologia', 1, 1),
('Biofísica', 1, 2),
('Currículos e Programas', 2, 1),
('Zoologia de Cordados', 2, 2),
('Metodologia e Prática de Ensino de Biologia', 1, 1),
('Ecologia de Populações ', 1, 2),
('Princípios de Etnobiologia e Educação Ambiental', 2, 1),
('Genética', 2, 2),
('Fisiologia Animal Comparada ', 1, 1),
('Ecologia de Comunidades e Conservação', 1, 2),
('Trabalho de Conclusão de Curso I', 2, 1),
('Paleontologia', 2, 2),
('Fisiologia e Anatomia Humana', 1, 1),
('Biologia Molecular ', 1, 2),
('Fisiologia Vegetal', 2, 2),
('Biologia Evolutiva', 1, 1),
('Ética e Legislação em Biologia', 1, 2),
('LIBRAS', 2, 1),
('Trabalho de Conclusão de Curso II (TCC II)', 2, 2);
()


--
-- Extraindo dados da tabela `inscricao`
--

INSERT INTO `inscricao` (`codigo`, `fk_aluno_codigo`, `fk_disciplina_codigo`, `fk_curso_codigo`, `fk_situacao_codigo`) VALUES
(2, 2, 7, 2, 3),
(3, 1, 9, 4, 1),
(4, 1, 7, 2, 3),
(5, 2, 9, 4, 1);

-- ---------

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`nome`, `telefone`, `siape`, `e_mail`, `codigo`) VALUES
('italo arruda', 90122266, 1111110, 'italo.arruda@ifce.edu.br', 1),
('savio oliveira', 611116555, 22222220, 'savio.oliveira@gmail.com', 2);


--
-- Extraindo dados da tabela `professor_disciplina`
--

INSERT INTO `professor_disciplina` (`codigo`, `fk_professor_codigo`, `fk_disciplina_codigo`) VALUES
(2, 1, 7),
(3, 2, 6),
(4, 1, 7),
(5, 2, 6);

--
-- Extraindo dados da tabela `situacao`
--

INSERT INTO `situacao` (`codigo`, `nome`) VALUES
(1, 'HOMOLOGADO'),
(2, 'NÃO HOMOLOGADO'),
(3, 'APROVADO'),
(4, 'NÃO APROVADO');
