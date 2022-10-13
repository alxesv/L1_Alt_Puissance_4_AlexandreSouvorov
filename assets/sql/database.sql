DROP DATABASE IF EXISTS memory;
CREATE DATABASE IF NOT EXISTS memory;
USE memory;

SET SQL_MODE = `NO_AUTO_VALUE_ON_ZERO`;
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Création table user

DROP TABLE IF EXISTS `user`;

CREATE TABLE IF NOT EXISTS `user` (
    `user_id` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `email` varchar(50) NOT NULL UNIQUE,
    `password` varchar(400) NOT NULL,
    `pseudo` varchar(50) NOT NULL UNIQUE,
    `register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `last_online` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- Création table score

DROP TABLE IF EXISTS `score`;

CREATE TABLE IF NOT EXISTS `score` (
    `score_id` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `player_id`int(10) NOT NULL,
    `game_id`int(10) NOT NULL,
    `game_difficulty`enum('facile', 'intermédiaire', 'difficile', 'expert'),
    `game_score`int(10) NOT NULl,
    `game_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- Création table message

DROP TABLE IF EXISTS `message`;

CREATE TABLE IF NOT EXISTS `message`(
`message_id` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`game_id` int(10) NOT NULL,
`author_id` int(10) NOT NULL,
`message` varchar(40) NOT NULL,
`last_message_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- Création table jeu

DROP TABLE IF EXISTS `game`;

CREATE TABLE IF NOT EXISTS `game` (
    `game_id` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `game_name`varchar(30) NOT NULL
);

-- Création des Foreign Keys

ALTER TABLE `message`
ADD CONSTRAINT fk_game_message
FOREIGN KEY (game_id)
REFERENCES game(game_id);

ALTER TABLE `message`
ADD CONSTRAINT fk_author
FOREIGN KEY (author_id)
REFERENCES user(user_id);

ALTER TABLE `score`
ADD CONSTRAINT fk_player
FOREIGN KEY (player_id)
REFERENCES user(user_id);

ALTER TABLE `score`
ADD CONSTRAINT fk_game_score
FOREIGN KEY (game_id)
REFERENCES game(game_id);