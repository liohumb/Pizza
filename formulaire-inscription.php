<?php
    require_once ('dbcontroller.php');
    $pdo = new DBController();
?>

<?php include ('base/head.php') ?>

<?php include ('base/header.php')?>

<?php 
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $cpt_address = $_POST['cpt_address'];
    $post_code = $_POST['post_code'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql ="INSERT INTO `user`(`first_name`, `last_name`, `address`, `cpt_address`, `post_code`, `city`, `phone`, `email`, `pass`) VALUES (?,?,?,?,?,?,?,?,?)";
    $stmt = $pdo->connectDB()->prepare($sql);
    $stmt -> execute([$first_name, $last_name, $address, $cpt_address, $post_code, $city, $phone, $email, $pass]);
?>
0

( ! ) NOTICE: UNDEFINED INDEX: CPT_ADDRESS IN C:\WAMP64\WWW\PIZZA\FORMULAIRE-INSCRIPTION.PHP ON LINE 14

<section class="form__subscribe section">

    <h1 class="form__subscribe-title">Bien le bonjour <?php echo $_POST['first_name']?> !</h1>

    <div class="form__subscribe-container container grid">

        <div class="form__subscribe-data">

            <h2 class="section__title">Vous voilà devenu <br> notre client préféré !</h2>
            <p class="form__subscribe-description">C'est l'heure de passer votre première commande! <br>
                Vos identifant de connexion sont votre email (<?php echo $_POST['email']?>) et votre mot de passe.
            </p>

        </div>

        <div class="form__subscribe-img">

            <div class="form__subscribe-imgOverlay">
                <img src="assets/img/about1.jpg" alt="" class="form__subscribe-imgOne">
            </div>

            <div class="form__subscribe-imgOverlay">
                <img src="assets/img/about2.jpg" alt="" class="form__subscribe-imgTwo">
            </div>

        </div>

    </div>

    <div class="form__subscribe-button">
        <a href="connexion.php" class="button" >Connectez vous</a>
    </div>

</section>

<?php include ('base/footer.php') ?>

<?php include ('base/script.php') ?>