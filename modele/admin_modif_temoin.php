<?php

if (empty($_POST['edition'])) { // si le formulaire d'édition est vide
    $affiche_modif = true;
    $affiche_success = false;
    $affiche_demo= false ;

    $requete = $dbh->prepare("SELECT id, nom, texte FROM temoignage where id = $idtemoin;");
    $requete->execute();
    $affiche_temoin = $requete->fetch(PDO::FETCH_OBJ);

} else { // le formulaire est envoyé

    $affiche_modif = false;


    if ($_SESSION['droit'] != 1) {
        $affiche_demo = true;
        $affiche_success = false;
    } else {
        $affiche_demo= false ;
        $lenom = htmlspecialchars(strip_tags(trim($_POST['lenom'])), ENT_QUOTES);
        $letexte = htmlspecialchars(strip_tags(trim($_POST['letexte'])), ENT_QUOTES);

        try {
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbh->beginTransaction();

            $prepare = $dbh->prepare("
        UPDATE temoignage
        SET nom = :lenom, texte = :letexte
        WHERE id=$idtemoin");

            $prepare->bindValue(":lenom", $lenom, PDO::PARAM_STR);
            $prepare->bindValue(":letexte", $letexte, PDO::PARAM_STR);
            $prepare->execute();
            $dbh->commit();
            $affiche_success = true;

        } catch (Exception $e) {
            $dbh->rollBack();
            echo "Erreur : " . $e->getMessage();
        }
    }
}
$titre = "Modification d'un témoignage";