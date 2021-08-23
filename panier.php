<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "retire":
		if(!empty($_SESSION["Panier_item"])) {
			foreach($_SESSION["Panier_item"] as $k => $v) {
					if($_GET["id"] == $k)
						unset($_SESSION["Panier_item"][$k]);				
					if(empty($_SESSION["Panier_item"]))
						unset($_SESSION["Panier_item"]);
			}
		}
	break;
	case "vider":
		unset($_SESSION["Panier_item"]);
	break;	
}
}
?>
<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="assets/css/panier.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Pizza</title>
</head>
<body>
<header class="header nav_menu-page" id="header">
    <nav class="nav container">
        <a href="#" class="nav__logo">LORENZZO'S PIZZA</a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="index.html" class="nav__link">Acceuil</a>
                </li>
                <li class="nav__item">
                    <a href="index.html" class="nav__link">À propos</a>
                </li>
                <li class="nav__item">
                    <a href="menu.html" class="nav__link">Le Menu</a>
                </li>
                <li class="nav__item">
                    <a href="contact.html" class="nav__link">Contact</a>
                </li>
            </ul>

            <i class="uil uil-times nav__close" id="nav-close"></i>
        </div>

        <a href="panier.php" class="nav__link nav__cart"><i class="uil uil-pizza-slice cart_logo"></i></a>

        <div class="nav__toggle" id="nav-toggle">
            <i class="uil uil-bars"></i>
        </div>
    </nav>
</header>

<section class="cart section">
    <div class="panier__container container grid">
        <div class="panier__content grid">
            <h3 class="panier__title">Votre panier</h3>
            <a href="panier.php?action=vider" id="btnVider">Vider Panier</a>
             <?php
                 if(isset($_SESSION["Panier_item"])){
                    $quantityTotal = 0;
                    $PrxTotal = 0;
                 
            ?>
            <table class="tbl-panier" cellpadding="10" cellspacing="1">
                <tbody>
                    <tr>
                        <th>Nom</th>
                        <th>Code</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Prix</th>
                        <th>Supprimé</th>
                    </tr>
                    <?php
                    foreach($_SESSION["Panier_item"]as $item){
                        $item_prix = $item["quantity"]*$item["price"];
                        ?>
                        <tr>
                        <td><img src="<?php echo $item["image"];?>" class="panier_item_image" alt=""><?php echo $item["name"]?></td>
                        <td><?php echo $item["id"]; ?></td>
                        <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
                        <td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
                        <td  style="text-align:right;"><?php echo "$ ". number_format($item_prix,2); ?></td>
                        <td style="text-align:center;"><a href="panier.php?action=retire&id=<?php echo $item["id"]; ?>" class="btnRetireAction"><img src="icon-delete.png" alt="retire Item" /></a></td>
				        </tr>
                    <?php
                    $quantityTotal += $item["quantity"];
                    $PrxTotal += ($item["price"]*$item["quantity"]);
                    }
                    ?>
                    <tr>
                        <td class ="right">Total:</td>
                        <td class ="right"><?php echo $quantityTotal;?></td>
                        <td class="right"><strong><?php echo"$ ".number_format($PrxTotal, 2); ?></strong></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <?php
                }
                else{
                    ?>
                    <div class ="no-records">Votre panier est vide </div>
                    <?php
                } 
                ?>
        </div>
    </div>


</section>

<footer class="footer section">
    <div class="footer__container container grid">
        <div class="footer__content grid">
            <div class="footer__data">
                <h3 class="footer__title">PIZZA</h3>
                <p class="footer__description">Venez manger de <br> délicieuses pizzas.
                </p>
            </div>

            <div class="footer__data">
                <h3 class="footer__subtitle">A propos</h3>
                <ul>
                    <li class="footer__item">
                        <a href="" class="footer__link">À propos de nous</a>
                    </li>
                    <li class="footer__item">
                        <a href="" class="footer__link">Nos pizza</a>
                    </li>
                </ul>
            </div>

            <div class="footer__data">
                <h3 class="footer__subtitle">Le Menu</h3>
                <ul>
                    <li class="footer__item">
                        <a href="" class="footer__link">Les pizzas</a>
                    </li>
                    <li class="footer__item">
                        <a href="" class="footer__link">Les boissons</a>
                    </li>
                    <li class="footer__item">
                        <a href="" class="footer__link">Les desserts</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer__rights">
            <p class="footer__copy">&#169; 2021 Pizza | Agence SHARK</p>
        </div>
    </div>
</footer>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>

