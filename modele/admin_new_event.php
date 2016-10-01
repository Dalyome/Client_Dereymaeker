<?php
if (empty($_POST['inserer'])) {
    $affiche_insertion = true;
    $affiche_success = false;

    $affiche_demo= false ;
} else { // le formulaire est envoyé
    $affiche_insertion = false;
    if ($_SESSION['droit'] != 1) {
        $affiche_demo = true;
        $affiche_success = false;
    } else {
        $letitre = htmlspecialchars(strip_tags(trim($_POST['letitre'])), ENT_QUOTES);
        $ladate = htmlspecialchars(strip_tags(trim($_POST['ladate'])), ENT_QUOTES);
        $affiche_demo= false ;
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
        INSERT INTO evenement (`titre`, `ladate`, `ladatefin`,`description`, `lieu`)
        VALUES (:letitre,:ladate,:ladatefin,:ladesc,:lelieu);
        ");

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