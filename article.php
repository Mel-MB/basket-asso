<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="basket, club, association, proche, équipe">
    <title>Le club_ Kercode, l'association de basket</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" media="print" href="css/media-print.css">
</head>

<body>
    <?php include('header.php'); ?>
    <main class="page-width" id="article">
        <article>
            <h1 class="article-title">C'est la rentrée! Bienvenue aux nouvelles recrues</h1>
            <p class="article-meta">Posté par Camille le 27 novembre 2020.</p>
            <img src="assets/images/bienvenue-aux-nouveaux.jpg" alt="equipe de basket enfants">
            <p> <em class="intro"> Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</em></p>
            <div>
                <h2>Sous-titre</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore
                    eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.</p>
            </div>
            <div>
                <h2>Sous-titre</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore
                    eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.</p>
            </div>
        </article>
        <aside>
            <h3>Les derniers articles</h3>
            <ul class="last-articles">
                <li>
                    <a href="article.php">
                        <img src="assets/images/fermeture-club-coronavirus.jpg" alt="Virus">
                        <div class="overlay">
                            <h4>
                                Fermeture du club suite aux nouvelles mesures grouvernementales
                            </h4>
                            <p>Votre club sera fermé jusqu'a nouvel ordre...</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="article.php">
                        <img src="assets/images/les-regles.jpg" alt="ballon de basket sur terrain">
                        <div class="overlay">
                            <h4>
                                Les règles du basketball
                            </h4>
                            <p>Petit recapitulatif du réglement de jeu...</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="article.php">
                        <img src="assets/images/protocole-sanitaire.jpg" alt="distanciation sociale basket">
                        <div class="overlay">
                            <h4>
                                Fermeture du club suite aux nouvelles mesures grouvernementales
                            </h4>
                            <p>Votre club sera fermé jusqu'a nouvel ordre...</p>
                        </div>
                    </a>
                </li>
            </ul>
        </aside>
    </main>
    <?php include('footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous">
    </script>
    <script src="scripts/burger.js"></script>
</body>

</html>