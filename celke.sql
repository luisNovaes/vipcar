-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/11/2017 às 00:12
-- Versão do servidor: 5.7.14
-- Versão do PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(220) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(220) DEFAULT NULL,
  `endereco` varchar(320) DEFAULT NULL,
  
  `placa` varchar(20) DEFAULT NULL,
  `fabricante` varchar(210) DEFAULT NULL,
  `modelo` varchar(220) DEFAULT NULL,
  `ano` varchar(10) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  
  `servico` varchar(110) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `observacao` varchar(110) DEFAULT NULL,
  
  `title` varchar(220) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL
  
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(1,   'Reuniao', 'Agendado', '2018-11-23 09:00:00', '2018-11-23 10:00:00'),
(2,  'Palestra', 'Agendado', '2018-11-13 14:00:00', '2018-11-13 15:00:00'),
(3, 'Reuniao 1', 'Agendado', '2018-11-23 08:00:00', '2018-11-23 09:00:00'),
(4, 'Reuniao 3', 'Agendado', '2018-11-23 10:00:00', '2018-11-23 11:00:00'),
(5, 'Reuniao 4', 'Agendado', '2018-11-23 11:00:00', '2018-11-13 12:00:00'),
(6, 'Reuniao 5', 'Agendado', '2018-11-23 13:00:00', '2018-11-23 14:00:00'),
(7, 'Reuniao 6', 'Agendado', '2018-11-23 14:00:00', '2018-11-23 15:00:00'),
(8, 'Reuniao 7', 'Agendado', '2018-11-23 16:00:00', '2018-11-23 17:00:00');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
