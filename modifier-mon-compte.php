<?php include ('panierController.php') ?>

<?php include ('base/head.php') ?>

<?php include ('base/header.php')?>

<section class="editAccount section">
    <div class="editAccount__container container grid">
        <h1 class="editAccount__title">Quoi de neuf ?</h1>
        <form action="#" method="post" id="editAccount__form">
            <div class="editAccount__form-firstName">
                <label for="first_name">
                    <input type="text" placeholder="Votre prenom" name="name" id="name_input" required>
                </label>
            </div>
            <div class="editAccount__form-lastName">
                <label for="last_name">
                    <input type="text" placeholder="Votre nom" name="name" id="name_input" required>
                </label>
            </div>
            <div class="editAccount__form-address">
                <label for="address">
                    <input type="text" placeholder="Votre adresse de livraison" name="name" id="name_input" required>
                </label>
            </div>
            <div class="editAccount__form-cptAdresse">
                <label for="cpt_address">
                    <input type="text" placeholder="Complément adresse" name="name" id="name_input" required>
                </label>
            </div>
            <div class="editAccount__form-postCode">
                <label for="post_code">
                    <input type="text" placeholder="Votre code postal" name="name" id="name_input" required>
                </label>
            </div>
            <div class="editAccount__form-city">
                <label for="city">
                    <input type="text" placeholder="Votre ville" name="name" id="name_input" required>
                </label>
            </div>
            <div class="submit">
                <input type="submit" value="Modifier mes informations" class="button">
                <a href="mon-compte.php" class="button">Retour à mon compte</a>
            </div>
        </form>
    </div>
</section>

<?php include ('base/footer.php') ?>

<?php include ('base/script.php') ?>