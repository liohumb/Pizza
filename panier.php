<?php
session_start();
 require_once("dbcontroller.php");
 $db_handle= new DBcontroller();
if(!empty($_GET["action"])){
    switch($_GET["action"]){
        case "ajoute":
            if(!empty($_POST["quantity"])){
                $produitByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
                $itemArray = array($produitByCode[0]["code"]=>array('name'=>$produitByCode[0]["name"], 'code'=>$produitByCode[0]["code"], 'quantity'=>$_POST["quantity"],'price'=>$produitByCode[0]["price"], 'image'=>$produitByCode[0]["image"]));

                if(!empty($_SESSION["Panier_item"])){
                    if(in_array($produitByCode[0]["code"],array_keys($_SESSION["Panier_item"]))){
                        foreach($_SESSION["Panier_item"]as $k => $v){
                            if($produitByCode[0]["code"] == $k){
                                if(empty($_SESSION["Panier_item"][$k]["quantity"])){
                                    $_SESSION["Panier_item"][$k]["quantity"]=0;
                                }
                            $_SESSION["Panier_item"][$k]["quantity"] += $_POST["quantity"];
                            }
                        }

                    }
                    else{
                        $_SESSION["Panier_item"] = array_merge($_SESSION["Panier_item"],$itemArray);
                    }
                }
                else{
                    $_SESSION["Panier_item"] = $itemArray;
                }
            }
            break;
        case "retire":
            if(!empty($_SESSION["Panier_item"])){
                foreach($_SESSION["Panier_item"] as $k =>$v){
                    if($_GET["code"] == $k){
                        unset($_SESSION["Panier_item"][$k]);
                    }
                    if(empty($_SESSION["Panier_item"])){
                        unset($_SESSION["Panier_item"]);
                    }
                }
            }
            break;
        case "vider":
            unset($_SESSION["Panier_item"]);
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
                        <td><?php echo $item["code"]; ?></td>
                        <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
                        <td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
                        <td  style="text-align:right;"><?php echo "$ ". number_format($item_prix,2); ?></td>
                        <td style="text-align:center;"><a href="panier.php?action=retire&code=<?php echo $item["code"]; ?>" class="btnRetireAction"><img src="icon-delete.png" alt="retire Item" /></a></td>
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
    <div id="produit_grid">
        <h3 class="panier__title">Produits</h3>
        <?php
            $produit_array =$db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
            if(!empty($produit_array)){
                foreach($produit_array as $key=>$value){
                    ?>
                    <div class="produit_item">
                        <form method="post" action="panier.php?action=ajoute&code=<?php echo $produit_array[$key]["code"]; ?>">
                            <div class="image-produit"><img src="<?php echo $produit_array[$key]["image"] ;?>" alt=""></div>
                            <div class="produit-tile-footer">
                                <div class="produit-title"><?php echo $produit_array[$key]["name"]; ?></div>
                                <div class="produit-prix"><?php echo "$" . $produit_array[$key]["price"]; ?></div>
                                <div class="action-panier"><input type="text" class="produit-quantity" name="quantity" value="1" size="2"/><input type ="submit" value="Ajouter au panier" class="btnAjouteAction" /></div>
                            </div>
                        </form>
                    </div>
                <?php
                }
            }
        ?>
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

