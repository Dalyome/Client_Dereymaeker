<?php

if(!empty($_POST)) {
    $lelogin = htmlspecialchars(strip_tags(trim($_POST['lelogin'])),ENT_QUOTES);
    $lepass = htmlspecialchars(strip_tags(trim($_POST['lepass'])),ENT_QUOTES);

    if((LOG==$lelogin) and ($lepass==PWD) ){
define("LOG","Sophie");
define("PWD","dev");

        // création de session valide
        $_SESSION['id'] = session_id();

        // redirection
        header("Location: ./");
    }else{
        $erreur = "Login et/ou mot de passe incorrect(s)";
    }

}
