<?php
// require_once("dbcontroller.php");
// $db_handle= new DBcontroller();
if(!empty($_POST["ajoute"])){

    if(!empty($_POST["quantity"])){
         $produitById = $db_handle->runQuery("SELECT * FROM produit WHERE id='" . $_POST["id"] . "'");
         $priceByProduitId= $db_handle->runQuery("SELECT * FROM price WHERE produit_id='" . $_POST["id"] . "'");
        $itemArray = array($produitById[0]["id"]=>array('name'=>$produitById[0]["name"], 'id'=>$produitById[0]["id"],'price'=>$priceByProduitId[0]['price'] , 'quantity'=>$_POST["quantity"], 'img_path'=>$produitById[0]["img_path"]));

        if(!empty($_SESSION["Panier_item"])){
            //$_POST['id']
            if(in_array($_POST['id'],array_keys($_SESSION["Panier_item"]))){
                foreach($_SESSION["Panier_item"]as $k => $v){
                    if($produitById[0]["id"] == $k){
                        $quantity = $_SESSION["Panier_item"][$k]["quantity"];
                        $quantity += $_POST["quantity"];
                        //if(empty($_SESSION["Panier_item"][$k]["quantity"])){
                            $_SESSION["Panier_item"][$k]["quantity"]= $quantity;
                        //}
                        // $_SESSION["Panier_item"][$k]["quantity"] += $_POST["quantity"];
                    }
                    else{
                        
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
}

?>