<?php
    require_once 'init.php';
    // Récupération des données pour la section statistiques
    $fastestTimeStatement = $db->prepare("SELECT game_score FROM score ORDER BY game_score ASC LIMIT 1");
    $fastestTimeStatement->execute();
    $userCountStatement = $db->prepare("SELECT COUNT(user_id) as 'count' FROM user");
    $userCountStatement->execute();
    $gameCountStatement = $db->prepare("SELECT COUNT(score_id) as 'count' FROM score");
    $gameCountStatement->execute();
    $onlineCountStatement = $db->prepare("SELECT count(*) as 'count' FROM `user` WHERE `last_online` >= DATE_SUB(NOW(), INTERVAL 10 MINUTE)");
    $onlineCountStatement->execute();
    $onlineCount = $onlineCountStatement->fetchAll();
    $gameCount = $gameCountStatement->fetchAll();
    $fastestTime = $fastestTimeStatement->fetchAll();
    $userCount = $userCountStatement->fetchAll();
?>
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
        <a href="memory.php"><button class="bouttonjouer"> Jouer !</button></a>
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
                        <p><?=$gameCount[0]['count']?></p> <span>Parties jouées</span> 
                    </div>
                    <div id="best_time" class="stat_box">
                        <p><?=$fastestTime[0]['game_score']?>s</p> <span>Temps record<nspa > 
                    </div>
                </div>
                <div class="row_2">
                    <div id="players_online" class="stat_box">
                        <p><?=$onlineCount[0]['count']?></p> <span>Joueurs connectés</span> 
                    </div>
                    <div id="registered_players" class="stat_box">
                        <p><?=$userCount[0]['count']?></p> <span>Joueurs enregistrés</span> 
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
    <?php include 'view/footer.inc.php'
    ?>
    <!-- Burger js -->
    <script src="assets/js/burger.js"> </script>
</body>

</html>