<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Portfolio Aurélien VILMINOT | Laisser un avis, une remarque ou encore effectuer une demande.">
        <meta name="keywords" content="Portfolio, Aurélien, Vilminot, description, iut, informatique, dut, amu, code, html, css, informaticien">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Avis | Aurélien VILMINOT</title>
        <link rel="stylesheet" id="style" href="css/avis1.css" />
        <link rel="icon" type="image/png" href="media/favicon.png"/>
    </head>
    <body>
        <header>
            <a href="index.html"><img src="media/logo.png" alt="Logo du site" class="logo"></a>
            <nav>
                <a href="index.html">Accueil</a>
                <a href="projets.html">Projets</a>
                <a href="avis.php">Avis</a>
                <a href="about.html">A propos</a>
            </nav>
        </header>
        <main>
            <article>
                <form action="php/mail.php" method="post">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom...">

                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" placeholder="Entrez votre nom...">

                    <label for="mail">E-mail</label>
                    <input type="email" id="mail" name="mail" placeholder="Entrez votre e-mail...">

                    <label for="subject">Sujet</label>
                    <textarea id="subject" name="subject" placeholder="Vous pouvez mettre votre avis ou tout autre demande me concernant..."></textarea>

                    <label for="captcha">Captcha :</label>
                    <img src="php/captcha.php" alt="Captcha" class="captcha"/>
                    <input id="captcha" type="text" name="captcha" placeholder="Entrez le nombre affiché..."/>

                    <input type="submit" value="Envoyer">
                </form>
            </article>
        </main>
        <script src="js/avis.js" type="text/javascript"></script>
    </body>
</html>