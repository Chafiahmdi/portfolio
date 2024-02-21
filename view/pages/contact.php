<?php

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style/style.css" type="text/css">
    <link rel="stylesheet" href="../../css/style/reset.css" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
    <script src="../../javascript/gsap.js" defer></script>
    <script src="../../javascript/script.js" defer></script>

    <title>Contact</title>
</head>

<body>
    <header>
        <div class="button">
        <svg width="48px" height="48px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <g>
            <line x1="0" y1="17" x2="48" y2="17" stroke-width="3" />
            <line x1="0" y1="31" x2="48" y2="31" stroke-width="3" />
            </g>
            <g>
            <line x1="0" y1="24" x2="48" y2="24" stroke-width="3" />
            <line x1="0" y1="24" x2="48" y2="24" stroke-width="3" />
            </g>
        </svg>
        </div>

        <a href="../../index.php"><img class="logo" src="../../assets/images/logo2.png" alt="logo's image"></a>
        <nav class="menu">
        <ul>
            <li><a href="../../index.php">Accueil</a></li>
            <li><a href="development.php">Développement</a></li>
            <li><a href="webdesign.php">Web design</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        </nav>
    </header>
    <main>
        <div class="line-contact"></div>

        <div class="marges-forme">
            <h1 class="contact-title"> Contact</h1>
        </div>
        <form class="form-container" action="/ma-page-de-traitement" method="post">
            <div class="nom flexColumn">
                <!-- <label for="name">Nom </label> -->
                <input type="text" name="name" id="name" placeholder="Nom" required />
            </div>
            <div class="prenom flexColumn">
                <input type="text" name="name" id="name" placeholder="Prénom" required />
            </div>

            <div class="email flexColumn">
                <input type="email" name="email" id="email" placeholder="Adresse email" required />
            </div>
            <div class="objet flexColumn">
                <input type="text" name="objet" id="objet" placeholder="Objet" required />
            </div>

            <div class="message flexColumn">
                <textarea id="message" name="user_message" placeholder="Message"></textarea>
            </div>

            <div class="form-example flexColumn">
                <input type="submit" class="submit" value="Envoyer" />
            </div>
        </form>

        <a href=""> <img class="arrow-scroll" src="../../assets/images/arrow.png" alt=""></a>
    </main>
    <!-- <img class="image" src="./assets/images/logo.png" alt="" style="width:50px">

    <div class="intro" style="text-align: center; height:80vh; text-transform: uppercase">
        <h1 class="titre" style="margin-top: 250px; width: 50%; margin-left: auto; margin-right: auto;">Lorem ipsum dolor sit amet consectetut. Iusto libero eos quisquam earum. Facere esse,<br> dolor inventore quasi eius hic quas tempora possimus officiis repellendus illo doloremque!</h1>
    </div>
    <img src="star.svg" style="height:100vh;">

   <div class="rose" style="height:100vh; background-color:pink"></div>
   <div class="bleu" style="height:100vh; background-color:aliceblue"></div>
   <div class="beige" style="height:100vh; background-color:antiquewhite"></div> -->

    <footer>

        <div class="contact-footer">
            <div><a href="../../index.php">Accueil</a> </div>
            <div class="line-footer"></div>

            <div> <a href="development.php">Développement</a> </div>
            <div class="line-footer"></div>

            <div><a href="webdesign.php">Web design</a> </div>
            <div class="line-footer"></div>

            <div><a href="contact.php">Contact</a> </div>
        </div>

        <div class="copyright"></div>

        <div class="contact-footer mobile-footer">

            <a href="mailto: chafiahamdaoui1996@gmail.com">
                <img class="reseau" src="../../assets/images/gmail.svg" alt="">
            </a>

            <a href="https://www.linkedin.com/in/chafia-hamdaoui-716b80197/" target="_blank" rel="noopener noreferrer">
                <img class="reseau" src="../../assets/images/linkedin.svg" alt="">
            </a>
        </div>
        <div class="copyright">&copy; Copyright 2024 - Tous droits réservés</div>
    </footer>

</body>

</html>