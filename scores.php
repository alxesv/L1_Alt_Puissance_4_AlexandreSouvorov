<?php
    require_once 'init.php';
    $sql = "SELECT game.game_name as 'Jeu', user.pseudo as 'Joueur', score.game_difficulty as 'Difficulté', score.game_score as 'Score', score.game_date as 'Date' FROM score
    INNER JOIN user ON score.player_id = user.user_id
    INNER JOIN game ON score.game_id = game.game_id";
    $sqlAdd = "";
    if (isset($_GET['search']) && $_GET['search'] != ""){
        $searchContent = $_GET['search'];
        $sqlAdd = " WHERE user.pseudo LIKE '%$searchContent%'";
        }
    if (isset($_GET['diff'])){
        $diffContent = $_GET['diff'];
        $sqlAdd = " WHERE score.game_difficulty = '$diffContent'";
        }
    if (isset($_GET['jeu'])){
        $jeuContent = $_GET['jeu'];
        $sqlAdd = " WHERE game.game_id = '$jeuContent'";
        }
    if(isset($_GET['diff']) && isset($_GET['search']) && $_GET['search'] != ""){
        $sqlAdd = " WHERE score.game_difficulty = '$diffContent' AND user.pseudo LIKE '%$searchContent%'";
    }
    if(isset($_GET['diff']) && isset($_GET['jeu'])){
        $sqlAdd = " WHERE score.game_difficulty = '$diffContent' AND game.game_id = '$jeuContent'";
    }
    if(isset($_GET['jeu']) && isset($_GET['search']) && $_GET['search'] != ""){
        $sqlAdd = " WHERE game.game_id = '$jeuContent' AND user.pseudo LIKE '%$searchContent%'";
    }
    if(isset($_GET['diff']) && isset($_GET['search']) && $_GET['search'] != "" && isset($_GET['jeu'])){
        $sqlAdd = " WHERE score.game_difficulty = '$diffContent' AND user.pseudo LIKE '%$searchContent%' AND game.game_id = '$jeuContent'";
    }

    $sql .= $sqlAdd;
    $sql .= " ORDER BY game.game_name ASC, score.game_difficulty, score.game_score";
    $scoreStatement = $db->prepare($sql);
    $scoreStatement->execute();
    $score = $scoreStatement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des scores</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/scores.css">
    <script src="https://kit.fontawesome.com/583bdb9b50.js" crossorigin="anonymous"></script>
</head>
<body>
    <body>    
        <!-- HEADER -->
        <?php include 'view/header.inc.php' ?>
    <!-- SCORES -->
    <div class="banniere-score">
        <h1>Scores</h1>
    </div>
    <form action="scores.php" method="GET" class="filtrage">
        <input type="text" placeholder="Chercher par pseudo..." name="search">
        <select name="diff" id="diff">
            <option value="" selected disabled hidden>Choisissez la difficulté</option>
            <option value="facile">Facile</option>
            <option value="intermediaire">Intermédiaire</option>
            <option value="difficile">Difficile</option>
            <option value="Impossible">Impossible</option>
        </select>
        <select name="jeu" id="jeu">
            <option value="" selected disabled hidden>Choisissez le jeu</option>
            <option value="1">Memory</option>
        </select>
        <button type='submit'>Filtrer</button>
    </form>
    <section class="score_section">
        <table class="score_table">
            <thead>
                <th>Pseudo</th>
                <th>Jeu</th>
                <th>Difficulté</th>
                <th>Score</th>
                <th>Date et heure</th>
            </thead>
            <tbody>
                <?php
                foreach ($score as $skey => $svalue){ ?>
                <tr>
                    <td><?=$svalue['Joueur']?></td>
                    <td><?=$svalue['Jeu']?></td>
                    <td><?=$svalue['Difficulté']?></td>
                    <td><?=$svalue['Score']?>s</td>
                    <td><?=$svalue['Date']?></td>
                <tr>
                <?php  
                }
                ?>
            </tbody>
        </table>
    </section>

    <!-- SCORES -->
    
      <!-- FOOTER -->
      <?php include 'view/footer.inc.php'
    ?>
    <!-- FOOTER -->
    <script src="assets/js/burger.js"> </script>
</body>
</html>