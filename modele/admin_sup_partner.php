<?php
$requete = $dbh->prepare("SELECT id, logosrc FROM partenaire WHERE id= $sup;");
$requete->execute();
$sup_partenaire= $requete->fetch(PDO::FETCH_OBJ);
$chemin = "vue/img/partenaire";


if($sup_partenaire->imgsrc != NULL){

    if(is_dir($chemin)) {
    // on récupère le nom des fichiers à effacer (on ne peut effacer qu'un dossier vide)
    $liste_fichier = scandir($chemin);
    unlink("$chemin/$sup_partenaire->imgsrc");
}
}


// suppression de l'image (ligne correspondante) dans la base de données
try {
    $eventsupprime = $dbh->exec("DELETE FROM partenaire WHERE id= $sup;");
    header("Location: ./");
}catch (Exception $e) {
    echo "Erreur :".$e->getMessage();
    die();
}

