<?php include ('base/head.php') ?>

<?php include ('base/header.php')?>

<section class="form__contact section">
    <div class="form__container container grid">
        <h1 class="form__contact-title">Dites nous tout !</h1>
        <form action="formulaire-contact.php" method="post" id="contact_form">
            <div class="form__contact-name">
                <label for="name">
                    <input type="text" placeholder="Votre prémon" name="nom" id="name_input" required>
                </label>
            </div>
            <div class="form__contact-email">
                <label for="mail">
                    <input type="email" placeholder="Votre email" name="email" id="email_input" required>
                </label>
            </div>
            <div class="form__contact-phone">
                <label for="phone">
                    <input type="text" placeholder="Votre numéro de téléphone" name="telephone" id="telephone_input" required>
                </label>
            </div>
            <div class="form__contact-subject">
                <label for="subject">
                    <select placeholder="Subject line" name="subject" id="subject_input">
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

<?php include ('base/footer.php') ?>

<?php include ('base/script.php') ?>