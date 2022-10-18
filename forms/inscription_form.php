<?php
require_once '../includes/database.inc.php';

$email = $_POST['email'];
$pseudo = $_POST['pseudo'];
$password = $_POST['mdp'];


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // check si email valide
    $emailErr = "Format d'email invalide";
    echo "<script>";
    echo 'alert("' . $emailErr;
    echo '")</script>';
}
else if ($password !== $_POST["confirmmdp"]){ // check si les mdp correspondent
    $confirmmdpErr= "Les mots de passes ne correspondent pas";
    echo "<p>$confirmmdpErr</p>";
}
else if(strlen($pseudo) < 4) { // check si le pseudo fait au moins 4 caractères
    $pseudoErr = "Votre pseudo doit faire au minimum 4 caractères.";
    echo "<p>$pseudoErr</p>";
}
else if (!preg_match("~^\S*(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=\S*[\W])[a-zA-Z\d]{8,}\S*$~",$password)) { // check les règles du mdp
    $mdpErr = "Votre mot de passe doit faire au minimum 8 caractères, contenir une majuscule, une minuscule, un chiffre et un caractère spécial.";
    echo "<p>$mdpErr</p>";
}
else {


$sql = "INSERT INTO `user`(`email`, `password`, `pseudo`, `register`) VALUES (?, ?, ?, CURRENT_TIMESTAMP)";

$registerStatement = $db->prepare($sql); 

if($registerStatement->execute([$email, $password, $pseudo])){
    echo "<p>Register succesfull</p>";
    // à faire : envoyer mail à l'utilisateur

}else{
    echo  "<p>Register failed</p>";
}

}
?>