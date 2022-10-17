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
<footer class="footer1">

    <div class="footer-display">

     

        <div class="foot" >
                <h1 class="title-footer">Information</h1>

                <p class="sentence">Contacter notre équipe ! </p>
                <div class="contact">
                    <div class="contact-phone">
                            <h4 class="telephone"> Tel :</h4>
                            <p class="contact-num">06 01 02 03 04</p>
                    </div>
                
                
                
        
                    <div class="mail">
                            <h4 class="contact-mail"> Email : </h4>
                            <p class="contact-num"> support.projet@hotmail.fr</p>

                    </div>

                    <div class="localisation">
                            <h4 class="contact-location">Location : </h4>
                            <p class="contact-num">Paris</p>

                    </div>

                    <ul class="contact-icone">
                        <li><a class="link-social" href="https://fr-fr.facebook.com/"><i class="fa-brands fa-square-facebook fa-2xl "></i></a></li>
                        <li><a class="link-social" href="https://www.google.com/search"><i class="fa-brands fa-square-google-plus fa-2xl"></i></a></li>
                        <li><a class="link-social" href="https://www.pinterest.fr/"><i class="fa-brands fa-square-pinterest fa-2xl "></i></a></li>
                        <li><a class="link-social" href="https://www.instagram.com/?hl=fr"><i class="fa-brands fa-square-instagram fa-2xl "></i></a></li>
                        <li><a class="link-social" href="https://twitter.com/?lang=fr"><i class="fa-brands fa-square-twitter fa-2xl "></i></a></li>
                    </ul>   
                </div>
        </div>


            




        
        <div class="foot2">
                <h1 class="title-footer2">Power of memory</h1>
                <ul class="footer-li">
                    <li class="help"><a class="lien" href="memory.html">Jouer !</a> </li>
                    <li class="help"><a class="lien2" href="scores.html">Scores</a></li>
                    <li class="help"><a class="lien3" href="contact.html">Contacter</a></li>
                </ul>

        </div>

    </div>

    
        <div class ="contact-copyright">
            <p class="footer-copy">Copyright<i class="fa-sharp fa-solid fa-copyright"></i> 2022 tous droits réservés</p>
        </div>

    
</footer>
           


<!-- FOOTER -->

</body>
</html>