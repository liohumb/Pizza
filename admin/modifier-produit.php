<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
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

<main class="home" id="home">
    <section class="about section">
        <div class="container grid home__menu">
            <div class="about__container container grid">

                <div class="about__img">
                    <h1 class="product-name">On mange quoi ? <br>On boit quoi ?</h1>
                </div>

                <div class="contact__data">
                    <h3 class="product-slogan">statut : admin</h3>
                    <h3 class="product-slogan">Nombre de commande : ##</h3>
                    <h3 class="product-slogan">Nombre de message (non-lu) : ##</h3>
                </div>
            </div>
            <div class="mini__menu">
                <div>
                    <span>Accés rapide</span>
                </div>
                <div class="mini__menu-btn">
                    <span>• › <a href="#suggestions">Les Suggestions</a></span> <br>
                    <span>• › <a href="#pizzas">Les Pizzas</a></span> <br>
                    <span>• › <a href="#boissons">Les Boissons</a></span> <br>
                    <span>• › <a href="#desserts">Les Desserts</a></span></div>
            </div>
            <div class="btn-back">
                <a href="admin.php" class="button btn-ret-aj">Retour Acceuil</a>
            </div>
        </div>
    </section>
    <section>
        <div class="container grid categories" id="suggestions">
            <h2 class="section__title menu_boisson">Les Suggestions</h2>
            <a href="ajouter.php" class="button btn-add">ajouter</a>

            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Image</th>
                        <th><i class="uil uil-trash-alt"></i></th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                    <tr>
                        <td>12</td>
                        <td>La chêvre</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper laoreet elit, id convallis dui.</td>
                        <td>12.00</td>
                        <td>
                            <label for="upload-photo">Importer photo</label>
                            <input type="file" name="photo" id="upload-photo" />
                        </td>
                        <td><i class="uil uil-trash-alt"></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>La 4 fromages</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper laoreet elit, id convallis dui.</td>
                        <td>11.00</td>
                        <td>
                            <label for="upload-photo">Importer photo</label>
                            <input type="file" name="photo" id="upload-photo" />
                        </td>
                        <td><i class="uil uil-trash-alt"></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>La pepperoni</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper laoreet elit, id convallis dui.</td>
                        <td>8.00</td>
                        <td>
                            <label for="upload-photo">Importer photo</label>
                            <input type="file" name="photo" id="upload-photo" />
                        </td>
                        <td><i class="uil uil-trash-alt"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container grid categories" id="pizzas">
            <h2 class="section__title menu_boisson">Les Pizzas</h2>
            <a href="ajouter.php" class="button btn-add">ajouter</a>

            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Image</th>
                        <th><i class="uil uil-trash-alt"></i></th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>La chorizzo</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper laoreet elit, id convallis dui.</td>
                            <td>10.00</td>
                            <td>
                                <label for="upload-photo">Importer photo</label>
                                <input type="file" name="photo" id="upload-photo" />
                            </td>
                            <td><i class="uil uil-trash-alt"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>La poulette</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper laoreet elit, id convallis dui.</td>
                            <td>10.00</td>
                            <td>
                                <label for="upload-photo">Importer photo</label>
                                <input type="file" name="photo" id="upload-photo" />
                            </td>
                            <td><i class="uil uil-trash-alt"></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>La pizza enfant</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper laoreet elit, id convallis dui.</td>
                            <td>7.00</td>
                            <td>
                                <label for="upload-photo">Importer photo</label>
                                <input type="file" name="photo" id="upload-photo" />
                            </td>
                            <td><i class="uil uil-trash-alt"></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>La mozza</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper laoreet elit, id convallis dui.</td>
                            <td>10.00</td>
                            <td>
                                <label for="upload-photo">Importer photo</label>
                                <input type="file" name="photo" id="upload-photo" />
                            </td>
                            <td><i class="uil uil-trash-alt"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container grid categories" id="boissons">
            <h2 class="section__title menu_boisson">Les Boissons</h2>
            <a href="ajouter.php" class="button btn-add">ajouter</a>

            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Image</th>
                        <th><i class="uil uil-trash-alt"></i></th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td>5</td>
                            <td>Coca-Cola</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper laoreet elit, id convallis dui.</td>
                            <td>3.00</td>
                            <td>
                                <label for="upload-photo">Importer photo</label>
                                <input type="file" name="photo" id="upload-photo" />
                            </td>
                            <td><i class="uil uil-trash-alt"></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Schweppes</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper laoreet elit, id convallis dui.</td>
                            <td>3.50</td>
                            <td>
                                <label for="upload-photo">Importer photo</label>
                                <input type="file" name="photo" id="upload-photo" />
                            </td>
                            <td><i class="uil uil-trash-alt"></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Vin</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper laoreet elit, id convallis dui.</td>
                            <td>9.00</td>
                            <td>
                                <label for="upload-photo">Importer photo</label>
                                <input type="file" name="photo" id="upload-photo" />
                            </td>
                            <td><i class="uil uil-trash-alt"></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Carlsberg</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper laoreet elit, id convallis dui.</td>
                            <td>4.00</td>
                            <td>
                                <label for="upload-photo">Importer photo</label>
                                <input type="file" name="photo" id="upload-photo" />
                            </td>
                            <td><i class="uil uil-trash-alt"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container grid categories" id="desserts">
            <h2 class="section__title menu_boisson">Les Desserts</h2>
            <a href="ajouter.php" class="button btn-add">ajouter</a>

            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Image</th>
                        <th><i class="uil uil-trash-alt"></i></th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td>9</td>
                            <td>Tiramisu</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper laoreet elit, id convallis dui.</td>
                            <td>3.00</td>
                            <td>
                                <label for="upload-photo">Importer photo</label>
                                <input type="file" name="photo" id="upload-photo" />
                            </td>
                            <td><i class="uil uil-trash-alt"></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Glace</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper laoreet elit, id convallis dui.</td>
                            <td>2.50</td>
                            <td>
                                <label for="upload-photo">Importer photo</label>
                                <input type="file" name="photo" id="upload-photo" />
                            </td>
                            <td><i class="uil uil-trash-alt"></td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Muffins</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper laoreet elit, id convallis dui.</td>
                            <td>4.00</td>
                            <td>
                                <label for="upload-photo">Importer photo</label>
                                <input type="file" name="photo" id="upload-photo" />
                            </td>
                            <td><i class="uil uil-trash-alt"></td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Cookies</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper laoreet elit, id convallis dui.</td>
                            <td>3.50</td>
                            <td>
                                <label for="upload-photo">Importer photo</label>
                                <input type="file" name="photo" id="upload-photo" />
                            </td>
                            <td><i class="uil uil-trash-alt"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</main>
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