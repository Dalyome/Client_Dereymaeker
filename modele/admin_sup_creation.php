<?php

// il faut aussi supprimer l'image physique du serveur.

$requete = $dbh->prepare("SELECT id, imgsrc FROM creation WHERE id= $sup;");
$requete->execute();
$sup_creation= $requete->fetch(PDO::FETCH_OBJ);

$chemin = "vue/img/creation/";

if(is_dir($chemin)) {
    // on récupère le nom des fichiers à effacer (on ne peut effacer qu'un dossier vide)
    $liste_fichier = scandir($chemin);
    unlink("$chemin/$sup_creation->imgsrc");
}


// suppression de l'image (ligne correspondante) dans la base de données
try {
    $eventsupprime = $dbh->exec("DELETE FROM creation WHERE id= $sup;");
    header("Location: ./");
}catch (Exception $e) {
    echo "Erreur :".$e->getMessage();
    die();
}