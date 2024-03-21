-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/08/2023 às 16:33
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `galactus`
--
CREATE DATABASE IF NOT EXISTS `galactus` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `galactus`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `artigo`
--

CREATE TABLE `artigo` (
  `idArtigo` int(11) NOT NULL,
  `usuario_idUsuario` int(11) NOT NULL,
  `menu_idMenu` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `artigo`
--

INSERT INTO `artigo` (`idArtigo`, `usuario_idUsuario`, `menu_idMenu`, `titulo`) VALUES
(1, 1, 1, 'História da Internet'),
(2, 1, 1, 'A origem do HTML e CSS'),
(3, 1, 1, 'A origem do JavaScript'),
(4, 1, 1, 'A origem do SQL'),
(5, 1, 1, 'A origem do PHP'),
(6, 1, 2, 'Aula 001 - Estrutura e Semântica do HTML5 / Parte 1'),
(7, 1, 2, 'Aula 002 - Estrutura e Semântica do HTML5 / Parte 2'),
(8, 1, 2, 'Aula 003 - Elementos do HTML5 / Parte 1'),
(9, 1, 2, 'Aula 004 - Elementos do HTML5 / Parte 2'),
(10, 1, 2, 'Aula 005 - Formulário em HTML5 / Parte 1'),
(11, 1, 2, 'Aula 006 - Formulário em HTML5 / Parte 2'),
(12, 1, 2, 'Aula 007 - Formulário em HTML5 / Parte 3'),
(13, 1, 2, 'Aula 008 - HTML5 com CSS3 / Parte 1'),
(14, 1, 2, 'Aula 009 - HTML5 com CSS3 / Parte 2'),
(15, 1, 2, 'Aula 010 - HTML5 com CSS3 / Parte 3'),
(16, 1, 11, 'Menu DropDown Horizontal com HTML5, CSS3 e jQuery'),
(17, 1, 11, 'Menu DropDown Vertical com HTML5, CSS3 e jQuery'),
(18, 1, 11, 'Menu Sanfonado com HTML5, CSS3 e jQuery'),
(19, 1, 11, 'Formulário de cadastro em PHP Orientada a Objeto e PDO com MySQL (CRUD) - Parte 1'),
(20, 1, 11, 'Formulário de cadastro em PHP Orientada a Objeto e PDO com MySQL (CRUD) - Parte 2'),
(21, 1, 11, 'Formulário de cadastro em PHP Orientada a Objeto e PDO com MySQL (CRUD) - Parte 3'),
(22, 1, 11, 'Formulário de cadastro em PHP Orientada a Objeto e PDO com MySQL (CRUD) - Parte 4'),
(23, 1, 11, 'Google Developers - Botão Seguir'),
(24, 1, 11, 'Google Developers - Botão Compartilhar'),
(25, 1, 11, 'Google Developers - Google Maps Javascript API'),
(26, 1, 11, 'Sistema de Login em PHP Orientada a Objeto e PDO com MySQL - Parte 1'),
(27, 1, 11, 'Sistema de Login em PHP Orientada a Objeto e PDO com MySQL - Parte 2'),
(28, 1, 11, 'Sistema de Login em PHP Orientada a Objeto e PDO com MySQL - Parte 3'),
(29, 1, 11, 'Formulário de contato enviando para o e-mail em PHP'),
(30, 1, 4, 'Aula 001 - JavaScript - Variáveis'),
(31, 1, 4, 'Aula 002 - JavaScript - Operadores'),
(32, 1, 4, 'Aula 003 - JavaScript - Estruturas de Decisão'),
(33, 1, 4, 'Aula 004 - JavaScript - Estruturas de Repetição'),
(34, 1, 4, 'Aula 005 - JavaScript - Array'),
(35, 1, 4, 'Aula 006 - JavaScript - Objetos'),
(36, 1, 4, 'Aula 007 - JavaScript - Funções'),
(37, 1, 4, 'Aula 008 - JavaScript - Métodos Strings'),
(38, 1, 4, 'Aula 009 - JavaScript - Objeto Date'),
(39, 1, 4, 'Aula 010 - JavaScript - Expressão Regular'),
(40, 1, 3, 'Aula 001 - Lógica de Programação - Introdução'),
(41, 1, 3, 'Aula 002 - Lógica de Programação - Variáveis e seus Tipos'),
(42, 1, 3, 'Aula 003 - Lógica de Programação - Operadores e Expressões'),
(43, 1, 3, 'Aula 004 - Lógica de Programação - Apresentando o Visualg'),
(44, 1, 3, 'Aula 005 - Lógica de Programação - Estrutura de Decisão SE-ENTÃO-SENÃO'),
(45, 1, 3, 'Aula 006 - Lógica de Programação - Estrutura de Decisão ESCOLHA-CASO'),
(46, 1, 3, 'Aula 007 - Lógica de Programação - Estrutura de Repetição ENQUANTO'),
(47, 1, 3, 'Aula 008 - Lógica de Programação - Estrutura de Repetição REPITA-ATÉ'),
(48, 1, 3, 'Aula 009 - Lógica de Programação - Estrutura de Repetição PARA'),
(49, 1, 3, 'Aula 010 - Lógica de Programação - FUNÇÃO e PROCEDIMENTO'),
(50, 1, 3, 'Aula 011 - Lógica da Programação - VETOR e MATRIZ'),
(51, 1, 5, 'Aula 001 - MySQL - Instalando o WampServer e o MySQL Workbench e criando Banco de Dados'),
(52, 1, 5, 'Aula 002 - MySQL - Linguagem de Definição de Dados - CREATE, RENAME, ALTER e DROP TABLE'),
(53, 1, 5, 'Aula 003 - MySQL - Linguagem de Manipulação de Dados - INSERT, UPDATE, DELETE e TRUNCATE'),
(54, 1, 5, 'Aula 004 - MySQL - Linguagem de Consulta de Dados - SELECT'),
(55, 1, 5, 'Aula 005 - MySQL - Linguagem de Controle de Dados - GRANT e REVOKE'),
(56, 1, 5, 'Aula 006 - MySQL - Cláusulas FROM, WHERE, ORDER BY, GROUP BY e DISTINCT'),
(57, 1, 5, 'Aula 007 - MySQL - Operadores Lógicos e Relacionais'),
(58, 1, 5, 'Aula 008 - MySQL - Funções de Agregação'),
(59, 1, 5, 'Aula 009 - MySQL - Fazendo Importação e Exportação de Dados'),
(60, 1, 5, 'Aula 010 - MySQL - Modelagem de Banco de Dados'),
(61, 1, 6, 'Aula 001 - PHP - Instruções Básicas'),
(62, 1, 6, 'Aula 002 - PHP - Variáveis e seus tipos'),
(63, 1, 6, 'Aula 003 - PHP - Operadores Aritméticos, Comparação e Lógicos'),
(64, 1, 6, 'Aula 004 - PHP - Operadores de Arrays Associativos e Arrays Multidimensionais'),
(65, 1, 6, 'Aula 005 - PHP - Estruturas de Controle - Decisão IF ELSE e SWITCH'),
(66, 1, 6, 'Aula 006 - PHP - Estruturas de Controle - Repetição WHILE e DO-WHILE'),
(67, 1, 6, 'Aula 007 - PHP - Estruturas de Controle - Repetição FOR e FOREACH'),
(68, 1, 6, 'Aula 008 - PHP - Funções'),
(69, 1, 6, 'Aula 009 - PHP - Variáveis pré-definidas'),
(70, 1, 6, 'Aula 010 - PHP - Expressão Regular'),
(71, 1, 6, 'Aula 011 - PHP - Funções para String'),
(72, 1, 11, 'Upload de Imagem em PHP Orientada a Objeto, PDO e MySQL - Parte 1'),
(73, 1, 11, 'Upload de Imagem em PHP Orientada a Objeto, PDO e MySQL - Parte 2'),
(74, 1, 11, 'Upload de Imagem em PHP Orientada a Objeto, PDO e MySQL - Parte 3'),
(75, 1, 11, 'Upload de Imagem em PHP Orientada a Objeto, PDO e MySQL - Parte 4');

-- --------------------------------------------------------

--
-- Estrutura para tabela `menu`
--

CREATE TABLE `menu` (
  `idMenu` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `menu`
--

INSERT INTO `menu` (`idMenu`, `menu`, `img`) VALUES
(1, 'Aulas de Introduções', 'Aula-de-Introducao.jpg'),
(2, 'Aulas de HTML5 e CSS3', 'Aula-de-HTML5-e-CSS3.jpg'),
(3, 'Aulas de Lógica de Progração', 'Aula-de-Logica-de-Progracao.jpg'),
(4, 'Aulas de JavaScript', 'Aula-de-JavaScript.jpg'),
(5, 'Aulas de MySQL', 'Aula-de-MySQL.jpg'),
(6, 'Aulas de PHP', 'Aula-de-PHP.jpg'),
(7, 'Aulas de Word', 'Aula-de-Word.jpg'),
(8, 'Aulas de Excel', 'Aula-de-Excel.jpg'),
(9, 'Aulas de PowerPoint', 'Aula-de-Power-Point.jpg'),
(10, 'Aulas de Access', 'Aula-de-Access.jpg'),
(11, 'Aulas de Colinha', 'Aula-de-Colinha.jpg'),
(12, 'Aulas de Photoshop', 'Aula-de-Photoshop.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`) VALUES
(1, 'FranJun');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `artigo`
--
ALTER TABLE `artigo`
  ADD PRIMARY KEY (`idArtigo`),
  ADD KEY `fk_artigo_usuario_idx` (`usuario_idUsuario`),
  ADD KEY `fk_artigo_menu_idx` (`menu_idMenu`);

--
-- Índices de tabela `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idMenu`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `artigo`
--
ALTER TABLE `artigo`
  MODIFY `idArtigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de tabela `menu`
--
ALTER TABLE `menu`
  MODIFY `idMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
