<?php include ('panierController.php') ?>

<?php include ('base/head.php') ?>

<?php include ('base/header.php')?>

<section class="form__response section" id="about">
    <h1 class="form__response-title">Bien le bonjour <?php echo $_POST['first_name']?> !</h1>
    <div class="form__response-container container grid">
        <div class="form__response-data">
            <h2 class="section__title">Nous avons bien reçu <br>votre message ! </h2>
            <p class="form__response-description">Nous vous répondrons dans les plus bref délais à l'adresse : <?php echo $_POST['email'] ?> .
                <br>En attendant pourquoi pas commander une bonne pizza ?
                <br><br>À bientôt <?php echo $_POST['first_name']?> !
            </p>
            <a href="menu.php" class="button" >Découvrir le menu</a>
        </div>

        <div class="form__response-img">
            <div class="form__response-imgOverlay">
                <img src="assets/img/about1.jpg" alt="" class="form__response-imgOne">
            </div>

            <div class="form__response-imgOverlay">
                <img src="assets/img/about2.jpg" alt="" class="form__response-imgTwo">
            </div>
        </div>
    </div>
</section>

<?php include ('base/footer.php') ?>

<?php include ('base/script.php') ?>