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
('portugues', 1, 1),
('Inglês Instrumental', 1, 2),
('Fisica', 2, 1),
('etica', 2, 2),
('matematica', 2, 1);


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
