-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 02/09/2016 às 20:42
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
(22, '1dc154a58083ad4ecbd984bf6e312adc.jpg', 'Iluminação', 'corporativo', 'iluminacao', '2016-09-02 09:46:48'),
(23, '5bc2cad509af746adf491e82b1294e94.jpg', 'imagem 01', 'corporativo', 'imagem', '2016-09-02 09:48:09'),
(24, '5d6f1d571a24bd6736244c6a31019e9f.jpg', 'Imagem 02', 'corporativo', 'imagem', '2016-09-02 09:48:34'),
(25, '34624f8fe3fe89bbc3e91667d606ccaa.jpg', 'Imagem 03', 'corporativo', 'imagem', '2016-09-02 09:48:48'),
(26, '519e5763e0dda722866be008c0b643f6.jpg', 'Imagem 04', 'corporativo', 'imagem', '2016-09-02 09:49:10'),
(27, 'f1a1d476cfa79a75066673de0d249159.jpg', 'Imagem 05', 'corporativo', 'imagem', '2016-09-02 09:50:00'),
(28, 'b8c4c59822a4674a7a17e1e3bacbe0a4.jpg', 'Imagem 06', 'corporativo', 'imagem', '2016-09-02 09:50:20'),
(29, 'e5ed5f6f6873c6aeac1a074e75800bfc.jpg', 'Imagem 07', 'corporativo', 'imagem', '2016-09-02 09:50:43'),
(30, '3a7d1ebfc03954833ee9c8c56a6e146a.jpg', 'Energia 01', 'social', 'energia', '2016-09-02 09:51:17'),
(31, 'ed313f3c6bb187b36880e2a86bb94529.jpg', 'Energia 02', 'social', 'energia', '2016-09-02 09:51:46'),
(32, '099b5616a4b9644bba0e6931d15b90d6.jpg', 'Energia 03', 'social', 'energia', '2016-09-02 09:52:03'),
(33, '01e4dd3cc5cd67f03168071f86baa0ae.jpg', 'Energia 04', 'social', 'energia', '2016-09-02 09:52:25'),
(34, 'f443dcc6487336c0fef1b939851eb299.jpg', 'Iluminação 01', 'social', 'iluminacao', '2016-09-02 09:52:51'),
(35, '35953d3cd9522474a6202425aff99301.jpg', 'Iluminação', 'social', 'iluminacao', '2016-09-02 09:53:24'),
(36, 'e71f5c62f9b8965d1317a2e1e9ec6202.jpg', 'Iluminação', 'social', 'iluminacao', '2016-09-02 09:53:48'),
(37, 'f889b1917180842e8473e2c7206bd82d.JPG', 'Iluminação', 'social', 'iluminacao', '2016-09-02 09:54:11'),
(38, '53ba209e11da405aa50bb77c24229da7.jpeg', 'Iluminação', 'social', 'iluminacao', '2016-09-02 09:54:41'),
(39, '441740379f222fdd4341a761b3d02e88.jpg', 'Iluminação', 'social', 'iluminacao', '2016-09-02 09:55:12'),
(40, '23f6e340344fc4e88d6f8d702f144c9a.jpeg', 'Imagem ', 'social', 'imagem', '2016-09-02 09:56:02'),
(41, '1af7f906425cc9280accc1ce19c33d01.jpeg', 'imagem', 'social', 'imagem', '2016-09-02 09:56:26'),
(42, '7c49562bd49c67ff17ebd787207c45e4.jpeg', 'Imagem', 'social', 'imagem', '2016-09-02 09:56:42'),
(43, 'e2c1139909a7716ff5b3bf127a9a7215.JPG', 'Som', 'social', 'sonorizacao', '2016-09-02 09:57:16');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`id_galeria`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `galerias`
--
ALTER TABLE `galerias`
  MODIFY `id_galeria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
