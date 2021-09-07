<?php include ('panierController.php') ?>
<?php
require_once ('dbcontroller.php');
$db_handle = new DBcontroller();
?>

<?php include('base/head.php') ?>

<?php include ('base/header-worker.php') ?>

<?php
$worker = $db_handle->runQuery("SELECT * FROM worker ");
$_SESSION['worker']= $worker[0];
?>

    <section class="hero">

        <img src="assets/img/home1.jpg" alt="" class="hero__img">

    </section>

    <section class="admin section">

        <div class="admin__container container grid">

            <div class="admin__info">
                <h1 class="admin__info-title">Bonjour, <?= $_SESSION['worker']['first_name'] ?> !</h1>
            </div>

            <div class="admin__data">
                <h3 class="admin__data-title">statut :<?= $_SESSION['worker']['poste'] ?></h3>
                <h3 class="admin__data-title">Nombre de commande : ##</h3>
                <h3 class="admin__data-title">Nombre de message (non-lu) : ##</h3>
            </div>

        </div>

        <div class="admin__button">
            <div class="button">
                <a href="admin-commandes.php" class="button__title button__slide-effect">Acceder aux commandes</a>
            </div>
            <div class="button">
                <a href="admin-messages.php" class="button__title button__slide-effect">Lire les messages</a>
            </div>
        </div>

        <div class="admin__button">
            <div class="button">
                <a href="admin-modifier-informations.php" class="button__title button__slide-effect">Modifier informations</a>
            </div>
        </div>

    </section>

<?php include('base/footer.php') ?>

<?php include ('base/script.php') ?>