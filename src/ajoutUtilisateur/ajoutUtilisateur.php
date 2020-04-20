<?php

session_start();
require_once '../admin/admin_function.php';
verifyIsAdmin();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css">
    <title>GPI - Ajout utilisateur</title>
</head>

<body>

<div>
    <form method="post" action="rAddUser">
        <h1>Ajouter un utilisateur</h1>
        <div>
            <label for="nom">Nom : </label>
            <input type="text" id="nom" name="nom"
                   placeholder="Nom" required autofocus>
        </div>
        <div>
            <label for="prenom">Prénom : </label>
            <input type="text" id="prenom" name="prenom"
                   placeholder="Prénom" required>
        </div>
        <div>
            <label for="adresse">Adresse : </label>
            <input type="text" id="adresse" name="adresse"
                   placeholder="Adresse" required>
        </div>
        <div>
            <label for="login">Identifiant : </label>
            <input type="text" id="login" name="login"
                   placeholder="Identifiant" required>
        </div>
        <div>
            <label for="mdp">Mot de passe : </label>
            <input type="password" id="mdp" name="mdp"
                   placeholder="Mot de passe" required>
        </div>
        <div><button type="submit">Ajouter l'utilisateur</button></div>
    </form>
</div>

<p><a href="admin">Annuler</a></p>

</body>

</html>
