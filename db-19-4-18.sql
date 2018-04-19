SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `club` (
  `id` int(6) NOT NULL,
  `creator` varchar(30) COLLATE utf8_bin NOT NULL,
  `name` varchar(10) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `country` varchar(30) COLLATE utf8_bin NOT NULL,
  `score` int(11) NOT NULL,
  `color` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `club` (`id`, `creator`, `name`, `description`, `country`, `score`, `color`) VALUES
(14, 'marcobissessur@hotmail.com', 'ms', 'weefw', '', 60, '#26c200'),
(15, 'marcobissessur@hotmail.com', 'wf', 'feef', '', 35, '#ffffff'),
(16, 'marcobissessur@hotmail.com', 'eeee', 'eefvef', '', 90, '#223232');

CREATE TABLE `clubmember` (
  `idclub` int(6) NOT NULL,
  `idmember` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `friendrequest` (
  `id` int(6) NOT NULL,
  `id1` varchar(30) COLLATE utf8_bin NOT NULL,
  `id2` varchar(30) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `friendship` (
  `id` int(6) NOT NULL,
  `date` date NOT NULL,
  `id1` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `id2` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `participant` (
  `id` int(6) NOT NULL,
  `player` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `rankingclub` (
  `id` int(6) NOT NULL,
  `position` int(6) NOT NULL,
  `idclub` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

CREATE TABLE `tournament` (
  `id` int(6) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `description` varchar(50) NOT NULL,
  `maxplayers` int(6) NOT NULL,
  `creator` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `d/s` tinyint(1) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tournamentinvite` (
  `id` int(6) NOT NULL,
  `id1` varchar(30) COLLATE utf8_bin NOT NULL,
  `id2` varchar(30) COLLATE utf8_bin NOT NULL,
  `idtournament` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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

CREATE TABLE `users` (
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `psw` text COLLATE utf8_bin NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `surname` varchar(30) COLLATE utf8_bin NOT NULL,
  `user_avatar` varchar(255) COLLATE utf8_bin NOT NULL,
  `user_country` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `user_shortbio` text COLLATE utf8_bin,
  `gender` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `birth` date NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `user_age` date NOT NULL,
  `score` int(11) NOT NULL,
  `won` int(11) NOT NULL,
  `lost` int(11) NOT NULL,
  `club` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `users` (`email`, `psw`, `name`, `surname`, `user_avatar`, `user_country`, `user_shortbio`, `gender`, `birth`, `isAdmin`, `user_age`, `score`, `won`, `lost`, `club`) VALUES
('marcobissessur@hotmail.com', '1058a42a81e5252c76cb308bcd6a0214', 'Marco', 'Bissessur', 'images/userm.png', NULL, NULL, NULL, '1999-10-21', 0, '2018-04-05', 0, 0, 0, 0),
('prova@prova.com', '6e6bc4e49dd477ebc98ef4046c067b5f', 'prova', 'prima', '', NULL, NULL, NULL, '2112-11-11', 0, '2018-04-10', 0, 0, 0, 0);


ALTER TABLE `club`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creator` (`creator`);

ALTER TABLE `clubmember`
  ADD PRIMARY KEY (`idclub`,`idmember`),
  ADD KEY `idmember` (`idmember`);

ALTER TABLE `friendrequest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id1` (`id1`),
  ADD KEY `id2` (`id2`);

ALTER TABLE `friendship`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id1` (`id1`,`id2`),
  ADD KEY `id2` (`id2`);

ALTER TABLE `participant`
  ADD PRIMARY KEY (`id`,`player`),
  ADD KEY `fk_player` (`player`);

ALTER TABLE `rankingclub`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idclub` (`idclub`);

ALTER TABLE `tournament`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creator` (`creator`);

ALTER TABLE `tournamentinvite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id1` (`id1`),
  ADD KEY `id2` (`id2`),
  ADD KEY `idtournament` (`idtournament`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_username` (`user_username`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD KEY `club` (`club`);


ALTER TABLE `club`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
ALTER TABLE `friendrequest`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
ALTER TABLE `friendship`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
ALTER TABLE `rankingclub`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
ALTER TABLE `tournament`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
ALTER TABLE `tournamentinvite`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `clubmember`
  ADD CONSTRAINT `clubmember_ibfk_1` FOREIGN KEY (`idclub`) REFERENCES `club` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clubmember_ibfk_2` FOREIGN KEY (`idmember`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `friendrequest`
  ADD CONSTRAINT `fk_id1` FOREIGN KEY (`id1`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id2` FOREIGN KEY (`id2`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `friendship`
  ADD CONSTRAINT `fk_friend1` FOREIGN KEY (`id1`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_friend2` FOREIGN KEY (`id2`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `participant`
  ADD CONSTRAINT `fk_part` FOREIGN KEY (`id`) REFERENCES `tournament` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_player` FOREIGN KEY (`player`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `rankingclub`
  ADD CONSTRAINT `rankingclub_ibfk_1` FOREIGN KEY (`idclub`) REFERENCES `club` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `tournament`
  ADD CONSTRAINT `fk_creator` FOREIGN KEY (`creator`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `tournamentinvite`
  ADD CONSTRAINT `tournamentinvite_ibfk_1` FOREIGN KEY (`idtournament`) REFERENCES `tournament` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tournamentinvite_ibfk_2` FOREIGN KEY (`id1`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tournamentinvite_ibfk_3` FOREIGN KEY (`id2`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
