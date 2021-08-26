<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/inscription.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/produit.css">
    <link rel="stylesheet" href="../assets/css/table.css">
    <title>Pizza</title>
</head>
<body>
<header class="header nav_menu-page" id="header">
    <nav class="nav container">
        <a href="../index.php" class="nav__logo">LORENZZO'S PIZZA</a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="commandes.php" class="nav__link">Commandes</a>
                </li>
                <li class="nav__item">
                    <a href="modifier-produit.php" class="nav__link">Produits</a>
                </li>
                <li class="nav__item">
                    <a href="messages.php" class="nav__link">Messages</a>
                </li>
                <li class="nav__item">
                    <a href="clients.php" class="nav__link">Utilisateurs</a>
                </li>
                <li class="nav__item">
                    <a href="modifier-informations.php" class="btn-conn"><i class="uil uil-user-circle"></i></a>
                    |
                    <a href="../index.php" class="btn-conn"><i class="uil uil-times"></i></a>
                </li>
            </ul>

            <i class="uil uil-times nav__close" id="nav-close"></i>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class="uil uil-bars"></i>
        </div>
    </nav>
</header>
<section class="about section">
    <div class="container grid home__menu">
        <div class="about__container container grid">

            <div class="about__img">
                <h1 class="product-name">Il y a de la nouveauté ?</h1>
            </div>

            <div class="contact__data">
                <h3 class="product-slogan">statut : admin</h3>
                <h3 class="product-slogan">Nombre de commande : ##</h3>
                <h3 class="product-slogan">Nombre de message (non-lu) : ##</h3>
            </div>
        </div>
        <div class="btn-back">
            <a href="admin.php" class="button btn-ret-aj">Retour Acceuil</a>
        </div>
    </div>
</section>
<section class="contact section">
    <div id="container">
        <h1>Quoi de neuf ?</h1>
        <form action="#" method="post" id="contact_form">
            <div class="subject">
                <label for="subject"></label>
                <select placeholder="Subject line" name="subject" id="subject_input" required>
                    <option disabled hidden selected>Choisissez une catégorie</option>
                    <option>Les suggestions</option>
                    <option>Les pizzas</option>
                    <option>Les boissons</option>
                    <option>Les desserts</option>
                </select>
            </div>
            <div class="nom">
                <label for="name"></label>
                <input type="text" placeholder="Nom du produit" name="name" id="name_input" required>
            </div>
            <div class="prenom">
                <label for="subject"></label>
                <select placeholder="Subject line" name="subject" id="subject_input" required>
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
            </div>
            <div>
                <label for="name"></label>
                <input type="text" placeholder="Description du produit" name="name" id="name_input" required>
            </div>
            <div class="cp">
                <label for="name"></label>
                <input type="text" placeholder="Prix" name="name" id="name_input" required>
            </div>
            <div class="ville import">
                <label class="label-ajout" for="upload-photo">Importer photo</label>
                <input type="file" name="photo" id="upload-photo" />
            </div>
            <div>
                <input type="submit" class="button btn-add" value="Ajouter"/>
            </div>
        </form>
    </div>
</section>

<footer class="footer section">
    <div class="footer__container container grid">
        <div class="footer__content grid">
            <div class="footer__data">
                <h3 class="footer__title">LORENZZO'S PIZZA</h3>
                <p class="footer__description">Venez manger de <br> délicieuses pizzas.
                </p>
            </div>

            <div class="footer__data">
                <h3 class="footer__subtitle">A propos</h3>
                <ul>
                    <li class="footer__item">
                        <a href="../index.php" class="footer__link">À propos de nous</a>
                    </li>
                    <li class="footer__item">
                        <a href="../menu.php" class="footer__link">Nos pizza</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer__rights">
            <p class="footer__copy">&#169; 2021 Pizza | Agence SHARK</p>
        </div>
    </div>
</footer>
<script src="../assets/js/scrollreveal.min.js"></script>
<script src="../assets/js/swiper-bundle.min.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html>