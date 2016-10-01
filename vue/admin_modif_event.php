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
                    <?php if ($affiche_demo) {
                        ?>
                        <h1>Vous etes dans la demo désoler</h1>
                        <p><a href="?evenement">Retour</a></p>
                        <?php
                    }else{
                    ?>
                    <h1><?= $titre ?></h1>
                    <?php if ($affiche_modif) {
                        ?>
                        <div class="row">
                            <form name="edition" method="POST" action="" class="well">


                                <div class="form-group"><label>Nom de l'évènement</label>
                                    <input class="form-control" name="letitre" type="text"
                                           value="<?= $affiche_event->titre ?>" required/></div>


                                <div class="form-group"><label>Date</label>
                                    <input type="text" id="datetimepicker" name="ladate" value="<?= $affiche_event->ladate ?>" required/>
                                </div>
                                <div class="form-group"><label>Date de fin</label>
                                    <input type="text" id="datetimepicker2" name="ladatefin" value="<?= $affiche_event->ladatefin ?>"/>
                                </div>

                                <div class="form-group"><label>Description de l'évènement</label>
                        <textarea class="form-control" name="ladesc" required><?= $affiche_event->description ?>"</textarea></div>

                                <div class="form-group"><label>Lieu de l'évènement</label>
                                    <input class="form-control" type="text" name="lelieu" value="<?= $affiche_event->lieu ?>" required/>
                                </div>


                                <input type="submit" class="btn btn-success" name="edition"
                                       value="Modifier l'évènement"/>
                            </form>
                        </div>
                        <?php
                    }

                    if ($affiche_success) {
                        ?>
                        <h2>Félicitations ! L'évènement a bien été mis à jour !</h2>
                        <p><a href="?evenement">Retour</a></p>
                        <?php
                    } }?>
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
