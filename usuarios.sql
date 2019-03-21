-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:55504
-- Generation Time: Nov 02, 2018 at 01:20 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usuarios`
--

-- --------------------------------------------------------

--
-- Table structure for table `instituicao`
--

CREATE TABLE `instituicao` (
  `CNPJ` varchar(25) CHARACTER SET latin1 NOT NULL,
  `RAZASOCIAL` varchar(50) CHARACTER SET latin1 NOT NULL,
  `EMAIL` varchar(50) CHARACTER SET latin1 NOT NULL,
  `SENHA` varchar(50) CHARACTER SET latin1 NOT NULL,
  `situacoe_id` int(5) NOT NULL,
  `niveis_acesso_id` int(5) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `telefone` varchar(50) CHARACTER SET latin1 NOT NULL,
  `celular` varchar(50) CHARACTER SET latin1 NOT NULL,
  `cep` varchar(50) CHARACTER SET latin1 NOT NULL,
  `endereco` varchar(50) CHARACTER SET latin1 NOT NULL,
  `numero` varchar(50) CHARACTER SET latin1 NOT NULL,
  `complemento` varchar(50) CHARACTER SET latin1 NOT NULL,
  `bairro` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pais` varchar(50) CHARACTER SET latin1 NOT NULL,
  `cidade` varchar(50) CHARACTER SET latin1 NOT NULL,
  `estado` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instituicao`
--

INSERT INTO `instituicao` (`CNPJ`, `RAZASOCIAL`, `EMAIL`, `SENHA`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`, `telefone`, `celular`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `pais`, `cidade`, `estado`) VALUES
('12344', 'teste', 'teste@teste', '1234', 1, 2, '2018-09-22 05:09:09', '2018-09-22 05:09:09', '', '', '', '', '', '', '', '', '', ''),
('99.999.999/9999-99', 'teste', 'testeteste@testeteste', '1234', 1, 2, '2018-11-02 01:11:19', '2018-11-02 01:11:19', '(11) 1111-1111', '', '88888-888', 'teste', '12', 'teste', 'teste', 'Brasil', 'teste', 'AC'),
('modified', 'modified', 'modified@modified', '1234', 1, 2, '2018-09-12 04:09:24', '2018-09-12 04:09:24', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `niveis_acessos`
--

CREATE TABLE `niveis_acessos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Administrador', '2018-08-29 00:00:01', '2018-08-29 21:58:01'),
(2, 'Colaborador', '2018-08-29 00:00:01', '2018-08-29 21:58:01'),
(3, 'Cliente', '2018-08-29 00:00:01', '2018-08-29 21:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(220) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(520) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `situacoe_id` int(11) NOT NULL DEFAULT '0',
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `telefone` varchar(50) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `datanascimento` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`nome`, `cpf`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`, `telefone`, `celular`, `datanascimento`, `sexo`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `pais`, `cidade`, `estado`) VALUES
('teste', '999.999.999-99', 'teste01@teste01', '1234', 1, 3, '2018-11-02 01:11:47', '2018-11-02 01:11:47', '(11) 1111-1111', '(11) 1199-9999', '99/99/9999', 'Masculino', '99999-999', 'teste', '11', 'test', 'teste', 'Brasil', 'teste', 'AC'),
('Marcelo Silva', '164.064.940-94', 'teste2@teste2', '', 1, 3, '2018-11-02 01:11:43', '2018-11-02 01:11:43', '(11) 9754-1642', '(11) 97541-6429', '30/04/1996', 'Masculino', '04920-030', 'Rua Luiz FlÃ¡vio De Almeida, 750', '6', '1', 'Jardim Herculano ', 'Brasil', 'SÃ£o Paulo', 'SP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`CNPJ`),
  ADD UNIQUE KEY `CNPJ` (`CNPJ`);

--
-- Indexes for table `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
