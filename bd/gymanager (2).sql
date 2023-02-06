-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Dez-2022 às 03:39
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gymanager`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `arq_id` int(11) NOT NULL,
  `arq_nome` varchar(100) NOT NULL,
  `arq_path` varchar(100) NOT NULL,
  `usu_id` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`arq_id`, `arq_nome`, `arq_path`, `usu_id`) VALUES
(7, 'perfil.jpg', 'arquivos/6345f815e5dac.jpg', 64),
(8, 'perfilgian.jpg', 'arquivos/6345fcf23cf9b.jpg', 66),
(10, 'travaaaa.jpg', 'arquivos/63460ed8bf078.jpg', 69),
(12, 'WIN_20220418_20_34_09_Pro.jpg', 'arquivos/6346e047a7350.jpg', 73),
(14, 'nandofoto.jpg', 'arquivos/634b1ea79e037.jpg', 75),
(38, '6346d6b8b268f.jpg', 'arquivos/638d42a6a4e8b.jpg', 70),
(39, 'zikafi.jpg', 'arquivos/638d47cd4a71c.jpg', 78);

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `ava_id` int(45) NOT NULL,
  `ava_nome` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `ava_idade` int(45) NOT NULL,
  `ava_data` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `ava_peso` decimal(45,2) DEFAULT NULL COMMENT 'kg',
  `ava_altura` int(45) DEFAULT NULL COMMENT 'm',
  `ava_imc` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `ava_gc` decimal(45,2) DEFAULT NULL COMMENT '%',
  `ava_coxa` decimal(45,2) DEFAULT NULL COMMENT 'mm',
  `ava_peito` decimal(45,2) DEFAULT NULL COMMENT 'mm',
  `ava_triceps` decimal(45,2) DEFAULT NULL COMMENT 'mm',
  `ava_axilarmedio` decimal(45,2) DEFAULT NULL COMMENT 'mm',
  `ava_abdominal` decimal(45,2) DEFAULT NULL COMMENT 'mm',
  `ava_subescapular` decimal(45,2) DEFAULT NULL COMMENT 'mm',
  `ava_suprailiaca` decimal(45,2) DEFAULT NULL COMMENT 'mm',
  `ava_taxamuscular` varchar(45) COLLATE latin7_general_cs DEFAULT NULL COMMENT '%',
  `ava_massaldgordura` varchar(45) COLLATE latin7_general_cs DEFAULT NULL COMMENT 'kg',
  `ava_gordurasub` varchar(45) COLLATE latin7_general_cs DEFAULT NULL COMMENT '%',
  `ava_gorduravisce` varchar(45) COLLATE latin7_general_cs DEFAULT NULL,
  `ava_aguacorporal` varchar(45) COLLATE latin7_general_cs DEFAULT NULL COMMENT '%',
  `ava_massamuscular` varchar(45) COLLATE latin7_general_cs DEFAULT NULL COMMENT 'kg',
  `ava_massaossea` varchar(45) COLLATE latin7_general_cs DEFAULT NULL COMMENT 'kg',
  `ava_tmb` int(45) DEFAULT NULL COMMENT 'kcal',
  `ava_idademetabolica` int(45) DEFAULT NULL COMMENT 'anos',
  `conexao_id` int(45) DEFAULT NULL,
  `ava_densidade` int(11) NOT NULL,
  `ava_ctorax` varchar(45) COLLATE latin7_general_cs DEFAULT NULL,
  `ava_ccintura` varchar(45) COLLATE latin7_general_cs DEFAULT NULL,
  `ava_cabdomen` varchar(45) COLLATE latin7_general_cs DEFAULT NULL,
  `ava_cquadril` varchar(45) COLLATE latin7_general_cs DEFAULT NULL,
  `ava_cbrd` varchar(45) COLLATE latin7_general_cs DEFAULT NULL,
  `ava_cbre` varchar(45) COLLATE latin7_general_cs DEFAULT NULL,
  `ava_cbcd` varchar(45) COLLATE latin7_general_cs DEFAULT NULL,
  `ava_cbce` varchar(45) COLLATE latin7_general_cs DEFAULT NULL,
  `ava_ccoxad` varchar(45) COLLATE latin7_general_cs DEFAULT NULL,
  `ava_ccoxae` varchar(45) COLLATE latin7_general_cs DEFAULT NULL,
  `ava_cpanturrilhad` varchar(45) COLLATE latin7_general_cs DEFAULT NULL,
  `ava_cpanturrilhae` varchar(45) COLLATE latin7_general_cs DEFAULT NULL,
  `aluno_id` int(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Extraindo dados da tabela `avaliacao`
--

INSERT INTO `avaliacao` (`ava_id`, `ava_nome`, `ava_idade`, `ava_data`, `ava_peso`, `ava_altura`, `ava_imc`, `ava_gc`, `ava_coxa`, `ava_peito`, `ava_triceps`, `ava_axilarmedio`, `ava_abdominal`, `ava_subescapular`, `ava_suprailiaca`, `ava_taxamuscular`, `ava_massaldgordura`, `ava_gordurasub`, `ava_gorduravisce`, `ava_aguacorporal`, `ava_massamuscular`, `ava_massaossea`, `ava_tmb`, `ava_idademetabolica`, `conexao_id`, `ava_densidade`, `ava_ctorax`, `ava_ccintura`, `ava_cabdomen`, `ava_cquadril`, `ava_cbrd`, `ava_cbre`, `ava_cbcd`, `ava_cbce`, `ava_ccoxad`, `ava_ccoxae`, `ava_cpanturrilhad`, `ava_cpanturrilhae`, `aluno_id`) VALUES
(67, 'Pollock3', 18, '05/12/2022', '44.00', 44, '227,3', '33.63', '44.00', '44.00', '0.00', '0.00', '44.00', '0.00', '0.00', '', '', '', '', '', '', '', 766, 0, 100, 0, '44', '44', '44', '444444', '44', '4444', '44', '44', '44', '44', '44', '44', 69),
(71, 'Pollock3', 17, '05/12/2022', '60.00', 170, '20,8', '13.63', '15.00', '10.00', '0.00', '0.00', '25.00', '0.00', '0.00', '', '', '', '', '', '', '', 1622, 0, 100, 0, '45', '45', '45', '45', '45', '45', '45', '45', '45', '45', '45', '45', 78);

-- --------------------------------------------------------

--
-- Estrutura da tabela `conexao`
--

CREATE TABLE `conexao` (
  `conexao_id` int(45) NOT NULL,
  `professor_id` int(40) NOT NULL,
  `aluno_id` int(40) NOT NULL,
  `aluno_nome` varchar(45) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Extraindo dados da tabela `conexao`
--

INSERT INTO `conexao` (`conexao_id`, `professor_id`, `aluno_id`, `aluno_nome`) VALUES
(24, 5, 14, 'Paulo Sergio Dias'),
(64, 5, 43, 'testefinal da silva'),
(65, 5, 64, 'Paulo Foto'),
(76, 5, 35, 'Professor Dionisio'),
(77, 5, 33, 'Rogerio Rocha'),
(78, 5, 72, ''),
(79, 73, 72, ''),
(80, 73, 15, 'Felipe Tavares'),
(100, 77, 76, 'lixeiaraA'),
(104, 70, 72, ''),
(109, 70, 69, 'Travalline Da Silva'),
(114, 70, 75, 'Luiz Fernando Souza');

-- --------------------------------------------------------

--
-- Estrutura da tabela `exercicio`
--

CREATE TABLE `exercicio` (
  `exe_id` int(45) NOT NULL,
  `exe_nome` varchar(45) NOT NULL,
  `exe_serie` int(45) NOT NULL,
  `exe_repeticao` int(45) NOT NULL,
  `exe_intervalo` int(45) NOT NULL COMMENT 'segundos',
  `exe_obs` varchar(45) NOT NULL,
  `serie_id` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel`
--

CREATE TABLE `nivel` (
  `nivel_id` int(40) NOT NULL,
  `nivel_nome` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `nivel_ativo` int(40) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Extraindo dados da tabela `nivel`
--

INSERT INTO `nivel` (`nivel_id`, `nivel_nome`, `nivel_ativo`) VALUES
(1, 'Aluno', 1),
(2, 'Professor', 1),
(3, 'Admin', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `serie`
--

CREATE TABLE `serie` (
  `serie_id` int(45) NOT NULL,
  `serie_nome` varchar(45) NOT NULL,
  `serie_data` varchar(45) NOT NULL,
  `conexao_id` int(45) NOT NULL,
  `aluno_id` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usu_id` int(40) NOT NULL,
  `usu_nome` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `usu_usuario` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `usu_senha` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `usu_email` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `usu_data` date NOT NULL DEFAULT '2005-10-05',
  `usu_ativo` int(40) NOT NULL DEFAULT 1,
  `usu_academia` varchar(45) CHARACTER SET latin1 DEFAULT 'Happy Day',
  `usu_cidade` varchar(45) CHARACTER SET latin1 NOT NULL DEFAULT 'Aparecida',
  `usu_estado` varchar(45) CHARACTER SET latin1 NOT NULL DEFAULT 'SP',
  `nivel_id` int(40) NOT NULL,
  `usu_codigo` varchar(45) COLLATE latin1_general_cs DEFAULT NULL,
  `usu_sexo` varchar(45) COLLATE latin1_general_cs DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usu_id`, `usu_nome`, `usu_usuario`, `usu_senha`, `usu_email`, `usu_data`, `usu_ativo`, `usu_academia`, `usu_cidade`, `usu_estado`, `nivel_id`, `usu_codigo`, `usu_sexo`) VALUES
(5, 'Paulo Dias', 'paulo', '1234', 'paulosvdd05@gmail.com', '2005-10-05', 1, NULL, 'Aparecida', 'SP', 2, NULL, 'masculino'),
(7, 'pedro martins', 'pedro', '1234', 'pedro@email.com', '2005-10-05', 1, NULL, 'Aparecida', 'SP', 1, NULL, 'masculino'),
(8, 'matheus rocha', 'matheus', '1234', 'matheus@email.com', '2005-10-05', 1, NULL, 'Aparecida', 'SP', 1, NULL, 'masculino'),
(12, 'Gianlucca Paschetta', 'Gianlucca', '1234', 'gian@gmail.com', '2005-10-05', 1, NULL, 'Aparecida', 'SP', 1, NULL, 'masculino'),
(13, 'Rodrigo Antunes', 'Rodrigo', '1234', 'rodrigo@gmail.com', '2005-10-05', 1, NULL, 'Aparecida', 'SP', 1, NULL, 'masculino'),
(14, 'Paulo Sergio Dias', 'Paulo', '1234', 'paulo@gmail.com', '2005-10-05', 1, 'Umuarama ', 'Aparecida', 'SP', 1, NULL, 'masculino'),
(15, 'Felipe Tavares', 'Felipe', '1234', 'felipe@gmail.com', '2005-10-05', 1, NULL, 'Aparecida', 'SP', 1, NULL, 'masculino'),
(17, 'Wilson Silvaston', 'Wilson', '1234', 'wilson@gmail.com', '2005-10-05', 1, NULL, 'Aparecida', 'SP', 2, NULL, 'masculino'),
(18, 'Henrique Diniz', 'Henrique', '1234', 'henrique@gmail.com', '2005-10-05', 1, NULL, 'Aparecida', 'SP', 2, NULL, 'masculino'),
(19, 'Mateus Carvalho', 'Matheus', '1234', 'matheus@gmail.com', '2005-10-05', 1, NULL, 'Aparecida', 'SP', 2, NULL, 'masculino'),
(20, 'Marcelo Foncesa', 'Marcelo', '1234', 'marcelo@gmail.com', '2005-10-05', 1, NULL, 'Aparecida', 'SP', 2, NULL, 'masculino'),
(21, 'Ana Clara Oliveira', 'Ana', '1234', 'anaclara@gmail.com', '2005-10-05', 1, NULL, 'Aparecida', 'SP', 2, NULL, 'masculino'),
(22, 'Gislene Oliveira Silvaston', 'Gisa', '1234', 'gislene@gmail.com', '2005-10-05', 1, NULL, 'Aparecida', 'SP', 2, NULL, 'masculino'),
(23, 'LuÃ­s Antonio Oliveira', 'Luis', '1234', 'lu@gmail.com', '2005-10-05', 1, NULL, 'Aparecida', 'SP', 2, NULL, 'masculino'),
(24, 'Renato Cariani', 'Cariani', '1234', 'cariani@gmail.com', '2005-10-05', 1, NULL, 'Aparecida', 'SP', 2, NULL, 'masculino'),
(25, 'ph', 'ph', '1234', 'ph@email', '2005-10-05', 1, NULL, 'Aparecida', 'SP', 2, NULL, 'masculino'),
(31, 'TesteData', 'testedata', '1234', 'testedata@email.com', '2001-10-03', 1, NULL, 'Aparecida', 'SP', 2, NULL, 'masculino'),
(32, 'cidadeteste', 'testecidade', '1234', 's7ay6egasy7g@djasidjsa.com', '1999-05-31', 1, NULL, 'Lorena', 'SP', 2, NULL, 'masculino'),
(33, 'Rogerio Rocha', 'rogerio', '1234', 'rogerio@rogerio.rogerio', '1989-07-25', 1, NULL, 'Porto Seguro', 'BA', 1, NULL, 'masculino'),
(34, 'dasdasdas', 'dasdasdasd', '1234', 'asdasdas@dcsadas', '2003-03-23', 1, 'dasdasdadsdasdasd', 'dasdas', 'PB', 1, NULL, 'masculino'),
(35, 'Professor Dionisio', 'Dionisio', '1234', 'dionisio@gmail.com', '1970-10-05', 1, 'Gym Etec', 'GuaratinguetÃ¡', 'SP', 1, NULL, 'masculino'),
(42, 'Gianlucca Paschetta', 'gianlucca', '1234', 'gianlucca@gmail.com', '2005-05-10', 1, 'Nara Academia', 'Aparecida', 'SP', 2, 'cbb432', 'masculino'),
(43, 'testefinal da silva', 'tf', '1234', 'tf@email.com', '2022-10-25', 1, 'tf', 'tf', 'MG', 1, 'a1f729', 'masculino'),
(61, 'dasdadasdasdsad', 'sfsdfsfdsfsfsfsdfsadasdasfsfsfs', '1234', 'sdfsdfsfsddasdafdsfsfsfssf@fafaf', '2022-10-07', 1, 'sddsfff', 'fasfasfa', 'PE', 1, '896671', 'masculino'),
(62, 'Cadastro Imagen', 'Imagem', '1234', 'img@email', '2022-10-27', 1, 'CACACS', 'img', 'RJ', 1, 'dd1563', 'masculino'),
(64, 'Paulo Foto', 'paulofoto', '1234', 'paulofoto@email.com', '2005-10-05', 1, 'UCA', 'Aparecida', 'SP', 1, 'bf7296', 'masculino'),
(66, 'Gianlucca Foto', 'gianfoto', '1234', 'gianfoto@email.com', '2005-05-10', 1, 'Nara Academia', 'Aparecida', 'SP', 1, '924d4b', 'masculino'),
(67, 'dasdasdasdsa', 'asdasdsadasdasd', '1234', 'dasddas@ewad', '2001-02-04', 1, 'dasdadasda', 'asdawdasdas', 'DF', 1, 'ad6617', 'masculino'),
(69, 'Travalline Da Silva', 'trava', '1234', 'trava@email.com', '2004-09-02', 1, 'ICC', 'Guaratingueta', 'SP', 1, 'bd1c5f', 'masculino'),
(70, 'Professor Paulo', 'profpaulo', '1234', 'profpaulo@email.com', '1999-10-05', 1, 'UCA', 'Aparecida', 'SP', 2, 'e5a226', 'masculino'),
(72, 'aaaa', 'aaaa', NULL, NULL, '2005-10-05', 1, 'Happy Day', 'Aparecida', 'SP', 2, NULL, 'masculino'),
(73, 'adasdasdasdasdasd', 'abcde', '1234', 'sdadad@dsdasdas', '2001-02-02', 1, 'dsadasdsad', 'dsadasd', 'RJ', 2, 'f26c63', 'masculino'),
(75, 'Luiz Fernando Souza', 'nando', '1234', 'nando@email.com', '2005-06-28', 1, 'Skullgym', 'Potim', 'SP', 1, '791d19', 'masculino'),
(76, 'lixeiraA', NULL, NULL, NULL, '2005-10-05', 1, 'Happy Day', 'Aparecida', 'SP', 1, NULL, 'masculino'),
(77, 'lixeiraP', NULL, NULL, NULL, '2005-10-05', 1, 'Happy Day', 'Aparecida', 'SP', 2, NULL, 'masculino'),
(78, 'Joao Guilherme Perrenoud', 'joaogui', '1234', 'joaogui@gmail.com', '2005-06-11', 1, 'ICC', 'Guaratingueta', 'SP', 1, '96a4c7', 'masculino');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`arq_id`),
  ADD KEY `fk_usu_id` (`usu_id`);

--
-- Índices para tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`ava_id`),
  ADD KEY `conexao_id` (`conexao_id`),
  ADD KEY `aluno_id` (`aluno_id`);

--
-- Índices para tabela `conexao`
--
ALTER TABLE `conexao`
  ADD PRIMARY KEY (`conexao_id`),
  ADD KEY `professor_id` (`professor_id`),
  ADD KEY `aluno_id` (`aluno_id`),
  ADD KEY `aluno_id_2` (`aluno_id`);

--
-- Índices para tabela `exercicio`
--
ALTER TABLE `exercicio`
  ADD PRIMARY KEY (`exe_id`),
  ADD KEY `serie_id` (`serie_id`);

--
-- Índices para tabela `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`nivel_id`);

--
-- Índices para tabela `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`serie_id`),
  ADD KEY `conexao_id` (`conexao_id`),
  ADD KEY `aluno_id` (`aluno_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usu_id`),
  ADD KEY `nivel_id` (`nivel_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `arq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `ava_id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de tabela `conexao`
--
ALTER TABLE `conexao`
  MODIFY `conexao_id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT de tabela `exercicio`
--
ALTER TABLE `exercicio`
  MODIFY `exe_id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `nivel`
--
ALTER TABLE `nivel`
  MODIFY `nivel_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `serie`
--
ALTER TABLE `serie`
  MODIFY `serie_id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usu_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `arquivos`
--
ALTER TABLE `arquivos`
  ADD CONSTRAINT `fk_usu_id` FOREIGN KEY (`usu_id`) REFERENCES `usuarios` (`usu_id`);

--
-- Limitadores para a tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD CONSTRAINT `fk_ava_usu_id` FOREIGN KEY (`aluno_id`) REFERENCES `usuarios` (`usu_id`),
  ADD CONSTRAINT `fk_conexao_id` FOREIGN KEY (`conexao_id`) REFERENCES `conexao` (`conexao_id`);

--
-- Limitadores para a tabela `conexao`
--
ALTER TABLE `conexao`
  ADD CONSTRAINT `fk_aluno_id` FOREIGN KEY (`aluno_id`) REFERENCES `usuarios` (`usu_id`),
  ADD CONSTRAINT `fk_professor_id` FOREIGN KEY (`professor_id`) REFERENCES `usuarios` (`usu_id`);

--
-- Limitadores para a tabela `exercicio`
--
ALTER TABLE `exercicio`
  ADD CONSTRAINT `fk_serie_id` FOREIGN KEY (`serie_id`) REFERENCES `serie` (`serie_id`);

--
-- Limitadores para a tabela `serie`
--
ALTER TABLE `serie`
  ADD CONSTRAINT `fk_conexao_id_serie` FOREIGN KEY (`conexao_id`) REFERENCES `conexao` (`conexao_id`),
  ADD CONSTRAINT `fk_serie_usu_id` FOREIGN KEY (`aluno_id`) REFERENCES `usuarios` (`usu_id`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_nivel_id` FOREIGN KEY (`nivel_id`) REFERENCES `nivel` (`nivel_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
