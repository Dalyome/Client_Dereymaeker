<!DOCTYPE html>
<html lang="fr">

<?php include "admin_header.php"; ?>
<!--je ferme la balise là ici au cas où vous souhaitier rajouter un truc (exemple : un fichier javascript) qui ne devrait pas être présent sur toutes les pages admin.-->

<script>
    function confirmDelete(nom, id) {
        var question = confirm("Voulez-vous vraiment supprimer la photo « " + nom + " »");
        if (question) {
            document.location.href = "?delete_peinture=" + id;
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
                    <p><a href="?nouvelle_peinture" type="button" class="btn btn-default">Nouvelle peinture à insérer</a></p>
                    <p><div class="alert alert-info" role="alert">Sur cette page, lorsque tu as vendu une oeuvre, il te suffit de cocher la (ou les) case(s) <strong>[vendu]</strong> correspondant aux oeuvres vendues, puis de cliquer sur le bouton <strong>[Modifier la galerie]</strong>. Cela affichera la mention "vendu" à côté de tes oeuvres sur ton site.<br/>
                    Si tu souhaites ne plus montrer une oeuvre comme étant vendue, il te suffit de décocher la case <strong>[vendu]</strong>, puis de nouveau, de valider les modifications en cliquant sur le bouton <strong>[Modifier la galerie]</strong>.</div></p>
                    <?php if ($affiche_modif) {
                        ?>
                        <div class="row">
                            <?php
                            foreach ($affiche_peinture as $creat) {
                                ?>
                                <div class="col-md-4 admin-tofs">
                                    <img src='vue/img/peinture/<?= $creat->imgsrc ?>' alt='<?= $creat->id ?>'
                                         title='<?= $creat->nom ?>' height="120"/>
                                    <img onmouseover="this.style.cursor='pointer';"
                                         onclick='confirmDelete("<?= $creat->nom ?>",<?= $creat->id ?>)' alt="supprimer"
                                         title="supprimer" src="vue/img/delete.png"/><br/>

                                    <?php
                                    //on checke la case vendu de ceux qui le sont
                                    $vendu = $creat->vendu;
                                    $vend = "";

                                    if ($vendu == 1) {
                                        $vend = "checked";
                                    } elseif ($vendu == 0) {
                                        $vend = "";
                                    }
                                    ?>
                                    <form method="post">
                                        <label>vendu</label>
                                        <input type="checkbox" name="vendu[]" value="<?= $creat->id ?>" <?= $vend ?>/>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="row">
                            <input type="submit" class="btn btn-success" name="edition"
                                   value="Modifier la galerie"/>
                            </form>
                        </div>
                        <?php
                    }
                    if ($affiche_success) {
                        ?>
                        <h2>Félicitations ! La galerie peinture a bien été mis à jour !</h2>
                        <p><a href="javascript:history.go(-1)">Retour</a></p>
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
