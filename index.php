<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/section.css">
    <link rel="icon" href="assets/images/favicon.jpg"> 
    <script src="https://kit.fontawesome.com/583bdb9b50.js" crossorigin="anonymous"></script>
    <title>The Power Of Memory</title>
</head>

<body>
    <!-- HEADER -->
    <div class="banniere">
    <?php include 'view/header.inc.php' ?>
     <section class="titreheader">
        <h2 class="titredebannieres">BIENVENUE DANS NOTRE STUDIOS ! </h2>
        <h3 class="soustitre">Venez challenger les cerveaux les plus agiles !</h3>
        <a href="memory.html"><button class="bouttonjouer"> Jouer !</button></a>
    </section></div> 


    <!-- HEADER -->

    <!-- MAIN -->
    <main>


        <!-- 3 cartes -->
        <section class="card_section">
            <div class="cards">
                <img src="http://placekitten.com/g/470/300" alt="">
                <img src="http://placekitten.com/g/200/300" alt="">
                <img src="http://placekitten.com/g/120/300" alt="">
            </div>
            <div class="card-text">
                <p>01</p>
                <div>
                    <h3>Anime</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam nam deserunt eos pariatur soluta itaque ipsa minima, facere saepe atque officia ducimus error optio enim voluptatum aspernatur odio voluptatem voluptatibus, et modi. Dolor neque nemo nam nesciunt alias officia fugit!</p>
                </div>
                <p>02</p>
                <div>
                    <h3>Dragon</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ipsam exercitationem tempore, officiis asperiores deserunt corrupti magnam voluptatibus, eligendi, in tempora impedit quibusdam maiores dolorum quod suscipit itaque libero distinctio.</p>
                </div>
                <p>03</p>
                <div>
                    <h3>People</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt dolore consequatur quidem nobis, necessitatibus repudiandae asperiores iusto maiores et ex at eos ipsum esse tempora harum officiis laboriosam cum vel?</p>
                </div>
            </div>
        </section>


        <!-- Statistiques -->
        <section class="stats_section">
            <img src="http://placekitten.com/g/450/300" alt="">
            <div class="stats">
                <div class="row_1">
                    <div id="games_played" class="stat_box">
                        <p>500</p> <span>Parties jouées</span> 
                    </div>
                    <div id="best_time" class="stat_box">
                        <p>4s</p> <span>Temps record<nspa > 
                    </div>
                </div>
                <div class="row_2">
                    <div id="players_online" class="stat_box">
                        <p>32235</p> <span>Joueurs connectés</span> 
                    </div>
                    <div id="registered_players" class="stat_box">
                        <p>53653</p> <span>Joueurs enregistrés</span> 
                    </div>
                </div>
            </div>
        </section>


        <!-- Notre équipe -->
        <section class="team_section">
            <h2>Notre équipe</h2>
            <h3>Lorem ipsum dolor sit amet.</h3>
            <img src="assets/images/text-separator.png" alt="">
            <div class="team_members_box">
                <div class="member">
                    <img src="assets/images/shikamaru.png" alt="">
                    <p>Alexandre</p>
                    <p>Développeur</p>
                    <p><i class="fa-brands fa-square-facebook"></i> <i class="fa-brands fa-square-twitter"></i> <i
                            class="fa-brands fa-square-pinterest"></i></p>
                </div>
                <div class="member">
                    <img src="assets/images/leorio.jpg" alt="">
                    <p>Baudouin</p>
                    <p>Développeur</p>
                    <p><i class="fa-brands fa-square-facebook"></i> <i class="fa-brands fa-square-twitter"></i> <i
                            class="fa-brands fa-square-pinterest"></i></p>
                </div>
                <div class="member">
                    <img src="assets/images/shanks.jpg" alt="">
                    <p>Djamel</p>
                    <p>Développeur</p>
                    <p><i class="fa-brands fa-square-facebook"></i> <i class="fa-brands fa-square-twitter"></i> <i
                            class="fa-brands fa-square-pinterest"></i></p>
                </div>
                <div class="member">
                    <img src="assets/images/goku.jpg" alt="">
                    <p>Sofiane</p>
                    <p>Développeur</p>
                    <p><i class="fa-brands fa-square-facebook"></i> <i class="fa-brands fa-square-twitter"></i> <i
                            class="fa-brands fa-square-pinterest"></i></p>
                </div>
            </div>

        </section>


    </main>
    <!-- MAIN -->

    <!-- FOOTER -->
    <footer class="footer1">

        <!-- balise comportant le bloc information et power of memory-->
        <div class="footer-display">


            <!--premier bloc information-->
            <div class="foot">
                <h2 class="title-footer">Information</h1>

                    <p class="sentence">Contacter notre équipe ! </p>
                    <div class="contact">
                        <div class="contact-phone">
                            <h4 class="telephone"> Tel:</h4>
                            <p class="contact-num">06 01 02 03 04</p>
                        </div>




                        <div class="mail">
                            <h4 class="contact-mail"> Email: </h4>
                            <p class="contact-num"> support.projet@hotmail.fr</p>

                        </div>

                        <div class="localisation">
                            <h4 class="contact-location">Location: </h4>
                            <p class="contact-num">Paris</p>

                        </div>


                        <!--icones des differents reseaux-->
                        <ul class="contact-icone">
                            <li><a class="link-social" href="https://fr-fr.facebook.com/"><i
                                        class="fa-brands fa-square-facebook fa-2xl "></i></a></li>
                            <li><a class="link-social" href="https://www.google.com/search"><i
                                        class="fa-brands fa-square-google-plus fa-2xl"></i></a></li>
                            <li><a class="link-social" href="https://www.pinterest.fr/"><i
                                        class="fa-brands fa-square-pinterest fa-2xl "></i></a></li>
                            <li><a class="link-social" href="https://www.instagram.com/?hl=fr"><i
                                        class="fa-brands fa-square-instagram fa-2xl "></i></a></li>
                            <li><a class="link-social" href="https://twitter.com/?lang=fr"><i
                                        class="fa-brands fa-square-twitter fa-2xl "></i></a></li>
                        </ul>
                    </div>
            </div>











            <!--deuxieme bloc power of memory-->
            <div class="foot2">
                <h1 class="title-footer2">Power of memory</h1>
                <ul class="footer-li">
                    <li class="help"><a class="lien" href="memory.html">Jouer !</a> </li>
                    <li class="help"><a class="lien2" href="scores.html">Scores</a></li>
                    <li class="help"><a class="lien3" href="contact.html">Contacter</a></li>
                </ul>

            </div>

        </div>

        <!--bloc comportant la mention copyright -->
        <div class="contact-copyright">
            <p class="footer-copy">Copyright<i class="fa-sharp fa-solid fa-copyright"></i> 2022 tous droits réservés</p>
        </div>


    </footer>



    <!-- FOOTER -->
    <!-- Burger js -->
    <script>
        var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;

/* Set the width of the side navigation to 250px */
function openNav() {
  sidenav.classList.toggle("active");
}

    </script>
</body>

</html>