<?php include ('dbcontroller.php') ?>

<?php include ('base/head.php') ?>

<?php include ('base/header.php')?>

<main class="home" id="home">

    <section class="home">

        <img src="assets/img/home1.jpg" alt="" class="home__img">

        <div class="home__container container grid">

            <div class="home__data">
                <span class="home__data-subtitle">Bienvenue</span>
                <h1 class="home__data-title">Venez <br> manger de <b>délicieuses <br> pizzas</b></h1>
                <div class="home__button">
                    <a href="menu.php" class="home__button-title home__button-slideEffect">Voir le menu <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>

        </div>

    </section>

    <section class="about section" id="about">

        <div class="about__container container grid">

            <div class="about__data">
                <h2 class="section__title">En savoir plus <br> Sur nous et nos pizzas</h2>
                <p class="about__description">Venez nous suivre sur les réseaux et partagé vos meilleurs moments pizza avec le #lorenzzopizza !
                </p>
            </div>

            <div class="about__img">

                <div class="about__img-overlay">
                    <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                        <img src="assets/img/social1.jpg" alt="" class="about__img-one">
                    </a>
                </div>

                <div class="about__img-overlay">
                    <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                        <img src="assets/img/social2.jpg" alt="" class="about__img-two">
                    </a>
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

                <h2 class="contact__data-title">On reste en contact ?</h2>

                <div class="contact__popup-button contact__button">
                    <button class="contact__button-title contact__button-slideEffect" id="contact__popup-button">Voir nos horaires <i class="uil uil-clock"></i></button>
                </div>
                
                <div class="contact__popup-modal" id="contact__popup-modal">
                    <div class="contact__data-content">
                        <div class="contact__data-contentClose">
                            <span class="contact__data-contentCloseButton"><i class="uil uil-multiply"></i></span>
                        </div>
                        <div class="contact__data-table">
                            <div class="contact__data-days">
                                <div class="contact__data-day">Lundi</div>
                                <div class="contact__data-day">Mardi</div>
                                <div class="contact__data-day">Mercredi</div>
                                <div class="contact__data-day">Jeudi</div>
                                <div class="contact__data-day">Vendredi</div>
                                <div class="contact__data-day">Samedi</div>
                                <div class="contact__data-day">Dimanche</div>
                            </div>
                            <div class="contact__data-morningHours">
                                <div class="contact__data-dayHour">Fermé</div>
                                <div class="contact__data-dayHourAlt">Ouvert</div>
                                <div class="contact__data-dayHour">Fermé</div>
                                <div class="contact__data-dayHourAlt">Ouvert</div>
                                <div class="contact__data-dayHour">12h | 15h</div>
                                <div class="contact__data-dayHourAlt">Ouvert</div>
                                <div class="contact__data-dayHour">12h | 15h</div>
                                <div class="contact__data-dayHourAlt">Ouvert</div>
                                <div class="contact__data-dayHour">12h | 15h</div>
                                <div class="contact__data-dayHourAlt">Ouvert</div>
                                <div class="contact__data-dayHour">Non-stop</div>
                                <div class="contact__data-dayHourAlt">Ouvert</div>
                                <div class="contact__data-dayHour">Fermé</div>
                                <div class="contact__data-dayHourAlt">Ouvert</div>
                            </div>
                            <div class="contact__data-nightHours">
                                <div class="contact__data-dayHour">Fermé</div>
                                <div class="contact__data-dayHourAlt">Ouvert</div>
                                <div class="contact__data-dayHour">18h | 21h</div>
                                <div class="contact__data-dayHourAlt">Ouvert</div>
                                <div class="contact__data-dayHour">18h | 21h</div>
                                <div class="contact__data-dayHourAlt">Ouvert</div>
                                <div class="contact__data-dayHour">18h | 22H</div>
                                <div class="contact__data-dayHourAlt">Ouvert</div>
                                <div class="contact__data-dayHour">18h | 22h</div>
                                <div class="contact__data-dayHourAlt">Ouvert</div>
                                <div class="contact__data-dayHour">12h | 23h</div>
                                <div class="contact__data-dayHourAlt">Ouvert</div>
                                <div class="contact__data-dayHour">17h | 23h</div>
                                <div class="contact__data-dayHourAlt">Ouvert</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="contact__button">
                    <a href="menu.php" class="contact__button-title contact__button-slideEffect">Contactez nous <i class="uil uil-phone"></i></a>
                    <a href="menu.php" class="contact__button-titleAlt contact__button-slideEffect"><i class="uil uil-phone"></i></a>
                </div>

            </div>

        </div>

        <div class="contact__plan">
            <div class="contact__plan-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2527.442008519038!2d3.1564099156294105!3d50.693181677726166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c328e3dd23fd3d%3A0x33219387c1bbd279!2s20%20Rue%20du%20Luxembourg%2C%2059100%20Roubaix!5e0!3m2!1sfr!2sfr!4v1629786139432!5m2!1sfr!2sfr" class="contact__plan-google" allowfullscreen="" loading="lazy" ></iframe>
            </div>
        </div>

    </section>

</main>

<?php include ('base/footer.php') ?>

<?php include ('base/script.php') ?>