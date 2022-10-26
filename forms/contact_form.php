<?php
    require_once '../init.php';

    $email = $_POST['email'];
    $name = $_POST['name'];
    $sujet = $_POST['sujet'];
    $text = $_POST['text'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // check si email valide
        $emailErr = "Format d'email invalide. Veuillez vérifier le formulaire";
        echo "<script>";
        echo 'alert("' . $emailErr;
        echo '");document.location="../contact.php";</script>';
    }
    else if(strlen($text) < 15) { // check si le texte fait au moins 15 caractères
        $textErr = "Votre message doit faire au minimum 15 caractères. Veuillez vérifier le formulaire";
        echo "<script>";
        echo 'alert("' . $textErr;
        echo '");document.location="../contact.php";</script>';
    }else{
        echo "<script>";
        echo 'alert("' . "Message envoyé !";
        echo '");document.location="../index.php";</script>';

        // reception du mail (pour de faux, le smtp est pas setup)
        $smtp = false;
        if($smtp){
        $message = "Envoyé par : " . $email . " Message : " . $text;

        $message = wordwrap($message, 70, "\r\n");

        mail("boitereception@memory.fr", "Mail de $name", $message);
        }
        }
?>