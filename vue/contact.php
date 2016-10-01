<?php
include_once "header.php"
?>
<body>
<?php include("menu.php"); ?>
<div class="container">
    <!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>
                    Contact
                </h1>
            </div>
        </div>
    </div>

    <div class="container" id="logorappelbottom">
        <div class="row">
            <div class="col-sm-12">
                <div class="span2 hidden-xs hidden-sm"><img src="vue/img/contact.jpg" alt="sophie dereymaeker"></div>
                <div class="span6">
                    <?php


                    if (isset($message)) {
                        echo $message;
                    } else {
                        ?>

                        <form class="well" method="POST" action="">
                            <div class="form-group">
                                <label for="lenom">Votre nom</label>
                                <input id="lenom" class="form-control" name="lenom" type="text" placeholder="Votre nom" required/>
                            </div>

                            <div class="form-group">
                                <label for="lemail">Votre e-mail</label>
                                <input id="lemail" class="form-control" name="lemail" type="text" placeholder="Votre email"
                                       required/>
                            </div>

                            <div class="form-group">
                                <label for="lobjet">Veuillez choisir l'objet de votre message</label>
                                <select id="lobjet" name="lobjet">
                                    <option value="conseillere en image">Conseils en image</option>
                                    <option value="peintures">Peintures</option>
                                    <option value="bijoux et customisation">Créations</option>
                                    <option value="demande de devis">Devis</option>
                                    <option value="apporter un temoignage">Apporter un témoignage</option>
                                    <option value="autres">Autres</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="letexte" placeholder="Votre message"></textarea>
                            </div>

                            <input type="submit" value="Envoyer"/>
                        </form>
                        <?php
                    }
                    ?>
                </div>
                <div class="span4">
                    <h2>Disponibilités</h2>
                    <p><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> +32 478 200 872<br/>Joignable
                        du lundi au mercredi de 9h à 19h.</p>
                    <p>N° TVA : BE 0859.271.827</p>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once "footer.php"
    ?>

</body>
</html>


