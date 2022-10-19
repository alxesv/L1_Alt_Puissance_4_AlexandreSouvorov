<?php
    require_once 'init.php';
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
    <link rel="stylesheet" href="assets/css/contact.css">
    <script src="https://kit.fontawesome.com/583bdb9b50.js" crossorigin="anonymous"></script>
    <title>Contact</title>
</head>

<body>
    <?php include 'view/header.inc.php' ?>

    <main>


        <div class="bannierecontact">
            <h1 class="titrecontact">NOUS CONTACTER</h1>
        </div>
            <div class="container">
                <section class="infos">

                    <div class="info_box">
                        <img src="assets/images/tel_icon.png" alt="">
                        <p>06 05 04 03 02</p>
                    </div>
                    <div class="info_box">
                        <img src="assets/images/mail_icon.png" alt="">
                        <p>support@powerofmemory.com</p>
                    </div>
                    <div class="info_box">
                        <img src="assets/images/pin_icon.png" alt="">
                        <p>Paris</p>
                    </div>


                </section>

                <section class="form-contact">

                    <form class="form-note" method="POST" action='forms/contact_form.php' enctype="multipart/form-data">
                        <div class="name-mail">
                            <input class="form-name" type="text" id="name" name="name" required placeholder="Nom"><br>

                            <input class="form-email" type="email" id="email" name="email" placeholder="Email"><br>
                        </div>
                        <input class="form-sujet" type="text" id="sujet" name="sujet" placeholder="Sujet"><br>

                        <textarea class="form-text" type="textarea" id="text" name="text" placeholder="Message" rows="50"
                            cols="50"></textarea><br>

                        <input class="button-contact" type="submit" value="Envoyer">
                    </form>
            </div>
        </section>




    </main>

    <!-- FOOTER -->
    
    <?php include 'view/footer.inc.php'
    ?>
    <!-- FOOTER -->
    <script src="assets/js/burger.js"> </script>
</body>

</html>