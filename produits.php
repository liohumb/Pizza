<?php
session_start();
require_once("dbcontroller.php");
$db_handle= new DBcontroller();

include_once 'ajout-panier.php';

$id=$_GET['id'] ?? 1;
$product = $db_handle->runQuery("SELECT * FROM produit WHERE id=$id");
$price = $db_handle->runQuery("SELECT * FROM price WHERE produit_id=$id");
$size =$db_handle->runQuery("SELECT * FROM option_product");
?>

<?php include ('base/head.php') ?>

<?php include ('base/header.php')?>

<section class="products section">
    <div class="products__container container grid">

        <div class="products__info">
            <div class="products__info-title">
                <img src="<?= $product[0]['img_path'] ?>" class="products__info-img">
            </div>
        </div>
        <form method="post" action="">
            <div class="products__data">
            <input type="hidden" name="name" value="<?= $product[0]['name'] ?>">
            <h1 class="products__data-name"><?= $product[0]['name'] ?></h1>
            <input type="hidden" name="price"value="<?= $price[0]['price']?>"></input>
            <h2 class="products__data-price"><?= $price[0]['price'] ." €"?></h2>
            <h3 class="products__data-description"><?= $product[0]['details'] ?></h3>
            <ul class="products__data-preferences">
                <li>
                    <?php
                    if ($product[0]['category_id']== 1 ||$product[0]['category_id']== 2){
                        ?>
                        <span class="products__data-preferencesTaille">Taille (en cm) :</span>
                        <select name="optionSelect" class="products__data-preferencesTailleOption" >

                            <option value="<?= $size[0]['id'] ?>"><?= $size[0]['opt'] ?></option>
                            <option value="<?= $size[1]['id'] ?>"><?= $size[1]['opt'] ?></option>
                            <option value="<?= $size[2]['id'] ?>"><?= $size[2]['opt'] ?></option>
                        </select>
                        <?php
                    } elseif($product[0]['category_id']== 3 && ($product[0]['name'] !='Vin ')){
                     ?>
                          <span class="products__data-preferencesTaille">Taille (en cl) :</span>
                    <select name="optionSelect" class="products__data-preferencesTailleOption">
                        <option value="<?= $size[10]['id'] ?>"><?= $size[10]['opt'] ?></option>
                        <option value="<?= $size[11]['id'] ?>"><?= $size[11]['opt'] ?></option>
                    </select>


                    <?php
                    } elseif($product[0]['name'] == 'Vin '){?>
                        <span class="products__data-preferencesColor">Robe :</span>
                    <select name="optionSelect" class="products__data-preferencesColorOption">
                        <option value="<?= $size[7]['id'] ?>"><?= $size[7]['opt'] ?></option>
                        <option value="<?= $size[8]['id'] ?>"><?= $size[8]['opt'] ?></option>
                        <option value="<?= $size[9]['id'] ?>"><?= $size[9]['opt'] ?></option>
                    </select>
                <?php
                }

                    elseif($product[0]['name'] == 'Glace'){?>
                        <span class="products__data-preferencesParfum">Parfum :</span>
                    <select name="optionSelect" class="products__data-preferencesParfumOption">
                        <option value="<?= $size[3]['id'] ?>"><?= $size[3]['opt'] ?></option>
                        <option value="<?= $size[4]['id'] ?>"><?= $size[4]['opt'] ?></option>
                        <option value="<?= $size[5]['id'] ?>"><?= $size[5]['opt'] ?></option>
                        <option value="<?= $size[6]['id'] ?>"><?= $size[6]['opt'] ?></option>
                    </select>
                <?php
                }
                    ?>
                </li>
                <li>

                    <span class="products__data-preferencesQuantity">Quantité :</span>
                    <select name="quantity" class="products__data-preferencesQuantityOption">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </li>
            </ul>
    </div>
        <div class="products__button">
             <input type="hidden" name="id" value ="<?=$id?>">
            <input type ="submit" name="ajoute" class="products__button-option button button__popup" value="Ajouter au panier">
            
            <a href="menu.php" class="products__button-optionA button">Retour au menu</a>
        </form>
        </div>

        <div class="products__popup">
            <div class="products__popup-data">
                <div class="products__popup-dataText">
                    <h1 class="products__popup-dataTitle"></h1>
                    <h2 class="products__popup-dataSubtitle"></h2>
                </div>
                <div class="products__popup-dataClose">
                    <i class="uil uil-times products__popup-dataCloseIcon"></i>
                </div>
            </div>
            <div class="products__popup-button">
                <a href="menu.php" class="products__popup-buttonOption">retour au menu</a>
                <a href="panier.php" class="products__popup-buttonOption">accéder au panier</a>
            </div>
        </div>
    
    </section>


<?php include ('base/footer.php') ?>

<?php include ('base/script.php') ?>