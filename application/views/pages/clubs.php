<div style="width:800px ; margin-bottom: 50px; margin-top: 50px;margin-left: 100px; text-align: center; background-color: #F5F6CE">
    Clubs</br>

    Liste des clubs de l'Essonne :
    <?php
    //var_dump($data["disciplines_info"]);
    //foreach($data as $d){
    //	echo ($d);
    //}
    ?>
<!--<a href="#num_<?php //echo $c->id;  ?>">#</a>-->
                <!--Par <span class="pseudo_commentaire">-->
    <?php foreach ($clubs_liste as $c): ?>
        <div id="num_<?php echo $c->id; ?>" class="message">
            <p>

                <?php
                echo
                htmlentities($c->nom);
                echo (" - ");
                echo htmlentities($c->desc);
                echo (" - ");
                echo htmlentities($c->ville);
                ?></span>

            </p>
            <!--<div class="contenu_commentaire"><?php
            echo
            nl2br(htmlentities($d->d));
            ?></div>
            </div>-->

        <?php endforeach; ?>

        <?php
        echo "Nombre de clubs : " . $count_clubs;
        ?>
		<p><a href="proposer un club">proposer un club</a></p>
    </div>