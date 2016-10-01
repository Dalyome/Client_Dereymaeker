<!DOCTYPE html>
<html lang="fr">
<?php include "admin_header.php"; ?>
<link rel="stylesheet" type="text/css" href="vue/css/jquery.datetimepicker.css"/>
<script src="vue/js/jquery.js"></script>
<script src="vue/js/jquery.datetimepicker.full.min.js"></script>
</head>
<body>

<div id="wrapper">

    <?php include "admin_menu.php"; ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!--BOUTON A NE PAS SUPPRIMER-->
                    <a href="#menu-toggle" class="visible-xs btn btn-default" id="menu-toggle">Accéder au menu</a>
                    <h1><?= $titre ?></h1>
                    <?php if ($affiche_insertion) {
                        ?>
                        <form class="well" action="" name="miam" method="POST">

                            <div class="form-group"><label>Nom de l'évènement</label>
                                <input class="form-control" type="text" name="letitre" placeholder="Nom de l'évènement"
                                       required/>
                            </div>

                            <div class="form-group"><label>Date de début</label>
                                <input type="text" id="datetimepicker" name="ladate" required/>
                            </div>
                            <div class="form-group"><label>Date de fin (si nécessaire)</label>
                                <input type="text" id="datetimepicker2" name="ladatefin" />
                            </div>

                            <div class="form-group"><label>Description de l'évènement</label>
                        <textarea class="form-control" name="ladesc" required
                                  placeholder="Description de l'évènement"></textarea></div>

                            <div class="form-group"><label>Lieu de l'évènement</label>
                                <input class="form-control" type="text" name="lelieu"
                                       placeholder="adresse, numéro, code postal, ville" required/>
                            </div>
                            <input class="btn btn-success" name="inserer" type="submit" value="Insérer"/><br/>

                        </form>
                        <?php
                    }

                    if ($affiche_success) {
                        ?>
                        <h2>Félicitations ! L'évènement a bien été ajouté !</h2>
                        <p><a class="btn btn-success btn-xs" href="?evenement">Retour</a> - <a class="btn btn-success btn-xs" href="?nouvel_evenement">Ajouter une nouvel évènement</a></p>
                        <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->

<!-- Script pour les dates -->
<script>
    jQuery.datetimepicker.setLocale('fr');
    jQuery('#datetimepicker').datetimepicker({
        format: 'Y-m-d H:i:s'
    });
    jQuery.datetimepicker.setLocale('fr');
    jQuery('#datetimepicker2').datetimepicker({
        format: 'Y-m-d H:i:s'
    });
</script>
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
