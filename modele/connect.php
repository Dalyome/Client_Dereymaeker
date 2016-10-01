<?php

if(!empty($_POST)) {
    $lelogin = htmlspecialchars(strip_tags(trim($_POST['lelogin'])),ENT_QUOTES);
    $lepass = htmlspecialchars(strip_tags(trim($_POST['lepass'])),ENT_QUOTES);

    $requete=$dbh->prepare("SELECT * FROM droit WHERE login = '$lelogin' AND pwd = '$lepass';");
    $requete->execute();

    $droit = $requete->fetch(PDO::FETCH_ASSOC);

        // création de session valide
        $_SESSION['id'] = session_id();
        $_SESSION['droit']=$droit['droit'];


        // redirection
        header("Location: ./");
    }else{
        $erreur = "Login et/ou mot de passe incorrect(s)";
    }


