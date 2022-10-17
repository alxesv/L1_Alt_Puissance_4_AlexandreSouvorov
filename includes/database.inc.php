<?php
try {
$db = new PDO(
    'mysql:host=localhost;dbname=memory;charset=utf8',
    'root',
    'root'
);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


/*           -- Exemple d'utilisation et de requete


            $memoryStatement = $db->prepare('SELECT * FROM user'); -- Préparation de la requete

            $memoryStatement ->execute(); -- Execution de la requete

            $users = $memoryStatement->fetchAll(); -- Récupérer les données sous forme de tableau

            -- Afficher les données (boucle sur le tableau)

            foreach ($users as $user) {
                ?>
                    <p><?php echo $user['pseudo']; ?></p>
                    <?php
                        }
*/

?>