<?php
require_once "modele/image.class.php";
require_once "modele/imageManager.class.php";

$manager = new imageManager($dbh);
$chemin="vue/img/creation/originales/";
$chemin2="vue/img/creation/";

if (empty($_POST['inserer'])) {
    $affiche_insertion = true;
    $affiche_success = false;
} else { // le formulaire est envoyé
    $affiche_insertion = false;
    $objet_envoye = new image($_FILES['oeuvre'] ,$chemin2, $chemin);
    $manager->ajouterImageCreation($objet_envoye);

  if($manager) {
      $affiche_success = true;
  }else{
      echo "erreur";
  }

}