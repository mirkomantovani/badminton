-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Creato il: Giu 08, 2018 alle 22:12
-- Versione del server: 5.6.34
-- Versione PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `badminton`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `club`
--

CREATE TABLE `club` (
  `id` int(6) NOT NULL,
  `creator` varchar(30) COLLATE utf8_bin NOT NULL,
  `name` varchar(10) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `score` int(11) NOT NULL,
  `color` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `club`
--

INSERT INTO `club` (`id`, `creator`, `name`, `description`, `score`, `color`) VALUES
(21, 'marcobissessur@hotmail.com', 'ihb', 'yghyi', 12, '#6e6e6e'),
(22, 'marcobissessur@hotmail.com', 'sdfsdf', 'dfsdfs', 24, '#188a00'),
(23, 'marcobissessur@hotmail.com', 'pr', '', 0, '#000000'),
(24, 'marcobissessur@hotmail.com', 'jknjkn', '', 0, '#000000');

-- --------------------------------------------------------

--
-- Struttura della tabella `clubmember`
--

CREATE TABLE `clubmember` (
  `idclub` int(6) NOT NULL,
  `idmember` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `clubmember`
--

INSERT INTO `clubmember` (`idclub`, `idmember`) VALUES
(23, 'asd@asd.it'),
(24, 'marcobissessur@hotmail.com');

-- --------------------------------------------------------

--
-- Struttura della tabella `friendrequest`
--

CREATE TABLE `friendrequest` (
  `id` int(6) NOT NULL,
  `id1` varchar(30) COLLATE utf8_bin NOT NULL,
  `id2` varchar(30) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `friendrequest`
--

INSERT INTO `friendrequest` (`id`, `id1`, `id2`, `date`) VALUES
(4, 'marcobissessur@hotmail.com', 'bissessur@hotmail.com', '2018-04-24'),
(5, 'matteo@gmail.com', 'asd@asd.it', '2018-05-08'),
(7, 'marcobissessur@hotmail.com', 'asd@asd.it', '2018-06-01');

-- --------------------------------------------------------

--
-- Struttura della tabella `friendship`
--

CREATE TABLE `friendship` (
  `id` int(6) NOT NULL,
  `date` date NOT NULL,
  `id1` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `id2` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `friendship`
--

INSERT INTO `friendship` (`id`, `date`, `id1`, `id2`) VALUES
(1, '2018-04-24', 'matteo@gmail.com', 'marcobissessur@hotmail.com'),
(2, '2018-05-31', 'marco@hotmail.com', 'marcobissessur@hotmail.com');

-- --------------------------------------------------------

--
-- Struttura della tabella `participant`
--

CREATE TABLE `participant` (
  `id` int(6) NOT NULL,
  `player` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `position` int(20) NOT NULL,
  `round2` tinyint(1) NOT NULL DEFAULT '0',
  `round3` tinyint(1) NOT NULL DEFAULT '0',
  `round4` tinyint(1) NOT NULL DEFAULT '0',
  `round5` tinyint(1) NOT NULL DEFAULT '0',
  `round6` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `participant`
--

INSERT INTO `participant` (`id`, `player`, `position`, `round2`, `round3`, `round4`, `round5`, `round6`) VALUES
(3, 'Bissessurmarxo@gmail.con', 6, 0, 0, 0, 0, 0),
(3, 'asd@asd.it', 7, 1, 0, 0, 0, 0),
(3, 'bissessur@hotmail.com', 1, 0, 0, 0, 0, 0),
(3, 'marco@hotmail.com', 4, 0, 0, 0, 0, 0),
(3, 'marcobissessur@hotmail.com', 2, 1, 1, 1, 0, 0),
(3, 'matteo@gmail.com', 8, 0, 0, 0, 0, 0),
(3, 'prova@prova.com', 3, 1, 0, 0, 0, 0),
(3, 'wer@wer.it', 5, 1, 1, 0, 0, 0),
(8, 'marcobissessur@hotmail.com', 1, 0, 0, 0, 0, 0),
(8, 'matteo@gmail.com', 2, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `rankingclub`
--

CREATE TABLE `rankingclub` (
  `id` int(6) NOT NULL,
  `position` int(6) NOT NULL,
  `idclub` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struttura della tabella `tournament`
--

CREATE TABLE `tournament` (
  `name` varchar(10) NOT NULL,
  `id` int(6) NOT NULL,
  `description` varchar(50) NOT NULL,
  `maxplayers` int(6) NOT NULL,
  `creator` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `location` varchar(50) NOT NULL,
  `male` tinyint(1) NOT NULL DEFAULT '1',
  `female` tinyint(1) NOT NULL DEFAULT '1',
  `single` tinyint(1) NOT NULL DEFAULT '1',
  `ended` tinyint(1) NOT NULL,
  `creationdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `tournament`
--

INSERT INTO `tournament` (`name`, `id`, `description`, `maxplayers`, `creator`, `location`, `male`, `female`, `single`, `ended`, `creationdate`) VALUES
('MARCO', 1, 'wesdc', 16, 'marcobissessur@hotmail.com', '', 1, 0, 0, 0, '0000-00-00'),
('prova', 3, 'ddddd', 8, 'marcobissessur@hotmail.com', '', 1, 0, 0, 1, '0000-00-00'),
('aaaa', 7, 'bbbb', 16, 'marcobissessur@hotmail.com', '', 1, 0, 0, 0, '0000-00-00'),
('cdsd', 8, 'sd', 2, 'marcobissessur@hotmail.com', '', 1, 0, 0, 1, '0000-00-00'),
('ddd', 9, '', 2, 'marcobissessur@hotmail.com', '', 1, 0, 0, 0, '2018-06-06');

-- --------------------------------------------------------

--
-- Struttura della tabella `tournamentinvite`
--

CREATE TABLE `tournamentinvite` (
  `id` int(6) NOT NULL,
  `id1` varchar(30) COLLATE utf8_bin NOT NULL,
  `id2` varchar(30) COLLATE utf8_bin NOT NULL,
  `idtournament` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `userimages`
--

CREATE TABLE `userimages` (
  `id` int(11) NOT NULL,
  `user` varchar(30) COLLATE utf8_bin NOT NULL,
  `img1` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'images/insertlogo.png',
  `img2` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'images/insertlogo.png',
  `img3` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'images/insertlogo.png',
  `img4` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'images/insertlogo.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `userimages`
--

INSERT INTO `userimages` (`id`, `user`, `img1`, `img2`, `img3`, `img4`) VALUES
(1, 'prova@prova.com', 'images/insertlogo.png', 'images/insertlogo.png', 'images/insertlogo.png', 'images/insertlogo.png'),
(2, 'marco@hotmail.com', 'images/insertlogo.png', 'images/insertlogo.png', 'images/insertlogo.png', 'images/insertlogo.png'),
(3, 'bissessur@hotmail.com', 'images/insertlogo.png', 'images/insertlogo.png', 'images/insertlogo.png', 'images/insertlogo.png'),
(4, 'matteo@gmail.com', 'images/userm.png', 'images/insertlogo.png', 'images/insertlogo.png', 'images/insertlogo.png'),
(5, 'marcobissessur@hotmail.com', 'images/userm.png', 'images/insertlogo.png', 'images/insertlogo.png', 'images/insertlogo.png'),
(6, 'asd@asd.it', 'images/insertlogo.png', 'images/insertlogo.png', 'images/insertlogo.png', 'images/insertlogo.png'),
(7, 'wer@wer.it', 'images/insertlogo.png', 'images/insertlogo.png', 'images/insertlogo.png', 'images/insertlogo.png');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `psw` text COLLATE utf8_bin NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `surname` varchar(30) COLLATE utf8_bin NOT NULL,
  `user_avatar` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'images/userm.png',
  `user_country` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `user_shortbio` text COLLATE utf8_bin,
  `gender` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `birth` date NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `registration_date` date NOT NULL,
  `score` int(11) NOT NULL,
  `won` int(11) NOT NULL,
  `lost` int(11) NOT NULL,
  `club` int(6) NOT NULL,
  `pwdnn` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`email`, `psw`, `name`, `surname`, `user_avatar`, `user_country`, `user_shortbio`, `gender`, `birth`, `isAdmin`, `registration_date`, `score`, `won`, `lost`, `club`, `pwdnn`) VALUES
('Bissessurmarxo@gmail.con', '3bf056b06d5d02ca750d3102ab13654b', 'Hdhd', 'Djdujd', 'images/userm.png', NULL, NULL, NULL, '1985-12-19', 0, '2018-04-19', 0, 0, 3, 0, ''),
('asd@asd.it', '76d80224611fc919a5d54f0ff9fba446', 'sdsad', 'fwefwe', 'images/userm.png', NULL, NULL, NULL, '0766-07-06', 0, '2018-05-04', 1, 0, 3, 23, ''),
('bissessur@hotmail.com', '1058a42a81e5252c76cb308bcd6a0214', 'qw', 'qw', 'images/userm.png', NULL, NULL, NULL, '2323-03-22', 0, '2018-04-20', 0, 0, 3, 0, ''),
('marco@hotmail.com', '1058a42a81e5252c76cb308bcd6a0214', 'Maa', 'Bs', 'images/userm.png', NULL, NULL, NULL, '1212-12-12', 0, '2018-04-20', 0, 0, 3, 0, ''),
('marcobissessur@hotmail.com', '1058a42a81e5252c76cb308bcd6a0214', 'Marco', 'Bissessur', 'uploads/marcobissessur@hotmail.combb.PNG', '', '', 'Male', '1999-10-21', 0, '2018-04-05', 12, 3, 0, 24, ''),
('matteo@gmail.com', '1058a42a81e5252c76cb308bcd6a0214', 'Matteo', 'Badminton', 'images/userm.png', NULL, NULL, NULL, '1998-12-22', 0, '2018-04-20', 0, 0, 3, 0, ''),
('prova@prova.com', '6e6bc4e49dd477ebc98ef4046c067b5f', 'prova', 'prima', 'images/userm.png', NULL, NULL, NULL, '2112-11-11', 0, '2018-04-10', 10, 0, 3, 0, ''),
('wer@wer.it', '22c276a05aa7c90566ae2175bcc2a9b0', 'wer', 'wer1', 'images/userm.png', NULL, NULL, NULL, '0076-07-06', 0, '2018-05-04', 30, 0, 3, 0, '');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creator` (`creator`);

--
-- Indici per le tabelle `clubmember`
--
ALTER TABLE `clubmember`
  ADD PRIMARY KEY (`idclub`,`idmember`),
  ADD KEY `idmember` (`idmember`);

--
-- Indici per le tabelle `friendrequest`
--
ALTER TABLE `friendrequest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id1` (`id1`),
  ADD KEY `id2` (`id2`);

--
-- Indici per le tabelle `friendship`
--
ALTER TABLE `friendship`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id1` (`id1`,`id2`),
  ADD KEY `id2` (`id2`);

--
-- Indici per le tabelle `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id`,`player`),
  ADD KEY `fk_player` (`player`);

--
-- Indici per le tabelle `rankingclub`
--
ALTER TABLE `rankingclub`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idclub` (`idclub`);

--
-- Indici per le tabelle `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creator` (`creator`);

--
-- Indici per le tabelle `tournamentinvite`
--
ALTER TABLE `tournamentinvite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id1` (`id1`),
  ADD KEY `id2` (`id2`),
  ADD KEY `idtournament` (`idtournament`);

--
-- Indici per le tabelle `userimages`
--
ALTER TABLE `userimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emailimg` (`user`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD KEY `club` (`club`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `club`
--
ALTER TABLE `club`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT per la tabella `friendrequest`
--
ALTER TABLE `friendrequest`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT per la tabella `friendship`
--
ALTER TABLE `friendship`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la tabella `rankingclub`
--
ALTER TABLE `rankingclub`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `tournament`
--
ALTER TABLE `tournament`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT per la tabella `tournamentinvite`
--
ALTER TABLE `tournamentinvite`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `userimages`
--
ALTER TABLE `userimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `clubmember`
--
ALTER TABLE `clubmember`
  ADD CONSTRAINT `clubmember_ibfk_1` FOREIGN KEY (`idclub`) REFERENCES `club` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clubmember_ibfk_2` FOREIGN KEY (`idmember`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `friendrequest`
--
ALTER TABLE `friendrequest`
  ADD CONSTRAINT `fk_id1` FOREIGN KEY (`id1`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id2` FOREIGN KEY (`id2`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `friendship`
--
ALTER TABLE `friendship`
  ADD CONSTRAINT `fk_friend1` FOREIGN KEY (`id1`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_friend2` FOREIGN KEY (`id2`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `participant`
--
ALTER TABLE `participant`
  ADD CONSTRAINT `fk_part` FOREIGN KEY (`id`) REFERENCES `tournament` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_player` FOREIGN KEY (`player`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `rankingclub`
--
ALTER TABLE `rankingclub`
  ADD CONSTRAINT `rankingclub_ibfk_1` FOREIGN KEY (`idclub`) REFERENCES `club` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `tournament`
--
ALTER TABLE `tournament`
  ADD CONSTRAINT `fk_creator` FOREIGN KEY (`creator`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `tournamentinvite`
--
ALTER TABLE `tournamentinvite`
  ADD CONSTRAINT `tournamentinvite_ibfk_1` FOREIGN KEY (`idtournament`) REFERENCES `tournament` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tournamentinvite_ibfk_2` FOREIGN KEY (`id1`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tournamentinvite_ibfk_3` FOREIGN KEY (`id2`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `userimages`
--
ALTER TABLE `userimages`
  ADD CONSTRAINT `fkimg` FOREIGN KEY (`user`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
