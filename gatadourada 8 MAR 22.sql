-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Mar-2022 às 12:48
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gatadourada`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adicionais`
--

CREATE TABLE `adicionais` (
  `idAdicional` int(11) NOT NULL,
  `nomeAdicional` varchar(45) DEFAULT NULL,
  `valorAdicional` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adicionais`
--

INSERT INTO `adicionais` (`idAdicional`, `nomeAdicional`, `valorAdicional`) VALUES
(2, 'Acelerador', '15.00'),
(3, 'Banho de lua', '30.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `idAgendamento` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `url` varchar(300) NOT NULL,
  `allDay` varchar(11) NOT NULL,
  `status` int(11) NOT NULL,
  `color` varchar(300) NOT NULL,
  `observacao` varchar(50) NOT NULL,
  `valor` float NOT NULL,
  `forma_pagamento` varchar(200) NOT NULL,
  `clientes_id` int(11) NOT NULL,
  `servicos_idServico` int(11) NOT NULL,
  `adicionais_idAdicionais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`idAgendamento`, `title`, `start`, `end`, `url`, `allDay`, `status`, `color`, `observacao`, `valor`, `forma_pagamento`, `clientes_id`, `servicos_idServico`, `adicionais_idAdicionais`) VALUES
(40, 'Rafael', '2022-03-11 11:00:00', '2022-03-11 12:00:00', 'agenda/editar/40', '', 1, '', 'OK', 90, 'avista', 2, 9, 2),
(43, 'Rodimara', '2022-03-12 14:00:00', '2022-03-12 18:00:00', 'agenda/editar/43', '', 1, '', 'pago', 165, 'cartao_credito', 4, 6, 2),
(44, 'Rodimara', '2022-03-14 14:00:00', '2022-03-14 15:00:00', 'agenda/editar/44', '', 1, '', 'ok', 145, 'cartao_credito', 4, 5, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(45) NOT NULL,
  `dataNasc` date DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `dataAlt` timestamp NULL DEFAULT current_timestamp(),
  `genero` char(1) NOT NULL,
  `numero` varchar(14) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `profissao` varchar(45) DEFAULT NULL,
  `fototipo` varchar(11) DEFAULT NULL,
  `bronzeAntes` tinyint(4) DEFAULT NULL,
  `pele` varchar(45) DEFAULT NULL,
  `respiratorio` tinyint(4) DEFAULT NULL,
  `respiratorioDesc` varchar(45) DEFAULT NULL,
  `hipertensao` tinyint(4) DEFAULT NULL,
  `degenerativa` tinyint(4) DEFAULT NULL,
  `alergia` tinyint(4) DEFAULT NULL,
  `alergiaDesc` varchar(45) DEFAULT NULL,
  `ferimentoTatuagem` tinyint(4) DEFAULT NULL,
  `ferimentoTatuagemDesc` varchar(45) DEFAULT NULL,
  `hematoma` tinyint(4) DEFAULT NULL,
  `hematomaDesc` varchar(45) DEFAULT NULL,
  `medicacao` tinyint(4) DEFAULT NULL,
  `medicacaoDesc` varchar(45) DEFAULT NULL,
  `transpiracao` tinyint(4) DEFAULT NULL,
  `transpiracaoDesc` varchar(45) DEFAULT NULL,
  `depilacao` tinyint(4) DEFAULT NULL,
  `depilacaoDesc` int(11) DEFAULT NULL,
  `vitiligo` tinyint(4) DEFAULT NULL,
  `vitiligoDesc` varchar(45) DEFAULT NULL,
  `psoriase` tinyint(4) DEFAULT NULL,
  `autorizacao` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nomeCliente`, `dataNasc`, `idade`, `dataAlt`, `genero`, `numero`, `email`, `profissao`, `fototipo`, `bronzeAntes`, `pele`, `respiratorio`, `respiratorioDesc`, `hipertensao`, `degenerativa`, `alergia`, `alergiaDesc`, `ferimentoTatuagem`, `ferimentoTatuagemDesc`, `hematoma`, `hematomaDesc`, `medicacao`, `medicacaoDesc`, `transpiracao`, `transpiracaoDesc`, `depilacao`, `depilacaoDesc`, `vitiligo`, `vitiligoDesc`, `psoriase`, `autorizacao`) VALUES
(2, 'Rafael', '2022-03-16', 21, '2022-03-03 05:24:43', '', '985338955', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Rodimara', '2021-11-15', 0, '2022-03-08 05:35:11', 'F', '(51) 89784-654', 'rodi@hotmail.com', '', '', 0, '', 0, '', 0, 0, 0, '', 0, '', 0, '', 0, '', 0, '', 0, 0, 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `idServico` int(11) NOT NULL,
  `nomeServico` varchar(45) DEFAULT NULL,
  `valorServico` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`idServico`, `nomeServico`, `valorServico`) VALUES
(5, 'Power Bronze', '130.00'),
(6, 'Jet Bronze', '150.00'),
(7, 'Sessão 30 min', '45.00'),
(8, 'Sessão 40 min', '60.00'),
(9, 'Sessão 50 min', '75.00'),
(10, 'Pacote 5 Sessões 30 min', '200.00'),
(11, 'Pacote 5 Sessões 40 min', '275.00'),
(12, 'Pacote 5 Sessões 50 min', '350.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `nomeUsuario` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adicionais`
--
ALTER TABLE `adicionais`
  ADD PRIMARY KEY (`idAdicional`);

--
-- Índices para tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`idAgendamento`),
  ADD KEY `fk_agenda_clientes_idx` (`clientes_id`),
  ADD KEY `fk_agenda_servicos1_idx` (`servicos_idServico`),
  ADD KEY `fk_agenda_adicionais1_idx` (`adicionais_idAdicionais`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`idServico`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adicionais`
--
ALTER TABLE `adicionais`
  MODIFY `idAdicional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `idAgendamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `idServico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `fk_agenda_adicionais1` FOREIGN KEY (`adicionais_idAdicionais`) REFERENCES `adicionais` (`idAdicional`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agenda_clientes` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agenda_servicos1` FOREIGN KEY (`servicos_idServico`) REFERENCES `servicos` (`idServico`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
