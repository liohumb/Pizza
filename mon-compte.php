<?php include ('base/head.php') ?>

<body>

<?php include ('base/header.php')?>

<main class="account" id="account">
    <section class="account__section section">
        <div class="account__container container grid">

            <div class="account__info">
                <h1 class="account__info-title">John Doe</h1>
            </div>

            <div class="account__data">
                <h3 class="account__data-title">06 06 06 06 06</h3>
                <h3 class="account__data-title">21 rue de Marseille <br> 75001 PARIS</h3>
                <h3 class="account__data-title">john@doe.fr</h3>
            </div>
        </div>
        <div class="account__button">
            <a href="index.php" class="account__button-option button">Retour à l'acceuil</a>
            <a href="modifier-mon-compte.php" class="account__button-option button">Modifier informations</a>
            <a href="modifier-mdp.php" class="account__button-option button">Modifier mot de passe</a>
        </div>
    </section>
</main>

<?php include ('base/footer.php') ?>

<?php include ('base/script.php') ?>