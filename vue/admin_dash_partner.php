<!DOCTYPE html>
<html lang="fr">

<?php include "admin_header.php"; ?>

<script>
    function confirmDelete(nom, id) {
        var question = confirm("Voulez-vous vraiment supprimer le partenaire « " + nom + " »");
        if (question) {
            document.location.href = "?delete_partner=" + id;
        }
    }
</script>
<!--je ferme la balise là ici au cas où vous souhaitier rajouter un truc (exemple : un fichier javascript) qui ne devrait pas être présent sur toutes les pages admin.-->
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
                    <p><a href="?nouveau_partner" type="button" class="btn btn-default">Nouveau partenaire à
                            insérer</a></p>
                        <?php
                    }else{
                    ?>
                    <p><a href="?nouveau_partner" type="button" class="btn btn-default">Nouveau partenaire à
                            insérer</a></p>
                    <div class="alert alert-info" role="alert">
                        la suppression est retirer dans la demo
                    </div></p>

                        <?php
                        }
                        ?>
                    <table class="table table-striped">
                        <tr>
                            <th width="10%">Nom</th>
                            <th>Lien</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>

                        <?php
                        foreach ($affiche_partner as $part) {
                            ?>
                            <tr>
                                <td><?= $part->nom ?></td>
                                <td><?= substr(nl2br($part->logohref), 0, 50) ?>...</td>

                                <td><a href="?modif_partner=<?= $part->id ?>"><img src="vue/img/modify.png" alt="modifier" title="modifier"/></a></td>
                                <?php
                                if($_SESSION['droit'] ) {?>
                                <td><img onmouseover="this.style.cursor='pointer';" onclick='confirmDelete("<?= $part->nom ?>",<?= $part->id ?>)' alt="supprimer" title="supprimer" src="vue/img/delete.png"/>
                                </td>
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
