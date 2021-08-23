<?php
session_start();
 require_once("dbcontroller.php");
 $db_handle= new DBcontroller();
if(!empty($_POST["ajoute"])){

            if(!empty($_POST["quantity"])){
                $produitById = $db_handle->runQuery("SELECT * FROM tblproduct WHERE id='" . $_POST["id"] . "'");
                $itemArray = array($produitById[0]["id"]=>array('name'=>$produitById[0]["name"], 'id'=>$produitById[0]["id"], 'quantity'=>$_POST["quantity"],'price'=>$produitById[0]["price"], 'image'=>$produitById[0]["image"]));

                if(!empty($_SESSION["Panier_item"])){
                    if(in_array($produitById[0]["id"],array_keys($_SESSION["Panier_item"]))){
                        foreach($_SESSION["Panier_item"]as $k => $v){
                            if($produitById[0]["id"] == $k){
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
        }