<?php include ('panierController.php') ?>
<?php
    require_once ('dbcontroller.php');
    $db_handle = new DBcontroller();
?>

<?php include('base/head.php') ?>

<?php include ('base/header-admin.php') ?>

<?php
    $admin = $db_handle->runQuery("SELECT * FROM admin WHERE id='" . $_SESSION['admin']['id'] . "'");
?>

<section class="hero">

    <img src="assets/img/home1.jpg" alt="" class="hero__img">

</section>

<section class="admin section">

    <div class="admin__container container grid">

        <div class="admin__info">
            <h1 class="admin__info-title">Bonjour, <?= $admin[0]['first_name'] ?> !</h1>
        </div>

        <div class="admin__data">
            <h3 class="admin__data-title">statut : admin</h3>
            <h3 class="admin__data-title">Nombre de commande : ##</h3>
            <h3 class="admin__data-title">Nombre de message (non-lu) : ##</h3>
        </div>

    </div>

    <div class="admin__button">
        <a href="admin-modifier-produit.php" class="admin__button-option button">Modifier les produits</a>
        <a href="admin-commandes.php" class="admin__button-option button">Acceder aux commandes</a>
    </div>

    <div class="admin__button">
        <a href="admin-messages.php" class="admin__button-option button">Lire les messages</a>
        <a href="admin-modifier-informations.php" class="admin__button-option button">Modifier informations</a>
    </div>

</section>

<?php include('base/footer.php') ?>

<?php include ('base/script.php') ?>