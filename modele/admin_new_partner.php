<?php
require_once "modele/image.class.php";
require_once "modele/imageManager.class.php";

$manager = new imageManager($dbh);
$chemin = "vue/img/partenaire/originales/";
$chemin2 = "vue/img/partenaire/";


if (empty($_POST['inserer'])) {
    $affiche_insertion = true;
    $affiche_success = false;
    $affiche_demo = false;

} else {
    if ($_SESSION['droit'] != 1) {
        $affiche_demo = true;
        $affiche_success = false;
    } else {
        $affiche_demo= false ;
        if (!isset($_POST['oeuvre'])) {

            $nom = $_POST['titrephoto'];
            $href = $_POST['url'];

            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbh->beginTransaction();

            $prepare = $dbh->prepare("
        INSERT INTO `partenaire`(`nom`, `logohref`) VALUES (:nom,:href);
        ");

            $prepare->bindValue(":nom", $nom, PDO::PARAM_STR);
            $prepare->bindValue(":href", $href, PDO::PARAM_STR);


            $prepare->execute();

            $dbh->commit();

            $affiche_success = true;

        } else { // le formulaire est envoyé
            var_dump($_POST);
            $affiche_insertion = false;
            $chemin3 = $_POST['url'];
            $titre = $_POST['titrephoto'];
            $objet_envoye = new image($_FILES['oeuvre'], $titre, $chemin2, $chemin, $chemin3);
            $manager->ajouterImagePartner($objet_envoye);

            if ($manager) {
                $affiche_success = true;
            } else {
                echo "erreur";
            }

        }
    }
}