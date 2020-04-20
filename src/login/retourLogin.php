<?php

require_once '../database/db_function.php';

$login = $_POST['login'];
$mdp = $_POST['mdp'];

// requête à la base de données
$maRequete = 'SELECT u.numUtilisateur, u.login, u.motDePasse
              FROM Utilisateur u
              WHERE u.login = \'' . $login . '\';';

$connexion = db_connect();
if ($result = $connexion -> query($maRequete)) {
    $resultat = $result -> fetch_assoc();
    $result -> free();
} else {
    echo "la requête ne s'est pas bien effectuée";
}
// On ferme la connexion à la base de données
$connexion->close();

if (isset($resultat)) {
    session_start();
    $_SESSION['username'] = $resultat['login'];
    $_SESSION['numUser'] = $resultat['numUtilisateur'];
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css">
    <title>GPI - Connexion</title>
</head>

<body>

<h1>Bonjour cher utilisateur</h1>

<p>Vous avez envoyé les informations suivantes : </p>
<p>identifiant : <?php echo $login; ?></p>
<p>mot de passe : <?php echo $mdp; ?></p>
<hr />

<?php if (isset($resultat)) {; ?>

    <h4>Félicitation ! Vous êtes enregistré dans notre base de données</h4>
    <p>Votre identifiant est :
        <?php echo $resultat['login']; ?>
    </p>
    <p>Votre mot de passe est :
        <?php echo $resultat['motDePasse']; ?>
    </p>
    <p>Vous pouvez accéder à la <a href="listeConcours">liste des concours</a>.</p>

    <?php if ($resultat['numUtilisateur'] == 1) { ?>
    <h4>Partie administrateur</h4>
    <p>Vous êtes administrateur de ce site, vous pouvez accéder au panneau de contrôle par
        <a href="admin">ce lien</a>.
    </p>
    <?php } ?>

<?php } else { ?>
    <p>Vous n'êtes pas connecté, ou votre identifiant est incorrect.
    veuillez tenter de vous <a href="login">reconnecter</a>.</p>
    <p>Ou retournez à la page d'accueil <a href="/">ici</a>.</p>
<?php } ?>

</body>

</html>