/* enregistrer le score de mon joueur */

/*
SELECT as test FROM score
WHERE game_difficulty = "difficulty" AND game_id = 1 AND player_id = 2

IF EXISTS test 
THEN

UPDATE score
SET game_score = 75, game_date = NOW()
WHERE game_difficulty = "difficulty" AND game_id = 1 AND player_id = 2;

ELSE */
INSERT INTO `score` (`game_id`,`player_id`,`game_difficulty`,`game_score`,`game_date`) VALUES
(1,2,"facile", 75, NOW());