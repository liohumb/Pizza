<?php include ('panierController.php') ?>

<?php include ('base/head.php') ?>

<?php include ('base/header.php')?>

<section class="hero">

    <img src="assets/img/home1.jpg" alt="" class="hero__img">

</section>

<section class="form__password section">

    <div class="form__password-container container grid">

        <h1 class="form__password-title">Sécurité avant tout !</h1>

        <form action="#" method="post" id="contact_form">

            <div class="form__password-oldPassword">
                <label for="name">
                    <input type="text" placeholder="Votre ancien mot de passe" name="telephone" id="telephone_input" required>
                </label>
            </div>

            <div class="form__password-newPassword">
                <label for="name">
                    <input type="text" placeholder="Votre nouveau mot de passe" name="telephone" id="telephone_input" required>
                </label>
            </div>

            <div class="form__password-confNewPassword">
                <label for="name">
                    <input type="text" placeholder="Confirmez votre nouveau mot de passe" name="telephone" id="telephone_input" required>
                </label>
            </div>

            <div>
                <input type="submit" value="Modifier mon mot de passe" class="button"/>
                <a href="mon-compte.php" class="button">Retour à mon compte</a>
            </div>

        </form>

    </div>

</section>

<?php include ('base/footer.php') ?>

<?php include ('base/script.php') ?>