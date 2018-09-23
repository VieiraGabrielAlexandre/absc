-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:53870
-- Generation Time: Sep 22, 2018 at 05:01 PM
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
  `CNPJ` varchar(14) NOT NULL,
  `RAZASOCIAL` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `NOMECONTATO` varchar(50) NOT NULL,
  `SENHA` varchar(50) NOT NULL,
  `situacoe_id` int(5) NOT NULL,
  `niveis_acesso_id` int(5) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instituicao`
--

INSERT INTO `instituicao` (`CNPJ`, `RAZASOCIAL`, `EMAIL`, `NOMECONTATO`, `SENHA`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
('12344', 'teste', 'teste@teste', 'teste', '1234', 1, 2, '2018-09-22 05:09:09', '2018-09-22 05:09:09'),
('modified', 'modified', 'modified@modified', 'modified', '1234', 1, 2, '2018-09-12 04:09:24', '2018-09-12 04:09:24');

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
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(520) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `situacoe_id` int(11) NOT NULL DEFAULT '0',
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 'Gabriel', '', 'gabrielvieira840@gmail.com', '3366', 1, 1, '2018-08-29 00:00:01', '2018-08-29 21:58:01'),
(2, 'Jasmine', '', 'jaas_reis@hotmail.com', '1234', 1, 2, '2018-08-29 00:00:01', '2018-08-29 21:58:01'),
(3, 'Ricardo', '', 'ricardo.ares@globo.com', '1234', 1, 3, '2018-08-29 00:00:01', '2018-08-29 21:58:01'),
(4, 'lucas', '', 'usuarios@usuario', '1234', 1, 3, '2018-09-12 04:09:51', '2018-09-12 04:09:51'),
(5, 'TESTE', '', 'TESTE@TESTE', '1234', 1, 3, '2018-09-12 04:09:55', '2018-09-12 04:09:55'),
(6, 'teste', '', 'teste@teste', '1234', 1, 3, '2018-09-12 06:09:33', '2018-09-12 06:09:33'),
(7, 'test', '', 'teste@teste', '124', 1, 3, '2018-09-12 06:09:39', '2018-09-12 06:09:39'),
(8, 'gabriel', '', 'gabrielvieira840@gmail.com', '3366', 1, 3, '2018-09-12 06:09:17', '2018-09-12 06:09:17'),
(9, 'marcelo', '', 'marcelo@marcelo', '12345', 1, 3, '2018-09-14 11:09:36', '2018-09-14 11:09:36'),
(10, 'latre', 'hsgsg', 'sasa@sasa', '1234', 1, 3, '2018-09-18 05:09:12', '2018-09-18 05:09:12');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
