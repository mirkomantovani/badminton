-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Creato il: Apr 24, 2018 alle 17:39
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
(14, 'marcobissessur@hotmail.com', 'ms', 'weefw', 60, '#26c200'),
(15, 'marcobissessur@hotmail.com', 'wf', 'feef', 35, '#ffffff'),
(16, 'marcobissessur@hotmail.com', 'eeee', 'eefvef', 90, '#223232'),
(17, 'marcobissessur@hotmail.com', 'clu1', 'asdsd', 0, '#4c2a37');

-- --------------------------------------------------------

--
-- Struttura della tabella `clubmember`
--

CREATE TABLE `clubmember` (
  `idclub` int(6) NOT NULL,
  `idmember` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(4, 'marcobissessur@hotmail.com', 'bissessur@hotmail.com', '2018-04-24');

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
(1, '2018-04-24', 'matteo@gmail.com', 'marcobissessur@hotmail.com');

-- --------------------------------------------------------

--
-- Struttura della tabella `participant`
--

CREATE TABLE `participant` (
  `id` int(6) NOT NULL,
  `player` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `single` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `tournament`
--

INSERT INTO `tournament` (`name`, `id`, `description`, `maxplayers`, `creator`, `location`, `male`, `female`, `single`) VALUES
('MARCO', 1, 'wesdc', 16, 'marcobissessur@hotmail.com', '', 1, 0, 0),
('givu', 2, 'wesdc', 16, 'marcobissessur@hotmail.com', '', 1, 0, 0);

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
-- Struttura della tabella `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` text NOT NULL,
  `user_lastname` text NOT NULL,
  `user_avatar` varchar(255) NOT NULL,
  `user_shortbio` text,
  `user_username` varchar(255) NOT NULL,
  `user_longbio` text,
  `user_facebook` varchar(255) DEFAULT NULL,
  `user_twitter` varchar(255) DEFAULT NULL,
  `user_linkedin` varchar(255) DEFAULT NULL,
  `user_stumbleupon` varchar(255) DEFAULT NULL,
  `user_pinterest` varchar(255) DEFAULT NULL,
  `user_googleplus` varchar(255) DEFAULT NULL,
  `user_website` varchar(255) DEFAULT NULL,
  `user_dob` date DEFAULT NULL,
  `user_profession` text,
  `user_gender` varchar(255) DEFAULT NULL,
  `user_maritialstatus` varchar(255) DEFAULT NULL,
  `user_address` text,
  `user_backgroundpicture` varchar(255) NOT NULL,
  `user_joindate` date NOT NULL,
  `user_country` varchar(255) DEFAULT NULL,
  `user_skype` varchar(255) DEFAULT NULL,
  `user_github` varchar(255) DEFAULT NULL,
  `user_youtube` varchar(255) DEFAULT NULL,
  `user_vimeo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(4, 'matteo@gmail.com', 'uploads/matteo@gmail.comtyui.JPG', 'images/insertlogo.png', 'images/insertlogo.png', 'images/insertlogo.png'),
(5, 'marcobissessur@hotmail.com', 'uploads/marcobissessur@hotmail.comyufv.png', 'images/insertlogo.png', 'uploads/marcobissessur@hotmail.comjbuho.JPG', 'uploads/marcobissessur@hotmail.commatteo@gmail.comsearch.png');

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
  `club` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`email`, `psw`, `name`, `surname`, `user_avatar`, `user_country`, `user_shortbio`, `gender`, `birth`, `isAdmin`, `registration_date`, `score`, `won`, `lost`, `club`) VALUES
('Bissessurmarxo@gmail.con', '3bf056b06d5d02ca750d3102ab13654b', 'Hdhd', 'Djdujd', 'uploads/Bissessurmarxo@gmail.conddd.JPG', NULL, NULL, NULL, '1985-12-19', 0, '2018-04-19', 0, 0, 0, 0),
('bissessur@hotmail.com', '1058a42a81e5252c76cb308bcd6a0214', 'qw', 'qw', 'images/userm.png', NULL, NULL, NULL, '2323-03-22', 0, '2018-04-20', 0, 0, 0, 0),
('marco@hotmail.com', '1058a42a81e5252c76cb308bcd6a0214', 'Maa', 'Bs', 'images/userm.png', NULL, NULL, NULL, '1212-12-12', 0, '2018-04-20', 0, 0, 0, 0),
('marcobissessur@hotmail.com', '1058a42a81e5252c76cb308bcd6a0214', 'Marco', 'Bissessur', 'uploads/marcobissessur@hotmail.comEFE7881C-083F-4DE9-8514-6040394423B8.jpeg', NULL, NULL, NULL, '1999-10-21', 0, '2018-04-05', 0, 0, 0, 0),
('matteo@gmail.com', '1058a42a81e5252c76cb308bcd6a0214', 'Matteo', 'Badminton', 'uploads/matteo@gmail.commarcobissessur@hotmail.comEFE7881C-083F-4DE9-8514-6040394423B8.jpeg', NULL, NULL, NULL, '1998-12-22', 0, '2018-04-20', 0, 0, 0, 0),
('prova@prova.com', '6e6bc4e49dd477ebc98ef4046c067b5f', 'prova', 'prima', 'images/userm.png', NULL, NULL, NULL, '2112-11-11', 0, '2018-04-10', 0, 0, 0, 0);

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
-- Indici per le tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_username` (`user_username`);

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
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT per la tabella `friendrequest`
--
ALTER TABLE `friendrequest`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT per la tabella `friendship`
--
ALTER TABLE `friendship`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT per la tabella `rankingclub`
--
ALTER TABLE `rankingclub`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `tournament`
--
ALTER TABLE `tournament`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la tabella `tournamentinvite`
--
ALTER TABLE `tournamentinvite`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `userimages`
--
ALTER TABLE `userimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
