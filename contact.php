<?php include ('panierController.php') ?>

<?php include ('base/head.php') ?>

<?php include ('base/header.php')?>

<section class="form__contact section">
    <div class="form__container container grid">
        <h1 class="form__contact-title">Dites nous tout !</h1>
        <form action="formulaire-contact.php" method="POST">
            <div class="form__contact-name">
                <label for="first_name">
                    <input type="text" placeholder="Votre prénom" name="first_name" required>
                </label>
            </div>
            <div class="form__contact-email">
                <label for="email">
                    <input type="email" placeholder="Votre email" name="email" required>
                </label>
            </div>
            <div class="form__contact-phone">
                <label for="phone">
                    <input type="text" placeholder="Votre numéro de téléphone" name="telephone" required>
                </label>
            </div>
            <div class="form__contact-subject">
                <label for="subject">
                    <select name="subject" id="subject_input">
                        <option disabled hidden selected>Selectionnez l'objet de votre message</option>
                        <option>Je souhaite avoir des informtions sur les pizzas</option>
                        <option>J'ai un soucis avec ma commande</option>
                        <option>Je n'arrive pas à passer commande</option>
                        <option>Je veux juste faire blabla :)</option>
                    </select>
                </label>
            </div>
            <div class="form__contact-message">
                <label for="message">
                    <textarea name="message" placeholder="Je suis toute ouïe" id="message_input" cols="30" rows="5" required></textarea>
                </label>
            </div>
            <div>
                <input type="submit" value="Envoyer" class="button" />
            </div>
        </form>
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

<?php include ('base/footer.php') ?>

<?php include ('base/script.php') ?>