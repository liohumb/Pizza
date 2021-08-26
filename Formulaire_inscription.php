<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>

<?php
    
    /* page: inscription.php */
//connexion à la base de données:
$BDD = array();
$BDD['host'] = "localhost";
$BDD['user'] = "root";
$BDD['pass'] = "";
$BDD['db'] = "bdd_pizza";
$pdo =new PDO("mysql:dbname=bdd_pizza;host=localhost", "root", "");
if(!$pdo) {
    //echo "Connexion non établie.";
    // var_dump("Connexion établie");
    exit;

}

$stmt = $pdo->prepare("SELECT * FROM produit");
$stmt->execute();
$types = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo "<pre>";
print_r($types);

echo $types [0]["produit"]. "<br />";
echo $types [1]["produit"]. "<br />";

foreach($types as $type){
    echo $type['produit_id']. "<br />";
}
?>
<table class="table">
<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Produits</th>
    </tr>
</thead>
<thody>
    <?php foreach($types as $type) : ?>
        <tr>
            <td><?= $type['id_categorie']?></td>
            <td><?= $type['id']?></td>
        </tr>
        <?php endforeach; ?>
    </thody>
    </table>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">produit</th>
        <th scope="col">modifier</th>
        <th scope="col">suprimer</th>
    </tr>
    </thead>
    <?php foreach ($types as $type) : ?>
        <tr>
            <td><?= $type["id"] ?></td>
            <td><?= $type["produit"] ?></td>
            <td><a href="modifier=<? $type["id"]?>" class="btn btn-primary">Modifier</a><td>
            <td><a href="supprimer=<? $type["id"]?>" class="btn btn-danger">Supprimer</a><td>
    </tr>
    <?php endforeach; ?>$</tbody>
    </table>
    <?php
    if(isset($_GET['supprimer'])){
        $stmt = $pdo->prepare("DELETE FROM type WHERE id = :monproduit");
        $stmt->binValue("monproduit", $_GET['supprimer'],PDO::PARAM_INT);
        $stmt->execute();
    }
?>


     <!-- //création automatique de la table membres, une fois créée, vous pouvez supprimer les lignes de code suivantes:
    // echo mysqli_query($pdo,"CREATE TABLE IF NOT EXISTS `".$BDD['db']."`.`membres` ( `id` INT NOT NULL AUTO_INCREMENT , `pseudo` VARCHAR(25) NOT NULL , `mdp` CHAR(32) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;")?"Table membres créée avec succès, vous pouvez maintenant supprimer la ligne ". __LINE__ ." de votre fichier ". __FILE__ ."!":"Erreur création table membres: ".mysqli_error($pdo);
    //la table est créée avec les paramètres suivants:
    //champ "id": en auto increment pour un id unique, peux vous servir pour une identification future
    //champ "pseudo": en varchar de 0 à 25 caractères
    //champ "mdp": en char fixe de 32 caractères, soit la longueur de la fonction md5()
    //fin création automatique
//par défaut, on affiche le formulaire (quand il validera le formulaire sans erreur avec l'inscription validée, on l'affichera plus)
// $AfficherFormulaire=1;
//traitement du formulaire:
// if(isset($_POST['pseudo'],$_POST['mdp'])){//l'utilisateur à cliqué sur "S'inscrire", on demande donc si les champs sont défini avec "isset"
//     if(empty($_POST['pseudo'])){//le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
//         echo "Le champ Pseudo est vide.";
//     } elseif(!preg_match("#^[a-z0-9]+$#",$_POST['pseudo'])){//le champ pseudo est renseigné mais ne convient pas au format qu'on souhaite qu'il soit, soit: que des lettres minuscule + des chiffres (je préfère personnellement enregistrer le pseudo de mes membres en minuscule afin de ne pas avoir deux pseudo identique mais différents comme par exemple: Admin et admin)
//         echo "Le Pseudo doit être renseigné en lettres minuscules sans accents, sans caractères spéciaux.";
//     } elseif(strlen($_POST['pseudo'])>25){//le pseudo est trop long, il dépasse 25 caractères
//         echo "Le pseudo est trop long, il dépasse 25 caractères.";
//     } elseif(empty($_POST['mdp'])){//le champ mot de passe est vide
//         echo "Le champ Mot de passe est vide.";
//     } elseif(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM membres WHERE pseudo='".$_POST['pseudo']."'"))==1){//on vérifie que ce pseudo n'est pas déjà utilisé par un autre membre
//         echo "Ce pseudo est déjà utilisé.";
//     } else {
//         //toutes les vérifications sont faites, on passe à l'enregistrement dans la base de données:
//         //Bien évidement il s'agit là d'un script simplifié au maximum, libre à vous de rajouter des conditions avant l'enregistrement comme la longueur minimum du mot de passe par exemple
//         if(!mysqli_query($mysqli,"INSERT INTO membres SET pseudo='".$_POST['pseudo']."', mdp='".md5($_POST['mdp'])."'")){//on crypte le mot de passe avec la fonction propre à PHP: md5()
//             echo "Une erreur s'est produite: ".mysqli_error($mysqli);//je conseille de ne pas afficher les erreurs aux visiteurs mais de l'enregistrer dans un fichier log
//         } else {
//             echo "Vous êtes inscrit avec succès!";
//             //on affiche plus le formulaire
//             $AfficherFormulaire=0;
//         }
//     }
// } -->

    

    <br />
    <form method="post" action="Formulaire_inscription.php">
        Pseudo (a-z0-9) : <input type="text" name="pseudo">
        <br />
        Mot de passe : <input type="password" name="mdp">
        <br />
        <input type="submit" value="S'inscrire">
    </form>
