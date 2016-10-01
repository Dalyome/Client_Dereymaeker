<?php

// il faut aussi supprimer l'image physique du serveur.

$requete = $dbh->prepare("SELECT id, imgsrc FROM peinture WHERE id= $sup;");
$requete->execute();
$sup_peinture= $requete->fetch(PDO::FETCH_OBJ);

$chemin = "vue/img/peinture/";


if($_SESSION['droit'] != 1) {
    $affiche_demo = true;
    $affiche_success = false;
    header("Location: ./");
}else {
    if (is_dir($chemin)) {
        // on récupère le nom des fichiers à effacer (on ne peut effacer qu'un dossier vide)
        $liste_fichier = scandir($chemin);
        unlink("$chemin/$sup_peinture->imgsrc");
    }


// suppression de l'image (ligne correspondante) dans la base de données
    try {
        $eventsupprime = $dbh->exec("DELETE FROM peinture WHERE id= $sup;");
        header("Location: ?peinture");
    } catch (Exception $e) {
        echo "Erreur :" . $e->getMessage();
        die();
    }

}