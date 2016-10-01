<?php
if (empty($_POST['edition'])) { // si le formulaire d'édition est vide
    $affiche_modif = true;
    $affiche_success = false;
    $affiche_demo= false ;

    $requete = $dbh->prepare("SELECT id, nom, logohref FROM partenaire where id = $idpartner;");
    $requete->execute();
    $affiche_partner = $requete->fetch(PDO::FETCH_OBJ);

} else { // le formulaire est envoyé

    $affiche_modif = false;

    if($_SESSION['droit'] != 1) {
        $affiche_demo = true;
        $affiche_success = false;
    }else{

        $affiche_demo= false ;

        $lenom = htmlspecialchars(strip_tags(trim($_POST['lenom'])), ENT_QUOTES);
    $url = htmlspecialchars(strip_tags(trim($_POST['url'])), ENT_QUOTES);

    try {
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->beginTransaction();

        $prepare = $dbh->prepare("
        UPDATE partenaire
        SET nom = :lenom, logohref = :url
        WHERE id=$idpartner");

        $prepare->bindValue(":lenom", $lenom, PDO::PARAM_STR);
        $prepare->bindValue(":url", $url, PDO::PARAM_STR);
        $prepare->execute();
        $dbh->commit();
        $affiche_success = true;

    } catch (Exception $e) {
        $dbh->rollBack();
        echo "Erreur : " . $e->getMessage();
    }
}
}


// à remplir en fonction de la page que tu fais
$titre = "Modification d'un partenaire";