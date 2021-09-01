<header class="header nav__menu-page" id="header">
    <nav class="nav container">
        <a href="index.php" class="nav__logo">LORENZZO'S PIZZA</a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li>
                    <a href="menu.php" class="nav__link">Le menu</a>
                </li>
                <li>
                    <a href="contact.php" class="nav__link">Nous contacter</a>
                </li>
                <li>
                    <a href="inscription.php" class="btn-conn">Inscription</a>
                    |
                    <a href="connexion.php" class="btn-conn">Connexion</a>
                    <!--
                    <a href="" class="btn-conn">Mon compte</a>
                    |
                    <a href="" class="btn-conn">Déconnexion</a>
                    -->
                </li>
            </ul>

            <i class="uil uil-times nav__close" id="nav-close"></i>
        </div>

        <?php
        if(isset($_SESSION["Panier_item"])){
            $quantityTotal = 0;
            $PrxTotal = 0;

            foreach($_SESSION["Panier_item"]as $item){
                $item_prix = $item["quantity"]*$item["price"];
                $quantityTotal += $item["quantity"];
                $PrxTotal += ($item["price"]*$item["quantity"]);

            }

            $quantityTotal += $item["quantity"];
            $PrxTotal += ($item["price"]*$item["quantity"]);

        }
        ?>

        <a href="panier.php" class="nav__link"><i class="uil uil-pizza-slice nav__logo-cart"></i><span class="nav__cart-number"><?php echo $item["quantity"]; ?></span></a>

        <div class="nav__toggle" id="nav-toggle">
            <i class="uil uil-bars"></i>
        </div>
    </nav>
</header>