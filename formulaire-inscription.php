<?php
    require_once ('dbcontroller.php');
    $pdo = new DBController();
?>

<?php include ('base/head.php') ?>

<?php include ('base/header.php')?>
<?php var_dump($_POST);
$Prenom=$_POST['Prenom'];
$Nom=$_POST['Nom'];
$Adresse=$_POST['Adresse'];
$Cpt_adresse=$_POST['Cpt-adresse'];
$cp=$_POST['cp'];
$ville=$_POST['ville'];
$Telephone=$_POST['Telephone'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql ="INSERT INTO `user`(`Prenom`, `Nom`, `Adresse`, `Cpt-adress`, `cp`, `ville`, `Telephone`, `email`, `password`) 
VALUES (?,?,?,?,?,?,?,?,?)";
$stmt= $conn->prepare($sql);
$stmt->execute([$Prenom, $Nom, $Adresse, $Cpt_adresse, $cp, $ville, $Telephone, $email, $password]);

?>

<section class="form__subscribe section">
    <h1 class="form__subscribe-title">Bien le bonjour <?php echo $_POST['prenom']?> !</h1>
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
                <img src="assets/img/about2.jpg" alt="" class=form__subscribe-imgTwo">
            </div>
        </div>
    </div>
    <div class="form__subscribe-button">
        <a href="connexion.php" class="button" >Connectez vous</a>
    </div>
</section>

<?php include ('base/footer.php') ?>

<?php include ('base/script.php') ?>