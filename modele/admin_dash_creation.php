<?php
$requete = $dbh->prepare("SELECT id, nom, description, imgsrc ,imghref FROM creation ORDER BY id DESC;");
$requete->execute();

$affiche_creation= $requete->fetchAll(PDO::FETCH_OBJ);