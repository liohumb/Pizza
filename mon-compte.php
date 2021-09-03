<?php include ('panierController.php') ?>
<?php require_once ('dbcontroller.php');
$db_handle = new DBcontroller(); ?>
<?php include ('base/head.php') ?>

<?php include ('base/header.php')?>
<?php
$user = $db_handle->runQuery("SELECT * FROM user WHERE id='" . $_SESSION['user']['id'] . "'");

?>
<main class="account" id="account">

    <section class="account__section section">

        <div class="account__container container grid">

            <div class="account__info">
                <h1 class="account__info-title"><?= $user[0]['first_name']?></h1>
                <h1 class="account__info-title"><?= $user[0]['last_name']?></h1>
            </div>

            <div class="account__data">
                <h3 class="account__data-title"><?= $user[0]['phone']?></h3>
                <h3 class="account__data-title"><?=$user[0]['address']?> <br> <?= $user[0]['post_code']?></h3>
                <h3 class="account__data-title"><?= $user[0]['email']?></h3>
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