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
        <div class="about__container container grid">

            <div class="about__img">
                <div class="about__img-overlay">
                    <img src="<?= $product[0]['img_path'] ?>" alt="" class="about__img-two">
                </div>
            </div>
            <form method="post" action="">
            <div class="contact__data">
                <h1 class="product-name"><?= $product[0]['name'] ?></h1>
                <h2 class="product-price"><?= $price[0]['price'] ." €"?></h2>
                <h3 class="product-slogan"><?= $product[0]['details'] ?></h3>
                <ul class="preferences">
                    <li>
                        <?php
                        if ($product[0]['category_id']== 1 ||$product[0]['category_id']== 2){
                            ?>
                        
                        <span class="list-name">Taille (en cm) :</span>
                        <select name="opt" class="taille">
                            <option value="<?= $size[0]['opt'] ?>"><?= $size[0]['opt'] ?></option>
                            <option value="<?= $size[1]['opt'] ?>"><?= $size[1]['opt'] ?></option>
                            <option value="<?= $size[2]['opt'] ?>"><?= $size[2]['opt'] ?></option>
                        </select>
                        <?php
                    }
                     elseif($product[0]['category_id']== 3 && ($product[0]['name'] !='Vin ')){
                         ?>
                              <span class="list-name">Taille (en cl) :</span>
                        <select name="opt" class="taille">
                            <option value="<?= $size[10]['opt'] ?>"><?= $size[10]['opt'] ?></option>
                            <option value="<?= $size[11]['opt'] ?>"><?= $size[11]['opt'] ?></option>
                        
                        </select>
                     

                        <?php 
                        }elseif($product[0]['name'] == 'Vin '){?>
                            <span class="list-name">Robe :</span>
                        <select name="opt" class="taille">
                            <option value="<?= $size[7]['opt'] ?>"><?= $size[7]['opt'] ?></option>
                            <option value="<?= $size[8]['opt'] ?>"><?= $size[8]['opt'] ?></option>
                            <option value="<?= $size[9]['opt'] ?>"><?= $size[9]['opt'] ?></option>
                        </select>
                    <?php
                    }
                        
                        elseif($product[0]['name'] == 'Glace'){?>
                            <span class="list-name">Parfum :</span>
                        <select name="opt" class="taille">
                            <option value="<?= $size[3]['opt'] ?>"><?= $size[3]['opt'] ?></option>
                            <option value="<?= $size[4]['opt'] ?>"><?= $size[4]['opt'] ?></option>
                            <option value="<?= $size[5]['opt'] ?>"><?= $size[5]['opt'] ?></option>
                            <option value="<?= $size[6]['opt'] ?>"><?= $size[6]['opt'] ?></option>
                        </select>
                    <?php
                    }
                        ?>
                    </li>
                    <li>
                    
                        <span class="list-name">Quantité :</span>
                        <select name="quantity" class="qty">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
        <div class="btn-choix">
            <a href="menu.php" class="button btn-ret-aj">Retour au menu</a>
         
             <input type="hidden" name="id" value ="<?=$id?>">
            <input type ="submit" name="ajoute" class="button btn-ret-aj" value="Ajouter au panier"></input>
        </form>
        </div>
    </section>

<?php include ('base/footer.php') ?>


<?php include ('base/script.php') ?>