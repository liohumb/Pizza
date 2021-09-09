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

            <!-- <div class="add__form-categories">
                <label for="subject">
                    <select name="subject" id="subject_input" required>
                        <option disabled hidden selected>Choisissez une catégorie</option>
                        <option>Les suggestions</option>
                        <option>Les pizzas</option>
                        <option>Les boissons</option>
                        <option>Les desserts</option>
                    </select>
                </label>
            </div> -->

            <div class="add__form-name">
                <label for="name">
                <input type="text" placeholder="Nom du produit" name="name" id="name_input" required>
                </label>
            </div>

            <!-- <div class="add__form-option">
                <label for="subject">
                <select name="subject" id="subject_input" required>
                    <option disabled hidden selected>Choisissez une option</option>
                    <option>Aucune option</option>
                    <option>Taille : 26 cm</option>
                    <option>Taille : 32 cm</option>
                    <option>Taille : 36 cm</option>
                    <option>Quantité : 33cl</option>
                    <option>Quantité : 1L</option>
                    <option>Parfum : vanille</option>
                    <option>Parfum : chocolat</option>
                    <option>Parfum : fraise</option>
                    <option>Parfum : pistache</option>
                </select>
                </label>
            </div> -->

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

            <div class="add__form-upload button">
                <span class="add__form-uploadLabel button__slide-effect">Importer une image</span>
                <input type="file" name="upload" class="add__form-uploadInput" placeholder="Upload File">
            </div>

    </div>
                    <?php //var_dump($_POST) ?>
    <div class="add__form-button button">
            <input type="submit" class="button__title button__slide-effect" value="Ajouter"/>
    </div>

        </form>

</section>

<?php include('base/footer.php') ?>

<?php include ('base/script.php') ?>