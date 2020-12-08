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
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <?php include('header.php'); ?>
    <main class="page-width" id="club">
        <h1>L'association de basket tous niveaux</h1>
<!--===================VALUES SECTION===================-->
        <div class="values-list">
            <h2>Nos valeurs</h2>
            <ul>
                <li>
                    <div class="values">
                        <i class="fas fa-users"></i>
                    </div>
                    <div>
                        <h3>L'esprit d'équipe</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat vero tenetur obcaecati ut,
                            odit
                            nam.</p>
                    </div>
                </li>
                <li>
                    <div class="values">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <div>
                        <h3>La technique</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat vero tenetur obcaecati ut,
                            odit
                            nam.</p>
                    </div>
                </li>
                <li>
                    <div class="values">
                        <i class="fas fa-child"></i>
                    </div>
                    <div>
                        <h3>Le coaching individulisé</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat vero tenetur obcaecati ut,
                            odit
                            nam.</p>
                    </div>
                </li>
                <li>
                    <div class="values">
                        <i class="fab fa-angellist"></i>
                    </div>
                    <div>
                        <h3>Le fun</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat vero tenetur obcaecati
                            ut, odit
                            nam.</p>
                    </div>
                    </div>
                </li>
        </div>
<!--===================PROMOTION SLIDER===================-->
        <div class="promotion">
            <h2>Passionnés de basket ? Nous aussi</h2>
        <!--All done in a separate php file so that it can be reused in other pages-->
       <?php include('slider.php'); ?>
       </div>
    </main>
    <?php include('footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous">
    </script>
    <script src="scripts/burger.js"></script>
</body>

</html>