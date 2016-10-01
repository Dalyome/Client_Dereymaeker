<?php
require_once "modele/image.class.php";
require_once "modele/imageManager.class.php";
$manager = new imageManager($dbh);
$chemin="vue/img/peinture/originales/";
$chemin2="vue/img/peinture/";
$chemin3="";
if (empty($_POST['inserer'])) {
    $affiche_insertion = true;
    $affiche_success = false;
    $affiche_demo= false ;
} else { // le formulaire est envoyé
    if($_SESSION['droit'] != 1) {
        $affiche_demo = true;
        $affiche_success = false;
    }else{
        $affiche_demo= false ;
    $affiche_insertion = false;
    $titre=$_POST['titrephoto'];
    $objet_envoye = new image($_FILES['oeuvre'] , $titre, $chemin2, $chemin, $chemin3);

    $manager->ajouterImagePeinture($objet_envoye);

    if($manager) {
        $affiche_success = true;
    }else{
        echo "erreur";
    }
}
}