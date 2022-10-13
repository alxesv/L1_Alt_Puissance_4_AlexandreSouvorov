-- Afficher les messages des dernières 24 heures

SELECT `message`.`message`, user.pseudo, last_message_time, case when user.user_id = 2 then 'Vrai' else 'Faux' end as estExpediteur
FROM `message`
INNER JOIN user ON `message`.author_id = user.user_id
WHERE last_message_time > DATE_SUB(NOW(), INTERVAL 24 HOUR) AND last_message_time <= NOW();