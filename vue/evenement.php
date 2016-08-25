<?php
include_once "header.php"
?>
<body>
<!--HEADER ROW-->
<?php include 'vue/menu.php' ?>
<!-- /HEADER ROW -->


<div class="container">
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Journal d'évènements</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="span9">
                <!--Blog Post-->

                <?php
if (isset($message)){
    echo "<p>".$message."</p>";
}
                foreach ($affiche_eventf as $rec) {

                    if (($rec->ladate) > $date) {

                        ?>

                        <div class="blog-post">
                            <h2><?= date("d/m/Y à H:i",strtotime($rec->ladate)) ?> - <?= $rec->titre ?></h2>
                            <p> <?= nl2br($rec->description) ?></p>
                            <div class="postmetadata">
                                <ul>
                                    <li>
                                        <i class="icon-bookmark"></i><a target="_blank" href="https://www.google.be/maps/place/<?= $rec->lieu ?>"><?= $rec->lieu ?></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
                <!--/.Blog Post-->

            </div>


            <div class="span3">
                <div class="side-bar">
                    <h3>Evènements passés </h3>
                    <ul class="recent-post">
                        <?php
                        if (isset($messagep)){
                            echo "<p>".$messagep."</p>";
                        }
                        foreach ($affiche_eventp as $rec) {
                            if (($rec->ladate) < $date) { ?>

                                <li><a href=""><strong><?= $rec->titre ?></strong></a>
                                    <small><i class="icon-bookmark"></i><?= $rec->lieu ?><br/><i
                                            class="icon-calendar"></i> <?= $rec->jour . "/" . strftime($rec->mois) . "/" . $rec->annee ?>
                                    </small>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <!--==================-->
        </div>
    </div>
    <!--Footer
    ==========================-->
    <?php
    include_once "footer.php"
    ?>
    <!--/.Footer-->
</body>
</html>