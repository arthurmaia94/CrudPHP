-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 02-Mar-2021 às 00:52
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `am_crud_project`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `donations`
--

CREATE TABLE `donations` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `nascimento` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cadastro` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `intervalo` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ValorDoacao` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FormaPagamento` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cep` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rua` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `donations`
--

INSERT INTO `donations` (`id`, `nome`, `email`, `cpf`, `telefone`, `nascimento`, `cadastro`, `intervalo`, `ValorDoacao`, `FormaPagamento`, `cep`, `rua`, `bairro`, `cidade`, `estado`, `numero`) VALUES
(10, ' Gabrielly Kamilly Almada', ' ggabriellykamillyalmada@amure.com.br', ' 57084-411', '(82) 99848-6001', '1944-10-03', '01/03/2021', 'unico', '450', 'Debito', ' 57084-411', ' Quadra A', ' Benedito Bentes', ' Maceió', ' AL', '750'),
(11, 'José Leandro Caldeira', ' joseleandrocaldeira-93@verdana.com.br', ' 88372-802', ' (49) 3596-3848', '1969-03-09', '01/03/2021', 'bismestral', '1500', 'Credito', ' 88372-802', ' Rua G', ' Gravatá', ' Navegantes', ' SC', '996'),
(12, 'Tiago Kaique Farias', ' tiagokaiquefarias_@lajescobre.com', '60331-640', ' (85) 98293-1347', '1941-09-27', '01/03/2021', 'semestral', '450', 'Credito', '60331-640', 'Rua Senador Virgílio Távora', 'Barra do Ceará', 'Fortaleza', 'CE', '258'),
(13, ' Marcos Davi Ferreira', ' marcosdaviferreira@inglesasset.com.br', '71593-240', ' (61) 2748-2623', '2002-02-01', '02/03/2021', 'bismestral', '300', 'Credito', '71593-240', 'Quadra 318', 'Del Lago II (Itapoã)', 'Brasília', 'DF', '927'),
(15, ' Bernardo Diego Thales Carvalho', ' bbernardo.diego@guiandotelecom.com.br', '57045-407', ' (82) 2839-7797', '1954-11-10', '02/03/2021', 'anual', '1850', 'Debito', '57045-407', 'Rua Juarez Pereira Costa', 'Barro Duro', 'Maceió', 'AL', '624');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
