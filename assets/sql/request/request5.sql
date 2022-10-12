-- Requête permettant d'afficher les scores

SELECT game.game_name as "Jeu", user.pseudo as "Joueur", score.game_difficulty as "Difficulté", score.game_score as "Score" FROM score
INNER JOIN user ON score.player_id = user.user_id
INNER JOIN game on score.game_id = game.game_id
ORDER BY game.game_name DESC, score.game_difficulty, score.game_score DESC;