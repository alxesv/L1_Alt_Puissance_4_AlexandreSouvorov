<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/inscription.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="https://kit.fontawesome.com/583bdb9b50.js" crossorigin="anonymous"></script>
    <title>Inscription</title> 
</head>
<body>
    
    
    <!--Menu-->    
    <?php include 'view/header.inc.php' ?>

    

    <main>

        <!--titre de la page avec une image en background inclut dans le css-->
        <div class="bannierelogin">
            <h1 class="titrelogin">Inscription</H1>
        </div>


        <!--bloc formulaire d'inscription-->
        <section class="form-inscription">


        
             <form class="form-note" method="post" action="" enctype="multipart/form-data">
        
                <label for="email"></label>
                <input class="form-email"  type="email" id="email" name="email" placeholder="Email"><br>

                <label for="pseudo"></label>
                <input class="form-pseudo" type="text" id="pseudo" name="pseudo" required placeholder="Pseudo"><br>
             
                <label for="mdp"></label>
                <input class="form-mdp" type="password" id="mdp" name="mdp" placeholder="Mot de passe"><br>
             
                <label for="confirmmdp"></label>
                <input class="form-confirm" type="password" id="confirmpassword" name="confirmmdp" placeholder="Confirmer mot de passe"><br>
             
     
                <input class="button-inscription" type="submit" value="Inscription">
             </form>
         </section>


    </main>
    
   
    
<!-- FOOTER -->
<?php 
 include 'view/footer.inc.php'
    ?>
           


<!-- FOOTER -->

</body>
</html>