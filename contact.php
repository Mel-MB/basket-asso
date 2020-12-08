<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="basket, club, association, proche, équipe">
    <title>Toujours près de vous l'association de basket</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include('header.php'); ?>
    <main class="page-width" id="contact-page">
        <h1>Toujours près de vous</h1>
<!--===================CONTACT FORM===================-->
        <div class="contact-section">
            <h2>Laissez-nous un message</h2>
            <form class="contact form-container" method="post">
                <!--Contact infos fieldset-->
                <fieldset class="contact-infos">
                    <h3>Dites-nous comment vous recontacter</h3>
                    <div><!--Compulsory fields-->
                        <input placeholder="Votre nom" type="text" required autofocus>
                        <input placeholder="Votre prénom" type="text" required autofocus>
                    </div>
                    <div class="optional"><!--Optionnal fields-->
                        <p>Merci de renseigner une des deux informations suivantes:</p>
                        <input placeholder="Votre email" type="email">
                        <input placeholder="Votre numéro de téléphone" type="tel">
                    </div>
                </fieldset>
                <!--Contact free message fieldset-->
                <fieldset class="message">
                    <h3>Votre message</h3>
                    <div class="object"><!--Object checkbox field-->
                        <p>Objet:</p>
                        <p>
                            <input type="checkbox" name="subscription" id="subscription" value="subcription">
                            <label for="subscription" class="small-label"> Inscription</label>
                        </p>
                        <p>
                            <input type="checkbox" name="information" id="information" value="information">
                            <label for="information" class="small-label"> Informations</label>
                        </p>
                        <p>
                            <input type="checkbox" name="other" id="other" value="other">
                            <label for="other" class="small-label"> Autre</label>
                        </p>
                    </div>
                    <!--Message textarea-->
                    <textarea placeholder="Tapez votre message ici..." required></textarea>
                </fieldset>

                <div class="f-buttons">
                    <button type="submit">Envoyer</button>
                    <button type="reset">Annuler</button>
                </div>
            </form>
        </div>
        <div class="map">
            <h2>Nous trouver</h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9044.50741588362!2d-2.657789185240225!3d47.627139288714645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd1b84b4dcfb594b5!2sAvenir%20de%20Theix%20Basket!5e0!3m2!1sfr!2sfr!4v1606209144858!5m2!1sfr!2sfr"
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
            <div class="addresses">
                <h3>Nos adresses</h3>
                <address>
                    <strong>Kerbasket</strong><br />
                    9 rue de la Victoire <br />
                    71370 DUNKVILLE
                </address>
                <address>
                    <strong>Kerbasket</strong><br />
                    16 rue de l'effort<br />
                    71370 DUNKVILLE
                </address>
            </div>
        </div>
    </main>
    <?php include('footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous">
    </script>
    <script src="scripts/burger.js"></script>
</body>

</html>