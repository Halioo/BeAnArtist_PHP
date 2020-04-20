<?php

require_once '../config.php';
require_once '../database.php';

$id_media = $_GET['id'];
$name = $_POST['name'];
$fin_j = $_POST['date_j'];
$fin_m = $_POST['date_m'];
$fin_a = $_POST['date_a'];
$debut_j = date('d');
$debut_m = date('m');
$debut_a = date('Y');

$requete =
    "INSERT INTO Emprunte " .
    "(numero_media, nom_emprunteur, date_debut, date_fin)" .
    "VALUES " .
    "($id_media, '$name', " .
    "STR_TO_DATE('$debut_j/$debut_m/$debut_a', '%d/%m/%Y'), " .
    "STR_TO_DATE('$fin_j/$fin_m/$fin_a', '%d/%m/%Y'));";


try { post_info($requete); }
catch (Exception $e) {echo 'La requete ne s\'est pas bien passée';}

?>


<?php
$title = 'Ajout d\'un media';
require_once '../template/head.php';
?>


<h1>Retour du Formulaire d'emprunt d'un media</h1>

<h3>Voici les informations que vous avez envoyé :</h3>

<p>Nom : <?php echo $name; ?></p>
<p>Date de début : <?php echo "$debut_j/$debut_m/$debut_a"; ?></p>
<p>Date de fin : <?php echo "$fin_j/$fin_m/$fin_a"; ?></p>

<h3>La requête générée est la suivante :</h3>

<pre><?php echo $requete; ?></pre>


<br />
<p><a href="/exam/mediatheque">Retour à la médiathèque</a></p>


<?php
require_once '../template/footer.php';
?>

