<?php

session_start();
require_once '../admin/admin_function.php';
verifyIsAdmin();

require_once '../database/db_function.php';

$president = $_POST['president'];
$description = $_POST['description'];
$debut_j = $_POST['debut_j'];
$debut_m = $_POST['debut_m'];
$debut_a = $_POST['debut_a'];
$fin_j = $_POST['fin_j'];
$fin_m = $_POST['fin_m'];
$fin_a = $_POST['fin_a'];

$ma_requete = "INSERT INTO Concours (refPresident, description, dateDebut, dateFin)
VALUES ($president[0], '$description',
        STR_TO_DATE('$debut_j/$debut_m/$debut_a', '%d/%m/%Y'),
        STR_TO_DATE('$fin_j/$fin_m/$fin_a', '%d/%m/%Y'));";

$connexion = db_connect();
$connexion -> query($ma_requete);
$connexion ->close();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css">
    <title>GPI - Ajout concours</title>
</head>

<body>

<h1>Bonjour cher créateur de concours</h1>

<h4>Vous avez envoyé les informations suivantes : </h4>
<p>Président : <?php echo $president; ?></p>
<p>Description : <?php echo $description; ?></p>
<p>Date de début : <?php echo $debut_j . '/' . $debut_m . '/' . $debut_a; ?></p>
<p>Date de fin : <?php echo $fin_j . '/' . $fin_m . '/' . $fin_a; ?></p>

<hr />

<p><a href="admin">Retour au menu administrateur</a></p>
<p>Ou retournez à la page d'accueil <a href="/">ici</a>.</p>


</body>

</html>