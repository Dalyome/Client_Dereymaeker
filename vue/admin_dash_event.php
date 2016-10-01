<!DOCTYPE html>
<html lang="fr">

<?php include "admin_header.php"; ?>
<script>
    function confirmDelete(titre, id) {
        var question = confirm("Voulez-vous vraiment supprimer l'évènement « " + titre + " »");
        if (question) {
            document.location.href = "?delete_evenement=" + id;
        }
    }
</script>
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
                    <?php  if($_SESSION['droit'] ) { ?>
                        <p><a href="?nouvel_evenement" type="button" class="btn btn-default">Nouvel évènement à
                                insérer</a></p>
                        <?php
                    }else{
                    ?>
                        <p><a href="?nouvelle_creation" type="button" class="btn btn-default">Nouvelle création à
                                insérer</a></p>
                        <p>
                        <div class="alert alert-info" role="alert">
                            la suppression est retirer dans la demo
                        </div></p>
                    <?php
                    }
                    ?>
                    <table class="table table-striped">
                        <tr>
                            <th width="15%">Nom de l'évènement</th>
                            <th width="10%">Début</th>
                            <th width="10%">Fin</th>
                            <th>Description</th>
                            <th>Adresse</th>
                            <th></th>
                            <th></th>
                        </tr>

                        <?php
                        foreach ($affiche_event as $event) {
                            ?>
                            <tr>
                                <td><?= $event->titre ?></td>
                                <td><?= date("d/m/Y à H:i",strtotime($event->ladate)) ?></td>
                                <td><?php if (($event->ladatefin) != NULL){
                                        echo date("d/m/Y",strtotime($event->ladatefin));
                                    }
                                         ?></td>
                                <td><?= substr(nl2br($event->description), 0, 250) ?>...</td>
                                <td><?= $event->lieu ?></td>
                                <td><a href="?modif_evenement=<?= $event->id ?>"><img src="vue/img/modify.png" alt="modifier" title="modifier"/></a></td>
                                <?php
                                if($_SESSION['droit'] ) {?>
                                <td><img onmouseover="this.style.cursor='pointer';" onclick='confirmDelete("<?= $event->titre ?>",<?= $event->id ?>)' src="vue/img/delete.png" alt="supprimer" title="supprimer"/>    </td>
                                    <?php
                                    }else{
                                    ?>
                                <td><img src="vue/img/delete.png"/><br/><td>
                                    <?php
                                    }
                                    ?>

                            </tr>
                            <?php
                        }
                        ?>
                    </table>
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
