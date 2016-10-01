<?php
if (empty($_POST['inserer'])) {
    $affiche_insertion = true;
    $affiche_success = false;
    $affiche_demo= false ;


} else { // le formulaire est envoyé
    $affiche_insertion = false;



    if($_SESSION['droit'] != 1){
        $affiche_demo= true ;
        $affiche_success = false;

    }else {
        $affiche_demo= false ;

        $lenom = htmlspecialchars(strip_tags(trim($_POST['lenom'])), ENT_QUOTES);
        $letexte = htmlspecialchars(strip_tags(trim($_POST['letexte'])), ENT_QUOTES);

        try {

            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbh->beginTransaction();

            $prepare = $dbh->prepare("
        INSERT INTO temoignage (`nom`, `texte`)
        VALUES (:lenom,:letexte);
        ");

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

