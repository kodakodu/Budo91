<div style="width:800px; margin-bottom: 50px;margin-left: 100px; margin-top: 50px; text-align: center; background-color: #F5F6CE">
    Disciplines</br>

    Liste des disciplines disponibles dans le département de l'essonne :
    <?php
    //var_dump($data["disciplines_info"]);
    //foreach($data as $d){
    //	echo ($d);
    //}
    ?>

    <?php foreach ($disciplines_liste as $d): ?>
        <div id="num_<?php echo $d->id; ?>" class="message">
            <p>
                <a href="#num_<?php echo $d->id; ?>">#</a>
                Par <span class="pseudo_commentaire"><?php
                    echo
                    htmlentities($d->nom);
                    ?></span>

            </p>
            <!--<div class="contenu_commentaire"><?php
            echo
            nl2br(htmlentities($d->d));
            ?></div>
            </div>-->

<?php endforeach; ?>
    </div>