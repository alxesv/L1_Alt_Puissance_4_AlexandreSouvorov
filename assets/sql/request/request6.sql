-- recherche de score, filtrage possible 

SELECT game.game_name as "Jeu", user.pseudo as "Joueur", score.game_difficulty as "DifficultÃ©", score.game_score as "Score" score.game_date as "Date" FROM score
INNER JOIN user ON score.player_id = user.user_id
INNER JOIN game on score.game_id = game.game_id
WHERE game.game_name = 'The power of memory'
AND user.pseudo = 'alex'
AND score.game_difficulty = 'facile'

ORDER BY game.game_name ASC, score.game_difficulty, score.game_score;