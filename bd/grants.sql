-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 05, 2021 at 07:45 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grants`
--
CREATE DATABASE IF NOT EXISTS `grants` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `grants`;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE `data` (
  `id` int(8) NOT NULL,
  `areas` varchar(3) NOT NULL,
  `title` varchar(50) NOT NULL,
  `matter` varchar(3) NOT NULL,
  `abstract` varchar(200) NOT NULL,
  `access` int(5) DEFAULT NULL,
  `path` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `areas`, `title`, `matter`, `abstract`, `access`, `path`, `link`, `type`) VALUES
(7, 'au', 'Ditadura militar', 'his', 'A Ditadura Militar no Brasil foi um regime autoritário que teve início com o golpe militar em 31 de março de 1964, com a deposição do presidente João Goulart.', 2, '', 'DeZxaw7CMko', 'video'),
(15, 'au', 'Era vargas', 'his', 'A Era Vargas é a fase da história brasileira em que Getúlio Vargas governou o país de 1930 a 1945. Foi forçado a renunciar à presidência após um ultimato dos militares.', 7, '', 'sc2KBgUCEYg', 'video'),
(17, 'au', 'Urbanização', 'geo', 'O processo de urbanização no Brasil tem início no século XX com o êxodo rural. Ou seja, o deslocamento de pessoas do campo para as cidades em busca de melhores condições de vida.', 0, '', '4ayDPXtQR5w', 'video'),
(18, 'au', 'Globalização', 'geo', 'A globalização é um dos termos mais frequentemente empregados para descrever a atual conjuntura do sistema capitalista e sua consolidação no mundo.', 1, '', 'CpkjTkCFOjQ', 'video'),
(19, 'au', '2° guerra mundial', 'his', 'A Segunda Guerra Mundial estendeu-se de 1939 até 1945, resultando na morte de 60 milhões a 70 milhões de pessoas.', 4, '', 'mrR2Qc53gQs', 'video'),
(22, 'au', 'Ligações químicas', 'qui', 'Ligações químicas são feitas por átomos para terem maior estabilidade e assim formarem diversos compostos. Essas ligações podem ser iônicas, covalentes ou metálicas.', 1, '', 'S6PcueZI_h4', 'video'),
(24, 'au', 'Climatologia', 'geo', 'A climatologia nada mais é do que o estudo do clima, sendo uma integração das condições de tempo num determinado lugar e por um período de trinta anos.', 1, '', 'IcPs10RBb1Q', 'video'),
(25, 'au', 'Sistema imunitário', 'bio', 'O sistema imunológico, também chamado de sistema imune, é o que garante proteção ao nosso corpo, evitando que substâncias estranhas e patógenos afetem negativamente nossa saúde.', 0, '', 'ihcxP12RM18', 'video'),
(26, 'au', 'Reações orgânicas', 'qui', 'Reações orgânicas são as reações que acontecem entre compostos orgânicos. Há vários tipos de reações, que ocorrem mediante a quebra de moléculas dando origem a novas ligações.', 1, '', 'HUd-LE3KZhE', 'video'),
(27, 'au', 'Genética', 'bio', 'Genética, falando de maneira ampla, é o ramo da ciência que estuda a transmissão de características entre seres com algum grau de hereditariedade.', 0, '', '-YkrP8Tnt9Y', 'video'),
(28, 'au', 'Química orgânica', 'qui', 'A química orgânica é a parte do campo do conhecimento que estuda todos os compostos que têm em sua base a estrutura de átomos de carbono e outros elementos presentes em organismos vivos...', 0, '', 'Q_5rB0iF6oI', 'video'),
(29, 'au', 'Resistores', 'fis', 'Resistores são dispositivos elétricos que compõem circuitos com a finalidade básica de transformar energia elétrica em calor ou mudar o valor da ddp.', 0, '', 'UllxuhpKwVc', 'video'),
(30, 'au', 'Colorimetria', 'fis', 'Calorimetria é o ramo da Física que estuda as trocas de calor e os fenômenos relacionados com a transferência dessa forma de energia entre os corpos.', 1, '', 'YP25ygrGfjM', 'video'),
(33, 'au', 'Ecologia', 'bio', 'A Ecologia é a ciência que estuda a interação entre os seres vivos e o ambiente em que vivem. ... A palavra Ecologia vem do grego, onde Oikos significa &quot;casa&quot;...', 1, '', 'TsclSi3nNsI', 'video'),
(34, 'au', 'Energia, trabalho e potência', 'fis', 'Trabalho – O trabalho é toda atividade feita por um corpo que está sob uma força. Além da força, é necessário também um deslocamento (d). Quanto maior o deslocamento, maior o trabalho.', 2, NULL, '7IcuTJyT1zw', 'video'),
(35, 'at', 'Globalização', 'geo', '.', 4, 'GLOBALIZACAO1638729751.pdf', NULL, 'pdf'),
(36, 'at', 'URBANIZAÇÃO', 'geo', '.', 2, 'URBANIZACAO1638729971.pdf', NULL, 'pdf'),
(37, 'at', 'CLIMATOLOGIA', 'geo', '.', 0, 'CLIMATOLOGIA1638730196.pdf', NULL, 'pdf'),
(38, 'at', '2 GUERRA MUNDIAL', 'his', '.', 0, '2_GUERRA_MUNDIAL1638730331.pdf', NULL, 'pdf'),
(39, 'at', 'ERA VARGAS', 'his', '.', 0, 'ERA_VARGAS1638732453.pdf', NULL, 'pdf'),
(40, 'at', 'DITADURA MILITAR', 'his', '.', 0, 'DITADURA_MILITAR1638732500.pdf', NULL, 'pdf'),
(41, 'at', 'ECOLOGIA', 'bio', '.', 0, 'ECOLOGIA1638732539.pdf', NULL, 'pdf'),
(42, 'at', 'GENÉTICA', 'bio', '.', 0, 'GENETICA1638732562.pdf', NULL, 'pdf'),
(43, 'at', 'LIGAÇÕES QUÍMICAS', 'qui', '.', 0, 'LIGACOES_QUIMICAS1638732594.pdf', NULL, 'pdf'),
(44, 'at', 'QUÍMICA ORGÂNICA', 'qui', '.', 0, 'QUIMICA_ORGANICA1638732619.pdf', NULL, 'pdf'),
(45, 'at', 'REAÇÕES ORGÂNICAS', 'qui', '.', 0, 'REACOES_ORGANICAS1638732656.pdf', NULL, 'pdf'),
(46, 'at', 'RESISTORES', 'fis', '.', 0, 'RESISTORES1638732709.pdf', NULL, 'pdf'),
(47, 'at', 'CALORIMETRIA', 'fis', '.', 0, 'CALORIMETRIA1638732724.pdf', NULL, 'pdf'),
(48, 'at', 'ENERGIA, TRABALHO E POTÊNCIA', 'fis', '.', 0, 'ENERGIA,_TRABALHO_E_POTENCIA1638732754.pdf', NULL, 'pdf'),
(49, 'at', 'SISTEMA IMUNOLÓGICO', 'bio', '.', 0, 'SISTEMA_IMUNOLOGICO1638732851.pdf', NULL, 'pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birth` date DEFAULT NULL,
  `series` int(1) NOT NULL,
  `sex` char(1) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `qtdAccess` int(10) NOT NULL DEFAULT '0',
  `registrationDate` int(15) DEFAULT NULL,
  `lastAcess` int(15) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `birth`, `series`, `sex`, `password`, `email`, `photo`, `qtdAccess`, `registrationDate`, `lastAcess`, `active`, `is_admin`) VALUES
(1, 'Fabiano Mendes', '2004-01-21', 3, 'M', '$2y$10$nPXFWuNczWyHfM9t8xn9KeMS1DDcxmFvD2edLvzXIC0ZxozqrZlKm', 'fabiano@grants.com', '1.jpg', 12, 1625500706, 1638733392, 1, 1),
(2, 'Millena', '2003-05-10', 3, 'F', '$2y$10$D5x4YLfQ1uXbkWYAUs9aMee1lks.QwCrS/vpaSrGz8jwgQSvMMxdC', 'millena@grants.com', NULL, 0, 1625504306, NULL, 1, 0),
(3, 'Admin', '2021-09-05', 3, 'M', '$2y$10$XOs3DhYxOjC3.bVBHHH1FOLjkQfwEe8YqP1XjaSop5Mhl30moCjQ.', 'admin@grants.com', '3.png', 12, 1638693716, 1638702630, 1, 1),
(4, 'alert(\"Oii\")', '2003-10-04', 3, 'M', '$2y$10$0cowo.qJkeCAUNptD..RJOl/s1J40xH5OVYrqnZqEC9aovDvbjbCS', 'alvaro@grants.com', '4.jpg', 0, 1625504306, NULL, 1, 0),
(5, 'Deyvson', NULL, 3, 'M', '$2y$10$vOFp.YDPZXfbOxKiDjTuQegs.uSit30SzHEgsZtZ0394XBxr..Hd2', 'deyvson@grants.com', NULL, 0, 1625504306, NULL, 1, 0),
(6, 'Teste Grants', '2000-02-28', 2, 'M', '$2y$10$Zuxw0YdjZsabnEba0uvM9eZM21mljXrUW5VvyFFJtNBRpSXiqIOcO', 'teste@grants.com', '6.png', 0, 1625504306, NULL, 1, 0),
(7, 'Default', '2005-05-20', 1, 'M', '$2y$10$MGCOaFTqvsjvrHTDIEwPBei4OymReM2T5DgkwWlEVJaFyIEuJtGaK', 'default@grants.com', 'default_male.png', 0, 1625504306, NULL, 1, 0),
(8, 'Default Female', '1999-08-10', 3, 'F', '$2y$10$TOFBQ30vg8yw.ixbG1Mzs.82ILWuePceVcOASG9xBWS5rqTZIfIAi', 'defaultFemale@grants.com', 'default_female.png', 0, 1625504306, NULL, 1, 0),
(9, 'Default outro', '2015-10-21', 2, 'O', '$2y$10$r92wOu8CKb1sOauZhFSh8OMvBTg/53SlKmYf4SXJhJtcSiMeVKQT2', 'defaultoutro@grants.com', NULL, 0, 1625504306, NULL, 1, 0),
(10, 'Novo Usuário', '2001-05-15', 2, 'M', '$2y$10$Kp38b4EXqlYDto/lMDl9DOAumS3tfMV0GdWfr/CzfGN7RTK.BKsUq', 'novousuario@gmail.com', 'default_male.png', 0, 1638694522, 1638695147, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
