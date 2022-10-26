<?php
    require_once 'init.php';
    if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT `message`.`message` as 'message', user.pseudo as 'auteur', message_time as 'time', case when user.user_id = $user_id then 'Vrai' else 'Faux' end as estExpediteur
    FROM `message`
    INNER JOIN user ON `message`.author_id = user.user_id
    WHERE message_time > DATE_SUB(NOW(), INTERVAL 24 HOUR) AND message_time <= NOW();";
    $chatStatement = $db->prepare($sql);
    $chatStatement->execute();
    $chat = $chatStatement->fetchAll();
    };
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/memory.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <script src="https://kit.fontawesome.com/583bdb9b50.js" crossorigin="anonymous"></script>
    <title>Memory</title>
</head>
<body>    
        <!-- HEADER -->
        <?php include 'view/header.inc.php' ?>
    <!-- MEMORY -->
    <section class="game_section">  
        
        <h1>Memory</h1>
        <?php if(isset($_SESSION['user_id'])) {?>
        <div  class="game">
       
        <table class="game_grid">
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <?php }else{ ?>
            <div class ="login">
            <h2>Connectez vous pour jouer !</h2>
            <a href="login.php"><button>Se connecter</button></a>
            </div>
            <?php } ?>
    </div>
    <?php if(isset($_SESSION['user_id'])){ ?>
    <!-- CHAT -->
    <div class="chat">
        <div class="chat-header">
            <img src="https://placedog.net/50/50" alt="">
            <h3>Chat général</h3>
        </div>

        <div class="chat-messages">

        <?php
        foreach($chat as $ckey => $cvalue){
            ?>
            <div class="message-container <?php if ($cvalue['estExpediteur'] == 'Vrai') {echo "user-message"; }else { echo "other-message";}; ?>">
                <div class ="author"><?php if ($cvalue['estExpediteur'] == 'Vrai') {echo "Moi"; }else { echo $cvalue['auteur'];}?></div>
                <div class="message">
                    <?=$cvalue['message']?>
                </div>
                <div class="date-sent"><?= $cvalue['time']?></div>
            </div>
        <?php
        }
        ?>
        </div>
        <div class ="chat-send">
        <form action="" method="" class="send-message">
            <input type="text" placeholder="Votre message..." name="message" id="message">
            <input type="submit" value="Envoyer" id="send-button">
        </form>
        </div>
    </div>
    <!-- CHAT -->
    <?php } ?>
    </section>

     <!-- FOOTER -->
     <?php include 'view/footer.inc.php'
    ?>
    <!-- FOOTER -->
    <script src="assets/js/burger.js"> </script>
</body>
</html>