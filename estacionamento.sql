-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 02, 2021 at 05:36 PM
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
-- Database: `estacionamento`
--

-- --------------------------------------------------------

--
-- Table structure for table `veiculos`
--

CREATE TABLE `veiculos` (
  `id` int(30) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `preco` float NOT NULL,
  `vagas` int(11) NOT NULL,
  `destaque` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `veiculos`
--

INSERT INTO `veiculos` (`id`, `nome`, `categoria`, `descricao`, `preco`, `vagas`, `destaque`) VALUES
(1, 'Carro', 'Carros', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales justo eu mauris tincidunt, id dignissim magna elementum. Sed euismod efficitur tortor eu facilisis. Proin augue nunc, luctus hendrerit velit sit amet, iaculis porta velit. In vulputate tristique urna. Praesent tempus ipsum augue, sit amet tristique lacus semper cursus.', 12, 290, 0),
(2, 'Moto', 'Motos', 'Lorem ipsum dolor sit amet.', 29, 690, 1),
(3, 'Moto', 'Motos', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n                Ut sodales justo eu mauris tincidunt, id dignissim magna elementum.\n                Sed euismod efficitur tortor eu facilisis. Proin augue nunc', 26, 700, 0),
(4, 'Bicicleta', 'Bicicletas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales justo eu mauris tincidunt, id dignissim magna elementum.', 16, 680, 1),
(5, 'Bicicleta', 'Bicicletas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 14, 620, 0),
(6, 'Bicicleta', 'Bicicletas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n                Ut sodales justo eu mauris tincidunt, id dignissim magna elementum.\n                Sed euismod efficitur tortor eu facilisis. Proin augue nunc, luctus hendrerit velit sit amet, iaculis porta velit.\n                In vulputate tristique urna. Praesent tempus ipsum augue.', 19, 720, 0),
(7, 'Bicicleta', 'Bicicletas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n                Ut sodales justo eu mauris tincidunt, id dignissim magna elementum.\n                Sed euismod efficitur tortor eu facilisis.', 15, 520, 1),
(8, 'Carro', 'Carros', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales justo eu mauris tincidunt, id dignissim magna elementum. Sed euismod efficitur. tortor eu facilisis. Proin augue nunc, luctus hendrerit velit sit amet, iaculis porta velit. In vulputate tristique urna. Praesent tempus ipsum augue, sit amet tristique lacus semper cursus.', 555, 340, 0),
(9, 'Carro', 'Estacionamento Cobertos', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales justo eu.', 11, 180, 0),
(10, 'Carro', 'Carros', 'Lorem ipsum', 14, 400, 0),
(11, 'Moto', 'Motos', 'Lorem ipsum dolor.', 28, 890, 1),
(13, 'teste', 'estacionamento cobertos', '111111111112222', 123, 321, 1),
(14, 'alexandre Lemke Peres', 'carros', 'HJFYEAGFHJGYHG', 1994, 1001, 1),
(15, 'alexandre Lemke Peres', 'carros', 'HJFYEAGFHJGYHG', 75, 321, 1),
(16, 'Listagem nova', 'bicicletas', 'HJFYEAGFHJGYHG3', 75, 1001, 1),
(17, 'AListagem nova', 'bicicletas', 'HJFYEAGFHJGYHG3', 75, 1001, 1),
(18, 'testetesteteste123', 'carros', 'jjjjjjjjj', 444, 444, 1),
(19, 'teste', 'carros', 'testando o teste', 1994, 144, 0),
(20, 'ESCONDER MODAL', 'carros', 'HJFYEAGFHJGYHG', 75, 144, 1),
(21, 'MODAL', 'carros', 'HJFYEAGFHJGYHG', 6000, 11111, 1),
(22, 'sssssss', 'carros', 'HJFYEAGFHJGYHG', 75, 144, 1),
(23, 'alexandre Lemke Peres', 'estacionamento cobertos', 'HJFYEAGFHJGYHG3', 1994, 11111, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
