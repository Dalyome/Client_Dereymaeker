<?php
// var_dump($_SESSION);
$titre = "";
// accueil de l'admin
if (empty($_GET)) {
    $titre = "Menu d'administration";
    require_once 'modele/admin_accueil.php';
    require_once 'vue/admin_accueil.php';
} elseif (isset($_GET['deco'])) {
    require_once "modele/deco.php";
<<<<<<< HEAD
}elseif(isset($_GET['temoignage'])) {
    require_once "vue/temoignage.php";
    require_once "modele/temoignage.php";
}
=======
>>>>>>> 0bdd9a522454b0ff4e650a3c8260c9c45061f475

} elseif (isset($_GET['evenement'])) {
    $titre = "Menu d'administration de mes évènements";
    require_once 'modele/admin_dash_event.php';
    require_once 'vue/admin_dash_event.php';
} elseif (isset($_GET['citation'])) {
    $titre = "Menu d'administration des citations";
    require_once 'modele/admin_dash_citation.php';
    require_once 'vue/admin_dash_citation.php';
} elseif (isset($_GET['creation'])) {
    $titre = "Menu d'administration de mes créations";
    require_once 'modele/admin_dash_creation.php';
    require_once 'vue/admin_dash_creation.php';
} elseif (isset($_GET['peinture'])) {
    $titre = "Menu d'administration de mes peintures";
    require_once 'modele/admin_dash_peintre.php';
    require_once 'vue/admin_dash_peintre.php';
} elseif (isset($_GET['partner'])) {
    $titre = "Menu d'administration de mes partenaires";
    require_once 'modele/admin_dash_partner.php';
    require_once 'vue/admin_dash_partner.php';
} elseif (isset($_GET['temoignage'])) {
    $titre = "Menu d'administration des témoignages";
    require_once 'modele/admin_dash_temoin.php';
    require_once 'vue/admin_dash_temoin.php';

} elseif (isset($_GET['modif_evenement'])) {
    $idevent = (int)$_GET['modif_evenement'];
    require_once 'modele/admin_modif_event.php';
    require_once 'vue/admin_modif_event.php';
} elseif (isset($_GET['modif_citation'])) {
    $idcitation = (int)$_GET['modif_citation'];
    require_once 'modele/admin_modif_citation.php';
    require_once 'vue/admin_modif_citation.php';
} elseif (isset($_GET['modif_creation'])) {
    $idcreation = (int)$_GET['modif_creation'];
    require_once 'modele/admin_modif_creation.php';
    require_once 'vue/admin_modif_creation.php';
} elseif (isset($_GET['modif_peinture'])) {
    $idpeinture = (int)$_GET['modif_peinture'];
    require_once 'modele/admin_modif_peintre.php';
    require_once 'vue/admin_modif_peintre.php';
} elseif (isset($_GET['modif_partner'])) {
    $idpartner = (int)$_GET['modif_partner'];
    require_once 'modele/admin_modif_partner.php';
    require_once 'vue/admin_modif_partner.php';
} elseif (isset($_GET['modif_temoignage'])) {
    $idtemoin = (int)$_GET['modif_temoignage'];
    require_once 'modele/admin_modif_temoin.php';
    require_once 'vue/admin_modif_temoin.php';

} elseif (isset($_GET['nouvel_evenement'])) {
    $titre = "Ajouter un nouvel évènement";
    require_once 'modele/admin_new_event.php';
    require_once 'vue/admin_new_event.php';
} elseif (isset($_GET['nouvelle_citation'])) {
    $titre = "Ajouter une nouvelle citation";
    require_once 'modele/admin_new_citation.php';
    require_once 'vue/admin_new_citation.php';
} elseif (isset($_GET['nouvelle_creation'])) {
    $titre = "Ajouter une nouvelle création";
    require_once 'modele/admin_new_creation.php';
    require_once 'vue/admin_new_creation.php';
} elseif (isset($_GET['nouvelle_peinture'])) {
    $titre = "Ajouter une nouvelle peinture";
    require_once 'modele/admin_new_peintre.php';
    require_once 'vue/admin_new_peintre.php';
} elseif (isset($_GET['nouveau_partner'])) {
    $titre = "Ajouter un nouveau partenaire";
    require_once 'modele/admin_new_partner.php';
    require_once 'vue/admin_new_partner.php';
} elseif (isset($_GET['nouveau_temoignage'])) {
    $titre = "Ajouter un nouveau témoignage";
    require_once 'modele/admin_new_temoin.php';
    require_once 'vue/admin_new_temoin.php';


} elseif (isset($_GET['delete_evenement']) && ctype_digit($_GET['delete_evenement'])) {
    $sup = (int)$_GET['delete_evenement'];
    require_once 'modele/admin_sup_event.php';
} elseif (isset($_GET['delete_citation']) && ctype_digit($_GET['delete_citation'])) {
    $sup = (int)$_GET['delete_citation'];
    require_once 'modele/admin_sup_citation.php';
} elseif (isset($_GET['delete_creation']) && ctype_digit($_GET['delete_creation'])) {
    $sup = (int)$_GET['delete_creation'];
    require_once 'modele/admin_sup_creation.php';
} elseif (isset($_GET['delete_peinture']) && ctype_digit($_GET['delete_peinture'])) {
    $sup = (int)$_GET['delete_peinture'];
    require_once 'modele/admin_sup_peintre.php';
} elseif (isset($_GET['delete_partner']) && ctype_digit($_GET['delete_partner'])) {
    $sup = (int)$_GET['delete_partner'];
    require_once 'modele/admin_sup_partner.php';
} elseif (isset($_GET['delete_temoignage']) && ctype_digit($_GET['delete_temoignage'])) {
    $sup = (int)$_GET['delete_temoignage'];
    require_once 'modele/admin_sup_temoin.php';
} else {
    $titre = "Menu d'administration";
    require_once 'modele/admin_accueil.php';
    require_once 'vue/admin_accueil.php';
}