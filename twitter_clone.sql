-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 05:37 PM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twitter_clone`
--
CREATE DATABASE IF NOT EXISTS `twitter_clone` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `twitter_clone`;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_post` datetime NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `id_usuario`, `data_post`, `mensagem`) VALUES
(1, 1, '2019-04-28 12:50:01', 'Esse Ã© um post de teste.'),
(6, 2, '2019-04-28 13:26:14', 'Que merda em'),
(7, 1, '2019-05-24 20:16:53', 'ooi eu sou goku !!'),
(8, 3, '2019-05-24 20:17:31', 'Funciona mesmo em '),
(9, 4, '2019-05-25 10:30:56', 'ooodaosdoaso\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `relacionamentos`
--

CREATE TABLE IF NOT EXISTS `relacionamentos` (
  `id` int(11) NOT NULL,
  `id_seguidor` int(11) NOT NULL,
  `id_seguido` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `relacionamentos`
--

INSERT INTO `relacionamentos` (`id`, `id_seguidor`, `id_seguido`) VALUES
(2, 2, 1),
(7, 4, 1),
(8, 4, 2),
(9, 4, 3),
(23, 1, 4),
(24, 1, 3),
(25, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Asafe Brasil Yanez Marques', 'asafebymarques@icloud.com', 'c60519006e95e2c735512aefbef74fef'),
(2, 'Joao', 'joao@email.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Giovanni Zaghi de Freitas', 'vanni.freitas@hotmail.com', '068b60b16e59014781ee12368d6bf21b'),
(4, 'teste', 'teste@teste.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relacionamentos`
--
ALTER TABLE `relacionamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `relacionamentos`
--
ALTER TABLE `relacionamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
