<?php include('base/head.php') ?>
<?php include ('panierController.php') ?>
<?php
    require_once ('dbcontroller.php');
    $db_handle = new DBcontroller();
?>
<?php include ('base/header-admin.php') ?>
<?php
    $admin = $_SESSION['admin'];
    $id = $_GET['id'];
    $sizes = $db_handle->runQuery("SELECT * FROM option_product WHERE category_id = $id");
?>
<section class="hero">

    <img src="assets/img/home1.jpg" alt="" class="hero__img">

</section>

<section class="section">

    <div class="container grid">

        <div class="add__container container grid">

            <div class="add__info">
                <h1 class="add__info-title">Il y a de la nouveauté ?</h1>
            </div>

            <div class="add__data">
                <h3 class="add__data-title">statut : <?= $admin['poste'] ?></h3>
                <h3 class="add__data-title">Nombre de commande : ##</h3>
                <h3 class="add__data-title">Nombre de message (non-lu) : ##</h3>
            </div>

        </div>

        <div class="add__button">
            <div class="button">
                <a href="admin.php" class="button__title button__slide-effect">Retour Acceuil</a>
            </div>
        </div>

    </div>

</section>

<section class="add section">

    <div class="container grid">

        <h1 class="add__title">Quoi de neuf ?</h1>

        <form action="#" method="post" id="contact_form" enctype="multipart/form-data">

            <div class="add__form-name">
                <label for="name">
                <input type="text" placeholder="Nom du produit" name="name" id="name_input" required>
                </label>
            </div>

            <div class="add__form-description">
                <label for="name">
                <input type="text" placeholder="Description du produit" name="name" id="name_input" required>
                </label>
            </div>

            <div class="add__form-price">
                <?php
                    foreach($sizes as $size){
                     ?>
                    
                <label for="name">
               <?= $size['opt'] ?><input type="text" placeholder="Prix" name="<?= $size['id'] ?>" id="name_input" required>
                </label>
               
                     <?php   
                    }
                ?>
           </div>

            <div class="add__form-upload">
                <label class="label-ajout" for="upload-photo">Importer photo </label>
                <input type="file" name="photo" class="add__form-uploadPicture"/>
               
            </div>

    </div>
                    <?php var_dump($_POST) ;
                    if(isset($_POST['Ajouter'])){
                        if (isset($_FILES['photo']) && $_FILES['photo']['error']== 0){
                            $infoImg = pathinfo($_FILES['photo']['name']);
                            $ext = $infoImg['extension'];
                            $ext_auto = array("jpg", "jpeg", "gif", "png");
                            if(in_array($ext,$ext_auto)){
                                move_uploaded_file($_FILES['photo']['tmp_name'], 'assets/upload/'. basename($_FILES['photo']['name']));
                            }
                            
                            var_dump($infoImg);
                            var_dump($ext);
                        }
                    }
                    ?>
                    <?php ?>
    <div class="add__form-button">
        <div class="button">
            <input type="submit" class="button__title button__slide-effect" name="Ajouter" value="Ajouter"/>
        </div>
    </div>

        </form>

</section>

<?php include('base/footer.php') ?>

<?php include ('base/script.php') ?>