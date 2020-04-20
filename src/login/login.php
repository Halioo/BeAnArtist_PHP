<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css">
    <title>GPI - Connexion</title>
</head>

<body>

<div>
    <form class="login" method="post" action="rLog">
        <h1>Connectez-vous</h1>
        <div>
            <label for="inputEmail">Identifiant</label>
            <input type="text" id="inputEmail" name="login"
                   placeholder="Identifiant" required autofocus>
        </div>
        <div>
            <label for="inputPassword">Mot de passe</label>
            <input type="password" id="inputPassword" name="mdp"
                   placeholder="Mot de passe" required>
        </div>
        <div><button type="submit">Se connecter</button></div>
    </form>
</div>

</body>

</html>