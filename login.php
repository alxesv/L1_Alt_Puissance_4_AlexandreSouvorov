<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <script src="https://kit.fontawesome.com/583bdb9b50.js" crossorigin="anonymous"></script>
</head>

<body>
<?php include 'view/header.inc.php' ?>

    <main>
        <div class="bannierelogin">
            <H1 class="titrelogin">CONNEXION</H1>
        </div>
        <section class="formulairesection">

            <form class="formulairelogin" action='forms/login_form.php' method ='POST'>

                <input type="email" name="email" id = "email" placeholder="Email" required></input>

                <label for="password"></label>
                <input type="password" name="mot_de_passe" id = "password" placeholder="Mot de passe"></input>

                <button class="bouttonconnexion" type="submit"> Connexion</button>
            </form>
        </section>

    </main>

  <!-- FOOTER -->
  <?php include 'view/footer.inc.php'
    ?>
<!-- FOOTER -->
<script src="assets/js/burger.js"> </script>
</body>

</html>