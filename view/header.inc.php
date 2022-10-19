<header id="main-header">
        <h1 class="titreacceuil">The Power Of Memory</h1>
        <nav>
            <div id="mySidenav" class="sidenav">
                    <ul class="menunav">
                        <li><a href="index.php">ACCUEIL</a></li>
                        <li><a href="memory.php">JEU</a></li>
                        <li><a href="scores.php">SCORES</a></li>
                        <li><a href="contact.php">NOUS CONTACTER</a></li>
                        <?php if(!isset($_SESSION['user_id'])) {  ?>
                        <li><a href="login.php">SE CONNECTER</a></li>
                        <li><a href="inscription.php">S'INSCRIRE</a></li>
                        <?php }else { ?>
                        <li><a href="logout.php">SE DECONNECTER</a></li>
                        <li class="logged_in"><a href="myaccount.php"><?=$_SESSION['pseudo']?></a></li>
                        <?php } ?>
                    </ul>
            </div>
            <a href="#" id="openBtn">
                <span class="burger-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
              </a>
        </nav>
    </header>