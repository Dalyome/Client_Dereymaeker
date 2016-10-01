<!DOCTYPE html>
<html lang="fr">
<?php include "admin_header.php"; ?>
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
                    <?php if ($affiche_modif) {
                        ?>
                        <div class="row">
                            <form name="edition" method="POST" action="" class="well">


                                <div class="form-group"><label for="titre">Nom de la personne qui témoigne</label>
                                    <input class="form-control" id="titre" name="lenom" type="text"
                                           value="<?= $affiche_temoin->nom ?>" required/></div>


                                <div class="form-group"><label for="contenu">Témoignage</label>
                                    <textarea class="form-control" id="contenu" name="letexte"
                                              required><?= $affiche_temoin->texte ?></textarea></div>


                                <input type="submit" class="btn btn-success" name="edition"
                                       value="Modifier le témoignage"/>
                            </form>
                        </div>
                        <?php
                    }

                    if ($affiche_success) {
                        ?>
                        <h2>Félicitations ! Le témoignage a bien été mis à jour !</h2>
                        <p><a href="?temoignage">Retour</a></p>
                        <?php
                    } ?>
                </div>
            </div>
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
