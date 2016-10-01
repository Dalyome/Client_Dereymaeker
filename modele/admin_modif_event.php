<?php

if (empty($_POST['edition'])) { // si le formulaire d'édition est vide
    $affiche_modif = true;
    $affiche_success = false;
    $affiche_demo= false ;

    $requete = $dbh->prepare("SELECT * FROM evenement where id = $idevent;");
    $requete->execute();
    $affiche_event = $requete->fetch(PDO::FETCH_OBJ);

} else { // le formulaire est envoyé

    $affiche_modif = false;
    if ($_SESSION['droit'] != 1) {
        $affiche_demo = true;
        $affiche_success = false;
    } else {

        $affiche_demo= false ;

        $letitre = htmlspecialchars(strip_tags(trim($_POST['letitre'])), ENT_QUOTES);
        $ladate = htmlspecialchars(strip_tags(trim($_POST['ladate'])), ENT_QUOTES);
        if (empty($_POST['ladatefin'])) {
            $ladatefin = NULL;
        } else {
            $ladatefin = $_POST['ladatefin'];
        }
        $ladesc = htmlspecialchars(strip_tags(trim($_POST['ladesc'])), ENT_QUOTES);
        $lelieu = htmlspecialchars(strip_tags(trim($_POST['lelieu'])), ENT_QUOTES);

        try {
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbh->beginTransaction();

            $prepare = $dbh->prepare("
        UPDATE evenement
        SET titre = :letitre, ladate = :ladate, ladatefin = :ladatefin,description = :ladesc, lieu = :lelieu
        WHERE id=$idevent");

            $prepare->bindValue(":letitre", $letitre, PDO::PARAM_STR);
            $prepare->bindValue(":ladate", $ladate, PDO::PARAM_STR);
            $prepare->bindValue(":ladatefin", $ladatefin, PDO::PARAM_STR);
            $prepare->bindValue(":ladesc", $ladesc, PDO::PARAM_STR);
            $prepare->bindValue(":lelieu", $lelieu, PDO::PARAM_STR);
            $prepare->execute();
            $dbh->commit();
            $affiche_success = true;

        } catch (Exception $e) {
            $dbh->rollBack();
            echo "Erreur : " . $e->getMessage();
        }
    }
}
$titre = "Modification d'un évènement";