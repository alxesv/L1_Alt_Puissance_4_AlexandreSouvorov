<?php
    require_once '../init.php';
    $user_id = $_SESSION['user_id'];
    if(isset($_POST['old_password'])){
    $old_pass = $_POST['old_password'];
    $new_pass = $_POST['new_password'];
    $confirm_new_pass = $_POST['confirm_new_pass'];
    };
    if(isset($_POST['old_email'])){
    $old_email = $_POST['old_email'];
    $new_email = $_POST['new_email'];
    $password = $_POST['mot_de_passe'];
    $sql = "SELECT `email`, `password` FROM `user` WHERE `user_id` = $user_id";
    $userInfoStatement = $db->prepare($sql);
    $userInfoStatement->execute();
    $userInfo = $userInfoStatement->fetchAll();
    };

    // Update password
    
    if(isset($_POST['old_password'])){
        if ($confirm_new_pass !== $new_pass){ // check si les mdp correspondent
            $confirmmdpErr= "Les mots de passes ne correspondent pas";
            echo "<script>";
            echo 'alert("' . $confirmmdpErr;
            echo '");document.location="../myaccount.php";</script>';
        }elseif(!preg_match("~^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$~",$new_pass)){
            $mdpErr = "Votre mot de passe doit faire au minimum 8 caractères, contenir une majuscule, une minuscule, un chiffre et un caractère spécial.";
            echo "<script>";
            echo 'alert("' . $mdpErr;
            echo '");document.location="../myaccount.php";</script>';
        }else{

    $passwordStatement = $db->prepare("UPDATE user
    SET `password` = '$new_pass'
    WHERE `password` = '$old_pass' AND `user_id` = $user_id");
    if($passwordStatement->execute()){
        echo "<script>";
        echo 'alert("' . "Changement de mot de passe complété";
        echo '");document.location="../index.php";</script>';
    }else{
        echo "<script>";
        echo 'alert("' . "Erreur lors du changement de mot de passe";
        echo '");document.location="../myaccount.php";</script>';
    };
    
        }

    }

    // Update email
    if(isset($_POST['old_email'])){
        if (!filter_var($new_email, FILTER_VALIDATE_EMAIL)) { // check si email valide
            $emailErr = "Format d'email invalide";
            echo "<script>";
            echo 'alert("' . $emailErr;
            echo '");document.location="../myaccount.php";</script>';
        }elseif($userInfo[0]['email'] !== $old_email){
            echo "<script>";
            echo 'alert("' . "Votre ancienne adresse mail ne correspond pas";
            echo '");document.location="../myaccount.php";</script>';
        }elseif($userInfo[0]['password'] !== $password){
            echo "<script>";
            echo 'alert("' . "Mauvais mot de passe";
            echo '");document.location="../myaccount.php";</script>';
        }
        else{

    $emailStatement = $db->prepare("UPDATE user
    SET `email` = '$new_email'
    WHERE `email` = '$old_email' AND `password` = '$password' AND `user_id` = $user_id");

    if($emailStatement->execute()){
        echo "<script>";
        echo 'alert("' . "Changement d'email complété";
        echo '");document.location="../index.php";</script>';
    }else{
        echo "<script>";
        echo 'alert("' . "Erreur lors du changement d'email";
        echo '");document.location="../myaccount.php";</script>';
    };

        }

    }
?>