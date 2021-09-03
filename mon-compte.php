<?php include ('panierController.php') ?>
<?php require_once ('dbcontroller.php');
$db_handle = new DBcontroller(); ?>
<?php include ('base/head.php') ?>

<?php include ('base/header.php')?>
<?php
$userInfo = $db_handle->runQuery("SELECT * FROM user WHERE id='" . $_SESSION['user']['id'] . "'");
if(!empty($userInfo)){
    $userInfo=$userInfo[0];
    $_SESSION['userInfo']=$userInfo;
}
?>
<main class="account" id="account">

    <section class="hero">

        <img src="assets/img/home1.jpg" alt="" class="hero__img">

    </section>

    <section class="account__section section">

        <div class="account__container container grid">

            <div class="account__info">
                <h1 class="account__info-title"><?= $userInfo['first_name']?></h1>
                <h1 class="account__info-title"><?= $userInfo['last_name']?></h1>
            </div>

            <div class="account__data">
                <h3 class="account__data-title"><?= $userInfo['phone']?></h3>
                <h3 class="account__data-title"><?=$userInfo['address']?> <br> <?= $userInfo['post_code']?></h3>
                <h3 class="account__data-title"><?= $userInfo['email']?></h3>
            </div>

        </div>

        <div class="account__button">
            <a href="index.php" class="account__button-option button">Retour à l'acceuil</a>
            <a href="modifier-mon-compte.php" class="account__button-option button">Modifier informations</a>
            <a href="modifier-mdp.php" class="account__button-option button">Modifier mot de passe</a>
        </div>

    </section>
<?php var_dump($_SESSION['userInfo']) ;?>
</main>

<?php include ('base/footer.php') ?>

<?php include ('base/script.php') ?>