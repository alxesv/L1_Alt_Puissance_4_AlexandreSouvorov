<?php
require_once '../init.php';

$email = $_POST['email'];
$pseudo = $_POST['pseudo'];
$password = $_POST['mdp'];


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // check si email valide
    $emailErr = "Format d'email invalide";
    echo "<script>";
    echo 'alert("' . $emailErr;
    echo '");document.location="../inscription.php";</script>';
}
else if ($password !== $_POST["confirmmdp"]){ // check si les mdp correspondent
    $confirmmdpErr= "Les mots de passes ne correspondent pas";
    echo "<script>";
    echo 'alert("' . $confirmmdpErr;
    echo '");document.location="../inscription.php";</script>';
}
else if(strlen($pseudo) < 4) { // check si le pseudo fait au moins 4 caractères
    $pseudoErr = "Votre pseudo doit faire au minimum 4 caractères.";
    echo "<script>";
    echo 'alert("' . $pseudoErr;
    echo '");document.location="../inscription.php";</script>';
}
else if (!preg_match("~^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$~",$password)) { // check les règles du mdp
    $mdpErr = "Votre mot de passe doit faire au minimum 8 caractères, contenir une majuscule, une minuscule, un chiffre et un caractère spécial.";
    echo "<script>";
    echo 'alert("' . $mdpErr;
    echo '");document.location="../inscription.php";</script>';
}
else {


$sql = "INSERT INTO `user`(`email`, `password`, `pseudo`, `register`) VALUES (?, ?, ?, CURRENT_TIMESTAMP)";

$registerStatement = $db->prepare($sql); 

if($registerStatement->execute([$email, $password, $pseudo])){
    echo "<script>";
    echo 'alert("' . "Register succesful";
    echo '");document.location="../index.php";</script>';
    // envoyer un mail (pour de faux, le smtp est pas setup)
    $smtp = false;
    if($smtp){
    $message = "Bonjour $pseudo ! \r\n Nous vous confirmons votre inscription à The Power of Memory.\r\nMerci et à bientôt.";

    $message = wordwrap($message, 70, "\r\n");

    mail("$email", 'Inscription validée !', $message);
    }

}else{
    echo "<script>";
    echo 'alert("' . "Register failed";
    echo '");document.location="../inscription.php";</script>';
}

}
?>
