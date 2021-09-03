<?php include ('panierController.php') ?>
<?php require_once ('dbcontroller.php')?>
<?php include ('base/head.php') ?>
<?php include ('base/header.php')?>
<?php 
$db_handle=new DBcontroller();
if(isset($_POST['email'])){
$user =$db_handle->runQuery("SELECT id, email, pass FROM user WHERE email='" . $_POST['email'] . "'");
}
if(isset($_POST['email'])){
    if(count($user) == 1){
         $user = $user[0];
        if ($user['pass']==$_POST['pass']){
            $_SESSION['user']=$user;
                header("Location: mon-compte.php");
                exit;
        }
        else{
            echo 'invalid password';
            }

        }
        else{
            echo 'invalid email';
        }
    }

?>

<section class="hero">

    <img src="assets/img/home1.jpg" alt="" class="hero__img">

</section>

<section class="connexion__section section">

    <div class="connexion__container container grid">

        <h1 class="connexion__form-title">Bienvenue !</h1>

        <form action="" method="post" id="connexion_form">

            <div class="connexion__form-email">

                <label for="email">
                <input type="email" placeholder="Votre adresse email" name="email" id="mail_input" required>
                </label>

            </div>

            <div class="connexion__form-password">

                <label for="password">
                <input type="password" placeholder="Votre mot de passe" name="pass" id="mdp_input" required>
                </label>

            </div>

            <div>
                <input type="submit" value="Connexion" class="button" />
            </div>

        </form>
    
    </div>

</section>


<?php include ('base/footer.php') ?>

<?php include ('base/script.php') ?>