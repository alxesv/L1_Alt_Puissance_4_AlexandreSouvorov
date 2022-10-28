<?php

require_once '../init.php';


$email = "'" .  $_POST['email']. "'";
$password = "'" . $_POST['mot_de_passe'] . "'";

$sql = "SELECT * FROM `user` WHERE `email` = $email AND `password` = $password";

$loginStatement = $db->prepare($sql); 
$loginStatement->execute();
$result = $loginStatement->fetchAll();

if(empty($result)){
    $loginErr = "Identifiants incorrects";
    echo "<script>";
    echo 'alert("' . $loginErr;
    echo '");document.location="../login.php";</script>';
}else {
    header("Location:../index.php");
   $_SESSION['user_id'] = $result[0]["user_id"];
   $_SESSION['pseudo'] = $result[0]["pseudo"];
   $user_id = $result[0]["user_id"];
   $lastOnlineStatement = $db->prepare("UPDATE `user` SET `last_online` = CURRENT_TIMESTAMP WHERE `user_id` = $user_id");
   $lastOnlineStatement->execute();
}


?>