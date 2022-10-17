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
    <link rel="stylesheet" href="assets/css/incription.css">    
    <link rel="stylesheet" href="assets/css/myaccount.css">
    <link rel="stylesheet" href="assets/css/incription.css">
    <script src="https://kit.fontawesome.com/583bdb9b50.js" crossorigin="anonymous"></script>

</head>


<body>
<?php include 'view/header.inc.php' ?>
    <main>
        <div class="bannierelogin">
            <H1 class="titrelogin">Mon espace</H1>
        </div>
        <section class="formulairesection">

            <form class="formulairelogin">
                <p> Réinitialiser l'adresse email</p>
                <label for="EMAIL"></label>
                <input type="text" name="Ancien email" placeholder="Ancien email"></input>

                <label for="EMAIL"></label>
                <input type="text" name="Nouvel email" placeholder="Nouvel email"></input>

                <label for="Mot de passe "></label>
                <input type="password" name="Mot de passe " placeholder="Mot de passe"></input>

                <button class="bouttonconnexion" type="submit">Confirmer</button>
            </form>

            <form class="formulairelogin">
                <p> Réinitialiser le mot de passe</p>
                <label for="Ancien mot de passe "></label>
                <input type="password" name="Ancien mot de passe " placeholder="Ancien mot de passe"></input>

                <label for="Mot de passe "></label>
                <input type="password" name="Nouveau mot de passe" placeholder="Nouveau mot de passe"></input>

                <button class="bouttonconnexion" type="submit">Confirmer</button>

            </form>
        </section>        
    </main>
    

    <?php include 'view/footer.inc.php'
    ?>

</body>