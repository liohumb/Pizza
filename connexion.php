<?php include ('base/head.php') ?>

<body>

<?php include ('base/header.php')?>

<section class="connexion__section section">
    <div class="connexion__container container grid">
        <h1 class="connexion__form-title">Bienvenue !</h1>
        <form action="#" method="post" id="connexion_form">
            <div class="connexion__form-email">
                <label for="email">
                <input type="email" placeholder="Votre adresse email" name="email" id="mail_input" required>
                </label>
            </div>
            <div class="connexion__form-password">
                <label for="password">
                <input type="password" placeholder="Votre mot de passe" name="password" id="mdp_input" required>
                </label>
            </div>
            <div>
                <input type="submit" value="Connexion" class="button" />
            </div>
        </form>
    </div>
</section>

<?php include ('base/footer.php') ?>

<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>