-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 12-Maio-2022 às 14:35
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd clinica`
--
CREATE DATABASE IF NOT EXISTS `bd clinica` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `bd clinica`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_cliente`
--

DROP TABLE IF EXISTS `tbl_cliente`;
CREATE TABLE IF NOT EXISTS `tbl_cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `cpf_cliente` varchar(11) COLLATE utf8_swedish_ci NOT NULL,
  `ddd_cliente` varchar(2) COLLATE utf8_swedish_ci NOT NULL,
  `Telefone_cliente` varchar(9) COLLATE utf8_swedish_ci NOT NULL,
  `email_cliente` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `data_nasc` date NOT NULL,
  `Histórico_cliente` varchar(1000) COLLATE utf8_swedish_ci NOT NULL,
  `id_endereco` int(11) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `cpf_cliente` (`cpf_cliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_consulta`
--

DROP TABLE IF EXISTS `tbl_consulta`;
CREATE TABLE IF NOT EXISTS `tbl_consulta` (
  `id_consulta` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data_consulta` date NOT NULL,
  `hora_consulta` time NOT NULL,
  `tempo_consulta` int(11) NOT NULL,
  `valor_consulta` int(11) NOT NULL,
  `descricao_consulta` varchar(1000) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id_consulta`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_endereco`
--

DROP TABLE IF EXISTS `tbl_endereco`;
CREATE TABLE IF NOT EXISTS `tbl_endereco` (
  `id_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `cep_endereco` varchar(8) COLLATE utf8_swedish_ci NOT NULL,
  `pais_endereco` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `estado_endereco` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `logradouro_endereco` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `numero_endereco` int(11) NOT NULL,
  PRIMARY KEY (`id_endereco`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `email_usuario` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `senha_usuario` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
