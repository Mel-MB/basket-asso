<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="basket, club, association, proche, équipe">
    <title>Association de basket: Kercode</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

</head>

<body id="index">
    <?php include('header.php') ?>
    <main class="page-width">
        <h1>Le club de basketball pour tous</h1>
        <div class="actus">
            <h2>Les dernières actualités</h2>
<!--===================PROMOTED ACTUALITIES===================-->
            <figure><!--Promoted actu post to replace with a Js slider-->
                <img src="assets/images/match-feminin.jpg" alt="match de basket feminin">
                <figcaption>
                    <h3>Elles ont gagné !</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique maxime natus minus, sint ex
                        ad.</p>
                </figcaption>
            </figure>
<!--===================LAST MATCH RESULTS LIST===================-->
            <article class="match-results">
                <h3 class="article-title">Résultats des derniers matchs</h3>
                <ul class="10-last match-results-list"><!--Results list to export from database-->
                    <li class="match">
                        <h4 class="match-date">17 octobre 2020</h4>
                        <div class="match-result">
                            <p class="loc-team">Kercode Minimes 1 <strong class="match-score">20</strong></p>
                            <i class="fas fa-basketball-ball"></i>
                            <p class="visit-team">Kerbasket Minimes 1 <strong class="match-score">12</strong></p>
                        </div>
                    </li>
                    <li class="match">
                        <h4 class="match-date">17 octobre 2020</h4>
                        <div class="match-result">
                            <p class="loc-team">Kercode Minimes 1 <strong class="match-score">20</strong></p>
                            <i class="fas fa-basketball-ball"></i>
                            <p class="visit-team">Kerbasket Minimes 1 <strong class="match-score">12</strong>
                            </p>
                        </div>
                    </li>
                    <li class="match">
                        <h4 class="match-date">17 octobre 2020</h4>
                        <div class="match-result">
                            <p class="loc-team">Kercode Minimes 1 <strong class="match-score">20</strong></p>
                            <i class="fas fa-basketball-ball"></i>
                            <p class="visit-team">Kerbasket Minimes 1 <strong class="match-score">12</strong>
                            </p>
                        </div>
                    </li>
                    <li class="match">
                        <h4 class="match-date">17 octobre 2020</h4>
                        <div class="match-result">
                            <p class="loc-team">Kercode Minimes 1 <strong class="match-score">20</strong></p>
                            <i class="fas fa-basketball-ball"></i>
                            <p class="visit-team">Kerbasket Minimes 1 <strong class="match-score">12</strong>
                            </p>
                        </div>
                    </li>
                    <li class="match">
                        <h4 class="match-date">17 octobre 2020</h4>
                        <div class="match-result">
                            <p class="loc-team">Kercode Minimes 1 <strong class="match-score">20</strong></p>
                            <i class="fas fa-basketball-ball"></i>
                            <p class="visit-team">Kerbasket Minimes 1 <strong class="match-score">12</strong>
                            </p>
                        </div>
                    </li>
                    <li class="match">
                        <h4 class="match-date">17 octobre 2020</h4>
                        <div class="match-result">
                            <p class="loc-team">Kercode Minimes 1 <strong class="match-score">20</strong></p>
                            <i class="fas fa-basketball-ball"></i>
                            <p class="visit-team">Kerbasket Minimes 1 <strong class="match-score">12</strong>
                            </p>
                        </div>
                    </li>
                    <li class="match">
                        <h4 class="match-date">17 octobre 2020</h4>
                        <div class="match-result">
                            <p class="loc-team">Kercode Minimes 1 <strong class="match-score">20</strong></p>
                            <i class="fas fa-basketball-ball"></i>
                            <p class="visit-team">Kerbasket Minimes 1 <strong class="match-score">12</strong>
                            </p>
                        </div>
                    </li>
                    <li class="match">
                        <h4 class="match-date">17 octobre 2020</h4>
                        <div class="match-result">
                            <p class="loc-team">Kercode Minimes 1 <strong class="match-score">20</strong></p>
                            <i class="fas fa-basketball-ball"></i>
                            <p class="visit-team">Kerbasket Minimes 1 <strong class="match-score">12</strong>
                            </p>
                        </div>
                    </li>
                    <li class="match">
                        <h4 class="match-date">17 octobre 2020</h4>
                        <div class="match-result">
                            <p class="loc-team">Kercode Minimes 1 <strong class="match-score">20</strong></p>
                            <i class="fas fa-basketball-ball"></i>
                            <p class="visit-team">Kerbasket Minimes 1 <strong class="match-score">12</strong>
                            </p>
                        </div>
                    </li>
                    <li class="match">
                        <h4 class="match-date">17 octobre 2020</h4>
                        <div class="match-result">
                            <p class="loc-team">Kercode Minimes 1 <strong class="match-score">20</strong></p>
                            <i class="fas fa-basketball-ball"></i>
                            <p class="visit-team">Kerbasket Minimes 1 <strong class="match-score">12</strong>
                            </p>
                        </div>
                    </li>

                </ul>
                <!--Reaches out to a page to create with an API-->
                <a href="#" class="more-button">Afficher tout</a><!--=== NOT ACTIVE AT THE MOMENT, TO LINK WITH A PAGE CREATED WITH A DATA EXTRACTION-->
            </article>
        </div>
        <div class="interactive-content">
<!--===================NEXT EVENTS PRESENTATION===================-->
            <article>
                <h2 class="article-title">Evénements à venir</h2>
                <section class="3-next 4-next next-events-list">
                <!--section of 4 next events explaiend in the blog page-->
                    <figure class="next-event">
                        <img src="assets/images/Tournoi.png" alt="tournoi de basket">
                        <div class="event-date">
                            <p class="event-month 3-first-letters"> NOV</p>
                            <p class="event-day">27</p>
                        </div>
                        <figcaption class="overlay">
                            <div class="description-text">
                                <h3>Lorem ipsum dolor sit.</h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere, obcaecati!</p>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="next-event">
                        <img src="assets/images/tournage-presentation-club.jpg" alt="presentation du club de basket">
                        <div class="event-date">
                            <p class="event-month 3-first-letters"> DEC</p>
                            <p class="event-day">10</p>
                        </div>
                        <figcaption class="overlay">
                            <div class="description-text">
                                <h3>Lorem ipsum dolor sit.</h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere, obcaecati!</p>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="next-event">
                        <img src="assets/images/suivi-match-nba.jpg" alt="match de basket">
                        <div class="event-date">
                            <p class="event-month 3-first-letters"> DEC</p>
                            <p class="event-day">15</p>
                        </div>
                        <figcaption class="overlay">
                            <div class="description-text">
                                <h3>Lorem ipsum dolor sit.</h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere, obcaecati!</p>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="next-event">
                        <img src="assets/images/finale-nba.jpg" alt="match de basket">
                        <div class="event-date">
                            <p class="event-month 3-first-letters"> DEC</p>
                            <p class="event-day">20</p>
                        </div>
                        <figcaption class="overlay">
                            <div class="description-text">
                                <h3>Lorem ipsum dolor sit.</h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere, obcaecati!</p>
                            </div>
                        </figcaption>
                    </figure>
                </section>
                <!--Reaches to the blog page-->
                <a href="actualites.php" class="more-button">Afficher tout</a>
            </article>
<!--===================FACEBOOK PLUGIN===================-->
            <section class="fb-page">
                <!--====Iframes ar not resizable => 3 diferent sizes to fit the layout to display in specified sizes====-->
                <!-- As soon as scripts ar allowed change to scripts for security matters-->  
                <iframe class="under-500px"
                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FFacebookFrance&tabs=%C3%A9venements&width=300&height=280&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                    width="300" height="280" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                </iframe>
                <iframe class="under-992px"
                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FFacebookFrance&tabs=%C3%A9venements&width=590&height=280&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                    width="590" height="280" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                </iframe>
                <iframe class="over-992px"
                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FFacebookFrance&tabs=timeline&width=370&height=550&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                    width="370" height="550" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                </iframe>
            </section>
        </div>
    </main>
    <?php include('footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous">
    </script>
    <script src="scripts/burger.js"></script>
</body>

</html>