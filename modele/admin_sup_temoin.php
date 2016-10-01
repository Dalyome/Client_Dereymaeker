<?php

if($_SESSION['droit'] != 1) {
    $affiche_demo = true;
    $affiche_success = false;
    header("Location: ./");
}else {
    try {
        $temoignagesupprime = $dbh->exec("DELETE FROM temoignage WHERE id= $sup;");
        header("Location: ?temoignage");
    } catch (Exception $e) {
        echo "Erreur :" . $e->getMessage();
        die();
    }
}