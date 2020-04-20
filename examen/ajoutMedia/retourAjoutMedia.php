<?php

require_once '../config.php';
require_once '../database.php';

$name = $_POST['name'];
$type = $_POST['type'];
$descr = $_POST['descr'];

if (isset($_POST['emprunt'])) {
    $requete =
        "INSERT INTO Mediatheque " .
        "(nom, type, descriptif, empruntable) " .
        "VALUES " .
        "('$name', '$type', '$descr', true);";
} else {
    $requete =
        "INSERT INTO Mediatheque " .
        "(nom, type, descriptif, empruntable) " .
        "VALUES " .
        "('$name', '$type', '$descr', false);";
}

try { post_info($requete); }
catch (Exception $e) {echo 'La requete ne s\'est pas bien passée';}

?>


<?php
$title = 'Ajout d\'un media';
require_once '../template/head.php';
?>


<h1>Retour du Formulaire d'ajout d'un media</h1>

<h3>Voici les informations que vous avez envoyé :</h3>

<p>Nom : <?php echo $name; ?></p>
<p>Type : <?php echo $type; ?></p>
<p>Descriptif : <?php echo $descr; ?></p>

<h3>La requête générée est la suivante :</h3>

<pre><?php echo $requete; ?></pre>


<br />
<p><a href="/exam/mediatheque">Retour à la médiathèque</a></p>


<?php
require_once '../template/footer.php';
?>

