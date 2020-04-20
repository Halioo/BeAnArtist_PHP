<?php

require_once '../config.php';

?>


<?php
$title = 'Ajout d\'un media';
require_once '../template/head.php';
?>


<h1>Formulaire d'ajout d'un média</h1>
<br />

<div>
    <form action="/exam/mediatheque/rajout" method="post">
        <h3>Informations pour un média</h3>
        <br />
        <div>
            <label for="nom_media">Nom : </label>
            <input type="text" id="nom_media" name="name"
                   placeholder="" required autofocus>
        </div>
        <br />
        <div>
            <label for="type_media">Type du média : </label>
            <select id="type_media" name="type">
                <option value="livre">Livre</option>
                <option value="cd">CD</option>
                <option value="dvd">DVD</option>
            </select>
        </div>
        <br />
        <div>
            <p><label for="descriptif_media">Descriptif :</label></p>
            <textarea id="descriptif_media" cols="50" rows="5" name="descr"></textarea>
        </div>
        <br />
        <div>
            <input id="emprunt_media" type="checkbox" name="emprunt" checked>
            <label for="emprunt_media">Le média est empruntable</label>
        </div>
        <br />
        <div><button type="submit">Valider</button></div>
    </form>
</div>


<br />
<p><a href="/exam/mediatheque">Retour à la médiathèque</a></p>


<?php
require_once '../template/footer.php';
?>

