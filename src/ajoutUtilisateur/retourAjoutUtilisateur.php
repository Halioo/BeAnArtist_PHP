<?php

session_start();
require_once '../admin/admin_function.php';
verifyIsAdmin();

require_once '../database/db_function.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$login = $_POST['login'];
$mdp = $_POST['mdp'];

$connexion = db_connect();

$ma_requete = "INSERT INTO Utilisateur (nom, prenom, adresse, login, motDePasse) VALUES ('$nom', '$prenom', '$adresse', '$login', '$mdp');";

$connexion -> query($ma_requete);
$connexion ->close();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css">
    <title>GPI - Ajout utilisateur</title>
</head>

<body>

<h1>Bonjour cher utilisateur</h1>

<h4>Vous avez envoyé les informations suivantes : </h4>
<p>Nom : <?php echo $nom; ?></p>
<p>Prénom : <?php echo $prenom; ?></p>
<p>Adresse : <?php echo $adresse; ?></p>
<p>Identifiant : <?php echo $login; ?></p>
<p>Mot de passe : <?php echo $mdp; ?></p>
<hr />

<pre>
<?php echo $ma_requete; ?>
</pre>

<p><a href="admin">Retour au menu administrateur</a></p>
<p>Ou retournez à la page d'accueil <a href="/">ici</a>.</p>


</body>

</html>