<?php

session_start();
if (!isset($_SESSION["username"])) {
    header('Location: /login');
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css">
    <title>GPI - Liste des concours</title>
</head>

<body>

<h1>Bienvenue cher utilisateur !</h1>

<p>Vous trouverez sur cette page la liste des concours.</p>

<table>
    <thead>
    <tr>
        <th>Numéro</th>
        <th>Description</th>
        <th>Etat</th>
        <th>lien vers le concours</th>
    </tr>
    </thead>
    <tbody>
    <?php
    require_once 'database/db_function.php';

    $liste_concours = get_table('EtreUnArtiste.Concours');

    foreach ($liste_concours as $concours) {
        echo '<tr><td>';
        echo $concours['numConcours'];
        echo '</td><td>';
        echo $concours['description'];
        echo '</td><td>';
        echo $concours['etat'];
        echo '</td><td>';
        echo '<a href="/concours?num=' . $concours['numConcours'] . '">Vers le concours</a>';
        echo '</td></tr>';
    }
    ?>
    </tbody>
</table>

<p><a href="/">Retour à l'accueil</a></p>

</body>
</html>
