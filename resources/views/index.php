<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="../css/app.css">



    <title>Document</title>
</head>

<body>
    <header class="white-opacity">
    <div class="flex-column">
            <div class="logo">
                <img src="../images/brand_logo.png" alt="logo brand">
            </div>
            <button class="hamburger">&#9776;</button>
            <button class="cross">&#735;</button>
            <nav class="nav">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li class="menuDeroulant">
                        <a class="location" href="#">Les locations</a>

                    </li>
                    <li><a href="#">Les activités</a></li>
                    <li><a href="#">Galerie</a></li>
                    <li><a href="#">Tourisme</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul id="sub-menus-id" class="sub-menus white-opacity">
                    <li><a href="#">Villa Cosy</a></li>
                    <li><a href="#">Parenthèse</a></li>
                    <li><a href="#">Bateau Dream</a></li>
                    <li><a href="#">L'impérial</a></li>
                </ul>
            </nav>
        </div>
        <div class="reservation white-opacity">
            <div class="flex-row ico-calendar">
                <i class="far fa-calendar-alt"></i>
                <h2>Réservation</h2>
            </div>
            <div class="container-reservation">
                <h3>Meilleur tarif garanti</h3>
                <div class="flex-row date">
                    <div class="col-left">
                        <div class="arrive flex-row">
                            <i class="fas fa-border-none"></i>
                            <span>Arrivée</span>
                        </div>
                        <div class="block"><strong>12</strong><span>septembre<br>2018</span></div>
                    </div>
                    <div class="col-right flex-column">
                        <div class="night flex-row">
                            <i class="far fa-moon"></i>
                            <strong>1</strong>
                        </div>
                        <div class="users flex-row">
                            <i class="fas fa-users"></i>
                            <strong>2</strong>
                        </div>
                    </div>

                </div>
                <a class="block" href="#">Voir les disponibilités</a>
            </div>
        </div>

    </header>
    <main id="deroulant">
        <section>
            <h1>-10% sur nos chambres</h1>
            <span>Pendant tout le mois de juillet</span>
        </section>
        <section class="white-opacity">
            <h2>Locations et Spa à Bandol</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae soluta reprehenderit consectetur nam. Perspiciatis dicta ut minus veniam deleniti quisquam molestiae unde distinctio esse rem praesentium modi perferendis, ad pariatur, fuga velit
                aut sed repellendus et totam, ipsam quidem sint.</p>
        </section>

    </main>
    <footer>
    <div class="flex-column">
            <p>254 chemin de la farlède<br>83500 La Seyne Sur Mer</p>
            <div class="contact flex-row">
                <a href="tel+33494151738"><i class="fas fa-phone-alt">&nbsp;04 94 15 17 38</i></a>
                <i class="fas fa-map-marker-alt"></i>
                <i class="fas fa-envelope"></i>
                <div class="flag">
                    <img src="../images/france-flag-icon-64.png" alt="drapeau de france">
                </div>
            </div>
            <div class="flex-row reseaux">
                <strong>Suivez-nous</strong>
                <div>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/animation.js"></script>
    <script src="../js/hamburger.js"></script>
</body>

</html>