<?php include ('base/head.php') ?>

<?php include ('base/header.php')?>

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

        <div class="discover__container container swiper__container swiper-container">
            <div class="swiper-wrapper">
                <div class="discover__card swiper-slide">
                    <a href="menu.php">
                        <img src="assets/img/discover1.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">La chèvre</h2>
                        </div>
                    </a>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="menu.php">
                        <img src="assets/img/discover2.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">La 4 fromages</h2>
                        </div>
                    </a>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="menu.php">
                        <img src="assets/img/discover3.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">La Mozza</h2>
                        </div>
                    </a>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="menu.php">
                        <img src="assets/img/discover4.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">La pepperoni </h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="contact section">
        <div class="contact__container container grid">

            <div class="contact__img">

                <div class="contact__img-overlay">
                    <img src="assets/img/contact2.jpg" alt="" class="about__img-two">
                </div>
            </div>

            <div class="contact__data">
                <h2 class="section__title">On reste en contact ?</h2>
                <p class="contact__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <a href="contact.php" class="button">Contactez nous</a>
            </div>
        </div>
    </section>
    <section class="card section">
        <div class="card__container container">
            <div class="card__row card__justify">
                <div class="card__col-12">
                    <div class="card__wrapper">
                        <div class="card__row no-gutters">
                            <div class="card__col-6">
                                <div class="card__infos card__width card__padding card__padding-bg">

                                    <h3>On s'appelle, <br>on s'fait une bouffe ?</h3>

                                    <div class="card__row">
                                        <div class="card__col-4">
                                            <div class="card__box card__width card__flex card__items">
                                                <div class="card__text">
                                                    <p><span>Adresse:</span> 19 rue de la pizza, 59170 Roubaix</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card__col-4">
                                            <div class="card__box card__width card__flex card__items">
                                                <div class="card__text">
                                                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">hello@lorenzzo.fr</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card__col-4">
                                            <div class="card__box card__width card__flex card__items">
                                                <div class="card__text">
                                                    <p><span>Telephone:</span> <a href="tel://1234567920">06 06 06 06 06</a></p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="card__infos card__width card__padding card__padding-bg">

                                    <div class="card__row card__margin">
                                        <div class="card__col-3">
                                            <div class="card__box card__width card__flex card__items">
                                                <div class="card__text">
                                                    <p><span>Lundi :</span> On est fermé :(</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card__col-3">
                                            <div class="card__box card__width card__flex card__items">
                                                <div class="card__text">
                                                    <p><span>Mardi :</span> <br>18h | 22h</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card__col-3">
                                            <div class="card__box card__width card__flex card__items">
                                                <div class="card__text">
                                                    <p><span>Mercredi:</span>12h | 15h <br>18h | 22h</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card__col-3">
                                            <div class="card__box card__width card__flex card__items">
                                                <div class="card__text">
                                                    <p><span>Jeudi:</span>12h | 15h <br>18h | 22h</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card__row card__margin">
                                        <div class="card__col-3">
                                            <div class="card__box card__width card__flex card__items">
                                                <div class="card__text">
                                                    <p><span>Vendredi:</span>12h | 15h <br>18h | 23h</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card__col-3">
                                            <div class="card__box card__width card__flex card__items">
                                                <div class="card__text">
                                                    <p><span>Samedi:</span>Non-stop <br>12h | 23h</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card__col-3">
                                            <div class="card__box card__width card__flex card__items">
                                                <div class="card__text">
                                                    <p><span>Dimanche:</span>12h | 15h <br>18h | 23h</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="card__col-6 card__flex align-items-stretch">
                                <div class="card__infos-wrap card__width card__infos-img card__infos-map">
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

<?php include ('base/footer.php') ?>

<?php include ('base/script.php') ?>