<?php
require_once "modele/image.class.php";
require_once "modele/imageManager.class.php";

$manager = new imageManager($dbh);
$chemin="vue/img/creation/originales/";
$chemin2="vue/img/creation/";
$chemin3="";

if (empty($_POST['inserer'])) {
    $affiche_insertion = true;
    $affiche_success = false;

    $affiche_demo= false ;
} else { // le formulaire est envoyé
    $affiche_insertion = false;
    if($_SESSION['droit'] != 1) {
        $affiche_demo = true;
        $affiche_success = false;
    }else{
        $affiche_demo= false ;
        $titre=$_POST['titrephoto'];
    $objet_envoye = new image($_FILES['oeuvre'] , $titre, $chemin2, $chemin,$chemin3);
    //var_dump($objet_envoye);
    $manager->ajouterImageCreation($objet_envoye);

  if($manager) {
      $affiche_success = true;
  }else{
      echo "erreur";
  }

}}