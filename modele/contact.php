<?php
// création d'une constante contenant le mail du destinataitre (il faut que l'adresse soit chez l'hébergeur)
define("MON_MAIL","sophie@sophiecreative.be");

// si on a cliqué sur envoyer
if(isset($_POST['lenom'])){
    // récupération des valeurs du formulaire dans des variables locales
    $lenom = $_POST['lenom'];
    $lemail = $_POST['lemail'];
    $lobjet = "Contact via site : ".$_POST['lobjet'];
    $letexte = $_POST['letexte'];
    $lemessage ="<html><body><p><strong style='color:#E00025;'>De</strong> ".$lenom."<br/>
                <strong style='color:#E00025;'>Répondre à </strong><a href='".$lemail."'>" .$lemail. "</a></p>
                <p>". $letexte ."</p></body></html>";

    // création de l'entête en y mettant le lien vers le mail de l'expéditeur
    $entete = "From: $lenom <$lemail> \r\n ".
        "MIME-Version: 1.0\r\n".
        "Content-Type: text/html; charset=UTF-8\r\n";

    // on envoie le mail avec cette fonction simple, $verif_envoi contiendra true si le mail est envoyé, false s'il y a un problème
    $verif_envoi = mail(MON_MAIL, $lobjet, $lemessage, $entete);

    // si réussi
    if($verif_envoi){
        $message = "<h3>Message envoyé</h3>";
    }else{
        $message = "<h3>Erreur lors de l'envoi, veuillez <a href='#' onclick='history.go(-1);'>réessayer</a></h3>";
    }
}
?>

