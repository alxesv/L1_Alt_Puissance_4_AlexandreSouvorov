<?php
    require_once 'init.php';
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
    <section class="score_section">
        <table class="score_table">
            <thead>
                <th>Pseudo</th>
                <th>Jeu</th>
                <th>Catégorie</th>
                <th>Difficulté</th>
                <th>Score</th>
                <th>Date et heure</th>
            </thead>
            <tbody>
                <tr>
                    <td>Bob</td>
                    <td>Memory</td>
                    <td>Anime</td>
                    <td>Facile</td>
                    <td>32s</td>
                    <td>04/07/22 10:38</td>
                </tr>
                <tr>
                    <td>Jim</td>
                    <td>Memory</td>
                    <td>People</td>
                    <td>Difficile</td>
                    <td>125s</td>
                    <td>11/09/22 21:27</td>
                </tr>
                <tr>
                    <td>Sam</td>
                    <td>Memory</td>
                    <td>Dragon</td>
                    <td>Intermédiaire</td>
                    <td>52s</td>
                    <td>06/10/22 14:27</td>
                </tr>
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