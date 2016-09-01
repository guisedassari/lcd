-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 01/09/2016 às 16:20
-- Versão do servidor: 10.1.16-MariaDB
-- Versão do PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_lcd`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `galerias`
--

CREATE TABLE `galerias` (
  `id_galeria` int(11) NOT NULL,
  `imagem` varchar(45) DEFAULT NULL,
  `label` varchar(45) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `subcategoria` varchar(45) DEFAULT NULL,
  `data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `galerias`
--

INSERT INTO `galerias` (`id_galeria`, `imagem`, `label`, `categoria`, `subcategoria`, `data`) VALUES
(1, 'a0a05aaef429fafb416046477e3191e3.jpg', 'Teste', 'social', 'sonorizacao', '2016-08-30 16:47:06'),
(2, '41da235452f6b08165eb1cfa95772997.jpg', 'asdfasdf', 'corporativo', 'sonorizacao', '2016-08-30 16:58:23'),
(3, '421053a3981285a39c7c5d2eb0a4e1d2.jpg', 'asdfasdf', 'corporativo', 'iluminacao', '2016-08-30 17:22:18'),
(4, '62d1304084c35e8f882ab6414ea93ebf.jpg', 'asdfasdf', 'corporativo', 'iluminacao', '2016-08-30 17:22:28'),
(6, '62a8fc0aaa7e08a34d1e2afac546f5fc.jpg', 'asdfasdfasdf', 'social', 'sonorizacao', '2016-08-30 17:22:44'),
(7, '9e18d2a2df3af444dda2d10d1fa3053a.png', 'asdfasdfasdf', 'corporativo', 'sonorizacao', '2016-08-30 17:22:53'),
(8, '72a8e89985974ec7ae563efdde96ec8e.jpg', 'asdfasdfasdf', 'corporativo', 'iluminacao', '2016-08-30 17:23:02'),
(9, '68a0b9dbb9d80393eb28d9c14ead8ced.jpg', 'asdfasdfasdfasd', 'corporativo', 'sonorizacao', '2016-08-30 17:23:13'),
(10, '21e10cab094d0cd5820d5515970a34d7.png', 'asdfasdfasdf', 'corporativo', 'iluminacao', '2016-08-30 17:23:32'),
(11, '788a08cbd61be5a2a09c27af3bfa9e11.jpg', 'asdfasdfasdf', 'corporativo', 'sonorizacao', '2016-08-30 17:23:40'),
(12, 'f25106b6821f0747535c45d7abc5e948.png', 'adsfasdfasdf', 'social', 'imagem', '2016-08-30 17:24:09'),
(13, 'd1abb2b198e55c222a1994ac1ae81aab.jpg', 'asdfasfasdf', 'social', 'iluminacao', '2016-08-30 17:24:21'),
(14, 'ca17b28b99a9f848ccb2f48925a6fc68.jpg', 'asdfasdfasfasdf', 'social', 'sonorizacao', '2016-08-31 15:14:50'),
(15, '62ec8d3f98c4d681354dbba44a2610f2.jpg', 'asdfasdfasdf', 'corporativo', 'imagem', '2016-08-31 17:39:12'),
(16, 'fec8148c9feb70973327dd8a3913733b.jpg', 'asdfasfasdf', 'corporativo', 'energia', '2016-08-31 17:39:27'),
(17, '403e7a2f5b323dfa377b339f1919fffd.jpg', 'asdfasfasdfasdf', 'corporativo', 'energia', '2016-08-31 17:39:39'),
(18, '4c074584f13be53367378a9b1b0f5206.jpg', 'afsdfasdfasdfasdf', 'social', 'energia', '2016-09-01 09:59:30'),
(19, 'd221b7adb80e16cde60eb8075b4d2e8e.jpg', 'asdfasdfasdfasfasdf', 'social', 'energia', '2016-09-01 09:59:41'),
(20, 'c9d10493bbc9134540040fe1745b123b.jpg', 'dfasdfasfasdf', 'social', 'sonorizacao', '2016-09-01 10:25:48'),
(21, 'b61cd1e6ff49bace89c2fac97d48e34b.jpg', 'kljlçkjklçjl', 'social', 'sonorizacao', '2016-09-01 10:26:04');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `senha`) VALUES
(1, 'admin', '123456');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`id_galeria`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `galerias`
--
ALTER TABLE `galerias`
  MODIFY `id_galeria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;