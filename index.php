<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/infos.css">
    <title>Pizza</title>
</head>
<body>
    <header class="header nav_menu-page" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">LORENZZO'S PIZZA</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.php" class="nav__link">Acceuil</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">À propos</a>
                    </li>
                    <li class="nav__item">
                        <a href="menu.php" class="nav__link">Le Menu</a>
                    </li>
                    <li class="nav__item">
                        <a href="contact.php" class="nav__link">Contact</a>
                    </li>
                </ul>

                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>

            <a href="panier.php" class="nav__link nav__cart"><i class="uil uil-pizza-slice cart_logo"></i></a>


            <div class="nav__toggle" id="nav-toggle">
                <i class="uil uil-bars"></i>
            </div>
        </nav>

        <div class="connexion">
            <a href="inscription.php" class="btn-conn">Inscription</a>
            |
            <a href="connexion.php" class="btn-conn">Connexion</a>
        </div>

        <!--    <div class="connexion-bis">
                <a href="" class="btn-conn">Mon compte</a>
                |
                <a href="" class="btn-conn">Déconnexion</a>
            </div>
        -->
    </header>

    <main class="home" id="home">
        <section class="home">
            <img src="assets/img/home1.jpg" alt="" class="home__img">

            <div class="home__container container grid">
                <div class="home__data">
                    <span class="home__data-subtitle">Bienvenue</span>
                    <h1 class="home__data-title">Venez <br> manger de <b>délicieuses <br> pizzas</b></h1>
                    <a href="menu.php" class="button">Le Menu</a>
                </div>

                <div class="home__social">
                    <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                        <i class="uil uil-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                        <i class="uil uil-instagram"></i>
                    </a>
                </div>
            </div>
        </section>

        <section class="about section" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title">En savoir plus <br> Sur nous et nos pizzas</h2>
                    <p class="about__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="#" class="button" >Découvrir le menu</a>
                </div>

                <div class="about__img">
                    <div class="about__img-overlay">
                        <img src="assets/img/about1.jpg" alt="" class="about__img-one">
                    </div>

                    <div class="about__img-overlay">
                        <img src="assets/img/about2.jpg" alt="" class="about__img-two">
                    </div>
                </div>
            </div>
        </section>

        <section class="discover section" id="discover">
            <h2 class="section__title">A la découverte <br> de nos pizzas</h2>

            <div class="discover__container container swiper-container">
                <div class="swiper-wrapper">
                    <div class="discover__card swiper-slide">
                        <a href="produit/chevre.php">
                            <img src="assets/img/discover1.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">La chèvre</h2>
                            </div>
                        </a>
                    </div>

                    <div class="discover__card swiper-slide">
                        <a href="produit/quatre.php">
                            <img src="assets/img/discover2.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">La 4 fromages</h2>
                            </div>
                        </a>
                    </div>

                    <div class="discover__card swiper-slide">
                        <a href="produit/mozza.php">
                            <img src="assets/img/discover3.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">La Mozza</h2>
                            </div>
                        </a>
                    </div>

                    <div class="discover__card swiper-slide">
                        <a href="produit/pepperoni.php">
                            <img src="assets/img/discover4.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">La pepperoni </h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="about section">
            <div class="about__container container grid">

                <div class="about__img">

                    <div class="about__img-overlay">
                        <img src="assets/img/contact2.jpg" alt="" class="about__img-two">
                    </div>
                </div>

                <div class="contact__data">
                    <h2 class="section__title">On reste en contact ?</h2>
                    <p class="about__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="contact.php" class="button">Contactez nous</a>
                </div>
            </div>
        </section>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="wrapper">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="contact-wrap w-100 p-md-5 p-4">

                                        <h3>On s'appelle, <br>on s'fait une bouffe ?</h3>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="dbox w-100 d-flex align-items-start">
                                                    <div class="text">
                                                        <p><span>Adresse:</span> 19 rue de la pizza, 59170 Roubaix</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="dbox w-100 d-flex align-items-start">
                                                    <div class="text">
                                                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">hello@lorenzzo.fr</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="dbox w-100 d-flex align-items-start">
                                                    <div class="text">
                                                        <p><span>Telephone:</span> <a href="tel://1234567920">06 06 06 06 06</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="contact-wrap w-100 p-md-5 p-4">

                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <div class="dbox w-100 d-flex align-items-start">
                                                    <div class="text">
                                                        <p><span>Lundi :</span> On est fermé :(</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="dbox w-100 d-flex align-items-start">
                                                    <div class="text">
                                                        <p><span>Mardi :</span> <br>18h | 22h</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="dbox w-100 d-flex align-items-start">
                                                    <div class="text">
                                                        <p><span>Mercredi:</span>12h | 15h <br>18h | 22h</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="dbox w-100 d-flex align-items-start">
                                                    <div class="text">
                                                        <p><span>Jeudi:</span>12h | 15h <br>18h | 22h</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <div class="dbox w-100 d-flex align-items-start">
                                                    <div class="text">
                                                        <p><span>Vendredi:</span>12h | 15h <br>18h | 23h</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="dbox w-100 d-flex align-items-start">
                                                    <div class="text">
                                                        <p><span>Samedi:</span>Non-stop <br>12h | 23h</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="dbox w-100 d-flex align-items-start">
                                                    <div class="text">
                                                        <p><span>Dimanche:</span>12h | 15h <br>18h | 23h</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-6 d-flex align-items-stretch">
                                    <div class="info-wrap w-100 p-5 img map-responsive">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2527.442008519038!2d3.1564099156294105!3d50.693181677726166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c328e3dd23fd3d%3A0x33219387c1bbd279!2s20%20Rue%20du%20Luxembourg%2C%2059100%20Roubaix!5e0!3m2!1sfr!2sfr!4v1629786139432!5m2!1sfr!2sfr" style="border:0;" width="600" height="450" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content grid">
                <div class="footer__data">
                    <h3 class="footer__title">PIZZA</h3>
                    <p class="footer__description">Venez manger de <br> délicieuses pizzas.
                    </p>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">A propos</h3>
                    <ul>
                        <li class="footer__item">
                            <a href="" class="footer__link">À propos de nous</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Nos pizza</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">Le Menu</h3>
                    <ul>
                        <li class="footer__item">
                            <a href="" class="footer__link">Les pizzas</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Les boissons</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Les desserts</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer__rights">
                <p class="footer__copy">&#169; 2021 Pizza | Agence SHARK</p>
            </div>
        </div>
    </footer>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>