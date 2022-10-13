/* mettre à jour le profil une fois connecté */

-- modifier l'email
UPDATE user
SET `email` = 'blabla@gmail.com'
WHERE `email` = 'djamel@gmail.fr' AND `password` = 'abcdefg' AND `user_id` = 3;

-- modifier le mot de passe
UPDATE user
SET `password` = 'pass123'
WHERE `password` = 'abcdefg' AND `user_id` = 3;