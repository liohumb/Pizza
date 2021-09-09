<?php include ('panierController.php') ?>

<?php include ('base/head.php') ?>

<?php include ('base/header.php')?>

    <main class="home" id="home">

        <section class="hero">

            <img src="assets/img/home1.jpg" alt="" class="hero__img">

        </section>

        <section class="validation section">

            <?php
            if(isset($_SESSION["Panier_item"])){
                $quantityTotal = 0;
                $PrxTotal = 0;

                foreach($_SESSION["Panier_item"]as $item){
                    $item_prix = $item["quantity"]*$item["price"];
                    ?>

                    <div class="validation__container container grid">

                        <div class="validation__img">
                            <div class="validation__img-overlay">
                                <img src="<?php echo $item["img_path"];?>" alt="" class="validation__img-one">
                            </div>
                        </div>

                        <div class="validation__data">

                            <h1 class="validation__data-product">x <?php echo $item["quantity"]; ?> • <?php echo $item["name"]." ".$item['optionSelect']?> • <?php echo number_format($item_prix,2) . " €"; ?></h1>

                        </div>

                    </div>

                    <?php
                    $quantityTotal += $item["quantity"];
                    $PrxTotal += ($item["price"]*$item["quantity"]);
                    $livraison = 3.50;
                    if($PrxTotal >20){
                        $livraison = 0 ;
                    }
                }
                ?>

                <div class="cart__recap">
                    <div class="cart__recap-title">
                        <h2 class="section__title">Récapitulatif</h2>
                    </div>

                    <div class="cart__recap-total">
                        <h2 class="section__title">Sous-total : <b><?php echo  number_format($PrxTotal,2) . " €"; ?></b></h2>
                        <h2 class="section__title">Livraison : <b><?php echo number_format($livraison,2) . " €"; ?></b></h2>
                        <br>
                        <h2 class="section__title">Total : <b><?php echo number_format(($PrxTotal +$livraison),2) . " €"; ?></b></h2>
                    </div>
                </div>

                <div class="cart__button">
                    <div class="button">
                        <a href="#" class="button__title button__slide-effect">Payer <i class="uil uil-credit-card"></i></a>
                    </div>
                </div>

                <?php
            }
            else {
                ?>

                <div class="cart__data-empty">
                    <h1 class="cart__product-name">Votre Panier est vide</h1>
                </div>

                <div class="cart__button">
                    <div class="button">
                        <a href="menu.php" class="button__title button__slide-effect">Retour au menu</a>
                    </div>
                </div>

                <?php
            }
            ?>

        </section>

    </main>

<?php include ('base/footer.php') ?>

<?php include ('base/script.php') ?>