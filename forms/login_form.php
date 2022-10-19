<?php

    print_r($_POST['Email']);die();
    $loginValid = $db->prepare('SELECT *  FROM `user` WHERE `password` > 8 and  '); 
    $loginValid -> execute(); 
    $login = $loginValid ->fetchAll();
?>




