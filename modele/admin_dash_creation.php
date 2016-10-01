<?php


if (empty($_POST['edition'])) { // si le formulaire d'édition est vide
    $affiche_modif = true;
    $affiche_success = false;
    $affiche_demo= false ;

    $requete = $dbh->prepare("SELECT id, nom, description, imgsrc , imghref, vendu FROM creation ORDER BY id ASC ;");
    $requete->execute();

    $affiche_creation= $requete->fetchAll(PDO::FETCH_OBJ);


} else { // le formulaire est envoyé

    $affiche_modif = false;


    if($_SESSION['droit'] != 1) {
        $affiche_demo = true;
        $affiche_success = false;
    }else{

        $affiche_demo= false ;
    try {



        if(!empty($_POST['vendu'])) {


            $acc=0;
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbh->beginTransaction();

            $prepare = $dbh->prepare("
        UPDATE creation
        SET vendu = :vendu");

            $prepare->bindValue(":vendu", $acc, PDO::PARAM_STR);

            $prepare->execute();
            $dbh->commit();


            $dbh->beginTransaction();
            //tant qu il y a des vendus on update les infos
            foreach ($_POST['vendu'] as $idvendu) {
                $acc=1;
                $prepare = $dbh->prepare("
        UPDATE creation
        SET vendu = :vendu
        WHERE id= :id");

                $prepare->bindValue(":vendu", $acc, PDO::PARAM_INT);
                $prepare->bindValue(":id", $idvendu, PDO::PARAM_INT);
                $prepare->execute();
            }

            $dbh->commit();
            $affiche_success = true;
        }else{
            $acc=0;
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbh->beginTransaction();

            $prepare = $dbh->prepare("
        UPDATE creation
        SET vendu = :vendu");

            $prepare->bindValue(":vendu", $acc, PDO::PARAM_STR);

            $prepare->execute();
            $dbh->commit();

            $affiche_success = true;
        }

    } catch (Exception $e) {
        $dbh->rollBack();
        echo "Erreur : " . $e->getMessage();
    }
}}
// à remplir en fonction de la page que tu fais
$titre = "Création";




