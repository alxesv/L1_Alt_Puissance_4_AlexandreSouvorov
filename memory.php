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
    </div>
    <div class="chat">
        <div class="chat-header">
            <img src="https://placedog.net/50/50" alt="">
            <h3>Chat général</h3>
        </div>
        <!-- CHAT -->
        <div class="chat-messages">

            <div class ="message-container user-message">
                <div class="author">Moi</div>
                <div class="message">
                    Salut !
                </div>
                <div class="date-sent">Aujourd'hui à 12h32</div>
            </div>

            <div class="other-message-container">
                <img src="https://placedog.net/30/30" alt="">
                <div class ="message-container other-message">
                    <div class="author">Bob</div>
                    <div class="message">
                        Lorem ipsum dolor sit amet consectetur adipisicing.
                    </div>
                    <div class="date-sent">Aujourd'hui à 14h02</div>
                </div>
            </div>
            <div class ="message-container user-message">
                <div class="author">Moi</div>
                <div class="message">
                    parle français par contre stp
                </div>
                <div class="date-sent">Aujourd'hui à 15h16</div>
            </div>
            <div class="other-message-container">
                <img src="https://placedog.net/30/30" alt="">
                <div class ="message-container other-message">
                    <div class="author">Bob</div>
                    <div class="message">
                        Ok désolé
                    </div>
                    <div class="date-sent">Aujourd'hui à 15h18</div>
                </div>
            </div>

        </div>
        <div class ="chat-send">
        <form action="" method="" class="send-message">
            <input type="text" placeholder="Votre message..." name="message" id="message">
            <input type="submit" value="Envoyer" id="send-button">
        </form>
        </div>
    </div>
    <!-- CHAT -->
    </section>

     <!-- FOOTER -->
     <footer class="footer1">

        <div class="footer-display">

         

            <div class="foot" >
                    <h1 class="title-footer">Information</h1>

                    <p class="sentence">Contrary to popular belief, Lorem Ipsum is not simply random text </p>
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