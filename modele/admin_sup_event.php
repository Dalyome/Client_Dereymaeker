<?php

if($_SESSION['droit'] != 1) {
    $affiche_demo = true;
    $affiche_success = false;
    header("Location: ./");
}else{
try {
    $eventsupprime = $dbh->exec("DELETE FROM evenement WHERE id= $sup;");
    header("Location: ?evenement");
}catch (Exception $e) {
    echo "Erreur :".$e->getMessage();
    die();
}}