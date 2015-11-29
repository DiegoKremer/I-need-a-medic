-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 29-Nov-2015 às 16:49
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `sadmbd`
--
CREATE DATABASE IF NOT EXISTS `sadmbd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sadmbd`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `codigo` smallint(3) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `inicio` smallint(2) NOT NULL,
  `fim` smallint(2) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`codigo`, `nome`, `inicio`, `fim`) VALUES
(1, 'Criança', 5, 12),
(2, 'Adolescente', 13, 18),
(3, 'Adulto', 19, 55),
(4, 'Idoso', 56, 100);

-- --------------------------------------------------------

--
-- Estrutura da tabela `doenca`
--

CREATE TABLE IF NOT EXISTS `doenca` (
  `codigo` smallint(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `sintoma_1` smallint(10) NOT NULL,
  `sintoma_2` smallint(10) DEFAULT NULL,
  `sintoma_3` smallint(10) DEFAULT NULL,
  `sintoma_4` smallint(10) DEFAULT NULL,
  `sintoma_5` smallint(10) DEFAULT NULL,
  `sintoma_6` smallint(10) DEFAULT NULL,
  `sintoma_7` smallint(10) DEFAULT NULL,
  `sintoma_8` smallint(10) DEFAULT NULL,
  `genero` varchar(9) NOT NULL,
  `categoria` smallint(3) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `sintoma_1` (`sintoma_1`),
  KEY `sintoma_2` (`sintoma_2`),
  KEY `sintoma_3` (`sintoma_3`),
  KEY `sintoma_4` (`sintoma_4`),
  KEY `sintoma_5` (`sintoma_5`),
  KEY `sintoma_6` (`sintoma_6`),
  KEY `sintoma_7` (`sintoma_7`),
  KEY `sintoma_8` (`sintoma_8`),
  KEY `categoria` (`categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `doenca`
--

INSERT INTO `doenca` (`codigo`, `nome`, `sintoma_1`, `sintoma_2`, `sintoma_3`, `sintoma_4`, `sintoma_5`, `sintoma_6`, `sintoma_7`, `sintoma_8`, `genero`, `categoria`) VALUES
(1, 'Resfriado', 3, 4, 5, NULL, NULL, NULL, NULL, NULL, 'Ambos', 3),
(2, 'Refluxo Gastroesofágico', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ambos', 3),
(3, 'Gripe', 1, 3, 4, 5, NULL, NULL, NULL, NULL, 'Ambos', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estatistica`
--

CREATE TABLE IF NOT EXISTS `estatistica` (
  `codigo` smallint(10) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(40) DEFAULT NULL,
  `idade` smallint(2) NOT NULL,
  `doenca` smallint(10) NOT NULL,
  `sintoma_1` smallint(10) NOT NULL,
  `sintoma_2` smallint(10) DEFAULT NULL,
  `sintoma_3` smallint(10) DEFAULT NULL,
  `sintoma_4` smallint(10) DEFAULT NULL,
  `sintoma_5` smallint(10) DEFAULT NULL,
  `sintoma_6` smallint(10) DEFAULT NULL,
  `sintoma_7` smallint(10) DEFAULT NULL,
  `sintoma_8` smallint(10) DEFAULT NULL,
  `genero` varchar(9) NOT NULL,
  `categoria` smallint(3) DEFAULT NULL,
  `local` varchar(15) DEFAULT NULL,
  `dataest` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `doenca` (`doenca`),
  KEY `sintoma_1` (`sintoma_1`),
  KEY `sintoma_2` (`sintoma_2`),
  KEY `sintoma_3` (`sintoma_3`),
  KEY `sintoma_4` (`sintoma_4`),
  KEY `sintoma_5` (`sintoma_5`),
  KEY `sintoma_6` (`sintoma_6`),
  KEY `sintoma_7` (`sintoma_7`),
  KEY `sintoma_8` (`sintoma_8`),
  KEY `categoria` (`categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sintoma`
--

CREATE TABLE IF NOT EXISTS `sintoma` (
  `codigo` smallint(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `descricao` varchar(140) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `sintoma`
--

INSERT INTO `sintoma` (`codigo`, `nome`, `descricao`) VALUES
(1, 'Febre', 'Elevação da temperatura do corpo humano para cima dos limites considerados normais (36 a 37,3 °C)'),
(2, 'Azia', 'Sensação de ardor (queimação), que tem início na parte posterior do esterno'),
(3, 'Coriza', 'Inflamação da mucosa nasal acompanhada eventualmente de espirros, secreção e obstrução nasal'),
(4, 'Tosse', 'A tosse é uma ação que o corpo toma para se livrar das substâncias (poeiras, bactérias, vírus, fungos e outras substâncias danosas) que estã'),
(5, 'Cansaço', 'Incapacidade muscular local para desenvolver um trabalho e sensação abrangente de falta de energia, corporal ou sistêmica');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `doenca`
--
ALTER TABLE `doenca`
  ADD CONSTRAINT `doenca_ibfk_1` FOREIGN KEY (`sintoma_1`) REFERENCES `sintoma` (`codigo`),
  ADD CONSTRAINT `doenca_ibfk_2` FOREIGN KEY (`sintoma_2`) REFERENCES `sintoma` (`codigo`),
  ADD CONSTRAINT `doenca_ibfk_3` FOREIGN KEY (`sintoma_3`) REFERENCES `sintoma` (`codigo`),
  ADD CONSTRAINT `doenca_ibfk_4` FOREIGN KEY (`sintoma_4`) REFERENCES `sintoma` (`codigo`),
  ADD CONSTRAINT `doenca_ibfk_5` FOREIGN KEY (`sintoma_5`) REFERENCES `sintoma` (`codigo`),
  ADD CONSTRAINT `doenca_ibfk_6` FOREIGN KEY (`sintoma_6`) REFERENCES `sintoma` (`codigo`),
  ADD CONSTRAINT `doenca_ibfk_7` FOREIGN KEY (`sintoma_7`) REFERENCES `sintoma` (`codigo`),
  ADD CONSTRAINT `doenca_ibfk_8` FOREIGN KEY (`sintoma_8`) REFERENCES `sintoma` (`codigo`),
  ADD CONSTRAINT `doenca_ibfk_9` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`codigo`);

--
-- Limitadores para a tabela `estatistica`
--
ALTER TABLE `estatistica`
  ADD CONSTRAINT `estatistica_ibfk_1` FOREIGN KEY (`doenca`) REFERENCES `doenca` (`codigo`),
  ADD CONSTRAINT `estatistica_ibfk_10` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`codigo`),
  ADD CONSTRAINT `estatistica_ibfk_2` FOREIGN KEY (`sintoma_1`) REFERENCES `sintoma` (`codigo`),
  ADD CONSTRAINT `estatistica_ibfk_3` FOREIGN KEY (`sintoma_2`) REFERENCES `sintoma` (`codigo`),
  ADD CONSTRAINT `estatistica_ibfk_4` FOREIGN KEY (`sintoma_3`) REFERENCES `sintoma` (`codigo`),
  ADD CONSTRAINT `estatistica_ibfk_5` FOREIGN KEY (`sintoma_4`) REFERENCES `sintoma` (`codigo`),
  ADD CONSTRAINT `estatistica_ibfk_6` FOREIGN KEY (`sintoma_5`) REFERENCES `sintoma` (`codigo`),
  ADD CONSTRAINT `estatistica_ibfk_7` FOREIGN KEY (`sintoma_6`) REFERENCES `sintoma` (`codigo`),
  ADD CONSTRAINT `estatistica_ibfk_8` FOREIGN KEY (`sintoma_7`) REFERENCES `sintoma` (`codigo`),
  ADD CONSTRAINT `estatistica_ibfk_9` FOREIGN KEY (`sintoma_8`) REFERENCES `sintoma` (`codigo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
