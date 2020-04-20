<?php

session_start();
require_once 'admin_function.php';
verifyIsAdmin();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css">
    <title>GPI - Menu administrateur</title>
</head>

<body>

<h1>Bienvenue cher administrateur !</h1>

<p>Ceci est la page dédiée à la gestion du site.</p>

<p><a href="#add_user">Ajout d'utilisateur</a></p>
<p><a href="#add_concours">Création d'un concours</a></p>

<br />
<h3 id="add_user">Ajouter un utilisateur</h3>
<p>Il vous est possible de créer un utilisateur en suivant <a href="ajoutUtilisateur">ce lien</a>.</p>

<br />
<h3 id="add_concours">Créer un concours</h3>
<p>Il vous est possible de créer un concours en suivant <a href="creationConcours.php">ce lien</a>.</p>

</body>
</html>
