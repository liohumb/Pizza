<?php session_start();
require_once("dbcontroller.php");


$db_handle= new DBcontroller();
if(!empty($_GET["action"])) {

            break;
        case "vider":
            unset($_SESSION["Panier_item"]);
            break;
    }
if (isset($_POST['moins'])){
        $_POST['quantity']--;
}
elseif(isset($_POST['plus'])){
    $_POST['quantity']++;
}
?>

<?php include ('base/head.php') ?>

<?php include ('base/header.php')?>

<main class="home" id="home">
    <section class="cart section">
        <?php
        if(isset($_SESSION["Panier_item"])){
            $quantityTotal = 0;
            $PrxTotal = 0;
            ?>
            <div class="cart__container container grid">
            <?php
            foreach($_SESSION["Panier_item"]as $item){
                $item_prix = $item["quantity"]*$item["price"];
                ?>

                <div class="cart__img">
                    <div class="cart__img-overlay">
                        <img src="<?php echo $item["img_path"];?>" alt="" class="cart__img-one">
                    </div>
                </div>

                <div class="cart__data">
                    <h1 class="cart__product-name"><?php echo $item["name"]?></h1>
                    <h2 class="cart__product-price"><?php echo $item_prix . " €"; ?></h2>
                    <ul class="cart__preferences">
                        <li>
                            <span class="cart__preferences-list">Quantité :</span>
                            <form action="" method="post">
                            <a href="" name = "moin"><i class="uil uil-minus"></i></a>
                            <span class="cart__preferences-listName"><?php echo $item["quantity"]; ?></span> <!-- recupere la quantité choicie qui a pour nom quantity -->
                            <a href="" name = "plus"><i class="uil uil-plus"></i></a>
                            </form>
                        </li>
                    </ul>
                    <span class="cart__product-priceUnit">Prix unitaire :<?php echo $item["price"] . " €"; ?></b></span>
                </div>
                </div>

               
                <?php
                $quantityTotal += $item["quantity"];
                $PrxTotal += ($item["price"]*$item["quantity"]);
            }
            ?>
             <div class="cart__recap">
                    <div class="cart__recap-title">
                        <h2 class="section__title">Récapitulatif</h2>
                    </div>
                    <div class="cart__recap-total">
                        <h2 class="section__title">Sous-total : <b><?php echo  number_format($item_prix,2) . " €"; ?></b></h2>
                        <h2 class="section__title">Livraison : <b>3.50 €</b></h2>
                        <br>
                        <h2 class="section__title">Total : <b><?php echo (number_format($item_prix,2) + 3.50) . " €"; ?></b></h2>

                    </div>
                </div>
            <div class="cart__button">
                <a href="menu.php" class="cart__button-option button">Retour au menu</a>
                <a href="panier.php?action=vider" class="cart__button-trash">Vider le panier</a>
                <a href="#" class="cart__button-option button">Valider mon panier</a>
            </div>
            <?php
        }

        else{
            ?>

            <div class="cart__data-empty">
                <h1 class="cart__product-name">Votre Panier est vide</h1>
            </div>
            <div class="cart__button">
                <a href="menu.php" class="cart__button-option button">Retour au menu</a>
            </div>


            <?php
        }
        ?>

    </section>


</main>

<?php include ('base/footer.php') ?>

<?php include ('base/script.php') ?>