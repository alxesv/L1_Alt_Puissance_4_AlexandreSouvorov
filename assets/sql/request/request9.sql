-- Afficher les messages des dernières 24 heures

SELECT `message`.`message` as 'message', user.pseudo as 'auteur', message_time as 'time', case when user.user_id = 2 then 'Vrai' else 'Faux' end as estExpediteur
FROM `message`
INNER JOIN user ON `message`.author_id = user.user_id
WHERE message_time > DATE_SUB(NOW(), INTERVAL 24 HOUR) AND message_time <= NOW();