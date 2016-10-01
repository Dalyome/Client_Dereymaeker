<!DOCTYPE html>
<html lang="fr">

<?php include "admin_header.php"; ?>
<!--je ferme la balise là ici au cas où vous souhaitier rajouter un truc (exemple : un fichier javascript) qui ne devrait pas être présent sur toutes les pages admin.-->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
</head>
<body>

<div id="wrapper">

    <?php include "admin_menu.php"; ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <?php
            if($_SESSION['droit'] ) {
            ?>
            <div class="row">
                <div class="col-sm-8">
                    <!--BOUTON A NE PAS SUPPRIMER-->
                    <a href="#menu-toggle" class="visible-xs btn btn-default" id="menu-toggle">Accéder au menu</a>
                    <h1 id="titre-admin"><?= $titre ?></h1>
                    </div>
                <div class="col-sm-4">
                    <p>
                        <figure class="social pull-right figure">
                            <a href="mailto:webdevcf2m@gmail.com?Subject=Sophie%20demande%20de%20l%20aide">
                                <img class="figure-img img-fluid img-rounded" src="vue/img/contactenous.jpg"
                                     alt="contacte-nous"/>
                            </a>
                            <figcaption class="figure-caption"><a href="mailto:webdevcf2m@gmail.com?Subject=Sophie%20demande%20de%20l%20aide">Contacte-nous par e-mail<br>webdevcf2m@gmail.com</a></figcaption>
                        </figure>
                    </p>
                </div>
            </div>
            <div class="row" id="info-admin">
                <div class="col-lg-6" >
                    <?php
                    if (isset($message)) {
                        echo "<p>" . $message . "</p>";
                    } else {
                        echo "<h2>Prochain évènement :</h2>";
                    }
                    foreach ($affiche_eventf as $rec) {
                        ?>
                        <div class="blog-post">
                            <p><span style="color:#FF6B20;"><?php if (($rec->ladatefin) != NULL) {
                                        echo "Du " . date("d/m/Y", strtotime($rec->ladate)) . " au " . date("d/m/Y", strtotime($rec->ladatefin));
                                    } else {
                                        echo "Le " . date("d/m/Y à H:i", strtotime($rec->ladate));
                                    }
                                    ?> - <h3><?= $rec->titre ?></h3>
                                </span><br/><?= $rec->lieu ?></p><hr>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="col-lg-6">
                    <h3>Instructions et aide (si besoin)</h3>
                    <div class="alert alert-info" role="alert"><strong>N'oublie pas de te déconnecter</strong> quand tu as terminé d'administrer ton site :)</div>
                    <!--BOUTON A NE PAS SUPPRIMER-->
                    <a href="#menu-toggle" class="visible-xs btn btn-default" id="menu-toggle">Accéder au menu</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 btn-admin" id="bouton-admin">
                    <a href="?nouvelle_creation" type="button" class="btn btn-success btn-admin">
                        <p class="glyphicon glyphicon-pencil" aria-hidden="true"></p><br> Ajouter une création
                    </a>
                    <a href="?nouvelle_peinture" type="button" class="btn btn-primary btn-admin">
                        <p class="glyphicon glyphicon-picture" aria-hidden="true"></p><br> Ajouter une peinture
                    </a>
                    <a href="?nouvel_evenement" type="button" class="btn btn-info btn-admin">
                        <p class="glyphicon glyphicon-calendar" aria-hidden="true"></p><br> Ajouter un évènement
                    </a>
                    <a href="?nouveau_temoignage" type="button" class="btn btn-warning btn-admin">
                        <p class="glyphicon glyphicon-comment" aria-hidden="true"></p><br> Ajouter un témoignage
                    </a>
                    <a href="?nouveau_partner" type="button" class="btn btn-danger btn-admin">
                        <p class="glyphicon glyphicon-briefcase" aria-hidden="true"></p><br> Ajouter un partenaire
                    </a>
                </div>
            </div>
                <?php
            }else{

            $titre= "Bienvenue dans la demo ";
            ?>
            <div class="row">
                <div class="col-sm-8">
                    <!--BOUTON A NE PAS SUPPRIMER-->
                    <a href="#menu-toggle" class="visible-xs btn btn-default" id="menu-toggle">Accéder au menu</a>
                    <h1 id="titre-admin"><?= $titre ?></h1>
                </div>
                <div class="col-sm-4">
                    <p>
                        <figure class="social pull-right figure">
                            <a href="mailto:webdevcf2m@gmail.com?Subject=Sophie%20demande%20de%20l%20aide">
                                <img class="figure-img img-fluid img-rounded" src="vue/img/contactenous.jpg"
                                     alt="contacte-nous"/>
                            </a>
                            <figcaption class="figure-caption"><a href="mailto:webdevcf2m@gmail.com?Subject=Sophie%20demande%20de%20l%20aide">Contacte-nous par e-mail<br>webdevcf2m@gmail.com</a></figcaption>
                        </figure>
                    </p>
                </div>
            </div>
            <div class="row" id="info-admin">
                <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <h3>Instructions et aide (si besoin)</h3>
                <div class="alert alert-info" role="alert"><strong>N'oublie pas de te déconnecter</strong> quand tu as terminé d'administrer ton site :)</div>
                <!--BOUTON A NE PAS SUPPRIMER-->
                <a href="#menu-toggle" class="visible-xs btn btn-default" id="menu-toggle">Accéder au menu</a>
            </div>

            <div class="row">
                <div class="col-lg-12 btn-admin" id="bouton-admin">
                    <a href="?nouvelle_creation" type="button" class="btn btn-success btn-admin">
                        <p class="glyphicon glyphicon-pencil" aria-hidden="true"></p><br> Ajouter une création
                    </a>
                    <a href="?nouvelle_peinture" type="button" class="btn btn-primary btn-admin">
                        <p class="glyphicon glyphicon-picture" aria-hidden="true"></p><br> Ajouter une peinture
                    </a>
                    <a href="?nouvel_evenement" type="button" class="btn btn-info btn-admin">
                        <p class="glyphicon glyphicon-calendar" aria-hidden="true"></p><br> Ajouter un évènement
                    </a>
                    <a href="?nouveau_temoignage" type="button" class="btn btn-warning btn-admin">
                        <p class="glyphicon glyphicon-comment" aria-hidden="true"></p><br> Ajouter un témoignage
                    </a>
                    <a href="?nouveau_partner" type="button" class="btn btn-danger btn-admin">
                        <p class="glyphicon glyphicon-briefcase" aria-hidden="true"></p><br> Ajouter un partenaire
                    </a>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="vue/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vue/js/bootstrap.min.js"></script>
<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>
</html>
