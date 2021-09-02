<?php include('base/head.php') ?>

<?php include ('base/header-admin.php') ?>

<section class="section">

    <div class="container grid">

        <div class="add__container container grid">

            <div class="add__info">
                <h1 class="add__info-title">Il y a de la nouveauté ?</h1>
            </div>

            <div class="add__data">
                <h3 class="add__data-title">statut : admin</h3>
                <h3 class="add__data-title">Nombre de commande : ##</h3>
                <h3 class="add__data-title">Nombre de message (non-lu) : ##</h3>
            </div>

        </div>

        <div class="add__button">
            <a href="admin.php" class="add__button-option button">Retour Acceuil</a>
        </div>

    </div>

</section>

<section class="add section">

    <div class="container grid">

        <h1 class="add__title">Quoi de neuf ?</h1>

        <form action="#" method="post" id="contact_form">

            <div class="add__form-categories">
                <label for="subject">
                    <select name="subject" id="subject_input" required>
                        <option disabled hidden selected>Choisissez une catégorie</option>
                        <option>Les suggestions</option>
                        <option>Les pizzas</option>
                        <option>Les boissons</option>
                        <option>Les desserts</option>
                    </select>
                </label>
            </div>

            <div class="add__form-name">
                <label for="name">
                <input type="text" placeholder="Nom du produit" name="name" id="name_input" required>
                </label>
            </div>

            <div class="add__form-option">
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
            </div>

            <div class="add__form-description">
                <label for="name">
                <input type="text" placeholder="Description du produit" name="name" id="name_input" required>
                </label>
            </div>

            <div class="add__form-price">
                <label for="name">
                <input type="text" placeholder="Prix" name="name" id="name_input" required>
                </label>
            </div>

            <div class="add__form-upload">
                <label class="label-ajout" for="upload-photo">Importer photo</label>
                <input type="file" name="photo" class="add__form-uploadPicture">
            </div>

            <div>
                <input type="submit" class="user__form-button button" value="Ajouter"/>
            </div>

        </form>

    </div>

</section>

<?php include('base/footer.php') ?>

<?php include ('base/script.php') ?>