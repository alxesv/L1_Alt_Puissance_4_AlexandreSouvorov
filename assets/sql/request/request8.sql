-- envoi de message sur le chat

INSERT INTO `message` (`game_id`, `author_id`, `message` , `message_time`) VALUES 
( '1', '1', 'je suis meilleur que toi !' , CURRENT_TIMESTAMP ),
( '1' , '2', 'tes nul', CURRENT_TIMESTAMP ),
( '1', '3', 'bien joué !' , CURRENT_TIMESTAMP ) ;