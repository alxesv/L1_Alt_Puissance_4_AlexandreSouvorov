<?php
    require_once 'init.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/myaccount.css">
    <script src="https://kit.fontawesome.com/583bdb9b50.js" crossorigin="anonymous"></script>

</head>


<body>
<?php include 'view/header.inc.php' ?>
    <main>
        <?php if(isset($_SESSION['user_id'])){?>
        <div class="bannierelogin">
            <H1 class="titrelogin">Mon espace</H1>
        </div>
        <section class="formulairesection">

            <form class="formulairelogin" action='forms/myaccount_form.php' method ="POST">
                <p> Réinitialiser l'adresse email</p>
                <input type="email" name="old_email" placeholder="Ancien email" required>

                <input type="email" name="new_email" placeholder="Nouvel email" required>

                <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>

                <button class="bouttonconnexion" type="submit">Confirmer</button>
            </form>

            <form class="formulairelogin" action='forms/myaccount_form.php' method ="POST">
                <p> Réinitialiser le mot de passe</p>
                <input type="password" name="old_password" placeholder="Ancien mot de passe" required>

                <input type="password" name="new_password" placeholder="Nouveau mot de passe" required>

                <input type="password" name="confirm_new_pass" placeholder="Confirmer nouveau mot de passe"required>

                <button class="bouttonconnexion" type="submit">Confirmer</button>

            </form>
        </section>    
        <?php }else {  ?> 
            <div class ="login">
            <h2>Connectez vous pour accéder à cette page</h2>
            <a href="login.php"><button>Se connecter</button></a>
            </div>
            <?php } ?>
    </main>
    <?php include 'view/footer.inc.php'
    ?>
<script src="assets/js/burger.js"> </script>
</body>